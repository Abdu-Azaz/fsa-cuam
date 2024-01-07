@extends('layouts.app')

@section('content')
    @include('partials.page_header', [
        'pageTitle' => 'Events',
        'pageBreadcrumb' => '',
    ])

    <div class="container">
        <div class="row g-3">
            @if (count($events) > 0)
            <div class="d-flex justify-content-end align-items-center my-3">
                <button class="btn btn-outline-dark owl-prev mx-2 py-0"><i class="fas fa-chevron-left"></i></button>
                <button class="btn btn-outline-dark owl-next py-0"><i class="fas fa-chevron-right"></i></button>
            </div>
            <div class="owl-carousel owl-theme row">
                @foreach ($events as $e)
                    <div class="col-lg-3 col-md-3 w-100 wow slideInRight border border-1 border-dark rounded-2"
                        data-wow-delay="0.9s">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ url('storage/' . $e->event_cover) }}" alt=""
                                style="max-height: 350px;">
                        </div>
                        <div class="p-2">
                            <a href="?not_constructed_yet=true" class="mb-1 fw-bold">{{ $e->title }}</a>
                            <hr class="border border-primary m-1">
                            
                            <p style="font-size:0.7rem" class="d-flex mb-1 fw-bold ms-auto text-danger">
                                <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                {{ $e->location }}
                            </p>
                            <p style="font-size:0.7rem" class="d-flex mb-1 fw-bold ms-auto text-danger">
                                <i class="far fa-calendar-alt text-danger me-2"></i>
                                {{ \Carbon\Carbon::parse($e->datetime)->format('d M Y H:i ') }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            {{ __('0 Evenements') }}
        @endif
            <div class="my-1">
                {{$events->links()}}
            </div>
        </div>
    </div>
@endsection
