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
                        <span class="fs-4 fw-bold text-center w-100">{{ $major }}</span>
                    </button>
                </h2>
                <div id="flush-collapseOne{{ $major }}" class="accordion-collapse collapse"
                    aria-labelledby="flush-headingOne" data-bs-parent="#accordion{{ $major }}">
                    <div class="accordion-body bg-light border border-dark">
                        @foreach ($timetables_per_semester as $semester => $timetables)
                            <h5 class="mb-3 my-0 alert alert-success text-center">>==||
                                {{ $major }}({{ $semester }}) ||==< </h5>
                                    <div class="rows">
                                        @foreach ($timetables as $timetable)
                                            @if ($timetable->timetables)
                                                @if ($timetable->isUpdated())
                                                    <span class="text-danger fs-tiny text-center fw-bold w-100 d-block" role="alert">
                                                        {{ __('messages.lu') . ': ' . $timetable->when() }}
                                                    </span>
                                                @endif
                                                <div class="d-flex flex-row flex-wrap">
                                                    @foreach ($timetable->timetables as $item)
                                                        <div class="card flex-grow-1 mx-1">
                                                            <div class="card-body">
                                                                <h6 class="card-title"><a target="_blank"
                                                                        href="{{ url('storage/' . $item['file']) }}">{{ $item['type'] }}</a>
                                                                </h6>

                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
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
