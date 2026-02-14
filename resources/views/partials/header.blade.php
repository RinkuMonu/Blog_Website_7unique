<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sevenunique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
    .navbar-nav {
        gap: 22px;
    }

    body {
        font-family: 'Merriweather', serif;
    }

    .navbar-nav .nav-link {
        font-family: 'Merriweather', serif;
        color: black;
        padding: 12px 0;
        font-size: 17px;
        transition: color 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
        color: #c40000 !important;
    }
     .nav-pills .nav-link.active {
        background-color: #3a3a3a !important;
    }

    .nav-pills .nav-link:hover {
        background-color: #3a3a3a !important;
        color: #fff !important;
    }
    </style>
</head>
<body>
    

<div class="bg-white py-2 ">
        <div class="container">

            <!-- TOP ROW -->
            <div class="row align-items-center">

                <!-- Left: Date + ePaper -->
                <div class="col-6 col-md-4 d-flex align-items-center gap-3">
                    <span class="text-muted fw-semibold small">
                        {{ \Carbon\Carbon::now()->format('F d, Y') }}
                    </span>

                    <a href="#" class="text-danger text-decoration-none fw-semibold small">
                        e-Paper
                    </a>
                </div>

                <!-- Center: Logo -->
                <div class="col-12 col-md-4 text-center order-3 order-md-2 my-2 my-md-0">
                    <h1 class="m-0 fw-bold" style="font-family: 'Times New Roman', serif; font-size: 38px;">
                        <a href="{{ url('/') }}" class="text-decoration-none text-dark">
                            SEVENUNIQUE
                        </a>
                    </h1>
                </div>

                <!-- Right: Account + Subscribe -->
                <!-- Right Section -->
                <div class="col-6 col-md-4 d-flex flex-column align-items-end order-2 order-md-3">

                    <!-- Top: Account -->
                    <a href="#" class="text-dark text-decoration-none small mb-1">
                        Account
                    </a>

                    <!-- Bottom Row: e-Paper + Subscribe -->
                    <div class="d-flex align-items-center gap-3">
                        <a href="#" class="text-danger text-decoration-none small fw-semibold">
                            e-books
                        </a>

                        <a href="#" class="btn btn-danger btn-sm px-3">
                            SUBSCRIBE
                        </a>
                    </div>

                </div>



            </div>

        </div>
    </div>




    <!-- MAIN NAVIGATION -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top">

        <div class="container">

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">

                <!-- Left Search + Menu -->
                <ul class="navbar-nav me-5 align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#fullMenu">
                            <i class="bi bi-list fs-4"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-search"></i> Search</a>
                    </li>
                </ul>

                <!-- Center Menu -->
                <ul class="navbar-nav fw-semibold me-4">

                    <li class="nav-item"><a class="nav-link" href="#">India</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">World</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Movies</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sport</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Data</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Health</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Opinion</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Science</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Entertainment</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Premium</a></li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="collapse w-100 bg-white border-top " id="fullMenu">

        <div class="bg-light ">
            <div class="container py-4">

                <div class="row">

                    <!-- LEFT SECTION -->
                    <div class="col-lg-9">

                        <div class="row">

                            <div class="col-md-3">
                                <ul class="list-unstyled" id="megaAccordion">
                                    <li class="text-danger fw-bold mb-2">● LIVE NOW</li>
                                    <li class="mb-2">

                                        <div class="d-flex justify-content-between align-items-center"
                                            data-bs-toggle="collapse" data-bs-target="#newsDrop"
                                            style="cursor:pointer;">

                                            <span>News</span>
                                            <i class="bi bi-chevron-down"></i>

                                        </div>

                                        <div class="collapse mt-2" id="newsDrop" data-bs-parent="#megaAccordion">
                                            <ul class="list-unstyled ps-3">
                                                <li>Politics</li>
                                                <li>Economy</li>
                                                <li>Society</li>
                                                <li>Law</li>
                                                <li>Governance</li>
                                            </ul>
                                        </div>

                                    </li>

                                    <li class="mb-2">

                                        <div class="d-flex justify-content-between align-items-center"
                                            data-bs-toggle="collapse" data-bs-target="#opinionDrop"
                                            style="cursor:pointer;">

                                            <span>Opinion</span>
                                            <i class="bi bi-chevron-down"></i>

                                        </div>

                                        <div class="collapse mt-2" id="opinionDrop" data-bs-parent="#megaAccordion">
                                            <ul class="list-unstyled ps-3">
                                                <li>Editorial</li>
                                                <li>Columns</li>
                                                <li>Analysis</li>
                                                <li>Views</li>
                                                <li>Letters</li>
                                            </ul>
                                        </div>

                                    </li>

                                    <li class="mb-2">

                                        <div class="d-flex justify-content-between align-items-center"
                                            data-bs-toggle="collapse" data-bs-target="#dataDrop"
                                            style="cursor:pointer;">

                                            <span>Data</span>
                                            <i class="bi bi-chevron-down"></i>

                                        </div>

                                        <div class="collapse mt-2" id="dataDrop" data-bs-parent="#megaAccordion">
                                            <ul class="list-unstyled ps-3">
                                                <li>Infographics</li>
                                                <li>Reports</li>
                                                <li>Statistics</li>
                                                <li>Research</li>
                                                <li>Data Stories</li>
                                            </ul>
                                        </div>

                                    </li>

                                    <li class="mb-2">

                                        <div class="d-flex justify-content-between align-items-center"
                                            data-bs-toggle="collapse" data-bs-target="#booksDrop"
                                            style="cursor:pointer;">

                                            <span>Books</span>
                                            <i class="bi bi-chevron-down"></i>

                                        </div>

                                        <div class="collapse mt-2" id="booksDrop" data-bs-parent="#megaAccordion">
                                            <ul class="list-unstyled ps-3">
                                                <li>Book Reviews</li>
                                                <li>Author Interviews</li>
                                                <li>New Releases</li>
                                                <li>Literature</li>
                                                <li>Fiction & Non-Fiction</li>
                                            </ul>
                                        </div>

                                    </li>

                                    <li class="mb-2">

                                        <div class="d-flex justify-content-between align-items-center"
                                            data-bs-toggle="collapse" data-bs-target="#realEstateDrop"
                                            style="cursor:pointer;">

                                            <span>Real Estate</span>
                                            <i class="bi bi-chevron-down"></i>

                                        </div>

                                        <div class="collapse mt-2" id="realEstateDrop" data-bs-parent="#megaAccordion">

                                            <ul class="list-unstyled ps-3">
                                                <li>Property News</li>
                                                <li>Market Trends</li>
                                                <li>Commercial</li>
                                                <li>Residential</li>
                                                <li>Investment Guide</li>
                                            </ul>

                                        </div>

                                    </li>

                                </ul>
                            </div>

                            <div class="col-md-3">
                                <ul class="list-unstyled" id="Accordion">
                                    <li class="mb-2">

                                        <div class="d-flex justify-content-between align-items-center"
                                            data-bs-toggle="collapse" data-bs-target="#statesDrop"
                                            style="cursor:pointer;">

                                            <span>States</span>
                                            <i class="bi bi-chevron-down"></i>

                                        </div>

                                        <div class="collapse mt-2" id="statesDrop" data-bs-parent="#megaAccordion">

                                            <ul class="list-unstyled ps-3">
                                                <li>Rajasthan</li>
                                                <li>Delhi</li>
                                                <li>Maharashtra</li>
                                                <li>Tamil Nadu</li>
                                                <li>Karnataka</li>
                                            </ul>

                                        </div>

                                    </li>

                                    <li class="mb-2">

                                        <div class="d-flex justify-content-between align-items-center"
                                            data-bs-toggle="collapse" data-bs-target="#businessDrop"
                                            style="cursor:pointer;">

                                            <span>Business</span>
                                            <i class="bi bi-chevron-down"></i>

                                        </div>

                                        <div class="collapse mt-2" id="businessDrop" data-bs-parent="#Accordion">

                                            <ul class="list-unstyled ps-3">
                                                <li>Markets</li>
                                                <li>Industry</li>
                                                <li>Economy</li>
                                                <li>Startups</li>
                                                <li>Finance</li>
                                            </ul>

                                        </div>

                                    </li>

                                    <li class="mb-2">

                                        <div class="d-flex justify-content-between align-items-center"
                                            data-bs-toggle="collapse" data-bs-target="#educationDrop"
                                            style="cursor:pointer;">

                                            <span>Education</span>
                                            <i class="bi bi-chevron-down"></i>

                                        </div>

                                        <div class="collapse mt-2" id="educationDrop" data-bs-parent="#Accordion">

                                            <ul class="list-unstyled ps-3">
                                                <li>Schools</li>
                                                <li>Colleges</li>
                                                <li>Examinations</li>
                                                <li>Results</li>
                                                <li>Scholarships</li>
                                            </ul>

                                        </div>

                                    </li>

                                    <li class="mb-2">

                                        <div class="d-flex justify-content-between align-items-center"
                                            data-bs-toggle="collapse" data-bs-target="#childrenDrop"
                                            style="cursor:pointer;">

                                            <span>Children</span>
                                            <i class="bi bi-chevron-down"></i>

                                        </div>

                                        <div class="collapse mt-2" id="childrenDrop" data-bs-parent="#Accordion">

                                            <ul class="list-unstyled ps-3">
                                                <li>Stories</li>
                                                <li>Learning</li>
                                                <li>Activities</li>
                                                <li>Kids News</li>
                                                <li>Fun Zone</li>
                                            </ul>

                                        </div>

                                    </li>

                                    <li class="mb-2">

                                        <div class="d-flex justify-content-between align-items-center"
                                            data-bs-toggle="collapse" data-bs-target="#agricultureDrop"
                                            style="cursor:pointer;">

                                            <span>Agriculture</span>
                                            <i class="bi bi-chevron-down"></i>

                                        </div>

                                        <div class="collapse mt-2" id="agricultureDrop" data-bs-parent="#Accordion">

                                            <ul class="list-unstyled ps-3">
                                                <li>Crop News</li>
                                                <li>Farm Policies</li>
                                                <li>Agri Technology</li>
                                                <li>Market Prices</li>
                                                <li>Farmer Stories</li>
                                            </ul>

                                        </div>

                                    </li>

                                </ul>
                            </div>

                            <div class="col-md-3">
                                <ul class="list-unstyled" id="AccordionTwo">

                                    <li class="mb-2">

                                        <div class="d-flex justify-content-between align-items-center"
                                            data-bs-toggle="collapse" data-bs-target="#citiesDrop"
                                            style="cursor:pointer;">

                                            <span>Cities</span>
                                            <i class="bi bi-chevron-down"></i>

                                        </div>

                                        <div class="collapse mt-2" id="citiesDrop" data-bs-parent="#AccordionTwo">

                                            <ul class="list-unstyled ps-3">
                                                <li>Delhi</li>
                                                <li>Mumbai</li>
                                                <li>Chennai</li>
                                                <li>Bengaluru</li>
                                                <li>Jaipur</li>
                                            </ul>

                                        </div>

                                    </li>

                                    <li class="mb-2">

                                        <div class="d-flex justify-content-between align-items-center"
                                            data-bs-toggle="collapse" data-bs-target="#sportDrop"
                                            style="cursor:pointer;">

                                            <span>Sport</span>
                                            <i class="bi bi-chevron-down"></i>

                                        </div>

                                        <div class="collapse mt-2" id="sportDrop" data-bs-parent="#AccordionTwo">

                                            <ul class="list-unstyled ps-3">
                                                <li>Cricket</li>
                                                <li>Football</li>
                                                <li>Tennis</li>
                                                <li>Hockey</li>
                                                <li>Olympics</li>
                                            </ul>

                                        </div>

                                    </li>

                                    <li class="mb-2">

                                        <div class="d-flex justify-content-between align-items-center"
                                            data-bs-toggle="collapse" data-bs-target="#healthDrop"
                                            style="cursor:pointer;">

                                            <span>Health</span>
                                            <i class="bi bi-chevron-down"></i>

                                        </div>

                                        <div class="collapse mt-2" id="healthDrop" data-bs-parent="#AccordionTwo">

                                            <ul class="list-unstyled ps-3">
                                                <li>Medical News</li>
                                                <li>Fitness</li>
                                                <li>Nutrition</li>
                                                <li>Mental Health</li>
                                                <li>Wellness</li>
                                            </ul>

                                        </div>

                                    </li>
                                    <li class="mb-2">

                                        <div class="d-flex justify-content-between align-items-center"
                                            data-bs-toggle="collapse" data-bs-target="#electionsDrop"
                                            style="cursor:pointer;">

                                            <span>Elections</span>
                                            <i class="bi bi-chevron-down"></i>

                                        </div>

                                        <div class="collapse mt-2" id="electionsDrop" data-bs-parent="#AccordionTwo">

                                            <ul class="list-unstyled ps-3">
                                                <li>Lok Sabha</li>
                                                <li>State Elections</li>
                                                <li>Polling Updates</li>
                                                <li>Results</li>
                                                <li>Analysis</li>
                                            </ul>

                                        </div>

                                    </li>

                                    <li class="mb-2">

                                        <div class="d-flex justify-content-between align-items-center"
                                            data-bs-toggle="collapse" data-bs-target="#brandhubDrop"
                                            style="cursor:pointer;">

                                            <span>Brandhub</span>
                                            <i class="bi bi-chevron-down"></i>

                                        </div>

                                        <div class="collapse mt-2" id="brandhubDrop" data-bs-parent="#AccordionTwo">

                                            <ul class="list-unstyled ps-3">
                                                <li>Sponsored Content</li>
                                                <li>Partner Stories</li>
                                                <li>Campaigns</li>
                                                <li>Promotions</li>
                                                <li>Events</li>
                                            </ul>

                                        </div>

                                    </li>

                                </ul>
                            </div>

                            <div class="col-md-3">
                                <ul class="list-unstyled" id="AccordionThree">

                                    <li class="mb-2">

                                        <div class="d-flex justify-content-between align-items-center"
                                            data-bs-toggle="collapse" data-bs-target="#entertainmentDrop"
                                            style="cursor:pointer;">

                                            <span>Entertainment</span>
                                            <i class="bi bi-chevron-down"></i>

                                        </div>

                                        <div class="collapse mt-2" id="entertainmentDrop"
                                            data-bs-parent="#AccordionThree">

                                            <ul class="list-unstyled ps-3">
                                                <li>Movies</li>
                                                <li>OTT</li>
                                                <li>Celebrity News</li>
                                                <li>Interviews</li>
                                                <li>Reviews</li>
                                            </ul>

                                        </div>

                                    </li>

                                    <li class="mb-2">

                                        <div class="d-flex justify-content-between align-items-center"
                                            data-bs-toggle="collapse" data-bs-target="#technologyDrop"
                                            style="cursor:pointer;">

                                            <span>Technology</span>
                                            <i class="bi bi-chevron-down"></i>

                                        </div>

                                        <div class="collapse mt-2" id="technologyDrop" data-bs-parent="#AccordionThree">

                                            <ul class="list-unstyled ps-3">
                                                <li>AI</li>
                                                <li>Startups</li>
                                                <li>Gadgets</li>
                                                <li>Apps</li>
                                                <li>Innovation</li>
                                            </ul>

                                        </div>

                                    </li>

                                    <li class="mb-2">

                                        <div class="d-flex justify-content-between align-items-center"
                                            data-bs-toggle="collapse" data-bs-target="#lifeDrop"
                                            style="cursor:pointer;">

                                            <span>Life & Style</span>
                                            <i class="bi bi-chevron-down"></i>

                                        </div>

                                        <div class="collapse mt-2" id="lifeDrop" data-bs-parent="#AccordionThree">

                                            <ul class="list-unstyled ps-3">
                                                <li>Fashion</li>
                                                <li>Travel</li>
                                                <li>Relationships</li>
                                                <li>Wellness</li>
                                                <li>Culture</li>
                                            </ul>

                                        </div>

                                    </li>

                                    <li class="mb-2">

                                        <div class="d-flex justify-content-between align-items-center"
                                            data-bs-toggle="collapse" data-bs-target="#foodDrop"
                                            style="cursor:pointer;">

                                            <span>Food</span>
                                            <i class="bi bi-chevron-down"></i>

                                        </div>

                                        <div class="collapse mt-2" id="foodDrop" data-bs-parent="#AccordionThree">

                                            <ul class="list-unstyled ps-3">
                                                <li>Recipes</li>
                                                <li>Restaurants</li>
                                                <li>Street Food</li>
                                                <li>Cuisine</li>
                                                <li>Chef Specials</li>
                                            </ul>

                                        </div>

                                    </li>

                                    <li class="mb-2">

                                        <div class="d-flex justify-content-between align-items-center"
                                            data-bs-toggle="collapse" data-bs-target="#environmentDrop"
                                            style="cursor:pointer;">

                                            <span>Environment</span>
                                            <i class="bi bi-chevron-down"></i>

                                        </div>

                                        <div class="collapse mt-2" id="environmentDrop"
                                            data-bs-parent="#AccordionThree">

                                            <ul class="list-unstyled ps-3">
                                                <li>Climate Change</li>
                                                <li>Wildlife</li>
                                                <li>Pollution</li>
                                                <li>Sustainability</li>
                                                <li>Green Energy</li>
                                            </ul>

                                        </div>

                                    </li>

                                </ul>
                            </div>

                        </div>

                    </div>

                    <!-- RIGHT SECTION -->
                    <div class="col-lg-3 border-start">

                        <div class="row">

                            <div class="col-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2 border-bottom pb-2"><i class="bi bi-play-circle"></i> Videos</li>
                                    <li class="mb-2 border-bottom pb-2"><i class="bi bi-headphones"></i> Podcast</li>
                                    <li class="mb-2 border-bottom pb-2"><i class="bi bi-images"></i> Photos</li>
                                    <li class="mb-2 border-bottom pb-2"><i class="bi bi-eye"></i> Visual Stories</li>
                                    <li class="mb-2 border-bottom pb-2"><i class="bi bi-folder2-open"></i> Specials</li>
                                </ul>
                            </div>

                            <div class="col-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2 border-bottom pb-2"><img
                                            src="{{ asset('images/ebook-section-icon.svg') }}" alt="">
                                        eBooks</li>
                                    <li class="mb-2 border-bottom pb-2"><img src="{{ asset('images/crossword.svg') }}"
                                            alt=""> TH Games
                                    </li>
                                    <li class="mb-2 border-bottom pb-2"><img src="{{ asset('images/newspaper.svg') }}"
                                            alt=""> Newsletter
                                    </li>
                                    <li class="mb-2 border-bottom pb-2"><img src="{{ asset('images/litfest.svg') }}"
                                            alt=""> Lit For Life
                                    </li>
                                    <li class="mb-2 border-bottom pb-2"><img src="{{ asset('images/huddle.svg') }}"
                                            alt=""> The Huddle</li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- SOCIAL + BOTTOM ROW -->
                <div class="row mt-4 align-items-center border-top pt-3">

                    <div class="d-flex justify-content-between align-items-center mb-3">

                        <!-- LEFT: Icons -->
                        <div class="d-flex align-items-center gap-2">
                            <a href="#" class="footer-icon"><i class="bi bi-whatsapp"></i></a>
                            <a href="#" class="footer-icon"><i class="bi bi-twitter-x"></i></a>
                            <a href="#" class="footer-icon"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="footer-icon"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="footer-icon"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="footer-icon"><i class="bi bi-youtube"></i></a>
                            <a href="#" class="footer-icon"><i class="bi bi-spotify"></i></a>
                            <a href="#" class="footer-icon"><i class="bi bi-telegram"></i></a>
                        </div>

                        <!-- RIGHT: Text -->
                        <div class="text-danger fw-semibold">
                            SevenUnique Best Places to Work →
                        </div>

                    </div>



                </div>

            </div>
        </div>

    </div>

</body>
</html>