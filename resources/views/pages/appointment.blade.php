@extends('layouts.main')
@section('title')
    {{ __('main.appointment') }}
@endsection
@section('content')
    <!--=== Start Page Banner Section ===-->
    <section class="page-banner-section bg-color-ebeef5 ptb-100">
        <div class="container">
            <div class="page-banner-content">
                <h2> {{ __('main.appointment') }}</h2>
                <ul>
                    <li>
                        <a href="  {{ route('home') }}"> {{ __('main.home') }}</a>
                    </li>
                    <li>
                        <span class="active"> {{ __('main.appointment') }}</span>
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

    <!--=== Start Appointment Section ===-->
    <section class="appointment-section pb-100 mt-5">
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
                                        <input type="text" class="form-control" id="patientName"
                                            placeholder="Patient Name" value="" required="">
                                        <label for="patientName" class="form-label">{{ __('main.patient_name') }}</label>
                                        <div class="invalid-feedback"> {{ __('main.valid_patient_name_is_required') }}</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-floating form-group">
                                        <input type="email" class="form-control" id="emailAddress"
                                            placeholder="Email Address" value="" required="">
                                        <label for="emailAddress" class="form-label">{{ __('main.email') }}</label>
                                        <div class="invalid-feedback">{{ __('main.valid_email_is_required') }}</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-floating form-group">
                                        <input type="text" class="form-control" id="phoneNumber"
                                            placeholder="Phone Number" value="" required="">
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
