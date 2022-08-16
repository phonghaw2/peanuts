
<div class="box-lightbox" >
    <div class="bt-close js-lightbox-close"></div>
    <div class="box-content-login">
        <div id="cd-signup" >
            <div class="cd-login-header">
                <div class="box-left">
                    <h3><strong>Register with</strong></h3>
                </div>
                <div class="box-right">
                    <h3>Are you a member? <strong class="text-green cursor-pointer js-login">Login now</strong></h3>
                </div>

            </div>
            <form action="{{ route('register') }}" method="post" id="signup-form" >
                @csrf

                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p class="">{{ $error }}</p>
                    @endforeach
                @endif
                <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
                <input type="text" placeholder="Fullname"  name="name"/>
                <input type="email" placeholder="Email" name="email"/>
                <input type="password" placeholder="Password" name="password"/>
                <button id="btn-submit" type="submit" >Sign Up</button>
            </form>
        </div>
        <div id="cd-login" class="active">
            <div class="cd-login-header">
                <div class="box-left">
                    <h3><strong>Sign in to continue</strong></h3>
                </div>
                <div class="box-right">
                    <h3>Not a member yet? <strong class="text-green cursor-pointer  js-register">Register now</strong></h3>
                </div>
            </div>
            <form action="{{ route('login') }}" method="post" id="login-form">
                @csrf
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p class="">{{ $error }}</p>
                    @endforeach
                @endif
                <input type="email" placeholder="Email" name="email"/>
                <input type="password" placeholder="Password" name="password"/>
                <a id="forgot" href="#">Forgot your password?</a>
                <button>Sign In</button>
            </form>
        </div>

    </div>
</div>


@if (auth()->check() && auth()->user()->role === 1)
    @include('layouts.modalHost')
@endif


@push('js-front')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.24/dist/sweetalert2.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#signup-form").submit(function(e) {

                e.preventDefault();

                var form = $(this);
                var actionUrl = form.attr('action');

                $.ajax({

                    type: "POST",
                    url: actionUrl,
                    dataType: 'json',
                    data: form.serialize(),
                    // [
                    //         _token: "{{ csrf_token() }}",
                    //          form.serialize(),
                    //     ]
                    success: function(data)
                    {

                        Swal.fire({
                            icon: 'success',
                            title: ' Successfully Posted!',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        setTimeout(() => {
                            document.location.href = "/";
                        }, "1700");

                    },
                    error: function (response)
                    {

                        Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: response.responseJSON.message,
                        });
                    },
                });

            });
            $("#login-form").submit(function(e) {

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
                            title: ' Successfully Logged!',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        setTimeout(() => {
                            document.location.href = "/";
                        }, "1700");
                    },
                    error: function (response)
                    {
                        Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: response.responseJSON.message,
                        });
                    },

                });

            });
        });

</script>

@endpush
