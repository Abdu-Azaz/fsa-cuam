<div class="mycontainer py-1">
    <div class="container">
        <div class="section-title position-relative pb-3 mb-5" style="max-width: 600px;">
            <h1 class="mb-0">{{ __('messages.contact-us') }}</h1>
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show my-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
sa
        <div class="row g-1">
            <div class="col-lg-7">
                <div class="bg-primary rounded h-100 p-lg-5 p-2">
                    <form  wire:submit="contact-submit">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" name="name" class="form-control bg-light border-0 px-3"
                                    placeholder="{{ __('messages.full-name') }}">
                            </div>
                            <div class="col-12">
                                <input type="email" name="email" class="form-control bg-light border-0 px-3"
                                    placeholder="{{ __('Email') }}">
                            </div>
                            <div class="col-12">
                                <input type="text" name="subject" class="form-control bg-light border-0 px-3"
                                    placeholder="{{ __('messages.subject-email') }}">
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control bg-light border-0 px-3 py-3" rows="2" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-1" name="send"
                                    type="submit">{{ __('messages.send') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="bg-dark h-100 rounded  p-1">
                    <h2 class="text-white mb-4">{{ __('messages.contact-us') }}</h2>
                    <div class="d-flex mb-lg-4">

                        <i class="fa fa-users  text-light"></i>
                        <div class="ps-3">
                            <h5 class="text-white">{{ __('messages.address') }}</h5>
                            <span class="text-white text-wrap">Route Nationale N10. BP 6146 Cité Azrou</span>
                        </div>
                    </div>
                    <div class="d-flex mb-4">

                        <i class="fa fa-envelope fs-5x text-light"></i>
                        <div class="ps-3">
                            <h5 class="text-white">Email</h5>
                            <span class="text-white">fsa@uiz.ac.ma</span>
                        </div>
                    </div>
                    <div class="d-flex">

                        <i class="fa fa-phone fs-5x text-light"></i>
                        <div class="ps-3">
                            <h5 class="text-white">{{ __('messages.phone') }}</h5>
                            <span class="text-white">0528-241434</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
