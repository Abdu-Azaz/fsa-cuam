@extends('layouts.one-column')

@section('title')
    {{ __('Cnfrm_reg') }}
@endsection

@section('page_header')
    @include('partials.page_header', [
        'pageTitle' => __('Confirmation de l\'inscription'),
        'pageBreadcrumb' => '',
    ])
@endsection


@section('main_column_content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-6">
                <div class="card bg-light">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Confirmation de l'inscription
                        </h3>
                        <form action="{{ route('reg') }}" method="POST" id="confirmForm">
                            @csrf
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" class="form-control rounded-0 @error('nom') is-invalid @enderror"
                                    id="nom" name="nom" placeholder="Nom" required>
                                @error('nom')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="prenom" class="form-label">Prenom</label>
                                <input type="text" class="form-control rounded-0 @error('prenom') is-invalid @enderror"
                                    id="prenom" name="prenom" placeholder="Prenom" required>
                                @error('prenom')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="cin" class="form-label">CIN (No. Carte Nationale)</label>
                                <input type="text" class="form-control rounded-0 @error('cin') is-invalid @enderror"
                                    id="cin" name="cin" placeholder="CIN...." required>
                                @error('cin')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- <div class="mb-3">
                                <label for="filiere" class="form-label">Filière</label>
                                <input type="text" class="form-control rounded-0" id="filiere" name="filiere"
                                    readonly>
                            </div> --}}
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary rounded-0"
                                    id="submitButton">{{ __('messages.confirm') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <div id="messageContainer">

 </div>
@endsection
@push('js')
    <script>
        // $(document).ready(function() {
        //     $('#cin').keyup(function() { // Change event to 'keyup'
        //         var cne = $(this).val();
        //         if (cne.trim() !== '') { // Check if CNE field is not empty
        //             $.ajax({
        //                 url: '{{ route('reg') }}',
        //                 type: 'POST',
        //                 data: {
        //                     cin: cin,
        //                     _token: '{{ csrf_token() }}'
        //                 },
        //                 success: function(response) {
        //                     $('#filiere').val(response.filiere);
        //                     $('#submitButton').prop('disabled', false);
        //                 },
        //                 error: function(xhr, status, error) {
        //                     console.error(xhr.responseText);
        //                 }
        //             });
        //         }
        //     });
        // });
        $(document).ready(function() {
            $('#confirmForm').submit(function(event) {
                event.preventDefault(); // Prevent default form submission
                var formData = $(this).serialize(); // Serialize form data
                $.ajax({
                    url: "{{ route('reg') }}",
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#messageContainer').html('<div class="alert alert-info alert-dismissible fade show" role="alert">' +
                            response.message + '  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                            $('#confirmForm')[0].reset()
                        },
                    error: function(xhr, status, error) {
                        $('#messageContainer').html(
                            '<div class="alert alert-danger alert-dismissible fade show"  role="alert">An error occurred while processing your request.</div>'
                            );
                    }
                });
            });
         
        });
    </script>
@endpush
