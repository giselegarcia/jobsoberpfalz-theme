@extends('template.'.config('settings.template').'.content.master')
@section('head')
<link rel="stylesheet" href="{{ asset('template/css/intlTelInput.min.css') }}">
<style>
    label{ padding-bottom: 4px; }
    .form-check .form-check-input:checked { background-color: #157347; border-color: #146c43; }
    h2 { font-size: 1.4rem; padding-top: 55px; }
    h5 { font-size: 0.9rem; }
</style>
@stop
@section('content')
<link rel="stylesheet" href="{{asset('template/css/pages/news.css')}}">
<span id="database" data-new-id="{{$content->id}}" data-new-url="{{route_content($content)}}" data-new-title="{{$content->title}}" data-new-date="{{date('Y-m-d h:i:s', strtotime($content->created_at))}}" data-author-url="{{route('content', [$content->user->slug])}}" data-author-name="{{$content->user->name}}" data-author-image="{{$content->user->gravatar()}}"></span>
<span id="count-view" data-url="{{url('/api/contents/'.$content->id.'/count-view')}}"></span>
<div class="container">
    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bewerbung: {{$content->title}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <x-form id-name="bewerbungsformular" autocomplete="on">
                    <div class="modal-body">
                        <input type="hidden" name="status" value="spam"/>
                        <input type="hidden" name="job-title" value="{{$content->title}}"/>
                        <input type="hidden" name="email-to" value="{{$content->user->email}}"/>
                        <input type="hidden" name="company" value="{{$content->user->name}}">
                        <input type="hidden" name="company-id" value="{{$content->user->id}}">
                        <div class="form-group" style="margin-bottom: 25px; display: block;">
                            <label for="honorific-prefix">Anrede: <span style="color: red">*</span></label>
                            <select class="form-select" aria-label="Anrede" id="honorific-prefix" name="honorific-prefix" required>
                                <option selected disabled>Bitte wählen</option>
                                <option value="Herr">Herr</option>
                                <option value="Frau">Frau</option>
                                <option value="Divers">Divers</option>
                                <option value="keine Angabe">keine Angabe</option>
                            </select>
                        </div>
                        <div class="form-group" style="margin-bottom: 25px; display: block;">
                            <label for="name">Vorname Nachname: <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Max Mustermann" required>
                        </div>
                        <div class="form-group" style="margin-bottom: 25px; display: block;">
                            <label for="email">E-Mail: <span style="color: red">*</span></label>
                            <br>
                            <input type="email" class="form-control" id="email" name="email" autocomplete="email" placeholder="max.mustermann@example.de" required>
                        </div>
                        <div class="form-group" style="margin-bottom: 25px; display: block;">
                            <label for="tel">Telefon:</label>
                            <br>
                            <input type="tel" class="form-control phone" id="tel" name="tel" autocomplete="tel">
                        </div>
                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="cv">Möglichkeit zum Upload eines Lebenslaufs:</label>
                            <label for="cv" style="font-size: 11px; font-family: initial;">
                                Maximal 4MB. Dateiformate: .pdf, .doc, .txt, .jpg, .png.
                            </label>
                            <input accept=".txt,.pdf,.doc,.jpg,.png" type="file" name="cv" id="cv" placeholder="Anhänge" style="height: 125px;border: 1px dashed #e7cf84;background-color: #fff3cd6b; padding-left: 30px; padding-top: 50px; width: 100%;">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="userdb" name="userdb" checked>
                            <label class="form-check-label" for="userdb" style="font-size: 11px; font-family: initial;">
                                Meine Daten zusätzlich in einer Bewerberdatenbank aufnehmen damit ich auch von anderen Firmen direkt kontaktiert werden kann.
                            </label>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="check" required>
                            <label class="form-check-label" for="check" style="font-size: 11px; font-family: initial;">
                                Ich stimme zu, dass die oben erhobenen Daten verarbeitet und zur Weiterleitung an {{$content->user->name}} genutzt werden dürfen.
                                Ich bestätige, dass ich mit den <a href="{{url('/datenschutz')}}" style="color:#f49c35; text-decoration: underline" target="_blank">Datenschutzerklärung</a> einverstanden bin.
                                Ich kann meine Einwilligung selbstverständlich jederzeit widerrufen.
                            </label>
                        </div>
                        <span style="color: red" style="font-size: 11px;">*</span> <i style="font-size: 11px; font-family: initial;">Pflichtfeld</i>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-12">
                                @if(App::environment('production'))
                                    <input type="submit" id="btn-application-form" style="display: none;">
                                    <button type="button" class="btn btn-ci g-recaptcha d-block" data-sitekey="6LcLebgcAAAAAInzMP8t4Nsft5DJZf3vqY3Nb3f2" data-callback="onSubmit" data-action="submit">
                                        Bewerbung abschicken <i class="fal fa-envelope"></i>
                                    </button>
                                @else
                                    <button type="submit" class="btn btn-ci">
                                        Bewerbung abschicken <i class="fal fa-envelope"></i>
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
    @if(session()->has('success'))
    <br>
    <br>
    <div class="alert alert-success">
        Bewerbung erfolgreich übermittelt!
    </div>
    <br>
    <br>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <lottie-player src="https://assets7.lottiefiles.com/private_files/lf30_pw5a608o.json"  class="mx-auto d-block" background="transparent"  speed="0.6"  style="width: 300px; height: 300px;"   autoplay></lottie-player>
    <br>
    <hr>
    @endif
    @if(Session::has('error'))
    <br>
    <br>
    <div class="alert alert-danger">
    {{ Session::get('error')}}
    </div>
    @endif
    <div class="row" style="padding-top:20px;">
        <div class="col-12 col-md-9 hidden-md text-center">{{$content->user->name}} sucht zur Anstellung einen / eine:
            <br>
        </div>
    </div>
    <div class="row" style="padding-top:20px; padding-bottom: 20px;">

        <div class="col-3 col-md-1 d-flex align-items-center">

            <img src="{{ $content->user->gravatar() }}" class="rounded border img-fluid" alt="Logo {{$content->user->name}}">

        </div>
        <div class="col-9 col-md-11 d-flex align-items-center">
            <h1 class="fs-2">{{$content->title}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-6 text-muted">
            <i class="fal fa-calendar"></i> Veröffentlicht: {{date('d.m.Y', strtotime($content->created_at))}}
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-9">
            @if ($content->image)
            <br>
                <img src="{{ $content->image }}" class="img-fluid">
            <br>
            @endif
            <br>
            <div class="row">
                @if(isset($content->data_fields['branche']))
                <div class="col">
                    <h5>Branche</h5>
                    @php($field = getTypeFieldProperties('branche'))
                    @if(!is_null($field))
                        @if ($field->attr['isMultiple'] == 0)
                        <div class="badge bg-secondary">
                            {!! isset($content->data_fields['branche']) ? $content->data_fields['branche'] : 'Not Found' !!}
                        </div>
                        @else
                            @if(is_array($content->data_fields['branche']) || is_object($content->data_fields['branche']))
                                @foreach ($content->data_fields['branche'] as $valueTag)
                                <div class="badge bg-secondary">{{ $valueTag }}</div>
                                @endforeach
                            @endif
                        @endif
                    @endif
                </div>
                @endif
                <div class="col-12">
                    <br>
                    <svg style="width: 14px; fill: #d0504f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0z" />
                    </svg>
                    @isset ($content->data_fields['arbeitsort']['postalCode'])
                    {{ $content->data_fields['arbeitsort']['postalCode'] }} {{ $content->data_fields['arbeitsort']['addressLocality'] }}
                    @endisset
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @isset($content->data_fields['stellenbeschreibung'])
                        <h2>Stellenbeschreibung</h2>
                        {!! isset($content->data_fields['stellenbeschreibung']) ? $content->data_fields['stellenbeschreibung'] : 'keine Angaben' !!}
                    @endisset


                    @isset($content->data_fields['bewerberqualifikation'])
                        <h2>Ihre Qualifikationen</h2>
                        {!! isset($content->data_fields['bewerberqualifikation']) ? $content->data_fields['bewerberqualifikation'] : 'keine Angaben' !!}
                    @endisset

                    @isset($content->data_fields['wir_als_arbeitgeber'])
                        <h2>{{$content->user->name}} als Arbeitgeber</h2>
                        {!! isset($content->data_fields['wir_als_arbeitgeber']) ? $content->data_fields['wir_als_arbeitgeber'] : 'keine Angaben' !!}
                    @endisset

                    @isset ($content->data_fields['bewerbunginfo'])
                        <h2>Infos zur Bewerbung</h2>
                        {!! isset($content->data_fields['bewerbunginfo']) ? $content->data_fields['bewerbunginfo'] : 'keine Angaben' !!}
                    @endisset
                </div>
            </div>
            <br>
            <br>
            @if(isset($content->data_fields['link_zur_onlinebewerbung']) && !is_null($content->data_fields['link_zur_onlinebewerbung']))
                <a class="btn btn-lg btn-ci" href="{{$content->data_fields['link_zur_onlinebewerbung']}}" target="_blank" onclick="gtag('event', 'redirect to external', {'event_category' : '{{$content->title}}', 'event_label' : 'external'});">
                    Direkt beim Arbeitgeber bewerben
                    <svg style="width: 14px; fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path d="M440,256H424a8,8,0,0,0-8,8V464a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V112A16,16,0,0,1,48,96H248a8,8,0,0,0,8-8V72a8,8,0,0,0-8-8H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V264A8,8,0,0,0,440,256ZM500,0,364,.34a12,12,0,0,0-12,12v10a12,12,0,0,0,12,12L454,34l.7.71L131.51,357.86a12,12,0,0,0,0,17l5.66,5.66a12,12,0,0,0,17,0L477.29,57.34l.71.7-.34,90a12,12,0,0,0,12,12h10a12,12,0,0,0,12-12L512,12A12,12,0,0,0,500,0Z" />
                    </svg>
                </a>
            @else
                <a class="btn btn-lg btn-ci" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="gtag('event', 'show application form', {'event_category' : '{{$content->title}}', 'event_label' : 'internal'});">
                    <svg style="fill: white; width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M528 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm0 400H303.2c.9-4.5.8 3.6.8-22.4 0-31.8-30.1-57.6-67.2-57.6-10.8 0-18.7 8-44.8 8-26.9 0-33.4-8-44.8-8-37.1 0-67.2 25.8-67.2 57.6 0 26-.2 17.9.8 22.4H48V144h480v288zm-168-80h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8zm0-64h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8zm0-64h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8zm-168 96c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64z"/></svg>
                    Jetzt online Bewerbung einreichen
                </a>
                <br>
                <small class="text-muted" style="margin-left: 115px;">1 min Bewerbung</small>
            @endif
            <br>
            <br>
            <br>
        </div>
        <div class="col-12 col-lg-3">
            <div id="box-subscribe" style="position: sticky; ">
                    <div class="alert alert-warning">
                        <br>
                        <a class="text-dark" href="{{url('/arbeitgeber')}}/{{$content->user->slug}}">
                            <img src="{{ $content->user->gravatar() }}" class="rounded mx-auto d-block">
                        </a>
                        <br>
                        <div class="text-center">
                            <a href="{{url('/arbeitgeber')}}/{{$content->user->slug}}">
                                Zum Arbeitgeberprofil <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </a>
                        </div>
                        <br>
                        <br>
                        @if(isset($content->data_fields['link_zur_onlinebewerbung']))
                        <a class="btn btn-lg btn-ci d-block" href="{{$content->data_fields['link_zur_onlinebewerbung']}}" target="_blank" onclick="gtag('event', 'redirect to external', {'event_category' : '{{$content->title}}', 'event_label' : 'external'});">
                            Direkt beim Arbeitgeber bewerben
                            <svg style="width: 13px; fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                <path d="M440,256H424a8,8,0,0,0-8,8V464a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V112A16,16,0,0,1,48,96H248a8,8,0,0,0,8-8V72a8,8,0,0,0-8-8H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V264A8,8,0,0,0,440,256ZM500,0,364,.34a12,12,0,0,0-12,12v10a12,12,0,0,0,12,12L454,34l.7.71L131.51,357.86a12,12,0,0,0,0,17l5.66,5.66a12,12,0,0,0,17,0L477.29,57.34l.71.7-.34,90a12,12,0,0,0,12,12h10a12,12,0,0,0,12-12L512,12A12,12,0,0,0,500,0Z" />
                            </svg>
                        </a>
                        @else
                        <a class="btn btn-lg btn-ci d-block" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="gtag('event', 'show application form', {'event_category' : '{{$content->title}}', 'event_label' : 'internal'});">
                            <svg style="fill: white; width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M528 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm0 400H303.2c.9-4.5.8 3.6.8-22.4 0-31.8-30.1-57.6-67.2-57.6-10.8 0-18.7 8-44.8 8-26.9 0-33.4-8-44.8-8-37.1 0-67.2 25.8-67.2 57.6 0 26-.2 17.9.8 22.4H48V144h480v288zm-168-80h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8zm0-64h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8zm0-64h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8zm-168 96c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64z"/></svg>

                            Jetzt online bewerben
                        </a>
                            <small class="text-muted" style="margin-left: 77px;">1 min Bewerbung</small>
                        @endif
                    </div>


            </div>
        </div>
        @if(isset($content->data_fields['branche']))
        <div class="row">
            @if (getContentLike($content, 'branche')->count() > 0)
            <div class="col-12">
                <hr>
                <br>
                <h2>Ähnliche Jobangebote</h2>
                <br>
            </div>
            @foreach (getContentLike($content, 'branche') as $similarContent)
            <div class="col-12 col-md-6 col-lg-4" style="padding-bottom: 1rem;">
                <div class="card h-100" style="background-color: #f8f8f8;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <a href="{{ route('content', [$similarContent->user->slug]) }}" onclick="gtag('event', 'See Employer', {'event_category' : '{{$content->title}}', 'event_label' : '{{ $similarContent->user->name }}'});">
                                    <img src="{{ $similarContent->user->gravatar() }}" title="" height="70px" class="border rounded">
                                </a>
                            </div>
                            <div class="col-9">
                                <br>
                                <a href="{{ route('content', [$similarContent->user->slug]) }}" class="text-muted" onclick="gtag('event', 'See Employer', {'event_category' : '{{$content->title}}', 'event_label' : '{{ $similarContent->user->name }}'});">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                                        <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                                    </svg>
                                    {{ $similarContent->user->name }}
                                </a>
                            </div>
                            <div class="col-12">
                                <h5 class="card-title" style="margin-top: 20px;">
                                    <a href="{{ route_content($similarContent) }}" onclick="gtag('event', 'See Job', {'event_category' : '{{$content->title}}', 'event_label' : '{{ $similarContent->title }}'});">
                                        {{ $similarContent->title }}
                                    </a>
                                </h5>
                            </div>
                            <div class="col-5">
                                <br>
                                <h6 class="card-subtitle mb-2 text-muted">{{date('d.m.Y', strtotime($similarContent->updated_at))}}</h6>
                            </div>
                            <div class="col-7 text-end ">
                                <br>
                                <a class="btn btn-ci" href="{{ route_content($similarContent) }}" onclick="gtag('event', 'See Job', {'event_category' : '{{$content->title}}', 'event_label' : '{{ $similarContent->title }}'});">
                                    Job ansehen
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            <div class="col-sm-12">
                <br>
                <br>
            </div>
        </div>
        @endif
    </div>
</div>
<div id="mobile-calltoaction">
    <div class="row">
        <div class="col-8">
            @if(isset($content->data_fields['link_zur_onlinebewerbung']) && !is_null($content->data_fields['link_zur_onlinebewerbung']))
            <a class="btn btn-lg btn-success d-block mt-2" href="{{$content->data_fields['link_zur_onlinebewerbung']}}" target="_blank" onclick="gtag('event', 'redirect to external', {'event_category' : '{{$content->title}}', 'event_label' : 'external'});">
                Direkt beim Arbeitgeber bewerben
                <svg style="width: 14px; fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                    <path d="M440,256H424a8,8,0,0,0-8,8V464a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V112A16,16,0,0,1,48,96H248a8,8,0,0,0,8-8V72a8,8,0,0,0-8-8H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V264A8,8,0,0,0,440,256ZM500,0,364,.34a12,12,0,0,0-12,12v10a12,12,0,0,0,12,12L454,34l.7.71L131.51,357.86a12,12,0,0,0,0,17l5.66,5.66a12,12,0,0,0,17,0L477.29,57.34l.71.7-.34,90a12,12,0,0,0,12,12h10a12,12,0,0,0,12-12L512,12A12,12,0,0,0,500,0Z" />
                </svg>
            </a>
            @else
            <a href="" class="btn btn-success d-block mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="gtag('event', 'show application form', {'event_category' : '{{$content->title}}', 'event_label' : 'internal'});" style="margin-left:30px;">
                Jetzt online bewerben
            </a>
            <small>1min Bewerbung</small>
            @endif
        </div>
        <div class="col-2">
            <button id="btn-share" style="background: transparent; border: none;" title="Funktion ist im Wartungsmodus">
                <svg style="fill:white; width:32px; margin-top:18px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M503.691 189.836L327.687 37.851C312.281 24.546 288 35.347 288 56.015v80.053C127.371 137.907 0 170.1 0 322.326c0 61.441 39.581 122.309 83.333 154.132 13.653 9.931 33.111-2.533 28.077-18.631C66.066 312.814 132.917 274.316 288 272.085V360c0 20.7 24.3 31.453 39.687 18.164l176.004-152c11.071-9.562 11.086-26.753 0-36.328z" />
                </svg>
            </button>
        </div>
        <div class="col-2" style="margin-top: 19px;margin-left: -16px;">
            <button id="btn-like" title="Funktion ist im Wartungsmodus">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" />
                </svg>
            </button>
        </div>
    </div>
</div>
@stop
@section('scripts')
<script>
    fbq('track', 'SubmitApplication');
    gtag('event', 'Application submitted', {
        'event_category': '{{$content->title}}'
    });
    gtag('event', 'Application submitted', {
        'event_category': '{{$content->title}}',
        'event_label': '-'
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@if(App::environment('production'))
<script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script>
<script>
    function onSubmit(token) {
        $('#btn-application-form').click();
    }
</script>
@endif
<script>
    const shareData = {
        title: "{{ $content->title }}",
        text: 'Text',
        url: window.location.href,
    }
</script>
<script src="{{ asset('system/js/intlTelInput.min.js') }}"></script>
<script src="{{ asset('template/js/pages/content/methods.js?v=1') }}"></script>
<script src="{{ asset('template/js/pages/content/events.js?v=1') }}"></script>
<script src="{{ asset('template/js/pages/content/script.js?v=1') }}"></script>
@stop