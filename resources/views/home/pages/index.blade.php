@extends('home.layout.app')
@section('title', 'Home')
@section('content')
    <div class="container-xxl py-5 bg-primary hero-header mb-5">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated zoomIn">Prefeitura e SAAE</h1>
                    <p class="text-white pb-3 animated zoomIn">levando qualidade de vida à população de
                        Estreito-MA
                    </p>
                    <a href="{{ route('home.pages.licitacao.index') }}"
                        class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">
                        Licitações e contratos
                    </a>
                    <a href="{{ route('home.pages.contatos.index') }}"
                        class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contatos</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid" src="{{ asset('home/img/hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h6 class="position-relative d-inline text-primary ps-4">Serviços</h6>
                <h2 class="mt-2">Quais soluções oferecemos</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-shower fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Falta água</h5>
                        <p>Falta água na sua residência iremos solucionar o problema</p>
                        <a class="btn px-3 mt-auto mx-auto"
                            href="https://api.whatsapp.com/send?phone=5599991940969&text=Oi!" target="_blank">Comunicar</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            {{-- <i class="fa fa-home fa-2x"></i> --}}
                            <i class="fa fa-align-justify fa-2x" aria-hidden="true"></i>
                        </div>
                        <h5 class="mb-3">2° via de conta</h5>
                        <p>Para consultar seu debito informe a unidade consumidora</p>
                        <a class="btn px-3 mt-auto mx-auto" href="http://177.53.118.12:5661/servicosweb/home.jsf"
                            target="_blank">Acessar</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s"
                    style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-edit fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Licitações</h5>
                        <p>Utilize o filtro de pesquisa para localizar a licitação</p>
                        <a class="btn px-3 mt-auto mx-auto" href="{{ route('home.pages.licitacao.index') }}">Acessar</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-file fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Declaração de quitação anual</h5>
                        <p>Confirar todas a declarações de quitação</p>
                        <a class="btn px-3 mt-auto mx-auto" href="">Acessar</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            {{-- <i class="fa fa-text fa-2x"></i> --}}
                            {{-- <i class="fa fa-check-square-o" aria-hidden="true"></i> --}}
                            <i class="fa fa-building fa-2x" aria-hidden="true"></i>
                        </div>
                        <h5 class="mb-3">Transparência</h5>
                        <p>Portal da Transparência e Acesso à Informação.</p>
                        <a class="btn px-3 mt-auto mx-auto"
                            href="http://barrosoptr.dcfiorilli.com.br:5656/SCPIWEB_SAAEESTREITO/"
                            target="_blank">Acessar</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s"
                    style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            {{-- <i class="fa fa-home fa-2x"></i> --}}
                            <i class="fa fa-ship fa-2x" aria-hidden="true"></i>
                        </div>
                        <h5 class="mb-3">Vazamento</h5>
                        <p>Nosso técnico irá fazer uma vizita a residência e resolver o problema.</p>
                        <a class="btn px-3 mt-auto mx-auto"
                            href="https://api.whatsapp.com/send?phone=5599991940969&text=Oi!" target="_blank">Comunicar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h6 class="position-relative d-inline text-primary ps-4">Notícias</h6>
                <h2 class="mt-2">Mantenha-se atualizado</h2>
            </div>
            <div class="row g-4">
                @foreach ($noticias as $item)
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
