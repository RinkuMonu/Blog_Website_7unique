<style>
    

.main-menu .navbar-header .navbar-brand {
    display: flex
;
    align-items: center;
    margin-top: 0rem !important;
    font-size: inherit;
}

.nav-item a {
    padding: 12px 20px;
    border-radius: 8px;
    margin: 0 !important;
    transition: all 0.3s 
ease;
    position: relative;
    overflow: hidden;
}

.brand-image {
    width: 150px !important;   /* increase as needed */
    height: auto;
}
</style>
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto">
                <a class="navbar-brand" href="{{ route('dashboard') }}">
                    <div class="brand-logo">
                        <img src="{{ asset('images/ekeroLogol.png') }}" alt="news logo" class="brand-image">
                        <span class="brand-text">News Portals</span>
                    </div>
                </a>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
                    <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                    <i class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary" data-feather="disc"></i>
                </a>
            </li>
        </ul>
    </div>

    <div class="shadow-bottom"></div>

    <div class="main-menu-content mt-2">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
    
            {{-- Check karo user login hai ya nahi --}}
            @auth
                @php 
                    $prefix = auth()->user()->role == 1 ? 'admin' : 'author'; 
                @endphp

                <li class="nav-item">
                    <a class="d-flex align-items-center {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                        <div class="menu-icon-wrapper">
                            <i data-feather="home" class="menu-icon ms-1"></i>
                        </div>
                        <span class="menu-title text-truncate">Dashboard</span>
                        <span class="menu-badge badge bg-light-primary">Home</span>
                    </a>
                </li>

                <li class="navigation-header">
                    <span class="navigation-header-text">Content Management</span>
                    <i data-feather="more-horizontal" class="navigation-header-icon"></i>
                </li>

                {{-- Categories --}}
                <li class="nav-item">
                    <a class="d-flex align-items-center {{ request()->is($prefix.'/categories*') ? 'active' : '' }}" href="{{ route($prefix.'.categories.index') }}">
                        <div class="menu-icon-wrapper">
                            <i data-feather="grid" class="menu-icon ms-1"></i>
                        </div>
                        <span class="menu-title text-truncate">Categories</span>
                        <span class="menu-badge badge bg-light-success">Setup</span>
                    </a>
                </li>

                {{-- Subcategories --}}
                <li class="nav-item">
                    <a class="d-flex align-items-center {{ request()->is($prefix.'/subcategories*') ? 'active' : '' }}" href="{{ route($prefix.'.subcategories.index') }}">
                        <div class="menu-icon-wrapper">
                            <i data-feather="grid" class="menu-icon ms-1"></i>
                        </div>
                        <span class="menu-title text-truncate">Sub-Categories</span>
                        <span class="menu-badge badge bg-light-success">Setup</span>
                    </a>
                </li>

                {{-- News Posts --}}
                <li class="nav-item">
                    <a class="d-flex align-items-center {{ request()->is($prefix.'/posts*') ? 'active' : '' }}" href="{{ route($prefix.'.posts.index') }}">
                        <div class="menu-icon-wrapper">
                            <i data-feather="file-text" class="menu-icon ms-1"></i>
                        </div>
                        <span class="menu-title text-truncate">News Posts</span>
                        <span class="menu-badge badge bg-light-danger">Hot</span>
                    </a>
                </li>

                <li class="navigation-header">
                    <span class="navigation-header-text">User Management</span>
                    <i data-feather="more-horizontal" class="navigation-header-icon"></i>
                </li>
            @endauth

            {{-- Agar user login NAHI hai (Guest hai) toh ye dikhao --}}
            @guest
                <li class="nav-item">
                    <a class="d-flex align-items-center" href="{{ route('admin.login') }}">
                        <i data-feather="log-in"></i>
                        <span class="menu-title">Login</span>
                    </a>
                </li>
            @endguest

        </ul>
    </div>
</div>

<style>
    .brand-logo {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 0;
    }

    .brand-text {
        font-size: 1.2rem;
        font-weight: 700;
        color: #7367f0;
        white-space: nowrap;
    }

    .brand-image {
        border-radius: 8px;
        transition: transform 0.3s ease;
    }

    .brand-image:hover {
        transform: scale(1.05);
    }

    .menu-icon-wrapper {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        background: rgba(115, 103, 240, 0.1);
        margin-right: 12px;
        transition: all 0.3s ease;
    }

    .nav-item.active .menu-icon-wrapper {
        background: linear-gradient(135deg, #7367f0 0%, #9e95f5 100%);
    }

    .menu-icon {
        width: 18px;
        height: 18px;
        color: #6e6b7b;
    }

    .nav-item.active .menu-icon {
        color: white;
    }

    .menu-title {
        font-weight: 500;
        font-size: 0.95rem;
        flex: 1;
    }

    .menu-badge {
        font-size: 0.7rem;
        padding: 4px 8px;
        margin-left: 8px;
    }

    .navigation-header {
        padding: 20px 20px 8px 20px;
        border-bottom: 1px solid #e8e8e8;
        margin-bottom: 8px;
    }

    .navigation-header-text {
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #b9b9c3;
    }

    .navigation-header-icon {
        width: 14px;
        height: 14px;
        color: #b9b9c3;
    }

    .quick-stats {
        padding: 15px 20px;
    }

    .quick-stats-container {
        background: linear-gradient(135deg, #f8f8f8 0%, #f0f0f0 100%);
        border-radius: 12px;
        padding: 15px;
    }

    .stat-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 8px 0;
    }

    .stat-item:not(:last-child) {
        border-bottom: 1px solid #e8e8e8;
    }

    .stat-icon {
        width: 36px;
        height: 36px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    .stat-info {
        flex: 1;
    }

    .stat-number {
        display: block;
        font-size: 1.2rem;
        font-weight: 700;
        color: #5e5873;
        line-height: 1;
    }

    .stat-label {
        font-size: 0.75rem;
        color: #b9b9c3;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .nav-item {
        margin-bottom: 4px;
    }

    .nav-item a {
        padding: 12px 20px;
        border-radius: 8px;
        margin: 0 8px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .nav-item a::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 3px;
        background: linear-gradient(135deg, #7367f0 0%, #9e95f5 100%);
        transform: scaleY(0);
        transition: transform 0.3s ease;
    }

    .nav-item.active a::before {
        transform: scaleY(1);
    }

    .nav-item a:hover {
        background: rgba(115, 103, 240, 0.08);
    }

    .nav-item.active a {
        background: rgba(115, 103, 240, 0.12);
        color: #7367f0;
    }

    /* Scrollbar Styling */
    .main-menu-content::-webkit-scrollbar {
        width: 4px;
    }

    .main-menu-content::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    .main-menu-content::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 10px;
    }

    .main-menu-content::-webkit-scrollbar-thumb:hover {
        background: #a8a8a8;
    }
</style>