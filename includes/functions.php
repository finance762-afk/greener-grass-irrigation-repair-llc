<?php
/**
 * Helper Functions — Greener Grass Irrigation Repair, LLC
 * Include after config.php on every page that needs these helpers.
 */

// ─── Navigation ───────────────────────────────────────────────────────────────

/**
 * Returns 'active' CSS class + aria-current if $page matches $currentPage.
 */
function isActivePage(string $page): string {
    global $currentPage;
    if (isset($currentPage) && $currentPage === $page) {
        return 'active';
    }
    return '';
}

/**
 * Outputs aria-current="page" when $page matches $currentPage.
 */
function ariaCurrent(string $page): string {
    global $currentPage;
    if (isset($currentPage) && $currentPage === $page) {
        return ' aria-current="page"';
    }
    return '';
}

// ─── Formatting ───────────────────────────────────────────────────────────────

/**
 * Formats a raw phone string to (XXX) XXX-XXXX display format.
 */
function formatPhone(string $raw): string {
    $digits = preg_replace('/\D/', '', $raw);
    if (strlen($digits) === 10) {
        return '(' . substr($digits, 0, 3) . ') ' . substr($digits, 3, 3) . '-' . substr($digits, 6);
    }
    if (strlen($digits) === 11 && $digits[0] === '1') {
        $digits = substr($digits, 1);
        return '(' . substr($digits, 0, 3) . ') ' . substr($digits, 3, 3) . '-' . substr($digits, 6);
    }
    return $raw;
}

/**
 * Converts a service name to a URL-safe slug.
 * e.g. "Irrigation System Repair" → "irrigation-system-repair"
 */
function getServiceSlug(string $name): string {
    return strtolower(trim(preg_replace('/[^a-z0-9]+/i', '-', $name), '-'));
}

/**
 * Converts a city name to a URL-safe slug.
 * e.g. "North Richland Hills" → "north-richland-hills"
 */
function getAreaSlug(string $city): string {
    return strtolower(trim(preg_replace('/[^a-z0-9]+/i', '-', $city), '-'));
}

// ─── Schema Generators ───────────────────────────────────────────────────────

/**
 * Generates a Service schema JSON-LD array for a single service.
 *
 * @param array $service  Keys: name, slug, shortDesc
 * @return string         JSON-LD script tag
 */
function generateServiceSchema(array $service): string {
    global $siteName, $siteUrl, $address, $contactPhone;

    $schema = [
        '@context'    => 'https://schema.org',
        '@type'       => 'Service',
        'name'        => $service['name'],
        'description' => $service['shortDesc'],
        'url'         => $siteUrl . '/services/' . $service['slug'] . '/',
        'provider'    => [
            '@type'     => 'LocalBusiness',
            'name'      => $siteName,
            'url'       => $siteUrl,
            'telephone' => $contactPhone,
            'address'   => [
                '@type'           => 'PostalAddress',
                'streetAddress'   => $address['street'],
                'addressLocality' => $address['city'],
                'addressRegion'   => $address['state'],
                'postalCode'      => $address['zip'],
                'addressCountry'  => 'US',
            ],
        ],
        'areaServed'  => [
            '@type' => 'AdministrativeArea',
            'name'  => $address['city'] . ', ' . $address['state'],
        ],
        'serviceType' => $service['name'],
    ];

    return '<script type="application/ld+json">' . "\n" .
           json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) .
           "\n</script>";
}

/**
 * Generates an FAQPage schema JSON-LD block.
 *
 * @param array $faqs  Array of ['q' => '...', 'a' => '...'] pairs
 * @return string      JSON-LD script tag
 */
function generateFAQSchema(array $faqs): string {
    $items = [];
    foreach ($faqs as $faq) {
        $items[] = [
            '@type'          => 'Question',
            'name'           => $faq['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => $faq['a'],
            ],
        ];
    }

    $schema = [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $items,
    ];

    return '<script type="application/ld+json">' . "\n" .
           json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) .
           "\n</script>";
}

// ─── SEO Helpers ─────────────────────────────────────────────────────────────

/**
 * Generates core meta tag HTML for a page.
 * Typically handled by head.php — use this for dynamic overrides only.
 *
 * @param string $title       Full page title (already formatted)
 * @param string $description Meta description (140–160 chars)
 * @param string $canonical   Full canonical URL
 * @return string             HTML meta tag block
 */
function generateMetaTags(string $title, string $description, string $canonical): string {
    $title       = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
    $description = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
    $canonical   = htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8');

    return <<<HTML
<title>{$title}</title>
<meta name="description" content="{$description}">
<link rel="canonical" href="{$canonical}">
HTML;
}

/**
 * Outputs a breadcrumb nav + BreadcrumbList JSON-LD.
 *
 * @param array $crumbs  [['label' => 'Home', 'url' => '/'], ['label' => 'Services', 'url' => '/services/']]
 */
function renderBreadcrumbs(array $crumbs): void {
    global $siteUrl;

    echo '<nav class="breadcrumb-nav" aria-label="Breadcrumb">';
    echo '<ol class="breadcrumb-list">';

    $schemaItems = [];
    $position    = 1;

    foreach ($crumbs as $i => $crumb) {
        $isLast = $i === count($crumbs) - 1;
        $label  = htmlspecialchars($crumb['label'], ENT_QUOTES, 'UTF-8');
        $url    = htmlspecialchars($crumb['url'], ENT_QUOTES, 'UTF-8');

        if ($isLast) {
            echo '<li class="breadcrumb-item current" aria-current="page">' . $label . '</li>';
        } else {
            echo '<li class="breadcrumb-item"><a href="' . $url . '">' . $label . '</a></li>';
            echo '<li class="breadcrumb-sep" aria-hidden="true">/</li>';
        }

        $schemaItems[] = [
            '@type'    => 'ListItem',
            'position' => $position++,
            'name'     => $crumb['label'],
            'item'     => $siteUrl . $crumb['url'],
        ];
    }

    echo '</ol></nav>';

    $schema = [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $schemaItems,
    ];

    echo "\n" . '<script type="application/ld+json">' . "\n" .
         json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) .
         "\n</script>\n";
}
