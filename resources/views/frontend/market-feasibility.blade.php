@extends('frontend.layouts.layout')
@section('title', 'Market Feasibility - Nexa Health Consult | Your Smart Healthcare Consultants')
@section('meta-title', 'Market Feasibility - Nexa Health Consult | Your Smart Healthcare Consultants')
@section('keywords', 'market feasibility, healthcare market feasibility, hospital feasibility analysis, clinic feasibility analysis, healthcare market research, Nexa Health Consult')
@section('meta-description', 'Market Feasibility services by Nexa Health Consult to analyze healthcare market demand, competition, location potential, and growth opportunities for hospitals and clinics.')
@section('content')

<!-- Page Header Section Start -->
<div class="page-header parallaxie" style="background-image: url({{ static_asset('assets/images/bg/about-us.webp') }}); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -97.9063px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="wow fadeInUp" data-cursor="-opaque" style="visibility: visible; animation-name: fadeInUp;">Market Feasibility</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
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
                        <figure class="image-anime reveal" style="opacity: 1; visibility: inherit; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                            <img src="{{ static_asset('assets/images/services/services-02.png') }}" alt="" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                        </figure>
                    </div>
                    <!-- Page Single image End -->

                    <!-- Service Entry Start -->
                    <div class="service-entry">
                        <h2 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Market Feasibility of <span>Nexa Health</span></h2>
                        <p class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Healthcare is more than a service—it is a commitment to improving lives. At Nexa Health Consult, we help healthcare organizations develop strong foundations that enhance patient care, improve operational efficiency, and drive long-term growth.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">With deep industry knowledge and strategic expertise, our team supports hospitals, clinics, and healthcare entrepreneurs in building sustainable and high-performing healthcare systems. We combine practical experience with modern healthcare strategies to help organizations navigate challenges and achieve measurable success.</p>

                        <!-- Service Testing Box Start -->
                        <div class="service-testing-box">
                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Our Strategic Healthcare <span> Consultancy focuses on:</span></h3>
                            <!-- Service Testing Item List Start -->
                            <div class="service-testing-item-list">
                                <!-- Service Testing Item Start -->
                                 <ul>
                                    <li>Designing patient-centric healthcare systems</li>
                                    <li>Improving clinical and operational efficiency</li>
                                    <li>Ensuring regulatory compliance and quality standards</li>
                                    <li>Developing scalable healthcare growth strategies</li>
                                    <li>Supporting healthcare startups and facility expansion</li>
                                 </ul>
                                <!-- Service Testing Item End -->
                            </div>

                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; padding-top:20px;">From concept development to full implementation, Nexa Health Consult works closely with healthcare leaders to transform ideas into successful healthcare institutions. Whether you are planning a new healthcare project or improving an existing facility, our expertise helps create a clear path toward sustainable growth.</p>
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