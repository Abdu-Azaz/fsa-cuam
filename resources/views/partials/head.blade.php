<meta charset="utf-8">
<title>@yield('title')</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="{{url('img/favicons/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ url('storage/favicons/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{url('img/favicons/favicon-16x16.png')}}">
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css"> --}}

<link rel="preconnect" href="https://fonts.googleapis.com">
{{-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
{{-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet"> --}}
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,700;1,9..40,300&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheet -->
{{-- <link rel="stylesheet" href=""> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
{{-- <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" rel="stylesheet">
<link href="{{asset('css/animate.css')}}" rel="stylesheet">

<!-- Customized RST Stylesheet -->

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" /> --}}

<!-- Template SS sheets PowerCss.com -->
<link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
<meta name="description" content="Faculté des Sciences Appliquées Ait Melloul">
<meta name="keywords" content="FSA, FSAAM, CUAM, Faculté des Sciences Appliquées Ait Melloul">
<meta property="og:title" content="Faculté des Sciences Appliquées Ait Melloul">
<meta property="og:description" content="Faculté des Sciences Appliquées Ait Melloul">
<meta property="og:image" content="{{ url('storage/site/logo-dark.png') }}">
<meta property="og:url" content="{{ url('/') }}">
<meta name="robots" content="index, follow">
@livewireStyles
@stack('css')