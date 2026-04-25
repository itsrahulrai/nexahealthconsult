@extends('frontend.layouts.layout')
@section('title', 'News - Nexa Health Consult - Your Smart Healthcare Consultants')
@section('meta-title', 'News - Nexa Health Consult - Your Smart Healthcare Consultants')
@section('keywords', 'Nexa Health Consult, News, Healthcare Consultants, Medical Consulting, Global Healthcare Leadership')
@section('meta-description', 'Learn about the journey and mission of Nexa Health Consult, your trusted healthcare consulting partners.')

@section('content')

    <!-- Page Header Section Start -->
    <div class="page-header parallaxie" 
        style="background-image: url({{ static_asset('assets/images/bg/about-us.webp') }}); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -97.9063px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="wow fadeInUp" data-cursor="-opaque" style="visibility: visible; animation-name: fadeInUp;">Our <span>News</span></h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">News</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->


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
                <div class="col-xl-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <div class="post-featured-image">
                            <a href="" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ static_asset('assets/images/post-1.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-content">
                                <h2><a href="">Advancements In Modern Laboratory Testing Methods</a></h2>
                            </div>
                            <div class="post-item-btn">
                                <a href="" class="readmore-btn">read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="post-featured-image">
                            <a href="" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ static_asset('assets/images/post-2.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-content">
                                <h2><a href="">Ensuring Accuracy And Quality In Scientific Research</a></h2>
                            </div>
                            <div class="post-item-btn">
                                <a href="" class="readmore-btn">read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="post-featured-image">
                            <a href="" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ static_asset('assets/images/post-3.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-content">
                                <h2><a href="">The Role Of Laboratory Science In Healthcare Innovation</a></h2>
                            </div>
                            <div class="post-item-btn">
                                <a href="" class="readmore-btn">read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- Post Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Blog Section End -->

@endsection