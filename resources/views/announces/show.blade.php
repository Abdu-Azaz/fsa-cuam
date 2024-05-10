@push('css')
    <meta name="keywords" content="{{ $announce->meta_keywords }}">
@endpush
{{-- 2C Layout --}}
{{-- {{dd($announce)}} --}}

@extends('layouts.one-column')

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
    <span class="bg-light border">
        {{__('messages.added-on')}}: {{ $announce->formatDateTime()}}  {{ $announce->isUpdated() ? "(". __('messages.lu').': '.$announce->announceUpdatedSince().")": ''}}
    </span>
   
    <div class="bg-white p-4">
        <div class="w-100 rich-im-res" style="overflow-x:auto">
            {!! $announce->body !!}
        </div>
        <span class="bg-light border">
            <i class="fas fa-eye"></i> {{$announce->views_count}} {{__('messages.views')}}
        </span>
       
        {{-- <div class="bg-info">
        </div> --}}
    </div>
@endsection
