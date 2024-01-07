@extends('layouts.app')


@section('content')
{{-- THE HEADER OF THE PAGE --}}
    @yield('page_header')
    <div class="my-container">
        <div class="border rounded bg-white p-lg-4">
            {{-- HERE GOES THE PAGE TITLE --}}
            {{-- <div class="section-title position-relative pb-3 mb-5">
                <h1 class="mb-0">@yield('main_column_title')</h1>
            </div> --}}

            {{-- HERE GOES THE CONTENT --}}
            <div class="my-4 wow fadeInUp" data-wow-delay="0.1s">
                @yield('main_column_content')
            </div>
        </div>
    </div>
@endsection
@push('css')
    <style>
        .category-list li a {
            color: thistle;
        }

        .my-container {
            max-width: 1100px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
@endpush
