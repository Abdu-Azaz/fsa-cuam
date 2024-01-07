<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                {{-- <div class="" > --}}
                <form action="" class="input-group" style="max-width: 600px;">
                    {{-- <input type="text" class="form-control text-white bg-transparent border-white p-3"
                        placeholder="Type search keyword"> --}}
                        @livewire('search')
                </form>
                {{-- </div> --}}
            </div>
        </div>
    </div>
</div>