<?php
/**
 * Site Configuration — Greener Grass Irrigation Repair, LLC
 * Generated: Phase 1 / Build System
 * Slug: greener-grass-irrigation-repair-llc
 *
 * All pages include this file via:
 *   require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
 */

// ─── Business Identity ────────────────────────────────────────────────────────
$siteName        = 'Greener Grass Irrigation Repair';
$siteNameFull    = 'Greener Grass Irrigation Repair, LLC';
$entityType      = 'Limited Liability Company';
$stateOfFormation = 'Texas';
$tagline         = 'Repair It Right. Keep It Green.';
$siteUrl         = 'https://www.greenergrass.com';
$clientSlug      = 'greener-grass-irrigation-repair-llc';

// ─── Contact ──────────────────────────────────────────────────────────────────
$contactPhone    = '(817) 555-0100';
$contactPhoneRaw = '8175550100';
$contactEmail    = 'info@greenergrass.com';
$businessAddress = '1234 Sprinkler Way, Fort Worth, TX 76102';

// ─── Address (structured) ─────────────────────────────────────────────────────
$address = [
    'street' => '1234 Sprinkler Way',
    'city'   => 'Fort Worth',
    'state'  => 'TX',
    'zip'    => '76102',
];

// ─── Geo Coordinates ─────────────────────────────────────────────────────────
$geoLat = 32.7555;
$geoLng = -97.3308;

// ─── Business Hours ───────────────────────────────────────────────────────────
$businessHours = [
    'Monday'    => '7:00 AM – 6:00 PM',
    'Tuesday'   => '7:00 AM – 6:00 PM',
    'Wednesday' => '7:00 AM – 6:00 PM',
    'Thursday'  => '7:00 AM – 6:00 PM',
    'Friday'    => '7:00 AM – 6:00 PM',
    'Saturday'  => '8:00 AM – 4:00 PM',
    'Sunday'    => 'Closed',
];

// Schema-formatted hours (OpeningHoursSpecification)
$schemaHours = [
    'Mo-Fr 07:00-18:00',
    'Sa 08:00-16:00',
];

// ─── Company History ──────────────────────────────────────────────────────────
$yearFounded       = 2011;
$yearsInBusiness   = 14;
$licenseNumber     = 'LI-XXXXXX';
$jobsCompleted     = '2,400+';
$reviewCount       = 127;
$reviewRating      = 4.9;
$reviewPlatform    = 'Google';

// ─── Design Tokens ────────────────────────────────────────────────────────────
$colorPrimary    = '#1b4332';
$colorPrimaryDark = '#0d2117';
$colorAccent     = '#8dc63f';
$fontHeading     = "'Oswald', system-ui, sans-serif";
$fontBody        = "'Lato', system-ui, sans-serif";

// ─── Services ─────────────────────────────────────────────────────────────────
$services = [
    [
        'name'      => 'Irrigation System Repair',
        'slug'      => 'irrigation-system-repair',
        'shortDesc' => 'Fast diagnosis and repair of broken irrigation systems — valves, controllers, pipes, and heads.',
        'icon'      => 'wrench',
    ],
    [
        'name'      => 'Sprinkler Head Replacement',
        'slug'      => 'sprinkler-head-replacement',
        'shortDesc' => 'Replace worn, broken, or misaligned sprinkler heads to restore even coverage across your lawn.',
        'icon'      => 'droplets',
    ],
    [
        'name'      => 'System Installation',
        'slug'      => 'system-installation',
        'shortDesc' => 'Complete in-ground irrigation system design and installation for residential and commercial properties.',
        'icon'      => 'hammer',
    ],
    [
        'name'      => 'Winterization & Blowout',
        'slug'      => 'winterization-blowout',
        'shortDesc' => 'Protect your system from freeze damage with a thorough compressed-air blowout before winter.',
        'icon'      => 'snowflake',
    ],
    [
        'name'      => 'Spring System Startup',
        'slug'      => 'spring-startup',
        'shortDesc' => 'Full spring inspection, zone testing, and controller programming to get your system running right.',
        'icon'      => 'sun',
    ],
    [
        'name'      => 'Backflow Testing & Repair',
        'slug'      => 'backflow-testing-repair',
        'shortDesc' => 'Licensed backflow preventer testing and repair to keep your water supply safe and code-compliant.',
        'icon'      => 'shield-check',
    ],
    [
        'name'      => 'Drip Irrigation',
        'slug'      => 'drip-irrigation',
        'shortDesc' => 'Water-efficient drip systems for beds, shrubs, and gardens — designed and installed to spec.',
        'icon'      => 'leaf',
    ],
    [
        'name'      => 'Smart Controller Upgrades',
        'slug'      => 'smart-controller-upgrades',
        'shortDesc' => 'Upgrade to a Wi-Fi smart controller for weather-based scheduling and remote app control.',
        'icon'      => 'wifi',
    ],
    [
        'name'      => 'Leak Detection & Repair',
        'slug'      => 'leak-detection-repair',
        'shortDesc' => 'Locate and fix underground irrigation leaks before they become costly water waste.',
        'icon'      => 'search',
    ],
];

// ─── Primary (featured) services for homepage ─────────────────────────────────
$primaryServices = array_slice($services, 0, 6);

// ─── Service Areas ────────────────────────────────────────────────────────────
$serviceAreas = [
    ['city' => 'Fort Worth',          'state' => 'TX'],
    ['city' => 'Arlington',           'state' => 'TX'],
    ['city' => 'Keller',              'state' => 'TX'],
    ['city' => 'Southlake',           'state' => 'TX'],
    ['city' => 'Colleyville',         'state' => 'TX'],
    ['city' => 'Grapevine',           'state' => 'TX'],
    ['city' => 'North Richland Hills','state' => 'TX'],
    ['city' => 'Hurst',               'state' => 'TX'],
    ['city' => 'Euless',              'state' => 'TX'],
    ['city' => 'Bedford',             'state' => 'TX'],
    ['city' => 'Mansfield',           'state' => 'TX'],
    ['city' => 'Burleson',            'state' => 'TX'],
];

$primaryServiceArea = 'Fort Worth, TX and the Greater Tarrant County area';
$serviceAreaShort   = 'Tarrant County, TX';

// ─── Social / Review Profiles ─────────────────────────────────────────────────
$social = [
    'facebook'  => 'https://www.facebook.com/greenergrass',
    'instagram' => 'https://www.instagram.com/greenergrass',
    'google'    => 'https://g.page/greenergrass',
];

// ─── Analytics ────────────────────────────────────────────────────────────────
$ga4Id           = 'G-XXXXXXXXXX';
$gscVerification = '';

// ─── Images ───────────────────────────────────────────────────────────────────
$heroImage = '/assets/images/hero-irrigation.jpg';
$ogImage   = $siteUrl . '/assets/images/og-image.jpg';
$logoSvg   = '/assets/images/logo.svg';
$logoPng   = '/assets/images/logo.png';

// ─── Lead Form Endpoint ───────────────────────────────────────────────────────
$formEndpoint = 'https://db.pageone.cloud/functions/v1/leads/' . $clientSlug;
