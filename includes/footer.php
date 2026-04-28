<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>

</main><!-- /#main-content -->

<!-- ════════════════════════════════════════════════════════════════════════════
     FOOTER — NAP: (817) 555-0100 | 1234 Sprinkler Way, Fort Worth, TX 76102
     ════════════════════════════════════════════════════════════════════════════ -->
<footer class="site-footer" itemscope itemtype="https://schema.org/LocalBusiness">

  <!-- Footer Top Grid ─────────────────────────────────────────────────────── -->
  <div class="footer-top">
    <div class="container">
      <div class="footer-grid">

        <!-- Column 1: Brand & Trust ──────────────────────────────────────── -->
        <div class="footer-col footer-col-brand">
          <a href="/" class="footer-logo" aria-label="<?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?> — Home">
            <span class="footer-logo-mark" aria-hidden="true">GG</span>
            <span class="footer-logo-text">
              <span class="footer-logo-name"><?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?></span>
              <span class="footer-logo-tag"><?php echo htmlspecialchars($tagline, ENT_QUOTES, 'UTF-8'); ?></span>
            </span>
          </a>

          <p class="footer-desc">
            Fort Worth's irrigation repair specialists. Same-day service, transparent pricing, and over <?php echo $yearsInBusiness; ?> years keeping North Texas lawns green.
          </p>

          <!-- Trust Badges -->
          <div class="footer-badges">
            <div class="footer-badge">
              <i data-lucide="shield-check" aria-hidden="true"></i>
              <span>Licensed &amp; Insured</span>
            </div>
            <div class="footer-badge">
              <i data-lucide="clock" aria-hidden="true"></i>
              <span><?php echo $yearsInBusiness; ?> Years Experience</span>
            </div>
            <div class="footer-badge">
              <i data-lucide="dollar-sign" aria-hidden="true"></i>
              <span>Free Estimates</span>
            </div>
          </div>

          <!-- Social Links -->
          <div class="footer-social">
            <a href="<?php echo htmlspecialchars($social['facebook'], ENT_QUOTES, 'UTF-8'); ?>"
               target="_blank" rel="noopener noreferrer"
               aria-label="<?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?> on Facebook">
              <i data-lucide="facebook" aria-hidden="true"></i>
            </a>
            <a href="<?php echo htmlspecialchars($social['instagram'], ENT_QUOTES, 'UTF-8'); ?>"
               target="_blank" rel="noopener noreferrer"
               aria-label="<?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?> on Instagram">
              <i data-lucide="instagram" aria-hidden="true"></i>
            </a>
            <a href="<?php echo htmlspecialchars($social['google'], ENT_QUOTES, 'UTF-8'); ?>"
               target="_blank" rel="noopener noreferrer"
               aria-label="<?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?> on Google">
              <i data-lucide="star" aria-hidden="true"></i>
            </a>
          </div>
        </div><!-- /.footer-col-brand -->

        <!-- Column 2: Services ───────────────────────────────────────────── -->
        <div class="footer-col footer-col-services">
          <h3 class="footer-col-title">Our Services</h3>
          <ul class="footer-links" role="list">
            <?php foreach (array_slice($services, 0, 5) as $svc): ?>
            <li>
              <a href="/services/<?php echo htmlspecialchars($svc['slug'], ENT_QUOTES, 'UTF-8'); ?>/">
                <i data-lucide="chevron-right" aria-hidden="true"></i>
                <?php echo htmlspecialchars($svc['name'], ENT_QUOTES, 'UTF-8'); ?>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>
        </div><!-- /.footer-col-services -->

        <!-- Column 3: More Services & Areas ─────────────────────────────── -->
        <div class="footer-col footer-col-more">
          <h3 class="footer-col-title">More Services</h3>
          <ul class="footer-links" role="list">
            <?php foreach (array_slice($services, 5) as $svc): ?>
            <li>
              <a href="/services/<?php echo htmlspecialchars($svc['slug'], ENT_QUOTES, 'UTF-8'); ?>/">
                <i data-lucide="chevron-right" aria-hidden="true"></i>
                <?php echo htmlspecialchars($svc['name'], ENT_QUOTES, 'UTF-8'); ?>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>

          <h3 class="footer-col-title footer-col-title-spacer">Service Areas</h3>
          <ul class="footer-links footer-areas-list" role="list">
            <?php foreach (array_slice($serviceAreas, 0, 6) as $area): ?>
            <li>
              <a href="/service-area/">
                <i data-lucide="map-pin" aria-hidden="true"></i>
                <?php echo htmlspecialchars($area['city'], ENT_QUOTES, 'UTF-8'); ?>, <?php echo htmlspecialchars($area['state'], ENT_QUOTES, 'UTF-8'); ?>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>
          <a href="/service-area/" class="footer-view-all">View All Service Areas →</a>
        </div><!-- /.footer-col-more -->

        <!-- Column 4: Contact ────────────────────────────────────────────── -->
        <div class="footer-col footer-col-contact">
          <h3 class="footer-col-title">Contact Us</h3>

          <ul class="footer-contact-list" role="list">
            <li class="footer-contact-item">
              <i data-lucide="phone" aria-hidden="true"></i>
              <div>
                <span class="footer-contact-label">Phone</span>
                <a href="tel:<?php echo $contactPhoneRaw; ?>" class="footer-contact-value footer-phone">
                  <?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?>
                </a>
              </div>
            </li>
            <li class="footer-contact-item">
              <i data-lucide="mail" aria-hidden="true"></i>
              <div>
                <span class="footer-contact-label">Email</span>
                <a href="mailto:<?php echo htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8'); ?>" class="footer-contact-value">
                  <?php echo htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8'); ?>
                </a>
              </div>
            </li>
            <li class="footer-contact-item">
              <i data-lucide="map-pin" aria-hidden="true"></i>
              <div>
                <span class="footer-contact-label">Location</span>
                <address class="footer-contact-value footer-address" itemprop="address">
                  <?php echo htmlspecialchars($address['city'], ENT_QUOTES, 'UTF-8'); ?>, <?php echo htmlspecialchars($address['state'], ENT_QUOTES, 'UTF-8'); ?> <?php echo htmlspecialchars($address['zip'], ENT_QUOTES, 'UTF-8'); ?>
                </address>
              </div>
            </li>
            <li class="footer-contact-item">
              <i data-lucide="clock" aria-hidden="true"></i>
              <div>
                <span class="footer-contact-label">Hours</span>
                <ul class="footer-hours" role="list">
                  <?php foreach ($businessHours as $day => $hours): ?>
                  <li class="footer-hours-row">
                    <span class="footer-hours-day"><?php echo htmlspecialchars($day, ENT_QUOTES, 'UTF-8'); ?></span>
                    <span class="footer-hours-time"><?php echo htmlspecialchars($hours, ENT_QUOTES, 'UTF-8'); ?></span>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </li>
          </ul>

          <a href="/contact/" class="btn-footer-cta">Get a Free Estimate</a>
        </div><!-- /.footer-col-contact -->

      </div><!-- /.footer-grid -->
    </div><!-- /.container -->
  </div><!-- /.footer-top -->

  <!-- AEO Entity Block ────────────────────────────────────────────────────── -->
  <div class="footer-entity" itemscope itemtype="https://schema.org/LocalBusiness">
    <div class="container">
      <meta itemprop="name"      content="<?php echo htmlspecialchars($siteNameFull, ENT_QUOTES, 'UTF-8'); ?>">
      <meta itemprop="url"       content="<?php echo $siteUrl; ?>">
      <meta itemprop="telephone" content="<?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?>">
      <meta itemprop="email"     content="<?php echo htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8'); ?>">
      <p class="entity-text">
        <?php echo htmlspecialchars($siteNameFull, ENT_QUOTES, 'UTF-8'); ?> is a licensed and insured irrigation company based in <?php echo htmlspecialchars($address['city'] . ', ' . $address['state'], ENT_QUOTES, 'UTF-8'); ?>, serving Fort Worth and the greater Tarrant County area. Founded in <?php echo $yearFounded; ?> with over <?php echo $yearsInBusiness; ?> years of experience, <?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?> specializes in irrigation system repair, sprinkler installation, winterization &amp; blowout, backflow testing, and smart controller upgrades. Contact: <a href="tel:<?php echo $contactPhoneRaw; ?>"><?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?></a> | <a href="mailto:<?php echo htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8'); ?></a> | <a href="<?php echo $siteUrl; ?>"><?php echo $siteUrl; ?></a>. Licensed and insured.
      </p>
    </div>
  </div><!-- /.footer-entity -->

  <!-- Footer Bottom Bar ───────────────────────────────────────────────────── -->
  <div class="footer-bottom">
    <div class="container">

      <!-- Legal Row (TCPA 2025/2026 + CCPA/CPRA compliance) ─────────────── -->
      <div class="footer-legal-row">
        <a href="/privacy-policy/">Privacy Policy</a>
        <span class="divider" aria-hidden="true">|</span>
        <a href="/terms/">Terms of Service</a>
        <span class="divider" aria-hidden="true">|</span>
        <a href="/cookie-policy/">Cookie Policy</a>
        <span class="divider" aria-hidden="true">|</span>
        <a href="/accessibility/">Accessibility</a>
        <span class="divider" aria-hidden="true">|</span>
        <a href="/privacy-policy/#ccpa-rights">Do Not Sell or Share My Personal Information</a>
        <span class="divider" aria-hidden="true">|</span>
        <a href="/sitemap.xml">Sitemap</a>
      </div>

      <!-- Copyright & Credit Row ─────────────────────────────────────────── -->
      <div class="footer-bottom-bar">
        <p class="footer-copyright">
          &copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($siteNameFull, ENT_QUOTES, 'UTF-8'); ?>. All rights reserved.
        </p>
        <a href="https://pageoneinsights.com" rel="dofollow" target="_blank" class="footer-credit">
          Web Design &amp; Hosting by Page One Insights, LLC
        </a>
      </div>

    </div><!-- /.container -->
  </div><!-- /.footer-bottom -->

</footer><!-- /.site-footer -->

<!-- Back-to-Top Button ──────────────────────────────────────────────────────── -->
<button class="back-to-top" id="back-to-top" aria-label="Back to top" aria-hidden="true">
  <i data-lucide="arrow-up" aria-hidden="true"></i>
</button>

<!-- Mobile Floating CTA Bar (visible < 768px only) ─────────────────────────── -->
<div class="mobile-float-cta" aria-label="Quick contact options">
  <a href="tel:<?php echo $contactPhoneRaw; ?>" class="mobile-float-call">
    <i data-lucide="phone" aria-hidden="true"></i>
    <span>Call Now</span>
  </a>
  <a href="/contact/" class="mobile-float-estimate">
    <i data-lucide="clipboard-list" aria-hidden="true"></i>
    <span>Free Estimate</span>
  </a>
</div>

<!-- ════════════════════════════════════════════════════════════════════════════
     SCRIPTS
     ════════════════════════════════════════════════════════════════════════════ -->

<!-- Lucide Icons ──────────────────────────────────────────────────────────── -->
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js" defer></script>

<!-- VanillaTilt (for .tilt-card elements) ─────────────────────────────────── -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js" defer></script>

<!-- Swiper.js (conditional) ──────────────────────────────────────────────── -->
<?php if (isset($useSwiper) && $useSwiper): ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
<?php endif; ?>

<!-- Typed.js (conditional) ───────────────────────────────────────────────── -->
<?php if (isset($useTyped) && $useTyped): ?>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.1.0/dist/typed.umd.js" defer></script>
<?php endif; ?>

<!-- Site Scripts ──────────────────────────────────────────────────────────── -->
<script src="/assets/js/animations.js" defer></script>
<script src="/assets/js/effects.js"    defer></script>
<script src="/assets/js/main.js"       defer></script>

<!-- Inline Initializers ─────────────────────────────────────────────────── -->
<script>
document.addEventListener('DOMContentLoaded', function () {

  // ── Lucide Icons Init ────────────────────────────────────────────────────
  if (typeof lucide !== 'undefined') {
    lucide.createIcons();
  }

  // ── Back-to-Top Button ───────────────────────────────────────────────────
  const btt = document.getElementById('back-to-top');
  if (btt) {
    const toggleBtt = () => {
      const show = window.scrollY > 300;
      btt.classList.toggle('visible', show);
      btt.setAttribute('aria-hidden', String(!show));
    };
    window.addEventListener('scroll', toggleBtt, { passive: true });
    btt.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // ── Navbar Scroll State ──────────────────────────────────────────────────
  const header = document.querySelector('[data-header]');
  if (header) {
    const onScroll = () => {
      header.classList.toggle('scrolled', window.scrollY > 80);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll(); // run once on load
  }

  // ── Mobile Menu ──────────────────────────────────────────────────────────
  const hamburger  = document.getElementById('hamburger-btn');
  const closeBtn   = document.getElementById('mobile-close-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const overlay    = document.getElementById('mobile-overlay');

  function openMenu() {
    mobileMenu.setAttribute('aria-hidden', 'false');
    hamburger.setAttribute('aria-expanded', 'true');
    hamburger.classList.add('is-open');
    mobileMenu.classList.add('is-open');
    document.body.style.overflow = 'hidden';
    // Move focus to close button
    if (closeBtn) closeBtn.focus();
  }

  function closeMenu() {
    mobileMenu.setAttribute('aria-hidden', 'true');
    hamburger.setAttribute('aria-expanded', 'false');
    hamburger.classList.remove('is-open');
    mobileMenu.classList.remove('is-open');
    document.body.style.overflow = '';
    hamburger.focus();
  }

  if (hamburger)  hamburger.addEventListener('click', openMenu);
  if (closeBtn)   closeBtn.addEventListener('click', closeMenu);
  if (overlay)    overlay.addEventListener('click', closeMenu);

  // Close on Escape key
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && mobileMenu && mobileMenu.classList.contains('is-open')) {
      closeMenu();
    }
  });

  // Close mobile menu on nav link tap
  if (mobileMenu) {
    mobileMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', closeMenu);
    });
  }

  // ── Services Dropdown (Desktop) ──────────────────────────────────────────
  const dropdownToggle = document.querySelector('.nav-dropdown-toggle');
  const dropdownMenu   = document.getElementById('services-dropdown');

  if (dropdownToggle && dropdownMenu) {
    dropdownToggle.addEventListener('click', function () {
      const expanded = this.getAttribute('aria-expanded') === 'true';
      this.setAttribute('aria-expanded', String(!expanded));
      dropdownMenu.setAttribute('aria-hidden', String(expanded));
    });

    // Close dropdown on outside click
    document.addEventListener('click', function (e) {
      if (!dropdownToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownToggle.setAttribute('aria-expanded', 'false');
        dropdownMenu.setAttribute('aria-hidden', 'true');
      }
    });

    // Close dropdown on Escape
    dropdownToggle.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') {
        this.setAttribute('aria-expanded', 'false');
        dropdownMenu.setAttribute('aria-hidden', 'true');
        this.focus();
      }
    });
  }

  // ── VanillaTilt (if elements present) ───────────────────────────────────
  if (typeof VanillaTilt !== 'undefined') {
    const tiltEls = document.querySelectorAll('.tilt-card');
    if (tiltEls.length) {
      VanillaTilt.init(tiltEls, {
        max:       8,
        speed:     400,
        glare:     true,
        'max-glare': 0.15,
      });
    }
  }

});
</script>
