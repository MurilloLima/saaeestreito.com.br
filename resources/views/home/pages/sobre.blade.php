@extends('home.layout.app')
@section('title', 'Sobre')
@section('content')
    @include('home.layout.sobre')

    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="section-title position-relative mb-4 pb-2">
                        <h6 class="position-relative text-primary ps-4">Sobre nós</h6>
                        <h2 class="mt-2">levando qualidade de vida à população de Estreito-MA</h2>
                    </div>
                    <p class="mb-4">
                        O Serviço Autônomo de Água e Esgoto de Estreito-MA, instituído pela Lei Nº 001 de 19 de janeiro de
                        1968, é uma autarquia vinculada á Prefeitura Municipal. É a companhia responsável pela abastecimento
                        de água potável da cidade. Ao longo do tempo vem buscando melhorias na forma de captar águas
                        subterrâneas através de poços tubulares.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>
                                Premiado
                            </h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>
                                Equipe Profissional
                            </h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Suporte diário</h6>
                            {{-- <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Fair Prices</h6> --}}
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <a class="btn btn-primary rounded-pill px-4 me-3" href="{{ route('home.pages.contatos.index') }}">Contatos</a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{ asset('home/img/about.jpg') }}"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
                </div>
            </div>
        </div>
    </div>
@endsection
