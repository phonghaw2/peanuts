


<div class="page-wrapper py-3 c">
    <div class="card-filter-body col-lg-12">
        <form class="form-filter d-flex justify-content-center align-items-center"  id="form-filter">
            <div class="input-filter col-md-3">
                <label class="input-filter-label">going to</label>
                <input class="input--style-1" type="text" placeholder="Destination, hotel name" >
            </div>
            <div class="input-filter col-md-2">
                <label class="input-filter-label" for="cities">City</label>
                <select name="city" id="cities" class="input--style-1 select-filter">
                    <option selected>All</option>
                    @foreach ($arrCity as $city )
                        <option
                        @if ($city === $selectedCity)
                            selected
                        @endif>
                            {{ $city }}
                        </option>

                    @endforeach
                </select>

            </div>
            <div class="input-filter col-md-2">
                <label class="input-filter-label" for="cities">District</label>
                <select name="district" id="districts" class="input--style-1 select-filter">
                    <option selected>All</option>
                    @foreach ($arrDistrict as $district )
                        <option
                        @if ($district === $selectedDistrict)
                            selected
                        @endif>
                            {{ $district }}
                        </option>

                    @endforeach
                </select>

            </div>
            <div class="input-filter col-md-2">
                <label class="input-filter-label">Price</label>
                <input class="input--style-1" type="text"  placeholder="mm/dd/yyyy" id="input-end">
            </div>
        </form>
    </div>
</div>

@push('js-front')
<script>
    $(document).ready(function(){
        $(".select-filter").change(function(){
            $("#form-filter").submit();
        });
    });
</script>
@endpush
