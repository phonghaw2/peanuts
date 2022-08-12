@extends('layouts.master')
@section('content')
    <div class="content-container">
        <div class="section-title text-center">
            <h2>Vui lòng chọn thể loại bài đăng</h2>
        </div>
        <div class="section-type d-flex">
            <div class="col-md-6 d-flex justify-content-center align-item-center">
                <div class="button-type">OFFICE</div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-item-center">
                <div class="button-type">APARTMENT</div>
            </div>

        </div>
        <div class="section-card col-lg-12 pb-5 mb-3">
            <a class="col-md-3 col-sm-3 price-box price-box--1" href="{{ route('posting.create',['regular-office']) }}" >
                <div>
                    <div class="price-box__wrap">
                        <div class="price-box__img"></div>
                        <h1 class="price-box__title">
                            Regular Service
                        </h1>
                        <p class="price-box__people">
                            ( for office )
                        </p>
                        <h2 class="price-box__discount">
                            <span class="price-box__dollar">$</span>FREE<span class="price-box__discount--light">/mo</span>
                        </h2>
                        <h3 class="price-box__price">
                            $49/mo
                        </h3>
                        <p class="price-box__feat">
                            Features
                        </p>
                        <ul class="price-box__list">
                            <li class="price-box__list-el">Your post will lost</li>
                            <li class="price-box__list-el">idk :v</li>
                            <li class="price-box__list-el">24h helpcenter</li>
                            <li class="price-box__list-el">Have nothing</li>
                        </ul>

                    </div>
                </div>
            </a>

            <!-- second -->
            <a class="col-md-3 col-sm-3 price-box price-box--2" href="{{ route('posting.create',['premium-office']) }}" >
                <div>
                    <div class="price-box__wrap">
                        <div class="price-box__img"></div>
                        <h1 class="price-box__title">
                            Premium
                        </h1>
                        <p class="price-box__people">
                            ( for office )
                        </p>
                        <h2 class="price-box__discount">
                            <span class="price-box__dollar">$</span>149<span class="price-box__discount--light">/mo</span>
                        </h2>
                        <h3 class="price-box__price">
                            $225/mo
                        </h3>
                        <p class="price-box__feat">
                            Features
                        </p>
                        <ul class="price-box__list">
                            <li class="price-box__list-el">No limit tag</li>
                            <li class="price-box__list-el">Pinned on top</li>
                            <li class="price-box__list-el">No contractors limit </li>
                            <li class="price-box__list-el">Forever helpcenter</li>
                        </ul>

                    </div>
                </div>
            </a>


            <!-- terzo -->
            <a class="col-md-3 col-sm-3 price-box price-box--3" href="{{ route('posting.create',['regular-apartment']) }}" >
                <div>
                    <div class="price-box__wrap">
                        <div class="price-box__img"></div>
                        <h1 class="price-box__title">
                            Regular Service
                        </h1>
                        <p class="price-box__people">
                            ( for apartment )
                        </p>
                        <h2 class="price-box__discount">
                            <span class="price-box__dollar">$</span>FREE<span class="price-box__discount--light">/mo</span>
                        </h2>
                        <h3 class="price-box__price">
                            $49/mo
                        </h3>
                        <p class="price-box__feat">
                            Features
                        </p>
                        <ul class="price-box__list">
                            <li class="price-box__list-el">Your post will lost</li>
                            <li class="price-box__list-el">idk :v</li>
                            <li class="price-box__list-el">24h helpcenter</li>
                            <li class="price-box__list-el">Have nothing</li>
                        </ul>

                    </div>
                </div>
            </a>


            <a class="col-md-3 col-sm-3 price-box price-box--4" href="{{ route('posting.create',['premium-apartment']) }}" >
                <div>
                    <div class="price-box__wrap">
                        <div class="price-box__img"></div>
                        <h1 class="price-box__title">
                            Premium
                        </h1>
                        <p class="price-box__people">
                            ( for apartment )
                        </p>
                        <h2 class="price-box__discount">
                            <span class="price-box__dollar">$</span>149<span class="price-box__discount--light">/mo</span>
                        </h2>
                        <h3 class="price-box__price">
                            $225/mo
                        </h3>
                        <p class="price-box__feat">
                            Features
                        </p>
                        <ul class="price-box__list">
                            <li class="price-box__list-el">No limit tag</li>
                            <li class="price-box__list-el">Pinned on top</li>
                            <li class="price-box__list-el">No contractors limit </li>
                            <li class="price-box__list-el">Forever helpcenter</li>
                        </ul>
                    </div>
                </div>
            </a>

        </div>

    </div>



@endsection

@push('js-front')
    <script>

    </script>
@endpush
