/**
 * Main JavaScript for Kersten M. Neuman Portfolio
 *
 * Minimal single-page portfolio - no form, no scrolling
 */

$(document).ready(function() {
  'use strict';

  // Fix for mobile browsers where 100vh doesn't account for browser chrome
  function setMobileViewportHeight() {
    var vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', vh + 'px');
  }

  setMobileViewportHeight();

  // Update on resize (debounced)
  var resizeTimeout;
  $(window).on('resize', function() {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(setMobileViewportHeight, 150);
  });
});
