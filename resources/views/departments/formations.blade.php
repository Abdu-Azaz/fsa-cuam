@extends('layouts.one-column')

{{-- DOCUMENT TITLE (Browser Tab) --}}
@section('title')
    {{ __('messages.courses') }}
@endsection

{{-- PAGE HEADER INFO --}}
@section('page_header')
    @include('partials.page_header', [
        'pageTitle' => __('messages.courses'),
        'pageBreadcrumb' => 'formations',
    ])
@endsection

{{-- MAIN COLUMN TITLE (LEFT COLUMN) --}}

{{-- MAIN COLUMN CONTENT (LEFT COLUMN) --}}
@section('main_column_content')
<x-section-title>{{__('messages.courses')}}</x-section-title>
@empty($programs)
    <div class="my-4 border p-2">
        <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
            @foreach ($programs as $diploma => $_)
                <li class="nav-item " role="presentation">
                    <button class="nav-link {{$loop->first==1 ? 'active':'' }} py-0 border m-1" id="pills-{{ \Str::slug($diploma) }}-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-{{ \Str::slug($diploma) }}" type="button" role="tab"
                        aria-selected="true">
                        {{ $diploma }}
                    </button>
                </li>
            @endforeach
        </ul>
        <div class="tab-content" id="pills-tabContent">
            @foreach ($programs as $diploma => $programmes)
                <div class="tab-pane fade show {{$loop->first==1 ? 'active':'' }}"  id="pills-{{ \Str::slug($diploma) }}" role="tabpanel"
                    aria-labelledby="pills-{{ \Str::slug($diploma) }}-tab">
                    <table class="table table-hover table-striped table-responisve border">
                        <tr>
                            <th>{{__('messages.title')}}</th>
                            <th>{{__('messages.department')}}</th>
                            <th>{{__('messages.file')}}</th>
                        </tr>
                        @foreach ($programmes as $programme)
                        <tr>
                            <td>{{$programme->label}}</td>
                            <td>{{__($programme->department->name)}}</td>
                            <td><a href="#{{$programme->department->pdf_file ?? 'UNAVAILABLE'}}">{{__('messages.download')}}</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            @endforeach
        </div>
    </div>        
    @endempty
@endsection
