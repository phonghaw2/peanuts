@extends('layout-backside.master')
@section('content')


<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="dashboard_header mb_50">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="dashboard_header_title">
                            <h3>Change Password</h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="dashboard_breadcam text-end">
                            <p><a href="{{ route('admin.dashboard') }}">Dashboard</a> <i class="fas fa-caret-right"></i>Change Password</p>
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
                                <h5 class="modal-title text_white">Change Password</h5>
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
                                <form action="{{ route('admin.passwordProcessed') }}" method="post" id="change-password-form">
                                    <div class="">
                                        <input type="text" class="form-control" name="old_password" placeholder="Old Password" >
                                    </div>
                                    <div class="">
                                        <input type="password" class="form-control" name="new_password" placeholder="Enter a new password">
                                    </div>
                                    <div class="">
                                        <input type="password" class="form-control" name="new_password_confirmation" placeholder="Re-type New password">
                                    </div>



                                    <button type="submit" class="btn_1 full_width text-center"> Change</button>

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.24/dist/sweetalert2.min.js"></script>
    <script>

        $(document).ready(function(){

            $("#change-password-form").submit(function(e) {

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
                            title: ' Your Password has been changed',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        setTimeout(() => {
                            document.location.reload(true);
                        }, "1700");
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
