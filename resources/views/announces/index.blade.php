@extends('layouts.app')

@section('content')
    @include('partials.page_header', [
        'pageTitle' => 'Actualité',
        'pageBreadcrumb' => '',
    ])

    <div class="container">
        <div class="row g-3">
            @foreach ($announces as $post)
                <div class="col-lg-3 col-md-6 wow slideInRight" data-wow-delay="0.9s"
                    style="visibility: visible; animation-delay: 0.9s; animation-name: slideInUp;">
                    <div class="blog-item bg-light rounded  border overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img loading="lazy" class="img-fluid" src="{{ $post->determineAnnounceThumbnail() }}"
                                alt="{{ $post->title }}">
                        </div>

                        <div class="p-2">
                            <div class="d-flex mb-1">
                                <small style="font-size: 0.7rem"><i
                                        class="far fa-calendar-alt text-primary me-1"></i> 
                                    {{ $post->formatDateTime() }} &nbsp; <span class="text-danger">
                                        {{ $post->isUpdated() ? ' (' . __('maj') . ' ' . $post->announceUpdatedSince() . ')' : '' }}</span></small></small>
                            </div>
                            <hr class="m-2">
                            <h6 class="mb-1 text-primary"><a
                                    href="{{ route('announces.show', $post->slug) }}">{{ $post->title }}  </a></h6>

                        </div>
                    </div>
                </div>
            @endforeach
            <div class="my-1">
                {{ $announces->links() }}
            </div>
        </div>
    </div>
@endsection
