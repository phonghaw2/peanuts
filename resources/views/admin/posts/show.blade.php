@extends('layout-backside.master')
@section('content')

<div class="container-fluid p-0">
    <h1 class="h3 mb-3">Posts</h1>
    <div class="row">
        <div class="col-12">
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
                                        {{ $post->district }}
                                            ----------
                                         {{ $post->city }}
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
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary js-lightbox-close" >Cancel</button>
            <button id="updateStatus" type="button" class="btn btn-primary">Approve</button>
        </div>
    </div>
</div>

@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.24/dist/sweetalert2.min.js"></script>
<script>

    $(document).ready(function(){
        $('#updateStatus').click(function () {
            $.ajax({
                async: false,
                url: "{{ route('admin.posts.updateStatus') }}",
                data: {id: {{ $post->id }}},
                success: function (response) {
                    Swal.fire({
                    icon: 'success',
                    title: 'Approved content',
                    confirmButtonText: 'OK',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.history.back();
                        };
                    });
                }
            });
        });

    });
</script>
@endpush


