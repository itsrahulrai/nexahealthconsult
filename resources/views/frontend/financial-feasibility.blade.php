@extends('frontend.layouts.layout')

@section('title', 'Financial Feasibility - Nexa Health Consult | Your Smart Healthcare Consultants')

@section('meta-title', 'Financial Feasibility - Nexa Health Consult | Your Smart Healthcare Consultants')

@section('keywords', 'financial feasibility, healthcare financial feasibility, hospital financial analysis, healthcare investment planning, clinic financial planning, healthcare project finance, Nexa Health Consult')
@section('meta-description', 'Financial Feasibility services by Nexa Health Consult to evaluate investment requirements, cost analysis, revenue projections, and financial sustainability for hospitals and healthcare projects.')
@section('content')

<!-- Page Header Section Start -->
<div class="page-header parallaxie" style="background-image: url({{ static_asset('assets/images/bg/about-us.webp') }}); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -97.9063px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="wow fadeInUp" data-cursor="-opaque" style="visibility: visible; animation-name: fadeInUp;">Financial Feasibility</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Financial Feasibility</li>
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
                        <figure class="image-anime reveal" style="opacity: 1; visibility: inherit; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                            <img src="{{ static_asset('assets/images/services/services-03.png') }}" alt="" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                        </figure>
                    </div>
                    <!-- Page Single image End -->

                    <!-- Service Entry Start -->
                    <div class="service-entry">
                        <h2 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Financial <span>Feasibility</span></h2>
                        <p class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">At Nexa Health Consult, we provide comprehensive Healthcare Financial Feasibility services to support informed investment decisions and long-term healthcare project success. Our approach begins with understanding your vision, business goals, and market dynamics to ensure that your healthcare project is financially sustainable and strategically positioned for growth.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">We support hospitals, clinics, diagnostic centers, and specialized healthcare facilities by developing accurate, data-driven financial models that help minimize risk and maximize return on investment.</p>

                        <!-- Service Testing Box Start -->
                        <div class="service-testing-box">
                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Our <span>Approach</span></h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Our financial feasibility assessments follow a structured bottom-up financial modeling approach, ensuring that every operational and financial component of the healthcare project is carefully evaluated.</p>

                            <!-- Service Testing Item List Start -->
                            <div class="service-testing-item-list">
                                 <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Infrastructure & Real Estate</h3>
                                 <ul>
                                    <li>Property lease or purchase analysis</li>
                                    <li>Space utilization and facility planning</li>
                                    <li>Capital expenditure and asset planning</li>
                                 </ul>
                            </div>

                            <div class="service-testing-item-list">
                                 <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Regulatory Compliance</h3>
                                 <ul>
                                    <li>Healthcare regulatory requirements</li>
                                    <li>Licensing and approvals</li>
                                    <li>Accreditation planning</li>
                                 </ul>
                            </div>

                            <div class="service-testing-item-list">
                                 <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Workforce & Staffing</h3>
                                 <ul>
                                    <li>Doctors and specialists</li>
                                    <li>Nursing staff</li>
                                    <li>Administrative team</li>
                                    <li>Support and operational staff</li>
                                    <li>Payroll and staffing cost planning</li>
                                 </ul>
                            </div>

                            <div class="service-testing-item-list">
                                 <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Revenue Streams</h3>
                                 <ul>
                                    <li>OPD consultations</li>
                                    <li>Procedures and surgeries</li>
                                    <li>Diagnostics and pharmacy revenue</li>
                                    <li>Insurance reimbursements</li>
                                    <li>Corporate and cash billing</li>
                                 </ul>
                            </div>

                            <div class="service-testing-item-list">
                                 <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Why Work With Nexa Health Consult?</h3>
                                 <ul>
                                    <li>Healthcare strategy and planning</li>
                                    <li>Financial modeling and analysis</li>
                                    <li>Hospital operations</li>
                                    <li>Infrastructure and facility planning</li>
                                    <li>HR and staffing strategies</li>
                                    <li>Healthcare marketing and branding</li>
                                    <li>Revenue cycle management</li>
                                 </ul>
                            </div>

                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; padding-top:20px;">At Nexa Health Consult, we turn healthcare ideas into successful healthcare ventures through smart financial planning, strategic insights, and expert guidance. We help healthcare entrepreneurs, hospitals, and healthcare providers build sustainable, profitable, and future-ready healthcare organizations.</p>
                            <!-- Service Testing Item List End -->

                        </div>
                    </div>
                    <!-- Service Entry End -->


                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection