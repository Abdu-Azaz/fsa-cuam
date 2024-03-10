@extends('layouts.two-columns')

@section('title')
    {{ __('messages.labs') }}
@endsection

@section('page_header')
    @include('partials.page_header', [
        'pageTitle' => __('messages.labs'),
        'pageBreadcrumb' => '',
    ])
@endsection


@section('main_column_content')
    <x-section-title>{{ __('messages.labs') }}</x-section-title>
    
@endsection
