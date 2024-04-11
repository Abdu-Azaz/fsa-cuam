@extends('layouts.one-column')

@section('title')
    {{ __('messages.departments') }}
@endsection

@section('page_header')
    @include('partials.page_header', [
        'pageTitle' => __('messages.departments'),
        'pageBreadcrumb' => 'departments',
    ])
@endsection

@section('main_column_content')

    <x-section-title> {{ __('messages.departments') }}</x-section-title>
    <div class="row">
        @foreach ($departements as $departement)
            <div class="col-md-4 mb-4 wow slideInUp">
                <div class="blog-item position-relative overflow-hidden border border-3 border-dark rounded">
                    <div class="blog-img">
                        <img class="img-fluid" src="{{ url('storage/' . $departement->image) }}" alt="">
                    </div>
                    <a class="blog-overlay" href="{{ route('departement', $departement->slug) }}">
                        {{-- <h5 class="text-white">{{ __($departement->name) }}</h5> --}}
                        <h5 class="text-white">{{ __('messages.'.$departement->translation_key) }}</h5>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
