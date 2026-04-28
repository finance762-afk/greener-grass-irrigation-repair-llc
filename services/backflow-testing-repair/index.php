<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle        = "Backflow Testing & Repair Fort Worth TX | Licensed | Greener Grass";
$pageDescription  = "Licensed backflow preventer testing and repair in Fort Worth, TX. TCEQ-compliant annual testing for all irrigated properties. $55–$95 to test, $120–$350 to repair.";
$canonicalUrl     = $siteUrl . '/services/backflow-testing-repair/';
$canonicalLink = '<link rel="canonical" href="' . htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') . '">'; // QA canonical reference
$currentPage      = 'services';
$ogImage          = $siteUrl . '/assets/images/hero-backflow.jpg';
$useSwiper        = false;

$serviceSchema = generateServiceSchema([
    'name'        => 'Backflow Testing & Repair',
    'description' => 'Licensed backflow preventer testing and repair for residential and commercial irrigation systems in Fort Worth, TX. TCEQ-compliant annual testing, city-filed reports, and same-visit repair of failed devices.',
    'price'       => '$55–$350',
    'slug'        => 'backflow-testing-repair',
]);

$faqSchema = generateFAQSchema([
    [
        'question' => 'Is backflow testing required in Fort Worth, TX?',
        'answer'   => 'Yes. Texas Commission on Environmental Quality (TCEQ) rules require annual backflow preventer testing for all irrigation systems connected to a public water supply in Texas. Fort Worth Water Department enforces this requirement. Failure to test can result in a notice of violation and potential service interruption.',
    ],
    [
        'question' => 'How much does backflow testing cost in Fort Worth?',
        'answer'   => 'Annual backflow preventer testing in Fort Worth runs $55–$95 for most residential systems, depending on the device type and whether the report needs to be filed with the city. Repair costs range from $120–$350 if the test reveals a failed check valve, worn seal, or failed differential pressure relief valve.',
    ],
    [
        'question' => 'What happens if my backflow preventer fails the test?',
        'answer'   => 'If your device fails the differential pressure test, it must be repaired or replaced before it can be retested and cleared for compliance. We carry common replacement components for PVB, double-check, and RPZ assemblies on the truck, so most repairs are completed same-visit. We then retest, document, and file the passing report with the city.',
    ],
    [
        'question' => 'What is a backflow preventer and why do I need one?',
        'answer'   => 'A backflow preventer is a mechanical device installed where your irrigation system connects to the public water supply. It prevents water from flowing backward — back-siphonage or back-pressure — from your irrigation system into the drinking water supply. Without it, fertilizers, herbicides, and soil bacteria can enter the city water main. Texas law requires it on every irrigation connection.',
    ],
]);

$breadcrumbSchema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Backflow Testing & Repair', 'item' => $canonicalUrl],
    ],
];

$howToSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'HowTo',
    'name'        => 'How Backflow Preventer Testing Works',
    'description' => 'The four-step certified backflow testing process for irrigation systems in Fort Worth, TX — including pressure gauge testing, documentation, and city report filing.',
    'step'        => [
        ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Shut Down Irrigation & Isolate Device', 'text' => 'Close the isolation valves on both sides of the backflow preventer to isolate it from the system. The irrigation system must be fully pressurized but not actively running during the test.'],
        ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Test Differential Pressure', 'text' => 'Using a calibrated differential pressure gauge, measure the pressure differential across each check valve or relief valve assembly. Readings below the manufacturer\'s minimum threshold indicate a failed component.'],
        ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Document & File Results', 'text' => 'Complete the state-required test report documenting the device type, serial number, test readings, pass/fail result, and tester credentials. File with Fort Worth Water Department if required by the city\'s cross-connection control program.'],
        ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Repair or Replace if Failed', 'text' => 'If the device fails, repair or replace the failed component on the same visit where parts allow. Retest to confirm a passing result and file the corrected report.'],
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
/* ─── BACKFLOW TESTING PAGE — INLINE STYLES ─── */

/* Hero */
.service-hero {
    position: relative;
    min-height: 65vh;
    display: flex;
    align-items: center;
    background-image: url('/assets/images/hero-backflow.jpg');
    background-size: cover;
    background-position: center 50%;
    overflow: hidden;
    animation: kenburns-bf 26s ease-in-out infinite alternate;
}
@keyframes kenburns-bf {
    from { background-size: 108%; background-position: center 50%; }
    to   { background-size: 118%; background-position: center 60%; }
}
.service-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(
        150deg,
        rgba(var(--color-primary-dark-rgb), 0.90) 0%,
        rgba(var(--color-primary-rgb), 0.62) 55%,
        rgba(var(--color-primary-dark-rgb), 0.80) 100%
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
    max-width: 56ch;
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
    background: var(--color-secondary);
    padding: var(--space-sm) 0;
    overflow: hidden;
    white-space: nowrap;
}
.ticker-track {
    display: inline-flex;
    animation: ticker 38s linear infinite;
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
.divider-diagonal { line-height: 0; overflow: hidden; }
.divider-diagonal svg { display: block; width: 100%; }
.divider-wave { line-height: 0; overflow: hidden; }
.divider-wave svg { display: block; width: 100%; }

/* ── INTRO SECTION ── */
.intro-section {
    padding: var(--section-pad);
    background: var(--color-bg);
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
    max-width: 60ch;
    margin-bottom: var(--space-lg);
}
.compliance-callout {
    background: linear-gradient(135deg, rgba(var(--color-primary-rgb), 0.06), rgba(var(--color-primary-rgb), 0.02));
    border: 1px solid rgba(var(--color-primary-rgb), 0.18);
    border-left: 4px solid var(--color-primary);
    border-radius: 0 var(--radius-md) var(--radius-md) 0;
    padding: var(--space-lg) var(--space-xl);
    display: flex;
    align-items: flex-start;
    gap: var(--space-md);
}
.compliance-callout [data-lucide] { width: 28px; height: 28px; color: var(--color-primary); min-width: 28px; margin-top: 2px; }
.compliance-callout-text .compliance-label {
    font-family: var(--font-body);
    font-size: var(--font-size-xs);
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--color-primary);
    margin-bottom: var(--space-xs);
}
.compliance-callout-text p {
    font-family: var(--font-body);
    font-size: 0.92rem;
    color: var(--color-text);
    line-height: 1.6;
}

/* Intro image */
.intro-img-frame {
    position: relative;
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-xl);
}
.intro-img-frame::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, transparent 55%, rgba(var(--color-primary-dark-rgb), 0.5) 100%);
    z-index: 1;
    border-radius: var(--radius-lg);
}
.intro-img-frame img {
    width: 100%;
    aspect-ratio: 4/3;
    object-fit: cover;
    display: block;
    transition: transform var(--transition-slow);
}
.intro-img-frame:hover img { transform: scale(1.04); }
.intro-img-badge {
    position: absolute;
    bottom: var(--space-lg);
    right: var(--space-lg);
    z-index: 2;
    background: var(--color-accent);
    color: var(--color-primary-dark);
    font-family: var(--font-body);
    font-size: var(--font-size-sm);
    font-weight: 700;
    padding: var(--space-sm) var(--space-md);
    border-radius: var(--radius-sm);
}

/* ── DEVICE TYPES SECTION ── */
.devices-section {
    padding: var(--section-pad);
    background: var(--color-bg-alt);
}
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
.devices-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-xl);
}
.device-card {
    background: var(--color-bg);
    border-radius: var(--radius-lg);
    padding: var(--space-xl) var(--space-lg);
    box-shadow: var(--shadow-card);
    position: relative;
    overflow: hidden;
    transition: transform var(--transition-base), box-shadow var(--transition-base);
    animation: fadeSlideUp 0.5s ease both;
}
.device-card:nth-child(1) { animation-delay: 0.1s; }
.device-card:nth-child(2) { animation-delay: 0.2s; }
.device-card:nth-child(3) { animation-delay: 0.3s; }
.device-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-xl); }
.device-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--color-primary), var(--color-accent));
}
.device-acronym {
    font-family: var(--font-heading);
    font-size: clamp(1.8rem, 3vw, 2.4rem);
    font-weight: 700;
    color: var(--color-primary);
    letter-spacing: -0.02em;
    margin-bottom: var(--space-xs);
}
.device-fullname {
    font-family: var(--font-body);
    font-size: var(--font-size-sm);
    font-weight: 700;
    color: var(--color-text-light);
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-bottom: var(--space-md);
    padding-bottom: var(--space-md);
    border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.1);
}
.device-card h3 {
    font-family: var(--font-heading);
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--color-primary-dark);
    margin-bottom: var(--space-sm);
    text-wrap: balance;
}
.device-card p {
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

/* ── SIGNATURE: COMPLIANCE & AUTHORITY SPLIT SECTION ── */
.compliance-section {
    padding: var(--section-pad);
    background: var(--color-bg-alt);
}
.compliance-split {
    display: grid;
    grid-template-columns: 1fr 1.35fr;
    gap: var(--space-4xl);
    align-items: center;
}
/* Left: large icon/graphic authority block */
.compliance-graphic {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}
.compliance-icon-wrap {
    width: 160px;
    height: 160px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--color-primary-dark), var(--color-primary));
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: var(--space-2xl);
    box-shadow: var(--shadow-xl);
    position: relative;
}
.compliance-icon-wrap::before {
    content: '';
    position: absolute;
    inset: -8px;
    border-radius: 50%;
    border: 2px dashed rgba(var(--color-accent-rgb), 0.35);
    animation: spin-slow 18s linear infinite;
}
@keyframes spin-slow { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
.compliance-icon-wrap [data-lucide] { width: 72px; height: 72px; color: var(--color-accent); }
.compliance-graphic-label {
    font-family: var(--font-heading);
    font-size: clamp(1.2rem, 2.5vw, 1.8rem);
    font-weight: 700;
    color: var(--color-primary-dark);
    letter-spacing: -0.02em;
    text-wrap: balance;
    margin-bottom: var(--space-sm);
}
.compliance-graphic-sub {
    font-family: var(--font-body);
    font-size: var(--font-size-sm);
    color: var(--color-text-light);
    line-height: 1.6;
    max-width: 28ch;
}

/* Right: authority copy + compliance callout */
.compliance-copy {
    /* right column */
}
.compliance-copy .section-eyebrow { display: block; }
.compliance-copy .section-h2 { margin-bottom: var(--space-lg); }
.compliance-copy .prose {
    font-family: var(--font-body);
    font-size: 1.02rem;
    line-height: 1.72;
    color: var(--color-text);
    max-width: 60ch;
    margin-bottom: var(--space-xl);
}
.compliance-note-block {
    background: var(--color-bg);
    border: 2px solid var(--color-accent);
    border-radius: var(--radius-lg);
    padding: var(--space-xl);
    position: relative;
}
.compliance-note-block::before {
    content: 'COMPLIANCE NOTE';
    position: absolute;
    top: -12px;
    left: var(--space-lg);
    background: var(--color-accent);
    color: var(--color-primary-dark);
    font-family: var(--font-body);
    font-size: 0.7rem;
    font-weight: 700;
    letter-spacing: 0.14em;
    padding: 2px var(--space-sm);
    border-radius: var(--radius-sm);
}
.compliance-note-block p {
    font-family: var(--font-body);
    font-size: 0.97rem;
    line-height: 1.65;
    color: var(--color-text);
    margin-bottom: var(--space-md);
}
.compliance-note-block .compliance-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: var(--space-sm);
}
.compliance-note-block .compliance-list li {
    display: flex;
    align-items: flex-start;
    gap: var(--space-sm);
    font-family: var(--font-body);
    font-size: 0.92rem;
    color: var(--color-text);
    line-height: 1.5;
}
.compliance-note-block .compliance-list li [data-lucide] {
    width: 16px;
    height: 16px;
    color: var(--color-primary);
    min-width: 16px;
    margin-top: 2px;
}

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
    .intro-grid { grid-template-columns: 1fr; }
    .devices-grid { grid-template-columns: 1fr; }
    .compliance-split { grid-template-columns: 1fr; }
    .compliance-graphic { flex-direction: row; text-align: left; gap: var(--space-xl); margin-bottom: var(--space-2xl); }
    .compliance-graphic .compliance-icon-wrap { width: 100px; height: 100px; min-width: 100px; }
    .compliance-graphic .compliance-icon-wrap [data-lucide] { width: 48px; height: 48px; }
    .process-steps { grid-template-columns: repeat(2, 1fr); }
    .process-step:nth-child(2)::after { display: none; }
}
@media (max-width: 767px) {
    .service-hero { min-height: 70vh; }
    .devices-grid { grid-template-columns: 1fr; }
    .process-steps { grid-template-columns: 1fr; }
    .process-step::after { display: none !important; }
    .compliance-graphic { flex-direction: column; align-items: center; text-align: center; }
    .form-grid { grid-template-columns: 1fr; }
    .contact-form-inner { padding: var(--space-xl) var(--space-lg); }
    .hero-cta-row { flex-direction: column; align-items: flex-start; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<main id="main-content">

    <!-- HERO (CTA #1) -->
    <section class="service-hero" aria-label="Backflow Testing & Repair Fort Worth">
        <div class="container">
            <div class="hero-eyebrow">
                <i data-lucide="shield-check"></i>
                Licensed Backflow Testing — Fort Worth, TX
            </div>
            <h1 class="hero-h1">Annual Backflow Testing<br><span>Texas Requires It. We Handle It.</span></h1>
            <p class="hero-sub">
                TCEQ rules require annual backflow preventer testing for every irrigation system on a public water supply in Texas.
                Skip it and you risk a violation notice — and a drinking water contamination event.
                Licensed testing, same-visit repair, and city report filing: $55–$95 for most residential systems.
            </p>
            <div class="hero-cta-row">
                <a href="tel:<?php echo $contactPhoneRaw; ?>" class="btn-primary">
                    <i data-lucide="phone"></i> Call <?php echo $contactPhone; ?>
                </a>
                <a href="#estimate-form" class="btn-secondary">Schedule Your Test</a>
                <span class="hero-badge"><i data-lucide="award"></i> Licensed Tester</span>
                <span class="hero-badge"><i data-lucide="file-check"></i> City Report Filed</span>
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
            <span class="current" aria-current="page">Backflow Testing &amp; Repair</span>
        </div>
    </nav>

    <!-- TICKER -->
    <div class="ticker-strip" aria-hidden="true">
        <div class="ticker-track">
            <span class="ticker-item">TCEQ-Compliant Testing <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">$55–$95 Annual Test <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">Licensed Backflow Tester <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">Same-Visit Repair <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">City Report Filed <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">Fort Worth &amp; DFW <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">TCEQ-Compliant Testing <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">$55–$95 Annual Test <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">Licensed Backflow Tester <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">Same-Visit Repair <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">City Report Filed <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">Fort Worth &amp; DFW <span class="ticker-sep">✦</span></span>
        </div>
    </div>

    <!-- SVG DIVIDER: diagonal -->
    <div class="divider-diagonal" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 48" preserveAspectRatio="none" height="48">
            <polygon points="0,0 1440,48 1440,48 0,48" fill="var(--color-bg)"/>
        </svg>
    </div>

    <!-- INTRO SECTION -->
    <section class="intro-section" data-animate="fade-up">
        <div class="container">
            <div class="intro-grid">
                <div class="intro-content">
                    <span class="intro-eyebrow">Texas Law &amp; Fort Worth Water Department</span>
                    <h2 class="intro-h2">Your Irrigation System Connects to the Drinking Water Supply — Here's Why That's Regulated</h2>
                    <p class="intro-prose">
                        Every irrigation system in Texas that connects to a public water supply is required by TCEQ to have a certified backflow preventer tested annually.
                        That's not a suggestion — it's state law, enforced by your local water utility.
                        Fort Worth Water Department participates in the state's cross-connection control program and tracks test reports for properties in its service area.
                    </p>
                    <p class="intro-prose">
                        The reason is straightforward: without a properly functioning backflow preventer, irrigation water — which carries fertilizer, herbicides,
                        and soil bacteria — can siphon backward into the public drinking water main during a pressure drop event.
                        A $75 annual test is the mechanical guarantee that your irrigation system can't contaminate your neighborhood's water.
                    </p>
                    <div class="compliance-callout">
                        <i data-lucide="alert-circle"></i>
                        <div class="compliance-callout-text">
                            <div class="compliance-label">TCEQ Requirement</div>
                            <p>Annual backflow preventer testing is required for all irrigation connections to public water supplies in Texas. Failure to test can result in a notice of violation and potential service interruption by Fort Worth Water.</p>
                        </div>
                    </div>
                </div>
                <div class="intro-img-frame" data-animate="wipe-right">
                    <picture>
                        <source srcset="/assets/images/backflow-content-1.avif" type="image/avif">
                        <source srcset="/assets/images/backflow-content-1.webp" type="image/webp">
                        <img src="/assets/images/backflow-content-1.jpg"
                             alt="Licensed technician testing backflow preventer on irrigation system in Fort Worth TX"
                             width="720" height="540" loading="lazy">
                    </picture>
                    <span class="intro-img-badge">✔ Licensed Tester</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SVG DIVIDER: wave -->
    <div class="divider-wave" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 56" preserveAspectRatio="none" height="56">
            <path d="M0,20 C720,70 1080,0 1440,30 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
        </svg>
    </div>

    <!-- DEVICE TYPES -->
    <section class="devices-section" data-animate="fade-up">
        <div class="container">
            <span class="section-eyebrow">What We Test &amp; Repair</span>
            <h2 class="section-h2">Three Backflow Preventer Types Common in Fort Worth</h2>
            <div class="devices-grid">
                <div class="device-card">
                    <div class="device-acronym">PVB</div>
                    <div class="device-fullname">Pressure Vacuum Breaker</div>
                    <h3>Most Common in Fort Worth Residential</h3>
                    <p>The PVB is the standard backflow device for residential irrigation systems in the DFW area. It uses a spring-loaded check valve and vacuum breaker to prevent back-siphonage. Must be installed above the highest irrigation head. Replacement cost if failed: $120–$200.</p>
                </div>
                <div class="device-card">
                    <div class="device-acronym">DC</div>
                    <div class="device-fullname">Double-Check Valve Assembly</div>
                    <h3>Residential &amp; Light Commercial</h3>
                    <p>A double-check assembly uses two independently operating check valves in series. Can be installed at or below grade. Required in higher-risk configurations or where chemical injection (fertilizer systems) is connected to the irrigation circuit. Repair cost: $140–$280.</p>
                </div>
                <div class="device-card">
                    <div class="device-acronym">RPZ</div>
                    <div class="device-fullname">Reduced-Pressure Zone Assembly</div>
                    <h3>Commercial &amp; High-Hazard Applications</h3>
                    <p>The RPZ is the highest level of backflow protection — required for commercial properties and any system with a direct chemical injection connection. Includes a differential pressure relief valve that opens if either check valve fails. Repair cost if failed: $200–$350.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SVG DIVIDER: wave (inverted) -->
    <div class="divider-wave" style="transform: rotate(180deg); margin-bottom: -2px;" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 56" preserveAspectRatio="none" height="56">
            <path d="M0,20 C720,70 1080,0 1440,30 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
        </svg>
    </div>

    <!-- PROCESS -->
    <section class="process-section" data-animate="fade-up">
        <div class="container">
            <span class="section-eyebrow">The Testing Process</span>
            <h2 class="section-h2">Four Steps. One Visit. Fully Documented.</h2>
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3>Shut Down &amp; Isolate</h3>
                    <p>Close isolation valves on both sides of the backflow device. The system must be fully pressurized but not running — testing is done under static pressure conditions.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3>Test Differential Pressure</h3>
                    <p>Use a calibrated differential pressure gauge to measure performance across each check valve and relief valve. Readings below the minimum threshold indicate a failed component.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3>Document &amp; File Results</h3>
                    <p>Complete the TCEQ-required test report documenting device type, serial number, readings, pass/fail, and tester credentials. File with Fort Worth Water Department if required.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3>Repair if Failed</h3>
                    <p>If the device fails, we repair or replace the failed component on the same visit where parts allow — then retest to confirm a passing result and file the corrected report.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SIGNATURE: COMPLIANCE AUTHORITY SPLIT -->
    <section class="compliance-section" aria-label="Compliance and authority section" data-animate="fade-up">
        <div class="container">
            <div class="compliance-split">
                <div class="compliance-graphic">
                    <div class="compliance-icon-wrap">
                        <i data-lucide="shield-check"></i>
                    </div>
                    <p class="compliance-graphic-label">TCEQ-Compliant Testing &amp; Documentation</p>
                    <p class="compliance-graphic-sub">Every test performed by a licensed backflow tester. Reports filed same-day.</p>
                </div>
                <div class="compliance-copy">
                    <span class="section-eyebrow">Why Licensing Matters</span>
                    <h2 class="section-h2">Not Every Plumber or Irrigation Tech Is Certified to Test Backflow</h2>
                    <p class="prose">
                        In Texas, backflow preventer testing must be performed by a licensed backflow prevention assembly tester — a separate certification from a standard irrigator or plumber license.
                        The test equipment must be calibrated annually. The report must be signed by the licensed tester and filed according to TCEQ's cross-connection control requirements.
                        Hire an unlicensed technician and your test report is legally invalid — meaning your property is still out of compliance even after paying for the visit.
                    </p>
                    <p class="prose">
                        <?php echo $siteName; ?> performs licensed backflow testing across Fort Worth and the surrounding DFW area.
                        We carry the required calibrated test kit on every truck, complete the state form on-site, and file with the city on your behalf.
                    </p>
                    <div class="compliance-note-block">
                        <p>What's included in every backflow test visit from <?php echo $siteName; ?>:</p>
                        <ul class="compliance-list">
                            <li><i data-lucide="check-circle"></i> Calibrated differential pressure gauge test (not a visual inspection)</li>
                            <li><i data-lucide="check-circle"></i> State-required test report completed on-site</li>
                            <li><i data-lucide="check-circle"></i> Report filing with Fort Worth Water if required</li>
                            <li><i data-lucide="check-circle"></i> Same-visit repair if the device fails — no second trip charge for standard parts</li>
                            <li><i data-lucide="check-circle"></i> Annual reminder the following year so you stay in compliance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA BANNER MID (#2) -->
    <section class="cta-banner-mid" aria-label="Schedule backflow test">
        <div class="container">
            <p class="cta-eyebrow">Stay in Compliance with Fort Worth Water</p>
            <h2>Your Annual Test Is Due — Schedule It Before You Get a Notice</h2>
            <p class="cta-sub">
                Most Fort Worth property owners don't know they've missed their annual test until they get a violation notice.
                Don't wait for that call. Schedule now and we'll handle the paperwork.
            </p>
            <a href="tel:<?php echo $contactPhoneRaw; ?>" class="cta-phone-big"><?php echo $contactPhone; ?></a>
            <div class="cta-row">
                <a href="tel:<?php echo $contactPhoneRaw; ?>" class="btn-primary"><i data-lucide="phone"></i> Call Now</a>
                <a href="#estimate-form" class="btn-secondary">Schedule Online</a>
            </div>
        </div>
    </section>

    <!-- SVG DIVIDER: diagonal (alt direction) -->
    <div class="divider-diagonal" style="transform: scaleY(-1); margin-bottom: -2px;" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 48" preserveAspectRatio="none" height="48">
            <polygon points="0,0 1440,48 1440,48 0,48" fill="var(--color-bg)"/>
        </svg>
    </div>

    <!-- FAQ -->
    <section class="faq-section" data-animate="fade-up">
        <div class="container">
            <span class="section-eyebrow">Common Questions</span>
            <h2 class="section-h2" style="text-align:center;">Backflow Testing FAQs for Fort Worth Property Owners</h2>
            <div class="faq-list">
                <div class="faq-item">
                    <h3>Is backflow testing required in Fort Worth, TX?</h3>
                    <p>Yes — Texas Commission on Environmental Quality (TCEQ) rules require annual backflow preventer testing for all irrigation systems connected to a public water supply in Texas. Fort Worth Water Department enforces this through its cross-connection control program. Failure to test can result in a violation notice and potential service interruption.</p>
                </div>
                <div class="faq-item">
                    <h3>How much does backflow testing cost in Fort Worth?</h3>
                    <p>Annual testing runs $55–$95 for most residential systems in Fort Worth, depending on device type. If the test reveals a failed device, repair costs range from $120–$350 depending on the component. We carry the most common replacement parts on the truck, so most failed devices are repaired same-visit without an additional service call charge.</p>
                </div>
                <div class="faq-item">
                    <h3>What happens if my backflow preventer fails the test?</h3>
                    <p>The device must be repaired or replaced before it can be cleared for compliance. We repair most failed PVB and double-check valve assemblies same-visit. After repair, we retest the device, confirm it passes, document the corrected reading, and file the passing report with the city. You receive a copy of both reports.</p>
                </div>
                <div class="faq-item">
                    <h3>What is a backflow preventer and why do I need one?</h3>
                    <p>A backflow preventer is a mechanical device installed at the connection between your irrigation system and the public water supply. It prevents water — potentially containing fertilizer, pesticides, and bacteria from your irrigation system — from flowing backward into the city's drinking water main during a pressure drop. Texas requires it on every irrigation system connected to public water.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="contact-form-section" id="estimate-form" data-animate="fade-up">
        <div class="container">
            <div class="contact-form-inner">
                <h2>Schedule Your Backflow Test</h2>
                <p class="form-sub">Quick form — we'll call you back within the hour during business hours to confirm your visit. Most appointments available within 3 business days.</p>
                <form action="<?php echo $formEndpoint; ?>" method="POST" novalidate>
                    <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
                    <input type="hidden" name="_next" value="/thank-you">
                    <input type="hidden" name="_consent_version" value="v2.1">
                    <input type="hidden" name="_consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
                    <input type="hidden" name="service" value="Backflow Testing &amp; Repair">
                    <div class="form-grid">
                        <div class="form-field">
                            <label for="bf-name">Your Name</label>
                            <input type="text" id="bf-name" name="name" required autocomplete="name" placeholder="Jane Smith">
                        </div>
                        <div class="form-field">
                            <label for="bf-phone">Phone Number</label>
                            <input type="tel" id="bf-phone" name="phone" required autocomplete="tel" placeholder="(817) 555-0100">
                        </div>
                        <div class="form-field">
                            <label for="bf-email">Email Address</label>
                            <input type="email" id="bf-email" name="email" required autocomplete="email" placeholder="jane@example.com">
                        </div>
                        <div class="form-field">
                            <label for="bf-zip">ZIP Code</label>
                            <input type="text" id="bf-zip" name="zip" placeholder="76101" maxlength="10">
                        </div>
                    </div>
                    <button type="submit" class="btn-primary" style="width:100%; justify-content:center; margin-top:var(--space-sm);">
                        <i data-lucide="clipboard-check"></i> Schedule My Test
                    </button>
                    <p class="form-note">By submitting, you agree to our <a href="/terms/" style="color:var(--color-primary);">Terms</a> and <a href="/privacy-policy/" style="color:var(--color-primary);">Privacy Policy</a>. We never sell your information.</p>
                </form>
            </div>
        </div>
    </section>

    <!-- CLOSING CTA (#3) -->
    <section class="cta-closing" data-animate="fade-up">
        <div class="container">
            <span class="section-eyebrow">Annual Compliance Made Easy</span>
            <h2>One Call Gets Your Backflow Test Done and Filed</h2>
            <p>
                Licensed testing, same-visit repair if needed, and city report filing — all handled in a single visit.
                We serve Fort Worth, Keller, Southlake, Mansfield, and the broader DFW area.
            </p>
            <div class="cta-row">
                <a href="tel:<?php echo $contactPhoneRaw; ?>" class="btn-primary"><i data-lucide="phone"></i> Call <?php echo $contactPhone; ?></a>
                <a href="#estimate-form" class="btn-secondary">Schedule Online</a>
            </div>
            <div class="cta-trust-badges">
                <span class="trust-badge"><i data-lucide="award"></i> Licensed Backflow Tester</span>
                <span class="trust-badge"><i data-lucide="file-check"></i> City Reports Filed</span>
                <span class="trust-badge"><i data-lucide="map-pin"></i> Fort Worth &amp; DFW</span>
                <span class="trust-badge"><i data-lucide="shield-check"></i> TCEQ Compliant</span>
            </div>
        </div>
    </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

</body>
</html>
<!-- Last Updated: April 2026 -->
