@extends('frontend.layouts.layout')
@section('title', 'Strategic Healthcare Consulting - Nexa Health Consult | Healthcare Strategy Experts')
@section('meta-title', 'Strategic Healthcare Consulting - Nexa Health Consult | Building Healthcare Organizations That Lead, Perform, and Endure')
@section('keywords', 'strategic healthcare consulting, healthcare strategy consulting, hospital strategy consulting, healthcare management consulting, healthcare advisory services, hospital business strategy, healthcare consulting firm, Nexa Health Consult')
@section('meta-description', 'Strategic Healthcare Consulting services by Nexa Health Consult to help hospitals, clinics, medical colleges, and investors build resilient, patient-centred, and future-ready healthcare organizations.')

@section('content')

<!-- Page Header Section Start -->
<div class="page-header parallaxie" style="background-image: url({{ static_asset('assets/images/bg/about-us.webp') }}); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -97.9063px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h2 class="wow fadeInUp" data-cursor="-opaque">Strategic Healthcare Consulting</h2>
                    <nav class="wow fadeInUp" data-wow-delay="0.2s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Strategic Healthcare Consulting</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->

<div class="page-service-single">
    <div class="container">
        <div class="row">
            <!-- sidebar start -->
            @include('frontend.includes.service-sidebar')
            <!-- sidebar end -->

            <div class="col-lg-8">
                <!-- Service Single Content Start -->
                <div class="service-single-content">
                    <!-- Page Single image Start -->
                    <div class="page-single-image">
                        <figure class="image-anime reveal">
                            <img src="{{ static_asset('assets/images/services/startegy-consult.jpg') }}" alt="Strategic Healthcare Consulting">
                        </figure>
                    </div>
                    <!-- Page Single image End -->

                    <!-- Service Entry Start -->
                    <div class="service-entry">
                        <h1 class="service-title wow fadeInUp">Strategic Healthcare Consulting</h1>
                        <h3 class="service-subtitle wow fadeInUp" data-wow-delay="0.1s">Building Healthcare Organizations That Lead, Perform, and Endure</h3>
                        
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Healthcare success is not created by infrastructure alone. It is built through a clear vision, intelligent systems, empowered teams, and decisions grounded in evidence.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.3s">At <strong>Nexa Health Consult</strong>, we help hospitals, clinics, diagnostic centres, medical colleges, investors, and healthcare entrepreneurs transform ideas into resilient, patient-centred, and future-ready healthcare organizations. From concept to execution, we provide the strategic foundation for measurable growth and lasting impact.</p>

                        <!-- A New Way to Think About Healthcare Strategy -->
                        <div class="service-section">
                            <h3 class="wow fadeInUp">A New Way to Think About Healthcare Strategy</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Most healthcare challenges do not begin with a lack of effort. They begin with disconnected decisions—between strategy and operations, clinical excellence and financial sustainability, patient needs and organizational growth.</p>
                            <p class="service-lead-text wow fadeInUp" data-wow-delay="0.25s">We bring these elements together.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">Our consulting approach connects market intelligence, clinical priorities, operational design, quality systems, and business performance into one coherent roadmap. The result is not just a plan, but a living framework that guides everyday decisions and long-term growth.</p>
                        </div>

                        <!-- What We Deliver -->
                        <div class="service-section">
                            <h3 class="wow fadeInUp">What We Deliver</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We provide strategic support across the complete healthcare value chain:</p>

                            <!-- Service Deliver Feature Grid Start -->
                            <div class="advisory-feature-grid wow fadeInUp" data-wow-delay="0.25s">
                                <div class="advisory-feature-card">
                                    <div class="advisory-feature-icon">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <div class="advisory-feature-text">
                                        <p>Healthcare business strategy, service positioning, and growth planning</p>
                                    </div>
                                </div>

                                <div class="advisory-feature-card">
                                    <div class="advisory-feature-icon">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <div class="advisory-feature-text">
                                        <p>Market research, demand assessment, competition analysis, and feasibility studies</p>
                                    </div>
                                </div>

                                <div class="advisory-feature-card">
                                    <div class="advisory-feature-icon">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <div class="advisory-feature-text">
                                        <p>Hospital, clinic, diagnostic centre, and medical-college project planning</p>
                                    </div>
                                </div>

                                <div class="advisory-feature-card">
                                    <div class="advisory-feature-icon">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <div class="advisory-feature-text">
                                        <p>Clinical and operational workflow redesign</p>
                                    </div>
                                </div>

                                <div class="advisory-feature-card">
                                    <div class="advisory-feature-icon">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <div class="advisory-feature-text">
                                        <p>Patient experience, patient safety, and quality-management systems</p>
                                    </div>
                                </div>

                                <div class="advisory-feature-card">
                                    <div class="advisory-feature-icon">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <div class="advisory-feature-text">
                                        <p>NABH, JCI, licensing, and regulatory-readiness support</p>
                                    </div>
                                </div>

                                <div class="advisory-feature-card">
                                    <div class="advisory-feature-icon">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <div class="advisory-feature-text">
                                        <p>SOPs, KPIs, performance dashboards, and governance frameworks</p>
                                    </div>
                                </div>

                                <div class="advisory-feature-card">
                                    <div class="advisory-feature-icon">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <div class="advisory-feature-text">
                                        <p>Organizational development, leadership alignment, and team capability building</p>
                                    </div>
                                </div>

                                <div class="advisory-feature-card span-full">
                                    <div class="advisory-feature-icon">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <div class="advisory-feature-text">
                                        <p>Expansion, transformation, and sustainable business-development strategies</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Deliver Feature Grid End -->

                            <p class="service-deliver-desc wow fadeInUp" data-wow-delay="0.3s">Whether you are launching a new facility, improving an established organization, or preparing for the next stage of growth, we create solutions shaped around your unique clinical, market, and financial realities.</p>
                        </div>

                        <!-- Our Signature Approach -->
                        <div class="service-section">
                            <h3 class="wow fadeInUp">Our Signature Approach</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.1s">A structured, proven framework designed to ensure measurable execution and lasting institutional value:</p>

                            <div class="signature-process-grid">
                                <!-- Step 1: Discover -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="signature-step-num">
                                        <span>01</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Discover</h3>
                                        <p>We begin by listening. We understand your vision, clinical strengths, market environment, stakeholder expectations, and the outcomes that matter most.</p>
                                    </div>
                                </div>

                                <!-- Step 2: Diagnose -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="signature-step-num">
                                        <span>02</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Diagnose</h3>
                                        <p>We assess the full ecosystem—operations, quality, patient experience, workforce, infrastructure, compliance, and financial performance—to identify both barriers and untapped opportunities.</p>
                                    </div>
                                </div>

                                <!-- Step 3: Design -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="signature-step-num">
                                        <span>03</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Design</h3>
                                        <p>We convert insight into action through a practical strategic blueprint: the right services, systems, processes, resources, quality standards, and growth milestones.</p>
                                    </div>
                                </div>

                                <!-- Step 4: Deliver -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="signature-step-num">
                                        <span>04</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Deliver</h3>
                                        <p>We support implementation with SOPs, training, dashboards, audits, process redesign, and performance-monitoring systems that make excellence part of daily practice.</p>
                                    </div>
                                </div>

                                <!-- Step 5: Drive -->
                                <div class="signature-process-card span-full wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="signature-step-num">
                                        <span>05</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Drive</h3>
                                        <p>We measure what matters, review progress regularly, and refine the strategy to ensure continuous improvement and sustainable results.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Why It Matters -->
                        <div class="service-section">
                            <h3 class="wow fadeInUp">Why It Matters</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">A hospital may be well built. A clinic may be well equipped. But neither will reach its potential without strong strategy, reliable systems, and aligned leadership.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.3s"><strong>Nexa Health Consult</strong> exists to help healthcare providers build organizations that inspire trust, deliver exceptional care, operate efficiently, and remain financially sustainable. We combine an international perspective with practical healthcare expertise to help leaders make confident decisions and achieve measurable success.</p>
                        </div>

                        <!-- Our Commitment -->
                        <div class="service-commitment-box wow fadeInUp" data-wow-delay="0.3s">
                            <h4 class="service-commitment-title">Our Commitment</h4>
                            <p class="service-commitment-lead">We do not simply advise healthcare organizations—we help build their future.</p>
                            <p class="service-commitment-desc">With <strong>Nexa Health Consult</strong>, you gain a strategic partner dedicated to creating healthcare institutions that are clinically trusted, operationally strong, patient-centred, and prepared for tomorrow.</p>
                        </div>

                        <!-- Start Your Strategic Journey (CTA) -->
                        <div class="service-entry-cta wow fadeInUp" data-wow-delay="0.35s">
                            <h3>Start Your Strategic Journey</h3>
                            <p class="service-cta-subtitle">Ready to transform your healthcare vision into a high-performing reality?</p>
                            <p class="service-cta-desc">Partner with <strong>Nexa Health Consult</strong> for strategic healthcare consulting that creates clarity, builds capability, and delivers sustainable growth.</p>
                            <a href="{{ route('contact-us') }}" class="btn-default">Connect With Our Experts</a>
                        </div>

                    </div>
                    <!-- Service Entry End -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
