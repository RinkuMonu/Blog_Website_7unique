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
                    Premium
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

            <!-- TOP TITLE -->
            <div class="d-flex align-items-center mb-4">

                <div class="flex-grow-1 border-top"></div>

                <div class="mx-4 d-flex align-items-center">

                    <!-- TH Yellow Logo (Replace image) -->
                    <img src="{{ asset('img/th-yellow.svg') }}" alt="TH"
                        style="width:45px;height:45px;border-radius:50%;">

                    <h2 class="fw-bold red ms-3 mb-0" style="font-family:'Playfair Display', serif;">
                        Premium
                    </h2>

                </div>

                <div class="flex-grow-1 border-top"></div>

            </div>



            <div class="row">

                <!-- LEFT COLUMN -->
                <div class="col-lg-3">

                    <div class="mb-4 border-bottom pb-3">
                        <a href="#" class="txt">
                            <h6 style="font-family:'Merriweather', serif;">
                                Bangladesh: The churn and the many challenges ahead
                            </h6>
                            <p class="small text-uppercase text-muted mt-2">
                                MEERA SRINIVASAN
                            </p>
                        </a>
                    </div>

                    <div class="mb-4 border-bottom pb-3">
                        <a href="#" class="txt">
                            <h6 style="font-family:'Merriweather', serif;">
                                Know your English | Splendid or splendiferous?
                            </h6>
                            <p class="small text-uppercase text-muted mt-2">
                                S. UPENDRAN
                            </p>
                        </a>
                    </div>

                    <div class="mb-4">
                        <a href="#" class="txt">
                            <h6 style="font-family:'Merriweather', serif;">
                                Three births, a biennale, and a new book: Gulammohammed Sheikh at 89
                            </h6>
                        </a>

                        <img src="{{ asset('img/art.png') }}" class="img-fluid mt-3">
                    </div>

                </div>



                <!-- CENTER COLUMN -->
                <div class="col-lg-6">

                    <!-- MAIN STORY -->
                    <a href="#" class="txt">

                        <h2 class="fw-bold mb-3" style="font-family:'Merriweather', serif;">
                            Utility work debris constricts pedestrian space on Samson Saroja Street in Chennai
                        </h2>

                    </a>

                    <div class="row">

                        <div class="col-md-7">
                            <a href="#">
                                <img src="{{ asset('img/premium-main.png') }}" class="img-fluid">
                            </a>
                        </div>

                        <div class="col-md-5">
                            <a href="#" class="txt">

                                <p style="font-family:'Merriweather', serif;">
                                    Rubble from the work lines a portion of one side of the street,
                                    hindering entry to houses and narrowing what is already a cramped space for
                                    pedestrians
                                </p>

                                <p class="small text-uppercase text-muted">
                                    THE HINDU BUREAU
                                </p>

                            </a>
                        </div>

                    </div>

                    <hr class="my-4">


                    <!-- LOWER STORIES -->
                    <div class="row">

                        <div class="col-md-6 border-end">

                            <a href="#" class="txt">
                                <h5 style="font-family:'Merriweather', serif;">
                                    If you are greying early, what do you have to know
                                </h5>
                                <p class="small text-uppercase text-muted">
                                    ATHIRA ELSSA JOHNSON
                                </p>
                            </a>

                            <hr>

                            <a href="#" class="txt">
                                <h5 style="font-family:'Merriweather', serif;">
                                    What the program to train nurses for Germany tells us about skilling
                                </h5>
                            </a>

                        </div>

                        <div class="col-md-6">

                            <a href="#" class="txt">
                                <h5 style="font-family:'Merriweather', serif;">
                                    When the umbilical cord poses a threat to the baby
                                </h5>
                            </a>

                            <img src="{{ asset('img/baby.png') }}" class="img-fluid mt-3">

                        </div>

                    </div>

                </div>



                <!-- RIGHT COLUMN (Briefing) -->
                <div class="col-lg-3 border-start ps-4">

                    <h3 class="fw-bold red mb-4" style="font-family:'Playfair Display', serif;">
                        Briefing
                    </h3>

                    <img src="{{ asset('img/premium.png') }}" class="img-fluid mb-3">

                    <div class="mb-4">
                        <p class="red fw-bold small mb-1">
                            NOON EDITION
                        </p>

                        <a href="#" class="txt">
                            <h6 style="font-family:'Merriweather', serif;">
                                Trisha condemns ‘distasteful remark’; clarifies she isn’t aligned with any political
                                party
                            </h6>
                        </a>
                    </div>

                    <div class="mb-4">
                        <p class="red fw-bold small mb-1">
                            MORNING EDITION
                        </p>

                        <a href="#" class="txt">
                            <h6 style="font-family:'Merriweather', serif;">
                                Tarique Rahman reaches out to Opposition leaders ahead of swearing-in ceremony
                            </h6>
                        </a>
                    </div>

                    <a href="#" class="txt">
                        AND 8 MORE STORIES FOR YOU
                    </a>

                    <div class="mt-4 d-flex align-items-center">
                        <img src="{{ asset('img/th-yellow.svg') }}" style="width:25px;height:25px;border-radius:50%;">

                        <p class="small fw-bold ms-2 mb-0">
                            TODAY'S BRIEFING IS A SUBSCRIBER ONLY FEATURE
                        </p>
                    </div>

                </div>
                <div class="container my-5">
    <div class="row justify-content-center">

        <!-- Center Column (Width 4) -->
        <div class="col-lg-5 col-md-7">

            <!-- Section Title -->
            <h3 class="red fw-bold mb-4 text-center"
                style="font-family:'Playfair Display', serif;">
                More Premium Stories
            </h3>


            <!-- Story 1 -->
            <div class="d-flex align-items-start py-4 border-bottom">

                <div class="me-3" style="width:90px;">
                    <a href="#" class="txt">
                        <img src="{{ asset('img/premium1.png') }}"
                             class="img-fluid">
                    </a>
                </div>

                <div>
                    <a href="#" class="txt">
                        <h6 style="font-family:'Merriweather', serif;">
                            What are bio-based chemicals and enzymes? | Explained
                        </h6>
                        <p class="small text-uppercase text-muted mt-2 mb-0">
                            SHAMBHAVI NAIK
                        </p>
                    </a>
                </div>

            </div>


            <!-- Story 2 -->
            <div class="d-flex align-items-start py-4 border-bottom">

                <div class="me-3" style="width:90px;">
                    <a href="#" class="txt">
                        <img src="{{ asset('img/premium2.png') }}"
                             class="img-fluid">
                    </a>
                </div>

                <div>
                  <a href="#" class="txt">
                        <h6 style="font-family:'Merriweather', serif;">
                            Buy, hold vs. market timing
                        </h6>
                        <p class="small text-uppercase text-muted mt-2 mb-0">
                            VENKATESH BANGARUSWAMY
                        </p>
                    </a>
                </div>

            </div>


            <!-- Story 3 -->
            <div class="d-flex align-items-start py-4 border-bottom">

                <div class="me-3" style="width:90px;">
                    <a href="#" class="txt">
                        <img src="{{ asset('img/premium3.png') }}"
                             class="img-fluid">
                    </a>
                </div>

                <div>
                    <a href="#" class="txt">
                        <h6 style="font-family:'Merriweather', serif;">
                            Why two is better than one in a home loan
                        </h6>
                        <p class="small text-uppercase text-muted mt-2 mb-0">
                            SANTOSH AGARWAL
                        </p>
                    </a>
                </div>

            </div>


            <!-- Story 4 -->
            <div class="d-flex align-items-start py-4 border-bottom">

                <div class="me-3" style="width:90px;">
                    <a href="#" class="txt">
                        <img src="{{ asset('img/premium4.png') }}"
                             class="img-fluid">
                    </a>
                </div>

                <div>
                    <a href="#" class="text-dark txt-none">
                        <h6 style="font-family:'Merriweather', serif;">
                            Demystifying home loan insurance for borrowers
                        </h6>
                        <p class="small text-uppercase text-muted mt-2 mb-0">
                            VIVEK JAIN
                        </p>
                    </a>
                </div>

            </div>


            <!-- Story 5 -->
            <div class="d-flex align-items-start py-4 border-bottom">

                <div class="me-3" style="width:90px;">
                   <a href="#" class="txt">
                        <img src="{{ asset('img/premium5.png') }}"
                             class="img-fluid">
                    </a>
                </div>

                <div>
                    <a href="#" class="txt">
                        <h6 style="font-family:'Merriweather', serif;">
                            Cows can use tools, and one Austrian cow has now shown it clearly
                        </h6>
                        <p class="small text-uppercase text-muted mt-2 mb-0">
                            SAYANTAN DATTA
                        </p>
                    </a>
                </div>

            </div>

        </div>

    </div>
</div>


            </div>

        </div>




        @include('partials.missed')
        @include('partials.footer')

        @endsection


    </body>

</html>