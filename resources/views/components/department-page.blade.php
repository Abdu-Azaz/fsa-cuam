@extends('layouts.one-column')
@section('title')
    {{ $title }}
@endsection
{{-- PAGE HEADER  --}}
{{-- @php
    $pageBreadcrumb = $bread;
@endphp --}}
@section('page_header')
    @include('partials.page_header', [
        'pageTitle' => $pageTitle,
        'pageBreadcrumb' => $pageBreadcrumb,
    ])
@endsection
{{-- BODY TITLE (BELOW THE HEADER --}}


{{-- MAIN CONTENT --}}
@section('main_column_content')
    <x-section-title>{{ __('messages.department-members') }}</x-section-title>
    @include('departments.professor-table', [
        'professors' => $professors,
    ])

        <x-section-title>{{ __('messages.courses') }}</x-section-title>

        <div class="bg-light bordre px-3">
{{-- {{dd($programs)}} --}}
            <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                @foreach ($programs as $diploma => $_)
                    <li class="nav-item " role="presentation">
                        <button class="nav-link {{ $loop->first == 1 ? 'active' : '' }} py-0 border m-1"
                            id="pills-{{ \Str::slug($diploma) }}-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-{{ \Str::slug($diploma) }}" type="button" role="tab"
                            aria-selected="true">
                            {{ $diploma }}
                        </button>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content" id="pills-tabContent">
                @foreach ($programs as $diploma => $programmes)
                    <div class="tab-pane fade show {{ $loop->first == 1 ? 'active' : '' }}"
                        id="pills-{{ \Str::slug($diploma) }}" role="tabpanel"
                        aria-labelledby="pills-{{ \Str::slug($diploma) }}-tab">
                        <table class="table table-hover table-striped">
                            <tr>
                                <th>{{__('Code')}}</th>
                                <th>{{__('messages.title')}}</th>
                                <th>{{__('messages.file')}}</th>
                            </tr>
                            @foreach ($programmes as $programme)
                                <tr>
                                    <td>{{ $programme->id }}</td>
                                    <td>{{ $programme->label }}</td>
                                    <td><a href="#{{ $programme->department->pdf_file }}">{{__('messages.download')}}</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
@endsection
