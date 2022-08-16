@extends('layouts.master')
@section('content')

<div class="card card-body blur shadow-blur mx-4 mx-md-5 mx-lg-10 mt-n9">
    <div class="section my-4 my-lg-5">
        <div class="container">
            <div class="row flex-row">
                <div class="col-lg-5">
                    <img class="w-80 border-radius-lg ms-2" src="../assets/img/examples/product2.png" alt="ladydady" loading="lazy">
                </div>
                <div class="col-lg-7">
                    <div>
                        <h3 class="mt-lg-0 mt-4 heading-card  mb-3" style="color: #14256A;">{{ $post->title }}</h3>
                        <h5 class="mt-lg-0 mt-4 heading-card  mb-3" style="color: #374a95;">{{ $post->address }}</h5>
                        <div class="d-flex">
                            <div class="col-md-6">
                                <h6 class="mb-0 mt-2 heading-card mb-1">Price</h6>
                                <h5 class="heading-card  mb-3">$ {{ $post->price }}</h5>
                            </div>
                            <div class="col-md-6">
                                <h6 class="mb-0 mt-2 heading-card mb-1">Contact</h6>
                                <div class="d-flex ">

                                    <span class="re__pr-specs-content-item-icon"><i class="fa-solid fa-phone"></i></span>
                                    <h5 class="heading-card  mb-3">{{ $post->mobile_phone }}</h5>
                                </div>

                            </div>
                        </div>


                        <div class="accordion" id="accordionProduct">
                            <div class="accordion-item mb-3">
                                {!! nl2br(e($post->description)) !!}
                            </div>
                            <div class="mb-1">
                                <div>
                                    <button type="button" class="btn btn-outline-info rounded-pill mb-3"><i class="ti-heart f_s_14 me-2"></i>Request details</button>
                                </div>
                                <div class="re__pr-specs-content">
                                    <div class="d-flex">
                                        <div class="re__pr-specs-content-item col-md-6">
                                            <span class="re__pr-specs-content-item-icon"><i class="fa-solid fa-vector-square"></i></span>
                                            <span class="re__pr-specs-content-item-title">Area</span>
                                            <span class="re__pr-specs-content-item-value">{{ $post->area }} m²</span>
                                        </div>
                                        <div class="re__pr-specs-content-item col-md-6">
                                            <span class="re__pr-specs-content-item-icon"><i class="fa-solid fa-dollar-sign"></i></span>
                                            <span class="re__pr-specs-content-item-title">From</span>
                                            <span class="re__pr-specs-content-item-value">{{ $post->price }} /Month</span>
                                        </div>
                                    </div>
                                    @if ($post->tore === 2)
                                    <div class="d-flex">
                                        <div class="re__pr-specs-content-item col-md-6">
                                            <span class="re__pr-specs-content-item-icon"><i class="fa-solid fa-bed-pulse"></i></span>
                                            <span class="re__pr-specs-content-item-title">Bedroom :</span>
                                            <span class="re__pr-specs-content-item-value">{{ $post->bedroom }} (room)</span>
                                        </div>
                                        <div class="re__pr-specs-content-item col-md-6">
                                            <span class="re__pr-specs-content-item-icon"><i class="fa-solid fa-sink"></i></span>
                                            <span class="re__pr-specs-content-item-title">WC</span>
                                            <span class="re__pr-specs-content-item-value">{{ $post->wc }} </span>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-tag-location d-flex px-3 my-4">
                            <i class="fa-solid fa-location-dot"></i>
                            <a  href="#"> {{ $post->district }}</a>
                            <i class="fa-solid fa-circle" style="font-size: 1.2rem!important"></i>
                            <a  href="#"> {{ $post->city }}</a>
                        </div>
                        <div class="d-flex px-3 my-3">
                            <div class="d-flex flex-column col-md-4">
                                <span class="re__pr-specs-content-item-title nhan">Start Date</span>
                                <span class="re__pr-specs-content-item-value">{{ $post->start_date }}</span>
                            </div>
                            <div class="d-flex flex-column col-md-4">
                                <span class="re__pr-specs-content-item-title nhan">End Date</span>
                                <span class="re__pr-specs-content-item-value">{{ $post->end_date }}</span>
                            </div>
                            <div class="d-flex flex-column col-md-4">
                                <span class="re__pr-specs-content-item-title nhan">Type</span>
                                <span class="re__pr-specs-content-item-value">{{ $post->type_name }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12 text-center my-5">
    <div class="my-3">
        <h2>The location</h2>
    </div>
    <iframe src="https://www.google.com/maps?q={{ $post->address }}$hl=es;z=14&output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection
