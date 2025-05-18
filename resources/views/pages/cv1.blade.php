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
                        <img src="{{ asset('assets/images/doctors/DROUAIS.png') }}" alt="Dr. Uveys Kovara" class="img-fluid">
                    </div>
                    <div class="doctor-info">
                        <h2>Dr. Uveys Kovara</h2>
                        <p class="specialization">Cosmetic Dentistry Specialist</p>
                        <div class="contact-info">
                            <h4>{{ __('main.contact_info') }}</h4>
                            <p><i class="icofont-phone"></i> +90 XXX XXX XXXX</p>
                            <p><i class="icofont-email"></i> uveys@example.com</p>
                            <p><i class="icofont-google-map"></i> Istanbul, Turkey</p>
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
                            <h4>Istanbul Medipol University – Faculty of Dentistry</h4>
                            <p class="year">Bachelor of Dental Surgery (BDS)</p>
                        </div>
                    </section>

                    <section class="cv-section">
                        <h3><i class="icofont-briefcase"></i> {{ __('main.professional_experience') }}</h3>
                        <div class="cv-item">
                            <h4>Dentist – Focus on Aesthetic Dentistry</h4>
                            <p class="details">
                                • A dedicated dentist with a strong passion for aesthetic dentistry and smile design.<br>
                                • Proven expertise in smile makeovers and cosmetic restorations.<br>
                                • Hands-on experience across a broad range of clinical procedures, consistently delivering high-quality, patient-focused care.
                            </p>
                        </div>
                    </section>

                    <section class="cv-section">
                        <h3><i class="icofont-certificate"></i> {{ __('main.certifications') ?? 'Certifications & Continuous Education' }}</h3>
                        <div class="cv-item">
                            <p class="details">
                                • Completed advanced training in Endodontics, Prosthodontics, and Restorative Dentistry.<br>
                                • Continuously invests in professional development by staying updated with the latest techniques in modern dentistry.
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




