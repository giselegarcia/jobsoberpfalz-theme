@extends('template.'.config('settings.template').'.content.master')

@section('head')
@section('meta_title', 'Jobangebote nach Regionen in der Oberpfalz')
@section('meta_description', 'Hier findest du Stellenangebote nach Region: Jobs in Regensburg, Weiden, Amberg, Neumarkt und andere...')

@stop

@section('content')


    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel">Top Job buchen</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="mt-3 mb-3">Vorschau:</h5>
                        </div>
                        <div class="col-12 " style="padding-bottom: 5rem;" id="1">
                            <div class="card shadow-lg" style="background-color: #daeed8; cursor: default" title="Dies ist eine Vorschau">
                                <div class="text-center rounded-top" style="font-size: 12px; background-color: #3daa7352">
                                    <svg style="fill: black; width: 12px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M463.7 0H112.3c-4.2 0-8.1 2.2-10.3 5.8L1.7 168.6c-2.7 4.4-2.2 10.1 1.2 14l276 325.2c4.8 5.6 13.4 5.6 18.2 0l276-325.2c3.4-3.9 3.8-9.6 1.2-14L474 5.8c-2.2-3.6-6.1-5.8-10.3-5.8zm-13.6 36l74.3 124h-83L384.6 36h65.5zM345 36l56.8 124H174.1L231 36h114zm-219.1 0h65.5l-56.8 124h-83l74.3-124zM61.2 192h73L216 384 61.2 192zm112 0h229.5L288 455.8 173.2 192zM360 384l81.8-192h73L360 384z"/></svg>
                                    Premium Jobangebot
                                </div>
                                <div class="card-body">
                                    <div class="row">




                                        <div class="col-3 col-lg-1">
                                            <img src="" height="70px" class="border rounded" alt="Logo">
                                        </div>

                                        <div class="col-12 col-lg-9 ">
                                            <h5 class="card-title" style="margin-top: 10px;">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit!

                                            </h5>
                                        </div>



                                        <div class="col-7 col-lg-2 text-end ">
                                            <h6 class="card-subtitle mb-2 text-muted d-none d-lg-block text-center" style="font-size: 12px;margin-right: -24px;" >vor 38 Minuten</h6>
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
                    </div>
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


        <div class="container">
            <div class="row">
                <div class="col-12">
                    <br>
                    <br>
                    <h1>Arbeitnehmer</h1>
                    <br>
                </div>
            </div>

            <div class="row">

            </div>

            <div class="row">


                <style>
                    .blured{

                        filter: blur(6px);
                        -webkit-filter: blur(6px);
                    }
                </style>
                <div class="col-6 col-md-4 mb-5">
                    <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="Zugang kaufen um Profil einzusehen">
                        <div class="card shadow-sm" style="background-color: #f8f8f8">
                            <div class="card-body">
                                <div class="row pb-4">
                                    <div class="col-3 text-center">
                                        <img src="https://picsum.photos/300/300?df{{rand(0,33)}}" class="img-fluid rounded-circle border blured">
                                    </div>
                                    <div class="col-8">
                                        <h5 class="mt-3 blured">Maximilian Mustermann</h5>

                                        <svg style="width: 8px; fill: #d0504f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                            <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0z" />
                                        </svg>
                                        <span class="text-muted" style="font-size: 13px;">92<span class="blured">714 Pleystein</span></span>
                                    </div>

                                </div>
                                <div class="row border-top pt-4 mb-2">
                                    <div class="col-12">

                                        <style>
                                            .badge {
                                                font-size: 11px;
                                                background-color: #4d4842a3;
                                                margin: 2px;
                                            }
                                        </style>

                                        <span class="badge">Abitur</span>
                                        <span class="badge">Führerschein</span>
                                        <span class="badge">Doktorgrad</span>
                                        <span class="badge blured">Englisch A2</span>






                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <i class="text-muted" style="font-size: 12px;">18 days ago</i>

                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="btn btn-outline-success btn-sm disabled" title="Jetzt Zugang kaufen">Profil ansehen
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-6 col-md-4 mb-5">
                    <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="Zugang kaufen um Profil einzusehen">
                        <div class="card shadow-sm" style="background-color: #f8f8f8">
                            <div class="card-body">
                                <div class="row pb-4">
                                    <div class="col-3 text-center">
                                        <img src="https://picsum.photos/300/300?df{{rand(0,33)}}" class="img-fluid rounded-circle border blured">
                                    </div>
                                    <div class="col-8">
                                        <h5 class="mt-3 blured">Maximilian Mustermann</h5>

                                        <svg style="width: 8px; fill: #d0504f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                            <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0z" />
                                        </svg>
                                        <span class="text-muted" style="font-size: 13px;">92<span class="blured">714 Pleystein</span></span>
                                    </div>

                                </div>
                                <div class="row border-top pt-4 mb-2">
                                    <div class="col-12">

                                        <style>
                                            .badge {
                                                font-size: 11px;
                                                background-color: #4d4842a3;
                                                margin: 2px;
                                            }
                                        </style>

                                        <span class="badge">Abitur</span>
                                        <span class="badge">Führerschein</span>
                                        <span class="badge">Doktorgrad</span>
                                        <span class="badge blured">Englisch A2</span>






                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <i class="text-muted" style="font-size: 12px;">18 days ago</i>

                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="btn btn-outline-success btn-sm disabled" title="Jetzt Zugang kaufen">Profil ansehen
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-6 col-md-4 mb-5">
                    <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="Zugang kaufen um Profil einzusehen">
                        <div class="card shadow-sm" style="background-color: #f8f8f8">
                            <div class="card-body">
                                <div class="row pb-4">
                                    <div class="col-3 text-center">
                                        <img src="https://picsum.photos/300/300?df{{rand(0,33)}}" class="img-fluid rounded-circle border blured">
                                    </div>
                                    <div class="col-8">
                                        <h5 class="mt-3 blured">Maximilian Mustermann</h5>

                                        <svg style="width: 8px; fill: #d0504f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                            <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0z" />
                                        </svg>
                                        <span class="text-muted" style="font-size: 13px;">92<span class="blured">714 Pleystein</span></span>
                                    </div>

                                </div>
                                <div class="row border-top pt-4 mb-2">
                                    <div class="col-12">

                                        <style>
                                            .badge {
                                                font-size: 11px;
                                                background-color: #4d4842a3;
                                                margin: 2px;
                                            }
                                        </style>

                                        <span class="badge">Abitur</span>
                                        <span class="badge">Führerschein</span>
                                        <span class="badge">Doktorgrad</span>
                                        <span class="badge blured">Englisch A2</span>






                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <i class="text-muted" style="font-size: 12px;">18 days ago</i>

                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="btn btn-outline-success btn-sm disabled" title="Jetzt Zugang kaufen">Profil ansehen
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-6 col-md-4 mb-5">
                    <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="Zugang kaufen um Profil einzusehen">
                        <div class="card shadow-sm" style="background-color: #f8f8f8">
                            <div class="card-body">
                                <div class="row pb-4">
                                    <div class="col-3 text-center">
                                        <img src="https://picsum.photos/300/300?df{{rand(0,33)}}" class="img-fluid rounded-circle border blured">
                                    </div>
                                    <div class="col-8">
                                        <h5 class="mt-3 blured">Maximilian Mustermann</h5>

                                        <svg style="width: 8px; fill: #d0504f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                            <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0z" />
                                        </svg>
                                        <span class="text-muted" style="font-size: 13px;">92<span class="blured">714 Pleystein</span></span>
                                    </div>

                                </div>
                                <div class="row border-top pt-4 mb-2">
                                    <div class="col-12">

                                        <style>
                                            .badge {
                                                font-size: 11px;
                                                background-color: #4d4842a3;
                                                margin: 2px;
                                            }
                                        </style>

                                        <span class="badge">Abitur</span>
                                        <span class="badge">Führerschein</span>
                                        <span class="badge">Doktorgrad</span>
                                        <span class="badge blured">Englisch A2</span>






                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <i class="text-muted" style="font-size: 12px;">18 days ago</i>

                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="btn btn-outline-success btn-sm disabled" title="Jetzt Zugang kaufen">Profil ansehen
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </a>

                </div>


                <div class="col-6 col-md-4 mb-5">
                    <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="Zugang kaufen um Profil einzusehen">
                        <div class="card shadow-sm" style="background-color: #f8f8f8">
                            <div class="card-body">
                                <div class="row pb-4">
                                    <div class="col-3 text-center">
                                        <img src="https://picsum.photos/300/300?df{{rand(0,33)}}" class="img-fluid rounded-circle border blured">
                                    </div>
                                    <div class="col-8">
                                        <h5 class="mt-3 blured">Maximilian Mustermann</h5>

                                        <svg style="width: 8px; fill: #d0504f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                            <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0z" />
                                        </svg>
                                        <span class="text-muted" style="font-size: 13px;">92<span class="blured">714 Pleystein</span></span>
                                    </div>

                                </div>
                                <div class="row border-top pt-4 mb-2">
                                    <div class="col-12">

                                        <style>
                                            .badge {
                                                font-size: 11px;
                                                background-color: #4d4842a3;
                                                margin: 2px;
                                            }
                                        </style>

                                        <span class="badge">Abitur</span>
                                        <span class="badge">Führerschein</span>
                                        <span class="badge">Doktorgrad</span>
                                        <span class="badge blured">Englisch A2</span>






                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <i class="text-muted" style="font-size: 12px;">18 days ago</i>

                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="btn btn-outline-success btn-sm disabled" title="Jetzt Zugang kaufen">Profil ansehen
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </a>

                </div>


                <div class="col-6 col-md-4 mb-5">
                    <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="Zugang kaufen um Profil einzusehen">
                        <div class="card shadow-sm" style="background-color: #f8f8f8">
                            <div class="card-body">
                                <div class="row pb-4">
                                    <div class="col-3 text-center">
                                        <img src="https://picsum.photos/300/300?df{{rand(0,33)}}" class="img-fluid rounded-circle border blured">
                                    </div>
                                    <div class="col-8">
                                        <h5 class="mt-3 blured">Maximilian Mustermann</h5>

                                        <svg style="width: 8px; fill: #d0504f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                            <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0z" />
                                        </svg>
                                        <span class="text-muted" style="font-size: 13px;">92<span class="blured">714 Pleystein</span></span>
                                    </div>

                                </div>
                                <div class="row border-top pt-4 mb-2">
                                    <div class="col-12">

                                        <style>
                                            .badge {
                                                font-size: 11px;
                                                background-color: #4d4842a3;
                                                margin: 2px;
                                            }
                                        </style>

                                        <span class="badge">Abitur</span>
                                        <span class="badge">Führerschein</span>
                                        <span class="badge">Doktorgrad</span>
                                        <span class="badge blured">Englisch A2</span>






                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <i class="text-muted" style="font-size: 12px;">18 days ago</i>

                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="btn btn-outline-success btn-sm disabled" title="Jetzt Zugang kaufen">Profil ansehen
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </a>

                </div>


                <div class="col-6 col-md-4 mb-5">
                    <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="Zugang kaufen um Profil einzusehen">
                        <div class="card shadow-sm" style="background-color: #f8f8f8">
                            <div class="card-body blured">
                                <div class="row pb-4">
                                    <div class="col-3 text-center">
                                        <img src="https://picsum.photos/300/300?df{{rand(0,33)}}" class="img-fluid rounded-circle border blured">
                                    </div>
                                    <div class="col-8">
                                        <h5 class="mt-3">Maximilian Mustermann</h5>

                                        <svg style="width: 8px; fill: #d0504f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                            <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0z" />
                                        </svg>
                                        <span class="text-muted" style="font-size: 13px;">92714 Pleystein</span></span>
                                    </div>

                                </div>
                                <div class="row border-top pt-4 mb-2">
                                    <div class="col-12">

                                        <style>
                                            .badge {
                                                font-size: 11px;
                                                background-color: #4d4842a3;
                                                margin: 2px;
                                            }
                                        </style>

                                        <span class="badge">Abitur</span>
                                        <span class="badge">Führerschein</span>
                                        <span class="badge">Doktorgrad</span>
                                        <span class="badge blured">Englisch A2</span>






                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <i class="text-muted" style="font-size: 12px;">18 days ago</i>

                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="btn btn-outline-success btn-sm disabled" title="Jetzt Zugang kaufen">Profil ansehen
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-6 col-md-4 mb-5">
                    <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="Zugang kaufen um Profil einzusehen">
                        <div class="card shadow-sm" style="background-color: #f8f8f8">
                            <div class="card-body blured">
                                <div class="row pb-4">
                                    <div class="col-3 text-center">
                                        <img src="https://picsum.photos/300/300?df{{rand(0,33)}}" class="img-fluid rounded-circle border blured">
                                    </div>
                                    <div class="col-8">
                                        <h5 class="mt-3">Maximilian Mustermann</h5>

                                        <svg style="width: 8px; fill: #d0504f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                            <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0z" />
                                        </svg>
                                        <span class="text-muted" style="font-size: 13px;">92714 Pleystein</span></span>
                                    </div>

                                </div>
                                <div class="row border-top pt-4 mb-2">
                                    <div class="col-12">

                                        <style>
                                            .badge {
                                                font-size: 11px;
                                                background-color: #4d4842a3;
                                                margin: 2px;
                                            }
                                        </style>

                                        <span class="badge">Abitur</span>
                                        <span class="badge">Führerschein</span>
                                        <span class="badge">Doktorgrad</span>
                                        <span class="badge blured">Englisch A2</span>






                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <i class="text-muted" style="font-size: 12px;">18 days ago</i>

                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="btn btn-outline-success btn-sm disabled" title="Jetzt Zugang kaufen">Profil ansehen
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-6 col-md-4 mb-5">
                    <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="Zugang kaufen um Profil einzusehen">
                        <div class="card shadow-sm" style="background-color: #f8f8f8">
                            <div class="card-body blured">
                                <div class="row pb-4">
                                    <div class="col-3 text-center">
                                        <img src="https://picsum.photos/300/300?df{{rand(0,33)}}" class="img-fluid rounded-circle border blured">
                                    </div>
                                    <div class="col-8">
                                        <h5 class="mt-3">Maximilian Mustermann</h5>

                                        <svg style="width: 8px; fill: #d0504f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                            <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0z" />
                                        </svg>
                                        <span class="text-muted" style="font-size: 13px;">92714 Pleystein</span></span>
                                    </div>

                                </div>
                                <div class="row border-top pt-4 mb-2">
                                    <div class="col-12">

                                        <style>
                                            .badge {
                                                font-size: 11px;
                                                background-color: #4d4842a3;
                                                margin: 2px;
                                            }
                                        </style>

                                        <span class="badge">Abitur</span>
                                        <span class="badge">Führerschein</span>
                                        <span class="badge">Doktorgrad</span>
                                        <span class="badge blured">Englisch A2</span>






                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <i class="text-muted" style="font-size: 12px;">18 days ago</i>

                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="btn btn-outline-success btn-sm disabled" title="Jetzt Zugang kaufen">Profil ansehen
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-6 col-md-4 mb-5">
                    <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="Zugang kaufen um Profil einzusehen">
                        <div class="card shadow-sm" style="background-color: #f8f8f8">
                            <div class="card-body blured">
                                <div class="row pb-4">
                                    <div class="col-3 text-center">
                                        <img src="https://picsum.photos/300/300?df{{rand(0,33)}}" class="img-fluid rounded-circle border blured">
                                    </div>
                                    <div class="col-8">
                                        <h5 class="mt-3">Maximilian Mustermann</h5>

                                        <svg style="width: 8px; fill: #d0504f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                            <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0z" />
                                        </svg>
                                        <span class="text-muted" style="font-size: 13px;">92714 Pleystein</span></span>
                                    </div>

                                </div>
                                <div class="row border-top pt-4 mb-2">
                                    <div class="col-12">

                                        <style>
                                            .badge {
                                                font-size: 11px;
                                                background-color: #4d4842a3;
                                                margin: 2px;
                                            }
                                        </style>

                                        <span class="badge">Abitur</span>
                                        <span class="badge">Führerschein</span>
                                        <span class="badge">Doktorgrad</span>
                                        <span class="badge blured">Englisch A2</span>






                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <i class="text-muted" style="font-size: 12px;">18 days ago</i>

                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="btn btn-outline-success btn-sm disabled" title="Jetzt Zugang kaufen">Profil ansehen
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-6 col-md-4 mb-5">
                    <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="Zugang kaufen um Profil einzusehen">
                        <div class="card shadow-sm" style="background-color: #f8f8f8">
                            <div class="card-body blured">
                                <div class="row pb-4">
                                    <div class="col-3 text-center">
                                        <img src="https://picsum.photos/300/300?df{{rand(0,33)}}" class="img-fluid rounded-circle border blured">
                                    </div>
                                    <div class="col-8">
                                        <h5 class="mt-3">Maximilian Mustermann</h5>

                                        <svg style="width: 8px; fill: #d0504f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                            <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0z" />
                                        </svg>
                                        <span class="text-muted" style="font-size: 13px;">92714 Pleystein</span></span>
                                    </div>

                                </div>
                                <div class="row border-top pt-4 mb-2">
                                    <div class="col-12">

                                        <style>
                                            .badge {
                                                font-size: 11px;
                                                background-color: #4d4842a3;
                                                margin: 2px;
                                            }
                                        </style>

                                        <span class="badge">Abitur</span>
                                        <span class="badge">Führerschein</span>
                                        <span class="badge">Doktorgrad</span>
                                        <span class="badge blured">Englisch A2</span>






                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <i class="text-muted" style="font-size: 12px;">18 days ago</i>

                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="btn btn-outline-success btn-sm disabled" title="Jetzt Zugang kaufen">Profil ansehen
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-6 col-md-4 mb-5">
                    <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="Zugang kaufen um Profil einzusehen">
                        <div class="card shadow-sm" style="background-color: #f8f8f8">
                            <div class="card-body blured">
                                <div class="row pb-4">
                                    <div class="col-3 text-center">
                                        <img src="https://picsum.photos/300/300?df{{rand(0,33)}}" class="img-fluid rounded-circle border blured">
                                    </div>
                                    <div class="col-8">
                                        <h5 class="mt-3">Maximilian Mustermann</h5>

                                        <svg style="width: 8px; fill: #d0504f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                            <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0z" />
                                        </svg>
                                        <span class="text-muted" style="font-size: 13px;">92714 Pleystein</span></span>
                                    </div>

                                </div>
                                <div class="row border-top pt-4 mb-2">
                                    <div class="col-12">

                                        <style>
                                            .badge {
                                                font-size: 11px;
                                                background-color: #4d4842a3;
                                                margin: 2px;
                                            }
                                        </style>

                                        <span class="badge">Abitur</span>
                                        <span class="badge">Führerschein</span>
                                        <span class="badge">Doktorgrad</span>
                                        <span class="badge blured">Englisch A2</span>






                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <i class="text-muted" style="font-size: 12px;">18 days ago</i>

                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="btn btn-outline-success btn-sm disabled" title="Jetzt Zugang kaufen">Profil ansehen
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-6 col-md-4 mb-5">
                    <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="Zugang kaufen um Profil einzusehen">
                        <div class="card shadow-sm" style="background-color: #f8f8f8">
                            <div class="card-body blured">
                                <div class="row pb-4">
                                    <div class="col-3 text-center">
                                        <img src="https://picsum.photos/300/300?df{{rand(0,33)}}" class="img-fluid rounded-circle border blured">
                                    </div>
                                    <div class="col-8">
                                        <h5 class="mt-3">Maximilian Mustermann</h5>

                                        <svg style="width: 8px; fill: #d0504f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                            <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0z" />
                                        </svg>
                                        <span class="text-muted" style="font-size: 13px;">92714 Pleystein</span></span>
                                    </div>

                                </div>
                                <div class="row border-top pt-4 mb-2">
                                    <div class="col-12">

                                        <style>
                                            .badge {
                                                font-size: 11px;
                                                background-color: #4d4842a3;
                                                margin: 2px;
                                            }
                                        </style>

                                        <span class="badge">Abitur</span>
                                        <span class="badge">Führerschein</span>
                                        <span class="badge">Doktorgrad</span>
                                        <span class="badge blured">Englisch A2</span>






                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <i class="text-muted" style="font-size: 12px;">18 days ago</i>

                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="btn btn-outline-success btn-sm disabled" title="Jetzt Zugang kaufen">Profil ansehen
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-6 col-md-4 mb-5">
                    <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop" title="Zugang kaufen um Profil einzusehen">
                        <div class="card shadow-sm" style="background-color: #f8f8f8">
                            <div class="card-body blured">
                                <div class="row pb-4">
                                    <div class="col-3 text-center">
                                        <img src="https://picsum.photos/300/300?df{{rand(0,33)}}" class="img-fluid rounded-circle border blured">
                                    </div>
                                    <div class="col-8">
                                        <h5 class="mt-3">Maximilian Mustermann</h5>

                                        <svg style="width: 8px; fill: #d0504f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                            <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0z" />
                                        </svg>
                                        <span class="text-muted" style="font-size: 13px;">92714 Pleystein</span></span>
                                    </div>

                                </div>
                                <div class="row border-top pt-4 mb-2">
                                    <div class="col-12">

                                        <style>
                                            .badge {
                                                font-size: 11px;
                                                background-color: #4d4842a3;
                                                margin: 2px;
                                            }
                                        </style>

                                        <span class="badge">Abitur</span>
                                        <span class="badge">Führerschein</span>
                                        <span class="badge">Doktorgrad</span>
                                        <span class="badge blured">Englisch A2</span>






                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <i class="text-muted" style="font-size: 12px;">18 days ago</i>

                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="btn btn-outline-success btn-sm disabled" title="Jetzt Zugang kaufen">Profil ansehen
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </a>

                </div>


                <div class="col-12">
                    <br>
                    <br>
                    <br>
                    <hr>
                    <br>
                    <br>
                    <br>
                </div>

                @foreach(getListsByGroup("Region") as $groupList)
                        <div class="col-6 col-md-4 mb-5">
                            <div class="card shadow-sm" style="background-color: #f8f8f8">
                                <div class="card-body">
                                    <div class="row pb-4">
                                        <div class="col-3 text-center">
                                            <img src="https://picsum.photos/300/300?df{{rand(0,33)}}" class="img-fluid rounded-circle border">
                                        </div>
                                        <div class="col-8">
                                            <h5 class="mt-3">Benjamin Völkl</h5>

                                            <svg style="width: 8px; fill: #d0504f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                                <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0z" />
                                            </svg>
                                            <span class="text-muted" style="font-size: 13px;">92714 Pleystein</span>
                                        </div>

                                    </div>
                                    <div class="row border-top pt-4 mb-2">
                                        <div class="col-12">

                                            <style>
                                                .badge {
                                                    font-size: 11px;
                                                    background-color: #4d4842a3;
                                                    margin: 2px;
                                                }
                                            </style>

                                            <span class="badge">Abitur</span>
                                            <span class="badge">Führerschein</span>
                                            <span class="badge">Doktorgrad</span>
                                            <span class="badge">Englisch A2</span>






                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-6">
                                            <i class="text-muted" style="font-size: 12px;">18 days ago</i>

                                        </div>
                                        <div class="col-6 text-end">
                                            <a class="btn btn-outline-success btn-sm" href="arbeitnehmer-profil">Profil ansehen
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                @endforeach


            </div>

        </div>

@stop
