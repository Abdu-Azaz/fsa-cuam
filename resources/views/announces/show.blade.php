@push('css')
    <meta name="keywords" content="{{ $announce->meta_keywords }}">
@endpush
{{-- 2C Layout --}}
{{-- {{dd($announce)}} --}}

@extends('layouts.two-columns')

{{-- DOCUMENT TITLE (Browser Tab) --}}
@section('title')
    {{ __('messages.announcements') }}
@endsection

{{-- PAGE HEADER INFO --}}
@section('page_header')
    @include('partials.page_header', [
        'pageTitle' => __('messages.announcements'),
        'pageBreadcrumb' => '',
    ])
@endsection
{{-- MAIN COLUMN TITLE (LEFT COLUMN) --}}

{{-- MAIN COLUMN CONTENT (LEFT COLUMN) --}}
@section('main_column_content')
    <h2 class="text-ceter mb-2">{{ $announce->title }}</h2>
    <div>
        {{__('messages.added-on')}}: {{ $announce->formatDateTime()}} ( {{ $announce->isUpdated() ? __('messages.lu').': '.$announce->announceUpdatedSince(): ''}})
    </div>
    <div class="bg-white p-4">
        <div class="w-100">
            {!! $announce->body !!}
        </div>
    </div>
@endsection
