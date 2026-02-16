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
            India
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
                    NEWS
                </a>
            </li>

            <li class="breadcrumb-item active fw-semibold" aria-current="page"
                style="color:#c40000;">
                INDIA
            </li>

            <li class="breadcrumb-item">
                <a href="#" class="text-dark text-decoration-none fw-semibold">
                    WORLD
                </a>
            </li>

            <li class="breadcrumb-item">
                <a href="#" class="text-dark text-decoration-none fw-semibold">
                    STATES
                </a>
            </li>

            <li class="breadcrumb-item">
                <a href="#" class="text-dark text-decoration-none fw-semibold">
                    CITIES
                </a>
            </li>

        </ol>
    </nav>

</div>


<div class="container my-4">

    <div class="row">

        <!-- LEFT SIDEBAR -->
        <div class="col-lg-3">
            <h6 class="text-danger fw-bold">EDUCATION</h6>
            <p>Most professors of practice hired in Tamil Nadu followed by Maharashtra, Gujarat: UGC Data</p>
            <hr>

            <h6 class="text-danger fw-bold">AGRI-BUSINESS</h6>
            <p>Cotton farmers oppose Goyal’s U.S. import remarks, warn of price crash</p>
            <hr>


            <div class="news-card my-4">

                <!-- Image -->
                <img src="{{ asset('img/mumbai.png') }}" class="img-fluid mb-3" alt="Mumbai news">

                <!-- Category -->


                <!-- Headline -->
                <h6 class="text-danger fw-bold">MUMBAI</h6>
                Tipu Sultan row: FIR against Maharashtra Congress chief;
                stone throwing in Pune
                </h6>

                <!-- Author -->
                <p class="author-name">SNEHA MUTHA</p>

            </div>


        </div>


        <!-- MAIN NEWS SECTION -->
        <div class="col-lg-6">

            <h2 class="fw-bold">
                India’s first ‘cow culture’ museum to open in U.P’s Mathura
            </h2>

            <div class="row align-items-start my-3">

                <div class="col-md-6">
                    <img src="{{ asset('img/cow.png') }}" class="img-fluid" alt="news image">
                </div>

                <div class="col-md-6">
                    <p class="text-dark">
                        The museum will convey the religious, cultural, and spiritual
                        significance of cattle, as well as the scientific utility of cows
                        and their products.
                    </p>
                </div>

            </div>


            <hr>

            <div class="row mt-3">

                <div class="col-md-6">

                    <!-- TELANGANA -->
                    <h6 class="text-danger fw-bold mb-1">TELANGANA</h6>
                    <p class="fw-bold lh-sm">
                        E-application for Agniveer recruitment in Telangana opens
                    </p>

                    <hr class="my-3">

                    <!-- WORLD -->
                    <h6 class="text-danger fw-bold mb-1">WORLD</h6>
                    <p class="fw-bold lh-sm">
                        AI Impact Summit: U.K. Deputy PM calls Delhi summit
                        ‘important moment’ to unlock full benefits of AI
                    </p>

                </div>

                <div class="col-md-6">

                    <p class="fw-bold">
                        Centre approves road projects worth over ₹11,000 crore
                    </p>
                    <img src="{{ asset('img/road.png') }}" class="img-fluid mt-2">
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




        <!-- Section Title -->
        <div class="row mt-5 pt-4 border-top">


            <!-- LEFT ADVERTISEMENT -->
            <div class="col-lg-4">
                <img src="{{ asset('images/sugam.png') }}" class="img-fluid" alt="Advertisement">
            </div>


            <!-- CENTER: MORE STORIES -->
            <div class="col-lg-4">

                <h4 class="text-danger fw-bold mb-4">
                    More stories from India
                </h4>

                <!-- Story 1 -->
                <div class="d-flex align-items-start mb-4 pb-4 border-bottom">
                    <img src="{{ asset('img/modi.png') }}" width="110" height="85" class="me-3">

                    <div>
                        <p class="fw-bold mb-1 lh-sm">
                            India stands at forefront of AI transformation: PM Modi
                        </p>
                        <p class="small mb-0">PTI</p>
                    </div>
                </div>

                <!-- Story 2 -->
                <div class="d-flex align-items-start mb-4 pb-4 border-bottom">
                    <img src="{{ asset('img/road2.png') }}" width="110" height="85" class="me-3 ">

                    <div>
                        <p class="fw-bold mb-1 lh-sm">
                            Centre approves road projects worth over ₹11,000 crore
                        </p>
                        <p class="small mb-0">PTI</p>
                    </div>
                </div>

                <!-- Story 3 -->
                <div class="d-flex align-items-start mb-4 pb-4 border-bottom">
                    <img src="{{ asset('img/road2.png') }}" width="110" height="85" class="me-3 ">

                    <div>
                        <p class="fw-bold mb-1 lh-sm">
                            Centre approves road projects worth over ₹11,000 crore
                        </p>
                        <p class="small mb-0">PTI</p>
                    </div>
                </div>


                <!-- Story 4 -->
                <div class="d-flex align-items-start mb-4 pb-4 border-bottom">
                    <img src="{{ asset('img/modi.png') }}" width="110" height="85" class="me-3">

                    <div>
                        <p class="fw-bold mb-1 lh-sm">
                            India stands at forefront of AI transformation: PM Modi
                        </p>
                        <p class="small mb-0">PTI</p>
                    </div>
                </div>

                <!-- Story 5 -->
                <div class="d-flex align-items-start mb-4 pb-4 border-bottom">
                    <img src="{{ asset('img/road2.png') }}" width="110" height="85" class="me-3 ">

                    <div>
                        <p class="fw-bold mb-1 lh-sm">
                            Centre approves road projects worth over ₹11,000 crore
                        </p>
                        <p class="small mb-0">PTI</p>
                    </div>
                </div>

                <!-- Story 6 -->
                <div class="d-flex align-items-start mb-4 pb-4 border-bottom">
                    <img src="{{ asset('img/road2.png') }}" width="110" height="85" class="me-3 ">

                    <div>
                        <p class="fw-bold mb-1 lh-sm">
                            Centre approves road projects worth over ₹11,000 crore
                        </p>
                        <p class="small mb-0">PTI</p>
                    </div>
                </div>


                <!-- Story 7 -->
                <div class="d-flex align-items-start mb-4 pb-4 border-bottom">
                    <img src="{{ asset('img/modi.png') }}" width="110" height="85" class="me-3">

                    <div>
                        <p class="fw-bold mb-1 lh-sm">
                            India stands at forefront of AI transformation: PM Modi
                        </p>
                        <p class="small mb-0">PTI</p>
                    </div>
                </div>

                <!-- Story 8 -->
                <div class="d-flex align-items-start mb-4 pb-4 border-bottom">
                    <img src="{{ asset('img/road2.png') }}" width="110" height="85" class="me-3 ">

                    <div>
                        <p class="fw-bold mb-1 lh-sm">
                            Centre approves road projects worth over ₹11,000 crore
                        </p>
                        <p class="small mb-0">PTI</p>
                    </div>
                </div>

                <!-- Story 9 -->
                <div class="d-flex align-items-start mb-4 pb-4 border-bottom">
                    <img src="{{ asset('img/road2.png') }}" width="110" height="85" class="me-3 ">

                    <div>
                        <p class="fw-bold mb-1 lh-sm">
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

                    <p class="small text-uppercase text-muted mb-2">
                        Advertisement
                    </p>

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