@extends('template.'.config('settings.template').'.content.layout')
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
                    <h5 class="modal-title" id="exampleModalLabel">Vaga: {{$content->title}}</h5>
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
                            <label for="name">Nome: <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Max Mustermann" required>
                        </div>
                        <div class="form-group" style="margin-bottom: 25px; display: block;">
                            <label for="email">E-Mail: <span style="color: red">*</span></label>
                            <br>
                            <input type="email" class="form-control" id="email" name="email" autocomplete="email" placeholder="max.mustermann@example.de" required>
                        </div>
                        <div class="form-group" style="margin-bottom: 25px; display: block;">
                            <label for="tel">Telefone:</label>
                            <br>
                            <input type="tel" class="form-control phone" id="tel" name="tel" autocomplete="tel">
                        </div>
                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="cv">Currículo:</label>
                            <label for="cv" style="font-size: 11px; font-family: initial;">
                                Maximal 4MB. Dateiformate: .pdf, .doc, .txt, .jpg, .png.
                            </label>
                            <input accept=".txt,.pdf,.doc,.jpg,.png" type="file" name="cv" id="cv" placeholder="Anhänge" style="height: 125px;border: 1px dashed #e7cf84;background-color: #fff3cd6b; padding-left: 30px; padding-top: 50px; width: 100%;">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="userdb" name="userdb" checked>
                            <label class="form-check-label" for="userdb" style="font-size: 11px; font-family: initial;">
                                Registre também meus dados em um banco de dados de candidatos para que eu também possa ser contatado diretamente por outras empresas.
                            </label>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="check" required>
                            <label class="form-check-label" for="check" style="font-size: 11px; font-family: initial;">
                                Concordo que os dados coletados acima possam ser processados ​​e usados ​​para encaminhamento.
                                Confirmo que concordo com a <a href="{{url('/datenschutz')}}" style="color:#f49c35; text-decoration: underline" target="_blank">política de privacidade</a>.
                                É claro que posso revogar meu consentimento a qualquer momento.
                            </label>
                        </div>
                        <span style="color: red" style="font-size: 11px;">*</span> <i style="font-size: 11px; font-family: initial;">Campos Obrigatórios</i>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-ci">
                                    Enviar <i class="fal fa-envelope"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
    <div class="row" style="padding-top:20px;">
        <div class="col-12 col-md-9 hidden-md text-center">{{$content->user->name}} está procurando uma pessoa para o emprego:
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
            <i class="fal fa-calendar"></i> Publicado: {{date('d/m/Y', strtotime($content->created_at))}}
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-9">
            @if($content->image)
            <br>
                <img src="{{ $content->image }}" class="img-fluid">
            <br>
            @endif
            <br>
            <div class="row">
                <div class="col-12">
                    @isset($content->data_fields['descricao'])
                    <h2>Descrição</h2>
                    {!! isset($content->data_fields['descricao']) ? $content->data_fields['descricao'] : 'Sem Conteúdo' !!}
                    @endisset
                    @isset($content->data_fields['requisitos'])
                    <h2>Requisitos</h2>
                    {!! isset($content->data_fields['requisitos']) ? $content->data_fields['requisitos'] : 'Sem Conteúdo' !!}
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
                Candidate-se Agora
            </a>
            <br>
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
                        <a href="#">
                                Perfil do empregador <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                    <br>
                    <br>
                    <a class="btn btn-lg btn-ci d-block" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="gtag('event', 'show application form', {'event_category' : '{{$content->title}}', 'event_label' : 'internal'});">
                        <svg style="fill: white; width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M528 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm0 400H303.2c.9-4.5.8 3.6.8-22.4 0-31.8-30.1-57.6-67.2-57.6-10.8 0-18.7 8-44.8 8-26.9 0-33.4-8-44.8-8-37.1 0-67.2 25.8-67.2 57.6 0 26-.2 17.9.8 22.4H48V144h480v288zm-168-80h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8zm0-64h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8zm0-64h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8zm-168 96c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64z"/></svg>
                        Candidate-se Agora
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('system/js/intlTelInput.min.js') }}"></script>
<script src="{{ asset('template/js/pages/content/methods.js') }}"></script>
<script src="{{ asset('template/js/pages/content/events.js') }}"></script>
<script src="{{ asset('template/js/pages/content/script.js') }}"></script>
@stop