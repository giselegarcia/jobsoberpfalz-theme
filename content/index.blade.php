@extends('template.'.config('settings.template').'.content.layout')
@section('head')
<title>Jobs-Oberpfalz.de | Finde hier die besten Jobs der Oberpfalz</title>
<meta name="description" content="Aktuelle Stellenangebote aus deiner Region. Über 800 Arbeitgeber mit offenen Stellen warten auf dich. Online Bewerbung ohne Registrierung!">
<meta name="url-base" content="{{url('')}}">
<style>
    .slick-slider{position:relative;display:block;box-sizing:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-touch-callout:none;-khtml-user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:transparent}.slick-list{position:relative;display:block;overflow:hidden;margin:0;padding:0}.slick-list:focus{outline:none}.slick-list.dragging{cursor:pointer;cursor:hand}.slick-slider .slick-list,.slick-slider .slick-track{-webkit-transform:translate3d(0, 0, 0);-moz-transform:translate3d(0, 0, 0);-ms-transform:translate3d(0, 0, 0);-o-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}.slick-track{position:relative;top:0;left:0;display:block;margin-left:auto;margin-right:auto}.slick-track:after,.slick-track:before{display:table;content:''}.slick-track:after{clear:both}.slick-loading .slick-track{visibility:hidden}.slick-slide{display:none;float:left;height:100%;min-height:1px}[dir='rtl'] .slick-slide{float:right}.slick-slide img{display:block}.slick-slide.slick-loading img{display:none}.slick-slide.dragging img{pointer-events:none}.slick-initialized .slick-slide{display:block}.slick-loading .slick-slide{visibility:hidden}.slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}.slick-arrow.slick-hidden{display:none}
    .slick-slide{margin:0 20px}.logo-carousel{overflow:inherit}.slick-slide img{width:100%}.slick-track::after,.slick-track::before{display:table;content:''}.slick-track::after{clear:both}.slick-track{}.slick-loading .slick-track{visibility:hidden}.slick-slide.slick-loading img{display:none}.slick-slide.dragging img{pointer-events:none}.slick-loading .slick-slide{visibility:hidden}.slick-arrow{position:absolute;top:50%;background:url("https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/arrow.svg?sanitize=true") center no-repeat;color:#fff;filter: invert(77%) sepia(32%) saturate(1%) hue-rotate(344deg) brightness(105%) contrast(103%);border:none;width:2rem;height:1.5rem;text-indent:-10000px;margin-top:-16px;z-index:99}.slick-arrow.slick-next{right:5px;transform:rotate(180deg)}.slick-arrow.slick-prev{left:5px}@media (max-width: 768px){.slick-arrow{width:1rem;height:1rem}}.carousel-row{overflow:hidden}.logo-carousel{margin-top:32px}
    @media only screen and (max-width: 676px) {
        #home-hero {
            width: 100%;
            background-color: #9699AA;
            background-image: url('https://www.jobs-oberpfalz.de/images/manual/regensburg-sm.jpg');
            background-position: center;
            background-size: cover;
        }
    }
    @media only screen and (min-width: 676px) {
        #home-hero {
            width: 100%;
            background-color: #9699AA;
            background-image: url('https://www.jobs-oberpfalz.de/images/manual/regensburg.jpg');
            background-position: center;
            background-size: cover;
        }
    }
    .result-item{display:flex;align-items:center;margin-top:40px;font-size:20px}.result-item span{margin-left:10px;font-size:12px;padding:2px 5px;border-radius:5px;font-style:italic;color:#fff;background-color:#f44336aa}
    #list-filter-menue .form-check-input:checked{
        background-color: #157347;
        border-color: #146c43;
    }
    #list-filter-menue .form-check {
        min-height: 2.5rem;
    }
    #list-filter-menue .bg-light
    {
        background-color: #f8f9fa29 !important;
    }
    #list-filter-menue .badge{
        font-weight: normal;
        margin-right: 10px;
    }
    .accordion-button:not(.collapsed) {
        color: #000;
        background-color: #f49c35;
    }
    .accordion-collapse {
        border: none;
    }
    .accordion-button {
        border: none;
    }
    #searchcontainer {
        background: rgb(255, 255, 255);
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.7413165949973739) 0%, rgba(244, 156, 53, 0.556442645417542) 50%, rgba(252, 176, 69, 1) 100%);
        padding-top: 30px;
        padding-bottom: 30px;
    }
    @media only screen and (min-width: 990px) {
        #searchcontainer {
            margin-top: -109px;
        }
    }
    .jobbranche {
        font-size: 19px;
        border: 2px solid #f49c35;
        background-color: #f8f8f8;
        color: black;
        padding: 10px;
        margin: 8px;
    }
    .jobbranche:hover {
        border: 2px solid #ec8b19;
        background-color: #f49c35;
        color: white;
    }
    #jobbranche {
        text-align: center;
        overflow: scroll-x;
    }
    #jobbranche a:hover,
    #jobbranche a:active {
        text-decoration: none;
    }
</style>
@stop
@section('content')
<div class="row">
    <div id="home-hero">
        <div class="d-none d-md-block">
            <br>
            <br>
        </div>
        <div id="city_headline">
            <h1>Os melhores <strong>Empregos</strong></h1>
            <h2 class="shadow">Encontre o emprego dos seus sonhos agora e inscreva-se diretamente online.</h2>
        </div>
        <div class="d-none d-md-block">
            <br>
        </div>
        <div class="d-none d-lg-block">
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
    <div id="searchcontainer" class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="input-group input-group-lg">
                    <span class="input-group-text" id="inputGroup-sizing-lg">🔍</span>
                    <input type="search" id="txt-main-search" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Suche nach Arbeitgeber, Region, Branche, ..." list="searchresults">
                </div>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="row carousel-row">
        <div class="container">
            <div class="col-sm-12">
                <h2 style="text-align: left" class="mb-4">Top <strong>Empresas</strong></h2>
            </div>
            <div class="row top_arbeitgeber logo-carousel slider" data-arrows="true">
                @foreach($premiumAuthors as $premiumAuthor)
                <div class="logos slide" style="padding-bottom: 40px; text-align: center">
                    <a href="" class="text-center" style="font-size: 13px;">
                        <img src="{{url('/uploads/profile')}}/{{$premiumAuthor->image}}" loading="lazy" alt="Logo {{$premiumAuthor->name}}" class="img-fluid center-block border rounded mb-2">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="mt-2">
    <div class="row">
        <div class="col-lg-12 mb-4">
            <h2 id="latest_jobs" class="mt-5 mb-4">Ofertas de  <strong>Trabalho</strong></h2>
        </div>
        <div id="list-filter-menue" class="d-none d-lg-block col-12 position-relative col-md-3 rounded-end" style="background-color: #f49c35; padding: 25px;">
            <div class="row">
                <div class="col-12">
                    @foreach($listGroups as $listGroup)
                        <h5 class="mt-5 mb-3 fw-bold">{{$listGroup->name}}</h5>
                        @foreach($listGroup->lists as $listGroupList)
                            <div class="form-check">
                                <input class="form-check-input check-branche" type="checkbox" value="{{$listGroupList->slug}}" id="flexCheck{{$listGroupList->name}}">
                                <label class="form-check-label" for="flexCheck{{$listGroupList->name}}">
                                    {{$listGroupList->name}}
                                    <span class="badge bg-light text-dark">{{$listGroupList->contents($listGroupList)->count()}} Jobs</span>
                                </label>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-9">
            @foreach($contents as $indexContent => $content)
            <div class="col-12" style="padding-bottom: 1rem;">
                <div class="card" style="background-color: #f8f8f8;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 col-lg-1">
                                <a href="#" onclick="gtag('event', 'See Employer', {'event_category' : 'Home', 'event_label' : '{{ $content->user->name }}'});">
                                    <img src="{{ $content->user->gravatar() }}" title="{{ $content->user->name }}" class="border rounded img-fluid shadow-sm" alt="Logo {{ $content->user->name }} ">
                                </a>
                            </div>
                            <div class="col-9 col-lg-2">
                                <a href="#" class="text-muted" onclick="gtag('event', 'See Employer', {'event_category' : 'Home', 'event_label' : '{{ $content->user->name }}'});">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="height:25px; fill: black;" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                                        <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                                    </svg>
                                    {{$content->user->name}}
                                </a>
                            </div>
                            <div class="col-12 col-lg-7">
                                <h5 class="card-title" style="margin-top: 20px;">
                                    <a href="{{ route_content($content) }}" onclick="gtag('event', 'See Job', {'event_category' : 'Home', 'event_label' : '{{$content->title}}'});">
                                        {{$content->title}}
                                    </a>
                                </h5>
                            </div>
                            <div class="col-5 d-lg-none">
                                <br>
                                @php(\Carbon\Carbon::setLocale('pt-br'))
                                <h6 class="card-subtitle mb-2 text-muted" title="{{date('d.m.Y', strtotime($content->updated_at))}}"> {{ $content->updated_at->diffForHumans() }}</h6>

                            </div>
                            <div class="col-7 col-lg-2 text-end ">
                                <h6 class="card-subtitle mb-2 text-muted d-none d-lg-block text-center mt-3" title="{{date('d.m.Y', strtotime($content->updated_at))}}"> {{ $content->updated_at->diffForHumans() }}</h6>
                                <a class="btn btn-ci btn-sm" href="{{ route_content($content) }}" onclick="gtag('event', 'See Job', {'event_category' : 'Home', 'event_label' : '{{$content->title}}'});">
                                    Ver Emprego
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
            <div class="col-12">
                <div style="margin: auto;text-align: center;    display: table; overflow: scroll;">
                    {!! $contents->onEachSide(1)->fragment("latest_jobs")->render() !!}
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="row" style="overflow: auto;">
        <h2 class="mb-4">Trabalhos por <strong>Setor</strong></h2>
        <div id="jobbranche">
            @foreach(getListsByGroup("Setor") as $groupList)
                <a href="{{url('/'.$groupList->slug)}}">
                    <div class="badge primary jobbranche">
                        {{$groupList->name}}
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col">
            <h2 class="mb-5">Trabalhos por <strong>Região</strong></h2>
        </div>
    </div>
    <div class="row text-center" style="font-size: 20px;">
        @foreach(getListsByGroup("Região") as $groupList)
                <div class="col-6 col-md-3 mb-5">
                    <a href="{{url('/'.$groupList->slug)}}">
                        <img src="{{!empty($groupList->image)?asset('uploads/lists/'.$groupList->image):'https://www.jobs-oberpfalz.de/images/manual/regensburg.jpg'}}" class="img-fluid rounded border" loading="lazy">
                        {{$groupList->name}}
                    </a>
                </div>
        @endforeach
</section>
@stop
@section('scripts')
<script defer src="{{storage('js/libs/slick.min.js')}}"></script>
<script src="{{storage('js/pages/main/data.js')}}"></script>
<script src="{{storage('js/pages/main/events.js')}}"></script>
<script src="{{storage('js/pages/main/methods.js')}}"></script>
<script src="{{storage('js/pages/main/script.js')}}"></script>
@stop