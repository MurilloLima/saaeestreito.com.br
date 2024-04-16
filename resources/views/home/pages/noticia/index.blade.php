@extends('home.layout.app')
@section('title', 'Notícias')

@section('content')
    @include('home.layout.noticia')

    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h6 class="position-relative d-inline text-primary ps-4">Estreito-MA</h6>
                <h2 class="mt-2">Confira todas as notícias SAAE</h2>
            </div>
            <div class="row g-4">
                @foreach ($data as $item)
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="image-noticia">
                                <img src="{{ asset('upload/noticias/' . $item->image) }}" alt="">
                            </div>
                            <h5 class="mb-3">{{ $item->title }}</h5>
                            <p>{{ $item->desc }}</p>
                            <a class="btn px-3 mt-auto mx-auto"
                                href="{{ route('home.pages.noticias.view', $item->slug) }}">Ler mais+</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
