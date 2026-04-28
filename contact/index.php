<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = 'Contact Greener Grass Irrigation Repair | Fort Worth TX';
$pageDescription = 'Get a free irrigation repair estimate in Fort Worth and Tarrant County. Call (817) 555-0100 or submit our quick form — same-day response when you call before noon.';
$canonicalUrl    = $siteUrl . '/contact/';
$canonicalLink = '<link rel="canonical" href="' . htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') . '">'; // QA canonical reference
$currentPage     = 'contact';
$noHeroPreload   = false;

$schemaMarkup = '{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type":"ListItem","position":1,"name":"Home","item":"' . $siteUrl . '/"},
        {"@type":"ListItem","position":2,"name":"Contact","item":"' . $siteUrl . '/contact/"}
      ]
    },
    {
      "@type": "ContactPage",
      "@id": "' . $siteUrl . '/contact/",
      "name": "Contact ' . $siteName . '",
      "url": "' . $siteUrl . '/contact/",
      "description": "Contact ' . $siteName . ' for irrigation repair, installation, and maintenance in Fort Worth and Tarrant County, TX.",
      "mainEntity": {"@id": "' . $siteUrl . '/#business"}
    }
  ]
}';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<style>
/* ── Contact Page Styles ──────────────────────────────────────────────────── */

/* Hero */
.contact-hero {
  position: relative;
  min-height: 50vh;
  display: flex;
  align-items: center;
  background-image: url('/assets/images/hero-contact.jpg');
  background-size: cover;
  background-position: center top;
  overflow: hidden;
}
.contact-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    150deg,
    rgba(var(--color-primary-dark-rgb), 0.92) 0%,
    rgba(var(--color-primary-rgb), 0.75) 55%,
    rgba(0,0,0,0.45) 100%
  );
  z-index: 1;
}
.contact-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.04;
  z-index: 2;
  pointer-events: none;
}
.contact-hero-content {
  position: relative;
  z-index: 3;
  padding: var(--section-pad);
}
.contact-hero-eyebrow {
  display: inline-block;
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
}
.contact-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 5.5vw, 4rem);
  font-weight: 700;
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  background: linear-gradient(135deg, #fff 0%, var(--color-accent) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: var(--space-md);
  max-width: 22ch;
}
.contact-hero-sub {
  font-size: clamp(1rem, 2vw, 1.1rem);
  color: rgba(255,255,255,0.82);
  max-width: 50ch;
  line-height: 1.6;
}

/* Breadcrumb */
.breadcrumb-nav {
  background: var(--color-bg-alt);
  border-bottom: 1px solid rgba(0,0,0,0.06);
  padding: var(--space-sm) 0;
}
.breadcrumb-list {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  list-style: none;
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
}
.breadcrumb-list a { color: var(--color-primary); transition: color var(--transition-fast); }
.breadcrumb-list a:hover { color: var(--color-accent); }
.breadcrumb-sep { opacity: 0.5; }

/* Main Contact Layout */
.contact-main {
  padding: var(--section-pad);
  background: var(--color-bg);
}
.contact-layout {
  display: grid;
  grid-template-columns: 1fr 380px;
  gap: var(--space-3xl);
  align-items: start;
}

/* Form Column */
.form-col { }
.form-col-header { margin-bottom: var(--space-xl); }
.form-eyebrow {
  display: inline-block;
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.form-col-header h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 3.5vw, 2.4rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.form-col-header p {
  color: var(--color-text-light);
  font-size: 1rem;
  line-height: 1.6;
  max-width: 55ch;
}

/* Form */
.contact-form {
  background: var(--color-bg);
  border: 1px solid rgba(0,0,0,0.08);
  border-radius: var(--radius-lg);
  padding: var(--space-2xl);
  box-shadow: var(--shadow-card);
}

/* Floating Label Inputs */
.field-group {
  position: relative;
  margin-bottom: var(--space-lg);
}
.field-group label {
  position: absolute;
  top: 50%;
  left: var(--space-md);
  transform: translateY(-50%);
  font-size: 1rem;
  color: var(--color-text-light);
  pointer-events: none;
  transition: all var(--transition-fast);
  background: var(--color-bg);
  padding: 0 var(--space-xs);
  line-height: 1;
  z-index: 1;
}
.field-group.textarea-group label {
  top: var(--space-md);
  transform: none;
}
.field-group input,
.field-group select,
.field-group textarea {
  width: 100%;
  padding: var(--space-md) var(--space-md);
  border: 2px solid rgba(0,0,0,0.12);
  border-radius: var(--radius-md);
  font-family: var(--font-body);
  font-size: 1rem;
  color: var(--color-text);
  background: var(--color-bg);
  transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
  appearance: none;
  -webkit-appearance: none;
  outline: none;
}
.field-group select {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23555' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right var(--space-md) center;
  padding-right: var(--space-2xl);
  cursor: pointer;
}
.field-group textarea {
  resize: vertical;
  min-height: 110px;
}

/* Float label up when focused or filled */
.field-group input:focus,
.field-group select:focus,
.field-group textarea:focus {
  border-color: var(--color-accent);
  box-shadow: 0 0 0 3px rgba(var(--color-accent-rgb), 0.15);
}
.field-group input:focus ~ label,
.field-group input:not(:placeholder-shown) ~ label,
.field-group select:focus ~ label,
.field-group select:not([value=""]) ~ label,
.field-group textarea:focus ~ label,
.field-group textarea:not(:placeholder-shown) ~ label {
  top: 0;
  transform: translateY(-50%) scale(0.82);
  color: var(--color-accent);
  font-weight: 700;
}
.field-group.textarea-group input:focus ~ label,
.field-group.textarea-group textarea:focus ~ label,
.field-group.textarea-group textarea:not(:placeholder-shown) ~ label {
  top: 0;
  transform: translateY(-50%) scale(0.82);
  color: var(--color-accent);
  font-weight: 700;
}

/* Fix: label for select floats when option selected */
.field-group select.has-value ~ label {
  top: 0;
  transform: translateY(-50%) scale(0.82);
  color: var(--color-accent);
  font-weight: 700;
}

.form-row-2 {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-md);
}

/* Consent Fieldset */
.form-consent-fieldset {
  border: 1px solid rgba(0,0,0,0.10);
  border-radius: var(--radius-md);
  padding: var(--space-lg);
  margin-bottom: var(--space-lg);
  background: var(--color-bg-alt);
}
.form-consent-legend {
  font-family: var(--font-heading);
  font-size: 0.95rem;
  font-weight: 600;
  color: var(--color-primary);
  padding: 0 var(--space-sm);
  letter-spacing: 0.02em;
}
.form-consent-item {
  display: flex;
  align-items: flex-start;
  gap: var(--space-md);
  margin-top: var(--space-md);
  cursor: pointer;
}
.consent-checkbox {
  width: 20px;
  height: 20px;
  min-width: 20px;
  accent-color: var(--color-accent);
  border-radius: var(--radius-sm);
  margin-top: 2px;
  cursor: pointer;
}
.consent-label {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.55;
}
.consent-label strong { color: var(--color-text); }
.form-consent-required .consent-label { color: var(--color-text); }
.required-star { color: #c0392b; font-weight: 700; }
.consent-label a {
  color: var(--color-primary);
  text-decoration: underline;
  text-underline-offset: 2px;
}
.consent-label a:hover { color: var(--color-accent); }

/* Submit Button */
.btn-submit {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-sm);
  width: 100%;
  background: var(--color-primary);
  color: #fff;
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 1.05rem;
  letter-spacing: 0.05em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border: none;
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-primary-dark);
  cursor: pointer;
  transition: transform var(--transition-fast), box-shadow var(--transition-fast), background var(--transition-fast);
  overflow: hidden;
  position: relative;
}
.btn-submit:hover {
  background: var(--color-accent);
  color: var(--color-primary-dark);
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
}
.btn-submit:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-primary-dark);
}
.btn-submit:focus-visible {
  outline: 2px solid var(--color-accent);
  outline-offset: 2px;
}

/* Info Column */
.info-col { }
.info-card {
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  box-shadow: var(--shadow-card);
  margin-bottom: var(--space-lg);
}
.info-card:last-child { margin-bottom: 0; }
.info-card-title {
  font-family: var(--font-heading);
  font-size: 1.1rem;
  font-weight: 600;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  border-bottom: 2px solid var(--color-accent);
  padding-bottom: var(--space-sm);
}
.info-card-title i { width: 18px; height: 18px; color: var(--color-accent); }

.contact-detail {
  display: flex;
  align-items: flex-start;
  gap: var(--space-md);
  margin-bottom: var(--space-md);
  font-size: var(--font-size-sm);
  color: var(--color-text);
}
.contact-detail:last-child { margin-bottom: 0; }
.contact-detail i { width: 18px; height: 18px; color: var(--color-primary); flex-shrink: 0; margin-top: 2px; }
.contact-detail a { color: var(--color-primary); font-weight: 600; transition: color var(--transition-fast); }
.contact-detail a:hover { color: var(--color-accent); }
.contact-detail-label {
  display: block;
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  text-transform: uppercase;
  letter-spacing: 0.08em;
  margin-bottom: 2px;
}

/* Hours Table */
.hours-table {
  width: 100%;
  border-collapse: collapse;
  font-size: var(--font-size-sm);
}
.hours-table tr {
  border-bottom: 1px solid rgba(0,0,0,0.06);
}
.hours-table tr:last-child { border-bottom: none; }
.hours-table td {
  padding: var(--space-xs) 0;
  color: var(--color-text);
  line-height: 1.5;
}
.hours-table td:first-child { color: var(--color-text-light); font-weight: 600; min-width: 100px; }
.hours-table .closed-day td:last-child { color: #c0392b; font-style: italic; }

/* Map */
.map-wrapper {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-card);
  border: 2px solid rgba(var(--color-primary-rgb), 0.12);
}

/* License Badge */
.license-badge {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(var(--color-primary-rgb), 0.06);
  border: 1px solid rgba(var(--color-primary-rgb), 0.15);
  border-left: 4px solid var(--color-accent);
  border-radius: var(--radius-sm);
  padding: var(--space-sm) var(--space-md);
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: var(--color-primary);
  margin-top: var(--space-md);
}
.license-badge i { width: 18px; height: 18px; color: var(--color-accent); flex-shrink: 0; }

/* Closing CTA */
.cta-closing {
  padding: var(--section-pad);
  background: var(--color-bg-dark);
  position: relative;
  overflow: hidden;
  text-align: center;
}
.cta-closing::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(var(--color-primary-rgb), 0.95) 0%, rgba(var(--color-primary-dark-rgb), 0.98) 100%);
}
.cta-closing::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.04;
  pointer-events: none;
}
.cta-closing .container { position: relative; z-index: 1; }
.section-eyebrow {
  display: inline-block;
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.cta-closing h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 3rem);
  font-weight: 700;
  line-height: 1.15;
  text-wrap: balance;
  color: #fff;
  margin-bottom: var(--space-md);
}
.cta-closing p {
  color: rgba(255,255,255,0.8);
  font-size: 1.05rem;
  max-width: 52ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.cta-phone-link {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  color: #fff;
  font-family: var(--font-heading);
  font-size: clamp(1.2rem, 2.5vw, 1.8rem);
  font-weight: 700;
  transition: color var(--transition-fast);
}
.cta-phone-link:hover { color: var(--color-accent); }
.cta-phone-link i { width: 22px; height: 22px; }
.cta-closing-actions {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-lg);
  flex-wrap: wrap;
}
.btn-closing-primary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-accent);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 1rem;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-2xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-accent-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
  position: relative;
}
.btn-closing-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
}
.btn-closing-primary:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-accent-dark);
}

/* Last Updated */
.last-updated {
  text-align: center;
  padding: var(--space-sm) 0 var(--space-md);
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  opacity: 0.7;
}

/* Responsive */
@media (max-width: 1023px) {
  .contact-layout {
    grid-template-columns: 1fr;
    gap: var(--space-2xl);
  }
  .info-col { order: -1; }
}
@media (max-width: 767px) {
  .contact-hero-content { padding: var(--section-pad-mobile); }
  .contact-main, .cta-closing { padding: var(--section-pad-mobile); }
  .contact-form { padding: var(--space-lg); }
  .form-row-2 { grid-template-columns: 1fr; }
}
</style>

<!-- ── Hero ──────────────────────────────────────────────────────────────────── -->
<section class="contact-hero" aria-labelledby="contact-h1">
  <div class="contact-hero-content container">
    <span class="contact-hero-eyebrow">Free Estimates</span>
    <h1 id="contact-h1">Get a Free Irrigation Estimate in Fort Worth</h1>
    <p class="contact-hero-sub">Fill out the form or call us directly — same-day service available Monday–Friday when you reach us before noon. No call centers, no runaround.</p>
  </div>
</section>

<!-- ── Breadcrumb ─────────────────────────────────────────────────────────────── -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb-list">
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">›</li>
      <li aria-current="page">Contact</li>
    </ol>
  </div>
</nav>

<!-- ── Contact Main ───────────────────────────────────────────────────────────── -->
<section class="contact-main" aria-labelledby="contact-form-h2">
  <div class="container">
    <div class="contact-layout">

      <!-- Form Column -->
      <div class="form-col" data-animate="fade-up">
        <div class="form-col-header">
          <span class="form-eyebrow">Free Estimate Request</span>
          <h2 id="contact-form-h2">Tell Us About Your Irrigation Problem</h2>
          <p>We respond to all form submissions within 2 hours during business hours. For fastest service, call us directly at <a href="tel:<?php echo $contactPhoneRaw; ?>"><?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?></a>.</p>
        </div>

        <form class="contact-form"
              action="https://db.pageone.cloud/functions/v1/leads/greener-grass-irrigation-repair-llc"
              method="POST"
              novalidate>

          <!-- Honeypot -->
          <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">

          <!-- Redirect -->
          <input type="hidden" name="_next" value="/thank-you">

          <!-- Consent Tracking -->
          <input type="hidden" name="_consent_version" value="v2.1">
          <input type="hidden" name="_consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>">

          <!-- Name -->
          <div class="field-group">
            <input type="text" id="name" name="name" placeholder=" " required autocomplete="name">
            <label for="name">Your Full Name *</label>
          </div>

          <!-- Email & Phone -->
          <div class="form-row-2">
            <div class="field-group">
              <input type="email" id="email" name="email" placeholder=" " required autocomplete="email">
              <label for="email">Email Address *</label>
            </div>
            <div class="field-group">
              <input type="tel" id="phone" name="phone" placeholder=" " required autocomplete="tel">
              <label for="phone">Phone Number *</label>
            </div>
          </div>

          <!-- Service & Zip -->
          <div class="form-row-2">
            <div class="field-group">
              <select id="service_requested" name="service_requested" required
                      onchange="this.classList.toggle('has-value', this.value !== '')">
                <option value="" disabled selected></option>
                <?php foreach ($services as $svc): ?>
                <option value="<?php echo htmlspecialchars($svc['slug'], ENT_QUOTES, 'UTF-8'); ?>">
                  <?php echo htmlspecialchars($svc['name'], ENT_QUOTES, 'UTF-8'); ?>
                </option>
                <?php endforeach; ?>
                <option value="other">Other / Not Sure</option>
              </select>
              <label for="service_requested">Service Needed *</label>
            </div>
            <div class="field-group">
              <input type="text" id="zip" name="zip" placeholder=" " required autocomplete="postal-code" maxlength="10" pattern="[0-9]{5}(-[0-9]{4})?">
              <label for="zip">Your ZIP Code *</label>
            </div>
          </div>

          <!-- Message -->
          <div class="field-group textarea-group">
            <textarea id="message" name="message" placeholder=" " rows="4"></textarea>
            <label for="message">Describe the Problem (Optional)</label>
          </div>

          <!-- ── TCPA / CCPA Consent Checkboxes ─────────────────────────────── -->
          <fieldset class="form-consent-fieldset">
            <legend class="form-consent-legend">Communication Consent</legend>

            <!-- 1. Email opt-in (optional) -->
            <label class="form-consent-item" for="email_opt_in">
              <input type="checkbox" id="email_opt_in" name="email_opt_in" value="yes" class="consent-checkbox">
              <span class="consent-label">
                <strong>Email updates (optional):</strong> I agree to receive emails from
                <?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?> about my inquiry, services, promotions, and news. I understand I can unsubscribe anytime via the link in any email or by emailing
                <a href="mailto:<?php echo htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8'); ?></a>. Message frequency varies.
              </span>
            </label>

            <!-- 2. SMS opt-in (optional) -->
            <label class="form-consent-item" for="sms_opt_in">
              <input type="checkbox" id="sms_opt_in" name="sms_opt_in" value="yes" class="consent-checkbox">
              <span class="consent-label">
                <strong>SMS/Text messages (optional):</strong> I agree to receive text messages from
                <?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?> at the phone number I provided. Message types may include appointment reminders, service updates, and promotional offers. Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help.
                <strong>Consent is not a condition of purchase.</strong>
              </span>
            </label>

            <!-- 3. Terms acceptance (REQUIRED) -->
            <label class="form-consent-item form-consent-required" for="terms_accepted">
              <input type="checkbox" id="terms_accepted" name="terms_accepted" value="yes" class="consent-checkbox" required>
              <span class="consent-label">
                I have read and agree to the
                <a href="/privacy-policy/">Privacy Policy</a>
                and
                <a href="/terms/">Terms of Service</a>. <span class="required-star">*</span>
              </span>
            </label>

          </fieldset>

          <button type="submit" class="btn-submit">
            <i data-lucide="send" aria-hidden="true"></i>
            Send My Free Estimate Request
          </button>

        </form>
      </div><!-- /.form-col -->

      <!-- Info Column -->
      <div class="info-col" data-animate="fade-up" style="transition-delay:0.15s">

        <!-- Contact Details -->
        <div class="info-card">
          <div class="info-card-title">
            <i data-lucide="phone" aria-hidden="true"></i>
            Reach Us Directly
          </div>
          <div class="contact-detail">
            <i data-lucide="phone" aria-hidden="true"></i>
            <div>
              <span class="contact-detail-label">Phone</span>
              <a href="tel:<?php echo $contactPhoneRaw; ?>"><?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?></a>
            </div>
          </div>
          <div class="contact-detail">
            <i data-lucide="mail" aria-hidden="true"></i>
            <div>
              <span class="contact-detail-label">Email</span>
              <a href="mailto:<?php echo htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8'); ?></a>
            </div>
          </div>
          <div class="contact-detail">
            <i data-lucide="map-pin" aria-hidden="true"></i>
            <div>
              <span class="contact-detail-label">Service Area</span>
              <address style="font-style:normal;">Fort Worth &amp; Tarrant County, TX</address>
            </div>
          </div>
          <div class="license-badge">
            <i data-lucide="shield-check" aria-hidden="true"></i>
            Licensed &amp; Insured — TCEQ #<?php echo htmlspecialchars($licenseNumber, ENT_QUOTES, 'UTF-8'); ?>
          </div>
        </div>

        <!-- Business Hours -->
        <div class="info-card">
          <div class="info-card-title">
            <i data-lucide="clock" aria-hidden="true"></i>
            Business Hours
          </div>
          <table class="hours-table" aria-label="Business hours">
            <tbody>
              <?php foreach ($businessHours as $day => $hours): ?>
              <tr class="<?php echo ($hours === 'Closed') ? 'closed-day' : ''; ?>">
                <td><?php echo htmlspecialchars($day, ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php echo htmlspecialchars($hours, ENT_QUOTES, 'UTF-8'); ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <p style="font-size:var(--font-size-xs);color:var(--color-text-light);margin-top:var(--space-sm);line-height:1.5;">
            Call before noon on weekdays for same-day service across all of Tarrant County.
          </p>
        </div>

        <!-- Map -->
        <div class="map-wrapper">
          <iframe
            src="about:blank"
            data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d429078.26!2d-97.330800!3d32.755500!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e791a6e6e11e5%3A0xcb0c!2sFort%20Worth%2C%20TX!5e0!3m2!1sen!2sus!4v1700000000000"
            width="100%"
            height="280"
            style="border:0;display:block;"
            loading="lazy"
            title="Greener Grass Irrigation Repair service area — Fort Worth and Tarrant County TX"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>

      </div><!-- /.info-col -->

    </div><!-- /.contact-layout -->
  </div>
</section>

<!-- ── CTA #3 — Closing ───────────────────────────────────────────────────────── -->
<section class="cta-closing" aria-label="Call us for same-day irrigation service">
  <div class="container">
    <span class="section-eyebrow">Prefer to Call?</span>
    <h2>Same-Day Service When You Call Before Noon</h2>
    <p>No hold queues, no call centers — you reach our team directly. We'll give you an honest assessment and a written estimate before any work begins.</p>
    <div class="cta-closing-actions">
      <a href="tel:<?php echo $contactPhoneRaw; ?>" class="cta-phone-link">
        <i data-lucide="phone-call" aria-hidden="true"></i>
        <?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?>
      </a>
      <a href="/services/" class="btn-closing-primary">
        <i data-lucide="layout-grid" aria-hidden="true"></i>
        Browse All Services
      </a>
    </div>
  </div>
</section>

<p class="last-updated">Last Updated: April 2026</p>

<script>
// Lazy-load the map iframe when it enters viewport
(function() {
  var mapIframe = document.querySelector('iframe[data-src]');
  if (!mapIframe) return;
  var obs = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.src = entry.target.dataset.src;
        obs.disconnect();
      }
    });
  }, { threshold: 0.1 });
  obs.observe(mapIframe);
})();

// Float label fix for select: re-run on change
document.querySelectorAll('.field-group select').forEach(function(sel) {
  sel.addEventListener('change', function() {
    this.classList.toggle('has-value', this.value !== '');
  });
});
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
