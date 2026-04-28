<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<!-- Skip to Main Content (Accessibility) ────────────────────────────────── -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<header class="site-header" data-header>

  <nav class="navbar" aria-label="Main navigation">
    <div class="navbar-inner container">

      <!-- Logo ──────────────────────────────────────────────────────────── -->
      <a href="/" class="navbar-logo" aria-label="<?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?> — Home">
        <span class="logo-mark" aria-hidden="true">GG</span>
        <span class="logo-text">
          <span class="logo-name"><?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?></span>
          <span class="logo-tagline"><?php echo htmlspecialchars($tagline, ENT_QUOTES, 'UTF-8'); ?></span>
        </span>
      </a>

      <!-- Desktop Nav Links ─────────────────────────────────────────────── -->
      <ul class="navbar-links" role="list">

        <li>
          <a href="/" class="nav-link <?php echo isActivePage('home'); ?>"<?php echo ariaCurrent('home'); ?>>
            Home
          </a>
        </li>

        <!-- Services Dropdown ──────────────────────────────────────────── -->
        <li class="has-dropdown">
          <button class="nav-link nav-dropdown-toggle <?php echo isActivePage('services'); ?>"
                  aria-haspopup="true"
                  aria-expanded="false"
                  aria-controls="services-dropdown"
                  <?php echo (isActivePage('services') === 'active') ? 'aria-current="page"' : ''; ?>>
            Services
            <svg class="dropdown-chevron" aria-hidden="true" width="12" height="12" viewBox="0 0 12 12" fill="none">
              <path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
          <ul id="services-dropdown" class="dropdown-menu" role="list" aria-hidden="true">
            <li>
              <a href="/services/" class="dropdown-link dropdown-all">
                <i data-lucide="layout-grid" aria-hidden="true"></i>
                All Services
              </a>
            </li>
            <?php foreach ($services as $svc): ?>
            <li>
              <a href="/services/<?php echo htmlspecialchars($svc['slug'], ENT_QUOTES, 'UTF-8'); ?>/"
                 class="dropdown-link">
                <i data-lucide="<?php echo htmlspecialchars($svc['icon'], ENT_QUOTES, 'UTF-8'); ?>" aria-hidden="true"></i>
                <?php echo htmlspecialchars($svc['name'], ENT_QUOTES, 'UTF-8'); ?>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>
        </li>

        <li>
          <a href="/service-area/" class="nav-link <?php echo isActivePage('service-area'); ?>"<?php echo ariaCurrent('service-area'); ?>>
            Service Area
          </a>
        </li>

        <li>
          <a href="/about/" class="nav-link <?php echo isActivePage('about'); ?>"<?php echo ariaCurrent('about'); ?>>
            About
          </a>
        </li>

        <li>
          <a href="/contact/" class="nav-link <?php echo isActivePage('contact'); ?>"<?php echo ariaCurrent('contact'); ?>>
            Contact
          </a>
        </li>

      </ul><!-- /.navbar-links -->

      <!-- Desktop CTA ───────────────────────────────────────────────────── -->
      <div class="navbar-cta">
        <a href="tel:<?php echo $contactPhoneRaw; ?>" class="nav-phone">
          <i data-lucide="phone" aria-hidden="true"></i>
          <?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?>
        </a>
        <a href="/contact/" class="btn-nav-cta">Free Estimate</a>
      </div>

      <!-- Mobile Hamburger ──────────────────────────────────────────────── -->
      <button class="hamburger"
              id="hamburger-btn"
              aria-controls="mobile-menu"
              aria-expanded="false"
              aria-label="Open navigation menu">
        <span class="hamburger-line" aria-hidden="true"></span>
        <span class="hamburger-line" aria-hidden="true"></span>
        <span class="hamburger-line" aria-hidden="true"></span>
      </button>

    </div><!-- /.navbar-inner -->
  </nav><!-- /.navbar -->

  <!-- Mobile Full-Screen Menu ─────────────────────────────────────────────── -->
  <div class="mobile-menu" id="mobile-menu" aria-hidden="true" role="dialog" aria-modal="true" aria-label="Navigation menu">
    <div class="mobile-menu-inner">

      <!-- Mobile Menu Header -->
      <div class="mobile-menu-header">
        <a href="/" class="mobile-logo">
          <span class="logo-mark" aria-hidden="true">GG</span>
          <span class="logo-name"><?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?></span>
        </a>
        <button class="mobile-close"
                id="mobile-close-btn"
                aria-label="Close navigation menu">
          <i data-lucide="x" aria-hidden="true"></i>
        </button>
      </div>

      <!-- Mobile Nav Links -->
      <nav aria-label="Mobile navigation">
        <ul class="mobile-nav-list" role="list">

          <li>
            <a href="/" class="mobile-nav-link <?php echo isActivePage('home'); ?>"<?php echo ariaCurrent('home'); ?>>
              <i data-lucide="home" aria-hidden="true"></i>
              Home
            </a>
          </li>

          <li>
            <a href="/services/" class="mobile-nav-link <?php echo isActivePage('services'); ?>"<?php echo ariaCurrent('services'); ?>>
              <i data-lucide="layout-grid" aria-hidden="true"></i>
              All Services
            </a>
            <!-- Mobile Service Sub-Links -->
            <ul class="mobile-sub-list" role="list">
              <?php foreach ($services as $svc): ?>
              <li>
                <a href="/services/<?php echo htmlspecialchars($svc['slug'], ENT_QUOTES, 'UTF-8'); ?>/"
                   class="mobile-sub-link">
                  <?php echo htmlspecialchars($svc['name'], ENT_QUOTES, 'UTF-8'); ?>
                </a>
              </li>
              <?php endforeach; ?>
            </ul>
          </li>

          <li>
            <a href="/service-area/" class="mobile-nav-link <?php echo isActivePage('service-area'); ?>"<?php echo ariaCurrent('service-area'); ?>>
              <i data-lucide="map-pin" aria-hidden="true"></i>
              Service Area
            </a>
          </li>

          <li>
            <a href="/about/" class="mobile-nav-link <?php echo isActivePage('about'); ?>"<?php echo ariaCurrent('about'); ?>>
              <i data-lucide="users" aria-hidden="true"></i>
              About
            </a>
          </li>

          <li>
            <a href="/contact/" class="mobile-nav-link <?php echo isActivePage('contact'); ?>"<?php echo ariaCurrent('contact'); ?>>
              <i data-lucide="mail" aria-hidden="true"></i>
              Contact
            </a>
          </li>

        </ul>
      </nav>

      <!-- Mobile CTA Block -->
      <div class="mobile-cta-block">
        <a href="tel:<?php echo $contactPhoneRaw; ?>" class="mobile-phone-link">
          <i data-lucide="phone-call" aria-hidden="true"></i>
          <?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?>
        </a>
        <a href="/contact/" class="btn-mobile-cta">Get a Free Estimate</a>
      </div>

    </div><!-- /.mobile-menu-inner -->
    <!-- Backdrop overlay (tap to close) -->
    <div class="mobile-overlay" id="mobile-overlay" aria-hidden="true"></div>
  </div><!-- /.mobile-menu -->

</header><!-- /.site-header -->

<main id="main-content">
