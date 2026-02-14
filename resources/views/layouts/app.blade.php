<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SevenUnique News Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">


    <style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
<<<<<<< HEAD
        body { display: flex; flex-direction: column; min-height: 100vh; }
        .content { flex: 1; }
        footer { background: #343a40; color: white; padding: 20px 0; margin-top: 40px; }
      .navbar-nav {
    gap: 22px;
}
body {
    font-family: 'Merriweather', serif;
}
=======
>>>>>>> 160741b91c477719f7dbf901fab1d8d4c9074120

    .content {
        flex: 1;
    }

    footer {
        background: #343a40;
        color: white;
        padding: 20px 0;
        margin-top: 40px;
    }

    .navbar-nav {
        gap: 22px;
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

    footer {
        font-family: 'Merriweather', serif;
    }
<<<<<<< HEAD
=======

    .footer-links li {
        margin-bottom: 8px;
    }

    .footer-links a {
        text-decoration: none;
        color: #000;
        font-size: 14px;
        transition: color 0.3s ease;
    }
        body { display: flex; flex-direction: column; min-height: 100vh; }
        .content { flex: 1; }
        footer { background: #343a40; color: white; padding: 20px 0; margin-top: 40px; }
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

footer {
    font-family: 'Merriweather', serif;
}

.footer-links li {
    margin-bottom: 8px;
}

.footer-links a {
    text-decoration: none;
    color: #000;
    font-size: 14px;
    transition: color 0.3s ease;
}

>>>>>>> 160741b91c477719f7dbf901fab1d8d4c9074120
.footer-links a:hover {
    color: #c40000;
}
.txt {
    color: #000;
    text-decoration: none;
}
.txt:hover {
    text-decoration: underline;
    text-decoration-color: #000;
}
.red {
    color: #B00020;
    text-decoration:none;
}
.smll {
    color: #2B2E34;
    text-decoration: underline; 
    text-decoration-color: #2B2E34;
}
.smll:hover {
    text-decoration: none;
    
}
.red:hover {
    text-decoration:underline;
    text-decoration-color: #B00020;
}


.live-dot {
    width: 10px;
    height: 10px;
    background-color: #B00020;
    border-radius: 50%;
    display: inline-block;
    margin-right: 1 px;
    animation: pulseDot 1s infinite;
}

@keyframes pulseDot {
    0%   { opacity: 1; }
    50%  { opacity: 0.3; }
    100% { opacity: 1; }
}


    .footer-links li {
        margin-bottom: 8px;
    }

    .footer-links a {
        text-decoration: none;
        color: #000;
        font-size: 14px;
        transition: color 0.3s ease;
    }

    .footer-links a:hover {
        color: #c40000;
    }

    #fullMenu {
        font-family: 'Merriweather', serif;
    }

    #fullMenu li {
        font-size: 15px;
        padding: 6px 0;
    }

    .footer-icon {
        width: 38px;
        height: 38px;
        background: #f1f1f1;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 4px;
        color: #000;
        font-size: 18px;
        transition: 0.3s ease;
        text-decoration: none;
    }

    .footer-icon:hover {
        background: #000;
        color: #fff;
    }
    </style>
</head>

<body>

    <!-- TOP BAR -->
    <div class="bg-white  py-2">
        <div class="container d-flex justify-content-between align-items-center">

            <!-- Left Side -->
            <div class="d-flex fw-semibold align-items-center gap-3">
                <span class="text-muted">
                    {{ \Carbon\Carbon::now()->format('F d, Y') }}
                </span>

                <a href="#" class="text-danger text-decoration-none fw-semibold">e-Paper</a>
            </div>

            <!-- Center Logo -->
            <div class="text-center">
                <h1 class="m-0 fw-bold" style="font-family: 'Times New Roman', serif; font-size: 42px;">
                    SEVENUNIQUE
                </h1>
            </div>

            <!-- Right Side -->
            <div class="d-flex align-items-center gap-3">
                <a href="#" class="text-dark text-decoration-none">Account</a>
                <a href="#" class="btn btn-danger btn-sm fw-semibold px-3">SUBSCRIBE</a>
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


    <div class="container-fluid content mt-4">
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>

    <footer class="bg-light pt-5 pb-4 border-top  ">
        <div class="container">

            <!-- Logo Row -->
            <div class="d-flex justify-content-between align-items-center mb-4">

                <!-- Left: Logo -->
                <h2 class="m-0 text-dark" style="font-family:Merriweather',serif; color:#000; font-size:40px;">
                    SEVENUNIQUE
                </h2>

                <!-- Right: Two Images -->
                <div class="d-flex gap-3">
                    <img src="{{ asset('images/playstore.png') }}" alt="App Store" height="40">
                    <img src="{{ asset('images/appstore.png') }}" alt="Google Play" height="40">
                </div>

            </div>


            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <h6 class="fw-bold  border-top border-5 text-dark border-dark pt-3 pb-2">Seven Unique</h6>
                            <ul class="list-unstyled footer-links">

                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Code of Editorial Values</a></li>
                                <li><a href="#">News Archive</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Digital Subscription</a></li>
                                <li><a href="#">Subscribe to Newslettersn</a></li>
                                <li><a href="#">Rss Feeds</a></li>
                                <li><a href="#">Readers Editor-Terms of Reference</a></li>
                                <li><a href="#">Authors & Contributors</a></li>
                                <li><a href="#">Gift Front page</a></li>
                                <h6 class="fw-bold  text-dark pt-3 pb-2 mt-3">
                                    Contact us
                                </h6>

                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none text-dark">Careers</a></li>
                                    <li><a href="#" class="text-decoration-none text-dark">Advertise With Us</a></li>
                                    <li><a href="#" class="text-decoration-none text-dark">Press Release</a></li>
                                </ul>


                            </ul>

                        </div>


                        <div class="col-md-3 mb-4">
                            <h6 class="fw-bold  border-top text-dark border-5 border-dark pt-3 pb-2">Other Products</h6>
                            <ul class="list-unstyled footer-links">
                                <li><a href="#">Markets</a></li>
                                <li><a href="#">STEP</a></li>
                                <li><a href="#">Images</a></li>
                                <li><a href="#">Classifieds - Print</a></li>
                                <li><a href="#">Bookstore & Special Publications</a></li>

                                <h6 class="fw-bold  text-dark pt-3 pb-2 mt-3">
                                    Contact us
                                </h6>

                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none text-dark">Careers</a></li>
                                    <li><a href="#" class="text-decoration-none text-dark">Advertise With Us</a></li>
                                    <li><a href="#" class="text-decoration-none text-dark">Press Release</a></li>
                                </ul>

                            </ul>
                        </div>

                        <div class="col-md-3 mb-4">
                            <h6 class="fw-bold border-top border-5 text-dark border-dark  pt-3 pb-2">Business</h6>
                            <ul class="list-unstyled footer-links">
                                <li><a href="#">Agri-Business</a></li>
                                <li><a href="#">Industry</a></li>
                                <li><a href="#">Economy</a></li>
                                <li><a href="#">Markets</a></li>
                                <li><a href="#">Budget</a></li>
                                <h6 class="fw-bold  text-dark pt-3 pb-2 mt-3">
                                    Contact us
                                </h6>

                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none text-dark">Careers</a></li>
                                    <li><a href="#" class="text-decoration-none text-dark">Advertise With Us</a></li>
                                    <li><a href="#" class="text-decoration-none text-dark">Press Release</a></li>
                                </ul>

                            </ul>
                        </div>

                        <!-- Column 4 -->
                        <div class="col-md-3 mb-4">
                            <h6 class="fw-bold  border-top border-5 text-dark border-dark pt-3 pb-2">States</h6>
                            <ul class="list-unstyled footer-links">
                                <li><a href="#">Andhra Pradesh</a></li>
                                <li><a href="#">Karnataka</a></li>
                                <li><a href="#">Kerala</a></li>
                                <li><a href="#">Tamil Nadu</a></li>
                                <li><a href="#">Telangana</a></li>
                                <h6 class="fw-bold  text-dark pt-3 pb-2 mt-3">
                                    Contact us
                                </h6>

                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none text-dark">Careers</a></li>
                                    <li><a href="#" class="text-decoration-none text-dark">Advertise With Us</a></li>
                                    <li><a href="#" class="text-decoration-none text-dark">Press Release</a></li>
                                </ul>

                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Column 5 -->
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <h6 class="fw-bold  border-top border-5 text-dark border-dark pt-3 pb-2">Trending on The
                                Hindu</h6>
                            <ul class="list-unstyled footer-links">
                                <li><a href="#"> News <img src="{{ asset('images/trend.png') }}" alt="Trending"
                                            height="16"></a></li>
                                <li><a href="#">Bangladesh Elections 2026 LIVE <img
                                            src="{{ asset('images/trend.png') }}" alt="Trending" height="16"></a></li>
                                <li><a href="#">What did the 16th Finance Commission recommend? <img
                                            src="{{ asset('images/trend.png') }}" alt="Trending" height="16"></a></li>
                                <li><a href="#">Chennai Comic Con 2026 <img src="{{ asset('images/trend.png') }}"
                                            alt="Trending" height="16"></a></li>
                                <li><a href="#">Parliament Budget Session Day 11 LIVE <img
                                            src="{{ asset('images/trend.png') }}" alt="Trending" height="16"></a></li>
                                <li><a href="#">Bharat Bandh LIVE <img src="{{ asset('images/trend.png') }}"
                                            alt="Trending" height="16"></a></li>
                                <li><a href="#">The Hindu Tech Summit 2026 LIVE<img
                                            src="{{ asset('images/trend.png') }}" alt="Trending" height="16"></a></li>
                                <li><a href="#">Live news <img src="{{ asset('images/trend.png') }}" alt="Trending"
                                            height="16"></a></li>
                                <li><a href="#">Life Beneath the Indian Ocean <img src="{{ asset('images/trend.png') }}"
                                            alt="Trending" height="16"></a></li>


                            </ul>
                        </div>

                        <!-- Column 6 -->

                        <div class="col-lg-6 col-md-6 mb-4">

                            <h6 class="fw-bold  border-top border-5 text-dark border-dark pt-3 pb-2">Trending on Group
                                sites</h6>
                            <ul class="list-unstyled footer-links">
                                <li><a href="#"> Stock Market Live Updates <img src="{{ asset('images/trend.png') }}"
                                            alt="Trending" height="16"></a></li>
                                <li><a href="#">IPL 2026 Auction Live Updates<img src="{{ asset('images/trend.png') }}"
                                            alt="Trending" height="16"></a></li>
                                <li><a href="#">IND vs ENG Test Series Full Results <img
                                            src="{{ asset('images/trend.png') }}" alt="Trending" height="16"></a></li>
                                <li><a href="#">TH Games<img src="{{ asset('images/trend.png') }}" alt="Trending"
                                            height="16"></a></li>
                                <li><a href="#">Gold Rate Today <img src="{{ asset('images/trend.png') }}"
                                            alt="Trending" height="16"></a></li>
                                <li><a href="#">Silver Rate Today <img src="{{ asset('images/trend.png') }}"
                                            alt="Trending" height="16"></a></li>
                                <li><a href="#">Arvind Kejriwal Exclusive Interview<img
                                            src="{{ asset('images/trend.png') }}" alt="Trending" height="16"></a></li>
                                <li><a href="#">Editor’s Note: Putting Muslims in their place? <img
                                            src="{{ asset('images/trend.png') }}" alt="Trending" height="16"></a></li>
                                <li><a href="#">Frontline Current Issue<img src="{{ asset('images/trend.png') }}"
                                            alt="Trending" height="16"></a></li>


                            </ul>
                        </div>
                    </div>






                    <!-- Latest News Section -->

                    <!-- Latest News Section -->
                    <div class="row mt-4">

                        <div class="col-12">
                            <h6 class="fw-bold border-top border-5 border-dark text-dark pt-3 pb-2">
                                Latest News
                            </h6>
                        </div>

                        <!-- Left News Column -->
                        <div class="col-md-6 text-dark">
                            <ul class="list-unstyled">
                                <li class="mb-3 border-bottom pb-2">Delhi: exploring the many versions of a city that
                                    co-exist</li>
                                <li class="mb-3 border-bottom pb-2">Shooting at South Carolina State University
                                    residence complex kills 2, wounds 1</li>
                                <li class="mb-3 border-bottom pb-2">Winter on a plate: A culinary trail through Delhi
                                </li>
                                <li class="mb-3 border-bottom pb-2">At India’s Grand Canyon</li>
                                <li class="mb-3 border-bottom pb-2">BJP to begin talks on seat allocation in a month:
                                    Nainar Nagendhran</li>
                            </ul>
                        </div>

                        <!-- Right News Column -->
                        <div class="col-md-6 text-dark">
                            <ul class="list-unstyled">
                                <li class="mb-3 border-bottom pb-2">When the sea takes over</li>
                                <li class="mb-3 border-bottom pb-2">Have worked on more speed and revs on the ball:
                                    Varun Chakravarthy</li>
                                <li class="mb-3 border-bottom pb-2">Dhinakaran calls for regularisation of 328 temporary
                                    teaching staff</li>
                                <li class="mb-3 border-bottom pb-2">Hello Kitty designer bows out after 40 years in
                                    charge</li>
                                <li class="mb-3 border-bottom pb-2">Love in the time of quick commerce</li>
                            </ul>
                        </div>

                    </div>





                </div>

                <!-- Bottom Line -->
                <!-- Bottom Footer Section -->
                <div class="border-top pt-4 mt-4">

                    <!-- ICON ROW -->
                    <div class="d-flex align-items-center gap-2 mb-3">

                        <a href="#" class="footer-icon"><i class="bi bi-whatsapp"></i></a>
                        <a href="#" class="footer-icon"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="footer-icon"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="footer-icon"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="footer-icon"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="footer-icon"><i class="bi bi-youtube"></i></a>
                        <a href="#" class="footer-icon"><i class="bi bi-spotify"></i></a>
                        <a href="#" class="footer-icon"><i class="bi bi-telegram"></i></a>

                    </div>

                    <!-- TERMS LINKS -->
                    <div class="small mb-2">
                        <a href="#" class="text-dark text-decoration-none me-2">TERMS OF USE</a> /
                        <a href="#" class="text-dark text-decoration-none ms-2">PRIVACY POLICY</a> /
                    </div>

                    <!-- COPYRIGHT -->
                    <div class="small text-muted">
                        Copyright © 2026, SevenUnique Publishing Pvt Ltd. or its affiliated companies.
                        All rights reserved.
                    </div>

                </div>


            </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>