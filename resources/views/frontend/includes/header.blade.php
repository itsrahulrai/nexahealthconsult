<div class="top-header">
    <div class="header-content">

        <!-- India Phone -->
        <a href="tel:+919811733441" class="contact-item phone-in">
            <i class="fas fa-phone-alt"></i>
            <span>+91 98117 33441</span>
        </a>

        <!-- USA Phone -->
        <a href="tel:+16412061111" class="contact-item phone-us">
            <i class="fas fa-phone-alt"></i>
            <span>USA +1-641-206-1111</span>
        </a>

        <!-- Email -->
        <a href="mailto:drsanjeevkakra11@icloud.com" class="contact-item email">
            <i class="fas fa-envelope"></i>
            <span>drsanjeevkakra11@icloud.com</span>
        </a>

        <!-- Address -->
        <span class="contact-item address">
            <i class="fas fa-map-marker-alt"></i>
            <span>C-462, opp. C Block, C Block, Mkt, Sector 19, Noida, Uttar
Pradesh 201301</span>
        </span>

        <!-- optional divider (hidden on mobile) -->
        <span class="header-divider"></span>
        <!--<div class="d-flex align-items-center gap-2 top-social-icon">-->
            <!-- Facebook -->
        <!--    <a href="#" class="contact-item p-0"-->
        <!--        style="background:rgba(255,255,255,0.04); border-color:rgba(255 255 255 / 20%);">-->
        <!--        <i class="fa-brands fa-facebook-f"-->
        <!--            style="background:rgba(59,89,152,0.2); color:#97b2e7;"></i>-->
        <!--    </a>-->

            <!-- Instagram -->
        <!--    <a href="#" class="contact-item p-0"-->
        <!--        style="background:rgba(255,255,255,0.04); border-color:rgba(255 255 255 / 20%);">-->
        <!--        <i class="fa-brands fa-instagram"-->
        <!--            style="background:rgba(225,48,108,0.2); color:#e787a5;"></i>-->
        <!--    </a>-->

            <!-- LinkedIn -->
        <!--    <a href="#" class="contact-item p-0"-->
        <!--        style="background:rgba(255,255,255,0.04); border-color:rgba(255 255 255 / 20%);">-->
        <!--        <i class="fa-brands fa-linkedin-in"-->
        <!--            style="background:rgba(10,102,194,0.2); color:#4f9ee8;"></i>-->
        <!--    </a>-->

            <!-- YouTube -->
        <!--    <a href="#" class="contact-item p-0"-->
        <!--        style="background:rgba(255,255,255,0.04); border-color:rgba(255 255 255 / 20%);">-->
        <!--        <i class="fa-brands fa-youtube"-->
        <!--            style="background:rgba(255,0,0,0.15); color:#ff5c5c;"></i>-->
        <!--    </a>-->
        <!--</div>-->
    </div>
</div>
<header class="main-header main-header-prime">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <!-- Logo Start -->
                <a class="navbar-brand" href="./">
                    <img src="{{ static_asset('assets/images/logo.svg')}}" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link" href="./">Home</a> </li>
                            <li class="nav-item submenu"><a class="nav-link" href="{{route('about-us')}}">About us</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="{{route('our-story')}}">Our Story</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('team')}}">Our Team</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu"><a class="nav-link" href="#">Our Services</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('strategic-healthcare-consultancy')}}">Strategic Healthcare
                                            Consultancy</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('market-feasibility')}}">Market
                                            Feasibility</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('financial-feasibility')}}">Financial
                                            Feasibility</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('design-and-construction')}}">Design &
                                            Construction</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('project-management')}}">Project
                                            Management</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('medical-equipment-planner')}}">Medical Equipment Planner</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('healthcare-operations-management')}}">Healthcare Operations
                                            Management</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('healthcare-investment-consulting')}}">Healthcare Investment
                                            Consulting</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('healthcare-performance-management')}}">Healthcare Performance
                                            Management</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('hospital-business-setup')}}">Hospital
                                            Business Setup</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('clinic-setup')}}">Clinic
                                            Setup</a>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item"><a class="nav-link" href="{{route('projects')}}">Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('blogs')}}">Blogs</a></li>

                            <li class="nav-item"><a class="nav-link" href="{{route('contact-us')}}">Contact Us</a></li>
                            <li class="nav-item highlighted-menu"><a class="nav-link"
                                    href="{{route('contact-us')}}">Book
                                    Appointment</a></li>
                        </ul>
                    </div>
                    <!-- Header Btn Start -->
                    <div class="header-btn">
                        <a href="{{route('contact-us')}}" class="btn-default">Book Appointment</a>
                    </div>
                    <!-- Header Btn End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>