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
                                    <li class="nav-item"><a class="nav-link" href="{{route('market-feasibility')}}">Market
                                            Feasibility</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('financial-feasibility')}}">Financial
                                            Feasibility</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('design-and-construction')}}">Design &
                                            Construction</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('project-management')}}">Project
                                            Management</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('medical-equipment-planner')}}">Medical Equipment Planner</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('healthcare-operations-management')}}">Healthcare Operations
                                            Management</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('healthcare-investment-consulting')}}">Healthcare Investment
                                            Consulting</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('healthcare-performance-management')}}">Healthcare Performance
                                            Management</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('hospital-business-setup')}}">Hospital
                                            Business Setup</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('clinic-setup')}}">Clinic Setup</a>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item"><a class="nav-link" href="{{route('projects')}}">Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('blogs')}}">Blogs</a></li>
                           
                            <li class="nav-item"><a class="nav-link" href="{{route('contact-us')}}">Contact Us</a></li>
                            <li class="nav-item highlighted-menu"><a class="nav-link" href="{{route('contact-us')}}">Book
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