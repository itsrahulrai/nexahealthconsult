@extends('frontend.layouts.layout')

@section('title', 'Accreditation & Compliance Management - Nexa Health Consult')
@section('meta-title', 'Accreditation & Compliance Management - Turn Standards into Systems | Nexa Health Consult')
@section('keywords', 'accreditation compliance management, NABH accreditation consulting, JCI accreditation healthcare, NMC compliance medical colleges, NAAC accreditation, hospital quality compliance, healthcare accreditation consultants, Nexa Health Consult')
@section('meta-description', 'Accreditation & Compliance Management by Nexa Health Consult. Practical, evidence-ready systems for NABH, JCI, NMC, and NAAC accreditation and regulatory compliance.')

@push('style')
<!-- Schema.org JSON-LD for Search Engines -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Accreditation & Compliance Management",
  "provider": {
    "@type": "Organization",
    "name": "Nexa Health Consult",
    "url": "{{ url('/') }}"
  },
  "description": "Accreditation & Compliance Management by Nexa Health Consult. Practical, evidence-ready systems for NABH, JCI, NMC, and NAAC accreditation and regulatory compliance.",
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
                    <h2 class="wow fadeInUp" data-cursor="-opaque">Accreditation &amp; Compliance Management</h2>
                    <nav class="wow fadeInUp" data-wow-delay="0.2s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Accreditation &amp; Compliance Management</li>
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
                            <img src="{{ static_asset('assets/images/services/services-01.png') }}" alt="Accreditation &amp; Compliance Management - Nexa Health Consult">
                        </figure>
                    </div>
                    <!-- Page Single image End -->

                    <!-- Service Entry Start -->
                    <article class="service-entry">
                        <header>
                            <h1 class="service-title wow fadeInUp">Accreditation &amp; Compliance Management</h1>
                            <p class="service-subtitle wow fadeInUp" data-wow-delay="0.1s">Turn Standards into Systems. Turn Compliance into Confidence.</p>
                        </header>

                        <p class="wow fadeInUp" data-wow-delay="0.15s">Accreditation should never feel like a last-minute document exercise. It should reflect how your organization plans, delivers, measures, and improves care—every day.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s"><strong>Nexa Health Consult</strong> helps healthcare providers and academic institutions build practical, evidence-ready systems for accreditation and regulatory compliance. We support organizations pursuing relevant frameworks such as NABH and JCI for healthcare quality, and NMC and NAAC requirements for medical education and institutional assessment. Applicability depends on your facility, programmes, location, and current regulations.</p>

                        <!-- One Quality Culture. Different Standards. -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">One Quality Culture. Different Standards.</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.1s">A clinic’s compliance journey differs from that of a diagnostic centre, hospital, or medical college. We tailor the roadmap to your scope and services:</p>

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
                                    <p class="facility-strategy-desc">Patient rights, care processes, infection prevention, facility safety, documentation, and quality improvement.</p>
                                </div>

                                <!-- Diagnostic centres -->
                                <div class="facility-strategy-card">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-microscope"></i>
                                        </div>
                                        <h3>Diagnostic centres</h3>
                                    </div>
                                    <p class="facility-strategy-desc">Patient identification, sample and imaging processes, result reporting, equipment management, safety, and records.</p>
                                </div>

                                <!-- Small and multi-specialty hospitals -->
                                <div class="facility-strategy-card">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-hospital"></i>
                                        </div>
                                        <h3>Small &amp; multi-specialty hospitals</h3>
                                    </div>
                                    <p class="facility-strategy-desc">Patient-care systems, medication management, infection control, workforce competence, governance, facility safety, and quality improvement.</p>
                                </div>

                                <!-- Medical colleges and teaching hospitals -->
                                <div class="facility-strategy-card">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                        </div>
                                        <h3>Medical colleges &amp; teaching hospitals</h3>
                                    </div>
                                    <p class="facility-strategy-desc">Alignment of academic, clinical, governance, infrastructure, faculty, student-support, and quality systems with applicable requirements.</p>
                                </div>

                                <!-- Primary to quaternary hospitals -->
                                <div class="facility-strategy-card span-full">
                                    <div class="facility-strategy-header">
                                        <div class="facility-strategy-icon">
                                            <i class="fa-solid fa-sitemap"></i>
                                        </div>
                                        <h3>Primary to quaternary hospitals</h3>
                                    </div>
                                    <p class="facility-strategy-desc">A compliance framework scaled to service complexity, clinical risk, specialty mix, technology, and operational capacity.</p>
                                </div>
                            </div>

                            <div class="service-standards-note wow fadeInUp" data-wow-delay="0.2s">
                                <p>NABH’s published frameworks include distinct programmes and standards, while JCI hospital standards address areas such as patient care, medication management, infection prevention, leadership, workforce, and facility safety.</p>
                            </div>
                        </section>

                        <!-- Our Compliance-to-Culture Method -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">Our Compliance-to-Culture Method</h2>

                            <div class="signature-process-grid">
                                <!-- Step 1: Map -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="signature-step-num">
                                        <span>01</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Map</h3>
                                        <p>We identify the standards, regulations, and evidence applicable to your organization and define clear ownership for each requirement.</p>
                                    </div>
                                </div>

                                <!-- Step 2: Assess -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="signature-step-num">
                                        <span>02</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Assess</h3>
                                        <p>We conduct a structured gap assessment across policies, records, clinical workflows, infrastructure, training, and actual practice.</p>
                                    </div>
                                </div>

                                <!-- Step 3: Build -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="signature-step-num">
                                        <span>03</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Build</h3>
                                        <p>We support policy and SOP development, forms, registers, committee structures, indicators, audit tools, and document-control systems.</p>
                                    </div>
                                </div>

                                <!-- Step 4: Embed -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="signature-step-num">
                                        <span>04</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Embed</h3>
                                        <p>We work with leaders and frontline teams to translate requirements into reliable routines—not paperwork that lives separately from care.</p>
                                    </div>
                                </div>

                                <!-- Step 5: Verify -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="signature-step-num">
                                        <span>05</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Verify</h3>
                                        <p>Internal audits, tracer activities, mock assessments, and corrective-action tracking help test whether systems are working in practice.</p>
                                    </div>
                                </div>

                                <!-- Step 6: Sustain -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="signature-step-num">
                                        <span>06</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Sustain</h3>
                                        <p>We establish review cycles and accountability so compliance continues after an assessment or survey.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="service-regulatory-note wow fadeInUp" data-wow-delay="0.2s">
                                <p>For medical colleges, NMC publishes regulations and minimum-standard guidance that institutions must track in their current, applicable form. NAAC’s assessment process evaluates higher-education institutions across defined criteria, so preparation must be tailored to the institution and current methodology.</p>
                            </div>
                        </section>

                        <!-- What We Help You Achieve -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">What We Help You Achieve</h2>

                            <div class="service-testing-item-list wow fadeInUp" data-wow-delay="0.15s">
                                <ul>
                                    <li>A clear accreditation and compliance roadmap</li>
                                    <li>Gap analysis, action plans, and responsibility matrices</li>
                                    <li>Policies, SOPs, forms, and document-control support</li>
                                    <li>Staff orientation and role-based training</li>
                                    <li>Internal audits, mock surveys, and evidence review</li>
                                    <li>Corrective and preventive action tracking</li>
                                    <li>Leadership dashboards and ongoing compliance reviews</li>
                                </ul>
                            </div>
                        </section>

                        <!-- Beyond the Certificate -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">Beyond the Certificate</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.15s">The real value of accreditation is not the moment of assessment. It is the stronger system left behind: clearer responsibilities, safer processes, better records, engaged teams, and a more consistent experience for patients and learners.</p>

                            <!-- Value Proposition Callout (Regular weight, NOT bold) -->
                            <div class="service-highlight-callout wow fadeInUp" data-wow-delay="0.2s">
                                <p>Nexa Health Consult helps make standards understandable, compliance manageable, and quality part of how your organization works.</p>
                            </div>
                        </section>

                        <!-- Prepare with Purpose (CTA) -->
                        <div class="service-entry-cta wow fadeInUp" data-wow-delay="0.25s">
                            <h3>Prepare with Purpose</h3>
                            <p class="service-cta-desc">Whether you are opening a clinic, strengthening a diagnostic centre, developing a hospital, or building a medical college and teaching hospital, begin with a system—not a scramble.</p>
                            <p class="service-cta-lead">Partner with <strong>Nexa Health Consult</strong> for accreditation and compliance management designed to support readiness, reliability, and continuous improvement.</p>
                            <a href="{{ route('contact-us') }}" class="btn-default">Get Accreditation Support</a>
                        </div>

                    </article>
                    <!-- Service Entry End -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

