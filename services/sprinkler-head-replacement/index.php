<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page Setup ──────────────────────────────────────────────────────────────
$pageTitle       = 'Sprinkler Head Replacement Fort Worth TX | Greener Grass';
$pageDescription = 'Replace broken, worn, or misaligned sprinkler heads in Fort Worth and Tarrant County. Rotary, pop-up, and MP rotator heads installed. $15–$45 per head. Licensed irrigator.';
$canonicalUrl    = $siteUrl . '/services/sprinkler-head-replacement/';
$canonicalLink = '<link rel="canonical" href="' . htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') . '">'; // QA canonical reference
$ogImage         = $siteUrl . '/assets/images/hero-sprinkler-heads.jpg';
$currentPage     = 'services';
$schemaMarkup    = false;

$serviceData = [
    'name'      => 'Sprinkler Head Replacement',
    'slug'      => 'sprinkler-head-replacement',
    'shortDesc' => 'Replace worn, broken, or misaligned sprinkler heads to restore even coverage across your lawn.',
];

$pageFaqs = [
    [
        'q' => 'How much does sprinkler head replacement cost in Fort Worth?',
        'a' => 'Sprinkler head replacement in Fort Worth typically runs $15–$45 per head installed, depending on head type. Standard pop-up spray heads are on the lower end; MP rotators and high-efficiency rotors run higher. Most yards need 2–6 heads replaced per visit. We quote per-head pricing upfront before any work begins.',
    ],
    [
        'q' => 'How do I know if my sprinkler heads need to be replaced?',
        'a' => 'The clearest signs are dry brown patches or overwatered soggy spots in areas that should be covered. Heads that pop up but don\'t spin, heads that leak at the base when the zone runs, heads buried by soil settling, heads cracked or sheared off by lawn equipment, and heads with visibly clogged nozzles all need replacement. Misaligned arc settings show up as half-dead strips at zone edges.',
    ],
    [
        'q' => 'Can you mix sprinkler head brands in the same zone?',
        'a' => 'Technically possible, but we don\'t recommend it. Different manufacturers engineer their heads to specific precipitation rates and nozzle flow values. Mixing brands in a zone often creates uneven coverage — one area gets 0.8 in/hr while adjacent heads deliver 1.2 in/hr — leading to alternating dry and waterlogged strips. We always match the replacement head to the existing spec.',
    ],
    [
        'q' => 'How many sprinkler heads can one zone support?',
        'a' => 'It depends on your home\'s static water pressure and the flow rate of each head. At typical Fort Worth residential pressure (45–65 PSI at the meter), a 3/4" zone valve can support 6–10 standard spray heads or 4–6 rotor heads before you hit flow limits. Overloaded zones show up as insufficient pressure — heads barely pop up or don\'t complete a full rotation. We check zone load during every head replacement visit.',
    ],
];

$processSteps = [
    [
        'title' => 'Walk the Zone With You',
        'desc'  => 'We run each zone and walk the property together, noting every head that\'s cracked, buried, misaligned, or underperforming before touching anything.',
    ],
    [
        'title' => 'Test Spray Pattern of Each Head',
        'desc'  => 'With the zone running, we measure arc coverage, radius, and precipitation rate. A head spraying 30% of its arc onto concrete is a water bill problem as much as a coverage problem.',
    ],
    [
        'title' => 'Match Replacement to System Spec',
        'desc'  => 'We replace heads with the same manufacturer, series, and nozzle size to maintain the zone\'s designed precipitation rate. No brand mixing, no improvising with whatever\'s cheapest.',
    ],
    [
        'title' => 'Adjust Coverage Arc and Radius',
        'desc'  => 'After install, we fine-tune arc direction and radius to match your lawn\'s actual shape — not just the default factory setting. Coverage gaps get closed, sidewalk overspray gets eliminated.',
    ],
];

$headTypes = [
    [
        'name'    => 'Pop-Up Spray Heads',
        'range'   => '6–15 ft radius',
        'best'    => 'Small-to-medium turf areas, landscape beds',
        'note'    => 'Fixed spray pattern, high precipitation rate, best for Bermuda and Zoysia in compact zones',
        'icon'    => 'droplets',
    ],
    [
        'name'    => 'Gear-Drive Rotors',
        'range'   => '20–55 ft radius',
        'best'    => 'Large turf areas, open yards',
        'note'    => 'Rotating stream covers more area per head, lower precipitation rate — ideal for large Fort Worth lots',
        'icon'    => 'rotate-cw',
    ],
    [
        'name'    => 'MP Rotator Nozzles',
        'range'   => '8–30 ft radius',
        'best'    => 'Slopes, clay soil areas, water-wise applications',
        'note'    => 'Multi-trajectory rotating streams apply water slowly, dramatically reducing runoff on Tarrant County clay',
        'icon'    => 'wind',
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
  "name": "How Greener Grass Replaces Sprinkler Heads in Fort Worth",
  "description": "Our process for diagnosing, matching, and replacing sprinkler heads to restore full zone coverage.",
  "step": [
    {
      "@type": "HowToStep",
      "position": 1,
      "name": "Walk the Zone With You",
      "text": "We run each zone and note every head that is cracked, buried, misaligned, or underperforming."
    },
    {
      "@type": "HowToStep",
      "position": 2,
      "name": "Test Spray Pattern of Each Head",
      "text": "We measure arc coverage, radius, and precipitation rate with the zone running live."
    },
    {
      "@type": "HowToStep",
      "position": 3,
      "name": "Match Replacement to System Spec",
      "text": "Replacements match the original manufacturer, series, and nozzle size to preserve zone precipitation rate."
    },
    {
      "@type": "HowToStep",
      "position": 4,
      "name": "Adjust Coverage Arc and Radius",
      "text": "After install, we fine-tune arc direction and radius to match your lawn shape and eliminate gaps."
    }
  ]
}
</script>

<style>
/* ── Page-specific: Sprinkler Head Replacement ───────────────────────────── */

/* Hero */
.service-hero {
  position: relative;
  min-height: 65vh;
  display: flex;
  align-items: center;
  background-image: url('/assets/images/hero-sprinkler-heads.jpg');
  background-size: cover;
  background-position: center 50%;
  overflow: hidden;
  animation: kenburns-heads 20s ease-in-out infinite alternate;
}
@keyframes kenburns-heads {
  from { background-size: 108%; background-position: 40% 50%; }
  to   { background-size: 120%; background-position: 60% 55%; }
}
.service-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    120deg,
    rgba(var(--color-primary-dark-rgb), 0.9) 0%,
    rgba(var(--color-primary-rgb), 0.7) 55%,
    rgba(var(--color-primary-dark-rgb), 0.5) 100%
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
  max-width: 680px;
  margin-bottom: var(--space-lg);
  opacity: 0;
  animation: fade-in-up 0.6s ease forwards 0.25s;
}
.service-hero__title em {
  font-style: normal;
  background: linear-gradient(90deg, var(--color-accent), #c8f06a);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.service-hero__sub {
  font-family: var(--font-body);
  font-size: clamp(1rem, 2vw, 1.18rem);
  color: rgba(255,255,255,0.88);
  max-width: 540px;
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
.intro-split {
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
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
.price-highlight {
  background: linear-gradient(135deg, var(--color-bg-alt), var(--color-bg));
  border: 1px solid rgba(var(--color-accent-rgb), 0.3);
  border-left: 4px solid var(--color-accent);
  border-radius: var(--radius-md);
  padding: var(--space-lg);
  margin-top: var(--space-xl);
}
.price-highlight__label {
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--color-text-light);
  display: block;
  margin-bottom: var(--space-xs);
}
.price-highlight__range {
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 2.8vw, 2.2rem);
  font-weight: 800;
  color: var(--color-primary);
  line-height: 1;
}
.price-highlight__note {
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  margin-top: var(--space-xs);
  display: block;
}
.intro-image-side {
  position: relative;
}
.intro-image-frame {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
  aspect-ratio: 3/4;
}
.intro-image-frame img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.floating-tag {
  position: absolute;
  top: var(--space-lg);
  right: calc(-1 * var(--space-lg));
  background: var(--color-accent);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-size: 0.85rem;
  font-weight: 700;
  padding: var(--space-sm) var(--space-md);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-md);
  white-space: nowrap;
}

/* Signature: Diagnostic Guide */
.diagnostic-section {
  background: var(--color-bg-alt);
  padding: var(--section-pad);
}
.diagnostic-section .section-eyebrow {
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
.diagnostic-section > .container > h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  color: var(--color-primary-dark);
  text-align: center;
  text-wrap: balance;
  margin-bottom: var(--space-3xl);
}
.diagnostic-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: start;
}
.diagnostic-image-col {
  position: relative;
}
.anatomy-frame {
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
  position: relative;
  aspect-ratio: 4/5;
}
.anatomy-frame img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.anatomy-frame::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(var(--color-primary-dark-rgb), 0.6) 0%, transparent 50%);
  z-index: 1;
}
.anatomy-caption {
  position: absolute;
  bottom: var(--space-lg);
  left: var(--space-lg);
  right: var(--space-lg);
  z-index: 2;
  color: #fff;
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  line-height: 1.5;
}
.anatomy-caption strong {
  display: block;
  font-family: var(--font-heading);
  font-size: 1.1rem;
  font-weight: 700;
  margin-bottom: var(--space-xs);
  color: var(--color-accent);
}
.callout-list {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-xs);
  margin-top: var(--space-sm);
}
.callout-list li {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  font-size: var(--font-size-xs);
  color: rgba(255,255,255,0.88);
}
.callout-dot {
  width: 8px;
  height: 8px;
  background: var(--color-accent);
  border-radius: 50%;
  flex-shrink: 0;
}
.diagnostic-content-col {
  display: flex;
  flex-direction: column;
  gap: var(--space-xl);
}
/* Pullquote */
.editorial-pullquote {
  border-left: 5px solid var(--color-accent);
  padding: var(--space-lg) var(--space-xl);
  background: var(--color-bg);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  box-shadow: var(--shadow-card);
}
.editorial-pullquote blockquote {
  font-family: var(--font-heading);
  font-size: clamp(1.15rem, 2vw, 1.4rem);
  font-weight: 700;
  color: var(--color-primary-dark);
  line-height: 1.4;
  text-wrap: balance;
  margin: 0 0 var(--space-sm) 0;
}
.editorial-pullquote cite {
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  font-style: normal;
  font-weight: 600;
  letter-spacing: 0.04em;
  text-transform: uppercase;
}
/* Head type cards */
.head-type-cards {
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.head-type-card {
  background: var(--color-bg);
  border-radius: var(--radius-md);
  padding: var(--space-lg);
  display: grid;
  grid-template-columns: 48px 1fr;
  gap: var(--space-md);
  align-items: start;
  box-shadow: var(--shadow-card);
  border-top: 3px solid var(--color-accent);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.head-type-card:hover {
  transform: translateX(4px);
  box-shadow: var(--shadow-xl);
}
.head-type-card__icon {
  width: 48px;
  height: 48px;
  background: rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform var(--transition-base);
}
.head-type-card:hover .head-type-card__icon { transform: scale(1.12) rotate(-4deg); }
.head-type-card__icon [data-lucide] {
  width: 22px;
  height: 22px;
  color: var(--color-accent-dark);
}
.head-type-card__name {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 700;
  color: var(--color-primary-dark);
  margin-bottom: var(--space-xs);
}
.head-type-card__meta {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-xs);
  margin-bottom: var(--space-xs);
}
.head-tag {
  background: rgba(var(--color-primary-rgb), 0.08);
  color: var(--color-primary-dark);
  font-family: var(--font-body);
  font-size: 0.75rem;
  font-weight: 700;
  padding: 2px var(--space-sm);
  border-radius: var(--radius-sm);
  letter-spacing: 0.04em;
}
.head-tag.accent {
  background: rgba(var(--color-accent-rgb), 0.18);
  color: var(--color-accent-dark);
}
.head-type-card__note {
  font-family: var(--font-body);
  font-size: 0.88rem;
  color: var(--color-text-light);
  line-height: 1.6;
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
  counter-reset: step-counter;
}
.process-step {
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg);
  padding: var(--space-xl) var(--space-lg);
  position: relative;
  border-top: 3px solid var(--color-accent);
  box-shadow: var(--shadow-card);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  counter-increment: step-counter;
}
.process-step:hover { transform: translateY(-4px); box-shadow: var(--shadow-xl); }
.process-step::before {
  content: counter(step-counter, decimal-leading-zero);
  font-family: var(--font-heading);
  font-size: clamp(2.5rem, 4vw, 3.5rem);
  font-weight: 800;
  color: rgba(var(--color-primary-rgb), 0.07);
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
.process-step__icon [data-lucide] { width: 22px; height: 22px; color: var(--color-accent-dark); }
.process-step h3 {
  font-family: var(--font-heading);
  font-size: clamp(1rem, 1.8vw, 1.15rem);
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
  bottom: -80px;
  left: -80px;
  width: 360px;
  height: 360px;
  background: rgba(var(--color-accent-rgb), 0.05);
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
.faq-list { max-width: 800px; margin-inline: auto; display: flex; flex-direction: column; gap: var(--space-md); }
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
  max-width: 52ch;
  margin-inline: auto;
  margin-bottom: var(--space-3xl);
  line-height: 1.6;
}
.estimate-form-wrap {
  max-width: 680px;
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
  .process-steps { grid-template-columns: repeat(2, 1fr); }
  .diagnostic-grid { gap: var(--space-2xl); }
}
@media (max-width: 767px) {
  .intro-split { grid-template-columns: 1fr; }
  .floating-tag { right: var(--space-md); top: var(--space-md); }
  .diagnostic-grid { grid-template-columns: 1fr; }
  .anatomy-frame { aspect-ratio: 3/2; }
  .process-steps { grid-template-columns: 1fr; }
  .form-row { grid-template-columns: 1fr; }
  .service-hero__actions { flex-direction: column; align-items: flex-start; }
  .estimate-form-wrap { padding: var(--space-xl); }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<main id="main-content">

  <!-- ── Hero (CTA #1) ──────────────────────────────────────────────────── -->
  <section class="service-hero" aria-label="Sprinkler Head Replacement — Fort Worth TX">
    <div class="service-hero__inner">
      <span class="service-hero__eyebrow">
        <i data-lucide="droplets" style="width:14px;height:14px;"></i>
        Fort Worth, TX &mdash; Tarrant County
      </span>
      <h1 class="service-hero__title">
        Sprinkler Head Replacement —<br><em>Even Coverage, No Dead Zones</em>
      </h1>
      <p class="service-hero__sub">
        A single misaligned or clogged head creates a brown strip the whole block can see.
        We match the right head to your system spec, adjust coverage arc, and verify the
        zone runs clean before we leave.
      </p>
      <div class="service-hero__actions">
        <a href="tel:<?php echo $contactPhoneRaw; ?>" class="btn-primary">
          <i data-lucide="phone" style="width:18px;height:18px;"></i>
          Call <?php echo htmlspecialchars($contactPhone); ?>
        </a>
        <a href="#estimate" class="btn-secondary">Free Estimate</a>
      </div>
      <div class="service-hero__badges">
        <span class="service-hero__badge"><i data-lucide="shield-check" style="width:14px;height:14px;"></i> TX Licensed Irrigator</span>
        <span class="service-hero__badge"><i data-lucide="dollar-sign" style="width:14px;height:14px;"></i> $15–$45 Per Head Installed</span>
        <span class="service-hero__badge"><i data-lucide="clock" style="width:14px;height:14px;"></i> Same-Day Service</span>
      </div>
    </div>
  </section>

  <?php renderBreadcrumbs([
    ['label' => 'Home',     'url' => '/'],
    ['label' => 'Services', 'url' => '/services/'],
    ['label' => 'Sprinkler Head Replacement', 'url' => '/services/sprinkler-head-replacement/'],
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
      <div class="intro-split">

        <div class="intro-body" data-animate>
          <span class="intro-eyebrow">Coverage Diagnosis First</span>
          <h2 class="intro-title">Dead Zones Aren't Random — They're Telling You Exactly Which Head Failed</h2>
          <p>
            A brown patch that appears every summer in the same corner of your yard isn't bad
            luck — it's a broken or misaligned sprinkler head creating a gap in coverage.
            Fort Worth Bermuda lawns go dormant-brown in under 72 hours when a zone fails
            during July and August peak heat. St. Augustine and Zoysia are more forgiving but
            not by much.
          </p>
          <p>
            We replace heads at <strong>$15–$45 per head installed</strong>, depending on head type. Pop-up
            spray heads sit at the low end; MP rotator nozzles and gear-drive rotors cost more but
            last 3–5× longer in Tarrant County's clay soil conditions where settling and soil
            movement shear heads off risers every few seasons.
          </p>
          <p>
            We don't just swap the broken head. We walk the full zone, test spray pattern and
            precipitation rate on every head, and adjust coverage arc before we're done. A head
            replaced with the wrong nozzle size or the wrong arc setting creates a new problem
            while fixing the old one.
          </p>
          <div class="price-highlight">
            <span class="price-highlight__label">Typical Cost Range</span>
            <span class="price-highlight__range">$15 – $45</span>
            <span class="price-highlight__note">Per head installed — parts and labor included. Written quote before work begins.</span>
          </div>
        </div>

        <div class="intro-image-side" data-animate data-animate-delay="200">
          <div class="intro-image-frame">
            <picture>
              <source srcset="/assets/images/sprinkler-heads-content-1.avif" type="image/avif">
              <source srcset="/assets/images/sprinkler-heads-content-1.webp" type="image/webp">
              <img
                src="/assets/images/sprinkler-heads-content-1.jpg"
                alt="Technician replacing pop-up sprinkler head in Fort Worth TX lawn"
                width="600"
                height="800"
                loading="lazy"
              >
            </picture>
          </div>
          <div class="floating-tag">All major brands in stock</div>
        </div>

      </div>
    </div>
  </section>

  <!-- Divider: wave -->
  <div class="divider-wave" aria-hidden="true">
    <svg viewBox="0 0 1440 56" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" height="56">
      <path d="M0,28 C480,56 960,0 1440,28 L1440,56 L0,56 Z" fill="#f2f8f4"/>
    </svg>
  </div>

  <!-- ── Signature: Diagnostic Guide ───────────────────────────────────── -->
  <section class="diagnostic-section">
    <div class="container">
      <span class="section-eyebrow">Head Selection Guide</span>
      <h2>The Right Head for Your Lawn — and Why It Matters</h2>
      <div class="diagnostic-grid">

        <div class="diagnostic-image-col" data-animate>
          <div class="anatomy-frame">
            <picture>
              <source srcset="/assets/images/sprinkler-heads-content-2.avif" type="image/avif">
              <source srcset="/assets/images/sprinkler-heads-content-2.webp" type="image/webp">
              <img
                src="/assets/images/sprinkler-heads-content-2.jpg"
                alt="Sprinkler head anatomy and coverage pattern diagram for Fort Worth TX lawn irrigation"
                width="700"
                height="875"
                loading="lazy"
              >
            </picture>
            <div class="anatomy-caption">
              <strong>Coverage Pattern</strong>
              <ul class="callout-list">
                <li><span class="callout-dot"></span> Arc direction — adjustable 0°–360°</li>
                <li><span class="callout-dot"></span> Radius — set by nozzle, not pressure</li>
                <li><span class="callout-dot"></span> Precipitation rate — must match zone</li>
                <li><span class="callout-dot"></span> Pop-up height — 2", 4", or 6" rise</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="diagnostic-content-col" data-animate data-animate-delay="200">

          <div class="editorial-pullquote">
            <blockquote>
              "Mixing spray and rotor heads in the same zone guarantees either a drowned lawn
              or a dead one — they apply water at completely different rates."
            </blockquote>
            <cite>Greener Grass Irrigation — Fort Worth, TX Since <?php echo $yearFounded; ?></cite>
          </div>

          <div class="head-type-cards">
            <?php foreach ($headTypes as $i => $head): ?>
            <div class="head-type-card" data-animate data-animate-delay="<?php echo ($i + 1) * 100; ?>">
              <div class="head-type-card__icon">
                <i data-lucide="<?php echo $head['icon']; ?>" aria-hidden="true"></i>
              </div>
              <div>
                <div class="head-type-card__name"><?php echo htmlspecialchars($head['name']); ?></div>
                <div class="head-type-card__meta">
                  <span class="head-tag"><?php echo htmlspecialchars($head['range']); ?></span>
                  <span class="head-tag accent"><?php echo htmlspecialchars($head['best']); ?></span>
                </div>
                <p class="head-type-card__note"><?php echo htmlspecialchars($head['note']); ?></p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Divider: diagonal up to white -->
  <div aria-hidden="true" style="line-height:0;overflow:hidden;margin-bottom:-1px;">
    <svg viewBox="0 0 1440 48" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" height="48">
      <polygon points="0,48 1440,0 1440,48" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Process ────────────────────────────────────────────────────────── -->
  <section class="process-section">
    <div class="container">
      <span class="section-eyebrow">Our Process</span>
      <h2>How We Replace Your Sprinkler Heads</h2>
      <div class="process-steps">
        <?php
        $icons = ['map-pin', 'eye', 'settings', 'check-circle'];
        foreach ($processSteps as $i => $step):
          $delay = ($i + 1) * 100;
        ?>
        <div class="process-step" data-animate data-animate-delay="<?php echo $delay; ?>">
          <div class="process-step__icon">
            <i data-lucide="<?php echo $icons[$i]; ?>" aria-hidden="true"></i>
          </div>
          <h3><?php echo htmlspecialchars($step['title']); ?></h3>
          <p><?php echo htmlspecialchars($step['desc']); ?></p>
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
  <section class="cta-banner" aria-label="Call for sprinkler head replacement">
    <div class="cta-banner__inner" data-animate>
      <h2>Brown Patches Spreading? Get the Zone Fixed Before the Next Watering Cycle.</h2>
      <p>We're in Fort Worth and Tarrant County daily. Most sprinkler head calls are handled same day — parts for all major brands are on the truck.</p>
      <a href="tel:<?php echo $contactPhoneRaw; ?>" class="cta-phone-link">
        <i data-lucide="phone" style="width:28px;height:28px;"></i>
        <?php echo htmlspecialchars($contactPhone); ?>
      </a>
      <div class="cta-banner__actions">
        <a href="tel:<?php echo $contactPhoneRaw; ?>" class="btn-primary">Call Now — Same-Day Available</a>
        <a href="#estimate" class="btn-secondary">Get Your Free Estimate</a>
      </div>
    </div>
  </section>

  <!-- Divider: wave to bg-alt -->
  <div class="divider-wave" aria-hidden="true">
    <svg viewBox="0 0 1440 56" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" height="56">
      <path d="M0,24 C360,56 1080,0 1440,32 L1440,56 L0,56 Z" fill="#f2f8f4"/>
    </svg>
  </div>

  <!-- ── FAQ ────────────────────────────────────────────────────────────── -->
  <section class="faq-section">
    <div class="container">
      <span class="section-eyebrow">Common Questions</span>
      <h2>Sprinkler Head Questions Fort Worth Homeowners Ask</h2>
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
  <section class="estimate-section" id="estimate" aria-label="Get a free sprinkler head replacement estimate">
    <div class="container">
      <span class="section-eyebrow">Free Estimate</span>
      <h2>Tell Us Your Lawn — We'll Give You a Price Today</h2>
      <p class="section-sub">Head replacement estimates are quick. Tell us your zone count, and we'll often be able to give a range before we even arrive.</p>

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
              <label for="sh-name">Your Name</label>
              <input type="text" id="sh-name" name="name" required autocomplete="name" placeholder="Jane Smith">
            </div>
            <div class="form-group">
              <label for="sh-phone">Phone Number</label>
              <input type="tel" id="sh-phone" name="phone" required autocomplete="tel" placeholder="(817) 555-0000">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="sh-service">Situation</label>
              <select id="sh-service" name="service">
                <option value="">What's happening…</option>
                <option value="Broken/cracked head">Broken or cracked head</option>
                <option value="Buried/sunken head">Head buried or sunken</option>
                <option value="Sprinkler hitting pavement">Spraying pavement/driveway</option>
                <option value="Dead zone / no coverage">Dead zone — no coverage</option>
                <option value="Head leaking at base">Leaking at base when zone runs</option>
                <option value="Full zone inspection">Full zone head inspection</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="form-group">
              <label for="sh-zip">ZIP Code</label>
              <input type="text" id="sh-zip" name="zip" placeholder="76102" inputmode="numeric" maxlength="5">
            </div>
          </div>

          <button type="submit" class="btn-primary btn-full">
            <i data-lucide="send" style="width:18px;height:18px;"></i>
            Request My Estimate
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
