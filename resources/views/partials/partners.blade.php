<div class="mycontainer py-2 wow fadeInRight" data-wow-delay="0.05s">
    <div class="container py-2 mb-2">
        <x-section-title>{{ __('messages.partners') }}</x-section-title>
        <div class="owl-carousel owl-theme vendor-carousel">
            @foreach ($partners as $partner)
                <div>
                    <img class="img-fluid" src="{{ url('storage/' . $partner->partner_image) }}" alt="Partner">
                </div>
            @endforeach
        </div>
    </div>
</div>
