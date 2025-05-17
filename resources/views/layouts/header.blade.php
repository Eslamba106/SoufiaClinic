		<!--=== Start Preloader Section ===-->
		<div class="preloader">
            <div class="content">
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
            </div>
        </div>
		<!--=== End Preloader Section ===-->

		<!--=== Start Navbar Section ===-->
		<div class="navbar-section">
			<!--=== Start Main Navbar Section ===-->
			<div class="main-nav">
				<div class="container">
					<nav class="navbar navbar-expand-md navbar-light">
						<a class="navbar-brand" href="{{ route('home') }}">
							<img width="100px" height="80px" src="{{ asset('A.png') }}" alt="Logo">
						</a> 
						
						<div class="collapse navbar-collapse for-mobile-menu" id="navbarSupportedContent">
							<ul class="navbar-nav m-auto">
								<li class="nav-item">
									<a href="{{ route('home') }}" class="nav-link  {{ (Request::is('/')) ? 'active' : '' }}">
										{{ __('main.home') }}             
									</a>

									
								</li>

								<li class="nav-item">
									<a href="{{ route('about_us') }}" class="nav-link  {{ (Request::is('about-us')) ? 'active' : '' }}">{{ __('main.about_us') }}</a>
								</li>

								{{-- <li class="nav-item">
									<a href="#" class="nav-link dropdown-toggle">
										Pages            
									</a>

									<ul class="dropdown-menu">
										<li class="nav-item">
											<a href="about-us.html" class="nav-link">About Us</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link dropdown-toggle">
												Services             
												<i class="icofont-rounded-down"></i>  
											</a>
		
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="services.html" class="nav-link">Services Page</a>
												</li>
												<li class="nav-item">
													<a href="pricing-plan.html" class="nav-link">Pricing Plan Page</a>
												</li>
												<li class="nav-item">
													<a href="single-services.html" class="nav-link">Single Services Page</a>
												</li>
											</ul>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link dropdown-toggle">
												Authentication       
												<i class="icofont-rounded-down"></i>      
											</a>
		
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="sign-in.html" class="nav-link">Sign In Page</a>
												</li>
												<li class="nav-item">
													<a href="sign-up.html" class="nav-link">Sign Up Page</a>
												</li>
												<li class="nav-item">
													<a href="appointment.html" class="nav-link">Appointment Page</a>
												</li>
											</ul>
										</li>
										
										<li class="nav-item">
											<a href="#" class="nav-link dropdown-toggle">
												Blog        
												<i class="icofont-rounded-down"></i>      
											</a>

											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="{{ route('lang', 'ar') }}" class="dropdown-item">
                                                        {{ __('general.arabic') }}
                                                        <span class="float-right text-muted text-sm">
                                                            <img src="{{ URL::asset('images/flags/SA.png') }}" alt="">
                                        
                                                        </span>
                                                    </a>
												</li>
												<li class="nav-item">
                                                    <a href="{{ route('lang', 'en') }}" class="dropdown-item">
                                                        {{ __('general.english') }}
                                                        <span class="float-right text-muted text-sm">
                                                            <img src="{{ URL::asset('images/flags/US.png') }}" alt="">
                                        
                                                        </span>
                                                    </a>
												</li>
											</ul>
										</li>
										<li class="nav-item">
											<a href="appointment.html" class="nav-link">Appointment Page</a>
										</li>
										<li class="nav-item">
											<a href="doctors.html" class="nav-link">Doctors Page</a>
										</li>
										<li class="nav-item">
											<a href="faq.html" class="nav-link">FAQ Page</a>
										</li>
										<li class="nav-item">
											<a href="testimonials.html" class="nav-link">Testimonials Page</a>
										</li>
										<li class="nav-item">
											<a href="contact-us.html" class="nav-link">Contact Us Page</a>
										</li>
										<li class="nav-item">
											<a href="privacy-policy.html" class="nav-link">Privacy Policy Page</a>
										</li>
										<li class="nav-item">
											<a href="terms-conditions.html" class="nav-link">Terms & Conditions Page</a>
										</li>
										<li class="nav-item">
											<a href="404.html" class="nav-link">Error Page</a>
										</li>
									</ul>
								</li> --}}

								<li class="nav-item">
									<a href="{{ route('services') }}" class="nav-link   {{ (Request::is('services')) ? 'active' : '' }}">
										{{ __('main.service') }}             
									</a>

									{{-- <ul class="dropdown-menu">
										<li class="nav-item">
											<a href="services.html" class="nav-link">Services Page</a>
										</li>
										<li class="nav-item">
											<a href="pricing-plan.html" class="nav-link">Pricing Plan Page</a>
										</li>
										<li class="nav-item">
											<a href="single-services.html" class="nav-link">Single Services Page</a>
										</li>
									</ul> --}}
								</li>
								
								{{-- <li class="nav-item">
									<a href="#" class="nav-link dropdown-toggle">
										Shop             
									</a>

									<ul class="dropdown-menu">
										<li class="nav-item">
											<a href="products.html" class="nav-link">Products Page</a>
										</li>
										<li class="nav-item">
											<a href="product-cart.html" class="nav-link">Products Cart Page</a>
										</li>
										<li class="nav-item">
											<a href="checkout.html" class="nav-link">Checkout Page</a>
										</li>
										<li class="nav-item">
											<a href="product-details.html" class="nav-link">Products Details Page</a>
										</li>
										<li class="nav-item">
											<a href="payment.html" class="nav-link">Payment Page</a>
										</li>
									</ul>
								</li> --}}

								
								<li class="nav-item">
									<a href="{{ route('contact_us') }}" class="nav-link {{ (Request::is('contact-us')) ? 'active' : '' }}">{{ __('main.contact_us') }} </a>
								</li>
								
								<li class="nav-item">
									<a href="#" class="nav-link dropdown-toggle">
										{{ __('general.lang') }}            
									</a>

									<ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('lang', 'ar') }}" class="dropdown-item">
                                               
                                                <span class="float-right text-muted text-sm">
                                                    <img src="{{ asset('assets/images/flags/SA.png') }}" alt="">
                                
                                                </span>
                                                {{ __('general.arabic') }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('lang', 'en') }}" class="dropdown-item">
                                                
                                                <span class="float-right text-muted text-sm">
                                                    <img src="{{ asset('assets/images/flags/US.png') }}" alt="">
                                
                                                </span>
                                                {{ __('general.english') }}
                                            </a>
                                        </li>
                                    </ul>
								</li>
							</ul>

							<div class="others-options">
								<ul>
									<li>
										<a href="{{ route('appointment') }}" class="main-btn">
											<span>{{ __('main.appointment') }} </span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</nav>
				</div>
			</div>
			<!--=== End Main Navbar Section ===-->

			<!--=== Start Mobile Navbar Section ===-->
			<div class="mobile-nav">
				<div class="container">
					<div class="mobile-menu">
						<div class="logo">
							<a href="{{ route('home') }}">
								<img width="150px" height="100px" src="{{ asset('logo.png') }}"  alt="Logo">
							</a>
						</div>
					</div>
				</div>
			</div>
			<!--=== End Mobile Navbar Section ===-->
		</div>