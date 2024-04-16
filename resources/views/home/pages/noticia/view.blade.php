@extends('home.layout.app')
@section('title', $data->title)
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

                    <div class="d-flex align-items-center mt-4">
                        {{-- <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a> --}}
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i
                                class="fab fa-instagram"></i></a>
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
