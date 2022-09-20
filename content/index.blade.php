@extends('template.'.config('settings.template').'.content.layout')
@section("title", "Jobs-Oberpfalz.de | Finde hier die besten Jobs der Oberpfalz")
@section("style")
<link rel="stylesheet" href="{{storage('assets/stylee.css')}}">
<link rel="stylesheet" href="{{storage('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{storage('css/style.css')}}">
<link rel="stylesheet" href="{{storage('assets/img')}}"> 
<script type="text/javascript" src="{{storage('js/jquery-3.2.1.slim.min.js')}}"></script>
<script type="text/javascript" src="{{storage('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{storage('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{storage('js/app.js')}}"></script>
@stop
@section("body")

    @include ('template.'.config('settings.template').'.content.header')
<main class="">
  <style type="text/css">
      .banner-Home-new-layout {
          height: 300px !important;
      }
      .info-banner-home-new {
          margin-top: 6rem !important;
          margin-bottom: 6rem !important;
      }
      @media (max-width: 500px) {
          .info-banner-home-new {
              display: none;
          }
      }
      
      @media (min-width: 500px) {
          .banner-principal {
              display: block;
          }
      }
      .banner-principal {
          background: url('https://www.jobs-oberpfalz.de/images/manual/regensburg.jpg');
          height: 300px;
          background-size: cover;
          font-family: 'Roboto', sans-serif;
          background-position: center;
      }
      .info-banner-home-new {
          margin: auto;
          margin-left: 0;
          margin-top: 4rem;
          padding-top: 4rem;
          
      }
      .info-banner-home-new h2 {
          padding: 10px 0px;
          font-size: 40px;
          font-weight: bold !important;
          color: #1d1756;
      }
      .info-banner-home-new h2 span {
          color: white;
          font-weight: normal;
          font-size: 20px;
          margin-top: 1rem;
          display: block;
      }
      
      .info-flex-text {
          display: flex;
          font-size: 12px;
          flex-direction: row;
      }
      
      .info-conteudo {
          margin-right: 1.5rem;
          border-radius: 5px;
          padding: 1rem;
          max-width: 20rem;
          text-align: center;
      }
      
      .info-conteudo img {
          vertical-align: middle;
          margin: auto;
          margin-right: 1rem;
          margin-bottom: 0.5rem;
          height: fit-content;
      }
      
      .info-conteudo h3 {
          font-weight: 400;
          color: white;
          margin: 0;
          font-size: 12px !important;
      }
      .finder{
        padding: 2rem 0;
      }
      .container.why-grid {
        padding-top: 5rem;
    }
    .finder-form{
      display:flex;
      justify-content:center;
    }
    @media(max-width:1000px){
    .lista{
        display: grid;
        grid-template-columns: 1fr;
    }
   
}
    
    
  </style>

  <div class="banner-principal">
    <div class="container">
      <div class="info-banner-home-new">
        <h2 class="anim">Die besten Arbeitsstellen<br>der Oberpfalz<span>Jetzt Traumjob finden und direkt online bewerben.</span></h2>
      </div>
    </div>
  </div>
  <div class="finder">
    <div class="container">
      <div class="row">
        <div class="col-md-12 finder-form">
          <div class="formulario">
                  <form action="#" class="search-bar">
                    <input type="text" placeholder="Pesquise por empregador, setor, região..." name="search">
                    <button id="btn-search" type="submit"><img src="assets/img/search2.png" alt=""></button>
                  </form>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="top container">
              <h3>TOP Arbeitgeber mit offenen Arbeitsstellen</h3>
            </div>
            <div class="slider">
              <div class="slide-track">
                <div class="slide">
                  <img src="{{storage('assets/img/slide-1.jpg')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-2.png')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-3.jpg')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-4.png')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-5.jpg')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-6.jpg')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-7.jpg')}}" alt="">
                </div>
                <div class="slide">
                  <img src="assets/img/slide-8.jpeg" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-1.jpg')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-2.png')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-3.jpg')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-4.png')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-5.jpg')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-6.jpg')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-7.jpg')}}" alt="">
                </div>
                <div class="slide">
                  <img src="assets/img/slide-8.jpeg" alt="">
                </div>
              </div>
            </div>
          </div>
        </section>
       
       
        
        
        <div class="container-fluid list-container">
          <div class="container">
            <h1 id="h1-lista">Aktuelle Jobangebote</h1>
            
            <div class="lista">
              <div class="col-right">
                <div class="sidebar">
                  <h2>Filter</h2>
                  <hr>
                  <div class="select-btn">
                    <span class="btn-text">Region</span>
                    <span class="arrow-dwn">
                      <img class="icon" src="{{storage('assets/img/chevron.png')}}" alt="">
                    </span>
                  </div>
                 
                  <ul class="list-items1">
                    @for($i=1;$i<=10; $i++)
                    <li class="item">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Regensburg</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    @endfor
                  </ul>
                  <div class="select-btn2">
                    <span class="btn-text2">Beschäftigungsart</span>
                    <span class="arrow-dwn">
                      <img class="icon" src="{{storage('assets/img/chevron.png')}}" alt="">
                    </span>
                  </div>
                 
                  <ul class="list-items2">
                  @for($i=1;$i<=10; $i++)
                    <li class="item2">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Tempo Total</span>
                      <span class="span">(0) jobs</span>
                    </li>
                  @endfor
                  </ul>
                  <div class="select-btn3">
                    <span class="btn-text3">Branche</span>
                    <span class="arrow-dwn">
                      <img class="icon" src="{{storage('assets/img/chevron.png')}}" alt="">
                    </span>
                  </div>

                  <ul class="list-items3">
                  @for($i=1;$i<=10; $i++)
                    <li class="item3">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Iframe</span>
                      <span class="span">(0) jobs</span>
                    </li>
                  @endfor
                    
                  </ul>
                  
                </div>
              </div>  
            
              <div class="col-left">
                @for($i=1;$i<=6; $i++)
                <div class="content-col-left">
                  <div class="img-lista">
                    <a href="{{url('/empregos')}}"><img class="img-lista-empregador img-fluid"src="https://www.jobs-oberpfalz.de/uploads/profile/763.jpg" alt=""></a>
                  </div>
                  <div class="info-lista">
                  <h4>Volksbank Raiffeisenbank Nordoberpfalz</h4>
                  <h2>Nome da função</h2>
                  </div>
                  <div class="consulte-lista">
                    <button><a href="{{url('/emprego')}}">Job ansehen</a></button>
                  </div>
                </div>
                @endfor

               <div class="pagination">
                <ul>  </ul>
              </div>
            </div>
           
            
          </div>
        </div>   

































  <!--
    <section class="container-fluid">
      <div class="row bg-dark text-white">
        <div class="col-md-7 p-0">
          <div id="carouselCidades" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselCidades" data-slide-to="0" class="active"></li>
              <li data-target="#carouselCidades" data-slide-to="1"></li>
              <li data-target="#carouselCidades" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{storage('img/1.png')}}" alt="California">
                <div class="carousel-caption">
                  <h3 class="display-4"></h3>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{storage('img/2.png')}}" alt="California">
                <div class="carousel-caption">
                  <h3 class="display-4"></h3>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{storage('img/3.png')}}" alt="California">
                <div class="carousel-caption">
                  <h3 class="display-4"></h3>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselCidades" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselCidades" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Próximo</span>
            </a>
          </div>
        </div>
        
        <div class="col-md-5 p-4 align-self-center">
          <h1 class="display-4">Die besten Arbeitsstellen der Oberpfalz</h1>
          <p class="lead">Jetzt Traumjob finden und direkt online bewerben.</p>
          <form action="">
            <div class="input-group input-group-lg">
              <input type="text" class="form-control" placeholder="Suche nach Arbeitgeber, Region, Branche, ..." aria-label="finder">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">Finder</button>
              </span>
            </div>
          </form>
        </div>
        
      </div>
    </section>
       
            <div class="top container">
              <h3>TOP Arbeitgeber mit offenen Arbeitsstellen</h3>
            </div>
            <div class="slider">
              <div class="slide-track">
                <div class="slide">
                  <img src="{{storage('assets/img/slide-1.jpg')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-2.png')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-3.jpg')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-4.png')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-5.jpg')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-6.jpg')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-7.jpg')}}" alt="">
                </div>
                <div class="slide">
                  <img src="assets/img/slide-8.jpeg" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-1.jpg')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-2.png')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-3.jpg')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-4.png')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-5.jpg')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-6.jpg')}}" alt="">
                </div>
                <div class="slide">
                  <img src="{{storage('assets/img/slide-7.jpg')}}" alt="">
                </div>
                <div class="slide">
                  <img src="assets/img/slide-8.jpeg" alt="">
                </div>
              </div>
            </div>
          </div>
        </section>
       
       
        
        
        <div class="container-fluid list-container">
          <div class="container">
            <h1 id="h1-lista">Aktuelle Jobangebote</h1>
            
            <div class="lista">
              <div class="col-right">
                <div class="sidebar">
                  <h2>Filter</h2>
                  <hr>
                  <div class="select-btn">
                    <span class="btn-text">Region</span>
                    <span class="arrow-dwn">
                      <img class="icon" src="{{storage('assets/img/chevron.png')}}" alt="">
                    </span>
                  </div>
                 
                  <ul class="list-items1">
                    @for($i=1;$i<=10; $i++)
                    <li class="item">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Regensburg</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    @endfor
                  </ul>
                  <div class="select-btn2">
                    <span class="btn-text2">Beschäftigungsart</span>
                    <span class="arrow-dwn">
                      <img class="icon" src="{{storage('assets/img/chevron.png')}}" alt="">
                    </span>
                  </div>
                 
                  <ul class="list-items2">
                  @for($i=1;$i<=10; $i++)
                    <li class="item2">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Tempo Total</span>
                      <span class="span">(0) jobs</span>
                    </li>
                  @endfor
                  </ul>
                  <div class="select-btn3">
                    <span class="btn-text3">Branche</span>
                    <span class="arrow-dwn">
                      <img class="icon" src="{{storage('assets/img/chevron.png')}}" alt="">
                    </span>
                  </div>

                  <ul class="list-items3">
                  @for($i=1;$i<=10; $i++)
                    <li class="item3">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Iframe</span>
                      <span class="span">(0) jobs</span>
                    </li>
                  @endfor
                    
                  </ul>
                  
                </div>
              </div>  
            
              <div class="col-left">
                @for($i=1;$i<=6; $i++)
                <div class="content-col-left">
                  <div class="img-lista">
                    <a href="{{url('/empregos')}}"><img class="img-lista-empregador img-fluid"src="https://www.jobs-oberpfalz.de/uploads/profile/763.jpg" alt=""></a>
                  </div>
                  <div class="info-lista">
                  <h4>Volksbank Raiffeisenbank Nordoberpfalz</h4>
                  <h2>Nome da função</h2>
                  </div>
                  <div class="consulte-lista">
                    <button><a href="{{url('/emprego')}}">Job ansehen</a></button>
                  </div>
                </div>
                @endfor

               <div class="pagination">
                <ul>  </ul>
              </div>
            </div>
           
            
          </div>
        </div>   -->
    </main>
    @include ('template.'.config('settings.template').'.content.footer')
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{storage('assets/script.js')}}"></script>  
    
    @stop
