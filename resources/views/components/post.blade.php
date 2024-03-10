<div class="wow slideInLeft rounded m-1 border border-1 border-dark" data-wow-delay="0.9s">
    <div class="blog-item bg-light rounded overflow-hidden">
        <div class="blog-img position-relative overflow-hidden">
            <img class="img-fluid w-100 " src="{{ $announce->determineAnnounceThumbnail() }}" alt=""
                style="max-height:200px;object-fit: cover">
        </div>

        <div class="p-2" style=" background:#eee">
            <div class="d-flex mt-1  fw-bold">
                <small style="font-size:0.66rem"><i
                        class="far fa-calendar-alt me-2 "></i>{{ $announce->formatDateTime() }} &nbsp; <span class="alert {{$announce->isUpdated() ? 'alert-danger' :''}} p-0"> {{$announce->isUpdated() ? ' (' .__('maj').' '.$announce->announceUpdatedSince().')':''}}</span></small>
            </div>
            <div>
                {{-- <small style="font-size:0.67rem " class="fw-bold text-danger"></small> --}}
            </div>
            <hr class="border border-dark my-0" >
            <a style="font-size:0.8rem; text-align:center" href="{{ route('announces.show', $announce->slug) }}"
                class="mb-3 text-primary fw-bold text-uppercase">{{ $announce->title }}</a>
            </a>
        </div>
    </div>
</div>
