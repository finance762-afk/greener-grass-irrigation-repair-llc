<?php require_once __DIR__ . "/site-config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
  // ─── SEO Variables (set on each page before including head.php) ───────────
  // Defaults — pages override these before the include
  $pageTitle       = isset($pageTitle)       ? $pageTitle       : $siteName . ' — Irrigation Repair | ' . $address['city'] . ', ' . $address['state'];
  $pageDescription = isset($pageDescription) ? $pageDescription : 'Greener Grass Irrigation Repair serves ' . $address['city'] . ', TX with same-day sprinkler repair, installation, winterization, and backflow testing. Licensed & insured. Call now for a free estimate.';
  $canonicalUrl    = isset($canonicalUrl)    ? $canonicalUrl    : $siteUrl . '/';
  $ogImage         = isset($ogImage)         ? $ogImage         : $siteUrl . '/assets/images/og-image.jpg';
  $noindex         = isset($noindex)         ? $noindex         : false;
  ?>

  <!-- Primary SEO ─────────────────────────────────────────────────────────── -->
  <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">

  <?php if ($noindex): ?>
  <meta name="robots" content="noindex,nofollow">
  <?php else: ?>
  <meta name="robots" content="index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1">
  <?php endif; ?>

  <!-- Open Graph ──────────────────────────────────────────────────────────── -->
  <meta property="og:type"        content="website">
  <meta property="og:title"       content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:url"         content="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:image"       content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:image:width"  content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:site_name"   content="<?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:locale"      content="en_US">

  <!-- Performance Hints ───────────────────────────────────────────────────── -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="dns-prefetch" href="https://fonts.googleapis.com">
  <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
  <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">

  <!-- Google Fonts: Oswald (heading) + Lato (body) ────────────────────────── -->
  <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Lato:wght@300;400;700&display=swap">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Lato:wght@300;400;700&display=swap"
        media="print" onload="this.media='all'">
  <noscript>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Lato:wght@300;400;700&display=swap">
  </noscript>

  <!-- Hero Image Preload (only on pages with hero) ────────────────────────── -->
  <?php if (!isset($noHeroPreload) || !$noHeroPreload): ?>
  <link rel="preload" as="image" href="/assets/images/hero-irrigation.jpg" fetchpriority="high">
  <?php endif; ?>

  <!-- Framework CSS ───────────────────────────────────────────────────────── -->
  <link rel="stylesheet" href="/assets/css/framework.css">

  <!-- Favicons ────────────────────────────────────────────────────────────── -->
  <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
  <link rel="icon" type="image/png"     href="/assets/images/favicon.png">
  <link rel="apple-touch-icon"          href="/assets/images/apple-touch-icon.png">

  <!-- Swiper CSS (conditional — loaded when $useSwiper is true) ───────────── -->
  <?php if (isset($useSwiper) && $useSwiper): ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <?php endif; ?>

  <!-- Google Analytics 4 ──────────────────────────────────────────────────── -->
  <!-- REPLACE G-XXXXXXXXXX with actual GA4 measurement ID before launch -->
  <!--
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-XXXXXXXXXX');
  </script>
  -->

  <!-- Google Search Console Verification (homepage only) ──────────────────── -->
  <?php if (isset($currentPage) && $currentPage === 'home'): ?>
  <!-- <meta name="google-site-verification" content="REPLACE_WITH_GSC_CODE"> -->
  <?php endif; ?>

  <!-- LocalBusiness JSON-LD Schema ────────────────────────────────────────── -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "@id": "<?php echo $siteUrl; ?>/#business",
    "name": "<?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?>",
    "legalName": "<?php echo htmlspecialchars($siteNameFull, ENT_QUOTES, 'UTF-8'); ?>",
    "url": "<?php echo $siteUrl; ?>",
    "telephone": "<?php echo htmlspecialchars($contactPhone, ENT_QUOTES, 'UTF-8'); ?>",
    "email": "<?php echo htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8'); ?>",
    "description": "<?php echo htmlspecialchars($siteName . ' provides irrigation system repair, sprinkler installation, winterization, backflow testing, and smart controller upgrades for residential and commercial properties in Fort Worth, TX and the greater Tarrant County area. Licensed, insured, and serving North Texas since ' . $yearFounded . '.', ENT_QUOTES, 'UTF-8'); ?>",
    "foundingDate": "<?php echo $yearFounded; ?>",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "<?php echo htmlspecialchars($address['street'], ENT_QUOTES, 'UTF-8'); ?>",
      "addressLocality": "<?php echo htmlspecialchars($address['city'], ENT_QUOTES, 'UTF-8'); ?>",
      "addressRegion": "<?php echo htmlspecialchars($address['state'], ENT_QUOTES, 'UTF-8'); ?>",
      "postalCode": "<?php echo htmlspecialchars($address['zip'], ENT_QUOTES, 'UTF-8'); ?>",
      "addressCountry": "US"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": <?php echo $geoLat; ?>,
      "longitude": <?php echo $geoLng; ?>
    },
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
        "opens": "07:00",
        "closes": "18:00"
      },
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": "Saturday",
        "opens": "08:00",
        "closes": "16:00"
      }
    ],
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "<?php echo $reviewRating; ?>",
      "reviewCount": "<?php echo $reviewCount; ?>",
      "bestRating": "5",
      "worstRating": "1"
    },
    "image": "<?php echo $siteUrl; ?>/assets/images/og-image.jpg",
    "logo": "<?php echo $siteUrl; ?>/assets/images/logo.png",
    "priceRange": "$$",
    "paymentAccepted": "Cash, Credit Card, Check",
    "currenciesAccepted": "USD",
    "areaServed": [
      <?php
      $areaJsonParts = [];
      foreach ($serviceAreas as $area) {
          $areaJsonParts[] = '{"@type":"City","name":"' . $area['city'] . ', ' . $area['state'] . '"}';
      }
      echo implode(",\n      ", $areaJsonParts);
      ?>
    ],
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Irrigation Services",
      "itemListElement": [
        <?php
        $serviceJsonParts = [];
        foreach ($services as $svc) {
            $serviceJsonParts[] = '{"@type":"Offer","itemOffered":{"@type":"Service","name":"' . htmlspecialchars($svc['name'], ENT_QUOTES, 'UTF-8') . '","description":"' . htmlspecialchars($svc['shortDesc'], ENT_QUOTES, 'UTF-8') . '"}}';
        }
        echo implode(",\n        ", $serviceJsonParts);
        ?>
      ]
    },
    "sameAs": [
      "<?php echo $social['facebook']; ?>",
      "<?php echo $social['instagram']; ?>",
      "<?php echo $social['google']; ?>"
    ]
  }
  </script>

  <?php if (isset($schemaMarkup) && $schemaMarkup): ?>
  <!-- Page-specific Schema ────────────────────────────────────────────────── -->
  <script type="application/ld+json">
  <?php echo $schemaMarkup; ?>
  </script>
  <?php endif; ?>

<?php require_once __DIR__ . '/edit-mode.php'; ?>
</head>
