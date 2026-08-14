@extends('frontend.layouts.app')

@section('title', 'SEO Packages & Monthly Pricing | Edion Web Technologies')
@section('description', 'Transparent monthly SEO packages from $361.45: technical SEO, on-page optimisation, content, link building and local SEO for businesses in India, Jordan, the UAE, Bahrain, the USA, the UK and Canada.')
@section('keywords', 'SEO packages, monthly SEO plans, SEO pricing, SEO services cost, technical SEO, local SEO services, link building services, enterprise SEO')

@section('main-container')
<main id="main"><a id="top"></a>

<!-- Razorpay JS SDK -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<style>
.feat-section-header {
  font-family: var(--font-display);
  font-size: var(--fs-micro);
  font-weight: 800;
  letter-spacing: 0.05em;
  color: var(--ink);
  padding: 0;
  background: transparent;
  border: none;
  margin: var(--sp-4) 0 var(--sp-2) 0;
  text-transform: uppercase;
  list-style: none;
  display: block;
  width: 100%;
}
.feat li[data-no] {
  color: var(--text-3);
}
.feat li[data-no] svg {
  color: #ef4444 !important;
  stroke: #ef4444 !important;
}

.plans {
  display: grid;
  grid-template-columns: repeat(4, minmax(0, 1fr));
  gap: var(--sp-4);
  align-items: start;
}

@media (max-width: 1100px) {
  .plans {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}

@media (max-width: 620px) {
  .plans {
    grid-template-columns: 1fr;
  }
}

.plan {
  border: 1px solid var(--paper-3) !important;
  box-shadow: none !important;
  transition: border-color 0.2s ease, box-shadow 0.2s ease, transform 0.2s ease;
  cursor: pointer;
}

/* When hovering over the plans grid, unhighlight unhovered cards */
.plans:hover .plan {
  border-color: var(--paper-3) !important;
  box-shadow: none !important;
}

/* Card currently being hovered gets red outline */
.plans:hover .plan:hover {
  border-color: var(--signal) !important;
  box-shadow: 0 0 0 3px color-mix(in srgb, var(--signal) 25%, transparent), 0 12px 32px rgba(0,0,0,0.12) !important;
  transform: translateY(-3px);
}

/* When mouse is not hovering, highlight only the active selected/pick card */
.plans:not(:hover) .plan.is-selected,
.plans:not(:hover):not(.has-user-selection) .plan--pick {
  border-color: var(--signal) !important;
  box-shadow: 0 0 0 3px color-mix(in srgb, var(--signal) 25%, transparent), 0 12px 32px rgba(0,0,0,0.12) !important;
}

/* Button hover & selection styling: hovered or selected card button turns RED */
.plan .btn {
  transition: all 0.2s ease !important;
}

.plans:hover .plan:hover .btn,
.plan.is-selected .btn,
.plans:not(:hover):not(.has-user-selection) .plan--pick .btn {
  background: var(--signal) !important;
  color: var(--signal-ink, #ffffff) !important;
  border-color: var(--signal) !important;
}

.plans:hover .plan:not(:hover) .btn {
  background: transparent !important;
  color: var(--ink) !important;
  border-color: var(--paper-3) !important;
}

.plan__price {
  display: flex;
  flex-direction: column;
  gap: 4px;
  padding-block: var(--sp-3);
  border-block: 1px solid var(--paper-3);
}

.plan-discount-badge {
  display: none;
  background: rgba(239, 68, 68, 0.12);
  color: #ef4444;
  border: 1px solid rgba(239, 68, 68, 0.3);
  font-size: 11px;
  font-weight: 700;
  font-family: var(--font-mono);
  padding: 3px 8px;
  border-radius: 100px;
  white-space: nowrap;
}

.btn-toggle-details {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  padding: 10px 14px;
  font-size: var(--fs-micro);
  font-weight: 700;
  font-family: var(--font-mono);
  letter-spacing: 0.03em;
  color: var(--signal);
  background: var(--paper-1);
  border: 1px solid var(--signal);
  border-radius: var(--radius-md);
  cursor: pointer;
  transition: all 0.2s ease;
  margin-top: var(--sp-3);
  margin-bottom: var(--sp-2);
}
.btn-toggle-details:hover {
  background: var(--signal);
  color: var(--signal-ink);
}
.btn-read-less {
  margin-top: var(--sp-4);
}

/* Checkout Modal Overlay & Dialog */
.checkout-modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background: rgba(15, 23, 42, 0.7);
  backdrop-filter: blur(8px);
  z-index: 9999;
  display: none;
  align-items: center;
  justify-content: center;
  padding: 16px;
  opacity: 0;
  transition: opacity 0.25s ease;
}
.checkout-modal-backdrop.is-active {
  display: flex;
  opacity: 1;
}

.checkout-modal {
  background: #ffffff;
  color: #0f172a;
  border-radius: 16px;
  width: 100%;
  max-width: 480px;
  padding: 28px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
  position: relative;
  max-height: 90vh;
  overflow-y: auto;
  font-family: var(--font-body);
}

.checkout-modal__header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}
.checkout-modal__title {
  font-size: 1.25rem;
  font-weight: 800;
  color: #0f172a;
  font-family: var(--font-display);
  margin: 0;
}
.checkout-modal__close {
  background: none;
  border: none;
  font-size: 1.5rem;
  line-height: 1;
  color: #64748b;
  cursor: pointer;
  padding: 4px 8px;
  border-radius: 6px;
  transition: background 0.2s;
}
.checkout-modal__close:hover {
  background: #f1f5f9;
  color: #0f172a;
}

.checkout-summary {
  background: #f8fafc;
  border: 1px dashed #cbd5e1;
  border-radius: 12px;
  padding: 16px;
  margin-bottom: 20px;
  font-size: 0.875rem;
}
.checkout-summary__row {
  display: flex;
  justify-content: space-between;
  margin-bottom: 8px;
  color: #475569;
}
.checkout-summary__row:last-child {
  margin-bottom: 0;
  padding-top: 8px;
  border-top: 1px solid #e2e8f0;
}
.checkout-summary__val {
  font-weight: 700;
  color: #0f172a;
}
.checkout-summary__val--total {
  color: #2563eb;
  font-size: 1.05rem;
  font-weight: 800;
}

.checkout-form .form-group {
  margin-bottom: 16px;
}
.checkout-form label {
  display: block;
  font-size: 0.825rem;
  font-weight: 600;
  color: #334155;
  margin-bottom: 6px;
}
.checkout-form input {
  width: 100%;
  padding: 10px 14px;
  font-size: 0.9rem;
  border: 1px solid #cbd5e1;
  border-radius: 8px;
  background: #ffffff;
  color: #0f172a;
  outline: none;
  transition: border-color 0.2s, box-shadow 0.2s;
}
.checkout-form input:focus {
  border-color: #2563eb;
  box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
}

.btn-proceed-pay {
  width: 100%;
  padding: 14px;
  font-size: 1rem;
  font-weight: 700;
  color: #ffffff;
  background: #2563eb;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  transition: background 0.2s, transform 0.1s;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  margin-top: 24px;
}
.btn-proceed-pay:hover {
  background: #1d4ed8;
}
</style>

@php
$sections = [
  '1. PACKAGE PROFILE' => [
    ['Built for', ['Local businesses & startups', 'Growing enterprises', 'Established brands', 'Large enterprises']],
    ['Primary keywords targeted', ['20+', '40+', '80+', '200+']],
    ['Total keywords tracked (incl. long-tail)', ['250', '600', '1,500', '4,000']],
    ['Locations / markets served', ['2 cities', '3 cities', 'All cities', 'All cities + multi-country']],
    ['Expected first measurable results', ['4-6 months', '3-5 months', '3-4 months', '2-4 months (phased)']],
    ['Minimum contract term', ['3 months', '3 months', '6 months', '6 months']],
    ['Team assigned to your account', ['1 SEO Executive', 'SEO Exec + Strategist', 'SEO Manager + team of 3', 'Dedicated pod of 5']],
  ],
  '2. WEBSITE AUDIT & ANALYSIS' => [
    ['Technical SEO audit depth', ['150-point', '250-point', '350-point', '450-point + custom checks']],
    ['Re-audit frequency', ['Monthly', 'Monthly', 'Bi-weekly', 'Weekly + release checks']],
    ['Competitors benchmarked', ['5', '8', '12', '20']],
    ['Backlink profile analysis', ['Included', 'Included + gap analysis', 'Included + velocity tracking', 'Included + predictive modelling']],
    ['Content inventory & gap map', ['Included', 'Included', 'Included', 'Included + topical authority model']],
    ['Traffic & revenue forecast model', ['—', 'Quarterly', 'Monthly', 'Monthly, scenario-based']],
    ['Analytics & console setup', ['Included', 'Included', 'Included', 'Included + server-side GTM']],
    ['Baseline visibility report', ['Included', 'Included', 'Included', 'Included']],
  ],
  '3. KEYWORD RESEARCH & STRATEGY' => [
    ['Primary keywords mapped to pages', ['20', '40', '80', '200+']],
    ['Long-tail keyword bank built', ['250', '600', '1,500', '4,000']],
    ['Geo / local keyword sets', ['2 cities', '3 cities', 'All target cities', 'All cities + countries']],
    ['Search intent classification', ['Included', 'Included', 'Included', 'Included + funnel-stage mapping']],
    ['Keyword cannibalisation audit', ['Monthly', 'Monthly', 'Bi-weekly', 'Weekly + automated alerts']],
    ['Competitor keyword gap report', ['Monthly', 'Monthly', 'Bi-weekly', 'Weekly']],
    ['Native-language keyword research', ['—', '—', '1 language', 'Up to 4 languages']],
  ],
  '4. ON-PAGE SEO OPTIMIZATION' => [
    ['Pages fully optimised per month', ['30', '60', '120', '300']],
    ['Title tags & meta descriptions written', ['30', '60', '120', '300']],
    ['Heading (H1-H6) restructuring', ['20', '45', '90', '200']],
    ['Body content optimisation', ['8 pages', '20 pages', '40 pages', '100 pages']],
    ['Images: alt text + compression', ['60', '150', '300', '750']],
    ['Internal links added', ['50', '100', '200', '500 + automated template rules']],
    ['Existing content refreshed', ['4 pages', '8 pages', '16 pages', '40 pages']],
    ['URL structure recommendations', ['Included', 'Included', 'Included', 'Included + full taxonomy redesign']],
    ['Schema markup types deployed', ['5 types', '10 types', '14 types', 'Unlimited + custom JSON-LD']],
    ['Anchor tag / internal link audit', ['Monthly', 'Monthly', 'Bi-weekly', 'Weekly']],
    ['Canonical tag implementation', ['Included', 'Included', 'Included', 'Included + faceted nav rules']],
  ],
  '5. TECHNICAL SEO ENHANCEMENTS' => [
    ['XML & image sitemap management', ['Included', 'Included', 'Included + dynamic', 'Included + segmented by type']],
    ['Robots.txt & crawl directives', ['Included', 'Included', 'Included', 'Included + edge-level rules']],
    ['Broken links & redirects fixed', ['40 URLs', '100 URLs', '250 URLs', 'Unlimited']],
    ['Pagination architecture review', ['Included', 'Included (full)', 'Included (full)', 'Included + parameter policy']],
    ['Crawl depth & orphan page analysis', ['Quarterly', 'Monthly', 'Bi-weekly', 'Weekly, log-verified']],
    ['JavaScript rendering audit', ['—', 'Quarterly', 'Monthly', 'Every release']],
    ['Server log file analysis', ['—', '—', 'Quarterly', 'Monthly']],
    ['Index bloat & thin-page pruning', ['—', 'Included', 'Included', 'Included, programmatic']],
    ['Staging crawl simulation pre-release', ['—', '—', '—', 'Every release']],
    ['Site migration / replatform support', ['—', '—', 'Advisory only', 'Full project support included']],
    ['Rendering strategy consulting', ['—', '—', 'Included', 'Included']],
    ['Mobile usability testing', ['Included', 'Included', 'Included', 'Included']],
  ],
  '6. SPEED & CORE WEB VITALS' => [
    ['Core Web Vitals monitoring', ['Bi-weekly', 'Weekly', 'Weekly', 'Continuous with alerting']],
    ['Speed fix implementation rounds', ['1 per month', '2 per month', '4 per month', 'Unlimited']],
    ['Field-data breakdown', ['Site-wide', 'Site-wide + key pages', 'Per page group', 'Per template']],
    ['Image format & lazy-load strategy', ['Included', 'Included', 'Included', 'Included']],
    ['Render-blocking & script audit', ['Monthly', 'Monthly', 'Bi-weekly', 'Every release']],
    ['CDN / caching / edge recommendations', ['—', 'Recommendations', 'Included', 'Included + edge implementation']],
    ['Favicon, footer & CTA audit', ['One-time', 'Included', 'Included', 'Included']],
  ],
  '7. LOCAL SEO OPTIMIZATION' => [
    ['Google Business Profiles managed', ['1', '3', '8', 'Unlimited']],
    ['GBP posts published', ['12', '24', '40', '80']],
    ['Local citations built', ['25', '40', '60', '100']],
    ['NAP consistency audit', ['Monthly', 'Monthly', 'Bi-weekly', 'Weekly + automated monitoring']],
    ['GBP photos & product tiles uploaded', ['8', '16', '30', '60']],
    ['Review generation system', ['Templates', 'Templates + automation', 'Full campaign management', 'Multi-location system']],
    ['Review responses drafted', ['10 per month', '30 per month', '75 per month', 'Unlimited']],
    ['GBP Q&A seeding', ['4', '8', '15', '30']],
    ['Apple Business Connect & Bing Places', ['Included', 'Included', 'Included', 'Included']],
    ['Local landing pages built', ['1 per quarter', '1 per month', '3 per month', '8 per month']],
    ['Local link & sponsorship outreach', ['—', 'Included', 'Included', 'Included']],
  ],
  '8. CONTENT CREATION & MARKETING' => [
    ['Blog posts written', ['4 (700-900 words)', '8 (1,000-1,400 words)', '12 (1,200-1,800 words)', '20 (1,600-2,500 words)']],
    ['Pillar / long-form assets', ['—', '1 per quarter (2,500w+)', '1 per month (2,500w+)', '2 per month (3,500w+)']],
    ['Conversion landing page copy', ['—', '2 per month', '4 per month', '8 per month']],
    ['FAQ content blocks', ['2', '5', '10', '24']],
    ['Category / collection page copy', ['3 pages', '12 pages', '30 pages', '80 pages']],
    ['Comparison / "vs." pages', ['—', '1 per month', '2 per month', '4 per month']],
    ['Original graphics per post', ['—', '1 per post', '2 per post', '2 per post + infographic']],
    ['Content decay recovery', ['2 pages', '8 pages', '16 pages', '40 pages']],
    ['Topic cluster architecture', ['1 per quarter', '3 per quarter', '6 per quarter', '12 per quarter']],
    ['Repurposing to social & email', ['—', 'Per pillar', 'Full distribution kit', 'Full kit + video cutdowns']],
    ['Original data asset / tool brief', ['—', '—', '1 per quarter', '1 per month']],
    ['Executive thought-leadership ghostwriting', ['—', '—', '—', '2 per month']],
  ],
  '9. LINK BUILDING - FOUNDATIONAL' => [
    ['TOTAL LINK PLACEMENTS PER MONTH', ['65+', '120+', '200+', '400+']],
    ['Local citations', ['25', '40', '60', '100']],
    ['Business directory submissions', ['15', '25', '40', '80']],
    ['Classified submissions', ['10', '18', '30', '60']],
    ['Brand profile creation', ['8', '15', '25', '50']],
    ['Social bookmarking & content sharing', ['5', '12', '20', '40']],
    ['Q&A / forum contributions', ['—', '8', '15', '30']],
    ['Image & video sharing sites', ['—', '5', '10', '25']],
    ['Third-party review site submissions', ['2', '4', '8', '15']],
  ],
  '10. LINK BUILDING - EDITORIAL & EARNED' => [
    ['Editorial / outreach backlinks', ['10', '20', '32', '58']],
    ['Authority range targeted (Domain Rating)', ['DR 20-45', 'DR 30-60', 'DR 40-75', 'DR 50-90']],
    ['Sponsored guest posts placed', ['—', '2 (DR 30+)', '4 (DR 40-75)', '8 (DR 50+)']],
    ['Competitor gap link acquisition', ['3', '8', '15', '30']],
    ['Unlinked brand mention reclamation', ['Included', 'Included', 'Included', 'Included + automated monitoring']],
    ['Resource / .edu / .gov page outreach', ['—', 'Included', 'Included', 'Included']],
    ['Broken-link building campaigns', ['—', 'Included', 'Included', 'Included']],
  ],
  '11. DIGITAL PR' => [
    ['Press releases written & syndicated', ['—', '1 per quarter', '1 per month', '2 per month']],
    ['Digital PR campaigns (data / story-led)', ['—', '—', '1 per month', '2 per month']],
    ['Journalist / HARO-style pitches sent', ['—', '10 per month', '25 per month', '50 per month']],
    ['Newsjacking desk (24-hour turnaround)', ['—', '—', '—', 'Included']],
    ['Podcast & industry roundup pitching', ['—', '—', 'Included', 'Included']],
    ['Award & listicle submissions', ['—', '1 per quarter', '1 per month', '2 per month']],
  ],
  '12. BACKLINK QUALITY CONTROL' => [
    ['Manual vetting of every placement', ['Included', 'Included', 'Included', 'Included']],
    ['Toxicity / spam link scan', ['Monthly', 'Monthly', 'Bi-weekly', 'Weekly']],
    ['Link detox & disavow management', ['Included', 'Included', 'Included', 'Included, proactive']],
    ['Anchor text ratio management', ['Included', 'Included', 'Modelled', 'Modelled + forecast']],
    ['Geographic relevance of link profile', ['80% target', '85% target', '90% target', '90% + per-market split']],
    ['Link velocity pacing', ['Included', 'Included', 'Included', 'Algorithmically paced']],
  ],
  '13. AI SEARCH & ANSWER ENGINE OPTIMISATION' => [
    ['Queries tracked across AI engines', ['10', '25', '50', '150']],
    ['AI engines monitored', ['Google AI Overviews, ChatGPT', '+ Perplexity', '+ Gemini, Copilot', 'All engines + custom LLM tests']],
    ['Citation-ready content restructuring', ['5 pages', '15 pages', '35 pages', '80 pages']],
    ['llms.txt implementation', ['Included', 'Included', 'Included', 'Included + full crawler policy']],
    ['AI-crawler access & log review', ['—', '—', 'Quarterly', 'Monthly']],
    ['Competitor AI-citation gap report', ['Quarterly', 'Monthly', 'Bi-weekly', 'Weekly']],
  ],
  '14. ENTITY & BRAND SERP MANAGEMENT' => [
    ['Brand SERP audit & cleanup', ['One-time', 'Ongoing', 'Ongoing', 'Ongoing']],
    ['Knowledge Panel claim & optimisation', ['—', 'Included', 'Included', 'Included + entity expansion']],
    ['Wikidata / entity graph consistency', ['—', 'Included', 'Included', 'Included']],
    ['E-E-A-T author profiles built', ['—', '2', '4', '8']],
    ['Third-party profiles managed', ['2 platforms', '5 platforms', '10 platforms', 'Unlimited']],
    ['Sitelinks & "People Also Search For" influence', ['—', '—', 'Included', 'Included']],
  ],
  '15. SERP FEATURE CAPTURE' => [
    ['Featured snippet targets', ['3', '10', '20', '50']],
    ['People Also Ask coverage mapping', ['Included', 'Included', 'Included', 'Included']],
    ['Image & video pack optimisation', ['Included', 'Included', 'Included', 'Included']],
    ['Rich result / review star eligibility', ['Included', 'Included', 'Included', 'Included']],
  ],
  '16. CONVERSION RATE OPTIMISATION' => [
    ['Heatmap & session recording setup', ['—', 'Included', 'Included', 'Included']],
    ['CRO recommendations delivered', ['—', '3 per month', '6 per month', '12 per month']],
    ['Form & CTA audit', ['—', 'Monthly', 'Monthly', 'Bi-weekly']],
    ['A/B test design & analysis', ['—', '—', '1 per quarter', '1 per month']],
    ['Landing page conversion redesign brief', ['—', '—', '1 per quarter', '1 per month']],
  ],
  '17. E-COMMERCE & PRODUCT SEO' => [
    ['Category / collection pages optimised', ['3', '12', '30', '80']],
    ['Product pages optimised', ['10', '40', '100', '300']],
    ['Product title & description templating', ['—', 'Included', 'Included', 'Included + bulk automation']],
    ['Merchant Center feed diagnostics', ['—', 'Monthly', 'Bi-weekly', 'Weekly']],
    ['Faceted navigation & parameter rules', ['—', 'Included', 'Included', 'Included']],
    ['Out-of-stock / discontinued URL policy', ['—', 'Included', 'Included', 'Included']],
    ['Review & UGC schema strategy', ['—', 'Included', 'Included', 'Included']],
  ],
  '18. VIDEO & MULTIMEDIA SEO' => [
    ['Videos optimised', ['—', '2 per month', '4 per month', '10 per month']],
    ['On-page video embedding for video packs', ['—', 'Included', 'Included', 'Included']],
    ['YouTube channel SEO audit', ['—', 'Quarterly', 'Monthly', 'Monthly']],
  ],
  '19. INTERNATIONAL SEO' => [
    ['Hreflang setup & validation', ['—', 'If required', 'Included', 'Cluster-managed']],
    ['Market expansion roadmap', ['—', '—', '1 market', 'Up to 4 markets']],
    ['ccTLD vs subfolder architecture advice', ['—', '—', 'Included', 'Included']],
    ['Geo-targeting & currency signals', ['—', '—', 'Included', 'Included']],
  ],
  '20. PROGRAMMATIC SEO' => [
    ['Template architecture design', ['—', '—', '1 template set', 'Unlimited template sets']],
    ['Programmatic URLs built & monitored', ['—', '—', '200 per quarter', '1,000 per quarter']],
    ['Data source mapping & quality gates', ['—', '—', 'Included', 'Included']],
    ['Duplicate-intent guardrails', ['—', '—', 'Included', 'Included + automated alerting']],
  ],
  '21. COMPETITIVE & MARKET INTELLIGENCE' => [
    ['Share-of-voice tracking', ['5 competitors', '8 competitors', '12 competitors', '20 competitors']],
    ['Estimated traffic-value modelling', ['—', 'Quarterly', 'Monthly', 'Monthly']],
    ['Competitor content & link velocity alerts', ['—', 'Included', 'Included', 'Real-time']],
    ['Algorithm update impact report', ['Summary note', 'Included', 'Included', 'Included + remediation plan']],
    ['SERP volatility monitoring', ['—', 'Included', 'Included', 'Included']],
    ['Scenario-based revenue forecasting', ['—', '—', 'Quarterly', 'Monthly']],
  ],
  '22. GOVERNANCE, TRAINING & ENABLEMENT' => [
    ['SEO requirements docs for your dev team', ['—', 'Included', 'Maintained', 'Maintained']],
    ['Pre-release SEO checklist in your sprints', ['—', '—', 'Included', 'Included']],
    ['Team training sessions', ['—', '1 per half-year', '1 per quarter', '1 per quarter + on-demand']],
    ['Written SEO playbook for your organisation', ['—', '—', 'Included', 'Included, continuously updated']],
  ],
  '23. REPORTING & PERFORMANCE TRACKING' => [
    ['Live Looker Studio dashboard', ['Read-only', 'Included', 'Custom KPIs', 'Real-time + threshold alerting']],
    ['Written report cadence', ['Monthly', 'Bi-weekly + monthly', 'Weekly + monthly', 'Weekly + monthly + QBR']],
    ['Rank tracking frequency', ['Daily', 'Daily', 'Daily', 'Daily + hourly on priority terms']],
    ['Conversion & lead attribution', ['GA4 events', 'Full GA4 event model', 'GA4 + CRM assist', 'Full revenue attribution']],
    ['Transparent task work log', ['Included', 'Included', 'Included', 'Included + evidence links']],
    ['Quarterly Business Review', ['—', 'Included', 'Included', 'Board-ready deck']],
  ],
  '24. ACCOUNT MANAGEMENT & SUPPORT' => [
    ['Strategy calls', ['1 x 45 min per month', '2 x 45 min per month', '2 x 60 min per month', 'Weekly']],
    ['Communication channels', ['Email + WhatsApp', 'Email + WhatsApp group', '+ Shared Slack channel', 'Slack Connect + phone hotline']],
    ['Response SLA', ['24 hours', '12 hours', '6 hours', '2 hours']],
    ['Named point of contact', ['SEO Executive', 'SEO Executive', 'SEO Manager', 'Account Director']],
    ['Escalation path to leadership', ['—', 'Included', 'Included', 'Contractual']],
    ['Annual strategy offsite', ['—', '—', '—', 'Virtual or on-site']],
  ]
];

$plans = [
  0 => [
    'name' => 'Basic SEO',
    'for' => 'Local businesses & startups',
    'price_m' => '361.45',
    'price_y' => '301.21',
    'annual_total' => '3,614.50',
    'inr_m_total' => '40,519',
    'inr_y_total' => '405,185',
    'discount' => '16.7%',
    'flag' => 'Special offer',
    'btn_class' => 'btn--line',
    'pick' => false,
    'specs' => [
      'Keywords' => '20+ (250 tracked)',
      'Locations' => '2 cities',
      'First results' => '4-6 months',
      'Team' => '1 SEO Executive'
    ]
  ],
  1 => [
    'name' => 'Standard SEO',
    'for' => 'Growing enterprises',
    'price_m' => '590.36',
    'price_y' => '491.97',
    'annual_total' => '5,903.60',
    'inr_m_total' => '66,179',
    'inr_y_total' => '661,794',
    'discount' => '16.7%',
    'flag' => 'Best choice',
    'btn_class' => 'btn--signal',
    'pick' => true,
    'specs' => [
      'Keywords' => '40+ (600 tracked)',
      'Locations' => '3 cities',
      'First results' => '3-5 months',
      'Team' => 'Exec + Strategist'
    ]
  ],
  2 => [
    'name' => 'Gold SEO',
    'for' => 'Established brands',
    'price_m' => '855.42',
    'price_y' => '769.88',
    'annual_total' => '9,238.54',
    'inr_m_total' => '95,893',
    'inr_y_total' => '1,035,640',
    'discount' => '10.0%',
    'flag' => 'High Growth',
    'btn_class' => 'btn--line',
    'pick' => false,
    'specs' => [
      'Keywords' => '80+ (1,500 tracked)',
      'Locations' => 'All cities',
      'First results' => '3-4 months',
      'Team' => 'SEO Manager + 3'
    ]
  ],
  3 => [
    'name' => 'Premium SEO',
    'for' => 'Large enterprises',
    'price_m' => '1325.30',
    'price_y' => '1192.77',
    'annual_total' => '14,313.24',
    'inr_m_total' => '148,566',
    'inr_y_total' => '1,604,514',
    'discount' => '10.0%',
    'flag' => 'Enterprise',
    'btn_class' => 'btn--line',
    'pick' => false,
    'specs' => [
      'Keywords' => '200+ (4,000 tracked)',
      'Locations' => 'Multi-country',
      'First results' => '2-4 mo (phased)',
      'Team' => 'Dedicated Pod of 5'
    ]
  ]
];
@endphp

<section class="phero shell">
  <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li aria-current="page">Pricing</li></ol></nav>
  <p class="eyebrow">Pricing</p>
  <h1 style="margin-top:var(--sp-4)">SEO pricing, published. No discovery call required.</h1>
  <p class="lead">
    Four monthly packages. The scope of each is listed in full below, including what is
    <em>not</em> included, because the exclusions are usually what a vendor hides.
    Development and design work is quoted per project; <a href="{{ url('/free-consultation') }}"
    style="text-decoration:underline;text-decoration-color:var(--signal);text-underline-offset:3px">book
    a consultation</a> for that.
  </p>
  <div style="margin-top:var(--sp-7);display:flex;flex-wrap:wrap;gap:var(--sp-5);align-items:center">
    <div class="toggle" data-billing-toggle role="group" aria-label="Billing cycle">
      <button type="button" data-cycle="monthly" aria-pressed="true">Billed monthly</button>
      <button type="button" data-cycle="yearly" aria-pressed="false">Billed yearly &middot; save up to 16.7%</button>
    </div>
    <p style="font:400 var(--fs-micro)/1.5 var(--font-mono);color:var(--text-3);max-width:32ch">
      Prices in USD. Indian clients are billed in INR at 1 USD = 95.00 INR plus 18% GST at checkout.
    </p>
  </div>
</section>

<!-- MAIN CARDS SECTION -->
<section class="band band--tight shell">
  <div class="plans">
    @foreach($plans as $planIdx => $plan)
      <div class="plan {{ $plan['pick'] ? 'plan--pick' : '' }}" data-reveal data-plan-name="{{ $plan['name'] }}" onclick="selectPlanCard(this)">
        <span class="plan__flag">{{ $plan['flag'] }}</span>
        <div>
          <p class="plan__name">{{ $plan['name'] }}</p>
          <p class="plan__for">{{ $plan['for'] }}</p>
        </div>
        <div class="plan__price">
          <div style="display:flex;align-items:center;justify-content:space-between;width:100%;">
            <b data-monthly="{{ $plan['price_m'] }}" data-yearly="{{ $plan['price_y'] }}">${{ number_format($plan['price_m'], 2) }}</b>
            <span class="plan-discount-badge">
              Save {{ $plan['discount'] }}
            </span>
          </div>
          <span data-cycle-label 
                data-monthly-label="/mo + 18% tax" 
                data-yearly-label="/mo, billed yearly (${{ $plan['annual_total'] }}/yr + 18% tax)">
            /mo + 18% tax
          </span>
        </div>
        <dl class="plan__spec">
          @foreach($plan['specs'] as $k => $v)
            <div><dt>{{ $k }}</dt><dd>{{ $v }}</dd></div>
          @endforeach
        </dl>
        <button type="button" class="btn {{ $plan['btn_class'] }}" onclick="openCheckoutModal('{{ $plan['name'] }}', '{{ $plan['price_m'] }}', '{{ $plan['price_y'] }}', '{{ $plan['annual_total'] }}', '{{ $plan['inr_m_total'] }}', '{{ $plan['inr_y_total'] }}', this)" style="justify-content:center;width:100%;">
          Start with {{ explode(' ', $plan['name'])[0] }}
        </button>

        <ul class="feat">
          @php $secCount = 0; @endphp
          @foreach($sections as $secName => $items)
            @php $secCount++; @endphp

            @if($secCount == 3)
              </ul>
              <button type="button" class="btn-toggle-details btn-read-more" onclick="expandPackageDetails(this)">
                <span>Read More (Sections 3-24)</span>
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" style="margin-left:6px;"><path d="M2.5 4.5L6 8L9.5 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </button>
              <div class="extra-sections" style="display:none;">
                <ul class="feat">
            @endif

            <li class="feat-section-header">{{ $secName }}</li>
            @foreach($items as $item)
              @php $val = $item[1][$planIdx]; @endphp
              @if($val === '—')
                <li data-no>
                  <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M4 4l8 8M12 4l-8 8" stroke="#ef4444" stroke-width="2" stroke-linecap="round"/></svg>
                  <span>{{ $item[0] }}</span>
                </li>
              @else
                <li>
                  <svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                  <span>{{ $item[0] }}: <strong>{{ $val }}</strong></span>
                </li>
              @endif
            @endforeach
          @endforeach

          @if($secCount >= 3)
                </ul>
                <button type="button" class="btn-toggle-details btn-read-less" onclick="collapsePackageDetails(this)">
                  <span>Read Less</span>
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" style="margin-left:6px;transform:rotate(180deg)"><path d="M2.5 4.5L6 8L9.5 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
              </div>
          @else
            </ul>
          @endif
      </div>
    @endforeach
  </div>
</section>

<!-- CHECKOUT DETAILS MODAL -->
<div class="checkout-modal-backdrop" id="checkoutModal" onclick="if(event.target===this)closeCheckoutModal()">
  <div class="checkout-modal">
    <div class="checkout-modal__header">
      <h3 class="checkout-modal__title">Confirm Your Details</h3>
      <button type="button" class="checkout-modal__close" onclick="closeCheckoutModal()">&times;</button>
    </div>

    <div class="checkout-summary">
      <div class="checkout-summary__row">
        <span>Selected Package:</span>
        <span class="checkout-summary__val" id="summaryPackageName">Standard SEO</span>
      </div>
      <div class="checkout-summary__row">
        <span>Billing Cycle:</span>
        <span class="checkout-summary__val" id="summaryBillingCycle">Monthly</span>
      </div>
      <div class="checkout-summary__row">
        <span>Total Price (incl. 18% tax):</span>
        <span class="checkout-summary__val checkout-summary__val--total" id="summaryTotalPrice">$696.62 / Monthly</span>
      </div>
    </div>

    <form class="checkout-form" id="checkoutForm" onsubmit="handleCheckoutSubmit(event)">
      <div class="form-group">
        <label for="checkoutName">Full Name *</label>
        <input type="text" id="checkoutName" required placeholder="Enter your full name">
      </div>
      <div class="form-group">
        <label for="checkoutEmail">Email Address *</label>
        <input type="email" id="checkoutEmail" required placeholder="Enter your email address">
      </div>
      <div class="form-group">
        <label for="checkoutPhone">WhatsApp Contact Number *</label>
        <input type="tel" id="checkoutPhone" required placeholder="e.g. 9876543210">
      </div>

      <button type="submit" class="btn-proceed-pay" id="btnProceedPay">
        <span>Proceed to Pay</span> 🔒
      </button>
    </form>
  </div>
</div>

<script>
let currentSelectedPackage = {
  name: 'Standard SEO',
  priceM: '590.36',
  priceY: '491.97',
  annualTotal: '5,903.60'
};

function selectPlanCard(cardEl) {
  const container = document.querySelector('.plans');
  if (container) {
    container.classList.add('has-user-selection');
  }

  document.querySelectorAll('.plan').forEach(c => {
    c.classList.remove('is-selected');
    c.classList.remove('plan--pick');
  });

  if (cardEl) {
    cardEl.classList.add('is-selected');
  }
}

function expandPackageDetails() {
  document.querySelectorAll('.extra-sections').forEach(div => {
    div.style.display = 'block';
  });
  document.querySelectorAll('.btn-read-more').forEach(btn => {
    btn.style.display = 'none';
  });
}

function collapsePackageDetails() {
  document.querySelectorAll('.extra-sections').forEach(div => {
    div.style.display = 'none';
  });
  document.querySelectorAll('.btn-read-more').forEach(btn => {
    btn.style.display = 'flex';
  });
  const plansSection = document.querySelector('.plans');
  if (plansSection) {
    plansSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }
}

function openCheckoutModal(name, priceM, priceY, annualTotal, inrM, inrY, btnEl) {
  if (btnEl) {
    const card = btnEl.closest('.plan');
    selectPlanCard(card);
  }

  currentSelectedPackage = { name, priceM, priceY, annualTotal, inrM, inrY };

  // Detect billing cycle
  const activeCycleBtn = document.querySelector('[data-billing-toggle] button[aria-pressed="true"]');
  const isYearly = activeCycleBtn && activeCycleBtn.dataset.cycle === 'yearly';

  const cycleText = isYearly ? 'Billed Yearly' : 'Monthly';
  const displayInrTotal = isYearly ? (inrY || annualTotal) : (inrM || priceM);

  document.getElementById('summaryPackageName').textContent = name;
  document.getElementById('summaryBillingCycle').textContent = cycleText;
  document.getElementById('summaryTotalPrice').textContent = '₹' + displayInrTotal + ' (incl. 18% GST) / ' + cycleText;

  const modal = document.getElementById('checkoutModal');
  modal.classList.add('is-active');
}

function closeCheckoutModal() {
  const modal = document.getElementById('checkoutModal');
  modal.classList.remove('is-active');
  const form = document.getElementById('checkoutForm');
  if (form) {
    form.reset();
  }
}

function handleCheckoutSubmit(e) {
  e.preventDefault();

  const name = document.getElementById('checkoutName').value.trim();
  const email = document.getElementById('checkoutEmail').value.trim();
  const phone = document.getElementById('checkoutPhone').value.trim();

  const activeCycleBtn = document.querySelector('[data-billing-toggle] button[aria-pressed="true"]');
  const isYearly = activeCycleBtn && activeCycleBtn.dataset.cycle === 'yearly';
  const cycleType = isYearly ? 'yearly' : 'monthly';
  const basePrice = isYearly ? currentSelectedPackage.priceY : currentSelectedPackage.priceM;

  const payBtn = document.getElementById('btnProceedPay');
  payBtn.disabled = true;
  payBtn.innerHTML = '<span>Processing...</span>';

  fetch("{{ route('razorpay.create-order') }}", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      "X-CSRF-TOKEN": "{{ csrf_token() }}"
    },
    body: JSON.stringify({
      name: name,
      email: email,
      confirm_email: email,
      whatsapp_number: phone,
      package_name: currentSelectedPackage.name,
      package_type: cycleType,
      package_price: basePrice
    })
  })
  .then(res => res.json())
  .then(data => {
    payBtn.disabled = false;
    payBtn.innerHTML = '<span>Proceed to Pay</span> 🔒';

    if (data.error) {
      alert(data.error);
      return;
    }

    var options = {
      "key": data.key_id,
      "amount": data.amount,
      "currency": data.currency,
      "name": "Edion Web Technologies",
      "description": data.package_name,
      "order_id": data.razorpay_order_id,
      "handler": function (paymentRes) {
        fetch("{{ route('razorpay.verify-payment') }}", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
          },
          body: JSON.stringify({
            razorpay_order_id: paymentRes.razorpay_order_id,
            razorpay_payment_id: paymentRes.razorpay_payment_id,
            razorpay_signature: paymentRes.razorpay_signature
          })
        })
        .then(r => r.json())
        .then(verifyData => {
          if (verifyData.status === 'success') {
            alert('🎉 Payment Successful! Reference Payment ID: ' + paymentRes.razorpay_payment_id);
            closeCheckoutModal();
          } else {
            alert('Payment verification error: ' + (verifyData.message || 'Verification failed'));
          }
        });
      },
      "prefill": {
        "name": data.name,
        "email": data.email,
        "contact": data.whatsapp_number
      },
      "theme": {
        "color": "#2563eb"
      }
    };

    var rzp = new Razorpay(options);
    rzp.open();
  })
  .catch(err => {
    payBtn.disabled = false;
    payBtn.innerHTML = '<span>Proceed to Pay</span> 🔒';
    console.error(err);
    alert('An unexpected error occurred while initiating payment.');
  });
}
</script>

</main>
@endsection