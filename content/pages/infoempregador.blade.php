@extends('template.'.config('settings.template').'.content.layout')
@section("title", "Jobs-Oberpfalz.de | Finde hier die besten Jobs der Oberpfalz")
@section("style")
<link rel="stylesheet" href="{{storage('assets/stylee.css')}}">
<link rel="stylesheet" href="{{storage('assets/style.css')}}">
<link rel="stylesheet" href="{{storage('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{storage('css/infoempregador.css')}}">
<link rel="stylesheet" href="{{storage('assets/img')}}"> 


<script type="text/javascript" src="{{storage('js/jquery-3.2.1.slim.min.js')}}"></script>
<script type="text/javascript" src="{{storage('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{storage('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{storage('js/app.js')}}"></script>
<script type="text/javascript" src="{{storage('js/visaogeraldoempregador.js')}}"></script>
@stop
@section("body")

    @include ('template.'.config('settings.template').'.content.header')
    <main class="my-5">
        <div class="col-md-12">
            <div class="row">
                <div class="content-img">
                    <img class="img-fluid" src="https://www.jobs-oberpfalz.de/uploads/lists/regensburg.jpg" alt="">
                    <div class="txt">
                            <h1 class=" col-md-12 pt-5 text-center">Jobs Oberpfalz - Das Jobportal für die Oberpfalz</h1>
                            <h4 class="col-md-12 py-2 text-center">Pro Monat suchen hier 20.000 Jobsuchende aktiv nach Ihrem Traubjob.</h4>
                            <p class="col-md-12 py-2 text-center">Inserieren auch Sie Ihre Stellenanzeigen bei uns und wir helfen Ihnen Ihre offenen Arbeitsstellen bestmöglich und kompetent zu besetzen. Jetzt kostenlos starten und testen!</p>
                            <div class="btn-content">
                                <button id="btn-txt" class="text-center"><a href="">Jetzt Arbeitgeberkonto erstellen</a></button>
                            </div>
                    </div>
                    
                </div>
              
               
            </div>
        </div>
        <section class="py-5  text-center">
      <div class="container">
        <div class="my-5">
          <h2 class="display-4 d-block">Ihre Vorteile mit uns</h2>
        </div>
        <div class="row">
          <div class="col-xl-4 col-md-6">
            <div style="height: 100px;" class="d-flex justify-content-center">
              <img src="{{storage('img/localizacao.png')}}" alt="Aus der Region - für die Region">
            </div>
            <h3>Aus der Region - für die Region</h3>
            <p>Wir sind ein Oberpfälzer Unternehmen und Helfen anderen Firmen hier aus unserer Region Menschen anzusprechen, die auf der Suche nach Arbeit sind.<br><br>Lokal ist unsere Stärke!</p>
          </div>
          
          <div class="col-xl-4 col-md-6">
            <div style="height: 100px;" class="d-flex justify-content-center">
              <img src="{{storage('img/think.png')}}" alt="Kostenefizient">
            </div>
            <h3>Kostenefizient</h3>
            <p>Das Basis Paket ist und bleibt für immer kostenlos. Unsere Premium Pakete zeichnen sich durch eine faire und transparente Preisgestalltung aus.<br> <br>Vergleichen Sie uns mit der Konkurenz!</p>
          </div>
          
          <div class="col-xl-4 col-md-6">
            <div style="height: 100px;" class="d-flex justify-content-center">
              <img src="img/icones/translado.svg" alt="Translado">
            </div>
            <h3>Translado</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nemo nulla.</p>
          </div>
          
          <div class="col-xl-4 col-md-6">
            <div style="height: 100px;" class="d-flex justify-content-center">
              <img src="img/icones/praias.svg" alt="Praias">
            </div>
            <h3>Praias</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nemo nulla.</p>
          </div>
          
          <div class="col-xl-4 col-md-6">
            <div style="height: 100px;" class="d-flex justify-content-center">
              <img src="img/icones/bagagens.svg" alt="Bagagens">
            </div>
            <h3>Bagagens</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nemo nulla.</p>
          </div>
          
          <div class="col-xl-4 col-md-6">
            <div style="height: 100px;" class="d-flex justify-content-center">
              <img src="img/icones/turismo.svg" alt="Turismo">
            </div>
            <h3>Turismo</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nemo nulla.</p>
          </div>
          
        </div>
        
        <a href="planos.html" class="btn btn-primary btn-lg mt-4">Comprar Plano</a>
      </div>
    </section>



    </main>
    @include ('template.'.config('settings.template').'.content.footer')
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{storage('assets/script.js')}}"></script>  
    
    @stop
