
@extends('layouts.two-columns')

{{-- DOCUMENT TITLE (Browser Tab) --}}
@section('title')
    {{ __('Bibliothèque') }}
@endsection

{{-- PAGE HEADER INFO --}}
@section('page_header')
    @include('partials.page_header', [
         'pageTitle' => 'Bibliothèque', 
         'pageBreadcrumb' => '',
    ])
 @endsection

{{-- MAIN COLUMN TITLE (LEFT COLUMN) --}}
 @section('main_column_title') 
    {{ __('Bibliothèque') }}
@endsection 

{{-- MAIN COLUMN CONTENT (LEFT COLUMN) --}}
@section('main_column_content')
  En cours de construction
@endsection



