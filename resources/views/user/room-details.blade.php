@extends('user.layouts.main')
@section('container')

<!-- ================================
    START TOUR DETAIL AREA
================================= -->
<section class="room-detail-bread">
    <div class="full-width-slider carousel-action owl-loaded owl-carousel">
        <div class="owl-stage-outer">
            <div class="owl-stage"
                style="transition: all 0s ease 0s; width: 5016px; transform: translate3d(-1140px, 0px, 0px);">
                <div class="owl-item cloned" style="width: 446px; margin-right: 10px;">
                    <div class="full-width-slide-item">
                        <img src="/user-asset/images/img31.jpg" alt="">
                    </div>
                </div>
                <div class="owl-item cloned" style="width: 446px; margin-right: 10px;">
                    <div class="full-width-slide-item">
                        <img src="/user-asset/images/img31.jpg" alt="">
                    </div>
                </div>
                <div class="owl-item cloned" style="width: 446px; margin-right: 10px;">
                    <div class="full-width-slide-item">
                        <img src="/user-asset/images/img31.jpg" alt="">
                    </div>
                </div>
                <div class="owl-item active center" style="width: 446px; margin-right: 10px;">
                    <div class="full-width-slide-item">
                        <img src="/user-asset/images/img31.jpg" alt="">
                    </div>
                </div>
                <div class="owl-item active" style="width: 446px; margin-right: 10px;">
                    <div class="full-width-slide-item">
                        <img src="/user-asset/images/img31.jpg" alt="">
                    </div>
                </div>
                <div class="owl-item" style="width: 446px; margin-right: 10px;">
                    <div class="full-width-slide-item">
                        <img src="/user-asset/images/img31.jpg" alt="">
                    </div>
                </div>
                <div class="owl-item" style="width: 446px; margin-right: 10px;">
                    <div class="full-width-slide-item">
                        <img src="/user-asset/images/img31.jpg" alt="">
                    </div>
                </div>
                <div class="owl-item" style="width: 446px; margin-right: 10px;">
                    <div class="full-width-slide-item">
                        <img src="/user-asset/images/img31.jpg" alt="">
                    </div>
                </div>
                <div class="owl-item cloned" style="width: 446px; margin-right: 10px;">
                    <div class="full-width-slide-item">
                        <img src="/user-asset/images/img31.jpg" alt="">
                    </div>
                </div>
                <div class="owl-item cloned" style="width: 446px; margin-right: 10px;">
                    <div class="full-width-slide-item">
                        <img src="/user-asset/images/img31.jpg" alt="">
                    </div>
                </div>
                <div class="owl-item cloned" style="width: 446px; margin-right: 10px;">
                    <div class="full-width-slide-item">
                        <img src="/user-asset/images/img31.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end full-width-slider -->
</section>

<section class="tour-detail-area padding-bottom-90px">
    <div class="single-content-navbar-wrap menu section-bg" id="single-content-navbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content-nav" id="single-content-nav">
                        <ul>
                            <li><a data-scroll="description" href="#description"
                                    class="scroll-link active">Description</a></li>
                            <li><a data-scroll="services" href="#services" class="scroll-link">Services</a></li>
                            <li><a data-scroll="amenities" href="#amenities" class="scroll-link">Amenities</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end single-content-navbar-wrap -->
    <div class="single-content-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content-wrap padding-top-60px">
                        <div id="description" class="page-scroll">
                            <div class="single-content-item pb-4">
                                <h3 class="title font-size-26">{{ $room->title }}</h3>
                                <p class="pt-2">
                                    <span>Rp.{{ number_format($room->price) }}/Night</span><br>
                                    <span class="badge badge-warning text-white font-size-16">4.6</span>
                                    <span>(4,209 Reviews)</span>

                                </p>
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                            <div class="single-content-item padding-top-30px padding-bottom-40px">
                                <h3 class="title font-size-20">Description</h3>
                                <p class="py-3">Per consequat adolescens ex, cu nibh commune temporibus vim, ad sumo
                                    viris eloquentiam sed. Mea appareat omittantur eloquentiam ad, nam ei quas oportere
                                    democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis
                                    aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate
                                    pertinacia eum.</p>
                                <p class="pb-4">Cum et probo menandri. Officiis consulatu pro et, ne sea sale invidunt,
                                    sed ut sint blandit efficiendi. Atomorum explicari eu qui, est enim quaerendum te.
                                    Quo harum viris id. Per ne quando dolore evertitur, pro ad cibo commune.</p>
                                <h3 class="title font-size-15 font-weight-medium pb-3">House Rules</h3>
                                <ul class="list-items">
                                    <li><i class="la la-dot-circle mr-2"></i>No smoking, parties or events.</li>
                                    <li><i class="la la-dot-circle mr-2"></i>Check-in time is 2 PM - 4 PM and check-out
                                        by 10 AM.</li>
                                </ul>
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                        </div><!-- end description -->
                        <div id="services" class="page-scroll">
                            <div class="single-content-item padding-top-40px padding-bottom-40px">
                                <h3 class="title font-size-20">Services</h3>
                                <div class="row pt-4">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Bicycle Hire</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Conference Rooms</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Fruit Basket</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Massage</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Sightseeing</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Car Hire</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Fitness Center</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Laundry</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Own Parking Space</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Wake-Up Call</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                </div><!-- end row -->
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                        </div><!-- end itinerary -->
                        <div id="amenities" class="page-scroll">
                            <div class="single-content-item padding-top-40px padding-bottom-40px">
                                <h3 class="title font-size-20">Amenities</h3>
                                <div class="row pt-4">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-couch"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">2 Seater Sofa</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-television"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">40-Inch Samsung LED TV
                                                </h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-gear"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Butler Service</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-wifi"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Free Wi – Fi</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-swimming-pool"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Private Pool</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-user"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">24h Room Service</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-air-freshener"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Air Conditioning</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-phone"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Direct Dial Phone</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-bullhorn"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Hair Dryer</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-bathtub"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Bathtub</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-hand-holding-usd"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Safe Deposit Box</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-luggage-cart"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Luggage storage</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                </div><!-- end row -->
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                        </div><!-- end itinerary -->
                    </div><!-- end single-content-wrap -->
                </div><!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar single-content-sidebar mb-0">
                        <div class="sidebar-widget single-content-widget">
                            <h3 class="title stroke-shape">Your Reservation</h3>
                            @auth
                            <form action="/booking" method="POST">
                                @csrf
                                <input type="text" value="{{ auth()->user()->id }}" hidden name="user_id">
                                <input type="text" value="{{ $room->hotel->id }}" hidden name="hotel_id">
                                <input type="text" value="{{ $room->id }}" hidden name="room_id">
                                <input type="text" value="{{ $room->id }}" hidden name="rooms_id">
                                <div class="sidebar-widget-item">
                                    <div class="contact-form-action">
                                        <div class="input-box">
                                            <label class="label-text">Check-in</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control" type="date"
                                                    name="date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end sidebar-widget-item -->
                                <div class="sidebar-widget-item">
                                    <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                        <label class="font-size-16">Night <span>Stay</span></label>
                                        <div class="qtyBtn d-flex align-items-center">
                                            <label for="day" class="qtyDec"><i class="la la-minus"></i></label>
                                            <input type="text" name="night" id="day" onfocus="sum()" value="0">
                                            <label for="day" class="qtyInc"><i class="la la-plus"></i></label>
                                        </div>
                                    </div><!-- end qty-box -->
                                    <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                        <label class="font-size-16">Rooms <span>Order</span></label>
                                        <div class="qtyBtn d-flex align-items-center">
                                            <label for="room" class="qtyDec"><i class="la la-minus"></i></label>
                                            <input type="text" name="room" id="room" onfocus="sum()" value="0">
                                            <label for="room" class="qtyInc"><i class="la la-plus"></i></label>
                                        </div>
                                    </div><!-- end qty-box -->
                                    <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                        <label class="font-size-16">Visitor <span>total</span></label>
                                        <div class="qtyBtn d-flex align-items-center">
                                            <label for="adults" class="qtyDec"><i class="la la-minus"></i></label>
                                            <input type="text" name="visitor" id="adults" onfocus="sum()" value="0">
                                            <label for="adults" class="qtyInc"><i class="la la-plus"></i></label>
                                        </div>
                                    </div><!-- end qty-box -->
                                </div><!-- end sidebar-widget-item -->
                                <div class="sidebar-widget-item py-4">
                                    <div class="extra-service-wrap">
                                        <div id="checkboxContainPrice">
                                        </div>
                                        <div class="total-price pt-3">
                                            <p class="text-black">Your Price</p>
                                            <p class="d-flex align-items-center">
                                                <span class="font-size-17 text-black">Rp. </span>
                                                <input type="text" readonly name="total" value="" id="total"
                                                    style="width: 100%"/>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- end sidebar-widget-item -->
                                <div class="btn-box">
                                    <button type="submit" name="submit" class="theme-btn text-center w-100 mb-2"
                                        > Booking Now </button>
                                </div>
                            </form>
                            @else
                                <div class="sidebar-widget-item">
                                    <div class="contact-form-action">
                                        <div class="input-box">
                                            <label class="label-text">Check-in</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control" type="date"
                                                    name="date" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end sidebar-widget-item -->
                                <div class="sidebar-widget-item">
                                    <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                        <label class="font-size-16">Night <span>Stay</span></label>
                                        <div class="qtyBtn d-flex align-items-center">
                                            <label for="day" class="qtyDec"><i class="la la-minus"></i></label>
                                            <input type="text" name="night" id="day" onfocus="sum()" value="0">
                                            <label for="day" class="qtyInc"><i class="la la-plus"></i></label>
                                        </div>
                                    </div><!-- end qty-box -->
                                    <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                        <label class="font-size-16">Rooms <span>Order</span></label>
                                        <div class="qtyBtn d-flex align-items-center">
                                            <label for="room" class="qtyDec"><i class="la la-minus"></i></label>
                                            <input type="text" name="room" id="room" onfocus="sum()" value="0">
                                            <label for="room" class="qtyInc"><i class="la la-plus"></i></label>
                                        </div>
                                    </div><!-- end qty-box -->
                                    <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                        <label class="font-size-16">Visitor <span>total</span></label>
                                        <div class="qtyBtn d-flex align-items-center">
                                            <label for="adults" class="qtyDec"><i class="la la-minus"></i></label>
                                            <input type="text" name="visitor" id="adults" onfocus="sum()" value="0">
                                            <label for="adults" class="qtyInc"><i class="la la-plus"></i></label>
                                        </div>
                                    </div><!-- end qty-box -->
                                </div><!-- end sidebar-widget-item -->
                                <div class="sidebar-widget-item py-4">
                                    <div class="extra-service-wrap">
                                        <div id="checkboxContainPrice">
                                        </div>
                                        <div class="total-price pt-3">
                                            <p class="text-black">Your Price</p>
                                            <p class="d-flex align-items-center">
                                                <span class="font-size-17 text-black">Rp. </span>
                                                <input type="text" readonly name="total" value="" id="total"
                                                    style="width: 100%"/>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- end sidebar-widget-item -->
                                <div class="btn-box">
                                    <button type="submit" class="theme-btn text-center w-100 mb-2" disabled>Please
                                        Login</button>
                                </div>
                            @endauth
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget single-content-widget">
                            <h3 class="title stroke-shape">Why Book With Us?</h3>
                            <div class="sidebar-list">
                                <ul class="list-items">
                                    <li><i class="la la-dollar icon-element mr-2"></i>No-hassle best price guarantee
                                    </li>
                                    <li><i class="la la-microphone icon-element mr-2"></i>Customer care available 24/7
                                    </li>
                                    <li><i class="la la-thumbs-up icon-element mr-2"></i>Hand-picked Tours & Activities
                                    </li>
                                    <li><i class="la la-file-text icon-element mr-2"></i>Free Travel Insureance</li>
                                </ul>
                            </div><!-- end sidebar-list -->
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget single-content-widget">
                            <h3 class="title stroke-shape">Get a Question?</h3>
                            <p class="font-size-14 line-height-24">Do not hesitate to give us a call. We are an expert
                                team and we are happy to talk to you.</p>
                            <div class="sidebar-list pt-3">
                                <ul class="list-items">
                                    <li><i class="la la-phone icon-element mr-2"></i><a href="#">+ 61 23 8093 3400</a>
                                    </li>
                                    <li><i class="la la-envelope icon-element mr-2"></i><a
                                            href="mailto:info@trizen.com">info@trizen.com</a></li>
                                </ul>
                            </div><!-- end sidebar-list -->
                        </div><!-- end sidebar-widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end single-content-box -->
</section><!-- end tour-detail-area -->
<!-- ================================
    END TOUR DETAIL AREA
================================= -->

<div class="section-block"></div>

<!-- ================================
    START RELATE TOUR AREA
================================= -->

<!-- ================================
    END RELATE TOUR AREA
================================= -->

<!-- ================================
    START CTA AREA
================================= -->
<section class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="section-heading">
                    <p class="sec__desc text-white-50 pb-1">Newsletter sign up</p>
                    <h2 class="sec__title font-size-30 text-white">Subscribe to Get Special Offers</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="subscriber-box">
                    <div class="contact-form-action">
                        <form action="#">
                            <div class="input-box">
                                <label class="label-text text-white">Enter email address</label>
                                <div class="form-group mb-0">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="email" name="email" placeholder="Email address">
                                    <button class="theme-btn theme-btn-small submit-btn"
                                        type="submit">Subscribe</button>
                                    <span class="font-size-14 pt-1 text-white-50"><i class="la la-lock mr-1"></i>Don't
                                        worry your information is safe with us.</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end cta-area -->

<script>
    function sum() {
        var adults = document.getElementById('adults').value;
        var room = document.getElementById('room').value;
        var day = document.getElementById('day').value;
        var price = {{ $room->price }}
        var result = adults * room * day * price;

        if (!isNaN(result)) {
            document.getElementById('total').value = result;
        }
    }

</script>
<!-- ================================
    END CTA AREA
================================= -->

<!-- ================================
       START FOOTER AREA
================================= -->
@endsection
