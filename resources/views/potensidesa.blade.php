@extends('layouts.main')

@section('body')
    <div class="container-fluid">
        <h3 class="my-5 text-center">Potensi Desa</h3>
        <div class="container potensi desa">
            <div class="row">
                <div class="col">
                    <div class="card mb-3 mx-5" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/img/sektor_pertanian.jpg" class="img-fluid rounded-start" alt="sektor pertanian"
                                    style="height: 100%; object-fit: cover">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Sektor Pertanian</h5>
                                    <p class="card-text"><small>Pertanian di Limapoccoe dimulai dengan musim tanam padi
                                            sekitar
                                            bulan Desember hingga Februari. Kemudian musim panen dilakukan pada bulan April.
                                            Adapun luas keseluruhan sawah di Desa Limapoccoe sebesar 378 ha. Sementara, di
                                            bulan
                                            Juni hingga Juli para petani menanam tanaman palawija seperti kacang-kacangan,
                                            jagung, dan singkong. Wilayah perkebunan di Desa Limapoccoe sendiri seluas 166
                                            ha.</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 mx-5" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/img/sektor_peternakan.jpg" class="img-fluid rounded-start" alt="..."
                                    style="height: 100%; object-fit: cover">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Sektor Peternakan</h5>
                                    <p class="card-text"><small>
                                            Sebagian besar penduduk Desa Limapoccoe bekerja sebagai seorang peternak sapi, ayam petelur, dan kuda.
                                            Pendapatan para peternak sapi per dua tahun bisa mencapai 10-20 juta per satu
                                            ekor sapi. Pangan sapi sendiri menggunakan rumput yang diberi satu kali satu
                                            hari. Oleh karena itu, dibutuhkannya pelatihan dan pengajaran mengenai rumput
                                            fermentasi untuk pangan sapi. Selain itu, beberapa warga merupakan peternak ayam
                                            petelur.</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 mx-5" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/img/sektor_perikanan.jpg" class="img-fluid rounded-start" alt="..."
                                    style="height: 100%; object-fit: cover">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Sektor Perikanan</h5>
                                    <p class="card-text"><small>
                                            Sebagian besar penduduk Desa Limapoccoe bekerja sebagai seorang peternak sapi.
                                            Pendapatan para peternak sapi per dua tahun bisa mencapai 10-20 juta per satu
                                            ekor sapi. Pangan sapi sendiri menggunakan rumput yang diberi satu kali satu
                                            hari. Oleh karena itu, dibutuhkannya pelatihan dan pengajaran mengenai rumput
                                            fermentasi untuk pangan sapi. Selain itu, beberapa warga merupakan peternak ayam
                                            petelur.</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 mx-5" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/img/carousel2.jpg" class="img-fluid rounded-start" alt="..."
                                    style="height: 100%; object-fit: cover">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Sektor Pembangunan</h5>
                                    <p class="card-text"><small>
                                            Pengerjaan infrastruktur desa sendiri khususnya akses jalan sudah mencapai angka
                                            89%. Sementara, bagian fasilitas pendidikan dan kesehatan
                                            telah mencapai 90%.</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container px-5 py-5 mb-5" style="background-color: #81A263; border-radius: 10px">
                        <h4 class="text-center mb-4">Tempat Wisata</h4>
                        <div class="card text-bg-dark mb-4">
                            <img src="/img/telaga_bidadari.jpg" class="card-img" alt="Telaga Bidadari">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Telaga Bidadari</h5>
                                <p class="card-text"><small>Telaga Bidadari memanjakan mata dengan birunya air telaga yang
                                        dikelilingi bebatuan. Akses menuju Telaga Bidadari juga tidak kalah indahnya. Saat
                                        menuju ke telaga, pelancong akan melewati indahnya hutan pinus.
                                    </small></p>
                            </div>
                        </div>
                        <div class="card text-bg-dark mb-4">
                            <img src="/img/bukit_teletabis.jpg" class="card-img" alt="Bukit Teletubbies">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Bukit Teletubbies</h5>
                                <p class="card-text"><small>Bukit Teletubbies menawarkan panorama pegunungan indah yang
                                        dikelilingi hamparan sawah. Waktu yang paling tepat untuk mengunjungi bukit
                                        teletubbies yaitu pada waktu sore.
                                    </small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
