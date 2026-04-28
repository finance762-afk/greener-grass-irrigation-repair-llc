<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page Setup ──────────────────────────────────────────────────────────────
$pageTitle       = 'Irrigation System Installation Fort Worth TX | Greener Grass';
$pageDescription = 'Licensed in-ground irrigation system design and installation in Fort Worth and Tarrant County. Residential and commercial. $2,500–$8,000 depending on property size. Licensed TX irrigator.';
$canonicalUrl    = $siteUrl . '/services/system-installation/';
$canonicalLink = '<link rel="canonical" href="' . htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') . '">'; // QA canonical reference
$ogImage         = $siteUrl . '/assets/images/hero-system-install.jpg';
$currentPage     = 'services';
$schemaMarkup    = false;

$serviceData = [
    'name'      => 'System Installation',
    'slug'      => 'system-installation',
    'shortDesc' => 'Complete in-ground irrigation system design and installation for residential and commercial properties.',
];

$pageFaqs = [
    [
        'q' => 'How much does a new irrigation system cost in Fort Worth?',
        'a' => 'A new in-ground irrigation system in Fort Worth typically runs $2,500–$8,000 for a residential property, depending on square footage, number of zones, soil conditions, and water pressure. A typical 1/4-acre Tarrant County lot with 4–6 zones runs $3,000–$5,500. Commercial properties and larger lots are quoted per zone after a site assessment.',
    ],
    [
        'q' => 'How long does irrigation system installation take in Fort Worth?',
        'a' => 'Most residential installations in Fort Worth take 1–3 days from trench to final commissioning. A smaller lot (under 1/4 acre) with 4 zones typically takes 1 full day. Larger properties with 6+ zones, remote valve manifolds, or challenging grade changes take 2–3 days. We complete all work before final inspection and test every zone before we leave.',
    ],
    [
        'q' => 'Do I need a permit for a new irrigation system in Fort Worth?',
        'a' => 'Yes. The City of Fort Worth requires a permit for any new irrigation system installation, and the system must include a backflow prevention device that meets TCEQ standards. Our licensed irrigator handles the permit application and files the required backflow test documentation with the city after installation. This is included in our installation price.',
    ],
    [
        'q' => 'Why is a licensed irrigator required by Texas law for new installation?',
        'a' => 'Texas Occupations Code Chapter 1903 requires that all irrigation system installation be performed by a licensed irrigator — not just a plumber or landscaper. The licensing requirement exists because improperly installed irrigation systems can contaminate the public water supply through cross-connection. Greener Grass holds a current Texas Irrigator License (LI number on request). Hiring an unlicensed contractor voids homeowner\'s insurance coverage for related water damage claims.',
    ],
];

$processSteps = [
    [
        'title' => 'Site Assessment & Water Pressure Test',
        'desc'  => 'We measure static and dynamic pressure at the meter, walk the property for grade, soil, and sun exposure, and document any obstacles — trees, easements, impervious surface.',
    ],
    [
        'title' => 'Zone Mapping & Head Placement Design',
        'desc'  => 'We design zone boundaries by head type, precipitation rate, and sun/shade exposure. Turf zones are separate from bed zones. Slopes and clay areas get MP rotators for runoff control.',
    ],
    [
        'title' => 'Trenching & Mainline Installation',
        'desc'  => 'Mainline runs from the backflow preventer at the meter to each valve manifold. Lateral lines branch to head locations. Trenching depth meets TCEQ minimums — deeper in freeze-risk zones.',
    ],
    [
        'title' => 'Head Placement, Controller & Backflow Install',
        'desc'  => 'Heads set at finished grade, controller wired per zone map, backflow preventer installed per Fort Worth code and TCEQ requirements. Smart controller and rain sensor standard.',
    ],
    [
        'title' => 'Zone-by-Zone Commissioning',
        'desc'  => 'Every zone run live: pressure confirmed, head coverage verified, arc and radius adjusted for actual property shape. Schedule programmed for current season and Tarrant County ET rates.',
    ],
];

$designFeatures = [
    [
        'icon'  => 'map',
        'title' => 'Property-Specific Zone Design',
        'desc'  => 'No template layouts. We zone by turf type, sun exposure, slope, and soil drainage — Tarrant County clay drains differently than sandy fill in newer developments.',
    ],
    [
        'icon'  => 'shield',
        'title' => 'TCEQ Backflow Compliance, Handled',
        'desc'  => 'Fort Worth requires a permitted backflow preventer on every new system. We install, test, and file the required documentation with the city on your behalf.',
    ],
    [
        'icon'  => 'wifi',
        'title' => 'Smart Controller Standard',
        'desc'  => 'Every installation includes a Wi-Fi smart controller pre-programmed with your zones, run times, and current Tarrant County water restrictions. ET-based scheduling reduces usage 20–30%.',
    ],
    [
        'icon'  => 'droplets',
        'title' => 'Water-Efficient Head Selection',
        'desc'  => 'MP rotators on slopes and clay areas, matched precipitation rates across zones, and pressure-regulated heads prevent the runoff and puddling that plagued older Fort Worth systems.',
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<body>

<?php echo generateServiceSchema($serviceData); ?>
<?php echo generateFAQSchema($pageFaqs); ?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "HowTo",
  "name": "How Greener Grass Installs a New Irrigation System in Fort Worth",
  "description": "Our 5-step process for designing and installing a complete in-ground irrigation system in Fort Worth and Tarrant County, TX.",
  "step": [
    {
      "@type": "HowToStep",
      "position": 1,
      "name": "Site Assessment & Water Pressure Test",
      "text": "Measure static and dynamic pressure at the meter, walk the property for grade, soil type, and sun exposure."
    },
    {
      "@type": "HowToStep",
      "position": 2,
      "name": "Zone Mapping & Head Placement Design",
      "text": "Design zone boundaries by head type, precipitation rate, and sun or shade exposure — turf zones separate from bed zones."
    },
    {
      "@type": "HowToStep",
      "position": 3,
      "name": "Trenching & Mainline Installation",
      "text": "Install mainline from backflow preventer to valve manifolds and lateral lines to all head locations at TCEQ-minimum depth."
    },
    {
      "@type": "HowToStep",
      "position": 4,
      "name": "Head Placement, Controller & Backflow Install",
      "text": "Set heads at finished grade, wire controller, install backflow preventer per Fort Worth code, connect smart controller and rain sensor."
    },
    {
      "@type": "HowToStep",
      "position": 5,
      "name": "Zone-by-Zone Commissioning",
      "text": "Run every zone live, verify pressure and coverage, adjust arc and radius, and program the schedule for current season and local ET rates."
    }
  ]
}
</script>

<style>
/* ── Page-specific: System Installation ──────────────────────────────────── */

/* Hero */
.service-hero {
  position: relative;
  min-height: 65vh;
  display: flex;
  align-items: center;
  background-image: url('/assets/images/hero-system-install.jpg');
  background-size: cover;
  background-position: center 35%;
  overflow: hidden;
  animation: kenburns-install 24s ease-in-out infinite alternate;
}
@keyframes kenburns-install {
  from { background-size: 110%; background-position: center 35%; }
  to   { background-size: 124%; background-position: center 50%; }
}
.service-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    150deg,
    rgba(var(--color-primary-dark-rgb), 0.92) 0%,
    rgba(var(--color-primary-rgb), 0.65) 60%,
    rgba(var(--color-primary-dark-rgb), 0.45) 100%
  );
  z-index: 1;
}
.service-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.04;
  z-index: 2;
}
.service-hero__inner {
  position: relative;
  z-index: 3;
  padding: var(--space-4xl) var(--space-lg);
  width: 100%;
  max-width: var(--max-width);
  margin-inline: auto;
}
.service-hero__eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(var(--color-accent-rgb), 0.18);
  border: 1px solid rgba(var(--color-accent-rgb), 0.4);
  color: var(--color-accent);
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  padding: var(--space-xs) var(--space-md);
  border-radius: var(--radius-xl);
  margin-bottom: var(--space-lg);
  opacity: 0;
  animation: fade-in-up 0.6s ease forwards 0.1s;
}
.service-hero__title {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 5.5vw, 4rem);
  font-weight: 800;
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: #fff;
  max-width: 760px;
  margin-bottom: var(--space-lg);
  opacity: 0;
  animation: fade-in-up 0.6s ease forwards 0.25s;
}
.service-hero__title span {
  background: linear-gradient(90deg, var(--color-accent), #c0ef5a);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.service-hero__sub {
  font-family: var(--font-body);
  font-size: clamp(1rem, 2vw, 1.18rem);
  color: rgba(255,255,255,0.88);
  max-width: 600px;
  line-height: 1.65;
  margin-bottom: var(--space-2xl);
  opacity: 0;
  animation: fade-in-up 0.6s ease forwards 0.4s;
}
.service-hero__actions {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-md);
  opacity: 0;
  animation: fade-in-up 0.6s ease forwards 0.55s;
}
.service-hero__badges {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-sm);
  margin-top: var(--space-lg);
  opacity: 0;
  animation: fade-in-up 0.6s ease forwards 0.7s;
}
.service-hero__badge {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(255,255,255,0.1);
  border: 1px solid rgba(255,255,255,0.22);
  border-radius: var(--radius-md);
  padding: var(--space-sm) var(--space-md);
  color: rgba(255,255,255,0.92);
  font-size: var(--font-size-xs);
  font-weight: 600;
  letter-spacing: 0.04em;
}
@keyframes fade-in-up {
  from { opacity: 0; transform: translateY(20px); }
  to   { opacity: 1; transform: translateY(0); }
}

/* Breadcrumb */
.breadcrumb-nav {
  background: var(--color-bg-alt);
  padding: var(--space-sm) 0;
  border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.08);
}
.breadcrumb-list {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  list-style: none;
  max-width: var(--max-width);
  margin-inline: auto;
  padding-inline: var(--space-lg);
  font-size: var(--font-size-xs);
}
.breadcrumb-item a {
  color: var(--color-secondary);
  font-weight: 600;
  transition: color var(--transition-fast);
}
.breadcrumb-item a:hover { color: var(--color-accent-dark); }
.breadcrumb-item.current { color: var(--color-text-light); }
.breadcrumb-sep { color: var(--color-text-light); }

/* Dividers */
.divider-diagonal-down { width:100%; overflow:hidden; line-height:0; margin-bottom:-1px; }
.divider-diagonal-down svg { display:block; width:100%; }
.divider-wave { width:100%; overflow:hidden; line-height:0; margin-bottom:-1px; }
.divider-wave svg { display:block; width:100%; }

/* Intro section */
.intro-section {
  background: var(--color-bg);
  padding: var(--section-pad);
}
.intro-reverse {
  display: grid;
  grid-template-columns: 0.9fr 1.1fr;
  gap: var(--space-3xl);
  align-items: center;
}
.intro-eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent-dark);
  margin-bottom: var(--space-md);
}
.intro-title {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary-dark);
  margin-bottom: var(--space-lg);
}
.intro-body p {
  font-family: var(--font-body);
  font-size: 1rem;
  line-height: 1.7;
  color: var(--color-text);
  max-width: 65ch;
  margin-bottom: var(--space-md);
}
.intro-body p:last-child { margin-bottom: 0; }
.intro-cost-box {
  margin-top: var(--space-xl);
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-md);
}
.cost-item {
  background: var(--color-bg-alt);
  border: 1px solid rgba(var(--color-primary-rgb), 0.1);
  border-radius: var(--radius-md);
  padding: var(--space-lg);
}
.cost-item__label {
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--color-text-light);
  display: block;
  margin-bottom: var(--space-xs);
}
.cost-item__value {
  font-family: var(--font-heading);
  font-size: clamp(1.2rem, 2vw, 1.6rem);
  font-weight: 800;
  color: var(--color-primary);
  line-height: 1;
}
.intro-image-col {
  position: relative;
}
.intro-image-frame {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
  aspect-ratio: 4/5;
}
.intro-image-frame img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.corner-badge {
  position: absolute;
  bottom: calc(-1 * var(--space-md));
  right: calc(-1 * var(--space-md));
  background: var(--color-primary);
  color: #fff;
  font-family: var(--font-heading);
  font-size: 0.88rem;
  font-weight: 700;
  padding: var(--space-md) var(--space-lg);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-md);
  line-height: 1.4;
  text-align: center;
}
.corner-badge strong {
  display: block;
  font-size: 1.4rem;
  color: var(--color-accent);
}

/* Signature: Design Process Steps — staggered cards */
.design-process-section {
  background: var(--color-bg-alt);
  padding: var(--section-pad);
}
.design-process-section .section-eyebrow {
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent-dark);
  display: block;
  text-align: center;
  margin-bottom: var(--space-sm);
}
.design-process-section > .container > h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  color: var(--color-primary-dark);
  text-align: center;
  text-wrap: balance;
  margin-bottom: var(--space-3xl);
}
.staggered-steps {
  display: flex;
  flex-direction: column;
  gap: var(--space-2xl);
  counter-reset: stagger-counter;
}
.stagger-step {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 0;
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
  counter-increment: stagger-counter;
}
.stagger-step:nth-child(even) { direction: rtl; }
.stagger-step:nth-child(even) > * { direction: ltr; }
.stagger-step__image {
  position: relative;
  min-height: 300px;
}
.stagger-step__image img {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.stagger-step__image::after {
  content: '';
  position: absolute;
  inset: 0;
  background: rgba(var(--color-primary-dark-rgb), 0.15);
}
.stagger-step__content {
  background: var(--color-bg);
  padding: var(--space-3xl) var(--space-2xl);
  display: flex;
  flex-direction: column;
  justify-content: center;
  position: relative;
}
.stagger-step__content::before {
  content: counter(stagger-counter, decimal-leading-zero);
  font-family: var(--font-heading);
  font-size: clamp(4rem, 8vw, 7rem);
  font-weight: 800;
  color: rgba(var(--color-primary-rgb), 0.06);
  position: absolute;
  bottom: var(--space-md);
  right: var(--space-lg);
  line-height: 1;
  pointer-events: none;
}
.stagger-step__icon {
  width: 52px;
  height: 52px;
  background: rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-md);
}
.stagger-step__icon [data-lucide] {
  width: 24px;
  height: 24px;
  color: var(--color-accent-dark);
}
.stagger-step h3 {
  font-family: var(--font-heading);
  font-size: clamp(1.2rem, 2.2vw, 1.5rem);
  font-weight: 700;
  color: var(--color-primary-dark);
  margin-bottom: var(--space-md);
  text-wrap: balance;
}
.stagger-step p {
  font-family: var(--font-body);
  font-size: 0.95rem;
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 48ch;
}

/* Design features */
.features-section {
  background: var(--color-bg);
  padding: var(--section-pad);
}
.features-section .section-eyebrow {
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent-dark);
  display: block;
  text-align: center;
  margin-bottom: var(--space-sm);
}
.features-section h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  color: var(--color-primary-dark);
  text-align: center;
  text-wrap: balance;
  margin-bottom: var(--space-3xl);
}
.features-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-lg);
}
.feature-card {
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
  box-shadow: var(--shadow-card);
  border-bottom: 3px solid var(--color-accent);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.feature-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-xl); }
.feature-card__icon {
  width: 52px;
  height: 52px;
  background: rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform var(--transition-base);
  flex-shrink: 0;
}
.feature-card:hover .feature-card__icon { transform: scale(1.12) rotate(-4deg); }
.feature-card__icon [data-lucide] { width: 24px; height: 24px; color: var(--color-accent-dark); }
.feature-card h3 {
  font-family: var(--font-heading);
  font-size: clamp(1.05rem, 1.8vw, 1.2rem);
  font-weight: 700;
  color: var(--color-primary-dark);
  text-wrap: balance;
  margin: 0;
}
.feature-card p {
  font-family: var(--font-body);
  font-size: 0.92rem;
  color: var(--color-text-light);
  line-height: 1.65;
  margin: 0;
  max-width: 48ch;
}

/* CTA Banner */
.cta-banner {
  position: relative;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  padding: var(--space-3xl) var(--space-lg);
  overflow: hidden;
  text-align: center;
}
.cta-banner::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
}
.cta-banner::after {
  content: '';
  position: absolute;
  top: -100px;
  right: -100px;
  width: 400px;
  height: 400px;
  background: rgba(var(--color-accent-rgb), 0.05);
  border-radius: 50%;
}
.cta-banner__inner {
  position: relative;
  z-index: 1;
  max-width: 700px;
  margin-inline: auto;
}
.cta-banner h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 800;
  color: #fff;
  text-wrap: balance;
  margin-bottom: var(--space-md);
}
.cta-banner p {
  font-family: var(--font-body);
  font-size: 1.05rem;
  color: rgba(255,255,255,0.82);
  margin-bottom: var(--space-xl);
  line-height: 1.6;
}
.cta-phone-link {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 3vw, 2.2rem);
  font-weight: 800;
  color: var(--color-accent);
  text-decoration: none;
  margin-bottom: var(--space-lg);
  transition: color var(--transition-fast);
}
.cta-phone-link:hover { color: #fff; }
.cta-banner__actions {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-md);
  justify-content: center;
  margin-top: var(--space-lg);
}

/* FAQ */
.faq-section {
  background: var(--color-bg-alt);
  padding: var(--section-pad);
}
.faq-section .section-eyebrow {
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent-dark);
  display: block;
  text-align: center;
  margin-bottom: var(--space-sm);
}
.faq-section h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  color: var(--color-primary-dark);
  text-align: center;
  text-wrap: balance;
  margin-bottom: var(--space-3xl);
}
.faq-list { max-width: 820px; margin-inline: auto; display: flex; flex-direction: column; gap: var(--space-md); }
.faq-item {
  background: var(--color-bg);
  border-radius: var(--radius-md);
  border: 1px solid rgba(var(--color-primary-rgb), 0.1);
  overflow: hidden;
}
.faq-item summary {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-md);
  padding: var(--space-lg) var(--space-xl);
  font-family: var(--font-heading);
  font-size: clamp(1rem, 1.8vw, 1.1rem);
  font-weight: 700;
  color: var(--color-primary-dark);
  cursor: pointer;
  list-style: none;
  transition: background var(--transition-fast);
}
.faq-item summary::-webkit-details-marker { display: none; }
.faq-item summary:hover { background: rgba(var(--color-primary-rgb), 0.04); }
.faq-chevron {
  width: 20px;
  height: 20px;
  flex-shrink: 0;
  color: var(--color-accent-dark);
  transition: transform var(--transition-base);
}
.faq-item[open] .faq-chevron { transform: rotate(180deg); }
.faq-answer {
  padding: 0 var(--space-xl) var(--space-lg);
  font-family: var(--font-body);
  font-size: 0.95rem;
  color: var(--color-text);
  line-height: 1.7;
  max-width: 65ch;
}

/* Estimate form */
.estimate-section {
  background: var(--color-bg);
  padding: var(--section-pad);
}
.estimate-section .section-eyebrow {
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent-dark);
  display: block;
  text-align: center;
  margin-bottom: var(--space-sm);
}
.estimate-section h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  color: var(--color-primary-dark);
  text-align: center;
  text-wrap: balance;
  margin-bottom: var(--space-sm);
}
.estimate-section .section-sub {
  font-family: var(--font-body);
  font-size: 1rem;
  color: var(--color-text-light);
  text-align: center;
  max-width: 55ch;
  margin-inline: auto;
  margin-bottom: var(--space-3xl);
  line-height: 1.6;
}
.estimate-form-wrap {
  max-width: 700px;
  margin-inline: auto;
  background: var(--color-bg-alt);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-xl);
  padding: var(--space-3xl);
  border-top: 4px solid var(--color-accent);
}
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-md); }
.form-group { display: flex; flex-direction: column; gap: var(--space-xs); margin-bottom: var(--space-md); }
.form-group label {
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  color: var(--color-primary-dark);
}
.form-group input,
.form-group select {
  width: 100%;
  padding: var(--space-md);
  border: 2px solid rgba(var(--color-primary-rgb), 0.15);
  border-radius: var(--radius-md);
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  color: var(--color-text);
  background: var(--color-bg);
  transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
  outline: none;
  appearance: none;
}
.form-group input:focus,
.form-group select:focus {
  border-color: var(--color-primary);
  box-shadow: 0 0 0 3px rgba(var(--color-primary-rgb), 0.12);
}
.form-footnote {
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  text-align: center;
  margin-top: var(--space-md);
}
.form-footnote a { color: var(--color-secondary); }

/* Buttons */
.btn-primary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-accent);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  border: none;
  cursor: pointer;
  text-decoration: none;
  box-shadow: 0 4px 0 var(--color-accent-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
  position: relative;
}
.btn-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.btn-primary:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-accent-dark); }
.btn-secondary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: transparent;
  color: #fff;
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  border: 2px solid rgba(255,255,255,0.5);
  cursor: pointer;
  text-decoration: none;
  transition: background var(--transition-fast), border-color var(--transition-fast);
}
.btn-secondary:hover { background: rgba(255,255,255,0.12); border-color: rgba(255,255,255,0.8); }
.btn-full { width: 100%; justify-content: center; }

/* Scroll animations */
[data-animate] { opacity: 0; transform: translateY(28px); transition: opacity 0.55s ease, transform 0.55s ease; }
[data-animate].is-visible { opacity: 1; transform: translateY(0); }
[data-animate-delay="100"] { transition-delay: 0.1s; }
[data-animate-delay="200"] { transition-delay: 0.2s; }
[data-animate-delay="300"] { transition-delay: 0.3s; }
[data-animate-delay="400"] { transition-delay: 0.4s; }
[data-animate-delay="500"] { transition-delay: 0.5s; }

/* Responsive */
@media (max-width: 1023px) {
  .stagger-step { grid-template-columns: 1fr; }
  .stagger-step:nth-child(even) { direction: ltr; }
  .stagger-step__image { min-height: 250px; }
  .features-grid { grid-template-columns: 1fr; }
}
@media (max-width: 767px) {
  .intro-reverse { grid-template-columns: 1fr; }
  .corner-badge { right: var(--space-md); bottom: var(--space-md); }
  .stagger-step { grid-template-columns: 1fr; }
  .stagger-step:nth-child(even) { direction: ltr; }
  .stagger-step__image { min-height: 220px; }
  .form-row { grid-template-columns: 1fr; }
  .intro-cost-box { grid-template-columns: 1fr 1fr; }
  .service-hero__actions { flex-direction: column; align-items: flex-start; }
  .estimate-form-wrap { padding: var(--space-xl); }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<main id="main-content">

  <!-- ── Hero (CTA #1) ──────────────────────────────────────────────────── -->
  <section class="service-hero" aria-label="Irrigation System Installation — Fort Worth TX">
    <div class="service-hero__inner">
      <span class="service-hero__eyebrow">
        <i data-lucide="hammer" style="width:14px;height:14px;"></i>
        Licensed Installation — Fort Worth, TX
      </span>
      <h1 class="service-hero__title">
        In-Ground Irrigation Design &amp; Installation<br>
        <span>Built for North Texas Conditions</span>
      </h1>
      <p class="service-hero__sub">
        Tarrant County clay soil, high summer ET rates, and Fort Worth's backflow permit requirements
        demand a system designed for this specific environment — not a generic layout
        copied from a template. Licensed Texas irrigator on every job.
      </p>
      <div class="service-hero__actions">
        <a href="tel:<?php echo $contactPhoneRaw; ?>" class="btn-primary">
          <i data-lucide="phone" style="width:18px;height:18px;"></i>
          Call <?php echo htmlspecialchars($contactPhone); ?>
        </a>
        <a href="#estimate" class="btn-secondary">Request a Free Site Assessment</a>
      </div>
      <div class="service-hero__badges">
        <span class="service-hero__badge"><i data-lucide="shield-check" style="width:14px;height:14px;"></i> TX Licensed Irrigator</span>
        <span class="service-hero__badge"><i data-lucide="dollar-sign" style="width:14px;height:14px;"></i> $2,500–$8,000 Residential</span>
        <span class="service-hero__badge"><i data-lucide="calendar" style="width:14px;height:14px;"></i> 1–3 Day Install</span>
        <span class="service-hero__badge"><i data-lucide="file-check" style="width:14px;height:14px;"></i> Permit Included</span>
      </div>
    </div>
  </section>

  <?php renderBreadcrumbs([
    ['label' => 'Home',     'url' => '/'],
    ['label' => 'Services', 'url' => '/services/'],
    ['label' => 'System Installation', 'url' => '/services/system-installation/'],
  ]); ?>

  <!-- Divider: diagonal -->
  <div class="divider-diagonal-down" aria-hidden="true">
    <svg viewBox="0 0 1440 48" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" height="48">
      <polygon points="0,0 1440,0 1440,48" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Intro ──────────────────────────────────────────────────────────── -->
  <section class="intro-section">
    <div class="container">
      <div class="intro-reverse">

        <div class="intro-image-col" data-animate>
          <div class="intro-image-frame">
            <picture>
              <source srcset="/assets/images/system-install-content-1.avif" type="image/avif">
              <source srcset="/assets/images/system-install-content-1.webp" type="image/webp">
              <img
                src="/assets/images/system-install-content-1.jpg"
                alt="Licensed irrigator laying mainline pipe for new in-ground irrigation system in Fort Worth TX"
                width="700"
                height="875"
                loading="lazy"
              >
            </picture>
          </div>
          <div class="corner-badge">
            <strong><?php echo $yearsInBusiness; ?>+</strong>
            Years Installing<br>in Tarrant County
          </div>
        </div>

        <div class="intro-body" data-animate data-animate-delay="200">
          <span class="intro-eyebrow">Site-Specific System Design</span>
          <h2 class="intro-title">Why "Standard" Systems Fail in Fort Worth — and What We Do Instead</h2>
          <p>
            A new in-ground irrigation system in Fort Worth costs <strong>$2,500–$8,000</strong> for a
            residential property, depending on square footage and zone count. A typical 1/4-acre
            lot with 4–6 zones runs $3,000–$5,500 fully installed, permitted, and commissioned —
            including the backflow preventer and smart controller.
          </p>
          <p>
            Most irrigation system failures in North Texas come from systems designed without
            regard for local conditions. Tarrant County clay soil expands and contracts
            3–5% seasonally — enough to shift pipe, shear risers, and crack fittings within
            5–7 years on systems not built for it. We account for soil type, local water pressure
            profiles (Fort Worth residential averages 50–65 PSI static), and seasonal ET rates
            when laying out every zone.
          </p>
          <p>
            Texas law (Occupations Code Chapter 1903) requires all irrigation installation be
            performed by a licensed irrigator. This isn't a technicality — unpermitted systems
            can void homeowner's insurance coverage. We handle the Fort Worth permit application
            and backflow test filing with the city. It's included in our price.
          </p>
          <div class="intro-cost-box">
            <div class="cost-item">
              <span class="cost-item__label">Typical Residential</span>
              <span class="cost-item__value">$3k–$5.5k</span>
            </div>
            <div class="cost-item">
              <span class="cost-item__label">Larger Properties</span>
              <span class="cost-item__value">Up to $8k</span>
            </div>
            <div class="cost-item">
              <span class="cost-item__label">Install Time</span>
              <span class="cost-item__value">1–3 Days</span>
            </div>
            <div class="cost-item">
              <span class="cost-item__label">Permit &amp; Backflow</span>
              <span class="cost-item__value">Included</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Divider: wave -->
  <div class="divider-wave" aria-hidden="true">
    <svg viewBox="0 0 1440 56" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" height="56">
      <path d="M0,32 C480,56 960,0 1440,28 L1440,56 L0,56 Z" fill="#f2f8f4"/>
    </svg>
  </div>

  <!-- ── Signature: Staggered Design Process ───────────────────────────── -->
  <section class="design-process-section">
    <div class="container">
      <span class="section-eyebrow">How We Design &amp; Install</span>
      <h2>From First Assessment to Final Zone Test — Every Step, On Your Property</h2>

      <div class="staggered-steps">

        <?php
        $stepIcons  = ['gauge', 'map', 'shovel', 'cpu', 'check-circle-2'];
        $stepImages = [
          '/assets/images/system-install-content-2.jpg',
          '/assets/images/system-install-content-3.jpg',
          '/assets/images/system-install-content-4.jpg',
          '/assets/images/system-install-content-5.jpg',
          '/assets/images/system-install-content-6.jpg',
        ];
        $stepImgAlts = [
          'Water pressure gauge test at Fort Worth TX residential meter before irrigation installation',
          'Zone map and head placement diagram for Fort Worth TX irrigation system design',
          'Irrigation mainline trenching in Fort Worth TX yard using narrow trencher to minimize turf damage',
          'Smart controller and backflow preventer installed for new Fort Worth TX irrigation system',
          'Licensed irrigator commissioning new irrigation zones at Fort Worth TX property',
        ];
        foreach ($processSteps as $i => $step):
          $delay = ($i + 1) * 100;
        ?>
        <div class="stagger-step" data-animate data-animate-delay="<?php echo $delay; ?>">
          <div class="stagger-step__image">
            <picture>
              <source srcset="<?php echo str_replace('.jpg','.avif',$stepImages[$i]); ?>" type="image/avif">
              <source srcset="<?php echo str_replace('.jpg','.webp',$stepImages[$i]); ?>" type="image/webp">
              <img
                src="<?php echo $stepImages[$i]; ?>"
                alt="<?php echo htmlspecialchars($stepImgAlts[$i]); ?>"
                width="700"
                height="500"
                loading="lazy"
              >
            </picture>
          </div>
          <div class="stagger-step__content">
            <div class="stagger-step__icon">
              <i data-lucide="<?php echo $stepIcons[$i]; ?>" aria-hidden="true"></i>
            </div>
            <h3>Step <?php echo $i + 1; ?>: <?php echo htmlspecialchars($step['title']); ?></h3>
            <p><?php echo htmlspecialchars($step['desc']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>

  <!-- Divider: diagonal up to white -->
  <div aria-hidden="true" style="line-height:0;overflow:hidden;margin-bottom:-1px;">
    <svg viewBox="0 0 1440 48" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" height="48">
      <polygon points="0,48 1440,0 1440,48" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Design Features ───────────────────────────────────────────────── -->
  <section class="features-section">
    <div class="container">
      <span class="section-eyebrow">What Every Installation Includes</span>
      <h2>Standard on Every Greener Grass System Installation</h2>
      <div class="features-grid">
        <?php foreach ($designFeatures as $i => $feat): ?>
        <div class="feature-card" data-animate data-animate-delay="<?php echo ($i + 1) * 100; ?>">
          <div class="feature-card__icon">
            <i data-lucide="<?php echo $feat['icon']; ?>" aria-hidden="true"></i>
          </div>
          <h3><?php echo htmlspecialchars($feat['title']); ?></h3>
          <p><?php echo htmlspecialchars($feat['desc']); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Divider: diagonal to primary -->
  <div class="divider-diagonal-down" aria-hidden="true">
    <svg viewBox="0 0 1440 48" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" height="48">
      <polygon points="0,0 1440,48 0,48" fill="#1b4332"/>
    </svg>
  </div>

  <!-- ── CTA Banner (CTA #2) ────────────────────────────────────────────── -->
  <section class="cta-banner" aria-label="Get a free irrigation system installation quote">
    <div class="cta-banner__inner" data-animate>
      <h2>Ready to Stop Dragging Hoses? Let's Design Your System.</h2>
      <p>Site assessments are free and typically scheduled within 2–3 business days. We'll walk the property, test water pressure, and give you a fixed price — no estimates that balloon after we start digging.</p>
      <a href="tel:<?php echo $contactPhoneRaw; ?>" class="cta-phone-link">
        <i data-lucide="phone" style="width:28px;height:28px;"></i>
        <?php echo htmlspecialchars($contactPhone); ?>
      </a>
      <div class="cta-banner__actions">
        <a href="tel:<?php echo $contactPhoneRaw; ?>" class="btn-primary">Call Now — Schedule Your Assessment</a>
        <a href="#estimate" class="btn-secondary">Send a Request Online</a>
      </div>
    </div>
  </section>

  <!-- Divider: wave to bg-alt -->
  <div class="divider-wave" aria-hidden="true">
    <svg viewBox="0 0 1440 56" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" height="56">
      <path d="M0,24 C360,0 1080,56 1440,32 L1440,56 L0,56 Z" fill="#f2f8f4"/>
    </svg>
  </div>

  <!-- ── FAQ ────────────────────────────────────────────────────────────── -->
  <section class="faq-section">
    <div class="container">
      <span class="section-eyebrow">Installation Questions</span>
      <h2>What Fort Worth Homeowners Ask Before Installing a New System</h2>
      <div class="faq-list">
        <?php foreach ($pageFaqs as $faq): ?>
        <details class="faq-item" data-animate>
          <summary>
            <?php echo htmlspecialchars($faq['q']); ?>
            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
              <polyline points="6 9 12 15 18 9"/>
            </svg>
          </summary>
          <div class="faq-answer"><?php echo htmlspecialchars($faq['a']); ?></div>
        </details>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Divider: diagonal up to white -->
  <div aria-hidden="true" style="line-height:0;overflow:hidden;margin-bottom:-1px;">
    <svg viewBox="0 0 1440 48" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" height="48">
      <polygon points="0,48 1440,0 1440,48" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Estimate Form (CTA #3) ─────────────────────────────────────────── -->
  <section class="estimate-section" id="estimate" aria-label="Request a free irrigation system installation assessment">
    <div class="container">
      <span class="section-eyebrow">Free Site Assessment</span>
      <h2>Start With a Free Property Assessment — No Pressure, Just a Price</h2>
      <p class="section-sub">
        We assess the site, test water pressure, sketch the zone layout, and give you a fixed written
        quote. Most assessments scheduled within 2–3 business days.
      </p>

      <div class="estimate-form-wrap" data-animate>
        <form
          action="<?php echo htmlspecialchars($formEndpoint, ENT_QUOTES, 'UTF-8'); ?>"
          method="POST"
          novalidate
        >
          <input type="text"   name="_honey"          style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
          <input type="hidden" name="_next"            value="/thank-you">
          <input type="hidden" name="_consent_version" value="v2.1">
          <input type="hidden" name="_consent_page"    value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>">

          <div class="form-row">
            <div class="form-group">
              <label for="si-name">Your Name</label>
              <input type="text" id="si-name" name="name" required autocomplete="name" placeholder="Jane Smith">
            </div>
            <div class="form-group">
              <label for="si-phone">Phone Number</label>
              <input type="tel" id="si-phone" name="phone" required autocomplete="tel" placeholder="(817) 555-0000">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="si-service">Property Type</label>
              <select id="si-service" name="service">
                <option value="">Select…</option>
                <option value="New Installation — Residential (under 1/4 acre)">Residential — under 1/4 acre</option>
                <option value="New Installation — Residential (1/4 to 1/2 acre)">Residential — 1/4 to 1/2 acre</option>
                <option value="New Installation — Residential (over 1/2 acre)">Residential — over 1/2 acre</option>
                <option value="New Installation — Commercial">Commercial property</option>
                <option value="System expansion — add zones">Expand existing system</option>
              </select>
            </div>
            <div class="form-group">
              <label for="si-zip">ZIP Code</label>
              <input type="text" id="si-zip" name="zip" placeholder="76102" inputmode="numeric" maxlength="5">
            </div>
          </div>

          <button type="submit" class="btn-primary btn-full">
            <i data-lucide="send" style="width:18px;height:18px;"></i>
            Request My Free Assessment
          </button>
          <p class="form-footnote">
            By submitting, you agree to our <a href="/terms/">Terms</a> and <a href="/privacy-policy/">Privacy Policy</a>.
            We never sell your information.
          </p>
        </form>
      </div>
    </div>
  </section>

  <p style="display:none;">Last Updated: April 2026</p>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<script>
(function() {
  const els = document.querySelectorAll('[data-animate]');
  if (!els.length) return;
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) { e.target.classList.add('is-visible'); io.unobserve(e.target); }
    });
  }, { threshold: 0.12 });
  els.forEach(el => io.observe(el));
})();
</script>

</body>
</html>
