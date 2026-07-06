/* ══════════════════════════════════════════════════════════════
   panel-theme.js  —  User panel UX enhancements
   • Page transition
   • Navbar scroll shadow (mobile)
   • Button ripple effect
   ══════════════════════════════════════════════════════════════ */

(function () {
  'use strict';

  /* ── Mobile navbar scroll shadow ──────────────────────────── */
  var togglerBar = document.querySelector('.fancynavbar-togglerbar');
  if (togglerBar) {
    window.addEventListener('scroll', function () {
      togglerBar.style.boxShadow = (window.scrollY || window.pageYOffset) > 10
        ? '0 3px 20px rgba(0,0,0,0.40)'
        : '0 2px 12px rgba(0,0,0,0.28)';
    }, { passive: true });
  }

  /* ── Button ripple on click ───────────────────────────────── */
  document.addEventListener('click', function (e) {
    var btn = e.target.closest('.btn-dark, .btn-outline-dark');
    if (!btn || btn.disabled) return;

    var rect = btn.getBoundingClientRect();
    var size = Math.max(rect.width, rect.height) * 1.6;
    var x    = e.clientX - rect.left  - size / 2;
    var y    = e.clientY - rect.top   - size / 2;

    var el = document.createElement('span');
    el.style.cssText = [
      'position:absolute',
      'pointer-events:none',
      'border-radius:50%',
      'background:rgba(255,255,255,0.22)',
      'width:'  + size + 'px',
      'height:' + size + 'px',
      'left:'   + x    + 'px',
      'top:'    + y    + 'px',
      'transform:scale(0)',
      'animation:panelRipple 0.55s ease-out forwards'
    ].join(';');

    btn.style.position = btn.style.position || 'relative';
    btn.appendChild(el);
    setTimeout(function () { if (el.parentNode) el.parentNode.removeChild(el); }, 600);
  });

  /* ── Smooth focus outline for form controls ───────────────── */
  document.addEventListener('focusin', function (e) {
    if (e.target.matches('.form-control')) {
      e.target.style.outline = 'none';
    }
  });

  /* ── Auto-dismiss alerts after 6 seconds ─────────────────── */
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.alert:not(.alert-danger)').forEach(function (el) {
      setTimeout(function () {
        el.style.transition = 'opacity 0.5s ease, transform 0.5s ease, max-height 0.5s ease';
        el.style.opacity    = '0';
        el.style.transform  = 'translateY(-6px)';
        setTimeout(function () {
          el.style.maxHeight = '0';
          el.style.marginBottom = '0';
          el.style.padding = '0';
          setTimeout(function () { if (el.parentNode) el.parentNode.removeChild(el); }, 500);
        }, 500);
      }, 6000);
    });
  });

})();
