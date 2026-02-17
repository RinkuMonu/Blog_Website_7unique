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
            <a href="/" class="text-decoration-none">
                <h3 class="fw-bold mb-4 red" style="font-size: 30px; color: #B00020">Premium</h3>
            </a>


            <a href="/" class="txt d-block">
                Vanished lives: Kerala sees a surge in missing person cases
            </a>

            <div class="d-flex align-items-center justify-content-between mt-2">

                <!-- Author Name -->
                <span class="text-muted fw-semibold text-uppercase " style="font-size: 9px;">
                    <a href="/" class="smll">
                        Kallol Bhattacherjee
                    </a>
                </span>

                <!-- Author Image -->
                <a href="/">
                    <img src="{{ asset('images/writer.png') }}" alt="Author" class="rounded-circle" width="50"
                        height="50">
                </a>

            </div>


            <hr>

            <a href="/" class="txt">
                <p>Midday meal cooks protest in Chhattisgarh</p>
            </a>
            <span class="text-muted fw-semibold d-block text-uppercase" style="font-size: 9px;"><a href="/"
                    class="smll">A. Mithosh Joseph</a></span>

            <hr>
            <a href="/" class="txt d-block">
                How Indira Canteens lost flavour among patrons in Bengaluru
            </a>

            <div class="d-flex align-items-center justify-content-between mt-2">

                <!-- Author Name -->
                <span class="text-muted fw-semibold text-uppercase " style="font-size: 9px;">
                    <a href="/" class="smll ">
                        P. Sujatha Varma
                    </a>
                </span>

                <!-- Author Image -->
                <a href="/">
                    <img src="{{ asset('images/writer2.png') }}" alt="Author" class="rounded-circle" width="50"
                        height="50">
                </a>

            </div>


            <hr>
            <a href="/" class="txt d-block">
                VB-G RAM G: when a policy shift meets rural realities
            </a>

            <div class="d-flex align-items-center justify-content-between mt-2">

                <!-- Author Name -->
                <span class="text-muted fw-semibold text-uppercase " style="font-size: 9px;">
                    <a href="/" class="smll">
                        Sanjay Hegde
                    </a>
                </span>

                <!-- Author Image -->
                <a href="/">
                    <img src="{{ asset('images/writer3.png') }}" alt="Author" class="rounded-circle" width="50"
                        height="50">
                </a>
            </div>


            <hr>
            <a href="/" class="txt d-block">
                Vande Mataram, its six stanzas and a settled question
            </a>

            <div class="d-flex align-items-center justify-content-between mt-2">

                <!-- Author Name -->
                <span class="text-muted fw-semibold text-uppercase " style="font-size: 9px;">
                    <a href="/" class="smll">
                        Rishita Khanna
                    </a>
                </span>

                <!-- Author Image -->
                <a href="/">
                    <img src="{{ asset('images/writer1.png') }}" alt="Author" class="rounded-circle" width="50"
                        height="50">
                </a>

            </div>

            <hr class="my-1">
            <hr class="my-1">
            <hr class="my-1">
            <span class="fw-bold red mt-5 " style="font-size: 14px;">
                <a href="/" class="red"> <span class="live-dot"></span> LIVE </a>
            </span>
            <a href="/" class="txt d-block mt-2">
                Telangana Municipal Polls 2026 LIVE: Congress takes leader as results trickle in

            </a>
            <hr>
            <a href="/" class="text-decoration-none">
                <h3 class="fw-bold red" style="font-size: 16px; color: #B00020">Kerala</h3>
            </a>
            <a href="/" class="txt d-block">
                Kerala motivational speaker and former police officer Philip Mampad detained in POCSO case
            </a>
            <hr>
            <a href="/" class="text-decoration-none">
                <h3 class="fw-bold red" style="font-size: 16px; color: #B00020">Industry</h3>
            </a>
            <a href="/" class="txt d-block">
                Passenger vehicles up 12.6% with sale of 4.5 lakh vehicles: SIAM
            </a>

        </div>


        <!-- CENTER COLUMN -->
        <div class="col-lg-6 px-4">

            <!-- MAIN NEWS -->
            <span class="fw-bold red" style="font-size: 14px;">
                <a href="/" class="red"> <span class="live-dot"></span> LIVE </a>
            </span>

            <h1 style="font-size: 34px; font-weight: 900;">
                <a href="{{ route('english.news') }}" class="txt">
                    Bangladesh election results LIVE: BNP thanks India, hopes for stronger bilateral ties
                </a>
            </h1>

            <p class="text-muted" style="font-size: 14px;">
                <a href="/" class="txt">
                    The Election Commission put the BNP at 181 seats, the Jamaat-e-Islami at 61 and others at 7,
                    with full official results not expected before noon (0600 GMT)
                </a>
            </p>

            <a href="/">
                <img src="{{ asset('images/man.png') }}" class="img-fluid my-3" alt="News Image">
            </a>

            <!-- SECOND ROW -->
            <div class="row mt-4">

                <!-- LEFT SMALL NEWS -->
                <div class="col-md-6">
                    <a href="/" class="text-decoration-none">
                        <h6 class="fw-bold txt" style="font-size: 20px;">
                            T20 World Cup: Zimbabwe stuns Australia in Colombo
                        </h6>
                        <img src="{{ asset('images/match.png') }}" class="img-fluid mb-2" alt="News">
                    </a>
                </div>

                <!-- RIGHT SMALL NEWS -->
                <div class="col-md-6">

                    <!-- LIVE TAG -->
                    <span class="fw-bold red" style="font-size: 14px;">
                        <span class="live-dot"></span> LIVE
                    </span>

                    <a href="/" class="text-decoration-none">
                        <h6 class="fw-bold txt" style="font-size: 20px;">
                            Bangladesh election results LIVE: BNP thanks India, hopes for stronger bilateral ties
                        </h6>
                    </a>

                    <span class="text-muted fw-semibold text-uppercase" style="font-size: 9px;">
                        <a href="/" class="smll">
                            The Hindu Bureau
                        </a>
                    </span>

                    <hr>

                    <a href="/" class="text-decoration-none">
                        <h6 class="fw-bold txt" style="font-size: 20px;">
                            T.N. CM Stalin’s surprise bonanza for women: ₹5,000 credited in bank accounts of 1.31
                            crore women today
                        </h6>
                    </a>

                </div>

            </div>

        </div>




        <!-- RIGHT COLUMN -->
        <div class="col-lg-3 border-start ps-4">

            <h5 class="fw-bold mb-4"><a herf="/" class="red">Latest News</a></h5>

            <div class="timeline">

                <!-- 1 (Filled Dot) -->
                <div class="timeline-item active">
                    <a href="/" class="txt">
                        <small class="time">13 mins ago - Technology</small>
                        <p class="news-title">
                            India's AI Summit opening in New Delhi marred by long queues, confusion
                        </p>
                    </a>
                </div>

                <!-- 2 -->
                <div class="timeline-item">
                    <a href="/" class="txt">
                        <small class="time">21 mins ago - India</small>
                        <p class="news-title">
                            India's permanent contribution to world community’s agenda is of enormous importance
                        </p>
                    </a>
                </div>

                <!-- 3 -->
                <div class="timeline-item">
                    <a href="/" class="txt">
                        <small class="time">47 mins ago - Karnataka</small>
                        <p class="news-title">
                            Karnataka High Court quashes BJP’s defamation case
                        </p>
                    </a>
                </div>

                <!-- 4 -->
                <div class="timeline-item">
                    <a href="/" class="txt">
                        <small class="time">52 mins ago - Kerala</small>
                        <p class="news-title">
                            Kerala actor appears before ED for questioning in gold case
                        </p>
                    </a>
                </div>

                <!-- 5 -->
                <div class="timeline-item">
                    <a href="/" class="txt">
                        <small class="time">1 hour ago - World</small>
                        <p class="news-title">
                            Global markets steady after U.S. inflation data surprises investors
                        </p>
                    </a>
                </div>

            </div>

            <a href="#" class="smll fw-semibold" style="font-size:10px;">
                READ MORE STORIES
            </a>
            <hr class="my-1">
            <hr class="my-1">
            <hr class="my-1">
            <a href="/">
                <img src="images/sugam.png" class="img-fluid w-100 mb-3 mt-5" alt="">
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


        <div class="row mb-5">

            <!-- LEFT SIDE -->
            <div class="col-lg-6">

                <!-- BIG IMAGE ARTICLE -->
                <a href="/">
                    <img src="images/parliament.png" class="img-fluid w-100 mb-3" alt="">
                </a>
                <p class="fw-bold small">
                    <a href="/" class="red">
                        INDIA
                    </a>
                </p>

                <h3 class="fw-bold">
                    <a href="/" class="text-dark txt">
                        Stormy first leg of Budget session over;
                        Parliament to meet again on March 9
                    </a>
                </h3>

                <p class="text-muted small">
                    <a href="/" class="text-dark txt">
                        The three-week recess period will allow standing committees
                        to examine allocations to various ministries.
                    </a>
                </p>

                <span class="text-uppercase text-muted small">
                    <a href="/" class="smll" style="font-size: 9px;">
                        The Hindu Bureau
                    </a>
                </span>

                <hr class="my-4">

                <!-- TWO SMALL ARTICLES BELOW -->
                <div class="row">

                    <!-- Small Left -->
                    <div class="col-md-6 border-end">

                        <p class="fw-bold small">
                            <a href="/" class="red">
                                INDIA
                            </a>
                        </p>

                        <h6>
                            <a href="/" class="text-dark txt">
                                Trinamool presses for enforceable basic income
                            </a>
                        </h6>

                        <span class="text-muted text-uppercase small">
                            <a href="/" class="smll" style="font-size: 9px;">
                                The Hindu Bureau
                            </a>
                        </span>
                        <a href="/">

                            <img src="images/sardar.png" class="img-fluid my-3" alt="">
                        </a>
                        <p class="fw-bold small">
                            <a href="/" class="red">
                                INDIA
                            </a>
                        </p>

                        <h6>
                            <a href="/" class="text-dark txt">
                                Opposition MPs demand Hardeep Puri’s resignation
                            </a>
                        </h6>

                        <span class="text-muted text-uppercase small">
                            ANI
                        </span>

                    </div>

                    <!-- Small Right -->
                    <div class="col-md-6">

                        <p class="fw-bold small">
                            <a href="/" class="red">
                                INDIA
                            </a>
                        </p>


                        <h6>
                            <a href="/" class="text-dark txt">
                                Government can file FIR or move Privilege Motion,
                                I will stand with farmers: Rahul Gandhi
                            </a>
                        </h6>

                        <span class="text-muted text-uppercase" style="font-size: 9px;">
                            <a href="/" class="smll">
                                SANDEEP PHUKAN
                            </a>
                        </span>
                        <a href="/">
                            <img src="images/sardar2.png" class="img-fluid my-3" alt="">
                        </a>
                        <p class="fw-bold small">
                            <a href="/" class="red">
                                INDIA
                            </a>
                        </p>

                        <h6>
                            <a href="/" class="text-dark txt">
                                Congress demands Petroleum Minister’s resignation
                            </a>
                        </h6>

                        <span class="text-muted text-uppercase small">
                            <a href="/" class="smll" style="font-size: 9px;">
                                The Hindu Bureau
                            </a>
                        </span>

                    </div>

                </div>

            </div>


            <!-- RIGHT SIDE VIDEO -->
            <div class="col-lg-6">

                <!-- VIDEO -->
                <div class="bg-dark text-white p-3 mb-4">

                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/gI1Z4UHg9o0" title="YouTube video player"
                            allowfullscreen>
                        </iframe>
                    </div>


                    <p class="small text-uppercase">
                        <a href="/" class="video">
                            VIDEOS
                        </a>
                    </p>

                    <h5 class="fw-bold">
                        <a href="/" class=" video">
                            Watch: Govt. not to bring motion against Rahul Gandhi
                        </a>
                    </h5>

                    <p class="small">
                        <a href="/" class="video">
                            Union Parliamentary Affairs Minister Kiran Rijiju...
                        </a>
                    </p>

                </div>


                <!-- TWO ARTICLES BELOW VIDEO -->
                <div class="row">

                    <!-- LEFT ARTICLE -->
                    <div class="col-md-6 border-end">
                        <a href="/">
                            <img src="images/abhishek.png" class="img-fluid mb-2" alt="">
                        </a>
                        <p class="fw-bold small">
                            <a href="/" class="red">
                                INDIA
                            </a>
                        </p>

                        <h6>
                            <a href="/" class="text-dark txt">
                                Abhishek Banerjee rebuts FM Sitharaman,
                                points to everyday GST burdens on poor
                            </a>
                        </h6>

                        <span class="text-muted text-uppercase small">
                            <a href="/" class="smll" style="font-size: 9px;">
                                THE HINDU BUREAU
                            </a>
                        </span>

                        <hr>

                        <p class="fw-bold small">
                            <a href="/" class="red">
                                INDIA
                            </a>
                        </p>

                        <h6>
                            <a href="/" class="text-dark txt">
                                Not intimidated by Substantive Motion,
                                says K.C. Venugopal
                            </a>
                        </h6>

                        <span class="text-muted text-uppercase small">
                            <a href="/" class="smll" style="font-size: 9px;">
                                THE HINDU BUREAU
                            </a>
                        </span>

                    </div>


                    <!-- RIGHT ARTICLE -->
                    <div class="col-md-6">
                        <a href="/">
                            <img src="images/vandematram.png" class="img-fluid mb-2" alt="">
                        </a>
                        <div class="d-flex align-items-center mb-2">
                            <img src="images/h-circle-yellow-new.svg" style="width:20px;height:20px;" class="me-2"
                                alt="">
                            <span class="fw-bold small text-warning">
                                <a href="/" class="red">
                                    PREMIUM
                                </a>
                            </span>
                        </div>

                        <h6>
                            <a href="/" class="text-dark txt">
                                Vande Mataram, its six stanzas
                                and a settled question
                            </a>
                        </h6>

                        <span class="text-muted text-uppercase small" style="font-size:9px">
                            <a href="/" class="smll">
                                SANJAY HEGDE
                            </a>
                        </span>

                        <hr>

                        <p class="fw-bold small">
                            <a href="/" class="red">
                                INDIA
                            </a>
                        </p>

                        <h6>
                            <a href="/" class="text-dark txt">
                                Lok Sabha passes Industrial Relations
                                Code (Amendment) Bill, 2026
                            </a>
                        </h6>

                        <span class="text-muted text-uppercase small">
                            <a href="/" class="smll" style="font-size: 9px;">
                                THE HINDU BUREAU
                            </a>
                        </span>

                    </div>

                </div>

            </div>


        </div>

    </div>
    <div class="see-more-wrapper text-center">
        <a href="#" class="see-more fw-bold text-uppercase">
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