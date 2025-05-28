@extends('layouts.layouts')
@section('nav')
    @include('layouts.nav')
@endsection
@section('style')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/index.global.min.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        });
        calendar.render();
      });

    </script>
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
                                    <a class="list-group-item active" data-bs-toggle="list" href="#tab_1" role="tab" href="profile.html">Kalender Kegiatan</a>
                                </div>
                                {{-- <button class="nftmax__item-button--single nftmax-btn nftmax-btn__bordered bg radius">Upload Product</button> --}}
                            </div>
                            <!-- End Profile Menu -->


                            <div class="tab-content" id="nav-tabContent">
                                <!-- Single Tab -->

                                <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="row">
                                        {{-- <div class="col-12">
                                            <div class="nftmax-pptabs mg-btm-20">
                                                <div class="nftmax-pptabs__form">
                                                    <form class="nftmax-header__form-inner nftmax-header__form-profile" action="#">
                                                        <button class="search-btn" type="submit"><img src="{{asset('tem/img/search.png')}}" alt="#"></button>
                                                        <input name="s" value="" type="text" placeholder="Search items, collections...">
                                                    </form>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="nftmax-table mt-3">
                                        <div class="nftmax-table__heading">
                                            <h3 class="nftmax-table__title mb-0">Kalendner Kegiatan</h3>
                                            <ul class="nav nav-tabs  nftmax-dropdown__list" id="nav-tab" role="tablist">
                                                <li class="nav-item dropdown ">
                                                    {{-- <a class="nftmax-sidebar_btn nftmax-heading__tabs nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">All Categories <span class="nftmax-table__arrow--icon"><svg width="13" height="6" viewBox="0 0 13 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.7" d="M12.4124 0.247421C12.3327 0.169022 12.2379 0.106794 12.1335 0.0643287C12.0291 0.0218632 11.917 0 11.8039 0C11.6908 0 11.5787 0.0218632 11.4743 0.0643287C11.3699 0.106794 11.2751 0.169022 11.1954 0.247421L7.27012 4.07837C7.19045 4.15677 7.09566 4.219 6.99122 4.26146C6.88678 4.30393 6.77476 4.32579 6.66162 4.32579C6.54848 4.32579 6.43646 4.30393 6.33202 4.26146C6.22758 4.219 6.13279 4.15677 6.05312 4.07837L2.12785 0.247421C2.04818 0.169022 1.95338 0.106794 1.84895 0.0643287C1.74451 0.0218632 1.63249 0 1.51935 0C1.40621 0 1.29419 0.0218632 1.18975 0.0643287C1.08531 0.106794 0.990517 0.169022 0.910844 0.247421C0.751218 0.404141 0.661621 0.616141 0.661621 0.837119C0.661621 1.0581 0.751218 1.2701 0.910844 1.42682L4.84468 5.26613C5.32677 5.73605 5.98027 6 6.66162 6C7.34297 6 7.99647 5.73605 8.47856 5.26613L12.4124 1.42682C12.572 1.2701 12.6616 1.0581 12.6616 0.837119C12.6616 0.616141 12.572 0.404141 12.4124 0.247421Z" fill="#374557" fill-opacity="0.6"></path></svg></span></a> --}}
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- NFTMax Table -->
                                        <div id='calendar'></div>
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

    <!-- Modal detail warga -->
    <div class="modal fade" id="modaldetailwarga" tabindex="-1" aria-labelledby="modaldetailwargaLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modaldetailwargaLabel">Detail Warga</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td>Nama</td>
                                <td>: Michael</td>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td>: 3372141823714328</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>: Jl Gergaji</td>
                            </tr>
                            <tr>
                                <td>Hubungan Keluarga</td>
                                <td>: Bapak</td>
                            </tr>
                            <tr>
                                <td>Warga Sejak</td>
                                <td>: 2025-01-01</td>
                            </tr>
                        </table>
                    </div>
                    <hr>
                    <h3>Detail KK</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Michael</td>
                                    <td>3372141823714328</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaldokumen">Lihat Dokumen</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal dokumen warga --}}
    <div class="modal fade" id="modaldokumen" tabindex="-1" aria-labelledby="modaldokumenLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modaldokumenLabel">Dokumen</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row nftmax-gap-sq30 ">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="nftmax-collection__single">
                                    <div class="nftmax-collection__head">
                                        <a href="#"><img class="nftmax-collection__img" src="{{asset('pdflogo.png')}}" width="50%" alt="#"></a>
                                    </div>
                                    <div class="nftmax-collection__body">
                                        <div class="nftmax-collection__author">
                                            <div class="nftmax-collection__author-head">
                                                <a href="#">
                                                    <h4 class="nftmax-collection__title">KTP</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="nftmax-collection__single">
                                    <div class="nftmax-collection__head">
                                        <a href="#"><img class="nftmax-collection__img" src="{{asset('pdflogo.png')}}" width="50%" alt="#"></a>
                                    </div>
                                    <div class="nftmax-collection__body">
                                        <div class="nftmax-collection__author">
                                            <div class="nftmax-collection__author-head">
                                                <a href="#">
                                                    <h4 class="nftmax-collection__title">KK</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaldetailwarga">Kembali</button> --}}
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')


@endsection
