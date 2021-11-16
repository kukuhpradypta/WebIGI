@extends('template.template')
@section('content')
    <div class="bg-primary col-12 py-2 ps-3 fw-bold text-light mb-2" style="width: 103%; margin-left: -11px;">ARTIKEL TERBARU
    </div>
    <div class="row">
        @forelse ($article as $artikel)
            <div class="card col-lg-4 col-md-6 pe-2 ani">
                <a href="/showartikel/{{ $artikel->slug }}">
                    @if (file_exists(public_path('article-img/' . $artikel->image)))
                        <img src="{{ 'article-img/' . $artikel->image }}" class="ftk card-img-top pt-2" alt="..."
                            height="170px">
                    @else
                        <img src="{{ asset('storage/' . $artikel->image) }}" class="ftk card-img-top pt-2" alt="..."
                            height="170px">
                    @endif
                    <div class="card-body">
                        <a href="/showartikel/{{ $artikel->slug }}">{{ Str::words($artikel->title, 5) }}</a>
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
@foreach ($posts as $key => $item)
    @if ($key == 6)
        <div class="container">
            <div class="text-center">
                <a href="/artikel" class="btn btn-outline-primary pe-5 ps-5 mb-5" style="border-radius: 50px">Load
                    More
                    ...</a>
            </div>
        </div>
    @endif
@endforeach
