@extends('layouts.main')
@section('title')
{{ __('main.home') }}
@endsection
@section('content')
    	<!--=== Start Banner Section ===-->
		<section class="banner-section bg-color-f6fbff">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="banner-slider-content owl-carousel owl-theme">
							<div class="banner-content style-two">
								<h1 class="wow fadeInUp delay-0-2s">{{ __('main.welcome_home') }}</h1>
								<p class="wow fadeInUp delay-0-4s">{{ __('main.welcome_info') }}</p>
	
								<ul class="wow fadeInUp delay-0-6s">
								<li>
									<i class="icofont-shield-alt"></i>
									<span>{{ __('main.best_service') }}</span>
								</li>
								<li>
									<i class="icofont-first-aid"></i>
									<span>{{ __('main.best_staff') }}</span>
								</li>
							</ul>
	
								<div class="banner-btn">
									<a href="{{ route('about_us') }}" class="main-btn">
										<span>{{ __('main.about_us') }}</span>
									</a>
									<a href="{{ route('contact_us') }}" class="main-btn">
										<span>{{ __('main.contact_us') }}</span>
									</a>
								</div>
							</div>

							<div class="banner-content style-two">
								<h1 class="wow fadeInUp delay-0-2s">{{ __('main.welcome_home') }}</h1>
								<p class="wow fadeInUp delay-0-4s">{{ __('main.welcome_info') }}</p>
	
								<ul class="wow fadeInUp delay-0-6s">
								<li>
									<i class="icofont-shield-alt"></i>
									<span>{{ __('main.best_service') }}</span>
								</li>
								<li>
									<i class="icofont-first-aid"></i>
									<span>{{ __('main.best_staff') }}</span>
								</li>
							</ul>
	
								<div class="banner-btn">
									<a href="{{ route('about_us') }}" class="main-btn">
										<span>{{ __('main.about_us') }}</span>
									</a>
									<a href="{{ route('contact_us') }}" class="main-btn">
										<span>{{ __('main.contact_us') }}</span>
									</a>
								</div>
							</div>

							<div class="banner-content style-two">
								<h1 class="wow fadeInUp delay-0-2s">{{ __('main.welcome_home') }}</h1>
								<p class="wow fadeInUp delay-0-4s">{{ __('main.welcome_info') }}</p>
	
								<ul class="wow fadeInUp delay-0-6s">
									<li>
										<i class="icofont-shield-alt"></i>
										<span>{{ __('main.best_service') }}</span>
									</li>
									<li>
										<i class="icofont-first-aid"></i>
										<span>{{ __('main.best_staff') }}</span>
									</li>
								</ul>
	
								<div class="banner-btn">
									<a href="{{ route('about_us') }}" class="main-btn">
										<span>{{ __('main.about_us') }}</span>
									</a>
									<a href="{{ route('contact_us') }}" class="main-btn">
										<span>{{ __('main.contact_us') }}</span>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 p-0">
						<div class="banner-slider owl-carousel owl-theme">
							<div class="banner-img">
								<img src="{{ asset('assets/images/doctors/doctor11.png') }}" alt="Image">
							</div>
							<div class="banner-img">
								<img src="{{ asset('assets/images/doctors/doctors2.png') }}" alt="Image">
							</div>
							<div class="banner-img">
								<img src="{{ asset('assets/images/doctors/doctors3.png') }}" alt="Image">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="banner-shape-1 shape">
				<img src="assets/images/banner/banner-shape-1.png" alt="Image">
			</div>
		</section>
		<!--=== End Banner Section ===-->

		<!--=== Start About Us Section ===-->
		<section class="about-us-section ptb-100">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-6 ps-0">
						<div class="about-img me-15 wow fadeInUp delay-0-2s">
							<img src="{{ asset('assets/images/doctors/about-img.png') }}" alt="Image">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-content ms-15">
							<span class="up-title wow fadeInUp delay-0-2s">{{ __('main.about_soufia') }}</span>
							<h2 class="wow fadeInUp delay-0-4s">{{ __('main.why_come') }}</h2>
							<p class="wow fadeInUp delay-0-6s">{{ __('main.reason_one') }}</p>

							<ul>
								<li class="hover-style wow fadeInUp delay-0-2s">
									<div class="inner-border">
										<i class="icofont-shield-alt"></i>
										{{ __('main.reason_two') }} 
									</div>
								</li>
								<li class="hover-style wow fadeInUp delay-0-4s">
									<div class="inner-border">
										<i class="icofont-shield-alt"></i>
										{{ __('main.reason_three') }} 
									</div>
								</li>
								<li class="hover-style wow fadeInUp delay-0-6s">
									<div class="inner-border">
										<i class="icofont-shield-alt"></i>
										{{ __('main.reason_four') }} 
									</div>
								</li>
								<li class="hover-style wow fadeInUp delay-0-8s">
									<div class="inner-border">
										<i class="icofont-shield-alt"></i>
										{{ __('main.reason_five') }} 
									</div>
								</li>
							</ul>

							<a href="{{ route('about_us') }}" class="main-btn">
								<span>{{ __('main.about_us') }}</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--=== End About Us Section ===-->

		<!--=== Start Services Section ===-->
		<section class="services-section pb-70">
			<div class="container">
				<div class="main-section-title wow fadeInUp delay-0-2s">
					<span class="up-title">{{ __('main.our_services') }}</span>
					<h2>{{ __('main.our_services_problem') }}</h2>
				</div>

				<div class="row d-flex justify-content-center">
					<div class="col-lg-3 col-sm-6">
						<div class="main-services-box hover-style wow fadeInUp delay-0-2s">
							<div class="inner-border">
								<div class="icon">
									<img src="assets/images/icon/icon-1.svg" alt="Image">
								</div>
								<h3>
									<a href="">{{ __('main.tooth_clean') }}</a>
								</h3>
								<p>{{ __('main.tooth_clean_service') }}</p>
								{{-- <a href="single-services.html" class="main-detail-btn">
									Learn More
									<i class="icofont-simple-right"></i>
								</a> --}}
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="main-services-box hover-style wow fadeInUp delay-0-4s">
							<div class="inner-border">
								<div class="icon">
									<img src="assets/images/icon/icon-2.svg" alt="Image">
								</div>
								<h3>
									<a href="">{{ __('main.root_canal') }}</a>
								</h3>
								<p>{{ __('main.root_canal_info') }}</p>
								 
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="main-services-box hover-style wow fadeInUp delay-0-6s">
							<div class="inner-border">
								<div class="icon">
									<img src="assets/images/icon/icon-3.svg" alt="Image">
								</div>
								<h3>
									<a href="">{{ __('main.extractions') }}</a>
								</h3>
								<p>{{ __('main.extractions_info') }}</p>
								 
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="main-services-box hover-style wow fadeInUp delay-0-8s">
							<div class="inner-border">
								<div class="icon">
									<img src="assets/images/icon/icon-4.svg" alt="Image">
								</div>
								<h3>
									<a href="#">{{ __('main.whitening') }}</a>
								</h3>
								<p>{{ __('main.whitening_info') }}</p>
								 
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--=== End Services Section ===-->

		<!--=== Start Counter Section ===-->
		<section class="counter-section bg-color-ebeef5 pt-100 pb-70">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-3 col-sm-6">
						<div class="main-counter-item wow fadeInUp delay-0-2s">
							<h2 class="counter">10</h2>
							<h2 class="point">+</h2>
							<h3>{{ __('main.awards') }}</h3>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="main-counter-item wow fadeInUp delay-0-4s">
							<h2 class="counter">7</h2>
							<h2 class="point">+</h2>
							<h3>{{ __('main.qualified_Staff') }}</h3>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="main-counter-item wow fadeInUp delay-0-6s">
							<h2 class="counter">290</h2>
							<h2 class="point">+</h2>
							<h3>{{ __('main.happy_clients') }}</h3>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="main-counter-item wow fadeInUp delay-0-8s">
							<h2 class="counter">781</h2>
							<h3>{{ __('main.patients') }}</h3>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--=== End Counter Section ===-->

		<!--=== Start Doctors Section ===-->
		<section class="our-doctors-section pt-100 pb-70">
			<div class="container">
				<div class="main-section-title wow fadeInUp delay-0-2s">
					<span class="up-title">{{ __('main.our_doctors') }}</span>
					<h2>{{ __('main.our_doctors_info') }}</h2>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-4 col-sm-6">
						<div class="main-doctors-item hover-style wow fadeInUp delay-0-2s">
							<div class="inner-border">
								<div class="doctor-img">
									<img src="assets/images/doctors/doctors-1.jpg" alt="Image">
	
									<ul> 
										<li>
											<a href="https://www.tiktok.com/@soufiaclinic3" target="_blank">
												<i class="fa-brands fa-tiktok"></i> 
											</a>
										</li> 
										<li>
											<a href="https://www.instagram.com/soufiaclinic3/" target="_blank">
												<i class="icofont-instagram"></i>
											</a>
										</li>
									</ul>
								</div>
								<h3>Ahmed Kiral</h3>
								<span>{{ __('main.registered_dentist') }}</span>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="main-doctors-item hover-style wow fadeInUp delay-0-4s">
							<div class="inner-border">
								<div class="doctor-img">
									<img src="assets/images/doctors/doctors-2.jpg" alt="Image">
	
									<ul>
										<li>
											<a href="https://www.tiktok.com/@soufiaclinic3" target="_blank">
												<i class="fa-brands fa-tiktok"></i> 
											</a>
										</li> 
										<li>
											<a href="https://www.instagram.com/soufiaclinic3/" target="_blank">
												<i class="icofont-instagram"></i>
											</a>
										</li>
									</ul>
								</div>
								<h3>Asaad Al-Murad</h3>
								<span>{{ __('main.registered_dentist') }}</span>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="main-doctors-item hover-style wow fadeInUp delay-0-6s">
							<div class="inner-border">
								<div class="doctor-img">
									<img src="assets/images/doctors/doctors-3.jpg" alt="Image">
	
									<ul>
										<li>
											<a href="https://www.tiktok.com/@soufiaclinic3" target="_blank">
												<i class="fa-brands fa-tiktok"></i> 
											</a>
										</li> 
										<li>
											<a href="https://www.instagram.com/soufiaclinic3/" target="_blank">
												<i class="icofont-instagram"></i>
											</a>
										</li>
									</ul>
								</div>
								<h3>Anis Ozyar</h3>
								<span>{{ __('main.registered_dentist') }}</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<img src="assets/images/doctor-shape.png" class="doctor-shape shape" alt="Image">
		</section>
		<!--=== End Doctors Section ===-->

		<!--=== Start Testimonials Section ===-->
		<section class="testimonials-section pb-100">
			<div class="container">
				<div class="main-section-title wow fadeInUp delay-0-2s">
					<span class="up-title">{{ __('main.our_testimonials') }}</span>
					<h2>{{ __('main.our_testimonials_info') }}</h2>
				</div>

				<div class="owl-carousel owl-theme testimonials-slide">
					<div class="main-testimonials hover-style wow fadeInUp delay-0-2s">
						<div class="inner-border">
							<img src="{{ asset('assets/images/testimonials/testimonialss-1.jpg') }}" alt="Image">
						
							<div class="testimonials-content">
								<h3>Aylin</h3>
								<span>{{ __('main.app_developer') }}</span>
								<p>{{ __('main.testimonials_one') }}</p>
								<ul>
									<li>
										<i class="icofont-star"></i>
									</li>
									<li>
										<i class="icofont-star"></i>
									</li>
									<li>
										<i class="icofont-star"></i>
									</li>
									<li>
										<i class="icofont-star"></i>
									</li>
									<li>
										<i class="icofont-star"></i>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="main-testimonials hover-style wow fadeInUp delay-0-4s">
						<div class="inner-border">
							<img src="{{ asset('assets/images/testimonials/testimonialss-2.jpg') }}" alt="Image">
						
							<div class="testimonials-content">
								<h3>Deniz</h3>
								<span>{{ __('main.web_designer') }}</span>
								<p>{{ __('main.testimonials_two') }}</p>
								<ul>
									<li>
										<i class="icofont-star"></i>
									</li>
									<li>
										<i class="icofont-star"></i>
									</li>
									<li>
										<i class="icofont-star"></i>
									</li>
									<li>
										<i class="icofont-star"></i>
									</li>
									<li>
										<i class="icofont-star"></i>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="main-testimonials hover-style wow fadeInUp delay-0-6s">
						<div class="inner-border">
							<img src="{{ asset('assets/images/testimonials/testimonialss-3.jpg') }}" alt="Image">
						
							<div class="testimonials-content">
								<h3>Kerem</h3>
								<span>{{ __('main.engineer') }}</span>
								<p>{{ __('main.testimonials_three') }}</p>
								<ul>
									<li>
										<i class="icofont-star"></i>
									</li>
									<li>
										<i class="icofont-star"></i>
									</li>
									<li>
										<i class="icofont-star"></i>
									</li>
									<li>
										<i class="icofont-star"></i>
									</li>
									<li>
										<i class="icofont-star"></i>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="main-testimonials hover-style wow fadeInUp delay-0-8s">
						<div class="inner-border">
							<img src="{{ asset('assets/images/testimonials/testimonialss-4.jpg') }}" alt="Image">
						
							<div class="testimonials-content">
								<h3>Ramzi Sagalam </h3>
								<span>{{ __('main.journalist') }}</span>
								<p>{{ __('main.testimonials_four') }}</p>
								<ul>
									<li>
										<i class="icofont-star"></i>
									</li>
									<li>
										<i class="icofont-star"></i>
									</li>
									<li>
										<i class="icofont-star"></i>
									</li>
									<li>
										<i class="icofont-star"></i>
									</li>
									<li>
										<i class="icofont-star"></i>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<img src="assets/images/testimonials/testimonials-shape.png" class="shape shape" alt="Image">
		</section>
		<!--=== End Testimonials Section ===-->

		<!--=== Start FAQ Section ===-->
		<section class="faq-section pb-100">
			<div class="container">
				<div class="main-section-title wow fadeInUp delay-0-2s">
					<span class="up-title">{{ __('main.faq') }}</span>
					<h2>{{ __('main.faq_question') }}</h2>
				</div>

				<div class="row">
					<div class="col-lg-6">
						<div class="faq-content mr-15 wow fadeInUp delay-0-4s">
							<div class="accordion" id="accordionExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingOne">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">{{ __('main.question_one') }}</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p>{{ __('main.answer_one') }}</p>
										</div>
									</div>
								</div>

								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">{{ __('main.question_two') }}</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p>{{ __('main.answer_two') }}</p>
										</div>
									</div>
								</div>

								<div class="accordion-item">
									<h2 class="accordion-header" id="headingThree">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">{{ __('main.question_three') }}</button>
									</h2>
									<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p>{{ __('main.answer_three') }}</p>
										</div>
									</div>
								</div>

								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFour">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">{{ __('main.question_four') }}</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p>{{ __('main.answer_four') }}</p>
										</div>
									</div>
								</div>
								
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFive">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">{{ __('main.question_five') }}</button>
									</h2>
									<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p>{{ __('main.answer_five') }}</p>
										</div>
									</div>
								</div>

								<div class="accordion-item">
									<h2 class="accordion-header" id="headingSix">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">{{ __('main.question_six') }}</button>
									</h2>
									<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p>{{ __('main.answer_six') }}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<img src="{{ asset('assets/images/doctors/doctor11.png') }}"   alt="Image">
					</div>
				</div>
			</div>

			<img src="assets/images/faq-shape-1.png" class="shape shape-1" alt="Image">
			<img src="assets/images/faq-shape-2.png" class="shape shape-2" alt="Image">
		</section>
		<!--=== End FAQ Section ===-->

	 

		<!--=== Start Appointment Section ===-->
		<section class="appointment-section pb-100">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="appointment-content ms-15 wow fadeInUp delay-0-2s">
							<span class="up-title">{{ __('main.make_appointment') }}</span>
							<h2>{{ __('main.make_appointment_info') }}</h2>
							<p>{{ __('main.make_appointment_info_two') }}</p>

							<form class="appointment-form">
								<div class="row">
									<div class="col-lg-6 col-sm-6">
										<div class="form-floating form-group">
											<input type="text" class="form-control" id="patientName" placeholder="Patient Name" value="" required="">
											<label for="patientName" class="form-label">{{ __('main.patient_name') }}</label>
											<div class="invalid-feedback"> {{ __('main.valid_patient_name_is_required') }}</div>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="form-floating form-group">
											<input type="email" class="form-control" id="emailAddress" placeholder="Email Address" value="" required="">
											<label for="emailAddress" class="form-label">{{ __('main.email') }}</label>
											<div class="invalid-feedback">{{ __('main.valid_email_is_required') }}</div>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="form-floating form-group">
											<input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number" value="" required="">
											<label for="phoneNumber" class="form-label">{{ __('main.phone') }} </label>
											<div class="invalid-feedback">{{ __('main.valid_phone_is_required') }}</div>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<select class="form-select form-control" aria-label="Default select example">
												<option selected>{{ __('main.gender') }}</option>
												<option value="1">{{ __('main.mail') }}</option>
												<option value="2">{{ __('main.femail') }}</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<input type="date" class="form-control" placeholder="Date">
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<select class="form-select form-control" aria-label="Default select example">
												<option selected>{{ __('main.department') }}</option>
												<option value="1">{{ __('main.dental') }}</option>
												<option value="2">{{ __('main.medical') }}</option>
											</select>
										</div>
									</div>
									<div class="col-lg-12">
										<button type="submit" class="main-btn">
											<span>{{ __('main.submit') }}</span>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>

					<div class="col-lg-6 pe-0">
						<div class="appointment-img ms-15 wow fadeInUp delay-0-4s">
							<img src="{{ asset('assets/images/appointment-imgs.png') }}" alt="Image">
						</div>
					</div>
				</div>
			</div>

			<img src="assets/images/appointment-shape.png" class="appointment-shape shape" alt="Image">
		</section>
		<!--=== End Appointment Section ===-->

@endsection