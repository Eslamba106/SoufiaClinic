@extends('layouts.main')
@section('title')
{{ __('main.doctor_cv') }}
@endsection
<style>
.doctor-cv-page {
    padding: 60px 0;
    background: #f9f9f9;
}

.doctor-profile-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    overflow: hidden;
    margin-bottom: 30px;
}

.doctor-image img {
    width: 100%;
    height: auto;
    display: block;
}

.doctor-info {
    padding: 25px;
}

.doctor-info h2 {
    color: #2a81ea;
    margin-bottom: 5px;
}

.specialization {
    color: #666;
    font-size: 18px;
    margin-bottom: 20px;
}

.contact-info {
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid #eee;
}

.contact-info h4 {
    margin-bottom: 15px;
    color: #333;
}

.contact-info p {
    margin-bottom: 10px;
    color: #666;
}

.contact-info i {
    margin-right: 10px;
    color: #2a81ea;
}

.cv-details {
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.cv-section {
    margin-bottom: 30px;
}

.cv-section h3 {
    color: #2a81ea;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 1px solid #eee;
    display: flex;
    align-items: center;
}

.cv-section h3 i {
    margin-right: 10px;
}

.cv-item {
    margin-bottom: 20px;
    padding-left: 20px;
    position: relative;
}

.cv-item:before {
    content: "";
    position: absolute;
    left: 0;
    top: 8px;
    width: 10px;
    height: 10px;
    background: #2a81ea;
    border-radius: 50%;
}

.cv-item h4 {
    margin-bottom: 5px;
    color: #333;
}

.year {
    color: #2a81ea;
    font-weight: 500;
    margin-bottom: 5px;
}

.details {
    color: #666;
    line-height: 1.6;
}

.cv-actions {
    margin-top: 40px;
    text-align: center;
}

@media (max-width: 991px) {
    .doctor-profile-card {
        margin-bottom: 30px;
    }
}
</style>


@section('content')
<div class="doctor-cv-page">
    <div class="container">
        <div class="row">
            <!-- Profile Card -->
            <div class="col-lg-4">
                <div class="doctor-profile-card">
                    <div class="doctor-image">
                        <img src="{{ asset('assets/images/doctors/DRSARA2.png') }}" alt="Dr. Leyla Hasaneyn" class="img-fluid">
                    </div>
                    <div class="doctor-info">
                        <h2>Dr. Leyla Hasaneyn</h2>
                        <p class="specialization">General & Esthetic Dentist</p>
                        <div class="contact-info">
                            <h4>{{ __('main.contact_info') }}</h4>
                            <p><i class="icofont-phone"></i>+90 505 550 08 50</p>
                            <p><i class="icofont-email"></i> info@soufiaclinic.com</p>
                            <p><i class="icofont-google-map"></i> Istanbul, Turkey</p>
                             <a href="{{ route('appointment') }}" class="main-btn">
											<span>{{ __('main.appointment') }} </span>
										</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CV Details -->
            <div class="col-lg-8">
                <div class="cv-details">

                    <section class="cv-section">
                        <h3><i class="icofont-graduate"></i> {{ __('main.education') }}</h3>
                        <div class="cv-item">
                            <h4>Near East University – Faculty of Dentistry</h4>
                            <p class="year">Doctor of Dental Medicine (D.M.D.)<br>Sep 2014 – Jul 2019, Nicosia, Cyprus</p>
                        </div>
                    </section>

                    <section class="cv-section">
                        <h3><i class="icofont-briefcase"></i> {{ __('main.professional_experience') }}</h3>

                        <div class="cv-item">
                            <h4>Freelance Dentist – Various Clinics, Istanbul</h4>
                            <p class="year">2023 – Present</p>
                            <p class="details">
                                • Delivered general and cosmetic dental care in multiple practices.<br>
                                • Adapted quickly to varied clinical workflows and tools.
                            </p>
                        </div>

                        <div class="cv-item">
                            <h4>Founder & Dentist – Private Clinic, Istanbul</h4>
                            <p class="year">2024</p>
                            <p class="details">
                                • Managed the clinic and treated patients with focus on esthetic and preventive care.
                            </p>
                        </div>

                        <div class="cv-item">
                            <h4>General Dentist – Biu Smile, Istanbul</h4>
                            <p class="year">2022 – 2023</p>
                            <p class="details">
                                • Performed routine and cosmetic procedures in a modern dental setting.
                            </p>
                        </div>

                        <div class="cv-item">
                            <h4>General Dentist – Mesam Private Clinic, Bursa</h4>
                            <p class="year">2020</p>
                            <p class="details">
                                • Delivered restorative and hygiene care to a broad patient base.
                            </p>
                        </div>

                        <div class="cv-item">
                            <h4>Trainee – Sama Skheta Clinic, Bursa</h4>
                            <p class="year">Aug 2019 – Dec 2019</p>
                        </div>

                        <div class="cv-item">
                            <h4>Undergraduate Practitioner – NEU Dental Hospital, Nicosia</h4>
                            <p class="year">Sep 2017 – Jul 2019</p>
                            <p class="details">
                                • Performed extractions, root canals, restorations, scaling, and patient education.<br>
                                • Treated both pediatric and adult patients.
                            </p>
                        </div>
                    </section>

                    <section class="cv-section">
                        <h3><i class="icofont-certificate"></i> {{ __('main.skills') }}</h3>
                        <div class="cv-item">
                            <p class="details">
                                • General Dental Care<br>
                                • Esthetic & Restorative Treatments<br>
                                • Preventive Dentistry<br>
                                • Pain Management & Patient Comfort<br>
                                • X-Ray Handling<br>
                                • Photography & Social Media Management<br>
                                • Strong Communication & Empathy
                            </p>
                        </div>
                    </section>

                    <section class="cv-section">
                        <h3><i class="icofont-world"></i> {{ __('main.languages') }}</h3>
                        <div class="cv-item">
                            <p class="details">
                                • Arabic – Native<br>
                                • English – Fluent<br>
                                • Turkish – Intermediate
                            </p>
                        </div>
                    </section>

                    <div class="cv-actions">
                        <a href="{{ route('contact_us') }}" class="main-btn">
                            <span>{{ __('main.contact_doctor') }}</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection





