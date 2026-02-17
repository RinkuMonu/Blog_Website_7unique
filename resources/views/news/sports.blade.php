<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .more-stories {
        font-family: 'Merriweather', serif !important;
    }


    .nav-link {
        border: none;
        background: none;
    }

    .nav-link.active {
        color: #c40000 !important;
        border-bottom: 2px solid #c40000;
    }
    </style>
</head>

<body>
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
            <h2 class="mx-4 red fw-bold mb-0">
                Sports
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

                <!-- Item 1 -->
                <a href="{{ route('english.news') }}" class="txt">
                    <div class="mb-4 border-bottom pb-3">
                        <p class="red fw-bold mb-1">CRICKET</p>
                        <p class="mb-1">
                            There is little more pressure than a normal match: Axar on India vs Pakistan games
                        </p>
                        <small style="font-size:10px;"><a href="/" class="smll">PTI</a></small>
                    </div>
                </a>

                <!-- Item 2 -->
                <a href="{{ route('english.news') }}" class="txt">
                    <div class="mb-4 border-bottom pb-3">
                        <p class="red  fw-bold mb-1">CRICKET</p>
                        <p class="mb-1">
                            T20 World Cup, IND vs PAK: Suryakumar dedicates win to India
                        </p>
                        <p style="font-size:10px;"><a href="/" class="smll">REUTERS</a></p>
                    </div>
                </a>

                <!-- Item 3 -->
                <a href="{{ route('english.news') }}" class="txt">
                    <div class="mb-4 border-bottom pb-3">
                        <p class="red fw-bold mb-1">CRICKET</p>
                        <p class="mb-1">
                            T20 World Cup India vs Pakistan: Kishan, bowlers seal Team India's passage
                        </p>
                        <p style="font-size:10px;"><a href="/" class="smll">K.C. VIJAYA KUMAR</a></p>
                    </div>
                </a>

                <!-- Image Block -->
                <a href="{{ route('english.news') }}" class="txt">
                    <img src="{{ asset('img/cricket.png') }}" class="img-fluid mt-3 mb-3">
                </a>
                <p class=" fw-bold mb-1"><a href="/" class="red">CRICKET</a></p>
                <p class="mb-1">
                    <a href="/" class="txt">
                        T20 World Cup: Will take time to get over the loss against SA: Rashid
                    </a>
                </p>
                <p style="font-size:10px;"><a href="/" class="smll">VIVEK KRISHNAN</a></p>


            </div>


            <div class="col-lg-6">

                <!-- MAIN HEADLINE -->
                <a href="{{ route('english.news') }}" class="txt">
                    <h2 class="fw-bold mb-3" style="font-family:'Merriweather', serif;">
                        England opts to bat against Italy in must-win T20 World Cup tie
                    </h2>
                </a>

                <div class="row">

                    <!-- Image -->

                    <div class="col-md-7">
                        <a href="/">
                            <img src="{{ asset('img/austalia.png') }}" class="img-fluid">
                        </a>
                    </div>

                    <!-- Summary -->
                    <div class="col-md-5">
                        <p>
                            <a href="/" class="txt">
                                A victory in this contest will take England into the Super Eights stage and knock
                                Scotland
                                out
                                of contention
                            </a>
                        </p>
                        <p style="font-size:10px;"><a href="/" class="smll">PTI</a></p>
                    </div>

                </div>


                <hr class="my-4">
                <div class="row">


                    <div class="col-md-6">

                        <p class="red fw-bold mb-1"><a href="/" class="red">HOCKEY</a></p>

                        <h5 class="fw-bold">
                            <a href="/" class="txt">
                                FIH Pro League losses indicate Indian hockey’s problems go beyond the scoreline</a>
                        </h5>
                        <p style="font-size:10px;"> <a href="/" class="smll">UTHRA GANESAN</a></p>

                        <hr>

                        <p class="fw-bold mb-1"><a href="/" class="red">CRICKET</a></p>
                        <h5 class="fw-bold">
                            <a href="/" class="txt">
                                T20 World Cup: India continues to rise with clinical win over Pakistan
                            </a>
                        </h5>

                    </div>


                    <div class="col-md-6">

                        <h5 class="fw-bold">
                            <a href="/" class="txt">
                                Omarzai’s all-round heroics seal five-wicket win for Afghanistan
                            </a>
                        </h5>
                        <a href="/">
                            <img src="{{ asset('img/worldcup.png') }}" class="img-fluid mt-2">
                        </a>

                    </div>

                </div>

            </div>




            <div class="col-lg-3">

                <div class="mb-4 text-center">
                    <a href="{{ route('english.news') }}" class="txt">

                        <img src="{{ asset('images/sugam.png') }}" class="img-fluid">
                        <p class="small text-uppercase text-muted mt-2">Advertisement</p>
                    </a>
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
                        <h5 class="fw-bold red mb-0 px-2" style="white-space: nowrap;">
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
                        <a href="/">
                            <img src="{{ asset('img/thumb1.png') }}" width="95" height="70"
                                class="me-3 object-fit-cover">
                        </a>
                        <a href="{{ route('english.news') }}" class="txt">
                            T20 World Cup: India vs Pakistan match highlights
                        </a>
                    </div>


                    <!-- News Item 2 -->
                    <div class="d-flex py-3 border-bottom">
                        <a href="/">
                            <img src="{{ asset('img/thumb2.png') }}" width="95" height="70"
                                class="me-3 object-fit-cover">
                        </a>
                        <a href="{{ route('english.news') }}" class="txt">
                            Iran open to compromises to reach nuclear deal
                        </a>
                    </div>


                    <!-- News Item 3 -->
                    <div class="d-flex py-3 border-bottom">
                        <a href="/">
                            <img src="{{ asset('img/thumb3.png') }}" width="95" height="70"
                                class="me-3 object-fit-cover">
                        </a>
                        <a href="{{ route('english.news') }}" class="txt">
                            PM Modi declines invitation to ceremony
                        </a>
                    </div>



                </div>
            </div>

            <div class="container my-5">

                <!-- SECTION TITLE -->
                <div class="container mb-4">

                    <div class="d-flex align-items-center">

                        <!-- Left Lines -->
                        <div class="flex-grow-1">
                            <hr class="m-0" style="border-top:2px solid #ccc;">
                            <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
                            <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
                        </div>

                        <!-- Center Title -->
                        <h2 class="mx-4 red fw-bold mb-0">
                            Cricket
                        </h2>

                        <!-- Right Lines -->
                        <div class="flex-grow-1">
                            <hr class="m-0" style="border-top:2px solid #ccc;">
                            <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
                            <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
                        </div>

                    </div>

                </div>


                <div class="row g-4">

                    <!-- COLUMN 1 -->
                    <div class="col-lg-3">

                        <a href="#">

                            <img src="{{ asset('img/austalia.png') }}" class="img-fluid mb-3">
                        </a>
                        <h5 style="font-family:'Merriweather', serif;">
                            <a href="/" class="txt">
                                England opts to bat against Italy in must-win T20 World Cup tie
                            </a>
                        </h5>

                        <p style="font-size:10px;"><a href="/" class="smll">PTI</a></p>



                    </div>


                    <!-- COLUMN 2 -->
                    <div class="col-lg-3 border-start">



                        <h5 style="font-family:'Merriweather', serif;">
                            <a href="/" class="txt">
                                Omarzai’s all-round heroics seal five-wicket win for Afghanistan over UAE, sends South
                                Africa to Super 8
                        </h5>
                        </a>

                        <p style="font-size:10px;"><a href="/" class="smll">PTI</a></p>



                        <hr>



                        <p class=" fw-bold small mb-1 text-uppercase"> <a href="/" class="red">Cricket</a></p>

                        <h5 style="font-family:'Merriweather', serif;">
                            <a href="/" class="txt">
                                T20 World Cup: India continues to rise with clinical win over Pakistan
                            </a>
                        </h5>

                        <p style="font-size:10px;"><a href="/" class="smll">K.C VIJAY KUMAR</a></p>



                    </div>


                    <!-- COLUMN 3 -->
                    <div class="col-lg-3 border-start">

                        <a href="#">

                            <img src="{{ asset('img/worldcup.png') }}" class="img-fluid mb-3">
                        </a>

                        <h5 style="font-family:'Merriweather', serif;">
                            <a href="/" class="txt">
                                There is little more pressure than a normal match: Axar on India vs Pakistan games
                            </a>
                        </h5>

                        <p style="font-size:10px;"><a href="/" class="smll">PTI</a></p>



                    </div>


                    <!-- COLUMN 4 -->
                    <div class="col-lg-3 border-start">

                        <a href="#">

                            <img src="{{ asset('img/cricket.png') }}" class="img-fluid mb-3">
                        </a>

                        <p class=" fw-bold small mb-1 text-uppercase"><a href="/" class="red">Cricket</a></p>

                        <h5 style="font-family:'Merriweather', serif;">
                            <a href="/" class="txt">
                                Kishan took the game away from us: Pakistan coach Hesson
                            </a>
                        </h5>

                        </a>

                    </div>

                </div>

            </div>

            <div class="container my-5">

                <!-- SECTION TITLE -->
                <div class="container mb-4">

                    <div class="d-flex align-items-center">

                        <!-- Left Lines -->
                        <div class="flex-grow-1">
                            <hr class="m-0" style="border-top:2px solid #ccc;">
                            <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
                            <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
                        </div>

                        <!-- Center Title -->
                        <h2 class="mx-4 red fw-bold mb-0">
                            Football
                        </h2>

                        <!-- Right Lines -->
                        <div class="flex-grow-1">
                            <hr class="m-0" style="border-top:2px solid #ccc;">
                            <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
                            <hr class="mt-1 mb-0" style="border-top:2px solid #ccc;">
                        </div>

                    </div>

                </div>


                <div class="row g-4">

                    <!-- COLUMN 1 -->
                    <div class="col-lg-3">

                        <a href="#">

                            <img src="{{ asset('img/austalia.png') }}" class="img-fluid mb-3">
                        </a>

                        <h5 style="font-family:'Merriweather', serif;">
                            <a href="/" class="txt">
                                England opts to bat against Italy in must-win T20 World Cup tie
                            </a>
                        </h5>

                        <p style="font-size:10px;"><a href="/" class="smll">PTI</a></p>



                    </div>


                    <!-- COLUMN 2 -->
                    <div class="col-lg-3 border-start">



                        <h5 style="font-family:'Merriweather', serif;">
                            <a href="/" class="txt">
                                Omarzai’s all-round heroics seal five-wicket win for Afghanistan over UAE, sends South
                                Africa to Super 8
                            </a>
                        </h5>

                        <p style="font-size:10px;"><a href="/" class="smll">PTI</a></p>



                        <hr>

                        <a href="#" class="txt">

                            <p class="red fw-bold small mb-1 text-uppercase">football</p>

                            <h5 style="font-family:'Merriweather', serif;">
                                <a href="/" class="txt">
                                    T20 World Cup: India continues to rise with clinical win over Pakistan
                                </a>
                            </h5>

                            <p style="font-size:10px;"><a href="/" class="smll">
                                    K.C. VIJAYA KUMAR
                                </a>
                            </p>

                        </a>

                    </div>


                    <!-- COLUMN 3 -->
                    <div class="col-lg-3 border-start">

                        <a href="#">

                            <img src="{{ asset('img/football1.png') }}" class="img-fluid mb-3">
                        </a>

                        <h5 style="font-family:'Merriweather', serif;">
                            <a href="/" class="txt">
                                There is little more pressure than a normal match: Axar on India vs Pakistan games
                            </a>
                        </h5>

                        <p style="font-size:10px;"><a href="/" class="smll">PTI</a></p>



                    </div>


                    <!-- COLUMN 4 -->
                    <div class="col-lg-3 border-start">

                        <a href="#" class="txt">

                            <img src="{{ asset('img/football2.png') }}" class="img-fluid mb-3">

                            <p class=" fw-bold small mb-1 text-uppercase"><a href="/" class="red">Football</a></p>

                            <h5 style="font-family:'Merriweather', serif;">
                                <a href="/" class="txt">
                                    Kishan took the game away from us: Pakistan coach Hesson
                                </a>
                            </h5>

                        </a>

                    </div>

                </div>

            </div>

            <div class="container my-5">

                <!-- SECTION TITLE -->
                <div class="d-flex align-items-center mb-4">
                    <div class="flex-grow-1 border-top"></div>

                    <h2 class="fw-bold red mx-4 mb-0" style="font-family:'Playfair Display', serif;">
                        Other Sports
                    </h2>

                    <div class="flex-grow-1 border-top"></div>
                </div>


                <!-- TABS -->
                <ul class="nav justify-content-center mb-4" id="sportsTab" role="tablist"
                    style="font-family:'Merriweather', serif;">

                    <li class="nav-item">
                        <button class="nav-link active red fw-bold" data-bs-toggle="tab" data-bs-target="#hockey"
                            type="button">
                            HOCKEY
                        </button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link text-dark" data-bs-toggle="tab" data-bs-target="#tennis" type="button">
                            TENNIS
                        </button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link text-dark" data-bs-toggle="tab" data-bs-target="#athletics"
                            type="button">
                            ATHLETICS
                        </button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link text-dark" data-bs-toggle="tab" data-bs-target="#motorsport"
                            type="button">
                            MOTORSPORT
                        </button>
                    </li>

                </ul>


                <!-- TAB CONTENT -->
                <div class="tab-content">


                    <div class="tab-pane fade show active" id="hockey">

                        <div class="row g-4">

                            <!-- COLUMN 1 -->
                            <div class="col-lg-4">

                                <a href="#">

                                    <img src="{{ asset('img/other1.png') }}" class="img-fluid mb-3">
                                </a>

                                <h5 style="font-family:'Merriweather', serif;">
                                    <a href="/" class="txt">
                                        FIH Pro League losses indicate Indian hockey’s problems go beyond the scoreline
                                    </a>
                                </h5>

                                <p style="font-size:10px;"><a href="/" class="smll">
                                        UTHRA GANESAN
                                    </a>
                                </p>

                                </a>

                            </div>


                            <!-- COLUMN 2 -->
                            <div class="col-lg-4 border-start">

                                <a href="#" class="txt">

                                    <h5 style="font-family:'Merriweather', serif;">
                                        Pro League: India ends home leg with another loss
                                    </h5>

                                    <p style="font-size:10px;"><a href="/" class="smll">
                                            UTHRA GANESAN
                                        </a>
                                    </p>

                                </a>

                                <hr>

                                <a href="#" class="txt">

                                    <h5 style="font-family:'Merriweather', serif;">
                                        Belgium stays perfect as India suffers third loss on the trot
                                    </h5>
                                    <p style="font-size:10px;"><a href="/" class="smll">
                                            UTHRA GANESAN
                                        </a>
                                    </p>

                                </a>

                            </div>


                            <!-- COLUMN 3 -->
                            <div class="col-lg-4 border-start">

                                <a href="#" class="txt">

                                    <img src="{{ asset('img/other2.png') }}" class="img-fluid mb-3">

                                    <h5 style="font-family:'Merriweather', serif;">
                                        Pro League: Belgium continues winning run
                                    </h5>

                                    <p style="font-size:10px;"><a href="/" class="smll">
                                            UTHRA GANESAN
                                        </a>
                                    </p>

                                </a>

                                <hr>

                                <a href="#" class="text-decoration-none text-dark d-block">

                                    <h5 style="font-family:'Merriweather', serif;">
                                        Argentina puts eight past hapless India
                                    </h5>

                                    <p style="font-size:10px;"><a href="/" class="smll">
                                            UTHRA GANESAN
                                        </a>
                                    </p>

                                </a>

                            </div>

                        </div>

                    </div>



                    <!-- ============ TENNIS TAB (Example Content) ============ -->
                    <div class="tab-pane fade" id="tennis">
                        <div class="text-center py-5">
                            <h5 style="font-family:'Merriweather', serif;">
                                Tennis content goes here...
                            </h5>
                        </div>
                    </div>


                    <!-- ATHLETICS -->
                    <div class="tab-pane fade" id="athletics">
                        <div class="text-center py-5">
                            <h5 style="font-family:'Merriweather', serif;">
                                Athletics content goes here...
                            </h5>
                        </div>
                    </div>


                    <!-- MOTORSPORT -->
                    <div class="tab-pane fade" id="motorsport">
                        <div class="text-center py-5">
                            <h5 style="font-family:'Merriweather', serif;">
                                Motorsport content goes here...
                            </h5>
                        </div>
                    </div>

                </div>


                <!-- SEE MORE -->
                <div class="text-center mt-5">
                    <a href="#" class="see-more ">
                        SEE MORE →
                    </a>
                </div>

            </div>



        </div>
    </div>




    @include('partials.missed')
    @include('partials.footer')

    @endsection


</body>

</html>