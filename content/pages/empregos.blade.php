
    @extends('template.'.config('settings.template').'.content.layout')
    @section("title", "Empregos de informática e TI em Neumarkt ")
    @section("style")
    <link rel="stylesheet" type="text/css" href="{{storage('assets/empregos.css')}}">
    <link rel="stylesheet" type="text/css" href="{{storage('assets/stylee.css')}}">
    <link rel="stylesheet" type="text/css" href="{{storage('css/style.css')}}">
    <link rel="stylesheet" href="{{storage('assets/img')}}">
    <script type="text/javascript" src="{{storage('js/empregos.js')}}"></script>
    @stop
    @section("body")
   

    @include ('template.'.config('settings.template').'.content.header')

    <main>
        <section class="container">
            <div class="principal">
                <img class="img-fluid" src="https://www.vr-nordoberpfalz.de/startseite/_jcr_content/kampagnenbereich/kampagnecomponent/kampagne/bild.img.png/1660894968975/mitgliedergewinnspiel-bvr-parallax-01-nur-diese-seite.jpg" alt="">
                <div class="txt">
                    <img class="img" src="{{storage('assets/img/slide-1.jpg')}}" alt="">
                    <h1>Volksbank Raiffeisenbank Nordoberpfalz</h1>
                </div>
                <div class="txt-mobile">
                  <img class="img" src="{{storage('assets/img/slide-1.jpg')}}" alt="">
                  <h1>Volksbank Raiffeisenbank Nordoberpfalz</h1>
                </div>
            </div>
            <div class="sobreempresa">
                <h2>Über Volksbank Raiffeisenbank Nordoberpfalz</h2>
                <p>
                  Zeigen Sie uns, was Sie können! Verstärken Sie das Team der Volksbank Raiffeisenbank Nordoberpfalz eG und bewerben Sie sich jetzt online bei uns. Ob als Auszubildender, als Praktikant oder als Mitarbeiter in der qualifizierten Beratung oder einer unserer Fachabteilungen - wir freuen uns auf Ihr Talent!
                </p>
                <button><a href="https://www.vr-nordoberpfalz.de" id="btn-empresa">Besuche unsere Webseite</a></button>

            </div>
            <div class="txt-vagas">
                <h2>Aktuelle Jobangebote</h2>
            </div>
            <div class="col-left">
              @for($i=1;$i<=6; $i++)
               <div class="content-col-left">
                <div class="img-lista">
                  <a href="{{url('/empregos')}}"><img class="img-lista-empregador img-fluid" src="https://www.jobs-oberpfalz.de/uploads/profile/763.jpg" alt=""></a>
                </div>
                <div class="info-lista">
                 <h4>Volksbank Raiffeisenbank Nordoberpfalz</h4>
                 <h2>Descrição da Função</h2>
                </div>
                <div class="consulte-lista">
                  <button><a href="vaga.html">Job ansehen</a></button>
                </div>
               </div>
               @endfor
            </div>

        </section>
    </main>
    @include ('template.'.config('settings.template').'.content.footer')

    @stop
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{storage('assets/script.js')}}"></script>  
   
    
