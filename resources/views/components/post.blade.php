<li class="card-li">
    <div class="card-left col-md-6">
        <div class="card-popular">
            <div class="card-tab">Popular</div>
        </div>
        <button aria-label="Add to shortlist" class="btn-fav" data-name="listings-page-shortlist-add" type="button">
            <svg class="_3eV-Y" xmlns="http://www.w3.org/2000/svg" width="22px" height="24px" viewBox="0 0 32 30" class="_3eV-Y"><path transform="translate(-864, -357)" stroke-width="2" d="M879.999844,361.610437 C881.564595,359.433417 884.238159,358 887,358 C891.521795,358 895,361.480206 895,366.03125 C895,367.492459 894.634604,368.901928 893.912523,370.330958 C892.943109,372.249472 891.385582,374.160644 888.775352,376.796437 C887.879556,377.701006 882.46242,382.932128 880.711039,384.703153 L880,385.422167 L879.288961,384.703153 C877.53758,382.932128 872.120444,377.701006 871.224648,376.796437 C868.614418,374.160644 867.056891,372.249472 866.087477,370.330958 C865.365396,368.901928 865,367.492459 865,366.03125 C865,361.480206 868.478205,358 873,358 C875.760023,358 878.434692,359.433869 879.999844,361.610437 Z"></path>
            </svg>
        </button>
        <div class="card-img">
            <a href="{{ route('officeshow', $post) }}" class="card-img-link">
                <img class="img-home" src="https://content.instantoffices.com/Prod/images/centres/original/41710/41710-385509.jpg" alt="">
            </a>
        </div>
    </div>
    <div class="card-right col-md-6">
        <div class="card-info">
            <a class="card-title px-3 my-3"  href="#"> {{ $post->title }}</a>
            <div class="card-description px-3">
                {{ $post->description }}
            </div>
            <div class="card-wc-room-area px-3">
                <div class="rh_prop_card__meta_wrap">
                    <!-- /.rh_prop_card__meta -->

                    <div class="col-md-6 rh_prop_card">
                         <span class="rh_meta_titles">Area</span>
                        <div>
                            <svg class="rh_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                <g>
                                    <circle cx="2" cy="2" r="2"></circle>
                                </g>
                                <g>
                                    <circle cx="2" cy="22" r="2"></circle>
                                </g>
                                <g>
                                    <circle cx="22" cy="2" r="2"></circle>
                                </g>
                                <rect x="1" y="1" width="2" height="22"></rect>
                                <rect x="1" y="1" width="22" height="2"></rect>
                                <path opacity="0.5" d="M23,20.277V1h-2v19.277C20.7,20.452,20.452,20.7,20.277,21H1v2h19.277c0.347,0.596,0.984,1,1.723,1
                                    c1.104,0,2-0.896,2-2C24,21.262,23.596,20.624,23,20.277z"></path>
                            </svg>
                            <span class="figure">{{ $post->area }}</span>
                            <span class="label">sqm</span>
                        </div>
                    </div>
                    <!-- /.rh_prop_card__meta -->

                </div>
            </div>
            <div class="card-tag-location d-flex px-3 my-3">
                <i class="fa-solid fa-location-dot"></i>
                <a  href="#"> {{ $post->district }}</a>
                <i class="fa-solid fa-circle" style="font-size: 1.2rem!important"></i>
                <a  href="#"> {{ $post->city }}</a>
            </div>
            <div class="card-tag-price  mb-3">
                <span class="rh_prop_card__status"> For Rent</span>
                <p class="rh_prop_card__price">$ {{ $post->price }} /sqm/month</p>
            </div>
        </div>
    </div>
</li>
