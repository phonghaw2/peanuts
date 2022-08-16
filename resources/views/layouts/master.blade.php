<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('css-front')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.24/dist/sweetalert2.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('css/material-kit.css') }}" > --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap1.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/reponsive.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" >
    <title>Document</title>
</head>
<body>
    @include('layouts.header')
    @include('layouts.modal')
    <div id="container">
       
        @yield('content')

    </div>
    @include('layouts.footer')




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
    <script>
        $( document ).ready(function() {
            $("#modal_trigger").click(function(){
                event.preventDefault();
                $(".box-lightbox").addClass("open");
                // $("#cd-login").addClass("active");
            });
            $(".js-login").click(function(){
                event.preventDefault();
                $("#cd-login").addClass("active");
                $("#cd-signup").removeClass("active");
            });
            $(".js-register").click(function(){
                event.preventDefault();
                $("#cd-login").removeClass("active");
                $("#cd-signup").addClass("active");
            });
            $(".js-lightbox-close").click(function(){
                $(".box-lightbox").removeClass("open");
            });
            $(".box-lightbox").click(function(){
                const self = event.target.closest('.box-content-login');
                if (!self) {
                    $(".box-lightbox").removeClass("open")
                }
            });

        });


    </script>
    @stack('js-front')
</body>

</html>
