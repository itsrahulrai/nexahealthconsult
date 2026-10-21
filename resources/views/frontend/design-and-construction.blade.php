@extends('frontend.layouts.layout')
@section('title', 'Healthcare Design and Construction Advisory - Nexa Health Consult')
@section('meta-title', 'Healthcare Design & Construction - Spaces Designed for Care, Built for Performance | Nexa Health Consult')
@section('keywords', 'healthcare design and construction, hospital design consultants, medical college campus design, healthcare architecture advisory, clinic design, hospital construction management, hospital MEP planning, Nexa Health Consult')
@section('meta-description', 'Healthcare design and construction advisory by Nexa Health Consult for clinics, diagnostic centres, small hospitals, medical colleges, and primary to quaternary-care hospitals.')

@push('style')
<!-- Schema.org JSON-LD for Search Engines -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Healthcare Design and Construction Advisory",
  "provider": {
    "@type": "Organization",
    "name": "Nexa Health Consult",
    "url": "{{ url('/') }}"
  },
  "description": "Healthcare design and construction advisory by Nexa Health Consult for clinics, diagnostic centres, small hospitals, medical colleges, and primary to quaternary-care hospitals. Spaces Designed for Care. Built for Performance.",
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
                    <h2 class="wow fadeInUp" data-cursor="-opaque">Design and Construction</h2>
                    <nav class="wow fadeInUp" data-wow-delay="0.2s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Design and Construction</li>
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
                            <img src="{{ static_asset('assets/images/services/design.jpg') }}" alt="Healthcare Design and Construction - Nexa Health Consult">
                        </figure>
                    </div>
                    <!-- Page Single image End -->

                    <!-- Service Entry Start -->
                    <article class="service-entry">
                        <header>
                            <h1 class="service-title wow fadeInUp">Healthcare Design &amp; Construction</h1>
                            <p class="service-subtitle wow fadeInUp" data-wow-delay="0.1s">Spaces Designed for Care. Built for Performance.</p>
                        </header>

                        <p class="wow fadeInUp" data-wow-delay="0.15s">A healthcare facility is never just a building. It is a clinical ecosystem where architecture, technology, safety, patient experience, staff efficiency, and future growth must work in perfect harmony.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">At <strong>Nexa Health Consult</strong>, we provide design and construction advisory for clinics, diagnostic centres, small hospitals, medical colleges, and primary to quaternary-care hospitals. We help transform your vision into a functional, compliant, patient-centred, and future-ready healthcare environment.</p>

                        <!-- Designing Beyond Walls -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">Designing Beyond Walls</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.1s">Great healthcare design begins with a simple question:</p>

                            <div class="service-quote-box wow fadeInUp" data-wow-delay="0.15s">
                                <p>How will people move, heal, work, learn, and feel inside this space?</p>
                            </div>

                            <p class="wow fadeInUp" data-wow-delay="0.2s">We approach every project from the perspective of patients, clinicians, students, families, support staff, and operators. Our planning integrates clinical workflows, infection control, regulatory compliance, medical technology, engineering systems, and operational efficiency—so the facility works beautifully on opening day and continues to perform for decades.</p>
                        </section>

                        <!-- What We Plan and Build -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">What We Plan and Build</h2>

                            <!-- Clinics & Diagnostic Centres -->
                            <div class="service-subgroup">
                                <h3 class="wow fadeInUp" data-wow-delay="0.1s">Clinics &amp; Diagnostic Centres</h3>
                                <p class="wow fadeInUp" data-wow-delay="0.15s">We design compact, high-efficiency facilities that maximize patient comfort, clinical productivity, and space utilization. Our planning covers reception and waiting zones, consultation rooms, diagnostics, laboratory areas, imaging suites, pharmacy, sample collection, sterilization, staff areas, and patient-flow design.</p>
                            </div>

                            <!-- Small Hospitals & Day-Care Centres -->
                            <div class="service-subgroup">
                                <h3 class="wow fadeInUp" data-wow-delay="0.1s">Small Hospitals &amp; Day-Care Centres</h3>
                                <p class="wow fadeInUp" data-wow-delay="0.15s">We create practical hospital layouts that balance clinical capability with investment efficiency. This includes OPD, emergency, day-care surgery, pharmacy, laboratory, imaging, wards, ICU planning, CSSD, utilities, and support services.</p>
                            </div>

                            <!-- Medical Colleges & Teaching Hospitals -->
                            <div class="service-subgroup">
                                <h3 class="wow fadeInUp" data-wow-delay="0.1s">Medical Colleges &amp; Teaching Hospitals</h3>
                                <p class="wow fadeInUp" data-wow-delay="0.15s">We align academic infrastructure with clinical excellence—planning lecture theatres, laboratories, skill centres, libraries, hostels, faculty spaces, administrative zones, clinical departments, teaching wards, and student facilities. The objective is a campus that supports education, research, patient care, and institutional growth.</p>
                            </div>

                            <!-- Primary to Quaternary Hospitals -->
                            <div class="service-subgroup">
                                <h3 class="wow fadeInUp" data-wow-delay="0.1s">Primary to Quaternary Hospitals</h3>
                                <p class="wow fadeInUp" data-wow-delay="0.15s">We plan facilities across the full complexity spectrum:</p>

                                <div class="service-table-wrapper wow fadeInUp" data-wow-delay="0.2s">
                                    <table class="service-custom-table">
                                        <thead>
                                            <tr>
                                                <th>Facility Type</th>
                                                <th>Design Focus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="facility-type-cell">Primary Care</td>
                                                <td class="facility-focus-cell">Accessible, efficient, patient-friendly clinics with scalable diagnostic and consultation services</td>
                                            </tr>
                                            <tr>
                                                <td class="facility-type-cell">Secondary Care</td>
                                                <td class="facility-focus-cell">Functional OPD, emergency, wards, basic ICU, OT, diagnostics, and support services</td>
                                            </tr>
                                            <tr>
                                                <td class="facility-type-cell">Tertiary Care</td>
                                                <td class="facility-focus-cell">Advanced specialty departments, critical care, modular OTs, imaging, cath lab readiness, and high-acuity workflows</td>
                                            </tr>
                                            <tr>
                                                <td class="facility-type-cell">Quaternary Care</td>
                                                <td class="facility-focus-cell">Super-specialty clinical zones, advanced technology integration, research-ready infrastructure, complex patient pathways, and future expansion capacity</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <p class="wow fadeInUp" data-wow-delay="0.25s">Each design is shaped around clinical demand, service mix, patient volumes, regulatory requirements, and long-term operational goals.</p>
                            </div>
                        </section>

                        <!-- Our Innovative Design Framework -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">Our Innovative Design Framework</h2>

                            <div class="signature-process-grid">
                                <!-- Step 1: Clinical Visioning -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="signature-step-num">
                                        <span>01</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Clinical Visioning</h3>
                                        <p>We begin with your care model, specialty mix, patient volumes, academic goals, growth plans, and investment priorities.</p>
                                    </div>
                                </div>

                                <!-- Step 2: Functional Programming -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="signature-step-num">
                                        <span>02</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Functional Programming</h3>
                                        <p>We translate the vision into department-wise space requirements, adjacency planning, staffing needs, equipment zones, and operational workflows.</p>
                                    </div>
                                </div>

                                <!-- Step 3: Patient Journey Design -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="signature-step-num">
                                        <span>03</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Patient Journey Design</h3>
                                        <p>We map every patient touchpoint—from arrival and registration to consultation, diagnostics, treatment, recovery, discharge, and follow-up—to create a seamless, dignified experience.</p>
                                    </div>
                                </div>

                                <!-- Step 4: Clinical & Technical Integration -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="signature-step-num">
                                        <span>04</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Clinical &amp; Technical Integration</h3>
                                        <p>We coordinate architectural layouts with medical equipment planning, MEP systems, medical gas, HVAC, fire safety, infection control, IT infrastructure, and utility planning.</p>
                                    </div>
                                </div>

                                <!-- Step 5: Compliance & Safety -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="signature-step-num">
                                        <span>05</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Compliance &amp; Safety</h3>
                                        <p>We embed licensing, fire safety, accessibility, biomedical waste, infection prevention, and accreditation-ready design principles from the beginning—not as later corrections.</p>
                                    </div>
                                </div>

                                <!-- Step 6: Construction Advisory -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="signature-step-num">
                                        <span>06</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Construction Advisory</h3>
                                        <p>We support design review, contractor coordination, quality monitoring, cost control, timelines, commissioning readiness, and pre-opening operational planning.</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- What You Receive -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">What You Receive</h2>

                            <div class="service-testing-item-list wow fadeInUp" data-wow-delay="0.15s">
                                <ul>
                                    <li>Concept planning and functional brief</li>
                                    <li>Department-wise space program</li>
                                    <li>Patient-flow and clinical-workflow design</li>
                                    <li>Medical equipment and MEP coordination support</li>
                                    <li>Regulatory and accreditation-oriented design guidance</li>
                                    <li>Cost, timeline, and quality-control advisory</li>
                                    <li>Construction-stage project-management support</li>
                                    <li>Commissioning and pre-opening readiness planning</li>
                                </ul>
                            </div>
                        </section>

                        <!-- Why Nexa Health Consult -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">Why Nexa Health Consult</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.15s">We combine healthcare strategy, clinical operations, medical equipment planning, accreditation knowledge, and project-management expertise. Our role is to ensure that design decisions are not only visually impressive, but clinically intelligent, operationally efficient, and financially sustainable.</p>

                            <!-- Value Proposition Callout -->
                            <div class="service-highlight-callout wow fadeInUp" data-wow-delay="0.2s">
                                <p>We help you build facilities that are safe by design, efficient by workflow, and future-ready by planning.</p>
                            </div>
                        </section>

                        <!-- Build a Facility That Performs (CTA) -->
                        <div class="service-entry-cta wow fadeInUp" data-wow-delay="0.25s">
                            <h3>Build a Facility That Performs</h3>
                            <p class="service-cta-desc">Whether you are creating a neighbourhood clinic, a diagnostic centre, a small hospital, a medical college, or a tertiary and quaternary-care institution, the right design becomes the foundation of clinical excellence.</p>
                            <p class="service-cta-lead">Partner with <strong>Nexa Health Consult</strong> to create healthcare spaces that inspire confidence, improve care, and stand strong for generations.</p>
                            <a href="{{ route('contact-us') }}" class="btn-default">Connect With Our Design Experts</a>
                        </div>

                    </article>
                    <!-- Service Entry End -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
