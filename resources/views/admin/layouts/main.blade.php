 @include('admin.layouts.partials.header')

    <!-- Main Menu -->
    @include('admin.layouts.partials.sidebar')

        @yield('content')
        @yield('script')
</body>

</html>