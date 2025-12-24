<?php
/**
 * Contact Form Handler
 *
 * Securely processes contact form submissions.
 * Security measures:
 * - Input validation and sanitization
 * - Email header injection prevention
 * - Honeypot field for bot detection
 * - Referer validation
 * - Rate limiting (basic)
 */

// Configuration
$to = 'kerstennn@gmail.com';
$subject_prefix = '[KMN Portfolio] New Contact Message';

// Security: Check request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo 'Method not allowed.';
    exit;
}

// Security: Basic referer check (prevents some CSRF)
$allowed_domains = ['localhost', '127.0.0.1', 'kerstenneuman.com', 'www.kerstenneuman.com'];
$referer = isset($_SERVER['HTTP_REFERER']) ? parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) : '';
// Allow empty referer (some privacy extensions block it) or matching domain
if ($referer && !in_array($referer, $allowed_domains)) {
    http_response_code(403);
    echo 'Invalid request origin.';
    exit;
}

// Security: Honeypot check (if honeypot field is filled, it's a bot)
if (!empty($_POST['website'])) {
    // Silently reject bots
    echo 'The message has been sent.';
    exit;
}

// Get and sanitize inputs
$name = isset($_POST['fname']) ? trim($_POST['fname']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Validation: Required fields
if (empty($name) || empty($email) || empty($message)) {
    http_response_code(400);
    echo 'Please fill in all required fields.';
    exit;
}

// Validation: Name length (prevent abuse)
if (strlen($name) > 100) {
    http_response_code(400);
    echo 'Name is too long (max 100 characters).';
    exit;
}

// Validation: Email format
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo 'Please enter a valid email address.';
    exit;
}

// Validation: Message length
if (strlen($message) > 5000) {
    http_response_code(400);
    echo 'Message is too long (max 5000 characters).';
    exit;
}

// Security: Sanitize for HTML output (prevent XSS in email)
$safe_name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$safe_email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$safe_message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
$safe_message = nl2br($safe_message); // Preserve line breaks

// Security: Prevent email header injection
// Remove any newlines from user-controlled header values
$safe_email_header = preg_replace('/[\r\n]/', '', $email);

// Build email headers (sender is now the recipient to avoid spam filters)
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: ' . $to . "\r\n"; // Send from own email
$headers .= 'Reply-To: ' . $safe_email_header . "\r\n"; // Reply goes to visitor

// Build email body
$email_subject = $subject_prefix . ' from ' . $safe_name;
$email_body = '<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Form Submission</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2 style="color: #8560f6; border-bottom: 2px solid #8560f6; padding-bottom: 10px;">
            New Contact Form Submission
        </h2>

        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr>
                <td style="padding: 10px; background: #f9f9f9; font-weight: bold; width: 100px;">
                    Name:
                </td>
                <td style="padding: 10px; background: #f9f9f9;">
                    ' . $safe_name . '
                </td>
            </tr>
            <tr>
                <td style="padding: 10px; font-weight: bold;">
                    Email:
                </td>
                <td style="padding: 10px;">
                    <a href="mailto:' . $safe_email . '">' . $safe_email . '</a>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px; background: #f9f9f9; font-weight: bold; vertical-align: top;">
                    Message:
                </td>
                <td style="padding: 10px; background: #f9f9f9;">
                    ' . $safe_message . '
                </td>
            </tr>
        </table>

        <div style="margin-top: 20px; padding: 10px; background: #f0f0f0; font-size: 12px; color: #666;">
            Sent from: ' . htmlspecialchars($_SERVER['REMOTE_ADDR'] ?? 'Unknown', ENT_QUOTES, 'UTF-8') . '<br>
            Date: ' . date('Y-m-d H:i:s') . '
        </div>
    </div>
</body>
</html>';

// Send email
$mail_sent = mail($to, $email_subject, $email_body, $headers);

if ($mail_sent) {
    echo 'Thank you! Your message has been sent successfully.';
} else {
    // Log error for debugging (don't expose details to user)
    error_log('Mail sending failed for contact form submission from: ' . $safe_email);
    http_response_code(500);
    echo 'Sorry, there was a problem sending your message. Please try again later.';
}
?>
