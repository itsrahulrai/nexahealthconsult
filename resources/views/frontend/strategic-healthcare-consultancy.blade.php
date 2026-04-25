@extends('frontend.layouts.layout')
@section('title', 'Strategic Healthcare Consultancy - Nexa Health Consult | Healthcare Strategy Experts')
@section('meta-title', 'Strategic Healthcare Consultancy - Nexa Health Consult | Healthcare Strategy Experts')
@section('keywords', 'strategic healthcare consultancy, healthcare strategy consulting, hospital strategy consulting, healthcare management consulting, healthcare advisory services, hospital business strategy, healthcare consulting firm, Nexa Health Consult')
@section('meta-description', 'Strategic Healthcare Consultancy services by Nexa Health Consult to help hospitals, clinics, and healthcare organizations develop effective strategies, improve operational performance, and achieve sustainable healthcare growth.')
@section('content')


<!-- Page Header Section Start -->
<div class="page-header parallaxie" style="background-image: url({{ static_asset('assets/images/bg/about-us.webp') }}); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -97.9063px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="wow fadeInUp" data-cursor="-opaque" style="visibility: visible; animation-name: fadeInUp;">Strategic Healthcare Consultancy </h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Strategic Healthcare Consultancy</li>
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
                            <img src="{{ static_asset('assets/images/services/startegy-consult.jpg') }}" alt="" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                        </figure>
                    </div>
                    <!-- Page Single image End -->

                    <!-- Service Entry Start -->
                    <div class="service-entry">
                        <h2 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Strategic Healthcare  <span>Consultancy</span></h2>
                        <p class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Healthcare is more than a business—it is a commitment to human well-being. At Nexa, we help healthcare organizations build systems that inspire trust, deliver excellence, and sustain long-term growth. Headquartered in Noida, India, with a global presence in Fairfield, Iowa (USA), we bring a truly international perspective to healthcare consulting.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Led by Pooja Kalra, a visionary entrepreneur, and Dr. Sanjeev Kalra, a distinguished authority in Ayurvedic Neuro-Psychiatry and healthcare leadership, our team carries over 19 years of hands-on experience across clinical practice, academic institutions, and strategic advisory roles.</p>

                        <!-- Service Testing Box Start -->
                        <div class="service-testing-box">
                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Our Strategic Healthcare Consultancy goes beyond conventional advisory services.<span> We focus on:</span></h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Our diagnostic testing capabilities are built to deliver accurate, consistent, and reliable results across a wide range of applications using advanced laboratory technologies and validated methodologies.</p>

                            <!-- Service Testing Item List Start -->
                            <div class="service-testing-item-list">
                                <!-- Service Testing Item Start -->
                                 <ul>
                                    <li>Designing patient-centric healthcare models</li>
                                    <li>Optimizing clinical and operational workflows </li>
                                    <li>Ensuring regulatory compliance and quality standards</li>
                                    <li>Developing sustainable growth strategies</li>
                                    <li>Integrating innovation for future-ready healthcare systems</li>
                                 </ul>
                                <!-- Service Testing Item End -->
                            </div>

                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; padding-top:20px;">From concept to execution, we work closely with healthcare leaders to transform ideas into high-performing institutions. Whether you are launching a new facility or upgrading existing operations, Nexa provides the strategic foundation required for measurable success.</p>
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