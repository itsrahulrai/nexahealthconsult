@extends('frontend.layouts.layout')
@section('title', 'About us Nexa Health Consult - Your Smart Healthcare Consultants')
@section('meta-title', 'About Us - Nexa Health Consult - Your Smart Healthcare Consultants')
@section('keywords', 'Nexa Health Consult, About Us, Healthcare Consultants, Medical Consulting, Global Healthcare
Leadership')
@section('meta-description', 'Learn about the journey and mission of Nexa Health Consult, your trusted healthcare
consulting partners.')

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
                        style="visibility: visible; animation-name: fadeInUp;">About <span>us</span></h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">about us</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->


<!-- About Us Section Start -->
<div class="about-us-prime pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="about-us-contant">
                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">Dr. Sanjeev Kalra</span>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            Healthcare Consultant | Hospital & Medical <span> College Project Advisor</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                            Dr. Sanjeev Kalra is a seasoned healthcare consultant with 20 years of experience in
                            healthcare planning, development, and implementation, including 5 years of experience in the
                            US healthcare system. He brings a strong combination of clinical expertise, hospital
                            management, financial planning, and executive healthcare leadership to support hospitals,
                            medical colleges, and healthcare institutions in building efficient, sustainable, and
                            future-ready systems.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="0.5s">
                            He holds an <strong>MD, MDBA in Hospital Management & Finance, AHCLM </strong> in Executive
                            Healthcare
                            Leadership and Management from <strong>Johns Hopkins University, USA,</strong> and an
                            <strong>MHA</strong> from the <strong>University
                                of Phoenix</strong> . His multidisciplinary background enables him to provide practical,
                            strategic,
                            and outcome-focused guidance across the full project lifecycle.
                        </p>

                    </div>

                </div>
            </div>
            <!-- <div class="col-xl-6">
                <div class="about-us-contant">
                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">About Us</span>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            Transforming healthcare through <span>expert consulting</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                            We are a healthcare consulting group based in Noida, India and having our international office in Fairfield, IA, USA. Under the leadership of Pooja Kalra, a leading and a successful woman entrepreneur & Dr. Sanjeev Kalra, who is a highly esteemed expert in the field of healthcare, recognized for his unique integration of Ayurvedic practices with modern psychiatric care. 
                        </p>
                    </div>
                    <div class="about-us-body-prime wow fadeInUp" data-wow-delay="0.6s">
                        <div class="about-us-btn-prime">
                            <a href="" class="btn-default">Contact Us</a>
                        </div>
                        <div class="about-us-author-box-prime">
                            <div class="about-author-image-prime">
                                <figure class="image-anime">
                                    <img src="{{ static_asset('assets/images/about/auther.jpg') }}" alt="Dr. Sanjeev Kalra">
                                </figure>
                            </div>
                            <div class="about-author-content-prime">
                                <h3>Dr. Sanjeev Kalra</h3>
                                <p>Founder & CEO</p>
                            </div>
                        </div>
                    </div>

                    <div class="about-us-footer-prime wow fadeInUp" data-wow-delay="0.8s">
                        <div class="about-us-item-prime">
                            <div class="icon-box">
                                <img src="{{ static_asset('assets/images/icon-about-us-body-item-1-prime.svg') }}" alt="">
                            </div>
                            <div class="about-us-item-content-prime">
                                <h3>Our Mission</h3>
                                <p>Enhancing healthcare through strategic consulting.</p>
                            </div>
                        </div>

                        <div class="about-us-item-prime">
                            <div class="icon-box">
                                <img src="{{ static_asset('assets/images/icon-about-us-body-item-2-prime.svg') }}" alt="">
                            </div>
                            <div class="about-us-item-content-prime">
                                <h3>Our Vision</h3>
                                <p>Advancing healthcare with sustainable solutions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-6">
                <div class="about-us-image-box-prime wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-us-image-box-1-prime">
                        <div class="about-us-image-prime">
                            <figure>
                                <img src="{{ static_asset('assets/images/about/about-us.jpg') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="service-single-content mt-5">
                    <div class="service-entry">
                        <!-- <div class="service-testing-box">
                            <h2 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                Our<span>Leadership</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                As an MD in Ayurveda Psychiatry, he combines ancient wisdom with contemporary medical
                                principles to address mental health challenges holistically. His approach emphasizes the
                                importance of treating the whole person, considering both mental and physical health,
                                which has garnered respect among peers and patients alike.
                            </p>

                            <p class="wow fadeInUp" data-wow-delay="0.2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                Dr. Kalra’s academic qualifications are as impressive as his clinical expertise. He
                                holds dual Master’s degrees in Hospital Management and Finance, providing him with a
                                robust foundation in both the operational and financial aspects of healthcare
                                institutions. Further enhancing his credentials, he completed an Executive Healthcare
                                Leadership and Management program at Johns Hopkins University, a prestigious institution
                                known for its rigorous healthcare training. Additionally, he earned a Master’s in
                                Healthcare Administration (MHA) from the University of Phoenix, equipping him with a
                                comprehensive understanding of healthcare systems and policies.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                Dr. Kalra’s academic qualifications are as impressive as his clinical expertise. He
                                holds dual Master’s degrees in Hospital Management and Finance, providing him with a
                                robust foundation in both the operational and financial aspects of healthcare
                                institutions. Further enhancing his credentials, he completed an Executive Healthcare
                                Leadership and Management program at Johns Hopkins University, a prestigious institution
                                known for its rigorous healthcare training. Additionally, he earned a Master’s in
                                Healthcare Administration (MHA) from the University of Phoenix, equipping him with a
                                comprehensive understanding of healthcare systems and policies.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                With 18 years of extensive experience, Dr. Kalra has excelled in serving and leading
                                medical academic institutions. His career trajectory includes various leadership roles
                                where he has significantly contributed to the advancement of healthcare education and
                                patient care. His capabilities extend beyond clinical practice; he has a proven track
                                record as a healthcare consultant, specializing in strategic planning and operations. In
                                this capacity, Dr. Kalra has advised numerous healthcare organizations on how to enhance
                                operational efficiency, streamline processes, and implement effective strategies for
                                growth and sustainability.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                With 18 years of extensive experience, Dr. Kalra has excelled in serving and leading
                                medical academic institutions. His career trajectory includes various leadership roles
                                where he has significantly contributed to the advancement of healthcare education and
                                patient care. His capabilities extend beyond clinical practice; he has a proven track
                                record as a healthcare consultant, specializing in strategic planning and operations. In
                                this capacity, Dr. Kalra has advised numerous healthcare organizations on how to enhance
                                operational efficiency, streamline processes, and implement effective strategies for
                                growth and sustainability.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                Dr. Kalra’s expertise in strategic planning is particularly noteworthy. He has played a
                                pivotal role in helping institutions navigate the complexities of the healthcare
                                landscape, particularly in an era of rapid change and technological advancement. His
                                insights into operational management have enabled organizations to optimize their
                                resources, improve patient outcomes, and adapt to evolving regulatory requirements.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                In addition to his consulting and leadership roles, Dr. Kalra is passionate about
                                education. He is dedicated to mentoring the next generation of healthcare professionals,
                                instilling in them the importance of integrating holistic practices with evidence-based
                                medicine. His contributions to academic programs and his involvement in research
                                initiatives underscore his commitment to fostering innovation in the healthcare sector.


                            </p>

                            <div class="service-testing-item-list">
                                <div class="service-testing-item wow fadeInUp"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="service-testing-item-image">
                                        <figure>
                                            <img src="{{ static_asset('assets/images/about/left-side.png') }}" alt="">
                                        </figure>
                                    </div>
                                    <div class="service-testing-item-content">
                                        <p>“Healthcare assessment and strategic planning”</p>
                                    </div>
                                </div>

                                <div class="service-testing-item wow fadeInUp" data-wow-delay="0.2s"
                                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="service-testing-item-image">
                                        <figure>
                                            <img src="{{ static_asset('assets/images/about/right-side.png') }}" alt="">
                                        </figure>
                                    </div>
                                    <div class="service-testing-item-content">
                                        <p>“Strategic comparison and healthcare evaluation”</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <div class="service-process-box mt-0">
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Dr. Kalra specializes in <strong>planning, developing, and implementing healthcare
                                    projects</strong> for
                                medical colleges and hospitals. His work includes feasibility assessment, project
                                structuring, operational planning, workflow design, hospital commissioning, quality
                                improvement, and leadership support. He works closely with institutional stakeholders to
                                translate vision into executable plans aligned with clinical, academic, operational, and
                                financial objectives.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">
                                With deep understanding of both Indian and US healthcare environments, Dr. Kalra offers
                                insights that help organizations improve efficiency, strengthen governance, enhance
                                patient care, and create scalable healthcare models. His consulting approach is focused
                                on building high-performing institutions with strong systems, clear processes, and
                                measurable results.
                            </p>

                            <!-- <div class="service-process-item-list">
                                <div class="service-process-item wow fadeInUp">
                                    <div class="service-process-no">
                                        <figure>
                                            <img src="{{ static_asset('assets/images/banner/about-us-01.png') }}"
                                                alt="">
                                        </figure>
                                        <h3>01</h3>
                                    </div>
                                    <div class="service-process-item-content">
                                        <h3>Assessment</h3>
                                        <p>Evaluate healthcare operations, challenges, and opportunities.</p>
                                    </div>
                                </div>
                                <div class="service-process-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="service-process-no">
                                        <figure>
                                            <img src="{{ static_asset('assets/images/banner/about-us-01.png') }}"
                                                alt="">
                                        </figure>
                                        <h3>02</h3>
                                    </div>
                                    <div class="service-process-item-content">
                                        <h3>Strategic Planning</h3>
                                        <p>Develop tailored strategies aligned with healthcare goals.</p>
                                    </div>
                                </div>

                                <div class="service-process-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="service-process-no">
                                        <figure>
                                            <img src="{{ static_asset('assets/images/banner/about-us-01.png') }}"
                                                alt="">
                                        </figure>
                                        <h3>03</h3>
                                    </div>
                                    <div class="service-process-item-content">
                                        <h3>Implementation</h3>
                                        <p>Execute solutions to improve efficiency and care delivery.</p>
                                    </div>
                                </div>
                                <div class="service-process-item wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="service-process-no">
                                        <figure>
                                            <img src="{{ static_asset('assets/images/banner/about-us-01.png') }}"
                                                alt="">
                                        </figure>
                                        <h3>04</h3>
                                    </div>
                                    <div class="service-process-item-content">
                                        <h3>Continuous Improvement</h3>
                                        <p>Monitor performance and optimize healthcare outcomes.</p>
                                    </div>
                                </div>

                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="skhc-consulting-wrap">
    <div class="container">

        <div class="row">

            <!-- Core Areas -->
            <div class="col-lg-6 mb-4 mb-md-0">
                <div class="skhc-card h-100">
                    <div class="skhc-icon">
                        <i class="fas fa-hospital"></i>
                    </div>

                    <h4 class="skhc-card-title">Core Areas of Expertise</h4>

                    <ul class="skhc-list">
                        <li><i class="fas fa-check-circle"></i> Hospital planning and development</li>
                        <li><i class="fas fa-check-circle"></i> Medical college project advisory</li>
                        <li><i class="fas fa-check-circle"></i> Healthcare operations and workflow design</li>
                        <li><i class="fas fa-check-circle"></i> Project implementation and commissioning</li>
                        <li><i class="fas fa-check-circle"></i> Financial planning and hospital management</li>
                        <li><i class="fas fa-check-circle"></i> Executive healthcare leadership</li>
                        <li><i class="fas fa-check-circle"></i> Quality improvement and governance</li>
                        <li><i class="fas fa-check-circle"></i> US healthcare system insights</li>
                    </ul>
                </div>
            </div>

            <!-- Consulting Focus -->
            <div class="col-lg-6">
                <div class="skhc-card h-100">
                    <div class="skhc-icon">
                        <i class="fas fa-briefcase-medical"></i>
                    </div>

                    <h4 class="skhc-card-title">Consulting Focus</h4>

                    <p class="skhc-text">Dr. Kalra supports healthcare organizations in:</p>

                    <ul class="skhc-list">
                        <li><i class="fas fa-check-circle"></i> New hospital and medical college project planning</li>
                        <li><i class="fas fa-check-circle"></i> Expansion and modernization of existing facilities</li>
                        <li><i class="fas fa-check-circle"></i> Operational restructuring and system improvement</li>
                        <li><i class="fas fa-check-circle"></i> Strategic healthcare leadership and implementation support</li>
                        <li><i class="fas fa-check-circle"></i> Institutional readiness for sustainable growth</li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- Why Work -->
        <div class="skhc-card mt-4">
            <div class="skhc-icon">
                <i class="fas fa-award"></i>
            </div>

            <h4 class="skhc-card-title">Why Work With Dr. Kalra</h4>

            <div class="row g-3 mt-1">

                <div class="col-md-6">
                    <div class="skhc-feature-box">
                        <i class="fas fa-clock"></i>
                        <span>20 years of healthcare experience</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="skhc-feature-box">
                        <i class="fas fa-globe"></i>
                        <span>5 years of US healthcare system experience</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="skhc-feature-box">
                        <i class="fas fa-user-graduate"></i>
                        <span>Strong academic and professional credentials</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="skhc-feature-box">
                        <i class="fas fa-project-diagram"></i>
                        <span>Practical experience in project planning and implementation</span>
                    </div>
                </div>

            </div>

            <div class="skhc-highlight mt-4">
                <i class="fas fa-star"></i>
                <strong>
                    Based in Delhi, India, Dr. Sanjeev Kalra is available for consulting assignments,
                    project advisory roles, and institutional development partnerships.
                </strong>
            </div>
        </div>

    </div>
</section>
<!-- About Us Section End -->

@endsection