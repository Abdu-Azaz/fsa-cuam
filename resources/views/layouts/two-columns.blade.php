@extends('layouts.app')

@php
    $featured = \App\Models\Announce::where('isFeatured', 1)->take(4)->get();
@endphp
@section('content')
    @yield('page_header')
    <div class="my-container">
        <div class="row g-4">
            <div class="col-lg-9 border rounded bg-white wow fadeInUp" data-wow-delay="0.1s">
                <div class="p-2 p-lg-4">
                    {{-- <div class="section-title position-relative pb-3 mb-5"> --}}
                    {{-- <h5 class="fw-bold text-primary text-uppercase">{{ __('Formations') }}</h5> --}}
                    {{-- <h1 class="mb-0">@yield('main_column_title')</h1> --}}
                    {{-- </div> --}}

                    <div class="my-sm-2 my-lg-4">
                        @yield('main_column_content')
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="border rounded bg-white ps-3">
                    <div class="py-4 mb-5s wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="input-group">
                            @livewire('search')
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h5>{{ __('messages.links') }}</h5>
                        <ul class="category-list" data-scroll-reveal="enter from the bottom after 0.2s"
                            data-scroll-reveal-id="9" data-scroll-reveal-initialized="true"
                            data-scroll-reveal-complete="true">
                            <li><a target="_blank" href="{{ route('homepage') }}">{{ __('messages.home') }}</a></li>
                            <li><a target="_blank" href="{{ route('formations') }}">{{ __('messages.courses') }}</a></li>
                            <li><a target="_blank" href="{{ route('departements') }}">{{ __('messages.departments') }}</a>
                            <li><a target="_blank" href="{{ route('events.index') }}">{{ __('messages.events') }}</a>
                            </li>
                            <li><a href="http://scolarite.uiz.ac.ma/cst-cuam">{{ __('messages.scolarity') }}</a></li>
                            <li><a href="https://login.rosettastone.com/">{{ __('Rosetta Stone') }}</a></li>
                            <li><a href="https://minhaty.ma">Minhaty</a></li>
                        </ul>
                    </div>

                    <div class="sidebar-widget">
                        <h5>{{ __('messages.featured-news') }}</h5>
                        <ul class="recentpost-list" data-scroll-reveal="enter from the bottom after 0.5s"
                            data-scroll-reveal-id="10" data-scroll-reveal-initialized="true"
                            data-scroll-reveal-complete="true">
                            @foreach ($featured as $post)
                                <li>
                                    <img src="{{ url($post->determineAnnounceThumbnail()) }}" class="img-fluid border"
                                        style="width:60px" alt="">
                                    <h4><a href="{{ route('announces.show', $post->slug) }}">{{ $post->title }}</a></h4>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        /* .category-list li a {
                color: thistle;
            } */

        .my-container {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
@endpush
