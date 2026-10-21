@extends('frontend.layouts.layout')

@section('title', 'Digital Health & Health IT Infrastructure - Nexa Health Consult')
@section('meta-title', 'Digital Health & Health IT Infrastructure | Nexa Health Consult')
@section('keywords', 'digital health consulting, health IT infrastructure, hospital HIS EMR implementation, ABDM integration, hospital IT systems, healthcare technology advisory, healthcare digital transformation, Nexa Health Consult')
@section('meta-description', 'Digital Health & Health IT Infrastructure advisory by Nexa Health Consult. Build a connected, secure, and right-sized digital backbone behind better clinical and operational care.')

@push('style')
<!-- Schema.org JSON-LD for Search Engines -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Digital Health & Health IT Infrastructure",
  "provider": {
    "@type": "Organization",
    "name": "Nexa Health Consult",
    "url": "{{ url('/') }}"
  },
  "description": "Digital Health & Health IT Infrastructure advisory by Nexa Health Consult. Helping healthcare organizations plan right-sized, secure, and interoperable technology foundations from clinics to quaternary hospitals.",
  "areaServed": "India"
}
</script>
@endpush

@section('content')

<!-- Page Header Section Start -->
<div class="page-header parallaxie digital-health-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h2 class="wow fadeInUp" data-cursor="-opaque">Digital Health &amp; IT Infrastructure</h2>
                    <nav class="wow fadeInUp" data-wow-delay="0.2s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Digital Health &amp; IT Infrastructure</li>
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
                            <img src="{{ static_asset('assets/images/services/services-03.png') }}" alt="Digital Health &amp; Health IT Infrastructure - Nexa Health Consult">
                        </figure>
                    </div>
                    <!-- Page Single image End -->

                    <!-- Service Entry Start -->
                    <article class="service-entry">
                        <header>
                            <h1 class="service-title wow fadeInUp">Digital Health &amp; Health IT Infrastructure</h1>
                            <p class="service-subtitle wow fadeInUp" data-wow-delay="0.1s">Build the Digital Backbone Behind Better Care</p>
                        </header>

                        <p class="wow fadeInUp" data-wow-delay="0.15s">Digital health is not simply about installing software. It is about connecting people, care processes, information, and technology—so the right data reaches the right person at the right time, securely and usefully.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s"><strong>Nexa Health Consult</strong> helps healthcare organizations plan digital infrastructure around their clinical and operational goals. From a single clinic to a medical college or quaternary-care hospital, we help create a technology foundation that supports safer care, smoother workflows, informed decisions, and sustainable growth.</p>

                        <!-- Designed for Your Scale of Care -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">Designed for Your Scale of Care</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.1s">A clinic needs a different digital blueprint from a teaching hospital. We help define a right-sized approach for:</p>

                            <!-- Facility Strategy Cards Grid -->
                            <div class="facility-strategy-grid wow fadeInUp" data-wow-delay="0.15s">
                                <!-- Clinics -->
                                <div class="facility-strategy-card">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-laptop-medical"></i>
                                        </div>
                                        <h3>Clinics</h3>
                                    </div>
                                    <p class="facility-strategy-desc">Appointment management, digital registration, electronic records, prescriptions, billing, and follow-up.</p>
                                </div>

                                <!-- Diagnostic centres -->
                                <div class="facility-strategy-card">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-microscope"></i>
                                        </div>
                                        <h3>Diagnostic centres</h3>
                                    </div>
                                    <p class="facility-strategy-desc">Orders, sample and imaging workflows, reporting, result delivery, and equipment connectivity.</p>
                                </div>

                                <!-- Small hospitals -->
                                <div class="facility-strategy-card">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-hospital-user"></i>
                                        </div>
                                        <h3>Small hospitals</h3>
                                    </div>
                                    <p class="facility-strategy-desc">HIS/EMR, admissions, nursing documentation, pharmacy, laboratory, imaging, billing, and discharge processes.</p>
                                </div>

                                <!-- Medical colleges and teaching hospitals -->
                                <div class="facility-strategy-card">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                        </div>
                                        <h3>Medical colleges and teaching hospitals</h3>
                                    </div>
                                    <p class="facility-strategy-desc">Integrated clinical and academic systems, learning platforms, research data workflows, and appropriate access controls.</p>
                                </div>

                                <!-- Primary to quaternary hospitals -->
                                <div class="facility-strategy-card span-full">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-network-wired"></i>
                                        </div>
                                        <h3>Primary to quaternary hospitals</h3>
                                    </div>
                                    <p class="facility-strategy-desc">Scalable platforms and connected workflows across outpatient care, emergency, inpatient services, critical care, operating rooms, diagnostics, pharmacy, and administration.</p>
                                </div>
                            </div>
                        </section>

                        <!-- From Technology Choices to Connected Care -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">From Technology Choices to Connected Care</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.1s">We help organizations plan a coherent digital ecosystem—not a collection of disconnected applications.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.15s">Our advisory may cover:</p>

                            <!-- Advisory Services Grid -->
                            <div class="advisory-feature-grid wow fadeInUp" data-wow-delay="0.2s">
                                <!-- Item 1 -->
                                <div class="advisory-feature-card">
                                    <div class="advisory-feature-icon">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <div class="advisory-feature-text">
                                        <p>Digital-health vision, maturity assessment, and implementation roadmap.</p>
                                    </div>
                                </div>

                                <!-- Item 2 -->
                                <div class="advisory-feature-card">
                                    <div class="advisory-feature-icon">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <div class="advisory-feature-text">
                                        <p>HIS/EMR requirements, vendor evaluation, and workflow-fit assessment.</p>
                                    </div>
                                </div>

                                <!-- Item 3 -->
                                <div class="advisory-feature-card">
                                    <div class="advisory-feature-icon">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <div class="advisory-feature-text">
                                        <p>Infrastructure planning for networks, devices, servers or cloud, backups, and business continuity.</p>
                                    </div>
                                </div>

                                <!-- Item 4 -->
                                <div class="advisory-feature-card">
                                    <div class="advisory-feature-icon">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <div class="advisory-feature-text">
                                        <p>Integration priorities across clinical, diagnostic, financial, and administrative systems.</p>
                                    </div>
                                </div>

                                <!-- Item 5 -->
                                <div class="advisory-feature-card">
                                    <div class="advisory-feature-icon">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <div class="advisory-feature-text">
                                        <p>Data governance, role-based access, privacy, cybersecurity, and downtime procedures.</p>
                                    </div>
                                </div>

                                <!-- Item 6 -->
                                <div class="advisory-feature-card">
                                    <div class="advisory-feature-icon">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <div class="advisory-feature-text">
                                        <p>User training, change management, testing, go-live planning, and adoption monitoring.</p>
                                    </div>
                                </div>

                                <!-- Item 7 -->
                                <div class="advisory-feature-card span-full">
                                    <div class="advisory-feature-icon">
                                        <i class="fa-solid fa-circle-check"></i>
                                    </div>
                                    <div class="advisory-feature-text">
                                        <p>Dashboard and reporting needs for quality, operations, finance, and leadership.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- ABDM Guidance Note -->
                            <div class="service-regulatory-note wow fadeInUp" data-wow-delay="0.25s">
                                <p>In India, digital planning can also consider relevant ABDM building blocks and interoperability requirements, subject to the organization’s context and applicable guidance.</p>
                            </div>
                        </section>

                        <!-- Our Implementation Pathway -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">Our Implementation Pathway</h2>

                            <div class="signature-process-grid">
                                <!-- Step 1: Discover -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="signature-step-num">
                                        <span>01</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Discover</h3>
                                        <p>Discover how care and operations work today.</p>
                                    </div>
                                </div>

                                <!-- Step 2: Design -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="signature-step-num">
                                        <span>02</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Design</h3>
                                        <p>Design the future-state workflows, system requirements, and integration priorities.</p>
                                    </div>
                                </div>

                                <!-- Step 3: Select -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="signature-step-num">
                                        <span>03</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Select</h3>
                                        <p>Select technology against clear clinical, technical, operational, and financial criteria.</p>
                                    </div>
                                </div>

                                <!-- Step 4: Deploy -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="signature-step-num">
                                        <span>04</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Deploy</h3>
                                        <p>Deploy in phases, with testing, training, safeguards, and accountable ownership.</p>
                                    </div>
                                </div>

                                <!-- Step 5: Improve -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="signature-step-num">
                                        <span>05</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Improve</h3>
                                        <p>Improve through feedback, adoption measures, system performance, and ongoing review.</p>
                                    </div>
                                </div>
                            </div>

                            <p class="service-process-summary wow fadeInUp" data-wow-delay="0.2s">We keep the focus on practical use: technology should support the work of clinicians and staff, not add avoidable complexity.</p>
                        </section>

                        <!-- Secure, Interoperable, Fit for Purpose -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">Secure, Interoperable, Fit for Purpose</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.1s">Digital systems must be planned with privacy, security, data quality, interoperability, and patient safety in mind. India’s ABDM promotes an open, interoperable digital health ecosystem, while NABH has introduced programmes addressing digital health and HIS/EMR standards. Organizations should verify current requirements and programme applicability during planning.</p>

                            <!-- Value Proposition Callout (Regular weight, NOT bold) -->
                            <div class="service-highlight-callout wow fadeInUp" data-wow-delay="0.15s">
                                <p>Nexa Health Consult helps you move from scattered systems to a connected digital foundation—planned around your people, your patients, and your future.</p>
                            </div>
                        </section>

                        <!-- Plan Your Digital Journey (CTA) -->
                        <div class="service-entry-cta wow fadeInUp" data-wow-delay="0.2s">
                            <h3>Plan Your Digital Journey</h3>
                            <p class="service-cta-desc">Whether you are digitizing a clinic, setting up a diagnostic centre, modernizing a hospital, or developing a medical college, start with a roadmap before choosing the technology.</p>
                            <p class="service-cta-lead">Partner with <strong>Nexa Health Consult</strong> to make health IT purposeful, secure, scalable, and ready to support better care.</p>
                            <a href="{{ route('contact-us') }}" class="btn-default">Plan Your Digital Health Strategy</a>
                        </div>

                    </article>
                    <!-- Service Entry End -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

