@extends('layouts.two-columns')

@section('title')
    {{ __('messages.teams') }}
@endsection

@section('page_header')
    @include('partials.page_header', [
        'pageTitle' => __('messages.teams'),
        'pageBreadcrumb' => '',
    ])
@endsection


@section('main_column_content')
    <x-section-title>{{ __('messages.teams') }}</x-section-title>
    
@endsection
