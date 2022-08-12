@push('css-front')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
<div class="box-lightbox-host" >
    <div class="bt-close js-lightbox-close"></div>
    <div class="box-content-login">
        <div id="cd-host" >
            <div class="mb-3"></div>
            <form action="{{ route('updateRole') }}" method="post" id="update-role-form" >
                @csrf
                <h1>To be host</h1>
                <div class="col-md-6">
                    <label class="form-label" for="city">City</label>
                    <select class="form-select selectCity" name="city" id="selectCityForHost" >
                    </select>
                </div>

                <input type="tel" placeholder="Phone number" name="phone"/>
                <button id="update-role-submit" type="submit" >Yup</button>
            </form>
        </div>
    </div>
</div>

@push('js-front')

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(async function(){
            $("#selectCityForHost").select2({tags: true });
            const response = await fetch('{{ asset('location/Index.json') }}');
            const cities = await response.json();
            $.each(cities, function (index, each) {
                $(".selectCity").append(`
                <option '>
                    ${index}
                </option>`)
                $("#selectCityForHost").append(`
                <option data-path='${each.file_path}'>
                    ${index}
                </option>`)

            });
            $(".js-lightbox-close").click(function(){
                $(".box-lightbox-host").removeClass("open");
            });
            $(".box-lightbox").click(function(){
                const self = event.target.closest('.box-content-login');
                if (!self) {
                    $(".box-lightbox-host").removeClass("open")
                }
            });
        });


    </script>

@endpush
