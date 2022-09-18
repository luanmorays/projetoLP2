@extends('common.mdb-fullpage')

@section('content')

<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
  <body>
<header>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo">
  <a class="navbar-brand" href="\"><strong><h2><i>GridKar</i></h2></strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
              <a class="nav-link" href="\">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="\empresa">A Empresa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="\lojas">Nossas Lojas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="\produtos">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Fale Conosco</a>
            </li>
          </ul>
          
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><i class="fab fa-instagram"></i></a>
            </li>
    </ul>
  </div>
</nav>
</header>

<div class="container">

      
      <section class="section mt-5 pb-3 wow fadeIn">       
        <div class="row">
          <div class="col-md-12">            
            <div class="card card-cascade wider reverse">              
              <div class="view view-cascade overlay">
                 <div class="mask rgba-white-slight">
              
</div>

                  


<section class="text-center dark-grey-text mb-5">

  <div class="card-body rounded-top border-top p-5">
               
                <h2 class="font-weight-bold text-center h1 my-5">Fale Conosco</h2>                
                <h4><i><p class="font-weight-light mx-auto mb-4 pb-2">A equipe GridKar esta sempre disposto a ajuda-lo.</i></p></h4>

                <div class="row">                    
                    <div class="col-md-8 col-xl-9">
                        <form>                            
                            <div class="row">                                
                                <div class="col-md-6">
                                    <div class="md-form">
                                            <input type="text" id="contact-name" class="form-control">
                                            <label for="contact-name" class="">Digite seu Nome</label>
                                    </div>
                                </div>                            
                             
                                <div class="col-md-6">
                                    <div class="md-form">
                                            <input type="text" id="contact-email" class="form-control">
                                            <label for="contact-email" class="">Digite seu Email</label>
                                    </div>
                                </div>                               

                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <input type="text" id="contact-Subject" class="form-control">
                                        <label for="contact-Subject" class="">Assunto</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-4">

                                
                                <div class="col-md-12">

                                    <div class="md-form">
                                        <textarea type="text" id="contact-message" class="md-textarea form-control" rows="3"></textarea>
                                        <label for="contact-message">Como Podemos Ajuda-lo?</label>
                                    </div>

                                </div>
                            </div>
                         

                        </form>

                        <div class="text-center text-md-left mb-4">
                            <a class="btn btn-light-blue">Enviar</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-xl-3">
                        <ul class="contact-icons text-center list-unstyled">
                            <li><i class="fas fa-map-marker fa-2x"></i>
                                <p>Guarulhos, SP 07190-440, BRA</p>
                            </li>

                            <li><i class="fas fa-phone fa-2x"></i>
                                <p>(55) 11 2405-2595</p>
                            </li>

                            <li><i class="fas fa-envelope fa-2x"></i>
                                <p>gridkar@services.com.br</p>
                            </li>
                        </ul>
                </div>                  
             </div>
          </section>         

        </div>

    </main>
    <div class="footer-copyright py-3 text-center wow fadeIn" data-wow-delay="0.3s">
      <div class="container-fluid">
        © 2022 Copyright: gridkar@services.com.br </a>
      </div>
    </div>
  
  </body>

</html> 



@endsection('content')