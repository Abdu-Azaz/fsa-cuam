@extends('layouts.two-columns')
{{-- DOCUMENT TITLE (Browser Tab) --}}
@section('title')
    {{ __('messages.deans-word') }}
@endsection
{{-- PAGE HEADER INFO --}}

@section('page_header')
    @include('partials.page_header', [
        'pageTitle' => 'messages.deans-word',
        'pageBreadcrumb' => 'doyen',
    ])
@endsection

{{-- MAIN COLUMN TITLE (LEFT COLUMN) --}}

{{-- MAIN COLUMN CONTENT (LEFT COLUMN) --}}
@section('main_column_content')
    <x-section-title> {{ __('messages.deans-word') }}</x-section-title>
    <div class="w-100 d-flex justify-content-center ">
        <img class="rounded wow zoomIn evc" data-wow-delay="0.9s" src="{{ url('storage/' . setting('dean-photo')) }}"
        style="max-width:250px;object-fit: cover;">
    </div>
    <div class="my-4">
        <h5>Dr. Ali Rashidi - {{ __('messages.deans-of-fasam') }}</h5>
    </div>
    <i class="fas fa-quote-left d-block"></i>
    <div class="px-md-5 px-2">

        <p class="mb-4 text-dark text-indent">
            {!! __(setting('deans-word')) !!}
        </p>
    </div>
    <span class="w-100 d-flex justify-content-end"><i class="fas fa-quote-right"></i></span>
@endsection
