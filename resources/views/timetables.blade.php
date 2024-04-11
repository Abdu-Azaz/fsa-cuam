@extends('layouts.one-column')
@section('title')
    {{ __('messages.timetables') }}
@endsection

@section('page_header')
    @include('partials.page_header', [
        'pageTitle' => __('messages.timetables'),
        'pageBreadcrumb' => '',
    ])
@endsection

@section('main_column_content')
    <x-section-title>{{ __('messages.timetables') }}</x-section-title>
    @foreach ($timetables as $major => $timetables_per_semester)
        <div class="accordion accordion-flush" id="accordion{{ $major }}">
            <div class="accordion-item">
                <h2 class="accordion-header border border-dark mb-1" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne{{ $major }}" aria-expanded="false"
                        aria-controls="flush-collapseOne">
                        <span class="fs-4 fw-bold">{{ $major }}</span>
                    </button>
                </h2>
                <div id="flush-collapseOne{{ $major }}" class="accordion-collapse collapse"
                    aria-labelledby="flush-headingOne" data-bs-parent="#accordion{{ $major }}">
                    <div class="accordion-body bg-light border border-dark">
                        @foreach ($timetables_per_semester as $semester => $timetables)
                            <h5 class="mb-3 my-0 alert alert-success text-center">>==||
                                {{ $major }}({{ $semester }}) ||==< </h5>
                                    <div class="row">
                                        @foreach ($timetables as $timetable)
                                            @if ($timetable->timetables)
                                                @foreach ($timetable->timetables as $item)
                                                    <div class="col-md-3 m-1">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title">{{ $item['type'] }}</h5>
                                                                <a
                                                                    href="{{ url('storage/' . $item['file']) }}">{{ __('messages.download') }}</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                {{-- @if ($timetable->isUpdated())
                                                    <span class="alert alert-danger fade show p-0 fs-tiny" role="alert">
                                                        {{ __('messages.lu') . ': ' . $timetable->when() }}
                                                    </span>
                                                @endif --}}
                                            @endif
                                        @endforeach
                                    </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
