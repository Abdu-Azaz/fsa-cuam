@extends('layouts.one-column')

@section('title')
    {{ __('messages.presentation') }}
@endsection

@section('page_header')
    @include('partials.page_header', [
        'pageTitle' => __('messages.presentation'),
        'pageBreadcrumb' => 'presentation',
    ])
@endsection


@section('main_column_content')
<x-section-title>{{__('Organigramme')}}</x-section-title>
<div class="text-center">
    <img class="img-fluid w-100 img-responsive"  src="{{url('storage/'.setting('organigramme', ''))}}" alt="">
    {{-- <img src="http://www.fsr.ac.ma/sites/default/files/organigramme_0.jpg" alt=""> --}}
</div>
@endsection
