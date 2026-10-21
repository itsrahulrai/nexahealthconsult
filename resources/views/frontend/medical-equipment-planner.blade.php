@extends('frontend.layouts.layout')
@section('title', 'Medical Equipment Planning - Nexa Health Consult')
@section('meta-title', 'Medical Equipment Planning - The Right Technology, in the Right Place | Nexa Health Consult')
@section('keywords', 'medical equipment planning, hospital equipment planning, healthcare equipment consultant, medical equipment procurement, healthcare technology planning, hospital biomedical equipment, medical equipment layout planning, Nexa Health Consult')
@section('meta-description', 'Medical Equipment Planning by Nexa Health Consult. The right technology, in the right place, for the right care. Independent planning from clinics to medical colleges.')

@push('style')
<!-- Schema.org JSON-LD for Search Engines -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Medical Equipment Planning",
  "provider": {
    "@type": "Organization",
    "name": "Nexa Health Consult",
    "url": "{{ url('/') }}"
  },
  "description": "Medical Equipment Planning by Nexa Health Consult. The right technology, in the right place, for the right care. Independent planning from clinics to medical colleges.",
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
                    <h2 class="wow fadeInUp" data-cursor="-opaque">Medical Equipment Planning</h2>
                    <nav class="wow fadeInUp" data-wow-delay="0.2s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Medical Equipment Planning</li>
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
                    <!-- Page Single image Start (Preserved as requested) -->
                    <div class="page-single-image">
                        <figure class="image-anime reveal">
                            <img src="{{ static_asset('assets/images/services/medical-equipment-planning.webp') }}" alt="Medical Equipment Planning - Nexa Health Consult">
                        </figure>
                    </div>
                    <!-- Page Single image End -->

                    <!-- Service Entry Start -->
                    <article class="service-entry">
                        <header>
                            <h1 class="service-title wow fadeInUp">Medical Equipment Planning</h1>
                            <p class="service-subtitle wow fadeInUp" data-wow-delay="0.1s">The Right Technology, in the Right Place, for the Right Care</p>
                        </header>

                        <p class="wow fadeInUp" data-wow-delay="0.15s">A healthcare facility is only as effective as the systems that support its people. Equipment that is poorly selected, badly positioned, or disconnected from clinical workflows can consume capital and space without improving care.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s"><strong>Nexa Health Consult</strong> helps healthcare organizations plan equipment around the way they intend to deliver care—linking clinical requirements, patient volumes, facility design, utilities, budgets, and long-term operational goals. Our independent planning helps you invest in technology with purpose, not simply purchase equipment by the list.</p>

                        <!-- Designed Around Your Facility -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">Designed Around Your Facility</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.1s">From a neighbourhood clinic to a quaternary-care hospital or medical college, each facility needs a distinct equipment strategy.</p>

                            <!-- Facility Type Breakdown Cards -->
                            <div class="facility-strategy-grid wow fadeInUp" data-wow-delay="0.15s">
                                <!-- Clinics -->
                                <div class="facility-strategy-card">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-stethoscope"></i>
                                        </div>
                                        <h3>Clinics</h3>
                                    </div>
                                    <p class="facility-strategy-desc">Essential consultation, examination, treatment, sterilization, and point-of-care equipment—planned for efficient use of space and smooth patient visits.</p>
                                </div>

                                <!-- Diagnostic centres -->
                                <div class="facility-strategy-card">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-microscope"></i>
                                        </div>
                                        <h3>Diagnostic centres</h3>
                                    </div>
                                    <p class="facility-strategy-desc">Imaging, laboratory, and reporting equipment aligned with expected volumes, room requirements, utilities, and patient flow.</p>
                                </div>

                                <!-- Small hospitals -->
                                <div class="facility-strategy-card">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-hospital"></i>
                                        </div>
                                        <h3>Small hospitals</h3>
                                    </div>
                                    <p class="facility-strategy-desc">Department-wise equipment planning for OPD, emergency, wards, ICU, operating rooms, diagnostics, and support services.</p>
                                </div>

                                <!-- Medical colleges and teaching hospitals -->
                                <div class="facility-strategy-card">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                        </div>
                                        <h3>Medical colleges and teaching hospitals</h3>
                                    </div>
                                    <p class="facility-strategy-desc">Clinical and academic equipment planned to support patient care, practical training, simulation, and future institutional growth.</p>
                                </div>

                                <!-- Primary to quaternary hospitals -->
                                <div class="facility-strategy-card span-full">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-sitemap"></i>
                                        </div>
                                        <h3>Primary to quaternary hospitals</h3>
                                    </div>
                                    <p class="facility-strategy-desc">Scalable equipment strategies matched to care complexity—from essential diagnostics and treatment to advanced specialty and critical-care technology.</p>
                                </div>
                            </div>

                            <!-- Value Proposition Callout (Regular weight, NOT bold) -->
                            <div class="service-highlight-callout wow fadeInUp" data-wow-delay="0.2s">
                                <p>The goal is not to equip every facility with everything. It is to equip each facility for the care it is designed to deliver.</p>
                            </div>
                        </section>

                        <!-- From Clinical Need to Equipment Plan -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">From Clinical Need to Equipment Plan</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.1s">Our structured process connects the dots from concept to commissioning:</p>

                            <div class="signature-process-grid">
                                <!-- Step 1: Understand the care model -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="signature-step-num">
                                        <span>01</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Understand the care model</h3>
                                        <p>Specialties, services, patient volumes, acuity, and growth plans.</p>
                                    </div>
                                </div>

                                <!-- Step 2: Assess department needs -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="signature-step-num">
                                        <span>02</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Assess department needs</h3>
                                        <p>Identify, categorize, and prioritize equipment by clinical function.</p>
                                    </div>
                                </div>

                                <!-- Step 3: Plan space and placement -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="signature-step-num">
                                        <span>03</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Plan space and placement</h3>
                                        <p>Coordinate equipment locations with layouts, workflows, and user needs.</p>
                                    </div>
                                </div>

                                <!-- Step 4: Check infrastructure readiness -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="signature-step-num">
                                        <span>04</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Check infrastructure readiness</h3>
                                        <p>Align requirements with electrical, medical gas, HVAC, IT, and other engineering systems.</p>
                                    </div>
                                </div>

                                <!-- Step 5: Build the investment plan -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="signature-step-num">
                                        <span>05</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Build the investment plan</h3>
                                        <p>Support capital budgeting, cost optimization, procurement strategy, and implementation planning.</p>
                                    </div>
                                </div>

                                <!-- Step 6: Prepare for operations -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="signature-step-num">
                                        <span>06</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Prepare for operations</h3>
                                        <p>Consider installation, training, maintenance, reliability, and lifecycle value.</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Better Decisions. Stronger Value. -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">Better Decisions. Stronger Value.</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.15s">We provide independent, unbiased advisory support to help evaluate equipment for clinical performance, technology standards, operational reliability, and lifecycle value—not purchase price alone. By coordinating equipment plans with architectural and engineering designs, we help reduce avoidable rework, improve space utilization, and support efficient workflows.</p>
                            <p class="service-lead-text wow fadeInUp" data-wow-delay="0.2s">Nexa Health Consult helps you choose technology that fits your care vision, your facility, and your future.</p>
                        </section>

                        <!-- Plan with Purpose (CTA) -->
                        <div class="service-entry-cta wow fadeInUp" data-wow-delay="0.25s">
                            <h3>Plan with Purpose</h3>
                            <p class="service-cta-desc">Whether you are developing a clinic, diagnostic centre, hospital, or medical college, start with a clear equipment plan.</p>
                            <p class="service-cta-lead">Partner with <strong>Nexa Health Consult</strong> to make every investment decision more informed—and every clinical space more ready to deliver care.</p>
                            <a href="{{ route('contact-us') }}" class="btn-default">Connect With Our Equipment Planners</a>
                        </div>

                    </article>
                    <!-- Service Entry End -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
