@extends('layouts.main')

@section('body')
    <div class="container-fluid my-5">
        <div class="col text-center">
            <h3 class="pb-2" style="border-bottom: 2px solid #365E32; display: inline; color: #365E32">Berita</h3>
        </div>
        <div class="row justify-content-center my-5">
            @foreach ($beritas as $berita)
            <div class="col d-flex justify-content-center mb-3">
                <div class="card card-berita shadow-lg" style="width: 18rem; background-color: #81A263">
                    <img src="{{ asset('storage/' . $berita->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $berita->title }}</h5>
                        <p class="card-text">{{ $berita->excerpt }}</p>
                        <a href="/berita/{{ $berita->id }}" class="btn btn-success" style="width: 150px; font-size: 11px;">Baca
                            Berita</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection