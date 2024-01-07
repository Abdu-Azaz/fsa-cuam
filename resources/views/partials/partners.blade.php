<div class="mycontainer py-2 wow fadeInRight" data-wow-delay="0.05s">
    <div class="container py-2 mb-2">
       <x-section-title>{{ __('messages.partners') }}</x-section-title>
        <div class="bg-white">
            <div class="owl-carousel vendor-carousel d-flex justify-content-center">
               @foreach ($partners as $partner)
               <img class="img-fluid w-100" src="{{url("storage/".$partner->partner_image)}}" alt="Partner">
               @endforeach
            </div>
        </div>
    </div>
</div>