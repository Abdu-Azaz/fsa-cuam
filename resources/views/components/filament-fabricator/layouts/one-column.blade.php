@props(['page'])
@extends('layouts.one-column')

@section('title')
    {{ $page->title }}
@endsection

{{-- <x-filament-fabricator::page-blocks :blocks="$page->blocks" /> --}}
@section('page_header')
    {{-- PAGE HEADER INCLUDE --}}
    @include('partials.page_header', [
        'pageTitle' => $page->title,
        'pageBreadcrumb' => '',
    ])
@endsection


@section('main_column_content')
<x-filament-fabricator::page-blocks :blocks="$page->blocks" />

    {{-- @foreach ($page->blocks as $block)
        @foreach ($block['data'] as $item)
            @if ($block['type'] == 'title')
                <h3> {{ $item }}</h3>
            @elseif($block['type']=='editor')
                {!! $item !!}
            @else
                <img  loading="lazy" class="img-fluid" style="max-width: 100%" src="{{url('storage/'.$item)}}" alt="">
            @endif
        @endforeach
    @endforeach --}}
@endsection
