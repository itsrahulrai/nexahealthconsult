@extends('frontend.layouts.layout')
@section('title', $blog->meta_title ?? $blog->title)
@section('meta-title', $blog->meta_title)
@section('keywords', $blog->meta_keywords)
@section('meta-description', $blog->meta_description)
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

        /* TAGS */
        .tag-badge {
            display: inline-block;
            background: #eef4ff;
            color: #007bff;
            padding: 6px 14px;
            border-radius: 50px;
            font-size: 13px;
            margin: 5px 5px 0 0;
            transition: 0.3s;
        }

        .tag-badge:hover {
            background: #007bff;
            color: #fff;
        }

        /* SIDEBAR */
        .sidebar-card {
            background: #fff;
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .sidebar-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
            border-left: 4px solid #007bff;
            padding-left: 10px;
        }

        /* RECENT POSTS */
        .recent-post-item {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
            transition: 0.3s;
        }

        .recent-post-item:hover {
            transform: translateX(5px);
        }

        .recent-img {
            width: 65px;
            height: 65px;
            border-radius: 10px;
            object-fit: cover;
        }

        .recent-title {
            font-size: 14px;
            font-weight: 600;
            color: #222;
            text-decoration: none;
        }

        .recent-title:hover {
            color: #007bff;
        }

        .recent-date {
            font-size: 12px;
            color: #999;
        }

        /* CATEGORY */
        .category-list li {
            margin-bottom: 10px;
        }

        .category-list a {
            display: flex;
            justify-content: space-between;
            padding: 8px 12px;
            border-radius: 8px;
            background: #f7f9fc;
            text-decoration: none;
            color: #333;
            transition: 0.3s;
        }

        .category-list a:hover {
            background: #007bff;
            color: #fff;
        }

        /* STICKY SIDEBAR */
        .sticky-sidebar {
            position: sticky;
            top: 100px;
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
        <div class="our-blog py-5" style="background:#f5f7fb;">
            <div class="container">
                <div class="row">

                    <!-- ================= BLOG DETAILS ================= -->
                    <div class="col-lg-8">

                        <div class="blog-card p-4">

                            <!-- Image -->
                            <div class="blog-image mb-4">
                                <img src="{{ static_asset($blog->image) }}" alt="{{ $blog->title }}">
                            </div>
                            <!-- Title -->
                            <h2 class="blog-title mb-3">{{ $blog->title }}</h2>

                            <!-- Meta -->
                            <div class="blog-meta mb-3">
                                <span><i class="fa fa-calendar"></i> {{ $blog->created_at->format('d M Y') }}</span>
                                <span class="mx-2">|</span>
                                <span><i class="fa fa-folder"></i> {{ $blog->category->name ?? 'Uncategorized' }}</span>
                            </div>

                            <!-- Content -->
                            <div class="blog-content">
                                {!! $blog->content !!}
                            </div>

                            <!-- Tags -->
                            @if ($blog->tags)
                                <div class="mt-4">
                                    @foreach (json_decode($blog->tags) as $tag)
                                        <span class="tag-badge">{{ $tag }}</span>
                                    @endforeach
                                </div>
                            @endif

                        </div>

                    </div>


                    <!-- ================= SIDEBAR ================= -->
                    <div class="col-lg-4">

                        <!-- 🔹 Recent Blogs -->
                        <div class="sidebar-card mb-4">
                            <h4 class="sidebar-title">Recent Blogs</h4>

                            @foreach ($recentBlogs as $item)
                                <div class="recent-post-item d-flex">

                                    <img src="{{ static_asset($item->image) }}" alt="" class="recent-img">

                                    <div>
                                        <a href="{{ route('blog.details', $item->slug) }}" class="recent-title">
                                            {{ $item->title }}
                                        </a>
                                        <div class="recent-date">
                                            {{ $item->created_at->format('d M Y') }}
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>


                        <!-- 🔹 Categories -->
                        <div class="sidebar-card">
                            <h4 class="sidebar-title">Categories</h4>

                            <ul class="category-list">
                                @foreach ($categories as $cat)
                                    <li>
                                        <a href="#">
                                            {{ $cat->name }}
                                            <span>{{ $cat->blogs_count }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Our Blog Section End -->

@endsection
