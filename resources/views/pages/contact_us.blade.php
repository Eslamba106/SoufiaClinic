@extends('layouts.main')
@section('title')
  {{ __('main.contact_us') }}
@endsection
@section('content')


		<!--=== Start Page Banner Section ===-->
		<section class="page-banner-section bg-color-ebeef5 ptb-100">
			<div class="container">
				<div class="page-banner-content">
					<h2>{{ __('main.contact_us') }} </h2>
					<ul>
						<li>
							<a href="index.html">{{ __('main.home') }} </a>
						</li>
						<li>
							<span class="active">{{ __('main.contact_us') }} </span>
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

		<!--=== Start Contact Us Section ===-->
		<section class="contact-us-section pt-100 pb-70">
			<div class="container">
				<div class="main-section-title wow fadeInUp delay-0-2s">
					<span class="up-title">{{ __('main.contact_us') }} </span>
					<h2>{{ __('main.meet') }}</h2>
				</div>

				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="main-contact-info-item hover-style wow fadeInUp delay-0-2s" style="height: 90%">
							<div class="inner-border" >
								<div class="icon">
									<img src="assets/images/icon/icon-17.svg" alt="Image">
								</div>
								<h3>{{ __('main.address') }}</h3>
								<p>C10 No:1AF iç kapi, Maslak Mahallesi Taşyoncası Sokak, Maslak, 1453 1AF No:B4, 34485 Sarıyer/İstanbul,turkey</p>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="main-contact-info-item hover-style wow fadeInUp delay-0-4s" style="height: 90%">
							<div class="inner-border">
								<div class="icon">
									<img src="assets/images/icon/icon-18.svg" alt="Image">
								</div>
								<h3>{{ __('main.opening_hours') }}</h3>
								<ul>
									<li>
										{{ __('main.mon_thu') }} :  08:00 - 21:00
									</li>
									<li>
										{{ __('main.friday') }} :  09:00 - 20:00
									</li>
									<li>
										{{ __('main.saturday') }} :  09:00 - 20:00
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="main-contact-info-item hover-style wow fadeInUp delay-0-6s" style="height: 90%">
							<div class="inner-border">
								<div class="icon">
									<img src="assets/images/icon/icon-19.svg" alt="Image">
								</div>
								<h3>{{ __('main.phone') }}</h3>
								<ul>

									<li><a href="tel:+905013170282">+90 501 317 02 82</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="main-contact-info-item hover-style wow fadeInUp delay-0-8s" style="height: 90%">
							<div class="inner-border">
								<div class="icon">
									<img src="assets/images/icon/icon-20.svg" alt="Image">
								</div>
								<h3>{{ __('main.email') }}</h3>
								<ul>
									<li>
										<a href="mailto:info@gmail.com">info@gmail.com</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<img src="assets/images/blog/blog-shape-1.png" class="shape shape-1" alt="Image">
			<img src="assets/images/blog/blog-shape-2.png" class="shape shape-2" alt="Image">
		</section>
		<!--=== End Contact Us Section ===-->

		<!--=== End Contact Us Form Section ===-->
		<div class="contact-us-form pb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<form class="contact-form me-15 wow fadeInUp delay-0-2s">
							<div class="contact-title">
								<h3>{{ __('main.write_your_message') }}</h3>
								<p></p>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-floating form-group">
										<input type="text" class="form-control" id="yourName" placeholder="Your Name" value="" required="">
										<label for="yourName" class="form-label">{{ __('general.name') }}</label>
										<div class="invalid-feedback">{{ __('main.valid_patient_name_is_required') }}</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-floating form-group">
										<input type="email" class="form-control" id="yourEmail" placeholder="Your Email" value="" required="">
										<label for="yourEmail" class="form-label">{{ __('main.email') }}</label>
										<div class="invalid-feedback">{{ __('main.valid_email_is_required') }}</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-floating form-group">
										<input type="text" class="form-control" id="yourPhone" placeholder="Your Phone" value="" required="">
										<label for="yourPhone" class="form-label">{{ __('main.phone') }}</label>
										<div class="invalid-feedback">{{ __('main.valid_phone_is_required') }}</div>
									</div>
								</div>
								<div class="col-lg-6">
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
										<div class="invalid-feedback">{{ __('main.write_your_message_valid') }}</div>
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

					<div class="col-lg-6">
						<div class="map-wrap ms-15 wow fadeInUp delay-0-4s">
							<div class="contact-title">
								<h3>{{ __('main.visit_our_office') }}</h3>
								<p>{{ __('main.visit_our_office_info') }}</p>
							</div>

                            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3005.7559021282977!2d29.009248!3d41.1180218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab73da5a2898f%3A0xb70d03baf591b280!2sSOUFIA%20ESTETIK!5e0!3m2!1sar!2seg!4v1740769862896!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}

                                                </div>
					</div>
				</div>
			</div>
		</div>
		<!--=== End Contact Us Form Section ===-->


@endsection
