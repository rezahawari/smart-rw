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
                        <div class="nftmax-inner__heading mg-btm-20">
                            <h2 class="nftmax-inner__page-title m-0">Pengajuan</h2>
                        </div>

                        <div class="row nftmax-gap-sq30 ">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="nftmax-collection__single">
                                    <div class="nftmax-collection__head">
                                        <a href="#"><img class="nftmax-collection__img" src="{{asset('tem/img/surat-domisili.png')}}" alt="#"></a>
                                    </div>
                                    <div class="nftmax-collection__body">
                                        <div class="nftmax-collection__author">
                                            <div class="nftmax-collection__author-head">
                                                <a href="#">
                                                    <h4 class="nftmax-collection__title">Surat Keterangan Domisili</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="nftmax-collection__single">
                                    <div class="nftmax-collection__head">
                                        <a href="#"><img class="nftmax-collection__img" src="{{asset('tem/img/surat-pengantar.png')}}" alt="#"></a>
                                    </div>
                                    <div class="nftmax-collection__body">
                                        <div class="nftmax-collection__author">
                                            <div class="nftmax-collection__author-head">
                                                <a href="#">
                                                    <h4 class="nftmax-collection__title">Surat Pengantar Pembuatan KTP</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="nftmax-collection__single">
                                    <div class="nftmax-collection__head">
                                        <a href="#"><img class="nftmax-collection__img" src="{{asset('tem/img/acara-warga.png')}}" alt="#"></a>
                                    </div>
                                    <div class="nftmax-collection__body">
                                        <div class="nftmax-collection__author">
                                            <div class="nftmax-collection__author-head">
                                                <a href="#">
                                                    <h4 class="nftmax-collection__title">Surat Izin Mengadakan Kegiatan</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="nftmax-collection__single">
                                    <div class="nftmax-collection__head">
                                        <a href="#"><img class="nftmax-collection__img" src="{{asset('tem/img/kerja-bakti.png')}}" alt="#"></a>
                                    </div>
                                    <div class="nftmax-collection__body">
                                        <div class="nftmax-collection__author">
                                            <div class="nftmax-collection__author-head">
                                                <a href="#">
                                                    <h4 class="nftmax-collection__title">Surat Permohonan Izin Kerja Bakti atau Pembangunan</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="nftmax-collection__single">
                                    <div class="nftmax-collection__head">
                                        <a href="#"><img class="nftmax-collection__img" src="{{asset('tem/img/surat-miskin.png')}}" alt="#"></a>
                                    </div>
                                    <div class="nftmax-collection__body">
                                        <div class="nftmax-collection__author">
                                            <div class="nftmax-collection__author-head">
                                                <a href="#">
                                                    <h4 class="nftmax-collection__title">Surat Keterangan Tidak Mampu (SKTM)</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="nftmax-collection__single">
                                    <div class="nftmax-collection__head">
                                        <a href="#"><img class="nftmax-collection__img" src="{{asset('tem/img/bansos.png')}}" alt="#"></a>
                                    </div>
                                    <div class="nftmax-collection__body">
                                        <div class="nftmax-collection__author">
                                            <div class="nftmax-collection__author-head">
                                                <a href="#">
                                                    <h4 class="nftmax-collection__title">Surat Pengantar Pengajuan Bantuan Sosial</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="nftmax-collection__single">
                                    <div class="nftmax-collection__head">
                                        <a href="#"><img class="nftmax-collection__img" src="{{asset('tem/img/col-1.png')}}" alt="#"></a>
                                    </div>
                                    <div class="nftmax-collection__body">
                                        <div class="nftmax-collection__author">
                                            <div class="nftmax-collection__author-head">
                                                <a href="#">
                                                    <h4 class="nftmax-collection__title">Surat Rekomendasi RT/RW untuk Pindah Alamat</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="nftmax-collection__single">
                                    <div class="nftmax-collection__head">
                                        <a href="#"><img class="nftmax-collection__img" src="{{asset('tem/img/col-1.png')}}" alt="#"></a>
                                    </div>
                                    <div class="nftmax-collection__body">
                                        <div class="nftmax-collection__author">
                                            <div class="nftmax-collection__author-head">
                                                <a href="#">
                                                    <h4 class="nftmax-collection__title">Surat Rekomendasi Izin Usaha</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="nftmax-collection__single">
                                    <div class="nftmax-collection__head">
                                        <a href="#"><img class="nftmax-collection__img" src="{{asset('tem/img/col-1.png')}}" alt="#"></a>
                                    </div>
                                    <div class="nftmax-collection__body">
                                        <div class="nftmax-collection__author">
                                            <div class="nftmax-collection__author-head">
                                                <a href="#">
                                                    <h4 class="nftmax-collection__title">Surat Keterangan Kematian</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="nftmax-collection__single">
                                    <div class="nftmax-collection__head">
                                        <a href="#"><img class="nftmax-collection__img" src="{{asset('tem/img/col-1.png')}}" alt="#"></a>
                                    </div>
                                    <div class="nftmax-collection__body">
                                        <div class="nftmax-collection__author">
                                            <div class="nftmax-collection__author-head">
                                                <a href="#">
                                                    <h4 class="nftmax-collection__title">Surat Keterangan Kelahiran</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="nftmax-collection__single">
                                    <div class="nftmax-collection__head">
                                        <a href="#"><img class="nftmax-collection__img" src="{{asset('tem/img/col-1.png')}}" alt="#"></a>
                                    </div>
                                    <div class="nftmax-collection__body">
                                        <div class="nftmax-collection__author">
                                            <div class="nftmax-collection__author-head">
                                                <a href="#">
                                                    <h4 class="nftmax-collection__title">Surat Rekomendasi Untuk Pengajuan Beasiswa</h4>
                                                </a>
                                            </div>
                                        </div>
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

