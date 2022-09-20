<header class="">
<style>
        a{
          text-decoration:none;
          color: #ffffff;
        }
        .margin-header{
          margin-bottom: 3.5%
        }
        :root{
        --body-color: #ffffff;
        --nav-color: #232d60;
        --side-nav: #010718;
        --text-color: rgb(255, 254, 254);
        --text-lista-color: #232d60;
        --search-bar: #F2F2F2;
        --search-text: #010718;
        --text-hero: #000000;
        --login-color: rgb(244,156,53);
        --box-shadow:rgba(0,0,0,0.5);
        
        }

        body.dark{
            --body-color: #18191A;
            --nav-color: #242526;
            --side-nav: #242526;
            --text-color:rgb(255, 254, 254);
            --search-bar: #242526;
            --text-hero: #CCC;
            --login-color: rgb(244,156,53);
            --text-lista-color: #FFFFFF;
            --box-shadow:rgba(255, 255, 255, 0.327);
            
        }

        nav{
            position: fixed;
            top: 0;
            left: 0;
            height: auto;
            width: 100%;
            background-color: var(--nav-color);
            z-index: 100;
            box-shadow: 0 2px 4px 0 var(--box-shadow);
            box-shadow: 0 2px 8px 0 var(--box-shadow);
        }

        body.dark nav{
            border: 1px solid #393838;

        }

        nav .nav-bar{
            position: relative;
            height: 100%;
            width: 100%;
            background-color: var(--nav-color);
            margin: 0 auto;
            padding: 0 0px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            
        }

        nav .nav-bar .sidebarOpen{
            color: var(--text-color);
            font-size: 25px;
            padding: 5px;
            cursor: pointer;
            display: none;
        }

        nav .nav-bar .logo a{
            color: var(--text-color);
            text-decoration: none;
        }

        .menu .logo-toggle{
            display: none;
        }

        .nav-bar .nav-links{
            display: flex;
            align-items: center;
        }

        .nav-bar .nav-links li{
            margin: 0 14px;
            list-style: none;
            margin-top: 10px;
        }
        .dropdown-menu.show {
            background-color: var(--nav-color);
        }

        #login{
            color: var(--login-color) !important;
            font-weight: 700 !important;
            position: relative !important;;
        }
        .nav-links li a{
            position: relative;
            font-size: 17px;
            font-weight: 400;
            color: #ffffff;
            text-decoration: none;
            padding: 10px 15px;
            
            
        }
        .nav-links li:hover{
            transform: scale(1.1);
        }
        .nav-links li a:hover, .btn-modal-footer:hover{
            background-color:rgba(244, 155, 53, 0.324);
            border-radius: 5px;
            color:rgb(244,156,53);
            
        }
        .nav-links li a:active{
          color:rgb(244,156,53);
        }


        .nav-bar .darkLight-searchBox{
            display: flex;
            align-items: center;
        }

        .darkLight-searchBox .dark-light,
        .darkLight-searchBox .searchToggle{
            height: 40px;
            width: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 5px;
        }

        .dark-light i,
        .searchToggle i{
            position: absolute;
            color: #ffffff;
            font-size: 22px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .dark-light i.sun{
            opacity: 0;
            pointer-events: none;
        }

        .dark-light.active i.sun{
            opacity: 1;
            pointer-events: auto;
        }

        .dark-light.active i.moon{
            opacity: 0;
            pointer-events: none;
        }

        .searchToggle i.cancel{
            opacity: 0;
            pointer-events: none;
        }

        .searchToggle.active i.cancel{
            opacity: 1;
            pointer-events: auto;
        }

        .searchToggle.active i.search{
            opacity: 0;
            pointer-events: none;
        }


        .searchToggle.active ~ .search-field{
            bottom: -74px;
            opacity: 1;
            pointer-events: auto;
        }

        .search-field::before{
            content: '';
            position: absolute;
            right: 14px;
            top: -4px;
            height: 12px;
            width: 12px;
            background-color: var(--nav-color);
            transform: rotate(-45deg);
            z-index: -1;
        }

      </style>
        <!--  Modal   -->
      <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginTitulo" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLoginTitulo">Voce esta logado</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="loginEmail">Email</label>
                  <input type="email" class="form-control" id="loginEmail">
                </div>
                <div class="form-group">
                  <label for="loginSenha">Senha</label>
                  <input type="password" class="form-control" id="loginSenha">
                </div>
                <button type="submit" class="btn btn-primary">Entrar na Conta</button>
                <small class="form-text text-muted">Esqueceu a senha? <a href="#">Clique aqui</a>.</small>
              </form>
            </div>
          </div>
        </div>
      </div>
<!-- Fecha Modal  -->
      
      <nav class="container-fluid">
        <div class="nav-bar">
          <i class='bx bx-menu sidebarOpen' ></i>
          <span class="logo navLogo"><a href="{{url('/.')}}"><img class="logotipo" src="{{storage('img/logo.png')}}"  alt=""></a></span>
  
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
                <li><a class="dropdown-item" href="{{url('/visaogeraldoempregador')}}">Arbeitgeberübersicht</a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('/empregosporsetor')}}">Jobs nach Branchen</a>
                    <a class="dropdown-item" href="{{url('/empregosporlocalidade')}}">Jobs nach Regionen</a>
                  </div>
                </li>
                <img src="https://www.areya.de/images/areya-big-logo.png" width="80" height="70"alt="">

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Arbeitgeber Info</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('/infoempregador')}}">Arbeitgeber Info</a>
                    <a id="login" href="#" data-toggle="modal" data-target="#modalLogin" class="dropdown-item" data-toggle="modal" data-target="#modalLogin" >Login</a>
                    <a id="registre" href="{{url('/cadastro')}}"class="dropdown-item">Registrieren</a>
                  </div>
                </li>


                
            </ul>
          </div>
        </div>
      </nav> 
      


   
</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="{{storage('js/bootstrap.js')}}"></script>