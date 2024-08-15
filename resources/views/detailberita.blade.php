@extends('layouts.main')

@section('body')
    <div class="container-fluid show-berita py-3">
        <h3 class="pt-5 pb-2 text-center" style="margin: 0">{{ $berita->title }}</h3>
        <div class="container mb-5 text-center">
            <span class="me-3" style="font-size: 12px"><i class="fas fa-user fa-lg me-1"></i>{{ $berita->author }}</span>
            @php
                use Carbon\Carbon;
                Carbon::setLocale('id');
            @endphp
            <span style="font-size: 12px"><i
                    class="fas fa-calendar-day me-1"></i>{{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('l, d F Y') }}</span>
        </div>
        <img class="mb-2" src="{{ asset('storage/' . $berita->image) }}" alt="image-berita"
            style="width: 100%; height: auto;">
        <p class="pb-5" style="font-size: 12px">{{ $berita->img_description }}</p>
        <article class="pb-3 text-start" style="margin: 0">{!! $berita->body !!}</article>
    </div>
@endsection
