<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle        = "Sprinkler Winterization & Blowout Fort Worth TX | Greener Grass";
$pageDescription  = "Protect your irrigation system from North Texas freeze damage. Compressed-air blowout service in Fort Worth, TX — $85–$150 for most residential systems. Same-day available.";
$canonicalUrl     = $siteUrl . '/services/winterization-blowout/';
$canonicalLink = '<link rel="canonical" href="' . htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') . '">'; // QA canonical reference
$currentPage      = 'services';
$ogImage          = $siteUrl . '/assets/images/hero-winterization.jpg';
$useSwiper        = false;

$serviceSchema = generateServiceSchema([
    'name'        => 'Sprinkler Winterization & Blowout',
    'description' => 'Compressed-air blowout service to purge all water from irrigation zones, protecting pipes, valve bodies, and backflow preventers from North Texas freeze damage.',
    'price'       => '$85–$150',
    'slug'        => 'winterization-blowout',
]);

$faqSchema = generateFAQSchema([
    [
        'question' => 'When should I winterize my Fort Worth irrigation system?',
        'answer'   => 'Schedule your blowout between mid-November and early December in Fort Worth. DFW averages 3–8 hard freeze events per year, and temperatures can fall below 20°F with little warning. Booking before the first hard freeze prevents cracked PVC and burst backflow preventers.',
    ],
    [
        'question' => 'What does a sprinkler blowout cost in Fort Worth?',
        'answer'   => 'Most residential systems in Fort Worth run $85–$150 for a professional compressed-air blowout. Compare that to the $300–$750 it typically costs to repair a single cracked lateral line or replace a split backflow preventer — winterization pays for itself on the first hard freeze.',
    ],
    [
        'question' => 'Can I winterize my irrigation system myself?',
        'answer'   => 'It is possible with the right compressor (minimum 20–50 CFM for residential systems), but renting one plus the risk of blow-back damage to valve diaphragms makes DIY costly. Improper technique — running compressor pressure too high or clearing multiple zones at once — can crack PVC fittings. A professional blowout is the safer bet in Texas clay soil systems.',
    ],
    [
        'question' => 'What temperature damages irrigation pipes in North Texas?',
        'answer'   => 'PVC pipe and valve bodies begin to crack when standing water inside freezes — that happens at or below 32°F, but the real risk starts below 25°F when the ground freezes and ice expansion pressure builds. North Texas regularly sees temperatures below 25°F in January and February, making a fall blowout essential.',
    ],
]);

$breadcrumbSchema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Winterization & Blowout', 'item' => $canonicalUrl],
    ],
];

$howToSchema = [
    '@context'  => 'https://schema.org',
    '@type'     => 'HowTo',
    'name'      => 'How Sprinkler Winterization Works',
    'description' => 'Four-step compressed-air blowout process to fully purge an irrigation system before winter in Fort Worth, TX.',
    'step'      => [
        ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Connect Compressor', 'text' => 'Attach a high-CFM air compressor to the system\'s blowout port (blow-out adapter), set to safe operating pressure for the pipe material.'],
        ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Blow Zones in Sequence', 'text' => 'Run each zone individually, starting with the zone furthest from the valve manifold, until no water exits the heads — typically 2–3 passes per zone.'],
        ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Inspect Manifold & Backflow', 'text' => 'Check the valve manifold and backflow preventer for standing water; drain or insulate the backflow preventer.'],
        ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Winterize Controller', 'text' => 'Set the controller to rain/off mode or disconnect power to prevent accidental activation during freeze events.'],
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
/* ─── WINTERIZATION PAGE — INLINE STYLES ─── */

/* Hero */
.service-hero {
    position: relative;
    min-height: 65vh;
    display: flex;
    align-items: center;
    background-image: url('/assets/images/hero-winterization.jpg');
    background-size: cover;
    background-position: center 40%;
    overflow: hidden;
    animation: kenburns 22s ease-in-out infinite alternate;
}
@keyframes kenburns {
    from { background-size: 110%; background-position: center 40%; }
    to   { background-size: 122%; background-position: center 55%; }
}
.service-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(
        135deg,
        rgba(var(--color-primary-dark-rgb), 0.88) 0%,
        rgba(var(--color-primary-rgb), 0.68) 55%,
        rgba(var(--color-primary-dark-rgb), 0.82) 100%
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

/* Ticker strip */
.ticker-strip {
    background: var(--color-primary-dark);
    padding: var(--space-sm) 0;
    overflow: hidden;
    white-space: nowrap;
}
.ticker-track {
    display: inline-flex;
    animation: ticker 34s linear infinite;
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
.ticker-sep { color: var(--color-accent); font-size: 1.1rem; }
@keyframes ticker { from { transform: translateX(0); } to { transform: translateX(-50%); } }

/* SVG Divider — diagonal down */
.divider-diagonal-down { line-height: 0; overflow: hidden; }
.divider-diagonal-down svg { display: block; width: 100%; }

/* SVG Divider — wave */
.divider-wave { line-height: 0; overflow: hidden; }
.divider-wave svg { display: block; width: 100%; }

/* ── INTRO SECTION ── */
.intro-section { padding: var(--section-pad); background: var(--color-bg); }
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
    max-width: 60ch;
    font-family: var(--font-body);
    font-size: 1.05rem;
    line-height: 1.7;
    color: var(--color-text);
    margin-bottom: var(--space-lg);
}
.cost-callout {
    display: inline-flex;
    flex-direction: column;
    background: var(--color-bg-alt);
    border-left: 4px solid var(--color-accent);
    border-radius: 0 var(--radius-md) var(--radius-md) 0;
    padding: var(--space-md) var(--space-lg);
    gap: var(--space-xs);
}
.cost-callout .cost-label {
    font-family: var(--font-body);
    font-size: var(--font-size-xs);
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: var(--color-text-light);
}
.cost-callout .cost-value {
    font-family: var(--font-heading);
    font-size: clamp(1.8rem, 3vw, 2.4rem);
    font-weight: 700;
    color: var(--color-primary);
    letter-spacing: -0.02em;
}
.cost-callout .cost-note {
    font-family: var(--font-body);
    font-size: var(--font-size-sm);
    color: var(--color-text-light);
}

/* Intro image frame */
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
    background: linear-gradient(180deg, transparent 60%, rgba(var(--color-primary-dark-rgb), 0.55) 100%);
    z-index: 1;
    border-radius: var(--radius-lg);
}
.intro-img-frame img {
    width: 100%;
    aspect-ratio: 4/3;
    object-fit: cover;
    display: block;
    clip-path: inset(0 round var(--radius-lg));
    transition: transform var(--transition-slow);
}
.intro-img-frame:hover img { transform: scale(1.04); }
.intro-img-badge {
    position: absolute;
    bottom: var(--space-lg);
    left: var(--space-lg);
    z-index: 2;
    background: var(--color-accent);
    color: var(--color-primary-dark);
    font-family: var(--font-body);
    font-size: var(--font-size-sm);
    font-weight: 700;
    padding: var(--space-sm) var(--space-md);
    border-radius: var(--radius-sm);
    letter-spacing: 0.04em;
}

/* ── WHY CHOOSE US ── */
.why-section {
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
.benefits-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--space-xl);
}
.benefit-card {
    background: var(--color-bg);
    border-radius: var(--radius-lg);
    padding: var(--space-xl) var(--space-xl);
    box-shadow: var(--shadow-card);
    display: flex;
    gap: var(--space-lg);
    align-items: flex-start;
    transition: transform var(--transition-base), box-shadow var(--transition-base);
    border-bottom: 3px solid transparent;
}
.benefit-card:hover {
    transform: translateY(-6px);
    box-shadow: var(--shadow-xl);
    border-bottom-color: var(--color-accent);
}
.benefit-icon {
    width: 52px;
    height: 52px;
    min-width: 52px;
    background: linear-gradient(135deg, var(--color-primary), var(--color-secondary));
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform var(--transition-base);
}
.benefit-card:hover .benefit-icon { transform: scale(1.12) rotate(-4deg); }
.benefit-icon [data-lucide] { width: 26px; height: 26px; color: var(--color-accent); }
.benefit-text h3 {
    font-family: var(--font-heading);
    font-size: clamp(1.1rem, 2vw, 1.35rem);
    font-weight: 700;
    color: var(--color-primary-dark);
    margin-bottom: var(--space-sm);
    text-wrap: balance;
}
.benefit-text p {
    font-family: var(--font-body);
    font-size: 0.95rem;
    line-height: 1.65;
    color: var(--color-text-light);
    max-width: 42ch;
}

/* ── PROCESS SECTION ── */
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
    padding: var(--space-xl) var(--space-lg) var(--space-lg);
    background: var(--color-bg-alt);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-sm);
    transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.process-step:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.process-step:not(:last-child)::after {
    content: '';
    position: absolute;
    top: 38px;
    right: -22px;
    width: 22px;
    height: 2px;
    background: linear-gradient(90deg, var(--color-accent), transparent);
    z-index: 1;
}
.step-number {
    width: 58px;
    height: 58px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--color-primary), var(--color-secondary));
    color: #fff;
    font-family: var(--font-heading);
    font-size: 1.4rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--space-md);
    box-shadow: var(--shadow-md);
}
.process-step h3 {
    font-family: var(--font-heading);
    font-size: 1.1rem;
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

/* ── SIGNATURE: FREEZE DAMAGE SECTION ── */
.freeze-damage-section {
    position: relative;
    padding: var(--section-pad);
    background: var(--color-bg-dark);
    overflow: hidden;
}
.freeze-damage-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.07'/%3E%3C/svg%3E");
    opacity: 0.07;
    pointer-events: none;
}
.freeze-damage-section::after {
    content: '';
    position: absolute;
    top: -80px;
    right: -80px;
    width: 420px;
    height: 420px;
    background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.08) 0%, transparent 70%);
    pointer-events: none;
}
.freeze-headline-block {
    text-align: center;
    max-width: 700px;
    margin: 0 auto var(--space-3xl);
    position: relative;
    z-index: 1;
}
.freeze-eyebrow {
    display: inline-block;
    font-family: var(--font-body);
    font-size: var(--font-size-xs);
    font-weight: 700;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: var(--space-md);
    border: 1px solid rgba(var(--color-accent-rgb), 0.35);
    padding: var(--space-xs) var(--space-md);
    border-radius: var(--radius-xl);
}
.freeze-h2 {
    font-family: var(--font-heading);
    font-size: clamp(2.2rem, 4.5vw, 3.4rem);
    font-weight: 700;
    line-height: 1.1;
    letter-spacing: -0.02em;
    text-wrap: balance;
    color: #fff;
}
.freeze-h2 em {
    font-style: normal;
    color: var(--color-accent);
}
.freeze-stat-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: var(--space-lg);
    position: relative;
    z-index: 1;
}
.freeze-stat-card {
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: var(--radius-lg);
    padding: var(--space-xl) var(--space-lg);
    text-align: center;
    backdrop-filter: blur(6px);
    transition: background var(--transition-base), border-color var(--transition-base), transform var(--transition-base);
    animation: fadeSlideUp 0.6s ease both;
}
.freeze-stat-card:nth-child(1) { animation-delay: 0.1s; }
.freeze-stat-card:nth-child(2) { animation-delay: 0.2s; }
.freeze-stat-card:nth-child(3) { animation-delay: 0.3s; }
.freeze-stat-card:nth-child(4) { animation-delay: 0.4s; }
.freeze-stat-card:hover {
    background: rgba(var(--color-accent-rgb), 0.12);
    border-color: rgba(var(--color-accent-rgb), 0.35);
    transform: translateY(-6px);
}
.freeze-stat-icon {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: rgba(var(--color-accent-rgb), 0.15);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--space-md);
}
.freeze-stat-icon [data-lucide] { width: 24px; height: 24px; color: var(--color-accent); }
.freeze-stat-value {
    font-family: var(--font-heading);
    font-size: clamp(2rem, 3.5vw, 2.8rem);
    font-weight: 700;
    color: var(--color-accent);
    letter-spacing: -0.02em;
    line-height: 1;
    margin-bottom: var(--space-sm);
}
.freeze-stat-label {
    font-family: var(--font-body);
    font-size: var(--font-size-sm);
    color: rgba(255,255,255,0.72);
    line-height: 1.5;
}

/* ── CTA BANNER (Mid-page CTA #2) ── */
.cta-banner-mid {
    position: relative;
    padding: var(--section-pad);
    background: linear-gradient(135deg, var(--color-primary-dark) 0%, var(--color-primary) 50%, var(--color-secondary) 100%);
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

/* ── FAQ SECTION ── */
.faq-section {
    padding: var(--section-pad);
    background: var(--color-bg-alt);
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
    background: var(--color-bg);
}
.contact-form-inner {
    max-width: 680px;
    margin: 0 auto;
    background: var(--color-bg-alt);
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
    background: var(--color-bg);
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
    background: var(--color-bg-alt);
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
    max-width: 52ch;
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
    .freeze-stat-grid { grid-template-columns: repeat(2, 1fr); }
    .process-steps { grid-template-columns: repeat(2, 1fr); }
    .process-step:nth-child(2)::after { display: none; }
}
@media (max-width: 767px) {
    .service-hero { min-height: 70vh; }
    .intro-grid { grid-template-columns: 1fr; }
    .intro-img-frame { order: -1; }
    .benefits-grid { grid-template-columns: 1fr; }
    .freeze-stat-grid { grid-template-columns: repeat(2, 1fr); }
    .process-steps { grid-template-columns: 1fr; }
    .process-step::after { display: none !important; }
    .form-grid { grid-template-columns: 1fr; }
    .contact-form-inner { padding: var(--space-xl) var(--space-lg); }
    .hero-cta-row { flex-direction: column; align-items: flex-start; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<main id="main-content">

    <!-- HERO (CTA #1) -->
    <section class="service-hero" aria-label="Sprinkler Winterization & Blowout">
        <div class="container">
            <div class="hero-eyebrow">
                <i data-lucide="snowflake"></i>
                Fort Worth Winterization Specialists
            </div>
            <h1 class="hero-h1">Stop Freeze Damage<br><span>Before It Costs You</span></h1>
            <p class="hero-sub">
                A single North Texas freeze can crack PVC pipes, split valve bodies, and destroy your backflow preventer.
                A $85–$150 compressed-air blowout this fall is the only thing standing between your system and a $400–$800 repair bill.
            </p>
            <div class="hero-cta-row">
                <a href="tel:<?php echo $contactPhoneRaw; ?>" class="btn-primary">
                    <i data-lucide="phone"></i> Call <?php echo $contactPhone; ?>
                </a>
                <a href="#estimate-form" class="btn-secondary">Get a Fast Estimate</a>
                <span class="hero-badge"><i data-lucide="check-circle"></i> Same-day available</span>
                <span class="hero-badge"><i data-lucide="shield"></i> Licensed &amp; Insured</span>
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
            <span class="current" aria-current="page">Winterization &amp; Blowout</span>
        </div>
    </nav>

    <!-- TICKER STRIP -->
    <div class="ticker-strip" aria-hidden="true">
        <div class="ticker-track">
            <span class="ticker-item">Compressed-Air Blowout <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">$85–$150 Residential <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">Fort Worth &amp; DFW <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">Same-Day Available <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">Licensed &amp; Insured <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">All Zone Types <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">Compressed-Air Blowout <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">$85–$150 Residential <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">Fort Worth &amp; DFW <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">Same-Day Available <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">Licensed &amp; Insured <span class="ticker-sep">✦</span></span>
            <span class="ticker-item">All Zone Types <span class="ticker-sep">✦</span></span>
        </div>
    </div>

    <!-- SVG DIVIDER: diagonal-down -->
    <div class="divider-diagonal-down" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 48" preserveAspectRatio="none" height="48">
            <polygon points="0,0 1440,0 1440,48" fill="var(--color-bg)"/>
        </svg>
    </div>

    <!-- INTRO SECTION -->
    <section class="intro-section" data-animate="fade-up">
        <div class="container">
            <div class="intro-grid">
                <div class="intro-content">
                    <span class="intro-eyebrow">Why It Matters in North Texas</span>
                    <h2 class="intro-h2">Fort Worth Gets Freezes — Your Pipes Need to Be Ready</h2>
                    <p class="intro-prose">
                        DFW averages 3–8 hard freeze events every winter, with temperatures occasionally dropping below 20°F.
                        Unlike northern climates, Fort Worth irrigation systems are often installed shallower because heavy freezes were historically rare —
                        and Fort Worth clay soil holds moisture, meaning standing water in pipes doesn't drain on its own.
                        A compressed-air blowout is the only method that fully purges every zone, every head, every valve body.
                    </p>
                    <p class="intro-prose">
                        Skip the blowout and you're gambling. A burst backflow preventer runs $180–$350 to replace.
                        A cracked lateral line with head pop-out adds another $150–$300. Repair costs run 3–5× the cost of winterization — every time.
                    </p>
                    <div class="cost-callout">
                        <span class="cost-label">Blowout Cost</span>
                        <span class="cost-value">$85–$150</span>
                        <span class="cost-note">Most residential systems in Fort Worth · vs. $400–$800+ to repair freeze damage</span>
                    </div>
                </div>
                <div class="intro-img-frame" data-animate="wipe-right">
                    <picture>
                        <source srcset="/assets/images/winterization-content-1.avif" type="image/avif">
                        <source srcset="/assets/images/winterization-content-1.webp" type="image/webp">
                        <img src="/assets/images/winterization-content-1.jpg"
                             alt="Irrigation technician connecting compressed-air compressor to sprinkler system blowout port in Fort Worth TX"
                             width="720" height="540" loading="lazy">
                    </picture>
                    <span class="intro-img-badge">✔ Licensed Technician</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SVG DIVIDER: wave -->
    <div class="divider-wave" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 56" preserveAspectRatio="none" height="56">
            <path d="M0,0 C360,56 1080,0 1440,40 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
        </svg>
    </div>

    <!-- WHY CHOOSE US -->
    <section class="why-section" data-animate="fade-up">
        <div class="container">
            <span class="section-eyebrow">Why <?php echo $siteName; ?></span>
            <h2 class="section-h2">Precision Blowout — Not Just Air Pushed Through</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon"><i data-lucide="wind"></i></div>
                    <div class="benefit-text">
                        <h3>High-CFM Compressor for Full Purge</h3>
                        <p>Undersized compressors leave standing water in zone laterals. We use commercial-grade, high-CFM equipment that fully purges every zone — not just the heads visible at the surface.</p>
                    </div>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon"><i data-lucide="layers"></i></div>
                    <div class="benefit-text">
                        <h3>Zone-by-Zone Sequence Protocol</h3>
                        <p>Running all zones at once risks valve damage and incomplete purge. We clear each zone individually — furthest from the manifold first — then do a confirmation pass to verify dry heads.</p>
                    </div>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon"><i data-lucide="shield-check"></i></div>
                    <div class="benefit-text">
                        <h3>Backflow Preventer Inspection Included</h3>
                        <p>The backflow preventer is the most expensive single component to replace after a freeze. We inspect, drain, and insulate it as part of every blowout — not an add-on.</p>
                    </div>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon"><i data-lucide="clock"></i></div>
                    <div class="benefit-text">
                        <h3>Same-Day Scheduling Before Freeze Events</h3>
                        <p>North Texas freeze warnings can come fast. We keep slots open for same-day winterization calls when freeze watches are issued — because waiting 48 hours can mean burst pipes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SVG DIVIDER: diagonal-down (reversed) -->
    <div class="divider-diagonal-down" style="transform: scaleX(-1); margin-top: -2px;" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 48" preserveAspectRatio="none" height="48">
            <polygon points="0,48 1440,0 1440,48" fill="var(--color-bg)"/>
        </svg>
    </div>

    <!-- PROCESS -->
    <section class="process-section" data-animate="fade-up">
        <div class="container">
            <span class="section-eyebrow">The Blowout Process</span>
            <h2 class="section-h2">Four Steps. One Visit. No Water Left Behind.</h2>
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3>Connect Compressor</h3>
                    <p>Attach the high-CFM air compressor to your system's dedicated blowout port, set to safe operating pressure for your pipe material (PVC vs. poly).</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3>Blow Zones in Sequence</h3>
                    <p>Clear each zone individually — starting furthest from the valve manifold — until no water exits the heads. Minimum 2–3 passes per zone for complete purge.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3>Inspect Manifold &amp; Backflow</h3>
                    <p>Check the valve manifold for standing water, inspect and drain the backflow preventer, and wrap with insulation if exposed to wind chill.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3>Winterize Controller</h3>
                    <p>Set the controller to rain or off mode, replace backup battery if needed, and confirm no scheduled watering will run during freeze events.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SIGNATURE: FREEZE DAMAGE STATS (full-bleed dark with stat cards) -->
    <section class="freeze-damage-section" aria-label="Cost of freeze damage comparison" data-animate="fade-up">
        <div class="container">
            <div class="freeze-headline-block">
                <span class="freeze-eyebrow">The Cost of Skipping Winterization</span>
                <h2 class="freeze-h2">What <em>Freeze Damage</em> Actually Looks Like in Fort Worth</h2>
            </div>
            <div class="freeze-stat-grid">
                <div class="freeze-stat-card">
                    <div class="freeze-stat-icon"><i data-lucide="snowflake"></i></div>
                    <div class="freeze-stat-value">3–8</div>
                    <div class="freeze-stat-label">Hard freeze events<br>per year in DFW</div>
                </div>
                <div class="freeze-stat-card">
                    <div class="freeze-stat-icon"><i data-lucide="alert-triangle"></i></div>
                    <div class="freeze-stat-value">$350+</div>
                    <div class="freeze-stat-label">Backflow preventer<br>replacement cost</div>
                </div>
                <div class="freeze-stat-card">
                    <div class="freeze-stat-icon"><i data-lucide="wrench"></i></div>
                    <div class="freeze-stat-value">3–5×</div>
                    <div class="freeze-stat-label">Repair cost vs.<br>blowout cost</div>
                </div>
                <div class="freeze-stat-card">
                    <div class="freeze-stat-icon"><i data-lucide="check-circle"></i></div>
                    <div class="freeze-stat-value">$85</div>
                    <div class="freeze-stat-label">Starting price for<br>a full blowout</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA BANNER MID (CTA #2) -->
    <section class="cta-banner-mid" aria-label="Schedule winterization">
        <div class="container">
            <p class="cta-eyebrow">Book Before the First Freeze</p>
            <h2>Slots Fill Fast When Freeze Warnings Drop — Schedule Now</h2>
            <p class="cta-sub">
                Fort Worth freeze watches can give you fewer than 24 hours of warning. Don't wait until your neighbors are already calling.
                Call now for same-day availability or book online.
            </p>
            <a href="tel:<?php echo $contactPhoneRaw; ?>" class="cta-phone-big"><?php echo $contactPhone; ?></a>
            <div class="cta-row">
                <a href="tel:<?php echo $contactPhoneRaw; ?>" class="btn-primary"><i data-lucide="phone"></i> Call Now</a>
                <a href="#estimate-form" class="btn-secondary">Get a Fast Estimate</a>
            </div>
        </div>
    </section>

    <!-- SVG DIVIDER: wave (inverted) -->
    <div class="divider-wave" style="transform: rotate(180deg); margin-bottom: -2px;" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 56" preserveAspectRatio="none" height="56">
            <path d="M0,0 C360,56 1080,0 1440,40 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
        </svg>
    </div>

    <!-- FAQ -->
    <section class="faq-section" data-animate="fade-up">
        <div class="container">
            <span class="section-eyebrow">Common Questions</span>
            <h2 class="section-h2" style="text-align:center;">Fort Worth Winterization FAQs</h2>
            <div class="faq-list">
                <div class="faq-item">
                    <h3>When should I winterize my Fort Worth irrigation system?</h3>
                    <p>Schedule between mid-November and early December. DFW's first hard freeze typically arrives in late November or early December — book your blowout two to three weeks ahead of that window. After a freeze watch is issued, same-day slots fill within hours.</p>
                </div>
                <div class="faq-item">
                    <h3>What does a sprinkler blowout cost in Fort Worth?</h3>
                    <p>Most residential systems in Fort Worth and the surrounding DFW area run $85–$150 for a professional compressed-air blowout. Final cost depends on the number of zones. A backflow preventer inspection is included in every visit at no additional charge.</p>
                </div>
                <div class="faq-item">
                    <h3>Can I winterize my irrigation system myself?</h3>
                    <p>Possible — but the right compressor for a residential irrigation system (minimum 20–50 CFM) is expensive to rent and easy to misuse. Over-pressuring zones damages valve diaphragms. Running multiple zones simultaneously leaves water behind. Most homeowners spend more on a compressor rental than a professional blowout costs.</p>
                </div>
                <div class="faq-item">
                    <h3>What temperature damages irrigation pipes in North Texas?</h3>
                    <p>PVC pipe and valve bodies crack when standing water freezes at 32°F, but the serious risk comes below 25°F when ground-level freeze depth increases. Fort Worth regularly hits 25°F or below multiple times per winter — a standing-water system is not safe once temperatures drop below freezing for more than a few hours.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM (inline estimate) -->
    <section class="contact-form-section" id="estimate-form" data-animate="fade-up">
        <div class="container">
            <div class="contact-form-inner">
                <h2>Get a Fast Estimate</h2>
                <p class="form-sub">Fill out the short form and we'll call you back within the hour during business hours. Same-day blowouts available.</p>
                <form action="<?php echo $formEndpoint; ?>" method="POST" novalidate>
                    <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
                    <input type="hidden" name="_next" value="/thank-you">
                    <input type="hidden" name="_consent_version" value="v2.1">
                    <input type="hidden" name="_consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
                    <input type="hidden" name="service" value="Winterization &amp; Blowout">
                    <div class="form-grid">
                        <div class="form-field">
                            <label for="w-name">Your Name</label>
                            <input type="text" id="w-name" name="name" required autocomplete="name" placeholder="Jane Smith">
                        </div>
                        <div class="form-field">
                            <label for="w-phone">Phone Number</label>
                            <input type="tel" id="w-phone" name="phone" required autocomplete="tel" placeholder="(817) 555-0100">
                        </div>
                        <div class="form-field">
                            <label for="w-email">Email Address</label>
                            <input type="email" id="w-email" name="email" required autocomplete="email" placeholder="jane@example.com">
                        </div>
                        <div class="form-field">
                            <label for="w-zip">ZIP Code</label>
                            <input type="text" id="w-zip" name="zip" placeholder="76101" maxlength="10">
                        </div>
                    </div>
                    <button type="submit" class="btn-primary" style="width:100%; justify-content:center; margin-top:var(--space-sm);">
                        <i data-lucide="send"></i> Request My Estimate
                    </button>
                    <p class="form-note">By submitting, you agree to our <a href="/terms/" style="color:var(--color-primary);">Terms</a> and <a href="/privacy-policy/" style="color:var(--color-primary);">Privacy Policy</a>. We never sell your information.</p>
                </form>
            </div>
        </div>
    </section>

    <!-- CLOSING CTA (#3) -->
    <section class="cta-closing" data-animate="fade-up">
        <div class="container">
            <span class="section-eyebrow">Don't Wait for a Freeze Warning</span>
            <h2>Schedule Your Fort Worth Blowout This Week</h2>
            <p>
                Mid-November through early December is the window. After the first hard freeze hits, you'll be competing with every other homeowner who waited.
                Call now and lock in your appointment.
            </p>
            <div class="cta-row">
                <a href="tel:<?php echo $contactPhoneRaw; ?>" class="btn-primary"><i data-lucide="phone"></i> Call <?php echo $contactPhone; ?></a>
                <a href="#estimate-form" class="btn-secondary">Get an Online Estimate</a>
            </div>
            <div class="cta-trust-badges">
                <span class="trust-badge"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
                <span class="trust-badge"><i data-lucide="clock"></i> Same-Day Available</span>
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
