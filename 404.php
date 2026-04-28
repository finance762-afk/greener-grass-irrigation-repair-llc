<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = 'Page Not Found | Greener Grass Irrigation Repair';
$pageDescription = 'The page you were looking for doesn\'t exist. Find irrigation repair, services, and contact information for Greener Grass in Fort Worth, TX.';
$canonicalUrl    = $siteUrl . '/404';
$currentPage     = '';
$noindex         = true;
$noHeroPreload   = true;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<style>
/* ── 404 Page Styles ──────────────────────────────────────────────────────── */

.not-found-section {
  min-height: calc(70vh - var(--navbar-height));
  display: flex;
  align-items: center;
  justify-content: center;
  padding: var(--section-pad);
  background: var(--color-bg);
  position: relative;
  overflow: hidden;
}
.not-found-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 50% 0%, rgba(var(--color-accent-rgb), 0.06) 0%, transparent 70%);
  pointer-events: none;
}
.not-found-inner {
  position: relative;
  z-index: 1;
  text-align: center;
  max-width: 640px;
  margin: 0 auto;
}
.not-found-code {
  font-family: var(--font-heading);
  font-size: clamp(6rem, 20vw, 12rem);
  font-weight: 700;
  line-height: 1;
  letter-spacing: -0.04em;
  color: var(--color-accent);
  opacity: 0.18;
  display: block;
  margin-bottom: calc(-1 * var(--space-xl));
  user-select: none;
  pointer-events: none;
}
.not-found-icon {
  width: 80px;
  height: 80px;
  background: rgba(var(--color-primary-rgb), 0.07);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-lg);
  border: 2px solid rgba(var(--color-accent-rgb), 0.3);
}
.not-found-icon i {
  width: 36px;
  height: 36px;
  color: var(--color-primary);
}
.not-found-inner h1 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.not-found-message {
  font-size: 1.05rem;
  color: var(--color-text-light);
  line-height: 1.65;
  max-width: 48ch;
  margin: 0 auto var(--space-2xl);
}
.not-found-nav {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-md);
  justify-content: center;
  margin-bottom: var(--space-2xl);
  list-style: none;
}
.not-found-nav-link {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  padding: var(--space-sm) var(--space-lg);
  background: var(--color-bg-alt);
  border: 1px solid rgba(0,0,0,0.09);
  border-radius: var(--radius-md);
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: var(--color-primary);
  transition: background var(--transition-fast), border-color var(--transition-fast), transform var(--transition-fast), box-shadow var(--transition-fast);
  box-shadow: var(--shadow-sm);
}
.not-found-nav-link:hover {
  background: var(--color-primary);
  color: #fff;
  border-color: var(--color-primary);
  transform: translateY(-2px);
  box-shadow: var(--shadow-md);
}
.not-found-nav-link i { width: 16px; height: 16px; }
.not-found-divider {
  width: 48px;
  height: 2px;
  background: linear-gradient(to right, var(--color-primary), var(--color-accent));
  margin: 0 auto var(--space-xl);
  border-radius: 2px;
}
.not-found-phone-label {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  margin-bottom: var(--space-sm);
  text-transform: uppercase;
  letter-spacing: 0.08em;
  font-weight: 600;
}
.not-found-phone {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  font-family: var(--font-heading);
  font-size: clamp(1.4rem, 3vw, 2rem);
  font-weight: 700;
  color: var(--color-primary);
  transition: color var(--transition-fast);
}
.not-found-phone:hover { color: var(--color-accent); }
.not-found-phone i { width: 24px; height: 24px; }

/* Responsive */
@media (max-width: 767px) {
  .not-found-section { padding: var(--section-pad-mobile); }
}
</style>

<section class="not-found-section" aria-labelledby="notfound-h1">
  <div class="not-found-inner" data-animate="fade-up">
    <span class="not-found-code" aria-hidden="true">404</span>
    <div class="not-found-icon">
      <i data-lucide="map-pin-off" aria-hidden="true"></i>
    </div>
    <h1 id="notfound-h1">This Page Doesn't Exist</h1>
    <p class="not-found-message">The page you're looking for has moved, been renamed, or never existed. Here's where you can go instead:</p>

    <ul class="not-found-nav" role="list">
      <li>
        <a href="/" class="not-found-nav-link">
          <i data-lucide="home" aria-hidden="true"></i>
          Home
        </a>
      </li>
      <li>
        <a href="/services/" class="not-found-nav-link">
          <i data-lucide="layout-grid" aria-hidden="true"></i>
          Services
        </a>
      </li>
      <li>
        <a href="/service-area/" class="not-found-nav-link">
          <i data-lucide="map-pin" aria-hidden="true"></i>
          Service Area
        </a>
      </li>
      <li>
        <a href="/contact/" class="not-found-nav-link">
          <i data-lucide="mail" aria-hidden="true"></i>
          Contact
        </a>
      </li>
    </ul>

    <div class="not-found-divider" aria-hidden="true"></div>
    <p class="not-found-phone-label">Or call us directly</p>
    <a href="tel:<?php echo $contactPhoneRaw; ?>" class="not-found-phone">
      <i data-lucide="phone" aria-hidden="true"></i>
      <?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?>
    </a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
