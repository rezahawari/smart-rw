@extends('layouts.layouts')
@section('nav')
    @include('layouts.nav')
@endsection
@section('style')
<link href="https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css" rel="stylesheet" />
<script src="https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js"></script>
<style>
    /* #map { position: absolute; top: 0; bottom: 0; width: 100%; } */
</style>
@endsection
@section('content')

<section class="nftmax-adashboard nftmax-show">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12 nftmax-main__column">
                <div class="nftmax-body">
                    <!-- Dashboard Inner -->
                    <div class="nftmax-dsinner">

                        <!-- NFTMax User Profile -->

                        <div class="nftmax-pcats">

                            <!-- Profile Menu -->
                            <div class="nftmax-pcats__bar">
                                <div class="nftmax-pcats__list list-group " id="list-tab" role="tablist">
                                    <a class="list-group-item active" data-bs-toggle="list" href="#tab_1" role="tab" href="profile.html">Daftar Warga</a>
                                    <a class="list-group-item" data-bs-toggle="list" href="#tab_2" role="tab" href="profile.html">Peta Tanah Warga</a>
                                </div>
                                {{-- <button class="nftmax__item-button--single nftmax-btn nftmax-btn__bordered bg radius">Upload Product</button> --}}
                            </div>
                            <!-- End Profile Menu -->


                            <div class="tab-content" id="nav-tabContent">
                                <!-- Single Tab -->

                                <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="nftmax-pptabs mg-btm-20">
                                                <div class="nftmax-pptabs__form">
                                                    <form class="nftmax-header__form-inner nftmax-header__form-profile" action="#">
                                                        <button class="search-btn" type="submit"><img src="{{asset('tem/img/search.png')}}" alt="#"></button>
                                                        <input name="s" value="" type="text" placeholder="Search items, collections...">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nftmax-table">
                                        <div class="nftmax-table__heading">
                                            <h3 class="nftmax-table__title mb-0">Products History</h3>
                                            <ul class="nav nav-tabs  nftmax-dropdown__list" id="nav-tab" role="tablist">
                                                <li class="nav-item dropdown ">
                                                    <a class="nftmax-sidebar_btn nftmax-heading__tabs nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">All Categories <span class="nftmax-table__arrow--icon"><svg width="13" height="6" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.7" d="M12.4124 0.247421C12.3327 0.169022 12.2379 0.106794 12.1335 0.0643287C12.0291 0.0218632 11.917 0 11.8039 0C11.6908 0 11.5787 0.0218632 11.4743 0.0643287C11.3699 0.106794 11.2751 0.169022 11.1954 0.247421L7.27012 4.07837C7.19045 4.15677 7.09566 4.219 6.99122 4.26146C6.88678 4.30393 6.77476 4.32579 6.66162 4.32579C6.54848 4.32579 6.43646 4.30393 6.33202 4.26146C6.22758 4.219 6.13279 4.15677 6.05312 4.07837L2.12785 0.247421C2.04818 0.169022 1.95338 0.106794 1.84895 0.0643287C1.74451 0.0218632 1.63249 0 1.51935 0C1.40621 0 1.29419 0.0218632 1.18975 0.0643287C1.08531 0.106794 0.990517 0.169022 0.910844 0.247421C0.751218 0.404141 0.661621 0.616141 0.661621 0.837119C0.661621 1.0581 0.751218 1.2701 0.910844 1.42682L4.84468 5.26613C5.32677 5.73605 5.98027 6 6.66162 6C7.34297 6 7.99647 5.73605 8.47856 5.26613L12.4124 1.42682C12.572 1.2701 12.6616 1.0581 12.6616 0.837119C12.6616 0.616141 12.572 0.404141 12.4124 0.247421Z" fill="#374557" fill-opacity="0.6"></path></svg></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- NFTMax Table -->
                                        <table id="nftmax-table__main tabel1" class="table table-striped nftmax-table__main nftmax-table__profile-activity">
                                            <!-- NFTMax Table Head -->
                                            <thead class="nftmax-table__head">
                                                <tr>
                                                    <th class="nftmax-table__column-1 nftmax-table__h1">List</th>
                                                    <th class="nftmax-table__column-2 nftmax-table__h2">Products Name</th>
                                                    <th class="nftmax-table__column-3 nftmax-table__h2">Price</th>
                                                    <th class="nftmax-table__column-4 nftmax-table__h3">Quanitiy</th>
                                                    <th class="nftmax-table__column-5 nftmax-table__h4">From</th>
                                                    <th class="nftmax-table__column-6 nftmax-table__h5">To</th>
                                                    <th class="nftmax-table__column-7 nftmax-table__h6">Time</th>
                                                </tr>
                                            </thead>
                                            <!-- NFTMax Table Body -->
                                            <tbody class="nftmax-table__body">
                                                <tr>
                                                    <td class="nftmax-table__column-1 nftmax-table__data-1">
                                                        <span class="nftmax-table__text"><b>01</b></span>
                                                    </td>
                                                    <td class="nftmax-table__column-2 nftmax-table__data-2">
                                                        <div class="nftmax-table__product">
                                                            <div class="nftmax-table__product-img">
                                                                <img src="img/nft-table-img1.png" alt="#">
                                                            </div>
                                                            <div class="nftmax-table__product-content">
                                                                <h4 class="nftmax-table__product-title">Mullican Computer Joy</h4>
                                                                <p class="nftmax-table__product-desc">Owned by  <a href="#">Xoeyam</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-3 nftmax-table__data-3">
                                                        <div class="nftmax-table__amount nftmax-table__text-two">
                                                            <img src="img/usd-icon.png" alt="#"><span class="nftmax-table__text">6392.99$</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-4 nftmax-table__data-4">
                                                        <p class="nftmax-table__text nftmax-table__bid-text">343</p>
                                                    </td>
                                                    <td class="nftmax-table__column-5 nftmax-table__data-5">
                                                        <p class="nftmax-table__text nftmax-table__bid-text"><a href="#">Marvin McKinney</a></p>
                                                    </td>
                                                    <td class="nftmax-table__column-6 nftmax-table__data-6">
                                                        <p class="nftmax-table__text nftmax-table__time">you</p>
                                                    </td>
                                                    <td class="nftmax-table__column-7 nftmax-table__data-7">
                                                        <p class="nftmax-table__time">2 days ago</p>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="nftmax-table__column-1 nftmax-table__data-1">
                                                        <span class="nftmax-table__text"><b>02</b></span>
                                                    </td>
                                                    <td class="nftmax-table__column-2 nftmax-table__data-2">
                                                        <div class="nftmax-table__product">
                                                            <div class="nftmax-table__product-img">
                                                                <img src="img/nft-table-img2.png" alt="#">
                                                            </div>
                                                            <div class="nftmax-table__product-content">
                                                                <h4 class="nftmax-table__product-title">View Card by Jeff Davis</h4>
                                                                <p class="nftmax-table__product-desc">Owned by  <a href="#">Xoeyam</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-3 nftmax-table__data-3">
                                                        <div class="nftmax-table__amount nftmax-table__text-two">
                                                            <img src="img/usd-icon.png" alt="#"><span class="nftmax-table__text">6392.99$</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-4 nftmax-table__data-4">
                                                        <p class="nftmax-table__text nftmax-table__bid-text">343</p>
                                                    </td>
                                                    <td class="nftmax-table__column-5 nftmax-table__data-5">
                                                        <p class="nftmax-table__text nftmax-table__bid-text"><a href="#">Jerome Bell</a></p>
                                                    </td>
                                                    <td class="nftmax-table__column-6 nftmax-table__data-6">
                                                        <p class="nftmax-table__text nftmax-table__time">you</p>
                                                    </td>
                                                    <td class="nftmax-table__column-7 nftmax-table__data-7">
                                                        <p class="nftmax-table__time">2 days ago</p>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="nftmax-table__column-1 nftmax-table__data-1">
                                                        <span class="nftmax-table__text"><b>03</b></span>
                                                    </td>
                                                    <td class="nftmax-table__column-2 nftmax-table__data-2">
                                                        <div class="nftmax-table__product">
                                                            <div class="nftmax-table__product-img">
                                                                <img src="img/nft-table-img3.png" alt="#">
                                                            </div>
                                                            <div class="nftmax-table__product-content">
                                                                <h4 class="nftmax-table__product-title">Spanky &amp; Friends</h4>
                                                                <p class="nftmax-table__product-desc">Owned by  <a href="#">Xoeyam</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-3 nftmax-table__data-3">
                                                        <div class="nftmax-table__amount nftmax-table__text-two">
                                                            <img src="img/usd-icon.png" alt="#"><span class="nftmax-table__text">6392.99$</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-4 nftmax-table__data-4">
                                                        <p class="nftmax-table__text nftmax-table__bid-text">343</p>
                                                    </td>
                                                    <td class="nftmax-table__column-5 nftmax-table__data-5">
                                                        <p class="nftmax-table__text nftmax-table__bid-text"><a href="#">Savannah Nguyen</a></p>
                                                    </td>
                                                    <td class="nftmax-table__column-6 nftmax-table__data-6">
                                                        <p class="nftmax-table__text nftmax-table__time">you</p>
                                                    </td>
                                                    <td class="nftmax-table__column-7 nftmax-table__data-7">
                                                        <p class="nftmax-table__time">2 days ago</p>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="nftmax-table__column-1 nftmax-table__data-1">
                                                        <span class="nftmax-table__text"><b>04</b></span>
                                                    </td>
                                                    <td class="nftmax-table__column-2 nftmax-table__data-2">
                                                        <div class="nftmax-table__product">
                                                            <div class="nftmax-table__product-img">
                                                                <img src="img/nft-table-img3.png" alt="#">
                                                            </div>
                                                            <div class="nftmax-table__product-content">
                                                                <h4 class="nftmax-table__product-title">Intercnected Planes</h4>
                                                                <p class="nftmax-table__product-desc">Owned by  <a href="#">Xoeyam</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-3 nftmax-table__data-3">
                                                        <div class="nftmax-table__amount nftmax-table__text-two">
                                                            <img src="img/usd-icon.png" alt="#"><span class="nftmax-table__text">6392.99$</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-4 nftmax-table__data-4">
                                                        <p class="nftmax-table__text nftmax-table__bid-text">343</p>
                                                    </td>
                                                    <td class="nftmax-table__column-5 nftmax-table__data-5">
                                                        <p class="nftmax-table__text nftmax-table__bid-text"><a href="#">Eleanor Pena</a></p>
                                                    </td>
                                                    <td class="nftmax-table__column-6 nftmax-table__data-6">
                                                        <p class="nftmax-table__text nftmax-table__time">you</p>
                                                    </td>
                                                    <td class="nftmax-table__column-7 nftmax-table__data-7">
                                                        <p class="nftmax-table__time">2 days ago</p>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="nftmax-table__column-1 nftmax-table__data-1">
                                                        <span class="nftmax-table__text"><b>05</b></span>
                                                    </td>
                                                    <td class="nftmax-table__column-2 nftmax-table__data-2">
                                                        <div class="nftmax-table__product">
                                                            <div class="nftmax-table__product-img">
                                                                <img src="img/nft-table-img1.png" alt="#">
                                                            </div>
                                                            <div class="nftmax-table__product-content">
                                                                <h4 class="nftmax-table__product-title">Mullican Computer Joy</h4>
                                                                <p class="nftmax-table__product-desc">Owned by  <a href="#">Xoeyam</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-3 nftmax-table__data-3">
                                                        <div class="nftmax-table__amount nftmax-table__text-two">
                                                            <img src="img/usd-icon.png" alt="#"><span class="nftmax-table__text">6392.99$</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-4 nftmax-table__data-4">
                                                        <p class="nftmax-table__text nftmax-table__bid-text">343</p>
                                                    </td>
                                                    <td class="nftmax-table__column-5 nftmax-table__data-5">
                                                        <p class="nftmax-table__text nftmax-table__bid-text"><a href="#">Marvin McKinney</a></p>
                                                    </td>
                                                    <td class="nftmax-table__column-6 nftmax-table__data-6">
                                                        <p class="nftmax-table__text nftmax-table__time">you</p>
                                                    </td>
                                                    <td class="nftmax-table__column-7 nftmax-table__data-7">
                                                        <p class="nftmax-table__time">2 days ago</p>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="nftmax-table__column-1 nftmax-table__data-1">
                                                        <span class="nftmax-table__text"><b>06</b></span>
                                                    </td>
                                                    <td class="nftmax-table__column-2 nftmax-table__data-2">
                                                        <div class="nftmax-table__product">
                                                            <div class="nftmax-table__product-img">
                                                                <img src="img/nft-table-img2.png" alt="#">
                                                            </div>
                                                            <div class="nftmax-table__product-content">
                                                                <h4 class="nftmax-table__product-title">View Card by Jeff Davis</h4>
                                                                <p class="nftmax-table__product-desc">Owned by  <a href="#">Xoeyam</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-3 nftmax-table__data-3">
                                                        <div class="nftmax-table__amount nftmax-table__text-two">
                                                            <img src="img/usd-icon.png" alt="#"><span class="nftmax-table__text">6392.99$</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-4 nftmax-table__data-4">
                                                        <p class="nftmax-table__text nftmax-table__bid-text">343</p>
                                                    </td>
                                                    <td class="nftmax-table__column-5 nftmax-table__data-5">
                                                        <p class="nftmax-table__text nftmax-table__bid-text"><a href="#">Jerome Bell</a></p>
                                                    </td>
                                                    <td class="nftmax-table__column-6 nftmax-table__data-6">
                                                        <p class="nftmax-table__text nftmax-table__time">you</p>
                                                    </td>
                                                    <td class="nftmax-table__column-7 nftmax-table__data-7">
                                                        <p class="nftmax-table__time">2 days ago</p>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="nftmax-table__column-1 nftmax-table__data-1">
                                                        <span class="nftmax-table__text"><b>07</b></span>
                                                    </td>
                                                    <td class="nftmax-table__column-2 nftmax-table__data-2">
                                                        <div class="nftmax-table__product">
                                                            <div class="nftmax-table__product-img">
                                                                <img src="img/nft-table-img3.png" alt="#">
                                                            </div>
                                                            <div class="nftmax-table__product-content">
                                                                <h4 class="nftmax-table__product-title">Spanky &amp; Friends</h4>
                                                                <p class="nftmax-table__product-desc">Owned by  <a href="#">Xoeyam</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-3 nftmax-table__data-3">
                                                        <div class="nftmax-table__amount nftmax-table__text-two">
                                                            <img src="img/usd-icon.png" alt="#"><span class="nftmax-table__text">6392.99$</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-4 nftmax-table__data-4">
                                                        <p class="nftmax-table__text nftmax-table__bid-text">343</p>
                                                    </td>
                                                    <td class="nftmax-table__column-5 nftmax-table__data-5">
                                                        <p class="nftmax-table__text nftmax-table__bid-text"><a href="#">Savannah Nguyen</a></p>
                                                    </td>
                                                    <td class="nftmax-table__column-6 nftmax-table__data-6">
                                                        <p class="nftmax-table__text nftmax-table__time">you</p>
                                                    </td>
                                                    <td class="nftmax-table__column-7 nftmax-table__data-7">
                                                        <p class="nftmax-table__time">2 days ago</p>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="nftmax-table__column-1 nftmax-table__data-1">
                                                        <span class="nftmax-table__text"><b>08</b></span>
                                                    </td>
                                                    <td class="nftmax-table__column-2 nftmax-table__data-2">
                                                        <div class="nftmax-table__product">
                                                            <div class="nftmax-table__product-img">
                                                                <img src="img/nft-table-img3.png" alt="#">
                                                            </div>
                                                            <div class="nftmax-table__product-content">
                                                                <h4 class="nftmax-table__product-title">Intercnected Planes</h4>
                                                                <p class="nftmax-table__product-desc">Owned by  <a href="#">Xoeyam</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-3 nftmax-table__data-3">
                                                        <div class="nftmax-table__amount nftmax-table__text-two">
                                                            <img src="img/usd-icon.png" alt="#"><span class="nftmax-table__text">6392.99$</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-4 nftmax-table__data-4">
                                                        <p class="nftmax-table__text nftmax-table__bid-text">343</p>
                                                    </td>
                                                    <td class="nftmax-table__column-5 nftmax-table__data-5">
                                                        <p class="nftmax-table__text nftmax-table__bid-text"><a href="#">Eleanor Pena</a></p>
                                                    </td>
                                                    <td class="nftmax-table__column-6 nftmax-table__data-6">
                                                        <p class="nftmax-table__text nftmax-table__time">you</p>
                                                    </td>
                                                    <td class="nftmax-table__column-7 nftmax-table__data-7">
                                                        <p class="nftmax-table__time">2 days ago</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="nftmax-table__column-1 nftmax-table__data-1">
                                                        <span class="nftmax-table__text"><b>09</b></span>
                                                    </td>
                                                    <td class="nftmax-table__column-2 nftmax-table__data-2">
                                                        <div class="nftmax-table__product">
                                                            <div class="nftmax-table__product-img">
                                                                <img src="img/nft-table-img3.png" alt="#">
                                                            </div>
                                                            <div class="nftmax-table__product-content">
                                                                <h4 class="nftmax-table__product-title">Spanky &amp; Friends</h4>
                                                                <p class="nftmax-table__product-desc">Owned by  <a href="#">Xoeyam</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-3 nftmax-table__data-3">
                                                        <div class="nftmax-table__amount nftmax-table__text-two">
                                                            <img src="img/usd-icon.png" alt="#"><span class="nftmax-table__text">6392.99$</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-4 nftmax-table__data-4">
                                                        <p class="nftmax-table__text nftmax-table__bid-text">343</p>
                                                    </td>
                                                    <td class="nftmax-table__column-5 nftmax-table__data-5">
                                                        <p class="nftmax-table__text nftmax-table__bid-text"><a href="#">Savannah Nguyen</a></p>
                                                    </td>
                                                    <td class="nftmax-table__column-6 nftmax-table__data-6">
                                                        <p class="nftmax-table__text nftmax-table__time">you</p>
                                                    </td>
                                                    <td class="nftmax-table__column-7 nftmax-table__data-7">
                                                        <p class="nftmax-table__time">2 days ago</p>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="nftmax-table__column-1 nftmax-table__data-1">
                                                        <span class="nftmax-table__text"><b>10</b></span>
                                                    </td>
                                                    <td class="nftmax-table__column-2 nftmax-table__data-2">
                                                        <div class="nftmax-table__product">
                                                            <div class="nftmax-table__product-img">
                                                                <img src="img/nft-table-img3.png" alt="#">
                                                            </div>
                                                            <div class="nftmax-table__product-content">
                                                                <h4 class="nftmax-table__product-title">Intercnected Planes</h4>
                                                                <p class="nftmax-table__product-desc">Owned by  <a href="#">Xoeyam</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-3 nftmax-table__data-3">
                                                        <div class="nftmax-table__amount nftmax-table__text-two">
                                                            <img src="img/usd-icon.png" alt="#"><span class="nftmax-table__text">6392.99$</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-4 nftmax-table__data-4">
                                                        <p class="nftmax-table__text nftmax-table__bid-text">343</p>
                                                    </td>
                                                    <td class="nftmax-table__column-5 nftmax-table__data-5">
                                                        <p class="nftmax-table__text nftmax-table__bid-text"><a href="#">Eleanor Pena</a></p>
                                                    </td>
                                                    <td class="nftmax-table__column-6 nftmax-table__data-6">
                                                        <p class="nftmax-table__text nftmax-table__time">you</p>
                                                    </td>
                                                    <td class="nftmax-table__column-7 nftmax-table__data-7">
                                                        <p class="nftmax-table__time">2 days ago</p>
                                                    </td>
                                                </tr>

                                            </tbody>
                                            <!-- End NFTMax Table Body -->
                                        </table>
                                        <!-- End NFTMax Table -->
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab_2" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="nftmax-table mt-3">
                                        <div class="nftmax-table__heading">
                                            <h3 class="nftmax-table__title mb-0">Peta Tanah Warga</h3>
                                        </div>
                                        <!-- NFTMax Table -->
                                        <div id="map" style="width: 100%; height: 500px;" class="nftmax-table__main nftmax-table__main-v1">

                                        </div>
                                        <!-- End NFTMax Table -->
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>
                    <!-- End Dashboard Inner -->
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
@section('script')
<script>
    new DataTable('#tabel1');
</script>
{{-- <script>
    mapboxgl.accessToken = 'pk.eyJ1IjoicmV6YWhhd2FyaSIsImEiOiJjbTl5c3ZqdnAwZGRyMmlzaHYydmZkdjRxIn0.WeGiOEUai4u3JUjSyP2MNA';
    var map = new mapboxgl.Map({
        container: 'map', // ID div tempat peta akan ditampilkan
        style: 'mapbox://styles/mapbox/streets-v11', // Style peta
        center: [110.428047, -7.001551], // Koordinat peta (longitude, latitude)
        zoom: 12 // Zoom level
    });
    map.on('load', function () {
            // Memuat file GeoJSON dari folder public/geojson/data.geojson
            fetch('/geojson/id3374050_semarang_selatan.geojson')
                .then(response => response.json())
                .then(data => {
                    // Menambahkan sumber GeoJSON ke peta
                    map.addSource('nyc-data', {
                        'type': 'geojson',
                        'data': data
                    });

                    // Menambahkan layer untuk menampilkan titik GeoJSON
                    map.addLayer({
                        'id': 'nyc-point-layer',
                        'type': 'fill',
                        'source': 'nyc-data',
                        'paint': {
                            'fill-color': '#00FF00',   // Warna pengisian poligon
                            'fill-opacity': 0.5,         // Transparansi pengisian
                        }
                    });

                    map.addLayer({
                        'id': 'outline-layer',  // ID untuk layer garis outline
                        'type': 'line',
                        'source': 'nyc-data',  // Sumber yang sama dengan layer fill
                        'paint': {
                            'line-color': '#FF0000',    // Warna garis outline
                            'line-width': 2,            // Ketebalan garis outline
                            'line-opacity': 1          // Transparansi garis
                        }
                    });

                    map.on('click', 'nyc-fill-layer', function (e) {
                        // Mendapatkan fitur yang diklik
                        var features = map.queryRenderedFeatures(e.point, {
                            layers: ['nyc-fill-layer']
                        });

                        if (features.length > 0) {
                            var feature = features[0]; // Fitur pertama yang diklik

                            // Menampilkan data di popup
                            new mapboxgl.Popup()
                                .setLngLat(feature.geometry.coordinates) // Lokasi popup
                                .setHTML('<h3>' + feature.properties.village + '</h3><p>' + feature.properties.district + '</p>')
                                .addTo(map);
                        }
                    });

                    // Ubah kursor saat hover pada fitur
                    map.on('mouseenter', 'nyc-fill-layer', function () {
                        map.getCanvas().style.cursor = 'pointer';
                    });

                    // Kembalikan kursor ke normal setelah keluar dari fitur
                    map.on('mouseleave', 'nyc-fill-layer', function () {
                        map.getCanvas().style.cursor = '';
                    });


                })
                .catch(error => {
                    console.error('Error loading GeoJSON data:', error);
                });
        });
</script> --}}
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoicmV6YWhhd2FyaSIsImEiOiJjbTl5c3ZqdnAwZGRyMmlzaHYydmZkdjRxIn0.WeGiOEUai4u3JUjSyP2MNA';
    var map = new mapboxgl.Map({
        container: 'map', // ID div tempat peta akan ditampilkan
        style: 'mapbox://styles/mapbox/streets-v11', // Style peta
        center: [110.428047, -7.001551], // Koordinat peta (longitude, latitude)
        zoom: 12 // Zoom level
    });

    map.on('load', function () {
        // Memuat file GeoJSON dari folder public/geojson/data.geojson
        fetch('/geojson/id3374050_semarang_selatan.geojson')
            .then(response => response.json())
            .then(data => {
                // Menambahkan sumber GeoJSON ke peta
                map.addSource('nyc-data', {
                    'type': 'geojson',
                    'data': data
                });

                // Menambahkan layer untuk menampilkan poligon (fill)
                map.addLayer({
                    'id': 'nyc-fill-layer',  // ID untuk layer fill
                    'type': 'fill',
                    'source': 'nyc-data',
                    'paint': {
                        'fill-color': '#00FF00',   // Warna pengisian poligon
                        'fill-opacity': 0.5,         // Transparansi pengisian
                    }
                });

                // Menambahkan layer untuk menampilkan garis outline
                map.addLayer({
                    'id': 'outline-layer',  // ID untuk layer garis outline
                    'type': 'line',
                    'source': 'nyc-data',  // Sumber yang sama dengan layer fill
                    'paint': {
                        'line-color': '#FF0000',    // Warna garis outline
                        'line-width': 2,            // Ketebalan garis outline
                        'line-opacity': 1          // Transparansi garis
                    }
                });

                // Event listener untuk klik pada layer fill dan outline
                map.on('click', 'nyc-fill-layer', function (e) {
                    // Mendapatkan fitur yang diklik
                    var features = map.queryRenderedFeatures(e.point, {
                        layers: ['nyc-fill-layer']
                    });

                    if (features.length > 0) {
                        var feature = features[0];  // Mendapatkan fitur pertama yang diklik

                        // Mengambil data properti
                        var village = feature.properties.village;
                        var district = feature.properties.district;

                        // Menampilkan data di popup
                        new mapboxgl.Popup()
                            .setLngLat(e.lngLat)  // Lokasi popup pada titik yang diklik
                            .setHTML('<h3>' + village + '</h3><p>' + district + '</p>')
                            .addTo(map);
                    }
                });

                // Ubah kursor saat hover pada fitur
                map.on('mouseenter', 'nyc-fill-layer', function () {
                    map.getCanvas().style.cursor = 'pointer';
                });

                // Kembalikan kursor ke normal setelah keluar dari fitur
                map.on('mouseleave', 'nyc-fill-layer', function () {
                    map.getCanvas().style.cursor = '';
                });
            })
            .catch(error => {
                console.error('Error loading GeoJSON data:', error);
            });
    });
</script>

@endsection
