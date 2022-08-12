@extends('layout-backside.master')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@section('content')


    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="dashboard_header mb_50">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="dashboard_header_title">
                                <h3>Resister</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dashboard_breadcam text-end">
                                <p><a href="{{ route('admin.dashboard') }}">Dashboard</a> <i class="fas fa-caret-right"></i>Resister</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="white_box mb_30">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">

                            <div class="modal-content cs_modal">
                                <div class="modal-header theme_bg_1 justify-content-center">
                                    <h5 class="modal-title text_white">Resister</h5>
                                </div>

                                {{-- @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif --}}
                                <div class="modal-body">
                                    <form action="{{ route('admin.register') }}" method="post" id="register-form">
                                        <div class="">
                                            <input type="text" class="form-control" name="name" placeholder="Full Name" value="{{ old('name') }}">
                                        </div>
                                        <div class="">
                                            <input type="text" class="form-control" name="email" placeholder="Enter your email" value="{{ old('email') }}" >
                                        </div>
                                        <div class="">
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                        <div class="">
                                            <input type="tel" class="form-control" placeholder="Phone" name="phone" value="{{ old('phone') }}">
                                        </div>
                                        <div class="">
                                                <label class="form-label" for="city">City</label>
                                                <select class="form-select selectCity" name="city" id="selectCity">
                                                </select>
                                        </div>

                                        <button type="submit" class="btn_1 full_width text-center"> Sign Up</button>

                                        <div class="text-center">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#forgot_password" data-bs-dismiss="modal" class="pass_forget_btn">Forget Password?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.24/dist/sweetalert2.min.js"></script>
    <script>

        $(document).ready(async function(){

            $("#selectCity").select2({tags: true });
            const response = await fetch('{{ asset('location/Index.json') }}');
            const cities = await response.json();
            $.each(cities, function (index, each) {
                $("#selectCity").append(`
                <option>
                    ${index}
                </option>`)
            });

            $("#register-form").submit(function(e) {

                e.preventDefault();

                var form = $(this);
                var actionUrl = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: actionUrl,
                    dataType: 'json',
                    data: form.serialize(), // serializes the form's elements.
                    success: function(data)
                    {
                        Swal.fire({
                            icon: 'success',
                            title: ' Successfully Posted!',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    },
                    error: function (response)
                    {
                        Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: response.responseJSON.message,
                        })
                    }
                });

            });

        });
    </script>

@endpush
