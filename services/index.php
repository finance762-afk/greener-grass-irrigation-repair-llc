<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ─── Page Setup ───────────────────────────────────────────────────────────────
$pageTitle       = 'Irrigation Services in Fort Worth TX | Greener Grass';
$pageDescription = 'Complete irrigation services in Fort Worth TX — repair, installation, winterization, drip systems, smart controllers, leak detection & backflow testing. Licensed & insured. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/';
$canonicalLink = '<link rel="canonical" href="' . htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') . '">'; // QA canonical reference
$currentPage     = 'services';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<body>

<!-- BreadcrumbList Schema — output before body content -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "<?php echo $siteUrl; ?>/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Services",
      "item": "<?php echo $siteUrl; ?>/services/"
    }
  ]
}
</script>

<style>
/* ── Services Index Page Styles ──────────────────────────────────────────── */

/* Hero ── */
.services-hero {
  position: relative;
  min-height: 50vh;
  display: flex;
  align-items: center;
  background-image: url('/assets/images/hero-irrigation.jpg');
  background-size: cover;
  background-position: center 25%;
  overflow: hidden;
}

.services-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    130deg,
    rgba(var(--color-primary-dark-rgb), 0.92) 0%,
    rgba(var(--color-primary-rgb), 0.78) 55%,
    rgba(var(--color-secondary), 0.5) 100%
  );
  z-index: 1;
}

.services-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.04;
  z-index: 2;
  pointer-events: none;
}

.services-hero-inner {
  position: relative;
  z-index: 3;
  width: 100%;
  padding: var(--space-4xl) var(--space-lg);
}

.hero-eyebrow {
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

.services-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.4rem, 5.5vw, 3.8rem);
  letter-spacing: -0.025em;
  line-height: 1.1;
  text-wrap: balance;
  max-width: 680px;
  margin-bottom: var(--space-md);
}

.services-hero h1 span {
  background: linear-gradient(90deg, var(--color-accent), #b8e05a);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.services-hero-desc {
  color: rgba(255,255,255,0.82);
  font-size: var(--font-size-lg);
  max-width: 58ch;
  margin-bottom: var(--space-2xl);
  line-height: 1.6;
}

.hero-cta-row {
  display: flex;
  gap: var(--space-md);
  align-items: center;
  flex-wrap: wrap;
}

.btn-hero-primary {
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
.svc-intro-strip {
  background: var(--color-bg);
  padding: var(--space-3xl) var(--space-lg);
  border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.06);
}

.svc-intro-strip .inner {
  max-width: var(--max-width);
  margin-inline: auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4xl);
  align-items: start;
}

.intro-left h2 {
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}

.intro-left p {
  color: var(--color-text-light);
  max-width: 55ch;
  line-height: 1.7;
}

.intro-right {
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}

.intro-badge {
  display: flex;
  align-items: center;
  gap: var(--space-md);
  padding: var(--space-md) var(--space-lg);
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg);
  border-left: 3px solid var(--color-accent);
}

.intro-badge-icon {
  flex-shrink: 0;
  width: 38px;
  height: 38px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.1);
  border-radius: var(--radius-sm);
  color: var(--color-accent-dark);
}
.intro-badge-icon svg { width: 18px; height: 18px; stroke: currentColor; }

.intro-badge-text strong {
  display: block;
  font-family: var(--font-heading);
  font-size: 0.9rem;
  font-weight: 600;
  color: var(--color-primary);
  margin-bottom: 2px;
}
.intro-badge-text span { font-size: var(--font-size-sm); color: var(--color-text-light); }

/* Divider ── */
.divider-wave { line-height: 0; overflow: hidden; }
.divider-wave svg { display: block; width: 100%; }

/* Services Grid Section ── */
.svc-grid-section {
  background: var(--color-bg-alt);
  padding: var(--section-pad);
}

.grid-section-label {
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

.svc-grid-section h2 {
  color: var(--color-primary);
  margin-bottom: var(--space-3xl);
  max-width: 560px;
}

/* 3-col service card grid ── */
.services-cards-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-lg);
}

.svc-card {
  display: flex;
  flex-direction: column;
  background: var(--color-white);
  border-radius: var(--radius-xl);
  padding: var(--space-xl);
  box-shadow: var(--shadow-card);
  border: 1px solid rgba(var(--color-primary-rgb), 0.06);
  transition: transform var(--transition-base), box-shadow var(--transition-base), background var(--transition-base);
  position: relative;
  overflow: hidden;
  /* Animate in with stagger */
  opacity: 0;
  transform: translateY(20px);
}

.svc-card.is-visible {
  opacity: 1;
  transform: translateY(0);
  transition: opacity 0.4s ease, transform 0.4s ease, box-shadow var(--transition-base), background var(--transition-base);
}

.svc-card::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
  background: var(--color-accent);
  transform: scaleX(0);
  transform-origin: left;
  transition: transform var(--transition-base);
}

.svc-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-xl);
  background: var(--color-primary);
}

.svc-card:hover::before { transform: scaleX(1); }

.svc-card:hover .svc-card-icon  { background: rgba(var(--color-accent-rgb), 0.18); color: var(--color-accent); }
.svc-card:hover .svc-card-name  { color: var(--color-white); }
.svc-card:hover .svc-card-desc  { color: rgba(255,255,255,0.75); }
.svc-card:hover .svc-card-link  { color: var(--color-accent); }

.svc-card-icon {
  width: 52px;
  height: 52px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-primary-rgb), 0.07);
  border-radius: var(--radius-lg);
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
  transition: background var(--transition-base), color var(--transition-base);
  flex-shrink: 0;
}
.svc-card-icon svg { width: 24px; height: 24px; stroke: currentColor; }

.svc-card-name {
  font-family: var(--font-heading);
  font-size: 1.15rem;
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
  letter-spacing: 0.01em;
  transition: color var(--transition-base);
}

.svc-card-desc {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  flex: 1;
  margin-bottom: var(--space-lg);
  transition: color var(--transition-base);
}

.svc-card-link {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  font-family: var(--font-heading);
  font-size: 0.85rem;
  font-weight: 600;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--color-secondary);
  margin-top: auto;
  transition: color var(--transition-fast), gap var(--transition-fast);
}

.svc-card-link:hover { gap: var(--space-sm); }

/* Asymmetric featured card (first card in grid, spans 2 rows on large screens) ── */
.svc-card-featured {
  grid-column: 1;
  grid-row: 1 / 3;
  padding: var(--space-2xl);
  background: var(--color-primary);
  color: var(--color-white);
  border-color: transparent;
}

.svc-card-featured::before { background: var(--color-accent); }
.svc-card-featured:hover { background: var(--color-primary-dark); transform: translateY(-6px); }

.svc-card-featured .svc-card-icon {
  width: 64px;
  height: 64px;
  background: rgba(var(--color-accent-rgb), 0.15);
  color: var(--color-accent);
}
.svc-card-featured .svc-card-icon svg { width: 30px; height: 30px; }

.svc-card-featured .svc-card-name {
  color: var(--color-white);
  font-size: 1.4rem;
  margin-bottom: var(--space-md);
}

.svc-card-featured .svc-card-desc {
  color: rgba(255,255,255,0.75);
  font-size: var(--font-size-base);
  line-height: 1.65;
}

.svc-card-featured .svc-card-link { color: var(--color-accent); }

.svc-card-featured:hover .svc-card-icon { background: rgba(var(--color-accent-rgb), 0.25); }

/* CTA Banner (CTA #2) ── */
.cta-banner {
  position: relative;
  background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-primary) 60%, var(--color-primary-dark) 100%);
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
.cta-banner-text p  { color: rgba(255,255,255,0.8); max-width: 50ch; margin: 0; }

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

/* Why Choose Specialist Section ── */
.why-specialist {
  background: var(--color-bg);
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

.why-specialist h2 {
  color: var(--color-primary);
  margin-bottom: var(--space-3xl);
  max-width: 580px;
}

/* Asymmetric layout — 2 wide + 2 stacked ── */
.why-specialist-grid {
  display: grid;
  grid-template-columns: 2fr 1fr;
  grid-template-rows: auto auto;
  gap: var(--space-lg);
}

.specialist-feature {
  grid-column: 1;
  grid-row: 1 / 3;
  background: var(--color-bg-dark);
  border-radius: var(--radius-xl);
  padding: var(--space-3xl);
  color: var(--color-white);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  position: relative;
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}

.specialist-feature::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 4px;
  background: linear-gradient(90deg, var(--color-accent), var(--color-secondary));
}

.specialist-feature::after {
  content: '';
  position: absolute;
  bottom: -40px;
  right: -40px;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.05);
  pointer-events: none;
}

.feature-icon {
  width: 64px;
  height: 64px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.12);
  border-radius: var(--radius-lg);
  color: var(--color-accent);
  margin-bottom: var(--space-2xl);
}
.feature-icon svg { width: 30px; height: 30px; stroke: currentColor; }

.specialist-feature h3 {
  color: var(--color-white);
  font-size: clamp(1.3rem, 2.5vw, 1.8rem);
  margin-bottom: var(--space-lg);
}

.specialist-feature p {
  color: rgba(255,255,255,0.7);
  font-size: var(--font-size-base);
  line-height: 1.7;
  flex: 1;
  margin-bottom: var(--space-2xl);
}

.specialist-stat {
  border-top: 1px solid rgba(255,255,255,0.1);
  padding-top: var(--space-lg);
  display: flex;
  align-items: center;
  gap: var(--space-lg);
}

.stat-value {
  font-family: var(--font-heading);
  font-size: 2.8rem;
  font-weight: 700;
  color: var(--color-accent);
  letter-spacing: -0.03em;
  line-height: 1;
}

.stat-desc {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.65);
  line-height: 1.45;
}

.specialist-card {
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  box-shadow: var(--shadow-card);
  border-left: 3px solid var(--color-accent);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}

.specialist-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}

.specialist-card-icon {
  width: 42px;
  height: 42px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--color-accent-rgb), 0.1);
  border-radius: var(--radius-sm);
  color: var(--color-accent-dark);
  margin-bottom: var(--space-md);
}
.specialist-card-icon svg { width: 20px; height: 20px; stroke: currentColor; }

.specialist-card h3 {
  color: var(--color-primary);
  font-size: 1rem;
  margin-bottom: var(--space-sm);
}
.specialist-card p { font-size: var(--font-size-sm); color: var(--color-text-light); line-height: 1.6; margin: 0; }

/* Service Area Strip ── */
.area-strip {
  background: var(--color-primary);
  padding: var(--space-xl) var(--space-lg);
}

.area-strip-inner {
  display: flex;
  align-items: center;
  gap: var(--space-2xl);
  flex-wrap: wrap;
}

.area-strip-label {
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  flex-shrink: 0;
}

.area-tags {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-sm);
  flex: 1;
}

.area-tag {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  background: rgba(255,255,255,0.08);
  border: 1px solid rgba(255,255,255,0.12);
  color: rgba(255,255,255,0.85);
  font-size: var(--font-size-sm);
  padding: var(--space-xs) var(--space-md);
  border-radius: var(--radius-xl);
  white-space: nowrap;
}

/* Closing CTA + Form (CTA #3) ── */
.closing-cta-section {
  background: var(--color-bg-alt);
  padding: var(--section-pad);
  position: relative;
  overflow: hidden;
}

.closing-cta-section::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 4px;
  background: linear-gradient(90deg, var(--color-secondary), var(--color-accent), var(--color-secondary));
}

.closing-inner {
  display: grid;
  grid-template-columns: 1fr auto;
  gap: var(--space-4xl);
  align-items: start;
}

.closing-text h2 { color: var(--color-primary); margin-bottom: var(--space-md); }
.closing-text p  { color: var(--color-text-light); max-width: 52ch; line-height: 1.7; }

.closing-text .trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-md);
  margin-top: var(--space-xl);
}

.trust-badge {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: var(--color-primary);
  background: var(--color-white);
  padding: var(--space-sm) var(--space-md);
  border-radius: var(--radius-xl);
  border: 1px solid rgba(var(--color-primary-rgb), 0.1);
  box-shadow: var(--shadow-card);
}
.trust-badge svg { width: 16px; height: 16px; stroke: var(--color-accent-dark); }

.closing-form {
  background: var(--color-white);
  border-radius: var(--radius-xl);
  padding: var(--space-2xl);
  box-shadow: var(--shadow-xl);
  border: 1px solid rgba(var(--color-primary-rgb), 0.07);
  min-width: 360px;
}

.closing-form h3 { color: var(--color-primary); font-size: 1.15rem; margin-bottom: var(--space-lg); }

.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-md); }
.form-field { display: flex; flex-direction: column; gap: var(--space-xs); }
.form-field label { font-size: var(--font-size-sm); font-weight: 600; color: var(--color-primary); }

.form-field input,
.form-field select {
  padding: var(--space-md);
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

/* Responsive ── */
@media (max-width: 1023px) {
  .services-cards-grid { grid-template-columns: repeat(2, 1fr); }
  .svc-card-featured   { grid-row: auto; grid-column: auto; }
  .svc-intro-strip .inner { grid-template-columns: 1fr; }
  .why-specialist-grid { grid-template-columns: 1fr; }
  .specialist-feature  { grid-column: auto; grid-row: auto; }
}

@media (max-width: 767px) {
  .services-cards-grid { grid-template-columns: 1fr; }
  .svc-card-featured   { grid-column: auto; grid-row: auto; }
  .cta-banner-inner    { flex-direction: column; align-items: flex-start; }
  .cta-banner-actions  { align-items: flex-start; }
  .closing-inner       { grid-template-columns: 1fr; }
  .closing-form        { min-width: 0; }
  .form-row            { grid-template-columns: 1fr; }
  .area-strip-inner    { flex-direction: column; gap: var(--space-md); }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ─── Hero (CTA #1) ──────────────────────────────────────────────────────── -->
<section class="services-hero" aria-label="Services Page Hero">
  <div class="services-hero-inner container">
    <span class="hero-eyebrow">
      <i data-lucide="layout-grid" aria-hidden="true"></i>
      All Services — Fort Worth, TX
    </span>
    <h1>All Irrigation Services — <span>Fort Worth, TX</span></h1>
    <p class="services-hero-desc">
      From a single broken head to a full system replacement — we handle every irrigation need in Fort Worth and Tarrant County. Licensed irrigators, same-week scheduling, transparent pricing before any work begins.
    </p>
    <div class="hero-cta-row">
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
]);
?>

<!-- ─── Intro Strip ────────────────────────────────────────────────────────── -->
<section class="svc-intro-strip" aria-labelledby="intro-heading">
  <div class="inner">
    <div class="intro-left">
      <h2 id="intro-heading">What Kind of Irrigation Problem Do You Have?</h2>
      <p>
        Broken heads, underground leaks, a controller that won't program, a system that hasn't been tested since last fall — Greener Grass handles all of it in a single truck visit. We've completed <strong><?php echo $jobsCompleted; ?> jobs</strong> across Fort Worth and Tarrant County since <?php echo $yearFounded; ?>, and every tech is a licensed irrigator under Texas state law.
      </p>
      <p style="margin-top: var(--space-md);">
        Browse all nine services below. If you're not sure what you need, call us — a 5-minute phone conversation usually narrows it down.
      </p>
    </div>

    <div class="intro-right" data-animate="fade-up">
      <div class="intro-badge">
        <div class="intro-badge-icon"><i data-lucide="shield-check" aria-hidden="true"></i></div>
        <div class="intro-badge-text">
          <strong>Licensed Texas Irrigator</strong>
          <span>State license required for all irrigation work — verify before you hire anyone.</span>
        </div>
      </div>
      <div class="intro-badge">
        <div class="intro-badge-icon"><i data-lucide="clock" aria-hidden="true"></i></div>
        <div class="intro-badge-text">
          <strong><?php echo $yearsInBusiness; ?> Years in Fort Worth</strong>
          <span>We've seen every irrigation failure North Texas weather can cause.</span>
        </div>
      </div>
      <div class="intro-badge">
        <div class="intro-badge-icon"><i data-lucide="dollar-sign" aria-hidden="true"></i></div>
        <div class="intro-badge-text">
          <strong>Firm Quote Before Any Work</strong>
          <span>We diagnose the problem and give you a price — you approve before we start.</span>
        </div>
      </div>
      <div class="intro-badge">
        <div class="intro-badge-icon"><i data-lucide="star" aria-hidden="true"></i></div>
        <div class="intro-badge-text">
          <strong><?php echo $reviewRating; ?>-Star Rating — <?php echo $reviewCount; ?>+ Reviews</strong>
          <span>Verified Google reviews from Fort Worth homeowners and HOAs.</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Divider ── -->
<div class="divider-wave" aria-hidden="true">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
    <path fill="#ffffff" d="M0,0 C360,60 1080,0 1440,30 L1440,0 Z"/>
  </svg>
</div>

<!-- ─── Services Grid ──────────────────────────────────────────────────────── -->
<section class="svc-grid-section" aria-labelledby="services-grid-heading">
  <div class="container">
    <span class="grid-section-label">
      <i data-lucide="layout-grid" aria-hidden="true"></i>
      All Nine Services
    </span>
    <h2 id="services-grid-heading">Every Irrigation Service — One Fort Worth Company</h2>

    <div class="services-cards-grid">
      <?php foreach ($services as $i => $svc): ?>
      <a href="/services/<?php echo htmlspecialchars($svc['slug'], ENT_QUOTES, 'UTF-8'); ?>/"
         class="svc-card tilt-card <?php echo $i === 0 ? 'svc-card-featured' : ''; ?>"
         data-animate="fade-up"
         style="transition-delay: <?php echo min($i * 80, 480); ?>ms"
         aria-label="<?php echo htmlspecialchars($svc['name'], ENT_QUOTES, 'UTF-8'); ?> service page">

        <div class="svc-card-icon">
          <i data-lucide="<?php echo htmlspecialchars($svc['icon'], ENT_QUOTES, 'UTF-8'); ?>" aria-hidden="true"></i>
        </div>

        <div class="svc-card-name"><?php echo htmlspecialchars($svc['name'], ENT_QUOTES, 'UTF-8'); ?></div>
        <div class="svc-card-desc"><?php echo htmlspecialchars($svc['shortDesc'], ENT_QUOTES, 'UTF-8'); ?></div>

        <span class="svc-card-link" aria-hidden="true">
          Learn More
          <i data-lucide="arrow-right" aria-hidden="true"></i>
        </span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider ── -->
<div class="divider-wave" aria-hidden="true">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
    <path fill="#f2f8f4" d="M0,60 C480,10 960,50 1440,10 L1440,60 Z"/>
  </svg>
</div>

<!-- ─── CTA Banner (CTA #2) ───────────────────────────────────────────────── -->
<section class="cta-banner" aria-label="Contact for free estimate">
  <div class="container cta-banner-inner">
    <div class="cta-banner-text">
      <h2>Not Sure Which Service You Need?</h2>
      <p>Call us — a quick phone conversation identifies the problem fast. We serve all of Fort Worth and Tarrant County with same-week scheduling on most services.</p>
    </div>
    <div class="cta-banner-actions">
      <a href="tel:<?php echo $contactPhoneRaw; ?>" class="cta-phone-big">
        <i data-lucide="phone-call" aria-hidden="true"></i>
        <?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?>
      </a>
      <a href="/contact/" class="btn-cta-white">
        <i data-lucide="calendar" aria-hidden="true"></i>
        Request Free Estimate
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

<!-- ─── Why Choose a Specialist ───────────────────────────────────────────── -->
<section class="why-specialist" aria-labelledby="specialist-heading">
  <div class="container">
    <span class="section-label">
      <i data-lucide="award" aria-hidden="true"></i>
      The Greener Grass Difference
    </span>
    <h2 id="specialist-heading">Why Fort Worth Homeowners Choose an Irrigation Specialist Over a General Landscaper</h2>

    <div class="why-specialist-grid">

      <!-- Featured/large card ── -->
      <div class="specialist-feature" data-animate="fade-up">
        <div>
          <div class="feature-icon"><i data-lucide="map-pin" aria-hidden="true"></i></div>
          <h3>North Texas Clay Soil Expertise — Not Textbook Knowledge</h3>
          <p>
            Tarrant County's Blackland Prairie clay does things to irrigation systems that don't happen in Houston or Austin. It contracts 2–4 inches in July drought, then re-expands after fall rain — cracking PVC fittings, shifting valve boxes, and collapsing drain areas. After <?php echo $yearsInBusiness; ?> years of Fort Worth installs and repairs, we design around this from day one — choosing flex joints at transitions, adjusting burial depths, and specifying pipe schedules that survive the movement. A general landscaper who does irrigation on the side doesn't know any of that.
          </p>
        </div>
        <div class="specialist-stat">
          <div class="stat-value"><?php echo $jobsCompleted; ?></div>
          <div class="stat-desc">Irrigation jobs completed in<br>Fort Worth &amp; Tarrant County<br>since <?php echo $yearFounded; ?></div>
        </div>
      </div>

      <!-- Compact cards ── -->
      <div class="specialist-card" data-animate="fade-up">
        <div class="specialist-card-icon"><i data-lucide="file-text" aria-hidden="true"></i></div>
        <h3>Texas Irrigator License — Required by State Law</h3>
        <p>Any irrigation installation or repair in Texas must be performed by or under the direct supervision of a licensed irrigator. We carry that license. Many landscapers don't — putting homeowners at liability risk and voiding manufacturer warranties.</p>
      </div>

      <div class="specialist-card" data-animate="fade-up">
        <div class="specialist-card-icon"><i data-lucide="truck" aria-hidden="true"></i></div>
        <h3>Fully Stocked Trucks — Most Repairs Done Same Visit</h3>
        <p>We stock heads from Rain Bird, Hunter, and Toro, valve solenoids, PVC fittings, poly pipe, wire connectors, and common controller modules in every truck. Over 90% of Fort Worth service calls are completed on the first visit without a parts run.</p>
      </div>

      <div class="specialist-card" data-animate="fade-up">
        <div class="specialist-card-icon"><i data-lucide="calendar-check" aria-hidden="true"></i></div>
        <h3>Seasonal Coverage — Not Just Emergency Calls</h3>
        <p>Our clients stay covered year-round: spring startup in March, mid-summer zone checks in July, winterization in November. Proactive maintenance clients skip the late-spring backlog that hits every irrigation company when Fort Worth temps crack 90°F in May.</p>
      </div>

    </div>
  </div>
</section>

<!-- Service Area Strip ── -->
<div class="area-strip" aria-label="Cities served in Tarrant County">
  <div class="container area-strip-inner">
    <span class="area-strip-label">
      <i data-lucide="map-pin" aria-hidden="true"></i>
      We Serve
    </span>
    <div class="area-tags" role="list">
      <?php foreach ($serviceAreas as $area): ?>
      <span class="area-tag" role="listitem">
        <?php echo htmlspecialchars($area['city'] . ', ' . $area['state'], ENT_QUOTES, 'UTF-8'); ?>
      </span>
      <?php endforeach; ?>
    </div>
    <a href="/service-area/" style="color: var(--color-accent); font-family: var(--font-heading); font-size: var(--font-size-sm); font-weight: 600; white-space: nowrap; flex-shrink: 0;">View Full Area →</a>
  </div>
</div>

<!-- ─── Closing CTA + Form (CTA #3) ──────────────────────────────────────── -->
<section class="closing-cta-section" aria-labelledby="closing-cta-heading">
  <div class="container closing-inner">

    <div class="closing-text" data-animate="fade-up">
      <h2 id="closing-cta-heading">Ready to Fix It Right? Get Your Free Estimate Today.</h2>
      <p>
        Tell us which service you need — or describe the problem and we'll diagnose it on the call. Fort Worth and Tarrant County homeowners and HOAs, same-week availability most weeks.
      </p>

      <div class="trust-row">
        <span class="trust-badge">
          <i data-lucide="shield-check" aria-hidden="true"></i>
          Licensed &amp; Insured
        </span>
        <span class="trust-badge">
          <i data-lucide="star" aria-hidden="true"></i>
          <?php echo $reviewRating; ?>-Star Rated
        </span>
        <span class="trust-badge">
          <i data-lucide="dollar-sign" aria-hidden="true"></i>
          Free Estimates
        </span>
        <span class="trust-badge">
          <i data-lucide="clock" aria-hidden="true"></i>
          <?php echo $yearsInBusiness; ?> Years Experience
        </span>
      </div>
    </div>

    <div class="closing-form" data-animate="fade-up">
      <h3>Request a Free Estimate</h3>
      <form action="<?php echo htmlspecialchars($formEndpoint, ENT_QUOTES, 'UTF-8'); ?>" method="POST">
        <input type="text"   name="_honey"          style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="hidden" name="_next"            value="/thank-you">
        <input type="hidden" name="_consent_version" value="v2.1">
        <input type="hidden" name="_consent_page"    value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>">

        <div class="form-row">
          <div class="form-field">
            <label for="svc-name">Your Name</label>
            <input type="text" id="svc-name" name="name" required autocomplete="name" placeholder="Jane Smith">
          </div>
          <div class="form-field">
            <label for="svc-phone">Phone Number</label>
            <input type="tel" id="svc-phone" name="phone" required autocomplete="tel" placeholder="(817) 555-0000">
          </div>
          <div class="form-field">
            <label for="svc-email">Email</label>
            <input type="email" id="svc-email" name="email" required autocomplete="email" placeholder="jane@example.com">
          </div>
          <div class="form-field">
            <label for="svc-zip">Zip Code</label>
            <input type="text" id="svc-zip" name="zip" placeholder="76102" inputmode="numeric">
          </div>
          <div class="form-field form-field-full">
            <label for="svc-service">Service Needed</label>
            <select id="svc-service" name="service">
              <option value="">Select a service (optional)</option>
              <?php foreach ($services as $svc): ?>
              <option value="<?php echo htmlspecialchars($svc['name'], ENT_QUOTES, 'UTF-8'); ?>">
                <?php echo htmlspecialchars($svc['name'], ENT_QUOTES, 'UTF-8'); ?>
              </option>
              <?php endforeach; ?>
              <option value="Not Sure — Need Diagnosis">Not Sure — Need Diagnosis</option>
            </select>
          </div>
        </div>

        <button type="submit" class="btn-form-submit">Send My Request</button>
        <p class="form-privacy-note">No spam. We respond same business day. <a href="/privacy-policy/" style="color: var(--color-secondary);">Privacy Policy</a></p>
      </form>
    </div>

  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

</body>
</html>
