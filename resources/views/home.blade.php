@extends('layouts.app')

@section('content')

<div class="container mt-3">

    <!-- ✅ HERO SECTION -->
    <div class="p-4 mb-4 text-white rounded"
        style="background: linear-gradient(to right, #0d6efd, #198754);">
        
        <h1 class="fw-bold">SevenUnique News Portal 📰</h1>
        <p class="mb-0">Latest Updates | Breaking News | Live TV</p>
    </div>


    <!-- ✅ CATEGORY MENU SECTION -->
    <div class="mb-4">
        <ul class="nav nav-pills gap-2">
            <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Business</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Entertainment</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Sports</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Technology</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Election</a></li>
        </ul>
    </div>


    <!-- ✅ LIVE TV SECTION -->
    <div class="mb-5">

        <h2 class="fw-bold text-danger mb-3">
            Live TV ●
        </h2>

        <div style="
            border-radius:15px;
            overflow:hidden;
            box-shadow:0px 5px 20px rgba(0,0,0,0.2);
        ">
            <iframe width="100%" height="450"
                src="https://www.youtube.com/embed/5qap5aO4i9A"
                frameborder="0"
                allowfullscreen>
            </iframe>
        </div>

    </div>


    <!-- ✅ TOP NEWS SECTION -->
    <div class="mb-5">

        <h2 class="fw-bold text-danger text-decoration-underline mb-4">
            Top News
        </h2>

        <div class="row">

            <!-- News Card -->
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Breaking News Title</h5>
                        <p class="card-text">Short description of top news...</p>
                        <a href="#" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>

            <!-- News Card -->
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Latest Update News</h5>
                        <p class="card-text">Short description of news...</p>
                        <a href="#" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>

            <!-- News Card -->
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Trending News</h5>
                        <p class="card-text">Short description of trending news...</p>
                        <a href="#" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- ✅ LATEST NEWS LIST SECTION -->
    <div class="mb-5">

        <h2 class="fw-bold text-dark mb-4">
            Latest News
        </h2>

        <ul class="list-group">
            <li class="list-group-item">✅ News Headline One</li>
            <li class="list-group-item">✅ News Headline Two</li>
            <li class="list-group-item">✅ News Headline Three</li>
        </ul>

    </div>


    <!-- ✅ TRENDING SECTION -->
    <div class="mb-5">

        <h2 class="fw-bold text-success mb-4">
            Trending Now 🔥
        </h2>

        <div class="alert alert-warning">
            Trending News will appear here...
        </div>

    </div>

</div>

@endsection
