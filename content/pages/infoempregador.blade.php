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
        <div class="col-md-12 mt-5">
            <div class="row">
              <div class="mt-5 infoempregador-text">
                <h1 class=" col-md-12 pt-5 text-center">Jobs Oberpfalz - Das Jobportal für die Oberpfalz</h1>
                <h4 class="col-md-12 py-2 text-center">Pro Monat suchen hier 20.000 Jobsuchende aktiv nach Ihrem Traubjob.</h4>
                <p class="col-md-12 py-2 text-center">Inserieren auch Sie Ihre Stellenanzeigen bei uns und wir helfen Ihnen Ihre offenen Arbeitsstellen bestmöglich und kompetent zu besetzen. Jetzt kostenlos starten und testen!</p>
                <div class="btn-content">
                  <button id="btn-txt" class="text-center"><a href="">Jetzt Arbeitgeberkonto erstellen</a></button>
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
              <img src="{{storage('img/Bewerbung.png')}}" alt="Bewerbung ohne Registrierung">
            </div>
            <h3>Bewerbung ohne Registrierung</h3>
            <p>Bewerber können sich bei uns ohne Registrierung direkt bei Ihnen Bewerben. Zustellug direkt in Ihr Mailpostfach oder weiterleitung per Link.<br><br>Kinderleichte Bewerbung!</p>
          </div>
          
          <div class="col-xl-4 col-md-6">
            <div style="height: 100px;" class="d-flex justify-content-center">
              <img src="{{storage('img/Persönliche.png')}}" alt="Persönliche Ansprechpartner">
            </div>
            <h3>Persönliche Ansprechpartner</h3>
            <p>Feste Ansprechpartner, direkte Kommunikation und kompetente Beratung rund um das Thema Mitarbeitergewinnung in der Oberpfalz.<br><br>Wir kümmern uns!</p>
          </div>
          
          <div class="col-xl-4 col-md-6">
            <div style="height: 100px;" class="d-flex justify-content-center">
              <img src="{{storage('img/Monatlich.png')}}" alt="Monatlich kündbar">
            </div>
            <h3>Monatlich kündbar</h3>
            <p>Warum lange binden? Unsere Premium Angebote lassen Ihnen die Freiheit, jederzeit zu Entscheiden ob wir Ihnen einen Mehrwert bringen. <br><br>Sie haben immer die Wahl!</p>
          </div>
          
          <div class="col-xl-4 col-md-6">
            <div style="height: 100px;" class="d-flex justify-content-center">
              <img src="{{storage('img/Performance.png')}}" alt="Performance">
            </div>
            <h3>Performance</h3>
            <p>Monatliche Auswertungen über Reichweite und Ergebnisse Ihrer Stellenanzeigen ermöglicht Ihnen eine datenbasierte Planung Ihres Werbebudget.<br><br>Daten sind Wissen!</p>
          </div>
      
    </section>
    <section class="container">
      <div class="text-center my-5">
        <h1 class="display-4">Escolha o Plano</h1>
      </div>
      <div class="row">

<!--plan basico-->
        <div class="col-md mb-5">
          <div class="bg-light rounded p-4 box-shadow">
            <h2 class="py-3">Basis Arbeitgeberkonto</h2>
            <ul class="lista-plano list-unstyled">
              <li class="border-top py-3">→ 0,25 € / CPC</li>
              <li class="border-top py-3">→ Arbeitgeber Profil</li>
              <li class="border-top py-3">→ Monatlicher Performance Bericht</li>
            </ul>
            
            <div class="row align-items-center mt-4">
              <div class="col">
                <a href="{{url('/cadastro')}}" class="btn btn-primary btn-lg btn-block">Arbeitgeberkonto erstellen </a>
              </div>
              <div class="col">
                <p class="text-primary h4">Cost per Click</p>
                
              </div>
            </div>
          </div>
        </div>


<!--PlANO GOLD------>
        <div class="col-md mb-5">
          <div class="bg-light rounded p-4 box-shadow">
            <h2 class="py-3">Premium Arbeitgeberkonto <span class="badge badge-success">Premium</span></h2>
            <ul class="lista-plano list-unstyled">
              <li>→ Keine Kosten für Anzeigenklicks</li>
              <li class="border-top py-3">→ Unbegrenzte Premium Stellen</li>
              <li class="border-top py-3">→ Premium Arbeitgeber Profil</li>
              <li class="border-top py-3">→ Firma erscheint als Top-Arbeitgeber</li>
              <li class="border-top py-3">→ Monatlicher Performance Bericht</li>
              <li class="border-top py-3">→ Monatlich kündbar</li>
            </ul>
            <div class="row align-items-center mt-4">
              <div class="col">
                <a href="{{url('/cadastrogold')}}" class="btn btn-primary btn-lg btn-block">Arbeitgeberkonto erstellen </a>
              </div>
              <div class="col">
                <p class="text-primary h4">249 € / 30 Tage</p>
              </div>
            </div>
          </div>
        </div>


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
