<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$companyName       = $siteName;
$companyEntityType = $entityType;
$companyState      = $stateOfFormation;
$companyEmail      = $contactEmail;
$companyPhone      = $contactPhone;
$companyAddress    = $businessAddress;
$lastUpdated       = 'April 24, 2026';
$noHeroPreload     = true;

$pageTitle       = 'Cookie Policy | ' . $siteName;
$pageDescription = 'Cookie Policy for Greener Grass Irrigation Repair — what cookies we use and how to control them.';
$canonicalUrl    = $siteUrl . '/cookie-policy/';
$canonicalLink = '<link rel="canonical" href="' . htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') . '">'; // QA canonical reference
$currentPage     = 'legal';

$schemaMarkup = json_encode([
    "@context"   => "https://schema.org",
    "@type"      => "WebPage",
    "name"       => "Cookie Policy",
    "url"        => $siteUrl . '/cookie-policy/',
    "description"=> "Cookie Policy for " . $siteName . " — what cookies we use and how to control them.",
    "inLanguage" => "en-US",
    "isPartOf"   => ["@id" => $siteUrl . "/#website"],
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<main id="main-content">

  <!-- ═══ LEGAL HERO ══════════════════════════════════════════════════════════ -->
  <section class="legal-hero">
    <div class="container">
      <h1>Cookie Policy</h1>
      <p class="legal-hero-sub">What cookies we use and how to manage them</p>
    </div>
  </section>

  <!-- ═══ BREADCRUMB ══════════════════════════════════════════════════════════ -->
  <div class="breadcrumb-wrap">
    <div class="container">
      <?php renderBreadcrumbs([
        ['label' => 'Home',          'url' => '/'],
        ['label' => 'Cookie Policy', 'url' => '/cookie-policy/'],
      ]); ?>
    </div>
  </div>

  <!-- ═══ CONTENT ══════════════════════════════════════════════════════════════ -->
  <section class="legal-content">
    <div class="container">
      <div class="content-narrow">

        <p class="legal-updated">Last Updated: <?php echo $lastUpdated; ?></p>

        <!-- What Are Cookies -->
        <h2>What Are Cookies</h2>
        <p>Cookies are small text files that are placed on your device (computer, smartphone, or tablet) when you visit a website. They are widely used to make websites work more efficiently, remember your preferences, and provide information to website owners about how visitors use their sites.</p>
        <p>Cookies may be "session" cookies (which expire when you close your browser) or "persistent" cookies (which remain on your device for a set period or until you delete them). They may be set by the website you are visiting ("first-party cookies") or by third parties whose services are embedded in that website ("third-party cookies").</p>
        <p>This Cookie Policy explains what cookies our Site uses, why we use them, and how you can manage your cookie preferences.</p>

        <!-- Strictly Necessary Cookies -->
        <h2>Strictly Necessary Cookies</h2>
        <p>These cookies are essential for the Site to function properly. They do not require your consent. Without them, certain features of the Site cannot be provided.</p>

        <div class="table-responsive">
          <table class="cookie-table">
            <thead>
              <tr>
                <th>Cookie Name</th>
                <th>Provider</th>
                <th>Purpose</th>
                <th>Duration</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code>PHPSESSID</code></td>
                <td><?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?> (this Site)</td>
                <td>PHP session identifier. Maintains your session state as you navigate the Site (e.g., form submission processing). Does not store personal data.</td>
                <td>Session (expires when browser is closed)</td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Analytics Cookies -->
        <h2>Analytics Cookies</h2>
        <p>These cookies help us understand how visitors interact with our Site so we can improve content and user experience. The data collected is aggregated and anonymized where possible.</p>

        <div class="table-responsive">
          <table class="cookie-table">
            <thead>
              <tr>
                <th>Cookie Name</th>
                <th>Provider</th>
                <th>Purpose</th>
                <th>Duration</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code>_ga</code></td>
                <td>Google LLC (Google Analytics 4)</td>
                <td>Registers a unique identifier used to generate statistical data on how visitors use the Site. Distinguishes between users for aggregated traffic reporting.</td>
                <td>2 years</td>
              </tr>
              <tr>
                <td><code>_ga_&lt;container-id&gt;</code></td>
                <td>Google LLC (Google Analytics 4)</td>
                <td>Used by Google Analytics 4 to persist session state and track page views, events, and conversion actions within a single session and across sessions.</td>
                <td>2 years</td>
              </tr>
            </tbody>
          </table>
        </div>

        <p>Google Analytics data is processed by Google LLC in accordance with Google's Privacy Policy. You may opt out of Google Analytics tracking by installing the <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener noreferrer">Google Analytics Opt-Out Browser Add-on</a>.</p>

        <!-- Functional & Third-Party Resources -->
        <h2>Functional Cookies and Third-Party Resources</h2>
        <p>Our Site loads resources from third-party providers to deliver fonts, mapping, icons, and carousel functionality. These third parties may set their own cookies or similar tracking technologies when their resources load in your browser. We do not control these third-party cookies.</p>

        <div class="table-responsive">
          <table class="cookie-table">
            <thead>
              <tr>
                <th>Resource</th>
                <th>Provider</th>
                <th>Purpose</th>
                <th>Privacy Policy</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Google Fonts</td>
                <td>Google LLC</td>
                <td>Delivers the Oswald and Lato typefaces used throughout the Site. Google may log your IP address when font files are requested.</td>
                <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">Google Privacy Policy</a></td>
              </tr>
              <tr>
                <td>Google Maps</td>
                <td>Google LLC</td>
                <td>Embeds an interactive map on our Contact page. Google Maps may set cookies to track usage and provide personalized map features.</td>
                <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">Google Privacy Policy</a></td>
              </tr>
              <tr>
                <td>Lucide Icons CDN</td>
                <td>jsDelivr / Lucide</td>
                <td>Serves the Lucide icon library used for interface icons across the Site. Resource delivery only; minimal or no persistent cookies.</td>
                <td><a href="https://www.jsdelivr.com/privacy-policy-jsdelivr-net" target="_blank" rel="noopener noreferrer">jsDelivr Privacy Policy</a></td>
              </tr>
              <tr>
                <td>Swiper CDN</td>
                <td>jsDelivr / Swiper</td>
                <td>Serves the Swiper.js library used for testimonial and image carousels. Resource delivery only; minimal or no persistent cookies.</td>
                <td><a href="https://www.jsdelivr.com/privacy-policy-jsdelivr-net" target="_blank" rel="noopener noreferrer">jsDelivr Privacy Policy</a></td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- How to Control Cookies -->
        <h2>How to Control Cookies</h2>
        <p>You can control and manage cookies in several ways:</p>

        <h3>Browser Settings</h3>
        <p>Most web browsers allow you to view, delete, block, or clear cookies through their settings menus. Note that blocking all cookies may affect the functionality of this Site and many others. Instructions for popular browsers:</p>
        <ul>
          <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener noreferrer">Google Chrome</a></li>
          <li><a href="https://support.mozilla.org/en-US/kb/enhanced-tracking-protection-firefox-desktop" target="_blank" rel="noopener noreferrer">Mozilla Firefox</a></li>
          <li><a href="https://support.apple.com/guide/safari/manage-cookies-sfri11471/mac" target="_blank" rel="noopener noreferrer">Apple Safari</a></li>
          <li><a href="https://support.microsoft.com/en-us/microsoft-edge/delete-cookies-in-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener noreferrer">Microsoft Edge</a></li>
        </ul>

        <h3>Opt-Out Tools</h3>
        <p>To opt out of Google Analytics tracking across all websites, install the <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener noreferrer">Google Analytics Opt-Out Browser Add-on</a>. For interest-based advertising opt-outs, visit <a href="https://optout.aboutads.info/" target="_blank" rel="noopener noreferrer">aboutads.info</a> or <a href="https://optout.networkadvertising.org/" target="_blank" rel="noopener noreferrer">networkadvertising.org</a>.</p>

        <!-- Do Not Track / GPC -->
        <h2>Do Not Track and Global Privacy Control</h2>
        <p>Some browsers offer a "Do Not Track" (DNT) signal. Our Site does not currently respond to DNT signals because there is no industry-standard interpretation of what response is required.</p>
        <p>We do, however, honor <strong>Global Privacy Control (GPC)</strong> signals. If your browser or browser extension sends a GPC opt-out signal, we treat it as a valid request to opt out of the sale or sharing of your personal information, consistent with applicable state privacy laws including the California Privacy Rights Act (CPRA) and the Texas Data Privacy and Security Act (TDPSA).</p>

        <!-- California Residents -->
        <h2>California Residents</h2>
        <p>California residents have additional rights regarding the personal information collected through cookies and similar technologies. Please review the <a href="/privacy-policy/#ccpa-rights">California Residents section of our Privacy Policy</a> for a full description of your rights under the CCPA/CPRA.</p>

        <!-- Changes -->
        <h2>Changes to This Cookie Policy</h2>
        <p>We may update this Cookie Policy from time to time to reflect changes in the cookies we use, third-party services we integrate, or applicable regulations. When we make material updates, we will revise the "Last Updated" date at the top of this page. We encourage you to review this page periodically.</p>

        <!-- Contact -->
        <h2>Contact Us</h2>
        <p>If you have questions about our use of cookies or this Cookie Policy, please contact us:</p>
        <address class="legal-address">
          <strong><?php echo htmlspecialchars($siteNameFull, ENT_QUOTES, 'UTF-8'); ?></strong><br>
          <?php echo htmlspecialchars($companyAddress, ENT_QUOTES, 'UTF-8'); ?><br>
          Phone: <a href="tel:<?php echo $contactPhoneRaw; ?>"><?php echo htmlspecialchars($companyPhone, ENT_QUOTES, 'UTF-8'); ?></a><br>
          Email: <a href="mailto:<?php echo htmlspecialchars($companyEmail, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($companyEmail, ENT_QUOTES, 'UTF-8'); ?></a>
        </address>

      </div><!-- /.content-narrow -->
    </div><!-- /.container -->
  </section>

</main>

<style>
/* ═══ COOKIE POLICY — PAGE STYLES ════════════════════════════════════════════ */

/* Legal Hero */
.legal-hero {
  position: relative;
  min-height: 40vh;
  display: flex;
  align-items: center;
  background-color: var(--color-primary);
  overflow: hidden;
}

.legal-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  z-index: 0;
}

.legal-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.04;
  z-index: 1;
}

.legal-hero .container {
  position: relative;
  z-index: 2;
  padding-top: var(--space-4xl);
  padding-bottom: var(--space-3xl);
}

.legal-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2rem, 5vw, 3.5rem);
  font-weight: 700;
  color: #ffffff;
  letter-spacing: -0.02em;
  text-wrap: balance;
  line-height: 1.15;
  margin-bottom: var(--space-sm);
}

.legal-hero-sub {
  color: rgba(255, 255, 255, 0.75);
  font-size: 1.1rem;
  margin: 0;
}

/* Breadcrumb */
.breadcrumb-wrap {
  background: var(--color-bg-alt);
  border-bottom: 1px solid rgba(0, 0, 0, 0.06);
}

.breadcrumb-nav {
  padding: var(--space-sm) 0;
}

.breadcrumb-list {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  list-style: none;
  flex-wrap: wrap;
}

.breadcrumb-item {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
}

.breadcrumb-item a {
  color: var(--color-primary);
  text-decoration: none;
  transition: color 0.2s ease;
}

.breadcrumb-item a:hover {
  color: var(--color-accent);
}

.breadcrumb-item.current {
  color: var(--color-text);
  font-weight: 600;
}

.breadcrumb-sep {
  color: var(--color-text-light);
  font-size: var(--font-size-sm);
  opacity: 0.5;
}

/* Legal Content */
.legal-content {
  padding: var(--section-pad);
  background: var(--color-bg);
}

.content-narrow {
  max-width: 780px;
  margin-inline: auto;
}

.legal-updated {
  font-style: italic;
  color: var(--color-text-light);
  font-size: var(--font-size-sm);
  margin-bottom: var(--space-2xl);
  padding: var(--space-sm) var(--space-md);
  background: var(--color-bg-alt);
  border-left: 3px solid var(--color-accent);
  border-radius: 0 var(--radius-sm) var(--radius-sm) 0;
}

/* Heading styles */
.content-narrow h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.3rem, 3vw, 1.8rem);
  font-weight: 700;
  color: var(--color-text);
  letter-spacing: -0.02em;
  text-wrap: balance;
  border-bottom: 2px solid var(--color-accent);
  padding-bottom: var(--space-sm);
  margin: var(--space-3xl) 0 var(--space-md);
}

.content-narrow h2:first-of-type {
  margin-top: 0;
}

.content-narrow h3 {
  font-family: var(--font-heading);
  font-size: clamp(1.1rem, 2vw, 1.3rem);
  font-weight: 600;
  color: var(--color-text);
  text-wrap: balance;
  border-left: 3px solid var(--color-accent);
  padding-left: var(--space-md);
  margin: var(--space-xl) 0 var(--space-sm);
}

/* Prose */
.content-narrow p {
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-text-light);
  margin-bottom: var(--space-md);
}

.content-narrow ul {
  list-style: none;
  margin: var(--space-md) 0 var(--space-md) 0;
  padding: 0;
}

.content-narrow ul li {
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-text-light);
  padding: var(--space-xs) 0 var(--space-xs) var(--space-xl);
  position: relative;
}

.content-narrow ul li::before {
  content: '';
  position: absolute;
  left: var(--space-sm);
  top: 0.7em;
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: var(--color-accent);
}

.content-narrow a {
  color: var(--color-primary);
  text-decoration: underline;
  text-underline-offset: 2px;
  transition: color 0.2s ease;
}

.content-narrow a:hover {
  color: var(--color-accent);
}

/* Cookie table */
.table-responsive {
  width: 100%;
  overflow-x: auto;
  margin: var(--space-md) 0 var(--space-xl);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm);
}

.cookie-table {
  width: 100%;
  border-collapse: collapse;
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  background: var(--color-bg);
}

.cookie-table thead {
  background: var(--color-primary);
}

.cookie-table thead th {
  color: #ffffff;
  font-family: var(--font-heading);
  font-weight: 600;
  font-size: 0.8rem;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  padding: var(--space-sm) var(--space-md);
  text-align: left;
  white-space: nowrap;
}

.cookie-table tbody tr {
  border-bottom: 1px solid rgba(0, 0, 0, 0.06);
  transition: background 0.15s ease;
}

.cookie-table tbody tr:last-child {
  border-bottom: none;
}

.cookie-table tbody tr:nth-child(even) {
  background: var(--color-bg-alt);
}

.cookie-table tbody tr:hover {
  background: rgba(var(--color-primary-rgb), 0.04);
}

.cookie-table td {
  padding: var(--space-sm) var(--space-md);
  color: var(--color-text-light);
  line-height: 1.5;
  vertical-align: top;
}

.cookie-table td code {
  font-family: 'Courier New', Courier, monospace;
  font-size: 0.85em;
  background: var(--color-bg-alt);
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: var(--radius-sm);
  padding: 1px 5px;
  color: var(--color-primary-dark);
}

.cookie-table a {
  color: var(--color-primary);
  text-underline-offset: 2px;
}

.cookie-table a:hover {
  color: var(--color-accent);
}

/* Legal address block */
.legal-address {
  font-style: normal;
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  line-height: 1.8;
  color: var(--color-text-light);
  background: var(--color-bg-alt);
  border: 1px solid rgba(0, 0, 0, 0.07);
  border-radius: var(--radius-md);
  padding: var(--space-lg) var(--space-xl);
  margin-top: var(--space-md);
}

/* Responsive */
@media (max-width: 767px) {
  .legal-content {
    padding: var(--section-pad-mobile);
  }

  .legal-hero .container {
    padding-top: var(--space-3xl);
    padding-bottom: var(--space-2xl);
  }

  .content-narrow h2 {
    margin-top: var(--space-2xl);
  }

  .cookie-table thead th,
  .cookie-table td {
    padding: var(--space-xs) var(--space-sm);
    font-size: 0.8rem;
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
