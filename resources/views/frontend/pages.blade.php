@extends('frontend.layouts.layout')
@section('title', $page->meta_title ?? $page->name)
@section('meta-title', $page->meta_title)
@section('keywords', $page->meta_keywords)
@section('meta-description', $page->meta_description)



@push('style')
    <style>
        body {
            background: #f6f8fc;
        }

        /* MAIN CARD */
        .blog-card {
            background: #fff;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.06);
            transition: 0.3s;
        }

        .blog-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.08);
        }

        /* IMAGE */
        .blog-image img {
            border-radius: 12px;
            width: 100%;
            height: auto;
        }

        /* TITLE */
        .blog-title {
            font-size: 28px;
            font-weight: 700;
            color: #111;
            line-height: 1.4;
        }

        /* META */
        .blog-meta {
            font-size: 14px;
            color: #888;
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .blog-meta i {
            color: #007bff;
            margin-right: 5px;
        }

        /* CONTENT */
        .blog-content p {
            font-size: 16px;
            line-height: 1.9;
            color: #444;
            text-align: justify;
        }
    </style>
@endpush

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
                            <span>{{ $page->name }}</span>
                        </h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $page->name }}</li>
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
        <div class="our-blog py-5" style="background:#f5f7fb;">
            <div class="container">
                <div class="row">

                    <!-- ================= BLOG DETAILS ================= -->
                    <div class="col-lg-12">

                        <div class="blog-card p-4">

                            <!-- Image -->
                            <div class="blog-image mb-4">
                                <img src="{{ static_asset($page->image) }}" alt="{{ $page->name }}">
                            </div>
                            <!-- Title -->
                            <h1 class="blog-title mb-3">{{ $page->name }}</h1>


                            <!-- Content -->
                            <div class="blog-content">
                                {!! $page->content !!}
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- Our Blog Section End -->

@endsection
