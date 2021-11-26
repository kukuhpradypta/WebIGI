@extends('template.template')

@section('content')

    <div style="background-color: #5cb874" class="mt-3 col-12 py-2 text-center fw-bold text-light mb-2"
    style="width: 103%; margin-left: -11px;">DETAIL ARTIKEL 
    </div>
    <h3><b>{{ $articleShow->title }}</b></h3>
    <hr>
    <p>
        Posted in <a href="/category/{{ $articleShow->category->slug }}">{{ $articleShow->category->name }}</a>
        | {{ $articleShow->created_at->diffForHumans() }}
    </p>
    {{-- <p>Posted on <a href="">August , 2016</a> | by <a href="">smktaruanbhakti</a></p> --}}
    <br>
    <div class="text-center">
        @if (file_exists(public_path('article-img/' . $articleShow->image)))
            <img src="{{ asset('article-img/' . $articleShow->image) }}" class="img-fluid" width="70%" />
        @else
            <img src="{{ asset('storage/' . $articleShow->image) }}" class="img-fluid" width="70%" />
        @endif
    </div>
    <br>
    <div>
        {!! $articleShow->body !!}
    </div>
    <br>

@endsection
