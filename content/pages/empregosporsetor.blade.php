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

    @include ('template.'.config('settings.template').'.content.header')
    <main class="">
    <div class="container">
        

        <div class="container">
            <style>
                .container{
                    margin-top:300px;
                }
            </style>
            <div class="row">

                <div class="col-12">
                    <br>
                    <br>

                    <h1>Jobangebote nach Branchen</h1>

                    <br>
                </div>


                <style>
                    .jobbranche{
                        font-size: 19px;
                        border: 2px solid #f49c35;
                        background-color: #f8f8f8;
                        color: black;
                        padding:10px;
                        margin: 8px;
                        

                    }

                    .jobbranche:hover{
                        border: 2px solid #ec8b19;
                        background-color: #f49c35;
                        color: white;
                    }


                    #jobbranche{
                        text-align: center;
                        margin-top:30px;
                        overflow: scroll-x;
                        margin-bottom: 20vh;


                    }
                    #jobbranche a:hover, #jobbranche a:active{
                        text-decoration: none;
                    }

                </style>

                <div id="jobbranche">

                    
                        <a href="https://www.jobs-oberpfalz.de/iframe">
                            <div class="badge primary jobbranche">
                                Iframe
                            </div>
                        </a>
                    
                        <a href="https://www.jobs-oberpfalz.de/wissenschaft-ingenieurwesen">
                            <div class="badge primary jobbranche">
                                Wissenschaft &amp; Ingenieurwesen
                            </div>
                        </a>
                    
                        <a href="https://www.jobs-oberpfalz.de/computer-it">
                            <div class="badge primary jobbranche">
                                Computer &amp; IT
                            </div>
                        </a>
                    
                        <a href="https://www.jobs-oberpfalz.de/gesundheitswesen">
                            <div class="badge primary jobbranche">
                                Gesundheitswesen
                            </div>
                        </a>
                    
                        <a href="https://www.jobs-oberpfalz.de/management">
                            <div class="badge primary jobbranche">
                                Management
                            </div>
                        </a>
                    
                        <a href="https://www.jobs-oberpfalz.de/produktion-lager">
                            <div class="badge primary jobbranche">
                                Produktion &amp; Lager
                            </div>
                        </a>
                    
                        <a href="https://www.jobs-oberpfalz.de/buchhaltung-finanzen">
                            <div class="badge primary jobbranche">
                                Buchhaltung &amp; Finanzen
                            </div>
                        </a>
                    
                        <a href="https://www.jobs-oberpfalz.de/vertrieb-einzelhandel">
                            <div class="badge primary jobbranche">
                                Vertrieb &amp; Einzelhandel
                            </div>
                        </a>
                    
                        <a href="https://www.jobs-oberpfalz.de/bauwesen">
                            <div class="badge primary jobbranche">
                                Bauwesen
                            </div>
                        </a>
                    
                        <a href="https://www.jobs-oberpfalz.de/installation-wartung-instandsetzung">
                            <div class="badge primary jobbranche">
                                Installation, Wartung &amp; Instandsetzung
                            </div>
                        </a>
                    
                        <a href="https://www.jobs-oberpfalz.de/verwaltung-buro">
                            <div class="badge primary jobbranche">
                                Verwaltung &amp; Büro
                            </div>
                        </a>
                    
                        <a href="https://www.jobs-oberpfalz.de/bildung">
                            <div class="badge primary jobbranche">
                                Bildung
                            </div>
                        </a>
                    
                        <a href="https://www.jobs-oberpfalz.de/transport-logistik">
                            <div class="badge primary jobbranche">
                                Transport &amp; Logistik
                            </div>
                        </a>
                    
                        <a href="https://www.jobs-oberpfalz.de/personalwesen">
                            <div class="badge primary jobbranche">
                                Personalwesen
                            </div>
                        </a>
                    
                        <a href="https://www.jobs-oberpfalz.de/gastronomie">
                            <div class="badge primary jobbranche">
                                Gastronomie
                            </div>
                        </a>
                    
                        <a href="https://www.jobs-oberpfalz.de/reisen-unterhaltung">
                            <div class="badge primary jobbranche">
                                Reisen &amp; Unterhaltung
                            </div>
                        </a>
                    
                        <a href="https://www.jobs-oberpfalz.de/kundenservice">
                            <div class="badge primary jobbranche">
                                Kundenservice
                            </div>
                        </a>
                    
                        <a href="https://www.jobs-oberpfalz.de/offentlicher-dienst">
                            <div class="badge primary jobbranche">
                                Öffentlicher Dienst
                            </div>
                        </a>
                    


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
