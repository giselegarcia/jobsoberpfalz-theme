@extends('template.'.config('settings.template').'.content.master')
@section('meta_title', 'Meine Stellenanzeigen')
@section('head')
<meta name="csrf-token" content="{{csrf_token()}}"/>
<meta name="url-create-payment-method" content="{{route('createPaymentMethod')}}"/>
<meta name="url-confirm-payment-method" content="{{route('confirmPaymentMethod')}}"/>
<meta name="stripe-key" content="{{env('STRIPE_KEY')}}"/>
<link rel="stylesheet" href="{{asset('template/css/stripe-checkout.css')}}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
@stop
@section('content')
@if (session('profile_verify'))
<div class="col-12 col-md-6 offset-md-3">
    <br>
    <br>
    <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
        <svg style="width: 14px; fill: #0f5132;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
            <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z" />
        </svg>
        Arbeitgeberprofil erfolgreich angelegt!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif
@if(session()->has('success'))
<div class="row">
    <div class="col-3 offset-2 ">

        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_ynz5xr.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player>


    </div>
    <div class="col-6">
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2>Vielen Dank für Ihre Bestellung!</h2>
        <i>Ihre Stelle wird ab sofort als Premium Anzeige ausgespielt.
    </div>
    <div class="col-12">
        <br>
        <br>
        <br>
        <hr>
        <br>
    </div>

</div>
@endif
<div class="row">
    <div class="col-6 mt-5 mb-5 text-right">
        <h1 class="h2">
            <svg style="width: 22px; padding-bottom: 8px; margin-right: 4px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zm-22.6 22.7c2.1 2.1 3.5 4.6 4.2 7.4H256V32.5c2.8.7 5.3 2.1 7.4 4.2l83.9 83.9zM336 480H48c-8.8 0-16-7.2-16-16V48c0-8.8 7.2-16 16-16h176v104c0 13.3 10.7 24 24 24h104v304c0 8.8-7.2 16-16 16zm-48-244v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm0 64v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm0 64v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12z" />
            </svg>
            Meine Stellenanzeigen
        </h1>
    </div>
    @unless ($contents->count() == 0)
    <div class="col-6 mt-5" style="text-align: right">
        <a href="{{ route('dashboard.contents.create', [$typeModel->slug])}}" class="btn btn-ci btn-lg check-user-is-premium">
            <svg style="width: 13px; fill: white; margin-bottom: 2px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path d="M376 232H216V72c0-4.42-3.58-8-8-8h-32c-4.42 0-8 3.58-8 8v160H8c-4.42 0-8 3.58-8 8v32c0 4.42 3.58 8 8 8h160v160c0 4.42 3.58 8 8 8h32c4.42 0 8-3.58 8-8V280h160c4.42 0 8-3.58 8-8v-32c0-4.42-3.58-8-8-8z" />
            </svg>
            Neue Stellenanzeige anlegen
        </a>
    </div>
    @endunless
</div>
<div class="row text-center">
    <style>
        .btn-outline-ci {
            background-color: #fff;
            border-color: #ec8b19;
            color: #f49c35
        }

        .btn-outline-ci:hover {
            background-color: #f49c35;
            color: #fff;
        }
    </style>
    <div class="mx-auto">
        @if ($types->count() >= 2)
        <div class="btn-group btn-group-toggle mx-auto" data-toggle="buttons">
            @foreach ($types as $type)
            <label class="btn btn-lg {{ $type->id == $typeModel->id ? 'btn-primary' : 'btn-outline-primary' }}" onclick='window.location.href = "{{ url('/dashboard/content/') }}/{{ $type->slug }}";'>
                <input type="radio" name="options" id="option1" {{ $type->id == $typeModel->id ? 'checked' : '' }}> <i class="fal fa-{{ $type->icon}}"></i> {{ $type->name }}
            </label>
            @endforeach
        </div>
        @endif
    </div>
</div>
<div class="row">
    @if ($contents->count() == 0)
    <div class="col-xs-12">
        <div class="text-center">
            <br>
            <br>
            <br>
            <br>
            <i>Sie haben noch keine Stellenanzeige angelegt.</i>
            <br>
            <br>
            <a href="{{ route('dashboard.contents.create', [$typeModel->slug]) }}" class="btn btn-ci check-user-is-premium">
                <svg style="width: 14px; fill: white; margin-bottom: 2px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M376 232H216V72c0-4.42-3.58-8-8-8h-32c-4.42 0-8 3.58-8 8v160H8c-4.42 0-8 3.58-8 8v32c0 4.42 3.58 8 8 8h160v160c0 4.42 3.58 8 8 8h32c4.42 0 8-3.58 8-8V280h160c4.42 0 8-3.58 8-8v-32c0-4.42-3.58-8-8-8z" />
                </svg>
                Erste Stellenanzeige anlegen</a>
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
            <br>
            <br>
            <br>
        </div>
    </div>
    @else
    <div class="row mb-4 text-center" style="font-weight: bold">
        <div class="col-1">
            <h6 style="font-weight: bold">Bild</h6>
        </div>
        <div class="col-4">
            <h6 style="font-weight: bold">Stellen Titel</h6>
        </div>
        <div class="col-2 offset-4">
            <h6 style="font-weight: bold">Statistiken</h6>
        </div>
        <div class="col-1  ">
            <h6 style="font-weight: bold">Aktionen</h6>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel">Top Job buchen</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="mt-3 mb-3">Leistungsbeschreibung</h5>
                            <p class="fs-6">
                                Mit dem Top Job wird Ihre Anzeige immer vor allen anderen Anzeigen ausgespielt und erhöhen somit Ihre Reichweite. Ausserdem wird die Anzeige in einem auffalenden Design gezeigt.
                            </p>
                            <ul>
                                <li>30 Tage Laufzeit</li>
                                <li>2 Refresh</li>
                                <li>Statisiken</li>
                                <li>Keine CPC Kosten</li>
                                <li>Bis zu 72x mehr Reichweite</li>
                                <li>HTML Design möglich</li>
                            </ul>
                            <ul></ul>
                            <h2 class="fs-2 ci-color text-end fw-bold">249 € <span class="text-muted fw-normal" style="font-size: 12px; margin-right: 35px;">zzgl. Mwst.</span></h2>
                            <div class="text-end">
                                <button type="button" id="btn-buy-now" class="btn btn-success btn-lg text-end">Jetzt verbindlich buchen</button>
                            </div>
                            <br>
                            <br>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h5 class="mt-3 mb-3">Vorschau:</h5>
                        </div>
                        <div class="border" title="Premium Stellen werden mit höchster Priorität vor allen anderen Anzeigen ausgespielt.">
                            <div class="col-12 " id="1">
                                <div class="card shadow-lg" style="background-color: #daeed8; cursor: default" title="Dies ist eine Vorschau wie Ihre Premium stelle aussehen könnte">
                                    <div class="text-center rounded-top" style="font-size: 12px; background-color: #3daa7352">
                                        <svg style="fill: black; width: 12px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path d="M463.7 0H112.3c-4.2 0-8.1 2.2-10.3 5.8L1.7 168.6c-2.7 4.4-2.2 10.1 1.2 14l276 325.2c4.8 5.6 13.4 5.6 18.2 0l276-325.2c3.4-3.9 3.8-9.6 1.2-14L474 5.8c-2.2-3.6-6.1-5.8-10.3-5.8zm-13.6 36l74.3 124h-83L384.6 36h65.5zM345 36l56.8 124H174.1L231 36h114zm-219.1 0h65.5l-56.8 124h-83l74.3-124zM61.2 192h73L216 384 61.2 192zm112 0h229.5L288 455.8 173.2 192zM360 384l81.8-192h73L360 384z" />
                                        </svg>
                                        Premium Jobangebot
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3 col-lg-1">
                                                <img id="static-backdrop-author-image" src="" height="70px" class="border rounded" alt="Logo">
                                            </div>
                                            <div class="col-12 col-lg-9 ">
                                                <h5 id="static-backdrop-content-title" class="card-title" style="margin-top: 10px;">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit!
                                                </h5>
                                            </div>
                                            <div class="col-7 col-lg-2 text-end ">
                                                <h6 class="card-subtitle mb-2 text-muted d-lg-block text-center" style="font-size: 12px;margin-right: -24px;">vor 38 Minuten</h6>
                                                <div class="btn btn-ci btn-sm" style="cursor: default">
                                                    Job ansehen
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <img src="https://ik.imagekit.io/areya/tr:bl-4/Screenshot_from_2022-03-30_20-42-06_1__ZmEQEFfBH.png?ik-sdk-version=javascript-1.4.3&updatedAt=1648666954260" class="img-fluid">
                            </div>
                        </div>
                        <br>
                        <br>
                        <hr>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <a class="link-danger text-start" href="#" data-bs-dismiss="modal">Abbrechen</a>
                        </div>
                        <div class="col-6 text-end">
                            <button type="button" class="btn btn-success btn-lg">Jetzt verbindlich buchen</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="job-statistik" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel">Statistik</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <img title="Noch in Entwicklung... Funktion wird IHnen bald zur Verfügung stehen" src="https://ik.imagekit.io/areya/tr:bl-5,tr:ot-Funktion%20wird%20Ihnen%20bald%20zur%20Verf%C3%BCgung%20stehen,ots-25,otc-000000,otbg-FFFFFF70,otp-30/Screenshot_from_2022-03-30_20-20-04_3MxXj0dvC.png?ik-sdk-version=javascript-1.4.3&updatedAt=1648664453266" class="img-fluid">
                        </div>
                        <div class="col text-center mt-5 mb-5">
                            <h4>Besucher</h4>
                            <span class="fs-3 text-muted">2732</span>
                        </div>
                        <div class="col text-center mt-5 mb-5">
                            <h4>Bewerbungen</h4>
                            <span class="fs-3 text-muted">34</span>
                        </div>
                        <div class="col text-center mt-5 mb-5">
                            <h4>Quote</h4>
                            <span class="fs-3 text-success">2,7 %</span>
                        </div>
                        <div class="col-10 offset-1">
                            <hr>
                            <h5 class="mt-3 mb-4">
                                Optimierungsbedarf?
                            </h5>
                            <p>Wir kümmern uns um Ihren Erfolg! Wenn Sie mit den Ergebnissen Ihrer Kampagnen nicht zufrieden sein sollten oder auch einfach nur Hilfe benötigen rufen Sie uns gerne an!
                            </p>
                            <div class="text-center mb-5 mt-3">
                                <a href="tel:+4996120498290" class="ci-color fs-3">
                                    <svg style="fill: #f49c35; width: 24px; margin-right: 8px; margin-top:-7px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M370.43 192.25A64 64 0 0 0 314.86 160H197.14a64 64 0 0 0-55.57 32.25L36.22 376.62A32 32 0 0 0 32 392.5V448a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32v-55.5a32 32 0 0 0-4.22-15.88zM256 384a72 72 0 1 1 72-72 72 72 0 0 1-72 72zm250.18-261C436.76 65 347.38 32 256 32S75.24 65 5.82 123A16.45 16.45 0 0 0 0 135.64V192a16 16 0 0 0 16 16h70.11a16 16 0 0 0 14.31-8.85L128 128c39.9-17.28 83.2-24 128-24 44.77 0 88.07 6.72 128 24l27.58 71.15a16 16 0 0 0 14.31 8.85H496a16 16 0 0 0 16-16v-56.36a16.45 16.45 0 0 0-5.82-12.64z" />
                                    </svg>
                                    0961 / 20498290
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($contents as $content)
        @if($content->premium_type == 'premium')
        <div class="col-xs-12">
            <div class="col-12 " style="padding-bottom: 1rem;" id="1">
                <div class="card" style="background-color: #daeed8;">
                    <div class="text-center rounded-top" style="font-size: 12px; background-color: #3daa7352">
                        <svg style="fill: black; width: 12px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M463.7 0H112.3c-4.2 0-8.1 2.2-10.3 5.8L1.7 168.6c-2.7 4.4-2.2 10.1 1.2 14l276 325.2c4.8 5.6 13.4 5.6 18.2 0l276-325.2c3.4-3.9 3.8-9.6 1.2-14L474 5.8c-2.2-3.6-6.1-5.8-10.3-5.8zm-13.6 36l74.3 124h-83L384.6 36h65.5zM345 36l56.8 124H174.1L231 36h114zm-219.1 0h65.5l-56.8 124h-83l74.3-124zM61.2 192h73L216 384 61.2 192zm112 0h229.5L288 455.8 173.2 192zM360 384l81.8-192h73L360 384z" />
                        </svg>
                        Premium Jobangebot
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-1">
                                @isset($content->image)
                                <img src="{{$content->image}}" class="img-fluid border rounded">
                                @else
                                <img src="{{asset('system/images/no-image.jpg')}}" class="img-fluid border rounded" title="Inhalt hat kein Titelbild">
                                @endisset
                            </div>
                            <div class="col-12 col-lg-6 ">
                                <h5 class="card-title" style="margin-top: 10px;">
                                    @if($content->approved == 1)
                                    <a href="{{route_content($content)}}" target="_blank">{{Str::limit($content->title, 60,'...')}} <svg style="width: 14px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M440,256H424a8,8,0,0,0-8,8V464a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V112A16,16,0,0,1,48,96H248a8,8,0,0,0,8-8V72a8,8,0,0,0-8-8H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V264A8,8,0,0,0,440,256ZM500,0,364,.34a12,12,0,0,0-12,12v10a12,12,0,0,0,12,12L454,34l.7.71L131.51,357.86a12,12,0,0,0,0,17l5.66,5.66a12,12,0,0,0,17,0L477.29,57.34l.71.7-.34,90a12,12,0,0,0,12,12h10a12,12,0,0,0,12-12L512,12A12,12,0,0,0,500,0Z" />
                                        </svg> </a>
                                    @else()
                                    {{Str::limit($content->title, 60,'...')}}
                                    @endif
                                    @isset($content->import_id)
                                    <span title="This Content was imported automatically" style="cursor: help; font-size: 10px;" class="badge bg-secondary ">Import</span>
                                    @endisset
                                </h5>
                            </div>
                            <div class="col-12 col-lg-2 text-center">
                                <span type="button" class="badge rounded-pill bg-success" style="cursor: default">
                                    Top Job aktiv
                                </span>
                                <br>
                                <span class="text-muted" style="font-size: 12px;"">
                                    Noch {{timeleft($content->premium_until)}} Tage Aktiv
                                </span>
                            </div>
                            <div class=" col-12 col-lg-2 text-center">
                                    <a type="button" class="btn btn-secondary-outline btn-sm" data-bs-toggle="modal" data-bs-target="#job-statistik">
                                        <svg style="fill: currentColor; width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M504 416H32V72c0-4.42-3.58-8-8-8H8c-4.42 0-8 3.58-8 8v360c0 8.84 7.16 16 16 16h488c4.42 0 8-3.58 8-8v-16c0-4.42-3.58-8-8-8zM98.34 263.03c-3.12 3.12-3.12 8.19 0 11.31l11.31 11.31c3.12 3.12 8.19 3.12 11.31 0l72.69-72.01 84.69 84.69c6.25 6.25 16.38 6.25 22.63 0l93.53-93.53 44.04 44.04c4.95 4.95 11.03 7.16 17 7.16 12.48 0 24.46-9.7 24.46-24.34V112.19c0-8.94-7.25-16.19-16.19-16.19H344.34c-21.64 0-32.47 26.16-17.17 41.46l44.71 44.71-82.22 82.22-84.63-84.63c-6.23-6.23-16.32-6.25-22.57-.05l-84.12 83.32zM362.96 128H448v85.04L362.96 128z" />
                                        </svg>
                                        Statistik
                                    </a>
                                    <br>
                                    <span class="text-muted" style="font-size: 12px;">
                                        38 Views | 2 Bewerber
                                    </span>
                            </div>
                            <div class="col-3 col-lg-1 text-end">
                                <div class="btn-group">
                                    <button type="button" class="btn">
                                        @if($content->approved != 1)
                                            @if ($content->approved == 2)
                                            <a title="Beitrag veröffentlicht. Klicken um inaktiv zu setzen" id="approved-{{$content->id}}">
                                                <svg style="width: 18px; fill: orange" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" />
                                                </svg>
                                            </a>
                                            @else
                                            <a title="Beitrag inaktiv. Klicken um zu aktivieren" id="approved-{{$content->id}}">
                                                <svg style="width: 18px; fill: red" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" />
                                                </svg>
                                            </a>
                                            @endif
                                        @else
                                        <a title="Beitrag veröffentlicht." id="approved-{{$content->id}}">
                                            <svg style="width: 18px; fill: green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" />
                                            </svg>
                                        </a>
                                        @endif
                                    </button>
                                    <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                Job refresh
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item check-user-is-premium" href="{{ route('dashboard.viewEditContent', [$content->type->slug, $content->id]) }}">
                                                <svg style="width: 14px; margin-bottom: 2px; fill: black; margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z" />
                                                </svg>
                                                Job bearbeiten
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void" onclick="removeNach({{$content->id}})">
                                                <svg style="height: 14px; margin-bottom: 2px; margin-right: 10px; fill: red;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path d="M296 432h16a8 8 0 0 0 8-8V152a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8zm-160 0h16a8 8 0 0 0 8-8V152a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8zM440 64H336l-33.6-44.8A48 48 0 0 0 264 0h-80a48 48 0 0 0-38.4 19.2L112 64H8a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h24v368a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V96h24a8 8 0 0 0 8-8V72a8 8 0 0 0-8-8zM171.2 38.4A16.1 16.1 0 0 1 184 32h80a16.1 16.1 0 0 1 12.8 6.4L296 64H152zM384 464a16 16 0 0 1-16 16H80a16 16 0 0 1-16-16V96h320zm-168-32h16a8 8 0 0 0 8-8V152a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8z" />
                                                </svg>
                                                Job löschen
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <br>
                                <span class="text-muted" style="font-size: 12px;" title="{{date('d.m.Y | H:i', strtotime($content->updated_at))}} Uhr">
                                    {{ $content->updated_at->diffForHumans() }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="col-12" style="padding-bottom: 1rem;" id="nach{{$content->id}}">
            <div class="card" style="background-color: #f8f8f8;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-1">
                            @isset($content->image)
                            <img src="{{$content->image}}" class="img-fluid border rounded">
                            @else
                            <img src="{{asset('system/images/no-image.jpg')}}" class="img-fluid border rounded" title="Inhalt hat kein Titelbild">
                            @endisset
                        </div>
                        <div class="col-12 col-lg-6 ">
                            <h5 class="card-title" style="margin-top: 10px;">
                                @if($content->approved == 1)
                                <a href="{{route_content($content)}}" target="_blank">{{Str::limit($content->title, 60,'...')}} <svg style="width: 14px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M440,256H424a8,8,0,0,0-8,8V464a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V112A16,16,0,0,1,48,96H248a8,8,0,0,0,8-8V72a8,8,0,0,0-8-8H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V264A8,8,0,0,0,440,256ZM500,0,364,.34a12,12,0,0,0-12,12v10a12,12,0,0,0,12,12L454,34l.7.71L131.51,357.86a12,12,0,0,0,0,17l5.66,5.66a12,12,0,0,0,17,0L477.29,57.34l.71.7-.34,90a12,12,0,0,0,12,12h10a12,12,0,0,0,12-12L512,12A12,12,0,0,0,500,0Z" />
                                    </svg> </a>
                                @else()
                                {{Str::limit($content->title, 60,'...')}}
                                @endif
                                @isset($content->import_id)
                                <span title="This Content was imported automatically" style="cursor: help; font-size: 10px;" class="badge bg-secondary ">Import</span>
                                @endisset
                            </h5>
                        </div>
                        <div class="col-12 col-lg-2 text-center">
                            <a href="#" data-premium-url="{{route('set-content-premium', ['contentId' => $content->id])}}" data-content-title="{{$content->title}}" data-author-image="{{$content->user->gravatar()}}" data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button" class="btn btn-sm btn-outline-success position-relative mb-1">
                                <svg style="fill: currentColor; width: 12px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path d="M463.7 0H112.3c-4.2 0-8.1 2.2-10.3 5.8L1.7 168.6c-2.7 4.4-2.2 10.1 1.2 14l276 325.2c4.8 5.6 13.4 5.6 18.2 0l276-325.2c3.4-3.9 3.8-9.6 1.2-14L474 5.8c-2.2-3.6-6.1-5.8-10.3-5.8zm-13.6 36l74.3 124h-83L384.6 36h65.5zM345 36l56.8 124H174.1L231 36h114zm-219.1 0h65.5l-56.8 124h-83l74.3-124zM61.2 192h73L216 384 61.2 192zm112 0h229.5L288 455.8 173.2 192zM360 384l81.8-192h73L360 384z" />
                                </svg>
                                Top Job buchen
                            </a>
                            <br>
                            <span class="text-muted" style="font-size: 12px;">249€ / 30 Tage</span>
                        </div>
                        <div class="col-12 col-lg-2 text-center">
                            <a type="button" class="btn btn-secondary-outline btn-sm" data-bs-toggle="modal" data-bs-target="#job-statistik">
                                <svg style="fill: currentColor; width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M504 416H32V72c0-4.42-3.58-8-8-8H8c-4.42 0-8 3.58-8 8v360c0 8.84 7.16 16 16 16h488c4.42 0 8-3.58 8-8v-16c0-4.42-3.58-8-8-8zM98.34 263.03c-3.12 3.12-3.12 8.19 0 11.31l11.31 11.31c3.12 3.12 8.19 3.12 11.31 0l72.69-72.01 84.69 84.69c6.25 6.25 16.38 6.25 22.63 0l93.53-93.53 44.04 44.04c4.95 4.95 11.03 7.16 17 7.16 12.48 0 24.46-9.7 24.46-24.34V112.19c0-8.94-7.25-16.19-16.19-16.19H344.34c-21.64 0-32.47 26.16-17.17 41.46l44.71 44.71-82.22 82.22-84.63-84.63c-6.23-6.23-16.32-6.25-22.57-.05l-84.12 83.32zM362.96 128H448v85.04L362.96 128z" />
                                </svg>
                                Statistik
                            </a>
                            <br>
                            <span class="text-muted" style="font-size: 12px;">
                                38 Views | 2 Bewerber
                            </span>
                        </div>
                        <div class="col-3 col-lg-1 text-end">
                            <div class="btn-group">
                                <button type="button" class="btn">
                                    @if($content->approved != 1)
                                        @if ($content->approved == 2)
                                        <a title="Beitrag veröffentlicht. Klicken um inaktiv zu setzen" id="approved-{{$content->id}}">
                                            <svg style="width: 18px; fill: orange" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" />
                                            </svg>
                                        </a>
                                        @else
                                        <a title="Beitrag inaktiv. Klicken um zu aktivieren" id="approved-{{$content->id}}">
                                            <svg style="width: 18px; fill: red" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" />
                                            </svg>
                                        </a>
                                        @endif
                                    @else
                                    <a title="Beitrag veröffentlicht." id="approved-{{$content->id}}">
                                        <svg style="width: 18px; fill: green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" />
                                        </svg>
                                    </a>
                                    @endif
                                </button>
                                <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#" title="Diese Stelle mit neuem Datum einstellen">
                                            <svg style="width: 14px; margin-bottom: 2px; fill: black; margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M492 8h-10c-6.627 0-12 5.373-12 12v110.627C426.929 57.261 347.224 8 256 8 123.228 8 14.824 112.338 8.31 243.493 7.971 250.311 13.475 256 20.301 256h10.016c6.353 0 11.646-4.949 11.977-11.293C48.157 132.216 141.097 42 256 42c82.862 0 154.737 47.077 190.289 116H332c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h160c6.627 0 12-5.373 12-12V20c0-6.627-5.373-12-12-12zm-.301 248h-10.015c-6.352 0-11.647 4.949-11.977 11.293C463.841 380.158 370.546 470 256 470c-82.608 0-154.672-46.952-190.299-116H180c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H20c-6.627 0-12 5.373-12 12v160c0 6.627 5.373 12 12 12h10c6.627 0 12-5.373 12-12V381.373C85.071 454.739 164.777 504 256 504c132.773 0 241.176-104.338 247.69-235.493.339-6.818-5.165-12.507-11.991-12.507z" />
                                            </svg>
                                            Job refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('dashboard.contents.edit', [$content->type->slug, $content->id]) }}">
                                            <svg style="width: 14px; margin-bottom: 2px; fill: black; margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z" />
                                            </svg>
                                            Job bearbeiten
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="" onclick="removeNach({{$content->id}})">
                                            <svg style="height: 14px; margin-bottom: 2px; margin-right: 10px; fill: red;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M296 432h16a8 8 0 0 0 8-8V152a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8zm-160 0h16a8 8 0 0 0 8-8V152a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8zM440 64H336l-33.6-44.8A48 48 0 0 0 264 0h-80a48 48 0 0 0-38.4 19.2L112 64H8a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h24v368a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V96h24a8 8 0 0 0 8-8V72a8 8 0 0 0-8-8zM171.2 38.4A16.1 16.1 0 0 1 184 32h80a16.1 16.1 0 0 1 12.8 6.4L296 64H152zM384 464a16 16 0 0 1-16 16H80a16 16 0 0 1-16-16V96h320zm-168-32h16a8 8 0 0 0 8-8V152a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v272a8 8 0 0 0 8 8z" />
                                            </svg>
                                            Job löschen
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <span class="text-muted" style="font-size: 12px;" title="{{date('d.m.Y | H:i', strtotime($content->updated_at))}} Uhr">
                                {{ $content->updated_at->diffForHumans() }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endforeach
    <div class="text-center mt-4">
        {{$contents->links()}}
    </div>
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
    @endif
</div>
@stop
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    function removeNach(id) {
        $.ajax({
            data: {
                '_token': '{{csrf_token()}}',
                'id': id,
            },
            type: "POST",
            async: true,
            url: "",
            success: function(data) {
                document.getElementById('nach' + data.response).remove();
                toastr.options = {
                    "progressBar": true
                };
                var msg = toastr.success('Successfully removed!', 'Success');
                $(msg).click(function() {
                    $.ajax({
                        type: "GET",
                        async: true,
                        url: "{{url('admin/restoreNach')}}/" + id,
                        success: function(data) {
                            location.reload();
                        },
                        error: function(data) {
                            console.log('error!!')
                        }
                    });
                });
            },
            error: function(data) {
                console.log('error!!')
            }
        });
    }

    function toTop(id) {
        $.ajax({
            data: {
                '_token': '{{csrf_token()}}',
                'id': id,
            },
            type: "POST",
            async: true,
            url: "",
            success: function(data) {
                location.reload();
            },
            error: function(data) {
                console.log('error!!')
            }
        });
    }

    function getAttachments(id) {
        $.ajax({
            data: {'_token': '{{csrf_token()}}', 'id': id},
            type: "POST",
            async: true,
            url: "",
            success: function(data) {
                console.log('success');
                let attach_div = document.getElementById('attachments_div');
                attach_div.innerHTML = data.response;
            },
            error: function(data) {
                console.log('error!!')
            }
        });
    }

    function removeAttach(id, child) {
        $.ajax({
            data: {
                '_token': '{{csrf_token()}}',
                'id': id,
            },
            type: "POST",
            async: true,
            url: "",
            success: function(data) {
                console.log('success');
                node = document.getElementById('file_' + id);
                node.parentNode.removeChild(node);
            },
            error: function(data) {
                console.log('error!!')
            }
        });
    }

    $('#staticBackdrop').on('shown.bs.modal', function (e) {
        let contentPremiumUrl = $(e.relatedTarget).attr('data-premium-url');
        let contentTitle = $(e.relatedTarget).attr('data-content-title');
        let authorImage = $(e.relatedTarget).attr('data-author-image');
        $('#static-backdrop-content-title').text(contentTitle);
        $('#static-backdrop-author-image').attr("src", authorImage);
        $('#btn-buy-now').attr('data-premium-url', contentPremiumUrl);
    });

    $('#staticBackdrop').on('hidden.bs.modal', function (e) {
        $('#static-backdrop-content-title').text("");
        $('#static-backdrop-author-image').attr("src", "");
        $('#btn-buy-now').attr('data-premium-url', "");
    });

    $('#btn-buy-now').click(function(){
        let contentPremiumUrl = $(this).attr('data-premium-url');
        window.location.replace(contentPremiumUrl);
    });

    $('.check-user-is-premium').click(function(event){
        let link = $(this).attr('href');
        if(link != undefined){
            event.preventDefault();
            $.ajax({
                url: "{{route('is-user-premium')}}",
                type: "get", cache : false, processData: false, contentType: false,
                success: function (response) {
                    if(response) window.location.replace(link);
                    else window.location.replace("{{route('dashboard.payments.plans')}}");
                },
                error: function(error) { console.log(error); }
            });
        }
    });
</script>
@stop