@extends('layouts.two-columns')
{{-- DOCUMENT TITLE (Browser Tab) --}}
@section('title')
    {{ __('Espace Etudiant | LMD') }}
@endsection
{{-- PAGE HEADER INFO --}}

@section('page_header')
    @include('partials.page_header', [
        'pageTitle' => 'Système LMD',
        'pageBreadcrumb' => '',
    ])
@endsection

{{-- MAIN COLUMN TITLE (LEFT COLUMN) --}}
@section('main_column_title')
    {{ __('Système LMD') }}
@endsection

{{-- MAIN COLUMN CONTENT (LEFT COLUMN) --}}
@section('main_column_content')
    <div class="my-container">
        <iframe class="ms-auto w-100" width="833" height="500" src="https://www.youtube.com/embed/kPJPAQJVZ1w"
            title="Le Système LMD : النظام البيداغوجي الجامعي" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
    </div>
@endsection
