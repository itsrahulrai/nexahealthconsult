@extends('frontend.layouts.layout')
@section('title', 'Contact Us - Nexa Health Consult - Your Smart Healthcare Consultants')
@section('meta-title', 'Contact Us - Nexa Health Consult - Your Smart Healthcare Consultants')
@section('keywords', 'Nexa Health Consult, Contact Us, Healthcare Consultants, Medical Consulting, Global Healthcare
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
                        <h1 class="wow fadeInUp" data-cursor="-opaque" style="visibility: visible; animation-name: fadeInUp;">
                            Contact <span>us</span></h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->


    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- Contact Us Contant Start -->
                    <div class="contact-us-contant">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Contact Us</span>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                                Let’s discuss your <span>healthcare business needs</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">
                                Our experts are here to guide you with strategic healthcare consulting solutions, helping
                                your organization improve operations, compliance, and patient outcomes.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Info List Start -->
                        <div class="contact-info-list wow fadeInUp" data-wow-delay="0.6s">
                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item">
                                <div class="icon-box">
                                    <img src="{{ static_asset('assets/images/icon-location-accent.svg') }}" alt="">
                                </div>
                                <div class="contact-info-item-content">
                                    <p>Location:</p>
                                    <h3>C-462, Sector-19, Noida, India</h3>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item">
                                <div class="icon-box">
                                    <img src="{{ static_asset('assets/images/icon-mail-accent.svg') }}" alt="">
                                </div>
                                <div class="contact-info-item-content">
                                    <p>E-mail Address:</p>
                                    <h3><a href="mailto:drsanjeevkalra11@icloud.com">drsanjeevkalra11@icloud.com</a></h3>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->
                        </div>
                        <!-- Contact Info List End -->

                        <!-- Call Support Box Start -->
                        <div class="call-support-box wow fadeInUp" data-wow-delay="0.8s">
                            <p>Call Support 24/7:</p>
                            <h3><a href="tel:9811733441">+91 98117 33441</a>, <a href="tel:+16412031111"> USA
                                    +16412031111</a></h3>
                        </div>
                        <!-- Call Support Box End -->
                    </div>
                    <!-- Contact Us Contant End -->
                </div>

                <div class="col-xl-6">
                    <!-- Contact Us Form Start -->
                    <div class="contact-us-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-cursor="-opaque">Get in touch <span>with us</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            <form id="contactForms" action="{{ route('contact.submit') }}"  method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="fname" class="form-control" id="fname"
                                            placeholder="First name" required>
                                             <small class="text-danger error" id="fnameError"></small>
                                       
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="lname" class="form-control" id="lname"
                                            placeholder="Last name" required>
                                             <small class="text-danger error" id="lnameError"></small>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone"
                                            placeholder="Phone Number" required>
                                              <small class="text-danger error" id="phoneError"></small>

                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="E-mail Address">
                                              <small class="text-danger error" id="emailError"></small>

                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="5" placeholder="Write Message..."></textarea>
                                           <small class="text-danger error" id="messageError"></small>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Us Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Google Map Start -->
    <div class="google-map">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Our Location</span>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            Find our <span> office</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Google Map Start -->
                    <div class="google-map-iframe wow fadeInUp" data-wow-delay="0.6s">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14014.839157862496!2d77.30609891978035!3d28.578476095347593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce451af8dfa65%3A0xdb0cafb4b06c1fb!2sSector%2019%2C%20Noida%2C%20Uttar%20Pradesh%20201301!5e0!3m2!1sen!2sin!4v1773226266641!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map End -->

@endsection

@push('script')
<script>
document.addEventListener("DOMContentLoaded", function () {

    const fname = document.getElementById("fname");
    const lname = document.getElementById("lname");
    const phone = document.getElementById("phone");
    const email = document.getElementById("email");
    const message = document.getElementById("message");
    const form = document.getElementById("contactForms");

    const nameRegex = /^[A-Za-z\s]+$/;
    const phoneRegex = /^[0-9]{10}$/;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const htmlRegex = /<\/?[^>]+(>|$)/;

    // 🔴 LIVE VALIDATION

    fname.addEventListener("input", () => {
        if (!nameRegex.test(fname.value)) {
            showError(fname, "fnameError", "Only letters allowed");
        } else {
            clearError(fname, "fnameError");
        }
    });

    lname.addEventListener("input", () => {
        if (!nameRegex.test(lname.value)) {
            showError(lname, "lnameError", "Only letters allowed");
        } else {
            clearError(lname, "lnameError");
        }
    });

    phone.addEventListener("input", () => {
        if (!phoneRegex.test(phone.value)) {
            showError(phone, "phoneError", "Enter 10 digit number");
        } else {
            clearError(phone, "phoneError");
        }
    });

    email.addEventListener("input", () => {
        if (email.value !== "" && !emailRegex.test(email.value)) {
            showError(email, "emailError", "Invalid email");
        } else {
            clearError(email, "emailError");
        }
    });

    message.addEventListener("input", () => {
        if (htmlRegex.test(message.value)) {
            showError(message, "messageError", "HTML not allowed");
        } else {
            clearError(message, "messageError");
        }
    });

    // 🔴 SUBMIT VALIDATION

    form.addEventListener("submit", function(e) {
        if (
            !nameRegex.test(fname.value) ||
            !nameRegex.test(lname.value) ||
            !phoneRegex.test(phone.value) ||
            (email.value !== "" && !emailRegex.test(email.value)) ||
            (message.value !== "" && htmlRegex.test(message.value))
        ) {
            e.preventDefault();
        }
    });

    // 🔧 Helper functions

    function showError(input, errorId, msg) {
        document.getElementById(errorId).innerText = msg;
        input.style.border = "1px solid red";
    }

    function clearError(input, errorId) {
        document.getElementById(errorId).innerText = "";
        input.style.border = "1px solid #ccc";
    }

});
</script>
@endpush