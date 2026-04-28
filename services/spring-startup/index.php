<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle        = "Spring Sprinkler System Startup Fort Worth TX | Greener Grass";
$pageDescription  = "Full spring irrigation inspection, zone testing, and controller programming in Fort Worth, TX. $75–$125 startup visit. Get your system running right after winter.";
$canonicalUrl     = $siteUrl . '/services/spring-startup/';
$canonicalLink = '<link rel="canonical" href="' . htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') . '">'; // QA canonical reference
$currentPage      = 'services';
$ogImage          = $siteUrl . '/assets/images/hero-spring-startup.jpg';
$useSwiper        = false;

$serviceSchema = generateServiceSchema([
    'name'        => 'Spring Sprinkler System Startup',
    'description' => 'Full spring irrigation system startup including water restoration, zone-by-zone testing, head inspection, controller reprogramming, and a written audit report — serving Fort Worth, TX and surrounding DFW.',
    'price'       => '$75–$125',
    'slug'        => 'spring-startup',
]);

$faqSchema = generateFAQSchema([
    [
        'question' => 'When should I turn my sprinkler system back on in Fort Worth?',
        'answer'   => 'Turn your system on after the last average frost date for Fort Worth, which is mid-March. A sudden late frost after startup can stress newly activated valve diaphragms and damage heads that were disturbed by clay soil movement. We recommend scheduling your startup between March 15 and April 10 for most Fort Worth properties.',
    ],
    [
        'question' => 'What does a spring sprinkler startup involve?',
        'answer'   => 'A professional spring startup includes restoring water to the system and checking static pressure, running each zone and flagging any heads with poor coverage or mechanical issues, inspecting all heads for winter heaving or damage in Fort Worth\'s clay soil, and reprogramming the controller for spring and summer watering schedules — typically 2–3 days per week in spring, increasing through July.',
    ],
    [
        'question' => 'How do I know if my irrigation system was damaged over winter?',
        'answer'   => 'Common signs of winter damage in North Texas irrigation systems include: heads that won\'t pop up or retract, wet spots in the lawn during dry weather (indicating a broken lateral), error codes on your controller, and a backflow preventer that is visibly cracked or weeping. Our spring startup audit catches all of these before they become expensive in-season problems.',
    ],
    [
        'question' => 'How often should I water in spring vs. summer in North Texas?',
        'answer'   => 'Fort Worth City utilities recommend 2 days per week in spring (March–May) at 30–40 minutes per zone on turf grass, stepping up to 3 days per week in summer (June–September) as evapotranspiration rates peak. We reprogram your controller to these schedules as part of the startup visit and set rain delay sensitivity appropriately.',
    ],
]);

$breadcrumbSchema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Spring System Startup', 'item' => $canonicalUrl],
    ],
];

$howToSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'HowTo',
    'name'        => 'How a Spring Irrigation Startup Works',
    'description' => 'Four-step process to safely bring an irrigation system back online after winter in Fort Worth, TX — including zone testing, head inspection, and controller reprogramming.',
    'step'        => [
        ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Restore Water & Check Pressure', 'text' => 'Slowly restore water to the system via the main shut-off, check static pressure at the backflow preventer, and confirm the pressure falls within the operating range for your specific head types.'],
        ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Run Each Zone & Flag Issues', 'text' => 'Activate each zone and walk the coverage area, flagging heads with poor pop-up, clogged nozzles, broken risers, or coverage gaps caused by winter head settling in clay soil.'],
        ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Inspect All Heads', 'text' => 'Check every head for physical damage, weed intrusion on pop-ups, and winter heave displacement — Fort Worth clay moves significantly with freeze-thaw cycles.'],
        ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Reprogram Controller', 'text' => 'Update all zone run times and frequency to seasonal spring/summer schedules, enable rain delay sensor, replace backup battery, and confirm all zone wiring is intact.'],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<body>

<script type="application/ld+json"><?php echo json_encode($serviceSchema,    JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?></script>
<script type="application/ld+json"><?php echo json_encode($faqSchema,        JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?></script>
<script type="application/ld+json"><?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?></script>
<script type="application/ld+json"><?php echo json_encode($howToSchema,      JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?></script>

<style>
/* ─── SPRING STARTUP PAGE — INLINE STYLES ─── */

/* Hero */
.service-hero {
    position: relative;
    min-height: 65vh;
    display: flex;
    align-items: center;
    background-image: url('/assets/images/hero-spring-startup.jpg');
    background-size: cover;
    background-position: center 30%;
    overflow: hidden;
    animation: kenburns-spring 24s ease-in-out infinite alternate;
}
@keyframes kenburns-spring {
    from { background-size: 108%; background-position: center 30%; }
    to   { background-size: 120%; background-position: center 50%; }
}
.service-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(
        120deg,
        rgba(var(--color-primary-dark-rgb), 0.85) 0%,
        rgba(var(--color-primary-rgb), 0.55) 60%,
        rgba(var(--color-primary-dark-rgb), 0.70) 100%
    );
    z-index: 1;
}
.service-hero::after {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
    opacity: 0.04;
    z-index: 2;
    pointer-events: none;
}
.service-hero .container { position: relative; z-index: 3; }

.hero-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: var(--space-sm);
    background: rgba(var(--color-accent-rgb), 0.18);
    border: 1px solid rgba(var(--color-accent-rgb), 0.4);
    color: var(--color-accent);
    font-family: var(--font-body);
    font-size: var(--font-size-sm);
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    padding: var(--space-xs) var(--space-md);
    border-radius: var(--radius-xl);
    margin-bottom: var(--space-lg);
    animation: fadeSlideUp 0.6s ease both;
}
.hero-h1 {
    font-family: var(--font-heading);
    font-size: clamp(2.4rem, 5.5vw, 4rem);
    font-weight: 700;
    line-height: 1.1;
    letter-spacing: -0.02em;
    text-wrap: balance;
    color: #fff;
    margin-bottom: var(--space-lg);
    animation: fadeSlideUp 0.7s 0.1s ease both;
}
.hero-h1 span {
    background: linear-gradient(135deg, var(--color-accent), #b5e461);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.hero-sub {
    font-family: var(--font-body);
    font-size: clamp(1rem, 1.8vw, 1.2rem);
    color: rgba(255,255,255,0.85);
    max-width: 58ch;
    line-height: 1.65;
    margin-bottom: var(--space-2xl);
    animation: fadeSlideUp 0.7s 0.2s ease both;
}
.hero-cta-row {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: var(--space-md);
    animation: fadeSlideUp 0.7s 0.3s ease both;
}
.hero-badge {
    display: flex;
    align-items: center;
    gap: var(--space-sm);
    color: rgba(255,255,255,0.78);
    font-size: var(--font-size-sm);
    font-family: var(--font-body);
}
.hero-badge [data-lucide] { width: 16px; height: 16px; color: var(--color-accent); }

@keyframes fadeSlideUp {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
}

/* Breadcrumb */
.breadcrumb-bar {
    background: var(--color-bg-alt);
    border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.1);
    padding: var(--space-sm) 0;
}
.breadcrumb-bar .container {
    display: flex;
    align-items: center;
    gap: var(--space-sm);
    flex-wrap: wrap;
}
.breadcrumb-bar a {
    color: var(--color-primary);
    font-size: var(--font-size-sm);
    font-family: var(--font-body);
    transition: color var(--transition-fast);
}
.breadcrumb-bar a:hover { color: var(--color-accent-dark); }
.breadcrumb-bar .sep { color: var(--color-text-light); font-size: var(--font-size-sm); }
.breadcrumb-bar .current {
    color: var(--color-text-light);
    font-size: var(--font-size-sm);
    font-family: var(--font-body);
}

/* Ticker */
.ticker-strip {
    background: var(--color-primary);
    padding: var(--space-sm) 0;
    overflow: hidden;
    white-space: nowrap;
}
.ticker-track {
    display: inline-flex;
    animation: ticker 36s linear infinite;
}
.ticker-track:hover { animation-play-state: paused; }
.ticker-item {
    display: inline-flex;
    align-items: center;
    gap: var(--space-md);
    padding: 0 var(--space-xl);
    color: #fff;
    font-family: var(--font-body);
    font-size: var(--font-size-xs);
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
}
.ticker-sep { color: var(--color-accent); }
@keyframes ticker { from { transform: translateX(0); } to { transform: translateX(-50%); } }

/* SVG Dividers */
.divider-wave { line-height: 0; overflow: hidden; }
.divider-wave svg { display: block; width: 100%; }
.divider-angle { line-height: 0; overflow: hidden; }
.divider-angle svg { display: block; width: 100%; }

/* ── INTRO SPLIT SECTION ── */
.intro-section {
    padding: var(--section-pad);
    background: var(--color-bg);
}
.intro-split {
    display: grid;
    grid-template-columns: 1.15fr 1fr;
    gap: var(--space-3xl);
    align-items: start;
}
.intro-eyebrow {
    display: inline-block;
    font-family: var(--font-body);
    font-size: var(--font-size-xs);
    font-weight: 700;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: var(--color-accent-dark);
    margin-bottom: var(--space-md);
}
.intro-h2 {
    font-family: var(--font-heading);
    font-size: clamp(1.8rem, 3.5vw, 2.6rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    text-wrap: balance;
    color: var(--color-primary-dark);
    margin-bottom: var(--space-lg);
}
.intro-prose {
    font-family: var(--font-body);
    font-size: 1.02rem;
    line-height: 1.72;
    color: var(--color-text);
    max-width: 62ch;
    margin-bottom: var(--space-lg);
}
.intro-cost-block {
    background: linear-gradient(135deg, var(--color-bg-alt), var(--color-bg));
    border: 1px solid rgba(var(--color-primary-rgb), 0.15);
    border-left: 4px solid var(--color-primary);
    border-radius: 0 var(--radius-md) var(--radius-md) 0;
    padding: var(--space-lg) var(--space-xl);
    margin-top: var(--space-xl);
}
.intro-cost-label {
    font-family: var(--font-body);
    font-size: var(--font-size-xs);
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--color-text-light);
    margin-bottom: var(--space-xs);
}
.intro-cost-value {
    font-family: var(--font-heading);
    font-size: clamp(2rem, 3vw, 2.6rem);
    font-weight: 700;
    color: var(--color-primary);
    letter-spacing: -0.02em;
    margin-bottom: var(--space-xs);
}
.intro-cost-note {
    font-family: var(--font-body);
    font-size: var(--font-size-sm);
    color: var(--color-text-light);
    line-height: 1.5;
}

/* Intro image stack */
.intro-img-stack {
    position: relative;
}
.img-main {
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-xl);
    position: relative;
}
.img-main::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, transparent 50%, rgba(var(--color-primary-dark-rgb), 0.45) 100%);
    border-radius: var(--radius-lg);
}
.img-main img {
    width: 100%;
    aspect-ratio: 5/4;
    object-fit: cover;
    display: block;
    transition: transform var(--transition-slow);
}
.img-main:hover img { transform: scale(1.05); }
.img-float-badge {
    position: absolute;
    bottom: -24px;
    left: -20px;
    background: var(--color-primary-dark);
    color: #fff;
    border-radius: var(--radius-md);
    padding: var(--space-md) var(--space-lg);
    box-shadow: var(--shadow-xl);
    font-family: var(--font-body);
    font-size: var(--font-size-sm);
    line-height: 1.5;
    z-index: 2;
    min-width: 180px;
    border-top: 3px solid var(--color-accent);
}
.img-float-badge strong {
    display: block;
    font-family: var(--font-heading);
    font-size: 1.2rem;
    color: var(--color-accent);
    font-weight: 700;
}

/* ── SECTION SHARED ── */
.section-eyebrow {
    display: inline-block;
    font-family: var(--font-body);
    font-size: var(--font-size-xs);
    font-weight: 700;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: var(--color-accent-dark);
    margin-bottom: var(--space-md);
}
.section-h2 {
    font-family: var(--font-heading);
    font-size: clamp(1.8rem, 3.5vw, 2.6rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    text-wrap: balance;
    color: var(--color-primary-dark);
    margin-bottom: var(--space-2xl);
}

/* ── WHAT CAN GO WRONG (bg-alt) ── */
.risk-section {
    padding: var(--section-pad);
    background: var(--color-bg-alt);
}
.risk-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-xl);
    margin-top: var(--space-2xl);
}
.risk-card {
    background: var(--color-bg);
    border-radius: var(--radius-lg);
    padding: var(--space-xl) var(--space-lg);
    box-shadow: var(--shadow-card);
    text-align: center;
    transition: transform var(--transition-base), box-shadow var(--transition-base);
    border-top: 3px solid var(--color-accent);
    animation: fadeSlideUp 0.5s ease both;
}
.risk-card:nth-child(1) { animation-delay: 0.1s; }
.risk-card:nth-child(2) { animation-delay: 0.2s; }
.risk-card:nth-child(3) { animation-delay: 0.3s; }
.risk-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-xl); }
.risk-icon {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--color-primary), var(--color-secondary));
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--space-md);
    transition: transform var(--transition-base);
}
.risk-card:hover .risk-icon { transform: scale(1.12) rotate(-5deg); }
.risk-icon [data-lucide] { width: 26px; height: 26px; color: var(--color-accent); }
.risk-card h3 {
    font-family: var(--font-heading);
    font-size: 1.15rem;
    font-weight: 700;
    color: var(--color-primary-dark);
    margin-bottom: var(--space-sm);
    text-wrap: balance;
}
.risk-card p {
    font-family: var(--font-body);
    font-size: 0.92rem;
    line-height: 1.65;
    color: var(--color-text-light);
}

/* ── PROCESS ── */
.process-section {
    padding: var(--section-pad);
    background: var(--color-bg);
}
.process-steps {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: var(--space-xl);
    margin-top: var(--space-2xl);
}
.process-step {
    position: relative;
    text-align: center;
    padding: var(--space-xl) var(--space-md) var(--space-lg);
    background: var(--color-bg-alt);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-sm);
    transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.process-step:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.process-step:not(:last-child)::after {
    content: '';
    position: absolute;
    top: 40px;
    right: -20px;
    width: 20px;
    height: 2px;
    background: linear-gradient(90deg, var(--color-accent), transparent);
    z-index: 1;
}
.step-number {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--color-primary), var(--color-secondary));
    color: #fff;
    font-family: var(--font-heading);
    font-size: 1.35rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--space-md);
    box-shadow: var(--shadow-md);
}
.process-step h3 {
    font-family: var(--font-heading);
    font-size: 1.05rem;
    font-weight: 700;
    color: var(--color-primary-dark);
    margin-bottom: var(--space-sm);
    text-wrap: balance;
}
.process-step p {
    font-family: var(--font-body);
    font-size: var(--font-size-sm);
    line-height: 1.6;
    color: var(--color-text-light);
}

/* ── SIGNATURE: SPRING CHECKLIST SECTION ── */
.checklist-section {
    padding: var(--section-pad);
    background: var(--color-bg-alt);
}
.checklist-inner {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: var(--space-4xl);
    align-items: center;
}
.checklist-editorial {
    /* Left column: big typography + pullquote */
}
.checklist-kicker {
    font-family: var(--font-body);
    font-size: var(--font-size-xs);
    font-weight: 700;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    color: var(--color-accent-dark);
    margin-bottom: var(--space-lg);
}
.checklist-headline {
    font-family: var(--font-heading);
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    line-height: 1.1;
    letter-spacing: -0.03em;
    text-wrap: balance;
    color: var(--color-primary-dark);
    margin-bottom: var(--space-xl);
}
.checklist-headline em {
    font-style: normal;
    color: var(--color-primary);
}
.pullquote-block {
    position: relative;
    background: var(--color-bg);
    border-left: 5px solid var(--color-accent);
    border-radius: 0 var(--radius-lg) var(--radius-lg) 0;
    padding: var(--space-xl) var(--space-xl) var(--space-xl) var(--space-2xl);
    box-shadow: var(--shadow-md);
}
.pullquote-block::before {
    content: '\201C';
    position: absolute;
    top: -8px;
    left: var(--space-lg);
    font-family: Georgia, serif;
    font-size: 4rem;
    line-height: 1;
    color: var(--color-accent);
    opacity: 0.5;
}
.pullquote-block blockquote {
    font-family: var(--font-heading);
    font-size: clamp(1.1rem, 2vw, 1.4rem);
    font-weight: 700;
    color: var(--color-primary-dark);
    line-height: 1.45;
    margin-bottom: var(--space-md);
    text-wrap: balance;
}
.pullquote-block cite {
    font-family: var(--font-body);
    font-size: var(--font-size-sm);
    color: var(--color-text-light);
    font-style: normal;
}

/* Right column: checklist */
.checklist-columns {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-sm) var(--space-2xl);
}
.checklist-group h4 {
    font-family: var(--font-body);
    font-size: var(--font-size-xs);
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--color-primary);
    margin-bottom: var(--space-md);
    padding-bottom: var(--space-xs);
    border-bottom: 2px solid var(--color-accent);
}
.checklist-item {
    display: flex;
    align-items: flex-start;
    gap: var(--space-sm);
    padding: var(--space-sm) 0;
    font-family: var(--font-body);
    font-size: 0.92rem;
    color: var(--color-text);
    line-height: 1.5;
    border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.07);
    animation: fadeSlideUp 0.5s ease both;
}
.checklist-item:nth-child(1) { animation-delay: 0.05s; }
.checklist-item:nth-child(2) { animation-delay: 0.1s; }
.checklist-item:nth-child(3) { animation-delay: 0.15s; }
.checklist-item:nth-child(4) { animation-delay: 0.2s; }
.checklist-item:nth-child(5) { animation-delay: 0.25s; }
.checklist-check {
    width: 20px;
    height: 20px;
    min-width: 20px;
    border-radius: 50%;
    background: var(--color-accent);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 1px;
}
.checklist-check [data-lucide] { width: 12px; height: 12px; color: var(--color-primary-dark); }

/* ── CTA BANNER MID (#2) ── */
.cta-banner-mid {
    position: relative;
    padding: var(--section-pad);
    background: linear-gradient(135deg, var(--color-primary-dark) 0%, var(--color-primary) 55%, var(--color-secondary) 100%);
    overflow: hidden;
    text-align: center;
}
.cta-banner-mid::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.05'/%3E%3C/svg%3E");
    opacity: 0.05;
    pointer-events: none;
}
.cta-banner-mid .container { position: relative; z-index: 1; }
.cta-banner-mid .cta-eyebrow {
    font-family: var(--font-body);
    font-size: var(--font-size-xs);
    font-weight: 700;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: var(--space-md);
}
.cta-banner-mid h2 {
    font-family: var(--font-heading);
    font-size: clamp(1.8rem, 3.5vw, 2.8rem);
    font-weight: 700;
    color: #fff;
    letter-spacing: -0.02em;
    text-wrap: balance;
    margin-bottom: var(--space-md);
}
.cta-banner-mid .cta-sub {
    font-family: var(--font-body);
    font-size: 1.05rem;
    color: rgba(255,255,255,0.82);
    max-width: 52ch;
    margin: 0 auto var(--space-xl);
    line-height: 1.6;
}
.cta-phone-big {
    display: block;
    font-family: var(--font-heading);
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    color: var(--color-accent);
    letter-spacing: -0.01em;
    margin-bottom: var(--space-lg);
    transition: color var(--transition-fast);
}
.cta-phone-big:hover { color: #fff; }
.cta-row {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: var(--space-md);
}

/* ── FAQ ── */
.faq-section {
    padding: var(--section-pad);
    background: var(--color-bg);
}
.faq-list {
    max-width: 820px;
    margin: var(--space-2xl) auto 0;
}
.faq-item {
    border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.12);
    padding: var(--space-lg) 0;
    animation: fadeSlideUp 0.5s ease both;
}
.faq-item:nth-child(1) { animation-delay: 0.1s; }
.faq-item:nth-child(2) { animation-delay: 0.2s; }
.faq-item:nth-child(3) { animation-delay: 0.3s; }
.faq-item:nth-child(4) { animation-delay: 0.4s; }
.faq-item h3 {
    font-family: var(--font-heading);
    font-size: clamp(1.05rem, 2vw, 1.25rem);
    font-weight: 700;
    color: var(--color-primary-dark);
    text-wrap: balance;
    margin-bottom: var(--space-md);
}
.faq-item p {
    font-family: var(--font-body);
    font-size: 0.97rem;
    line-height: 1.7;
    color: var(--color-text);
    max-width: 72ch;
}

/* ── CONTACT FORM ── */
.contact-form-section {
    padding: var(--section-pad);
    background: var(--color-bg-alt);
}
.contact-form-inner {
    max-width: 680px;
    margin: 0 auto;
    background: var(--color-bg);
    border-radius: var(--radius-xl);
    padding: var(--space-3xl);
    box-shadow: var(--shadow-xl);
    border-top: 4px solid var(--color-accent);
}
.contact-form-inner h2 {
    font-family: var(--font-heading);
    font-size: clamp(1.6rem, 3vw, 2.2rem);
    font-weight: 700;
    color: var(--color-primary-dark);
    margin-bottom: var(--space-sm);
    text-wrap: balance;
    letter-spacing: -0.02em;
}
.contact-form-inner .form-sub {
    font-family: var(--font-body);
    font-size: 0.97rem;
    color: var(--color-text-light);
    margin-bottom: var(--space-xl);
    line-height: 1.6;
}
.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-md);
    margin-bottom: var(--space-md);
}
.form-field {
    display: flex;
    flex-direction: column;
    gap: var(--space-xs);
}
.form-field label {
    font-family: var(--font-body);
    font-size: var(--font-size-sm);
    font-weight: 700;
    color: var(--color-primary-dark);
    letter-spacing: 0.02em;
}
.form-field input,
.form-field select {
    font-family: var(--font-body);
    font-size: 0.97rem;
    padding: var(--space-sm) var(--space-md);
    border: 2px solid rgba(var(--color-primary-rgb), 0.18);
    border-radius: var(--radius-md);
    background: var(--color-bg-alt);
    color: var(--color-text);
    transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
    outline: none;
}
.form-field input:focus,
.form-field select:focus {
    border-color: var(--color-primary);
    box-shadow: 0 0 0 3px rgba(var(--color-primary-rgb), 0.12);
}
.form-note {
    font-family: var(--font-body);
    font-size: var(--font-size-xs);
    color: var(--color-text-light);
    margin-top: var(--space-sm);
    line-height: 1.5;
}

/* ── CLOSING CTA (#3) ── */
.cta-closing {
    padding: var(--section-pad);
    background: var(--color-bg);
    text-align: center;
}
.cta-closing h2 {
    font-family: var(--font-heading);
    font-size: clamp(1.8rem, 3.5vw, 2.8rem);
    font-weight: 700;
    color: var(--color-primary-dark);
    letter-spacing: -0.02em;
    text-wrap: balance;
    margin-bottom: var(--space-md);
}
.cta-closing p {
    font-family: var(--font-body);
    font-size: 1.05rem;
    color: var(--color-text-light);
    max-width: 54ch;
    margin: 0 auto var(--space-2xl);
    line-height: 1.65;
}
.cta-trust-badges {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: var(--space-xl);
    flex-wrap: wrap;
    margin-top: var(--space-2xl);
}
.trust-badge {
    display: flex;
    align-items: center;
    gap: var(--space-sm);
    font-family: var(--font-body);
    font-size: var(--font-size-sm);
    font-weight: 700;
    color: var(--color-primary);
}
.trust-badge [data-lucide] { width: 18px; height: 18px; color: var(--color-accent-dark); }

/* ── RESPONSIVE ── */
@media (max-width: 1023px) {
    .intro-split { grid-template-columns: 1fr; }
    .img-float-badge { bottom: var(--space-md); left: var(--space-md); }
    .checklist-inner { grid-template-columns: 1fr; }
    .process-steps { grid-template-columns: repeat(2, 1fr); }
    .process-step:nth-child(2)::after { display: none; }
}
@media (max-width: 767px) {
    .service-hero { min-height: 70vh; }
    .risk-grid { grid-template-columns: 1fr; }
    .checklist-columns { grid-template-columns: 1fr; }
    .process-steps { grid-template-columns: 1fr; }
    .process-step::after { display: none !important; }
    .form-grid { grid-template-columns: 1fr; }
    .contact-form-inner { padding: var(--space-xl) var(--space-lg); }
    .hero-cta-row { flex-direction: column; align-items: flex-start; }
    .pullquote-block { padding: var(--space-lg); }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<main id="main-content">

    <!-- HERO (CTA #1) -->
    <section class="service-hero" aria-label="Spring Sprinkler System Startup">
        <div class="container">
            <div class="hero-eyebrow">
                <i data-lucide="sprout"></i>
                Fort Worth Spring Startup Specialists
            </div>
            <h1 class="hero-h1">Your System Survived Winter —<br><span>Now Make Sure It Works</span></h1>
            <p class="hero-sub">
                Fort Worth's clay soil shifts through every freeze-thaw cycle, and valve diaphragms dry out over winter.
                A professional spring startup catches damage before it turns into a dead lawn in July.
                Full zone audit, controller reprogramming, and a written report — $75–$125 for most residential systems.
            </p>
            <div class="hero-cta-row">
                <a href="tel:<?php echo $contactPhoneRaw; ?>" class="btn-primary">
                    <i data-lucide="phone"></i> Call <?php echo $contactPhone; ?>
                </a>
                <a href="#estimate-form" class="btn-secondary">Get a Fast Estimate</a>
                <span class="hero-badge"><i data-lucide="check-circle"></i> Same-day available</span>
                <span class="hero-badge"><i data-lucide="clipboard-check"></i> Written audit included</span>
            </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <nav class="breadcrumb-bar" aria-label="Breadcrumb">
        <div class="container">
            <a href="/">Home</a>
            <span class="sep" aria-hidden="true">›</span>
            <a href="/services/">Services</a>
            <span class="sep" aria-hidden="true">›</span>
            <span class="current" aria-current="page">Spring System Startup</span>
        </div>
    </nav>

    <!-- TICKER -->
    <div class="ticker-strip" aria-hidden="true">
        <div class="ticker-track">
            <span class="ticker-item">Full Zone Audit <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">$75–$125 Startup Visit <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">Controller Reprogramming <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">Fort Worth &amp; DFW <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">Head Inspection Included <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">Same-Day Available <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">Full Zone Audit <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">$75–$125 Startup Visit <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">Controller Reprogramming <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">Fort Worth &amp; DFW <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">Head Inspection Included <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">Same-Day Available <span class="ticker-sep">✦</span></span>
        </div>
    </div>

    <!-- SVG DIVIDER: wave -->
    <div class="divider-wave" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 56" preserveAspectRatio="none" height="56">
            <path d="M0,40 C480,80 960,0 1440,40 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
        </svg>
    </div>

    <!-- INTRO SPLIT -->
    <section class="intro-section" data-animate="fade-up">
        <div class="container">
            <div class="intro-split">
                <div class="intro-content">
                    <span class="intro-eyebrow">Post-Winter System Audit</span>
                    <h2 class="intro-h2">After March 15, Fort Worth's Last Frost Has Passed — Here's What to Do Next</h2>
                    <p class="intro-prose">
                        Fort Worth's average last frost date is mid-March, and once you're clear of that window, it's time to bring your irrigation system back online.
                        But "turning it on" isn't just opening the main valve. Fort Worth's expansive clay soil heaves and contracts through every freeze-thaw cycle —
                        heads settle, risers shift, and valve diaphragms that sat dry all winter can tear the first time they open under pressure.
                    </p>
                    <p class="intro-prose">
                        A spring startup visit catches those problems before the first hot week in May, when a broken zone means brown strips across your lawn
                        and a rush-schedule repair call. Most residential startups in Fort Worth run $75–$125 — less than the cost of replacing a single burned zone
                        of St. Augustine grass.
                    </p>
                    <div class="intro-cost-block">
                        <div class="intro-cost-label">Spring Startup Cost</div>
                        <div class="intro-cost-value">$75–$125</div>
                        <div class="intro-cost-note">Full zone audit, head inspection, and controller reprogramming · Most Fort Worth residential systems</div>
                    </div>
                </div>
                <div class="intro-img-stack">
                    <div class="img-main" data-animate="wipe-right">
                        <picture>
                            <source srcset="/assets/images/spring-startup-content-1.avif" type="image/avif">
                            <source srcset="/assets/images/spring-startup-content-1.webp" type="image/webp">
                            <img src="/assets/images/spring-startup-content-1.jpg"
                                 alt="Irrigation technician inspecting sprinkler head during spring startup in Fort Worth TX"
                                 width="720" height="576" loading="lazy">
                        </picture>
                    </div>
                    <div class="img-float-badge">
                        <strong>Mid-March</strong>
                        Best window for Fort Worth spring startup
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SVG DIVIDER: angle -->
    <div class="divider-angle" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 48" preserveAspectRatio="none" height="48">
            <polygon points="0,48 1440,0 1440,48" fill="var(--color-bg-alt)"/>
        </svg>
    </div>

    <!-- WHAT CAN GO WRONG OVER WINTER -->
    <section class="risk-section" data-animate="fade-up">
        <div class="container">
            <span class="section-eyebrow">Winter Wear &amp; Tear</span>
            <h2 class="section-h2">Three Things That Go Wrong in Fort Worth Irrigation Systems Over Winter</h2>
            <div class="risk-grid">
                <div class="risk-card">
                    <div class="risk-icon"><i data-lucide="droplets"></i></div>
                    <h3>Valve Diaphragm Drying</h3>
                    <p>Solenoid valve diaphragms made of rubber shrink slightly when dry for months. When water pressure hits a dried diaphragm, it can tear or seat incorrectly — causing a zone that won't shut off or won't turn on at all.</p>
                </div>
                <div class="risk-card">
                    <div class="risk-icon"><i data-lucide="battery-low"></i></div>
                    <h3>Controller Battery Death</h3>
                    <p>Backup batteries in most irrigation controllers last 12–18 months. If the battery died over winter, your controller lost its programming — schedules, zone run times, and rain delay settings are gone and need to be rebuilt from scratch.</p>
                </div>
                <div class="risk-card">
                    <div class="risk-icon"><i data-lucide="move-vertical"></i></div>
                    <h3>Head Settling in Clay Soil</h3>
                    <p>Fort Worth's heavy clay soil expands and contracts dramatically with moisture. By spring, pop-up heads that were flush in October may be an inch low or tilted 15°, creating coverage gaps that are invisible until a section of lawn goes brown.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SVG DIVIDER: wave (inverted) -->
    <div class="divider-wave" style="transform: rotate(180deg); margin-bottom: -2px;" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 56" preserveAspectRatio="none" height="56">
            <path d="M0,40 C480,80 960,0 1440,40 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
        </svg>
    </div>

    <!-- PROCESS -->
    <section class="process-section" data-animate="fade-up">
        <div class="container">
            <span class="section-eyebrow">The Startup Process</span>
            <h2 class="section-h2">Four Steps from Off to Fully Operational</h2>
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3>Restore Water &amp; Check Pressure</h3>
                    <p>Slowly restore water at the main shut-off and verify static pressure at the backflow preventer — too high or low affects every zone's coverage pattern.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3>Run Each Zone &amp; Flag Issues</h3>
                    <p>Activate each zone and walk every coverage area — flagging heads with poor pop-up, clogged nozzles, broken risers, or coverage gaps.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3>Inspect All Heads</h3>
                    <p>Check each head for winter heave displacement, weed intrusion in pop-up bodies, and physical damage from foot traffic or equipment over winter.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3>Reprogram Controller</h3>
                    <p>Update zone run times and frequency for spring watering, replace backup battery, enable rain delay sensor, and confirm all zone wiring is intact.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SIGNATURE: SPRING CHECKLIST (editorial pullquote + 2-col checklist) -->
    <section class="checklist-section" aria-label="Spring startup checklist" data-animate="fade-up">
        <div class="container">
            <div class="checklist-inner">
                <div class="checklist-editorial">
                    <p class="checklist-kicker">The Complete Startup Audit</p>
                    <h2 class="checklist-headline">Every System Needs a <em>Fresh Start</em> in Spring</h2>
                    <div class="pullquote-block">
                        <blockquote>
                            "A 30-minute startup visit in March catches the one cracked valve head that would have cost you a $400 lawn repair in August."
                        </blockquote>
                        <cite>— Greener Grass Irrigation, <?php echo $address['city']; ?>, <?php echo $address['state']; ?></cite>
                    </div>
                </div>
                <div class="checklist-right">
                    <div class="checklist-columns">
                        <div class="checklist-group">
                            <h4>System Check</h4>
                            <div class="checklist-item">
                                <span class="checklist-check"><i data-lucide="check"></i></span>
                                Static pressure test at backflow
                            </div>
                            <div class="checklist-item">
                                <span class="checklist-check"><i data-lucide="check"></i></span>
                                All zone activation &amp; timing
                            </div>
                            <div class="checklist-item">
                                <span class="checklist-check"><i data-lucide="check"></i></span>
                                Valve solenoid function check
                            </div>
                            <div class="checklist-item">
                                <span class="checklist-check"><i data-lucide="check"></i></span>
                                Wiring integrity at manifold
                            </div>
                            <div class="checklist-item">
                                <span class="checklist-check"><i data-lucide="check"></i></span>
                                Backflow preventer inspection
                            </div>
                        </div>
                        <div class="checklist-group">
                            <h4>Heads &amp; Coverage</h4>
                            <div class="checklist-item">
                                <span class="checklist-check"><i data-lucide="check"></i></span>
                                Pop-up height &amp; alignment
                            </div>
                            <div class="checklist-item">
                                <span class="checklist-check"><i data-lucide="check"></i></span>
                                Nozzle clog &amp; wear check
                            </div>
                            <div class="checklist-item">
                                <span class="checklist-check"><i data-lucide="check"></i></span>
                                Clay heave displacement
                            </div>
                            <div class="checklist-item">
                                <span class="checklist-check"><i data-lucide="check"></i></span>
                                Coverage overlap audit
                            </div>
                            <div class="checklist-item">
                                <span class="checklist-check"><i data-lucide="check"></i></span>
                                Controller reprogram &amp; battery
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA BANNER MID (#2) -->
    <section class="cta-banner-mid" aria-label="Schedule spring startup">
        <div class="container">
            <p class="cta-eyebrow">Spring Slots Book Fast in March &amp; April</p>
            <h2>Schedule Before Fort Worth Hits 90°F — Problems Found Now Cost Far Less</h2>
            <p class="cta-sub">
                The window between the last frost and the first heat wave is your best chance to catch and fix issues at non-emergency prices.
                Call now or book online — most visits scheduled within 48 hours.
            </p>
            <a href="tel:<?php echo $contactPhoneRaw; ?>" class="cta-phone-big"><?php echo $contactPhone; ?></a>
            <div class="cta-row">
                <a href="tel:<?php echo $contactPhoneRaw; ?>" class="btn-primary"><i data-lucide="phone"></i> Call Now</a>
                <a href="#estimate-form" class="btn-secondary">Get a Fast Estimate</a>
            </div>
        </div>
    </section>

    <!-- SVG DIVIDER: angle (reversed) -->
    <div class="divider-angle" style="transform: scaleY(-1); margin-bottom: -2px;" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 48" preserveAspectRatio="none" height="48">
            <polygon points="0,48 1440,0 1440,48" fill="var(--color-bg)"/>
        </svg>
    </div>

    <!-- FAQ -->
    <section class="faq-section" data-animate="fade-up">
        <div class="container">
            <span class="section-eyebrow">Common Questions</span>
            <h2 class="section-h2" style="text-align:center;">Fort Worth Spring Startup FAQs</h2>
            <div class="faq-list">
                <div class="faq-item">
                    <h3>When should I turn my sprinkler system back on in Fort Worth?</h3>
                    <p>After mid-March, once the risk of a hard freeze below 28°F drops significantly in the DFW area. Most years, the window opens between March 15 and April 1. Turning on too early risks frost damage to newly activated valve components; waiting too late means your lawn goes without irrigation through March's drying winds.</p>
                </div>
                <div class="faq-item">
                    <h3>What does a spring sprinkler startup involve?</h3>
                    <p>A professional spring startup includes: restoring water to the system and checking static pressure, running each zone and flagging any issues found, inspecting all heads for winter heaving in Fort Worth's clay soil, and reprogramming the controller for spring and summer watering frequency and run times — typically 2 days per week in spring, stepping up to 3 in peak summer.</p>
                </div>
                <div class="faq-item">
                    <h3>How do I know if my irrigation system was damaged over winter?</h3>
                    <p>Common signs in Fort Worth properties: a zone that runs continuously or won't activate, a wet spot in dry weather near a valve box, visible cracks or weeping on the backflow preventer, controller error codes, or heads that visibly tilted after the ground heaved. Our startup audit documents all of these in a written report.</p>
                </div>
                <div class="faq-item">
                    <h3>How often should I water in spring vs. summer in North Texas?</h3>
                    <p>Fort Worth Water recommends 2 days per week in spring at 30–40 minutes per turf zone, stepping to 3 days per week in summer as evapotranspiration peaks from June through September. Drip zones for beds run longer but less frequently. We set your controller to these schedules as part of the startup visit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="contact-form-section" id="estimate-form" data-animate="fade-up">
        <div class="container">
            <div class="contact-form-inner">
                <h2>Schedule Your Spring Startup</h2>
                <p class="form-sub">Tell us about your property and we'll get back to you within the hour during business hours. Most visits scheduled within 48 hours of your call.</p>
                <form action="<?php echo $formEndpoint; ?>" method="POST" novalidate>
                    <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
                    <input type="hidden" name="_next" value="/thank-you">
                    <input type="hidden" name="_consent_version" value="v2.1">
                    <input type="hidden" name="_consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
                    <input type="hidden" name="service" value="Spring System Startup">
                    <div class="form-grid">
                        <div class="form-field">
                            <label for="ss-name">Your Name</label>
                            <input type="text" id="ss-name" name="name" required autocomplete="name" placeholder="Jane Smith">
                        </div>
                        <div class="form-field">
                            <label for="ss-phone">Phone Number</label>
                            <input type="tel" id="ss-phone" name="phone" required autocomplete="tel" placeholder="(817) 555-0100">
                        </div>
                        <div class="form-field">
                            <label for="ss-email">Email Address</label>
                            <input type="email" id="ss-email" name="email" required autocomplete="email" placeholder="jane@example.com">
                        </div>
                        <div class="form-field">
                            <label for="ss-zip">ZIP Code</label>
                            <input type="text" id="ss-zip" name="zip" placeholder="76101" maxlength="10">
                        </div>
                    </div>
                    <button type="submit" class="btn-primary" style="width:100%; justify-content:center; margin-top:var(--space-sm);">
                        <i data-lucide="calendar-check"></i> Book My Spring Startup
                    </button>
                    <p class="form-note">By submitting, you agree to our <a href="/terms/" style="color:var(--color-primary);">Terms</a> and <a href="/privacy-policy/" style="color:var(--color-primary);">Privacy Policy</a>. We never sell your information.</p>
                </form>
            </div>
        </div>
    </section>

    <!-- CLOSING CTA (#3) -->
    <section class="cta-closing" data-animate="fade-up">
        <div class="container">
            <span class="section-eyebrow">Don't Miss the Spring Window</span>
            <h2>Book Your Fort Worth Startup Before the Rush Hits</h2>
            <p>
                March and April startup slots book out fast across Fort Worth and the surrounding DFW suburbs.
                Lock in your appointment now and have your system ready before the first serious heat of May arrives.
            </p>
            <div class="cta-row">
                <a href="tel:<?php echo $contactPhoneRaw; ?>" class="btn-primary"><i data-lucide="phone"></i> Call <?php echo $contactPhone; ?></a>
                <a href="#estimate-form" class="btn-secondary">Book Online</a>
            </div>
            <div class="cta-trust-badges">
                <span class="trust-badge"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
                <span class="trust-badge"><i data-lucide="clipboard-list"></i> Written Audit Report</span>
                <span class="trust-badge"><i data-lucide="map-pin"></i> Fort Worth &amp; DFW</span>
                <span class="trust-badge"><i data-lucide="star"></i> <?php echo $yearsInBusiness; ?> Years Experience</span>
            </div>
        </div>
    </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

</body>
</html>
<!-- Last Updated: April 2026 -->
