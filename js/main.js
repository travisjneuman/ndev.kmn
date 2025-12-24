/**
 * Main JavaScript for Kersten M. Neuman Portfolio
 *
 * Features:
 * - Responsive viewport height calculation
 * - Mobile menu toggle
 * - Contact form AJAX submission with validation
 */

$(document).ready(function() {
  'use strict';

  // ======================
  // Viewport Calculations
  // ======================

  /**
   * Sets fullscreen elements to window height
   * Accounts for header when calculating fit screen areas
   */
  function setViewportHeights() {
    var windowHeight = window.innerHeight;
    var headerHeight = $('.default-header').height() || 0;
    var fitscreen = windowHeight - headerHeight;

    $('.fullscreen').css('height', windowHeight);
    $('.fitscreen').css('height', fitscreen);
  }

  // Set initial heights
  setViewportHeights();

  // Update on resize (debounced)
  var resizeTimeout;
  $(window).on('resize', function() {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(setViewportHeights, 150);
  });

  // ======================
  // Contact Form Handler
  // ======================

  var $form = $('#myForm');
  var $submitBtn = $form.find('button[type="submit"]');
  var $alertMsg = $('.alert-msg');
  var originalBtnText = $submitBtn.html();

  /**
   * Validates email format
   * @param {string} email - Email address to validate
   * @returns {boolean} - True if valid
   */
  function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }

  /**
   * Shows form feedback message
   * @param {string} message - Message to display
   * @param {string} type - 'success' or 'error'
   */
  function showMessage(message, type) {
    $alertMsg
      .removeClass('success error')
      .addClass(type)
      .text(message) // Use .text() to prevent XSS
      .fadeIn();
  }

  /**
   * Resets submit button to original state
   */
  function resetButton() {
    $submitBtn
      .html(originalBtnText)
      .prop('disabled', false);
  }

  // Handle form submission
  $form.on('submit', function(e) {
    e.preventDefault();

    // Get form values
    var name = $('#fname').val().trim();
    var email = $('#email').val().trim();
    var message = $('#message').val().trim();

    // Client-side validation
    if (!name) {
      showMessage('Please enter your name.', 'error');
      $('#fname').focus();
      return;
    }

    if (!email || !isValidEmail(email)) {
      showMessage('Please enter a valid email address.', 'error');
      $('#email').focus();
      return;
    }

    if (!message) {
      showMessage('Please enter a message.', 'error');
      $('#message').focus();
      return;
    }

    // Disable button and show loading state
    $submitBtn
      .html('<span class="mr-10">Sending...</span><span class="lnr lnr-arrow-right"></span>')
      .prop('disabled', true);
    $alertMsg.fadeOut();

    // Submit form via AJAX
    $.ajax({
      url: 'mail.php',
      type: 'POST',
      dataType: 'html',
      data: $form.serialize(),
      timeout: 30000, // 30 second timeout
      success: function(response) {
        showMessage(response, 'success');
        $form.trigger('reset');
        resetButton();
      },
      error: function(xhr, status, error) {
        var errorMessage = 'Sorry, there was a problem sending your message.';

        if (status === 'timeout') {
          errorMessage = 'Request timed out. Please try again.';
        } else if (xhr.responseText) {
          errorMessage = xhr.responseText;
        }

        showMessage(errorMessage, 'error');
        resetButton();
        console.error('Form submission error:', status, error);
      }
    });
  });

  // ======================
  // Smooth Scroll (for any anchor links)
  // ======================

  $('a[href^="#"]:not([href="#"])').on('click', function(e) {
    var target = $(this.getAttribute('href'));
    if (target.length) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top - 80
      }, 500);
    }
  });
});
