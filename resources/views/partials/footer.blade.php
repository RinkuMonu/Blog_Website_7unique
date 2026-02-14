<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

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
</body>
</html>