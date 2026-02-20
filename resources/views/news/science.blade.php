@extends('layouts.app')


@section('content')

@include('partials.hero')



<div class="container my-4">

    <!-- Decorative Header -->
    <div class="d-flex align-items-center mb-3">

        <div class="flex-grow-1">
            <hr class="my-1">
            <hr class="my-1">
            <hr class="my-1">
        </div>

        <h2 class="mx-4 fw-bold red mb-0">
            Science
        </h2>

        <div class="flex-grow-1">
            <hr class="my-1">
            <hr class="my-1">
            <hr class="my-1">
        </div>

    </div>

    <!-- Category Nav -->
    <div class="mb-4 small">
        SCI-TECH / <span class="red fw-bold">SCIENCE</span> / TECHNOLOGY / HEALTH /
        AGRICULTURE / ENVIRONMENT / GADGETS / INTERNET
    </div>


    <div class="row">

        <!-- LEFT COLUMN -->
        <div class="col-lg-3 border-end pe-4">

            <p class="r fw-bold small mb-1"><a href="/" class="red">SCIENCE</a></p>
            <h6><a href="/" class="txt">Astronomers puzzle over ‘inside out’ planetary system</a></h6>
            <small style="font-size: 10px;"><a href="/" class="smll">REUTERS</a></small>
            <hr>

            <p class=" fw-bold small mb-1"><a href="/" class="red">SCI-TECH</a></p>
            <h6><a href="/" class="txt">Four new astronauts arrive at International Space Station</a></h6>
            <small style="font-size: 10px;"><a href="/" class="smll">AP</a></small>
            <hr>

            <p class=" fw-bold small mb-1"><a href="/" class="red">CHENNAI</a></p>
            <h6><a href="/" class="txt">Neurobehavioural therapy can reshape brain networks</a></h6>
            <small style="font-size:10px;"><a href="/" class="smll">THE HINDU BUREAU</a></small>
            <hr>
            <a href="/">
                <img src="images/gpt.png" class="img-fluid mt-3 mb-2">
            </a>

            <p class="small fw-bold">
                <span class="badge bg-warning text-dark">TH</span><a href="/" class="txt"> PREMIUM</a>
            </p>
            <h6>
                <a href="/" class="txt">
                    How OpenAI’s ChatGPT helped scientists crack a tedious physics problem
                </a>
            </h6>
            <small style="font-size:10px;"><a href="/" class="smll">Vasudevan mukunth</a></small>


        </div>



        <!-- CENTER COLUMN -->
        <div class="col-lg-6 border-end px-4">

            <p class="small fw-bold">
                <span class="badge bg-warning text-dark">TH</span><a href="/" class="txt"> PREMIUM</a>
            </p>

            <h3 class="fw-bold">
                <a href="/" class="txt">
                    What are bio-based chemicals and enzymes? | Explained
                </a>
            </h3>

            <div class="row my-3">
                <div class="col-md-6">
                    <a href="/">
                        <img src="images/lab.png" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-6">
                    <p>
                        <a href="/" class="txt">
                            How is India positioned with respect to scaling bio-based chemicals and enzymes?
                        </a>
                    </p>
                    <small style="font-size: 10px;"><a href="/" class="smll">SHAMBHAVI NAIK</a></small>
                </div>
            </div>

            <hr>

            <div class="row">

                <div class="col-md-6 border-end pe-3">
                    <p class="small fw-bold">
                        <span class="badge bg-warning text-dark">TH</span><a href="/" class="txt"> PREMIUM</a>
                    </p>
                    <h6>
                        <a href="/" class="txt fw-bold fs-5">
                            Cows can use tools, and one Austrian cow has now shown it clearly
                        </a>
                    </h6>
                    <small style="font-size: 10px;"><a href="/" class="smll">SAYANTAN DATTA</a></small>
                    <hr>

                    <p class="small fw-bold">
                        <span class="badge bg-warning text-dark">TH</span><a href="/" class="txt"> PREMIUM</a>
                    </p>
                    <h6 class="fs-5 fw-bold">
                        <a href="/" class="txt">
                            Bridging a divide with an ‘Indian Scientific Service’
                        </a>
                    </h6>
                </div>

                <div class="col-md-6 ps-3">
                    <h6 class="fw-bold fs-5">
                        <a href="/" class="txt">
                            Debris of rockets with ISRO logo found near uninhabited island in Maldives
                        </a>
                    </h6>
                    <a href="/">
                        <img src="images/blur.png" class="img-fluid mt-2">
                    </a>
                </div>

            </div>

        </div>



        <!-- RIGHT COLUMN -->
        <div class="col-lg-3 ps-4">
            <a href="/">
                <img src="images/yogi.png" class="img-fluid mb-3">
            </a>

            <p class="text-center small text-muted">ADVERTISEMENT</p>

            <hr>

            <div class="d-flex align-items-center">

                <!-- Left Lines -->
                <div class="flex-grow-1">
                    <hr class="m-0" style="border-top:2px solid #ccc;">
                    <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
                    <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
                    <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
                </div>

                <!-- Center Title -->
                <h5 class="mx-4 red fw-bold  mb-3">
                    Most popular
                </h5>

                <!-- Right Lines -->
                <div class="flex-grow-1">
                    <hr class="m-0" style="border-top:2px solid #ccc;">
                    <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
                    <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
                    <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
                </div>

            </div>

            <div class="d-flex mb-3">
                <img src="images/trump.png" width="70" height="70" class="me-2">
                <div>
                    <a href="/" class="txt">
                        U.S. President Trump hails trade deal with India as ‘historic’
                    </a>
                </div>
            </div>

            <div class="d-flex mb-3">
                <a href="/">
                    <img src="images/law.png" width="70" height="70" class="me-2">
                </a>
                <div>
                    <a href="/" class="txt">
                        SC refers to Constitution Bench on privacy rights
                    </a>
                </div>
            </div>

            <div class="d-flex">
                <a href="/">
                    <img src="images/law2.png" width="70" height="70" class="me-2">
                </a>
                <div>
                    <a href="/" class="txt">
                        CPI (M) criticises BJP Govt for giving ‘cruel burial’ to MGNREGA
                    </a>
                </div>
            </div>

        </div>

    </div>

</div>



@include('partials.missed')
@include('partials.footer')

@endsection