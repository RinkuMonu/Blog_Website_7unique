<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SevenUnique News Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { display: flex; flex-direction: column; min-height: 100vh; }
        .content { flex: 1; }
        footer { background: #343a40; color: white; padding: 20px 0; margin-top: 40px; }
    </style>
</head>
<body>

   <!-- TOP HEADER -->
    <div class="bg-white border-bottom py-2">
        <div class="container d-flex justify-content-between align-items-center">

            <!-- Left: Languages -->
            <div class="d-flex gap-3 fw-semibold">
                <a href="#" class="text-dark text-decoration-none">हिन्दी</a>
                <a href="#" class="text-dark text-decoration-none">English</a>
                <a href="#" class="text-dark text-decoration-none">ગુજરાતી</a>
            </div>

            <!-- Center: City/Logo -->
            <h4 class="m-0 fw-bold">Jaipur</h4>

            <!-- Right: Social Icons + Signup -->
            <div class="d-flex align-items-center gap-3">

                <!-- Social Icons -->
                <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" width="22"></a>
                <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733558.png" width="22"></a>
                <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733561.png" width="22"></a>
                <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" width="22"></a>

                <!-- Signup Button -->
                <a href="#" class="btn btn-dark rounded-pill px-4">Sign Up</a>
            </div>

        </div>
    </div>

    <!-- TRENDING BAR -->
    <div class="bg-light py-2 border-bottom">
        <div class="container">
            <span class="fw-bold">Trending :</span>
            <span class="text-danger">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit...
            </span>
        </div>
    </div>

    <!-- MAIN NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background:#1d3c8f;">
        <div class="container">

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto fw-semibold">

                    <li class="nav-item px-2">
                        <a class="nav-link active" href="/">Home</a>
                    </li>

                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            State
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Rajasthan</a></li>
                            <li><a class="dropdown-item" href="#">Delhi</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Business
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Markets</a></li>
                            <li><a class="dropdown-item" href="#">Startups</a></li>
                        </ul>
                    </li>

                    <li class="nav-item px-2">
                        <a class="nav-link" href="#">Entertainment</a>
                    </li>

                    <li class="nav-item px-2">
                        <a class="nav-link" href="#">Sports</a>
                    </li>

                    <li class="nav-item px-2">
                        <a class="nav-link" href="#">Lifestyle</a>
                    </li>

                    <li class="nav-item px-2">
                        <a class="nav-link" href="#">Technology</a>
                    </li>

                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Election
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">2026 Updates</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <div class="container content mt-4">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content') </div>

    <footer>
        <div class="container text-center">
            <p>&copy; {{ date('Y') }} SevenUnique Blogging Website. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>