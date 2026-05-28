@extends('Frontend.Layouts.main')


@section('main-container')
    <main id="mxd-page-content" class="mxd-page-content inner-page-content">
        <!-- Blur Effect Start -->
        <div class="blur-container">
            <div class="blur-layer blur-1"></div>
            <div class="blur-layer blur-2"></div>
            <div class="blur-layer blur-3"></div>
            <div class="blur-layer blur-4"></div>
            <div class="blur-layer blur-5"></div>
            <div class="blur-layer blur-6"></div>
            <div class="blur-layer blur-7"></div>
            <div class="blur-layer blur-8"></div>
        </div>
        <!-- Blur Effect End -->

        <!-- Section - Inner Headline v04 Start -->
        <div class="mxd-section blur-section ">
            <div class="mxd-container grid-l-container">

                <!-- Block - Inner Headline v04 Start -->
                <div class="mxd-block loading-wrap">
                    <div class="inner-headline">
                        <div class="p-0 container-fluid">
                            <div class="row g-0">
                                <div class="col-12 mxd-grid-item">
                                    <!-- breadcrumbs -->
                                    <div class="inner-headline__breadcrumbs loading-fade">
                                        <div class="breadcrumbs__nav">
                                            <span>
                                                <a href="{{ route('frontend.home') }}">
                                                    <span class="mxd-scramble">Home</span>
                                                </a>
                                            </span>
                                            <span class=" current-item">Privacy Policy
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <!-- content -->
                                    <div class="py-5 inner-headline__content">


                                        {{-- privacy policy content start --}}

                                        <!--=====================================-->
                                        <!--=       Breadcrumb Area Start       =-->
                                        <!--=====================================-->
                                        <div class="breadcrum-area">
                                            <div class="container px-5 ">
                                                <div class="px-5 py-5 ">

                                                    <h1 class="px-5 h2">Privacy Policy</h1>
                                                </div>
                                            </div>
                                            <ul class="shape-group-8 list-unstyled row col-12">
                                                {{-- <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500"
                                                    data-sal-delay="100">
                                                    <img src="assets/media/bubble-9.png" alt="Bubble">
                                                </li>
                                                <li class="absolute shape shape-2" data-sal="slide-left" data-sal-duration="500"
                                                    data-sal-delay="200">
                                                    <img src="assets/media/bubble-11.png" alt="Bubble">
                                                </li>
                                                <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500"
                                                    data-sal-delay="300">
                                                    <img src="assets/media/line-4.png" alt="Line">
                                                </li> --}}
                                            </ul>
                                        </div>
                                        <!--=====================================-->
                                        <!--=    Privacy Policy Area Start      =-->
                                        <!--=====================================-->
                                        <section class="section-padding privacy-policy-area">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-10">
                                                        <div class="privacy-policy-content">
                                                            <div class="section-title">
                                                                <h5 class="title">This Privacy policy was published on
                                                                    September 10th, 2021.</h5>
                                                            </div>

                                                            <p>This privacy policy sets out how EDION WEB TECHNOLOGIES (OPC)
                                                                PRIVATE LIMITED uses and protects any information that you
                                                                give EDION WEB TECHNOLOGIES (OPC) PRIVATE LIMITED when you
                                                                visit their website and/or agree to purchase from them.
                                                            </p>
                                                            EDION WEB TECHNOLOGIES (OPC) PRIVATE LIMITED is committed to
                                                            ensuring that your privacy is protected. Should we ask you to
                                                            provide certain information by which you can be identified when
                                                            using this website, and then you can be assured that it will
                                                            only be used in accordance with this privacy statement.
                                                            </p>
                                                            EDION WEB TECHNOLOGIES (OPC) PRIVATE LIMITED may change this
                                                            policy from time to time by updating this page. You should check
                                                            this page from time to time to ensure that you adhere to these
                                                            changes.
                                                            </p>
                                                            <h4>We may collect the following information:</h4>
                                                            <li>Name
                                                            <li>Contact information including email address
                                                            <li>Demographic information such as postcode, preferences and
                                                                interests, if required
                                                            <li>Other information relevant to customer surveys and/or offers

                                                                <h4>What we do with the information we gather</h4>
                                                                <ul>
                                                                    <p>We require this information to understand your needs
                                                                        and provide you with a better service, and in
                                                                        particular for the following reasons:</p>
                                                            </li>1. Internal record keeping.</li>
                                                            </li>2. We may use the information to improve our products and
                                                            services.
                                                            </li>3. We may periodically send promotional emails about new
                                                            products, special offers or other information which we think you
                                                            may find interesting using the email address which you have
                                                            provided.
                                                            </li>4. From time to time, we may also use your information to
                                                            contact you for market research purposes. We may contact you by
                                                            email, phone, fax or mail. We may use the information to
                                                            customise the website according to your interests.
                                                            </p>We are committed to ensuring that your information is
                                                            secure. In order to prevent unauthorised access or disclosure we
                                                            have put in suitable measures.</p>
                                                            </ul>
                                                            <h4>How we use cookies</h4>
                                                            <p class="mb--20">
                                                            <p>A cookie is a small file which asks permission to be placed
                                                                on your computer's hard drive. Once you agree, the file is
                                                                added and the cookie helps analyze web traffic or lets you
                                                                know when you visit a particular site. Cookies allow web
                                                                applications to respond to you as an individual. The web
                                                                application can tailor its operations to your needs, likes
                                                                and dislikes by gathering and remembering information about
                                                                your preferences.
                                                            <p>

                                                            <p>We use traffic log cookies to identify which pages are being
                                                                used. This helps us analyze data about webpage traffic and
                                                                improve our website in order to tailor it to customer needs.
                                                                We only use this information for statistical analysis
                                                                purposes and then the data is removed from the system.
                                                            <p>

                                                            <p>Overall, cookies help us provide you with a better website,
                                                                by enabling us to monitor which pages you find useful and
                                                                which you do not. A cookie in no way gives us access to your
                                                                computer or any information about you, other than the data
                                                                you choose to share with us.
                                                            <p>

                                                            <p>You can choose to accept or decline cookies. Most web
                                                                browsers automatically accept cookies, but you can usually
                                                                modify your browser setting to decline cookies if you
                                                                prefer. This may prevent you from taking full advantage of
                                                                the website.
                                                            <p>
                                                                </ul>
                                                            <h4>Controlling your personal information</h4>
                                                            <p>You may choose to restrict the collection or use of your
                                                                personal information in the following ways:
                                                            <p>

                                                            <p>1. whenever you are asked to fill in a form on the website,
                                                                look for the box that you can click to indicate that you do
                                                                not want the information to be used by anybody for direct
                                                                marketing purposes
                                                            <p>

                                                            <p>2. if you have previously agreed to us using your personal
                                                                information for direct marketing purposes, you may change
                                                                your mind at any time by writing to or emailing us at

                                                            <p>We will not sell, distribute or lease your personal
                                                                information to third parties unless we have your permission
                                                                or are required by law to do so. We may use your personal
                                                                information to send you promotional information about third
                                                                parties which we think you may find interesting if you tell
                                                                us that you wish this to happen.
                                                            <p>

                                                            <p>If you believe that any information we are holding on you is
                                                                incorrect or incomplete, please write to 4C 487 SECTOR 4
                                                                GOMTI NAGAR EXTENSION Lucknow UTTAR PRADESH 226010 . or
                                                                contact us at or as soon as possible. We will promptly
                                                                correct any information found to be incorrect.
                                                            <p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                        <!--=====================================-->
                                        <!--=     Call To Action Area Start     =-->
                                        <!--=====================================-->
                                        {{-- <section class="section call-to-action-area">
                                            <div class="container">
                                                <div class="call-to-action">
                                                    <div class="section-heading heading-light">
                                                        <span class="subtitle">Let's Work Together</span>
                                                        <h2 class="title">Need a successful project?</h2>
                                                        <a href="{{ route('frontend.contact') }}"
                                                            class="axil-btn btn-large btn-fill-white">Estimate Project</a>
                                                    </div>
                                                    <div class="thumbnail">
                                                        <div class="larg-thumb" data-sal="zoom-in" data-sal-duration="600"
                                                            data-sal-delay="100">
                                                            <img class="paralax-image"
                                                                src="assets/media/others/chat-group.png" alt="Chat">
                                                        </div>
                                                        <ul class="list-unstyled small-thumb">
                                                            <li class="shape shape-1" data-sal="slide-right"
                                                                data-sal-duration="800" data-sal-delay="400">
                                                                <img class="paralax-image"
                                                                    src="assets/media/others/laptop-poses.png"
                                                                    alt="Laptop">
                                                            </li>
                                                            <li class="shape shape-2" data-sal="slide-left"
                                                                data-sal-duration="800" data-sal-delay="300">
                                                                <img class="paralax-image"
                                                                    src="assets/media/others/bill-pay.png" alt="Bill">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-unstyled shape-group-9">
                                                <li class="shape shape-1"><img src="assets/media/others/bubble-12.png"
                                                        alt="Comments"></li>
                                                <li class="shape shape-2"><img src="assets/media/others/bubble-16.png"
                                                        alt="Comments"></li>
                                                <li class="shape shape-3"><img src="assets/media/others/bubble-13.png"
                                                        alt="Comments"></li>
                                                <li class="shape shape-4"><img src="assets/media/others/bubble-14.png"
                                                        alt="Comments"></li>
                                                <li class="shape shape-5"><img src="assets/media/others/bubble-16.png"
                                                        alt="Comments"></li>
                                                <li class="shape shape-6"><img src="assets/media/others/bubble-15.png"
                                                        alt="Comments"></li>
                                                <li class="shape shape-7"><img src="assets/media/others/bubble-16.png"
                                                        alt="Comments"></li>
                                            </ul>
                                        </section> --}}
                                        <!--=====================================-->



                                        {{-- privacy policy content end --}}


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Block - Inner Headline v04 End -->

        </div>

    </main>
@endsection
