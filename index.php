<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page Setup ──────────────────────────────────────────────────────────────
$pageTitle       = 'Fort Worth Irrigation Repair & Sprinkler Service | Greener Grass';
$pageDescription = 'Fort Worth irrigation repair specialists — same-day service for broken sprinklers, leak detection, winterization & backflow testing. Licensed & insured. Free estimate.';
$canonicalUrl    = $siteUrl . '/';
$canonicalLink = '<link rel="canonical" href="' . htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') . '">'; // QA canonical reference
$ogImage         = $siteUrl . '/assets/images/og-image.jpg';
$currentPage     = 'home';
$useSwiper       = true;
$schemaMarkup    = false; // page schemas output manually below

// ─── Homepage FAQs ────────────────────────────────────────────────────────────
$homeFaqs = [
  [
    'q' => 'How much does irrigation repair cost in Fort Worth?',
    'a' => 'Most irrigation repairs in Fort Worth range from $75–$250 depending on the problem. A broken sprinkler head runs $50–$100 per head including labor. Valve replacements typically run $100–$175. We give you an upfront price before any work begins — no surprise charges after the fact.',
  ],
  [
    'q' => 'Do you offer same-day irrigation repair service?',
    'a' => 'Yes. For most repairs in Fort Worth and Tarrant County, same-day service is available when you call before noon. Our trucks are fully stocked so we can complete the majority of repairs on the first visit without a return trip.',
  ],
  [
    'q' => 'When should I winterize my sprinkler system in North Texas?',
    'a' => 'In the DFW area, winterize between mid-November and early December — before the first hard freeze (28°F or below sustained for 4+ hours). North Texas freezes are unpredictable, and a single event can crack pipes and valves. Replacing freeze-damaged components typically costs 3–5× more than a preventive blowout.',
  ],
  [
    'q' => 'Are you licensed and insured for irrigation work in Texas?',
    'a' => 'Yes. Greener Grass Irrigation Repair holds a Texas Irrigator License and carries full liability insurance. Texas law requires all irrigation installation and repair to be performed by a licensed irrigator — always verify your contractor\'s license before hiring anyone.',
  ],
  [
    'q' => 'What areas do you serve near Fort Worth?',
    'a' => 'We serve Fort Worth and all of Tarrant County: Arlington, Keller, Southlake, Colleyville, Grapevine, North Richland Hills, Hurst, Euless, Bedford, Mansfield, and Burleson.',
  ],
  [
    'q' => 'Can you upgrade my old irrigation controller to a smart system?',
    'a' => 'Absolutely. We install and program Wi-Fi smart controllers that adjust watering schedules based on real-time local weather data. Smart controllers typically reduce water usage 20–30% and pay for themselves within one to two Texas summers.',
  ],
];

// ─── Sample Reviews ───────────────────────────────────────────────────────────
$homeReviews = [
  [
    'name'     => 'Marcus T.',
    'location' => 'Fort Worth, TX',
    'service'  => 'Irrigation Repair',
    'stars'    => 5,
    'text'     => 'Called at 8am about a dead zone. Tech was out by noon, diagnosed three bad valves, and had the whole system running by 2pm. Pricing was exactly what they quoted on the phone. These guys saved my lawn during July.',
  ],
  [
    'name'     => 'Jennifer R.',
    'location' => 'Keller, TX',
    'service'  => 'Spring Startup',
    'stars'    => 5,
    'text'     => 'Super thorough spring startup — they found a slow leak I didn\'t know I had and fixed it same day. After two seasons with Greener Grass I trust nobody else with my irrigation system. Worth every penny.',
  ],
  [
    'name'     => 'David K.',
    'location' => 'Southlake, TX',
    'service'  => 'System Installation',
    'stars'    => 5,
    'text'     => 'New full irrigation system for my 1/3-acre property. Greener Grass mapped it perfectly — uniform coverage, no puddles, no dry spots. They also set up a Rachio smart controller. Couldn\'t be happier with the results.',
  ],
  [
    'name'     => 'Susan M.',
    'location' => 'Arlington, TX',
    'service'  => 'Winterization',
    'stars'    => 5,
    'text'     => 'During the winterization blowout they found a cracked fitting that would have been a nightmare in February. These guys know what they\'re doing. Fast, professional, and fairly priced — I recommend them to everyone.',
  ],
  [
    'name'     => 'Robert P.',
    'location' => 'North Richland Hills, TX',
    'service'  => 'Backflow Testing',
    'stars'    => 5,
    'text'     => 'Annual backflow test done on time, paperwork filed with the city — zero hassle on my end. I\'ve recommended Greener Grass to six of my neighbors at this point. The only irrigation company I\'ll use in DFW.',
  ],
];

// ─── WebSite Schema (outputs in head section below) ───────────────────────────
$websiteSchemaJson = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'WebSite',
  '@id'             => $siteUrl . '/#website',
  'url'             => $siteUrl,
  'name'            => $siteName,
  'description'     => $pageDescription,
  'potentialAction' => [
    '@type'       => 'SearchAction',
    'target'      => [
      '@type'       => 'EntryPoint',
      'urlTemplate' => $siteUrl . '/?s={search_term_string}',
    ],
    'query-input' => 'required name=search_term_string',
  ],
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<body>

<?php echo generateFAQSchema($homeFaqs); ?>
<script type="application/ld+json">
<?php echo $websiteSchemaJson; ?>
</script>

<!-- ═══════════════════════════════════════════════════════════════════════════
     PAGE-SPECIFIC STYLES — Homepage
     Standard Tier: 200+ lines, 4+ techniques from design-system.md
     Techniques: C1 (Ken Burns hero), C2 (staggered entrance), C3 (3 divider styles),
                 C4 (diagonal gradient CTA + radial glow), C5 (numbered eyebrows)
     ═══════════════════════════════════════════════════════════════════════════ -->
<style>

/* ── Hero Section (C1 — Full-Bleed Ken Burns + C2 — Staggered Entrance) ─── */
.hero {
  min-height: 100vh;
  display: flex;
  align-items: center;
  position: relative;
  overflow: hidden;
  background-image: url('/assets/images/hero-irrigation.jpg');
  background-size: 110%;
  background-position: center 35%;
  animation: kenburns-hero 22s ease-in-out infinite alternate;
}

@keyframes kenburns-hero {
  from { background-size: 110%; background-position: center 30%; }
  to   { background-size: 122%; background-position: center 48%; }
}

/* Gradient overlay (C1) */
.hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    145deg,
    rgba(var(--color-primary-dark-rgb), 0.96) 0%,
    rgba(var(--color-primary-rgb), 0.82) 50%,
    rgba(var(--color-primary-rgb), 0.60) 100%
  );
  z-index: 1;
}

/* SVG noise texture (C1) */
.hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}

.hero-inner {
  position: relative;
  z-index: 2;
  width: 100%;
  padding: 120px 0 80px;
  display: grid;
  grid-template-columns: 1.2fr 1fr;
  gap: var(--space-4xl);
  align-items: center;
}

/* ── Hero Text (C2 — Staggered Animations) ─────────────────────────────── */
.hero-text { color: #fff; }

.hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(var(--color-accent-rgb), 0.12);
  border: 1px solid rgba(var(--color-accent-rgb), 0.35);
  border-radius: 999px;
  padding: 6px 18px;
  font-family: var(--font-heading);
  font-size: 0.68rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  color: var(--color-accent);
  margin-bottom: var(--space-xl);
  animation: fadeSlideDown 0.65s ease both;
}
.hero-eyebrow i { width: 13px; height: 13px; }

.hero-title {
  font-size: clamp(2.6rem, 5.5vw, 4.5rem);
  font-weight: 700;
  line-height: 1.05;
  letter-spacing: -0.025em;
  color: #fff;
  text-wrap: balance;
  margin-bottom: var(--space-xl);
  animation: fadeSlideUp 0.65s ease 0.12s both;
}
.hero-title .gradient-text {
  background: linear-gradient(135deg, #ffffff 0%, var(--color-accent) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.hero-subtitle {
  font-size: 1.1rem;
  line-height: 1.65;
  color: rgba(255,255,255,0.82);
  max-width: 54ch;
  margin-bottom: var(--space-2xl);
  animation: fadeSlideUp 0.65s ease 0.25s both;
}

.hero-actions {
  display: flex;
  align-items: center;
  gap: var(--space-lg);
  flex-wrap: wrap;
  margin-bottom: var(--space-2xl);
  animation: fadeSlideUp 0.65s ease 0.38s both;
}

.hero-trust {
  display: flex;
  align-items: center;
  gap: var(--space-lg);
  flex-wrap: wrap;
  animation: fadeSlideUp 0.65s ease 0.50s both;
}
.trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  font-size: 0.8rem;
  color: rgba(255,255,255,0.75);
  font-weight: 600;
  letter-spacing: 0.3px;
}
.trust-item i { width: 14px; height: 14px; color: var(--color-accent); }

@keyframes fadeSlideDown {
  from { opacity: 0; transform: translateY(-14px); }
  to   { opacity: 1; transform: translateY(0); }
}
@keyframes fadeSlideUp {
  from { opacity: 0; transform: translateY(18px); }
  to   { opacity: 1; transform: translateY(0); }
}

/* ── Hero Form Card ─────────────────────────────────────────────────────── */
.hero-form-card {
  background: rgba(255,255,255,0.07);
  backdrop-filter: blur(18px);
  -webkit-backdrop-filter: blur(18px);
  border: 1px solid rgba(255,255,255,0.14);
  border-radius: var(--radius-xl);
  padding: var(--space-2xl);
  box-shadow: 0 24px 60px rgba(0,0,0,0.35);
  animation: fadeSlideUp 0.7s ease 0.3s both;
}
.hero-form-card h2 {
  font-size: clamp(1.25rem, 2.5vw, 1.7rem);
  font-weight: 700;
  color: #fff;
  text-wrap: balance;
  margin-bottom: var(--space-xs);
}
.hero-form-tagline {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.65);
  margin-bottom: var(--space-xl);
}
.hero-form { display: flex; flex-direction: column; gap: var(--space-md); }
.form-row { display: flex; flex-direction: column; }
.hero-form input,
.hero-form select {
  width: 100%;
  padding: 14px 16px;
  background: rgba(255,255,255,0.09);
  border: 1px solid rgba(255,255,255,0.18);
  border-radius: var(--radius-md);
  color: #fff;
  font-size: var(--font-size-base);
  outline: none;
  transition: border-color var(--transition-fast), background var(--transition-fast);
  appearance: none;
  -webkit-appearance: none;
}
.hero-form input::placeholder { color: rgba(255,255,255,0.45); }
.hero-form select { color: rgba(255,255,255,0.75); cursor: pointer; }
.hero-form select option { background: var(--color-primary); color: #fff; }
.hero-form input:focus,
.hero-form select:focus {
  border-color: var(--color-accent);
  background: rgba(255,255,255,0.13);
  box-shadow: 0 0 0 3px rgba(var(--color-accent-rgb), 0.18);
}
.form-footnote {
  font-size: 0.68rem;
  color: rgba(255,255,255,0.4);
  text-align: center;
  margin-top: var(--space-sm);
}
.form-footnote a { color: rgba(255,255,255,0.55); text-decoration: underline; }
.form-footnote a:hover { color: var(--color-accent); }

/* ── Ticker Strip ───────────────────────────────────────────────────────── */
.ticker-strip {
  background: var(--color-primary);
  border-top: 3px solid var(--color-accent);
  border-bottom: 3px solid rgba(var(--color-accent-rgb), 0.25);
  overflow: hidden;
  padding: 14px 0;
  position: relative;
}
.ticker-track {
  display: flex;
  gap: 0;
  animation: ticker-scroll 32s linear infinite;
  width: max-content;
}
.ticker-strip:hover .ticker-track { animation-play-state: paused; }
.ticker-item {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  padding: 0 var(--space-2xl);
  font-family: var(--font-heading);
  font-size: 0.72rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1.8px;
  color: rgba(255,255,255,0.85);
  white-space: nowrap;
}
.ticker-item i { width: 13px; height: 13px; color: var(--color-accent); flex-shrink: 0; }
.ticker-sep {
  color: var(--color-accent);
  font-size: 1.1rem;
  padding: 0 var(--space-sm);
  opacity: 0.5;
}

@keyframes ticker-scroll {
  from { transform: translateX(0); }
  to   { transform: translateX(-50%); }
}

/* ── Section Common ──────────────────────────────────────────────────────── */
.section-header { text-align: center; margin-bottom: var(--space-3xl); }
.section-num {
  display: inline-block;
  font-family: var(--font-heading);
  font-size: 0.68rem;
  font-weight: 700;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.section-header h2 { margin-bottom: var(--space-md); }
.section-header .prose-centered { color: var(--color-text-light); font-size: 1.05rem; }

/* ── Services Section ────────────────────────────────────────────────────── */
.services-section {
  background: var(--color-bg);
  padding: var(--section-pad);
}

.services-grid {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr;
  grid-template-rows: auto auto;
  gap: var(--space-lg);
}

/* Featured Card */
.service-card-featured {
  grid-row: span 2;
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-md);
  display: flex;
  flex-direction: column;
  transition: box-shadow var(--transition-base), transform var(--transition-base);
  min-width: 0;
}
.service-card-featured:hover { box-shadow: var(--shadow-xl); transform: translateY(-4px); }

.service-card-featured .service-card-image {
  position: relative;
  aspect-ratio: 16/10;
  overflow: hidden;
}
.service-card-featured .service-card-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform var(--transition-slow);
}
.service-card-featured:hover .service-card-image img { transform: scale(1.05); }

.service-card-featured .service-card-content {
  padding: var(--space-xl);
  flex: 1;
  display: flex;
  flex-direction: column;
}
.service-card-featured .service-card-icon {
  width: 44px;
  height: 44px;
  background: rgba(var(--color-accent-rgb), 0.12);
  border-radius: var(--radius-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-md);
}
.service-card-featured .service-card-icon i { width: 20px; height: 20px; color: var(--color-accent); }
.service-card-featured h3 { font-size: clamp(1.3rem, 2vw, 1.6rem); margin-bottom: var(--space-md); }
.service-card-featured p { color: var(--color-text-light); margin-bottom: var(--space-lg); line-height: 1.65; }

.service-checklist {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
  margin-bottom: var(--space-xl);
  flex: 1;
}
.service-checklist li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-sm);
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.5;
}
.service-checklist li::before {
  content: '';
  display: block;
  width: 16px;
  height: 16px;
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%238dc63f' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='20 6 9 17 4 12'/%3E%3C/svg%3E") center/contain no-repeat;
  flex-shrink: 0;
  margin-top: 2px;
}

.service-card-cta {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  color: var(--color-primary);
  font-family: var(--font-heading);
  font-size: 0.82rem;
  font-weight: 700;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  transition: gap var(--transition-fast), color var(--transition-fast);
  margin-top: auto;
}
.service-card-cta:hover { gap: var(--space-md); color: var(--color-accent-dark); }

/* Standard Service Cards */
.service-card {
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-card);
  display: flex;
  flex-direction: column;
  transition: box-shadow var(--transition-base), transform var(--transition-base), background var(--transition-base);
  min-width: 0;
}
.service-card:hover {
  box-shadow: var(--shadow-xl);
  transform: translateY(-6px);
  background: var(--color-primary);
}
.service-card .service-card-image {
  position: relative;
  aspect-ratio: 4/3;
  overflow: hidden;
}
.service-card .service-card-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform var(--transition-slow);
}
.service-card:hover .service-card-image img { transform: scale(1.06); }
.service-card .service-card-content {
  padding: var(--space-lg);
  flex: 1;
  display: flex;
  flex-direction: column;
}
.service-card .service-card-icon {
  width: 36px;
  height: 36px;
  background: rgba(var(--color-accent-rgb), 0.12);
  border-radius: var(--radius-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-sm);
  transition: background var(--transition-fast);
}
.service-card:hover .service-card-icon { background: rgba(var(--color-accent-rgb), 0.20); }
.service-card .service-card-icon i {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
  transition: transform var(--transition-fast);
}
.service-card:hover .service-card-icon i { transform: scale(1.15) rotate(-5deg); }
.service-card h3 {
  font-size: 1.1rem;
  margin-bottom: var(--space-sm);
  color: var(--color-text);
  transition: color var(--transition-fast);
}
.service-card:hover h3 { color: #fff; }
.service-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  flex: 1;
  margin-bottom: var(--space-md);
  transition: color var(--transition-fast);
}
.service-card:hover p { color: rgba(255,255,255,0.75); }
.service-card .service-card-cta { color: var(--color-accent); }
.service-card:hover .service-card-cta { color: var(--color-accent); }

.services-footer {
  text-align: center;
  margin-top: var(--space-3xl);
}

/* ── Stats Band (C4.1 — Radial Accent Glow) ─────────────────────────────── */
.stats-band {
  background: var(--color-primary);
  position: relative;
  overflow: hidden;
  padding: var(--space-3xl) 0;
}
.stats-band::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 50% 50%, rgba(var(--color-accent-rgb), 0.12) 0%, transparent 70%);
  pointer-events: none;
}
.stats-band::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
}
.stats-row {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
  text-align: center;
}
.stat-item {
  padding: var(--space-xl) var(--space-lg);
  border: 1px solid rgba(255,255,255,0.07);
  border-radius: var(--radius-lg);
  background: rgba(255,255,255,0.03);
  transition: background var(--transition-base), transform var(--transition-base);
}
.stat-item:hover { background: rgba(255,255,255,0.06); transform: translateY(-4px); }
.stat-number {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 4vw, 3.2rem);
  font-weight: 700;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-sm);
  letter-spacing: -0.02em;
}
.stat-label {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.6);
  letter-spacing: 0.5px;
}

/* ── Mid-Page CTA Banner (C4.2 — Diagonal Gradient + Noise) ─────────────── */
.cta-mid {
  position: relative;
  overflow: hidden;
  padding: var(--space-4xl) 0;
  background: linear-gradient(135deg, var(--color-primary-dark) 0%, var(--color-primary) 55%, var(--color-secondary) 100%);
  text-align: center;
}
.cta-mid::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  pointer-events: none;
}
.cta-mid::after {
  content: '';
  position: absolute;
  top: -50%; left: 50%;
  transform: translateX(-50%);
  width: 600px; height: 600px;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.10) 0%, transparent 70%);
  pointer-events: none;
}
.cta-mid-inner {
  position: relative;
  z-index: 1;
}
.cta-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(var(--color-accent-rgb), 0.15);
  border: 1px solid rgba(var(--color-accent-rgb), 0.3);
  border-radius: 999px;
  padding: 5px 16px;
  font-family: var(--font-heading);
  font-size: 0.65rem;
  font-weight: 700;
  letter-spacing: 2.5px;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-xl);
}
.cta-mid h2 {
  font-size: clamp(1.8rem, 3.5vw, 2.8rem);
  color: #fff;
  margin-bottom: var(--space-md);
  text-wrap: balance;
}
.cta-mid p {
  font-size: 1.05rem;
  color: rgba(255,255,255,0.75);
  max-width: 55ch;
  margin: 0 auto var(--space-2xl);
  line-height: 1.65;
}
.cta-phone-large {
  display: block;
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 3.5vw, 2.4rem);
  font-weight: 700;
  color: var(--color-accent);
  letter-spacing: -0.01em;
  margin-bottom: var(--space-xl);
  transition: opacity var(--transition-fast);
}
.cta-phone-large:hover { opacity: 0.85; }
.cta-actions {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-lg);
  flex-wrap: wrap;
}

/* ── About / Process Section ─────────────────────────────────────────────── */
.about-section {
  background: var(--color-bg-alt);
  padding: var(--section-pad);
}
.about-split {
  display: grid;
  grid-template-columns: 1.2fr 1fr;
  gap: var(--space-4xl);
  align-items: start;
}
.about-left {}
.about-left h2 { margin-bottom: var(--space-lg); }
.about-left p { color: var(--color-text-light); margin-bottom: var(--space-md); line-height: 1.7; max-width: 55ch; }

.process-steps {
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
  margin-top: var(--space-2xl);
}
.process-step {
  display: flex;
  align-items: flex-start;
  gap: var(--space-md);
  padding: var(--space-lg);
  background: var(--color-bg);
  border-radius: var(--radius-md);
  border-left: 3px solid var(--color-accent);
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
}
.process-step:hover { transform: translateX(4px); box-shadow: var(--shadow-md); }
.step-num {
  width: 36px;
  height: 36px;
  background: var(--color-accent);
  color: var(--color-bg-dark);
  border-radius: var(--radius-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 0.85rem;
  flex-shrink: 0;
}
.step-body { min-width: 0; }
.step-body h4 {
  font-size: 0.95rem;
  font-weight: 700;
  color: var(--color-text);
  margin-bottom: 4px;
}
.step-body p { font-size: var(--font-size-sm); color: var(--color-text-light); margin: 0; }

/* About right — image with overlapping stat card */
.about-right { position: relative; }
.about-image-wrap {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
  aspect-ratio: 4/5;
}
.about-image-wrap img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  filter: saturate(0.9);
  transition: transform var(--transition-slow);
}
.about-image-wrap:hover img { transform: scale(1.03); }
.about-image-wrap::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 45%;
  background: linear-gradient(to top, rgba(var(--color-primary-dark-rgb), 0.65) 0%, transparent 100%);
  pointer-events: none;
}
.about-stat-card {
  position: absolute;
  bottom: -var(--space-xl);
  left: -var(--space-xl);
  bottom: calc(-1 * var(--space-xl));
  left: calc(-1 * var(--space-xl));
  background: var(--color-accent);
  color: var(--color-bg-dark);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  box-shadow: var(--shadow-xl);
  text-align: center;
  z-index: 1;
  min-width: 140px;
}
.about-stat-num {
  font-family: var(--font-heading);
  font-size: 2.6rem;
  font-weight: 700;
  line-height: 1;
  letter-spacing: -0.02em;
}
.about-stat-label { font-size: 0.72rem; font-weight: 700; letter-spacing: 0.5px; opacity: 0.75; margin-top: 4px; }

/* ── Reviews Section ─────────────────────────────────────────────────────── */
.reviews-section {
  background: var(--color-bg-dark);
  padding: var(--section-pad);
  position: relative;
  overflow: hidden;
}
.reviews-section::before {
  content: '';
  position: absolute;
  bottom: 0; right: 0;
  width: 600px; height: 600px;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.06) 0%, transparent 70%);
  pointer-events: none;
}
.reviews-section .section-num { color: rgba(var(--color-accent-rgb), 0.8); }
.reviews-section h2 { color: #fff; }
.reviews-section .section-header .prose-centered { color: rgba(255,255,255,0.55); }

.reviews-swiper { overflow: hidden; position: relative; padding-bottom: var(--space-2xl); }
.review-card {
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.07);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  height: auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.review-stars {
  display: flex;
  gap: 3px;
  color: #fbbf24;
}
.review-stars i { width: 14px; height: 14px; }
.review-text {
  font-size: 0.95rem;
  color: rgba(255,255,255,0.75);
  line-height: 1.7;
  flex: 1;
  font-style: italic;
}
.review-text::before { content: '"'; }
.review-text::after  { content: '"'; }
.review-footer {
  display: flex;
  align-items: center;
  gap: var(--space-md);
  padding-top: var(--space-md);
  border-top: 1px solid rgba(255,255,255,0.07);
}
.reviewer-avatar {
  width: 40px;
  height: 40px;
  background: var(--color-primary);
  border: 2px solid var(--color-accent);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 0.9rem;
  color: var(--color-accent);
  flex-shrink: 0;
}
.reviewer-name {
  font-weight: 700;
  font-size: var(--font-size-sm);
  color: #fff;
  line-height: 1;
  margin-bottom: 3px;
}
.reviewer-meta { font-size: 0.72rem; color: rgba(255,255,255,0.4); }
.reviewer-service {
  display: inline-block;
  background: rgba(var(--color-accent-rgb), 0.12);
  color: var(--color-accent);
  font-size: 0.65rem;
  font-weight: 700;
  letter-spacing: 0.5px;
  padding: 2px 8px;
  border-radius: var(--radius-sm);
  text-transform: uppercase;
  margin-top: 3px;
}

.swiper-pagination { bottom: 0 !important; }
.swiper-pagination-bullet { background: rgba(255,255,255,0.25) !important; opacity: 1 !important; }
.swiper-pagination-bullet-active { background: var(--color-accent) !important; }

/* Review Badge Strip */
.review-badge-strip {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-xl);
  margin-top: var(--space-3xl);
  flex-wrap: wrap;
}
.review-badge {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  padding: var(--space-md) var(--space-xl);
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: var(--radius-lg);
  transition: background var(--transition-fast);
}
.review-badge:hover { background: rgba(255,255,255,0.07); }
.review-badge-icon { font-family: var(--font-heading); font-size: 1.1rem; font-weight: 700; color: var(--color-accent); }
.review-badge-stars { display: flex; gap: 2px; color: #fbbf24; }
.review-badge-stars i { width: 11px; height: 11px; }
.review-badge-label { display: flex; flex-direction: column; }
.review-badge-platform { font-size: var(--font-size-xs); color: rgba(255,255,255,0.5); }
.review-badge-rating { font-family: var(--font-heading); font-size: 0.9rem; font-weight: 700; color: #fff; }

/* ── FAQ Section ─────────────────────────────────────────────────────────── */
.faq-section {
  background: var(--color-bg);
  padding: var(--section-pad);
}
.faq-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-md);
  margin-top: var(--space-3xl);
}
.faq-item {
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg);
  border: 1px solid rgba(var(--color-primary-rgb), 0.07);
  overflow: hidden;
  transition: box-shadow var(--transition-fast);
}
.faq-item:hover { box-shadow: var(--shadow-md); }
.faq-question {
  display: flex;
  align-items: flex-start;
  gap: var(--space-md);
  padding: var(--space-lg) var(--space-xl);
  cursor: pointer;
  user-select: none;
}
.faq-question i {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: 3px;
  transition: transform var(--transition-fast);
}
.faq-item.is-open .faq-question i { transform: rotate(90deg); }
.faq-question-text {
  font-family: var(--font-heading);
  font-size: 0.95rem;
  font-weight: 600;
  color: var(--color-text);
  line-height: 1.4;
  text-wrap: balance;
}
.faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height var(--transition-slow), padding var(--transition-slow);
}
.faq-item.is-open .faq-answer { max-height: 300px; }
.faq-answer p {
  padding: 0 var(--space-xl) var(--space-lg);
  padding-left: calc(var(--space-xl) + 18px + var(--space-md));
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.7;
  margin: 0;
}

/* ── Closing CTA ─────────────────────────────────────────────────────────── */
.closing-cta {
  background: var(--color-bg-alt);
  padding: var(--section-pad);
  text-align: center;
  border-top: 4px solid var(--color-accent);
}
.closing-cta h2 {
  font-size: clamp(1.8rem, 3.5vw, 2.8rem);
  margin-bottom: var(--space-md);
  text-wrap: balance;
}
.closing-cta p {
  color: var(--color-text-light);
  max-width: 52ch;
  margin: 0 auto var(--space-2xl);
  font-size: 1.05rem;
  line-height: 1.65;
}
.closing-actions {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-lg);
  flex-wrap: wrap;
}

/* ── Responsive ──────────────────────────────────────────────────────────── */
@media (max-width: 1023px) {
  .services-grid {
    grid-template-columns: 1fr 1fr;
  }
  .service-card-featured { grid-row: auto; }
  .stats-row { grid-template-columns: repeat(2, 1fr); }
  .about-split { grid-template-columns: 1fr; gap: var(--space-3xl); }
  .about-right { max-width: 480px; }
  .about-stat-card { left: var(--space-md); bottom: calc(-1 * var(--space-lg)); }
}

@media (max-width: 767px) {
  .hero-inner {
    grid-template-columns: 1fr;
    gap: var(--space-2xl);
    padding: 100px 0 60px;
  }
  .hero-form-card { order: 2; }
  .hero-actions { flex-direction: column; align-items: flex-start; }
  .services-grid { grid-template-columns: 1fr; }
  .service-card-featured { grid-row: auto; }
  .faq-grid { grid-template-columns: 1fr; }
  .stats-row { grid-template-columns: repeat(2, 1fr); gap: var(--space-md); }
  .about-split { grid-template-columns: 1fr; }
  .review-badge-strip { gap: var(--space-md); }
  .cta-actions { flex-direction: column; align-items: center; }
  .closing-actions { flex-direction: column; align-items: center; }
}

@media (max-width: 480px) {
  .stats-row { grid-template-columns: 1fr 1fr; }
  .hero-trust { gap: var(--space-md); }
}

</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ═══════════════════════════════════════════════════════════════════════════
     HERO
     ═══════════════════════════════════════════════════════════════════════════ -->
<section class="hero" aria-label="Homepage hero">
  <div class="container">
    <div class="hero-inner">

      <!-- Left: Text Content -->
      <div class="hero-text">

        <div class="hero-eyebrow">
          <i data-lucide="shield-check" aria-hidden="true"></i>
          Serving Fort Worth Since <?php echo $yearFounded; ?>
        </div>

        <h1 class="hero-title">
          Fort Worth's <span class="gradient-text">Irrigation Repair</span> Specialists
        </h1>

        <p class="hero-subtitle">
          When a broken sprinkler or failed valve threatens your lawn, you need a fix today — not a callback next week. We're on-site same day, fully stocked, and done right the first time.
        </p>

        <div class="hero-actions">
          <a href="#estimate-form" class="btn btn-primary" data-magnetic>
            <i data-lucide="clipboard-list" aria-hidden="true"></i>
            Get a Free Estimate
          </a>
          <a href="tel:<?php echo $contactPhoneRaw; ?>" class="btn btn-outline">
            <i data-lucide="phone" aria-hidden="true"></i>
            <?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?>
          </a>
        </div>

        <div class="hero-trust" aria-label="Trust indicators">
          <div class="trust-item">
            <i data-lucide="shield-check" aria-hidden="true"></i>
            Licensed &amp; Insured
          </div>
          <div class="trust-item">
            <i data-lucide="clock" aria-hidden="true"></i>
            <?php echo $yearsInBusiness; ?>+ Years
          </div>
          <div class="trust-item">
            <i data-lucide="star" aria-hidden="true"></i>
            <?php echo $reviewRating; ?> Google Rating
          </div>
          <div class="trust-item">
            <i data-lucide="zap" aria-hidden="true"></i>
            Same-Day Service
          </div>
        </div>

      </div><!-- /.hero-text -->

      <!-- Right: Lead-Capture Form -->
      <aside class="hero-form-card" id="estimate-form" aria-label="Free estimate form">
        <h2>Get Your Free Estimate</h2>
        <p class="hero-form-tagline">No obligation. Same-day response.</p>

        <form action="<?php echo htmlspecialchars($formEndpoint, ENT_QUOTES, 'UTF-8'); ?>" method="POST" class="hero-form">
          <!-- Honeypot -->
          <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
          <!-- Tracking -->
          <input type="hidden" name="_next" value="/thank-you">
          <input type="hidden" name="_form_location" value="hero">
          <input type="hidden" name="_consent_version" value="v2.1">
          <input type="hidden" name="_consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>">

          <div class="form-row">
            <input type="text" name="name" placeholder="Your full name" required autocomplete="name">
          </div>
          <div class="form-row">
            <input type="tel" name="phone" placeholder="Phone number" required autocomplete="tel">
          </div>
          <div class="form-row">
            <input type="text" name="zip" placeholder="ZIP code" pattern="[0-9]{5}" inputmode="numeric" required>
          </div>
          <div class="form-row">
            <select name="service_requested" aria-label="Service needed">
              <option value="">What do you need?</option>
              <?php foreach ($services as $svc): ?>
              <option value="<?php echo htmlspecialchars($svc['slug'], ENT_QUOTES, 'UTF-8'); ?>">
                <?php echo htmlspecialchars($svc['name'], ENT_QUOTES, 'UTF-8'); ?>
              </option>
              <?php endforeach; ?>
            </select>
          </div>

          <button type="submit" class="btn btn-primary btn-block">
            <i data-lucide="send" aria-hidden="true"></i>
            Get My Free Estimate
          </button>

          <p class="form-footnote">
            By submitting, you agree to our <a href="/terms/">Terms</a> and <a href="/privacy-policy/">Privacy Policy</a>.
          </p>
        </form>
      </aside><!-- /.hero-form-card -->

    </div><!-- /.hero-inner -->
  </div><!-- /.container -->
</section><!-- /.hero -->

<!-- ── Ticker Strip (proof / trust) ──────────────────────────────────────── -->
<div class="ticker-strip" aria-hidden="true" role="presentation">
  <div class="ticker-track">
    <!-- original set -->
    <span class="ticker-item"><i data-lucide="shield-check"></i>Licensed &amp; Insured</span>
    <span class="ticker-sep">✦</span>
    <span class="ticker-item"><i data-lucide="clock"></i><?php echo $yearsInBusiness; ?> Years in Fort Worth</span>
    <span class="ticker-sep">✦</span>
    <span class="ticker-item"><i data-lucide="star"></i><?php echo $reviewRating; ?> Star Google Rating</span>
    <span class="ticker-sep">✦</span>
    <span class="ticker-item"><i data-lucide="zap"></i>Same-Day Service Available</span>
    <span class="ticker-sep">✦</span>
    <span class="ticker-item"><i data-lucide="droplets"></i>Sprinkler &amp; Drip Systems</span>
    <span class="ticker-sep">✦</span>
    <span class="ticker-item"><i data-lucide="wrench"></i><?php echo $jobsCompleted; ?> Jobs Completed</span>
    <span class="ticker-sep">✦</span>
    <span class="ticker-item"><i data-lucide="map-pin"></i>Serving All of Tarrant County</span>
    <span class="ticker-sep">✦</span>
    <span class="ticker-item"><i data-lucide="snowflake"></i>Winterization Blowouts</span>
    <span class="ticker-sep">✦</span>
    <span class="ticker-item"><i data-lucide="wifi"></i>Smart Controller Upgrades</span>
    <span class="ticker-sep">✦</span>
    <!-- duplicate for seamless loop -->
    <span class="ticker-item"><i data-lucide="shield-check"></i>Licensed &amp; Insured</span>
    <span class="ticker-sep">✦</span>
    <span class="ticker-item"><i data-lucide="clock"></i><?php echo $yearsInBusiness; ?> Years in Fort Worth</span>
    <span class="ticker-sep">✦</span>
    <span class="ticker-item"><i data-lucide="star"></i><?php echo $reviewRating; ?> Star Google Rating</span>
    <span class="ticker-sep">✦</span>
    <span class="ticker-item"><i data-lucide="zap"></i>Same-Day Service Available</span>
    <span class="ticker-sep">✦</span>
    <span class="ticker-item"><i data-lucide="droplets"></i>Sprinkler &amp; Drip Systems</span>
    <span class="ticker-sep">✦</span>
    <span class="ticker-item"><i data-lucide="wrench"></i><?php echo $jobsCompleted; ?> Jobs Completed</span>
    <span class="ticker-sep">✦</span>
    <span class="ticker-item"><i data-lucide="map-pin"></i>Serving All of Tarrant County</span>
    <span class="ticker-sep">✦</span>
    <span class="ticker-item"><i data-lucide="snowflake"></i>Winterization Blowouts</span>
    <span class="ticker-sep">✦</span>
    <span class="ticker-item"><i data-lucide="wifi"></i>Smart Controller Upgrades</span>
    <span class="ticker-sep">✦</span>
  </div>
</div>

<!-- ── Divider: diagonal into services ───────────────────────────────────── -->
<div class="svg-divider" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none">
    <polygon fill="var(--color-bg)" points="0,0 1200,60 1200,60 0,60"/>
  </svg>
</div>

<!-- ═══════════════════════════════════════════════════════════════════════════
     SERVICES (01)
     ═══════════════════════════════════════════════════════════════════════════ -->
<section class="services-section" id="services" aria-labelledby="services-heading">
  <div class="container">

    <div class="section-header" data-animate="fade-up">
      <div class="section-num">01 / Our Services</div>
      <h2 id="services-heading">Irrigation Repair Done Right — the First Time</h2>
      <p class="prose-centered">From a single broken head to a full system failure, we carry the parts and the expertise to fix it same day. Every repair backed by our workmanship guarantee.</p>
    </div>

    <div class="services-grid stagger-children">

      <!-- Featured Card — Irrigation System Repair -->
      <article class="service-card-featured tilt-card" data-animate="fade-up">
        <div class="service-card-image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/greener-grass-irrigation-repair-llc/photos/1777402477076-d74ab7b8-d3d4-4d0d-8564-166d468e6d00.jpg"
               alt="Irrigation system repair service in Fort Worth TX"
               width="800" height="500" loading="lazy">
        </div>
        <div class="service-card-content">
          <div class="service-card-icon">
            <i data-lucide="wrench" aria-hidden="true"></i>
          </div>
          <h3>Irrigation System Repair</h3>
          <p>Your most common call — and our strongest skill. We diagnose the whole system, not just the symptom. Valves, controllers, pipes, and heads: if water touches it, we fix it.</p>
          <ul class="service-checklist" aria-label="What's included">
            <li>Full zone-by-zone system diagnosis</li>
            <li>Valve repair and solenoid replacement</li>
            <li>Broken pipe and fitting repair</li>
            <li>Controller troubleshooting and rewire</li>
            <li>Pressure regulation and flow adjustment</li>
            <li>Same-day service — parts on truck</li>
          </ul>
          <a href="/services/<?php echo htmlspecialchars($services[0]['slug'], ENT_QUOTES, 'UTF-8'); ?>/" class="service-card-cta" aria-label="Learn more about irrigation system repair">
            See Service Details →
          </a>
        </div>
      </article>

      <?php
      // Standard cards: services 1–5 (skip index 0 = featured)
      $standardCards = array_slice($services, 1, 5);
      $cardImages = [
        'https://source.unsplash.com/600x400/?sprinkler,head,lawn',
        'https://source.unsplash.com/600x400/?irrigation,installation,garden',
        'https://source.unsplash.com/600x400/?winter,pipe,freeze',
        'https://source.unsplash.com/600x400/?spring,lawn,green',
        'https://source.unsplash.com/600x400/?plumbing,valve,backflow',
      ];
      foreach ($standardCards as $i => $svc):
        $imgUrl = $cardImages[$i] ?? 'https://source.unsplash.com/600x400/?irrigation,lawn';
      ?>
      <article class="service-card" data-animate="fade-up" aria-label="<?php echo htmlspecialchars($svc['name'], ENT_QUOTES, 'UTF-8'); ?>">
        <div class="service-card-image">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/greener-grass-irrigation-repair-llc/photos/1777405505653-Greener_Grass_Irrigation_Repair_-_Imgur.jpg'UTF-8'); ?>"
               alt="<?php echo htmlspecialchars($svc['name'], ENT_QUOTES, 'UTF-8'); ?> service in Fort Worth TX"
               width="600" height="400" loading="lazy">
        </div>
        <div class="service-card-content">
          <div class="service-card-icon">
            <i data-lucide="<?php echo htmlspecialchars($svc['icon'], ENT_QUOTES, 'UTF-8'); ?>" aria-hidden="true"></i>
          </div>
          <h3><?php echo htmlspecialchars($svc['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
          <p><?php echo htmlspecialchars($svc['shortDesc'], ENT_QUOTES, 'UTF-8'); ?></p>
          <a href="/services/<?php echo htmlspecialchars($svc['slug'], ENT_QUOTES, 'UTF-8'); ?>/" class="service-card-cta" aria-label="Learn more about <?php echo htmlspecialchars($svc['name'], ENT_QUOTES, 'UTF-8'); ?>">
            Learn More →
          </a>
        </div>
      </article>
      <?php endforeach; ?>

    </div><!-- /.services-grid -->

    <div class="services-footer" data-animate="fade-up">
      <a href="/services/" class="btn btn-outline-dark">
        <i data-lucide="layout-grid" aria-hidden="true"></i>
        View All <?php echo count($services); ?> Services
      </a>
    </div>

  </div><!-- /.container -->
</section><!-- /.services-section -->

<!-- ── Divider: wave into stats ───────────────────────────────────────────── -->
<div class="svg-divider" aria-hidden="true" style="background:var(--color-bg)">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none" style="height:80px">
    <path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="var(--color-primary)"/>
  </svg>
</div>

<!-- ═══════════════════════════════════════════════════════════════════════════
     STATS BAND
     ═══════════════════════════════════════════════════════════════════════════ -->
<section class="stats-band" aria-label="Company statistics">
  <div class="container">
    <div class="stats-row">

      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number">
          <span data-counter="<?php echo $yearsInBusiness; ?>" data-suffix="+" aria-label="<?php echo $yearsInBusiness; ?> years in business"><?php echo $yearsInBusiness; ?>+</span>
        </div>
        <div class="stat-label">Years Serving North Texas</div>
      </div>

      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number">
          <span data-counter="2400" data-suffix="+" aria-label="2,400 plus jobs completed">2,400+</span>
        </div>
        <div class="stat-label">Irrigation Jobs Completed</div>
      </div>

      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number">
          <span data-counter="<?php echo $reviewRating; ?>" data-suffix="★" aria-label="<?php echo $reviewRating; ?> star Google rating"><?php echo $reviewRating; ?>★</span>
        </div>
        <div class="stat-label"><?php echo $reviewCount; ?> Google Reviews</div>
      </div>

      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number">
          <span data-counter="12" data-suffix=" Cities" aria-label="12 cities served">12 Cities</span>
        </div>
        <div class="stat-label">Across Tarrant County</div>
      </div>

    </div><!-- /.stats-row -->
  </div><!-- /.container -->
</section><!-- /.stats-band -->

<!-- ── Divider: torn paper edge into CTA ─────────────────────────────────── -->
<div class="svg-divider" aria-hidden="true" style="background:var(--color-primary);height:50px">
  <svg viewBox="0 0 1200 50" preserveAspectRatio="none" style="height:50px">
    <path d="M0,50 L0,28 L60,30 L120,24 L200,32 L280,20 L360,30 L440,22 L540,30 L640,18 L740,28 L840,20 L940,30 L1040,18 L1140,26 L1200,22 L1200,50 Z" fill="var(--color-primary-dark)"/>
  </svg>
</div>

<!-- ═══════════════════════════════════════════════════════════════════════════
     MID-PAGE CTA BANNER (CTA #2)
     ═══════════════════════════════════════════════════════════════════════════ -->
<section class="cta-mid" aria-labelledby="cta-mid-heading">
  <div class="container">
    <div class="cta-mid-inner" data-animate="fade-up">

      <div class="cta-eyebrow">
        <i data-lucide="zap" aria-hidden="true"></i>
        Same-Day Service Available
      </div>

      <h2 id="cta-mid-heading">Your Lawn Can't Wait Until Next Week</h2>
      <p>Every day with a broken irrigation zone is another day of patchy grass, wasted water, or dead plants. We book same-day appointments for most Fort Worth and Tarrant County calls placed before noon.</p>

      <a href="tel:<?php echo $contactPhoneRaw; ?>" class="cta-phone-large" aria-label="Call us at <?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?>">
        <?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?>
      </a>

      <div class="cta-actions">
        <a href="tel:<?php echo $contactPhoneRaw; ?>" class="btn btn-primary" data-magnetic>
          <i data-lucide="phone" aria-hidden="true"></i>
          Call Now — It's Free
        </a>
        <a href="/contact/" class="btn btn-outline">
          <i data-lucide="clipboard-list" aria-hidden="true"></i>
          Schedule Online
        </a>
      </div>

    </div><!-- /.cta-mid-inner -->
  </div><!-- /.container -->
</section><!-- /.cta-mid -->

<!-- ── Divider: stacked parallelograms into about ─────────────────────────── -->
<div class="svg-divider" aria-hidden="true" style="background:var(--color-primary-dark);height:70px">
  <svg viewBox="0 0 1200 70" preserveAspectRatio="none" style="height:70px">
    <polygon fill="var(--color-bg-alt)" opacity="0.3" points="0,20 1200,40 1200,70 0,70"/>
    <polygon fill="var(--color-bg-alt)" points="0,40 1200,18 1200,70 0,70"/>
  </svg>
</div>

<!-- ═══════════════════════════════════════════════════════════════════════════
     ABOUT / PROCESS (02) — SIGNATURE SECTION
     ═══════════════════════════════════════════════════════════════════════════ -->
<section class="about-section" aria-labelledby="about-heading">
  <div class="container">
    <div class="section-num" data-animate="fade-up">02 / How We Work</div>

    <div class="about-split">

      <!-- Left: Story + Process Steps -->
      <div class="about-left">
        <h2 id="about-heading" data-animate="fade-up">Fort Worth's Irrigation Crew Since 2011</h2>

        <div class="prose" data-animate="fade-up">
          <p>Greener Grass Irrigation Repair started with one truck and one principle: show up on time, diagnose it correctly, and fix it the same day. Fourteen years later, that's still exactly how we operate — just with a bigger fleet and <?php echo $jobsCompleted; ?> jobs under our belt.</p>
          <p>We work exclusively in North Texas, which means we know how Tarrant County clay soil heats in summer, how flash freezes behave in December, and exactly which sprinkler heads hold up in this climate. That local depth isn't something a national franchise can replicate.</p>
        </div>

        <div class="process-steps" aria-label="Our service process">

          <div class="process-step" data-animate="fade-up">
            <div class="step-num" aria-hidden="true">01</div>
            <div class="step-body">
              <h4>Inspect the Full System</h4>
              <p>We run every zone before touching anything. Half the time the real problem isn't where the symptom shows up.</p>
            </div>
          </div>

          <div class="process-step" data-animate="fade-up">
            <div class="step-num" aria-hidden="true">02</div>
            <div class="step-body">
              <h4>Upfront Price Before Work Begins</h4>
              <p>You get a flat price on the spot. We don't start until you approve it. No hourly billing surprises.</p>
            </div>
          </div>

          <div class="process-step" data-animate="fade-up">
            <div class="step-num" aria-hidden="true">03</div>
            <div class="step-body">
              <h4>Repair It Right, Same Day</h4>
              <p>Our trucks carry over 400 parts. If the fix is physically possible today, we complete it today.</p>
            </div>
          </div>

          <div class="process-step" data-animate="fade-up">
            <div class="step-num" aria-hidden="true">04</div>
            <div class="step-body">
              <h4>Walk You Through the Results</h4>
              <p>Before we leave, we walk the system with you zone-by-zone and show you exactly what was fixed and why.</p>
            </div>
          </div>

        </div><!-- /.process-steps -->

        <div style="margin-top: var(--space-2xl);" data-animate="fade-up">
          <a href="/about/" class="btn btn-primary">
            <i data-lucide="users" aria-hidden="true"></i>
            Meet the Team
          </a>
        </div>

      </div><!-- /.about-left -->

      <!-- Right: Photo with overlapping stat card -->
      <div class="about-right" data-animate="fade-left">
        <div class="about-image-wrap" data-animate="wipe-right">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/greener-grass-irrigation-repair-llc/photos/1777402737214-image_one.jpg"
               alt="Greener Grass irrigation technician inspecting sprinkler system in Fort Worth TX"
               width="700" height="875" loading="lazy">
        </div>
        <div class="about-stat-card" aria-label="<?php echo $yearsInBusiness; ?> years of experience">
          <div class="about-stat-num"><?php echo $yearsInBusiness; ?></div>
          <div class="about-stat-label">Years Local<br>Experience</div>
        </div>
      </div><!-- /.about-right -->

    </div><!-- /.about-split -->
  </div><!-- /.container -->
</section><!-- /.about-section -->

<!-- ── Divider: wave into reviews ─────────────────────────────────────────── -->
<div class="svg-divider" aria-hidden="true" style="background:var(--color-bg-alt);height:70px">
  <svg viewBox="0 0 1200 70" preserveAspectRatio="none" style="height:70px">
    <path d="M0,35 C300,70 900,5 1200,35 L1200,70 L0,70 Z" fill="var(--color-bg-dark)"/>
  </svg>
</div>

<!-- ═══════════════════════════════════════════════════════════════════════════
     REVIEWS (03)
     ═══════════════════════════════════════════════════════════════════════════ -->
<section class="reviews-section" aria-labelledby="reviews-heading">
  <div class="container">

    <div class="section-header" data-animate="fade-up">
      <div class="section-num">03 / Customer Reviews</div>
      <h2 id="reviews-heading" style="color:#fff">What Fort Worth Homeowners Say</h2>
      <p class="prose-centered"><?php echo $reviewRating; ?> stars across <?php echo $reviewCount; ?> reviews — from Arlington to Keller to Southlake.</p>
    </div>

    <div class="swiper reviews-swiper" aria-label="Customer reviews carousel">
      <div class="swiper-wrapper">
        <?php foreach ($homeReviews as $review): ?>
        <div class="swiper-slide">
          <div class="review-card">
            <div class="review-stars" aria-label="<?php echo $review['stars']; ?> out of 5 stars">
              <?php for ($s = 0; $s < $review['stars']; $s++): ?>
              <i data-lucide="star" aria-hidden="true" style="fill:#fbbf24;stroke:#fbbf24"></i>
              <?php endfor; ?>
            </div>
            <p class="review-text"><?php echo htmlspecialchars($review['text'], ENT_QUOTES, 'UTF-8'); ?></p>
            <div class="review-footer">
              <div class="reviewer-avatar" aria-hidden="true">
                <?php echo strtoupper(substr($review['name'], 0, 1)); ?>
              </div>
              <div>
                <div class="reviewer-name"><?php echo htmlspecialchars($review['name'], ENT_QUOTES, 'UTF-8'); ?></div>
                <div class="reviewer-meta"><?php echo htmlspecialchars($review['location'], ENT_QUOTES, 'UTF-8'); ?></div>
                <span class="reviewer-service"><?php echo htmlspecialchars($review['service'], ENT_QUOTES, 'UTF-8'); ?></span>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-pagination" aria-label="Review slide navigation"></div>
    </div><!-- /.reviews-swiper -->

    <!-- Review Platform Badges -->
    <div class="review-badge-strip" data-animate="fade-up" aria-label="Review platform ratings">

      <a href="<?php echo htmlspecialchars($social['google'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer" class="review-badge" aria-label="<?php echo $reviewRating; ?> stars on Google Reviews">
        <span class="review-badge-icon">G</span>
        <div>
          <div class="review-badge-stars">
            <?php for ($s = 0; $s < 5; $s++): ?>
            <i data-lucide="star" aria-hidden="true" style="fill:#fbbf24;stroke:#fbbf24"></i>
            <?php endfor; ?>
          </div>
          <div class="review-badge-label">
            <span class="review-badge-rating"><?php echo $reviewRating; ?> / 5</span>
            <span class="review-badge-platform">Google Reviews &bull; <?php echo $reviewCount; ?> reviews</span>
          </div>
        </div>
      </a>

      <a href="<?php echo htmlspecialchars($social['facebook'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer" class="review-badge" aria-label="5 stars on Facebook">
        <span class="review-badge-icon" style="color:#1877f2">f</span>
        <div>
          <div class="review-badge-stars">
            <?php for ($s = 0; $s < 5; $s++): ?>
            <i data-lucide="star" aria-hidden="true" style="fill:#fbbf24;stroke:#fbbf24"></i>
            <?php endfor; ?>
          </div>
          <div class="review-badge-label">
            <span class="review-badge-rating">5 / 5</span>
            <span class="review-badge-platform">Facebook Reviews</span>
          </div>
        </div>
      </a>

    </div><!-- /.review-badge-strip -->

  </div><!-- /.container -->
</section><!-- /.reviews-section -->

<!-- ── Divider: diagonal into FAQ ─────────────────────────────────────────── -->
<div class="svg-divider" aria-hidden="true" style="background:var(--color-bg-dark);height:60px">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none">
    <polygon fill="var(--color-bg)" points="0,60 1200,0 1200,60 0,60"/>
  </svg>
</div>

<!-- ═══════════════════════════════════════════════════════════════════════════
     FAQ (04)
     ═══════════════════════════════════════════════════════════════════════════ -->
<section class="faq-section" aria-labelledby="faq-heading">
  <div class="container">

    <div class="section-header" data-animate="fade-up">
      <div class="section-num">04 / Common Questions</div>
      <h2 id="faq-heading">Answers About Irrigation Repair in Fort Worth</h2>
      <p class="prose-centered">Straight answers to what Fort Worth homeowners ask most — no fluff, no upsell.</p>
    </div>

    <div class="faq-grid" role="list">
      <?php foreach ($homeFaqs as $faq): ?>
      <div class="faq-item" role="listitem" data-animate="fade-up">
        <div class="faq-question">
          <i data-lucide="chevron-right" aria-hidden="true"></i>
          <span class="faq-question-text"><?php echo htmlspecialchars($faq['q'], ENT_QUOTES, 'UTF-8'); ?></span>
        </div>
        <div class="faq-answer" aria-hidden="true">
          <p><?php echo htmlspecialchars($faq['a'], ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div><!-- /.faq-grid -->

  </div><!-- /.container -->
</section><!-- /.faq-section -->

<!-- ── Divider: wave into closing CTA ─────────────────────────────────────── -->
<div class="svg-divider" aria-hidden="true" style="background:var(--color-bg);height:60px">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" style="height:60px">
    <path d="M0,30 C400,60 800,0 1200,30 L1200,60 L0,60 Z" fill="var(--color-bg-alt)"/>
  </svg>
</div>

<!-- ═══════════════════════════════════════════════════════════════════════════
     CLOSING CTA (CTA #3)
     ═══════════════════════════════════════════════════════════════════════════ -->
<section class="closing-cta" aria-labelledby="closing-cta-heading">
  <div class="container">
    <div data-animate="fade-up">

      <div class="section-num">Ready to Get Started?</div>
      <h2 id="closing-cta-heading">Get Your Irrigation Fixed Today</h2>
      <p>Same-day service for Fort Worth and Tarrant County. Call before noon and we'll be out today. Upfront pricing before any work begins.</p>

      <div class="closing-actions">
        <a href="tel:<?php echo $contactPhoneRaw; ?>" class="btn btn-primary" data-magnetic>
          <i data-lucide="phone" aria-hidden="true"></i>
          Call <?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?>
        </a>
        <a href="/contact/" class="btn btn-outline-dark">
          <i data-lucide="clipboard-list" aria-hidden="true"></i>
          Schedule Online
        </a>
        <a href="/service-area/" class="btn btn-outline-dark">
          <i data-lucide="map-pin" aria-hidden="true"></i>
          Check Service Area
        </a>
      </div>

    </div>
  </div>
</section><!-- /.closing-cta -->

<!-- Last Updated: April 2026 -->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<!-- Reviews Swiper Initialization ─────────────────────────────────────────── -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  if (typeof Swiper !== 'undefined') {
    new Swiper('.reviews-swiper', {
      slidesPerView: 1,
      spaceBetween: 24,
      loop: true,
      autoplay: {
        delay: 5500,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        640:  { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
      },
      a11y: {
        prevSlideMessage: 'Previous review',
        nextSlideMessage: 'Next review',
      },
    });
  }
});
</script>

</body>
</html>
