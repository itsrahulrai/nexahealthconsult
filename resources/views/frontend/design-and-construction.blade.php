@extends('frontend.layouts.layout')
@section('title', 'Healthcare Design and Construction - Nexa Health Consult | Hospital Planning & Design Consultants')
@section('meta-title', 'Healthcare Design and Construction - Nexa Health Consult | Hospital Planning & Design Consultants')
@section('keywords', 'healthcare design and construction, hospital design consultants, healthcare facility planning, hospital construction consulting, clinic design and construction, healthcare infrastructure planning, hospital architecture consulting, Nexa Health Consult')
@section('meta-description', 'Healthcare Design and Construction services by Nexa Health Consult to support hospitals and clinics with strategic facility planning, medical infrastructure design, and efficient healthcare construction management.')
@section('content')

<!-- Page Header Section Start -->
<div class="page-header parallaxie" style="background-image: url({{ static_asset('assets/images/bg/about-us.webp') }}); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -97.9063px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="wow fadeInUp" data-cursor="-opaque" style="visibility: visible; animation-name: fadeInUp;">Design and Construction</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Design and Construction </li>
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
                            <img src="{{ static_asset('assets/images/services/design.jpg') }}" alt="" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                        </figure>
                    </div>
                    <!-- Page Single image End -->

                    <!-- Service Entry Start -->
                    <div class="service-entry">
                        <h2 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Healthcare Facility Design</h2>
                        <p class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">At Nexa Health Consult, we deliver modern healthcare facility designs that combine aesthetic appeal, functionality, and operational efficiency. Our approach integrates global healthcare design standards with industry insights to create spaces that enhance patient experience, improve staff productivity, and support long-term operational success.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">We focus on designing patient-friendly environments, efficient workflows, and scalable healthcare infrastructure that help healthcare organizations operate smoothly while maximizing return on investment.</p>

                        <!-- Service Testing Box Start -->
                        <div class="service-testing-box">
                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Strategic Planning & Market Insights</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Our team designs healthcare facilities based on in-depth market analysis, operational planning, and healthcare industry trends. This strategic approach helps healthcare organizations build a strong brand presence, attract more patients, and achieve sustainable business growth.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Through thoughtful planning and smart space utilization, we ensure that every healthcare facility is efficient, compliant, and future-ready.</p>

                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Our Expertise</h3>

                            <!-- Service Testing Item List Start -->
                            <div class="service-testing-item-list">
                                <!-- Service Testing Item Start -->
                                 <ul>
                                    <li>Healthcare operations planning</li>
                                    <li>Facility layout and workflow optimization</li>
                                    <li>Healthcare market strategy</li>
                                    <li>Staff training and development</li>
                                    <li>Brand positioning and growth strategy</li>
                                 </ul>
                                <!-- Service Testing Item End -->
                            </div>

                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; padding-top:20px;">At Nexa Health Consult, we understand that every healthcare project is unique. Our consultants work closely with you to design healthcare facilities that align with your vision, operational needs, and growth plans. With a focus on clarity, innovation, and practical execution, we help healthcare organizations achieve their goals efficiently and build healthcare facilities that deliver lasting impact.</p>
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