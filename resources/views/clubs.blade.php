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
            <div class="col-md-4" >
                <div class="carsd sborder border-2s" >
                    <img src="{{ url('storage/' . $club->logo) }}" class="card-img-top w-100 img-responsive img-fluid"
                        alt="{{$club->label}}"
                        style="border: 2px solid #ddd">
                    <div class="card-body"
                        style=" background:linear-gradient(135deg, {{ setting('color1', '#dff') }},  {{ setting('color2', '#fdd') }});">
                        <h5 class="card-title">{{ $club->label }}</h5>
                        <p class="card-text">{{ __('messages.foi') . ': ' . $club->field_of_interest }}</p>
                        <p class="card-text"><small>{{ __('messages.coordinator') . ': ' . $club->coordinator }}</small></p>
                        <p class="card-text"><small>{{ __('messages.founded') . ': ' . $club->founded_at }}</small></p>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
@endsection
