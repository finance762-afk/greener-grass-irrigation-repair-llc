<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page Setup ───────────────────────────────────────────────────────────────
$pageTitle       = 'Drip Irrigation Installation Fort Worth TX | Greener Grass';
$pageDescription = 'Professional drip irrigation design and installation in Fort Worth, TX. Save 30–50% on water vs. spray heads. Beds, gardens, xeriscape. Free estimate. Licensed & insured.';
$canonicalUrl    = $siteUrl . '/services/drip-irrigation/';
$canonicalLink = '<link rel="canonical" href="' . htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') . '">'; // QA canonical reference
$currentPage     = 'services';
$heroImage       = '/assets/images/hero-drip-irrigation.jpg';

$thisService = [
  'name'      => 'Drip Irrigation',
  'slug'      => 'drip-irrigation',
  'shortDesc' => 'Water-efficient drip systems for beds, shrubs, and gardens — designed and installed to spec.',
];

$faqs = [
  [
    'q' => 'Is drip irrigation worth it in Fort Worth\'s climate?',
    'a' => 'Yes — Fort Worth summers average 18+ days above 100°F with frequent Stage 2 and Stage 3 water restrictions. Drip systems deliver water directly to root zones, cutting water use 30–50% compared to spray heads. Most homeowners recoup installation costs within one to two watering seasons through lower Fort Worth Water bills.',
  ],
  [
    'q' => 'What plants benefit most from drip irrigation?',
    'a' => 'Drip irrigation is ideal for flower beds, vegetable gardens, shrub borders, foundation plantings, ornamental grasses, and xeriscape gardens with drought-tolerant species. In North Texas, it\'s especially effective for crape myrtles, knockout roses, lantana, and vegetable gardens where overhead spray can spread fungal disease during humid summer periods.',
  ],
  [
    'q' => 'How much does drip irrigation installation cost in Fort Worth?',
    'a' => 'Most residential drip irrigation installations in Fort Worth range from $400–$1,800 depending on the number of beds, total linear footage, emitter count, and whether the system connects to an existing irrigation controller or requires a new dedicated zone. We provide a firm written quote before any work begins.',
  ],
  [
    'q' => 'How do I maintain a drip system in North Texas heat?',
    'a' => 'Flush the mainline filter monthly during peak summer months. Inspect emitters at each watering zone quarterly — the Fort Worth sun degrades un-sheathed micro-tubing over 3–5 years, and emitters can clog with mineral deposits from Tarrant County water. We recommend a spring startup check each March to clear clogs and verify emitter flow rates before the heat season begins.',
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
  "name": "How Greener Grass Installs Drip Irrigation in Fort Worth",
  "description": "Our 4-step process for designing and installing water-efficient drip irrigation systems for Fort Worth landscape beds and gardens.",
  "step": [
    {
      "@type": "HowToStep",
      "position": 1,
      "name": "Map Beds and Plant Water Requirements",
      "text": "We walk all planting beds, map square footage, identify plant species, and calculate daily water demand by zone — the foundation of a properly sized drip system."
    },
    {
      "@type": "HowToStep",
      "position": 2,
      "name": "Size Mainline and Emitter Flow Rates",
      "text": "We calculate required GPH per zone based on plant demand and soil infiltration rate, then select appropriate emitter sizes (0.5, 1, or 2 GPH) and mainline diameter."
    },
    {
      "@type": "HowToStep",
      "position": 3,
      "name": "Install Header Tubing and Individual Emitters",
      "text": "We install 1/2\" header tubing from the supply valve, route 1/4\" distribution tubing to each plant, and place emitters at correct distance from root zone."
    },
    {
      "@type": "HowToStep",
      "position": 4,
      "name": "Test Pressure and Adjust Flow",
      "text": "We pressurize the zone, verify every emitter is flowing at spec, check pressure regulator calibration, and walk you through controller runtime settings."
    }
  ]
}
</script>

<style>
/* ── Drip Irrigation Page Styles ─────────────────────────────────────────── */

/* Hero ── */
.svc-hero {
  position: relative;
  min-height: 65vh;
  display: flex;
  align-items: center;
  background-image: url('/assets/images/hero-drip-irrigation.jpg');
  background-size: cover;
  background-position: center;
  overflow: hidden;
}

.svc-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    135deg,
    rgba(var(--color-primary-dark-rgb), 0.88) 0%,
    rgba(var(--color-primary-rgb), 0.72) 55%,
    rgba(0,0,0,0.45) 100%
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
  max-width: 700px;
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
  max-width: 55ch;
  margin-bottom: var(--space-2xl);
  line-height: 1.6;
}

.svc-hero-ctas {
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
  font-weight: 600;
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
  letter-spacing: 0.03em;
  text-shadow: 0 1px 3px rgba(0,0,0,0.4);
  transition: color var(--transition-fast);
}

.hero-phone-link:hover {
  color: var(--color-accent);
}

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

.breadcrumb-item a {
  color: var(--color-secondary);
  font-size: var(--font-size-sm);
  transition: color var(--transition-fast);
}

.breadcrumb-item a:hover { color: var(--color-primary); }
.breadcrumb-item.current { font-size: var(--font-size-sm); color: var(--color-text-light); }
.breadcrumb-sep { color: var(--color-gray); font-size: var(--font-size-sm); }

/* Intro / Answer-First Section ── */
.svc-intro {
  background: var(--color-bg);
  padding: var(--section-pad);
}

.svc-intro-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: start;
}

.svc-intro-content h2 {
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
}

.svc-intro-content p {
  color: var(--color-text-light);
  max-width: 60ch;
  line-height: 1.7;
}

.svc-intro-content .lead-para {
  font-size: var(--font-size-lg);
  color: var(--color-text);
  font-weight: 400;
  line-height: 1.65;
  margin-bottom: var(--space-lg);
  max-width: 58ch;
}

.last-updated {
  display: inline-block;
  margin-top: var(--space-lg);
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  letter-spacing: 0.05em;
  text-transform: uppercase;
}

/* Why Choose Us ── */
.why-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-lg);
  margin-top: var(--space-md);
}

.why-item {
  display: flex;
  gap: var(--space-md);
  align-items: flex-start;
  padding: var(--space-lg);
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg);
  border-left: 3px solid var(--color-accent);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  box-shadow: var(--shadow-card);
}

.why-item:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}

.why-icon {
  flex-shrink: 0;
  width: 44px;
  height: 44px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.12);
  border-radius: var(--radius-md);
  color: var(--color-accent-dark);
}

.why-icon svg { width: 22px; height: 22px; stroke: currentColor; }

.why-text strong {
  display: block;
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 600;
  color: var(--color-primary);
  margin-bottom: var(--space-xs);
  letter-spacing: 0.02em;
}

.why-text p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  margin: 0;
  line-height: 1.55;
}

/* Divider ── */
.divider-wave {
  line-height: 0;
  overflow: hidden;
}
.divider-wave svg { display: block; width: 100%; }

/* Water Savings Signature Section ── */
.water-savings-section {
  background: var(--color-bg-alt);
  padding: var(--section-pad);
  position: relative;
  overflow: visible;
}

.water-savings-section::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 4px;
  background: linear-gradient(90deg, var(--color-accent), var(--color-secondary), var(--color-accent));
}

.water-savings-label {
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

.water-savings-label::before {
  content: '';
  display: block;
  width: 28px;
  height: 2px;
  background: var(--color-accent);
}

.water-savings-section h2 {
  color: var(--color-primary);
  margin-bottom: var(--space-md);
  max-width: 540px;
}

.water-savings-section .section-lead {
  color: var(--color-text-light);
  max-width: 52ch;
  margin-bottom: var(--space-3xl);
  line-height: 1.7;
}

/* Comparison card — overlaps section boundary */
.savings-card-wrap {
  position: relative;
}

.savings-comparison {
  display: grid;
  grid-template-columns: 1fr auto 1fr;
  gap: 0;
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
  margin-bottom: calc(-1 * var(--space-3xl));
  position: relative;
  z-index: 2;
}

.savings-col {
  padding: var(--space-2xl);
}

.savings-col-before {
  background: var(--color-white);
  border-right: 1px solid rgba(var(--color-primary-rgb), 0.08);
}

.savings-col-after {
  background: var(--color-primary);
  color: var(--color-white);
}

.savings-vs {
  display: flex;
  align-items: center;
  justify-content: center;
  background: var(--color-accent);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-size: 1.4rem;
  font-weight: 700;
  width: 56px;
  letter-spacing: 0.03em;
  writing-mode: vertical-rl;
  text-orientation: mixed;
  border: 4px solid var(--color-white);
  box-shadow: var(--shadow-md);
  position: relative;
  z-index: 3;
}

.savings-col-label {
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 600;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  margin-bottom: var(--space-lg);
  opacity: 0.7;
}

.savings-col-after .savings-col-label { color: rgba(255,255,255,0.7); }
.savings-col-before .savings-col-label { color: var(--color-secondary); }

.savings-stat {
  margin-bottom: var(--space-lg);
}

.savings-stat-value {
  display: block;
  font-family: var(--font-heading);
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 700;
  line-height: 1;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-xs);
}

.savings-col-before .savings-stat-value { color: var(--color-text); }
.savings-col-after  .savings-stat-value { color: var(--color-accent); }

.savings-stat-label {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.4;
}

.savings-col-after .savings-stat-label { color: rgba(255,255,255,0.75); }

.savings-note {
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  margin-top: var(--space-2xl);
  font-style: italic;
}

/* Process Section ── */
.svc-process {
  background: var(--color-bg-dark);
  padding: var(--section-pad);
  padding-top: calc(80px + var(--space-3xl));
}

.svc-process .section-label {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 600;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
}

.svc-process h2 {
  color: var(--color-white);
  margin-bottom: var(--space-2xl);
  max-width: 500px;
}

.process-steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
}

.process-step {
  position: relative;
  padding: var(--space-xl);
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: var(--radius-lg);
  transition: background var(--transition-base), transform var(--transition-base);
}

.process-step:hover {
  background: rgba(255,255,255,0.08);
  transform: translateY(-4px);
}

.process-step:not(:last-child)::after {
  content: '';
  position: absolute;
  top: calc(var(--space-xl) + 18px);
  right: calc(-1 * var(--space-lg) / 2);
  width: var(--space-lg);
  height: 2px;
  background: rgba(var(--color-accent-rgb), 0.3);
}

.step-num {
  font-family: var(--font-heading);
  font-size: 3rem;
  font-weight: 700;
  color: rgba(var(--color-accent-rgb), 0.18);
  line-height: 1;
  margin-bottom: var(--space-md);
  letter-spacing: -0.04em;
}

.step-icon {
  width: 42px;
  height: 42px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-md);
  color: var(--color-accent);
  margin-bottom: var(--space-md);
}

.step-icon svg { width: 20px; height: 20px; stroke: currentColor; }

.process-step h3 {
  color: var(--color-white);
  font-size: 1rem;
  margin-bottom: var(--space-sm);
  letter-spacing: 0.01em;
}

.process-step p {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.6);
  line-height: 1.6;
  margin: 0;
}

/* CTA Banner (Mid-Page — CTA #2) ── */
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

.cta-banner-text h2 {
  color: var(--color-white);
  font-size: clamp(1.6rem, 3.5vw, 2.4rem);
  margin-bottom: var(--space-sm);
}

.cta-banner-text p {
  color: rgba(255,255,255,0.8);
  max-width: 48ch;
  margin: 0;
}

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
  letter-spacing: 0.02em;
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
  font-weight: 600;
  letter-spacing: 0.05em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 rgba(0,0,0,0.2);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
}

.btn-cta-white:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 rgba(0,0,0,0.2);
}

.btn-cta-white:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 rgba(0,0,0,0.2);
}

/* FAQ Section ── */
.svc-faq {
  background: var(--color-bg);
  padding: var(--section-pad);
}

.faq-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}

.faq-header .section-label {
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

.faq-header h2 {
  color: var(--color-primary);
}

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

.faq-item:hover {
  box-shadow: var(--shadow-md);
}

.faq-item h3 {
  color: var(--color-primary);
  font-size: clamp(1rem, 1.8vw, 1.15rem);
  margin-bottom: var(--space-md);
  line-height: 1.35;
}

.faq-item p {
  color: var(--color-text-light);
  font-size: var(--font-size-sm);
  line-height: 1.65;
  margin: 0;
}

/* Closing CTA (CTA #3) ── */
.svc-closing-cta {
  background: var(--color-bg-alt);
  padding: var(--section-pad);
  position: relative;
  overflow: hidden;
}

.svc-closing-cta::before {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 3px;
  background: linear-gradient(90deg, var(--color-secondary), var(--color-accent), var(--color-secondary));
}

.closing-cta-inner {
  display: grid;
  grid-template-columns: 1fr auto;
  gap: var(--space-3xl);
  align-items: center;
}

.closing-cta-text h2 {
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}

.closing-cta-text p {
  color: var(--color-text-light);
  max-width: 52ch;
  margin: 0;
}

.closing-cta-form {
  background: var(--color-white);
  border-radius: var(--radius-xl);
  padding: var(--space-2xl);
  box-shadow: var(--shadow-xl);
  border: 1px solid rgba(var(--color-primary-rgb), 0.07);
  min-width: 360px;
}

.closing-cta-form h3 {
  color: var(--color-primary);
  font-size: 1.2rem;
  margin-bottom: var(--space-lg);
}

.form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-md);
}

.form-field {
  display: flex;
  flex-direction: column;
  gap: var(--space-xs);
}

.form-field label {
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: var(--color-primary);
  letter-spacing: 0.02em;
}

.form-field input,
.form-field select {
  padding: var(--space-md) var(--space-md);
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

.form-field-full {
  grid-column: 1 / -1;
}

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
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-accent-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  margin-top: var(--space-md);
  overflow: hidden;
  cursor: pointer;
  border: none;
}

.btn-form-submit:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
}

.btn-form-submit:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-accent-dark);
}

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

.related-services h2 {
  color: var(--color-primary);
  text-align: center;
  margin-bottom: var(--space-2xl);
}

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

.related-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
  background: var(--color-white);
}

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

.related-card-text strong {
  display: block;
  font-family: var(--font-heading);
  font-size: 0.95rem;
  font-weight: 600;
  color: var(--color-primary);
  margin-bottom: var(--space-xs);
}

.related-card-text span {
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
}

/* Responsive ── */
@media (max-width: 1023px) {
  .process-steps { grid-template-columns: repeat(2, 1fr); }
  .process-step:not(:last-child)::after { display: none; }
  .savings-comparison { grid-template-columns: 1fr 50px 1fr; }
  .savings-vs { writing-mode: horizontal-tb; width: 100%; }
  .related-grid { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 767px) {
  .svc-hero { min-height: 70vh; }
  .svc-intro-grid { grid-template-columns: 1fr; gap: var(--space-2xl); }
  .savings-comparison { grid-template-columns: 1fr; }
  .savings-vs { display: none; }
  .savings-col-before { border-right: none; border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.08); }
  .process-steps { grid-template-columns: 1fr; }
  .faq-grid { grid-template-columns: 1fr; }
  .closing-cta-inner { grid-template-columns: 1fr; }
  .closing-cta-form { min-width: 0; }
  .form-row { grid-template-columns: 1fr; }
  .cta-banner-inner { flex-direction: column; align-items: flex-start; }
  .cta-banner-actions { align-items: flex-start; }
  .related-grid { grid-template-columns: 1fr; }
  .savings-comparison { margin-bottom: 0; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ─── Hero Section (CTA #1) ──────────────────────────────────────────────── -->
<section class="svc-hero" aria-label="Drip Irrigation Service Hero">
  <div class="svc-hero-inner container">
    <span class="svc-eyebrow">
      <i data-lucide="leaf" aria-hidden="true"></i>
      Drip Irrigation — Fort Worth, TX
    </span>
    <h1>Stop Watering Your Driveway.<br><span>Water Your Roots Instead.</span></h1>
    <p class="svc-hero-desc">
      Fort Worth's summer heat punishes spray-head systems — up to half the water evaporates before it reaches roots. We design and install precision drip systems for beds, gardens, and xeriscape that cut water use 30–50% and keep plants healthier all season.
    </p>
    <div class="svc-hero-ctas">
      <a href="/contact/" class="btn-hero-primary">
        <i data-lucide="calendar" aria-hidden="true"></i>
        Get a Free Estimate
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
  ['label' => 'Drip Irrigation', 'url' => '/services/drip-irrigation/'],
]);
?>

<!-- ─── Intro / Answer-First ───────────────────────────────────────────────── -->
<section class="svc-intro" data-animate="fade-up" aria-labelledby="intro-heading">
  <div class="container svc-intro-grid">

    <div class="svc-intro-content">
      <h2 id="intro-heading">Drip Irrigation in Fort Worth — What It Costs and Why It Works</h2>
      <p class="lead-para">
        A properly designed drip irrigation system delivers water at 0.5–2 gallons per hour directly to root zones, eliminating the evaporation and runoff losses that plague traditional spray heads during Fort Worth's 100°F summer afternoons. Installation typically runs <strong>$400–$1,800</strong> depending on bed size and emitter count — most homeowners recover that cost within two summers.
      </p>
      <p>
        North Texas clay soil compounds the problem with spray heads: water pooled on the surface triggers shallow root growth, leaving plants fragile during drought restrictions. Drip forces roots to grow deeper in search of consistent moisture — exactly what foundation shrubs and established beds need to survive Tarrant County's swing from summer scorching to winter freeze events.
      </p>
      <p>
        Beyond water savings, drip keeps foliage dry during Fort Worth's humid July–August period, dramatically reducing fungal disease on susceptible plants like roses, salvias, and tomatoes. We integrate drip zones directly with your existing irrigation controller or add a dedicated zone if needed.
      </p>
      <span class="last-updated">Last Updated: April 2026</span>
    </div>

    <div class="why-list" data-animate="fade-up">
      <div class="why-item">
        <div class="why-icon"><i data-lucide="droplets" aria-hidden="true"></i></div>
        <div class="why-text">
          <strong>Emitter sizing matched to each plant</strong>
          <p>Roses and crape myrtles need different GPH than ground cover — we spec each emitter individually, not one-size-fits-all.</p>
        </div>
      </div>
      <div class="why-item">
        <div class="why-icon"><i data-lucide="shield-check" aria-hidden="true"></i></div>
        <div class="why-text">
          <strong>Fort Worth water restriction compliant</strong>
          <p>Properly designed drip systems are exempt from Stage 2 and Stage 3 odd/even day restrictions — critical during summer drought declarations.</p>
        </div>
      </div>
      <div class="why-item">
        <div class="why-icon"><i data-lucide="layers" aria-hidden="true"></i></div>
        <div class="why-text">
          <strong>Mulch integration included</strong>
          <p>We install header tubing at the correct depth under mulch — protecting UV-sensitive micro-tubing and extending system life to 8–12 years.</p>
        </div>
      </div>
      <div class="why-item">
        <div class="why-icon"><i data-lucide="wrench" aria-hidden="true"></i></div>
        <div class="why-text">
          <strong>Connects to your existing system</strong>
          <p>No separate controller needed. We add drip zones to your existing timer or Rachio smart controller and program seasonal schedules before we leave.</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Divider ── -->
<div class="divider-wave" aria-hidden="true">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
    <path fill="#f2f8f4" d="M0,0 C360,60 1080,0 1440,60 L1440,0 Z"/>
  </svg>
</div>

<!-- ─── Water Savings Signature Section ────────────────────────────────────── -->
<section class="water-savings-section" aria-labelledby="savings-heading">
  <div class="container">
    <span class="water-savings-label">By the Numbers</span>
    <h2 id="savings-heading">What Switching to Drip Actually Saves</h2>
    <p class="section-lead">
      Based on a typical 4-bed Fort Worth residential landscape — 800 sq ft of planting area, 3 spray zones currently running 3× per week in summer.
    </p>
  </div>

  <div class="container savings-card-wrap">
    <div class="savings-comparison" data-animate="fade-up" role="region" aria-label="Water usage comparison: spray heads vs. drip irrigation">

      <div class="savings-col savings-col-before">
        <div class="savings-col-label">Spray Heads — Current</div>
        <div class="savings-stat">
          <span class="savings-stat-value">18,720</span>
          <span class="savings-stat-label">Gallons used per summer season<br>(June–Sept, 3× weekly, 15-min zones)</span>
        </div>
        <div class="savings-stat">
          <span class="savings-stat-value">~$186</span>
          <span class="savings-stat-label">Estimated water cost per season<br>(Fort Worth Tier 2 rate)</span>
        </div>
        <div class="savings-stat">
          <span class="savings-stat-value">40–60%</span>
          <span class="savings-stat-label">Water lost to evaporation and runoff<br>on a 100°F afternoon</span>
        </div>
      </div>

      <div class="savings-vs" aria-hidden="true">VS</div>

      <div class="savings-col savings-col-after">
        <div class="savings-col-label">Drip Irrigation — After</div>
        <div class="savings-stat">
          <span class="savings-stat-value">9,360–</span>
          <span class="savings-stat-label">Gallons per summer — 50% reduction<br>(direct root delivery, no evaporation)</span>
        </div>
        <div class="savings-stat">
          <span class="savings-stat-value">~$85</span>
          <span class="savings-stat-label">Estimated water cost per season<br>— roughly $100 saved every summer</span>
        </div>
        <div class="savings-stat">
          <span class="savings-stat-value">&lt;5%</span>
          <span class="savings-stat-label">Water lost to evaporation<br>(delivered at root level, not overhead)</span>
        </div>
      </div>

    </div>
    <p class="savings-note">Estimates based on Fort Worth Water utility Tier 2 residential rate. Actual results vary by bed size, plant type, and watering schedule.</p>
  </div>
</section>

<!-- Divider ── -->
<div class="divider-wave" aria-hidden="true" style="background: var(--color-bg-alt);">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
    <path fill="#0d2117" d="M0,60 C480,0 960,60 1440,0 L1440,60 Z"/>
  </svg>
</div>

<!-- ─── Process Section ────────────────────────────────────────────────────── -->
<section class="svc-process" aria-labelledby="process-heading">
  <div class="container">
    <span class="section-label">
      <i data-lucide="list-ordered" aria-hidden="true"></i>
      How We Work
    </span>
    <h2 id="process-heading">Our Drip Installation Process</h2>

    <div class="process-steps">
      <div class="process-step" data-animate="fade-up" style="--delay: 0ms">
        <div class="step-num">01</div>
        <div class="step-icon"><i data-lucide="map" aria-hidden="true"></i></div>
        <h3>Map Beds &amp; Plant Requirements</h3>
        <p>We walk every planting bed, identify plant species and root spread, and calculate daily water demand by zone — the engineering foundation every drip system needs.</p>
      </div>
      <div class="process-step" data-animate="fade-up" style="--delay: 100ms">
        <div class="step-num">02</div>
        <div class="step-icon"><i data-lucide="sliders-horizontal" aria-hidden="true"></i></div>
        <h3>Size Mainline &amp; Emitter Flow</h3>
        <p>We calculate GPH per zone against your water pressure and soil infiltration rate, selecting 0.5, 1, or 2 GPH emitters per plant — not a generic one-size layout.</p>
      </div>
      <div class="process-step" data-animate="fade-up" style="--delay: 200ms">
        <div class="step-num">03</div>
        <div class="step-icon"><i data-lucide="git-branch" aria-hidden="true"></i></div>
        <h3>Install Tubing &amp; Emitters</h3>
        <p>We lay ½″ header tubing from the supply valve, route ¼″ distribution lines to each plant, and position emitters at the correct distance from stem for root uptake.</p>
      </div>
      <div class="process-step" data-animate="fade-up" style="--delay: 300ms">
        <div class="step-num">04</div>
        <div class="step-icon"><i data-lucide="gauge" aria-hidden="true"></i></div>
        <h3>Test Pressure &amp; Adjust Flow</h3>
        <p>We pressurize each zone, verify every emitter is flowing at spec, calibrate the pressure regulator, then program your controller runtime before walking you through it.</p>
      </div>
    </div>
  </div>
</section>

<!-- Divider ── -->
<div class="divider-wave" style="background: var(--color-bg-dark);" aria-hidden="true">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
    <path fill="#1b4332" d="M0,0 L1440,0 L1440,60 C1080,0 360,60 0,0 Z"/>
  </svg>
</div>

<!-- ─── Mid-Page CTA Banner (CTA #2) ──────────────────────────────────────── -->
<section class="cta-banner" aria-label="Request a drip irrigation estimate">
  <div class="container cta-banner-inner">
    <div class="cta-banner-text">
      <h2>Ready to Cut Your Water Bill This Summer?</h2>
      <p>We design drip systems for Fort Worth's specific soil, plants, and water restrictions. Get a firm written quote before we touch anything — no pressure, no surprise charges.</p>
    </div>
    <div class="cta-banner-actions">
      <a href="tel:<?php echo $contactPhoneRaw; ?>" class="cta-phone-big">
        <i data-lucide="phone-call" aria-hidden="true"></i>
        <?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?>
      </a>
      <a href="/contact/" class="btn-cta-white">
        <i data-lucide="calendar" aria-hidden="true"></i>
        Schedule a Free Estimate
      </a>
    </div>
  </div>
</section>

<!-- Divider ── -->
<div class="divider-wave" aria-hidden="true">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
    <path fill="#1b4332" d="M0,60 L1440,60 L1440,0 C1080,60 360,0 0,60 Z"/>
  </svg>
</div>

<!-- ─── FAQ Section ────────────────────────────────────────────────────────── -->
<section class="svc-faq" aria-labelledby="faq-heading">
  <div class="container">
    <div class="faq-header">
      <span class="section-label">Common Questions</span>
      <h2 id="faq-heading">Drip Irrigation — Fort Worth FAQ</h2>
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
    <path fill="#ffffff" d="M0,0 C360,60 1080,0 1440,30 L1440,0 Z"/>
  </svg>
</div>

<!-- ─── Closing CTA + Form (CTA #3) ──────────────────────────────────────── -->
<section class="svc-closing-cta" aria-labelledby="closing-cta-heading">
  <div class="container closing-cta-inner">

    <div class="closing-cta-text" data-animate="fade-up">
      <h2 id="closing-cta-heading">Get a Drip System Quote — Same Week Scheduling Available</h2>
      <p>
        Fill out the quick form and we'll contact you within one business day with a ballpark estimate for your bed footage. Most Fort Worth installations complete in a single day.
      </p>
      <br>
      <p>
        <strong>Serving:</strong> Fort Worth, Keller, Southlake, Colleyville, Grapevine, North Richland Hills, Hurst, Euless, Bedford, Arlington, Mansfield, Burleson, and all of Tarrant County.
      </p>
    </div>

    <div class="closing-cta-form" data-animate="fade-up">
      <h3>Quick Estimate Request</h3>
      <form action="<?php echo htmlspecialchars($formEndpoint, ENT_QUOTES, 'UTF-8'); ?>" method="POST">
        <input type="text"   name="_honey"         style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="hidden" name="_next"           value="/thank-you">
        <input type="hidden" name="_consent_version" value="v2.1">
        <input type="hidden" name="_consent_page"   value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="service"         value="Drip Irrigation">

        <div class="form-row">
          <div class="form-field">
            <label for="drip-name">Your Name</label>
            <input type="text" id="drip-name" name="name" required autocomplete="name" placeholder="Jane Smith">
          </div>
          <div class="form-field">
            <label for="drip-phone">Phone Number</label>
            <input type="tel" id="drip-phone" name="phone" required autocomplete="tel" placeholder="(817) 555-0000">
          </div>
          <div class="form-field">
            <label for="drip-email">Email</label>
            <input type="email" id="drip-email" name="email" required autocomplete="email" placeholder="jane@example.com">
          </div>
          <div class="form-field">
            <label for="drip-zip">Zip Code</label>
            <input type="text" id="drip-zip" name="zip" placeholder="76102" inputmode="numeric">
          </div>
          <div class="form-field form-field-full">
            <label for="drip-message">Describe Your Beds (optional)</label>
            <input type="text" id="drip-message" name="message" placeholder="e.g. Front flower bed + side yard shrubs, ~300 sq ft">
          </div>
        </div>

        <button type="submit" class="btn-form-submit">Send My Estimate Request</button>
        <p class="form-privacy-note">No spam. No pressure. We typically respond same business day. <a href="/privacy-policy/" style="color: var(--color-secondary);">Privacy Policy</a></p>
      </form>
    </div>

  </div>
</section>

<!-- ─── Related Services ───────────────────────────────────────────────────── -->
<section class="related-services" aria-labelledby="related-heading">
  <div class="container">
    <h2 id="related-heading">Related Irrigation Services</h2>
    <div class="related-grid">
      <a href="/services/smart-controller-upgrades/" class="related-card">
        <div class="related-card-icon"><i data-lucide="wifi" aria-hidden="true"></i></div>
        <div class="related-card-text">
          <strong>Smart Controller Upgrades</strong>
          <span>Automate your drip schedule with weather-based controllers</span>
        </div>
      </a>
      <a href="/services/irrigation-system-repair/" class="related-card">
        <div class="related-card-icon"><i data-lucide="wrench" aria-hidden="true"></i></div>
        <div class="related-card-text">
          <strong>Irrigation System Repair</strong>
          <span>Fix valves, controllers, and mainline problems fast</span>
        </div>
      </a>
      <a href="/services/leak-detection-repair/" class="related-card">
        <div class="related-card-icon"><i data-lucide="search" aria-hidden="true"></i></div>
        <div class="related-card-text">
          <strong>Leak Detection &amp; Repair</strong>
          <span>Underground leak diagnosis before it wastes hundreds more</span>
        </div>
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

</body>
</html>
<?php /* Last Updated: April 2026 */ ?>
