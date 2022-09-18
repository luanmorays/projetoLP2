@extends('common.mdb-fullpage')

@section('content')

<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
 
  <body>
<header>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo">
  <a class="navbar-brand"  class="nav-link" href="\"><strong><h2><i>GridKar</i></h2></strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
              <a class="nav-link" href="\">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="\empresa">A Empresa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="\lojas">Nossas Lojas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Serviços<span class="sr-only">(current)</span></a>
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
</header>

<div class="container">     
        <div class="row">
          <div class="col-md-12">  
            <div class="card card-cascade wider reverse">
          <div class="view view-cascade overlay">
        <div class="mask rgba-white-slight">
              
</div>

  <div class="border-top p-5">
<hr class="mb-5 mt-4">      
      <section class="section extra-margins pb-3 wow fadeIn" data-wow-delay="0.3s">       
        <h2 class="text-center my-5 text-center h3 pt-3">CATÁLOGO DE SERVIÇOS:</h2>
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
                  <h5><a class="nav-link" ></h5>              
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
                   Assim, a redução de custos e aumentando a eficiência da manutenção</p><br><br>
                <a class="link-text">
                  <h5><a class="nav-link" ></a></h5>
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
                   Além disso, o alinhamento ainda contribui para a economia de combustível do veículo.</p><br><br>
                <a class="link-text">
                  <h5><a class="nav-link" ></a></h5>
                </a>
              </div>           
            </div>       
          </div>         
        </div>
      </section> 

<hr>

<hr class="mb-5 mt-4">      
      <section> 
        <div class="row">          
          <div class="col-lg-4 col-md-12 mb-4">           
            <div class="card">             
            <div class="view overlay">
                <img src="/imagens/arref.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask"></div>
                </a>
              </div>              
              <div class="card-body">                
                <a class="activator mr-3"></a>           
                <h4 class="card-title">Troca de Líquido de Arrefecimento</h4>
                <hr>

                <p class="card-text">O líquido de arrefecimento tem como função resfriar o motor do carro. Por conta da 
                  queima de combustível, a temperatura do motor pode ultrapassar os 100°C e o sistema de arrefecimento funciona
                   justamente para evitar que o motor superaqueça.</p>
                <a class="link-text">
                  <h5><a class="nav-link" ></h5><br><br><br>            
                </a>
              </div>              
            </div>         
          </div>          
          <div class="col-lg-4 col-md-6 mb-4">           
            <div class="card">              
              <div class="view overlay">
                <img src="/imagens/revi.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask"></div>
                </a>
              </div>              
              <div class="card-body">               
                <a class="activator mr-3"></a>          
                <h4 class="card-title">Revisão Veicular Periódica</h4>
                <hr>

                <p class="card-text">Todo proprietário de automóvel sabe que o seu bem requer diversos cuidados. Afinal, estamos 
                  falando de uma máquina que combina uma série de peças e sistemas para funcionar. Sendo assim, toda a atenção é necessário. 
                  Por isso, é de suma importância a realização de uma revisão veicular periódica.</p><br>

                <a class="link-text">
                  <h5><a class="nav-link" ></a></h5><br><br>
                </a>
              </div>         
            </div>          
          </div>        
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">             
              <div class="view overlay">
                <img src="/imagens/arro.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask"></div>
                </a>
              </div>             
              <div class="card-body">               
                <a class="activator mr-3"></a>               
                <h4 class="card-title">Outros Serviços e Produtos...</h4>
                <hr>             
                <p class="card-text">Para mais serviços ou aquisição de peças para seu veículo entre em contato com a nossa equipe 
                  sempre bem preparada e disposta a ajuda-los da melhor maneira possível.

                </p><br><br><br>
                <a class="link-text">
                <h5><a class="nav-link" href="\contato">Clique Aqui!!! <i class="fas fa-chevron-right"></i></a></h5>
                </a>
              </div>             
            </div>          
          </div>         
        </div>     
      </section> 

<hr class="mb-5 mt-4">      
      <section class="section extra-margins pb-3 wow fadeIn" data-wow-delay="0.3s">       
        <h1 class="text-center my-5 text-center h3 pt-3">Registre seu pedido:</h1>
<hr class="mb-5 mt-4">  
<form method="post">
    @csrf  

<style>
                
                form{
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #f7f7f7;
            border: 4px solid #000;
            padding: 20px;
                    }
</style> 

    <br><fieldset style="width:200px;">

    <label for="produto"><b>Produto</b></label>
    <input type="text" name="produto"><br><br>
    

    <label for="preco"><b>Preço</b></label>
    <input type="text" name="preco"><br><br>

    <label for="categoria"><b>Categoria</b></label>
    <input type="text" name="categoria"><br><br>

    <input type="submit" value="Salvar"></fieldset>
                  

    </fieldset>
</form>
<label>Produto: {{$produto}}</label><br>
<label>Preço: {{$preco}}</label><br>
<label>Categoria: {{$categoria}}</label><br>  

<div class="footer-copyright py-3 text-center wow fadeIn" data-wow-delay="0.3s">
      <div class="container-fluid">
        © 2022 Copyright: gridkar@services.com.br </a>
</div>
</div>                
</body>

</html>




