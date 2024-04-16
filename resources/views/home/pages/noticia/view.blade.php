@extends('home.layout.app')
@section('title', $data->title)

<meta property="og:audio" content="{{ asset('upload/noticias/') . $data->img }}" />
<meta property="og:description" content="{{ asset('upload/noticias/') . $data->desc }}" />
<meta property="og:determiner" content="the" />
<meta property="og:locale" content="en_GB" />
<meta property="og:locale:alternate" content="fr_FR" />
<meta property="og:locale:alternate" content="es_ES" />
<meta property="og:site_name" content="IMDb" />
<meta property="og:video" content="{{ asset('upload/noticias/') . $data->img }}" />
<meta property="og:site_name" content="Destaque notícias">
<meta property="og:title" content="{{ $data->title }}">
<meta property="og:description" content="{{ $data->desc }}">
<meta property="og:image" itemprop="image" content="{{ asset('upload/noticias/' . $data->image) }}">
<meta property="og:type" content="website">

@section('content')
    <div class="container-xxl py-5 bg-primary hero-header mb-5">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated zoomIn">Notícias</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> --}}
                            <li class="breadcrumb-item text-white active" aria-current="page">Notícias</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="section-title position-relative mb-4 pb-2">
                        <h6 class="position-relative text-primary ps-4">{{ $data->title }}</h6>
                        <h2 class="mt-2">{{ $data->desc }}</h2>
                    </div>
                    <p class="mb-4">{!! $data->content !!}</p>

                    <span style="font-size: 11px">Compartilhar</span>
                    <div class="d-flex align-items-center mt-4">
                        {{-- <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a> --}}
                        <a class="btn btn-outline-primary btn-square me-3" href="">
                            <i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3"
                            href="https://api.whatsapp.com/send?text=www.saaeestreito.com.br/noticias/{{ $data->slug }}">
                            <i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href="">
                            <i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid wow zoomIn" data-wow-delay="0.5s"
                        src="{{ asset('upload/noticias/' . $data->image) }}"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
                </div>
            </div>
        </div>
    </div>
@endsection
