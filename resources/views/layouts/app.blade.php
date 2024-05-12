<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="overflow-x:hidden ;">

<head>
    @include('partials.head')
    <style>
        .section-title::before {
            position: absolute;
            content: "";
            width: 200px;
            height: 5px;
            {{App::getLocale() === 'ar'? 'right:0': 'left:0'}};
            bottom: 0;
            background: var(--color-primary);
            border-radius: 2px;
        }
    </style>
</head>

<body oncontextmenu="return false;">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    @include('partials.topnavbar')
    <!-- Topbar End -->
    <!-- Navbar & Carousel Start -->
    @include('partials.navbar')
    {{-- a closing div is on the other files to wrap the background as well --}}
    @yield('content')
    <!-- Full Screen Search Start -->
    {{-- @include('partials.search_modal') --}}
    <!-- Full Screen Search End -->

    <!-- Footer Start -->
    @include('partials.footer')
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="{{ route('homepage') }}" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    @include('partials.javascript')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script> --}}
    @yield('js')
</body>

</html>
