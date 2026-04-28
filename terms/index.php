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

$pageTitle       = 'Terms of Service | ' . $siteName;
$pageDescription = 'Terms of Service for Greener Grass Irrigation Repair — terms governing use of our website and services.';
$canonicalUrl    = $siteUrl . '/terms/';
$canonicalLink = '<link rel="canonical" href="' . htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') . '">'; // QA canonical reference
$currentPage     = 'legal';

$schemaMarkup = json_encode([
    "@context"   => "https://schema.org",
    "@type"      => "WebPage",
    "name"       => "Terms of Service",
    "url"        => $siteUrl . '/terms/',
    "description"=> "Terms of Service for " . $siteName . " — terms governing use of our website and services.",
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
      <h1>Terms of Service</h1>
      <p class="legal-hero-sub">Terms governing use of our website and services</p>
    </div>
  </section>

  <!-- ═══ BREADCRUMB ══════════════════════════════════════════════════════════ -->
  <div class="breadcrumb-wrap">
    <div class="container">
      <?php renderBreadcrumbs([
        ['label' => 'Home',             'url' => '/'],
        ['label' => 'Terms of Service', 'url' => '/terms/'],
      ]); ?>
    </div>
  </div>

  <!-- ═══ CONTENT ══════════════════════════════════════════════════════════════ -->
  <section class="legal-content">
    <div class="container">
      <div class="content-narrow">

        <p class="legal-updated">Last Updated: <?php echo $lastUpdated; ?></p>

        <!-- Acceptance -->
        <h2>Acceptance of Terms</h2>
        <p>By accessing or using the website located at <?php echo htmlspecialchars($siteUrl, ENT_QUOTES, 'UTF-8'); ?> (the "Site"), operated by <?php echo htmlspecialchars($siteNameFull, ENT_QUOTES, 'UTF-8'); ?> ("<?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?>," "we," "us," or "our"), you agree to be bound by these Terms of Service ("Terms"). If you do not agree to these Terms, you must not use our Site.</p>
        <p>These Terms apply to all visitors, users, and others who access or use the Site. We reserve the right to modify these Terms at any time. Your continued use of the Site after any modification constitutes your acceptance of the revised Terms.</p>

        <!-- Description of Services -->
        <h2>Description of Services</h2>
        <p><?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?> provides residential and commercial irrigation system repair, sprinkler head replacement, system installation, winterization, spring startup, backflow testing and repair, drip irrigation, smart controller upgrades, and leak detection services in the Fort Worth, Texas metropolitan area and surrounding Tarrant County communities.</p>
        <p>Our Site provides information about these services, allows you to submit service inquiries, and serves as a communication channel between you and our business. Actual service agreements are established separately through direct communication and written or verbal service agreements.</p>

        <!-- Use of This Website -->
        <h2>Use of This Website</h2>
        <p>You agree to use this Site only for lawful purposes and in a manner that does not infringe the rights of others. Specifically, you agree not to:</p>
        <ul>
          <li>Transmit any material that is unlawful, harmful, threatening, abusive, defamatory, or otherwise objectionable</li>
          <li>Attempt to gain unauthorized access to any portion of the Site, server, or network connected to the Site</li>
          <li>Use any automated means (bots, scrapers, crawlers) to access, collect, or monitor content on the Site without our express written permission</li>
          <li>Introduce any viruses, trojans, worms, or other malicious or technologically harmful material</li>
          <li>Impersonate or misrepresent your affiliation with any person or entity while using the Site</li>
        </ul>

        <!-- Intellectual Property -->
        <h2>Intellectual Property</h2>
        <p>All content on this Site — including but not limited to text, graphics, logos, images, photographs, and software — is the property of <?php echo htmlspecialchars($siteNameFull, ENT_QUOTES, 'UTF-8'); ?> or its content suppliers and is protected by applicable copyright, trademark, and other intellectual property laws.</p>
        <p>You may view, download, and print content from this Site for personal, non-commercial use only, provided you do not remove any copyright or proprietary notices. No content from this Site may be reproduced, distributed, republished, or transmitted in any form without our prior written permission.</p>

        <!-- User Submissions -->
        <h2>User Submissions</h2>
        <p>When you submit information through our contact form — including your name, email address, phone number, and service inquiry details — you grant us a non-exclusive, royalty-free license to use that information solely for the purpose of responding to your inquiry, providing requested services, and maintaining our customer records in accordance with our <a href="/privacy-policy/">Privacy Policy</a>.</p>
        <p>You represent and warrant that any information you submit is accurate, current, and complete, and that you have the right to provide it.</p>

        <!-- Estimates and Pricing -->
        <h2>Estimates and Pricing</h2>
        <p>Any pricing information, cost ranges, or estimates referenced on this Site are provided for general informational purposes only and do not constitute binding offers or guarantees of final pricing. Actual service costs depend on the specific conditions of your property, scope of work, parts required, and other factors assessed during an on-site evaluation.</p>
        <p>A formal written estimate will be provided before any work begins. All pricing is subject to change without notice on the Site.</p>

        <!-- Service Disclaimers -->
        <h2>Service Disclaimers</h2>
        <p>THIS SITE AND ALL CONTENT, SERVICES, AND INFORMATION PROVIDED ON OR THROUGH IT ARE PROVIDED ON AN "AS IS" AND "AS AVAILABLE" BASIS WITHOUT WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE, AND NON-INFRINGEMENT.</p>
        <p><?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?> does not warrant that the Site will be uninterrupted, error-free, or free of viruses or other harmful components. We do not warrant the accuracy, completeness, or usefulness of any information on the Site.</p>

        <!-- Limitation of Liability -->
        <h2>Limitation of Liability</h2>
        <p>TO THE FULLEST EXTENT PERMITTED BY APPLICABLE LAW, <?php echo strtoupper(htmlspecialchars($siteNameFull, ENT_QUOTES, 'UTF-8')); ?> SHALL NOT BE LIABLE FOR ANY INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, OR PUNITIVE DAMAGES — INCLUDING LOSS OF PROFITS, DATA, USE, GOODWILL, OR OTHER INTANGIBLE LOSSES — ARISING OUT OF OR IN CONNECTION WITH YOUR USE OF THE SITE, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.</p>
        <p>IN NO EVENT SHALL OUR TOTAL AGGREGATE LIABILITY TO YOU FOR ANY CLAIMS ARISING UNDER THESE TERMS EXCEED THE GREATER OF: (A) THE TOTAL AMOUNT PAID BY YOU TO <?php echo strtoupper(htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8')); ?> IN THE TWELVE (12) MONTHS PRECEDING THE CLAIM, OR (B) ONE HUNDRED DOLLARS ($100.00).</p>
        <p>Some jurisdictions do not allow the exclusion or limitation of incidental or consequential damages, so the above limitations may not apply to you.</p>

        <!-- Indemnification -->
        <h2>Indemnification</h2>
        <p>You agree to defend, indemnify, and hold harmless <?php echo htmlspecialchars($siteNameFull, ENT_QUOTES, 'UTF-8'); ?>, its owners, officers, employees, agents, and successors from and against any claims, liabilities, damages, judgments, awards, losses, costs, expenses, or fees (including reasonable attorneys' fees) arising out of or relating to your violation of these Terms or your use of the Site.</p>

        <!-- Governing Law -->
        <h2>Governing Law</h2>
        <p>These Terms and any disputes arising out of or related to them shall be governed by and construed in accordance with the laws of the State of <?php echo htmlspecialchars($companyState, ENT_QUOTES, 'UTF-8'); ?>, without regard to its conflict-of-law principles. Any legal action or proceeding arising under these Terms shall be brought exclusively in the state or federal courts located in Tarrant County, <?php echo htmlspecialchars($companyState, ENT_QUOTES, 'UTF-8'); ?>, and you hereby irrevocably consent to the personal jurisdiction of such courts.</p>

        <!-- Changes to Terms -->
        <h2>Changes to Terms</h2>
        <p>We reserve the right to revise these Terms at any time by updating this page. The "Last Updated" date at the top of this page reflects the most recent revision. We encourage you to review these Terms periodically. Changes are effective immediately upon posting. Your continued use of the Site following the posting of revised Terms constitutes your acceptance of the changes.</p>

        <!-- Severability -->
        <h2>Severability</h2>
        <p>If any provision of these Terms is found to be invalid, illegal, or unenforceable by a court of competent jurisdiction, such provision shall be modified to the minimum extent necessary to make it enforceable, and the remaining provisions of these Terms shall continue in full force and effect.</p>

        <!-- Entire Agreement -->
        <h2>Entire Agreement</h2>
        <p>These Terms, together with our <a href="/privacy-policy/">Privacy Policy</a> and <a href="/cookie-policy/">Cookie Policy</a>, constitute the entire agreement between you and <?php echo htmlspecialchars($siteNameFull, ENT_QUOTES, 'UTF-8'); ?> with respect to your use of this Site and supersede all prior or contemporaneous communications and proposals, whether electronic, oral, or written.</p>

        <!-- Contact -->
        <h2>Contact Us</h2>
        <p>If you have questions about these Terms of Service, please contact us:</p>
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
/* ═══ TERMS OF SERVICE — PAGE STYLES ════════════════════════════════════════ */

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
