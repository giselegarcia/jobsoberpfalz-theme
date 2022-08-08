@extends('template.'.config('settings.template').'.content.master')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 ">
            <br>
            <br>
            <br>
            <div class="card" style="text-align: center; background-color: #f8f8f8">

                <h2 class="card-header">Bitte bestätigen Sie Ihre E-Mail</h2>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <br
                    <br>
                        Wir haben soeben eine Nachricht an Ihre E-Mail <span class="ci-color fw-bold">{{ Auth::user()->email }}</span> versandt.


                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_OjG2Td.json" class="img-fluid mx-auto"  background="transparent"  speed="1"  style="width: 400px; height: 400px;"  loop  autoplay></lottie-player>
                        Bitte klicken Sie zur Bestätigung der Adresse auf den Link

                        <br>



                        <br>
                        <br>

                        <hr>




                        <br>
                        <h4>E-Mail nicht erhalten?</h4>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <a class="ci-color" href="">E-Mail nochmals senden</a>
                    </form>
                </div>
                <br>



            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
@endsection
