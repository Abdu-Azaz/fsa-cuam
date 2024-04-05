@extends('layouts.one-column')

@section('title')
    {{-- PAGE TITLE --}}
@endsection

@section('page_header')
    {{-- PAGE HEADER INCLUDE --}}
    @include('partials.page_header', [
        'pageTitle' => 'messages.howto',
        'pageBreadcrumb' => 'howto',
    ])
@endsection
 

@section('main_column_content')
    {{-- CONTENT --}}
    <x-section-title>{{__('messages.howto')}}</x-section-title>
    <div class="text-center">
        
    </div>
    @foreach ($howtos as $howto)
        <a class="h4" href="{{url('storage/'.$howto->file)}}">{{$howto->title}}</a>
    @endforeach
    
 
@endsection

