@extends('common.mdb-fullpage')

@section('content')
<!DOCTYPE html class="full-height">
<html lang="en">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <h1>PAGINA INICIAL</h1>

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
              <a class="nav-link" href="#">A Empresa</a>
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
      <div class="container text-center">
        <div class=" text-center wow fadeInUp">
        <div class="row">
          <div class="col-md-12">           
            <div class="card card-cascade wider reverse">             
              <div class="view view-cascade overlay">
                 
              
              </div>



  <div class="border-top p-5 rgba-white-light flex-center">
          
          <h3>A maior rede de Autocenter e Autopeças de Guarulhos!!!<br><br>
<i>"Hoje, nos orgulhamos de ser uma das maiores autopeças do Brasil.<br><br>

O cliente Guarulhense sabe que aqui tem:<br><br>

• Estoque diversificado com mais de 440 mil itens à disposição.<br>
• Peças para automóveis fabricados a partir dos anos 70.<br>
• Peças para veículos fora de linha.<br>
• Procedência das grandes marcas, mundialmente conhecidas (Bosch, NGK, Mahle, Dana, Filtros Fram, Monroe, Dayco, Continental, TRW, Cobreq, Moura entre tantas outras).<br>
• Elaboração imediata de até 220 mil cores diferentes de tintas automotivas com a durabilidade, performance e cores das fábricas de mais alto padrão.<br>
• Com 300 funcionários."<br><br></i>

A peça que você procura está na GridKar!</h3>
          <br>
        </div>
      </div>
    </div>
  </div>
</div>

</header>
<div class="footer-copyright py-3 text-center wow fadeIn" data-wow-delay="0.3s">
      <div class="container-fluid">
        © 2022 Copyright: gridkar@services.com.br </a>
      </div>
</div>
</body>
</html>


@endsection('content')
