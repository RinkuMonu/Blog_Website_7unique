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
.nav-tabs .nav-link {
    color: #000 !important;     /* all tabs black */
    font-weight: 600;
}

.nav-tabs .nav-link.active {
    color: #B00020 !important;  /* active tab red */
    border-color: transparent transparent #B00020 transparent;
}

.nav-tabs .nav-link:hover {
    color: #B00020 !important;  /* hover effect */
}

</style>

<div class="container">


    <div class="container mt-4 mb-5">

        <div class="d-flex align-items-center">

            <!-- Left Lines -->
            <div class="flex-grow-1">
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
            <div class="flex-grow-1">
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
    <div class="conflict-section">
        <div class="container my-5">

            <!-- Section Title -->
            <div class="d-flex align-items-center mb-4">

                <!-- Left Lines -->
                <div class="flex-grow-1">
                    <hr class="my-1">
                    <hr class="my-1">
                    <hr class="my-1">
                </div>

                <!-- Center Title -->
                <h2 class="mx-4 fw-bold red mb-0 text-center">
                    Israel–Palestine Conflict
                </h2>

                <!-- Right Lines -->
                <div class="flex-grow-1">
                    <hr class="my-1">
                    <hr class="my-1">
                    <hr class="my-1">
                </div>

            </div>

            <div class="row">

                <!-- Column 1 -->
                <div class="col-lg-3 border-end">
                    <a href="/">
                        <img src="images/lebanon.png" class="img-fluid mb-2">
                    </a>
                    <h5>
                        <a href="/" class="txt">
                            Lebanon says four dead in strike as Israel says targeted Palestinian group
                        </a>
                    </h5>
                    <small style="font-size: 10px;"><a href="/" class="smll">AFP</a></small>


                </div>

                <!-- Column 2 -->
                <div class="col-lg-3 border-end">
                    <h5>
                        <a href="/" class="txt">
                            Israel will begin contentious West Bank land registration in new step to deepen control
                        </a>
                    </h5>
                    <small style="font-size: 10px;"><a href="/" class="smll">AP</a></small>

                    <hr>

                    <p class=" fw-bold small mb-1"><a href="/" class="red">WORLD</p>
                    <h5>
                        <a href="/" class="txt">
                            Board of Peace members have pledged $5 billion for Gaza: Trump
                        </a>
                    </h5>
                    <small style="font-size: 10px;"><a href="/" class="smll">STANLY JOHNY</a></small>
                </div>

                <!-- Column 3 -->
                <div class="col-lg-3 border-end">
                    <a href="/">
                        <img src="images/gaza.png" class="img-fluid mb-2">
                    </a>
                    <h5>
                        <a href="/" class="txt">
                            Israeli airstrikes kill 12 in Gaza, Palestinians say; Israel says Hamas violated truce
                        </a>
                    </h5>
                    <small style="font-size: 10px;"><a href="/" class="smll">AGENCIES</a></small>
                </div>

                <!-- Column 4 -->
                <div class="col-lg-3">
                    <a href="/">
                        <img src="images/anrundhati.png" class="img-fluid mb-2">
                    </a>
                    <p class=" fw-bold small mb-1"><a href="/" class="red">MOVIES</a></p>
                    <h5>
                        <a href="/" class="txt">
                            ‘Shocked and disgusted’: Arundhati Roy pulls out of Berlin International Film Festival over
                            Gaza
                            remarks
                        </a>
                    </h5>
                </div>

            </div>
            <div class="mt-3 text-center">
                <a href="#" class="text-dark fw-bold text-decoration-none see-more">
                    SEE MORE →
                </a>
            </div>

        </div>

    </div>

    <!-- New section -->
    <div class="container my-5 px-5">


        <!-- SECTION TITLE -->
        <div class="d-flex align-items-center mb-4">

            <div class="flex-grow-1">
                <hr class="my-1">
                <hr class="my-1">
            </div>

            <h2 class="mx-4 fw-bold red mb-0">
                From Our Correspondents
            </h2>

            <div class="flex-grow-1">
                <hr class="my-1">
                <hr class="my-1">
            </div>

        </div>

        <!-- TABS -->
        <ul class="nav nav-tabs justify-content-center mb-4" id="correspondentTabs" role="tablist">
            <li class="nav-item">
                <button class="nav-link active  fw-bold" data-bs-toggle="tab" data-bs-target="#kallol">KALLOL
                    BHATTACHARJEE</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#meera">MEERA SRINIVASAN</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sriram">SRIRAM LAKSHMAN</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#stanly">STANLY JOHNY</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#suhasini">SUHASINI HAIDAR</button>
            </li>
        </ul>

        <!-- TAB CONTENT -->
        <div class="tab-content">

            <!-- TAB 1 -->
            <div class="tab-pane fade show active" id="kallol">

                <div class="row g-5">

                    <!-- Left -->
                    <div class="col-lg-4 border-end">
                        <a href="/">
                            <img src="images/tariqu.png" class="img-fluid mb-2">
                        </a>
                        <h5><a href="/" class="txt">Tarique Rahman reaches out to Opposition leaders ahead of
                                swearing-in ceremony</a></h5>
                        <small><a href="/" class="smll" style="font-size:10px;">KALLOL BHATTACHARJEE</a></small>
                    </div>

                    <!-- Middle -->
                    <div class="col-lg-4 border-end">
                        <p class="fw-bold small mb-1"><a href="/" class="red">INDIA</a></p>
                        <h5><a href="/" class="txt">Hope for India-Bangladesh ties in Tarique Rahman’s development
                                pitch: diplomatic sources
                            </a></h5>
                        <small><a href="/" class="smll" style="font-size:10px;">KALLOL BHATTACHARJEE</a></small>

                        <hr>

                        <p class="fw-bold small mb-1">
                            <span class="badge bg-warning text-dark">TH</span><a href="/" class="txt"> PREMIUM</a>
                        </p>
                        <h5><a href="/" class="txt">Bangladesh Nationalist Party | Return of the old guard</a></h5>
                        <small><a href="/" class="smll" style="font-size:10px;">KALLOL BHATTACHARJEE</a></small>
                    </div>

                    <!-- Right -->
                    <div class="col-lg-4">
                        <a href="/">
                            <img src="images/crowd.png" class="img-fluid mb-2">
                        </a>
                        <h5><a href="/" class="txt">‘National interest’ will guide BNP on Ganga Water Treaty renewal:
                                BNP chair’s foreign
                                affairs adviser</a></h5>
                        <small><a href="/" class="smll" style="font-size:10px;">KALLOL BHATTACHARJEE</a></small>
                    </div>

                </div>

            </div>

            <!-- OTHER TABS (duplicate structure for now) -->
            <div class="tab-pane fade" id="meera">
                <div class="row g-5">

                    <!-- Left -->
                    <div class="col-lg-4 border-end">
                        <a href="/">
                            <img src="images/speaker.png" class="img-fluid mb-2">
                        </a>
                        <h5><a href="/" class="txt">Tarique Rahman reaches out to Opposition leaders ahead of
                                swearing-in ceremony</a></h5>
                        <small><a href="/" class="smll" style="font-size:10px;">KALLOL BHATTACHARJEE</a></small>
                    </div>

                    <!-- Middle -->
                    <div class="col-lg-4 border-end">
                        <p class="fw-bold small mb-1"><a href="/" class="red">INDIA</a></p>
                        <h5><a href="/" class="txt">Hope for India-Bangladesh ties in Tarique Rahman’s development
                                pitch: diplomatic sources
                            </a></h5>
                        <small><a href="/" class="smll" style="font-size:10px;">KALLOL BHATTACHARJEE</a></small>

                        <hr>

                        <p class="fw-bold small mb-1">
                            <span class="badge bg-warning text-dark">TH</span><a href="/" class="txt"> PREMIUM</a>
                        </p>
                        <h5><a href="/" class="txt">Bangladesh Nationalist Party | Return of the old guard</a></h5>
                        <small><a href="/" class="smll" style="font-size:10px;">KALLOL BHATTACHARJEE</a></small>
                    </div>

                    <!-- Right -->
                    <div class="col-lg-4">
                        <a href="/">
                            <img src="images/crowd1.png" class="img-fluid mb-2">
                        </a>
                        <h5><a href="/" class="txt">‘National interest’ will guide BNP on Ganga Water Treaty renewal:
                                BNP chair’s foreign
                                affairs adviser</a></h5>
                        <small><a href="/" class="smll" style="font-size:10px;">KALLOL BHATTACHARJEE</a></small>
                    </div>

                </div>
            </div>

            <div class="tab-pane fade" id="sriram">
                <div class="row g-5">

                    <!-- Left -->
                    <div class="col-lg-4 border-end">
                        <a href="/">
                            <img src="images/jaishankar.png" class="img-fluid mb-2">
                        </a>
                        <h5><a href="/" class="txt">Tarique Rahman reaches out to Opposition leaders ahead of
                                swearing-in ceremony</a></h5>
                        <small><a href="/" class="smll" style="font-size:10px;">KALLOL BHATTACHARJEE</a></small>
                    </div>

                    <!-- Middle -->
                    <div class="col-lg-4 border-end">
                        <p class="fw-bold small mb-1"><a href="/" class="red">INDIA</a></p>
                        <h5><a href="/" class="txt">Hope for India-Bangladesh ties in Tarique Rahman’s development
                                pitch: diplomatic sources
                            </a></h5>
                        <small><a href="/" class="smll" style="font-size:10px;">KALLOL BHATTACHARJEE</a></small>

                        <hr>

                        <p class="fw-bold small mb-1">
                            <span class="badge bg-warning text-dark">TH</span><a href="/" class="txt"> PREMIUM</a>
                        </p>
                        <h5><a href="/" class="txt">Bangladesh Nationalist Party | Return of the old guard</a></h5>
                        <small><a href="/" class="smll" style="font-size:10px;">KALLOL BHATTACHARJEE</a></small>
                    </div>

                    <!-- Right -->
                    <div class="col-lg-4">
                        <a href="/">
                            <img src="images/goggles.png" class="img-fluid mb-2">
                        </a>
                        <h5><a href="/" class="txt">‘National interest’ will guide BNP on Ganga Water Treaty renewal:
                                BNP chair’s foreign
                                affairs adviser</a></h5>
                        <small><a href="/" class="smll" style="font-size:10px;">KALLOL BHATTACHARJEE</a></small>
                    </div>

                </div>
            </div>

            <div class="tab-pane fade" id="stanly">
                <div class="row g-5">

                    <!-- Left -->
                    <div class="col-lg-4 border-end">
                        <a href="/">
                            <img src="images/trump.png" class="img-fluid mb-2">
                        </a>
                        <h5><a href="/" class="txt">Tarique Rahman reaches out to Opposition leaders ahead of
                                swearing-in ceremony</a></h5>
                        <small><a href="/" class="smll" style="font-size:10px;">KALLOL BHATTACHARJEE</a></small>
                    </div>

                    <!-- Middle -->
                    <div class="col-lg-4 border-end">
                        <p class="fw-bold small mb-1"><a href="/" class="red">INDIA</a></p>
                        <h5><a href="/" class="txt">Hope for India-Bangladesh ties in Tarique Rahman’s development
                                pitch: diplomatic sources
                            </a></h5>
                        <small><a href="/" class="smll" style="font-size:10px;">KALLOL BHATTACHARJEE</a></small>

                        <hr>

                        <p class="fw-bold small mb-1">
                            <span class="badge bg-warning text-dark">TH</span><a href="/" class="txt"> PREMIUM</a>
                        </p>
                        <h5><a href="/" class="txt">Bangladesh Nationalist Party | Return of the old guard</a></h5>
                        <small><a href="/" class="smll" style="font-size:10px;">KALLOL BHATTACHARJEE</a></small>
                    </div>

                    <!-- Right -->
                    <div class="col-lg-4">
                        <a href="/">
                            <img src="images/imran.png" class="img-fluid mb-2">
                        </a>
                        <h5><a href="/" class="txt">‘National interest’ will guide BNP on Ganga Water Treaty renewal:
                                BNP chair’s foreign
                                affairs adviser</a></h5>
                        <small><a href="/" class="smll" style="font-size:10px;">KALLOL BHATTACHARJEE</a></small>
                    </div>

                </div>
            </div>

            <div class="tab-pane fade" id="suhasini">
                <div class="row g-5">

                    <!-- Left -->
                    <div class="col-lg-4 border-end">
                        <a href="/">
                            <img src="images/flag.png" class="img-fluid mb-2">
                        </a>
                        <h5><a href="/" class="txt">Tarique Rahman reaches out to Opposition leaders ahead of
                                swearing-in ceremony</a></h5>
                        <small><a href="/" class="smll" style="font-size:10px;">KALLOL BHATTACHARJEE</a></small>
                    </div>

                    <!-- Middle -->
                    <div class="col-lg-4 border-end">
                        <p class="fw-bold small mb-1"><a href="/" class="red">INDIA</a></p>
                        <h5><a href="/" class="txt">Hope for India-Bangladesh ties in Tarique Rahman’s development
                                pitch: diplomatic sources
                            </a></h5>
                        <small><a href="/" class="smll" style="font-size:10px;">KALLOL BHATTACHARJEE</a></small>

                        <hr>

                        <p class="fw-bold small mb-1">
                            <span class="badge bg-warning text-dark">TH</span><a href="/" class="txt"> PREMIUM</a>
                        </p>
                        <h5><a href="/" class="txt">Bangladesh Nationalist Party | Return of the old guard</a></h5>
                        <small><a href="/" class="smll" style="font-size:10px;">KALLOL BHATTACHARJEE</a></small>
                    </div>

                    <!-- Right -->
                    <div class="col-lg-4">
                        <a href="/">
                            <img src="images/thumbnail.png" class="img-fluid mb-2">
                        </a>
                        <h5><a href="/" class="txt">‘National interest’ will guide BNP on Ganga Water Treaty renewal:
                                BNP chair’s foreign
                                affairs adviser</a></h5>
                        <small><a href="/" class="smll" style="font-size:10px;">KALLOL BHATTACHARJEE</a></small>
                    </div>

                </div>
            </div>

        </div>

        
        

    </div>


</div>






@include('partials.missed')
@include('partials.footer')

@endsection