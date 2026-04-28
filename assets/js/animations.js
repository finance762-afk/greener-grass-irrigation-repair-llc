/**
 * animations.js — Scroll Reveal + Counter Animations
 * Greener Grass Irrigation Repair, LLC
 */

(function () {
  'use strict';

  // ── Scroll Reveal ──────────────────────────────────────────────────────────
  const revealObserver = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          revealObserver.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
  );

  function initReveal() {
    const els = document.querySelectorAll('[data-animate]');
    els.forEach(function (el, i) {
      // Stagger grid children
      const parent = el.parentElement;
      if (parent && parent.classList.contains('stagger-children')) {
        const siblings = Array.from(parent.children);
        const idx = siblings.indexOf(el);
        el.style.transitionDelay = Math.min(idx * 100, 500) + 'ms';
      }
      revealObserver.observe(el);
    });
  }

  // ── Counter Animation ──────────────────────────────────────────────────────
  function animateCounter(el) {
    const target   = parseFloat(el.dataset.counter);
    const suffix   = el.dataset.suffix || '';
    const prefix   = el.dataset.prefix || '';
    const decimals = String(target).includes('.') ? String(target).split('.')[1].length : 0;
    const duration = 1800;
    const step     = 16;
    const steps    = Math.ceil(duration / step);
    let current    = 0;
    const increment = target / steps;

    const timer = setInterval(function () {
      current += increment;
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }
      el.textContent = prefix + current.toFixed(decimals) + suffix;
    }, step);
  }

  const counterObserver = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          counterObserver.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.5 }
  );

  function initCounters() {
    document.querySelectorAll('[data-counter]').forEach(function (el) {
      counterObserver.observe(el);
    });
  }

  // ── Init on DOM Ready ──────────────────────────────────────────────────────
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function () {
      initReveal();
      initCounters();
    });
  } else {
    initReveal();
    initCounters();
  }

})();
