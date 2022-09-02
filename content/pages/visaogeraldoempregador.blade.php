@extends('template.'.config('settings.template').'.content.layout')
@section("title", "Jobs-Oberpfalz.de | Finde hier die besten Jobs der Oberpfalz")
@section("style")
<link rel="stylesheet" href="{{storage('assets/stylee.css')}}">
<link rel="stylesheet" href="{{storage('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{storage('css/style.css')}}">
<link rel="stylesheet" href="{{storage('assets/img')}}"> 
<link rel="stylesheet" href="{{storage('css/visaogeraldoempregador.css')}}"> 

<script type="text/javascript" src="{{storage('js/jquery-3.2.1.slim.min.js')}}"></script>
<script type="text/javascript" src="{{storage('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{storage('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{storage('js/app.js')}}"></script>
<script type="text/javascript" src="{{storage('js/visaogeraldoempregador.js')}}"></script>
@stop
@section("body")

    @include ('template.'.config('settings.template').'.content.header')
    <main class="my-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <h1 class="display-4 mt-5 mb-3">Arbeitgeber in der Oberpfalz</h1>
                </div>
<!--Empresas job open-->
                <div class="col-md-12 mt-3">
                    <h3 class="">Empresas parceiras com vagas em aberto</h3>
                </div>

                <div class="col-md-12 mt-5">
                    <div class="row">
                    @for($i=1;$i<=6; $i++)
                        <div class="col-lg-2 col-md-3 col-sm-6">

                          
                                <div class="cards py-3">
                                   <div class="row">
                                        <div class="col-md-12 topo-cards pt-2">
                                            <img class="logo-empresa" src="https://www.jobs-oberpfalz.de/uploads/profile/312.jpg" alt="">
                                            <span class="text-center">0 jobs</span>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <div class="info-cards">
                                                <img class="img-cards"src="{{storage('img/icones/star.png')}}" alt="icon star">
                                                <p class="text-center">Auto-Teile-Unger</p>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                            
                   
                            
                        </div>
                    @endfor
                        
                        
                    </div>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="row">
                    @for($i=1;$i<=6; $i++)
                        <div class="col-lg-2 col-md-3 col-sm-6">

                          
                                <div class="cards py-3">
                                   <div class="row">
                                        <div class="col-md-12 topo-cards pt-2">
                                            <img class="logo-empresa" src="https://www.jobs-oberpfalz.de/uploads/profile/767.jpg" alt="">
                                            <span class="text-center">0 jobs</span>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <div class="info-cards">
                                                <p class="text-center">Auto-Teile-Unger</p>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                            
                   
                            
                        </div>
                    @endfor
                        
                        
                    </div>
                </div>
<!--Empresas job close-->
                <div class="col-md-12 mt-5">
                    <h3 class="pt-3">Empresas parceiras com vagas encerradas</h3>
                </div>

                <div class="col-md-12 mt-5">
                    <div class="row">
                    @for($i=1;$i<=6; $i++)
                        <div class="col-lg-2 col-md-3 col-sm-6">

                          
                                <div class="cards py-3">
                                   <div class="row">
                                        <div class="col-md-12 topo-cards pt-2">
                                            <img class="logo-empresa" src="https://www.jobs-oberpfalz.de/uploads/profile/1289.jpg" alt="">
                                           
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <div class="info-cards">
                                                <img class="img-cards"src="{{storage('img/icones/star.png')}}" alt="icon star">
                                                <p class="text-center">Auto-Teile-Unger</p>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                            
                   
                            
                        </div>
                    @endfor
                        
                        
                    </div>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="row">
                    @for($i=1;$i<=6; $i++)
                        <div class="col-lg-2 col-md-3 col-sm-6">

                          
                                <div class="cards py-3">
                                   <div class="row">
                                        <div class="col-md-12 topo-cards pt-2">
                                            <img class="logo-empresa" src="https://www.jobs-oberpfalz.de/uploads/profile/769.jpg" alt="">
                                           
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <div class="info-cards">
                                                <p class="text-center">Auto-Teile-Unger</p>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                            
                   
                            
                        </div>
                    @endfor
                        
                        
                    </div>
                </div>
            </div>
        </div>


    </main>
    @include ('template.'.config('settings.template').'.content.footer')
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{storage('assets/script.js')}}"></script>  
    
    @stop
