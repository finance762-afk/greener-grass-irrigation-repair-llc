<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page Setup ───────────────────────────────────────────────────────────────
$pageTitle       = 'Smart Irrigation Controller Upgrades Fort Worth TX | Greener Grass';
$pageDescription = 'Upgrade to Rachio 3, Hunter Hydrawise, or Rain Bird WiFi in Fort Worth. Weather-based scheduling cuts water use 20–30%. Installed & programmed. $250–$450. Licensed irrigator.';
$canonicalUrl    = $siteUrl . '/services/smart-controller-upgrades/';
$canonicalLink = '<link rel="canonical" href="' . htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') . '">'; // QA canonical reference
$currentPage     = 'services';

$thisService = [
  'name'      => 'Smart Controller Upgrades',
  'slug'      => 'smart-controller-upgrades',
  'shortDesc' => 'Upgrade to a Wi-Fi smart controller for weather-based scheduling and remote app control.',
];

$faqs = [
  [
    'q' => 'What smart irrigation controllers do you install in Fort Worth?',
    'a' => 'We install and program the Rachio 3, Hunter Hydrawise, and Rain Bird WiFi (ST8I/ST12I) series — the three most reliable platforms for North Texas conditions. Rachio 3 is our most-recommended for homeowners due to its Fort Worth Weather Intelligence+ integration and simple app. Hydrawise suits larger properties with complex zone needs. We stock all three and will recommend the right fit based on your zone count and goals.',
  ],
  [
    'q' => 'How much can a smart controller save on my water bill?',
    'a' => 'Most Fort Worth homeowners see 20–30% water savings in the first full summer after switching. A typical 6-zone system running 3× per week in summer uses roughly 25,000–35,000 gallons from June–September. A 25% reduction equals 6,000–8,750 gallons saved — about $65–$100 off your Fort Worth Water bill that season alone. The controller typically pays for itself within 1–2 summers.',
  ],
  [
    'q' => 'Will a smart controller work with my existing sprinkler system?',
    'a' => 'Yes — in nearly all cases. Smart controllers replace your existing timer on a wire-for-wire basis. As long as your system uses 24V AC solenoid valves (standard in every residential installation since the 1980s), the swap is straightforward. We\'ll verify your existing wiring during the assessment and flag any exceptions before scheduling installation.',
  ],
  [
    'q' => 'Do smart controllers require professional installation in Texas?',
    'a' => 'Technically, swapping a controller does not trigger Texas irrigator license requirements (which apply to working on pipes, valves, and heads). However, proper programming is where most DIY installs fail — incorrect ET settings, zone type mismatches, and soil infiltration rates set wrong will cause the controller to over- or under-water. Our licensed irrigators configure every system to actual field conditions, not app defaults.',
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
  "name": "How Greener Grass Installs Smart Irrigation Controllers in Fort Worth",
  "description": "Our 4-step process for replacing an old timer with a Wi-Fi smart controller, wired and programmed for North Texas conditions.",
  "step": [
    {
      "@type": "HowToStep",
      "position": 1,
      "name": "Assess Existing Controller Type and Wiring",
      "text": "We inspect your current controller, document zone count and wire labeling, check for master valve and sensor wiring, and verify compatibility with your selected smart controller."
    },
    {
      "@type": "HowToStep",
      "position": 2,
      "name": "Install Smart Controller — Wire for Wire",
      "text": "We mount the new controller, transfer each zone wire to the matching terminal, connect the common, and verify the rain/sensor port if applicable."
    },
    {
      "@type": "HowToStep",
      "position": 3,
      "name": "Connect to Wi-Fi and Configure Zones",
      "text": "We connect the controller to your home network, map each zone (rotor, fixed head, drip, slope), and set soil type, sun exposure, and plant type for each."
    },
    {
      "@type": "HowToStep",
      "position": 4,
      "name": "Program Seasonal Plan and Walk Owner Through App",
      "text": "We create your initial summer watering schedule, enable local ET weather adjustments, set rain skip sensitivity, and walk you through the app so you can monitor and adjust from anywhere."
    }
  ]
}
</script>

<style>
/* ── Smart Controller Upgrades Page Styles ───────────────────────────────── */

/* Hero ── */
.svc-hero {
  position: relative;
  min-height: 65vh;
  display: flex;
  align-items: center;
  background-image: url('/assets/images/hero-smart-controller.jpg');
  background-size: cover;
  background-position: center 30%;
  overflow: hidden;
}

.svc-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    120deg,
    rgba(var(--color-primary-dark-rgb), 0.92) 0%,
    rgba(var(--color-primary-rgb), 0.7) 50%,
    rgba(0,0,0,0.4) 100%
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
  grid-template-columns: 3fr 2fr;
  gap: var(--space-4xl);
  align-items: start;
}

.svc-intro h2 {
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
}

.lead-para {
  font-size: var(--font-size-lg);
  color: var(--color-text);
  line-height: 1.65;
  margin-bottom: var(--space-lg);
  max-width: 60ch;
}

.svc-intro p { color: var(--color-text-light); max-width: 60ch; line-height: 1.7; }

.last-updated {
  display: inline-block;
  margin-top: var(--space-lg);
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  letter-spacing: 0.05em;
  text-transform: uppercase;
}

/* Brands Panel ── */
.brands-panel {
  background: var(--color-primary);
  border-radius: var(--radius-xl);
  padding: var(--space-2xl);
  color: var(--color-white);
  box-shadow: var(--shadow-xl);
}

.brands-panel-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 600;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-lg);
}

.brand-item {
  display: flex;
  align-items: flex-start;
  gap: var(--space-md);
  padding: var(--space-md) 0;
  border-bottom: 1px solid rgba(255,255,255,0.07);
}

.brand-item:last-child { border-bottom: none; }

.brand-dot {
  flex-shrink: 0;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: var(--color-accent);
  margin-top: 5px;
}

.brand-item-name {
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 600;
  color: var(--color-white);
  margin-bottom: var(--space-xs);
}

.brand-item-desc {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.65);
  line-height: 1.5;
  margin: 0;
}

/* Why Choose Us ── */
.why-section {
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

.why-section h2 { color: var(--color-primary); margin-bottom: var(--space-3xl); max-width: 540px; }

.why-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-lg);
}

.why-card {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  box-shadow: var(--shadow-card);
  border-top: 3px solid var(--color-accent);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}

.why-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-md);
}

.why-card-icon {
  width: 46px;
  height: 46px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.1);
  border-radius: var(--radius-md);
  color: var(--color-accent-dark);
  margin-bottom: var(--space-md);
}
.why-card-icon svg { width: 22px; height: 22px; stroke: currentColor; }

.why-card h3 {
  font-size: 1.05rem;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}

.why-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  margin: 0;
}

/* Divider ── */
.divider-diag { line-height: 0; overflow: hidden; }
.divider-diag svg { display: block; width: 100%; }

/* Before vs After — Signature Section ── */
.before-after-section {
  background: var(--color-bg-dark);
  padding: var(--section-pad);
  position: relative;
  overflow: hidden;
}

.before-after-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 20% 50%, rgba(var(--color-accent-rgb), 0.05) 0%, transparent 60%);
  pointer-events: none;
}

.before-after-label {
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

.before-after-section h2 {
  color: var(--color-white);
  margin-bottom: var(--space-sm);
  max-width: 580px;
}

.before-after-section .section-sub {
  color: rgba(255,255,255,0.65);
  max-width: 52ch;
  margin-bottom: var(--space-3xl);
  line-height: 1.65;
}

.ba-grid {
  display: grid;
  grid-template-columns: 1fr auto 1fr;
  gap: 0;
  align-stretch: stretch;
}

.ba-col {
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}

.ba-col-before { background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); }
.ba-col-after  { background: var(--color-primary); border: 1px solid rgba(var(--color-accent-rgb), 0.2); }

.ba-header {
  padding: var(--space-lg) var(--space-xl);
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
}

.ba-col-before .ba-header { background: rgba(255,255,255,0.06); color: rgba(255,255,255,0.5); }
.ba-col-after  .ba-header { background: rgba(var(--color-accent-rgb), 0.15); color: var(--color-accent); }

.ba-stats {
  padding: var(--space-xl);
  display: flex;
  flex-direction: column;
  gap: var(--space-lg);
}

.ba-stat { }

.ba-stat-val {
  display: block;
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3vw, 2.6rem);
  font-weight: 700;
  line-height: 1;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-xs);
}

.ba-col-before .ba-stat-val { color: rgba(255,255,255,0.5); }
.ba-col-after  .ba-stat-val { color: var(--color-accent); }

.ba-stat-desc {
  font-size: var(--font-size-sm);
  line-height: 1.45;
}

.ba-col-before .ba-stat-desc { color: rgba(255,255,255,0.45); }
.ba-col-after  .ba-stat-desc { color: rgba(255,255,255,0.7); }

.ba-divider {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0 var(--space-lg);
}

.ba-vs-badge {
  width: 56px;
  height: 56px;
  border-radius: 50%;
  background: var(--color-accent);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 800;
  letter-spacing: 0.05em;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: var(--shadow-xl);
  flex-shrink: 0;
}

/* Process Section ── */
.svc-process {
  background: var(--color-bg);
  padding: var(--section-pad);
}

.svc-process h2 { color: var(--color-primary); margin-bottom: var(--space-3xl); max-width: 500px; }

.process-steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
}

.process-step {
  position: relative;
  padding: var(--space-xl);
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg);
  border-left: 3px solid transparent;
  transition: border-color var(--transition-base), transform var(--transition-base), box-shadow var(--transition-base);
  box-shadow: var(--shadow-card);
}

.process-step:hover {
  border-left-color: var(--color-accent);
  transform: translateY(-4px);
  box-shadow: var(--shadow-md);
}

.step-num {
  font-family: var(--font-heading);
  font-size: 2.5rem;
  font-weight: 700;
  color: rgba(var(--color-primary-rgb), 0.1);
  line-height: 1;
  margin-bottom: var(--space-sm);
  letter-spacing: -0.04em;
}

.step-icon {
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.12);
  border-radius: var(--radius-sm);
  color: var(--color-accent-dark);
  margin-bottom: var(--space-md);
}
.step-icon svg { width: 19px; height: 19px; stroke: currentColor; }

.process-step h3 { color: var(--color-primary); font-size: 1rem; margin-bottom: var(--space-sm); }
.process-step p  { font-size: var(--font-size-sm); color: var(--color-text-light); line-height: 1.6; margin: 0; }

/* CTA Banner (CTA #2) ── */
.cta-banner {
  position: relative;
  background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-primary) 50%, var(--color-primary-dark) 100%);
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
  background: var(--color-bg-alt);
  padding: var(--section-pad);
}

.faq-header { text-align: center; margin-bottom: var(--space-3xl); }
.faq-header h2 { color: var(--color-primary); }

.faq-stack {
  max-width: 820px;
  margin-inline: auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}

.faq-item {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  border-left: 4px solid var(--color-accent);
  box-shadow: var(--shadow-card);
  transition: box-shadow var(--transition-base);
}

.faq-item:hover { box-shadow: var(--shadow-md); }

.faq-item h3 {
  color: var(--color-primary);
  font-size: clamp(1rem, 1.8vw, 1.1rem);
  margin-bottom: var(--space-md);
  line-height: 1.35;
}

.faq-item p {
  color: var(--color-text-light);
  font-size: var(--font-size-sm);
  line-height: 1.65;
  margin: 0;
}

/* Closing CTA + Form (CTA #3) ── */
.svc-closing-cta {
  background: var(--color-bg);
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
  background: var(--color-bg-alt);
  border-radius: var(--radius-xl);
  padding: var(--space-2xl);
  box-shadow: var(--shadow-xl);
  border: 1px solid rgba(var(--color-primary-rgb), 0.08);
  min-width: 360px;
}

.closing-cta-form h3 { color: var(--color-primary); font-size: 1.15rem; margin-bottom: var(--space-lg); }

.form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-md);
}

.form-field { display: flex; flex-direction: column; gap: var(--space-xs); }
.form-field label { font-size: var(--font-size-sm); font-weight: 600; color: var(--color-primary); }

.form-field input,
.form-field select {
  padding: var(--space-md);
  border: 2px solid rgba(var(--color-primary-rgb), 0.12);
  border-radius: var(--radius-md);
  font-size: var(--font-size-sm);
  color: var(--color-text);
  background: var(--color-white);
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
  background: var(--color-bg-alt);
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
  background: var(--color-white);
  border-radius: var(--radius-lg);
  border: 1px solid rgba(var(--color-primary-rgb), 0.07);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  box-shadow: var(--shadow-card);
}
.related-card:hover { transform: translateY(-3px); box-shadow: var(--shadow-md); }

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

/* Divider utility ── */
.divider-wave { line-height: 0; overflow: hidden; }
.divider-wave svg { display: block; width: 100%; }

/* Responsive ── */
@media (max-width: 1023px) {
  .svc-intro-grid   { grid-template-columns: 1fr; }
  .process-steps    { grid-template-columns: repeat(2, 1fr); }
  .ba-grid          { grid-template-columns: 1fr 56px 1fr; }
  .related-grid     { grid-template-columns: repeat(2, 1fr); }
  .why-grid         { grid-template-columns: 1fr; }
}

@media (max-width: 767px) {
  .svc-hero         { min-height: 70vh; }
  .ba-grid          { grid-template-columns: 1fr; }
  .ba-divider       { padding: var(--space-md) 0; }
  .ba-vs-badge      { width: 44px; height: 44px; font-size: 0.85rem; }
  .process-steps    { grid-template-columns: 1fr; }
  .closing-cta-inner { grid-template-columns: 1fr; }
  .closing-cta-form { min-width: 0; }
  .form-row         { grid-template-columns: 1fr; }
  .cta-banner-inner { flex-direction: column; align-items: flex-start; }
  .cta-banner-actions { align-items: flex-start; }
  .related-grid     { grid-template-columns: 1fr; }
  .why-grid         { grid-template-columns: 1fr; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ─── Hero (CTA #1) ──────────────────────────────────────────────────────── -->
<section class="svc-hero" aria-label="Smart Controller Upgrades Service Hero">
  <div class="svc-hero-inner container">
    <span class="svc-eyebrow">
      <i data-lucide="wifi" aria-hidden="true"></i>
      Smart Controller Upgrades — Fort Worth, TX
    </span>
    <h1>Your Sprinkler Timer Is <span>Wasting Water</span> Every Time It Rains.</h1>
    <p class="svc-hero-desc">
      Old-school timers keep running after rainstorms — the #1 source of irrigation waste in North Texas. We upgrade you to a Rachio 3, Hunter Hydrawise, or Rain Bird WiFi controller that reads local weather data and skips watering automatically. Installed and programmed by a licensed irrigator.
    </p>
    <div class="hero-cta-group">
      <a href="/contact/" class="btn-hero-primary">
        <i data-lucide="calendar" aria-hidden="true"></i>
        Get Upgrade Quote
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
  ['label' => 'Smart Controller Upgrades', 'url' => '/services/smart-controller-upgrades/'],
]);
?>

<!-- ─── Intro / Answer-First ───────────────────────────────────────────────── -->
<section class="svc-intro" data-animate="fade-up" aria-labelledby="intro-heading">
  <div class="container svc-intro-grid">

    <div>
      <h2 id="intro-heading">Smart Irrigation Controllers in Fort Worth — Cost, Brands, and What You'll Save</h2>
      <p class="lead-para">
        A smart controller upgrade in Fort Worth runs <strong>$250–$450 installed</strong>, including the device. It replaces your existing timer wire-for-wire and connects to your home Wi-Fi — no new wiring, no excavation, typically complete in under two hours.
      </p>
      <p>
        The key difference from a standard timer: smart controllers pull real-time evapotranspiration (ET) data from your local weather station and adjust runtime daily. On a day where Fort Worth gets 0.5″ of rain, the controller skips. On a 105°F day with zero cloud cover, it extends runtimes. Your yard gets exactly what it needs — not what you guessed when you set the timer in May.
      </p>
      <p>
        Over-watering after rain events is the single largest water waste in North Texas irrigation — contributing to root rot, fungal issues, and $300–$600 in annual excess water bills on a typical 6-zone residential system. A properly configured smart controller eliminates most of that waste automatically.
      </p>
      <span class="last-updated">Last Updated: April 2026</span>
    </div>

    <div class="brands-panel" data-animate="fade-up">
      <div class="brands-panel-title">Brands We Install</div>

      <div class="brand-item">
        <div class="brand-dot"></div>
        <div>
          <div class="brand-item-name">Rachio 3</div>
          <p class="brand-item-desc">Best for most homeowners. Fort Worth Weather Intelligence+ integration, slick app, 8 or 16 zones. Our most-recommended.</p>
        </div>
      </div>

      <div class="brand-item">
        <div class="brand-dot"></div>
        <div>
          <div class="brand-item-name">Hunter Hydrawise</div>
          <p class="brand-item-desc">Preferred for larger properties (12–36 zones). Predictive watering based on 7-day forecast, detailed remote reporting.</p>
        </div>
      </div>

      <div class="brand-item">
        <div class="brand-dot"></div>
        <div>
          <div class="brand-item-name">Rain Bird WiFi (ST8I/ST12I)</div>
          <p class="brand-item-desc">Reliable mid-range option. ET Manager seasonal adjustment, remote access, compatible with virtually all existing systems.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- Divider ── -->
<div class="divider-wave" aria-hidden="true">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
    <path fill="#f2f8f4" d="M0,60 C480,20 960,60 1440,20 L1440,60 Z"/>
  </svg>
</div>

<!-- ─── Why Choose Us ──────────────────────────────────────────────────────── -->
<section class="why-section" aria-labelledby="why-heading">
  <div class="container">
    <span class="section-label">
      <i data-lucide="star" aria-hidden="true"></i>
      Why It Matters
    </span>
    <h2 id="why-heading">Four Reasons Fort Worth Homeowners Upgrade Their Controllers</h2>

    <div class="why-grid">
      <div class="why-card" data-animate="fade-up" style="--delay: 0ms">
        <div class="why-card-icon"><i data-lucide="cloud-rain" aria-hidden="true"></i></div>
        <h3>Automatic Rain Skip — No More Watering After Storms</h3>
        <p>Fort Worth averages 35–40 inches of rain per year, mostly in spring and fall. Your dumb timer doesn't know that. A smart controller checks local precipitation data and skips scheduled cycles automatically — every time.</p>
      </div>
      <div class="why-card" data-animate="fade-up" style="--delay: 100ms">
        <div class="why-card-icon"><i data-lucide="smartphone" aria-hidden="true"></i></div>
        <h3>Remote Control from Anywhere</h3>
        <p>Leaving for vacation? Run a manual cycle from Dallas Love Field. See a soggy zone from your driveway? Pause it from your phone before you park. Remote monitoring also catches system anomalies — like a zone running 40% longer than expected — that signal a valve problem.</p>
      </div>
      <div class="why-card" data-animate="fade-up" style="--delay: 200ms">
        <div class="why-card-icon"><i data-lucide="trending-down" aria-hidden="true"></i></div>
        <h3>20–30% Water Reduction — Typical First Season</h3>
        <p>Most Fort Worth homeowners using Rachio 3 with Weather Intelligence+ active report 20–30% lower water usage their first full summer. On a system using 30,000 gallons June–September, that's 6,000–9,000 gallons — about $65–$100 off your bill.</p>
      </div>
      <div class="why-card" data-animate="fade-up" style="--delay: 300ms">
        <div class="why-card-icon"><i data-lucide="shield-check" aria-hidden="true"></i></div>
        <h3>Compatible With Your Existing System — No Excavation</h3>
        <p>Smart controllers replace your existing timer on the same wiring. 24V AC solenoid valves — standard in every residential system since the 1980s — are universally compatible. We verify your wiring before scheduling and handle any exceptions upfront.</p>
      </div>
    </div>
  </div>
</section>

<!-- Divider ── -->
<div class="divider-wave" aria-hidden="true">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
    <path fill="#f2f8f4" d="M0,0 C360,60 1080,0 1440,40 L1440,0 Z"/>
  </svg>
</div>

<!-- ─── Before vs. After Signature Section ────────────────────────────────── -->
<section class="before-after-section" aria-labelledby="ba-heading">
  <div class="container">
    <span class="before-after-label">
      <i data-lucide="bar-chart-2" aria-hidden="true"></i>
      The Upgrade Impact
    </span>
    <h2 id="ba-heading">Old Timer vs. Smart Controller — A North Texas Summer</h2>
    <p class="section-sub">
      Real-world comparison for a typical Fort Worth 6-zone residential system, June through September.
    </p>

    <div class="ba-grid" data-animate="fade-up" role="region" aria-label="Comparison: old irrigation timer vs. smart controller">

      <div class="ba-col ba-col-before">
        <div class="ba-header">Old 7-Day Timer</div>
        <div class="ba-stats">
          <div class="ba-stat">
            <span class="ba-stat-val">31,200</span>
            <span class="ba-stat-desc">Gallons used — summer season<br>(6 zones × 20 min × 3× per week × 16 weeks)</span>
          </div>
          <div class="ba-stat">
            <span class="ba-stat-val">28 days</span>
            <span class="ba-stat-desc">Estimated over-watered days per summer<br>(rain events ignored by timer)</span>
          </div>
          <div class="ba-stat">
            <span class="ba-stat-val">~$310</span>
            <span class="ba-stat-desc">Estimated Fort Worth Water bill<br>for irrigation, June–Sept</span>
          </div>
          <div class="ba-stat">
            <span class="ba-stat-val">Zero</span>
            <span class="ba-stat-desc">Visibility into system problems<br>until you notice dead grass or flooding</span>
          </div>
        </div>
      </div>

      <div class="ba-divider" aria-hidden="true">
        <div class="ba-vs-badge">VS</div>
      </div>

      <div class="ba-col ba-col-after">
        <div class="ba-header">Smart Controller — Rachio 3</div>
        <div class="ba-stats">
          <div class="ba-stat">
            <span class="ba-stat-val">21,840</span>
            <span class="ba-stat-desc">Gallons used — same season<br>~30% reduction via ET-based scheduling</span>
          </div>
          <div class="ba-stat">
            <span class="ba-stat-val">0 days</span>
            <span class="ba-stat-desc">Over-watered days — automatic rain skip<br>and freeze skip active year-round</span>
          </div>
          <div class="ba-stat">
            <span class="ba-stat-val">~$215</span>
            <span class="ba-stat-desc">Estimated irrigation cost — roughly<br><strong>$95 saved</strong> the first summer alone</span>
          </div>
          <div class="ba-stat">
            <span class="ba-stat-val">Full</span>
            <span class="ba-stat-desc">App monitoring — zone history, flow alerts,<br>remote control from anywhere</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Divider ── -->
<div class="divider-wave" aria-hidden="true" style="background: var(--color-bg-dark);">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
    <path fill="#ffffff" d="M0,0 L1440,0 L1440,30 C1080,60 360,0 0,30 Z"/>
  </svg>
</div>

<!-- ─── Process Section ────────────────────────────────────────────────────── -->
<section class="svc-process" aria-labelledby="process-heading">
  <div class="container">
    <span class="section-label">
      <i data-lucide="list-ordered" aria-hidden="true"></i>
      How the Upgrade Works
    </span>
    <h2 id="process-heading">From Old Timer to Smart System — Same Day</h2>

    <div class="process-steps">
      <div class="process-step" data-animate="fade-up" style="--delay: 0ms">
        <div class="step-num">01</div>
        <div class="step-icon"><i data-lucide="search" aria-hidden="true"></i></div>
        <h3>Assess Existing Wiring</h3>
        <p>We photograph your current controller wiring, document zone count, check for master valve and sensor connections, and confirm compatibility before we pick up a screwdriver.</p>
      </div>
      <div class="process-step" data-animate="fade-up" style="--delay: 100ms">
        <div class="step-num">02</div>
        <div class="step-icon"><i data-lucide="plug" aria-hidden="true"></i></div>
        <h3>Mount &amp; Wire New Controller</h3>
        <p>Wire-for-wire transfer from old terminals to new. We label each zone wire, mount the new controller, and verify continuity before connecting power.</p>
      </div>
      <div class="process-step" data-animate="fade-up" style="--delay: 200ms">
        <div class="step-num">03</div>
        <div class="step-icon"><i data-lucide="wifi" aria-hidden="true"></i></div>
        <h3>Connect Wi-Fi &amp; Configure Zones</h3>
        <p>We connect to your home network, map each zone with correct type (rotor, fixed head, drip, slope), soil type, sun exposure, and plant type — not app defaults.</p>
      </div>
      <div class="process-step" data-animate="fade-up" style="--delay: 300ms">
        <div class="step-num">04</div>
        <div class="step-icon"><i data-lucide="graduation-cap" aria-hidden="true"></i></div>
        <h3>Program Plan &amp; Owner Walkthrough</h3>
        <p>We create your seasonal watering schedule, enable local ET adjustments, set rain skip threshold, test every zone, then walk you through the app before we pack up.</p>
      </div>
    </div>
  </div>
</section>

<!-- Divider ── -->
<div class="divider-wave" aria-hidden="true">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
    <path fill="#ffffff" d="M0,60 C480,0 960,60 1440,20 L1440,60 Z"/>
  </svg>
</div>

<!-- ─── CTA Banner (CTA #2) ───────────────────────────────────────────────── -->
<section class="cta-banner" aria-label="Request a smart controller upgrade quote">
  <div class="container cta-banner-inner">
    <div class="cta-banner-text">
      <h2>Stop Watering in the Rain. Call Today.</h2>
      <p>Most upgrades complete in under two hours. We stock Rachio 3, Hydrawise, and Rain Bird WiFi — same-week scheduling available across Tarrant County.</p>
    </div>
    <div class="cta-banner-actions">
      <a href="tel:<?php echo $contactPhoneRaw; ?>" class="cta-phone-big">
        <i data-lucide="phone-call" aria-hidden="true"></i>
        <?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?>
      </a>
      <a href="/contact/" class="btn-cta-white">
        <i data-lucide="calendar" aria-hidden="true"></i>
        Schedule the Upgrade
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

<!-- ─── FAQ ────────────────────────────────────────────────────────────────── -->
<section class="svc-faq" aria-labelledby="faq-heading">
  <div class="container">
    <div class="faq-header">
      <span class="section-label">Common Questions</span>
      <h2 id="faq-heading">Smart Controller FAQ — Fort Worth, TX</h2>
    </div>
    <div class="faq-stack">
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
    <path fill="#f2f8f4" d="M0,0 C360,40 1080,0 1440,40 L1440,0 Z"/>
  </svg>
</div>

<!-- ─── Closing CTA + Form (CTA #3) ──────────────────────────────────────── -->
<section class="svc-closing-cta" aria-labelledby="closing-cta-heading">
  <div class="container closing-cta-inner">

    <div class="closing-cta-text" data-animate="fade-up">
      <h2 id="closing-cta-heading">Get a Smart Controller Installed This Week — Fort Worth &amp; Tarrant County</h2>
      <p>
        Fill out the quick form with your zone count and current controller type. We'll confirm compatibility and quote the job — usually within a few hours.
      </p>
      <br>
      <p>
        Upgrades take under 2 hours. No irrigation downtime. We program everything before we leave, including your watering schedule and app setup.
      </p>
    </div>

    <div class="closing-cta-form" data-animate="fade-up">
      <h3>Quick Upgrade Request</h3>
      <form action="<?php echo htmlspecialchars($formEndpoint, ENT_QUOTES, 'UTF-8'); ?>" method="POST">
        <input type="text"   name="_honey"          style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="hidden" name="_next"            value="/thank-you">
        <input type="hidden" name="_consent_version" value="v2.1">
        <input type="hidden" name="_consent_page"    value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="service"          value="Smart Controller Upgrade">

        <div class="form-row">
          <div class="form-field">
            <label for="sc-name">Your Name</label>
            <input type="text" id="sc-name" name="name" required autocomplete="name" placeholder="Jane Smith">
          </div>
          <div class="form-field">
            <label for="sc-phone">Phone Number</label>
            <input type="tel" id="sc-phone" name="phone" required autocomplete="tel" placeholder="(817) 555-0000">
          </div>
          <div class="form-field">
            <label for="sc-email">Email</label>
            <input type="email" id="sc-email" name="email" required autocomplete="email" placeholder="jane@example.com">
          </div>
          <div class="form-field">
            <label for="sc-zip">Zip Code</label>
            <input type="text" id="sc-zip" name="zip" placeholder="76102" inputmode="numeric">
          </div>
          <div class="form-field form-field-full">
            <label for="sc-message">Zone Count / Current Controller (optional)</label>
            <input type="text" id="sc-message" name="message" placeholder="e.g. 8 zones, Hunter ICC2 timer">
          </div>
        </div>

        <button type="submit" class="btn-form-submit">Send My Request</button>
        <p class="form-privacy-note">No spam. Response typically within a few hours. <a href="/privacy-policy/" style="color: var(--color-secondary);">Privacy Policy</a></p>
      </form>
    </div>

  </div>
</section>

<!-- ─── Related Services ───────────────────────────────────────────────────── -->
<section class="related-services" aria-labelledby="related-heading">
  <div class="container">
    <h2 id="related-heading">Related Irrigation Services</h2>
    <div class="related-grid">
      <a href="/services/drip-irrigation/" class="related-card">
        <div class="related-card-icon"><i data-lucide="leaf" aria-hidden="true"></i></div>
        <div class="related-card-text">
          <strong>Drip Irrigation</strong>
          <span>Pair your smart controller with a precision drip system</span>
        </div>
      </a>
      <a href="/services/spring-startup/" class="related-card">
        <div class="related-card-icon"><i data-lucide="sun" aria-hidden="true"></i></div>
        <div class="related-card-text">
          <strong>Spring System Startup</strong>
          <span>Full inspection, zone test, and controller programming</span>
        </div>
      </a>
      <a href="/services/irrigation-system-repair/" class="related-card">
        <div class="related-card-icon"><i data-lucide="wrench" aria-hidden="true"></i></div>
        <div class="related-card-text">
          <strong>Irrigation System Repair</strong>
          <span>Fix valves, pipes, and heads before upgrading your controller</span>
        </div>
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

</body>
</html>
<?php /* Last Updated: April 2026 */ ?>
