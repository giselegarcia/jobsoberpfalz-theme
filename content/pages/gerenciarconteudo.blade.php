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

    @include ('template.'.config('settings.template').'.content.headerauth')
    <main class="mt-5">
        <style>
            /* ===== Colours ===== */
            :root{
                --text-color: rgb(0, 0, 0);
                --text-hero: #000000;
            }
            body.dark{
                --text-color: #CCC;
                --text-hero: #CCC;   
            }
            h1,p{
                color: var(--text-hero);
            }
            .conteudo-cadastro{
                display:flex;
                justify-content: space-between;
                margin-top: 6rem;
                align-items:center;
            }
            .conteudo-cadastro>h1{
                font-size: 3rem;
                padding: 1rem 0;
            }
            .conteudo-cadastro button{
                background-color: rgb(244,156,53);
                border-radius: 5px;
                padding: 12px 12px;
                box-shadow: 2px 2px 5px rgb(0 0 0 / 50%);
                width: 100%;
            }
            .conteudo-cadastro button a{
                color: #ffffff;
                font-weight: 500;
            }
            .conteudo-cadastro button:hover{
                transform: scale(1.1);
            }

            a{
                text-decoration:none;
            }
            p{margin: 0 0;}
            a:hover{
                text-decoration:none;
            }
            .conteudo-cadastro-paineis{
                box-shadow: 0px 1px 2px rgb(0 0 0 / 50%);
                background: rgba(255, 255, 255, 0.1);
                border-radius: 5px;
                display:flex;
                flex-wrap:wrap;
                align-items:center;
                margin: 1rem 0;
                height:auto;
                

            }
            .paineis-img>img{
                max-width:100px;
            }
            .descricao-funcao{
                display:flex;
            }
            .descricao-funcao>img{
                max-width:24px;
                max-height:24px;
            }

            .descricao-funcao>p{
                font-size: 1.125rem;
                font-weight: 600;
                padding: 0 6px;
                flex-wrap:wrap;

            }
            .paineis-tipo-job .prime{
                border: 1px solid #232d60;
                background-color: #232d60;
                color: #ffffff;
                text-align:center;
                position:relative;
                border-radius: 5px;
            }
            .paineis-tipo-job>img{
                position:absolute;
                top:-3px;
                max-width:24px;
                max-height:24px;
            }
            .plano{
                text-align:center;
            }
            @media(max-width: 770px){
                

                
            }

        </style>
       
       <div class="container">
           <div class="row">
                <div class="col-md-12 conteudo-cadastro">
                    <h1>Meine Stellenanzeigen</h1>
                    <div>
                        <button><a href="{{url('/publicaremprego')}}"> Neue Stellenanzelge anlegen</a></button>
                    </div>
                </div>

                @for($i=1;$i<=8; $i++)
                    <div class="col-md-12 conteudo-cadastro-paineis">
                        <div class=" col-sm-6 col-md-1 paineis-img">
                            <img src="https://www.areya.de/images/areya-big-logo.png" alt="">
                        </div>
                        <div class="col-sm-6 col-md-4 descricao-funcao">
                            <p>Desenvolvedor Full-Stack integral</p>
                            <img src="{{storage('img/search.png')}}" alt="">
                        </div>
                        <div class="col-sm-6 col-md-2 paineis-tipo-job">
                            <p class="prime">Top Job buchem</p>
                            <img class="img-cards"src="{{storage('img/icones/star.png')}}" alt="icon star">
                            <p class="plano">249€| 30 Tage</p>
                        </div>
                        <div class="col-sm-6 col-md-2">
                        <a href=""><img src="{{storage('img/icones/analise-de-dados.png')}}" alt=""></a>
                        <p>32 views | xxxxxxx</p>
                        </div>
                        <div class="col-sm-12 col-md-2 btn-drop-lista">

                            <div class="dropdown show">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLinka" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                bearbeiten / löschen
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLinka">
                                    <a class="dropdown-item" href="#">bearbeiten</a>
                                    <a class="dropdown-item" href="#">löschen</a>
                                </div>
                            </div>
                        </div>
                        
                        
                
                    </div>
                @endfor
                
               
           </div>
       </div>

               

   </main>
    @include ('template.'.config('settings.template').'.content.footer')
    <script>
            $(document).ready(()=>{
            //_________________________HEADER
            const body = document.querySelector("body"),
            nav = document.querySelector("nav"),
            modeToggle = document.querySelector(".dark-light"),
            searchToggle = document.querySelector(".searchToggle"),
            sidebarOpen = document.querySelector(".sidebarOpen"),
            siderbarClose = document.querySelector(".siderbarClose");

            let getMode = localStorage.getItem("mode");
                if(getMode && getMode === "dark-mode"){
                body.classList.add("dark");
                }

            // js code to toggle dark and light mode
                modeToggle.addEventListener("click" , () =>{
                    modeToggle.classList.toggle("active");
                    body.classList.toggle("dark");

                    // js code to keep user selected mode even page refresh or file reopen
                    if(!body.classList.contains("dark")){
                        localStorage.setItem("mode" , "light-mode");
                    }else{
                        localStorage.setItem("mode" , "dark-mode");
                    }
                });

            // js code to toggle search box
                    searchToggle.addEventListener("click" , () =>{
                    searchToggle.classList.toggle("active");
                });
            
                
            //   js code to toggle sidebar
            sidebarOpen.addEventListener("click" , () =>{
                nav.classList.add("active");
            });

            body.addEventListener("click" , e =>{
                let clickedElm = e.target;

                if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
                    nav.classList.remove("active");
                }
        });


        });
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{storage('assets/script.js')}}"></script>  
    
    
    @stop
