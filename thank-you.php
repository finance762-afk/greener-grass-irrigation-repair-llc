<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = 'Request Received | Greener Grass Irrigation Repair';
$pageDescription = 'Thank you — your irrigation estimate request has been received. Greener Grass Irrigation Repair will be in touch within 2 hours.';
$canonicalUrl    = $siteUrl . '/thank-you';
$currentPage     = '';
$noindex         = true;
$noHeroPreload   = true;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<style>
/* ── Thank-You Page Styles ────────────────────────────────────────────────── */

.thank-you-section {
  min-height: calc(75vh - var(--navbar-height));
  display: flex;
  align-items: center;
  justify-content: center;
  padding: var(--section-pad);
  background: var(--color-bg);
  position: relative;
  overflow: hidden;
}
.thank-you-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 50% 10%, rgba(var(--color-accent-rgb), 0.08) 0%, transparent 65%);
  pointer-events: none;
}
.thank-you-inner {
  position: relative;
  z-index: 1;
  text-align: center;
  max-width: 600px;
  margin: 0 auto;
}

/* Check Icon */
.ty-check-wrap {
  width: 96px;
  height: 96px;
  background: linear-gradient(135deg, rgba(var(--color-accent-rgb), 0.15) 0%, rgba(var(--color-primary-rgb), 0.08) 100%);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-lg);
  border: 2px solid rgba(var(--color-accent-rgb), 0.4);
  box-shadow: 0 0 0 8px rgba(var(--color-accent-rgb), 0.06);
  animation: ty-pulse 2.5s ease-in-out infinite;
}
@keyframes ty-pulse {
  0%, 100% { box-shadow: 0 0 0 8px rgba(var(--color-accent-rgb), 0.06); }
  50%       { box-shadow: 0 0 0 16px rgba(var(--color-accent-rgb), 0.03); }
}
.ty-check-wrap i {
  width: 44px;
  height: 44px;
  color: var(--color-accent);
}

/* Heading */
.thank-you-inner h1 {
  font-family: var(--font-heading);
  font-size: clamp(2rem, 5vw, 3.2rem);
  font-weight: 700;
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.thank-you-inner .ty-subtitle {
  font-size: clamp(1rem, 2vw, 1.15rem);
  color: var(--color-text-light);
  line-height: 1.65;
  max-width: 46ch;
  margin: 0 auto var(--space-2xl);
}

/* What Happens Next */
.ty-next-card {
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg);
  padding: var(--space-xl) var(--space-xl);
  box-shadow: var(--shadow-card);
  margin-bottom: var(--space-2xl);
  border-left: 4px solid var(--color-accent);
  text-align: left;
}
.ty-next-card-title {
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 700;
  color: var(--color-primary);
  text-transform: uppercase;
  letter-spacing: 0.06em;
  margin-bottom: var(--space-md);
  display: flex;
  align-items: center;
  gap: var(--space-sm);
}
.ty-next-card-title i { width: 18px; height: 18px; color: var(--color-accent); }
.ty-steps {
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
  list-style: none;
}
.ty-step {
  display: flex;
  align-items: flex-start;
  gap: var(--space-md);
  font-size: var(--font-size-sm);
  color: var(--color-text);
  line-height: 1.55;
}
.ty-step-num {
  width: 24px;
  height: 24px;
  min-width: 24px;
  background: var(--color-primary);
  color: #fff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 0.7rem;
  font-weight: 700;
  font-family: var(--font-heading);
  margin-top: 1px;
}

/* Divider */
.ty-divider {
  width: 40px;
  height: 2px;
  background: linear-gradient(to right, var(--color-primary), var(--color-accent));
  margin: 0 auto var(--space-xl);
  border-radius: 2px;
}

/* Phone CTA */
.ty-phone-label {
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  text-transform: uppercase;
  letter-spacing: 0.08em;
  font-weight: 600;
  margin-bottom: var(--space-sm);
}
.ty-phone-link {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  font-family: var(--font-heading);
  font-size: clamp(1.4rem, 3vw, 2.2rem);
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-2xl);
  transition: color var(--transition-fast);
}
.ty-phone-link:hover { color: var(--color-accent); }
.ty-phone-link i { width: 28px; height: 28px; }

/* Nav Links */
.ty-nav-links {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-md);
  justify-content: center;
  list-style: none;
}
.ty-nav-link {
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
  box-shadow: var(--shadow-sm);
  transition: background var(--transition-fast), border-color var(--transition-fast), transform var(--transition-fast), box-shadow var(--transition-fast);
}
.ty-nav-link:hover {
  background: var(--color-primary);
  color: #fff;
  border-color: var(--color-primary);
  transform: translateY(-2px);
  box-shadow: var(--shadow-md);
}
.ty-nav-link i { width: 15px; height: 15px; }

/* Responsive */
@media (max-width: 767px) {
  .thank-you-section { padding: var(--section-pad-mobile); }
  .ty-next-card { padding: var(--space-lg); }
}
</style>

<section class="thank-you-section" aria-labelledby="ty-h1">
  <div class="thank-you-inner" data-animate="fade-up">

    <div class="ty-check-wrap" aria-hidden="true">
      <i data-lucide="check-circle" aria-hidden="true"></i>
    </div>

    <h1 id="ty-h1">We Got Your Request</h1>
    <p class="ty-subtitle">Your free estimate request has been sent to the <?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?> team. Here's what happens next.</p>

    <div class="ty-next-card">
      <div class="ty-next-card-title">
        <i data-lucide="clock" aria-hidden="true"></i>
        What to Expect
      </div>
      <ul class="ty-steps" role="list">
        <li class="ty-step">
          <span class="ty-step-num" aria-hidden="true">1</span>
          <span><strong>Response within 2 hours</strong> during business hours (Mon–Fri 7 AM–6 PM, Sat 8 AM–4 PM). We'll call the phone number you provided.</span>
        </li>
        <li class="ty-step">
          <span class="ty-step-num" aria-hidden="true">2</span>
          <span><strong>Same-day service available</strong> when you reach us before noon on weekdays. We'll confirm availability during your callback.</span>
        </li>
        <li class="ty-step">
          <span class="ty-step-num" aria-hidden="true">3</span>
          <span><strong>Free written estimate</strong> provided before any work begins — the number we quote is the number on the invoice.</span>
        </li>
      </ul>
    </div>

    <div class="ty-divider" aria-hidden="true"></div>

    <p class="ty-phone-label">Need to reach us faster?</p>
    <a href="tel:<?php echo $contactPhoneRaw; ?>" class="ty-phone-link">
      <i data-lucide="phone-call" aria-hidden="true"></i>
      <?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?>
    </a>

    <ul class="ty-nav-links" role="list" aria-label="Helpful page links">
      <li>
        <a href="/" class="ty-nav-link">
          <i data-lucide="home" aria-hidden="true"></i>
          Back to Home
        </a>
      </li>
      <li>
        <a href="/services/" class="ty-nav-link">
          <i data-lucide="layout-grid" aria-hidden="true"></i>
          Our Services
        </a>
      </li>
    </ul>

  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
