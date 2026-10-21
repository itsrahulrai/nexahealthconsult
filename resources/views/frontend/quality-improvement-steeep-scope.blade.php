@extends('frontend.layouts.layout')

@section('title', 'Quality Improvement: STEEEP & SCOPE - Nexa Health Consult')
@section('meta-title', 'Quality Improvement: STEEEP in Practice, SCOPE in Action | Nexa Health Consult')
@section('keywords', 'healthcare quality improvement, STEEEP healthcare, SCOPE improvement cycle, hospital quality management, patient safety consulting, clinical quality assurance, healthcare performance improvement, Nexa Health Consult')
@section('meta-description', 'Quality Improvement by Nexa Health Consult. Turning STEEEP quality aims and the SCOPE improvement cycle into practical, repeatable healthcare practice.')

@push('style')
<!-- Schema.org JSON-LD for Search Engines -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Quality Improvement: STEEEP in Practice, SCOPE in Action",
  "provider": {
    "@type": "Organization",
    "name": "Nexa Health Consult",
    "url": "{{ url('/') }}"
  },
  "description": "Quality Improvement by Nexa Health Consult. Turning STEEEP quality aims and the SCOPE improvement cycle into practical, repeatable healthcare practice across clinics, diagnostic centres, hospitals, and medical colleges.",
  "areaServed": "India"
}
</script>
@endpush

@section('content')

<!-- Page Header Section Start -->
<div class="page-header parallaxie quality-improvement-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h2 class="wow fadeInUp" data-cursor="-opaque">Quality Improvement: STEEEP &amp; SCOPE</h2>
                    <nav class="wow fadeInUp" data-wow-delay="0.2s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Quality Improvement</li>
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
                            <img src="{{ static_asset('assets/images/services/services-02.png') }}" alt="Quality Improvement: STEEEP in Practice, SCOPE in Action - Nexa Health Consult">
                        </figure>
                    </div>
                    <!-- Page Single image End -->

                    <!-- Service Entry Start -->
                    <article class="service-entry">
                        <header>
                            <h1 class="service-title wow fadeInUp">Quality Improvement: STEEEP in Practice, SCOPE in Action</h1>
                            <p class="service-subtitle wow fadeInUp" data-wow-delay="0.1s">Make Quality Visible. Make Better Care Repeatable.</p>
                        </header>

                        <p class="wow fadeInUp" data-wow-delay="0.15s">Quality is not a certificate on the wall. It is what happens at every patient touchpoint—when care is safe, timely, effective, efficient, equitable, and centred on the person.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">At <strong>Nexa Health Consult</strong>, we help healthcare organizations turn these ambitions into everyday practice. We use the STEEEP quality aims as a compass and a practical improvement cycle as the engine—so teams can identify gaps, test changes, measure results, and sustain what works.</p>

                        <!-- Quality That Fits Your Setting -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">Quality That Fits Your Setting</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.1s">A clinic, diagnostic centre, medical college, and quaternary hospital face different risks and workflows. Our improvement plans are tailored to your services, patient population, teams, and level of care.</p>

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
                                    <p class="facility-strategy-desc">Improve access, consultation flow, documentation, follow-up, infection prevention, and patient communication.</p>
                                </div>

                                <!-- Diagnostic centres -->
                                <div class="facility-strategy-card">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-microscope"></i>
                                        </div>
                                        <h3>Diagnostic centres</h3>
                                    </div>
                                    <p class="facility-strategy-desc">Strengthen identification, preparation, sample and image workflows, reporting turnaround, equipment reliability, and result communication.</p>
                                </div>

                                <!-- Small hospitals -->
                                <div class="facility-strategy-card">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-hospital"></i>
                                        </div>
                                        <h3>Small hospitals</h3>
                                    </div>
                                    <p class="facility-strategy-desc">Improve emergency response, medication safety, admission and discharge processes, surgical checks, infection control, and continuity of care.</p>
                                </div>

                                <!-- Medical colleges and teaching hospitals -->
                                <div class="facility-strategy-card">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                        </div>
                                        <h3>Medical colleges and teaching hospitals</h3>
                                    </div>
                                    <p class="facility-strategy-desc">Connect quality and safety systems across clinical services, academic governance, teaching activities, and institutional processes.</p>
                                </div>

                                <!-- Primary to quaternary hospitals -->
                                <div class="facility-strategy-card span-full">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-sitemap"></i>
                                        </div>
                                        <h3>Primary to quaternary hospitals</h3>
                                    </div>
                                    <p class="facility-strategy-desc">Adapt improvement priorities to service complexity—from reliable basics and referral pathways to high-acuity, specialty, and critical-care processes.</p>
                                </div>
                            </div>
                        </section>

                        <!-- STEEEP: Six Aims, One Better Care Experience -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">STEEEP: Six Aims, One Better Care Experience</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.1s">We translate the six quality aims into practical questions for your teams:</p>

                            <!-- STEEEP Aims Grid -->
                            <div class="steeep-aims-grid wow fadeInUp" data-wow-delay="0.15s">
                                <!-- Safe -->
                                <div class="steeep-aim-card">
                                    <div class="steeep-letter-badge">S</div>
                                    <div class="steeep-aim-content">
                                        <h3>Safe</h3>
                                        <p class="steeep-aim-question">Are we reducing avoidable harm?</p>
                                    </div>
                                </div>

                                <!-- Timely -->
                                <div class="steeep-aim-card">
                                    <div class="steeep-letter-badge">T</div>
                                    <div class="steeep-aim-content">
                                        <h3>Timely</h3>
                                        <p class="steeep-aim-question">Are patients receiving care without unnecessary delays?</p>
                                    </div>
                                </div>

                                <!-- Effective -->
                                <div class="steeep-aim-card">
                                    <div class="steeep-letter-badge">E</div>
                                    <div class="steeep-aim-content">
                                        <h3>Effective</h3>
                                        <p class="steeep-aim-question">Are we providing evidence-informed care—and avoiding underuse or overuse?</p>
                                    </div>
                                </div>

                                <!-- Efficient -->
                                <div class="steeep-aim-card">
                                    <div class="steeep-letter-badge">E</div>
                                    <div class="steeep-aim-content">
                                        <h3>Efficient</h3>
                                        <p class="steeep-aim-question">Are we reducing waste while using people, time, equipment, and supplies wisely?</p>
                                    </div>
                                </div>

                                <!-- Equitable -->
                                <div class="steeep-aim-card">
                                    <div class="steeep-letter-badge">E</div>
                                    <div class="steeep-aim-content">
                                        <h3>Equitable</h3>
                                        <p class="steeep-aim-question">Is care consistent and respectful for every patient?</p>
                                    </div>
                                </div>

                                <!-- Patient-centred -->
                                <div class="steeep-aim-card">
                                    <div class="steeep-letter-badge">P</div>
                                    <div class="steeep-aim-content">
                                        <h3>Patient-centred</h3>
                                        <p class="steeep-aim-question">Are patients’ needs, values, preferences, and choices shaping their care?</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- SCOPE: A Practical Improvement Cycle -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">SCOPE: A Practical Improvement Cycle</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.1s">We use SCOPE as a working improvement cycle—not as a single, universal accreditation standard. Together, we:</p>

                            <!-- SCOPE Process Grid -->
                            <div class="signature-process-grid">
                                <!-- Step 1: Select -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="signature-step-num">
                                        <span>S</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Select</h3>
                                        <p>Select a meaningful quality or safety priority.</p>
                                    </div>
                                </div>

                                <!-- Step 2: Clarify -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="signature-step-num">
                                        <span>C</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Clarify</h3>
                                        <p>Clarify the problem, its causes, and the improvement aim.</p>
                                    </div>
                                </div>

                                <!-- Step 3: Organize -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="signature-step-num">
                                        <span>O</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Organize</h3>
                                        <p>Organize the right multidisciplinary team and define measures.</p>
                                    </div>
                                </div>

                                <!-- Step 4: Pilot -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="signature-step-num">
                                        <span>P</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Pilot</h3>
                                        <p>Pilot focused changes, learn from results, and adapt.</p>
                                    </div>
                                </div>

                                <!-- Step 5: Embed -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="signature-step-num">
                                        <span>E</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Embed</h3>
                                        <p>Embed successful practices through training, documentation, review, and accountability.</p>
                                    </div>
                                </div>
                            </div>

                            <p class="service-process-summary wow fadeInUp" data-wow-delay="0.2s">This approach reflects established improvement practice: clear aims, practical tests of change, and measurement to guide decisions.</p>
                        </section>

                        <!-- From Assessment to Improvement -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">From Assessment to Improvement</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.1s">Nexa Health Consult can support gap assessments, policy and SOP development, staff engagement, internal audits, indicator design, dashboard reviews, corrective-action planning, and accreditation readiness. Our focus is not simply to document compliance, but to help build a lasting culture of learning, responsibility, and safer care.</p>

                            <!-- Key Philosophy Callout (Regular weight, NOT bold) -->
                            <div class="service-highlight-callout wow fadeInUp" data-wow-delay="0.15s">
                                <p>Quality improves when good intentions become reliable systems.</p>
                            </div>
                        </section>

                        <!-- CTA Box -->
                        <div class="service-entry-cta wow fadeInUp" data-wow-delay="0.2s">
                            <h3>Partner with Nexa Health Consult</h3>
                            <p class="service-cta-desc">Partner with <strong>Nexa Health Consult</strong> to make STEEEP more than a framework—and improvement part of how your organization cares, learns, and grows.</p>
                            <a href="{{ route('contact-us') }}" class="btn-default">Start Quality Improvement</a>
                        </div>

                    </article>
                    <!-- Service Entry End -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
