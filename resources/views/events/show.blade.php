
@push('css')
    {{-- <meta name="keywords" content="{{ $announce->meta_keywords }}"> --}}
@endpush
{{-- 2C Layout --}}


@extends('layouts.two-columns')

{{-- DOCUMENT TITLE (Browser Tab) --}}
@section('title')
    {{ __('messages.events') }}
@endsection

{{-- PAGE HEADER INFO --}}
@section('page_header')
    @include('partials.page_header', [
        'pageTitle' => __('messages.events'),
        'pageBreadcrumb' => '',
    ])
@endsection
{{-- MAIN COLUMN TITLE (LEFT COLUMN) --}}
 

{{-- MAIN COLUMN CONTENT (LEFT COLUMN) --}}
@section('main_column_content')
    {{-- <x-section-title>{{__($event->title)}}</x-section-title> --}}

    <div class="p-md-4">
        <h2 class="text-ceter mb-2">{{ $event->title }}</h2>
        <div class="text-end my-2">
            {{__('messages.added-on')}}: {{$event->addedOn()}} <br>
        </div>
        <div class="fw-bold fs-6 p-4 rounded row">
            <div class="col-sm-12 col-md-6 bg-light border">
                <i class="fas fa-calendar-alt"></i> {{$event->formatDatetime()}} <br>
            </div>
            <div class="col-sm-12 col-md-6 bg-light border">
                <i class="fas fa-map-marked-alt"></i> {{$event->location}}
            </div>
        </div>
        
        <div class="text-center my-3" style="">
            <img class="evc w-75 img-fluid" src="{{ url('storage/' . $event->event_cover) }}" alt="">
        </div>
        <div class="w-100 my-4  p-3">
            {!! $event->body !!}
        </div>
 
    </div>
@endsection
{{-- @push('css')
    <style>
    
    </style>
@endpush --}}