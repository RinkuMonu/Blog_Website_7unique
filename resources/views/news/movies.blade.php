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
    </div>
</div>



@include('partials.missed')
@include('partials.footer')

@endsection