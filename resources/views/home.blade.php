@extends('layouts.app')

@section('content')

    <div class="container my-4">

        <!-- Top Advertisement -->
        <div class="text-center mb-5">

            <a href="/">
                <img src="{{ asset('images/add1.png') }}" alt="Advertisement" class="img-fluid mx-auto d-block"
                    style="max-width:600px;">

            </a>
            <p class="text-uppercase small text-muted mt-3 mb-4">
                Advertisement
            </p>
        </div>


        <!-- Bottom Advertisement -->
        <div class="text-center mt-5">

            <a href="/">
                <img src="{{ asset('images/add2.png') }}" alt="Advertisement" class="img-fluid mx-auto d-block"
                    style="max-width:100%;">

            </a>
            <p class="text-uppercase small text-muted mb-5 mt-5">
                Advertisement
            </p>
        </div>
        <div class="row mt-4">

            <!-- LEFT COLUMN -->
            <div class="col-lg-3 border-end">
                <a href="{{ url('/premium') }}" class="text-decoration-none">
                    <h3 class="fw-bold mb-4 red" style="font-size: 30px; color: #B00020">Premium</h3>
                </a>

                @foreach($premium->where('category_id', 6) as $post)
                    <a href="{{ $post->subcategory 
                            ? url($post->category->slug.'/'.$post->subcategory->slug.'/'.$post->slug) 
                            : url($post->category->slug.'/'.$post->slug) }}" 
                        class="txt d-block">
                        {{ $post->title }}
                    </a>

                    <div class="d-flex align-items-center justify-content-between mt-2">
                        <span class="text-muted fw-semibold text-uppercase" style="font-size: 9px;">
                            <a href="#" class="smll">
                                {{ $post->user->name ?? 'Staff Reporter' }}
                            </a>
                        </span>

                        <a href="#">
                            <img src="{{ $post->user && $post->user->image ? asset('storage/'.$post->user->image) : asset('images/writer.png') }}" 
                                alt="Author" class="rounded-circle" width="50" height="50" style="object-fit: cover;">
                        </a>
                    </div>
                    <hr>
                @endforeach

                {{-- Live Section (Optional: static ya dynamic) --}}
                <span class="fw-bold red mt-5 " style="font-size: 14px;">
                    <a href="/" class="red"> <span class="live-dot"></span> LIVE </a>
                </span>
                <a href="/" class="txt d-block mt-2">
                    Telangana Municipal Polls 2026 LIVE: Congress takes leader...
                </a>
                <hr>

                @foreach($premium->where('category_id', '!=', 6)->take(3) as $post)
                    <a href="{{ $post->subcategory 
                                ? url($post->category->slug.'/'.$post->subcategory->slug) 
                                : url($post->category->slug) }}" 
                        class="text-decoration-none">

                            <h3 class="fw-bold red" style="font-size:16px; color:#B00020">
                                {{ $post->subcategory ? $post->subcategory->name : $post->category->name }}
                            </h3>

                    </a>
                    <a href="{{ $post->subcategory 
                            ? url($post->category->slug.'/'.$post->subcategory->slug.'/'.$post->slug) 
                            : url($post->category->slug.'/'.$post->slug) }}" class="txt d-block">
                        {{ $post->title }}
                    </a>
                    <hr>
                @endforeach

            </div>


            <!-- CENTER COLUMN -->
        <div class="col-lg-6 px-4">

                @php
                    $mainLive = $liveData->first();
                    $secondLive = $liveData->skip(1)->first();
                    $thirdLive = $liveData->skip(2)->first();
                    $fourthLive = $liveData->skip(3)->first();
                @endphp

                    <!-- MAIN NEWS -->
                    @if($mainLive)

                        <span class="fw-bold red" style="font-size: 14px;">
                            <a href="{{ url('post/'.$mainLive->slug) }}" class="red">
                                <span class="live-dot"></span> LIVE
                            </a>
                        </span>

                        <h1 style="font-size: 34px; font-weight: 900;">
                            <a href="{{ url('post/'.$mainLive->slug) }}" class="txt">
                                {{ $mainLive->title }}
                            </a>
                        </h1>

                        <p class="text-muted" style="font-size: 14px;">
                            <a href="{{ url('post/'.$mainLive->slug) }}" class="txt">
                                {{ Str::limit(strip_tags($mainLive->content),150) }}
                            </a>
                        </p>

                        <a href="{{ url('post/'.$mainLive->slug) }}">
                            <img src="{{ asset('storage/'.$mainLive->thumbnail) }}" class="img-fluid my-3" alt="News Image">
                        </a>

                    @endif


                    <!-- SECOND ROW -->
                    <div class="row mt-4">
                        <!-- LEFT SMALL NEWS -->
                        @if($secondLive)
                            <div class="col-md-6">
                                <a href="{{ url('post/'.$secondLive->slug) }}" class="text-decoration-none">
                                    <h6 class="fw-bold txt" style="font-size: 20px;">
                                        {{ $secondLive->title }}
                                    </h6>

                                    <img src="{{ asset('storage/'.$secondLive->thumbnail) }}" class="img-fluid mb-2" alt="News">
                                </a>
                            </div>
                        @endif
                        <!-- RIGHT SMALL NEWS -->
                        <div class="col-md-6">
                            @if($thirdLive)

                                <span class="fw-bold red" style="font-size: 14px;">
                                <span class="live-dot"></span> LIVE</span>

                                <a href="{{ url('post/'.$thirdLive->slug) }}" class="text-decoration-none">
                                    <h6 class="fw-bold txt" style="font-size: 20px;">
                                    {{ $thirdLive->title }}
                                    </h6>
                                </a>

                                <span class="text-muted fw-semibold text-uppercase" style="font-size: 9px;">
                                    <a href="#" class="smll">
                                        {{ $thirdLive->user->name ?? 'Admin' }}
                                    </a>
                                </span>

                                <hr>

                            @endif

                            @if($fourthLive)
                                <a href="{{ url('post/'.$fourthLive->slug) }}" class="text-decoration-none">
                                    <h6 class="fw-bold txt" style="font-size: 20px;">
                                        {{ $fourthLive->title }}
                                    </h6>
                                </a>
                            @endif
                        </div>
                    </div>

                </div>

            <!-- RIGHT COLUMN -->
            <div class="col-lg-3 border-start ps-4">
                <h5 class="fw-bold mb-4">
                    <a href="#" class="red text-decoration-none">Latest News</a>
                </h5>

                <div class="timeline">
                    @foreach($latest->take(5) as $key => $post)
                        <div class="timeline-item {{ $key == 0 ? 'active' : '' }}">
                            <a href="{{ url('news/'.$post->slug) }}" class="txt text-decoration-none">
                                <small class="time">
                                    {{ $post->created_at->diffForHumans() }} - 
                                    {{ $post->category->name ?? 'News' }}
                                </small>
                                <p class="news-title">
                                    {{ $post->title }}
                                </p>
                            </a>
                        </div>
                    @endforeach
                </div>

                <a href="#" class="smll fw-semibold text-decoration-none" style="font-size:10px;">
                    READ MORE STORIES
                </a>
                
                <hr class="my-1">
                <hr class="my-1">
                <hr class="my-1">

                <a href="/">
                    <img src="{{ asset('images/sugam.png') }}" class="img-fluid w-100 mb-3 mt-5" alt="Advertisement">
                </a>
            </div>

        </div>

    </div>

    <!-- Blue Strip -->
    <div class="w-100" style="height:6px; background: linear-gradient(90deg,#35b6c6,#458AD2);">
    </div>

    <section class="py-5 position-relative overflow-hidden"
        style="background: linear-gradient(50deg,#ffffff 0%,rgba(69,138,210,0.27) 70%,#458AD2 100%);">
        <div class="container position-relative" style="z-index:2;">
            <h2 class="text-center fw-bold mb-5" style="color:#B00020;">
                Budget Session of Parliament
            </h2>

            @if($finance->count() > 0)
            <div class="row mb-5">
                <div class="{{ $finance->count() > 5 ? 'col-lg-6' : 'col-lg-10 mx-auto' }}">
                    
                    @php $first = $finance->first(); @endphp
                    @if($first)
                        <a href="{{ url('news/'.$first->slug) }}">
                            <img src="{{ asset('storage/'.$first->thumbnail) }}" class="img-fluid w-100 mb-3" onerror="this.src='{{ asset('images/parliament.png') }}'">
                        </a>
                        <h3 class="fw-bold">
                            <a href="{{ url('news/'.$first->slug) }}" class="text-dark txt">{{ $first->title }}</a>
                        </h3>
                        <p class="text-muted small">
                            {{ Str::limit(strip_tags($first->content), 150) }}
                        </p>
                        <span class="text-uppercase text-muted small" style="font-size: 9px;">
                            {{ $first->user->name ?? 'Staff Reporter' }}
                        </span>
                    @endif

                    <hr class="my-4">

                    {{-- SMALL ARTICLES BELOW (Only show if data exists) --}}
                    <div class="row">
                        @foreach($finance->slice(1, 4) as $post)
                            <div class="col-md-6 mb-4">
                                <h6><a href="{{ url('news/'.$post->slug) }}" class="text-dark txt">{{ $post->title }}</a></h6>
                                <span class="text-muted text-uppercase small" style="font-size: 9px;">
                                    {{ $post->user->name ?? 'The Hindu Bureau' }}
                                </span>
                                @if($post->thumbnail)
                                    <img src="{{ asset('storage/'.$post->thumbnail) }}" class="img-fluid my-3" alt="">
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Right Side Column - Ye tabhi dikhega jab 5 se zyada posts hongi --}}
                @if($finance->count() > 5)
                <div class="col-lg-6">
                    @php $videoPost = $finance->get(5); @endphp
                    @if($videoPost)
                    <div class="bg-dark text-white p-3 mb-4">
                        <div class="ratio ratio-16x9 mb-3">
                            @if($videoPost->video_url)
                                <iframe src="{{ $videoPost->video_url }}" allowfullscreen></iframe>
                            @else
                                <img src="{{ asset('storage/'.$videoPost->thumbnail) }}" class="img-fluid" style="object-fit:cover">
                            @endif
                        </div>
                        <p class="small text-uppercase"><a href="#" class="video">HIGHLIGHTS</a></p>
                        <h5 class="fw-bold">
                            <a href="{{ url('news/'.$videoPost->slug) }}" class="video">{{ $videoPost->title }}</a>
                        </h5>
                        <p class="small">{{ Str::limit(strip_tags($videoPost->content), 100) }}</p>
                    </div>
                    @endif

                    <div class="row">
                        @foreach($finance->slice(6, 4) as $post)
                            <div class="col-md-6 mb-3 {{ $loop->iteration % 2 != 0 ? 'border-end' : '' }}">
                                @if($post->thumbnail)
                                    <img src="{{ asset('storage/'.$post->thumbnail) }}" class="img-fluid mb-2" alt="">
                                @endif
                                <h6><a href="{{ url('news/'.$post->slug) }}" class="text-dark txt">{{ $post->title }}</a></h6>
                                <span class="text-muted text-uppercase small" style="font-size: 9px;">
                                    {{ $post->user->name ?? 'The Hindu Bureau' }}
                                </span>
                                <hr>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
            @else
                <p class="text-center text-muted">No finance news available at the moment.</p>
            @endif
        </div>
        
        <div class="see-more-wrapper text-center">
            <a href="{{ url('/finance') }}" class="see-more fw-bold text-uppercase">
                SEE MORE
            </a>→
        </div>
    </section>
    <!-- New section -->
    <section class="bg-dark text-white py-5">
        <div class="container" style="max-width:1200px;">
            <!-- HEADER -->
            <div class="d-flex align-items-center mb-4">
                <img src="images/h-circle-red.svg" width="22" class="me-2">
                <h4 class="fw-bold mb-0">Budget Videos</h4>
            </div>
            <div class="row g-5">

                <!-- LEFT VIDEO AREA -->
                <div class="col-lg-8">

                    <div class="tab-content">

                        <!-- TAB 1 (ACTIVE) -->
                        <div class="tab-pane fade show active" id="video1">
                            <div class="ratio ratio-16x9 mb-3">
                                <iframe src="https://www.youtube.com/embed/BTMjD7_evjE" allowfullscreen>
                                </iframe>
                            </div>
                            <h5 class="fw-bold">
                                Watch: Union Budget 2026 | Key takeaways
                            </h5>
                        </div>

                        <!-- TAB 2 -->
                        <div class="tab-pane fade" id="video2">
                            <div class="ratio ratio-16x9 mb-3">
                                <iframe src="https://www.youtube.com/embed/BTMjD7_evjE" allowfullscreen>
                                </iframe>
                            </div>
                            <h5 class="fw-bold">
                                Decoding Budget 2026–27
                            </h5>
                        </div>

                        <!-- TAB 3 -->
                        <div class="tab-pane fade" id="video3">
                            <div class="ratio ratio-16x9 mb-3">
                                <iframe src="https://www.youtube.com/embed/BTMjD7_evjE" allowfullscreen>
                                </iframe>
                            </div>
                            <h5 class="fw-bold">
                                Big economic priorities explained
                            </h5>
                        </div>

                        <div class="tab-pane fade" id="video4">
                            <div class="ratio ratio-16x9 mb-3">
                                <iframe src="https://www.youtube.com/embed/BTMjD7_evjE" allowfullscreen>
                                </iframe>
                            </div>
                            <h5 class="fw-bold">
                                Decoding Budget 2026–27
                            </h5>
                        </div>

                        <div class="tab-pane fade" id="video5">
                            <div class="ratio ratio-16x9 mb-3">
                                <iframe src="https://www.youtube.com/embed/BTMjD7_evjE" allowfullscreen>
                                </iframe>
                            </div>
                            <h5 class="fw-bold">
                                Decoding Budget 2026–27
                            </h5>
                        </div>

                    </div>

                </div>


                <!-- RIGHT SIDE TABS -->
                <div class="col-lg-4">

                    <div class="custom-scroll" style="max-height:480px; overflow-y:auto; overflow-x:hidden;">


                        <div class="nav flex-column nav-pills">
                            <button class="nav-link active text-white text-start mb-3" data-bs-toggle="pill"
                                data-bs-target="#video1" type="button">

                                <div class="d-flex">
                                    <img src="images/mountain.png" width="98" class="me-3">
                                    <p class="fw-bold small mb-0">
                                        Watch: Union Budget 2026 | Key takeaways
                                    </p>
                                </div>

                            </button>


                            <button class="nav-link text-white text-start mb-3" data-bs-toggle="pill"
                                data-bs-target="#video2" type="button">

                                <div class="d-flex">
                                    <img src="images/mountain.png" width="98" class="me-3">
                                    <p class="fw-bold small mb-0">
                                        Decoding Budget 2026–27
                                    </p>
                                </div>

                            </button>


                            <button class="nav-link text-white text-start mb-3" data-bs-toggle="pill"
                                data-bs-target="#video3" type="button">

                                <div class="d-flex">
                                    <img src="images/mountain.png" width="98" class="me-3">
                                    <p class="fw-bold small mb-0">
                                        Big economic priorities explained
                                    </p>
                                </div>

                            </button>

                            <button class="nav-link text-white text-start mb-3" data-bs-toggle="pill"
                                data-bs-target="#video4" type="button">

                                <div class="d-flex">
                                    <img src="images/mountain.png" width="98" class="me-3">
                                    <p class="fw-bold small mb-0">

                                        Watch: No specific giveaways for poll-bound states in Budget 2026 — The Hindu
                                        Reporters
                                        Explain
                                    </p>
                                </div>

                            </button>

                            <button class="nav-link text-white text-start mb-3" data-bs-toggle="pill"
                                data-bs-target="#video5" type="button">

                                <div class="d-flex">
                                    <img src="images/mountain.png" width="98" class="me-3">
                                    <p class="fw-bold small mb-0">
                                        Watch: Union Budget 2026: what’s in it for textile and MSME?
                                    </p>
                                </div>

                            </button>

                        </div>
                    </div>


                </div>

            </div>
            <!-- VIEW ALL -->
            <div class="text-center mt-4">
                <a href="#" class="text-white text-uppercase fw-bold">
                    VIEW ALL VIDEOS →
                </a>
            </div>
        </div>
    </section>

    @include('partials.toppicks')

    @include('partials.opinion')

@endsection