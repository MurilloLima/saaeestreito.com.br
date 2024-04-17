<!-- Footer Start -->
<div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-4">Entre em contato</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i>Rua João Castelo, 703 - Estreito-MA</p>
                <p><i class="fa fa-phone-alt me-3"></i>+55 99 3531-6197</p>
                <p><i class="fa fa-envelope me-3"></i>info@saaeestreito.com.br</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://m.facebook.com/profile.php?id=100069848150932&_rdr#_=_"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/saae.estreito/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-4">Menu guia</h5>
                <a class="btn btn-link" href="{{ route('home.pages.index') }}">Home</a>
                <a class="btn btn-link" href="{{ route('home.pages.sobre.index') }}">Sobre</a>
                <a class="btn btn-link" href="{{ route('home.pages.noticias.index') }}">Notícias</a>
                <a class="btn btn-link" href="{{ route('home.pages.licitacao.index') }}">Licitações e contratos</a>
                <a class="btn btn-link" href="{{ route('home.pages.contatos.index') }}">Contatos</a>
            </div>
            <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-4">A Prefeitura</h5>
                <div class="row g-2">
                    <div class="col-4">
                        <a href="https://estreito.ma.gov.br/" style="color: white;">www.estreito.ma.gov.br</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-4">Newsletter</h5>
                <p>
                    Receba notícias diariamente no seu e-mail
                </p>
                <div class="position-relative w-100 mt-3">
                    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                        placeholder="Seu email" style="height: 48px;">
                    <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                            class="fa fa-paper-plane text-primary fs-4"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-lg-5">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">SAAE Estreito-MA</a>, Todos os direitos reservados.
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Desenvolvedor <a class="border-bottom" href="https://murillolimadev.com.br/" target="_blank">MURILLO LIMA</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="{{ route('home.pages.index') }}">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
