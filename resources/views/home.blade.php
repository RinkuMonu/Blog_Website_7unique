@extends('layouts.app')

@section('content')
<div class="container my-4">

    <!-- Top Advertisement -->
    <div class="text-center mb-5">

        <a href="/">
            <img src="{{ asset('images/add1.png') }}" alt="Advertisement" class="img-fluid mx-auto d-block">
        </a>
        <p class="text-uppercase small text-muted mt-3 mb-4">
            Advertisement
        </p>
    </div>


    <!-- Bottom Advertisement -->
    <div class="text-center mt-5">

        <a href="/">
            <img src="{{ asset('images/add2.png') }}" alt="Advertisement" class="img-fluid mx-auto d-block">
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
                    <img src="{{ asset('images/writer.png') }}" alt="Author" class="rounded-circle" width="50"
                        height="50">

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
                    <img src="{{ asset('images/writer2.png') }}" alt="Author" class="rounded-circle" width="50"
                        height="50">

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
                    <img src="{{ asset('images/writer3.png') }}" alt="Author" class="rounded-circle" width="50"
                        height="50">

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
                    <img src="{{ asset('images/writer1.png') }}" alt="Author" class="rounded-circle" width="50"
                        height="50">

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
                            The Hindu Bureau
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

                    <div class="small text-muted mb-1" style="font-size:10px;">
                        <a href="/" class="txt d-block"> 18 mins ago – World
                    </div>


                    Chittoor: Container falls from lorry, crushes car; software engineer killed
                    </a>
                    <hr>
                </div>
                <!-- Timeline Item -->
                <div class="position-relative border-start ps-3 mb-4">
                    <span class="position-absolute top-0 start-0 translate-middle 
                    bg-white border border-dark rounded-circle" style="width:12px;height:12px;"></span>

                    <div class="small text-muted mb-1" style="font-size:10px;">
                        <a href="/" class="txt d-block"> 32 mins ago – World
                    </div>

                    <a href="/" class="txt d-block">
                        Supreme Court grants interim bail to filmmaker Vikram Bhatt’s wife in fraud case
                    </a>
                    <hr>
                </div>
                <!-- Timeline Item -->
                <div class="position-relative border-start ps-3 mb-4">
                    <span class="position-absolute top-0 start-0 translate-middle 
                     bg-white border border-dark rounded-circle" style="width:12px;height:12px;"></span>

                    <div class="small text-muted mb-1" style="font-size:10px;">
                        <a href="/" class="txt d-block"> 32 mins ago – World
                    </div>

                    <a href="/" class="txt d-block">
                        Asian shares mostly lower after sharp Wall Street losses on AI-related worries

                    </a>
                    <hr>
                </div>
                <!-- Timeline Item -->
                <div class="position-relative border-start ps-3 mb-4">
                    <span class="position-absolute top-0 start-0 translate-middle 
                     bg-white border border-dark rounded-circle" style="width:12px;height:12px;"></span>

                    <div class="small text-muted  mb-1" style="font-size:10px;">
                        <a href="/" class="txt d-block"> 32 mins ago – World
                    </div>

                    <a href="/" class="txt d-block">
                        Copa del Rey: Atletico hits Barcelona for four to take giant step toward final

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
                        <a href="/">
                            <span class="badge border border-dark text-dark px-3 py-2 rounded-pill ">
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


    @endsection