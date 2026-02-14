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
        <div class="row">

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
                    <h3 class="fw-bold  red" style="font-size: 16px; color: #B00020">Kerala</h3>
                </a>
                <a href="/" class="txt d-block">
                    Kerala motivational speaker and former police officer Philip Mampad detained in POCSO case
                </a>
                <hr>
                <a href="/" class="text-decoration-none">
                    <h3 class="fw-bold  red" style="font-size: 16px; color: #B00020">Industry</h3>
                </a>
                <a href="/" class="txt d-block">
                    Passenger vehicles up 12.6% with sale of 4.5 lakh vehicles: SIAM
                </a>

            </div>
            <!-- Center col -->
            <div class="col-lg-6 px-4">

                <!-- MAIN NEWS -->
                <span class="fw-bold red" style="font-size: 14px;">
                    <span class="live-dot"></span> LIVE
                </span>

                <h1 style="font-size: 34px; font-weight: 900;">
                    <a href="/" class="txt">
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
                <h4 class="fw-bold mb-4 red" style="font-size: 30px; color: #B00020">
                    <a href="/" class="red">Latest News</a>
                </h4>

                <!-- Timeline Item -->
                <div class="position-relative border-start ps-3 mb-4">
                    <span class="position-absolute top-0 start-0 translate-middle 
                    bg-dark border border-dark rounded-circle" style="width:12px;height:12px;"></span>


                    <a href="/" class="txt d-block">
                        <div class="small text-muted mb-1" style="font-size:10px;">
                            3 mins ago – Kerala
                        </div>
                        Chittoor: Container falls from lorry, crushes car; software engineer killed
                    </a>

                    <hr>
                </div>

                <!-- Timeline Item -->
                <div class="position-relative border-start ps-3 mb-4">
                    <span class="position-absolute top-0 start-0 translate-middle 
                    bg-white border border-dark rounded-circle" style="width:12px;height:12px;"></span>

                  
                    <a href="/" class="txt d-block">
                        <div class="small text-muted mb-1" style="font-size:10px;">
                            18 mins ago – Kerala
                        </div>
                        Chittoor: Container falls from lorry, crushes car; software engineer killed
                    </a>
                    <hr>
                </div>
                <!-- Timeline Item -->
                <div class="position-relative border-start ps-3 mb-4">
                    <span class="position-absolute top-0 start-0 translate-middle 
                    bg-white border border-dark rounded-circle" style="width:12px;height:12px;"></span>

                   
                    <a href="/" class="txt d-block">
                        <div class="small text-muted mb-1" style="font-size:10px;">
                            32 mins ago – Kerala
                        </div>
                        Chittoor: Container falls from lorry, crushes car; software engineer killed
                    </a>
                    <hr>
                </div>
                <!-- Timeline Item -->
                <div class="position-relative border-start ps-3 mb-4">
                    <span class="position-absolute top-0 start-0 translate-middle 
                    bg-white border border-dark rounded-circle" style="width:12px;height:12px;"></span>

                  
                    <a href="/" class="txt d-block">
                        <div class="small text-muted mb-1" style="font-size:10px;">
                            3 mins ago – Kerala
                        </div>
                        Chittoor: Container falls from lorry, crushes car; software engineer killed
                    </a>
                    <hr>
                </div>
                <!-- Timeline Item -->
                <div class="position-relative border-start ps-3 mb-4">
                    <span class="position-absolute top-0 start-0 translate-middle 
                    bg-white border border-dark rounded-circle" style="width:12px;height:12px;"></span>

                    <a href="/" class="txt d-block">
                        <div class="small text-muted mb-1" style="font-size:10px;">
                            40 mins ago – Kerala
                        </div>
                        Chittoor: Container falls from lorry, crushes car; software engineer killed
                    </a>
                    <a href="/">
                        <span class="smll" style="font-size:10px">READ MORE STORIES</span> </a>
                    <hr class="my-1">
                    <hr class="my-1">
                    <hr class="my-1 mb-4">

                    <span class="badge bg-secondary px-2 py-1 text-uppercase rounded-0 small mb-2 ">
                        Sponsored
                    </span>

                    <a href="/" class="txt d-block mb-5 mt-2">
                        Transcending cloud finops to get value in the AI age
                    </a>
                    <hr>
                    <span class="badge bg-secondary px-2 py-1 text-uppercase rounded-0 small mb-2 mt-4">
                        Sponsored
                    </span>

                    <a href="/" class="txt d-block mb-5 mt-2">
                        Steering intelligence: Building governance foundations for the agentic AI age
                    </a>

                </div>

            </div>
            <hr class="my-1">
            <hr class="my-1">
            <hr class="my-1">
        </div>
        <!-- EDITORIAL SECTION -->
        <div class="container-fluid bg-light py-4 border-top border-bottom mb-4 mx-auto">

            <div class="container">

                <!-- DATE -->
                <div class="text-muted small mb-3">
                    Friday, February 13
                </div>

                <div class="row align-items-center">

                    <!-- LEFT LOGO -->
                    <div class="col-lg-3 border-end text-center text-lg-center">
                        <a href="/">
                            <img src="{{ asset('images/elephant.png') }}" alt="The Hindu Logo" class="img-fluid mb-2"
                                style="max-height:70px;">
                        </a>
                        <p class=" txt text-uppercase small fw-semibold mb-2">
                            Read editorials in
                        </p>
                        <a href="/" data-bs-toggle="tooltip" data-bs-placement="top" title="Hindi">
                            <span class="badge border border-dark text-dark px-2 py-1 rounded-pill">
                                हिंदी
                            </span>
                        </a>

                    </div>

                    <!-- MIDDLE EDITORIAL -->
                    <div class="col-lg-4 border-end px-4">
                        <h5 class="fw-bold">
                            <a href="/" class="text-dark txt">
                                Farmers’ pulse: On India and its demand for pulses
                            </a>
                        </h5>
                        <p class="txt small"><a href="/" class="txt">
                                Only structural reforms in agriculture sector can ensure food security </a>
                        </p>
                    </div>

                    <!-- RIGHT EDITORIAL -->
                    <div class="col-lg-5 px-4">
                        <h5 class="fw-bold">
                            <a href="/" class="text-dark txt">
                                Too fake to be good: On AI-generated imagery, labelling
                            </a>
                        </h5>
                        <p class="txt small">
                            <a href="/" class="txt">
                                Labelling of synthetically generated content on social media is a must </a>
                        </p>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>

<!-- Blue Strip -->
<div class="w-100" style="height:6px; background: linear-gradient(90deg,#35b6c6,#458AD2);">
</div>

<section class="py-5 position-relative overflow-hidden"
    style="background: linear-gradient(50deg,#ffffff 0%,rgba(69,138,210,0.27) 70%,#458AD2 100%);">

    <img src="images/rupee.png" class="position-absolute top-50 end-0 translate-middle-y"
        style="max-width:650px; opacity:0.35; z-index:0;" alt="">

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












@endsection