<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .footer-links li {
        margin-bottom: 8px;
    }

    .footer-links a {
        text-decoration: none;
        color: #000;
        font-size: 14px;
        transition: color 0.3s ease;
    }

    .footer-links a:hover {
        color: #c40000;
    }

    #fullMenu {
        font-family: 'Merriweather', serif;
    }

    #fullMenu li {
        font-size: 15px;
        padding: 6px 0;
    }

    .footer-icon {
        width: 38px;
        height: 38px;
        background: #f1f1f1;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 4px;
        color: #000;
        font-size: 18px;
        transition: 0.3s ease;
        text-decoration: none;
    }

    .footer-icon:hover {
        background: #000;
        color: #fff;
    }
    </style>
</head>

<body>
    <footer class="bg-light pt-5 pb-4 border-top  ">
        <div class="container">

            <!-- Logo Row -->
            <div class="row align-items-center mb-4 text-center text-md-start">

                <!-- Logo -->
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                    <a href="{{ url('/') }}" class="text-decoration-none text-dark"
                        style="font-family:'Merriweather', serif; font-size:40px;">
                        Aajkinewz
                    </a>
                </div>

                <!-- Store Images -->
                <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end gap-3">

                    <a href="https://play.google.com" target="_blank">
                        <img src="{{ asset('images/playstore.png') }}" alt="Play Store" class="img-fluid"
                            style="max-height:40px;">
                    </a>

                    <a href="https://www.apple.com/app-store/" target="_blank">
                        <img src="{{ asset('images/appstore.png') }}" alt="App Store" class="img-fluid"
                            style="max-height:40px;">
                    </a>

                </div>


            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <h6 class="fw-bold border-top border-5 text-dark border-dark pt-3 pb-2">Aaj Ki Newz</h6>
                            <ul class="list-unstyled footer-links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Code of Editorial Values</a></li>
                                <li><a href="#">News Archive</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Digital Subscription</a></li>
                                <li><a href="#">Subscribe to Newsletters</a></li>
                                <li><a href="#">Rss Feeds</a></li>
                                <li><a href="#">Readers Editor-Terms of Reference</a></li>
                                <li><a href="#">Authors & Contributors</a></li>
                                <li><a href="#">Gift Front page</a></li>
                            </ul>
                            
                          
                        </div>

                        @foreach($footerCategories as $category)
                        <div class="col-md-2 mb-4"> <h6 class="fw-bold border-top border-5 text-dark border-dark pt-3 pb-2">
                                {{ $category->name }}
                            </h6>
                            <ul class="list-unstyled footer-links">
                                @foreach($category->subcategories as $sub)
                                <li>
                                   <a href="{{ route('dynamic.route', ['slug' => $category->slug, 'param2' => $sub->slug]) }}">
                                        {{ $sub->name }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Column 5 -->
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <h6 class="fw-bold  border-top border-5 text-dark border-dark pt-3 pb-2">
                                Trending On Aaj Ki Newz
                            </h6>

                            <ul class="list-unstyled footer-links">
                                @php
                                $trendingPosts = \App\Models\Post::where('is_trending',1)
                                                    ->where('status','published')
                                                    ->latest()
                                                    ->take(4)
                                                    ->get();
                                @endphp

                                @foreach($trendingPosts as $post)
                                    @php
                                        // Named route use karke dynamic parameters set karna
                                        $postUrl = $post->subcategory 
                                            ? route('dynamic.route', [$post->category->slug, $post->subcategory->slug, $post->slug])
                                            : route('dynamic.route', [$post->category->slug, $post->slug]);
                                    @endphp

                                    <li>
                                        <a href="{{ $postUrl }}">
                                            {{ $post->title }}
                                            <img src="{{ asset('images/trend.png') }}" alt="Trending" height="16">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Column 6 -->

                        <div class="col-lg-6 col-md-6 mb-4">

                            <h6 class="fw-bold border-top border-5 text-dark border-dark pt-3 pb-2">
                                Trending on Group sites
                            </h6>

                            <ul class="list-unstyled footer-links">
                                @php
                                    $popularPosts = \App\Models\Post::where('is_popular',1)
                                                ->where('status','published')
                                                ->latest()
                                                ->take(4)
                                                ->get();
                                @endphp
                                @foreach($popularPosts as $post)

                                    @php
                                    $postUrl = $post->subcategory
                                        ? url($post->category->slug.'/'.$post->subcategory->slug.'/'.$post->slug)
                                        : url($post->category->slug.'/'.$post->slug);
                                    @endphp

                                    <li>
                                        <a href="{{ $postUrl }}">
                                        {{ $post->title }}
                                        <img src="{{ asset('images/trend.png') }}" alt="Trending" height="16">
                                        </a>
                                    </li>

                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <!-- Latest News Section -->

                    <!-- Latest News Section -->
                    <div class="row mt-4">

                        <div class="col-12">
                            <h6 class="fw-bold border-top border-5 border-dark text-dark pt-3 pb-2">
                                Latest News
                            </h6>
                        </div>

                        <!-- Left News Column -->
                        @php
                            $latestPosts = \App\Models\Post::where('status','published')
                                ->latest()
                                ->take(4)
                                ->get();
                        @endphp

                            <div class="col-md-6 text-dark">
                                <ul class="list-unstyled">

                                    @foreach($latestPosts as $post)
                                        @php
                                            // Named route 'dynamic.route' ka use karke parameters pass karna
                                            $postUrl = $post->subcategory 
                                                ? route('dynamic.route', [$post->category->slug, $post->subcategory->slug, $post->slug])
                                                : route('dynamic.route', [$post->category->slug, $post->slug]);
                                        @endphp

                                        <li class="mb-3 border-bottom pb-2">
                                            <a href="{{ $postUrl }}" class="text-dark text-decoration-none">
                                                {{ $post->title }}
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>

                        <!-- Right News Column -->
                        <div class="col-md-6 text-dark">

                            <ul class="list-unstyled">
                               @foreach($latestPosts->skip(5) as $post)
                                    @php
                                        // Named route 'dynamic.route' ka use karke parameters set karna
                                        $postUrl = $post->subcategory 
                                            ? route('dynamic.route', [$post->category->slug, $post->subcategory->slug, $post->slug])
                                            : route('dynamic.route', [$post->category->slug, $post->slug]);
                                    @endphp

                                    <li class="mb-3 border-bottom pb-2">
                                        <a href="{{ $postUrl }}" class="text-dark text-decoration-none">
                                            {{ $post->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>

                    </div>
                </div>

                <!-- Bottom Line -->
                <!-- Bottom Footer Section -->
                <div class="border-top pt-4 mt-4">

                    <!-- ICON ROW -->
                    <div class="d-flex align-items-center gap-2 mb-3">

                        <a href="#" class="footer-icon"><i class="bi bi-whatsapp"></i></a>
                        <a href="#" class="footer-icon"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="footer-icon"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="footer-icon"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="footer-icon"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="footer-icon"><i class="bi bi-youtube"></i></a>
                        <a href="#" class="footer-icon"><i class="bi bi-spotify"></i></a>
                        <a href="#" class="footer-icon"><i class="bi bi-telegram"></i></a>

                    </div>

                    <!-- TERMS LINKS -->
                    <div class="small mb-2">
                        <a href="#" class="text-dark text-decoration-none me-2">TERMS OF USE</a> /
                        <a href="#" class="text-dark text-decoration-none ms-2">PRIVACY POLICY</a> /
                    </div>

                    <!-- COPYRIGHT -->
                    <div class="small text-muted">
                        Copyright © 2026, Aajkinewz Publishing Pvt Ltd. or its affiliated companies.
                        All rights reserved.
                    </div>

                </div>
            </div>
    </footer>
</body>

</html>