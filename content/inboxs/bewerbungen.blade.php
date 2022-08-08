@extends('template.'.config('settings.template').'.content.master')
@section('head')
@section('meta_title', 'Inbox | Jobs-Oberpfalz.de')
@section('meta_description', 'Informationen über unsere Allgemeinen Geschäftsbedingungen zur Nutzung unserer Plattform')
@stop
@section('content')
@if(!is_null(Auth::user()))
    @if(array_key_exists("status-value", $_COOKIE) && $_COOKIE["status-value"] != "all")
        @php($entries = $entries->filter(function($item) { return $item->fields["company-id"] == Auth::user()->id && $item->fields["status"] == $_COOKIE["status-value"]; }))
    @else
        @php($entries = $entries->filter(function($item) { return $item->fields["company-id"] == Auth::user()->id && $item->fields["status"] != "spam"; }))
    @endif
@else
    @php($entries = $entries->filter(function($item) { return false; }))
@endif
@if(count($entries) > 0) @if(is_null($entry)) @php($entry = $entries->first()) @endif @endif
<div class="container">
    <div class="row">
        <div class="col-12">
            <br>
            <br>
            <br>
        </div>
        <div class="col-1">
            <h1 class="mb-3">Inbox</h1>
        </div>
        <div class="col-6">
            <div class="btn-group">
                @if(array_key_exists("status-value", $_COOKIE) && $_COOKIE["status-value"] != "all")
                <a type="button" class="btn dropdown-toggle" data-value="{{$_COOKIE['status-value']}}" data-bs-toggle="dropdown" aria-expanded="false" style="margin-top: 14px; font-weight: normal;">
                    {{$_COOKIE['status-text']}}
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <button class="dropdown-item status-item" data-value="all" data-url="{{route('dashboard.inbox', [$inbox->id_name])}}" type="button">

                            Alle Bewerbungen
                        </button>
                    </li>
                @else
                <a type="button" class="btn dropdown-toggle" data-value="all" data-bs-toggle="dropdown" aria-expanded="false" style="margin-top: 14px; font-weight: normal;">
                    Alle Bewerbungen
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                @endif
                    <li>
                        <button class="dropdown-item status-item" data-value="new" data-url="{{route('dashboard.inbox', [$inbox->id_name])}}" type="button">

                            Neue Bewerbungen
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item status-item" data-value="accepted" data-url="{{route('dashboard.inbox', [$inbox->id_name])}}" type="button">
                            Bewerbungen Angenommen
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item status-item" data-value="rejected" data-url="{{route('dashboard.inbox', [$inbox->id_name])}}" type="button">
                            Abgelehnte Bewerbungen
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        @if(count($entries) > 0)
        <div class="col-5"></div>
        <div class="col-lg-4">
            <div class="card shadow-lg mt-3 mb-5" style="max-height: 600px; overflow-y: scroll;">
                @foreach($entries as $indexEntry => $item)
                    @if((is_null($entry) && $indexEntry == 0) || (!is_null($entry) && $item->id == $entry->id))
                    <a href="{{route('dashboard.inbox',['idName' => $inbox->id_name, 'sentId' => $item->id])}}">
                        <div class="card-body" style="background-color: rgba(194, 215, 177, 0.48)">
                            <h5 class="fw-bold">
                                {{$item->fields["name"]}} <span class="badge bg-secondary">{{$item->fields["status"]}}</span>
                            </h5>
                            <h6>{{$item->fields["job-title"]}}</h6>
                            <span>{{$item->created_at->diffForHumans()}}</span>
                        </div>
                        <hr class="mt-0 mb-0">
                    </a>
                    @else
                    <a href="{{route('dashboard.inbox',['idName' => $inbox->id_name, 'sentId' => $item->id])}}">
                        <div class="card-body">
                            <h5>
                                {{$item->fields["name"]}} <span class="badge bg-secondary">{{$item->fields["status"]}}</span>
                            </h5>
                            <h6>{{$item->fields["job-title"]}}</h6>
                            <span>{{$item->created_at->diffForHumans()}}</span>
                        </div>
                        <hr class="mt-0 mb-0">
                    </a>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="col-lg-7 offset-1">
            <div class="card shadow-lg mb-5">
                <div class="card-body" style="min-height: 450px;">
                    <div class="row">
                        <div class="col-8">
                            <h2 class="mb-3 mt-2">{{$entry->fields["name"]}}</h2>

                        </div>
                        <div class="col-4 text-end">

                            <span class="text-muted small" title="{{date('d.m.Y', strtotime($entry->created_at))}}">{{$entry->created_at->diffForHumans()}}</span>



                            <a href="" title="-History -Archive -Delete">

                            </a>

                            <div class="btn-group">
                                <a type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg style="height: 22px; margin-left: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 512"><path d="M32 224c17.7 0 32 14.3 32 32s-14.3 32-32 32-32-14.3-32-32 14.3-32 32-32zM0 136c0 17.7 14.3 32 32 32s32-14.3 32-32-14.3-32-32-32-32 14.3-32 32zm0 240c0 17.7 14.3 32 32 32s32-14.3 32-32-14.3-32-32-32-32 14.3-32 32z"/></svg>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <button class="dropdown-item" type="button">
                                            <a class="dropdown-item" href="{{ url('/delete-form/111') }}">

                                                Löschen
                                            </a>
                                        </button>
                                    </li>

                                </ul>
                            </div>



                        </div>
                        <div class="col-8">
                            <h5 class="ci-color">{{$entry->fields["job-title"]}}</h5>

                        </div>
                        <div class="col-4 text-end">

                            <span class="badge bg-secondary">{{$entry->fields["status"]}}</span>
                        </div>
                    </div>
                    <hr>
                    <table class="table">
                        <tbody>

                            <tr>
                                <td>E-Mail</td>
                                <td>{{$entry->fields["email"]}}</td>
                            </tr>
                            <tr>
                                <td>Telefon</td>
                                <td>{{isset($entry->fields["tel"])?$entry->fields["tel"]:""}}</td>
                            </tr>
                            <tr>
                                <td>Firma</td>
                                <td>{{$entry->fields["company"]}}</td>
                            </tr>
                            <tr>
                                <td>Stellentitel</td>
                                <td>{{$entry->fields["job-title"]}}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                @if($entry->fields["status"] == "new" || $entry->fields["status"] == "spam")
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <x-form id-name="bewerbungsformular" entry-id="{{$entry->id}}">
                                <input type="hidden" name="status" value="rejected"/>
                                <button data-email="name@server.com" data-subject="subject" data-body="text" type="submit" style="width: 100%;" class="btn btn-secondary d-block btn-mailto">Bewerbung absagen</button>
                            </x-form>
                        </div>
                        <div class="col-12 col-md-6">
                            <x-form id-name="bewerbungsformular" entry-id="{{$entry->id}}">
                                <input type="hidden" name="status" value="accepted"/>
                                <button data-email="name@server.com" data-subject="subject" data-body="text" type="submit" style="width: 100%;" class="btn btn-success d-block btn-mailto">Bewerber Einladen</button>
                            </x-form>

                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        @else
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="text-center">
            <br>
            <br>
            <br>
            <br>
            <i>Derzeit noch keine Bewerbungen auf Ihre offenen Arbeitsstellen</i>
            <br>
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_zckmnrhp.json" class="img-fluid d-block mx-auto" background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop autoplay></lottie-player>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
        @endif
    </div>
</div>
@stop
@section('scripts')
<script src="{{ asset('template/js/pages/inbox/methods.js') }}"></script>
<script src="{{ asset('template/js/pages/inbox/events.js') }}"></script>
<script src="{{ asset('template/js/pages/inbox/script.js') }}"></script>
@stop