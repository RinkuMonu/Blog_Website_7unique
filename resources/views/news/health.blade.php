@extends('layouts.app')

@section('content')

@include('partials.hero')






<div class="container my-5">

    <!-- ===== SECTION TITLE ===== -->
    <div class="d-flex align-items-center mb-4">

        <div class="flex-grow-1">
            <hr class="my-1">
            <hr class="my-1">
            <hr class="my-1">
        </div>

        <h2 class="mx-4 fw-bold red mb-0">
            Health
        </h2>

        <div class="flex-grow-1">
            <hr class="my-1">
            <hr class="my-1">
            <hr class="my-1">
        </div>

    </div>


    <!-- ===== CATEGORY BREADCRUMB ===== -->
    <div class="mb-4 small text-uppercase">
        <a href="#" class="text-dark text-decoration-none">Sci-Tech</a> /
        <a href="#" class="text-dark text-decoration-none">Science</a> /
        <a href="#" class="text-dark text-decoration-none">Technology</a> /
        <span class="red fw-bold">Health</span> /
        <a href="#" class="text-dark text-decoration-none">Agriculture</a> /
        <a href="#" class="text-dark text-decoration-none">Environment</a> /
        <a href="#" class="text-dark text-decoration-none">Gadgets</a> /
        <a href="#" class="text-dark text-decoration-none">Internet</a>
    </div>


    <div class="row g-5">

        <!-- ===== LEFT COLUMN ===== -->
        <div class="col-lg-3 border-end">

            <h6>
                <a href="/" class="txt">
                    IIT Bombay study links excess mucus to weakening of lungs’ defences, higher allergy attacks
                </a>
            </h6>
            <small style="font-size:10px"><a href = "/" class="smll">PTI</a></small>

            <hr>

            <h6>
                <a href="/" class="txt">
                    Colorectal cancer is increasing among young people, as James Van Der Beek’s death reminds us
                </a>
            </h6>
             <small style="font-size:10px"><a href = "/" class="smll">CHRISTOPHER LIU, ANDREA D WYER</a></small>

            <hr>

            <h6>
                <a href="/" class="txt">
                    Understanding what CPR is and how you might be able to save a life!
                </a>
            </h6>
             <small style="font-size:10px"><a href = "/" class="smll">P.S. NIRANJANA</a></small>

            <hr>

            <!-- Health Wrap -->
            <div class="position-relative">
                <a href ="/">
                <img src="images/youtubee.png" class="img-fluid w-100 mb-2">
</a>
            </div>

            <p class="mt-2">
                <a href="/" class="txt">
                    Watch: Cancer research, diabetes diagnosis, and global healthcare funding
                </a>
            </p>

        </div>


        <!-- ===== CENTER COLUMN ===== -->
        <div class="col-lg-6">

            <p class="fw-bold small mb-1">
                <span class="badge bg-warning text-dark">TH</span> <a href="/" class = "txt">PREMIUM</a>
            </p>

            <h2 class="fw-bold">
                <a href="/" class="txt">
                    Why cancer systems in India need to prioritise the time burden of care
                </a>
            </h2>

            <div class="row my-3">
                <div class="col-md-6">
                    <a href ="/">
                    <img src="images/pulse.png" class="img-fluid">
</a>
                </div>

                <div class="col-md-6">
                    <p>
                        <a href="/" class="txt">
                            Frequent hospital visits, lengthy treatment administration time,
                            and repeated tests can disrupt life, impacting routines,
                            work, and relationships.
                        </a>
                    </p>

                    <small style="font-size:10px"><a href = "/" class="smll">ASHISH JOSHI </a></small>
                </div>
            </div>

            <hr>

            <div class="row g-4">

                <div class="col-md-6 border-end">
                    <h5>
                        <a href="/" class="txt">
                            Health department team deployed in Haryana village after 4 deaths due to hepatitis B
                        </a>
                    </h5>
                    <small style="font-size:10px"><a href = "/" class="smll">PTI</a></small>

                    <hr>

                    <h5>
                        <a href="/" class="txt">
                            Seven doctors suspended in Rajasthan over fraud in State health scheme
                        </a>
                    </h5>
                </div>

                <div class="col-md-6">
                    <p class="fw-bold small">
                        <span class="badge bg-warning text-dark">TH</span> <a href="/" class = "txt">PREMIUM</a>
                    </p>

                    <h5>
                        <a href="/" class="txt">
                            When do you really need probiotic supplements and, crucially, when don’t you?
                        </a>
                    </h5>
                    <a href="/">
                        <img src="images/meds.png" class="img-fluid mt-2">
                    </a>
                </div>

            </div>

        </div>


        <!-- ===== RIGHT SIDEBAR ===== -->
        <div class="col-lg-3 border-start">
        <a href ="/">
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
                <a href="/">
                <img src="images/chinese.png" width="70" height="70" class="me-2">
</a>
                <div>
                    <a href="/" class="txt">
                        Nvidia CEO Jensen Huang won’t attend AI Impact Summit in India
                    </a>
                </div>
            </div>

            <div class="d-flex mb-3">
                <a href="/">
                    <img src="images/place.png" width="70" height="70" class="me-2">
                </a>
                <div>
                    <a href="/" class="txt">
                        Markets extend rally for third day on firm Asian peers
                    </a>
                </div>
            </div>

            <div class="d-flex">
                <a href="/">
                    <img src="images/jaishankar.png" width="70" height="70" class="me-2">
                </a>
                <div>
                    <a href ="/" class="txt">
                    Morning Digest: Jaishankar denies India has lost ‘strategic autonomy’
</a>
                </div>
            </div>

        </div>

    </div>

</div>
<hr>
<!-- new sectionnnn -->

<div class="container my-5">

    <div class="row g-5">

        <!-- COLUMN 1 -->
        <div class="col-lg-3">

            <h5 class="red fw-bold mb-3">
                Nobel Laureates In Medicine
            </h5>
<a href ="/"> 
            <img src="images/imagination.png" class="img-fluid mb-3">
</a>
            <p class="small fw-bold">
                <span class="badge bg-warning text-dark me-1">TH</span><a href ="/" class="txt"> PREMIUM</a>
            </p>

            <h6 class="fw-bold">
                <a href ="/" class="txt">
                Albrecht Kossel’s Nobel winning discovery of the chemical basis of heredity
</a>
            </h6>

            <hr>

            <p class="small fw-bold">
                <span class="badge bg-warning text-dark me-1">TH</span><a href ="/" class="txt"> PREMIUM</a>
            </p>

            <h6>
                <a href ="/" class="txt">
                Emil Theodor Kocher and the scientific understanding of the thyroid gland
</a>
            </h6>

            <hr>

            <p class="small fw-bold">
                <span class="badge bg-warning text-dark me-1">TH</span><a href ="/" class="txt"> PREMIUM</a>
            </p>

            <h6>
                <a href ="/" class="txt">
                Ilya Mechnikov and Paul Ehrlich: Nobel laureates who defined the scientific foundations of immunology
</a>
            </h6>

            <div class="mt-3 fw-bold small">
                <a href ="/" class="smll">
                SEE MORE →
</a>
            </div>

        </div>



        <!-- COLUMN 2 -->
        <div class="col-lg-3">

            <h5 class="red fw-bold mb-3">
                Humerus
            </h5>
<a href ="/"> 
            <img src="images/imagination2.png" class="img-fluid mb-3">
</a>
            <h6 class="fw-bold">
                <a href ="/" class="txt">
                Humerus: Trump’s new health guidelines
</a>
            </h6>

            <hr>

            
            <h6>
                <a href ="/" class="txt">
                Humerus: On Air pollution crisis
</a>
            </h6>

            <hr>

            <h6>
                <a href ="/" class="txt">
                Humerus: Behind the prescription
</a>
            </h6>

            <div class="mt-3 fw-bold small">
                <a href ="/" class="smll">
                SEE MORE →
</a>
            </div>

        </div>



        <!-- COLUMN 3 -->
        <div class="col-lg-3">

            <h5 class="red fw-bold mb-3">
                Non-Communicable Diseases
            </h5>
<a href ="/"> 
            <img src="images/injection.png" class="img-fluid mb-3">
</a>
            <h6 class="fw-bold">
                <a href ="/" class="txt">
                Rethinking age and cervical cancer: what Indian women need to know
</a>
            </h6>

            <hr>

            <p class="small fw-bold">
                <span class="badge bg-warning text-dark me-1">TH</span><a href ="/" class="txt"> PREMIUM</a>
            </p>

            <h6>
                <a href ="/" class="txt">
                The HPV vaccine is not a free pass: why regular pap smears still matter
</a>
            </h6>

            <hr>

            <p class="small fw-bold">
                <span class="badge bg-warning text-dark me-1">TH</span><a href ="/" class="txt"> PREMIUM</a>
            </p>

            <h6>
                <a href ="/" class="txt">
                Stress: the silent killer of the heart
</a>
            </h6>

            <div class="mt-3 fw-bold small">
                <a href ="/" class="smll">
                SEE MORE →
</a>
            </div>

        </div>



        <!-- COLUMN 4 -->
        <div class="col-lg-3">

            <h5 class="red fw-bold mb-3">
                All You Need To Know
            </h5>
<a href ="/"> 
            <img src="images/machine.png" class="img-fluid mb-3">
</a>
            <p class="small fw-bold">
                <span class="badge bg-warning text-dark me-1">TH</span><a href ="/" class="txt"> PREMIUM</a>
            </p>

            <h6 class="fw-bold">
                <a href ="/" class="txt">
                All you need to know about: angioplasty
</a>
            </h6>

            <hr>

            <p class="small fw-bold">
                <span class="badge bg-warning text-dark me-1">TH</span><a href ="/" class="txt"> PREMIUM</a>
            </p>

            <h6>
                <a href ="/" class="txt">
                All you need to know about: hyperoxaluria
</a>
            </h6>

            <hr>

            <p class="small fw-bold">
                <span class="badge bg-warning text-dark me-1">TH</span><a href ="/" class="txt"> PREMIUM</a>
            </p>

            <h6>
                <a href ="/" class="txt">
                All you need to know about: scabies
</a>
            </h6>

            <div class="mt-3 fw-bold small">
                <a href ="/" class="smll">
                SEE MORE →
</a>
            </div>

        </div>

    </div>

</div>




@include('partials.missed')
@include('partials.footer')

@endsection