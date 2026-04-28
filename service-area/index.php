<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = 'Irrigation Repair Service Area | Fort Worth & Tarrant County TX';
$pageDescription = 'Greener Grass Irrigation Repair serves Fort Worth, Arlington, Keller, Southlake, and all of Tarrant County TX. Same-day service, TCEQ licensed, free estimates.';
$canonicalUrl    = $siteUrl . '/service-area/';
$canonicalLink = '<link rel="canonical" href="' . htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') . '">'; // QA canonical reference
$currentPage     = 'service-area';
$noHeroPreload   = false;

// City-specific blurbs for the area cards
$cityBlurbs = [
  'Fort Worth'           => "Fort Worth is our home base — we run same-day routes across all ZIP codes from the Cultural District to the Far South Side. North Texas clay soil and hard water conditions make valve and head failures common here.",
  'Arlington'            => "Arlington's mix of 1980s subdivisions and newer master-planned communities means aging lateral lines and outdated zone controllers are a frequent call. We service residential and commercial systems throughout.",
  'Keller'               => "Keller's established neighborhoods along Bear Creek and Rufe Snow Drive see heavy irrigation demand — our team is on-site in Keller multiple days per week for repairs, blowouts, and spring startups.",
  'Southlake'            => "Southlake properties tend to feature larger zone counts and premium Hunter or Rain Bird systems. Our technicians are factory-trained on the brands most common in Southlake's planned communities.",
  'Colleyville'          => "Colleyville's mature landscaping and high tree-root density create underground lateral stress year over year. We handle leak detection and lateral repairs throughout the city's wooded corridors.",
  'Grapevine'            => "Grapevine's proximity to Lake Grapevine means fluctuating water pressure that stresses backflow preventers and zone valves. We perform annual backflow testing and certification for hundreds of Grapevine properties.",
  'North Richland Hills' => "North Richland Hills sees high service volume in established neighborhoods along Rufe Snow and Davis. System winterizations and spring startups in NRH make up a significant part of our fall and spring schedule.",
  'Hurst'                => "Hurst is one of our higher-volume service cities — older subdivisions east of Highway 183 frequently need sprinkler head replacements and controller upgrades. We're typically available same-day.",
  'Euless'               => "Euless properties along Trinity Boulevard and central Euless neighborhoods see common pressure and coverage issues from aging in-ground systems. We diagnose and repair both Hunter and Rain Bird platforms.",
  'Bedford'              => "Bedford's residential neighborhoods between Airport Freeway and Highway 183 are compact — our technicians can often stack multiple jobs per block. We're in Bedford most service days.",
  'Mansfield'            => "Mansfield's rapid growth over the past decade means newer systems still under manufacturer warranty alongside older systems that predate the city's expansion. We handle both repair and installation in Mansfield.",
  'Burleson'             => "Burleson sits at the south edge of our service area — we cover all of Burleson proper. The clay-heavy soil south of Fort Worth is tough on underground laterals, and our team knows the local ground conditions well.",
];

$schemaMarkup = '{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type":"ListItem","position":1,"name":"Home","item":"' . $siteUrl . '/"},
        {"@type":"ListItem","position":2,"name":"Service Area","item":"' . $siteUrl . '/service-area/"}
      ]
    },
    {
      "@type": "Service",
      "@id": "' . $siteUrl . '/service-area/#service-area",
      "name": "Irrigation Repair — Fort Worth and Tarrant County",
      "provider": {"@id": "' . $siteUrl . '/#business"},
      "areaServed": [
        {"@type":"City","name":"Fort Worth, TX"},
        {"@type":"City","name":"Arlington, TX"},
        {"@type":"City","name":"Keller, TX"},
        {"@type":"City","name":"Southlake, TX"},
        {"@type":"City","name":"Colleyville, TX"},
        {"@type":"City","name":"Grapevine, TX"},
        {"@type":"City","name":"North Richland Hills, TX"},
        {"@type":"City","name":"Hurst, TX"},
        {"@type":"City","name":"Euless, TX"},
        {"@type":"City","name":"Bedford, TX"},
        {"@type":"City","name":"Mansfield, TX"},
        {"@type":"City","name":"Burleson, TX"}
      ]
    }
  ]
}';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<style>
/* ── Service Area Page Styles ─────────────────────────────────────────────── */

/* Hero */
.sa-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  background-image: url('/assets/images/hero-service-area.jpg');
  background-size: cover;
  background-position: center;
  overflow: hidden;
}
.sa-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    120deg,
    rgba(var(--color-primary-dark-rgb), 0.93) 0%,
    rgba(var(--color-primary-rgb), 0.78) 50%,
    rgba(0,0,0,0.55) 100%
  );
  z-index: 1;
}
.sa-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.04;
  z-index: 2;
  pointer-events: none;
}
.sa-hero-content {
  position: relative;
  z-index: 3;
  padding: var(--section-pad);
}
.sa-hero-eyebrow {
  display: inline-block;
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
}
.sa-hero h1 {
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
  margin-bottom: var(--space-lg);
  max-width: 22ch;
}
.sa-hero-sub {
  font-size: clamp(1rem, 2vw, 1.15rem);
  color: rgba(255,255,255,0.82);
  max-width: 52ch;
  line-height: 1.6;
  margin-bottom: var(--space-xl);
}
.sa-hero-city-strip {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-sm);
}
.sa-hero-city-tag {
  background: rgba(255,255,255,0.12);
  border: 1px solid rgba(255,255,255,0.2);
  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);
  border-radius: var(--radius-xl);
  padding: var(--space-xs) var(--space-md);
  color: rgba(255,255,255,0.9);
  font-size: var(--font-size-xs);
  font-weight: 600;
  letter-spacing: 0.04em;
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

/* Intro */
.sa-intro {
  padding: var(--section-pad);
  background: var(--color-bg);
}
.sa-intro-inner {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: center;
}
.sa-intro-text .section-eyebrow {
  display: inline-block;
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.sa-intro-text h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.sa-intro-text .prose p {
  color: var(--color-text);
  line-height: 1.7;
  margin-bottom: var(--space-md);
}
.sa-intro-text .prose p:last-child { margin-bottom: 0; }
.sa-intro-quick-facts {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-md);
}
.quick-fact {
  background: var(--color-bg-alt);
  border-left: 3px solid var(--color-accent);
  border-radius: var(--radius-md);
  padding: var(--space-md);
  box-shadow: var(--shadow-sm);
}
.quick-fact-number {
  display: block;
  font-family: var(--font-heading);
  font-size: clamp(1.4rem, 2.5vw, 1.8rem);
  font-weight: 700;
  color: var(--color-primary);
  line-height: 1;
}
.quick-fact-label {
  display: block;
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  margin-top: var(--space-xs);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.06em;
}

/* Divider */
.divider-wave {
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.divider-wave svg { display: block; }

/* Cities Grid */
.cities-section {
  padding: var(--section-pad);
  background: var(--color-bg-alt);
}
.cities-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.section-eyebrow {
  display: inline-block;
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.cities-header h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
}
.cities-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
}
.city-card {
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  padding: var(--space-xl) var(--space-lg);
  box-shadow: var(--shadow-card);
  border-bottom: 3px solid transparent;
  transition: border-color var(--transition-base), transform var(--transition-base), box-shadow var(--transition-base);
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
}
.city-card:hover {
  border-bottom-color: var(--color-accent);
  transform: translateY(-5px);
  box-shadow: var(--shadow-xl);
}
.city-card-icon {
  width: 40px;
  height: 40px;
  background: rgba(var(--color-primary-rgb), 0.07);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-xs);
  transition: background var(--transition-fast);
}
.city-card:hover .city-card-icon { background: rgba(var(--color-accent-rgb), 0.15); }
.city-card-icon i { width: 18px; height: 18px; color: var(--color-primary); transition: color var(--transition-fast); }
.city-card:hover .city-card-icon i { color: var(--color-accent); }
.city-card-name {
  font-family: var(--font-heading);
  font-size: 1.1rem;
  font-weight: 700;
  color: var(--color-primary);
  line-height: 1.2;
}
.city-card-state {
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  letter-spacing: 0.06em;
  text-transform: uppercase;
  font-weight: 600;
}
.city-card-desc {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.55;
  flex: 1;
}
.city-card-link {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-top: auto;
  transition: gap var(--transition-fast);
}
.city-card-link:hover { gap: var(--space-sm); }
.city-card-link i { width: 14px; height: 14px; }

/* Map Section */
.map-section {
  padding: var(--section-pad);
  background: var(--color-bg);
}
.map-section-header {
  text-align: center;
  margin-bottom: var(--space-xl);
}
.map-section-header h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 3.5vw, 2.4rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
}
.map-section-header p {
  color: var(--color-text-light);
  margin-top: var(--space-sm);
  max-width: 55ch;
  margin-inline: auto;
  line-height: 1.6;
}
.map-wrapper {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
  border: 3px solid rgba(var(--color-primary-rgb), 0.1);
}

/* CTA Banner Mid */
.cta-banner-mid {
  padding: var(--section-pad);
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  position: relative;
  overflow: hidden;
}
.cta-banner-mid::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.05'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.cta-banner-mid .container {
  position: relative;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-xl);
  flex-wrap: wrap;
}
.cta-banner-text h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 3.5vw, 2.2rem);
  font-weight: 700;
  color: #fff;
  line-height: 1.15;
  text-wrap: balance;
  margin-bottom: var(--space-sm);
}
.cta-banner-text p {
  color: rgba(255,255,255,0.78);
  font-size: 1rem;
}
.cta-banner-actions {
  display: flex;
  align-items: center;
  gap: var(--space-md);
  flex-wrap: wrap;
  flex-shrink: 0;
}
.btn-cta-accent {
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
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-accent-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
  position: relative;
}
.btn-cta-accent:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
}
.btn-cta-accent:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-accent-dark);
}
.cta-phone-link-light {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  color: #fff;
  font-family: var(--font-heading);
  font-size: clamp(1.1rem, 2vw, 1.4rem);
  font-weight: 700;
  transition: color var(--transition-fast);
}
.cta-phone-link-light:hover { color: var(--color-accent); }
.cta-phone-link-light i { width: 20px; height: 20px; }

/* Why Section */
.why-section {
  padding: var(--section-pad);
  background: var(--color-bg-alt);
}
.why-split {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: center;
}
.why-text h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
}
.why-text .prose p {
  color: var(--color-text);
  line-height: 1.7;
  margin-bottom: var(--space-md);
}
.why-text .prose p:last-child { margin-bottom: 0; }
.why-benefit-list {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.why-benefit-item {
  display: flex;
  align-items: flex-start;
  gap: var(--space-md);
  padding: var(--space-md) var(--space-lg);
  background: var(--color-bg);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm);
  transition: box-shadow var(--transition-base);
}
.why-benefit-item:hover { box-shadow: var(--shadow-md); }
.why-benefit-icon {
  width: 40px;
  height: 40px;
  min-width: 40px;
  background: rgba(var(--color-accent-rgb), 0.12);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.why-benefit-icon i { width: 18px; height: 18px; color: var(--color-accent); }
.why-benefit-text strong {
  display: block;
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-xs);
  font-size: var(--font-size-sm);
}
.why-benefit-text span {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.5;
}

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
  background: linear-gradient(135deg, rgba(var(--color-accent-rgb), 0.88) 0%, rgba(var(--color-accent-dark-rgb, 96,139,30), 0.95) 100%);
}
.cta-closing::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  opacity: 0.06;
  pointer-events: none;
}
.cta-closing .container { position: relative; z-index: 1; }
.cta-closing .section-eyebrow-dark {
  display: inline-block;
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-primary-dark);
  margin-bottom: var(--space-sm);
}
.cta-closing h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 3rem);
  font-weight: 700;
  line-height: 1.15;
  text-wrap: balance;
  color: var(--color-primary-dark);
  margin-bottom: var(--space-md);
}
.cta-closing p {
  color: rgba(var(--color-primary-dark-rgb), 0.75);
  font-size: 1.05rem;
  max-width: 52ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.cta-closing-actions {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-lg);
  flex-wrap: wrap;
}
.btn-closing-dark {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-primary);
  color: #fff;
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 1rem;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-2xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-primary-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
  position: relative;
}
.btn-closing-dark:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-primary-dark);
}
.btn-closing-dark:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-primary-dark);
}
.cta-phone-dark {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-size: clamp(1.2rem, 2.5vw, 1.8rem);
  font-weight: 700;
  transition: opacity var(--transition-fast);
}
.cta-phone-dark:hover { opacity: 0.7; }
.cta-phone-dark i { width: 22px; height: 22px; }

/* Last Updated */
.last-updated {
  text-align: center;
  padding: var(--space-sm) 0 var(--space-md);
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  opacity: 0.7;
}

/* Responsive */
@media (max-width: 1199px) {
  .cities-grid { grid-template-columns: repeat(3, 1fr); }
}
@media (max-width: 1023px) {
  .sa-intro-inner { grid-template-columns: 1fr; gap: var(--space-2xl); }
  .why-split { grid-template-columns: 1fr; gap: var(--space-2xl); }
  .cta-banner-mid .container { flex-direction: column; align-items: flex-start; }
}
@media (max-width: 767px) {
  .sa-hero-content { padding: var(--section-pad-mobile); }
  .cities-grid { grid-template-columns: repeat(2, 1fr); }
  .sa-intro-quick-facts { grid-template-columns: 1fr 1fr; }
  .sa-intro, .cities-section, .map-section, .cta-banner-mid, .why-section, .cta-closing {
    padding: var(--section-pad-mobile);
  }
}
@media (max-width: 479px) {
  .cities-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ── Hero ──────────────────────────────────────────────────────────────────── -->
<section class="sa-hero" aria-labelledby="sa-h1">
  <div class="sa-hero-content container">
    <span class="sa-hero-eyebrow">Our Coverage</span>
    <h1 id="sa-h1">Irrigation Repair in Fort Worth &amp; Surrounding Communities</h1>
    <p class="sa-hero-sub">We serve all twelve cities within Tarrant County, TX — from Fort Worth and Arlington to Southlake, Mansfield, and Burleson. One call covers the whole county.</p>
    <div class="sa-hero-city-strip" aria-label="Cities served">
      <?php foreach ($serviceAreas as $area): ?>
      <span class="sa-hero-city-tag"><?php echo htmlspecialchars($area['city'], ENT_QUOTES, 'UTF-8'); ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── Breadcrumb ─────────────────────────────────────────────────────────────── -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb-list">
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">›</li>
      <li aria-current="page">Service Area</li>
    </ol>
  </div>
</nav>

<!-- ── Intro ──────────────────────────────────────────────────────────────────── -->
<section class="sa-intro" data-animate="fade-up" aria-labelledby="sa-intro-h2">
  <div class="container">
    <div class="sa-intro-inner">
      <div class="sa-intro-text">
        <span class="section-eyebrow">Where We Work</span>
        <h2 id="sa-intro-h2">All of Tarrant County — Fort Worth to Burleson</h2>
        <div class="prose">
          <p>Greener Grass Irrigation Repair covers all twelve cities in Tarrant County, TX: Fort Worth, Arlington, Keller, Southlake, Colleyville, Grapevine, North Richland Hills, Hurst, Euless, Bedford, Mansfield, and Burleson. If your property sits within Tarrant County, we service it.</p>
          <p>We intentionally don't extend beyond Tarrant County. The decision keeps our technicians close — most jobs can be reached within 30–45 minutes, and same-day dispatch before noon is possible because we're not routing trucks across four counties to fill the schedule. Tarrant County's specific soil conditions, water pressure profiles, and irrigation system vintages are what our team knows cold. That local depth shows up in faster diagnostics and fewer return visits.</p>
          <p>Irrigation repair near me searches in Fort Worth, Arlington, Keller, or any of the surrounding communities should bring you directly to our team. We're local, we're licensed (TCEQ), and we show up on time.</p>
        </div>
      </div>
      <div class="sa-intro-quick-facts">
        <div class="quick-fact">
          <span class="quick-fact-number">12</span>
          <span class="quick-fact-label">Cities Covered</span>
        </div>
        <div class="quick-fact">
          <span class="quick-fact-number"><?php echo $jobsCompleted; ?></span>
          <span class="quick-fact-label">Jobs Completed</span>
        </div>
        <div class="quick-fact">
          <span class="quick-fact-number">Same Day</span>
          <span class="quick-fact-label">Service When Called Before Noon</span>
        </div>
        <div class="quick-fact">
          <span class="quick-fact-number">Free</span>
          <span class="quick-fact-label">Written Estimates</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── Divider ────────────────────────────────────────────────────────────────── -->
<div class="divider-wave" aria-hidden="true">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 50" preserveAspectRatio="none" width="1440" height="50" style="fill:var(--color-bg-alt);display:block;">
    <path d="M0,50 C480,0 960,50 1440,0 L1440,50 Z"/>
  </svg>
</div>

<!-- ── Cities Grid ────────────────────────────────────────────────────────────── -->
<section class="cities-section" data-animate="fade-up" aria-labelledby="cities-h2">
  <div class="container">
    <div class="cities-header">
      <span class="section-eyebrow">All Service Cities</span>
      <h2 id="cities-h2">Irrigation Repair Near You in Tarrant County</h2>
    </div>
    <div class="cities-grid">
      <?php foreach ($serviceAreas as $i => $area):
        $cityName = $area['city'];
        $blurb = isset($cityBlurbs[$cityName]) ? $cityBlurbs[$cityName] : 'We provide same-day irrigation repair, installation, and maintenance throughout ' . $cityName . ', TX. Call for a free estimate.';
        $delay = min(($i % 4) * 100, 400);
      ?>
      <div class="city-card" data-animate="fade-up" style="transition-delay:<?php echo $delay; ?>ms">
        <div class="city-card-icon"><i data-lucide="map-pin" aria-hidden="true"></i></div>
        <div class="city-card-name"><?php echo htmlspecialchars($cityName, ENT_QUOTES, 'UTF-8'); ?></div>
        <div class="city-card-state"><?php echo htmlspecialchars($area['state'], ENT_QUOTES, 'UTF-8'); ?> — Tarrant County</div>
        <p class="city-card-desc"><?php echo htmlspecialchars($blurb, ENT_QUOTES, 'UTF-8'); ?></p>
        <a href="/contact/" class="city-card-link" aria-label="Get irrigation repair in <?php echo htmlspecialchars($cityName, ENT_QUOTES, 'UTF-8'); ?>">
          Irrigation repair near me
          <i data-lucide="arrow-right" aria-hidden="true"></i>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── Map ────────────────────────────────────────────────────────────────────── -->
<section class="map-section" data-animate="fade-up" aria-labelledby="map-h2">
  <div class="container">
    <div class="map-section-header">
      <span class="section-eyebrow">Coverage Map</span>
      <h2 id="map-h2">Our Service Area Spans All of Tarrant County</h2>
      <p>From Southlake in the north to Burleson in the south, we cover it all. If you're in Tarrant County, we can be there today.</p>
    </div>
    <div class="map-wrapper">
      <iframe
        src="about:blank"
        data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d429078.26!2d-97.330800!3d32.755500!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e791a6e6e11e5%3A0xcb0c!2sFort%20Worth%2C%20TX!5e0!3m2!1sen!2sus!4v1700000000000"
        width="100%"
        height="450"
        style="border:0;display:block;"
        loading="lazy"
        title="Greener Grass service area map — Fort Worth and Tarrant County TX"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>

<!-- ── CTA #2 — Mid-Page ──────────────────────────────────────────────────────── -->
<section class="cta-banner-mid" aria-label="Get a free estimate">
  <div class="container">
    <div class="cta-banner-text">
      <h2>In Tarrant County? We Can Be There Today.</h2>
      <p>Call before noon for same-day dispatch. Free written estimates on every job.</p>
    </div>
    <div class="cta-banner-actions">
      <a href="/contact/" class="btn-cta-accent">
        <i data-lucide="clipboard-list" aria-hidden="true"></i>
        Get a Free Estimate
      </a>
      <a href="tel:<?php echo $contactPhoneRaw; ?>" class="cta-phone-link-light">
        <i data-lucide="phone" aria-hidden="true"></i>
        <?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?>
      </a>
    </div>
  </div>
</section>

<!-- ── Why We Limit Our Service Area ─────────────────────────────────────────── -->
<section class="why-section" data-animate="fade-up" aria-labelledby="why-h2">
  <div class="container">
    <div class="why-split">
      <div class="why-text">
        <span class="section-eyebrow">Why We Stay Local</span>
        <h2 id="why-h2">Why We Limit Our Service Area to Tarrant County</h2>
        <div class="prose">
          <p>Some irrigation companies advertise coverage across all of DFW — Dallas County, Collin County, Denton County, Tarrant County. That sounds like a feature. It's not.</p>
          <p>Routing trucks across four counties means longer drive windows, less predictable scheduling, and technicians who cover so much geographic ground that they never develop deep knowledge of any one area's water infrastructure. Fort Worth's municipal water pressure differs from Keller's. Southlake's well-drained sandy loam behaves differently than the heavy clay in Burleson. These differences matter when you're diagnosing a lateral leak or setting seasonal watering schedules.</p>
          <p>Greener Grass limits the service area to Tarrant County's twelve cities because it makes us measurably faster and more accurate for every customer in that area. Smaller map, same-day dispatch, better diagnostics — that's the trade we make intentionally.</p>
        </div>
      </div>
      <ul class="why-benefit-list" aria-label="Benefits of our focused service area">
        <li class="why-benefit-item">
          <div class="why-benefit-icon"><i data-lucide="zap" aria-hidden="true"></i></div>
          <div class="why-benefit-text">
            <strong>Same-Day Dispatch</strong>
            <span>Shorter drive times across Tarrant County mean we can commit to same-day service when you call before noon — a promise we can keep because we haven't spread our routes thin.</span>
          </div>
        </li>
        <li class="why-benefit-item">
          <div class="why-benefit-icon"><i data-lucide="target" aria-hidden="true"></i></div>
          <div class="why-benefit-text">
            <strong>Deep Local Knowledge</strong>
            <span>Our technicians know Tarrant County's soil types, water pressure profiles, and common system failures at a level that a multi-county generalist can't match.</span>
          </div>
        </li>
        <li class="why-benefit-item">
          <div class="why-benefit-icon"><i data-lucide="clock" aria-hidden="true"></i></div>
          <div class="why-benefit-text">
            <strong>Accurate Time Windows</strong>
            <span>When we say we'll arrive between 9 AM and 11 AM, we can commit to that window because we're not driving in from two counties away. Shorter routes mean tighter estimates.</span>
          </div>
        </li>
        <li class="why-benefit-item">
          <div class="why-benefit-icon"><i data-lucide="repeat" aria-hidden="true"></i></div>
          <div class="why-benefit-text">
            <strong>Fewer Return Visits</strong>
            <span>Knowing the local infrastructure and system types means faster, more accurate first-visit diagnoses. Most jobs are resolved in a single visit.</span>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- ── CTA #3 — Closing ───────────────────────────────────────────────────────── -->
<section class="cta-closing" aria-label="Call for same-day irrigation repair">
  <div class="container">
    <span class="section-eyebrow-dark">Ready to Get Your System Fixed?</span>
    <h2>Same-Day Irrigation Repair Throughout Tarrant County</h2>
    <p>Call before noon on any weekday and we'll dispatch a TCEQ-licensed technician to your property today. No call centers, no waiting — just fast local service.</p>
    <div class="cta-closing-actions">
      <a href="tel:<?php echo $contactPhoneRaw; ?>" class="cta-phone-dark">
        <i data-lucide="phone-call" aria-hidden="true"></i>
        <?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?>
      </a>
      <a href="/contact/" class="btn-closing-dark">
        <i data-lucide="clipboard-list" aria-hidden="true"></i>
        Request a Free Estimate
      </a>
    </div>
  </div>
</section>

<p class="last-updated">Last Updated: April 2026</p>

<script>
// Lazy-load the map iframe
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
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
