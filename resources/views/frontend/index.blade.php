@extends('frontend.layouts.layout')
@section('title', 'Home - Prof. Dr. Sanjeev Kalra | Ayurveda NeuroPsychiatrist & Mental Wellness Expert')
@section('meta-title', 'Home - Prof. Dr. Sanjeev Kalra | Ayurveda NeuroPsychiatrist & Mental Wellness Expert')
@section('keywords', 'Dr Sanjeev Kalra, Ayurveda NeuroPsychiatrist, mental health specialist, stress treatment, anxiety
    treatment, depression therapy, holistic healing, ayurvedic psychiatrist, neuro psychiatry ayurveda, best psychiatrist,
    mental wellness doctor, alternative medicine mental health, Johns Hopkins certified healthcare leader')
@section('meta-description', 'Consult Prof. Dr. Sanjeev Kalra, MD (Ayurveda-NeuroPsychiatry), expert in mental health,
    stress, anxiety, depression & holistic healing with global healthcare leadership experience.')
@section('content')

    <!-- Hero Section Start -->
    <div class="hero-prime">
        <div class="container-fluid">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-12">
                    <!-- Hero Box Start -->
                    <div class="hero-box-prime">
                        <!-- Hero Content Box Start -->
                        <div class="hero-content-box-prime dark-section">
                            <!-- Hero Section Title Box Start -->
                            <div class="hero-content-header-prime">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <span class="section-sub-title">Transforming Healthcare Systems</span>
                                    <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Strategic
                                        healthcare consulting for <span>better patient outcomes</span></h1>
                                    <p class="wow fadeInUp" data-wow-delay="0.4s">Nexa Health Consult is a global healthcare
                                        consulting firm dedicated to helping healthcare organizations improve performance,
                                        strengthen leadership, and deliver better patient care. </p>
                                </div>
                                <!-- Section Title End -->

                                <!-- Hero Satisfaction Client Box Start -->
                                <div class="hero-satisfaction-client-box-prime wow fadeInUp" data-wow-delay="0.6s">
                                    <!-- Hero Button Start -->
                                    <div class="hero-btn-prime">
                                        <a href="{{ route('contact-us') }}" class="btn-default">Schedule a Consultation</a>
                                    </div>
                                    <!-- Hero Button End -->

                                    <!-- Satisfaction Client Box Start -->
                                    <div class="satisfaction-client-box-prime">
                                        <!-- Satisfy Client Images Start -->
                                        <div class="satisfy-client-images">
                                            <div class="satisfy-client-image">
                                                <figure class="image-anime">
                                                    <img src="{{ static_asset('assets/images/author-1.jpg') }}"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="satisfy-client-image">
                                                <figure class="image-anime">
                                                    <img src="{{ static_asset('assets/images/author-2.jpg') }}"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="satisfy-client-image">
                                                <figure class="image-anime">
                                                    <img src="{{ static_asset('assets/images/author-3.jpg') }}"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="satisfy-client-image add-more">
                                                <i class="fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                        <!-- Satisfy Client Images End -->

                                        <!-- Satisfaction Client Content Start -->
                                        <div class="satisfaction-client-content-prime">
                                            <p><span>95%</span> - Client satisfaction rate </p>
                                        </div>
                                        <!-- Satisfaction Client Content End -->
                                    </div>
                                    <!-- Satisfaction Client Box End -->
                                </div>
                                <!-- Hero Satisfaction Client Box End -->
                            </div>
                            <!-- Hero Section Title Box End -->

                            <!-- Hero Info Box Start -->
                            <div class="hero-content-body-prime wow fadeInUp" data-wow-delay="0.8s">
                                <!-- Hero Info List Start -->
                                <div class="hero-content-list-prime">
                                    <ul>
                                        <li>Healthcare assessment and strategic planning solutions</li>
                                        <li>Operational improvement for efficient healthcare delivery</li>
                                        <li>Leadership training and staff development programs</li>
                                    </ul>
                                </div>
                                <!-- Hero Info List End -->

                                <!-- Get in Touch Circle Start -->
                                <div class="get-in-touch-circle-prime">
                                    <a href="{{ route('contact-us') }}">
                                        <img src="{{ static_asset('assets/images/get-in-touch-circle-prime.svg') }}"
                                            alt="">
                                    </a>
                                </div>
                                <!-- Get in Touch Circle End -->
                            </div>
                            <!-- Hero Info Box End -->
                        </div>
                        <!-- Hero Content Box End -->

                        <!-- Hero Image Box Start -->
                        <div class="hero-image-box-prime">
                            <!-- Hero Image Start -->
                            <div class="hero-image-prime">
                                <figure class="image-anime">
                                    <img src="{{ static_asset('assets/images/banner/banner-img.png') }}" alt="">
                                </figure>
                            </div>
                            <!-- Hero Image End -->

                            <!-- Hero Image Content Box Start -->
                            <div class="hero-image-content-box-prime">
                                <!-- Hero Info Box Start -->
                                <div class="hero-info-box-prime">
                                    <!-- Hero Info Header Box Start -->
                                    <div class="hero-info-header-box-prime">
                                        <!-- Hero Info Header Start -->
                                        <div class="hero-info-header-prime">
                                            <div class="circle" data-size="60" data-value="0.75">
                                                <div class="progress_value"><span class="pro_data"></span><span>%</span>
                                                </div>
                                            </div>
                                            <div class="hero-info-header-title-prime">
                                                <h2>Strategic Healthcare Solutions</h2>
                                            </div>
                                        </div>
                                        <!-- Hero Info Header End -->

                                        <!-- Hero Info Content Start -->
                                        <div class="hero-info-content-prime">
                                            <p>We help healthcare organizations improve efficiency and patient care through
                                                expert consulting.</p>
                                        </div>
                                        <!-- Hero Info Content End -->
                                    </div>
                                    <!-- Hero Info Header Box End -->

                                    <!-- Hero Info Image Start -->
                                    <div class="hero-info-image-prime">
                                        <figure class="image-anime">
                                            <img src="{{ static_asset('assets/images/banner/banner-img-2.png') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                    <!-- Hero Info Image End -->
                                </div>
                                <!-- Hero Info Box End -->
                            </div>
                            <!-- Hero Image Content Box End -->
                        </div>
                        <!-- Hero Image Box End -->
                    </div>
                    <!-- Hero Box End -->
                </div>

                <div class="col-lg-12">
                    <div class="hero-feature-list-prime wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Hero Featured Item Start -->
                        <div class="hero-feature-item-prime">
                            <div class="icon-box">
                                <img src="{{ static_asset('assets/images/icon-hero-feature-1-prime.svg') }}" alt="">
                            </div>
                            <div class="hero-feature-item-content-prime">
                                <h3>Healthcare Business Setup</h3>
                            </div>
                        </div>
                        <!-- Hero Featured Item End -->

                        <!-- Hero Featured Item Start -->
                        <div class="hero-feature-item-prime">
                            <div class="icon-box">
                                <img src="{{ static_asset('assets/images/icon-hero-feature-2-prime.svg') }}" alt="">
                            </div>
                            <div class="hero-feature-item-content-prime">
                                <h3>Strategic Planning & Consulting</h3>
                            </div>
                        </div>
                        <!-- Hero Featured Item End -->

                        <!-- Hero Featured Item Start -->
                        <div class="hero-feature-item-prime">
                            <div class="icon-box">
                                <img src="{{ static_asset('assets/images/icon-hero-feature-3-prime.svg') }}"
                                    alt="">
                            </div>
                            <div class="hero-feature-item-content-prime">
                                <h3>Healthcare Operations Management</h3>
                            </div>
                        </div>
                        <!-- Hero Featured Item End -->

                        <!-- Hero Featured Item Start -->
                        <div class="hero-feature-item-prime">
                            <div class="icon-box">
                                <img src="{{ static_asset('assets/images/icon-hero-feature-4-prime.svg') }}"
                                    alt="">
                            </div>
                            <div class="hero-feature-item-content-prime">
                                <h3>Leadership & Staff Training</h3>
                            </div>
                        </div>
                        <!-- Hero Featured Item End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- About Us Section Start -->
    <div class="about-us-prime">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- About Us Contant Start -->
                    <div class="about-us-contant">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">About Us</span>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                                Transforming healthcare through <span>expert consulting</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">
                                Nexa Health Consult is a global healthcare consulting group helping healthcare organizations
                                improve operations, leadership, and patient outcomes through strategic planning and
                                innovative solutions.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Body Start -->
                        <div class="about-us-body-prime wow fadeInUp" data-wow-delay="0.6s">
                            <!-- About Us Button Start -->
                            <div class="about-us-btn-prime">
                                <a href="{{ route('about-us') }}" class="btn-default">About Us</a>
                            </div>
                            <!-- About Us Button End -->

                            <!-- About Author Box Start -->
                            <div class="about-us-author-box-prime">
                                <!-- About Author Image Start -->
                                <div class="about-author-image-prime">
                                    <figure class="image-anime">
                                        <img src="{{ static_asset('assets/images/about/auther.jpg') }}"
                                            alt="Dr. Sanjeev Kalra">
                                    </figure>
                                </div>
                                <!-- About Author Image End -->

                                <!-- About Author detail Start -->
                                <div class="about-author-content-prime">
                                    <h3>Dr. Sanjeev Kalra</h3>
                                    <p>Founder & CEO</p>
                                </div>
                                <!-- About Author detail End -->
                            </div>
                            <!-- About Us Author End -->
                        </div>
                        <!-- About Us Body End -->

                        <!-- About Us Footer Start -->
                        <div class="about-us-footer-prime wow fadeInUp" data-wow-delay="0.8s">
                            <!-- About Us Item Start -->
                            <div class="about-us-item-prime">
                                <div class="icon-box">
                                    <img src="{{ static_asset('assets/images/icon-about-us-body-item-1-prime.svg') }}"
                                        alt="">
                                </div>
                                <div class="about-us-item-content-prime">
                                    <h3>Our Mission</h3>
                                    <p>Enhancing healthcare through strategic consulting.</p>
                                </div>
                            </div>
                            <!-- About Us Item End -->
                            <!-- About Us Item Start -->
                            <div class="about-us-item-prime">
                                <div class="icon-box">
                                    <img src="{{ static_asset('assets/images/icon-about-us-body-item-2-prime.svg') }}"
                                        alt="">
                                </div>
                                <div class="about-us-item-content-prime">
                                    <h3>Our Vision</h3>
                                    <p>Advancing healthcare with sustainable solutions.</p>
                                </div>
                            </div>
                            <!-- About Us Item End -->
                        </div>
                        <!-- About Us Footer End -->
                    </div>
                    <!-- About Us Contant End -->
                </div>

                <div class="col-xl-6">
                    <!-- About Us Image Box Start -->
                    <div class="about-us-image-box-prime wow fadeInUp" data-wow-delay="0.2s">
                        <!-- About Us Image Box 1 Start -->
                        <div class="about-us-image-box-1-prime">
                            <!-- About Us Image Start -->
                            <div class="about-us-image-prime">
                                <figure>
                                    <img src="{{ static_asset('assets/images/banner/about-us-02.png') }}" alt="">
                                </figure>
                            </div>
                            <!-- About Us Image End -->
                        </div>
                        <!-- About Us Image Box 1 End -->

                        <!-- About Us Image Box 2 Start -->
                        <div class="about-us-image-box-2-prime">
                            <!-- About Us Cta Box Start -->
                            <div class="about-us-cta-box-prime">
                                <div class="icon-box">
                                    <img src="{{ static_asset('assets/images/icon-about-cta-prime.svg') }}"
                                        alt="">
                                </div>
                                <div class="about-us-cta-content-prime">
                                    <h2><span class="counter">18</span>+</h2>
                                    <p>Years of Experience</p>
                                </div>
                            </div>
                            <!-- About Us Cta Box End -->

                            <!-- About Us Image Start -->
                            <div class="about-us-image-prime">
                                <figure class="image-anime">
                                    <img src="{{ static_asset('assets/images/banner/about-us-01.png') }}" alt="">
                                </figure>
                            </div>
                            <!-- About Us Image End -->
                        </div>
                        <!-- About Us Image Box 2 End -->
                    </div>
                    <!-- About Us Image Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Services Section Start -->
    <div class="our-services-prime bg-section dark-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Our Services</span>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            End-to-end healthcare business <span>consulting solutions</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                            At Nexa Health Consult, we help healthcare entrepreneurs build successful healthcare businesses
                            through strategic planning, operational setup, and expert guidance.
                        </p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item-prime box-1 bg-white wow fadeInUp">
                        <!-- Service Item Content Start -->
                        <div class="service-item-content-prime ">
                            <h2><a href="" class="text-dark">OPERATIONS & MANAGEMENT</a></h2>
                            <p class="text-dark">Building efficient healthcare operations and management systems for
                                compliance, performance, and sustainable growth.</p>
                        </div>
                        <!-- Service Item Content End -->

                        <!-- Service Item Image Start -->
                        <div class="service-item-image-prime">
                            <img src="{{ static_asset('assets/images/services/services-01.png') }}" class="rounded"
                                alt="">
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item-prime box-1 bg-white wow fadeInUp">
                        <!-- Service Item Content Start -->
                        <div class="service-item-content-prime ">
                            <h2><a href="" class="text-dark">PROJECT MANAGEMENT</a></h2>
                            <p class="text-dark"> Our experts manage every stage of your healthcare project, ensuring
                                smooth
                                planning, coordination, successful execution.</p>
                        </div>
                        <!-- Service Item Content End -->

                        <!-- Service Item Image Start -->
                        <div class="service-item-image-prime">
                            <img src="{{ static_asset('assets/images/services/services-02.png') }}" class="rounded"
                                alt="">
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item-prime box-1 bg-white wow fadeInUp">
                        <!-- Service Item Content Start -->
                        <div class="service-item-content-prime ">
                            <h2><a href="" class="text-dark">MERGERS & ACQUISITIONS</a></h2>
                            <p class="text-dark">We guide healthcare organizations through successful mergers and
                                acquisitions with strategic planning and expert support.</p>
                        </div>
                        <!-- Service Item Content End -->

                        <!-- Service Item Image Start -->
                        <div class="service-item-image-prime">
                            <img src="{{ static_asset('assets/images/services/services-03.png') }}" class="rounded"
                                alt="">
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text section-satisfy-img wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Satisfy Client Images Start -->
                        <div class="satisfy-client-images">
                            <div class="satisfy-client-image">
                                <figure class="image-anime">
                                    <img src="{{ static_asset('assets/images/author-1.jpg') }}" alt="">
                                </figure>
                            </div>
                            <div class="satisfy-client-image add-more">
                                <img src="{{ static_asset('assets/images/icon-phone-white.svg') }}" alt="">
                            </div>
                        </div>
                        <!-- Satisfy Client Images End -->
                        <p>Connect with Nexa Health Consult and start your journey toward successful healthcare business
                            development – <a href="">View Our Services</a></p>
                        <ul>
                            <li><span class="counter">4.8</span>/5</li>
                            <li>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </li>
                            <li>Trusted by Healthcare Leaders</li>
                        </ul>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us-prime">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Our Services</span>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            Comprehensive <span>Healthcare Consulting Services</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                            At Nexa Health Consult, we provide strategic healthcare consulting solutions including business
                            setup, project management, operational planning, and leadership guidance to help healthcare
                            organizations grow and succeed.
                        </p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-xl-4 col-md-6">
                    <!-- Case Study Item Start -->
                    <div class="case-study-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <!-- Case Study Item Image Start -->
                        <div class="case-study-item-image">
                            <a href="" data-cursor-text="View">
                                <figure>
                                    <img src="{{ static_asset('assets/images/services/strategic-healthcare-consultancy.webp') }}"
                                        alt="Strategic Healthcare Consultancy">
                                </figure>
                            </a>
                        </div>
                        <!-- Case Study Item Image End -->

                        <!-- Case Study Item Contant Start -->
                        <div class="case-study-item-content">
                            <ul>
                                <li><a href="#">LEARN MORE</a></li>
                            </ul>
                            <h2><a href="">Strategic Healthcare Consultancy</a></h2>
                        </div>
                        <!-- Case Study Item Contant End -->
                    </div>
                    <!-- Case Study Item Start -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Case Study Item Start -->
                    <div class="case-study-item wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <!-- Case Study Item Image Start -->
                        <div class="case-study-item-image">
                            <a href="" data-cursor-text="View">
                                <figure>
                                    <img src="{{ static_asset('assets/images/services/market-feasibility.webp') }}"
                                        alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Case Study Item Image End -->

                        <!-- Case Study Item Contant Start -->
                        <div class="case-study-item-content">
                            <ul>
                                <li><a href="#">LEARN MORE</a></li>
                            </ul>
                            <h2><a href="">Market Feasibility</a></h2>
                        </div>
                        <!-- Case Study Item Contant End -->
                    </div>
                    <!-- Case Study Item Start -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Case Study Item Start -->
                    <div class="case-study-item wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <!-- Case Study Item Image Start -->
                        <div class="case-study-item-image">
                            <a href="" data-cursor-text="View">
                                <figure>
                                    <img src="{{ static_asset('assets/images/services/financial-feasibility.webp') }}"
                                        alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Case Study Item Image End -->

                        <!-- Case Study Item Contant Start -->
                        <div class="case-study-item-content">
                            <ul>
                                <li><a href="#">LEARN MORE</a></li>
                            </ul>
                            <h2><a href="">Financial Feasibility</a></h2>
                        </div>
                        <!-- Case Study Item Contant End -->
                    </div>
                    <!-- Case Study Item Start -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Case Study Item Start -->
                    <div class="case-study-item wow fadeInUp" data-wow-delay="0.6s"
                        style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                        <!-- Case Study Item Image Start -->
                        <div class="case-study-item-image">
                            <a href="" data-cursor-text="View">
                                <figure>
                                    <img src="{{ static_asset('assets/images/services/design-construction.webp') }}"
                                        alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Case Study Item Image End -->

                        <!-- Case Study Item Contant Start -->
                        <div class="case-study-item-content">
                            <ul>
                                <li><a href="#">LEARN MORE</a></li>
                            </ul>
                            <h2><a href="">Design & Construction</a></h2>
                        </div>
                        <!-- Case Study Item Contant End -->
                    </div>
                    <!-- Case Study Item Start -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Case Study Item Start -->
                    <div class="case-study-item wow fadeInUp" data-wow-delay="0.8s"
                        style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                        <!-- Case Study Item Image Start -->
                        <div class="case-study-item-image">
                            <a href="" data-cursor-text="View">
                                <figure>
                                    <img src="{{ static_asset('assets/images/services/project-management.webp') }}"
                                        alt="Project Management">
                                </figure>
                            </a>
                        </div>
                        <!-- Case Study Item Image End -->

                        <!-- Case Study Item Contant Start -->
                        <div class="case-study-item-content">
                            <ul>
                                <li><a href="#">LEARN MORE</a></li>
                            </ul>
                            <h2><a href="">Project Management </a></h2>
                        </div>
                        <!-- Case Study Item Contant End -->
                    </div>
                    <!-- Case Study Item Start -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Case Study Item Start -->
                    <div class="case-study-item wow fadeInUp" data-wow-delay="1s"
                        style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                        <!-- Case Study Item Image Start -->
                        <div class="case-study-item-image">
                            <a href="" data-cursor-text="View">
                                <figure>
                                    <img src="{{ static_asset('assets/images/services/medical-equipment-planning.webp') }}"
                                        alt="Medical Equipment Planning">
                                </figure>
                            </a>
                        </div>
                        <!-- Case Study Item Image End -->

                        <!-- Case Study Item Contant Start -->
                        <div class="case-study-item-content">
                            <ul>
                                <li><a href="#">LEARN MORE</a></li>
                            </ul>
                            <h2><a href="">Medical Equipment Planning</a></h2>
                        </div>
                        <!-- Case Study Item Contant End -->
                    </div>
                    <!-- Case Study Item Start -->
                </div>



                <div class="col-xl-4 col-md-6">
                    <!-- Case Study Item Start -->
                    <div class="case-study-item wow fadeInUp" data-wow-delay="1s"
                        style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                        <!-- Case Study Item Image Start -->
                        <div class="case-study-item-image">
                            <a href="" data-cursor-text="View">
                                <figure>
                                    <img src="{{ static_asset('assets/images/services/operations-management.webp') }}"
                                        alt="Operations Management">
                                </figure>
                            </a>
                        </div>
                        <!-- Case Study Item Image End -->

                        <!-- Case Study Item Contant Start -->
                        <div class="case-study-item-content">
                            <ul>
                                <li><a href="#">LEARN MORE</a></li>
                            </ul>
                            <h2><a href=""> Operations Management </a></h2>
                        </div>
                        <!-- Case Study Item Contant End -->
                    </div>
                    <!-- Case Study Item Start -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Case Study Item Start -->
                    <div class="case-study-item wow fadeInUp" data-wow-delay="1s"
                        style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                        <!-- Case Study Item Image Start -->
                        <div class="case-study-item-image">
                            <a href="" data-cursor-text="View">
                                <figure>
                                    <img src="{{ static_asset('assets/images/services/investment-consult.jpg') }}"
                                        alt="Healthcare Investment">
                                </figure>
                            </a>
                        </div>
                        <!-- Case Study Item Image End -->

                        <!-- Case Study Item Contant Start -->
                        <div class="case-study-item-content">
                            <ul>
                                <li><a href="#">LEARN MORE</a></li>
                            </ul>
                            <h2><a href="">Healthcare Investment Consulting</a></h2>
                        </div>
                        <!-- Case Study Item Contant End -->
                    </div>
                    <!-- Case Study Item Start -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- Our Team Section Start -->
    <div class="our-team dark-section bg-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title">Our Team</span>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            Meet the <span>visionaries at Nexa Health Consult</span> transforming healthcare
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp">
                        <!-- Team Image Start -->
                        <div class="team-item-image">
                            <a href="dr-sanjeev-kalra.php" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ static_asset('assets/images/team/dr-kalra.webp') }}"
                                        alt="Dr. Sanjeev Kalra">
                                </figure>
                            </a>
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Item Body Start -->
                        <div class="team-item-body">
                            <!-- Team Item Contant Start -->
                            <div class="team-item-contant">
                                <h2><a href="dr-sanjeev-kalra.php">Dr. Sanjeev Kalra</a></h2>
                                <p>Dual Master’s (Hospital Mgmt & Finance), Exec Leadership Johns Hopkins, MHA University of
                                    Phoenix</p>
                            </div>
                            <!-- Team Item Contant End -->
                        </div>
                        <!-- Team Item Body End -->
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Team Image Start -->
                        <div class="team-item-image">
                            <a href="" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ static_asset('assets/images/team/2.webp') }}" alt="Shima Enal">
                                </figure>
                            </a>
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Item Body Start -->
                        <div class="team-item-body">
                            <!-- Team Item Contant Start -->
                            <div class="team-item-contant">
                                <h2><a href="">Shima Enal</a></h2>
                                <p>Director Healthcare Operations</p>
                            </div>
                            <!-- Team Item Contant End -->
                        </div>
                        <!-- Team Item Body End -->
                    </div>
                    <!-- Team Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Team Section End -->


    <!-- Our Pricing Section Start -->
    <div class="our-pricing-prime">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Our Pricing Plan</span>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            Flexible pricing plans for all <span>healthcare consulting services</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <!-- Pricing Item Start -->
                    <div class="pricing-item-prime wow fadeInUp">
                        <div class="pricing-item-header-prime">
                            <div class="icon-box">
                                <img src="{{ static_asset('assets/images/icon-pricing-item-1-prime.svg') }}"
                                    alt="">
                            </div>
                            <div class="pricing-item-content-prime">
                                <h2>Basic Consultation Package</h2>
                                <p>Initial assessment and strategy session for first-time clients or small healthcare
                                    projects.</p>
                            </div>
                            <div class="pricing-item-price-prime">
                                <h2>$ 300<sub>/Per Consultation</sub></h2>
                            </div>
                            <div class="pricing-item-btn-prime">
                                <a href="" class="btn-default">More Info</a>
                            </div>
                        </div>
                        <div class="pricing-item-list-prime">
                            <ul>
                                <li>Needs Assessment</li>
                                <li>Strategy Planning</li>
                                <li>Initial Consultation</li>
                                <li>Roadmap for Healthcare Initiative</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Pricing Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Pricing Item Start -->
                    <div class="pricing-item-prime wow fadeInUp" data-wow-delay="0.2s">

                        <div class="pricing-item-header-prime">
                            <div class="icon-box">
                                <img src="{{ static_asset('assets/images/icon-pricing-item-2-prime.svg') }}"
                                    alt="">
                            </div>
                            <div class="pricing-item-content-prime">
                                <h2>Standard Consulting Package </h2>
                                <p>Focused support with a detailed plan for medium-sized healthcare projects or ongoing
                                    initiatives.</p>
                            </div>
                            <div class="pricing-item-price-prime">
                                <h2>$ 2,500<sub>/Per Project</sub></h2>
                            </div>
                            <div class="pricing-item-btn-prime">
                                <a href="" class="btn-default">More Info</a>
                            </div>
                        </div>
                        <div class="pricing-item-list-prime">
                            <ul>
                                <li>Needs Assessment</li>
                                <li>Targeted Strategy Development</li>
                                <li>Implementation Support</li>
                                <li>Collaboration with Stakeholders</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Pricing Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Pricing Item Start -->
                    <div class="pricing-item-prime wow fadeInUp" data-wow-delay="0.4s">

                        <div class="pricing-item-header-prime">
                            <div class="icon-box">
                                <img src="{{ static_asset('assets/images/icon-pricing-item-3-prime.svg') }}"
                                    alt="">
                            </div>
                            <div class="pricing-item-content-prime">
                                <h2>Comprehensive Consulting Package</h2>
                                <p>Full-scale consulting with continuous support for large projects or long-term healthcare
                                    initiatives.</p>
                            </div>
                            <div class="pricing-item-price-prime">
                                <h2>$ 2,500<sub>/Per Month</sub></h2>
                            </div>
                            <div class="pricing-item-btn-prime">
                                <a href="" class="btn-default">More Info</a>
                            </div>
                        </div>
                        <div class="pricing-item-list-prime">
                            <ul>
                                <li>Strategic Planning & Implementation</li>
                                <li>Continuous Support & Guidance</li>
                                <li>Quality Improvement Initiatives</li>
                                <li>Long-Term Healthcare Project Management</li>
                            </ul>
                        </div>
                        <!-- Pricing Item List End -->
                    </div>
                    <!-- Pricing Item End -->
                </div>

                <div class="col-lg-12">
                    <div class="pricing-benefit-list-prime wow fadeInUp" data-wow-delay="0.6s">
                        <ul>
                            <li><img src="{{ static_asset('assets/images/icon-pricing-benefit-1.svg') }}"
                                    alt="">Initial
                                consultation included</li>
                            <li><img src="{{ static_asset('assets/images/icon-pricing-benefit-2.svg') }}"
                                    alt="">Transparent
                                pricing, no hidden fees</li>
                            <li><img src="{{ static_asset('assets/images/icon-pricing-benefit-3.svg') }}"
                                    alt="">Flexible
                                plans to suit your project needs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Pricing Section End -->


    <!-- Our Testimonial Section Start -->
    <div class="our-testimonial-prime bg-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title">Our Testimonials</span>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            Real stories from trusted <span>healthcare consulting clients</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider-prime wow fadeInUp">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Swiper Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item-prime">
                                        <div class="testimonial-item-rating-prime">
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                        </div>
                                        <div class="testimonial-item-content-prime">
                                            <p>“ Excellent service from start to finish. The team guided me at every step
                                                and delivered exactly what they promised. Highly recommended!”</p>
                                        </div>
                                        <div class="testimonial-item-footer-prime">
                                            <div class="testimonial-author-box-prime">
                                                <div class="testimonial-author-image-prime">
                                                    <figure>
                                                        <img src="{{ static_asset('assets/images/author-1.jpg') }}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                                <div class="testimonial-author-content-prime">
                                                    <h2>Rahul Sharma</h2>
                                                    <p>Delhi</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-item-quote-prime">
                                                <img src="{{ static_asset('assets/images/testimonial-quote-icon-prime.svg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Swiper Slide End -->

                                <!-- Swiper Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item-prime">
                                        <div class="testimonial-item-rating-prime">
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                        </div>
                                        <div class="testimonial-item-content-prime">
                                            <p>“ Professional, transparent, and reliable. They made the entire process
                                                smooth and stress-free. Truly impressed with their dedication.”</p>
                                        </div>
                                        <div class="testimonial-item-footer-prime">
                                            <div class="testimonial-author-box-prime">
                                                <div class="testimonial-author-image-prime">
                                                    <figure>
                                                        <img src="{{ static_asset('assets/images/author-3.jpg') }}"
                                                            alt="Nehal Verma">
                                                    </figure>
                                                </div>
                                                <div class="testimonial-author-content-prime">
                                                    <h2>Nehal Verma</h2>
                                                    <p>Noida</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-item-quote-prime">
                                                <img src="{{ static_asset('assets/images/testimonial-quote-icon-prime.svg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Swiper Slide End -->

                                <!-- Swiper Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item-prime">
                                        <div class="testimonial-item-rating-prime">
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                        </div>
                                        <div class="testimonial-item-content-prime">
                                            <p>“ Great experience! The staff was very supportive and completed the work on
                                                time. I appreciate their honesty and commitment.”</p>
                                        </div>
                                        <div class="testimonial-item-footer-prime">
                                            <div class="testimonial-author-box-prime">
                                                <div class="testimonial-author-image-prime">
                                                    <figure>
                                                        <img src="{{ static_asset('assets/images/author-3.jpg') }}"
                                                            alt="Amit Kumar">
                                                    </figure>
                                                </div>
                                                <div class="testimonial-author-content-prime">
                                                    <h2>Amit Kumar</h2>
                                                    <p>Gurugram</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-item-quote-prime">
                                                <img src="{{ static_asset('assets/images/testimonial-quote-icon-prime.svg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Swiper Slide End -->

                                <!-- Swiper Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item-prime">
                                        <div class="testimonial-item-rating-prime">
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                        </div>
                                        <div class="testimonial-item-content-prime">
                                            <p>“ Excellent service from start to finish. The team guided me at every step
                                                and delivered exactly what they promised. Highly recommended!”</p>
                                        </div>
                                        <div class="testimonial-item-footer-prime">
                                            <div class="testimonial-author-box-prime">
                                                <div class="testimonial-author-image-prime">
                                                    <figure>
                                                        <img src="{{ static_asset('assets/images/author-1.jpg') }}"
                                                            alt="Rahul Sharma">
                                                    </figure>
                                                </div>
                                                <div class="testimonial-author-content-prime">
                                                    <h2>Rahul Sharma</h2>
                                                    <p>Delhi</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-item-quote-prime">
                                                <img src="{{ static_asset('assets/images/testimonial-quote-icon-prime.svg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Swiper Slide End -->
                            </div>
                            <div class="testimonial-pagination-prime"></div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonial Section End -->


    <!-- Our Blog Section Start -->
    <div class="our-blog">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Latest Blog</span>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            Latest insights from <span>healthcare consulting</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-md-6">
                        <div class="post-item wow fadeInUp">

                            <!-- Image -->
                            <div class="post-featured-image">
                                <a href="{{ route('blog.details', $blog->slug) }}" data-cursor-text="View">
                                    <figure class="image-anime">
                                        <img src="{{ static_asset($blog->image) }}" alt="{{ $blog->title }}">
                                    </figure>
                                </a>
                            </div>

                            <!-- Content -->
                            <div class="post-item-body">
                                <div class="post-item-content">
                                    <h2>
                                        <a href="{{ route('blog.details', $blog->slug) }}">
                                            {{ $blog->title }}
                                        </a>
                                    </h2>

                                    <p>{{ Str::limit($blog->short_content, 100) }}</p>
                                </div>

                                <!-- Button -->
                                <div class="post-item-btn">
                                    <a href="{{ route('blog.details', $blog->slug) }}" class="readmore-btn">
                                        read more
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Our Blog Section End -->

@endsection     
