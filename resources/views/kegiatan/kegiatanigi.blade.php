@extends('template.template')
@section('content')
    <div style="margin-left: -11px;" class="bg-primary ms-1 mt-3 col-12 py-2 text-center fw-bold text-light mb-2">KEGIATAN
        IGI
    </div>
    <div class="row">
        @forelse ($kegiatan as $artikel)
            <div class="card col-lg-4 col-md-6 pe-2 ani">
                <a href="/showartikel/{{ $artikel->slug }}">
                    @if (file_exists(public_path('article-img/' . $artikel->image)))
                        <img src="{{ 'article-img/' . $artikel->image }}" class="ftk card-img-top pt-2" alt="..."
                            height="170px">
                    @else
                        <img src="{{ asset('storage/' . $artikel->image) }}" class="ftk card-img-top pt-2" alt="..."
                            height="170px">
                        <p class="bg-primary artikel text-center mb-2 pt-1 pb-1" style="color:white; font-size: 12px;">
                            {{ $artikel->category->name }}</p>
                    @endif
                    <div class="card-body">
                        <a class="fw-bold" style="color: #0F00FF;"
                            href="/showartikel/{{ $artikel->slug }}">{{ Str::words($artikel->title, 5) }}</a>
                        <p>{{ Str::words($artikel->excerpt, 25) }}</p>
                    </div>
            </div>
            </a>
        @empty
            <div class="btn btn-danger">
                Tidak Ada Artikel
            </div>
        @endforelse
    </div>
@endsection
