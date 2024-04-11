<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="{{ route('homepage') }}" class="navbar-brand p-0 me-auto">
            <img src="{{ asset('storage/media/stand_fr_dark.png') }}" class="img-fluid m-0 me-2" alt="LOGO-FSA" id="brand-dark">
            {{-- <img src="{{ asset('storage/media/enguiz_light.svg') }}" class="img-fluid m-0 me-2" alt="LOGO_FSA"
                id="brand-light"> --}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav  py-0 ms-auto">
                <a href="{{ route('homepage') }}" class="nav-item nav-link active mx-auto"><i class="fas fa-home"></i>
                    {{__('messages.home')}}</a>
                <div class="nav-item dropdown mx-auto">
                    <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">{{__('messages.faculty')}}</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('doyen') }}" class="dropdown-item">{{__('messages.deans-word')}}</a>
                        <a href="{{ route('departements') }}" class="dropdown-item">{{__('messages.departments')}}</a>
                        {{-- <a href="{{route('presentation')}}" class="dropdown-item">{{__('messages.presentation')}}</a> --}}
                        <a href="{{route('administration')}}" class="dropdown-item">{{__('messages.administration')}}</a>
                        <a href="{{ route('lmd') }}" class="dropdown-item">{{__('Système LMD')}}</a>
                        <a href="" class="dropdown-item">{{__('messages.internal-rule')}}</a>
                    </div>
                </div>
                <a href="{{ route('formations') }}" class="nav-item nav-link text-center">{{__('messages.courses')}}</a>


                <div class="nav-item dropdown mx-auto">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('messages.student-spapce')}}</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('timetables')}}" class="dropdown-item">{{__('messages.timetables')}}</a>
                        {{-- <a href="#" class="dropdown-item">{{__('Cours En Ligne')}}</a> --}}
                        {{-- <a href="#" class="dropdown-item">{{__('Plateforme Pédagogique')}}</a> --}}
                        <a href="{{route('library')}}" class="dropdown-item">{{__('messages.library')}}</a>
                        <a href="{{route('clubs')}}" class="dropdown-item">{{__('messages.clubs')}}</a>
                        <a href="{{route('how_to')}}" class="dropdown-item">{{__('messages.activate-account')}}</a>
                    </div>
                </div>
                <div class="nav-item dropdown mx-auto">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('messages.e-services')}}</a>
                    <div class="dropdown-menu m-0">
                        <a href="http://scolarite.uiz.ac.ma/cst-cuam/" class="dropdown-item">{{__('messages.scolarity')}}</a>
                        <a href="https://amo.onousc.ma/" class="dropdown-item">{{__('messages.insurance')}}</a>
                        <a href="https://e-bourse-maroc.onousc.ma/" class="dropdown-item">{{__('messages.scholarship')}}</a>
                        <a href="http://ecours-fsam.uiz.ac.ma" class="dropdown-item">{{__('messages.moodle')}}</a>
                        <a href="https://login.rosettastone.com" class="dropdown-item">{{__('Rosetta Stone')}}</a>
                    </div>
                </div>
                <div class="nav-item dropdown mx-auto">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('messages.research')}}</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('research-teams')}}" class="dropdown-item">{{__('messages.teams')}}</a>
                        <a href="{{route('research-laboratories')}}" class="dropdown-item">{{__('messages.labs')}}</a>
                    </div>
                </div>
                <div class="nav-item d-flex align-items-center mx-auto">
                    @include('partials/lang_switcher')
                </div>
            </div>

        </div>
    </nav>

    {{-- The missing closing div tag is attached in other files (first one in each file) --}}
