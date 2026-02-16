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
<style>

    .more-stories {
    font-family: 'Merriweather', serif !important;
}

</style>
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
        <h2 class="mx-4 text-danger fw-bold mb-0">
            Movies
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


<div class="container">

    <div class="row">

        <div class="col-lg-3">

            <div class="mb-4 border-bottom pb-3">
                <p class="text-danger fw-bold mb-1">MOVIES</p>
                <p class="mb-1">
                    Susanna Fogel and David Iseron on ‘Ponies’: ‘We have an open marriage creatively’
                </p>
                <p class="txt mb-0" style="font-size:10px;">
                    MINI ANTHIKAD CHHIBBER
                </p>


            </div>

            <div class="mb-4 border-bottom pb-3">
                <p class="text-danger fw-bold mb-1">MOVIES</p>
                <p class="mb-1">
                    ‘Scarlet’ movie review: Mamoru Hosoda gives ‘Hamlet’ a stunning twist
                </p>
                <p class="txt mb-0" style="font-size:10px;">
                    MINI ANTHIKAD CHHIBBER
                </p>
            </div>

            <div class="mb-4 border-bottom pb-3">
                <p class="text-danger fw-bold mb-1">MOVIES</p>
                <p class="mb-1">
                    ‘Fallout’ Season 2 review: Ella Purnell and Walton Goggins shine
                </p>
                <p class="txt mb-0" style="font-size:10px;">
                    MINI ANTHIKAD CHHIBBER
                </p>
            </div>

            <img src="{{ asset('img/juices.png') }}" class="img-fluid mt-3">

            <div class="mb-4 border-bottom mt-3 pb-3">
                <p class="text-danger fw-bold mb-1">MOVIES</p>
                <p class="mb-1">
                    ‘Fallout’ Season 2 review: Ella Purnell and Walton Goggins shine
                </p>
                <p class="txt mb-0" style="font-size:10px;">
                    MINI ANTHIKAD CHHIBBER
                </p>
            </div>

        </div>


        <div class="col-lg-6">

            <div class="position-relative">

                <!-- Big Image -->
                <img src="{{ asset('img/thelapathy.png') }}" class="img-fluid w-100">

                <!-- Overlay Content -->
                <div class="position-absolute bottom-0 start-0 w-100 p-4"
                    style="background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">

                    <p class="text-danger fw-bold mb-2 text-uppercase small">
                        Tamil Nadu
                    </p>

                    <h2 class="text-white fw-bold">
                        JANA NAYAGAN PRODUCER TO WITHDRAW WRIT PETITION FROM MADRAS HIGH COURT
                    </h2>

                    <p class="text-white small mt-2">
                        The writ petition is expected to be listed under the caption ‘For Withdrawal’ before Justice
                        P.T.
                        Asha.
                    </p>

                </div>

            </div>

        </div>
        <!-- RIGHT SIDEBAR -->
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

@include('partials.tophits')


<div class="row mt-5 pt-4 border-top">


            <!-- LEFT ADVERTISEMENT -->
            <div class="col-lg-4">
                <img src="{{ asset('images/sugam.png') }}" class="img-fluid" alt="Advertisement">
            </div>


            <!-- CENTER: MORE STORIES -->
            <div class="col-lg-4 more-stories">

                <h4 class="text-danger fw-bold mb-4">
                    More stories from India
                </h4>

                <!-- Story 1 -->
                <div class="d-flex align-items-start mb-4 pb-4 border-bottom">
                    <img src="{{ asset('img/modi.png') }}" width="110" height="85" class="me-3">

                    <div>
                        <p class=" fs-5 mb-1">
                            India stands at forefront of AI transformation: PM Modi
                        </p>
                        <p class="small mb-0">PTI</p>
                    </div>
                </div>

                <!-- Story 2 -->
                <div class="d-flex align-items-start mb-4 pb-4 border-bottom">
                    <img src="{{ asset('img/road2.png') }}" width="110" height="85" class="me-3 ">

                    <div>
                        <p class=" fs-5 mb-1 ">
                            Centre approves road projects worth over ₹11,000 crore
                        </p>
                        <p class="small mb-0">PTI</p>
                    </div>
                </div>

                <!-- Story 3 -->
                <div class="d-flex align-items-start mb-4 pb-4 border-bottom">
                    <img src="{{ asset('img/road2.png') }}" width="110" height="85" class="me-3 ">

                    <div>
                        <p class="fs-5  mb-1">
                            Centre approves road projects worth over ₹11,000 crore
                        </p>
                        <p class="small mb-0">PTI</p>
                    </div>
                </div>


                <!-- Story 4 -->
                <div class="d-flex align-items-start mb-4 pb-4 border-bottom">
                    <img src="{{ asset('img/modi.png') }}" width="110" height="85" class="me-3">

                    <div>
                        <p class="fs-5  mb-1 ">
                            India stands at forefront of AI transformation: PM Modi
                        </p>
                        <p class="small mb-0">PTI</p>
                    </div>
                </div>

                <!-- Story 5 -->
                <div class="d-flex align-items-start mb-4 pb-4 border-bottom">
                    <img src="{{ asset('img/road2.png') }}" width="110" height="85" class="me-3 ">

                    <div>
                        <p class="fs-5  mb-1 lh-sm">
                            Centre approves road projects worth over ₹11,000 crore
                        </p>
                        <p class="small mb-0">PTI</p>
                    </div>
                </div>

                <!-- Story 6 -->
                <div class="d-flex align-items-start mb-4 pb-4 border-bottom">
                    <img src="{{ asset('img/road2.png') }}" width="110" height="85" class="me-3 ">

                    <div>
                        <p class="fs-5  mb-1 lh-sm">
                            Centre approves road projects worth over ₹11,000 crore
                        </p>
                        <p class="small mb-0">PTI</p>
                    </div>
                </div>


                <!-- Story 7 -->
                <div class="d-flex align-items-start mb-4 pb-4 border-bottom">
                    <img src="{{ asset('img/modi.png') }}" width="110" height="85" class="me-3">

                    <div>
                        <p class="fs-5  mb-1 lh-sm">
                            India stands at forefront of AI transformation: PM Modi
                        </p>
                        <p class="small mb-0">PTI</p>
                    </div>
                </div>

                <!-- Story 8 -->
                <div class="d-flex align-items-start mb-4 pb-4 border-bottom">
                    <img src="{{ asset('img/road2.png') }}" width="110" height="85" class="me-3 ">

                    <div>
                        <p class="fs-5  mb-1 lh-sm">
                            Centre approves road projects worth over ₹11,000 crore
                        </p>
                        <p class="small mb-0">PTI</p>
                    </div>
                </div>

                <!-- Story 9 -->
                <div class="d-flex align-items-start mb-4 pb-4 border-bottom">
                    <img src="{{ asset('img/road2.png') }}" width="110" height="85" class="me-3 ">

                    <div>
                        <p class="fs-5 mb-1 lh-sm">
                            Centre approves road projects worth over ₹11,000 crore
                        </p>
                        <p class="small mb-0">PTI</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-5">

                    <nav>
                        <ul class="pagination align-items-center mb-0">

                            <!-- Prev -->
                            <li class="page-item disabled">
                                <a class="page-link border-0 bg-transparent text-muted">
                                    &lt; Prev
                                </a>
                            </li>

                            <!-- Page Numbers -->
                            <li class="page-item active">
                                <a class="page-link border-0 text-white" style="background:#c40000;">
                                    1
                                </a>
                            </li>

                            <li class="page-item">
                                <a class="page-link border-0 text-dark bg-transparent">2</a>
                            </li>

                            <li class="page-item">
                                <a class="page-link border-0 text-dark bg-transparent">3</a>
                            </li>

                            <li class="page-item">
                                <a class="page-link border-0 text-dark bg-transparent">4</a>
                            </li>

                            <li class="page-item">
                                <a class="page-link border-0 text-dark bg-transparent">5</a>
                            </li>

                            <li class="page-item">
                                <a class="page-link border-0 text-dark bg-transparent">6</a>
                            </li>

                            <li class="page-item">
                                <a class="page-link border-0 text-dark bg-transparent">7</a>
                            </li>

                            <li class="page-item">
                                <a class="page-link border-0 text-dark bg-transparent">8</a>
                            </li>

                            <!-- Next -->
                            <li class="page-item">
                                <a class="page-link border-0 bg-transparent text-danger">
                                    Next &gt;
                                </a>
                            </li>

                        </ul>
                    </nav>

                </div>


            </div>


            <!-- RIGHT SIDE (Latest News or Anything) -->
            <div class="col-lg-4">
                <!-- LATEST NEWS -->
                <div class="mt-5">

                    <div class="text-center my-4">

    <!-- Ad Image -->
    <img src="{{ asset('img/sugam2.png') }}" 
         class="img-fluid mx-auto d-block"
         alt="Advertisement">

    <!-- Advertisement Label -->
    <p class="text-uppercase text-muted mt-2 mb-0" 
       style="font-size:11px; letter-spacing:1px;">
        Advertisement
    </p>

</div>


                    <h4 class="text-danger fw-bold mb-4">
                        Latest News
                    </h4>

                    <!-- Item 1 -->
                    <div class="latest-news">

                        <!-- Item 1 -->
                        <div class="timeline-item active">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <p class="small text-muted mb-1">7 mins ago - Kerala</p>
                                <p class="mb-0">
                                    Sabarimala women entry: Supreme Court’s 9-judge Constitution Bench to begin review
                                    hearing from April 7
                                </p>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <p class="small text-muted mb-1">10 mins ago - Environment</p>
                                <p class="mb-0">
                                    NGT clears Great Nicobar Island mega-infrastructure project, cites ‘strategic
                                    importance’
                                </p>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <p class="small text-muted mb-1">15 mins ago - India</p>
                                <p class="mb-0">
                                    Rahul Gandhi uninterested in Parliament; ‘tutored by NGOs’ on revival of Congress
                                </p>
                            </div>
                        </div>

                    </div>


                    <a href="#" class=" txt small ">
                        READ MORE STORIES
                    </a>

                    <!-- TODAY'S PAPER -->
                    <div class="p-4 mt-5" style="background-color:#f3f3f3;">

                        <h4 class="text-danger fw-bold mb-4">
                            Today's Paper
                        </h4>

                        <!-- Newspaper Image -->
                        <img src="{{ asset('img/thhindu.png') }}" class="img-fluid mb-4" alt="Today's Paper">

                        <!-- Story 1 -->
                        <div class="border-bottom pb-3 mb-3">
                            <p class="small text-muted mb-1">Page No. 1</p>
                            <p class="mb-0">
                                Trade deals made from a ‘position of strength’, says Modi
                            </p>
                        </div>

                        <!-- Story 2 -->
                        <div class="border-bottom pb-3 mb-3">
                            <p class="small text-muted mb-1">Page No. 1</p>
                            <p class="mb-0">
                                Going berserk
                            </p>
                        </div>

                        <!-- Story 3 -->
                        <div class="border-bottom pb-3 mb-3">
                            <p class="small text-muted mb-1">Page No. 1</p>
                            <p class="mb-0">
                                AI Impact Summit begins today
                            </p>
                        </div>

                        <a href="#" class="txt small">
                            READ MORE STORIES
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


</body>
</html>