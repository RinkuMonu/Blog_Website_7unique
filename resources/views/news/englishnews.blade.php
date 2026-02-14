@extends('layouts.app')


@section('content')

@include('partials.hero')

<div class="container my-4">

    <div class="text-uppercase small text-muted mb-3">
        <a href="/" class="text-decoration-none text-muted">Home</a> /
        <a href="#" class="text-decoration-none text-muted">News</a> /
        <span class="text-danger">World</span>
    </div>

    <div class="row">

        <!-- LEFT CONTENT -->
        <div class="col-lg-8">

            <!-- Headline -->
            <h1 class="fw-bold" style="font-size:42px; line-height:1.2;">
                ‘Quadrupled’ seats in Parliament, will be ‘vigilant’ Opposition in Bangladesh: Ameer Shafiqur Rahman
            </h1>

            <!-- Sub Heading -->
            <p class="fs-5 text-muted mt-3">
                The remarks of Jamaat-e-Islami leader came a day after the largest Islamist party of Bangladesh alleged
                that the election process had “inconsistencies and fabrications”
            </p>

            <!-- Date -->
            <p class="small mt-3">
                <span class="text-danger fw-bold">Updated</span> –
                February 14, 2026 09:04 am IST - DHAKA
            </p>

            <!-- Author -->
            <div class="d-flex align-items-center mb-4">
                <img src="{{ asset('images/writer.png') }}" width="40" height="40" class="rounded-circle me-2">
                <span class="fw-semibold">KALLOL BHATTACHERJEE</span>
            </div>


            <!-- Featured Image -->
            <div class="article-image mb-3">
                <img src="{{ asset('images/quad.png') }}" class="img-fluid w-100">

                <!-- Caption -->
                <p class="image-caption">
                    Shafiqur Rahman, Ameer of Jamaat-e-Islami Bangladesh, attends a press conference following the 13th
                    general election, in Dhaka. | Photo Credit: Reuters
                </p>
            </div>


            <!-- Article Content -->
            <div class="article-content ms-auto">
                <p>
                    The Jamaat-e-Islami will serve as a ‘vigilant’ opposition and hold
                    the government of Bangladesh to account, said the leader of the party in a
                    statement to the media on Saturday (February 14, 2026).
                </p>

                <p>
                    The remarks of Ameer Shafiqur Rahman came a day after the largest Islamist
                    party of Bangladesh alleged that the election process had “inconsistencies and
                    fabrications” after the eleven-party alliance led by it won seventy-seven seats
                    in the national parliament.
                </p>
                <!-- Advertisement Break -->
                <div class="my-5 text-center">
                    <p class="small text-muted mb-2">
                        Continue reading after this <span class="fw-bold">ADVERTISEMENT</span>
                    </p>

                    <img src="{{ asset('images/add2.png') }}" class="img-fluid">
                </div>
                <div class="bg-light p-4 mt-5 rounded">

                    <h4 class="fw-bold mb-3">
                        Subscribe now to unlock this article.
                    </h4>

                    <p class="text-danger border-bottom border-dark border-1 pb-4">
                        Misinformation is free. Quality journalism isn’t. Subscribe to what matters.
                    </p>



                    <h5 class="mt-4">
                        The Hindu Digital + The Hindu ePaper + Crossword – 1 Year
                    </h5>

                    <h3 class="fw-bold ">₹ 2399</h3>

                    <a href="#" class="btn btn-danger mt-2 px-4  ">
                        SUBSCRIBE NOW
                    </a>

                    <hr class="mt-4">

                    <p class="small text-muted mb-0 ">
                        Learn more about The Hindu subscription
                    </p>

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

                <!-- Title with Lines -->
                <div class="d-flex align-items-center my-3">

                    <!-- Left 3 Lines -->
                    <div class="flex-grow-1 me-3">
                        <div class="border-top border-2 mb-1"></div>
                        <div class="border-top border-2 mb-1"></div>
                        <div class="border-top border-2 mb-1"></div>
                        <div class="border-top border-2 mb-1"></div>
                        <div class="border-top border-2"></div>
                    </div>

                    <!-- Title -->
                    <h5 class="fw-bold text-danger mb-0 px-2" style="font-size:22px; white-space:nowrap;">
                        Most Popular
                    </h5>

                    <!-- Right 3 Lines -->
                    <div class="flex-grow-1 ms-3">
                        <div class="border-top border-2 mb-1"></div>
                        <div class="border-top border-2 mb-1"></div>
                        <div class="border-top border-2 mb-1"></div>
                        <div class="border-top border-2 mb-1"></div>
                        <div class="border-top border-2"></div>
                    </div>

                </div>


                <!-- News Item 1 -->
                <!-- News Item 1 -->
                <div class="d-flex py-3 border-bottom">
                    <img src="{{ asset('images/kerela.png') }}" width="95" height="70" class="me-3 object-fit-cover">

                    <a href="{{ route('english.news') }}" class="txt">

                        Kerala motivational speaker and former police officer Philip Mampad detained in POCSO case
                    </a>
                </div>


                <!-- News Item 2 -->
                <div class="d-flex py-3 border-bottom">
                    <img src="{{ asset('images/Tarique.png') }}" width="95" height="70" class="me-3 object-fit-cover">

                    <a href="{{ route('english.news') }}" class="txt">

                        Tarique Rahman’s BNP alliance wins absolute majority of 212 Parliament seats in Bangladesh poll
                    </a>
                </div>


                <!-- News Item 3 -->
                <div class="d-flex py-3 border-bottom">
                    <img src="{{ asset('images/student.png') }}" width="95" height="70" class="me-3 object-fit-cover">

                    <a href="{{ route('english.news') }}" class="txt">
                        Father of Indian student killed in U.S. dies just before $29 million settlement

                    </a>
                </div>

                <!-- News Item 4 -->
                <div class="d-flex py-3 border-bottom">
                    <img src="{{ asset('images/student2.png') }}" width="95" height="70" class="me-3 object-fit-cover">

                    <a href="{{ route('english.news') }}" class="txt">
                        Father of Indian student killed in U.S. dies just before $29 million settlement

                    </a>
                </div>

                <!-- News Item 5 -->
                <div class="d-flex py-3 border-bottom">
                    <img src="{{ asset('images/student3.png') }}" width="95" height="70" class="me-3 object-fit-cover">

                    <a href="{{ route('english.news') }}" class="txt">
                        Father of Indian student killed in U.S. dies just before $29 million settlement

                    </a>
                </div>


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
@include('partials.footer')

@endsection