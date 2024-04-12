@extends('layouts.one-column')

@section('title')
    {{ __('messages.presentation') }}
@endsection

@section('page_header')
    @include('partials.page_header', [
        'pageTitle' => __('messages.internal-rule'),
        'pageBreadcrumb' => 'internal-law',
    ])
@endsection


@section('main_column_content')
<x-section-title>{{__('messages.internal-rule')}}</x-section-title>

@endsection
