<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap"
        rel="stylesheet">
    <title>Top Picks Slider</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


</head>
<style>
/* Pagination container */
.swiper-pagination {
    position: relative;
    margin-top: 25px;
    text-align: center;
}

/* Default bullet (grey line) */
.swiper-pagination-bullet {
    width: 40px;
    height: 4px;
    background: #cfcfcf;
    opacity: 1;
    border-radius: 0;
    margin: 0 6px !important;
}

/* Active bullet (red line) */
.swiper-pagination-bullet-active {
    background: #B00020;
}

/* Custom Arrows */
.custom-prev,
.custom-next {
    width: 40px;
    height: 40px;
    color: gray;
    border-radius: 50%;
}

.custom-prev {
    left: -50px;
}

.custom-next {
    right: -50px;
}
</style>


<body>

    <section class="py-5 bg-light">
        <div class="container">

            <h2 class="fw-bolder mb-4" style="color:#B00020; font-family:playfair Display;">Top Picks</h2>

            <div class="position-relative">

                <!-- Swiper -->
                <div class="swiper topPicksSwiper">
                    <div class="swiper-wrapper">

                        <!-- SLIDE -->
                        <div class="swiper-slide">
                            <div class="row g-4">

                                <div class="col-md-3">
                                    <div class="position-relative overflow-hidden">
                                        <img src="images/slide1.png" class="img-fluid w-100">
                                        <div class="overlay p-3 text-white">
                                            <small class="fw-bold">TECHNOLOGY</small>
                                            <h3 class="fw-bold mt-2">Nothing’s first flagship retail store</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="position-relative overflow-hidden">
                                        <img src="images/slide4.png" class="img-fluid w-100">
                                        <div class="overlay p-3 text-white">
                                            <small class="fw-bold">WORLD</small>
                                            <h3 class="fw-bold mt-2">U.S. used Anthropic's Claude during raid</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="bg-danger text-white d-flex align-items-end p-4" style="height:434px;">
                                        <div>
                                            <small class="fw-bold">LIFE & STYLE</small>
                                            <h3 class="fw-bold mt-3">Valentine’s day: redefining romance</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="position-relative overflow-hidden">
                                        <img src="images/slide3.png" class="img-fluid w-100">
                                        <div class="overlay p-3 text-white">
                                            <small class="fw-bold">HOMES & GARDENS</small>
                                            <h3 class="fw-bold mt-2">Designing the new arena in India</h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Duplicate Slide -->
                        <div class="swiper-slide">
                            <div class="row g-4">

                                <div class="col-md-3">
                                    <div class="position-relative overflow-hidden">
                                        <img src="images/slide1.png" class="img-fluid w-100">
                                        <div class="overlay p-3 text-white">
                                            <small class="fw-bold">TECHNOLOGY</small>
                                            <h6 class="fw-bold mt-2">Nothing’s first flagship retail store</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="position-relative overflow-hidden">
                                        <img src="images/slide4.png" class="img-fluid w-100">
                                        <div class="overlay p-3 text-white">
                                            <small class="fw-bold">WORLD</small>
                                            <h6 class="fw-bold mt-2">U.S. used Anthropic's Claude during raid</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="bg-danger text-white d-flex align-items-end p-4" style="height:434px;">
                                        <div>
                                            <small class="fw-bold">LIFE & STYLE</small>
                                            <h4 class="fw-bold mt-3">Valentine’s day: redefining romance</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="position-relative overflow-hidden">
                                        <img src="images/slide3.png" class="img-fluid w-100">
                                        <div class="overlay p-3 text-white">
                                            <small class="fw-bold">HOMES & GARDENS</small>
                                            <h6 class="fw-bold mt-2">Designing the new arena in India</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Duplicate Slide -->
                        <div class="swiper-slide">
                            <div class="row g-4">

                                <div class="col-md-3">
                                    <div class="position-relative overflow-hidden">
                                        <img src="images/slide1.png" class="img-fluid w-100">
                                        <div class="overlay p-3 text-white">
                                            <small class="fw-bold">TECHNOLOGY</small>
                                            <h6 class="fw-bold mt-2">Nothing’s first flagship retail store</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="position-relative overflow-hidden">
                                        <img src="images/slide4.png" class="img-fluid w-100">
                                        <div class="overlay p-3 text-white">
                                            <small class="fw-bold">WORLD</small>
                                            <h6 class="fw-bold mt-2">U.S. used Anthropic's Claude during raid</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="bg-danger text-white d-flex align-items-end p-4" style="height:434px;">
                                        <div>
                                            <small class="fw-bold">LIFE & STYLE</small>
                                            <h4 class="fw-bold mt-3">Valentine’s day: redefining romance</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="position-relative overflow-hidden">
                                        <img src="images/slide3.png" class="img-fluid w-100">
                                        <div class="overlay p-3 text-white">
                                            <small class="fw-bold">HOMES & GARDENS</small>
                                            <h6 class="fw-bold mt-2">Designing the new arena in India</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- Outside Arrows -->
                <div class="swiper-button-prev custom-prev"></div>
                <div class="swiper-button-next custom-next"></div>

                <!-- Pagination -->
                <div class="swiper-pagination mb-5"></div>

            </div>
               <div class="text-center mt-5">

        <a href="/">
            <img src="{{ asset('images/add2.png') }}" alt="Advertisement" class="img-fluid mx-auto d-block"
                style="max-width:100%;">

        </a>
        <p class="text-uppercase small text-muted mb-5 mt-5">
            Advertisement
        </p>
    </div>

        </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
    var swiper = new Swiper(".topPicksSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,

        navigation: {
            nextEl: ".custom-next",
            prevEl: ".custom-prev",
        },

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    </script>

</body>

</html>