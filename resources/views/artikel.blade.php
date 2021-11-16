@extends('template.template')

@section('content')
    <!-- ======= Popular Courses Section ======= -->
    <div class="text-center mt-5">
        <h1 class="fw-bold">All Article</h1>
    </div>
    <div class="container" data-aos="fade-up">
        <div class="row card-group " data-aos="zoom-in" data-aos-delay="100">
            <section id="popular-courses" class="courses">
                <div class="container" data-aos="fade-up">
                    <div class="d-flex justify-content-center row flex-wrap card-group" data-aos="zoom-in"
                        data-aos-delay="100">
                        @forelse ($article as $artikel)
                            <div class="col-lg-4 mb-4">
                                <div class="course-item shadow h-100 ani">
                                    @if (file_exists(public_path('article-img/' . $artikel->image)))
                                        <img src="{{ 'article-img/' . $artikel->image }}" class="img-fluid" alt="..."
                                            style="width:100%;height:250px;" />
                                    @else
                                        <img src="{{ asset('storage/' . $artikel->image) }}" class="img-fluid"
                                            alt="..." style="width:100%;height:250px;" />
                                    @endif
                                    <div class="course-content mt-3">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h4>
                                                <a href="/category/{{ $artikel->category->slug }}"
                                                    class="artikel">{{ $artikel->category->name }}</a>
                                            </h4>
                                            <!-- <p class="price">$169</p> -->
                                        </div>
                                        <h3><a
                                                href="/showartikel/{{ $artikel->slug }}">{{ Str::words($artikel->title, 5) }}</a>
                                        </h3>

                                        <p>{{ Str::words($artikel->excerpt, 25) }}</p>
                                        <p><a href="/showartikel/{{ $artikel->slug }}">Read More ...</a></p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="btn btn-danger">
                                Tidak Ada Artikel
                            </div>
                        @endforelse
                        <!-- End Course Item-->
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
