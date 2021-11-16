@extends('template.template')

@section('content')
    <div class="container-md mt-5 mb-5">
        <h3><b>{{ $articleShow->title }}</b></h3>
        <hr>
        <td>
            <br>
        </td>
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
    </div>
    <br>
@endsection
