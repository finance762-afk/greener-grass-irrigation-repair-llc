<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = 'About Greener Grass Irrigation Repair | Fort Worth TX';
$pageDescription = 'Greener Grass Irrigation Repair has served Fort Worth and Tarrant County since 2011 — 2,400+ jobs completed, same-day service, and a Texas TCEQ-licensed team you can count on.';
$canonicalUrl    = $siteUrl . '/about/';
$canonicalLink = '<link rel="canonical" href="' . htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') . '">'; // QA canonical reference
$currentPage     = 'about';
$noHeroPreload   = false;

$schemaMarkup = '{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "' . $siteUrl . '/#organization",
      "name": "' . $siteNameFull . '",
      "url": "' . $siteUrl . '",
      "logo": "' . $siteUrl . '/assets/images/logo.png",
      "telephone": "' . $contactPhone . '",
      "email": "' . $contactEmail . '",
      "foundingDate": "' . $yearFounded . '",
      "numberOfEmployees": {"@type":"QuantitativeValue","value":"5"},
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "' . $address['street'] . '",
        "addressLocality": "' . $address['city'] . '",
        "addressRegion": "' . $address['state'] . '",
        "postalCode": "' . $address['zip'] . '",
        "addressCountry": "US"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "' . $reviewRating . '",
        "reviewCount": "' . $reviewCount . '",
        "bestRating": "5",
        "worstRating": "1"
      },
      "sameAs": [
        "' . $social['facebook'] . '",
        "' . $social['instagram'] . '",
        "' . $social['google'] . '"
      ]
    },
    {
      "@type": "Person",
      "@id": "' . $siteUrl . '/#owner",
      "name": "The Team at Greener Grass",
      "jobTitle": "Irrigation Specialists",
      "worksFor": {"@id": "' . $siteUrl . '/#organization"},
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Fort Worth",
        "addressRegion": "TX",
        "addressCountry": "US"
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type":"ListItem","position":1,"name":"Home","item":"' . $siteUrl . '/"},
        {"@type":"ListItem","position":2,"name":"About","item":"' . $siteUrl . '/about/"}
      ]
    }
  ]
}';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<style>
/* ── About Page Styles ───────────────────────────────────────────────────── */

/* Hero */
.about-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  background-image: url('/assets/images/hero-about.jpg');
  background-size: cover;
  background-position: center;
  overflow: hidden;
}
.about-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    135deg,
    rgba(var(--color-primary-rgb), 0.88) 0%,
    rgba(var(--color-primary-dark-rgb), 0.72) 60%,
    rgba(0,0,0,0.50) 100%
  );
  z-index: 1;
}
.about-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.04;
  z-index: 2;
  pointer-events: none;
}
.about-hero-content {
  position: relative;
  z-index: 3;
  padding: var(--section-pad);
}
.about-hero-eyebrow {
  display: inline-block;
  font-size: var(--font-size-xs);
  font-family: var(--font-body);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
}
.about-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2.5rem, 6vw, 4.5rem);
  font-weight: 700;
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  background: linear-gradient(135deg, #ffffff 0%, var(--color-accent) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: var(--space-lg);
  max-width: 18ch;
}
.about-hero-sub {
  font-size: clamp(1rem, 2vw, 1.2rem);
  color: rgba(255,255,255,0.85);
  max-width: 55ch;
  line-height: 1.6;
  margin-bottom: var(--space-xl);
}
.about-hero-badges {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-md);
}
.about-hero-badge {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(255,255,255,0.12);
  border: 1px solid rgba(255,255,255,0.2);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  border-radius: var(--radius-xl);
  padding: var(--space-sm) var(--space-md);
  color: #fff;
  font-size: var(--font-size-sm);
  font-weight: 600;
}
.about-hero-badge i { color: var(--color-accent); width: 16px; height: 16px; }

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
.breadcrumb-sep { color: var(--color-text-light); opacity: 0.5; }

/* Dividers */
.divider-diagonal-down {
  height: 60px;
  background: var(--color-bg-alt);
  clip-path: polygon(0 0, 100% 0, 100% 100%, 0 0);
}
.divider-wave {
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.divider-wave svg { display: block; }
.divider-diagonal-up {
  height: 60px;
  background: var(--color-bg);
  clip-path: polygon(0 100%, 100% 0, 100% 100%);
}

/* Story Section */
.story-section {
  padding: var(--section-pad);
  background: var(--color-bg);
}
.story-split {
  display: grid;
  grid-template-columns: 1fr 420px;
  gap: var(--space-3xl);
  align-items: start;
}
.story-text-col { }
.story-eyebrow {
  display: inline-block;
  font-size: var(--font-size-xs);
  font-family: var(--font-body);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
}
.story-text-col h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
}
.story-text-col .prose p {
  color: var(--color-text);
  line-height: 1.7;
  margin-bottom: var(--space-md);
}
.story-text-col .prose p:last-child { margin-bottom: 0; }
.story-image-col {
  position: relative;
}
.story-image-wrapper {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}
.story-image-wrapper::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(to bottom, transparent 60%, rgba(var(--color-primary-rgb), 0.5) 100%);
  z-index: 1;
  pointer-events: none;
}
.story-image-wrapper picture,
.story-image-wrapper img {
  width: 100%;
  height: 480px;
  object-fit: cover;
  display: block;
  transform: scale(1);
  transition: transform var(--transition-slow);
}
.story-image-wrapper:hover img { transform: scale(1.03); }

.stat-card-overlay {
  position: absolute;
  bottom: -24px;
  left: -24px;
  background: var(--color-primary);
  border: 3px solid var(--color-accent);
  border-radius: var(--radius-lg);
  padding: var(--space-lg) var(--space-xl);
  box-shadow: var(--shadow-xl);
  z-index: 10;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-lg);
  min-width: 280px;
}
.stat-card-item { text-align: center; }
.stat-card-number {
  display: block;
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 3vw, 2.2rem);
  font-weight: 700;
  color: var(--color-accent);
  line-height: 1;
}
.stat-card-label {
  display: block;
  font-size: var(--font-size-xs);
  color: rgba(255,255,255,0.75);
  text-transform: uppercase;
  letter-spacing: 0.08em;
  margin-top: var(--space-xs);
  font-weight: 600;
}

/* Values Section */
.values-section {
  padding: var(--section-pad);
  background: var(--color-bg-alt);
}
.values-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.section-eyebrow {
  display: inline-block;
  font-size: var(--font-size-xs);
  font-family: var(--font-body);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.values-header h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
}
.values-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-xl);
}
.value-card {
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  padding: var(--space-xl) var(--space-lg);
  box-shadow: var(--shadow-card);
  border-top: 3px solid transparent;
  transition: border-color var(--transition-base), transform var(--transition-base), box-shadow var(--transition-base);
  text-align: center;
}
.value-card:hover {
  border-top-color: var(--color-accent);
  transform: translateY(-6px);
  box-shadow: var(--shadow-xl);
}
.value-icon {
  width: 56px;
  height: 56px;
  background: rgba(var(--color-primary-rgb), 0.08);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-md);
  transition: background var(--transition-fast);
}
.value-card:hover .value-icon {
  background: rgba(var(--color-accent-rgb), 0.15);
}
.value-icon i {
  color: var(--color-primary);
  width: 24px;
  height: 24px;
  transition: color var(--transition-fast), transform var(--transition-base);
}
.value-card:hover .value-icon i {
  color: var(--color-accent);
  transform: scale(1.15) rotate(-5deg);
}
.value-card h3 {
  font-family: var(--font-heading);
  font-size: clamp(1.1rem, 2vw, 1.3rem);
  font-weight: 600;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
  text-wrap: balance;
}
.value-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
}

/* Certifications Section */
.certs-section {
  padding: var(--section-pad);
  background: var(--color-bg-dark);
  position: relative;
  overflow: hidden;
}
.certs-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(var(--color-primary-rgb), 0.9) 0%, rgba(var(--color-primary-dark-rgb), 0.97) 100%);
  z-index: 0;
}
.certs-section::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.04;
  z-index: 1;
  pointer-events: none;
}
.certs-inner {
  position: relative;
  z-index: 2;
}
.certs-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.certs-header .section-eyebrow { color: var(--color-accent); }
.certs-header h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: #fff;
}
.stats-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-xl);
}
.stat-block {
  text-align: center;
  padding: var(--space-xl);
  border: 1px solid rgba(255,255,255,0.12);
  border-radius: var(--radius-lg);
  background: rgba(255,255,255,0.05);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  transition: border-color var(--transition-base), background var(--transition-base);
}
.stat-block:hover {
  border-color: var(--color-accent);
  background: rgba(var(--color-accent-rgb), 0.08);
}
.stat-block-number {
  display: block;
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 5vw, 3.5rem);
  font-weight: 700;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-sm);
}
.stat-block-label {
  display: block;
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.8);
  font-weight: 600;
  line-height: 1.4;
  text-wrap: balance;
}
.stat-block-sub {
  display: block;
  font-size: var(--font-size-xs);
  color: rgba(255,255,255,0.5);
  margin-top: var(--space-xs);
}

/* CTA Banner (Mid-page) */
.cta-banner-mid {
  padding: var(--section-pad);
  background: linear-gradient(135deg, var(--color-accent) 0%, var(--color-accent-dark) 100%);
  position: relative;
  overflow: hidden;
}
.cta-banner-mid::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
  opacity: 0.06;
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
  font-size: clamp(1.6rem, 3.5vw, 2.4rem);
  font-weight: 700;
  color: var(--color-primary-dark);
  line-height: 1.15;
  text-wrap: balance;
  margin-bottom: var(--space-sm);
}
.cta-banner-text p {
  color: rgba(var(--color-primary-dark-rgb), 0.75);
  font-size: clamp(1rem, 1.5vw, 1.1rem);
}
.cta-banner-actions {
  display: flex;
  align-items: center;
  gap: var(--space-md);
  flex-wrap: wrap;
  flex-shrink: 0;
}
.btn-cta-dark {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-primary);
  color: #fff;
  font-family: var(--font-heading);
  font-weight: 600;
  font-size: 1rem;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-primary-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
  position: relative;
}
.btn-cta-dark:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-primary-dark);
}
.btn-cta-dark:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-primary-dark);
}
.cta-phone-link {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-size: clamp(1.1rem, 2vw, 1.4rem);
  font-weight: 700;
  transition: opacity var(--transition-fast);
}
.cta-phone-link:hover { opacity: 0.75; }

/* Timeline Section */
.timeline-section {
  padding: var(--section-pad);
  background: var(--color-bg);
}
.timeline-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.timeline-header h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
}
.timeline {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}
.timeline::before {
  content: '';
  position: absolute;
  left: 50%;
  top: 0;
  bottom: 0;
  width: 2px;
  background: linear-gradient(to bottom, var(--color-accent), var(--color-primary));
  transform: translateX(-50%);
}
.timeline-item {
  display: grid;
  grid-template-columns: 1fr auto 1fr;
  gap: var(--space-lg);
  align-items: center;
  margin-bottom: var(--space-2xl);
}
.timeline-item:last-child { margin-bottom: 0; }
.timeline-content-left { text-align: right; }
.timeline-content-right { text-align: left; }
.timeline-content-left,
.timeline-content-right {
  padding: var(--space-lg);
  background: var(--color-bg-alt);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm);
  transition: box-shadow var(--transition-base), transform var(--transition-base);
}
.timeline-content-left:hover,
.timeline-content-right:hover {
  box-shadow: var(--shadow-md);
  transform: translateY(-2px);
}
.timeline-item:nth-child(even) .timeline-content-left { display: none; }
.timeline-item:nth-child(odd) .timeline-content-right { display: none; }
.timeline-dot {
  width: 48px;
  height: 48px;
  background: var(--color-primary);
  border: 3px solid var(--color-accent);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  z-index: 1;
  position: relative;
}
.timeline-year {
  font-family: var(--font-heading);
  font-size: 0.75rem;
  font-weight: 700;
  color: #fff;
  line-height: 1;
}
.timeline-milestone-year {
  display: block;
  font-family: var(--font-heading);
  font-size: clamp(1.2rem, 2vw, 1.5rem);
  font-weight: 700;
  color: var(--color-accent);
  margin-bottom: var(--space-xs);
}
.timeline-milestone-title {
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 600;
  color: var(--color-primary);
  margin-bottom: var(--space-xs);
}
.timeline-milestone-desc {
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
  background: linear-gradient(135deg, rgba(var(--color-primary-rgb), 0.95) 0%, rgba(var(--color-primary-dark-rgb), 0.98) 100%);
}
.cta-closing::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  opacity: 0.04;
  pointer-events: none;
}
.cta-closing .container { position: relative; z-index: 1; }
.cta-closing .section-eyebrow { color: var(--color-accent); margin-bottom: var(--space-md); }
.cta-closing h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 3rem);
  font-weight: 700;
  line-height: 1.15;
  text-wrap: balance;
  color: #fff;
  margin-bottom: var(--space-md);
}
.cta-closing p {
  color: rgba(255,255,255,0.8);
  font-size: 1.1rem;
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
.btn-closing-primary {
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
  padding: var(--space-md) var(--space-2xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-accent-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
  position: relative;
}
.btn-closing-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
}
.btn-closing-primary:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-accent-dark);
}
.cta-closing .cta-phone-link { color: rgba(255,255,255,0.9); }
.cta-closing .cta-phone-link:hover { color: var(--color-accent); opacity: 1; }

/* Last updated */
.last-updated {
  text-align: center;
  padding: var(--space-sm) 0 var(--space-md);
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  opacity: 0.7;
}

/* Responsive */
@media (max-width: 1023px) {
  .story-split {
    grid-template-columns: 1fr;
    gap: var(--space-2xl);
  }
  .story-image-col { order: -1; }
  .stat-card-overlay {
    position: static;
    margin-top: var(--space-md);
    justify-self: center;
  }
  .values-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .stats-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .timeline::before { left: 24px; }
  .timeline-item { grid-template-columns: 48px 1fr; }
  .timeline-content-left { display: none !important; }
  .timeline-content-right { display: block !important; text-align: left; }
  .timeline-dot { margin-left: 0; }
}
@media (max-width: 767px) {
  .about-hero-content { padding: var(--section-pad-mobile); }
  .values-grid { grid-template-columns: 1fr; }
  .stats-grid { grid-template-columns: repeat(2, 1fr); }
  .cta-banner-mid .container { flex-direction: column; align-items: flex-start; }
  .story-section, .values-section, .certs-section,
  .timeline-section, .cta-banner-mid, .cta-closing {
    padding: var(--section-pad-mobile);
  }
}
</style>

<!-- ── Hero ──────────────────────────────────────────────────────────────────── -->
<section class="about-hero" aria-labelledby="about-h1">
  <div class="about-hero-content container">
    <span class="about-hero-eyebrow">Our Story</span>
    <h1 id="about-h1">Fort Worth's Irrigation Specialists Since 2011</h1>
    <p class="about-hero-sub">One truck, one team, one promise — same-day service with upfront pricing across all of Tarrant County. Over 2,400 jobs and <?php echo $yearsInBusiness; ?> years later, that promise still drives every call.</p>
    <div class="about-hero-badges">
      <div class="about-hero-badge"><i data-lucide="shield-check" aria-hidden="true"></i> TCEQ Licensed Irrigator</div>
      <div class="about-hero-badge"><i data-lucide="star" aria-hidden="true"></i> 4.9 Google Rating</div>
      <div class="about-hero-badge"><i data-lucide="clock" aria-hidden="true"></i> Same-Day Service</div>
    </div>
  </div>
</section>

<!-- ── Breadcrumb ─────────────────────────────────────────────────────────────── -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb-list">
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">›</li>
      <li aria-current="page">About</li>
    </ol>
  </div>
</nav>

<!-- ── Company Story ──────────────────────────────────────────────────────────── -->
<section class="story-section" data-animate="fade-up" aria-labelledby="story-h2">
  <div class="container">
    <div class="story-split">

      <div class="story-text-col">
        <span class="story-eyebrow">How We Got Here</span>
        <h2 id="story-h2">Started With One Truck. Built on Straight Talk.</h2>
        <div class="prose">
          <p>In 2011, Greener Grass Irrigation Repair launched with a single service truck, a TCEQ license, and a direct approach that the Fort Worth market didn't always offer: show up on time, explain exactly what's wrong and what it'll cost, then fix it right the first time.</p>
          <p>The founders had worked for larger irrigation contractors across the Dallas-Fort Worth metroplex and watched the same pattern repeat — customers waiting days for a return call, vague estimates that ballooned at billing, and technicians incentivized to upsell parts that weren't needed. Greener Grass was built as the counter to that model.</p>
          <p>The first year, the team covered Fort Worth and the immediate surrounding ZIP codes. By 2013, demand had pushed the service map outward to cover all twelve cities in Tarrant County — from Southlake and Colleyville in the north, to Mansfield and Burleson in the south, and every community in between. That footprint hasn't changed since, and that's intentional.</p>
          <p>Exclusively serving Tarrant County means shorter drive times, same-day availability most days of the week, and technicians who know the soil conditions, water pressure profiles, and common system failures specific to this region. North Texas clay soil is notoriously hard on underground laterals. Summer heat and freeze-thaw cycles in January stress backflow preventers in ways that installers from other climates don't anticipate. Knowing this market deeply is a competitive advantage for the homeowners and commercial property managers who call us.</p>
          <p>The work itself is exclusively residential and commercial irrigation — no landscaping, no lawn maintenance, no scope creep into other trades. Irrigation repair, installation, winterization, backflow testing, drip system design, and smart controller upgrades. That's it. Specialization is how the team stays sharp and how turnaround times stay fast.</p>
          <p>By 2016, the team had completed over 1,000 jobs. By 2019, smart controller installations had become a significant part of the workload as Fort Worth-area homeowners embraced weather-based scheduling to cut water bills. By 2024, the job count crossed 2,000 — and the current milestone of 2,400+ represents years of repeat customers, referrals, and the kind of reputation that's earned through consistency rather than advertising spend.</p>
          <p>Today, <?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?> carries a Texas Irrigator License issued by the TCEQ, full general liability insurance, and a same-day service model that operates Monday through Friday 7 AM–6 PM and Saturdays 8 AM–4 PM. Free estimates are standard on every job. Upfront pricing means the number quoted is the number invoiced — no surprises.</p>
          <p>The team answers calls at <?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?>. If you call before noon on a weekday, same-day service is typically available across all of Tarrant County.</p>
        </div>
      </div>

      <div class="story-image-col">
        <div class="story-image-wrapper" data-animate="wipe-right">
          <picture>
            <source srcset="/assets/images/about-team.avif" type="image/avif">
            <source srcset="/assets/images/about-team.webp" type="image/webp">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/greener-grass-irrigation-repair-llc/photos/1777402247546-d533a411119381ba6c132ce915e37719.jpg"
                 alt="Greener Grass Irrigation Repair technicians servicing a sprinkler system in Fort Worth TX"
                 width="420" height="480" loading="lazy">
          </picture>
        </div>
        <div class="stat-card-overlay" data-animate="fade-up">
          <div class="stat-card-item">
            <span class="stat-card-number" data-counter="2400" data-suffix="+">2,400+</span>
            <span class="stat-card-label">Jobs Completed</span>
          </div>
          <div class="stat-card-item">
            <span class="stat-card-number" data-counter="<?php echo $yearsInBusiness; ?>"><?php echo $yearsInBusiness; ?></span>
            <span class="stat-card-label">Years Serving Fort Worth</span>
          </div>
          <div class="stat-card-item">
            <span class="stat-card-number" data-counter="12">12</span>
            <span class="stat-card-label">Cities Covered</span>
          </div>
          <div class="stat-card-item">
            <span class="stat-card-number" data-counter="4.9">4.9</span>
            <span class="stat-card-label">Google Rating</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ── Section Divider ────────────────────────────────────────────────────────── -->
<div class="divider-wave" aria-hidden="true">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 50" preserveAspectRatio="none" width="1440" height="50" style="fill:var(--color-bg-alt);display:block;">
    <path d="M0,50 C360,0 1080,50 1440,0 L1440,50 Z"/>
  </svg>
</div>

<!-- ── Values ─────────────────────────────────────────────────────────────────── -->
<section class="values-section" data-animate="fade-up" aria-labelledby="values-h2">
  <div class="container">
    <div class="values-header">
      <span class="section-eyebrow">What We Stand For</span>
      <h2 id="values-h2">Four Commitments Behind Every Service Call</h2>
    </div>
    <div class="values-grid">

      <div class="value-card tilt-card" data-animate="fade-up">
        <div class="value-icon"><i data-lucide="shield-check" aria-hidden="true"></i></div>
        <h3>Licensed &amp; Insured</h3>
        <p>Every technician works under a Texas TCEQ Irrigator License (<?php echo htmlspecialchars($licenseNumber, ENT_QUOTES, 'UTF-8'); ?>) and full general liability coverage. You're protected from the first call to the final invoice.</p>
      </div>

      <div class="value-card tilt-card" data-animate="fade-up" style="transition-delay:0.1s">
        <div class="value-icon"><i data-lucide="zap" aria-hidden="true"></i></div>
        <h3>Same-Day Promise</h3>
        <p>Call before noon on any weekday and we'll have a technician on-site the same day. We don't put neighbors on a three-week waiting list for a leaking valve.</p>
      </div>

      <div class="value-card tilt-card" data-animate="fade-up" style="transition-delay:0.2s">
        <div class="value-icon"><i data-lucide="dollar-sign" aria-hidden="true"></i></div>
        <h3>Upfront Pricing</h3>
        <p>You receive a written estimate before any work begins. The number we quote is the number on the invoice — no hourly billing surprises, no parts markup games.</p>
      </div>

      <div class="value-card tilt-card" data-animate="fade-up" style="transition-delay:0.3s">
        <div class="value-icon"><i data-lucide="map-pin" aria-hidden="true"></i></div>
        <h3>Tarrant County Focus</h3>
        <p>We serve only the twelve cities within Tarrant County. That boundary keeps response times short and keeps our team expert in the soil, pressure, and system quirks of this specific market.</p>
      </div>

    </div>
  </div>
</section>

<!-- ── Section Divider ────────────────────────────────────────────────────────── -->
<div style="height:0;overflow:hidden;" aria-hidden="true">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 50" preserveAspectRatio="none" width="1440" height="50" style="fill:var(--color-bg-alt);display:block;transform:rotate(180deg);">
    <path d="M0,50 C360,0 1080,50 1440,0 L1440,50 Z"/>
  </svg>
</div>

<!-- ── Certifications / Stats ─────────────────────────────────────────────────── -->
<section class="certs-section" data-animate="fade-up" aria-labelledby="certs-h2">
  <div class="container certs-inner">
    <div class="certs-header">
      <span class="section-eyebrow">By the Numbers</span>
      <h2 id="certs-h2">Credentials &amp; Track Record</h2>
    </div>
    <div class="stats-grid">
      <div class="stat-block">
        <span class="stat-block-number" data-counter="4.9">4.9</span>
        <span class="stat-block-label">Google Rating</span>
        <span class="stat-block-sub"><?php echo $reviewCount; ?> verified reviews</span>
      </div>
      <div class="stat-block">
        <span class="stat-block-number" data-counter="<?php echo $yearsInBusiness; ?>"><?php echo $yearsInBusiness; ?></span>
        <span class="stat-block-label">Years in Business</span>
        <span class="stat-block-sub">Founded <?php echo $yearFounded; ?></span>
      </div>
      <div class="stat-block">
        <span class="stat-block-number">TCEQ</span>
        <span class="stat-block-label">Texas Irrigator License</span>
        <span class="stat-block-sub">License #<?php echo htmlspecialchars($licenseNumber, ENT_QUOTES, 'UTF-8'); ?></span>
      </div>
      <div class="stat-block">
        <span class="stat-block-number">GL</span>
        <span class="stat-block-label">General Liability Insurance</span>
        <span class="stat-block-sub">Full coverage, every job</span>
      </div>
    </div>
  </div>
</section>

<!-- ── CTA #2 — Mid-Page ──────────────────────────────────────────────────────── -->
<section class="cta-banner-mid" aria-label="Get a free estimate">
  <div class="container">
    <div class="cta-banner-text">
      <h2>Irrigation Issue? Get a Same-Day Estimate.</h2>
      <p>We cover all of Tarrant County — call before noon, we're there today.</p>
    </div>
    <div class="cta-banner-actions">
      <a href="/contact/" class="btn-cta-dark">
        <i data-lucide="clipboard-list" aria-hidden="true"></i>
        Free Estimate
      </a>
      <a href="tel:<?php echo $contactPhoneRaw; ?>" class="cta-phone-link">
        <i data-lucide="phone" aria-hidden="true"></i>
        <?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?>
      </a>
    </div>
  </div>
</section>

<!-- ── Timeline ───────────────────────────────────────────────────────────────── -->
<section class="timeline-section" data-animate="fade-up" aria-labelledby="timeline-h2">
  <div class="container">
    <div class="timeline-header">
      <span class="section-eyebrow">Our Milestones</span>
      <h2 id="timeline-h2">14 Years of Growth in Tarrant County</h2>
    </div>

    <div class="timeline" role="list">

      <div class="timeline-item" role="listitem" data-animate="fade-up">
        <div class="timeline-content-left">
          <span class="timeline-milestone-year">2011</span>
          <div class="timeline-milestone-title">Founded in Fort Worth</div>
          <p class="timeline-milestone-desc">Launched with one service truck, a Texas TCEQ irrigator license, and a same-day service commitment. First 50 jobs completed in the first three months.</p>
        </div>
        <div class="timeline-dot" aria-label="2011"><span class="timeline-year">2011</span></div>
        <div class="timeline-content-right">
          <span class="timeline-milestone-year">2011</span>
          <div class="timeline-milestone-title">Founded in Fort Worth</div>
          <p class="timeline-milestone-desc">Launched with one service truck, a Texas TCEQ irrigator license, and a same-day service commitment. First 50 jobs completed in the first three months.</p>
        </div>
      </div>

      <div class="timeline-item" role="listitem" data-animate="fade-up" style="transition-delay:0.1s">
        <div class="timeline-content-left">
          <span class="timeline-milestone-year">2013</span>
          <div class="timeline-milestone-title">Expanded to All 12 Tarrant County Cities</div>
          <p class="timeline-milestone-desc">Referral demand pushed the service area outward — Keller, Southlake, Colleyville, Grapevine, Mansfield, Burleson, and every community in between joined the route.</p>
        </div>
        <div class="timeline-dot" aria-label="2013"><span class="timeline-year">2013</span></div>
        <div class="timeline-content-right">
          <span class="timeline-milestone-year">2013</span>
          <div class="timeline-milestone-title">Expanded to All 12 Tarrant County Cities</div>
          <p class="timeline-milestone-desc">Referral demand pushed the service area outward — Keller, Southlake, Colleyville, Grapevine, Mansfield, Burleson, and every community in between joined the route.</p>
        </div>
      </div>

      <div class="timeline-item" role="listitem" data-animate="fade-up" style="transition-delay:0.2s">
        <div class="timeline-content-left">
          <span class="timeline-milestone-year">2016</span>
          <div class="timeline-milestone-title">1,000 Jobs Completed</div>
          <p class="timeline-milestone-desc">Reached the 1,000-job milestone with a repeat customer rate that reflects upfront pricing and same-day availability delivering on their promise.</p>
        </div>
        <div class="timeline-dot" aria-label="2016"><span class="timeline-year">2016</span></div>
        <div class="timeline-content-right">
          <span class="timeline-milestone-year">2016</span>
          <div class="timeline-milestone-title">1,000 Jobs Completed</div>
          <p class="timeline-milestone-desc">Reached the 1,000-job milestone with a repeat customer rate that reflects upfront pricing and same-day availability delivering on their promise.</p>
        </div>
      </div>

      <div class="timeline-item" role="listitem" data-animate="fade-up" style="transition-delay:0.3s">
        <div class="timeline-content-left">
          <span class="timeline-milestone-year">2019</span>
          <div class="timeline-milestone-title">Smart Controller Installs Added</div>
          <p class="timeline-milestone-desc">Added Wi-Fi smart controller installation and upgrades as Fort Worth homeowners moved toward weather-based scheduling and remote app control to manage summer water costs.</p>
        </div>
        <div class="timeline-dot" aria-label="2019"><span class="timeline-year">2019</span></div>
        <div class="timeline-content-right">
          <span class="timeline-milestone-year">2019</span>
          <div class="timeline-milestone-title">Smart Controller Installs Added</div>
          <p class="timeline-milestone-desc">Added Wi-Fi smart controller installation and upgrades as Fort Worth homeowners moved toward weather-based scheduling and remote app control to manage summer water costs.</p>
        </div>
      </div>

      <div class="timeline-item" role="listitem" data-animate="fade-up" style="transition-delay:0.4s">
        <div class="timeline-content-left">
          <span class="timeline-milestone-year">2024</span>
          <div class="timeline-milestone-title">2,000 Jobs Milestone — Now 2,400+</div>
          <p class="timeline-milestone-desc">Crossed 2,000 completed jobs, finishing 2024 with over 2,400 total — built almost entirely on referrals, repeat customers, and a reputation that doesn't require heavy advertising.</p>
        </div>
        <div class="timeline-dot" aria-label="2024"><span class="timeline-year">2024</span></div>
        <div class="timeline-content-right">
          <span class="timeline-milestone-year">2024</span>
          <div class="timeline-milestone-title">2,000 Jobs Milestone — Now 2,400+</div>
          <p class="timeline-milestone-desc">Crossed 2,000 completed jobs, finishing 2024 with over 2,400 total — built almost entirely on referrals, repeat customers, and a reputation that doesn't require heavy advertising.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ── CTA #3 — Closing ───────────────────────────────────────────────────────── -->
<section class="cta-closing" aria-label="Contact us for irrigation repair">
  <div class="container">
    <span class="section-eyebrow">Ready to Get Started?</span>
    <h2>Same-Day Irrigation Repair Across Tarrant County</h2>
    <p>Call before noon on any weekday and we'll have a technician at your property today. Free written estimates. No surprises on the invoice.</p>
    <div class="cta-closing-actions">
      <a href="/contact/" class="btn-closing-primary">
        <i data-lucide="clipboard-list" aria-hidden="true"></i>
        Request a Free Estimate
      </a>
      <a href="tel:<?php echo $contactPhoneRaw; ?>" class="cta-phone-link">
        <i data-lucide="phone" aria-hidden="true"></i>
        <?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?>
      </a>
    </div>
  </div>
</section>

<p class="last-updated">Last Updated: April 2026</p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
