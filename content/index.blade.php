<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empregos de informática e TI em Neumarkt</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  
    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!--CSS e JS-->
    <link rel="stylesheet" href="{{storage('assets/style.css')}}">
    <link rel="stylesheet" href="{{storage('assets/img')}}">
    <script src="{{storage('assets/script.js')}}"></script>  
    
    <!--Fontawesome CDN Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
     <!-- ===== Boxicons CSS ===== -->
     <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="">
      <nav>
        <div class="nav-bar">
          <i class='bx bx-menu sidebarOpen' ></i>
          <span class="logo navLogo"><a href="#"><img class="logotipo" src="https://www.jobs-oberpfalz.de/images/manual/logo.png" alt=""></a></span>
  
          <div class="darkLight-searchBox">
            <div class="dark-light">
                      <i class='bx bx-moon moon'></i>
                      <i class='bx bx-sun sun'></i>
            </div>
  
          </div>
          <div class="menu">
            <div class="logo-toggle">
                <span class="logo"><a href="#">Jobs Oberpfalz.de</a></span>
                <i class='bx bx-x siderbarClose'></i>
            </div>

            <ul class="nav-links">
                <li><a href="#" class="item-nav">Arbeitgeberübersicht</a></li>
                <li><a href="#" class="item-nav">Info</a></li>
                <li><a id="login" href="#" class="item-nav">Login</a></li>
                <li><a id="registre" href="#" class="item-nav">Registrieren</a></li>
            </ul>
    </div>
        </div>
      </nav>
    </header>
    <main class="container">
        <!-------------Sessão Hero Inicial------------>
        <section class="hero-inicial">
          <div class="content-hero">
            <div class="content-txt">
              <img src="{{storage('assets/img/bg.png')}}" class="feature-img anim" alt="">
              <div class="hero">
                <h1 class="anim">Aqui você encontra os melhores empregos do Alto Palatinado</h1>
                <p class="anim">Nós ajudamos você a escolher seu melhor caminho em um Click!</p>
                <div class="formulario">
                  <form action="#" class="search-bar anim">
                    <input type="text" placeholder="Pesquise por empregador, setor, região..." name="search">
                    <button id="btn-search" type="submit"><img src="{{storage('assets/img/search.png')}}" alt="" id="icon-search"></button>
                  </form>
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
       
       
        
        <!------------Segunda Sessão LIST CONTAINE----------->
        <div class="container-fluid list-container">
          <div class="container">
            <h1 id="h1-lista">Ofertas de trabalho atuais</h1>
            
            <div class="lista">
              <div class="col-right">
                <div class="sidebar">
                  <h2>Filtros Avançados</h2>
                  <hr>
                  <div class="select-btn">
                    <span class="btn-text">Região</span>
                    <span class="arrow-dwn">
                      <img class="icon" src="{{storage('assets/img/chevron.png')}}" alt="">
                    </span>
                  </div>
                  <ul class="list-items1">
                    <li class="item">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Regensburg</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Weiden</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Amberg</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Schwandorf </span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Neumarkt </span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Cham</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Neustadt </span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Tirschenreuth </span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Nabburg </span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Sulzbach-Rosenberg</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Vohenstrauß</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Eschenbach </span>
                      <span class="span">(0) jobs</span>
                    </li>
                  </ul>
                  <div class="select-btn2">
                    <span class="btn-text2">Tipo de Emprego</span>
                    <span class="arrow-dwn">
                      <img class="icon" src="{{storage('assets/img/chevron.png')}}" alt="">
                    </span>
                  </div>
                  <ul class="list-items2">
                    <li class="item2">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Tempo Total</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item2">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Tempo Parcial</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item2">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Mini trabalho</span>
                      <span class="span">(0) jobs</span>
                    </li>                  
                    <li class="item2">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Educação</span>
                      <span class="span">(0) jobs</span>
                    </li>
                  </ul>
                  <div class="select-btn3">
                    <span class="btn-text3">Por Setor</span>
                    <span class="arrow-dwn">
                      <img class="icon" src="{{storage('assets/img/chevron.png')}}" alt="">
                    </span>
                  </div>
                  <ul class="list-items3">
                    <li class="item3">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Iframe</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item3">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Ciência e engenharia</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item3">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Computadores e TI</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item3">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Assistência Médica</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item3">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Gestão</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item3">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Produção e Armazém</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item3">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Contabilidade e finanças</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item3">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Distribuição e Varejo</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item3">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Construção</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item3">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Instalação, manutenção</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item3">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Treinamento</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item3">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Escritório de Administração</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item3">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Transporte e Logística</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item3">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Recursos Humanos</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item3">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Gastronomia</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item3">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Viagens e entretenimento</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item3">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Atendimento ao Cliente</span>
                      <span class="span">(0) jobs</span>
                    </li>
                    <li class="item3">
                      <span class="checkbox">
                        <img src="{{storage('assets/img/icon-check.png')}}" alt="">
                      </span>
                      <span class="item-text">Serviço Público</span>
                      <span class="span">(0) jobs</span>
                    </li>
                  </ul>
                  
                </div>
              </div>
              <div class="col-left">
               <div class="content-col-left">
                <div class="img-lista">
                  <a href="{{url('/empregos')}}"><img class="img-lista-empregador img-fluid"src="https://www.jobs-oberpfalz.de/uploads/profile/763.jpg" alt=""></a>
                </div>
                <div class="info-lista">
                 <h4>Volksbank Raiffeisenbank Nordoberpfalz</h4>
                 <h2>Estágios para estudantes (semestre prático)</h2>
                </div>
                <div class="consulte-lista">
                  <button><a href="vaga.html">Ver Trabalho</a></button>
                </div>
               </div>
               <div class="content-col-left">
                <div class="img-lista">
                  <img class="img-lista-empregador img-fluid"src="https://www.jobs-oberpfalz.de/uploads/profile/763.jpg" alt="">
                </div>
                <div class="info-lista">
                 <h4>Volksbank Raiffeisenbank Nordoberpfalz</h4>
                 <h2>Estágios para estudantes (semestre prático)</h2>
                </div>
                <div class="consulte-lista">
                  <button>Ver Trabalho</button>
                </div>
               </div>
               <div class="content-col-left">
                <div class="img-lista">
                  <img class="img-lista-empregador img-fluid"src="https://www.jobs-oberpfalz.de/uploads/profile/763.jpg" alt="">
                </div>
                <div class="info-lista">
                 <h4>Volksbank Raiffeisenbank Nordoberpfalz</h4>
                 <h2>Estágios para estudantes (semestre prático)</h2>
                </div>
                <div class="consulte-lista">
                  <button>Ver Trabalho</button>
                </div>
               </div>
               <div class="content-col-left">
                <div class="img-lista">
                  <img class="img-lista-empregador img-fluid"src="https://www.jobs-oberpfalz.de/uploads/profile/763.jpg" alt="">
                </div>
                <div class="info-lista">
                 <h4>Volksbank Raiffeisenbank Nordoberpfalz</h4>
                 <h2>Estágios para estudantes (semestre prático)</h2>
                </div>
                <div class="consulte-lista">
                  <button>Ver Trabalho</button>
                </div>
               </div>
               <div class="content-col-left">
                <div class="img-lista">
                  <img class="img-lista-empregador img-fluid"src="https://www.jobs-oberpfalz.de/uploads/profile/763.jpg" alt="">
                </div>
                <div class="info-lista">
                 <h4>Volksbank Raiffeisenbank Nordoberpfalz</h4>
                 <h2>Estágios para estudantes (semestre prático)</h2>
                </div>
                <div class="consulte-lista">
                  <button>Ver Trabalho</button>
                </div>
               </div>
               <div class="content-col-left">
                <div class="img-lista">
                  <img class="img-lista-empregador img-fluid"src="https://www.jobs-oberpfalz.de/uploads/profile/763.jpg" alt="">
                </div>
                <div class="info-lista">
                 <h4>Volksbank Raiffeisenbank Nordoberpfalz</h4>
                 <h2>Estágios para estudantes (semestre prático)</h2>
                </div>
                <div class="consulte-lista">
                  <button>Ver Trabalho</button>
                </div>
               </div>
               <div class="pagination">
                <ul> <!--pages or li are comes from javascript --> </ul>
              </div>
            </div>
            </div>
          </div>
        </div>   
    </main>
    <footer>
        <!------------------Footer----------------------------->
        <div class="content">
          <div class="top">
            <div class="logo-details">
              <img src="{{storage('assets/img/logotipox.png')}}" alt="">
              <span class="logo_name">Jobs-Oberpfalz.de</span>
            </div>
            <div class="media-icons">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
          <hr id="hr-footer">
          <div class="link-boxes">
            <ul class="box">
              <li class="link_name">Jobs Oberpfalz</li>
              <li><a href="">Über uns</a></li>
              <li><a href="">Fragen & Antworten</a></li>
              <li><a href="">Kontakt</a></li>
            </ul>
            <ul class="box">
              <li class="link_name">FÜR ARBEITGEBER</li>
              <li><a href="">Funktionen</a></li>
              <li><a href="">Kundenstimmen</a></li>
              <li><a href="">Preise</a></li>
            </ul>
            <ul class="box">
              <li class="link_name">Partner Jobbörsen</li>
              <li><a href="">www.jobs-niederbayern.de</a></li>
              <li><a href="">www.jobs-mittelfranken.de</a></li>
              <li><a href="">nomaden.jobs</a></li>
            </ul>
            <ul class="box input-box">
              <li class="link_name">Company</li>
              <li><input type="text" placeholder="Enter your email"></li>
              <li><input type="button" value="Subscribe"></li>
            </ul>
          </div>
        </div>
        <div class="bottom-details">
          <div class="bottom_text">
            <span class="copyright_text">Copyright &#169; 2022 <a id="areya"href="https://www.areya.de/software/cms">Areya CMS</a> all rights reserved</span>
            <span class="policy_terms">
              <a href="https://www.jobs-oberpfalz.de/agb">Termos e Condições</a>
              <a href="https://www.jobs-oberpfalz.de/datenschutz">Politica de Privacidade</a>
              <a href="https://www.jobs-oberpfalz.de/impressum">Imprimir</a>
            </span>
          </div>
        </div>
    </footer>
    
   
    
    
      
            
</body>
</html>