@extends('frontend.layouts.layout')
@section('title', 'Medical Equipment Planning - Nexa Health Consult | Healthcare Equipment Planning Experts')
@section('meta-title', 'Medical Equipment Planning - Nexa Health Consult | Healthcare Equipment Planning Experts')
@section('keywords', 'medical equipment planning, hospital equipment planning, healthcare equipment consultant, medical equipment procurement planning, hospital technology planning, biomedical equipment planning, medical equipment layout planning, Nexa Health Consult')
@section('meta-description', 'Medical Equipment Planning services by Nexa Health Consult to help hospitals and clinics select the right medical technology, optimize equipment layouts, manage procurement, and ensure efficient healthcare facility operations.')
@section('content')

    <!-- Page Header Section Start -->
    <div class="page-header parallaxie"
        style="background-image: url({{ static_asset('assets/images/bg/about-us.webp') }}); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -97.9063px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="wow fadeInUp" data-cursor="-opaque"
                            style="visibility: visible; animation-name: fadeInUp;">Medical Equipment Planning</h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
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
                        <!-- Page Single image Start -->
                        <div class="page-single-image">
                            <figure class="image-anime reveal"
                                style="opacity: 1; visibility: inherit; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                                <img src="{{ static_asset('assets/images/services/medical-equipment-planning.webp') }}" alt=""
                                    style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                            </figure>
                        </div>
                        <!-- Page Single image End -->

                        <!-- Service Entry Start -->
                        <div class="service-entry">
                            <h2 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Medical
                                Equipment Planning & Hospital Equipment Consultancy</h2>
                            <p class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Nexa Health
                                Consult offers specialized Medical Equipment Planning and Hospital Equipment Consultancy
                                services designed to support hospitals, clinics, and diagnostic centers in developing
                                efficient, technology-driven, and future-ready healthcare facilities. Our expert consultants
                                work closely with healthcare providers to ensure that medical equipment planning aligns with
                                clinical requirements, patient volumes, facility design, regulatory standards, and long-term
                                operational goals.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Our structured
                                planning approach helps healthcare organizations make informed equipment investment
                                decisions while optimizing capital expenditure and ensuring high standards of patient care.
                                By integrating equipment planning with architectural layouts and engineering systems, we
                                ensure seamless workflow, efficient space utilization, and smooth operational performance.
                            </p>

                            <!-- Service Testing Box Start -->
                            <div class="service-testing-box">

                                <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Hospital &
                                    Clinic Equipment Planning Services</h3>

                                <!-- Service Testing Item List Start -->
                                <div class="service-testing-item-list">
                                    <!-- Service Testing Item Start -->
                                    <ul>
                                        <li>Clinical needs assessment and department-wise planning</li>
                                        <li>Medical equipment list preparation and categorization</li>
                                        <li>Capital budgeting and cost optimization strategies</li>
                                        <li>Equipment zoning and space planning coordination</li>
                                        <li>Alignment with architectural, electrical, and MEP designs</li>
                                        <li>Procurement strategy and equipment implementation planning</li>
                                    </ul>
                                    <!-- Service Testing Item End -->
                                </div>

                                <p class="wow fadeInUp mt-3" data-wow-delay="0.2s"
                                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">At Nexa
                                    Health Consult, we also provide independent and unbiased advisory support during the
                                    procurement process, helping healthcare organizations select the most suitable medical
                                    equipment based on clinical performance, technology standards, lifecycle value, and
                                    operational reliability. Our goal is to help healthcare providers build modern medical
                                    facilities equipped with the right technologies to deliver safe, efficient, and
                                    high-quality patient care.</p>

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