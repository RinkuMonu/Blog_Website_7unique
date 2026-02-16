@extends('layouts.app')


@section('content')

@include('partials.hero')
<style>
.page-header-row {
    position: relative;
}

.page-title {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    font-size: 32px;
    font-weight: 900;
    color: #B00020;
}

.breadcrumb-custom {
    font-size: 14px;
    letter-spacing: 1px;
}

.breadcrumb-custom a {
    text-decoration: none;
    color: #000;
}

.breadcrumb-custom span {
    margin: 0 6px;
    color: #999;
}

.breadcrumb-custom .active {
    color: #B00020;
    border-bottom: 2px solid #B00020;
    padding-bottom: 2px;
}
</style>

<div class="container">


    <div class="container mt-4">

        <div class="d-flex align-items-center">

            <!-- Left Lines -->
            <div class="grow">
                <hr class="m-0" style="border-top:2px solid #ccc;">
                <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
                <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
                <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
            </div>

            <!-- Center Title -->
            <h2 class="mx-4 red fw-bold mb-3">
                World
            </h2>

            <!-- Right Lines -->
            <div class="grow">
                <hr class="m-0" style="border-top:2px solid #ccc;">
                <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
                <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
                <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
            </div>

        </div>

        <!-- Breadcrumb (Below Heading) -->
        <div class="breadcrumb-custom mb-4">
            <a href="#">NEWS</a>
            <span>/</span>
            <a href="#">INDIA</a>
            <span>/</span>
            <a href="{{ route('world') }}" class="active">WORLD</a>
            <span>/</span>
            <a href="#">STATES</a>
            <span>/</span>
            <a href="#">CITIES</a>
        </div>

    </div>




    <div class="row">

        <!-- LEFT SIDEBAR -->
        <div class="col-lg-3">

            <p> <a href="/" class="red fw-bold">WORLD</a></p>
            <h6><a href="/" class="txt">Former Pakistan PM Imran Khan examined by team of doctors in jail, his party
                    rejects inspection</a></h6>
            <small style="font-size: 10px;"><a href="/" class="smll">PTI</a></small>
            <hr>

            <p> <a href="/" class="red fw-bold">WORLD</a></p>
            <h6><a href="/" class="txt">AI Impact Summit: U.K. Deputy PM calls Delhi summit ‘important moment’ to unlock
                    full benefits of AI</a></h6>
            <small style="font-size: 10px;"><a href="/" class="smll">PTI</a></small>
            <hr>

            <p> <a href="/" class="red fw-bold">WORLD</a></p>
            <a href="/">
                <img src="images/leader.png" class="img-fluid mt-2 mb-3">
            </a>
            <h6><a href="/" class="txt">Tarique Rahman reaches out to Opposition leaders ahead of swearing-in
                    ceremony</a></h6>
            <small style="font-size: 10px;"><a href="/" class="smll">KALLOL BHATTACHERJEE</a></small>

        </div>


        <!-- CENTER MAIN CONTENT -->
        <div class="col-lg-6">

            <!-- Main Headline -->
            <h2><a href="/" class="txt">A fireworks store explosion in China kills 8 ahead of Lunar New Year</a></h2>

            <div class="row my-3">
                <div class="col-md-6">
                    <a href="/">
                        <img src="images/firecrackers.png" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-6 ">
                    <p> <a href="/" class="txt">Setting off firecrackers at midnight on the Lunar New Year is a
                            tradition in China </a></p>
                    <small style="font-size: 10px;"><a href="/" class="smll">AP</a></small>
                </div>
            </div>

            <hr>

            <!-- BELOW SPLIT SECTION -->
            <div class="row">

                <!-- LEFT COLUMN -->
                <div class="col-md-6">
                    <p> <a href="/" class="red fw-bold">WORLD</a></p>
                    <h5><a href="/" class="txt fw-bold">North Korea opens new housing district for families of Ukraine
                            war
                            dead</a></h5>
                    <small style="font-size: 10px;"><a href="/" class="smll">AP</a></small>
                    <hr>

                    <p> <a href="/" class="red fw-bold">WORLD</a></p>
                    <h5><a href="/" class="txt fw-bold">Teen daughter of Chicago man detained in immigration case</a>
                    </h5>
                </div>

                <!-- RIGHT COLUMN -->
                <div class="col-md-6">
                    <h5><a href="/" class="txt fw-bold">Ambiguities in the U.S.-India trade deal</a></h5>
                    <a href="/">
                        <img src="images/people.png" class="img-fluid mt-2">
                    </a>
                </div>

            </div>

        </div>


        <!-- RIGHT SIDEBAR -->
        <div class="col-lg-3 border-start">

            <!-- Advertisement -->
            <a href="/">
                <img src="images/yogi.png" class="img-fluid mb-4">
            </a>

            <p class="text-center" style="font-size:9px;">ADVERTISEMENT</p>

            <hr>

            <!-- Most Popular -->
                    <div class="d-flex align-items-center">

            <!-- Left Lines -->
            <div class="grow">
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
            <div class="grow">
                <hr class="m-0" style="border-top:2px solid #ccc;">
                <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
                <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
                <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
            </div>

        </div>

            <!-- Item 1 -->
            <div class="d-flex mb-3">
                <a href="/">
                    <img src="images/meta.png" width="70" height="70" class="me-2">
                </a>
                <div>
                    <a href="/" class="txt">
                        Morning Digest: Jaishankar denies India has lost ‘strategic autonomy’...
                    </a>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="d-flex mb-3">
                <a href="/">
                    <img src="images/dontknow.png" width="70" height="70" class="me-2">
                </a>
                <div>
                    <a href="/" class="txt">
                        Two Bengal academicians win A.K. Ramanujan Prize...
                    </a>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="d-flex">
                <a href="/">
                    <img src="images/gpt.png" width="70" height="70" class="me-2">
                </a>
                <div>
                    <a href="/" class="txt">
                        ChatGPT helps physicists reveal a ‘simple’ formula — why it matters
                    </a>
                </div>
            </div>

        </div>


    </div>
    
</div>






    @include('partials.missed')
    @include('partials.footer')

    @endsection