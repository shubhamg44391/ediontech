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
                                                <a href="/">
                                                    <span class="mxd-scramble">Home</span>
                                                </a>
                                            </span>
                                            <span class="current-item">Free Consultation
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <!-- content -->
                                    <div class="py-5 has-medium-title">
                                      
                                            
                                                {{-- free consultation page content start --}}


                                                <!--=====================================-->
                                                <div class="breadcrum-area">
                                                    <div class="container">
                                                        <!-- Google Calendar Appointment Scheduling begin -->
                                                        <iframe
                                                            src="https://calendar.google.com/calendar/appointments/schedules/AcZssZ2q_G-iiyc81JQ7GzBBWj6efjmlRBK9FrqPp0Q5XE6bhz2OKxYEIhTwkmdcRwcHrS-pPI2PpBiS?gv=true"
                                                            style="border: 0" width="100%" height="600"
                                                            frameborder="0"></iframe>
                                                        <!-- end Google Calendar Appointment Scheduling -->
                                                    </div>
                                                </div>
                                                <!--=====================================-->

                                                {{-- free consultation page content end --}}

                                      
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
