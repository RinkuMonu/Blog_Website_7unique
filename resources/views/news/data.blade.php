@extends('layouts.app')

@section('content')

@include('partials.hero')

<div class="container my-5">

    <!-- SECTION TITLE -->
    <div class="d-flex align-items-center mb-5">
        <div class="flex-grow-1">
            <hr class="my-1">
            <hr class="my-1">
            <hr class="my-1">
        </div>

        <h2 class="mx-4 fw-bold red mb-0">Data</h2>

        <div class="flex-grow-1">
            <hr class="my-1">
            <hr class="my-1">
            <hr class="my-1">
        </div>
    </div>

    <div class="row">

        <!-- LEFT COLUMN -->
        <div class="col-lg-3 border-end">

            <p class="fw-bold small mb-1"><a href="/" class="red">DATA</a></p>
            <h6><a href="/" class="txt">PM Narendra Modi’s foreign visits cost ₹462 crores in 2021-25</a></h6>
            <small style="font-size:10px;"><a href="/" class="smll">THE HINDU DATA TEAM</a></small>
            <hr>

            <p class="fw-bold small mb-1">
                <span class="badge bg-warning text-dark">TH</span> <a href="/" class="txt">PREMIUM</a>
            </p>
            <h6><a href="/" class="txt">Lok Sabha majorities: Hindi heartland States overrepresented in 11 out of last
                    15 polls</a></h6>
            <small style="font-size:10px;"><a href="/" class="smll">VARGHESE K. GEORGE, NITIKA FRANCIS</a></small>
            <hr>

            <p class="fw-bold small mb-1">
                <span class="badge bg-warning text-dark">TH</span> <a href="/" class="txt">PREMIUM</a>
            </p>
            <h6><a href="/" class="txt">Has the 16th Finance Commission sidelined the States and prioritised the
                    Centre’s needs?</a></h6>
            <small style="font-size:10px;"><a href="/" class="smll">SAMBAVI PARTHASARATHY</a></small>
            <hr>
            <a href="/">
                <img src="images/leader.png" class="img-fluid mb-2">
            </a>
            <p class="fw-boldsmall"><a href="/" class="red">VIDEOS</a></p>
            <h6><a href="/" class="txt">Watch: Aravalli hills issue: why are the stakes particularly high in
                    Rajasthan?</a></h6>

        </div>

        <!-- CENTER MAIN -->
        <div class="col-lg-6">

            <p class="fw-bold small mb-1">
                <span class="badge bg-warning text-dark">TH</span> <a href="/" class="txt">PREMIUM</a>
            </p>

            <h3 class="fw-bold">
                <a href="/" class="txt"> Tale of two consumers: Rural aspiration vs. urban caution</a>
            </h3>

            <div class="row my-3">
                <div class="col-md-7">
                    <a href="/">
                        <img src="images/dollar.png" class="img-fluid"></a>
                </div>
                <div class="col-md-5">
                    <p>
                        <a href="/" class="txt"> The demand among rural consumers for non-essentials remains strong
                            despite weakening sentiments in urban areas </a>
                    </p>
                    <small style="font-size:10px;"><a href="/" class="smll">VIGNESH RADHAKRISHNAN</a></small>
                </div>
            </div>

            <hr>

            <div class="row">

                <div class="col-md-6 border-end">
                    <p class="fw-bold small mb-1">
                        <span class="badge bg-warning text-dark">TH</span><a href="/" class="txt">PREMIUM</a>
                    </p>
                    <h6><a href="/" class="txt">Over 60 went missing each day in Delhi, including 16 children: Data</a>
                    </h6>
                    <small style="font-size:10px;"><a href="/" class="smll">SAMBAVI PARTHASARATHY</a></small>

                    <hr>

                    <p class="fw-bold small mb-1">
                        <span class="badge bg-warning text-dark">TH</span><a href="/" class="txt">PREMIUM</a>
                    </p>
                    <h6><a href="/" class="txt">Less than half of those trained under PM-DAKSH scheme for SCs, BCs, DNTs
                            got jobs</a></h6>
                </div>

                <div class="col-md-6">
                    <p class="fw-bold small mb-1">
                        <span class="badge bg-warning text-dark">TH</span><a href="/" class="txt">PREMIUM</a>
                    </p>
                    <h6><a href="/" class="txt">Why Canada can’t leverage oil like China did rare earths</a></h6>
                    <a href="/">
                        <img src="images/trump.png" class="img-fluid mt-2"> </a>
                </div>

            </div>

        </div>

        <!-- RIGHT SIDEBAR -->
        <div class="col-lg-3 border-start">
            <a href="/">
                <img src="images/yogi.png" class="img-fluid mb-4">
            </a>
            <p class="text-center small text-muted">ADVERTISEMENT</p>

            <hr>

            <div class="d-flex align-items-center mb-3">
                <div class="flex-grow-1">
                    <hr class="my-1">
                    <hr class="my-1">
                </div>
                <h5 class="mx-3 red fw-bold mb-0">Most Popular</h5>
                <div class="flex-grow-1">
                    <hr class="my-1">
                    <hr class="my-1">
                </div>
            </div>

            <div class="d-flex mb-3">
                <a href="/">
                    <img src="images/trisha.png" width="70" height="70" class="me-2">
                </a>
                <div>
                    <a href="/" class="txt">
                        Trisha condemns ‘distasteful remark’ after Tamil Nadu BJP leader Nainar Nagendran’s...
                    </a>
                </div>
            </div>

            <div class="d-flex mb-3">
                <a href="/">
                    <img src="images/leader2.png" width="70" height="70" class="me-2">
                </a>
                <div>
                    <a href="/" class="txt">
                        Bangladesh seeks reset in India ties, onus on New Delhi to recognise changed reality...
                    </a>
                </div>
            </div>

            <div class="d-flex">
                <a href="/">
                    <img src="images/fire.png" width="70" height="70" class="me-2">
                </a>
                <div>
                    <a href="/" class="txt">
                        U.S. Military preparing for potentially weeks-long Iran operations
                    </a>
                </div>
            </div>

        </div>

    </div>

</div>

<div class="container my-5">

    <!-- SECTION TITLE -->
    <div class="d-flex align-items-center mb-5">

        <div class="flex-grow-1">
            <hr class="my-1">
            <hr class="my-1">
            <hr class="my-1">
        </div>

        <h2 class="mx-4 fw-bold red mb-0 text-center">
            Data Point Podcast
        </h2>

        <div class="flex-grow-1">
            <hr class="my-1">
            <hr class="my-1">
            <hr class="my-1">
        </div>

    </div>

    <div class="row g-4">

        <!-- COLUMN 1 -->
        <div class="col-lg-3 border-end">
            <a href="/">
                <img src="images/army.png" class="img-fluid mb-3">
            </a>

            <h5>
                <a href="/" class="txt">
                    In Focus Podcast | Crimes against women during conflict in Manipur: What the numbers don’t say
                </a>
            </h5>

            <small style="font-size:10px"> <a href="/" class="smll">NITIKA FRANCIS</a></small>
        </div>


        <!-- COLUMN 2 -->
        <div class="col-lg-3 border-end">

            <h5 class="mb-2">
                <a href="/" class="txt">
                    In Focus Podcast | Why Indians are shifting from fixed deposits to SIPs
                </a>
            </h5>

            <small class=" d-block mb-3" style="font-size:10px">
                <a href="/" class="smll">
                    DEVYANSHI BIHANI
                </a>
            </small>

            <hr>

            <p class="fw-bold small mb-1"><a href="/" class="red">PODCAST</a></p>

            <h6>
                <a href="/" class="txt">
                    In Focus Podcast | Are persons with disabilities in India compensated well?
                </a>
            </h6>

            <small style="font-size:10px">
                <a href="/" class="smll">
                    NITIKA FRANCIS
                </a>
            </small>

        </div>


        <!-- COLUMN 3 -->
        <div class="col-lg-3 border-end">
            <a href="/">
                <img src="images/youtube.png" class="img-fluid mb-3">
            </a>
            <h5>
                <a href="/" class="txt">
                    Behind the scenes: How the data and science teams measured heat stress | In Focus podcast
                </a>
            </h5>

            <small style="font-size:10px">
                <a href="/" class="smll">
                    VIGNESH RADHAKRISHNAN
                </a>
            </small>

        </div>


        <!-- COLUMN 4 -->
        <div class="col-lg-3">
            <a href="/">
                <img src="images/vi.png" class="img-fluid mb-3">
            </a>
            <p class="fw-bold small mb-1"><a href="/" class="red">PODCAST</a></p>

            <h5>
                <a href="/" class="txt">
                    Awareness or affordability: Why are cervical cancer screening levels low among Indian women? | Data
                    Point podcast
                </a>
            </h5>

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



@include('partials.missed')
@include('partials.footer')

@endsection