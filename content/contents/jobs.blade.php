<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs-Oberpfalz.de | Finde hier die besten Jobs der Oberpfalz</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  
    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!--CSS e JS-->
    <link rel="stylesheet" type="text/css" href="{{storage('assets/stylee.css')}}">
    <link rel="stylesheet" type="text/css" href="{{storage('css/style.css')}}">
    <link rel="stylesheet" href="{{storage('assets/emprego.css')}}">
    <script src="{{storage('assets/vaga.js')}}"></script>  
    
    <!--Fontawesome CDN Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
     <!-- ===== Boxicons CSS ===== -->
     <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    @include ('template.'.config('settings.template').'.content.header')
    <main>
        <section class="container">
            <div class="txt">
                <a href="empresa.html"><img class="img" src="{{storage('assets/img/slide-1.jpg')}}" alt=""></a>
                <h1>{{$content->title}}</h1>
            </div>
            <div>
                <p>Volksbank Raiffeisenbank Nordoberpfalz está procurando por:</p>
            </div>
            <!----------Segunda lista fale com empregador------->
            <div class="list-container">
                <div class="container">
                  <div class="lista">
                    <div class="col-left">
                      <div class="content-col-left">
                          <div class="info-lista">
                          <h2>Bankorganisator (m/w/d)</h2>
                          <span><i><img src="{{storage('assets/img/calendar.png')}}" alt=""></i>Publicado em: 17/08/2022</span>
                          <span>Setor: Industria</span>
                          <span><i><img src="{{storage('assets/img/place.png')}}"></i>92637 Weiden no Alto Palatinado</span>
                          </div>
                          <div class="description">
                            <h3>Stellenbeschreibung</h3>
                            {!! $content->stellenbeschreibung !!}
                          </div>
                          <div class="consulte">
                            <button><a href="#">Direkt beim Arbeitgeber bewerben</a></button>
                          </div>
                      </div>
                    </div>
                    <div class="col-right">
                      <div class="sideba">
                        <div class="img-sidebar">
                          <a href="empresa.html"><img src="{{storage('assets/img/slide-1.jpg')}}" alt=""></a>
                        </div>
                       
                        <div class="btn-sideba">
                          <button><a href="">Direkt beim Arbeitgeber bewerben</a></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div> 

            <!---Rodapé mais vagas------------------------------>
            <hr>
            <div class="maisvagas">
              <h3>Ähnliche Jobangebote</h3>
              <div class="panel">
              @for($i=1;$i<=3; $i++)
                <div class="paneis">
                  <div class="img-lista">
                    <img class="img-lista-empregador img-fluid"src="https://www.jobs-oberpfalz.de/uploads/profile/763.jpg" alt="">
                  </div>
                  <div class="info-lista">
                   <h4>Volksbank Raiffeisenbank Nordoberpfalz</h4>
                   <h2>Estágios para estudantes (semestre prático)</h2>
                  </div>
                  <div class="consulte-lista">
                    <button>Job ansehen</button>
                  </div>
                </div>
              @endfor   
              </div>
                


            </div>  
            
        </section>
    </main>
    @include ('template.'.config('settings.template').'.content.footer')  
</body>
</html>