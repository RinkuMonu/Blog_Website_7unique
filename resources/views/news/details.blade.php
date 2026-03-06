
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
                    <a href="{{ route('english.news') }}" class="txt">
                        eToro Just Landed in Singapore and It’s...
                    </a>
                    <div class="d-flex justify-content-between align-items-center">

                        <a href="{{ route('english.news') }}" class="txt  small text-muted mb-0">
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
                    <a href="{{ route('english.news') }}" class="txt">
                        AI-powered hearing aid at surprising cost.
                    </a>
                    <div class="d-flex justify-content-between align-items-center">

                        <a href="{{ route('english.news') }}" class="txt  small text-muted mb-0">
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
                    <a href="{{ route('english.news') }}" class="txt">
                        Start Forex Trading. Get a 100% Welcome...
                    </a>
                    <div class="d-flex justify-content-between align-items-center">

                        <a href="{{ route('english.news') }}" class="txt  small text-muted mb-0">
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
            <a href="{{ route('english.news') }}" class="txt">
                Copper Stem Water Enhancer – The secret to Indians' health
            </a>

            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('english.news') }}" class="txt  small text-muted mb-0">
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
            <a href="{{ route('english.news') }}" class="txt">
                Pova Curve 2: Built for Motion. Built for Power.
            </a>

            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('english.news') }}" class="txt  small text-muted mb-0">
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
                    <a href="{{ route('english.news') }}" class="txt">
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
                    <a href="{{ route('english.news') }}" class="txt">
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
                    <a href="{{ route('english.news') }}" class="txt">
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
                <a href="{{ route('english.news') }}" class="txt">
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
                <a href="{{ route('english.news') }}" class="txt">
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
                    <a href="{{ route('english.news') }}" class="txt">
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
                    <a href="{{ route('english.news') }}" class="txt">
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
                    <a href="{{ route('english.news') }}" class="txt">
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
            <a href="{{ route('english.news') }}" class="txt">
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
            <a href="{{ route('english.news') }}" class="txt">
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
                    <a href="{{ route('english.news') }}" class="txt">
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
                    <a href="{{ route('english.news') }}" class="txt">
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
                    <a href="{{ route('english.news') }}" class="txt">
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
                <a href="{{ route('english.news') }}" class="txt">
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
                <a href="{{ route('english.news') }}" class="txt">
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
                <a href="{{ route('english.news') }}" class="txt">
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
                <a href="{{ route('english.news') }}" class="txt">
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
                    <a href="{{ route('english.news') }}" class="txt">
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
                    <a href="{{ route('english.news') }}" class="txt">
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
                    <a href="{{ route('english.news') }}" class="txt">
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