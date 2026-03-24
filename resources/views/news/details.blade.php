
@extends('layouts.add')


@section('content')
@include('partials.header')
@include('partials.hero')


<div class="container my-4">

    <div class="text-uppercase small text-muted mb-3">
        <a href="{{ url('/') }}" class="text-decoration-none text-muted">Home</a> /
        
        @if(isset($category))
            <a href="{{ url($category->slug) }}" 
            class="text-decoration-none {{ !isset($subcategory) ? 'text-danger' : 'text-muted' }}">
            {{ $category->name }}
            </a>
        @endif

        @if(isset($subcategory))
            / <span class="text-danger">{{ $subcategory->name }}</span>
        @endif
    </div>

    <div class="row">

        <!-- LEFT CONTENT -->
        <div class="col-lg-8">

            <!-- Headline -->
            <h1 class="fw-bold" style="font-size:42px; line-height:1.2;">
               {{ $post->title }}
            </h1>


            <!-- Date -->
            <p class="small mt-3">
                <span class="text-danger fw-bold">Updated</span> –
                {{ $post->updated_at->format('F d, Y h:i a') }} IST - {{ strtoupper($post->location ?? 'DHAKA') }}
            </p>

            <!-- Author -->
            <div class="d-flex align-items-center mb-4">
                <img src="{{ asset('images/writer.png') }}" width="40" height="40" class="rounded-circle me-2">
                <span class="fw-semibold">{{ $post->user->name ?? 'KALLOL BHATTACHERJEE' }}</span>
            </div>


            <!-- Featured Image -->
            <div class="article-image mb-3">
                <img src="{{ Storage::url($post->thumbnail) }}" class="img-fluid w-100">                
            </div>
            <!-- Article Content -->
            <div class="article-content ms-auto">
                {!! $post->content !!}
            </div>
            <div class="qa-section mt-5 border-top pt-4">
                <h3 class="fw-bold mb-4">Questions & Answers</h3>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                {{-- Questions List --}}
                <div class="mb-5">
                    @forelse($post->questions()->whereNull('parent_id')->latest()->get() as $q)
                        <div class="mb-4 border-bottom pb-3">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <h6 class="fw-bold mb-1 text-primary">Q: {{ $q->content }}</h6>
                                    <p class="small text-muted mb-2">Asked by <strong>{{ $q->user_name }}</strong> • {{ $q->created_at->diffForHumans() }}</p>
                                    
                                    {{-- Reply Button --}}
                                    <button class="btn btn-sm btn-outline-secondary py-0 mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#replyForm{{ $q->id }}">
                                        Reply
                                    </button>

                                    {{-- Reply Form (Hidden by default) --}}
                                    <div class="collapse mb-3" id="replyForm{{ $q->id }}">
                                        <form action="{{ route('questions.store') }}" method="POST" class="bg-light p-3 rounded">
                                            @csrf
                                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                                            <input type="hidden" name="parent_id" value="{{ $q->id }}">
                                            <div class="row g-2">
                                                <div class="col-md-4">
                                                    <input type="text" name="user_name" class="form-control form-control-sm" placeholder="Your Name" required>
                                                </div>
                                                <div class="col-md-8">
                                                    <textarea name="content" class="form-control form-control-sm" rows="1" placeholder="Write a reply..." required></textarea>
                                                </div>
                                                <div class="col-12 text-end">
                                                    <button type="submit" class="btn btn-danger btn-sm">Post Reply</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    {{-- Display Replies --}}
                                    <div class="replies ms-4 ps-3 border-start">
                                        @foreach($q->replies as $reply)
                                            <div class="mb-2 p-2 rounded bg-white shadow-sm border">
                                                <p class="mb-1" style="font-size: 0.95rem;">{{ $reply->content }}</p>
                                                <p class="mb-0" style="font-size: 0.8rem; color: #666;">
                                                    By <strong>{{ $reply->user_name }}</strong> • {{ $reply->created_at->diffForHumans() }}
                                                </p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-muted italic">No questions yet. Be the first to ask!</p>
                    @endforelse
                </div>

                {{-- Main Question Form --}}
                <div class="card p-4 border-0 bg-dark text-white">
                    <h5 class="mb-3">Have a Question?</h5>
                    <form action="{{ route('questions.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <div class="mb-3">
                            <input type="text" name="user_name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <textarea name="content" rows="3" class="form-control" placeholder="Type your question here..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger px-4 rounded-pill">Submit Question</button>
                    </form>
                </div>
            </div>
        </div>


        <!-- RIGHT SIDEBAR -->
        <div class="col-lg-4">

            <!-- Advertisement -->
            <div class="mb-4 text-center">
                <img src="{{ asset('images/sugam.png') }}" class="img-fluid">
                <p class="small text-uppercase text-muted mt-2">Advertisement</p>
            </div>

            <!-- Most Popular -->
            <div class="position-sticky" style="top: 100px;">

                <div class="d-flex align-items-center my-3">
                    <div class="flex-grow-1 me-3">
                        <div class="border-top border-2 mb-1"></div>
                        <div class="border-top border-2 mb-1"></div>
                        <div class="border-top border-2 mb-1"></div>
                        <div class="border-top border-2 mb-1"></div>
                        <div class="border-top border-2"></div>
                    </div>

                    <h5 class="fw-bold text-danger mb-0 px-2" style="font-size:22px; white-space:nowrap;">
                        Most Popular
                    </h5>

                    <div class="flex-grow-1 ms-3">
                        <div class="border-top border-2 mb-1"></div>
                        <div class="border-top border-2 mb-1"></div>
                        <div class="border-top border-2 mb-1"></div>
                        <div class="border-top border-2 mb-1"></div>
                        <div class="border-top border-2"></div>
                    </div>
                </div>

                @if(isset($popular) && $popular->count() > 0)
                    @foreach($popular as $item)
                        <div class="d-flex py-3 border-bottom">
                            {{-- Thumbnail --}}
                            <img src="{{ Storage::url($item->thumbnail) }}" width="95" height="70" class="me-3 object-fit-cover" alt="{{ $item->title }}">

                            @php
                                // Dynamic Route Logic: Category, Subcategory aur Post Slug ke hisab se
                                $params = ['slug' => $item->category->slug];
                                
                                if ($item->subcategory) {
                                    // URL: /category/subcategory/post-slug
                                    $params['param2'] = $item->subcategory->slug;
                                    $params['param3'] = $item->slug;
                                } else {
                                    // URL: /category/post-slug
                                    $params['param2'] = $item->slug;
                                }
                            @endphp

                            {{-- Title with Dynamic Link --}}
                            <a href="{{ route('dynamic.route', $params) }}" class="txt text-decoration-none text-dark fw-bold" style="font-size: 15px; line-height: 1.3;">
                                {{ $item->title }}
                            </a>
                        </div>
                    @endforeach
                @else
                    <p class="text-muted small">No popular news found.</p>
                @endif

            </div>

        </div>

    </div>

    <div class="text-center my-5">
        <img src="{{ asset('images/add2.png') }}" class="img-fluid mx-auto d-block" style="max-width: 900px;">

        <p class="small text-uppercase text-muted mt-3">
            Advertisement
        </p>
    </div>
</div>

<!-- Sponsored Ads Section -->
<div class="container my-5">


    <div class="row g-4">


        <div class="col-lg-4">
            <div class="card border-0">
                <img src="{{ asset('images/toro.png') }}" class="img-fluid rounded">
                <div class="mt-2">
                    <a href="#" class="txt">
                        eToro Just Landed in Singapore and It’s...
                    </a>
                    <div class="d-flex justify-content-between align-items-center">

                        <a href="#" class="txt  small text-muted mb-0">
                            eToro Market Updates | Sponsored
                        </a>

                        <a href="#" class="btn btn-outline-dark btn-sm rounded-pill">
                            Learn More
                        </a>

                    </div>

                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="card border-0">
                <img src="{{ asset('images/earpods.png') }}" class="img-fluid rounded">
                <div class="mt-2">
                    <a href="#" class="txt">
                        AI-powered hearing aid at surprising cost.
                    </a>
                    <div class="d-flex justify-content-between align-items-center">

                        <a href="#" class="txt  small text-muted mb-0">
                            Hearing Aids | Sponsored
                        </a>

                        <a href="#" class="btn btn-outline-dark btn-sm rounded-pill">
                            Learn More
                        </a>

                    </div>

                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="card border-0">
                <img src="{{ asset('images/india.png') }}" class="img-fluid rounded">
                <div class="mt-2">
                    <a href="#" class="txt">
                        Start Forex Trading. Get a 100% Welcome...
                    </a>
                    <div class="d-flex justify-content-between align-items-center">

                        <a href="#" class="txt  small text-muted mb-0">
                            iFOREX | Sponsored
                        </a>

                        <a href="#" class="btn btn-outline-dark btn-sm rounded-pill">
                            Sign Up
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="row g-4 mt-4">

    <!-- First Column -->
    <div class="col-lg-6">
        <img src="{{ asset('images/copper.png') }}" class="img-fluid rounded">
        <div class="mt-2">
            <a href="#" class="txt">
                Copper Stem Water Enhancer – The secret to Indians' health
            </a>

            <div class="d-flex justify-content-between align-items-center">
                <a href="#" class="txt  small text-muted mb-0">
                    NS | Sponsored
                </a>

                <a href="#" class="btn btn-outline-dark btn-sm rounded-pill">
                    Learn More
                </a>
            </div>
        </div>
    </div>

    <!-- Second Column -->
    <div class="col-lg-6">
        <img src="{{ asset('images/pova.png') }}" class="img-fluid rounded">
        <div class="mt-2">
            <a href="#" class="txt">
                Pova Curve 2: Built for Motion. Built for Power.
            </a>

            <div class="d-flex justify-content-between align-items-center">
                <a href="#" class="txt  small text-muted mb-0">
                    TECNO Mobile | Sponsored
                </a>

                <a href="#" class="btn btn-outline-dark btn-sm rounded-pill">
                    Learn More
                </a>
            </div>
        </div>
    </div>

</div>

<!--this is secont container--->
<div class="container my-5">


    <div class="row g-4">
        <div class="col-lg-4">
            <div class="card border-0">
                <img src="{{ asset('images/bull.png') }}" class="img-fluid rounded">
                <div class="mt-2">
                    <a href="#" class="txt">
                        eToro Just Landed in Singapore and It’s...
                    </a>
                    <div class="d-flex justify-content-between align-items-center">

                        <p class="small text-muted mb-0">
                            eToro Market Updates | Sponsored
                        </p>

                        <a href="#" class="btn btn-outline-dark btn-sm rounded-pill">
                            Learn More
                        </a>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card border-0">
                <img src="{{ asset('images/stockmarket.png') }}" class="img-fluid rounded">
                <div class="mt-2">
                    <a href="#" class="txt">
                        AI-powered hearing aid at surprising cost.
                    </a>
                    <div class="d-flex justify-content-between align-items-center">

                        <p class="small text-muted mb-0">
                            Hearing Aids | Sponsored
                        </p>

                        <a href="#" class="btn btn-outline-dark btn-sm rounded-pill">
                            Learn More
                        </a>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card border-0">
                <img src="{{ asset('images/pova2.png') }}" class="img-fluid rounded">
                <div class="mt-2">
                    <a href="#" class="txt">
                        Start Forex Trading. Get a 100% Welcome...
                    </a>
                    <div class="d-flex justify-content-between align-items-center">

                        <p class="small text-muted mb-0">
                            iFOREX | Sponsored
                        </p>

                        <a href="#" class="btn btn-outline-dark btn-sm rounded-pill">
                            Sign Up
                        </a>

                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="row g-4 mt-4">

        <!-- First Column -->
        <div class="col-lg-6">
            <img src="{{ asset('images/smartwatch.png') }}" class="img-fluid rounded">
            <div class="mt-2">
                <a href="#" class="txt">
                    Copper Stem Water Enhancer – The secret to Indians' health
                </a>

                <div class="d-flex justify-content-between align-items-center">
                    <p class="small text-muted mb-0">
                        NS | Sponsored
                    </p>

                    <a href="#" class="btn btn-outline-dark btn-sm rounded-pill">
                        Learn More
                    </a>
                </div>
            </div>
        </div>

        <!-- Second Column -->
        <div class="col-lg-6">
            <img src="{{ asset('images/earbuds.png') }}" class="img-fluid rounded">
            <div class="mt-2">
                <a href="#" class="txt">
                    Pova Curve 2: Built for Motion. Built for Power.
                </a>

                <div class="d-flex justify-content-between align-items-center">
                    <p class="small text-muted mb-0">
                        TECNO Mobile | Sponsored
                    </p>

                    <a href="#" class="btn btn-outline-dark btn-sm rounded-pill">
                        Learn More
                    </a>
                </div>
            </div>
        </div>

    </div>

</div>

<!--this is 3 container-->

<div class="container my-5">


    <div class="row g-4">


        <div class="col-lg-4">
            <div class="card border-0">
                <img src="{{ asset('images/health.png') }}" class="img-fluid rounded">
                <div class="mt-2">
                    <a href="#" class="txt">
                        eToro Just Landed in Singapore and It’s...
                    </a>
                    <div class="d-flex justify-content-between align-items-center">

                        <p class="small text-muted mb-0">
                            eToro Market Updates | Sponsored
                        </p>

                        <a href="#" class="btn btn-outline-dark btn-sm rounded-pill">
                            Learn More
                        </a>

                    </div>

                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="card border-0">
                <img src="{{ asset('images/monitor.png') }}" class="img-fluid rounded">
                <div class="mt-2">
                    <a href="#" class="txt">
                        AI-powered hearing aid at surprising cost.
                    </a>
                    <div class="d-flex justify-content-between align-items-center">

                        <p class="small text-muted mb-0">
                            Hearing Aids | Sponsored
                        </p>

                        <a href="#" class="btn btn-outline-dark btn-sm rounded-pill">
                            Learn More
                        </a>

                    </div>

                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="card border-0">
                <img src="{{ asset('images/honda.png') }}" class="img-fluid rounded">
                <div class="mt-2">
                    <a href="#" class="txt">
                        Start Forex Trading. Get a 100% Welcome...
                    </a>
                    <div class="d-flex justify-content-between align-items-center">

                        <p class="small text-muted mb-0">
                            iFOREX | Sponsored
                        </p>

                        <a href="#" class="btn btn-outline-dark btn-sm rounded-pill">
                            Sign Up
                        </a>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="row g-4 mt-4">

    <!-- First Column -->
    <div class="col-lg-6">
        <img src="{{ asset('images/bjpleader.png') }}" class="img-fluid rounded">
        <div class="mt-2">
            <a href="#" class="txt">
                Copper Stem Water Enhancer – The secret to Indians' health
            </a>

            <div class="d-flex justify-content-between align-items-center">
                <p class="small text-muted mb-0">
                    The Hindu
                </p>


            </div>
        </div>
    </div>

    <!-- Second Column -->
    <div class="col-lg-6">
        <img src="{{ asset('images/rajthackrey.png') }}" class="img-fluid rounded">
        <div class="mt-2">
            <a href="#" class="txt">
                Pova Curve 2: Built for Motion. Built for Power.
            </a>

            <div class="d-flex justify-content-between align-items-center">
                <p class="small text-muted mb-0">
                    The Hindu
                </p>


            </div>
        </div>
    </div>

</div>


<!--this is container 4-->
<div class="container my-5">


    <div class="row g-4">


        <div class="col-lg-4">
            <div class="card border-0">
                <img src="{{ asset('images/honda2.png') }}" class="img-fluid rounded">
                <div class="mt-2">
                    <a href="#" class="txt">
                        eToro Just Landed in Singapore and It’s...
                    </a>
                    <div class="d-flex justify-content-between align-items-center">

                        <p class="small text-muted mb-0">
                            eToro Market Updates | Sponsored
                        </p>

                        <a href="#" class="btn btn-outline-dark btn-sm rounded-pill">
                            Learn More
                        </a>

                    </div>

                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="card border-0">
                <img src="{{ asset('images/dubai.png') }}" class="img-fluid rounded">
                <div class="mt-2">
                    <a href="#" class="txt">
                        AI-powered hearing aid at surprising cost.
                    </a>
                    <div class="d-flex justify-content-between align-items-center">

                        <p class="small text-muted mb-0">
                            Hearing Aids | Sponsored
                        </p>

                        <a href="#" class="btn btn-outline-dark btn-sm rounded-pill">
                            Learn More
                        </a>

                    </div>

                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="card border-0">
                <img src="{{ asset('images/KN.png') }}" class="img-fluid rounded">
                <div class="mt-2">
                    <a href="#" class="txt">
                        Start Forex Trading. Get a 100% Welcome...
                    </a>
                    <div class="d-flex justify-content-between align-items-center">

                        <p class="small text-muted mb-0">
                            iFOREX | Sponsored
                        </p>

                        <a href="#" class="btn btn-outline-dark btn-sm rounded-pill">
                            Sign Up
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row g-4 mt-4">

        <!-- First Column -->
        <div class="col-lg-6">
            <img src="{{ asset('images/gbs.png') }}" class="img-fluid rounded">
            <div class="mt-2">
                <a href="#" class="txt">
                    Copper Stem Water Enhancer – The secret to Indians' health
                </a>

                <div class="d-flex justify-content-between align-items-center">
                    <p class="small text-muted mb-0">
                        The Hindu
                    </p>


                </div>
            </div>
        </div>

        <!-- Second Column -->
        <div class="col-lg-6">
            <img src="{{ asset('images/bigbull.png') }}" class="img-fluid rounded">
            <div class="mt-2">
                <a href="#" class="txt">
                    Pova Curve 2: Built for Motion. Built for Power.
                </a>

                <div class="d-flex justify-content-between align-items-center">
                    <p class="small text-muted mb-0">
                        The Hindu
                    </p>


                </div>
            </div>
        </div>

    </div>

    <!--this is four container-->
    <div class="row g-4 mt-4">

        <!-- First Column -->
        <div class="col-lg-6">
            <img src="{{ asset('images/vande.png') }}" class="img-fluid rounded">
            <div class="mt-2">
                <a href="#" class="txt">
                    Copper Stem Water Enhancer – The secret to Indians' health
                </a>

                <div class="d-flex justify-content-between align-items-center">
                    <p class="small text-muted mb-0">
                        The Hindu
                    </p>


                </div>
            </div>
        </div>

        <!-- Second Column -->
        <div class="col-lg-6">
            <img src="{{ asset('images/seperatist.png') }}" class="img-fluid rounded">
            <div class="mt-2">
                <a href="#" class="txt">
                    Pova Curve 2: Built for Motion. Built for Power.
                </a>

                <div class="d-flex justify-content-between align-items-center">
                    <p class="small text-muted mb-0">
                        The Hindu
                    </p>


                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-0">
                <img src="{{ asset('images/playwar.png') }}" class="img-fluid rounded">
                <div class="mt-2">
                    <a href="#" class="txt">
                        eToro Just Landed in Singapore and It’s...
                    </a>
                    <div class="d-flex justify-content-between align-items-center">

                        <p class="small text-muted mb-0">
                            eToro Market Updates | Sponsored
                        </p>

                        <a href="#" class="btn btn-outline-dark btn-sm rounded-pill">
                            Learn More
                        </a>

                    </div>

                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="card border-0">
                <img src="{{ asset('images/icecream.png') }}" class="img-fluid rounded">
                <div class="mt-2">
                    <a href="#" class="txt">
                        AI-powered hearing aid at surprising cost.
                    </a>
                    <div class="d-flex justify-content-between align-items-center">

                        <p class="small text-muted mb-0">
                            Hearing Aids | Sponsored
                        </p>

                        <a href="#" class="btn btn-outline-dark btn-sm rounded-pill">
                            Learn More
                        </a>

                    </div>

                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="card border-0">
                <img src="{{ asset('images/clients.png') }}" class="img-fluid rounded">
                <div class="mt-2">
                    <a href="#" class="txt">
                        Start Forex Trading. Get a 100% Welcome...
                    </a>
                    <div class="d-flex justify-content-between align-items-center">

                        <p class="small text-muted mb-0">
                            iFOREX | Sponsored
                        </p>

                        <a href="#" class="btn btn-outline-dark btn-sm rounded-pill">
                            Sign Up
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@include('partials.missed')
@include('partials.footer')

@endsection