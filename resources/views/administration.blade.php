@extends('layouts.one-column')

@section('title')
    {{-- PAGE TITLE --}}
@endsection

@section('page_header')
    {{-- PAGE HEADER INCLUDE --}}
    @include('partials.page_header', [
        'pageTitle' => 'Administration',
        'pageBreadcrumb' => 'administration',
    ])
@endsection
 

@section('main_column_content')
    {{-- CONTENT --}}
    <x-section-title>{{__('Administration')}}</x-section-title>
    <div class="text-center">
        <img class="img-fluid w-100 img-responsive"  src="{{url('storage/'.setting('organigramme', ''))}}" alt="">
        {{-- <img src="http://www.fsr.ac.ma/sites/default/files/organigramme_0.jpg" alt=""> --}}
    </div>
    <div class="text-center">
        <img class="img-fluid w-100 img-responsive"  src="{{url('storage/'.setting('conseil-faculte', '#'))}}" alt="">
    </div>
    <x-section-title>{{__('messages.faculty-council')}}</x-section-title>
    <p>
        {{__('messages.faculty-council-definition')}}
        <a class="badge bg-danger" href="{{setting('faculty-council', '#')}}">{{__('messages.download')}}</a>
    </p>
 
@endsection

