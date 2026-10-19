@extends('frontend.layouts.layout')

@section('title', 'Nitya Ahuja - Nexa Health Consult - Your Smart Healthcare Consultants')

@section('meta-title', 'Nitya Ahuja - Nexa Health Consult - Your Smart Healthcare Consultants')

@section('keywords', 'Nexa Health Consult, Nitya Ahuja, Hospital Operations Management, Healthcare Consultants, Medical Consulting, NABH, Hospital Operations, Nursing Excellence, Service Excellence')

@section('meta-description', 'Learn about Nitya Ahuja, Director – Hospital Operations Management (India) at Nexa Health Consult, with over 13 years of experience in healthcare operations, quality management, and hospital performance improvement.')

@push('style')
<style>
@media (max-width: 767px) {
    .team-member-card-prime {
        max-width: 240px !important;
        margin: 0 auto 25px auto !important;
    }
    .team-member-content-prime .section-title {
        text-align: center;
    }
    .team-member-content-prime .section-title h2 {
        font-size: 28px !important;
        margin-bottom: 12px !important;
    }
    .team-member-content-prime .section-sub-title {
        display: inline-block;
        font-size: 13px !important;
        line-height: 1.4;
        margin-bottom: 10px !important;
        white-space: normal !important;
    }
    .team-member-content-prime p {
        text-align: left !important;
        font-size: 15px !important;
        line-height: 1.65 !important;
        margin-bottom: 15px !important;
    }
    .team-member-key-points {
        text-align: left;
        margin-top: 25px !important;
    }
    .team-member-key-points h4 {
        font-size: 18px !important;
        margin-bottom: 12px !important;
    }
    .team-member-key-points-list ul {
        flex-direction: column !important;
        gap: 10px !important;
    }
    .team-member-key-points-list ul li {
        width: 100% !important;
        font-size: 14.5px !important;
        line-height: 1.5 !important;
    }
}
</style>
@endpush

@section('content')

<!-- About Us Section Start -->

<div class="about-us-prime pb-0">
    <div class="container">

    <div class="row align-items-center">

        <div class="team-member-detail-prime">

            <div class="container">

                <!-- Profile Header -->

                <div class="row align-items-start mb-5">

                    <!-- Profile Image Card Column -->
                    <div class="col-xl-4 col-lg-4 col-md-5 mb-4 mb-md-0">
                        <div class="team-member-card-prime wow fadeInLeft" data-wow-delay="0.2s" style="max-width: 300px; margin: 0 auto 0 0;">
                            <div class="team-item" style="background: #ffffff; border: 1px solid rgba(0,0,0,0.08); border-radius: 14px; padding: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.07);">
                                <div class="team-item-image">
                                    <figure class="image-anime" style="border-radius: 10px; overflow: hidden;">
                                        <img src="{{ static_asset('assets/images/team/nitya-ahuja.png') }}"
                                            alt="Nitya Ahuja"
                                            style="width: 100%; height: auto; object-fit: cover; object-position: top center; display: block;">
                                    </figure>
                                </div>
                                <div class="team-item-body" style="padding: 14px 10px 6px; text-align: center;">
                                    <div class="team-item-contant" style="width: 100%;">
                                        <h3 style="font-size: 18px; font-weight: 600; margin-bottom: 5px; color: var(--primary-color, #1a202c);">Nitya Ahuja</h3>
                                        <p style="font-size: 13px; color: var(--accent-color, #007bff); font-weight: 500; margin: 0; min-height: unset; line-height: 1.4;">Director – Hospital Operations Management (India)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Content Column -->
                    <div class="col-xl-8 col-lg-8 col-md-7">

                        <div class="team-member-content-prime">

                            <div class="section-title">

                                <span class="section-sub-title wow fadeInUp">
                                    Director – Hospital Operations Management (India)
                                </span>

                                <h2 class="wow fadeInUp"
                                    data-wow-delay="0.2s"
                                    data-cursor="-opaque">
                                    Nitya <span>Ahuja</span>
                                </h2>

                                <p class="wow fadeInUp"
                                   data-wow-delay="0.4s">
                                    <strong>Nitya Ahuja</strong> is the
                                    <strong>Director – Hospital Operations Management (India)</strong>
                                    at <strong>Nexa Health Consult</strong>, with over 13 years of
                                    experience in healthcare operations, quality management, business
                                    development, and multi-location hospital performance improvement.
                                </p>

                                <p class="wow fadeInUp"
                                   data-wow-delay="0.3s">
                                    She specializes in <strong>NABH and ISO implementation, hospital
                                    commissioning, SOP standardization, clinical governance, process
                                    optimization, patient experience, revenue enhancement, and
                                    operational planning.</strong> Her experience includes leading
                                    quality and operational initiatives across leading healthcare
                                    organizations and supporting the setup of new clinical verticals,
                                    including <strong>gastroenterology, nephrology, and robotics.</strong>
                                </p>

                                <div class="team-member-key-points wow fadeInUp" data-wow-delay="0.4s" style="margin-top: 30px;">
                                    <h4 style="font-size: 20px; font-weight: 600; margin-bottom: 15px; color: var(--primary-color);">Areas of Expertise:</h4>
                                    <div class="team-member-key-points-list">
                                        <ul>
                                            <li>Nursing Excellence</li>
                                            <li>Marketing &amp; Branding</li>
                                            <li>Business Development</li>
                                            <li>Service Excellence</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</div>

<!-- About Us Section End -->

@endsection
