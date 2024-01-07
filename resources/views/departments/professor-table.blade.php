@if(count($professors)>0)
    @php
        $headProfessor = $professors->where('isHead', 1)->first();
    @endphp
    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="py-2">
            <div class="row g-2">
                @foreach ($professors as $professor)
                        <div class="col-lg-3 col-md-3 col-sm-4 wow zoomIn " data-wow-delay="0.3s">
                            <div
                                class="service-item bg-{{$professor->isHead? 'primary':'light'}} rounded d-flex flex-column align-items-center justify-content-center text-center border border-1 border-dark ">
                                <div class="service-icon bg-{{$professor->isHead? 'light':'primary'}}">
                                    <i class="fa fa-solid fa-user-tie  text-{{$professor->isHead ? 'primary':'light'}}"></i>
                                </div>
                                <span class="text-warning">{{$professor->isHead ? __("messages.department-head") :'' }}</span>
                                <p class="mb-1 h6 fw-bold {{$professor->isHead ? 'text-light':''}}">Prof. {{$professor->full_name}}</p>
                            </div>
                        </div>
                    {{-- @endif --}}
                @endforeach
            </div>
        </div>
    </div>
@else
    No Professors
@endif
<!-- Service End -->
