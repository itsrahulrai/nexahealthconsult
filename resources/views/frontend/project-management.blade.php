@extends('frontend.layouts.layout')
@section('title', 'Healthcare Project Management - Nexa Health Consult')
@section('meta-title', 'Healthcare Project Management - From Blueprint to Breakthrough | Nexa Health Consult')
@section('keywords', 'healthcare project management, hospital project management, clinic development management, hospital commissioning, healthcare infrastructure execution, hospital project consultants, medical college project management, Nexa Health Consult')
@section('meta-description', 'End-to-end healthcare project management by Nexa Health Consult for clinics, diagnostic centres, hospitals, and medical colleges. From blueprint to breakthrough—delivered with precision.')

@push('style')
<!-- Schema.org JSON-LD for Search Engines -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Healthcare Project Management",
  "provider": {
    "@type": "Organization",
    "name": "Nexa Health Consult",
    "url": "{{ url('/') }}"
  },
  "description": "End-to-end healthcare project management by Nexa Health Consult for clinics, diagnostic centres, hospitals, and medical colleges. From blueprint to breakthrough—delivered with precision.",
  "areaServed": "India"
}
</script>
@endpush

@section('content')

<!-- Page Header Section Start -->
<div class="page-header parallaxie" style="background-image: url({{ static_asset('assets/images/bg/about-us.webp') }}); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -97.9063px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h2 class="wow fadeInUp" data-cursor="-opaque">Project Management</h2>
                    <nav class="wow fadeInUp" data-wow-delay="0.2s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Project Management</li>
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
                            <img src="{{ static_asset('assets/images/services/project-management.jpg') }}" alt="Healthcare Project Management - Nexa Health Consult">
                        </figure>
                    </div>
                    <!-- Page Single image End -->

                    <!-- Service Entry Start -->
                    <article class="service-entry">
                        <header>
                            <h1 class="service-title wow fadeInUp">Healthcare Project Management</h1>
                            <p class="service-subtitle wow fadeInUp" data-wow-delay="0.1s">From Blueprint to Breakthrough—Delivered with Precision</p>
                        </header>

                        <p class="wow fadeInUp" data-wow-delay="0.15s">Every healthcare project carries a powerful promise: better access, advanced care, stronger institutions, and healthier communities. But between vision and opening day lie hundreds of decisions, approvals, timelines, budgets, technologies, and teams.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">At <strong>Nexa Health Consult</strong>, we provide end-to-end healthcare project management that keeps your clinic, diagnostic centre, hospital, medical college, or multi-specialty facility moving forward with clarity, control, and confidence.</p>

                        <!-- Managing Projects as Living Systems -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">Managing Projects as Living Systems</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.1s">Healthcare projects do not fail because of one major mistake. They often face delays and cost overruns because planning, design, procurement, licensing, construction, technology, staffing, and operations move in disconnected silos.</p>
                            
                            <p class="service-lead-text wow fadeInUp" data-wow-delay="0.15s">We connect them.</p>

                            <p class="wow fadeInUp" data-wow-delay="0.2s">Our project-management approach treats every healthcare facility as an integrated system—where clinical needs, infrastructure, compliance, finance, technology, and operational readiness advance together. This ensures fewer surprises, stronger accountability, and a smoother journey from concept to commissioning.</p>
                        </section>

                        <!-- What We Manage -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">What We Manage</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.1s">We provide structured project-management support across the complete healthcare development lifecycle:</p>

                            <div class="service-testing-item-list wow fadeInUp" data-wow-delay="0.15s">
                                <ul>
                                    <li>Project initiation, scope definition, and master implementation planning</li>
                                    <li>Feasibility alignment, approvals, and regulatory-compliance tracking</li>
                                    <li>Design coordination with architects, consultants, and engineering teams</li>
                                    <li>Medical equipment planning, procurement support, and installation coordination</li>
                                    <li>Construction-stage monitoring, quality assurance, and progress reporting</li>
                                    <li>Cost control, budget tracking, variation management, and timeline protection</li>
                                    <li>Vendor, contractor, and stakeholder coordination</li>
                                    <li>Licensing, inspections, documentation, and audit-readiness support</li>
                                    <li>IT, medical gas, MEP, fire safety, and utility-system coordination</li>
                                    <li>Staff recruitment planning, SOP development, training, and operational readiness</li>
                                    <li>Commissioning, trial runs, and pre-opening launch management</li>
                                </ul>
                            </div>
                        </section>

                        <!-- Our Innovative Delivery Model -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">Our Innovative Delivery Model</h2>

                            <div class="signature-process-grid">
                                <!-- Step 1: Align -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="signature-step-num">
                                        <span>01</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Align</h3>
                                        <p>We begin by aligning promoters, investors, clinical leaders, architects, contractors, and operational teams around one clear project vision, scope, timeline, and success framework.</p>
                                    </div>
                                </div>

                                <!-- Step 2: Plan -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="signature-step-num">
                                        <span>02</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Plan</h3>
                                        <p>We create a detailed project roadmap with milestones, responsibilities, dependencies, budgets, approval requirements, and risk controls.</p>
                                    </div>
                                </div>

                                <!-- Step 3: Coordinate -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="signature-step-num">
                                        <span>03</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Coordinate</h3>
                                        <p>We act as the central bridge between clinical, technical, regulatory, financial, and construction stakeholders—ensuring decisions are timely, documented, and aligned.</p>
                                    </div>
                                </div>

                                <!-- Step 4: Control -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="signature-step-num">
                                        <span>04</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Control</h3>
                                        <p>We track progress against schedule, cost, quality, and compliance parameters. Issues are identified early, escalated clearly, and resolved before they become costly delays.</p>
                                    </div>
                                </div>

                                <!-- Step 5: Commission -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="signature-step-num">
                                        <span>05</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Commission</h3>
                                        <p>We prepare the facility for a confident launch through equipment readiness, staff training, SOP implementation, trial operations, safety checks, and process validation.</p>
                                    </div>
                                </div>

                                <!-- Step 6: Sustain -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="signature-step-num">
                                        <span>06</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Sustain</h3>
                                        <p>We support the transition from project completion to stable operations with performance dashboards, review systems, and continuous-improvement mechanisms.</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- What You Receive -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">What You Receive</h2>

                            <div class="service-testing-item-list wow fadeInUp" data-wow-delay="0.15s">
                                <ul>
                                    <li>A comprehensive project-management plan</li>
                                    <li>Milestone-based implementation roadmap</li>
                                    <li>Budget, timeline, and risk-monitoring framework</li>
                                    <li>Stakeholder and vendor-coordination structure</li>
                                    <li>Regulatory and compliance-tracking support</li>
                                    <li>Quality, safety, and commissioning checklists</li>
                                    <li>Regular progress dashboards and management reports</li>
                                    <li>Pre-opening operational-readiness plan</li>
                                </ul>
                            </div>
                        </section>

                        <!-- Why Nexa Health Consult -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">Why Nexa Health Consult</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.15s">We combine healthcare strategy, hospital planning, operations, compliance, medical equipment planning, and project-management expertise. Our focus is not only to complete the project—but to deliver a facility that is ready to operate safely, efficiently, and profitably from day one.</p>

                            <!-- Value Proposition Callout (Regular weight, NOT bold) -->
                            <div class="service-highlight-callout wow fadeInUp" data-wow-delay="0.2s">
                                <p>We help you move from plans on paper to performance in practice.</p>
                            </div>
                        </section>

                        <!-- Deliver Your Vision with Confidence (CTA) -->
                        <div class="service-entry-cta wow fadeInUp" data-wow-delay="0.25s">
                            <h3>Deliver Your Vision with Confidence</h3>
                            <p class="service-cta-desc">Whether you are building a clinic, diagnostic centre, small hospital, medical college, or tertiary and quaternary-care institution, strong project management is the difference between a delayed investment and a successful healthcare landmark.</p>
                            <p class="service-cta-lead">Partner with <strong>Nexa Health Consult</strong> for healthcare project management that delivers quality, control, compliance, and certainty—at every stage of your journey.</p>
                            <a href="{{ route('contact-us') }}" class="btn-default">Partner With Our Experts</a>
                        </div>

                    </article>
                    <!-- Service Entry End -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
