
@extends('frontend.layouts.app')

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'SEO Package Details - Edion Web Technologies')
@section('description', !empty($headerdata->meta_description) ? $headerdata->meta_description : 'Detailed breakdown of SEO packages, features, and deliverables.')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'SEO package details, SEO pricing breakdown, search engine optimization')

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
    'flag' => 'SPECIAL OFFER',
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
    'flag' => 'BEST CHOICE',
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
    'flag' => 'HIGH GROWTH',
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
    'flag' => 'ENTERPRISE',
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

$slugMap = [
  'basic-seo' => 0,
  'standard-seo' => 1,
  'gold-seo' => 2,
  'premium-seo' => 3,
];

$activeSlug = isset($slug) ? strtolower($slug) : 'standard-seo';
$currentIdx = isset($slugMap[$activeSlug]) ? $slugMap[$activeSlug] : 1;
$selectedPlan = $plans[$currentIdx];
@endphp

@section('title', $selectedPlan['name'] . ' Package Details & Deliverables | Edion Web Technologies')
@section('description', 'Full scope, deliverables and itemised specifications for the ' . $selectedPlan['name'] . ' package at $' . $selectedPlan['price_m'] . '/mo.')
@section('keywords', strtolower($selectedPlan['name']) . ', SEO package details, SEO package scope, technical SEO deliverables')

@section('main-container')
<main id="main"><a id="top"></a>

<!-- Razorpay JS SDK -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<style>
.single-pkg-hero-card {
  background: #ffffff;
  border: 2px solid var(--signal);
  border-radius: 20px;
  padding: var(--sp-7);
  box-shadow: 0 16px 40px rgba(0,0,0,0.08);
  margin-bottom: var(--sp-8);
  position: relative;
}

.single-pkg-badge {
  display: inline-block;
  font-family: var(--font-mono);
  font-size: 12px;
  font-weight: 800;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  color: #ffffff;
  background: var(--signal, #ef4444);
  padding: 6px 14px;
  border-radius: 100px;
  margin-bottom: var(--sp-3);
}

.single-pkg-title {
  font-family: var(--font-display);
  font-size: 2.5rem;
  font-weight: 800;
  color: var(--ink);
  margin: 0;
  line-height: 1.1;
}

.single-pkg-subtitle {
  font-size: 1.1rem;
  color: var(--text-2);
  margin-top: 6px;
  margin-bottom: var(--sp-5);
}

.single-pkg-price-box {
  display: flex;
  align-items: baseline;
  gap: 12px;
  background: var(--paper-1);
  padding: var(--sp-4) var(--sp-5);
  border-radius: var(--radius-lg);
  border: 1px dashed var(--paper-3);
  margin-bottom: var(--sp-6);
}

.single-pkg-price-val {
  font-family: var(--font-display);
  font-size: 3rem;
  font-weight: 800;
  color: var(--ink);
  letter-spacing: -0.03em;
}

.single-pkg-specs-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--sp-4);
  margin-bottom: var(--sp-6);
}
@media (max-width: 800px) {
  .single-pkg-specs-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 500px) {
  .single-pkg-specs-grid {
    grid-template-columns: 1fr;
  }
}

.spec-tile {
  background: var(--paper-1);
  padding: var(--sp-4);
  border-radius: var(--radius-md);
  border: 1px solid var(--paper-3);
}
.spec-tile-lbl {
  font-family: var(--font-mono);
  font-size: 11px;
  color: var(--text-3);
  text-transform: uppercase;
  margin-bottom: 4px;
}
.spec-tile-val {
  font-family: var(--font-display);
  font-size: 1.1rem;
  font-weight: 800;
  color: var(--ink);
}

.single-pkg-features-box {
  margin-top: var(--sp-6);
  margin-bottom: var(--sp-6);
  padding-top: var(--sp-6);
  border-top: 1px dashed var(--paper-3);
}
.single-pkg-features-title {
  font-family: var(--font-display);
  font-size: 1.25rem;
  font-weight: 800;
  color: var(--ink);
  margin-bottom: var(--sp-5);
}

.sec-group-list {
  display: flex;
  flex-direction: column;
  gap: var(--sp-5);
  margin-top: var(--sp-4);
}
.sec-group-card {
  background: #ffffff;
  border: 1px solid var(--paper-3);
  border-radius: var(--radius-lg);
  padding: var(--sp-4) var(--sp-5);
  box-shadow: 0 2px 8px rgba(0,0,0,0.02);
}
.sec-group-hdr {
  font-family: var(--font-display);
  font-size: 0.95rem;
  font-weight: 800;
  color: var(--ink);
  letter-spacing: 0.04em;
  text-transform: uppercase;
  margin-bottom: var(--sp-3);
  padding-bottom: 8px;
  border-bottom: 2px solid var(--paper-2);
}
.sec-group-items {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 10px 20px;
}
@media (max-width: 768px) {
  .sec-group-items {
    grid-template-columns: 1fr;
  }
}
.feat-item {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  font-size: 0.875rem;
  line-height: 1.45;
  background: var(--paper-1);
  padding: 8px 12px;
  border-radius: var(--radius-md);
  border: 1px solid var(--paper-3);
}
.feat-item--disabled {
  opacity: 0.55;
  background: var(--paper-2);
}
.feat-icon {
  flex-shrink: 0;
  margin-top: 2px;
}
.feat-lbl {
  color: var(--text-2);
}
.feat-val {
  color: var(--ink);
  font-weight: 700;
}
.feat-val--exc {
  color: #ef4444 !important;
  font-weight: 600 !important;
}

.single-deliv-table {
  width: 100%;
  border-collapse: collapse;
  background: #ffffff;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: 0 4px 20px rgba(0,0,0,0.04);
  border: 1px solid var(--paper-3);
  margin-bottom: var(--sp-8);
}
.single-deliv-table th {
  background: var(--ink);
  color: #ffffff;
  padding: 16px var(--sp-5);
  font-family: var(--font-display);
  font-size: 1.05rem;
  text-align: left;
}
.single-deliv-table td {
  padding: 14px var(--sp-5);
  border-bottom: 1px solid var(--paper-3);
  font-size: 0.9rem;
  vertical-align: middle;
}
.single-deliv-table tr.sec-hdr td {
  background: var(--paper-2);
  font-weight: 800;
  font-family: var(--font-display);
  color: var(--ink);
  font-size: 0.875rem;
  letter-spacing: 0.05em;
  text-transform: uppercase;
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

.badge-inc {
  background: #dcfce7;
  color: #15803d;
  font-size: 12px;
  font-weight: 700;
  padding: 3px 10px;
  border-radius: 100px;
  display: inline-flex;
  align-items: center;
  gap: 4px;
}
.badge-exc {
  background: #fee2e2;
  color: #b91c1c;
  font-size: 12px;
  font-weight: 700;
  padding: 3px 10px;
  border-radius: 100px;
  display: inline-flex;
  align-items: center;
  gap: 4px;
}
</style>

<section class="phero shell">
  <nav aria-label="Breadcrumb">
    <ol class="crumbs">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><a href="{{ route('resources.pricing') }}">Pricing</a></li>
      <li aria-current="page">{{ $selectedPlan['name'] }} Details</li>
    </ol>
  </nav>

  <h1 style="margin-top:var(--sp-2)">{{ $selectedPlan['name'] }}</h1>
 
</section>

<!-- FEATURED SINGLE PACKAGE SPOTLIGHT CARD -->
<section class="band band--tight shell">
  <div class="single-pkg-hero-card" data-reveal>
    <div style="display:flex;justify-content:space-between;align-items:flex-start;flex-wrap:wrap;gap:16px;">
      <div>
        <span class="single-pkg-badge">{{ $selectedPlan['flag'] }}</span>
        <h2 class="single-pkg-title">{{ $selectedPlan['name'] }}</h2>
        <p class="single-pkg-subtitle"><strong>{{ $selectedPlan['for'] }}</strong></p>
      </div>

      <div style="display:flex;flex-direction:column;align-items:flex-end;">
        <div class="toggle" data-billing-toggle role="group" aria-label="Billing cycle" style="margin-bottom:12px;">
          <button type="button" data-cycle="monthly" aria-pressed="true" onclick="setBillingCycle('monthly')">Monthly</button>
          <button type="button" data-cycle="yearly" aria-pressed="false" onclick="setBillingCycle('yearly')">Yearly (Save {{ $selectedPlan['discount'] }})</button>
        </div>
      </div>
    </div>

    <div class="single-pkg-price-box">
      <div>
        <span class="single-pkg-price-val" data-monthly="{{ $selectedPlan['price_m'] }}" data-yearly="{{ $selectedPlan['price_y'] }}">${{ number_format($selectedPlan['price_m'], 2) }}</span>
        <span style="font-family:var(--font-mono);font-size:0.9rem;color:var(--text-3);" data-cycle-label>/month + 18% tax</span>
      </div>
    </div>

    <div class="single-pkg-specs-grid">
      @foreach($selectedPlan['specs'] as $k => $v)
        <div class="spec-tile">
          <div class="spec-tile-lbl">{{ $k }}</div>
          <div class="spec-tile-val">{{ $v }}</div>
        </div>
      @endforeach
    </div>

    <!-- SECTION-WISE POINT-WISE DELIVERABLES BREAKDOWN INSIDE BOX -->
    <div class="single-pkg-features-box">
      <div class="sec-group-list">
        @foreach($sections as $secName => $items)
          @php
            $includedItems = array_filter($items, function($item) use ($currentIdx) {
              return $item[1][$currentIdx] !== '—';
            });
          @endphp
          @if(count($includedItems) > 0)
            <div class="sec-group-card">
              <h4 class="sec-group-hdr">{{ $secName }}</h4>
              <div class="sec-group-items">
                @foreach($includedItems as $item)
                  @php $val = $item[1][$currentIdx]; @endphp
                  <div class="feat-item">
                    <svg class="feat-icon" width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M3 8.5l3.2 3.2L13 5" stroke="#16a34a" stroke-width="2.2" stroke-linecap="round"/></svg>
                    <div>
                      <span class="feat-lbl">{{ $item[0] }}:</span>
                      <strong class="feat-val">{{ $val }}</strong>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          @endif
        @endforeach
      </div>
    </div>

    <div style="display:flex;gap:16px;flex-wrap:wrap;margin-top:24px;">
      <button type="button" class="btn btn--signal" onclick="openCheckoutModal('{{ $selectedPlan['name'] }}', '{{ $selectedPlan['price_m'] }}', '{{ $selectedPlan['price_y'] }}', '{{ $selectedPlan['annual_total'] }}', '{{ $selectedPlan['inr_m_total'] }}', '{{ $selectedPlan['inr_y_total'] }}', this)" style="padding:14px 28px;font-size:1.05rem;">
        Start with {{ explode(' ', $selectedPlan['name'])[0] }}
      </button>
      <a href="{{ route('resources.pricing') }}" class="btn btn--line" style="padding:14px 24px;">
        &larr; Back to Pricing Page
      </a>
    </div>
  </div>
</section>

<!-- CHECKOUT DETAILS MODAL -->
<div class="checkout-modal-backdrop" id="checkoutModal" onclick="if(event.target===this)closeCheckoutModal()">
  <div class="checkout-modal">
    <div class="checkout-modal__header">
      <h3 class="checkout-modal__title">Confirm Your Order Details</h3>
      <button type="button" class="checkout-modal__close" onclick="closeCheckoutModal()">&times;</button>
    </div>

    <div class="checkout-summary">
      <div class="checkout-summary__row">
        <span>Selected Package:</span>
        <span class="checkout-summary__val" id="summaryPackageName">{{ $selectedPlan['name'] }}</span>
      </div>
      <div class="checkout-summary__row">
        <span>Billing Cycle:</span>
        <span class="checkout-summary__val" id="summaryBillingCycle">Monthly</span>
      </div>
      <div class="checkout-summary__row">
        <span>Total Price (incl. 18% tax):</span>
        <span class="checkout-summary__val checkout-summary__val--total" id="summaryTotalPrice">₹{{ $selectedPlan['inr_m_total'] }} (incl. 18% GST) / Monthly</span>
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
  name: "{{ $selectedPlan['name'] }}",
  priceM: "{{ $selectedPlan['price_m'] }}",
  priceY: "{{ $selectedPlan['price_y'] }}",
  annualTotal: "{{ $selectedPlan['annual_total'] }}",
  inrM: "{{ $selectedPlan['inr_m_total'] }}",
  inrY: "{{ $selectedPlan['inr_y_total'] }}"
};

function setBillingCycle(cycle) {
  const btns = document.querySelectorAll('[data-billing-toggle] button');
  btns.forEach(b => {
    const isThis = b.dataset.cycle === cycle;
    b.setAttribute('aria-pressed', isThis ? 'true' : 'false');
  });

  const priceEl = document.querySelector('.single-pkg-price-val');
  const cycleLabel = document.querySelector('[data-cycle-label]');
  if (priceEl && cycleLabel) {
    if (cycle === 'yearly') {
      priceEl.textContent = '$' + parseFloat(priceEl.dataset.yearly).toFixed(2);
      cycleLabel.textContent = '/month (billed yearly $' + currentSelectedPackage.annualTotal + '/yr + 18% tax)';
    } else {
      priceEl.textContent = '$' + parseFloat(priceEl.dataset.monthly).toFixed(2);
      cycleLabel.textContent = '/month + 18% tax';
    }
  }
}

function openCheckoutModal(name, priceM, priceY, annualTotal, inrM, inrY, btnEl) {
  currentSelectedPackage = { name, priceM, priceY, annualTotal, inrM, inrY };

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
