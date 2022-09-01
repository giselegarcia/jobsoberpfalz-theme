@extends('template.'.config('settings.template').'.content.layout')
@section("title", "Jobs-Oberpfalz.de | Finde hier die besten Jobs der Oberpfalz")
@section("style")
<link rel="stylesheet" href="{{storage('assets/stylee.css')}}">
<link rel="stylesheet" href="{{storage('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{storage('css/empregosporlocalidade.css')}}">
<link rel="stylesheet" href="{{storage('assets/img')}}"> 

<script type="text/javascript" src="{{storage('js/jquery-3.2.1.slim.min.js')}}"></script>
<script type="text/javascript" src="{{storage('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{storage('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{storage('js/app.js')}}"></script>
<script type="text/javascript" src="{{storage('js/empregosporlocalidade.js')}}"></script>
@stop
@section("body")

    @include ('template.'.config('settings.template').'.content.header')
    <main class="mt-5">
       
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <h1 class="display-4 py-5">Oberpfalz Jobs nach Regionen</h1>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                            <div class="col-md-4 col-lg-3 col-sm-6 mb-5">
                                <div class="card">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12 img-card">
                                                <img class="img-fluid pt-4" src="https://www.jobs-oberpfalz.de/uploads/lists/regensburg.jpg" alt="">
                                            </div>
                                            <div class="col-md-12 info-card">
                                                <p class="text-center">Jobs in Regensburg</p>
                                            </div>
                                            <div class="col-md-12 text-center mb-3">
                                                <a  href="#"class="vagas">0 jobs</a>
                                            </div>
                                        </div>
                                    </div>
                                            
                                        
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6 mb-5">
                                <div class="card">
                                    <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12">
                                                    <img class="img-fluid pt-4" src="https://www.jobs-oberpfalz.de/uploads/lists/weiden.jpg" alt="">
                                                </div>
                                                <div class="col-md-12 info-card">
                                                    <p class="text-center"> Jobs in Weiden</p>
                                                </div>
                                                <div class="col-md-12 text-center mb-3">
                                                    <a  href="#"class="vagas">0 jobs</a>
                                                </div>
                                            </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6 mb-5">
                                <div class="card">
                                <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12">
                                                    <img class="img-fluid pt-4" src="https://www.jobs-oberpfalz.de/uploads/lists/amberg.jpeg" alt="">
                                                </div>
                                                <div class="col-md-12 info-card">
                                                    <p class="text-center"> Jobs in Amberg</p>
                                                </div>
                                                <div class="col-md-12 text-center mb-3">
                                                    <a  href="#"class="vagas">0 jobs</a>
                                                </div>
                                            </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6 mb-5">
                                <div class="card">
                                <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12">
                                                    <img class="img-fluid pt-4" src="https://www.jobs-oberpfalz.de/uploads/lists/schwandorf.jpeg" alt="">
                                                </div>
                                                <div class="col-md-12 info-card">
                                                    <p class="text-center"> Jobs in Schwandorf</p>
                                                </div>
                                                <div class="col-md-12 text-center mb-3">
                                                    <a  href="#"class="vagas">0 jobs</a>
                                                </div>
                                            </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6 mb-5">
                                <div class="card">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img class="img-fluid pt-4" src="https://www.jobs-oberpfalz.de/uploads/lists/neumarkt.jpeg" alt="">
                                            </div>
                                            <div class="col-md-12 info-card">
                                                <p class="text-center">Jobs in Neumarkt</p>
                                            </div>
                                            <div class="col-md-12 text-center mb-3">
                                                <a  href="#"class="vagas">0 jobs</a>
                                            </div>
                                        </div>
                                    </div>
                                            
                                        
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6 mb-5">
                                <div class="card">
                                    <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12">
                                                    <img class="img-fluid pt-4" src="https://www.jobs-oberpfalz.de/uploads/lists/cham.jpg" alt="">
                                                </div>
                                                <div class="col-md-12 info-card">
                                                    <p class="text-center"> Jobs in Cham</p>
                                                </div>
                                                <div class="col-md-12 text-center mb-3">
                                                    <a  href="#"class="vagas">0 jobs</a>
                                                </div>
                                            </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6 mb-5">
                                <div class="card">
                                <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12">
                                                    <img class="img-fluid pt-4" src="https://www.jobs-oberpfalz.de/uploads/lists/neustadt.jpg" alt="">
                                                </div>
                                                <div class="col-md-12 info-card">
                                                    <p class="text-center"> Jobs in Neustadt</p>
                                                </div>
                                                <div class="col-md-12 text-center mb-3">
                                                    <a  href="#"class="vagas">0 jobs</a>
                                                </div>
                                            </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6 mb-5">
                                <div class="card">
                                <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12">
                                                    <img class="img-fluid pt-4" src="https://www.jobs-oberpfalz.de/uploads/lists/tirschenreuth.webp" alt="">
                                                </div>
                                                <div class="col-md-12 info-card">
                                                    <p class="text-center"> Jobs in Tirschenreuth</p>
                                                </div>
                                                <div class="col-md-12 text-center mb-3">
                                                    <a  href="#"class="vagas">0 jobs</a>
                                                </div>
                                            </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6 mb-5">
                                <div class="card">
                                    <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12">
                                                    <img class="img-fluid pt-4" src="https://www.nabburg.de/fileadmin/_processed_/4/9/csm_BlickaufdieAltstadt_37e573220c.jpg" alt="">
                                                </div>
                                                <div class="col-md-12 info-card">
                                                    <p class="text-center"> Jobs in Nabburg</p>
                                                </div>
                                                <div class="col-md-12 text-center mb-3">
                                                    <a  href="#"class="vagas">0 jobs</a>
                                                </div>
                                            </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6 mb-5">
                                <div class="card">
                                <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12">
                                                    <img class="img-fluid pt-4" src="https://avatars.mds.yandex.net/get-altay/2366463/2a000001722d80a2eb5cf410591c27e9a8fb/XXXL" alt="">
                                                </div>
                                                <div class="col-md-12 info-card">
                                                    <p class="text-center"> Jobs in Sulzbach-Rosenberg</p>
                                                </div>
                                                <div class="col-md-12 text-center mb-3">
                                                    <a  href="#"class="vagas">0 jobs</a>
                                                </div>
                                            </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6 mb-5">
                                <div class="card">
                                    <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-12">
                                                        <img class="img-fluid pt-4" src="https://www.jobs-oberpfalz.de/uploads/lists/tirschenreuth.webp" alt="">
                                                    </div>
                                                    <div class="col-md-12 info-card">
                                                        <p class="text-center"> Jobs in Eschenbach</p>
                                                    </div>
                                                    <div class="col-md-12 text-center mb-3 jobs">
                                                        <a  href="#"class="vagas">0 jobs</a>
                                                    </div>
                                                </div>
                                    </div>
                                    
                                </div>
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
