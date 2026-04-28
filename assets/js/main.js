/**
 * main.js — Page-specific initializations deferred from footer.php
 * Greener Grass Irrigation Repair, LLC
 *
 * Swiper instances are initialized inline on each page that uses carousels.
 * This file is a coordination stub — add site-wide behaviors here.
 */

(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {

    // Re-run ripple on any dynamically added buttons (defensive)
    // (effects.js handles initial batch; this catches dynamic content)

    // Smooth scroll for anchor links (polyfill for older Safari)
    document.querySelectorAll('a[href^="#"]').forEach(function (link) {
      link.addEventListener('click', function (e) {
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          e.preventDefault();
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      });
    });

  });

})();
