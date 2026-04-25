@extends('frontend.layouts.layout')
@section('title', 'Blogs - Nexa Health Consult - Your Smart Healthcare Consultants')
@section('meta-title', 'Blogs - Nexa Health Consult - Your Smart Healthcare Consultants')
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
                        <h1 class="wow fadeInUp" data-cursor="-opaque" style="visibility: visible; animation-name: fadeInUp;">
                            Our <span>Blog</span></h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blogs</li>
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
