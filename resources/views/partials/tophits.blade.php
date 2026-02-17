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
                                        <a href="/">
                                            <img src="img/movie.png" class="img-fluid w-100">
                                        </a>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="position-relative overflow-hidden">
                                        <a href="/">
                                            <img src="img/biffes.png" class="img-fluid w-100">
                                        </a>
                                        
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="position-relative overflow-hidden">
                                        <a href="/">
                                            <img src="img/anomie.png" class="img-fluid w-100">
                                        </a>

                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="position-relative overflow-hidden">
                                        <a href="/">
                                            <img src="img/adventure.png" class="img-fluid w-100">
                                        </a>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Duplicate Slide -->
                        <div class="swiper-slide">
                            <div class="row g-4">

                                <div class="col-md-3">
                                    <div class="position-relative overflow-hidden">
                                        <a href="/">
                                            <img src="img/battle.png" class="img-fluid w-100">
                                        </a>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="position-relative overflow-hidden">
                                        <a href="/">
                                            <img src="img/adventure.png" class="img-fluid w-100">
                                        </a>

                                    </div>
                                </div>

                              <div class="col-md-3">
                                    <div class="position-relative overflow-hidden">
                                        <a href="/">
                                            <img src="images/text.png" class="img-fluid w-100">
                                        </a>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="position-relative overflow-hidden">
                                        <a href="/">
                                            <img src="img/anomie.png" class="img-fluid w-100">
                                        </a>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Duplicate Slide -->
                        <div class="swiper-slide">
                            <div class="row g-4">

                                <div class="col-md-3">
                                    <div class="position-relative overflow-hidden">
                                        <a href="/">
                                            <img src="images/slide1.png" class="img-fluid w-100">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="position-relative overflow-hidden">
                                        <a href="/">
                                            <img src="images/slide4.png" class="img-fluid w-100">
                                        </a>

                                    </div>
                                </div>

                               <div class="col-md-3">
                                    <div class="position-relative overflow-hidden">
                                        <a href="/">
                                            <img src="images/text.png" class="img-fluid w-100">
                                        </a>

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="position-relative overflow-hidden">
                                        <a href="/">
                                            <img src="images/slide3.png" class="img-fluid w-100">
                                        </a>

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