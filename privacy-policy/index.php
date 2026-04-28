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

$pageTitle       = 'Privacy Policy | ' . $siteName;
$pageDescription = 'Privacy Policy for Greener Grass Irrigation Repair — how we collect, use, and protect your personal information.';
$canonicalUrl    = $siteUrl . '/privacy-policy/';
$canonicalLink = '<link rel="canonical" href="' . htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') . '">'; // QA canonical reference
$currentPage     = 'legal';

$schemaMarkup = json_encode([
    "@context"   => "https://schema.org",
    "@type"      => "WebPage",
    "name"       => "Privacy Policy",
    "url"        => $siteUrl . '/privacy-policy/',
    "description"=> "Privacy Policy for " . $siteName . " — how we collect, use, and protect your personal information.",
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
      <h1>Privacy Policy</h1>
      <p class="legal-hero-sub">How we collect, use, and protect your information</p>
    </div>
  </section>

  <!-- ═══ BREADCRUMB ══════════════════════════════════════════════════════════ -->
  <div class="breadcrumb-wrap">
    <div class="container">
      <?php renderBreadcrumbs([
        ['label' => 'Home',           'url' => '/'],
        ['label' => 'Privacy Policy', 'url' => '/privacy-policy/'],
      ]); ?>
    </div>
  </div>

  <!-- ═══ CONTENT ══════════════════════════════════════════════════════════════ -->
  <section class="legal-content">
    <div class="container">
      <div class="content-narrow">

        <p class="legal-updated">Last Updated: <?php echo $lastUpdated; ?></p>

        <!-- Introduction -->
        <h2>Introduction</h2>
        <p><?php echo htmlspecialchars($siteNameFull, ENT_QUOTES, 'UTF-8'); ?> ("<?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?>," "we," "us," or "our") operates the website located at <?php echo htmlspecialchars($siteUrl, ENT_QUOTES, 'UTF-8'); ?> (the "Site"). This Privacy Policy explains how we collect, use, disclose, and protect personal information when you visit our Site or contact us about our irrigation repair and installation services.</p>
        <p>By using this Site, you agree to the practices described in this Privacy Policy. If you do not agree, please do not use our Site.</p>

        <!-- Information We Collect -->
        <h2>Information We Collect</h2>

        <h3>Information You Provide Directly</h3>
        <p>When you contact us through our website contact form, call us, or otherwise reach out, we may collect:</p>
        <ul>
          <li>Full name</li>
          <li>Email address</li>
          <li>Phone number (including mobile number if provided)</li>
          <li>Service address or property location</li>
          <li>Description of the service needed or other information you choose to share</li>
          <li>Communication consent preferences (email opt-in, SMS opt-in)</li>
        </ul>

        <h3>Information Collected Automatically</h3>
        <p>When you visit our Site, certain information is collected automatically by our systems and third-party analytics services, including:</p>
        <ul>
          <li>IP address and approximate geographic location</li>
          <li>Browser type, version, and operating system</li>
          <li>Pages viewed, links clicked, and time spent on pages</li>
          <li>Referring website or search query that brought you to our Site</li>
          <li>Device type and screen resolution</li>
          <li>Date and time of your visit</li>
        </ul>
        <p>This information is collected using cookies and similar technologies. See our <a href="/cookie-policy/">Cookie Policy</a> for details.</p>

        <!-- How We Use Your Information -->
        <h2>How We Use Your Information</h2>
        <p>We use the personal information we collect to:</p>
        <ul>
          <li>Respond to your service inquiries and provide estimates</li>
          <li>Schedule and perform irrigation repair, installation, and related services</li>
          <li>Send you appointment reminders, service updates, and follow-up communications</li>
          <li>Send marketing emails or SMS messages if you have opted in to receive them</li>
          <li>Improve our website content, user experience, and service offerings</li>
          <li>Comply with applicable legal obligations</li>
          <li>Maintain records for our customer relationship management (CRM) system</li>
          <li>Detect and prevent fraud or spam submissions</li>
        </ul>

        <!-- How We Share Your Information -->
        <h2>How We Share Your Information</h2>
        <p>We do not sell your personal information. We may share your information with the following categories of service providers who help us operate our business:</p>

        <h3>Google LLC</h3>
        <p>We use Google Analytics 4 to understand how visitors interact with our Site. Google may receive your IP address and browsing behavior on our Site. Data is processed in accordance with Google's Privacy Policy. You may opt out via <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener noreferrer">Google's opt-out browser add-on</a>.</p>

        <h3>Page One Insights, LLC (Web Design &amp; Hosting Agency)</h3>
        <p>Our website is built and maintained by Page One Insights, LLC. Lead submissions from our contact form are processed through Page One Insights' CRM platform. The following sub-processors handle data on our behalf through this platform:</p>
        <ul>
          <li><strong>Supabase</strong> — secure database storage for lead records</li>
          <li><strong>SendGrid</strong> — transactional email delivery for lead notifications</li>
          <li><strong>Twilio</strong> — SMS message delivery (only if you have opted in to SMS communications)</li>
        </ul>

        <h3>Hostinger (Web Hosting)</h3>
        <p>Our website is hosted on Hostinger's servers. Hostinger processes server logs and may receive your IP address when you visit our Site.</p>

        <p>We may also disclose your information when required by law, court order, or government authority, or when necessary to protect our legal rights or the safety of our users.</p>

        <!-- Your Privacy Rights -->
        <h2>Your Privacy Rights</h2>

        <h3 id="ccpa-rights">California Residents (CCPA / CPRA)</h3>
        <p>If you are a California resident, the California Consumer Privacy Act (CCPA) as amended by the California Privacy Rights Act (CPRA) grants you the following rights regarding your personal information:</p>
        <ul>
          <li><strong>Right to Know</strong> — You may request that we disclose the categories and specific pieces of personal information we have collected about you, the sources of collection, the business purposes for collection, and the categories of third parties with whom we share it.</li>
          <li><strong>Right to Delete</strong> — You may request that we delete the personal information we have collected about you, subject to certain exceptions.</li>
          <li><strong>Right to Correct</strong> — You may request that we correct inaccurate personal information we maintain about you.</li>
          <li><strong>Right to Limit Use of Sensitive Personal Information</strong> — You may direct us to use and disclose your sensitive personal information only for permitted purposes.</li>
          <li><strong>Right to Opt-Out of Sale or Sharing</strong> — We do not sell or share personal information for cross-context behavioral advertising. If this practice ever changes, you will have the right to opt out.</li>
          <li><strong>Right to Non-Discrimination</strong> — We will not discriminate against you for exercising any of your CCPA/CPRA rights.</li>
          <li><strong>Global Privacy Control (GPC)</strong> — We honor GPC browser signals as a valid opt-out of sale/sharing of personal information.</li>
        </ul>
        <p>To exercise any of these rights, contact us using the information in the "Contact Us" section below. We will respond within 45 days of receiving a verifiable request.</p>

        <h3>Other State Privacy Rights</h3>
        <p>Residents of the following states may have similar rights to access, correct, delete, and opt out of certain uses of their personal data under their respective state privacy laws. Contact us to submit a request:</p>
        <ul>
          <li><strong>Virginia</strong> — Virginia Consumer Data Protection Act (VCDPA)</li>
          <li><strong>Colorado</strong> — Colorado Privacy Act (CPA)</li>
          <li><strong>Connecticut</strong> — Connecticut Data Privacy Act (CTDPA)</li>
          <li><strong>Utah</strong> — Utah Consumer Privacy Act (UCPA)</li>
          <li><strong>Texas</strong> — Texas Data Privacy and Security Act (TDPSA)</li>
          <li><strong>Florida</strong> — Florida Digital Bill of Rights (FDBR)</li>
          <li><strong>Oregon</strong> — Oregon Consumer Privacy Act (OCPA)</li>
          <li><strong>Montana</strong> — Montana Consumer Data Privacy Act (MCDPA)</li>
          <li><strong>Delaware</strong> — Delaware Personal Data Privacy Act (DPDPA)</li>
          <li><strong>Iowa</strong> — Iowa Consumer Data Protection Act (ICDPA)</li>
          <li><strong>Tennessee</strong> — Tennessee Information Protection Act (TIPA)</li>
          <li><strong>Indiana</strong> — Indiana Consumer Data Protection Act (ICDPA)</li>
          <li><strong>Kentucky</strong> — Kentucky Consumer Data Protection Act (KCDPA)</li>
          <li><strong>Rhode Island</strong> — Rhode Island Data Transparency and Privacy Protection Act (DTPPA)</li>
          <li><strong>Maryland</strong> — Maryland Online Data Privacy Act (MODPA)</li>
          <li><strong>Minnesota</strong> — Minnesota Consumer Data Privacy Act (MCDPA)</li>
          <li><strong>New Hampshire</strong> — New Hampshire Privacy Act (NHPA)</li>
          <li><strong>New Jersey</strong> — New Jersey Data Privacy Act (NJDPA)</li>
          <li><strong>Nebraska</strong> — Nebraska Data Privacy Act (NDPA)</li>
        </ul>

        <!-- Data Retention -->
        <h2>Data Retention</h2>
        <p>We retain personal information for up to four (4) years from the date of collection, or for as long as necessary to fulfill the purposes described in this Privacy Policy, comply with legal obligations, resolve disputes, and enforce our agreements. Lead inquiry records and consent logs are retained for the full four-year period to support legal compliance documentation.</p>

        <!-- Security -->
        <h2>Security</h2>
        <p>We implement reasonable technical and organizational measures to protect your personal information from unauthorized access, disclosure, alteration, or destruction. These measures include encrypted data transmission (HTTPS/TLS), access controls, and secure hosting infrastructure. However, no method of transmission over the internet or electronic storage is 100% secure, and we cannot guarantee absolute security.</p>

        <!-- Children's Privacy -->
        <h2>Children's Privacy</h2>
        <p>Our Site is not directed to children under the age of 13, and we do not knowingly collect personal information from children under 13. If we learn that we have collected personal information from a child under 13, we will promptly delete it. If you believe we may have collected information from a child under 13, please contact us immediately.</p>

        <!-- Third-Party Links -->
        <h2>Third-Party Links</h2>
        <p>Our Site may contain links to third-party websites, including our social media profiles (Facebook, Instagram, Google Business Profile). We are not responsible for the privacy practices of those websites. We encourage you to review the privacy policy of any third-party site you visit.</p>

        <!-- SMS Program Terms -->
        <h2>SMS Program Terms</h2>
        <p>If you opt in to receive SMS (text) messages from <?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?>, the following terms apply:</p>
        <ul>
          <li><strong>Message types</strong> may include appointment reminders, service updates, follow-up notifications, and promotional offers.</li>
          <li><strong>Message frequency</strong> varies based on your service activity and preferences.</li>
          <li><strong>Message and data rates may apply</strong> based on your mobile carrier plan.</li>
          <li><strong>To opt out</strong> at any time, reply STOP to any text message you receive from us. After opting out, you will receive a single confirmation message and no further SMS messages.</li>
          <li><strong>For help</strong>, reply HELP or contact us at <a href="mailto:<?php echo htmlspecialchars($companyEmail, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($companyEmail, ENT_QUOTES, 'UTF-8'); ?></a>.</li>
          <li><strong>Consent is not a condition of purchase.</strong> You may use our services without opting in to SMS messages.</li>
          <li>Carriers are not liable for delayed or undelivered messages.</li>
        </ul>

        <!-- Changes to Policy -->
        <h2>Changes to This Privacy Policy</h2>
        <p>We may update this Privacy Policy from time to time to reflect changes in our practices, technology, legal requirements, or other factors. When we make material changes, we will update the "Last Updated" date at the top of this page. We encourage you to review this page periodically. Your continued use of our Site after any changes constitutes your acceptance of the updated Privacy Policy.</p>

        <!-- Contact -->
        <h2>Contact Us</h2>
        <p>If you have questions about this Privacy Policy, want to exercise your privacy rights, or need to report a concern, please contact us:</p>
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
/* ═══ PRIVACY POLICY — PAGE STYLES ══════════════════════════════════════════ */

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
  flex-shrink: 0;
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

/* Inline BreadcrumbList schema — hidden from display */
.content-narrow script { display: none; }

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
