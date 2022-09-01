@extends('template.'.config('settings.template').'.content.layout')
@section("title", "Jobs-Oberpfalz.de | Finde hier die besten Jobs der Oberpfalz")
@section("style")
<link rel="stylesheet" href="{{storage('assets/stylee.css')}}">
<link rel="stylesheet" href="{{storage('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{storage('css/empregosporsetor.css')}}">
<link rel="stylesheet" href="{{storage('assets/img')}}"> 

<script type="text/javascript" src="{{storage('js/jquery-3.2.1.slim.min.js')}}"></script>
<script type="text/javascript" src="{{storage('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{storage('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{storage('js/app.js')}}"></script>
<script type="text/javascript" src="{{storage('js/empregosporsetor.js')}}"></script>
@stop
@section("body")

    @include ('template.'.config('settings.template').'.content.header')
    <main class="mt-5">
       
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <h1 class="display-4 py-5">Arbeitgeber in der Oberpfalz</h1>
                </div>
                <div class="col-md-12">
                    <ol type = "a" class="mb-5">
                        <li><a href="https://www.jobs-oberpfalz.de/gesundheitswesen">Assistência médica</a></li>
                        <li> <a href="https://www.jobs-oberpfalz.de/kundenservice">Atendimento ao Cliente</a></li>
                        <li><a href="https://www.jobs-oberpfalz.de/wissenschaft-ingenieurwesen">Ciência e engenharia</a></li>
                        <li><a href="https://www.jobs-oberpfalz.de/computer-it">Computadores e TI</a></li>
                        <li><a href="https://www.jobs-oberpfalz.de/bauwesen">Construção</a></li>
                        <li><a href="https://www.jobs-oberpfalz.de/buchhaltung-finanzen">Contabilidade e finanças</a></li>
                        <li><a href="https://www.jobs-oberpfalz.de/vertrieb-einzelhandel">Distribuição e Varejo</a></li>
                        <li><a href="https://www.jobs-oberpfalz.de/verwaltung-buro">Escritório de Administração</a></li>
                        <li><a href="https://www.jobs-oberpfalz.de/gastronomie">Gastronomia</a></li>
                        <li><a href="https://www.jobs-oberpfalz.de/management">Gestão</a></li>
                        <li><a href="https://www.jobs-oberpfalz.de/installation-wartung-instandsetzung">Instalação, manutenção e reparo</a></li>
                        <li><a href="https://www.jobs-oberpfalz.de/iframe">Iframe</a></li>
                        <li><a href="https://www.jobs-oberpfalz.de/produktion-lager">Produção e Armazém</a></li>
                        <li><a href="https://www.jobs-oberpfalz.de/personalwesen">Recursos humanos</a></li>
                        <li><a href="https://www.jobs-oberpfalz.de/offentlicher-dienst">Serviço público</a></li>
                        <li><a href="https://www.jobs-oberpfalz.de/transport-logistik">Transporte e Logística</a></li>
                        <li><a href="https://www.jobs-oberpfalz.de/bildung">Treinamento</a></li>
                        <li><a href="https://www.jobs-oberpfalz.de/reisen-unterhaltung">Viagens e entretenimento</a></li>
                    </ol>
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
