@extends('template.'.config('settings.template').'.content.master')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6 order-lg-last">

                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_gs9xrxtb.json" class="mx-auto d-block img-fluid mt-lg-5"  background="transparent"  speed="1"  style="width: 85%; height: 85%;"  loop  autoplay></lottie-player>

            </div>
            <div class="col-12 col-md-6 order-lg-first">

                <h1 class="mt-lg-5">Error 500</h1>
                <p>Es ist ein Fehler aufgetreten aber wir kümmern uns darum!</p>

                <br>
                <br>
                <br>

            </div>


        </div>
    </div>

@stop