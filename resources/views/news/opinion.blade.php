<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    @extends('layouts.add')


    @section('content')
    @include('partials.header')
    @include('partials.hero')


    @section('content')


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
                Opinion
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
                    <a href="#" class="text-dark text-decoration-none fw-semibold">
                        ENTERTAINMENT
                    </a>
                </li>

                <li class="breadcrumb-item">
                    <a href="#" class="text-dark text-decoration-none fw-semibold">
                        ART
                    </a>
                </li>

                <li class="breadcrumb-item">
                    <a href="#" class="text-dark text-decoration-none fw-semibold">
                        DANCE
                    </a>
                </li>

                <li class="breadcrumb-item active fw-semibold" aria-current="page" style="color:#c40000;">
                    MOVIES
                </li>

                <li class="breadcrumb-item">
                    <a href="#" class="text-dark text-decoration-none fw-semibold">
                        MUSIC
                    </a>
                </li>

                <li class="breadcrumb-item">
                    <a href="#" class="text-dark text-decoration-none fw-semibold">
                        REVIEWS
                    </a>
                </li>

                <li class="breadcrumb-item">
                    <a href="#" class="text-dark text-decoration-none fw-semibold">
                        THEATRE
                    </a>
                </li>

            </ol>
        </nav>
    </div>


    <div class="container my-5">
    <div class="row">

        <!-- LEFT + CENTER CONTENT -->
        <div class="col-lg-9">

            <!-- TOP SECTION -->
            <div class="row align-items-start border-bottom pb-4 mb-4">

                <!-- LEFT CREST COLUMN -->
                <div class="col-md-4 text-center border-end">
                    <img src="{{ asset('img/hindi.png') }}" class="img-fluid mb-3" style="max-height:80px;">
                    <p class="small text-uppercase mb-2">Read our editorials in</p>
                    <button class="btn btn-outline-secondary btn-sm rounded-pill">
                        हिंदी
                    </button>
                </div>

                <!-- RIGHT HEADLINES -->
                <div class="col-md-8">

                    <div class="mb-4 border-bottom pb-3">
                        <h3 class="fw-bold" style="font-family:'Merriweather', serif;">
                            Poll sop: On Tamil Nadu and cash benefits
                        </h3>
                        <p class="mb-0">
                            The Election Commission of India’s proven bias on model code seems to have forced Tamil Nadu’s hand
                        </p>
                    </div>

                    <div>
                        <h2 class="fw-bold" style="font-family:'Merriweather', serif;">
                            Hot air: On Donald Trump and environmental issues
                        </h2>
                        <p class="mb-0">
                            Donald Trump is trying to turn back the clock on environmental issues
                        </p>
                    </div>

                </div>
            </div>


            <!-- PREMIUM GRID SECTION -->
            <div class="row">

                <!-- LEFT COLUMN -->
                <div class="col-md-4 border-end">

                    <img src="{{ asset('img/opinion.png') }}" class="img-fluid mb-3">

                    <p class="fw-bold small text-warning mb-1">
                        TH PREMIUM
                    </p>

                    <h5 style="font-family:'Merriweather', serif;">
                        Bridging a divide with an ‘Indian Scientific Service’
                    </h5>

                    <p class="small text-uppercase text-muted">
                        P. RAGAVAN
                    </p>

                </div>


                <!-- MIDDLE COLUMN -->
                <div class="col-md-4 border-end">

                    <p class="fw-bold small text-warning mb-1">
                        TH PREMIUM
                    </p>

                    <h5 style="font-family:'Merriweather', serif;">
                        A common framework to build trust in AI in Asia
                    </h5>
                    <p class="small text-uppercase text-muted">
                        ARUN TEJA POLCUMPALLY
                    </p>

                    <hr>

                    <p class="fw-bold small text-warning mb-1">
                        TH PREMIUM
                    </p>

                    <h5 style="font-family:'Merriweather', serif;">
                        We need fiscal prudence during elections
                    </h5>
                    <p class="small text-uppercase text-muted">
                        T. RAMAKRISHNAN
                    </p>

                </div>


                <!-- RIGHT COLUMN -->
                <div class="col-md-4">

                    <h5 style="font-family:'Merriweather', serif;">
                        Fishing communities as guardians of marine life | Green Humour by Rohan Chakravarty
                    </h5>

                    <img src="{{ asset('img/opinion2.svg') }}" class="img-fluid mt-3">

                </div>

            </div>

        </div>


        <!-- RIGHT SIDEBAR (KEEP EMPTY – YOUR POPULAR SECTION ALREADY EXISTS) -->
       <div class="col-lg-3">

            <div class="mb-4 text-center">
                <img src="{{ asset('images/sugam.png') }}" class="img-fluid">
                <p class="small text-uppercase text-muted mt-2">Advertisement</p>
            </div>

            <div class="position-sticky" style="top: 100px;">

                <!-- Title With Decorative Lines -->
                <div class="d-flex align-items-center my-3">

                    <!-- Left Lines -->
                    <div class="flex-grow-1 me-3">
                        <div class="border-top border-2 mb-1"></div>
                        <div class="border-top border-2 mb-1"></div>
                        <div class="border-top border-2"></div>
                    </div>

                    <!-- Title -->
                    <h5 class="fw-bold text-danger mb-0 px-2" style="white-space: nowrap;">
                        Most Popular
                    </h5>

                    <!-- Right Lines -->
                    <div class="flex-grow-1 ms-3">
                        <div class="border-top border-2 mb-1"></div>
                        <div class="border-top border-2 mb-1"></div>
                        <div class="border-top border-2"></div>
                    </div>

                </div>


                <!-- News Item 1 -->
                <div class="d-flex py-3 border-bottom">
                    <img src="{{ asset('img/thumb1.png') }}" width="95" height="70" class="me-3 object-fit-cover">

                    <a href="{{ route('english.news') }}" class="text-dark text-decoration-none small fw-semibold">
                        T20 World Cup: India vs Pakistan match highlights
                    </a>
                </div>


                <!-- News Item 2 -->
                <div class="d-flex py-3 border-bottom">
                    <img src="{{ asset('img/thumb2.png') }}" width="95" height="70" class="me-3 object-fit-cover">

                    <a href="{{ route('english.news') }}" class="text-dark text-decoration-none small fw-semibold">
                        Iran open to compromises to reach nuclear deal
                    </a>
                </div>


                <!-- News Item 3 -->
                <div class="d-flex py-3 border-bottom">
                    <img src="{{ asset('img/thumb3.png') }}" width="95" height="70" class="me-3 object-fit-cover">

                    <a href="{{ route('english.news') }}" class="text-dark text-decoration-none small fw-semibold">
                        PM Modi declines invitation to ceremony
                    </a>
                </div>



            </div>
        </div>
    </div>


    <div class="container my-5">

    <!-- Section Title -->
    <div class="d-flex align-items-center mb-4">
        <div class="flex-grow-1">
            <div class="border-top border-2"></div>
        </div>

        <h2 class="text-danger fw-bold mx-4"
            style="font-family:'Playfair Display', serif;">
            Comment
        </h2>

        <div class="flex-grow-1">
            <div class="border-top border-2"></div>
        </div>
    </div>


    <div class="row">

        <!-- COLUMN 1 -->
        <div class="col-lg-3 border-end">

            <div class="position-relative mb-3">
                <img src="{{ asset('img/comment1.png') }}" class="img-fluid w-100">

                <!-- TH Play Icon -->
                <div class="position-absolute bottom-0 start-0 m-3">
                    <span class="badge bg-dark rounded-circle p-2">TH</span>
                </div>
            </div>

            <p class="small fw-bold text-uppercase text-warning mb-1">
                TH PREMIUM
            </p>

            <h5 style="font-family:'Merriweather', serif;">
                India tested, from U.S. sanctions to one-sided trade deal
            </h5>

            <p class="small text-uppercase text-muted">
                SUSHANI HAIDAR
            </p>

        </div>


        <!-- COLUMN 2 -->
        <div class="col-lg-3 border-end">

            <p class="small fw-bold text-uppercase text-warning mb-1">
                TH PREMIUM
            </p>

            <h5 style="font-family:'Merriweather', serif;">
                The UAE–India corridor is sparking a growth story
            </h5>

            <p class="small text-uppercase text-muted mb-4">
                BADR JAFAR
            </p>

            <hr>

            <p class="small fw-bold text-uppercase text-warning mb-1">
                TH PREMIUM
            </p>

            <h5 style="font-family:'Merriweather', serif;">
                The labour codes redefine wages, empower the worker
            </h5>

            <p class="small text-uppercase text-muted">
                R. MUKUNDAN
            </p>

        </div>


        <!-- COLUMN 3 -->
        <div class="col-lg-3 border-end">

            <img src="{{ asset('img/comment2.png') }}" class="img-fluid mb-3">

            <p class="small fw-bold text-uppercase text-warning mb-1">
                TH PREMIUM
            </p>

            <h5 style="font-family:'Merriweather', serif;">
                Is a ‘double engine government’ crucial for growth?
            </h5>

            <p class="small text-uppercase text-muted">
                N. SAI CHARAN
            </p>

        </div>


        <!-- COLUMN 4 -->
        <div class="col-lg-3">

            <img src="{{ asset('img/comment3.png') }}" class="img-fluid mb-3">

            <p class="small fw-bold text-uppercase text-warning mb-1">
                TH PREMIUM
            </p>

            <h5 style="font-family:'Merriweather', serif;">
                From sociology to journalism: A lesson from André Béteille
            </h5>

        </div>

    </div>

</div>

</div>








    @include('partials.missed')
    @include('partials.footer')

    @endsection


</body>

</html>