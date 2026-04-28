<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page Setup ──────────────────────────────────────────────────────────────
$pageTitle       = 'Irrigation System Repair Fort Worth, TX | Greener Grass';
$pageDescription = 'Same-day irrigation system repair in Fort Worth and Tarrant County. Full-system diagnosis — valves, pipes, controllers, and heads. Licensed irrigator. $75–$300 most repairs.';
$canonicalUrl    = $siteUrl . '/services/irrigation-system-repair/';
$canonicalLink = '<link rel="canonical" href="' . htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') . '">'; // QA canonical reference
$ogImage         = $siteUrl . '/assets/images/hero-irrigation-repair.jpg';
$currentPage     = 'services';
$schemaMarkup    = false;

$serviceData = [
    'name'      => 'Irrigation System Repair',
    'slug'      => 'irrigation-system-repair',
    'shortDesc' => 'Fast diagnosis and repair of broken irrigation systems — valves, controllers, pipes, and heads.',
];

$pageFaqs = [
    [
        'q' => 'How much does irrigation repair cost in Fort Worth?',
        'a' => 'Most irrigation repairs in Fort Worth run $75–$300 depending on what\'s failed. A single broken valve typically costs $100–$175 to replace including labor. Cracked poly pipe repairs run $80–$150 per break. A controller replacement runs $150–$300 depending on zone count. We quote a flat price before any work begins — no hourly billing surprises.',
    ],
    [
        'q' => 'Can you fix my irrigation system the same day I call?',
        'a' => 'Yes — for most repairs in Fort Worth and Tarrant County, same-day service is available when you call before noon. Our trucks carry valves, heads, pipe, fittings, and controllers for all major brands, so the majority of repairs are completed on the first visit.',
    ],
    [
        'q' => 'What causes most irrigation failures in North Texas?',
        'a' => 'Tarrant County clay soil is the leading cause of irrigation damage in this area. Clay expands and contracts significantly with moisture changes, which gradually shifts pipes, cracks fittings, and shears heads off risers. Summer heat stress causes heads to degrade faster, and North Texas freeze events — even brief ones — crack valves and pipes that weren\'t properly winterized.',
    ],
    [
        'q' => 'Do I need a licensed irrigator for repair work in Texas?',
        'a' => 'Yes. Texas law (Texas Occupations Code Chapter 1903) requires that all irrigation system repair be performed or directly supervised by a licensed irrigator. This applies to repair, not just installation. Greener Grass holds a current Texas Irrigator License — ask to see it before hiring any contractor.',
    ],
];

$processSteps = [
    [
        'title' => 'Full Zone-by-Zone Inspection',
        'desc'  => 'We run every zone manually and walk the property with you, documenting pressure, coverage, and any visible failures before touching a single component.',
    ],
    [
        'title' => 'Root-Cause Diagnosis',
        'desc'  => 'We find why it failed — not just what failed. A dead zone caused by a bad valve solenoid will return in weeks if the underlying wiring fault isn\'t identified and fixed.',
    ],
    [
        'title' => 'Flat-Rate Quote On-Site',
        'desc'  => 'Before any work begins, you get a written price for everything we found. No hourly billing, no surprise charges after the fact. You approve it, we work.',
    ],
    [
        'title' => 'Same-Day Repair With Truck Stock',
        'desc'  => 'Our trucks carry parts for all major brands — Hunter, Rain Bird, Toro, Orbit, Irritrol. Most repairs are completed the same day without a return visit.',
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
  "name": "How Greener Grass Diagnoses and Repairs an Irrigation System",
  "description": "Our step-by-step process for diagnosing root causes and repairing irrigation systems in Fort Worth, TX.",
  "step": [
    {
      "@type": "HowToStep",
      "position": 1,
      "name": "Full Zone-by-Zone Inspection",
      "text": "We run every zone manually and walk the property with you, documenting pressure, coverage, and any visible failures."
    },
    {
      "@type": "HowToStep",
      "position": 2,
      "name": "Root-Cause Diagnosis",
      "text": "We identify why it failed — not just what failed — to prevent the same problem from returning."
    },
    {
      "@type": "HowToStep",
      "position": 3,
      "name": "Flat-Rate Quote On-Site",
      "text": "Before any work begins, you receive a written price for all repairs. No hourly billing."
    },
    {
      "@type": "HowToStep",
      "position": 4,
      "name": "Same-Day Repair With Truck Stock",
      "text": "Parts for all major brands on the truck — most repairs completed same day."
    }
  ]
}
</script>

<style>
/* ── Page-specific: Irrigation System Repair ─────────────────────────────── */

/* Hero */
.service-hero {
  position: relative;
  min-height: 65vh;
  display: flex;
  align-items: center;
  background-image: url('/assets/images/hero-irrigation-repair.jpg');
  background-size: cover;
  background-position: center 40%;
  overflow: hidden;
  animation: kenburns-repair 22s ease-in-out infinite alternate;
}
@keyframes kenburns-repair {
  from { background-size: 110%; background-position: center 40%; }
  to   { background-size: 122%; background-position: center 55%; }
}
.service-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    135deg,
    rgba(var(--color-primary-rgb), 0.88) 0%,
    rgba(var(--color-primary-dark-rgb), 0.72) 50%,
    rgba(var(--color-primary-dark-rgb), 0.55) 100%
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
  max-width: 700px;
  margin-bottom: var(--space-lg);
  opacity: 0;
  animation: fade-in-up 0.6s ease forwards 0.25s;
}
.service-hero__title span {
  background: linear-gradient(90deg, var(--color-accent), #b5e04a);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.service-hero__sub {
  font-family: var(--font-body);
  font-size: clamp(1rem, 2vw, 1.2rem);
  color: rgba(255,255,255,0.88);
  max-width: 560px;
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
.service-hero__badge {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(255,255,255,0.1);
  border: 1px solid rgba(255,255,255,0.2);
  border-radius: var(--radius-md);
  padding: var(--space-sm) var(--space-md);
  color: rgba(255,255,255,0.92);
  font-size: var(--font-size-xs);
  font-weight: 600;
  letter-spacing: 0.04em;
  opacity: 0;
  animation: fade-in-up 0.6s ease forwards 0.7s;
}
.service-hero__badges {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-sm);
  margin-top: var(--space-lg);
}
@keyframes fade-in-up {
  from { opacity: 0; transform: translateY(20px); }
  to   { opacity: 1; transform: translateY(0); }
}

/* Divider: diagonal down */
.divider-diagonal-down {
  width: 100%;
  overflow: hidden;
  line-height: 0;
  margin-bottom: calc(-1px);
}
.divider-diagonal-down svg { display: block; width: 100%; }

/* Divider: wave */
.divider-wave {
  width: 100%;
  overflow: hidden;
  line-height: 0;
  margin-bottom: calc(-1px);
}
.divider-wave svg { display: block; width: 100%; }

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

/* Intro section */
.intro-section {
  background: var(--color-bg);
  padding: var(--section-pad);
}
.intro-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
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
.intro-stats {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-md);
  margin-top: var(--space-xl);
}
.stat-box {
  background: var(--color-bg-alt);
  border: 1px solid rgba(var(--color-primary-rgb), 0.1);
  border-radius: var(--radius-md);
  padding: var(--space-lg);
  text-align: center;
}
.stat-box__number {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3vw, 2.4rem);
  font-weight: 800;
  color: var(--color-primary);
  line-height: 1;
  display: block;
}
.stat-box__label {
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  margin-top: var(--space-xs);
  display: block;
  font-weight: 600;
  letter-spacing: 0.04em;
  text-transform: uppercase;
}
.intro-image-wrap {
  position: relative;
}
.intro-image-frame {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
  aspect-ratio: 4/3;
}
.intro-image-frame img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.intro-image-badge {
  position: absolute;
  bottom: calc(-1 * var(--space-lg));
  left: calc(-1 * var(--space-lg));
  background: var(--color-accent);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-size: clamp(0.9rem, 1.5vw, 1.1rem);
  font-weight: 700;
  padding: var(--space-md) var(--space-lg);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-md);
  max-width: 200px;
  text-align: center;
  line-height: 1.3;
}

/* Signature: What We Diagnose */
.diagnose-section {
  background: var(--color-bg-alt);
  padding: var(--section-pad);
  overflow: visible;
}
.diagnose-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 0;
  align-items: stretch;
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}
.diagnose-image-col {
  position: relative;
  min-height: 520px;
}
.diagnose-image-col img {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.diagnose-image-col::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(to right, transparent 60%, rgba(var(--color-primary-dark-rgb), 0.18));
  z-index: 1;
}
.diagnose-content-col {
  background: var(--color-primary-dark);
  padding: var(--space-3xl) var(--space-2xl);
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.diagnose-content-col .section-eyebrow {
  color: var(--color-accent);
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  margin-bottom: var(--space-md);
  display: block;
}
.diagnose-content-col h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 2.8vw, 2.2rem);
  font-weight: 700;
  color: #fff;
  line-height: 1.2;
  text-wrap: balance;
  margin-bottom: var(--space-lg);
}
.diagnose-intro {
  font-family: var(--font-body);
  font-size: 0.95rem;
  color: rgba(255,255,255,0.78);
  line-height: 1.65;
  margin-bottom: var(--space-xl);
  max-width: 48ch;
}
.diagnose-checklist {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
}
.diagnose-checklist li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-md);
  font-family: var(--font-body);
  font-size: 0.95rem;
  color: rgba(255,255,255,0.9);
  line-height: 1.5;
  padding: var(--space-sm) 0;
  border-bottom: 1px solid rgba(255,255,255,0.06);
}
.diagnose-checklist li:last-child { border-bottom: none; }
.diagnose-check-icon {
  flex-shrink: 0;
  width: 22px;
  height: 22px;
  background: rgba(var(--color-accent-rgb), 0.2);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 1px;
}
.diagnose-check-icon [data-lucide] {
  width: 12px;
  height: 12px;
  color: var(--color-accent);
}

/* Process section */
.process-section {
  background: var(--color-bg);
  padding: var(--section-pad);
}
.process-section .section-eyebrow {
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
.process-section h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  color: var(--color-primary-dark);
  text-align: center;
  text-wrap: balance;
  margin-bottom: var(--space-3xl);
}
.process-steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
  counter-reset: process-counter;
}
.process-step {
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg);
  padding: var(--space-xl) var(--space-lg);
  position: relative;
  border-top: 3px solid var(--color-accent);
  box-shadow: var(--shadow-card);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  counter-increment: process-counter;
}
.process-step:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-xl);
}
.process-step::before {
  content: counter(process-counter, decimal-leading-zero);
  font-family: var(--font-heading);
  font-size: clamp(2.5rem, 4vw, 3.5rem);
  font-weight: 800;
  color: rgba(var(--color-primary-rgb), 0.08);
  position: absolute;
  top: var(--space-md);
  right: var(--space-md);
  line-height: 1;
}
.process-step__icon {
  width: 48px;
  height: 48px;
  background: rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-md);
  transition: transform var(--transition-base);
}
.process-step:hover .process-step__icon { transform: translateY(-4px); }
.process-step__icon [data-lucide] {
  width: 22px;
  height: 22px;
  color: var(--color-accent-dark);
}
.process-step h3 {
  font-family: var(--font-heading);
  font-size: clamp(1rem, 1.8vw, 1.2rem);
  font-weight: 700;
  color: var(--color-primary-dark);
  margin-bottom: var(--space-sm);
  text-wrap: balance;
}
.process-step p {
  font-family: var(--font-body);
  font-size: 0.9rem;
  color: var(--color-text-light);
  line-height: 1.65;
}

/* CTA Banner (mid-page) */
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
  z-index: 0;
}
.cta-banner::after {
  content: '';
  position: absolute;
  top: -60px;
  right: -60px;
  width: 320px;
  height: 320px;
  background: rgba(var(--color-accent-rgb), 0.06);
  border-radius: 50%;
}
.cta-banner__inner {
  position: relative;
  z-index: 1;
  max-width: 680px;
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

/* Benefits section */
.benefits-section {
  background: var(--color-bg-alt);
  padding: var(--section-pad);
}
.benefits-section .section-eyebrow {
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
.benefits-section h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  color: var(--color-primary-dark);
  text-align: center;
  text-wrap: balance;
  margin-bottom: var(--space-3xl);
}
.benefits-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-lg);
}
.benefit-card {
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  display: flex;
  gap: var(--space-lg);
  align-items: flex-start;
  box-shadow: var(--shadow-card);
  transition: box-shadow var(--transition-base), transform var(--transition-base);
  border-left: 4px solid var(--color-accent);
}
.benefit-card:hover {
  box-shadow: var(--shadow-xl);
  transform: translateY(-3px);
}
.benefit-card__icon {
  flex-shrink: 0;
  width: 52px;
  height: 52px;
  background: rgba(var(--color-accent-rgb), 0.12);
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform var(--transition-base);
}
.benefit-card:hover .benefit-card__icon {
  transform: scale(1.12) rotate(-4deg);
}
.benefit-card__icon [data-lucide] {
  width: 24px;
  height: 24px;
  color: var(--color-accent-dark);
}
.benefit-card__body h3 {
  font-family: var(--font-heading);
  font-size: clamp(1.05rem, 1.8vw, 1.2rem);
  font-weight: 700;
  color: var(--color-primary-dark);
  margin-bottom: var(--space-xs);
  text-wrap: balance;
}
.benefit-card__body p {
  font-family: var(--font-body);
  font-size: 0.92rem;
  color: var(--color-text-light);
  line-height: 1.65;
}

/* FAQ section */
.faq-section {
  background: var(--color-bg);
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
.faq-list {
  max-width: 800px;
  margin-inline: auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.faq-item {
  background: var(--color-bg-alt);
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

/* Inline estimate form */
.estimate-section {
  background: var(--color-bg-alt);
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
  max-width: 680px;
  margin-inline: auto;
  background: var(--color-bg);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-xl);
  padding: var(--space-3xl);
  border-top: 4px solid var(--color-accent);
}
.form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-md);
}
.form-group {
  display: flex;
  flex-direction: column;
  gap: var(--space-xs);
  margin-bottom: var(--space-md);
}
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
.btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
}
.btn-primary:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-accent-dark);
}
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
.btn-secondary:hover {
  background: rgba(255,255,255,0.12);
  border-color: rgba(255,255,255,0.8);
}
.btn-full { width: 100%; justify-content: center; }

/* Scroll animations */
[data-animate] {
  opacity: 0;
  transform: translateY(28px);
  transition: opacity 0.55s ease, transform 0.55s ease;
}
[data-animate].is-visible {
  opacity: 1;
  transform: translateY(0);
}
[data-animate-delay="100"] { transition-delay: 0.1s; }
[data-animate-delay="200"] { transition-delay: 0.2s; }
[data-animate-delay="300"] { transition-delay: 0.3s; }
[data-animate-delay="400"] { transition-delay: 0.4s; }
[data-animate-delay="500"] { transition-delay: 0.5s; }

/* Responsive */
@media (max-width: 1023px) {
  .process-steps { grid-template-columns: repeat(2, 1fr); }
  .intro-grid { gap: var(--space-2xl); }
}
@media (max-width: 767px) {
  .intro-grid { grid-template-columns: 1fr; }
  .intro-image-badge { bottom: var(--space-md); left: var(--space-md); }
  .diagnose-grid { grid-template-columns: 1fr; }
  .diagnose-image-col { min-height: 280px; }
  .process-steps { grid-template-columns: 1fr; }
  .benefits-grid { grid-template-columns: 1fr; }
  .form-row { grid-template-columns: 1fr; }
  .service-hero__actions { flex-direction: column; align-items: flex-start; }
  .estimate-form-wrap { padding: var(--space-xl); }
  .intro-stats { grid-template-columns: 1fr 1fr; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<main id="main-content">

  <!-- ── Hero (CTA #1) ──────────────────────────────────────────────────── -->
  <section class="service-hero" aria-label="Irrigation System Repair — Fort Worth">
    <div class="service-hero__inner">
      <span class="service-hero__eyebrow">
        <i data-lucide="wrench" style="width:14px;height:14px;"></i>
        Fort Worth, TX &mdash; Tarrant County
      </span>
      <h1 class="service-hero__title">
        Irrigation System Repair<br><span>Done Right, Same Day</span>
      </h1>
      <p class="service-hero__sub">
        We diagnose the root cause — not just the symptom. Fort Worth's clay soil, summer heat,
        and hard freeze events put real stress on irrigation systems. We carry the parts to fix
        it today.
      </p>
      <div class="service-hero__actions">
        <a href="tel:<?php echo $contactPhoneRaw; ?>" class="btn-primary">
          <i data-lucide="phone" style="width:18px;height:18px;"></i>
          Call <?php echo htmlspecialchars($contactPhone); ?>
        </a>
        <a href="#estimate" class="btn-secondary">Get a Free Estimate</a>
      </div>
      <div class="service-hero__badges">
        <span class="service-hero__badge"><i data-lucide="shield-check" style="width:14px;height:14px;"></i> TX Licensed Irrigator</span>
        <span class="service-hero__badge"><i data-lucide="clock" style="width:14px;height:14px;"></i> Same-Day Service</span>
        <span class="service-hero__badge"><i data-lucide="package" style="width:14px;height:14px;"></i> Parts On Truck</span>
        <span class="service-hero__badge"><i data-lucide="star" style="width:14px;height:14px;"></i> <?php echo $reviewRating; ?>/5 on Google</span>
      </div>
    </div>
  </section>

  <?php renderBreadcrumbs([
    ['label' => 'Home',     'url' => '/'],
    ['label' => 'Services', 'url' => '/services/'],
    ['label' => 'Irrigation System Repair', 'url' => '/services/irrigation-system-repair/'],
  ]); ?>

  <!-- Divider: diagonal down -->
  <div class="divider-diagonal-down" aria-hidden="true">
    <svg viewBox="0 0 1440 48" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" height="48">
      <polygon points="0,0 1440,0 1440,48" fill="#f2f8f4"/>
    </svg>
  </div>

  <!-- ── Intro ──────────────────────────────────────────────────────────── -->
  <section class="intro-section">
    <div class="container">
      <div class="intro-grid">

        <div class="intro-body" data-animate>
          <span class="intro-eyebrow">Full-System Diagnostics</span>
          <h2 class="intro-title">Fort Worth's Clay Soil Breaks Systems From the Inside Out</h2>
          <p>
            Most irrigation repairs in Fort Worth fail again within a season because the contractor
            fixed the visible symptom and left the root cause in place. Tarrant County's expansive
            clay soil shifts 1–3 inches seasonally — enough to shear risers, offset valve boxes,
            and crack poly pipe at joints. A $75 head replacement doesn't help if the zone is
            running 20 PSI under design pressure due to a partially closed valve.
          </p>
          <p>
            We run every zone before we quote and document pressure, coverage, and timing
            across the full system. Typical repairs in Fort Worth run <strong>$75–$300</strong> — most
            are completed the same day with parts already on the truck. We're a licensed Texas
            irrigator operation, which the state requires for all repair work, not just installation.
          </p>
          <p>
            Since <?php echo $yearFounded; ?>, we've completed <?php echo $jobsCompleted; ?> jobs across Fort Worth and
            Tarrant County — enough to know that Bermuda lawns in Keller handle stress differently
            than St. Augustine in Mansfield, and that NRH's water pressure profiles differ from
            what you'll find in Southlake.
          </p>
          <div class="intro-stats">
            <div class="stat-box">
              <span class="stat-box__number"><?php echo $jobsCompleted; ?></span>
              <span class="stat-box__label">Jobs Completed</span>
            </div>
            <div class="stat-box">
              <span class="stat-box__number"><?php echo $yearsInBusiness; ?></span>
              <span class="stat-box__label">Years Serving DFW</span>
            </div>
            <div class="stat-box">
              <span class="stat-box__number">$75–$300</span>
              <span class="stat-box__label">Typical Repair Range</span>
            </div>
            <div class="stat-box">
              <span class="stat-box__number"><?php echo $reviewRating; ?>/5</span>
              <span class="stat-box__label">Google Rating</span>
            </div>
          </div>
        </div>

        <div class="intro-image-wrap" data-animate data-animate-delay="200">
          <div class="intro-image-frame">
            <picture>
              <source srcset="/assets/images/irrigation-repair-content-1.avif" type="image/avif">
              <source srcset="/assets/images/irrigation-repair-content-1.webp" type="image/webp">
              <img
                src="/assets/images/irrigation-repair-content-1.jpg"
                alt="Licensed irrigator diagnosing broken irrigation valve in Fort Worth TX yard"
                width="800"
                height="600"
                loading="lazy"
              >
            </picture>
          </div>
          <div class="intro-image-badge">
            Same-Day Repair<br>Available
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Divider: wave -->
  <div class="divider-wave" aria-hidden="true">
    <svg viewBox="0 0 1440 56" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" height="56">
      <path d="M0,32 C360,64 1080,0 1440,32 L1440,56 L0,56 Z" fill="#0d2117"/>
    </svg>
  </div>

  <!-- ── Signature: What We Diagnose ───────────────────────────────────── -->
  <section class="diagnose-section" style="background:var(--color-primary-dark);">
    <div class="container">
      <div class="diagnose-grid" data-animate>

        <div class="diagnose-image-col">
          <picture>
            <source srcset="/assets/images/irrigation-repair-content-2.avif" type="image/avif">
            <source srcset="/assets/images/irrigation-repair-content-2.webp" type="image/webp">
            <img
              src="/assets/images/irrigation-repair-content-2.jpg"
              alt="Sprinkler system components — valve manifold, controller, and pop-up heads in Fort Worth TX"
              width="800"
              height="960"
              loading="lazy"
            >
          </picture>
        </div>

        <div class="diagnose-content-col">
          <span class="section-eyebrow">Component-Level Diagnosis</span>
          <h2>What We Inspect on Every Service Call</h2>
          <p class="diagnose-intro">
            We don't guess. Every irrigation repair call starts with a full zone run-through.
            Here's what we check before we quote a single dollar:
          </p>
          <ul class="diagnose-checklist">
            <li>
              <span class="diagnose-check-icon"><i data-lucide="check" aria-hidden="true"></i></span>
              <span><strong>Zone valves &amp; solenoids</strong> — flow, seating, and electrical continuity tested individually</span>
            </li>
            <li>
              <span class="diagnose-check-icon"><i data-lucide="check" aria-hidden="true"></i></span>
              <span><strong>Supply pressure</strong> — measured at the backflow preventer and at zone heads; pressure drop pinpoints pipe breaks</span>
            </li>
            <li>
              <span class="diagnose-check-icon"><i data-lucide="check" aria-hidden="true"></i></span>
              <span><strong>Controller &amp; wiring</strong> — voltage output per zone wire, ground continuity, rain sensor bypass status</span>
            </li>
            <li>
              <span class="diagnose-check-icon"><i data-lucide="check" aria-hidden="true"></i></span>
              <span><strong>Spray &amp; rotor heads</strong> — nozzle flow, arc adjustment, pop-up height, and coverage radius verified</span>
            </li>
            <li>
              <span class="diagnose-check-icon"><i data-lucide="check" aria-hidden="true"></i></span>
              <span><strong>Lateral &amp; main line pipe</strong> — wet spots, pressure anomalies, and soil heave patterns flagged</span>
            </li>
            <li>
              <span class="diagnose-check-icon"><i data-lucide="check" aria-hidden="true"></i></span>
              <span><strong>Backflow preventer</strong> — visual inspection for leaks or tamper; flag for certified annual test if due</span>
            </li>
            <li>
              <span class="diagnose-check-icon"><i data-lucide="check" aria-hidden="true"></i></span>
              <span><strong>Schedule &amp; run times</strong> — compared against ET rates for current Tarrant County weather conditions</span>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- Divider: diagonal up -->
  <div aria-hidden="true" style="line-height:0;overflow:hidden;margin-bottom:-1px;">
    <svg viewBox="0 0 1440 48" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" height="48">
      <polygon points="0,48 1440,0 1440,48" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Process ────────────────────────────────────────────────────────── -->
  <section class="process-section">
    <div class="container">
      <span class="process-section section-eyebrow">How It Works</span>
      <h2>Our 4-Step Repair Process</h2>
      <div class="process-steps">
        <?php
        $processIcons = ['search', 'clipboard-list', 'file-text', 'wrench'];
        foreach ($processSteps as $i => $step):
          $delay = ($i + 1) * 100;
        ?>
        <div class="process-step" data-animate data-animate-delay="<?php echo $delay; ?>">
          <div class="process-step__icon">
            <i data-lucide="<?php echo $processIcons[$i]; ?>" aria-hidden="true"></i>
          </div>
          <h3><?php echo htmlspecialchars($step['title']); ?></h3>
          <p><?php echo htmlspecialchars($step['desc']); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Divider: diagonal down -->
  <div class="divider-diagonal-down" aria-hidden="true">
    <svg viewBox="0 0 1440 48" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" height="48">
      <polygon points="0,0 1440,48 0,48" fill="#1b4332"/>
    </svg>
  </div>

  <!-- ── CTA Banner (CTA #2) ────────────────────────────────────────────── -->
  <section class="cta-banner" aria-label="Call for same-day irrigation repair">
    <div class="cta-banner__inner" data-animate>
      <h2>Broken Zone? Dead Spots Spreading? Don't Wait on Your Lawn.</h2>
      <p>Fort Worth's summer heat can kill a lawn in 72 hours when a zone goes down during peak season. Call before noon — we'll be there today.</p>
      <a href="tel:<?php echo $contactPhoneRaw; ?>" class="cta-phone-link">
        <i data-lucide="phone" style="width:28px;height:28px;"></i>
        <?php echo htmlspecialchars($contactPhone); ?>
      </a>
      <div class="cta-banner__actions">
        <a href="tel:<?php echo $contactPhoneRaw; ?>" class="btn-primary">Call Now — Same-Day Available</a>
        <a href="#estimate" class="btn-secondary">Request a Free Estimate</a>
      </div>
    </div>
  </section>

  <!-- Divider: wave -->
  <div class="divider-wave" aria-hidden="true">
    <svg viewBox="0 0 1440 56" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" height="56">
      <path d="M0,24 C480,56 960,0 1440,24 L1440,56 L0,56 Z" fill="#f2f8f4"/>
    </svg>
  </div>

  <!-- ── Benefits ───────────────────────────────────────────────────────── -->
  <section class="benefits-section">
    <div class="container">
      <span class="section-eyebrow">Why Greener Grass</span>
      <h2>What You Get That Most Contractors Don't Deliver</h2>
      <div class="benefits-grid">
        <div class="benefit-card" data-animate>
          <div class="benefit-card__icon"><i data-lucide="search" aria-hidden="true"></i></div>
          <div class="benefit-card__body">
            <h3>Root-Cause Diagnosis, Not Band-Aid Fixes</h3>
            <p>We trace every failure back to its origin — wiring fault, pressure drop, soil movement — before recommending a repair. This is why our customers don't call back for the same problem twice.</p>
          </div>
        </div>
        <div class="benefit-card" data-animate data-animate-delay="100">
          <div class="benefit-card__icon"><i data-lucide="package" aria-hidden="true"></i></div>
          <div class="benefit-card__body">
            <h3>Parts for Every Major Brand, On the Truck</h3>
            <p>Hunter, Rain Bird, Toro, Orbit, and Irritrol — we stock all of them. No waiting on parts orders. The repair that takes 3 days elsewhere gets done in 3 hours with us.</p>
          </div>
        </div>
        <div class="benefit-card" data-animate data-animate-delay="200">
          <div class="benefit-card__icon"><i data-lucide="shield-check" aria-hidden="true"></i></div>
          <div class="benefit-card__body">
            <h3>Texas-Licensed Irrigator — Always On-Site</h3>
            <p>Texas law requires all irrigation repair to be performed by or under the direct supervision of a licensed irrigator. Our license is current and available to verify. No unlicensed subcontractors.</p>
          </div>
        </div>
        <div class="benefit-card" data-animate data-animate-delay="300">
          <div class="benefit-card__icon"><i data-lucide="file-text" aria-hidden="true"></i></div>
          <div class="benefit-card__body">
            <h3>Flat-Rate Pricing — Written Before We Start</h3>
            <p>No hourly rates, no open-ended estimates. We give you a fixed price for the complete repair before any work begins. What we quote is what you pay.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Divider: wave reversed -->
  <div aria-hidden="true" style="line-height:0;overflow:hidden;margin-bottom:-1px;">
    <svg viewBox="0 0 1440 56" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" height="56">
      <path d="M0,32 C360,0 1080,56 1440,24 L1440,0 L0,0 Z" fill="#f2f8f4"/>
    </svg>
  </div>

  <!-- ── FAQ ────────────────────────────────────────────────────────────── -->
  <section class="faq-section">
    <div class="container">
      <span class="section-eyebrow">Common Questions</span>
      <h2>Irrigation Repair in Fort Worth — What You Need to Know</h2>
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

  <!-- ── Estimate Form (CTA #3) ─────────────────────────────────────────── -->
  <section class="estimate-section" id="estimate" aria-label="Request a free irrigation repair estimate">
    <div class="container">
      <span class="section-eyebrow">Free Estimate</span>
      <h2>Tell Us What's Going On — We'll Get You a Price Today</h2>
      <p class="section-sub">No commitment required. Most estimates are given same-day, often during the service call itself.</p>

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
              <label for="repair-name">Your Name</label>
              <input type="text" id="repair-name" name="name" required autocomplete="name" placeholder="Jane Smith">
            </div>
            <div class="form-group">
              <label for="repair-phone">Phone Number</label>
              <input type="tel" id="repair-phone" name="phone" required autocomplete="tel" placeholder="(817) 555-0000">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="repair-service">Issue Type</label>
              <select id="repair-service" name="service">
                <option value="">Select what's failing…</option>
                <option value="Dead zone / no water">Dead zone — no water</option>
                <option value="Broken sprinkler head">Broken or leaking head</option>
                <option value="Valve not opening/closing">Valve not opening or closing</option>
                <option value="Controller not working">Controller not working</option>
                <option value="Underground leak">Underground pipe leak</option>
                <option value="Low pressure">Low pressure across zones</option>
                <option value="Full system inspection">Full system inspection</option>
                <option value="Other irrigation repair">Other</option>
              </select>
            </div>
            <div class="form-group">
              <label for="repair-zip">ZIP Code</label>
              <input type="text" id="repair-zip" name="zip" placeholder="76102" inputmode="numeric" maxlength="5">
            </div>
          </div>

          <button type="submit" class="btn-primary btn-full">
            <i data-lucide="send" style="width:18px;height:18px;"></i>
            Send My Request
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
  // Scroll reveal
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
