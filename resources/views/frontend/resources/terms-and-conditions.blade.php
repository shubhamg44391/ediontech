@extends('frontend.layouts.app')

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'Terms & Conditions | Edion Web Technologies')
@section('description', !empty($headerdata->meta_description) ? $headerdata->meta_description : 'The rules governing use of the Edion Web Technologies website and services, including intellectual property, user responsibilities and governing law.')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'terms and conditions, Edion legal terms, terms of service')

@section('main-container')
<main id="main"><a id="top"></a>
<section class="phero shell">
 <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li aria-current="page">Terms &amp; Conditions</li></ol></nav>
 <p class="eyebrow">Legal</p>
 <h1 style="margin-top:var(--sp-4)">Terms &amp; Conditions</h1>
 <p class="lead">The rules governing use of the Edion Web Technologies website and services, including intellectual property, user responsibilities and governing law.</p>
 <p style="margin-top:var(--sp-5);font:400 var(--fs-micro)/1.6 var(--font-mono);color:var(--text-3);letter-spacing:.05em">
 Last reviewed August 2026</p>
</section>
<section class="band shell">
 <div class="article__body" style="max-width:74ch">
<p>For the purpose of these Terms and Conditions, the terms &ldquo;we&rdquo;, &ldquo;us&rdquo; and
&ldquo;our&rdquo; used anywhere on this page shall mean <strong>Edion Web Technologies (OPC) Private Limited</strong>, whose registered
and operational office is 4C 487, Sector 4, Gomti Nagar Extension, Lucknow, Uttar Pradesh 226010, India. &ldquo;You&rdquo;, &ldquo;your&rdquo;, &ldquo;user&rdquo; and
&ldquo;visitor&rdquo; shall mean any natural or legal person who is visiting our website and/or has
agreed to purchase from us.</p>

<h2>Your use of the website and any purchase from us is governed by the following terms</h2>
<ol>
 <li>The content of the pages of this website is subject to change without notice.</li>
 <li>Neither we nor any third parties provide any warranty or guarantee as to the accuracy,
 timeliness, performance, completeness or suitability of the information and materials found
 or offered on this website for any particular purpose. You acknowledge that such information
 and materials may contain inaccuracies or errors, and we expressly exclude liability for any
 such inaccuracies or errors to the fullest extent permitted by law.</li>
 <li>Your use of any information or materials on our website and/or product pages is entirely at
 your own risk, for which we shall not be liable. It is your own responsibility to ensure that
 any products, services or information available through our website and/or product pages meet
 your specific requirements.</li>
 <li>Our website contains material which is owned by or licensed to us. This material includes,
 but is not limited to, the design, layout, look, appearance and graphics. Reproduction is
 prohibited other than in accordance with the copyright notice, which forms part of these
 terms and conditions.</li>
 <li>All trademarks reproduced on our website which are not the property of, or licensed to, the
 operator are acknowledged on the website.</li>
 <li>Unauthorised use of information provided by us shall give rise to a claim for damages and/or
 may be a criminal offence.</li>
 <li>From time to time our website may include links to other websites. These links are provided
 for your convenience to offer further information.</li>
 <li>You may not create a link to our website from another website or document without Edion Web Technologies (OPC) Private Limited's
 prior written consent.</li>
 <li>Any dispute arising out of use of our website, any purchase with us, or any engagement with
 us is subject to the laws of India.</li>
 <li>We shall be under no liability whatsoever in respect of any loss or damage arising directly
 or indirectly out of the decline of authorisation for any transaction, on account of the
 cardholder having exceeded the preset limit mutually agreed by us with our acquiring bank
 from time to time.</li>
</ol>

<div class="callout">
 <b>Questions about these terms</b>
 Write to <a href="mailto:contact@ediontech.com">contact@ediontech.com</a> or call
 <a href="tel:+919696787596">+91 96967 87596</a>.
</div>
</div>
</section>

@include('frontend.partials.badgegrid')
</main>
@endsection
