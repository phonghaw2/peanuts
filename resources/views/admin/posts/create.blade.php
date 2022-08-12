@extends('layout-backside.master')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@section('content')


<div class="container-fluid p-0">
    <h1 class="h3 mb-3">Create a post</h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h2 class="m-0">Please fill out the information completely</h2>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">
                    <div class="card-body">

                        <form action="{{ route('admin.posts.store') }}" method="post" id="create-post-form">

                            @csrf

                            <div class="row mb-3">
                                <div class=" col-md-4">
                                    <label class="form-label" for="type">Type</label>
                                    <select class="form-select" name="type" id="selectType">
                                        <option selected></option>
                                        @foreach ($types as $type => $value)
                                            <option  value="{{ $value }}">
                                                {{ $type }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class=" col-md-4">
                                    <label class="form-label" for="tore">Type of real estate (TORE)</label>
                                    <select class="form-select" name="tore" id="selectTore">
                                        <option selected></option>
                                        @foreach ($tores as $tore => $value )
                                            <option value="{{ $value }}">
                                                {{ $tore }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Cho thuê ....." maxlength="100" required>
                            </div>
                            <div class="row mb-3 select-location">
                                <div class=" col-md-3">
                                    <label class="form-label" for="city">City</label>
                                    <select class="form-select selectCity" name="city" id="selectCity">
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="district">District</label>
                                    <select class="form-select selectDistrict" name="district" id="selectDistrict" >
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="address">Address</label>
                                <input type="text" name="address" class="form-control"  placeholder="1234 Main St" maxlength="150">
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-2 onchange">
                                    <label class="form-label" for="bedroom">Bedrooms</label>
                                    <input class="form-control" name="bedroom" id="bedroom" type="tel"  min="0" maxlength="1" >
                                </div>
                                <div class="col-md-2 onchange">
                                    <label class="form-label" for="wc">WCs</label>
                                    <input class="form-control" name="wc" id="wc"   type="tel"  min="0" maxlength="1" >
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="area">Area</label>
                                    <div class="input-group">
                                        <input class="form-control" type="tel"  min="0" maxlength="3" name="area">
                                        <div class="input-group-text">
                                            <span class=""> ㎡ </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="price">Price</label>
                                    <div class="input-group">
                                        <input class="form-control" type="number"  min="0"  name="price" id="price">
                                        <div class="input-group-text">
                                            <span class=""> /Month </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-text">
                                    <span class="">Description</span>
                                </div>
                                <textarea class="form-control" name="description" aria-label="With textarea" maxlength="500" style="height: 100px;"></textarea>
                            </div>
                            <div class="row mb-3">
                                <div class=" col-md-3">
                                    <label class="form-label" for="mobile_phone">Mobile Phone</label>
                                    <input class="form-control" name="mobile_phone" id="mobile_phone" type="tel"  maxlength="11">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="office_phone">Office Phone</label>
                                    <input class="form-control" name="office_phone" id="office_phone" type="tel" maxlength="11" placeholder="Not require">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class=" col-md-3">
                                    <label class="form-label" for="start_date">Start Date</label>
                                    <input class="form-control" name="start_date" id="start_date" type="date" >
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="end_date">End Date</label>
                                    <input class="form-control" name="end_date" id="end_date" type="date" >
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="hidden" name="slug" class="form-control" id="slug" >
                            </div>

                            <button type="submit" class="btn btn-primary" id="btn-submit" disabled>Create</button>
                        </form>
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
    <script src="{{ asset('js/validate.min.js') }}"></script>
    <script>
        function getDate(){
                var today = new Date();
                var getDate = today.getUTCFullYear() + '-' + ('0' + (today.getUTCMonth() + 1)).slice(-2) + '-' + ('0' + today.getUTCDate()).slice(-2);
                $('#start_date').val(getDate);

        };
        function showTypeForm(){
            let tore = $('#selectTore option:selected').val();
            if(tore === '1'){
                $('.onchange').addClass('d-none');
            }else {
                $('.onchange').removeClass('d-none');
            }
        }
        function generateTitle() {
            const title = $('#title').val();
            const type = $('#selectType option:selected').text();
            const tore = $('#selectTore option:selected').text();
            const price = $('#price').val();

            let makeSlug = `(${type}) ${tore} ${title} ${price}`;
            generateSlug(makeSlug);

        };
        function generateSlug(makeSlug){
            $.ajax({
                type: 'POST',
                url: '{{ route('api.posts.slug.generate') }}',
                data: { makeSlug },
                dataType: 'json',
                success: function (response) {
                    $('#slug').val(response.data);
                    $('#slug').trigger('change');

                }
            });
        };
        async function loadDistrict(parent) {
            parent.find(".selectDistrict").empty();
            const path = $('.selectCity option:selected').data('path');
            if (!path) {
                return;
            }
            const response = await fetch('{{ asset('location/') }}' + path);
            const districts = await response.json();
            let string = '';
            const selectedValue = $("#selectDistrict").val();
            $.each(districts.district, function (index, each) {
                if (each.pre === 'Quận' || each.pre === 'Huyện' || each.pre === '') {
                    string += `<option`;
                    if (selectedValue === each.name) {
                        string += ` selected `;
                    }
                    string += `>${each.name}</option>`;
                }
            })
            parent.find(".selectDistrict").append(string);
        };
        $(document).ready(async function(){

            $("#selectCity").select2({tags: true });
            const response = await fetch('{{ asset('location/Index.json') }}');
            const cities = await response.json();
            $.each(cities, function (index, each) {
                $("#selectCity").append(`
                <option data-path='${each.file_path}'>
                    ${index}
                </option>`)
                $("#city").append(`
                <option data-path='${each.file_path}'>
                    ${index}
                </option>`)
            });
            $("#selectCity, #city").change(function () {
                loadDistrict($(this).parents('.select-location'));
            });
            $('#selectDistrict').select2({tags: true});
            $('#district').select2({tags: true});
            await loadDistrict($('#selectCity').parents('.select-location'));

            $(document).on('change', '#title, #selectType, #selectTore ,#price'  , function () {
                generateTitle();
                showTypeForm();
            });
            getDate();
            $('#slug').change(function () {
                $.ajax({
                    type: "GET",
                    url: '{{ route('api.posts.slug.check') }}',
                    data: { slug: $(this).val() },
                    dataType: "json",
                    success: function (response) {
                        $('#btn-submit').attr('disabled', false);
                    }
                });
            });
            $("#create-post-form").submit(function(e) {

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
            $("#create-post-form").validate({
                rules: {
                    title: "required",
                    address : "required",
                    area : "required",
                    price : "required",
                    mobile_phone : {
                        required: true,
                        minlength: 10
                    },
                },
                messages: {
                    title: "Please fill title",
                    address : "Please fill address",
                    area : "Please fill area",
                    price : "Please fill price",
                    mobile_phone: {
                        required : "Please enter your phone number ",
                        minlength : "The phone number must be at least 10 characters",
                    }

                },
            });

        });
    </script>

@endpush
