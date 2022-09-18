

@extends('common.mdb-fullpage')

@section('content')


<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
  <!--Main Navigation-->
  <body>
<header>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo">
  <a class="navbar-brand" href="#"><strong><h2><i>GridKar</i></h2></strong></a>
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
              <a class="nav-link" href="#">Nossas Lojas</a>
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
<div class="footer-copyright py-3 text-center wow fadeIn" data-wow-delay="0.3s">
      <div class="container-fluid">
        © 2022 Copyright: gridkar@services.com.br </a>
      </div>
</div>
</body>
</html>

@endsection('content')