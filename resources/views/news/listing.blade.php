@extends('layouts.app')
@section('content')
    @include('partials.hero')
    <div class="container mt-4">

        <div class="d-flex align-items-center">

            <!-- Left Lines -->
            <div class="flex-grow-1">
                <hr class="m-0" style="border-top:2px solid #ccc;">
                <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
                <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
            </div>

            <!-- Center Title -->
            <h2 class="mx-4 red fw-bold mb-0">
                @if($subcategory)
                    @if($subcategory->slug == 'national')
                        India
                    @elseif($subcategory->slug == 'international')
                        World
                    @else
                        {{ ucfirst($subcategory->name) }}
                    @endif
                @else
                    {{ ucfirst($category->name) }}
                @endif

            </h2>

            <!-- Right Lines -->
            <div class="flex-grow-1">
                <hr class="m-0" style="border-top:2px solid #ccc;">
                <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
                <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
            </div>

        </div>

    </div>

    <div class="container mt-3">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item">
                    <a href="{{ route('dynamic.route', ['slug' => $category->slug]) }}" 
                        class="text-decoration-none fw-semibold {{ $active_slug == $category->slug ? 'red' : 'text-dark' }}">
                        {{ strtoupper($category->name) }}
                    </a>
                </li>

                @foreach($all_subcategories as $sub)
                    <li class="breadcrumb-item">
                        <a  href="{{ route('dynamic.route', ['slug' => $category->slug, 'param2' => $sub->slug]) }}" 
                        class="text-decoration-none fw-semibold {{ $active_slug == $sub->slug ? 'red' : 'text-dark' }}">
                            {{ strtoupper($sub->name) }}
                        </a>
                    </li>
                @endforeach
            </ol>
        </nav>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @foreach($posts->take(4) as $post)
                <div class="mb-4 border-bottom pb-3">

                    <p class="fw-bold mb-1">
                        @if($post->subcategory)
                            <a href="{{ route('dynamic.route', ['slug' => $category->slug, 'param2' => $post->subcategory->slug]) }}" class="red text-uppercase">
                                {{ $post->subcategory->name }}
                            </a>
                        @else
                            <a href="{{ route('dynamic.route', ['slug' => $category->slug]) }}" class="red text-uppercase">
                                {{ $category->name }}
                            </a>
                        @endif
                    </p>

                    <p class="mb-1">
                        <a href="{{ $post->subcategory 
                                ? route('dynamic.route', ['slug' => $category->slug, 'param2' => $post->subcategory->slug, 'param3' => $post->slug]) 
                                : route('dynamic.route', ['slug' => $category->slug, 'param2' => $post->slug]) }}" 
                        class="txt">

                            {{ $post->title }}

                        </a>
                    </p>

                    <p class="txt mb-0" style="font-size:10px;">
                        <span class="smll text-uppercase">
                            {{ $post->author ?? 'Staff Reporter' }}
                        </span>
                    </p>

                </div>
                @endforeach

                <a href="#">
                    <img src="{{ asset('img/malvika.png') }}" class="img-fluid mt-3">
                </a>
            </div>

            <div class="col-lg-6">

                {{-- Featured Post --}}
                @if($posts->count() > 0)
                    @php $featured = $posts->first(); @endphp

                    <div class="position-relative mb-4">
                        @php
                            $link = $featured->subcategory 
                                ? route('dynamic.route', [$category->slug, $featured->subcategory->slug, $featured->slug])
                                : route('dynamic.route', [$category->slug, $featured->slug]);
                        @endphp

                            <a href="{{ $link }}">
                                <img src="{{ asset('storage/' . $featured->thumbnail) }}" 
                                    class="img-fluid w-100 rounded" 
                                    alt="{{ $featured->title }}">
                            </a>

                        <div class="position-absolute bottom-0 start-0 w-100 p-4"
                            style="background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">

                            <p class="fw-bold mb-2 text-uppercase small">
                                <a href="{{ route('dynamic.route', ['slug' => $category->slug]) }}" class="red text-decoration-none">
                                    {{ $category->name }}
                                </a>
                            </p>

                            <h2 class="text-white fw-bold">
                                <a href="{{ url($link) }}" class="text-white text-decoration-none">
                                    {{ strtoupper($featured->title) }}
                                </a>
                            </h2>

                            <p class="text-white small mt-2">
                                {{ Str::limit($featured->short_description,150) }}
                            </p>

                        </div>
                    </div>
                @endif


                {{-- Live Post --}}
               @if($live_post)

                <div class="d-flex gap-3 align-items-start border-top pt-3">

                    <div class="position-relative" style="width:320px;">
                       <a href="{{ route('dynamic.route', [$live_post->category->slug, $live_post->subcategory?->slug, $live_post->slug]) }}">
                            <img src="{{ asset('storage/' . $live_post->thumbnail) }}" 
                                class="img-fluid rounded"
                                alt="{{ $live_post->title }}">
                        </a>

                        <span class="position-absolute top-0 start-0 badge bg-danger px-2 py-1">
                            🔴 LIVE
                        </span>
                    </div>

                    <div>

                        <p class="fw-bold text-uppercase small mb-1">
                            <a href="{{ route('dynamic.route', ['slug' => $category->slug]) }}" class="red text-decoration-none">
                                {{ $category->name }}
                            </a>
                        </p>

                        <h5 class="fw-bold mb-1">
                            <a href="{{ $live_post->subcategory 
                                    ? route('dynamic.route', [$category->slug, $live_post->subcategory->slug, $live_post->slug]) 
                                    : route('dynamic.route', [$category->slug, $live_post->slug]) }}" 
                            class="text-dark text-decoration-none">

                                <span class="badge bg-danger me-1">LIVE</span>
                                {{ $live_post->title }}

                            </a>
                        </h5>

                        <p class="text-muted small mb-0">
                            {{ Str::limit($live_post->short_description,90) }}
                        </p>

                    </div>

                </div>

                @endif

            </div>

            <div class="col-lg-3">
                <div class="mb-4 text-center">
                    <img src="{{ asset('images/sugam.png') }}" class="img-fluid">
                    <p class="small text-uppercase text-muted mt-2">Advertisement</p>
                </div>

                <div class="position-sticky" style="top: 100px;">
                    <div class="d-flex align-items-center my-3">
                        <div class="flex-grow-1 me-3">
                            <div class="border-top border-2 mb-1"></div>
                            <div class="border-top border-2 mb-1"></div>
                            <div class="border-top border-2"></div>
                        </div>
                        <h5 class="fw-bold red mb-0 px-2" style="white-space: nowrap;">Most Popular</h5>
                        <div class="flex-grow-1 ms-3">
                            <div class="border-top border-2 mb-1"></div>
                            <div class="border-top border-2 mb-1"></div>
                            <div class="border-top border-2"></div>
                        </div>
                    </div>

                    @foreach($popular as $pop)

                        <div class="d-flex py-3 border-bottom">

                           <a href="{{ route('dynamic.route', [$pop->category->slug, $pop->subcategory?->slug, $pop->slug]) }}">
                                <img src="{{ asset('storage/' . $pop->thumbnail) }}" 
                                    width="95" height="70" 
                                    class="me-3 object-fit-cover">
                            </a>

                            <a href="{{ route('dynamic.route', [$pop->category->slug, $pop->subcategory?->slug, $pop->slug]) }}" 
                            class="txt small fw-semibold text-decoration-none">

                                {{ $pop->title }}

                            </a>

                        </div>

                        @endforeach
                </div>
            </div>

            @include('partials.topent')

            <div class="row mt-5 pt-4 border-top">
                <div class="col-lg-3">
                    <img src="{{ asset('images/sugam.png') }}" class="img-fluid" alt="Advertisement">
                </div>

                <div class="col-lg-5 more-stories">

                    <h4 class="red fw-bold mb-4">
                        More stories from {{ $category->name }}
                    </h4>

                    @foreach($posts as $post)

                   <div class="d-flex align-items-start mb-4 pb-4 border-bottom">
                        
                        {{-- Image Link --}}
                        <a href="{{ route('dynamic.route', [$post->category->slug, $post->subcategory?->slug, $post->slug]) }}">
                            <img src="{{ asset('storage/' . $post->thumbnail) }}"
                                width="110"
                                height="85"
                                class="me-3 object-fit-cover">
                        </a>

                        <div>
                            {{-- Title Link --}}
                            <p class="fs-5 mb-1">
                                <a href="{{ route('dynamic.route', [$post->category->slug, $post->subcategory?->slug, $post->slug]) }}" 
                                class="txt text-decoration-none">
                                    {{ $post->title }}
                                </a>
                            </p>

                            <p style="font-size:9px;" class="text-muted">
                                {{ $post->created_at->format('M d, Y') }} |
                                {{ $post->author ?? 'PTI' }}
                            </p>
                        </div>
                    </div>

                    @endforeach

                    <div class="d-flex justify-content-center mt-5">
                        {{ $posts->links('pagination::bootstrap-4') }}
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="text-center my-4">
                        <img src="{{ asset('img/sugam2.png') }}" class="img-fluid mx-auto d-block">
                        <p class="text-uppercase text-muted mt-2 mb-0" style="font-size:11px;">Advertisement</p>
                    </div>

                    <h4 class="red fw-bold mb-4">Latest News</h4>
                    <div class="latest-news">

                       @foreach($latest_news as $latest)
                            @php
                                $latestUrl = $latest->subcategory 
                                    ? route('dynamic.route', [$latest->category->slug, $latest->subcategory->slug, $latest->slug])
                                    : route('dynamic.route', [$latest->category->slug, $latest->slug]);
                            @endphp

                            <div class="timeline-item @if($loop->first) active @endif">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <p class="small text-muted mb-1">
                                        {{ $latest->created_at->diffForHumans() }}
                                    </p>
                                    <p class="mb-0">
                                        <a href="{{ $latestUrl }}" class="txt text-decoration-none">
                                            {{ $latest->title }}
                                        </a>
                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection