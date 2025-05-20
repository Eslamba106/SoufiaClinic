   <!--=== Strat Subscribe Section ===-->
   <section class="subscribe-section bg-color-2668f5 ptb-100">
       <div class="container">
           <div class="row align-items-center">
               <div class="col-lg-6">
                   <div class="subscribe-content wow fadeInUp delay-0-2s">
                       <h2>{{ __('main.subscribe') }}</h2>
                   </div>
               </div>

               <div class="col-lg-6">
                   <form class="form-floating form-group subscribe-form wow fadeInUp delay-0-4s">
                       <input type="email" class="form-control" id="yourEmails" placeholder="Your Email" value=""
                           required="">
                       <label for="yourEmails" class="form-label">{{ __('main.your_email') }}</label>
                       <div class="invalid-feedback">{{ __('main.valid_email_is_required') }}</div>

                       <button type="submit" class="main-btn">
                           <span>{{ __('main.subscribe_on') }}</span>
                       </button>
                   </form>
               </div>
           </div>
       </div>
   </section>
   <!--=== End Subscribe Section ===-->

   <!--=== Start Footer Section ===-->
   <section class="footer-section pt-100 pb-70">
       <div class="container">
           <div class="row">
               <div class="col-lg-3 col-sm-6">
                   <div class="main-footer-item wow fadeInUp delay-0-2s">
                       <a href="{{ route('home') }}" class="footer-logo">
                           <img width="150px" height="100px" src="{{ asset('assets/images/logo2.png') }}" alt="Image">
                       </a>
                       <p>{{ __('main.logo_massege') }}</p>

                       <ul class="footer-social-link">
                        <li>
                            <a href="https://www.tiktok.com/@soufiaclinic3" target="_blank">
                                <i class="fa-brands fa-tiktok" ></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/share/1AaFt58QYc/?mibextid=wwXIfr" target="_blank">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/ozel.soufiaclinic?igsh=eDkybnZiYmw4dXZt" target="_blank">
                                <i class="icofont-instagram"></i>
                            </a>
                        </li>
                       </ul>
                   </div>
               </div>

               <div class="col-lg-3 col-sm-6">
                   <div class="main-footer-item wow fadeInUp delay-0-4s">
                       <h3>{{ __('main.useful_link') }}</h3>

                       <ul class="useful-link">
                           <li>
                               <a href="{{ route('about_us') }}">{{ __('main.about_us') }}</a>
                           </li>
                           <li>
                               <a href="{{ route('services') }}">{{ __('main.service') }}</a>
                           </li>
                           <li>
                               <a href="{{ route('appointment') }}">{{ __('main.appointment') }}</a>
                           </li>
                           {{-- <li>
                               <a href="blog.html">Blog</a>
                           </li> --}}
                       </ul>
                   </div>
               </div>

               <div class="col-lg-3 col-sm-6">
                   <div class="main-footer-item wow fadeInUp delay-0-6s">
                       <h3>{{ __('main.our_services') }}</h3>

                       <ul class="useful-link">
                           <li>
                               <a href="{{ route('services') }}">{{ __('main.service') }}</a>
                           </li>
                           {{-- <li>
                               <a href="pricing-plan.html">Pricing Plan</a>
                           </li> --}}
                           {{-- <li>
                               <a href="{{ __ }}">Doctors</a>
                           </li> --}}
                           {{-- <li>
                               <a href="testimonials.html">Testimonials</a>
                           </li> --}}
                       </ul>
                   </div>
               </div>

               <div class="col-lg-3 col-sm-6">
                   <div class="main-footer-item wow fadeInUp delay-0-8s">
                       <h3>{{ __('main.our_location') }}</h3>

                       <ul class="address-info">
                           <li>
                               <i class="icofont-location-pin"></i>
                               C10 No:1AF iç kapi, Maslak Mahallesi Taşyoncası Sokak, Maslak, 1453 1AF No:B4, 34485 Sarıyer/İstanbul, تركيا
                           </li>
                           <li>
                               <i class="icofont-envelope"></i>
                               <a href="mailto:bonax@gmail.com">bonax@gmail.com</a>
                           </li>
                           <li>
                               <i class="icofont-ui-call"></i>
                               <a href="tel:+905013170282">+90 501 317 02 82</a>
                           </li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!--=== End Footer Section ===-->

   <!--=== Start Copy Right Section ===-->
   <div class="copy-right-section">
       <div class="container">
           <div class="row">
               <div class="col-lg-8 col-md-7">
                   <p>{{ __('main.copy_right') }} © <span>{{ __('main.ozel_soufia') }} </span>
                           </p>
               </div>
               <div class="col-lg-4 col-md-5">
                   {{-- <ul>
                       <li>
                           <a href="terms-conditions.html">Terms & Condition</a>
                       </li>
                       <li>
                           <a href="privacy-policy.html">Privacy Policy</a>
                       </li>
                   </ul> --}}
               </div>
           </div>
       </div>

       <!--=== Start back To Top Section ===-->
       <div class="back-to-top">
           <i class="icofont-simple-up"></i>
       </div>
       <!--=== End Back To Top Section ===-->
   </div>
   <!--=== End Copy Right Section ===-->

   {{-- <ul class="rtl-buy">
        <li>
            <a href="https://croptheme.com/toothst/toothst-rtl/">RTL</a>
        </li>
        <li>
            <a href="https://themeforest.net/item/blad-ai-blood-donation-activism-campaign-html-template/41923002" target="_blank" class="bg-color">BUY</a>
        </li>
    </ul> --}}

   <!--=== JS Link ===-->
   @if (session('locale') == 'ar')

   <script src="{{ asset('rtl/assets/js/jquery.min.js') }}"></script>
   <script src="{{ asset('rtl/assets/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('rtl/assets/js/jquery.meanmenu.js') }}"></script>
   <script src="{{ asset('rtl/assets/js/owl.carousel.min.js') }}"></script>
   <script src="{{ asset('rtl/assets/js/carousel-thumbs.min.js') }}"></script>
   <script src="{{ asset('rtl/assets/js/wow.min.js') }}"></script>
   <script src="{{ asset('rtl/assets/js/magnific-popup.min.js') }}"></script>
   <script src="{{ asset('rtl/assets/js/counterup.min.js') }}"></script>
   <script src="{{ asset('rtl/assets/js/waypoints.min.js') }}"></script>
   <script src="{{ asset('rtl/assets/js/custom.js') }}"></script>
   @else


   <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
   <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
   <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
   <script src="{{ asset('assets/js/carousel-thumbs.min.js') }}"></script>
   <script src="{{ asset('assets/js/wow.min.js') }}"></script>
   <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
   <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
   <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
   <script src="{{ asset('assets/js/custom.js') }}"></script>
   @endif
