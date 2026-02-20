@extends('layouts.app')

@section('content')

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                       
                        <!-- /Brand logo-->
                        <!-- Left Text-->
     <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                    <div class="w-100 d-lg-flex flex-column  justify-content-left px-5">
                        <div class="d-flex  align-items-baseline gap-2">
                                <a class="brand-logoo" href="#">
                                <img src="{{ asset('images/ekeroLogo.png') }}" 
                                    alt="Ekero Logo" 
                                    style="height: 150px; width:auto; position: static !important;">
                            </a>
                            <p class="fw-bold" style="font-size:18px; color:#000;">Building Wealth Together</p>
                        </div>
                      
                    <img class="img-fluid" 
                            src="{{ asset('admin/app-assets/images/pages/login-v2.svg')}}" 
                            alt="Login V2"
                            style="max-width: 85%; height: auto;">
                    </div>
                </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                       <div class="col-lg-4 align-items-center auth-bg px-2 p-lg-5 d-flex justify-content-center flex-column">
                             @if ($errors->any())
    <div class="alert alert-danger p-1">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- Session Error (for invalid credentials etc.) --}}
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h2 class="card-title fw-bold mb-1">Welcome to Ekero Partners! 👋</h2>
                                <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>
                                <form class="auth-login-form mt-2" action="{{ route('user.login.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-1">
                                        <label class="form-label" for="login-email">Email</label>
                                        <input class="form-control" id="login-email" type="text" name="email" placeholder="john@example.com" aria-describedby="login-email" autofocus="" tabindex="1" />
                                    </div>
                                    <div class="mb-1">
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label" for="login-password">Password</label><a href="{{route('user.forget.password')}}"><small>Forgot Password?</small></a>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="login-password" type="password" name="password" placeholder="············" aria-describedby="login-password" tabindex="2" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" id="remember-me" type="checkbox" tabindex="3" />
                                            <label class="form-check-label" for="remember-me"> Remember Me</label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100" tabindex="4">Sign in</button>
                                </form>
                                <p class="text-center mt-2"><span>New on our platform?</span><a href="{{ route('user.register')}}"><span>&nbsp;Create an account</span></a></p>
                               
                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('admin/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('admin/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('admin/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{ asset('admin/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('admin/app-assets/js/scripts/pages/auth-login.js')}}"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->
@endsection
