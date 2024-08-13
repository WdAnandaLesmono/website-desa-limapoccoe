@extends('layouts.main')

@section('body')
    {{-- carousel --}}
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/carousel1.jpg" class="d-block w-100" alt="carousel1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Selamat Datang di Desa Limapoccoe</h5>
                    <p>Kecamatan Cenrana, Kabupaten Maros</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/carousel2.jpg" class="d-block w-100" alt="carousel2">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/carousel3.jpg" class="d-block w-100" alt="carousel3">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- about singkat --}}
    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col text-start">
                <h3 class="mb-4" style="color: #365E32">Website Desa Limapoccoe</h3>
                <p>Website desa ini dibangun dan dikelola oleh tim pemerintah Desa Limapoccoe dengan tujuan sebagai media
                    pelayanan publik resmi desa. Melalui website ini, penyelenggaraan pelayanan publik bagi warga desa dapat
                    dilakukan dengan lebih mudah dan efektif. Selain itu, website desa berguna sebagai media publikasi
                    kegiatan desa demi pemerintahan yang lebih transparan.</p>
            </div>
            <div class="col text-center">
                <img class="image-about" src="/img/carousel3.jpg" alt="" style="width: 400px">
            </div>
        </div>
    </div>

    {{-- peta --}}
    <div class="container-fluid" style="background-color: #365E32; padding: 20px">
        <h3 class="text-center mb-4" style="color: #E7D37F">PETA DESA LIMAPOCCOE</h3>
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63595.171511235654!2d119.75892466725568!3d-4.989714107717953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbe8ab0aeac6a13%3A0x51b73738e9481b09!2sLimpoccoe%2C%20Kec.%20Cenrana%2C%20Kabupaten%20Maros%2C%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1723438636379!5m2!1sid!2sid"
                allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    {{-- galeri --}}
    <div class="container-fluid text-center my-5">
        <h3 class="pb-2" style="border-bottom: 2px solid #365E32; display: inline; color: #365E32">Galeri Desa</h3>
        <div class="row my-5">
            <div class="col-6 col-md-4 col-lg-3 gallery-item">
                <img src="/img/galeri1.jpg" class="gallery-img" alt="Placeholder Image 1">
                <span style="color: #81A263"><b>Memperingati tahun baru islam</b></span>
                <span><b></b></span>
            </div>
            <div class="col-6 col-md-4 col-lg-3 gallery-item">
                <img src="/img/galeri2.jpg" class="gallery-img" alt="Placeholder Image 2">
                <span style="color: #81A263"><b>Musyawarah desa pembentukan tim penyusun RKPdes dan pengusulan draf RKPdes untuk TA 2025</b></span>
            </div>
            <div class="col-6 col-md-4 col-lg-3 gallery-item">
                <img src="/img/galeri3.jpg" class="gallery-img" alt="Placeholder Image 3">
                <span style="color: #81A263"><b>Pengecekan keasaman tanah bersama Kelompok Tani Raodhatul Jannah</b></span>
            </div>
            <div class="col-6 col-md-4 col-lg-3 gallery-item">
                <img src="/img/galeri4.jpg" class="gallery-img" alt="Placeholder Image 4">
                <span style="color: #81A263"><b>Warga lokal yang mengunjungi Telaga Bidadari</b></span>
            </div>
            <div class="col-6 col-md-4 col-lg-3 gallery-item">
                <img src="/img/galeri5.jpg" class="gallery-img" alt="Placeholder Image 5">
                <span style="color: #81A263"><b>Wisata puncak Bontopanno</b></span>
            </div>
            <div class="col-6 col-md-4 col-lg-3 gallery-item">
                <img src="/img/galeri6.jpg" class="gallery-img" alt="Placeholder Image 6">
                <span style="color: #81A263"><b>Sosialisasi gmaps di SMAN 12 Maros</b></span>
            </div>
            <div class="col-6 col-md-4 col-lg-3 gallery-item">
                <img src="/img/galeri7.jpg" class="gallery-img" alt="Placeholder Image 7">
            </div>
            <div class="col-6 col-md-4 col-lg-3 gallery-item">
                <img src="/img/galeri8.jpg" class="gallery-img" alt="Placeholder Image 8">
            </div>
        </div>
    </div>

    {{-- berita --}}
    <div class="container-fluid my-5">
        <div class="col text-center">
            <h3 class="pb-2" style="border-bottom: 2px solid #365E32; display: inline; color: #365E32">Berita</h3>
        </div>
        <div class="row justify-co  ntent-center my-5">
            @foreach ($beritas as $berita)
                <div class="col d-flex justify-content-center mb-3">
                    <div class="card card-berita shadow-lg" style="width: 18rem; background-color: #81A263">
                        <img src="{{ asset('storage/' . $berita->image) }}" class="card-img-top" alt="berita-images">
                        <div class="card-body">
                            <h5 class="card-title">{{ $berita->title }}</h5>
                            <p class="card-text">{{ $berita->excerpt }}</p>
                            <a href="/admin/{{ $berita->id }}" class="btn btn-success"
                                style="width: 150px; font-size: 11px;">Baca
                                berita</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
