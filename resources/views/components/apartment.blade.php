<div class="apartment-card col-6  px-5">
    <div class="apartment-card-wrap m-3">
        <div class="d-flex align-items-center h-100 flex-column">
            <div class="item-header">
                <div class="labels-wrap">
                    <a class="label-color">
                        Furnished
                    </a>
                </div>
                <ul class="item-price-wrap">
                    <li class="item-price">{{ $price }}USD/Month</li>
                </ul>
                <div class="listing-image-wrap">
                    <div class="listing-thumb">
                        <a href="" class="listing-featured-thumb hover-effect">
                            <img height="220px" src="https://rentapartment.vn/wp-content/uploads/2022/02/House-livingroom-thanh-apartment-landlord-592x444.jpg" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
            <div class="item-body flex-grow-1">
                <div class="item-title">
                    <a href="">{{ $title }}</a>
                </div>
                <div class="item-address">
                    {{ $address }}
                </div>
                <ul class="item-amenities d-flex">
                    <li class="h-beds">
                        <img class="img-fluid mr-1 entered lazyloaded" src="https://rentapartment.vn/wp-content/uploads/2021/05/bedroom.png" width="16" height="16" alt="bedroom" data-lazy-src="https://rentapartment.vn/wp-content/uploads/2021/05/bedroom.png" data-ll-status="loaded">

                        <span class="item-amenities-text">Beds:</span>
                        <span class="hz-figure">{{ $bedroom }}</span>
                    </li>
                    <li class="h-baths">
                        <img class="img-fluid mr-1 entered lazyloaded" src="https://rentapartment.vn/wp-content/uploads/2021/05/bathroom.png" width="16" height="16" alt="bathroom" data-lazy-src="https://rentapartment.vn/wp-content/uploads/2021/05/bathroom.png" data-ll-status="loaded">
                        <span class="item-amenities-text">Baths:</span>
                        <span class="hz-figure">{{ $wc }}</span>
                    </li>
                    <li class="h-area">
                        <span class="hz-figure">{{ $area }}</span>
                        <span class="area_postfix">Sqm</span>
                    </li>
                </ul>
                <a class="item-no-footer" href="">
                    Details
                </a>
            </div>
        </div>
    </div>
</div>
