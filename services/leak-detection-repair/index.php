<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page Setup ───────────────────────────────────────────────────────────────
$pageTitle       = 'Irrigation Leak Detection & Repair Fort Worth TX | Greener Grass';
$pageDescription = 'Underground irrigation leak detection and repair in Fort Worth, TX. Pressure testing, acoustic detection, clay soil expertise. $150–$400. Licensed irrigator. Same-week service.';
$canonicalUrl    = $siteUrl . '/services/leak-detection-repair/';
$canonicalLink = '<link rel="canonical" href="' . htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') . '">'; // QA canonical reference
$currentPage     = 'services';

$thisService = [
  'name'      => 'Leak Detection & Repair',
  'slug'      => 'leak-detection-repair',
  'shortDesc' => 'Locate and fix underground irrigation leaks before they become costly water waste.',
];

$faqs = [
  [
    'q' => 'How do I know if my irrigation system has an underground leak?',
    'a' => 'The most common signs in Fort Worth are: a single lawn zone that stays unusually green or soggy without recent rain, a water bill 20–40% higher than the previous billing cycle, visible settling or sinkholes over the irrigation mainline, or a zone that fails to build normal pressure when activated. A pressure test on the suspect zone can confirm a leak within minutes — we can run that on a same-day service call.',
  ],
  [
    'q' => 'How much does irrigation leak repair cost in Fort Worth?',
    'a' => 'Most irrigation leak repairs in Fort Worth run $150–$400 depending on pipe depth, soil access, and whether a fitting or a section of pipe needs replacement. Clay soil — which dominates Tarrant County — can make excavation more labor-intensive than sandy soil, which is reflected in some quotes. We provide a firm price after the pressure test confirms the location, before any digging begins.',
  ],
  [
    'q' => 'Can clay soil cause irrigation pipe leaks?',
    'a' => 'Yes — it\'s one of the primary causes in North Texas. Tarrant County\'s expansive Blackland Prairie clay contracts sharply during summer drought and expands after fall rain. Over 10–15 years, this repeated movement stresses PVC pipe joints and fittings, eventually cracking them. Systems installed with rigid Schedule 40 PVC (common in installations before 2005) are particularly susceptible compared to more flexible poly pipe.',
  ],
  [
    'q' => 'Will my water company credit me for an irrigation leak?',
    'a' => 'Fort Worth Water offers a one-time High Bill Adjustment for documented plumbing or irrigation leaks — typically crediting 50% of the excess usage above your 12-month average, if the leak is repaired and you submit documentation within 30 days of the repair. We provide a written repair invoice on all jobs, which satisfies the documentation requirement. Contact Fort Worth Water at (817) 392-4477 to start the credit process.',
  ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<body>

<?php echo generateServiceSchema($thisService); ?>
<?php echo generateFAQSchema($faqs); ?>

<!-- HowTo Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "HowTo",
  "name": "How Greener Grass Detects and Repairs Underground Irrigation Leaks in Fort Worth",
  "description": "Our 4-step process for locating and repairing underground irrigation leaks in Tarrant County, TX.",
  "step": [
    {
      "@type": "HowToStep",
      "position": 1,
      "name": "Zone Isolation Pressure Test",
      "text": "We pressurize each zone individually and monitor pressure decay. A zone that drops pressure faster than baseline has a leak — this narrows the search to a single zone without excavation."
    },
    {
      "@type": "HowToStep",
      "position": 2,
      "name": "Visual Inspection of Surface Area",
      "text": "We walk the suspect zone looking for wet patches, unusually lush grass over the pipe path, or surface settlement indicating soil washout beneath."
    },
    {
      "@type": "HowToStep",
      "position": 3,
      "name": "Acoustic or Excavation Detection",
      "text": "For confirmed leaks, we use acoustic listening equipment to pinpoint the exact location, or excavate a probe trench along the mainline to expose the leak point directly."
    },
    {
      "@type": "HowToStep",
      "position": 4,
      "name": "Repair Pipe or Fitting, Retest",
      "text": "We cut out the damaged section, install a new coupling or fitting with primer and PVC cement, backfill, retest zone pressure, and verify no secondary leaks remain before calling the job complete."
    }
  ]
}
</script>

<style>
/* ── Leak Detection & Repair Page Styles ─────────────────────────────────── */

/* Hero ── */
.svc-hero {
  position: relative;
  min-height: 65vh;
  display: flex;
  align-items: center;
  background-image: url('/assets/images/hero-leak-detection.jpg');
  background-size: cover;
  background-position: center 40%;
  overflow: hidden;
}

.svc-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    150deg,
    rgba(var(--color-primary-dark-rgb), 0.95) 0%,
    rgba(var(--color-primary-rgb), 0.75) 50%,
    rgba(0,0,0,0.5) 100%
  );
  z-index: 1;
}

.svc-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.04;
  z-index: 2;
  pointer-events: none;
}

.svc-hero-inner {
  position: relative;
  z-index: 3;
  width: 100%;
  padding: var(--space-4xl) var(--space-lg);
}

.svc-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(var(--color-accent-rgb), 0.15);
  border: 1px solid rgba(var(--color-accent-rgb), 0.35);
  color: var(--color-accent);
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 600;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  padding: var(--space-xs) var(--space-md);
  border-radius: var(--radius-xl);
  margin-bottom: var(--space-lg);
}

.svc-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.4rem, 6vw, 4rem);
  letter-spacing: -0.025em;
  line-height: 1.1;
  text-wrap: balance;
  max-width: 720px;
  margin-bottom: var(--space-lg);
}

.svc-hero h1 span {
  background: linear-gradient(90deg, var(--color-accent), #b8e05a);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.svc-hero-desc {
  color: rgba(255,255,255,0.88);
  font-size: var(--font-size-lg);
  max-width: 58ch;
  margin-bottom: var(--space-2xl);
  line-height: 1.6;
}

.hero-cta-group {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
  align-items: center;
}

.btn-hero-primary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-accent);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-accent-dark), var(--shadow-md);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
}

.btn-hero-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark), var(--shadow-lg);
}

.btn-hero-primary:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-accent-dark);
}

.hero-phone-link {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: 1.1rem;
  font-weight: 500;
  text-shadow: 0 1px 3px rgba(0,0,0,0.4);
  transition: color var(--transition-fast);
}
.hero-phone-link:hover { color: var(--color-accent); }

/* Breadcrumbs ── */
.breadcrumb-nav {
  background: var(--color-bg-alt);
  border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.08);
  padding: var(--space-sm) 0;
}
.breadcrumb-list {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  flex-wrap: wrap;
  max-width: var(--max-width);
  margin-inline: auto;
  padding-inline: var(--space-lg);
}
.breadcrumb-item a { color: var(--color-secondary); font-size: var(--font-size-sm); transition: color var(--transition-fast); }
.breadcrumb-item a:hover { color: var(--color-primary); }
.breadcrumb-item.current { font-size: var(--font-size-sm); color: var(--color-text-light); }
.breadcrumb-sep { color: var(--color-gray); font-size: var(--font-size-sm); }

/* Intro Section ── */
.svc-intro {
  background: var(--color-bg);
  padding: var(--section-pad);
}

.svc-intro-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4xl);
  align-items: start;
}

.svc-intro h2 { color: var(--color-primary); margin-bottom: var(--space-lg); }

.lead-para {
  font-size: var(--font-size-lg);
  color: var(--color-text);
  line-height: 1.65;
  margin-bottom: var(--space-lg);
  max-width: 60ch;
}

.svc-intro p { color: var(--color-text-light); max-width: 58ch; line-height: 1.7; }

.last-updated {
  display: inline-block;
  margin-top: var(--space-lg);
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  letter-spacing: 0.05em;
  text-transform: uppercase;
}

/* Warning Signs List ── */
.warning-panel {
  background: var(--color-primary);
  border-radius: var(--radius-xl);
  padding: var(--space-2xl);
  box-shadow: var(--shadow-xl);
  color: var(--color-white);
}

.warning-panel-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-lg);
}

.warning-list { list-style: none; display: flex; flex-direction: column; gap: var(--space-md); }

.warning-item {
  display: flex;
  align-items: flex-start;
  gap: var(--space-md);
  padding-bottom: var(--space-md);
  border-bottom: 1px solid rgba(255,255,255,0.07);
}

.warning-item:last-child { border-bottom: none; padding-bottom: 0; }

.warning-icon {
  flex-shrink: 0;
  width: 36px;
  height: 36px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-sm);
  color: var(--color-accent);
}
.warning-icon svg { width: 18px; height: 18px; stroke: currentColor; }

.warning-text strong {
  display: block;
  font-family: var(--font-heading);
  font-size: 0.95rem;
  font-weight: 600;
  color: var(--color-white);
  margin-bottom: var(--space-xs);
}

.warning-text p {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.65);
  margin: 0;
  line-height: 1.5;
}

/* Divider ── */
.divider-wave { line-height: 0; overflow: hidden; }
.divider-wave svg { display: block; width: 100%; }

/* Leak Cost Signature Section ── */
.leak-cost-section {
  background: var(--color-bg-dark);
  padding: var(--section-pad);
  position: relative;
  overflow: hidden;
}

.leak-cost-section::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
  background: linear-gradient(90deg, transparent, var(--color-accent), transparent);
}

.leak-cost-section::after {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 80% 50%, rgba(var(--color-accent-rgb), 0.04) 0%, transparent 60%);
  pointer-events: none;
}

.cost-headline-wrap {
  text-align: center;
  margin-bottom: var(--space-3xl);
  position: relative;
  z-index: 1;
}

.cost-eyebrow {
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 600;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
}

.cost-headline {
  font-family: var(--font-heading);
  font-size: clamp(2rem, 5vw, 3.5rem);
  font-weight: 700;
  color: var(--color-white);
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.025em;
  margin-bottom: var(--space-md);
}

.cost-headline span { color: var(--color-accent); }

.cost-sub {
  color: rgba(255,255,255,0.6);
  max-width: 50ch;
  margin-inline: auto;
  line-height: 1.65;
}

/* Three stat boxes ── */
.cost-boxes {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-lg);
  position: relative;
  z-index: 1;
}

.cost-box {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(var(--color-accent-rgb), 0.2);
  border-radius: var(--radius-xl);
  padding: var(--space-2xl) var(--space-xl);
  text-align: center;
  position: relative;
  overflow: hidden;
  transition: border-color var(--transition-base), transform var(--transition-base);
}

.cost-box::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
  background: var(--color-accent);
}

.cost-box:hover {
  border-color: rgba(var(--color-accent-rgb), 0.5);
  transform: translateY(-4px);
}

.cost-box-category {
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 600;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.5);
  margin-bottom: var(--space-md);
}

.cost-box-value {
  font-family: var(--font-heading);
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 700;
  color: var(--color-accent);
  line-height: 1;
  letter-spacing: -0.03em;
  margin-bottom: var(--space-md);
}

.cost-box-label {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.7);
  line-height: 1.5;
}

.cost-note {
  text-align: center;
  margin-top: var(--space-2xl);
  font-size: var(--font-size-xs);
  color: rgba(255,255,255,0.4);
  font-style: italic;
  position: relative;
  z-index: 1;
}

/* Process Section ── */
.svc-process {
  background: var(--color-bg-alt);
  padding: var(--section-pad);
}

.section-label {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 600;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-secondary);
  margin-bottom: var(--space-md);
}

.svc-process h2 { color: var(--color-primary); margin-bottom: var(--space-3xl); max-width: 480px; }

.process-steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
}

.process-step {
  padding: var(--space-xl);
  background: var(--color-white);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-card);
  position: relative;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}

.process-step:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-md);
}

.step-num {
  font-family: var(--font-heading);
  font-size: 2.5rem;
  font-weight: 700;
  color: rgba(var(--color-accent-rgb), 0.2);
  line-height: 1;
  margin-bottom: var(--space-sm);
  letter-spacing: -0.04em;
}

.step-icon {
  width: 42px;
  height: 42px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.1);
  border-radius: var(--radius-md);
  color: var(--color-accent-dark);
  margin-bottom: var(--space-md);
}
.step-icon svg { width: 20px; height: 20px; stroke: currentColor; }

.process-step h3 { color: var(--color-primary); font-size: 1rem; margin-bottom: var(--space-sm); }
.process-step p  { font-size: var(--font-size-sm); color: var(--color-text-light); line-height: 1.6; margin: 0; }

/* CTA Banner (CTA #2) ── */
.cta-banner {
  position: relative;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  padding: var(--space-3xl) var(--space-lg);
  overflow: hidden;
}

.cta-banner::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.06;
  pointer-events: none;
}

.cta-banner-inner {
  position: relative;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-2xl);
  flex-wrap: wrap;
}

.cta-banner-text h2 { color: var(--color-white); font-size: clamp(1.6rem, 3.5vw, 2.4rem); margin-bottom: var(--space-sm); }
.cta-banner-text p  { color: rgba(255,255,255,0.8); max-width: 48ch; margin: 0; }

.cta-banner-actions {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  gap: var(--space-md);
  flex-shrink: 0;
}

.cta-phone-big {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  color: var(--color-accent);
  font-family: var(--font-heading);
  font-size: clamp(1.4rem, 2.5vw, 2rem);
  font-weight: 600;
  transition: color var(--transition-fast);
}
.cta-phone-big:hover { color: #b8e05a; }

.btn-cta-white {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-white);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-size: 0.95rem;
  font-weight: 700;
  letter-spacing: 0.05em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 rgba(0,0,0,0.2);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
}
.btn-cta-white:hover { transform: translateY(-2px); box-shadow: 0 6px 0 rgba(0,0,0,0.2); }
.btn-cta-white:active { transform: translateY(2px); box-shadow: 0 2px 0 rgba(0,0,0,0.2); }

/* FAQ ── */
.svc-faq {
  background: var(--color-bg);
  padding: var(--section-pad);
}

.faq-header { text-align: center; margin-bottom: var(--space-3xl); }
.faq-header .section-label { color: var(--color-secondary); display: inline-flex; align-items: center; gap: var(--space-sm); font-family: var(--font-heading); font-size: var(--font-size-sm); font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase; margin-bottom: var(--space-md); }
.faq-header h2 { color: var(--color-primary); }

.faq-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-lg);
}

.faq-item {
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  border-top: 3px solid var(--color-accent);
  box-shadow: var(--shadow-card);
  transition: box-shadow var(--transition-base);
}
.faq-item:hover { box-shadow: var(--shadow-md); }

.faq-item h3 { color: var(--color-primary); font-size: clamp(1rem, 1.8vw, 1.1rem); margin-bottom: var(--space-md); line-height: 1.35; }
.faq-item p  { color: var(--color-text-light); font-size: var(--font-size-sm); line-height: 1.65; margin: 0; }

/* Closing CTA + Form (CTA #3) ── */
.svc-closing-cta {
  background: var(--color-bg-alt);
  padding: var(--section-pad);
}

.closing-cta-inner {
  display: grid;
  grid-template-columns: 1fr auto;
  gap: var(--space-4xl);
  align-items: start;
}

.closing-cta-text h2 { color: var(--color-primary); margin-bottom: var(--space-md); }
.closing-cta-text p  { color: var(--color-text-light); max-width: 52ch; line-height: 1.7; }

.closing-cta-form {
  background: var(--color-white);
  border-radius: var(--radius-xl);
  padding: var(--space-2xl);
  box-shadow: var(--shadow-xl);
  border: 1px solid rgba(var(--color-primary-rgb), 0.07);
  min-width: 360px;
}

.closing-cta-form h3 { color: var(--color-primary); font-size: 1.15rem; margin-bottom: var(--space-lg); }

.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-md); }
.form-field { display: flex; flex-direction: column; gap: var(--space-xs); }
.form-field label { font-size: var(--font-size-sm); font-weight: 600; color: var(--color-primary); }

.form-field input,
.form-field select {
  padding: var(--space-md);
  border: 2px solid rgba(var(--color-primary-rgb), 0.12);
  border-radius: var(--radius-md);
  font-size: var(--font-size-sm);
  color: var(--color-text);
  background: var(--color-bg);
  transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
  -webkit-appearance: none;
}

.form-field input:focus,
.form-field select:focus {
  outline: none;
  border-color: var(--color-accent);
  box-shadow: 0 0 0 3px rgba(var(--color-accent-rgb), 0.15);
}

.form-field-full { grid-column: 1 / -1; }

.btn-form-submit {
  width: 100%;
  padding: var(--space-md) var(--space-lg);
  background: var(--color-accent);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 700;
  letter-spacing: 0.05em;
  text-transform: uppercase;
  border: none;
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-accent-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  margin-top: var(--space-md);
  cursor: pointer;
  overflow: hidden;
}
.btn-form-submit:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.btn-form-submit:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-accent-dark); }

.form-privacy-note {
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  text-align: center;
  margin-top: var(--space-sm);
}

/* Related Services ── */
.related-services {
  background: var(--color-bg);
  padding: var(--section-pad);
}
.related-services h2 { color: var(--color-primary); text-align: center; margin-bottom: var(--space-2xl); }

.related-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-lg);
}

.related-card {
  display: flex;
  align-items: center;
  gap: var(--space-md);
  padding: var(--space-lg);
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg);
  border: 1px solid rgba(var(--color-primary-rgb), 0.07);
  transition: transform var(--transition-base), box-shadow var(--transition-base), background var(--transition-base);
  box-shadow: var(--shadow-card);
}
.related-card:hover { transform: translateY(-3px); box-shadow: var(--shadow-md); background: var(--color-white); }

.related-card-icon {
  flex-shrink: 0;
  width: 44px;
  height: 44px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.1);
  border-radius: var(--radius-md);
  color: var(--color-accent-dark);
}
.related-card-icon svg { width: 20px; height: 20px; stroke: currentColor; }

.related-card-text strong { display: block; font-family: var(--font-heading); font-size: 0.95rem; font-weight: 600; color: var(--color-primary); margin-bottom: var(--space-xs); }
.related-card-text span   { font-size: var(--font-size-xs); color: var(--color-text-light); }

/* Responsive ── */
@media (max-width: 1023px) {
  .svc-intro-grid  { grid-template-columns: 1fr; }
  .process-steps   { grid-template-columns: repeat(2, 1fr); }
  .cost-boxes      { grid-template-columns: 1fr; max-width: 480px; margin-inline: auto; }
  .related-grid    { grid-template-columns: repeat(2, 1fr); }
  .faq-grid        { grid-template-columns: 1fr; }
}

@media (max-width: 767px) {
  .svc-hero        { min-height: 70vh; }
  .process-steps   { grid-template-columns: 1fr; }
  .closing-cta-inner { grid-template-columns: 1fr; }
  .closing-cta-form  { min-width: 0; }
  .form-row        { grid-template-columns: 1fr; }
  .cta-banner-inner { flex-direction: column; align-items: flex-start; }
  .cta-banner-actions { align-items: flex-start; }
  .related-grid    { grid-template-columns: 1fr; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ─── Hero (CTA #1) ──────────────────────────────────────────────────────── -->
<section class="svc-hero" aria-label="Leak Detection and Repair Service Hero">
  <div class="svc-hero-inner container">
    <span class="svc-eyebrow">
      <i data-lucide="search" aria-hidden="true"></i>
      Leak Detection &amp; Repair — Fort Worth, TX
    </span>
    <h1>That <span>Soggy Patch</span> in Your Yard Is Already Costing You $30–$80 a Month.</h1>
    <p class="svc-hero-desc">
      Underground irrigation leaks in North Texas are easy to miss and expensive to ignore. Fort Worth's expansive clay soil cracks pipes silently — for months. We find leaks fast with pressure testing and acoustic detection, then repair them in a single visit.
    </p>
    <div class="hero-cta-group">
      <a href="/contact/" class="btn-hero-primary">
        <i data-lucide="phone-call" aria-hidden="true"></i>
        Schedule Leak Diagnosis
      </a>
      <a href="tel:<?php echo $contactPhoneRaw; ?>" class="hero-phone-link">
        <i data-lucide="phone" aria-hidden="true"></i>
        <?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?>
      </a>
    </div>
  </div>
</section>

<?php
renderBreadcrumbs([
  ['label' => 'Home',     'url' => '/'],
  ['label' => 'Services', 'url' => '/services/'],
  ['label' => 'Leak Detection & Repair', 'url' => '/services/leak-detection-repair/'],
]);
?>

<!-- ─── Intro / Answer-First ───────────────────────────────────────────────── -->
<section class="svc-intro" data-animate="fade-up" aria-labelledby="intro-heading">
  <div class="container svc-intro-grid">

    <div>
      <h2 id="intro-heading">Underground Irrigation Leaks in Fort Worth — How to Find Them and What Repair Costs</h2>
      <p class="lead-para">
        Most underground irrigation leaks in Fort Worth cost <strong>$30–$80 per month</strong> in excess water before they're discovered. Repair typically runs <strong>$150–$400</strong> depending on pipe depth and soil access — making early detection the single best investment a homeowner can make before summer water bills arrive.
      </p>
      <p>
        Tarrant County's expansive Blackland Prairie clay is the primary culprit. The soil shrinks 2–4 inches during summer drought and expands after fall rain — repeatedly stressing PVC fittings and joints. Systems over 10 years old and those with Schedule 40 rigid pipe (pre-2005 installations) are most vulnerable. We see the pattern every spring startup: a system that ran fine in October is leaking underground by March.
      </p>
      <p>
        Signs you already have a leak: one zone that won't hold pressure, a single area of the yard that stays green or soggy without rain, a July water bill 25–40% higher than June, or a controller that shows abnormally long cycle times to build zone pressure. Any one of these warrants a pressure test.
      </p>
      <span class="last-updated">Last Updated: April 2026</span>
    </div>

    <div class="warning-panel" data-animate="fade-up">
      <div class="warning-panel-title">Signs of an Underground Leak</div>
      <ul class="warning-list" role="list">
        <li class="warning-item">
          <div class="warning-icon"><i data-lucide="droplets" aria-hidden="true"></i></div>
          <div class="warning-text">
            <strong>One Zone Stays Soggy</strong>
            <p>A single lawn area that stays wet days after rain or watering — often with darker grass directly above the pipe path.</p>
          </div>
        </li>
        <li class="warning-item">
          <div class="warning-icon"><i data-lucide="trending-up" aria-hidden="true"></i></div>
          <div class="warning-text">
            <strong>Spike on Water Bill</strong>
            <p>An unexplained 20–40% jump in a single billing cycle — especially during a month with fewer run days than normal.</p>
          </div>
        </li>
        <li class="warning-item">
          <div class="warning-icon"><i data-lucide="gauge" aria-hidden="true"></i></div>
          <div class="warning-text">
            <strong>Low Zone Pressure</strong>
            <p>One zone activates but heads barely pop or rotors turn slowly — the line is losing pressure underground before it reaches heads.</p>
          </div>
        </li>
        <li class="warning-item">
          <div class="warning-icon"><i data-lucide="leaf" aria-hidden="true"></i></div>
          <div class="warning-text">
            <strong>Unusually Green Strip</strong>
            <p>A narrow band of brighter, faster-growing grass tracing the pipe route — the underground leak is irrigating from below.</p>
          </div>
        </li>
      </ul>
    </div>

  </div>
</section>

<!-- Divider ── -->
<div class="divider-wave" aria-hidden="true">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
    <path fill="#ffffff" d="M0,60 C480,10 960,50 1440,10 L1440,60 Z"/>
  </svg>
</div>

<!-- ─── Leak Cost Signature Section ──────────────────────────────────────── -->
<section class="leak-cost-section" aria-labelledby="cost-heading">
  <div class="container">

    <div class="cost-headline-wrap">
      <div class="cost-eyebrow">The True Cost of Waiting</div>
      <h2 class="cost-headline" id="cost-heading">
        Every Day You Wait,<br>a <span>Hidden Leak</span> Charges You More.
      </h2>
      <p class="cost-sub">
        A typical mid-size irrigation leak in Fort Worth loses 100–300 gallons per day. Here's what that means for your wallet across different timelines.
      </p>
    </div>

    <div class="cost-boxes" data-animate="fade-up" role="region" aria-label="Leak cost estimates by duration">

      <div class="cost-box">
        <div class="cost-box-category">One Month Undetected</div>
        <div class="cost-box-value">$35–$75</div>
        <div class="cost-box-label">
          3,000–9,000 gallons wasted.<br>
          Typically caught as a billing anomaly — repair cost is minimal at this stage.
        </div>
      </div>

      <div class="cost-box">
        <div class="cost-box-category">Three Months Undetected</div>
        <div class="cost-box-value">$105–$225</div>
        <div class="cost-box-label">
          9,000–27,000 gallons wasted.<br>
          Soil erosion around pipe begins. Repair may now require more excavation.
        </div>
      </div>

      <div class="cost-box">
        <div class="cost-box-category">Six Months Undetected</div>
        <div class="cost-box-value">$210–$450+</div>
        <div class="cost-box-label">
          18,000–54,000 gallons wasted.<br>
          Washout cavities form. Root intrusion possible. Repair cost rises significantly.
        </div>
      </div>

    </div>

    <p class="cost-note">
      Estimates based on Fort Worth Water Tier 2 residential rate ($0.0115/gallon) and a 100–300 GPD leak rate. Fort Worth Water offers a one-time High Bill Adjustment credit for documented repairs — we provide written invoices on all jobs.
    </p>

  </div>
</section>

<!-- Divider ── -->
<div class="divider-wave" aria-hidden="true" style="background: var(--color-bg-dark);">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
    <path fill="#f2f8f4" d="M0,0 C360,60 1080,10 1440,40 L1440,0 Z"/>
  </svg>
</div>

<!-- ─── Process Section ────────────────────────────────────────────────────── -->
<section class="svc-process" aria-labelledby="process-heading">
  <div class="container">
    <span class="section-label">
      <i data-lucide="list-ordered" aria-hidden="true"></i>
      Our Leak-Finding Process
    </span>
    <h2 id="process-heading">How We Find It — Before We Dig Anything</h2>

    <div class="process-steps">
      <div class="process-step" data-animate="fade-up" style="--delay: 0ms">
        <div class="step-num">01</div>
        <div class="step-icon"><i data-lucide="gauge" aria-hidden="true"></i></div>
        <h3>Zone Isolation Pressure Test</h3>
        <p>We pressurize each zone and monitor pressure decay rate. A leaking zone bleeds off faster than baseline — this pinpoints which zone without touching a shovel.</p>
      </div>
      <div class="process-step" data-animate="fade-up" style="--delay: 100ms">
        <div class="step-num">02</div>
        <div class="step-icon"><i data-lucide="eye" aria-hidden="true"></i></div>
        <h3>Surface Inspection</h3>
        <p>We walk the entire suspect zone — looking for wet patches, soil settlement, unusually lush grass strips, or standing water over the pipe route.</p>
      </div>
      <div class="process-step" data-animate="fade-up" style="--delay: 200ms">
        <div class="step-num">03</div>
        <div class="step-icon"><i data-lucide="headphones" aria-hidden="true"></i></div>
        <h3>Acoustic or Excavation Detection</h3>
        <p>For confirmed leaks without obvious surface signs, we use acoustic listening equipment to pinpoint the exact location — minimizing excavation to a targeted area.</p>
      </div>
      <div class="process-step" data-animate="fade-up" style="--delay: 300ms">
        <div class="step-num">04</div>
        <div class="step-icon"><i data-lucide="check-circle" aria-hidden="true"></i></div>
        <h3>Repair, Backfill &amp; Retest</h3>
        <p>We cut out damaged pipe or fittings, install new sections with primer and PVC cement, backfill, and retest zone pressure before we call the job complete.</p>
      </div>
    </div>
  </div>
</section>

<!-- Divider ── -->
<div class="divider-wave" aria-hidden="true">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
    <path fill="#f2f8f4" d="M0,60 C480,20 960,60 1440,30 L1440,60 Z"/>
  </svg>
</div>

<!-- ─── CTA Banner (CTA #2) ───────────────────────────────────────────────── -->
<section class="cta-banner" aria-label="Schedule irrigation leak diagnosis">
  <div class="container cta-banner-inner">
    <div class="cta-banner-text">
      <h2>Found a Suspicious Zone? Don't Wait Until the Next Bill.</h2>
      <p>Same-week leak diagnosis scheduling available across Tarrant County. We give you a firm repair price after the pressure test — before any excavation.</p>
    </div>
    <div class="cta-banner-actions">
      <a href="tel:<?php echo $contactPhoneRaw; ?>" class="cta-phone-big">
        <i data-lucide="phone-call" aria-hidden="true"></i>
        <?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?>
      </a>
      <a href="/contact/" class="btn-cta-white">
        <i data-lucide="calendar" aria-hidden="true"></i>
        Book Leak Diagnosis
      </a>
    </div>
  </div>
</section>

<!-- Divider ── -->
<div class="divider-wave" aria-hidden="true">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
    <path fill="#1b4332" d="M0,60 L1440,60 L1440,20 C1080,60 360,0 0,20 Z"/>
  </svg>
</div>

<!-- ─── FAQ Section ────────────────────────────────────────────────────────── -->
<section class="svc-faq" aria-labelledby="faq-heading">
  <div class="container">
    <div class="faq-header">
      <span class="section-label">Common Questions</span>
      <h2 id="faq-heading">Irrigation Leak FAQ — Fort Worth &amp; Tarrant County</h2>
    </div>
    <div class="faq-grid">
      <?php foreach ($faqs as $faq): ?>
      <div class="faq-item answer-block" data-animate="fade-up">
        <h3><?php echo htmlspecialchars($faq['q'], ENT_QUOTES, 'UTF-8'); ?></h3>
        <p><?php echo htmlspecialchars($faq['a'], ENT_QUOTES, 'UTF-8'); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider ── -->
<div class="divider-wave" aria-hidden="true">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
    <path fill="#ffffff" d="M0,0 C480,50 960,10 1440,40 L1440,0 Z"/>
  </svg>
</div>

<!-- ─── Closing CTA + Form (CTA #3) ──────────────────────────────────────── -->
<section class="svc-closing-cta" aria-labelledby="closing-cta-heading">
  <div class="container closing-cta-inner">

    <div class="closing-cta-text" data-animate="fade-up">
      <h2 id="closing-cta-heading">Stop the Leak. Get Your High Bill Credit. Call Greener Grass.</h2>
      <p>
        Fill out the quick form and describe what you're seeing — soggy zone, high bill, low pressure. We'll schedule a pressure test, find the leak, and provide a written repair quote before any digging.
      </p>
      <br>
      <p>
        We provide written invoices on all repairs — the documentation Fort Worth Water requires to apply for their one-time High Bill Adjustment credit.
      </p>
    </div>

    <div class="closing-cta-form" data-animate="fade-up">
      <h3>Report a Suspected Leak</h3>
      <form action="<?php echo htmlspecialchars($formEndpoint, ENT_QUOTES, 'UTF-8'); ?>" method="POST">
        <input type="text"   name="_honey"          style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="hidden" name="_next"            value="/thank-you">
        <input type="hidden" name="_consent_version" value="v2.1">
        <input type="hidden" name="_consent_page"    value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="service"          value="Leak Detection & Repair">

        <div class="form-row">
          <div class="form-field">
            <label for="ld-name">Your Name</label>
            <input type="text" id="ld-name" name="name" required autocomplete="name" placeholder="Jane Smith">
          </div>
          <div class="form-field">
            <label for="ld-phone">Phone Number</label>
            <input type="tel" id="ld-phone" name="phone" required autocomplete="tel" placeholder="(817) 555-0000">
          </div>
          <div class="form-field">
            <label for="ld-email">Email</label>
            <input type="email" id="ld-email" name="email" required autocomplete="email" placeholder="jane@example.com">
          </div>
          <div class="form-field">
            <label for="ld-zip">Zip Code</label>
            <input type="text" id="ld-zip" name="zip" placeholder="76102" inputmode="numeric">
          </div>
          <div class="form-field form-field-full">
            <label for="ld-message">What Are You Seeing? (optional)</label>
            <input type="text" id="ld-message" name="message" placeholder="e.g. Zone 3 stays soggy, water bill up $80 last month">
          </div>
        </div>

        <button type="submit" class="btn-form-submit">Send Leak Report</button>
        <p class="form-privacy-note">We typically respond same business day. <a href="/privacy-policy/" style="color: var(--color-secondary);">Privacy Policy</a></p>
      </form>
    </div>

  </div>
</section>

<!-- ─── Related Services ───────────────────────────────────────────────────── -->
<section class="related-services" aria-labelledby="related-heading">
  <div class="container">
    <h2 id="related-heading">Other Irrigation Services</h2>
    <div class="related-grid">
      <a href="/services/irrigation-system-repair/" class="related-card">
        <div class="related-card-icon"><i data-lucide="wrench" aria-hidden="true"></i></div>
        <div class="related-card-text">
          <strong>Irrigation System Repair</strong>
          <span>Valves, controllers, broken pipes — diagnosed and repaired same visit</span>
        </div>
      </a>
      <a href="/services/spring-startup/" class="related-card">
        <div class="related-card-icon"><i data-lucide="sun" aria-hidden="true"></i></div>
        <div class="related-card-text">
          <strong>Spring System Startup</strong>
          <span>Full pressure test on every zone before the heat season starts</span>
        </div>
      </a>
      <a href="/services/smart-controller-upgrades/" class="related-card">
        <div class="related-card-icon"><i data-lucide="wifi" aria-hidden="true"></i></div>
        <div class="related-card-text">
          <strong>Smart Controller Upgrades</strong>
          <span>Smart controllers detect flow anomalies that signal hidden leaks early</span>
        </div>
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

</body>
</html>
<?php /* Last Updated: April 2026 */ ?>
