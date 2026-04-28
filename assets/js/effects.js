/**
 * effects.js — Ripple Effect, Magnetic Buttons
 * Greener Grass Irrigation Repair, LLC
 */

(function () {
  'use strict';

  // ── Button Ripple ──────────────────────────────────────────────────────────
  function addRipple(e) {
    const btn    = e.currentTarget;
    const rect   = btn.getBoundingClientRect();
    const size   = Math.max(rect.width, rect.height) * 1.5;
    const x      = e.clientX - rect.left - size / 2;
    const y      = e.clientY - rect.top  - size / 2;

    const ripple = document.createElement('span');
    ripple.style.cssText = [
      'position:absolute',
      'pointer-events:none',
      'border-radius:50%',
      'background:rgba(255,255,255,0.28)',
      'width:'  + size + 'px',
      'height:' + size + 'px',
      'left:'   + x + 'px',
      'top:'    + y + 'px',
      'transform:scale(0)',
      'animation:ripple-expand 0.55s ease-out forwards',
    ].join(';');

    btn.appendChild(ripple);
    ripple.addEventListener('animationend', function () { ripple.remove(); });
  }

  function initRipples() {
    // Inject keyframes once
    if (!document.getElementById('ripple-style')) {
      const style = document.createElement('style');
      style.id = 'ripple-style';
      style.textContent = '@keyframes ripple-expand { to { transform: scale(1); opacity: 0; } }';
      document.head.appendChild(style);
    }

    document.querySelectorAll('.btn, .btn-primary, .btn-outline, .btn-nav-cta, .btn-footer-cta, .btn-mobile-cta').forEach(function (el) {
      if (el.dataset.rippleInit) return;
      el.dataset.rippleInit = '1';
      // overflow:hidden is set in CSS; just add the listener
      el.addEventListener('click', addRipple);
    });
  }

  // ── Magnetic CTA (desktop only) ────────────────────────────────────────────
  function initMagnetic() {
    if (window.matchMedia('(hover: none)').matches) return;

    document.querySelectorAll('[data-magnetic]').forEach(function (el) {
      el.addEventListener('mousemove', function (e) {
        const rect   = el.getBoundingClientRect();
        const cx     = rect.left + rect.width / 2;
        const cy     = rect.top  + rect.height / 2;
        const dx     = (e.clientX - cx) * 0.28;
        const dy     = (e.clientY - cy) * 0.28;
        el.style.transform = 'translate(' + dx + 'px, ' + dy + 'px)';
      });
      el.addEventListener('mouseleave', function () {
        el.style.transform = '';
      });
    });
  }

  // ── FAQ Accordion ──────────────────────────────────────────────────────────
  function initFaqAccordion() {
    document.querySelectorAll('.faq-item').forEach(function (item) {
      const question = item.querySelector('.faq-question');
      const answer   = item.querySelector('.faq-answer');
      if (!question || !answer) return;

      question.setAttribute('role', 'button');
      question.setAttribute('tabindex', '0');
      question.setAttribute('aria-expanded', 'false');

      function toggle() {
        const expanded = question.getAttribute('aria-expanded') === 'true';
        question.setAttribute('aria-expanded', String(!expanded));
        item.classList.toggle('is-open', !expanded);
      }

      question.addEventListener('click', toggle);
      question.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); toggle(); }
      });
    });
  }

  // ── Init ───────────────────────────────────────────────────────────────────
  document.addEventListener('DOMContentLoaded', function () {
    initRipples();
    initMagnetic();
    initFaqAccordion();
  });

})();
