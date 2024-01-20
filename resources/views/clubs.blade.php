@extends('layouts.two-columns')

@section('title')
    {{ __('messages.clubs') }}
@endsection

@section('page_header')
    @include('partials.page_header', [
        'pageTitle' => __('messages.clubs'),
        'pageBreadcrumb' => '',
    ])
@endsection


@section('main_column_content')
    <x-section-title>{{ __('Clubs') }}</x-section-title>
    <div class="row">
        @foreach ($clubs as $club)
            <div class="col-md-4">
                <div class="card border border-2">
                    <img src="{{ url('storage/' . $club->logo) }}" class="card-img-top w-100 img-responsive img-fluid"
                        alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">{{ $club->label }}</h5>
                        <p class="card-text">{{ __('messages.foi') . ': ' . $club->field_of_interest }}</p>
                        <p class="card-text"><small
                                class="text-muted">{{ __('messages.coordinator') . ': ' . $club->coordinator }}</small></p>
                        <p class="card-text"><small
                                class="text-muted">{{ __('messages.founded') . ': ' . $club->founded_at }}</small></p>

                    </div>

                </div>
            </div>
        @endforeach
    </div>
@endsection
