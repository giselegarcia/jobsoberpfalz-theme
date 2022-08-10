<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="manifest" href="/manifest.json">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=rMBWbbb2wK">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=rMBWbbb2wK">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=rMBWbbb2wK">
    <link rel="manifest" href="/site.webmanifest?v=rMBWbbb2wK">
    <link rel="mask-icon" href="/safari-pinned-tab.svg?v=rMBWbbb2wK" color="#5bbad5">
    <link rel="shortcut icon" href="/favicon.ico?v=rMBWbbb2wK">
    <meta name="msapplication-TileColor" content="#f49c35">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{storage('css/app.css?v=27149')}}">
    @yield('head')
</head>
<body>
    <header>
        <nav class="align-middle text-end" style="background: rgb(244,156,53); background: linear-gradient(90deg, rgba(244,156,53,1) 35%, rgba(219,131,29,1) 100%);">
            <div class="container" style="padding-top: 7px;">
                <div class="row">
                    <div class="col-6 col-md-2 mt-1 text-end offset-md-9">
                        <a href="{{url('dashboard/login')}}" style="color: white">
                            <svg style="fill: white; width: 16px; margin-right:6px; margin-bottom: 3px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M184 83.5l164.5 164c4.7 4.7 4.7 12.3 0 17L184 428.5c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17l132-131.4H12c-6.6 0-12-5.4-12-12v-10c0-6.6 5.4-12 12-12h279.9L160 107.6c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.6-4.7 12.2-4.7 16.9 0zM512 400V112c0-26.5-21.5-48-48-48H332c-6.6 0-12 5.4-12 12v8c0 6.6 5.4 12 12 12h132c8.8 0 16 7.2 16 16v288c0 8.8-7.2 16-16 16H332c-6.6 0-12 5.4-12 12v8c0 6.6 5.4 12 12 12h132c26.5 0 48-21.5 48-48z" />
                            </svg>
                            Login do Empregador 
                        </a>
                    </div>
                    <div class="col-12 col-md-1 text-end">
                        <a id="btn-register" class="btn btn-sm btn-success position-relative mb-2" href="{{url('dashboard/register')}}">Registrar</a>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f49c35;">
            <div class="container">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="https://www.jobs-oberpfalz.de/images/manual/logo.png" height="100" class="d-inline-block align-top" alt="Jobs Oberpfalz Logo" style="margin-top:-50px;">
                </a>
                <a href="{{url('/merkliste')}}" class="navbar-toggler d-none" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <svg style="fill:#ce3232; width:32px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" />
                    </svg>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" style="height:25px; fill: black;" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                                    <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                                </svg>
                                Empresas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active " aria-current="page" href="#">
                                <svg style="height:25px; fill: black;" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M313.6 352c-28.72 0-42.45 16-89.6 16s-60.88-16-89.56-16A134.4 134.4 0 0 0 0 486.4 25.6 25.6 0 0 0 25.6 512h396.8a25.6 25.6 0 0 0 25.6-25.6A134.4 134.4 0 0 0 313.6 352zM32.2 480a102.54 102.54 0 0 1 102.24-96c19.82 0 38.92 16 89.56 16 51 0 69.6-16 89.6-16a102.53 102.53 0 0 1 102.2 96zM88 160h12.66A124.32 124.32 0 0 0 96 192a128 128 0 0 0 256 0 124.32 124.32 0 0 0-4.66-32H360a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8h-8c0-51.52-35-94.46-82.33-107.52A31.89 31.89 0 0 0 240 0h-32a31.89 31.89 0 0 0-29.67 20.48C131 33.54 96 76.48 96 128h-8a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8zM272 54.91A79.94 79.94 0 0 1 320 128h-48zM208 32h32v96h-32zm-80 96a79.94 79.94 0 0 1 48-73.09V128zm6 32h180a92 92 0 0 1 6 32 96 96 0 0 1-192 0 92 92 0 0 1 6-32z" />
                                </svg>
                                Trabalhos por Setor
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <svg style="height:25px; fill: black;" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path d="M560 160c-2 0-4 .4-6 1.2L384 224l-10.3-3.6C397 185.5 416 149.2 416 123 416 55 358.7 0 288 0S160 55.1 160 123c0 11.8 4 25.8 10.4 40.6L20.1 216C8 220.8 0 232.6 0 245.7V496c0 9.2 7.5 16 16 16 2 0 4-.4 6-1.2L192 448l172 60.7c13 4.3 27 4.4 40 .2L555.9 456c12.2-4.9 20.1-16.6 20.1-29.7V176c0-9.2-7.5-16-16-16zM176 419.8L31.9 473l-1.3-226.9L176 195.6zM288 32c52.9 0 96 40.8 96 91 0 27-38.1 88.9-96 156.8-57.9-67.9-96-129.8-96-156.8 0-50.2 43.1-91 96-91zm80 444.2l-160-56.5V228.8c24.4 35.3 52.1 68 67.7 85.7 3.2 3.7 7.8 5.5 12.3 5.5s9-1.8 12.3-5.5c12.8-14.5 33.7-39.1 54.3-66.9l13.4 4.7zm32 .2V252.2L544.1 199l1.3 226.9zM312 128c0-13.3-10.8-24-24-24s-24 10.7-24 24c0 13.2 10.8 24 24 24s24-10.7 24-24z" />
                                </svg>
                                Trabalhos por Região
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="mb-4"><strong>Sites de empregos</strong> parceiros</h3>
                </div>
            </div>
            <div class="row text-center ">
                <div class="col-12 col-md-4 mb-3">
                    <a href="https://www.jobs-niederbayern.de" class="m-5 text-white">www.jobs-niederbayern.de</a>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <a href="https://www.jobs-mittelfranken.de" class="m-5 text-white">www.jobs-mittelfranken.de</a>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <a href="https://nomaden.jobs" class="m-5 text-white">nomaden.jobs</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 col-sm-6 text-md-start text-center mt-3">
                    Criado com o <a href="https://www.areya.de/software/cms">Areya CMS
                        <svg style="width: 11px; fill: black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M440,256H424a8,8,0,0,0-8,8V464a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V112A16,16,0,0,1,48,96H248a8,8,0,0,0,8-8V72a8,8,0,0,0-8-8H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V264A8,8,0,0,0,440,256ZM500,0,364,.34a12,12,0,0,0-12,12v10a12,12,0,0,0,12,12L454,34l.7.71L131.51,357.86a12,12,0,0,0,0,17l5.66,5.66a12,12,0,0,0,17,0L477.29,57.34l.71.7-.34,90a12,12,0,0,0,12,12h10a12,12,0,0,0,12-12L512,12A12,12,0,0,0,500,0Z"/></svg>
                    </a>
                </div>
                <div class="col-12 col-sm-6 text-md-end text-center mt-3">
                    <a href="#">Termos e Condições</a> | <a href="#">Política de Privacidade</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{storage('js/libs/jquery-3.6.0.min.js')}}"></script>
    <script defer src="{{storage('js/libs/bootstrap.bundle.min.js')}}"></script>
    @yield('scripts')
</body>
</html>