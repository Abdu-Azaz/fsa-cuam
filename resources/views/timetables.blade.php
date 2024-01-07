@extends('layouts.one-column')
{{-- DOCUMENT TITLE (Browser Tab) --}}
@section('title')
    {{ __('messages.timetables') }}
@endsection
{{-- PAGE HEADER INFO --}}

@section('page_header')
    @include('partials.page_header', [
        'pageTitle' => 'messages.timetables',
        'pageBreadcrumb' => '',
    ])
@endsection

{{-- MAIN COLUMN TITLE (LEFT COLUMN) --}}

{{-- MAIN COLUMN CONTENT (LEFT COLUMN) --}}
@section('main_column_content')
    {{-- {{dd($timetables)}} --}}
    <x-section-title> {{ __('messages.timetables') }}</x-section-title>
    {{-- {{dd($timetables)}} --}}
    @foreach ($timetables as $major => $timetables_per_semester)
        <div class="accordion accordion-flush " id="accordion{{ $major }}">
            <div class="accordion-item ">
                <h2 class="accordion-header border border-dark mb-1" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <span class="fs-4">{{ $major }}</span>
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordion{{ $major }}">
                    <div class="accordion-body bg-light border border-dark ">
                        @foreach ($timetables_per_semester as $semester => $timetables)
                            <h5 class="mb-3 my-0 alert alert-success text-center">>==||
                                {{ $major }}({{ $semester }}) ||==< </h5>
                                    <div class="row ">
                                        @foreach ($timetables as $timetable)
                                            <span class="m-2 ">
                                                <div class="col-md-4">
                                                    <a class="h5 fw-bold my-3"
                                                        href="{{ $timetable->file }}">{{ $timetable->type }}</a>
                                                    @if ($timetable->isUpdated())
                                                        <span class="alert alert-danger fade show p-0 fs-tiny"
                                                            role="alert" id="success-alert">
                                                            {{ __('messages.lu') . ': ' . $timetable->when() }}
                                                        </span>
                                                    @endif
                                                </div>
                                            </span>
                                        @endforeach
                                    </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
