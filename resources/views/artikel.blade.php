@extends('template.template')

@section('content')
    <div style="background-color: #5cb874" class=" col-12 py-2 ps-3 fw-bold text-light mb-2"
        style="width: 103%; margin-left: -11px;">All ARTICLE
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
                        <p class="artikel ps-3" style="background-color: #5cb874;color:white;width:65%;">
                            {{ $artikel->category->name }}</p>
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
