
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.24/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap1.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>

    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3>Login</h3>
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
                                    <div class="modal-header justify-content-center theme_bg_1">
                                        <h5 class="modal-title text_white">Log in</h5>
                                    </div>
                                    <div>

                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.login') }}" method="post" id="admin-login-form">
                                            @csrf
                                            @method('post')
                                            <div class="">
                                                <input type="text" class="form-control" placeholder="Enter your email" name="email">
                                            </div>
                                            <div class="">
                                                <input type="password" class="form-control" placeholder="Password" name="password">
                                            </div>
                                            <button type="submit" class="btn_1 full_width text-center">Log in</button>
                                            {{-- <a href="#" class="btn_1 full_width text-center">Log in</a> --}}
                                            <p>Need an account? <a data-bs-toggle="modal" data-bs-target="#sing_up" data-bs-dismiss="modal" href="#"> Call Your boss ¯\_(ツ)_/¯</a></p>
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
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@if (session('fail'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.24/dist/sweetalert2.min.js"></script>
        <Script>
            $(document).ready(function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: "{{ session('fail') }}",
                })
            });

        </Script>
@endif
@if (session('not'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.24/dist/sweetalert2.min.js"></script>
        <Script>
            $(document).ready(function () {
                Swal.fire("{{ session('not') }}")
            });

        </Script>
@endif

</body>
</html>
