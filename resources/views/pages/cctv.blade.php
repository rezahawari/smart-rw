@extends('layouts.layouts')
@section('nav')
    @include('layouts.nav')
@endsection
@section('content')
<section class="nftmax-adashboard nftmax-show">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12 nftmax-main__column">
                <div class="nftmax-body">
                    <!-- Dashboard Inner -->
                    <div class="nftmax-dsinner">

                        <!-- Marketplace Bar -->
                        <div class="nftmax-marketplace__bar mg-top-50 mg-btm-40">
                            <div class="nftmax-marketplace__bar-inner">
                                <!-- Marketplace Tab List -->
                                {{-- <div class="list-group nftmax-marketplace__bar-list" id="list-tab" role="tablist">
                                    <a class="list-group-item active" data-bs-toggle="list" href="#id1" role="tab">Explore</a>
                                    <a class="list-group-item" data-bs-toggle="list" href="#id2" role="tab">Featured  Artist</a>
                                    <a class="list-group-item" data-bs-toggle="list" href="#id1" role="tab">Open Market</a>
                                    <a class="list-group-item" data-bs-toggle="list" href="#id2" role="tab">Partner Shops</a>
                                    <a class="list-group-item" data-bs-toggle="list" href="#id1" role="tab">Game Assets</a>
                                </div> --}}
                                <!-- End Marketplace Tab List -->

                                <div class="nftmax-marketplace__bar-right">
                                    <div class="nftmax-marketplace__bar-one">
                                        <form class="nftmax-marketplace__bar-search" action="#">
                                            <button class="search-btn" type="submit"><img src="{{asset('tem/img/search.png')}}" alt="#"></button>
                                            <input name="s" value="" type="text" placeholder="Search items, collections...">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Welcome CTA -->
                        <div class="trending-action">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content" id="nav-tabContent">
                                        <!-- Single Tab -->
                                        <div class="tab-pane fade show active" id="id1" role="tabpanel" aria-labelledby="nav-home-tab">
                                            <div class="row nftmax-gap-sq30">
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <!-- Marketplace Single Item -->
                                                    <div class="trending-action__single trending-action__single--v2">
                                                        <!-- Trending Head -->
                                                        <div class="trending-action__head">
                                                            <div class="trending-action__badge"><span>Active</span></div>
                                                            {{-- <div class="trending-action__button v2">
                                                                <a class="trending-action__btn heart-icon"><i class="fa-solid fa-heart"></i></a>
                                                                <a class="trending-action__btn"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                                            </div> --}}
                                                            <img src="{{asset('tem/img/cctv1.png')}}" alt="#">
                                                        </div>
                                                        <!-- Trending Body -->
                                                        <div class="trending-action__body trending-marketplace__body">
                                                            <h2 class="trending-action__title"><a href="marketplace-details.html">Jalan RW 5</a></h2>
                                                            <div class="nftmax-currency mt-3">
                                                                {{-- <div class="nftmax-currency__main">
                                                                    <div class="nftmax-currency__icon"><img src="{{asset('tem/img/eth-icon.png')}}" alt="#"></div>
                                                                    <div class="nftmax-currency__content">
                                                                        <h4 class="nftmax-currency__content-title">75,320 ETH </h4>
                                                                        <p class="nftmax-currency__content-sub">(773.69  USD)</p>
                                                                    </div>
                                                                </div> --}}
                                                                <a href="#" class="nftmax-btn nftmax-btn__secondary radius">On Sale</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Marketplace Item -->
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <!-- Marketplace Single Item -->
                                                    <div class="trending-action__single trending-action__single--v2">
                                                        <!-- Trending Head -->
                                                        <div class="trending-action__head">
                                                            <div class="trending-action__badge bg-secondary"><span>Inactive</span></div>
                                                            {{-- <div class="trending-action__button v2">
                                                                <a class="trending-action__btn heart-icon"><i class="fa-solid fa-heart"></i></a>
                                                                <a class="trending-action__btn"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                                            </div> --}}
                                                            <img src="{{asset('tem/img/cctv2.png')}}" alt="#">
                                                        </div>
                                                        <!-- Trending Body -->
                                                        <div class="trending-action__body trending-marketplace__body">
                                                            <h2 class="trending-action__title"><a href="marketplace-details.html">Jalan RW 2</a></h2>
                                                            <div class="nftmax-currency mt-3">
                                                                {{-- <div class="nftmax-currency__main">
                                                                    <div class="nftmax-currency__icon"><img src="{{asset('tem/img/eth-icon.png')}}" alt="#"></div>
                                                                    <div class="nftmax-currency__content">
                                                                        <h4 class="nftmax-currency__content-title">75,320 ETH </h4>
                                                                        <p class="nftmax-currency__content-sub">(773.69  USD)</p>
                                                                    </div>
                                                                </div> --}}
                                                                <a href="#" class="nftmax-btn nftmax-btn__secondary radius">On Sale</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Marketplace Item -->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Welcome CTA -->
                    </div>
                    <!-- End Dashboard Inner -->
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
