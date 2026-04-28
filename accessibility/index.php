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

$pageTitle       = 'Accessibility | ' . $siteName;
$pageDescription = 'Accessibility statement for Greener Grass Irrigation Repair — our WCAG 2.1 AA commitment and how to report accessibility issues.';
$canonicalUrl    = $siteUrl . '/accessibility/';
$canonicalLink = '<link rel="canonical" href="' . htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') . '">'; // QA canonical reference
$currentPage     = 'legal';

$schemaMarkup = json_encode([
    "@context"   => "https://schema.org",
    "@type"      => "WebPage",
    "name"       => "Accessibility Statement",
    "url"        => $siteUrl . '/accessibility/',
    "description"=> "Accessibility statement for " . $siteName . " — our WCAG 2.1 AA commitment and how to report accessibility issues.",
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
      <h1>Accessibility Statement</h1>
      <p class="legal-hero-sub">Our commitment to WCAG 2.1 Level AA accessibility</p>
    </div>
  </section>

  <!-- ═══ BREADCRUMB ══════════════════════════════════════════════════════════ -->
  <div class="breadcrumb-wrap">
    <div class="container">
      <?php renderBreadcrumbs([
        ['label' => 'Home',          'url' => '/'],
        ['label' => 'Accessibility', 'url' => '/accessibility/'],
      ]); ?>
    </div>
  </div>

  <!-- ═══ CONTENT ══════════════════════════════════════════════════════════════ -->
  <section class="legal-content">
    <div class="container">
      <div class="content-narrow">

        <p class="legal-updated">Last Updated: <?php echo $lastUpdated; ?></p>

        <!-- Our Commitment -->
        <h2>Our Commitment</h2>
        <p><?php echo htmlspecialchars($siteNameFull, ENT_QUOTES, 'UTF-8'); ?> is committed to ensuring that our website is accessible to all users, including people with disabilities. We strive to meet the Web Content Accessibility Guidelines (WCAG) 2.1 Level AA standard, as established by the World Wide Web Consortium (W3C).</p>
        <p>We believe that everyone — regardless of ability, device, or assistive technology — deserves equal access to information about our irrigation repair and installation services. Accessibility is not an afterthought; it is built into how we design and develop every page of this Site.</p>

        <!-- Standards We Follow -->
        <h2>Standards We Follow</h2>
        <p>This Site is designed and maintained in accordance with <strong>WCAG 2.1 Level AA</strong>. Our approach includes the following accessibility features:</p>

        <h3>Semantic HTML Structure</h3>
        <p>We use proper HTML5 semantic elements — including <code>&lt;main&gt;</code>, <code>&lt;nav&gt;</code>, <code>&lt;header&gt;</code>, <code>&lt;footer&gt;</code>, <code>&lt;section&gt;</code>, and <code>&lt;article&gt;</code> — so that the page structure is meaningful and navigable by assistive technologies.</p>

        <h3>Skip-to-Content Link</h3>
        <p>A "Skip to main content" link is provided as the first interactive element on every page. This allows keyboard and screen reader users to bypass the navigation menu and jump directly to the main content area.</p>

        <h3>ARIA Landmarks and Labels</h3>
        <p>Key regions of every page are marked with ARIA landmark roles and descriptive labels, including <code>aria-label="Main navigation"</code> on the navigation, and appropriate landmark roles on all major sections.</p>

        <h3>Full Keyboard Navigation</h3>
        <p>All interactive elements — including navigation links, buttons, form inputs, and carousels — are fully operable using keyboard controls alone. Tab order follows a logical, predictable reading sequence. Focus never becomes trapped or lost.</p>

        <h3>Visible Focus Indicators</h3>
        <p>All focusable elements display a clearly visible focus outline that meets WCAG contrast requirements. This ensures keyboard users always know which element is currently active.</p>

        <h3>Color Contrast</h3>
        <p>Body text maintains a minimum contrast ratio of 4.5:1 against its background, and large text (18pt or 14pt bold) maintains a minimum 3:1 ratio, in accordance with WCAG 2.1 Success Criteria 1.4.3.</p>

        <h3>Descriptive Alternative Text</h3>
        <p>All meaningful images include descriptive <code>alt</code> attributes that convey the purpose and content of the image to screen reader users. Decorative images that provide no informational value use empty alt attributes (<code>alt=""</code>) so screen readers can safely ignore them.</p>

        <h3>Responsive and Reflow-Friendly Design</h3>
        <p>Content is designed to reflow at up to 400% zoom without requiring horizontal scrolling, supporting users who need enlarged text or have low vision.</p>

        <h3>Motion and Animation Preferences</h3>
        <p>All CSS animations and transitions respect the <code>prefers-reduced-motion</code> media query. Users who have set their system to reduce motion will experience a simpler, static version of our interface without loss of functionality.</p>

        <h3>Form Accessibility</h3>
        <p>All form inputs are associated with descriptive <code>&lt;label&gt;</code> elements. Required fields are clearly identified. Error messages are descriptive and programmatically associated with the relevant input fields.</p>

        <h3>Mobile Accessibility</h3>
        <p>Touch targets meet the minimum 44x44 CSS pixel size recommendation. The mobile menu includes <code>aria-expanded</code> state toggling and can be dismissed by tapping outside the menu or pressing Escape.</p>

        <!-- Known Limitations -->
        <h2>Known Limitations</h2>
        <p>While we strive for full WCAG 2.1 Level AA compliance across all content, we acknowledge the following known limitations:</p>
        <ul>
          <li><strong>Google Maps embeds</strong> — The embedded Google Maps iframe on our Contact page is provided and controlled by Google LLC. Interactive map controls within the iframe may not be fully accessible via keyboard or screen reader. We provide our full address as plain text alongside the map as an accessible alternative.</li>
          <li><strong>Third-party video content</strong> — Any embedded video content from third-party platforms may not meet full caption or audio description requirements. We are working with our content partners to improve this.</li>
          <li><strong>PDF documents</strong> — Any downloadable PDF materials may not be fully tagged for accessibility. We can provide alternative formats upon request.</li>
        </ul>
        <p>We are actively working with our vendors and design team to address these limitations and reduce accessibility barriers over time.</p>

        <!-- Assistive Technology Compatibility -->
        <h2>Assistive Technology Compatibility</h2>
        <p>This Site has been designed and tested for compatibility with the following assistive technologies and browsing environments:</p>
        <ul>
          <li><strong>Screen readers:</strong> NVDA with Mozilla Firefox (Windows), VoiceOver with Safari (macOS and iOS)</li>
          <li><strong>Keyboard-only navigation:</strong> Tested on Windows (Chrome, Firefox, Edge) and macOS (Safari, Chrome)</li>
          <li><strong>Browser zoom:</strong> Tested at up to 200% zoom in major browsers without loss of content or function</li>
          <li><strong>High contrast mode:</strong> Content is compatible with Windows High Contrast Mode and macOS increased contrast settings</li>
        </ul>

        <!-- Feedback and Contact -->
        <h2>Feedback and Contact</h2>
        <p>We welcome feedback on the accessibility of this Site. If you experience any accessibility barriers, encounter content that is not accessible, or need information in an alternative format, please let us know. We take all accessibility feedback seriously and are committed to resolving issues promptly.</p>
        <p><strong>We aim to respond to accessibility feedback within 3 business days.</strong></p>
        <address class="legal-address">
          <strong><?php echo htmlspecialchars($siteNameFull, ENT_QUOTES, 'UTF-8'); ?></strong><br>
          <?php echo htmlspecialchars($companyAddress, ENT_QUOTES, 'UTF-8'); ?><br>
          Phone: <a href="tel:<?php echo $contactPhoneRaw; ?>"><?php echo htmlspecialchars($companyPhone, ENT_QUOTES, 'UTF-8'); ?></a><br>
          Email: <a href="mailto:<?php echo htmlspecialchars($companyEmail, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($companyEmail, ENT_QUOTES, 'UTF-8'); ?></a>
        </address>
        <p style="margin-top: var(--space-md);">When submitting feedback, it is helpful to include: the specific page URL where you encountered the issue, a description of the accessibility barrier, the assistive technology or browser you were using, and any error messages or unexpected behavior you observed.</p>

        <!-- Formal Complaints -->
        <h2>Formal Complaints</h2>
        <p>If you are dissatisfied with our response to your accessibility concern, you have the right to escalate the matter. Under <strong>ADA Title III</strong>, places of public accommodation — including websites used by businesses that serve the general public — are required to be accessible to people with disabilities.</p>
        <p>We ask that you <strong>contact us directly first</strong> and allow us 30 days to address the reported issue before pursuing formal complaint channels. If after 30 days your concern remains unresolved, you may file a complaint with:</p>
        <ul>
          <li><strong>ADA National Network</strong> — <a href="https://adata.org/" target="_blank" rel="noopener noreferrer">adata.org</a> | 1-800-949-4232</li>
          <li><strong>U.S. Department of Justice, Civil Rights Division</strong> — <a href="https://www.ada.gov/filing-a-complaint/" target="_blank" rel="noopener noreferrer">ada.gov/filing-a-complaint</a></li>
        </ul>
        <p>We are committed to working in good faith to resolve all accessibility issues and will cooperate fully with any accessibility review.</p>

        <!-- Contact Again -->
        <h2>Contact Us About Accessibility</h2>
        <p>To report an accessibility issue or request an accessible alternative format of any content on this Site, please reach out using any of the methods below. Include "Accessibility" in your subject line or message so we can route your inquiry to the right team member quickly.</p>
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
/* ═══ ACCESSIBILITY STATEMENT — PAGE STYLES ══════════════════════════════════ */

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

/* Inline code */
.content-narrow code {
  font-family: 'Courier New', Courier, monospace;
  font-size: 0.88em;
  background: var(--color-bg-alt);
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: var(--radius-sm);
  padding: 1px 5px;
  color: var(--color-primary-dark);
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
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>
