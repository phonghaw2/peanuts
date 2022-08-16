@extends('layouts.master')
@section('content')
@include('layouts.slide')


    <div class="content-container">

        <div class="introduce">
            <div class="d-flex flex-wrap _1xNUY">
                <div class=" introduce-item">
                    <a class="introduce-link" href="">
                        <svg viewBox="0 0 30 30" width="30" height="30" xmlns="http://www.w3.org/2000/svg" class="_30FPM">
                            <path fill="currentColor" d="M30.141707 11.07005H18.63164L15.076408.177071l-3.566342 10.892977L0 11.059002l9.321376 6.739063-3.566343 10.88193 9.321375-6.728016 9.310266 6.728016-3.555233-10.88193 9.310266-6.728016z"></path>
                        </svg>
                        <div class="introduce-item-title">We find your dream space</div>
                        <div class="introduce-item-content">We listen closely to your needs and search the whole market to find the perfect workspace for your business</div>
                    </a>
                </div>
                <div class=" introduce-item">
                    <a class="introduce-link" href="">
                        <svg viewBox="0 0 30 30" width="30" height="30" xmlns="http://www.w3.org/2000/svg" class="_30FPM">
                            <path fill="currentColor" d="M30.141707 11.07005H18.63164L15.076408.177071l-3.566342 10.892977L0 11.059002l9.321376 6.739063-3.566343 10.88193 9.321375-6.728016 9.310266 6.728016-3.555233-10.88193 9.310266-6.728016z"></path>
                        </svg>
                        <div class="introduce-item-title">We cover the whole market</div>
                        <div class="introduce-item-content">We operate worldwide, with local experts available in all major cities</div>
                    </a>
                </div>
                <div class=" introduce-item">
                    <a class="introduce-link" href="">
                        <svg viewBox="0 0 30 30" width="30" height="30" xmlns="http://www.w3.org/2000/svg" class="_30FPM">
                            <path fill="currentColor" d="M30.141707 11.07005H18.63164L15.076408.177071l-3.566342 10.892977L0 11.059002l9.321376 6.739063-3.566343 10.88193 9.321375-6.728016 9.310266 6.728016-3.555233-10.88193 9.310266-6.728016z"></path>
                        </svg>
                        <div class="introduce-item-title">We negotiate your best deal</div>
                        <div class="introduce-item-content">Through our extensive experience and industry relationships, we can negotiate the best price on your behalf</div>
                    </a>
                </div>
                <div class=" introduce-item">
                    <a class="introduce-link" href="">
                        <svg viewBox="0 0 30 30" width="30" height="30" xmlns="http://www.w3.org/2000/svg" class="_30FPM">
                            <path fill="currentColor" d="M30.141707 11.07005H18.63164L15.076408.177071l-3.566342 10.892977L0 11.059002l9.321376 6.739063-3.566343 10.88193 9.321375-6.728016 9.310266 6.728016-3.555233-10.88193 9.310266-6.728016z"></path>
                        </svg>
                        <div class="introduce-item-title">It doesn't cost you a penny</div>
                        <div class="introduce-item-content">Our service and advice is free, impartial and comes with no obligation</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-12 ">
            <h1 class="select-tore-title mb-3">Find your place</h1>
            <div class="select-tore mb-5" >
                <div class="card">
                    <h2>Office</h2>
                    <i class="fas fa-arrow-right"></i>
                    <p>a lonely trip.</p>
                    <div class="pic"><img src="{{ asset('img/select-tore1.jpg') }}" alt=""></div>
                    <ul>
                    </ul>
                    <a href="{{ route('office') }}"><button></button></a>
                </div>
                <div class="card card2 mb-5">
                    <h2>Apartment</h2>
                    <i class="fas fa-arrow-right"></i>
                    <p>a lonely trip.</p>
                    <div class="pic"><img src="{{ asset('img/select-tore2.jpg') }}" alt=""></div>
                    <ul>
                    </ul>
                    <a href="{{ route('apartment') }}"><button></button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="content-item">
        <div class="d-flex flex-wrap _1xNUY">
            <div class="about-we about-title">Why should you choose office space & apartment in the Peanuts ?</div>
            <div class="about-we about-content">
                <p>As a key hub for global business, the Peanuts  offers companies the opportunity to develop in some of the world economy’s most dynamic cities. &nbsp;The Global market offers a wide variety of options from established business centres like&nbsp;
                    <a href="https://www.instantoffices.com/en/gb/serviced-office-space/london">London&nbsp;</a>to prime examples of urban regeneration such as&nbsp;<a href="/en/gb/serviced-office-space/newcastle">Newcastle</a>&nbsp;or&nbsp;<a href="/en/gb/serviced-office-space/birmingham">Birmingham</a>. &nbsp;&nbsp;<br>
                <br>
                Key business destinations include&nbsp;<a href="/en/gb/serviced-office-space/edinburgh">Edinburgh</a>, which has the one of the strongest economies in the UK and is considered its second financial centre;&nbsp;<a href="/en/gb/serviced-office-space/manchester">Manchester</a>, with a growing business community that supports major industries such finance, legal and business services; and of course&nbsp;London, the nation’s capital, which has long driven the UK’s economy.&nbsp;<br>
                <br>
                Ranked as the most entrepreneurial country in Europe by the Global Entrepreneurship Index, the UK now has a reputation as being a world leader in innovation. Thriving start-up communities in some of the nation’s major cities offer the ideal atmosphere for you to grow your business. &nbsp;These attributes coupled with the benefit of a flexible workforce make the UK the ideal place to rent office space to grow your business.&nbsp;<br>
                <br>
                For more information on the best place to set up your workspace in the UK,&nbsp;<a href="/en/about-us/the-team">contact one of our specialist local consultants</a>.</p>
            </div>
        </div>
    </div>






{{-- @if (session('loginID') && session('loginID')['userRole'] == 1) --}}
@if (auth()->check() && auth()->user()->role === 1)
    @push('js-front')

            <script>
                $(document).ready(function () {
                    $('#posting-btn').click(function () {
                        event.preventDefault();
                        $(".box-lightbox-host").addClass("open");
                    });
                });

            </script>
    @endpush
@endif

@endsection


@if (!auth()->check())
    @push('js-front')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.24/dist/sweetalert2.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#posting-btn').click(function () {
                event.preventDefault();
                $(".box-lightbox").addClass("open");
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'You need to login first',
                })
            });
        });

    </script>
    @endpush
@endif



@if (session('fail'))
    @push('js-front')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.24/dist/sweetalert2.min.js"></script>
        <script>
            $(document).ready( function () {
                $(".box-lightbox").addClass("open");
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: "saaaui",
                })
            });

        </script>
    @endpush

@endif
