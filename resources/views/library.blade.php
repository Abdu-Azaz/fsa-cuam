
@extends('layouts.two-columns')

{{-- DOCUMENT TITLE (Browser Tab) --}}
@section('title')
    {{ __('messages.library') }}
@endsection

{{-- PAGE HEADER INFO --}}
@section('page_header')
    @include('partials.page_header', [
         'pageTitle' => "messages.library", 
         'pageBreadcrumb' => '',
    ])
 @endsection

{{-- MAIN COLUMN TITLE (LEFT COLUMN) --}}
 @section('main_column_title') 
    {{ __('messages.library') }}
@endsection 

{{-- MAIN COLUMN CONTENT (LEFT COLUMN) --}}
@section('main_column_content')
    <x-section-title> {{ __('messages.library') }}</x-section-title>
    
@endsection



