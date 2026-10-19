@extends('frontend.layouts.layout')
@section('title', 'Project Management - Nexa Health Consult | Healthcare Project Management Consultants')
@section('meta-title', 'Project Management - Nexa Health Consult | Healthcare Project Management Consultants')
@section('keywords', 'project management consulting, healthcare project management, hospital project management, clinic project management, healthcare project consultants, hospital development consulting, Nexa Health Consult')
@section('meta-description', 'Project Management services by Nexa Health Consult to help hospitals and clinics plan, execute, and manage healthcare projects efficiently with strategic planning, cost control, and regulatory compliance.')
@section('content')

<!-- Page Header Section Start -->
<div class="page-header parallaxie" style="background-image: url({{ static_asset('assets/images/bg/about-us.webp') }}); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -97.9063px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="wow fadeInUp" data-cursor="-opaque" style="visibility: visible; animation-name: fadeInUp;">Project Management</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Project Management</li>
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
                            <img src="{{ static_asset('assets/images/services/project-management.jpg') }}" alt="" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                        </figure>
                    </div>
                    <!-- Page Single image End -->

                    <!-- Service Entry Start -->
                    <div class="service-entry">
                        <h2 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Healthcare Project Management Consultants</h2>
                        <p class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Nexa Health Consult provides expert healthcare project management consulting for hospitals, clinics, diagnostic centers, and specialty healthcare facilities. Our team supports healthcare organizations at every stage of project development, from feasibility studies and strategic planning to design coordination, construction oversight, and final commissioning. As experienced healthcare project management consultants, we ensure that every project is executed efficiently, meets regulatory compliance, and aligns with international healthcare standards.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">We focus on optimizing project timelines, controlling costs, and ensuring seamless coordination between architects, engineers, medical planners, and contractors. With deep industry expertise and a strategic approach, Nexa Health Consult helps healthcare providers develop modern, efficient, and patient-centric medical facilities that are ready for future healthcare demands.</p>

                        <!-- Service Testing Box Start -->
                        <div class="service-testing-box">
                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">A+ Quality & World-Class Healthcare Design</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Nexa Health Consult delivers high-quality healthcare project execution with a strong focus on functional planning, regulatory compliance, and operational efficiency. Our project management approach ensures that hospitals and healthcare facilities are developed according to global healthcare standards while meeting local healthcare authority regulations.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">We integrate design development with execution planning to ensure seamless implementation, effective cost management, and timely project completion.</p>

                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Strategic Project Planning & Market-Aligned Execution</h3>

                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Our healthcare project management team conducts in-depth feasibility validation, capacity planning, and implementation scheduling based on market demand and operational requirements. This approach ensures optimized hospital layouts, efficient clinical workflows, and scalable healthcare infrastructure.</p>

                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">At Nexa Health Consult, we align project execution with long-term operational performance and revenue sustainability, helping healthcare organizations achieve stable growth.</p>

                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Our Expertise</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Nexa Health Consult offers comprehensive expertise in healthcare project management and operations consulting, supporting hospitals, clinics, and healthcare institutions from concept development to commissioning.</p>

                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Our multidisciplinary team combines technical expertise, regulatory knowledge, and healthcare operational insights to ensure every project is executed efficiently, compliantly, and strategically.</p>

                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Why Choose Nexa Health Consult?</h3>

                            <!-- Service Testing Item List Start -->
                            <div class="service-testing-item-list">
                                <!-- Service Testing Item Start -->
                                 <ul>
                                    <li>Healthcare Industry Expertise – Specialized consulting in hospital planning, healthcare project management, and operational strategy.</li>
                                    <li>End-to-End Project Support – From concept development and feasibility analysis to execution and commissioning.</li>
                                    <li>Strategic Planning Approach – Data-driven planning aligned with market demand and long-term healthcare growth.</li>
                                    <li>Regulatory & Compliance Guidance – Ensuring projects meet healthcare authority standards and regulatory requirements.</li>
                                    <li>Cost & Risk Optimization – Efficient planning that minimizes project risks and controls development costs.</li>
                                 </ul>
                                <!-- Service Testing Item End -->
                            </div>

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