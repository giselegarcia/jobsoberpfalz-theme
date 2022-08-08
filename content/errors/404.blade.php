@extends('template.'.config('settings.template').'.content.master')
@section('head')
@section('meta_title', '404 Fehler | Seite nicht gefunden')
@section('meta_description', 'Die Angeforderte Seite existiert nicht oder nicht mehr.')
@stop

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-12 col-lg-6 order-lg-last">

            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets3.lottiefiles.com/packages/lf20_a3kesdek.json"  background="transparent" class="img-fluid"  speed="1"  style="width: 100%; height: 100%;"  loop  autoplay></lottie-player>
            </div>

            <div class="col-12 col-lg-6 order-lg-first">

                <h1 class="mt-lg-5">404 Fehler</h1>
                <p>Die angeforderte Seite existiert nicht oder nicht mehr.</p>
                <br>
                <br>
                <br>
                <br>
                <a href="{{url('/')}}" class="btn btn-ci">Zurück zur Startseite</a>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>


            </div>
        </div>
    </div>

@stop