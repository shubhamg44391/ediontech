@extends('frontend.layouts.main')

{{-- @section( 'title',$headerdata->meta_title ?? 'Refund and Cancilation of Edion Web Technologies') --}}

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'Refund and Cancilation of Edion Web Technologies')
@section( 'description',!empty($headerdata->meta_description) ? $headerdata->meta_description : 'Edion Web Technologies is a leading technology company delivering innovative digital solutions.')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'website development, digital marketing, SEO, web design, Edion Web Technologies')


@section('main-container')

    <main id="mxd-page-content" class="mxd-page-content inner-page-content">
<div >

   

<!--=====================================-->
        <!--=       Breadcrumb Area Start       =-->
        <!--=====================================-->
       
         <!--=       Breadcrumb Area Start       =-->
                                        <!--=====================================-->
                                        <div class="px-5 inner-headline__breadcrumbs loading-fade">
                                            <div class="p-5 breadcrumbs__nav">
                                                <span>
                                                    <a href="{{ route('frontend.home') }}">
                                                        <span class="mxd-scramble">Home</span>
                                                    </a>
                                                </span>
                                                <span class="current-item">Refund & Cancellation Policy
                                                </span>
                                            </div>
                                            <h3 class="px-5">Refund & Cancellation Policy</h3>
                                        </div>
                                        <!-- breadcrumbs -->
        <!--=====================================-->
        <!--=    Refund & Cancellation Policy Area Start      =-->
        <!--=====================================-->
        <section class="py-5 section-padding refund-cancellation-policy-area">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="privacy-policy-content">
                            <p><strong>Edion Web Technologies (OPC) Private Limited</strong> (ediontech.com)</p>
                            <p>Thank you for choosing Edion Web Technologies (OPC) Private Limited for your web development, design, and technology solutions. We value our customers and strive to provide the highest quality services. Please take a moment to review our Refund & Cancellation Policy.</p>

                            <h4>1. No Refund Policy</h4>
                            <p>At Edion Web Technologies, we take pride in delivering high-quality, customized services tailored to each of our clients. As the services we offer (including website development, design, digital marketing, and other custom solutions) are specifically designed to meet your needs and are delivered electronically, we do not offer refunds once services have been rendered or agreements have been signed.</p>

                            <h4>2. Service Cancellation</h4>
                            <p>If you wish to cancel or terminate a service, please inform us in writing via email at <a href="mailto:contact@ediontech.com">contact@ediontech.com</a>. Cancellation requests will be considered on a case-by-case basis, subject to the terms agreed upon in the initial service agreement. Please note that any work completed or in progress prior to cancellation will be billed according to the agreed-upon terms.</p>

                            <h4>3. Modifications or Adjustments</h4>
                            <p>If there are any issues with the delivered service or if you require modifications or adjustments, we are committed to working with you to resolve any concerns. We encourage clear communication and feedback during the service delivery process to ensure your satisfaction with the final output.</p>

                            <h4>4. Subscription and Recurring Payments</h4>
                            <p>For any subscription-based or recurring services, you may cancel future payments by notifying us at least [10] days prior to the next billing cycle. However, payments already made for the ongoing period will not be refunded.</p>

                            <h4>5. Service-Specific Terms</h4>
                            <p>Some services may have additional or more specific terms related to cancellation, which will be outlined in your service agreement. Please refer to your signed contract or agreement for any service-specific details.</p>

                            <h4>6. Agreement Acknowledgement</h4>
                            <p>By engaging with Edion Web Technologies (OPC) Private Limited and signing our service agreement or accepting our proposal, you acknowledge and agree to the terms set forth in this Refund & Cancellation Policy.</p>

                            <p>If you have any questions or need further clarification, please don’t hesitate to reach out to us.</p>

                            <h4>Contact Us:</h4>
                            <p>Email: <a href="mailto:contact@ediontech.com">contact@ediontech.com</a><br>
                            Edion Web Technologies (OPC) Private Limited<br>
                            Website: <a href="http://ediontech.com">ediontech.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=====================================-->
        <!--=     Call To Action Area Start     =-->
        <!--=====================================-->
    
        <!--=====================================-->




   </div>
</main>
   @endsection
