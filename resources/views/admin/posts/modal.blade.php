
<div class="box-lightbox" >
    <div class="box-content-show">
        <div id="cd-show" >
            <div class="col-lg-12">
                <div>
                    <h3 id="show-title" class="mt-lg-0 mt-4 heading-card  mb-3" style="color: #14256A; "></h3>
                    <h5 id="show-address"class="mt-lg-0 mt-4 heading-card  mb-3" style="color: #374a95;"></h5>
                    <div class="d-flex">
                        <div class="col-md-6">
                            <h6 class="mb-0 mt-2 heading-card mb-1">Price</h6>
                            <h5 id="show-price" class="heading-card  mb-3"></h5>
                        </div>
                        <div class="col-md-6">
                            <h6 class="mb-0 mt-2 heading-card mb-1">Contact</h6>
                            <h5 id="show-mobile-phone" class="heading-card  mb-3"></h5>
                        </div>
                    </div>

                    <div class="accordion" id="accordionProduct">
                        <div id="show-description" class="accordion-item mb-3">
                            {{-- {!! nl2br(e($post->description)) !!} --}}

                        </div>
                        <div class="mb-1">
                            <div class="re__pr-specs-content">
                                <div class="d-flex">
                                    <div class="re__pr-specs-content-item col-md-6">
                                        <span class="re__pr-specs-content-item-icon"><i class="fa-solid fa-vector-square"></i></span>
                                        <span class="re__pr-specs-content-item-title">Area</span>
                                        <span id="show-area" class="re__pr-specs-content-item-value"></span>
                                    </div>
                                    <div class="re__pr-specs-content-item col-md-6">
                                        <span class="re__pr-specs-content-item-icon"><i class="fa-solid fa-dollar-sign"></i></span>
                                        <span class="re__pr-specs-content-item-title">From</span>
                                        <span id="show-from"class="re__pr-specs-content-item-value"></span>
                                    </div>
                                </div>
                                {{-- @if ($post->tore === 2) --}}
                                <div class="d-flex" id="bedroom-wc">
                                    <div class="re__pr-specs-content-item col-md-6">
                                        <span class="re__pr-specs-content-item-icon"><i class="fa-solid fa-bed-pulse"></i></span>
                                        <span class="re__pr-specs-content-item-title">Bedroom :</span>
                                        <span id="show-bedroom" class="re__pr-specs-content-item-value">(room)</span>
                                    </div>
                                    <div class="re__pr-specs-content-item col-md-6">
                                        <span class="re__pr-specs-content-item-icon"><i class="fa-solid fa-sink"></i></span>
                                        <span class="re__pr-specs-content-item-title">WC</span>
                                        <span id="show-wc" class="re__pr-specs-content-item-value"></span>
                                    </div>
                                </div>
                                {{-- @endif --}}
                            </div>
                        </div>
                    </div>
                    <div class="d-flex px-3 my-3">
                        <div class="d-flex flex-column col-md-4">
                            <span class="re__pr-specs-content-item-title nhan">Start Date</span>
                            <span id="show-start_date"class="re__pr-specs-content-item-value"></span>
                        </div>
                        <div class="d-flex flex-column col-md-4">
                            <span class="re__pr-specs-content-item-title nhan">End Date</span>
                            <span id="show-end_date" class="re__pr-specs-content-item-value"></span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary js-lightbox-close" >Close</button>
                <button id="updateStatus" type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>




