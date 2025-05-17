@extends('layouts.main')
@section('title')
  {{ __('main.service') }} 
@endsection
@section('content')
    	 

		<!--=== Start Page Banner Section ===-->
		<section class="page-banner-section bg-color-ebeef5 ptb-100">
			<div class="container">
				<div class="page-banner-content">
					<h2> {{ __('main.service') }}</h2>
					<ul>
						<li>
							<a href="{{ route('home') }}"> {{ __('main.home') }}</a>
						</li>
						<li>
							<span class="active"> {{ __('main.service') }}</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="page-banner-shape-1 shape">
				<img src="assets/images/banner/banner-shape-1.png" alt="Image">
			</div>
			<div class="page-banner-shape-2 shape">
				<img src="assets/images/banner/banner-shape-1.png" alt="Image">
			</div>
		</section>
		<!--=== End Page Banner Section ===-->

		<!--=== Start Services Details Section ===-->
		<section class="services-details-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="sidebar-wrap me-15">
							<div class="main-sidebar-item services-category">
								<h3>{{ __('main.our_services') }}</h3>

								<ul>
									<li>
										<a >
											{{ __('main.tooth_clean') }}
											 
										</a>
									</li>
									<li>
										<a >  {{ __('main.root_canal') }} 
										</a>
									</li>
									<li>
										<a >{{ __('main.dental_sealants') }} 
										</a>
									</li>
									<li>
										<a >{{ __('main.whitening') }}</a>
									</li>
									<li>
										<a >{{ __('main.extractions') }}</a>
									</li>
									 
									 
								</ul>
							</div>

							<div class="main-sidebar-item work-time">
								<h3>{{ __('main.work_time') }}</h3>

								<ul>
									<li>
										{{ __('main.mon_thu') }}
										<span>08:00 - 21:00</span>
									</li>
									<li>
										{{ __('main.friday') }}
										<span>09:00 - 20:00</span>
									</li>
									<li>
										{{ __('main.saturday') }}
										<span>09:00 - 20:00</span>
									</li>
								</ul>
							</div>

							<div class="main-sidebar-item contact-us">
								<h3>{{ __('main.contact_us') }}</h3>

								<div class="row">
									<div class="col-lg-12 col-sm-6">
										<div class="form-floating form-group">
											<input type="text" class="form-control" id="yourName" placeholder="Your Name" value="" required="">
											<label for="yourName" class="form-label">{{ __('general.name') }}</label>
											<div class="invalid-feedback">{{ __('main.valid_patient_name_is_required') }}</div>
										</div>
									</div>
									<div class="col-lg-12 col-sm-6">
										<div class="form-floating form-group">
											<input type="email" class="form-control" id="yourEmail" placeholder="Your Email" value="" required="">
											<label for="yourEmail" class="form-label">{{ __('main.email') }}</label>
											<div class="invalid-feedback">{{ __('main.valid_email_is_required') }}</div>
										</div>
									</div>
									<div class="col-lg-12 col-sm-6">
										<div class="form-floating form-group">
											<input type="text" class="form-control" id="yourPhone" placeholder="Your Phone" value="" required="">
											<label for="yourPhone" class="form-label">{{ __('main.phone') }}</label>
											<div class="invalid-feedback">{{ __('main.valid_phone_is_required') }}</div>
										</div>
									</div>
									<div class="col-lg-12 col-sm-6">
										<div class="form-floating form-group">
											<input type="text" class="form-control" id="yourSubject" placeholder="Your Subject" value="" required="">
											<label for="yourSubject" class="form-label">{{ __('main.your_contact_subject') }}</label>
											<div class="invalid-feedback">{{ __('main.your_contact_subject_valid') }}</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-floating form-group">
											<textarea class="form-control textarea" cols="30" rows="5" placeholder="Write Your Message Here" id="message"></textarea>
											<label for="message" class="form-label">{{ __('main.write_your_message') }}</label>
											<div class="invalid-feedback">{{ __('main.write_your_message_valid') }} </div>
										</div>
									</div>
									<div class="col-lg-12">
										<button type="submit" class="main-btn">
											<span>{{ __('main.submit') }}</span>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-8">
						<div class="services-details-content ms-15">
							<div class="services-img-1">
								<img src="assets/images/services/services-1.jpg" alt="Image">
							</div>
							<h3>{{ __('main.dental_sealants') }}</h3>
							<p>{{ __('main.dental_sealants_info') }} </p>
							{{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati eos maxime, saepe unde omnis quidem accusantium ut at aut odio ex perspiciatis dicta voluptas, quia facere deserunt vel doloremque eligendi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi eius obcaecati ab. Accusantium voluptas maiores vero. Mollitia quae minus praesentium cumque debitis nobis nesciunt aliquid iure? Fugiat architecto numquam tenetur amet consectetur adipisicing elit. Obcaecati eos maxime.</p> --}}
							<h4>{{ __('main.dental_sealants_video') }}</h4>
							<div class="services-img-1">
								<img src="assets/images/services/services-2.jpg" alt="Image">

								<div class="video-btn">
									<a href="https://www.youtube.com/watch?v=Twxd7v9zlE4" class="popup-youtube">
										<span><i class="icofont-ui-play"></i></span>
									</a>
								</div>
							</div>
							<h4>{{ __('main.dental_sealants_feature') }}</h4>
							<p>{{ __('main.dental_sealants_feature_info') }}</p>

							<ul>
								<li>
									<span>1</span>
									{{ __('main.dental_sealants_feature_info_one') }}
								</li>
								<li>
									<span>2</span>
									{{ __('main.dental_sealants_feature_info_two') }}
								</li>
								<li>
									<span>3</span>
									{{ __('main.dental_sealants_feature_info_three') }}
								</li>
								<li>
									<span>4</span>
									{{ __('main.dental_sealants_feature_info_four') }}
								</li>
							</ul>

							<h4>{{ __('main.why_do_dental_sealant') }}</h4>
							<p>{{ __('main.info') }}</p>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!--=== End Services Details Section ===-->

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