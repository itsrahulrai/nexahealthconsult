@extends('frontend.layouts.layout')

@section('title', 'Mr. Sujeet Katiyar - Nexa Health Consult - Your Smart Healthcare Consultants')

@section('meta-title', 'Mr. Sujeet Katiyar - Nexa Health Consult - Your Smart Healthcare Consultants')

@section('keywords', 'Nexa Health Consult, Sujeet Katiyar, Digital Health Transformation, HIS, EMR, Telemedicine, ABDM, AI in Healthcare, Healthcare Consultants')

@section('meta-description', 'Learn about Mr. Sujeet Katiyar, Senior Advisor – Digital Health Transformation at Nexa Health Consult, a Digital Health and Health-Tech Strategist with deep expertise in scaling technology-led healthcare transformation.')

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
    .team-member-quote {
        text-align: left;
        font-size: 14.5px !important;
        margin-top: 20px !important;
        padding: 12px 16px !important;
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
                                        <img src="{{ static_asset('assets/images/team/sujeet-katiyar.jpeg') }}"
                                            alt="Mr. Sujeet Katiyar"
                                            style="width: 100%; height: auto; object-fit: cover; object-position: top center; display: block;">
                                    </figure>
                                </div>
                                <div class="team-item-body" style="padding: 14px 10px 6px; text-align: center;">
                                    <div class="team-item-contant" style="width: 100%;">
                                        <h3 style="font-size: 18px; font-weight: 600; margin-bottom: 5px; color: var(--primary-color, #1a202c);">Mr. Sujeet Katiyar</h3>
                                        <p style="font-size: 13px; color: var(--accent-color, #007bff); font-weight: 500; margin: 0; min-height: unset; line-height: 1.4;">Senior Advisor – Digital Health Transformation</p>
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
                                    Senior Advisor – Digital Health Transformation | Nexa Health Consult
                                </span>

                                <h2 class="wow fadeInUp"
                                    data-wow-delay="0.2s"
                                    data-cursor="-opaque">
                                    Mr. Sujeet <span>Katiyar</span>
                                </h2>

                                <p class="wow fadeInUp"
                                   data-wow-delay="0.4s">
                                    <strong>Mr. Sujeet Katiyar</strong> is a Digital Health and Health-Tech Strategist with deep expertise in scaling technology-led healthcare transformation.
                                </p>

                                <p class="wow fadeInUp"
                                   data-wow-delay="0.3s">
                                    As <strong>Senior Advisor – Digital Health Transformation</strong> at <strong>Nexa Health Consult</strong>, he advises hospitals, medical colleges and healthcare investors on <strong>HIS/EMR implementation, AI-driven clinical workflows, Telemedicine, Digital Front Door, and NABH & ABDM-compliant digital ecosystems.</strong>
                                </p>

                                <p class="wow fadeInUp"
                                   data-wow-delay="0.3s">
                                    He brings a strong blend of technology strategy, product innovation, and go-to-market execution – helping traditional hospitals become future-ready, paperless and revenue-efficient.
                                </p>

                                <div class="team-member-key-points wow fadeInUp" data-wow-delay="0.4s" style="margin-top: 30px;">
                                    <h4 style="font-size: 20px; font-weight: 600; margin-bottom: 15px; color: var(--primary-color);">Focus Areas:</h4>
                                    <div class="team-member-key-points-list">
                                        <ul>
                                            <li>Digital Health Strategy</li>
                                            <li>Health-Tech Product Advisory</li>
                                            <li>Hospital Automation</li>
                                            <li>ABDM</li>
                                            <li>AI in Healthcare Operations</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="team-member-quote wow fadeInUp" data-wow-delay="0.5s" style="margin-top: 25px; padding: 15px 20px; border-left: 4px solid var(--accent-color, #007bff); background: rgba(0, 0, 0, 0.02); border-radius: 0 8px 8px 0; font-style: italic; color: #444; font-size: 16px;">
                                    &ldquo;Building Smart Hospitals that are Digital by Design, Human by Heart.&rdquo;
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
