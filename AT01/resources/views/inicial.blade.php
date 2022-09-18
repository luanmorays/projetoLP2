@extends('common.mdb-fullpage')

@section('content')
<!DOCTYPE html>
<html lang="en" class="full-height">>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

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
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
              <a class="nav-link" href="\contato">Fale Conosco</a>
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



<div class="view intro-2">
  <div class="full-bg-img">
    <div class="mask rgba-black-light flex-center">
      <div class="container text-center white-text">
        <div class="white-text text-center wow fadeInUp">
        <h1 class="display-3 white-text mb-5 font-weight-bold wow fadeInDown" data-wow-delay="0.3s">GRIDKAR AUTOCENTER LTDA.</h1>
        <h5 class="text-uppercase white-text mb-5 mt-1 fadeInDown" data-wow-delay="0.3s">"As peças e serviços que você procura com a qualidade que você precisa"</h5>
          <br>
        </div>
      </div>
    </div>
  </div>
</div>

</header>
<div class="container">      
      <section class="section mt-5 pb-3 wow fadeIn">       
        <div class="row">
          <div class="col-md-12">           
            <div class="card card-cascade wider reverse">             
              <div class="view view-cascade overlay">               
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              
              <p>A GridKar Autocenter LTDA, empresa fabricante de peças de sistemas de Freio, 
                Suspensão, Pinos, Peças estampadas, injetadas, usinadas, construção de conjuntos soldados, ferramentas e pintura eletrostática 
                a Pó e prestação de serviço de Auto Center declara seu compromisso com a melhoria contínua de seu Sistema de Gestão, adotando os seguintes princípios:
              </p>
              <p>
                 * Atender as necessidades e expectativas das partes interessadas;<br><br>
                 * Criar um ambiente propício para o progresso da GridKar e o crescimento profissional dos funcionários, visando melhorias dos processos;<br><br>
                 * Contar com a participação dos funcionários e provedores / fornecedores;<br><br>
                 * Estoque diversificado com mais de 440 mil itens à disposição<br><br<br>
              </p>

              <p>
              Ser uma empresa referência em qualidade de atendimento e satisfação do cliente na prestação de serviços de Auto Center 
              e na venda de Auto Peças. Contamos com uma equipe altamente qualificada atuando no mercado automobilístico, 
                dando atenção em conhecer a atender as necessidades de cada cliente.
              </p>

      </section>    
      <hr class="mb-5 mt-4">      
      <section class="section extra-margins pb-3 wow fadeIn" data-wow-delay="0.3s">       
        <h2 class="text-center my-5 text-center h3 pt-3">Serviços mais procurados!!!</h2>
      <hr class="mb-5 mt-4"> 
        <div class="row">          
          <div class="col-lg-4 col-md-12 mb-4">           
            <div class="card">             
              <div class="view overlay">
                <img src="/imagens/oleo.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask"></div>
                </a>
              </div>              
              <div class="card-body">               
                <a class="activator mr-3"></a>               
                <h4 class="card-title">Troca de óleo</h4>
                <hr>
                
                <p class="card-text">A troca periódica dos lubrificantes é parte fundamental da rotina de manutenção automotiva.
                   Mas é preciso que essa substituição seja feita obedecendo as orientações do fabricante do carro, 
                   com o objetivo de assegurar a longa vida útil do motor.</p>
                <a class="link-text">
                  <h5><a class="nav-link" href="\produtos">Outros Serviços <i class="fas fa-chevron-right"></i></a></h5>
                </a>
              </div>             
            </div>          
          </div>         
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">             
              <div class="view overlay">
                <img src="/imagens/reparo.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask"></div>
                </a>
              </div>              
              <div class="card-body">                
                <a class="activator mr-3"></a>                
                <h4 class="card-title">Reparos Automotivos</h4>
                <hr>               
                <p class="card-text">Esse serviço tem como objetivo corrigir falhas e problemas,
                   antes mesmo deles acontecerem. Um exemplo disso é ficar de olho no polimento de parabrisa. 
                   Assim, a redução de custos e aumentando a eficiência da manutenção</p>
                <a class="link-text">
                  <h5><a class="nav-link" href="\produtos">Outros Serviços <i class="fas fa-chevron-right"></i></a></h5>
                </a>
              </div>              
            </div>           
          </div>  

          <div class="col-lg-4 col-md-6 mb-4">        
            <div class="card">             
              <div class="view overlay">
                <img src="/imagens/balanceamento.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask"></div>
                </a>
              </div>
           
              <div class="card-body">                
                <a class="activator mr-3"></a>               
                <h4 class="card-title">Alinhamento e Balanceameto</h4>
                <hr>               
                <p class="card-text">O procedimento é importante porque previne o desgaste irregular dos pneus, aumentando sua vida útil.
                   Além disso, o alinhamento ainda contribui para a economia de combustível do veículo.</p>
                <a class="link-text">
                  <h5><a class="nav-link" href="\produtos">Outros Serviços <i class="fas fa-chevron-right"></i></a></h5>
                </a>
              </div>             
            </div>         
          </div>       
        </div>  
      </section> 

      <section class="mb-4 pt-5 wow fadeIn" data-wow-delay="0.3s">      
        <div class="comments-list text-center text-md-left mb-5">
          <div class="text-center mb-4">
            <h3 class="font-weight-bold pt-3 mb-5">Comentários sobre os serviços<span class="badge pink">3</span></h3>
          </div>         
          <div class="row mb-4">           
            <div class="col-sm-2 col-12 mb-md-0 mb-3">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img (9).jpg" class="avatar rounded-circle z-depth-1-half">
            </div>           
            <div class="col-sm-10 col-12">
              <a>
                <h4 class="font-weight-bold">Tom Smith</h4>
              </a>
              <div class="mt-2">
                <ul class="list-unstyled">
                  <li class="comment-date"><i class="fas fa-clock"></i> 10/08/2022</li>
                </ul>
              </div>
              <p class="grey-text"><i>"Equipe muito boa e dedicada, prestaram o serviço com muita eficiência e qualidade!!!"</i></p>
            </div>         
          </div>          
          <div class="row mb-4">           
            <div class="col-sm-2 col-12 mb-md-0 mb-3">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="avatar rounded-circle z-depth-1-half">
            </div>                 
            <div class="col-sm-10 col-12">
              <a>
                <h4 class="font-weight-bold">Marta Tev</h4>
              </a>
              <div class="mt-2">
                <ul class="list-unstyled">
                  <li class="comment-date"><i class="fas fa-clock"></i> 20/01/2022</li>
                </ul>
              </div>
              <p class="grey-text"><i>"Deixaram meu carro zero, super recomendo!!!"</i></p>
            </div>       
          </div>
               
          <div class="row mb-4">          
            <div class="col-sm-2 col-12 mb-md-0 mb-3">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img (10).jpg" class="avatar rounded-circle z-depth-1-half">
            </div>
     
            <div class="col-sm-10 col-12">
              <a>
                <h4 class="font-weight-bold">Anna Maria</h4>
              </a>
              <div class="mt-2">
                <ul class="list-unstyled">
                  <li class="comment-date"><i class="fas fa-clock"></i> 25/08/2022</li>
                </ul>
              </div>
              <p class="grey-text"><i>"O melhor serviço a atendimento da região, com certeza retornarei lá!!!"</i>
              </p>
            </div>            
          </div>         
        </div>   
      </section>
    </div>
  </main>


  <footer class="page-footer pt-0">
    <div class="container">      
      <div class="row">
        <div class="col-md-12 wow fadeIn" data-wow-delay="0.3s">
          <div class="text-center d-flex justify-content-center my-4">
            
            <a class="p-2 m-2 fa-lg fb-ic"><i class="fab fa-facebook-f white-text fa-lg pr-md-4"> </i></a>     
            <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text fa-lg pr-md-4"> </i></a>          
            <a class="p-2 m-2 fa-lg gplus-ic"><i class="fab fa-google-plus-g white-text fa-lg pr-md-4"> </i></a>           
            <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in white-text fa-lg pr-md-4"> </i></a>          
            <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram white-text fa-lg pr-md-4"> </i></a>   
            <a class="p-2 m-2 fa-lg pin-ic"><i class="fab fa-pinterest white-text fa-lg pr-md-4"> </i></a>
          </div>
        </div>       
      </div>    
    </div>
  

  
    <div class="footer-copyright py-3 text-center wow fadeIn" data-wow-delay="0.3s">
      <div class="container-fluid">
        © 2022 Copyright: gridkar@services.com.br </a>
      </div>
    </div>
   

  </footer>
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <script>
    $(document).ready(() => {
      new WOW().init();
    });

  </script>
</body>

</html>

@endsection('content')