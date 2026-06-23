   @extends('frontend.layouts.main')
{{-- @section( 'title',$headerdata->meta_title ?? 'Terms and Condition of Edion Web Technologies') --}}
  
@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'Terms and Condition of Edion Web Technologies')
@section( 'description',!empty($headerdata->meta_description) ? $headerdata->meta_description : 'Edion Web Technologies is a leading technology company delivering innovative digital solutions.')


@section('main-container')

      <main id="mxd-page-content" class="mxd-page-content inner-page-content">
         <div style="">
         

            <!--=====================================-->
                                          <div class="px-5 inner-headline__breadcrumbs loading-fade">
                                             <div class="p-5 breadcrumbs__nav">
                                                   <span>
                                                      <a href="{{ route('frontend.home') }}">
                                                         <span class="mxd-scramble">Home</span>
                                                      </a>
                                                   </span>
                                                   <span class="current-item">Terms & Conditions
                                                   </span>
                                             </div>
                                             <h3 class="px-5">Terms & Conditions</h3>
                                          </div>
                                          <!-- breadcrumbs -->

            <!--=====================================-->
            <!--=    Privacy Policy Area Start      =-->
            <!--=====================================-->
            <section class="py-5 section-padding privacy-policy-area">
               <div class="container py-5">
                  <div class="row justify-content-center">
                     <div class="col-lg-10">
                        <div class="privacy-policy-content text-start"
                           style="line-height: 1.8; font-size: 1.1rem; color: var(--text-color, #444);">
                           <p class="mb-4">
                              For the purpose of these Terms and Conditions, The term "we", "us", "our" used anywhere on this
                              page shall mean EDION WEB TECHNOLOGIES (OPC) PRIVATE LIMITED, whose registered/operational
                              office is 4C 487 SECTOR 4 GOMTI NAGAR EXTENSION Lucknow UTTAR PRADESH 226010 . "you", “your”,
                              "user", “visitor” shall mean any natural or legal person who is visiting our website and/or
                              agreed to purchase from us.
                           </p>

                           <h3 class="mt-5 mb-4">Your use of the website and/or purchase from us are governed by following
                              Terms and Conditions:</h3>

                           <p><strong>1.</strong> The content of the pages of this website is subject to change without
                              notice.</p>

                           <p><strong>2.</strong> Neither we nor any third parties provide any warranty or guarantee as to the
                              accuracy, timeliness, performance, completeness or suitability of the information and materials
                              found or offered on this website for any particular purpose. You acknowledge that such
                              information and materials may contain inaccuracies or errors and we expressly exclude liability
                              for any such inaccuracies or errors to the fullest extent permitted by law.</p>

                           <p><strong>3.</strong> Your use of any information or materials on our website and/or product pages
                              is entirely at your own risk, for which we shall not be liable. It shall be your own
                              responsibility to ensure that any products, services or information available through our
                              website and/or product pages meet your specific requirements.</p>

                           <p><strong>4.</strong> Our website contains material which is owned by or licensed to us. This
                              material includes, but are not limited to, the design, layout, look, appearance and graphics.
                              Reproduction is prohibited other than in accordance with the copyright notice, which forms part
                              of these terms and conditions.</p>

                           <p><strong>5.</strong> All trademarks reproduced in our website which are not the property of, or
                              licensed to, the operator are acknowledged on the website.</p>

                           <p><strong>6.</strong> Unauthorized use of information provided by us shall give rise to a claim
                              for damages and/or be a criminal offense.</p>

                           <p><strong>7.</strong> From time to time our website may also include links to other websites.
                              These links are provided for your convenience to provide further information.</p>

                           <p><strong>8.</strong> You may not create a link to our website from another website or document
                              without EDION WEB TECHNOLOGIES (OPC) PRIVATE LIMITED’s prior written consent.</p>

                           <p><strong>9.</strong> Any dispute arising out of use of our website and/or purchase with us and/or
                              any engagement with us is subject to the laws of India.</p>

                           <p><strong>10.</strong> We shall be under no liability whatsoever in respect of any loss or damage
                              arising directly or indirectly out of the decline of authorization for any Transaction, on
                              Account of the Cardholder having exceeded the preset limit mutually agreed by us with our
                              acquiring bank from time to time.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </section>

            <!--=====================================-->
            <!--=     Call To Action Area Start     =-->
            <!--=====================================-->
            <section class="section call-to-action-area">
                  <div class="container mt-5 text-center">
                     <div class="call-to-action">
                           <div class="section-heading heading-light">
                              <span class="subtitle">Let's Work Together</span>
                              <h2 class="title">Need a successful project?</h2>
                              <a href="{{ route('frontend.contact') }}" class="axil-btn btn-large btn-fill-white">Estimate
                                 Project</a>
                           </div>
                        
                     </div>
                  </div>

               </section>
         </div>
      </main>
   @endsection
