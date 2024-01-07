<div class="container-fluid facts py-5 pt-lg-0 wow zoomIn">
    <div class="container py-5 pt-lg-0" style="background-color: rgba(0, 0, 0, 0); border:0!important">
        <div class="row g-2">
            {{--Etudiats  --}}
            <div class=" col-sm-6 col-md-4  col-lg-3 wow slideUp" data-wow-delay="0.1s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                    style="height: 125px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                        style="width: 50px; height: 50px;">
                        <i class="fa fa-users text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h6 class="text-white mb-0">{{ __('messages.students') }}</h6>
                        <h1 class="text-white mb-0" data-toggle="counter-up">+{{setting('students-number', 8000)}}</h1>
                    </div>
                </div>
            </div>
            
            {{-- Deps --}}
            <div class=" col-sm-6 col-md-4  col-lg-3 wow zoomIn" data-wow-delay="0.5s">
                <div class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                    style="height: 125px;">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                        style="width: 50px; height: 50px;">
                        <i class="fas fa-building text-white"></i>
                    </div>
                    <div class="ps-2">
                        <h6 class="text-primary mb-0">{{ __('messages.departments') }}</h6>
                        <h1 class="mb-0 text-primary" data-toggle="counter-up">{{setting('departments-number',5)}}</h1>
                    </div>
                </div>
            </div>
            
           {{-- Filieres --}}
            <div class="col-sm-6 col-md-4  col-lg-3 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                    style="height: 125px;">
                    <div class="bg-light d-flex align-items-center justify-content-center rounded mb-2"
                        style="width: 50px; height: 50px;">
                        <i class="fa fa-award text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h6 class="text-light mb-0">{{ __('Filières') }}</h6>
                        <h1 class="text-light mb-0" data-toggle="counter-up">{{setting('majors-number', 9)}}</h1>
                    </div>
                </div>
            </div>
            {{-- Personnel --}}
            <div class=" col-sm-6 col-md-4  col-lg-3 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-light shadow d-flex align-items-center justify-content-center ps-3 py-4"
                    style="height: 125px;">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                        style="width: 50px; height: 50px;">
                        <i class="fas fa-sitemap text-light"></i>
                    </div>
                    <div class="ps-4">
                        <h6 class="text-primary mb-0">{{ __('Personnel administratif') }}</h6>
                        <h1 class="text-primary mb-0" data-toggle="counter-up">+{{setting('staff-number', 50)}}</h1>
                    </div>
                </div>
            </div>
        {{-- <div class="row gx-0 my-1"> --}}
            {{-- Teachers --}}
            <div class="col-sm-6 col-md-4  col-lg-3 wow zoomIn" data-wow-delay="0.5s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-3"
                    style="height: 125px;">
                    <div class="bg-light d-flex align-items-center justify-content-center rounded mb-2"
                        style="width: 50px; height: 50px;">
                        <i class="fas fa-user-tie text-primary"></i>
                    </div>
                    <div class="ps-3">
                        <h6 class="text-light mb-0">{{ __('Chercheurs') }}</h6>
                        <h1 class="mb-0 text-light" data-toggle="counter-up">{{setting('professors-number', 70)}}</h1>
                    </div>
                </div>
            </div>
            {{-- Structures --}}
           
            <div class="col-sm-6 col-md-4  col-lg-3 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-light shadow d-flex align-items-center justify-content-center p-1"
                    style="height: 125px;">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                        style="width: 50px; height: 50px;">
                        <i class="fas fa-hotel text-light"></i>
                    </div>
                    <div class="ps-4">
                        <h6 class="counter-title text-primary mb-0 wrap">{{ __('Structures de recherche') }}</h6>
                        <h1 class="text-primary mb-0" data-toggle="counter-up">{{setting('research-structures',2)}}</h1>
                    </div>
                </div>
            </div>
            {{-- Clubs --}}
            <div class="col-sm-6 col-md-4  col-lg-3 wow zoomIn" data-wow-delay="0.5s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                    style="height: 125px;">
                    <div class="bg-light d-flex align-items-center justify-content-center rounded mb-2"
                        style="width: 50px; height: 50px;">
                        <i class="fa fa-check text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h6 class="text-light mb-0">{{ __('messages.clubs-student-life') }}</h6>
                        <h1 class="mb-0 text-light" data-toggle="counter-up">{{setting('clubs',8)}}</h1>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>
