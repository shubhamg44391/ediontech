@extends('frontend.layouts.app')

@section('title', 'Refund & Cancellation Policy | Edion Web Technologies')
@section('description', "Edion Web Technologies' refund and cancellation terms for website development, mobile apps, SEO, custom software and digital marketing services.")
@section('keywords', 'refund policy, cancellation policy, Edion Web Technologies refund')

@section('main-container')
<main id="main"><a id="top"></a>
<section class="phero shell">
 <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li aria-current="page">Refund &amp; Cancellation Policy</li></ol></nav>
 <p class="eyebrow">Legal</p>
 <h1 style="margin-top:var(--sp-4)">Refund &amp; Cancellation Policy</h1>
 <p class="lead">Edion Web Technologies' refund and cancellation terms for <span class="kw kw--pri"><b class="kw">website development</b></span>, mobile apps, SEO, custom software and digital marketing services.</p>
 <p style="margin-top:var(--sp-5);font:400 var(--fs-micro)/1.6 var(--font-mono);color:var(--text-3);letter-spacing:.05em">
 Last reviewed August 2026</p>
</section>
<section class="band shell">
 <div class="article__body" style="max-width:74ch">
<p>Thank you for choosing <strong>Edion Web Technologies (OPC) Private Limited</strong> for your web development, design and technology
solutions. We value our customers and strive to provide the highest quality services. Please take a
moment to review this Refund &amp; Cancellation Policy.</p>

<h2>1. No refund policy</h2>
<p>At Edion Web Technologies we take pride in delivering high-quality, customised services tailored
to each of our clients. As the services we offer, including website development, design,
digital marketing and other custom solutions, are specifically designed to meet your needs
and are delivered electronically, we do not offer refunds once services have been rendered or
agreements have been signed.</p>

<h2>2. Service cancellation</h2>
<p>If you wish to cancel or terminate a service, please inform us in writing by email at
<a href="mailto:contact@ediontech.com">contact@ediontech.com</a>. Cancellation requests will be considered on a case-by-case
basis, subject to the terms agreed in the initial service agreement. Please note that any work
completed or in progress prior to cancellation will be billed according to the agreed terms.</p>

<h2>3. Modifications or adjustments</h2>
<p>If there are any issues with the delivered service, or if you require modifications or
adjustments, we are committed to working with you to resolve any concerns. We encourage clear
communication and feedback during the service delivery process to ensure your satisfaction with
the final output.</p>

<h2>4. Subscription and recurring payments</h2>
<p>For any subscription-based or recurring services, you may cancel future payments by notifying us
at least 10 days prior to the next billing cycle. However, payments already made for the ongoing
period will not be refunded.</p>

<h2>5. Service-specific terms</h2>
<p>Some services may have additional or more specific terms relating to cancellation, which will be
set out in your service agreement. Please refer to your signed contract or agreement for any
service-specific details.</p>

<h2>6. Agreement acknowledgement</h2>
<p>By engaging with Edion Web Technologies (OPC) Private Limited and signing our service agreement or accepting our proposal, you
acknowledge and agree to the terms set out in this Refund &amp; Cancellation Policy.</p>

<p>If you have any questions or need further clarification, please do not hesitate to reach out.</p>

<div class="callout">
 <b>Contact us</b>
 Edion Web Technologies (OPC) Private Limited<br>
 <a href="mailto:contact@ediontech.com">contact@ediontech.com</a> &middot;
 <a href="tel:+919696787596">+91 96967 87596</a> &middot;
 <a href="https://wa.me/919696787596" target="_blank" rel="noopener noreferrer">WhatsApp</a><br>
 <a href="{{ url('/') }}">ediontech.com</a>
</div>
</div>
</section>

@include('frontend.partials.badgegrid')
</main>
@endsection
