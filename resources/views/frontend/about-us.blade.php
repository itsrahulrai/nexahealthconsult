@extends('frontend.layouts.layout')
@section('title', 'About us Nexa Health Consult - Your Smart Healthcare Consultants')
@section('meta-title', 'About Us - Nexa Health Consult - Your Smart Healthcare Consultants')
@section('keywords', 'Nexa Health Consult, About Us, Healthcare Consultants, Medical Consulting, Global Healthcare
Leadership')
@section('meta-description', 'Learn about the journey and mission of Nexa Health Consult, your trusted healthcare
consulting partners.')

@section('content')

<!-- Page Header Section Start -->
<div class="page-header parallaxie"
    style="background-image: url({{ static_asset('assets/images/bg/about-us.webp') }}); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -97.9063px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="wow fadeInUp" data-cursor="-opaque"
                        style="visibility: visible; animation-name: fadeInUp;">About <span>us</span></h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">about us</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->


<!-- About Us Section Start -->
<div class="about-us-prime pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="about-us-contant">
                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">Dr. Sanjeev Kalra</span>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            Healthcare Consultant | Hospital & Medical <span> College Project Advisor</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                            Dr. Sanjeev Kalra is a seasoned healthcare consultant with 20 years of experience in
                            healthcare planning, development, and implementation, including 5 years of experience in the
                            US healthcare system. He brings a strong combination of clinical expertise, hospital
                            management, financial planning, and executive healthcare leadership to support hospitals,
                            medical colleges, and healthcare institutions in building efficient, sustainable, and
                            future-ready systems.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="0.5s">
                            He holds an <strong>MD, MDBA in Hospital Management & Finance, AHCLM </strong> in Executive
                            Healthcare
                            Leadership and Management from <strong>Johns Hopkins University, USA,</strong> and an
                            <strong>MHA</strong> from the <strong>University
                                of Phoenix</strong> . His multidisciplinary background enables him to provide practical,
                            strategic,
                            and outcome-focused guidance across the full project lifecycle.
                        </p>

                    </div>

                </div>
            </div>
            

            <div class="col-xl-6">
                <div class="about-us-image-box-prime wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-us-image-box-1-prime">
                        <div class="about-us-image-prime">
                            <figure>
                                <img src="{{ static_asset('assets/images/about/about-us.jpg') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="service-single-content mt-5">
                    <div class="service-entry">

                        <div class="service-process-box mt-0">
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Dr. Kalra specializes in <strong>planning, developing, and implementing healthcare
                                    projects</strong> for
                                medical colleges and hospitals. His work includes feasibility assessment, project
                                structuring, operational planning, workflow design, hospital commissioning, quality
                                improvement, and leadership support. He works closely with institutional stakeholders to
                                translate vision into executable plans aligned with clinical, academic, operational, and
                                financial objectives.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">
                                With deep understanding of both Indian and US healthcare environments, Dr. Kalra offers
                                insights that help organizations improve efficiency, strengthen governance, enhance
                                patient care, and create scalable healthcare models. His consulting approach is focused
                                on building high-performing institutions with strong systems, clear processes, and
                                measurable results.
                            </p>

                            <!-- <div class="service-process-item-list">
                                <div class="service-process-item wow fadeInUp">
                                    <div class="service-process-no">
                                        <figure>
                                            <img src="{{ static_asset('assets/images/banner/about-us-01.png') }}"
                                                alt="">
                                        </figure>
                                        <h3>01</h3>
                                    </div>
                                    <div class="service-process-item-content">
                                        <h3>Assessment</h3>
                                        <p>Evaluate healthcare operations, challenges, and opportunities.</p>
                                    </div>
                                </div>
                                <div class="service-process-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="service-process-no">
                                        <figure>
                                            <img src="{{ static_asset('assets/images/banner/about-us-01.png') }}"
                                                alt="">
                                        </figure>
                                        <h3>02</h3>
                                    </div>
                                    <div class="service-process-item-content">
                                        <h3>Strategic Planning</h3>
                                        <p>Develop tailored strategies aligned with healthcare goals.</p>
                                    </div>
                                </div>

                                <div class="service-process-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="service-process-no">
                                        <figure>
                                            <img src="{{ static_asset('assets/images/banner/about-us-01.png') }}"
                                                alt="">
                                        </figure>
                                        <h3>03</h3>
                                    </div>
                                    <div class="service-process-item-content">
                                        <h3>Implementation</h3>
                                        <p>Execute solutions to improve efficiency and care delivery.</p>
                                    </div>
                                </div>
                                <div class="service-process-item wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="service-process-no">
                                        <figure>
                                            <img src="{{ static_asset('assets/images/banner/about-us-01.png') }}"
                                                alt="">
                                        </figure>
                                        <h3>04</h3>
                                    </div>
                                    <div class="service-process-item-content">
                                        <h3>Continuous Improvement</h3>
                                        <p>Monitor performance and optimize healthcare outcomes.</p>
                                    </div>
                                </div>

                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="skhc-consulting-wrap">
    <div class="container">

        <div class="row">

            <!-- Core Areas -->
            <div class="col-lg-6 mb-4 mb-md-0">
                <div class="skhc-card h-100">
                    <div class="skhc-icon">
                        <i class="fas fa-hospital"></i>
                    </div>

                    <h4 class="skhc-card-title">Core Areas of Expertise</h4>

                    <ul class="skhc-list">
                        <li><i class="fas fa-check-circle"></i> Hospital planning and development</li>
                        <li><i class="fas fa-check-circle"></i> Medical college project advisory</li>
                        <li><i class="fas fa-check-circle"></i> Healthcare operations and workflow design</li>
                        <li><i class="fas fa-check-circle"></i> Project implementation and commissioning</li>
                        <li><i class="fas fa-check-circle"></i> Financial planning and hospital management</li>
                        <li><i class="fas fa-check-circle"></i> Executive healthcare leadership</li>
                        <li><i class="fas fa-check-circle"></i> Quality improvement and governance</li>
                        <li><i class="fas fa-check-circle"></i> US healthcare system insights</li>
                    </ul>
                </div>
            </div>

            <!-- Consulting Focus -->
            <div class="col-lg-6">
                <div class="skhc-card h-100">
                    <div class="skhc-icon">
                        <i class="fas fa-briefcase-medical"></i>
                    </div>

                    <h4 class="skhc-card-title">Consulting Focus</h4>

                    <p class="skhc-text">Dr. Kalra supports healthcare organizations in:</p>

                    <ul class="skhc-list">
                        <li><i class="fas fa-check-circle"></i> New hospital and medical college project planning</li>
                        <li><i class="fas fa-check-circle"></i> Expansion and modernization of existing facilities</li>
                        <li><i class="fas fa-check-circle"></i> Operational restructuring and system improvement</li>
                        <li><i class="fas fa-check-circle"></i> Strategic healthcare leadership and implementation support</li>
                        <li><i class="fas fa-check-circle"></i> Institutional readiness for sustainable growth</li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- Why Work -->
        <div class="skhc-card mt-4">
            <div class="skhc-icon">
                <i class="fas fa-award"></i>
            </div>

            <h4 class="skhc-card-title">Why Work With Dr. Kalra</h4>

            <div class="row g-3 mt-1">

                <div class="col-md-6">
                    <div class="skhc-feature-box">
                        <i class="fas fa-clock"></i>
                        <span>20 years of healthcare experience</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="skhc-feature-box">
                        <i class="fas fa-globe"></i>
                        <span>5 years of US healthcare system experience</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="skhc-feature-box">
                        <i class="fas fa-user-graduate"></i>
                        <span>Strong academic and professional credentials</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="skhc-feature-box">
                        <i class="fas fa-project-diagram"></i>
                        <span>Practical experience in project planning and implementation</span>
                    </div>
                </div>

            </div>

            <div class="skhc-highlight mt-4">
                <i class="fas fa-star"></i>
                <strong>
                    Based in Delhi, India, Dr. Sanjeev Kalra is available for consulting assignments,
                    project advisory roles, and institutional development partnerships.
                </strong>
            </div>
        </div>

    </div>
</section>
<!-- About Us Section End -->

@endsection