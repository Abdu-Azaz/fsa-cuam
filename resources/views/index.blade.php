@extends('layouts.app')

@section('title', 'FSAAM | HOME ')
@section('content')
    </div>

    {{-- to close nav container  --}}
    @if (isset($sliders))
        <!-- Navbar & Carousel Start -->
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($sliders as $slide)
                        <div class="carousel-item {{ $loop->first ? ' active' : '' }} fitToScreen">
                            <img class="w-100 fitToScreen" src="{{ url('storage/' . $slide->slide_image) }}" alt="Image">
                            <div class="grid"></div>
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="h1 text-white text-uppercase mb-3 animated slideInDown">
                                        {{ __($slide->slide_title) }}
                                    </h4>
                                    <h1 class="display-4 text-white mb-md-4 animated zoomIn">{{ $slide->slide_description }}
                                    </h1>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    @endif
    </div> <!-- Close Nav -->

    <!-- Navbar & Carousel End -->
    <!-- Counter UP Start -->
    @include('partials.counter_up')
    {{-- @include('partials.counter2') --}}
    <!-- Counter UP Start -->
    {{-- News V1 Start --}}
    <div class="container my-2 " id="news" >
        <x-section-title> {{ __('messages.news') }}</x-section-title>

        <div class="d-flex justify-content-end align-items-center my-3">
            <button class="btn btn-outline-dark owl-prev mx-2 rounded-0 py-0 px-3"><i
                    class="fas fa-chevron-left"></i></button>
            <button class="btn btn-outline-dark owl-next py-0 px-3 rounded-0"><i class="fas fa-chevron-right"></i></button>
        </div>
        <div class="owl-carousel owl-theme wow fadeInRight" data-wow-delay="0.3s">
            {{-- {{($announces)}} --}}
            @if (count($announces) > 0)
                @foreach ($announces as $announce)
                    <x-post :announce='$announce' />
                @endforeach
                <div class="wow SlideInRight  bg-light rounded  m-1 d-flex align-items-center justify-content-center"
                    data-wow-delay="0.7s"
                    style=" background:linear-gradient(135deg, {{ setting('color1', '#dff') }},  {{ setting('color2', '#fdd') }}); height:235px"
                    sstyle="">
                    <a class="text-uppercase h4 fw-bold border p-3 "
                        href="{{ route('announces.index') }}">{{ __('messages.see-more') }}</a>
                </div>
            @else
                {{ __('Pas d\'announces') }}
            @endif
            {{-- d-flex justify-content-center align-items-center --}}
        </div>
    </div>
    {{-- News V1 END --}}
    <div class="container my-3">
        <x-section-title> {{ __('messages.deans-word') }}</x-section-title>

        <div class="card mb-3 text-light "
            style="background:linear-gradient(135deg, 
        {{ setting('color1-gradients', '#334') }}, 
        {{ setting('color2-gradients', '#334') }}  
    )">
    {{-- #ADD8E6--}}
            <div class="row g-0">
                <div class="col-sm-2">
                    <img src="{{ url('storage/' . setting('dean-photo')) }}" class="img-fluid rounded-start w-100"
                        alt="{{ __('Dean Image') }}">
                </div>
                <div class="col-sm-8">
                    <div class="card-body">
                        <i class="fas fa-quote-left d-block"></i>
                        <p class="card-text text-wrap fs-5">

                            {{ __('messages.dean-excerpt') }}...
                            <span class="w-100 d-flex justify-content-end">
                                <i class="fas fa-quote-right"></i>
                            </span>
                        </p>
                        <a class="btn btn-sm btn-warning py-0" href="{{ route('doyen') }}">{{ __('messages.see-more') }}
                            <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- News V2 Start --}}
    {{-- @include('timeline_news') --}}
    {{-- News V1 END --}}
    <div class="container mb-3" id="events">
        <x-section-title> {{ __('messages.events') }}</x-section-title>

        @if (count($events) > 0)
            <div class="d-flex justify-content-end align-items-center my-1">
                <button class="btn btn-outline-dark owl-prev rounded-0 mx-2 py-0"><i
                        class="fas fa-chevron-left"></i></button>
                <button class="btn btn-outline-dark owl-next rounded-0 py-0"><i class="fas fa-chevron-right"></i></button>
            </div>


            <div class="owl-carousel owl-theme row">
                @foreach ($events as $e)
                    <div class="col-lg-3 wow slideInUp w-100" data-wow-delay="0.6s"
                        style="visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;">
                        <div class="team-item bg-light border rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden"><img class="img-fluid w-100"
                                    src="{{ url('storage/' . $e->event_cover) }}" alt="website template image">
                                <div class="team-social">
                                    <a class="btn btn-sm bg-warning py-0" href="{{ null }}">
                                        <p style="font-size:0.8rem" class="mb-1 fw-bold ms-auto ">
                                            <i class="fas fa-map-marker-alt me-2"></i>
                                            {{ $e->location }}
                                        </p>
                                    </a>
                                    <a class="btn btn-lg bg-warning py-0" href=" ">
                                        <p style="font-size:0.8rem" class="mb-1 fw-bold ms-auto">
                                            <i class="far fa-calendar-alt  me-2"></i>
                                            {{ \Carbon\Carbon::parse($e->datetime)->format('d M Y H:i ') }}
                                        </p>
                                    </a>
                                </div>
                            </div>

                            <div class="text-center py-2">
                                <a href="{{ route('event.show', ['slug' => $e->slug]) }}" class="mb-1 fw-bold"
                                    style="font-size: 12px; ">{{ $e->title }}</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            0 {{ __('messages.events') }}
        @endif
    </div>
    {{-- Plateforms --}}
    @include('partials.platforms')
    {{-- Plateforms --}}
    {{-- ------------------------------ --}}
    {{-- Parteners --}}
    @include('partials.partners')
    {{-- Parteners --}}

    {{-- Contact Form --}}
 
    {{-- //Contact Form --}}
    @livewire('create-contact')
@endsection
