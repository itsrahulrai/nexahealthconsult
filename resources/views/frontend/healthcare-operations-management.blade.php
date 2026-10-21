@extends('frontend.layouts.layout')
@section('title', 'Healthcare Operations Management - Nexa Health Consult')
@section('meta-title', 'Healthcare Operations Management - Make Every Process Count | Nexa Health Consult')
@section('keywords', 'healthcare operations management, hospital operations consulting, clinical workflow optimization, patient flow management, healthcare process redesign, hospital performance consulting, Nexa Health Consult')
@section('meta-description', 'Healthcare Operations Management by Nexa Health Consult. Make every process count, make every patient matter. Operational consulting for clinics, diagnostic centres, and hospitals.')

@push('style')
<!-- Schema.org JSON-LD for Search Engines -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Healthcare Operations Management",
  "provider": {
    "@type": "Organization",
    "name": "Nexa Health Consult",
    "url": "{{ url('/') }}"
  },
  "description": "Healthcare Operations Management by Nexa Health Consult. Make every process count, make every patient matter. Operational consulting for clinics, diagnostic centres, and hospitals.",
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
                    <h2 class="wow fadeInUp" data-cursor="-opaque">Healthcare Operations Management</h2>
                    <nav class="wow fadeInUp" data-wow-delay="0.2s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Healthcare Operations Management</li>
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
                    <!-- Page Single image Start (Preserved original image) -->
                    <div class="page-single-image">
                        <figure class="image-anime reveal">
                            <img src="{{ static_asset('assets/images/services/operation-management.jpg') }}" alt="Healthcare Operations Management - Nexa Health Consult">
                        </figure>
                    </div>
                    <!-- Page Single image End -->

                    <!-- Service Entry Start -->
                    <article class="service-entry">
                        <header>
                            <h1 class="service-title wow fadeInUp">Healthcare Operations Management</h1>
                            <p class="service-subtitle wow fadeInUp" data-wow-delay="0.1s">Make Every Process Count. Make Every Patient Matter.</p>
                        </header>

                        <p class="wow fadeInUp" data-wow-delay="0.15s">Behind every smooth patient experience is a network of well-coordinated people, processes, and decisions. When these work in sync, care moves forward. When they do not, delays, bottlenecks, and avoidable pressure build across the organization.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s"><strong>Nexa Health Consult</strong> helps healthcare providers bring order, visibility, and momentum to everyday operations—so teams can focus less on fixing broken processes and more on delivering dependable, patient-centred care.</p>

                        <!-- Operations Built Around Your Care Model -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">Operations Built Around Your Care Model</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.1s">A clinic does not operate like a teaching hospital. A diagnostic centre has different workflows from a quaternary-care facility. Effective operations management starts by understanding those differences—and designing systems to match.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.12s">We support:</p>

                            <!-- Facility Strategy Cards Grid -->
                            <div class="facility-strategy-grid wow fadeInUp" data-wow-delay="0.15s">
                                <!-- Clinics -->
                                <div class="facility-strategy-card">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-stethoscope"></i>
                                        </div>
                                        <h3>Clinics</h3>
                                    </div>
                                    <p class="facility-strategy-desc">Appointment flow, registration, consultation-room utilization, billing, follow-up, and staff coordination.</p>
                                </div>

                                <!-- Diagnostic centres -->
                                <div class="facility-strategy-card">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-microscope"></i>
                                        </div>
                                        <h3>Diagnostic centres</h3>
                                    </div>
                                    <p class="facility-strategy-desc">Scheduling, patient preparation, sample and image workflows, report turnaround, equipment utilization, and service coordination.</p>
                                </div>

                                <!-- Small hospitals -->
                                <div class="facility-strategy-card">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-hospital"></i>
                                        </div>
                                        <h3>Small hospitals</h3>
                                    </div>
                                    <p class="facility-strategy-desc">OPD and emergency processes, admissions, bed management, theatre and diagnostic scheduling, discharge, and support services.</p>
                                </div>

                                <!-- Medical colleges and teaching hospitals -->
                                <div class="facility-strategy-card">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                        </div>
                                        <h3>Medical colleges and teaching hospitals</h3>
                                    </div>
                                    <p class="facility-strategy-desc">Coordination across academic, clinical, administrative, and support functions—linking teaching needs with safe, efficient patient care.</p>
                                </div>

                                <!-- Primary to quaternary hospitals -->
                                <div class="facility-strategy-card span-full">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-sitemap"></i>
                                        </div>
                                        <h3>Primary to quaternary hospitals</h3>
                                    </div>
                                    <p class="facility-strategy-desc">Operational frameworks adapted to service complexity, patient acuity, specialty mix, workforce needs, and institutional scale.</p>
                                </div>
                            </div>
                        </section>

                        <!-- From Daily Friction to Reliable Flow -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">From Daily Friction to Reliable Flow</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.1s">We look beyond individual departments to understand how the whole organization works—from the first patient contact through care delivery, discharge, and follow-up.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.12s">Our approach can include:</p>

                            <div class="service-testing-item-list wow fadeInUp" data-wow-delay="0.15s">
                                <ul>
                                    <li>Operational assessments to identify delays, duplication, and service gaps</li>
                                    <li>Patient-flow and process redesign across key care journeys</li>
                                    <li>Clear roles, reporting lines, communication, and escalation pathways</li>
                                    <li>Standardized policies, procedures, checklists, and departmental workflows</li>
                                    <li>Workforce and resource planning to match demand with capacity</li>
                                    <li>KPI frameworks and dashboards to make performance visible</li>
                                    <li>Regular review systems that turn findings into accountable improvement actions</li>
                                </ul>
                            </div>
                        </section>

                        <!-- A Practical Improvement Cycle -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">A Practical Improvement Cycle</h2>

                            <div class="signature-process-grid">
                                <!-- Step 1: Observe -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="signature-step-num">
                                        <span>01</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Observe</h3>
                                        <p>Understand how work actually happens—not just how it is documented.</p>
                                    </div>
                                </div>

                                <!-- Step 2: Redesign -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="signature-step-num">
                                        <span>02</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Redesign</h3>
                                        <p>Create simpler, safer, more consistent processes with input from the people who use them.</p>
                                    </div>
                                </div>

                                <!-- Step 3: Implement -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="signature-step-num">
                                        <span>03</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Implement</h3>
                                        <p>Support teams with clear procedures, training, ownership, and communication.</p>
                                    </div>
                                </div>

                                <!-- Step 4: Measure -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="signature-step-num">
                                        <span>04</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Measure</h3>
                                        <p>Track relevant indicators such as waiting, turnaround, utilization, service quality, and patient experience.</p>
                                    </div>
                                </div>

                                <!-- Step 5: Improve -->
                                <div class="signature-process-card span-full wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="signature-step-num">
                                        <span>05</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Improve</h3>
                                        <p>Use review findings to resolve bottlenecks and strengthen performance over time.</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Better Operations, Stronger Care -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">Better Operations, Stronger Care</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.15s">Operational excellence is not about making every interaction faster at any cost. It is about making the right care easier to deliver—reliably, safely, and with respect for patients and staff.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Nexa Health Consult combines healthcare operations expertise with practical implementation support to help organizations build consistent systems, use resources more effectively, and improve coordination across teams.</p>

                            <!-- Value Proposition Callout (Regular weight, NOT bold) -->
                            <div class="service-highlight-callout wow fadeInUp" data-wow-delay="0.25s">
                                <p>Better flow for patients. Clearer systems for teams. Stronger performance for your organization.</p>
                            </div>
                        </section>

                        <!-- Make Operations Your Advantage (CTA) -->
                        <div class="service-entry-cta wow fadeInUp" data-wow-delay="0.3s">
                            <h3>Make Operations Your Advantage</h3>
                            <p class="service-cta-desc">Whether you are refining a clinic, scaling a diagnostic centre, strengthening a hospital, or coordinating a medical college and teaching facility, Nexa Health Consult can help turn operational complexity into a clear path forward.</p>
                            <a href="{{ route('contact-us') }}" class="btn-default">Transform Your Operations</a>
                        </div>

                    </article>
                    <!-- Service Entry End -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
