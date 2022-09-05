<header class="">
        <!--  Modal   -->
      <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginTitulo" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLoginTitulo">Entre na Sua Conta</h5>
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