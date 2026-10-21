@extends('frontend.layouts.layout')
@section('title', 'Market Feasibility for Medical Colleges & Hospital Set-Ups - Nexa Health Consult')
@section('meta-title', 'Market Feasibility for Medical Colleges & Hospital Set-Ups - Nexa Health Consult')
@section('keywords', 'market feasibility, healthcare market feasibility, hospital feasibility study, medical college feasibility, healthcare market research, hospital setup feasibility, medical college setup, Nexa Health Consult')
@section('meta-description', 'Evidence-led market feasibility studies for hospitals and medical colleges by Nexa Health Consult. Deciding with Evidence. Building with Confidence.')

@push('style')
<!-- Schema.org JSON-LD for Search Engines -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Market Feasibility for Medical Colleges & Hospital Set-Ups",
  "provider": {
    "@type": "Organization",
    "name": "Nexa Health Consult",
    "url": "{{ url('/') }}"
  },
  "description": "Evidence-led market feasibility studies for hospitals and medical colleges by Nexa Health Consult. Deciding with Evidence. Building with Confidence.",
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
                    <h2 class="wow fadeInUp" data-cursor="-opaque">Market Feasibility</h2>
                    <nav class="wow fadeInUp" data-wow-delay="0.2s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Market Feasibility</li>
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
                            <img src="{{ static_asset('assets/images/services/market-feasibility.jpg') }}" alt="Market Feasibility for Medical Colleges & Hospital Set-Ups">
                        </figure>
                    </div>
                    <!-- Page Single image End -->

                    <!-- Service Entry Start -->
                    <article class="service-entry">
                        <header>
                            <h1 class="service-title wow fadeInUp">Market Feasibility for Medical Colleges & Hospital Set-Ups</h1>
                            <h3 class="service-subtitle wow fadeInUp" data-wow-delay="0.1s">Deciding with Evidence. Building with Confidence.</h3>
                        </header>
                        
                        <p class="wow fadeInUp" data-wow-delay="0.2s">A medical college or hospital is more than a major investment—it is a long-term commitment to education, clinical excellence, community health, and institutional legacy. Before land is acquired, plans are drawn, or capital is committed, the most important question must be answered with clarity:</p>

                        <div class="service-quote-box wow fadeInUp" data-wow-delay="0.25s">
                            <p>&ldquo;Is there a real, sustainable opportunity for this project to succeed?&rdquo;</p>
                        </div>

                        <p class="wow fadeInUp" data-wow-delay="0.3s">At <strong>Nexa Health Consult</strong>, we provide evidence-led market feasibility studies that help promoters, investors, academic groups, and healthcare entrepreneurs make confident, informed decisions. We assess not only whether a market can support a project, but whether your proposed model can thrive within it.</p>

                        <!-- A Smarter Lens for Healthcare Investment -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">A Smarter Lens for Healthcare Investment</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.1s">Many feasibility studies stop at population numbers and competitor lists. We go deeper.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Our approach examines the complete healthcare ecosystem: patient demand, disease burden, referral patterns, payer capacity, clinical service gaps, workforce availability, regulatory pathways, competition, and future growth potential. For medical colleges, we also assess academic demand, student intake potential, faculty availability, clinical teaching capacity, and alignment between education and patient-care services.</p>
                            <p class="service-lead-text wow fadeInUp" data-wow-delay="0.25s">The objective is simple: to identify opportunity, quantify risk, and shape a project model that is commercially and clinically viable.</p>
                        </section>

                        <!-- What We Assess -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">What We Assess</h2>

                            <!-- For Hospital Set-Ups -->
                            <div class="service-subgroup">
                                <h3 class="wow fadeInUp">For Hospital Set-Ups</h3>
                                <p class="wow fadeInUp" data-wow-delay="0.1s">We evaluate the market from every angle that influences success:</p>
                                <div class="service-testing-item-list">
                                    <ul>
                                        <li>Catchment population, demographic profile, disease burden, and healthcare-seeking behaviour</li>
                                        <li>Existing and upcoming competition, service gaps, pricing, and clinical positioning</li>
                                        <li>Demand for outpatient, inpatient, emergency, diagnostic, surgical, and specialty services</li>
                                        <li>Referral networks, insurance penetration, corporate tie-ups, and payer behaviour</li>
                                        <li>Location accessibility, visibility, connectivity, and patient-convenience factors</li>
                                        <li>Infrastructure requirements, clinical zoning, and future expansion potential</li>
                                        <li>Regulatory, licensing, accreditation, and compliance considerations</li>
                                        <li>Staffing availability, specialist supply, and operational readiness</li>
                                        <li>Revenue potential, cost structure, break-even horizon, and return-on-investment outlook</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- For Medical College Set-Ups -->
                            <div class="service-subgroup">
                                <h3 class="wow fadeInUp">For Medical College Set-Ups</h3>
                                <p class="wow fadeInUp" data-wow-delay="0.1s">We assess both the academic and clinical dimensions of viability:</p>
                                <div class="service-testing-item-list">
                                    <ul>
                                        <li>Student demand, admission potential, and competitive academic landscape</li>
                                        <li>Regulatory requirements, intake capacity, and compliance readiness</li>
                                        <li>Availability of qualified faculty, clinical departments, and teaching infrastructure</li>
                                        <li>Hospital bed strength, case mix, clinical exposure, and learning opportunities</li>
                                        <li>Alignment between undergraduate education, postgraduate growth, and hospital services</li>
                                        <li>Long-term academic reputation, research potential, and institutional sustainability</li>
                                        <li>Financial viability across education, hospital operations, hostels, and supporting services</li>
                                    </ul>
                                </div>
                            </div>
                        </section>

                        <!-- Our Innovative Feasibility Framework -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">Our Innovative Feasibility Framework</h2>

                            <div class="signature-process-grid">
                                <!-- Step 1: Define the Opportunity -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="signature-step-num">
                                        <span>01</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Define the Opportunity</h3>
                                        <p>We begin with your vision: the proposed location, scale, specialty focus, academic ambition, investment capacity, and long-term goals.</p>
                                    </div>
                                </div>

                                <!-- Step 2: Read the Market -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="signature-step-num">
                                        <span>02</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Read the Market</h3>
                                        <p>We analyse demand, competition, referral flows, patient behaviour, payer trends, workforce dynamics, and regulatory conditions to create a realistic market picture.</p>
                                    </div>
                                </div>

                                <!-- Step 3: Test the Concept -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="signature-step-num">
                                        <span>03</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Test the Concept</h3>
                                        <p>We assess whether your proposed service mix, bed strength, specialty portfolio, student intake, and facility scale match actual market needs—not assumptions.</p>
                                    </div>
                                </div>

                                <!-- Step 4: Model the Business -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="signature-step-num">
                                        <span>04</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Model the Business</h3>
                                        <p>We build practical financial and operational scenarios, including projected patient volumes, revenue streams, staffing needs, capital expenditure, operating costs, and break-even timelines.</p>
                                    </div>
                                </div>

                                <!-- Step 5: Shape the Strategy -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="signature-step-num">
                                        <span>05</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Shape the Strategy</h3>
                                        <p>We provide clear recommendations on project scale, specialty mix, phased development, clinical positioning, infrastructure priorities, and risk-mitigation actions.</p>
                                    </div>
                                </div>

                                <!-- Step 6: Support the Decision -->
                                <div class="signature-process-card wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="signature-step-num">
                                        <span>06</span>
                                    </div>
                                    <div class="signature-step-body">
                                        <h3>Support the Decision</h3>
                                        <p>You receive a structured, decision-ready feasibility report with actionable insights to support investor discussions, regulatory submissions, board approvals, and project planning.</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Why Nexa Health Consult -->
                        <section class="service-section">
                            <h2 class="wow fadeInUp">Why Nexa Health Consult</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We combine healthcare strategy, operational planning, accreditation knowledge, project-development experience, and financial feasibility expertise. Our recommendations are practical, data-driven, and designed to reduce uncertainty while strengthening the long-term potential of your investment.</p>
                        </section>

                        <!-- Value Proposition Highlight -->
                        <div class="service-highlight-callout wow fadeInUp" data-wow-delay="0.3s">
                            <p>We help you move from <span class="highlight-accent">Is this possible?</span> to <span class="highlight-secondary">How can this succeed?</span></p>
                        </div>

                    </article>
                    <!-- Service Entry End -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
