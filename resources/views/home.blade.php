@extends('template.template')
@section('content')
<<<<<<< HEAD
    <div style="background-color: #5cb874; margin-left: -11px;" class="ms-1 mt-3 col-12 py-2 text-center fw-bold text-light mb-2"
        >ARTIKEL TERBARU
=======
    <div style="background-color: #5cb874; " class="mt-3 col-12 py-2 text-center fw-bold text-light mb-2">ARTIKEL TERBARU
>>>>>>> 9256f3e30f49de9eef57238c0b142c35800a1c54
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
<<<<<<< HEAD
                        <p class="artikel text-center mb-2 pt-1 pb-1" style="background-color: #5cb874; color:white; font-size: 15px;">
=======
                        <p class="col-12 artikel text-center pt-1 pb-1"
                            style="background-color: #5cb874; color:white; font-size: 15px;">
>>>>>>> 9256f3e30f49de9eef57238c0b142c35800a1c54
                            {{ $artikel->category->name }}</p>
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
@section('loadmore')
    @foreach ($posts as $key => $item)
        @if ($key == 6)
            <div class="container">
                <div class="text-center">
                    <a href="/artikel" class="btn btn-outline-success pe-5 ps-5 mt-4" style="border-radius: 50px">Load
                        More
                        ...</a>
                </div>
            </div>
        @endif
    @endforeach
@endsection
@section('content2')
    <div class="text-center">
        @foreach ($settings as $item)
            @if ($item->display_name == 'Foto Igi')
                <img src="{{ asset("storage/$item->value") }}" width="80%" height="500px" alt="">
            @endif
        @endforeach
    </div>
    @foreach ($settings as $item)
        @if ($item->display_name == 'Title Igi')
            <h4 class="mt-4 fw-bold" style="font-size: 24px;">{{ $item->value }}</h4>
        @endif
    @endforeach
    @foreach ($settings as $item)
        @if ($item->display_name == 'Content Igi')
            <p style="margin-top: -2%;">{{ $item->value }}</p>
        @endif
    @endforeach
@endsection
