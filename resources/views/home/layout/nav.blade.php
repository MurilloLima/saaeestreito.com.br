 <!-- Navbar & Hero Start -->
 <div class="container-xxl position-relative p-0">
     <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
         <a href="{{ route('home.pages.index') }}" class="navbar-brand p-0">
             <h1 class="m-0">
                 <i class="fa fa-rss me-2"></i>
                 SAAE
                 <span class="fs-5">Estreito-MA</span>
             </h1>
             <!-- <img src="img/logo.png" alt="Logo"> -->
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
             <span class="fa fa-bars"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <div class="navbar-nav ms-auto py-0">
                 <a href="{{ route('home.pages.index') }}" class="nav-item nav-link">Home</a>
                 <a href="{{ route('home.pages.sobre.index') }}" class="nav-item nav-link">Sobre</a>
                 <a href="{{ route('home.pages.noticias.index') }}" class="nav-item nav-link">Notícias</a>
                 <a href="{{ route('home.pages.licitacao.index') }}" class="nav-item nav-link">Licitações e contratos</a>
                 <a href="{{ route('home.pages.contatos.index') }}" class="nav-item nav-link">Contatos</a>
             </div>
             <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal"
                 data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
             <a href="http://177.53.118.12:5661/servicosweb/home.jsf" target="_blank"
                 class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">2° via conta</a>
         </div>
     </nav>
 </div>
 <!-- Navbar & Hero End -->
