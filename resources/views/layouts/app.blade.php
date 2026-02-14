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




    </style>
</head>
<body>

   <!-- TOP BAR -->
<div class="bg-white  py-2">
    <div class="container d-flex justify-content-between align-items-center">

        <!-- Left Side -->
        <div class="d-flex align-items-center gap-3">
            <span class="text-muted">February 13, 2026</span>
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
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container">

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">

            <!-- Left Search + Menu -->
            <ul class="navbar-nav me-5 align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-list"></i></a>
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


    <div class="container content mt-4">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content') </div>

    <footer class="bg-light pt-5 pb-4 border-top  ">
    <div class="container">

        <!-- Logo Row -->
        <div class="mb-4">
            <h2 style="font-family:'Times New Roman',serif; color:#000; font-size:40px;">
                SEVENUNIQUE
            </h2>
        </div>

        <div class="row">

            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <h6 class="fw-bold border-bottom border-5 border-dark pb-2">Seven Unique</h6>
                <ul class="list-unstyled footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Editorial Values</a></li>
                    <li><a href="#">News Archive</a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Digital Subscription</a></li>
                </ul>
            </div>

           
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <h6 class="fw-bold border-bottom  border-5 border-dark pb-2">Business</h6>
                <ul class="list-unstyled footer-links">
                    <li><a href="#">Markets</a></li>
                    <li><a href="#">Economy</a></li>
                    <li><a href="#">Industry</a></li>
                    <li><a href="#">Budget</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <h6 class="fw-bold border-bottom border-5 border-dark pb-2">States</h6>
                <ul class="list-unstyled footer-links">
                    <li><a href="#">Rajasthan</a></li>
                    <li><a href="#">Delhi</a></li>
                    <li><a href="#">Karnataka</a></li>
                    <li><a href="#">Tamil Nadu</a></li>
                </ul>
            </div>

            <!-- Column 4 -->
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <h6 class="fw-bold border-bottom border-5 border-dark pb-2">Sport</h6>
                <ul class="list-unstyled footer-links">
                    <li><a href="#">Cricket</a></li>
                    <li><a href="#">Football</a></li>
                    <li><a href="#">Tennis</a></li>
                    <li><a href="#">Athletics</a></li>
                </ul>
            </div>

            <!-- Column 5 -->
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <h6 class="fw-bold border-bottom border-5 border-dark pb-2">Trending</h6>
                <ul class="list-unstyled footer-links">
                    <li><a href="#">Latest News</a></li>
                    <li><a href="#">Elections 2026</a></li>
                    <li><a href="#">Live Updates</a></li>
                    <li><a href="#">Technology</a></li>
                </ul>
            </div>

            <!-- Column 6 -->
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <h6 class="fw-bold border-bottom border-5 border-dark pb-2">Contact</h6>
                <ul class="list-unstyled footer-links">
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">Social Media</a></li>
                </ul>
            </div>

        </div>

        <!-- Bottom Line -->
        <div class="border-top pt-3 mt-3 text-center small text-muted">
            © 2026 SevenUnique. All Rights Reserved.
        </div>

    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>