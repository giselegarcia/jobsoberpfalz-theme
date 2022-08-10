@extends('template.'.config('settings.template').'.content.layout')
@section('head')
<style>
    .slick-slider {
        position: relative;
        display: block;
        box-sizing: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent
    }

    .slick-list {
        position: relative;
        display: block;
        overflow: hidden;
        margin: 0;
        padding: 0
    }

    .slick-list:focus {
        outline: none
    }

    .slick-list.dragging {
        cursor: pointer;
        cursor: hand
    }

    .slick-slider .slick-list,
    .slick-slider .slick-track {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }

    .slick-track {
        position: relative;
        top: 0;
        left: 0;
        display: block;
        margin-left: auto;
        margin-right: auto
    }

    .slick-track:after,
    .slick-track:before {
        display: table;
        content: ''
    }

    .slick-track:after {
        clear: both
    }

    .slick-loading .slick-track {
        visibility: hidden
    }

    .slick-slide {
        display: none;
        float: left;
        height: 100%;
        min-height: 1px
    }

    [dir='rtl'] .slick-slide {
        float: right
    }

    .slick-slide img {
        display: block
    }

    .slick-slide.slick-loading img {
        display: none
    }

    .slick-slide.dragging img {
        pointer-events: none
    }

    .slick-initialized .slick-slide {
        display: block
    }

    .slick-loading .slick-slide {
        visibility: hidden
    }

    .slick-vertical .slick-slide {
        display: block;
        height: auto;
        border: 1px solid transparent
    }

    .slick-arrow.slick-hidden {
        display: none
    }

    .slick-slide {
        margin: 0 20px
    }

    .logo-carousel {
        overflow: inherit
    }

    .slick-slide img {
        width: 100%
    }

    .slick-track::after,
    .slick-track::before {
        display: table;
        content: ''
    }

    .slick-track::after {
        clear: both
    }

    .slick-track {}

    .slick-loading .slick-track {
        visibility: hidden
    }

    .slick-slide.slick-loading img {
        display: none
    }

    .slick-slide.dragging img {
        pointer-events: none
    }

    .slick-loading .slick-slide {
        visibility: hidden
    }

    .slick-arrow {
        position: absolute;
        top: 50%;
        background: url("https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/arrow.svg?sanitize=true") center no-repeat;
        color: #fff;
        filter: invert(77%) sepia(32%) saturate(1%) hue-rotate(344deg) brightness(105%) contrast(103%);
        border: none;
        width: 2rem;
        height: 1.5rem;
        text-indent: -10000px;
        margin-top: -16px;
        z-index: 99
    }

    .slick-arrow.slick-next {
        right: 5px;
        transform: rotate(180deg)
    }

    .slick-arrow.slick-prev {
        left: 5px
    }

    @media (max-width: 768px) {
        .slick-arrow {
            width: 1rem;
            height: 1rem
        }
    }

    .carousel-row {
        overflow: hidden
    }

    .logo-carousel {
        margin-top: 32px
    }

    #list-filter-menue .form-check-input:checked {
        background-color: #157347;
        border-color: #146c43;
    }

    #list-filter-menue .form-check {
        min-height: 2.5rem;
    }

    #list-filter-menue .bg-light {
        background-color: #f8f9fa29 !important;
    }

    #list-filter-menue .badge {
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
</style>
@stop
@section('content')
<div class="row">
    <div id="header_static" style="background-color: #9699AA; background-image: url('{{ asset('uploads/lists/' . $list->image) }}'); background-position: center; background-size: cover;">
        <div class="d-none d-md-block">
            <br>
            <br>
        </div>
        <div class="d-none d-lg-block">
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
        <div id="city_headline">
            <h1>Os melhores <strong>Empregos</strong> de <strong> {{ $list->name }}</strong></h1>
            <h2>Encontre o emprego dos seus sonhos agora e inscreva-se diretamente online.</h2>
        </div>
        <div class="d-none d-md-block">
            <br>
        </div>
        <div class="d-none d-lg-block">
            <br>
        </div>
    </div>
</div>
<section id="latest_jobs" class="mt-4">
    <div class="row">
        <div class="col-lg-12 mb-4">
            <h2>{!!showTitle($list, $filters)!!}</h2>
        </div>
        <div id="list-filter-menue" class="d-none d-lg-block col-12 position-relative col-md-3 rounded-end" style="background-color: #f49c35; padding: 25px;">
            <div class="row">
                <div class="col-12">
                    @foreach($listGroups as $listGroup)
                        <h5 class="mt-5 mb-3 fw-bold">{{$listGroup->name}}</h5>
                        @foreach($listGroup->lists as $listGroupList)
                            <div class="form-check">
                                <input class="form-check-input check-branche" type="checkbox" value="{{$listGroupList->slug}}" id="flexCheck{{$listGroupList->name}}" {{$listGroupList->id == $list->id || (!is_null($filters) && in_array($listGroupList->slug, $filters))?"checked":""}}>
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
            <div class="col-12">
                <div class="card mb-3" style="background-color: #f8f8f8;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 col-lg-1">
                                <a href="{{ route('content', [$content->user->slug]) }}" onclick="gtag('event', 'See Employer', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{ $content->user->name }}'});">
                                    <img src="{{ $content->user->gravatar() }}" title="{{ $content->user->name }}" height="70px" class="border rounded" alt="Logo {{ $content->user->name }}">
                                </a>
                            </div>
                            <div class="col-9 col-lg-2">
                                <a href="{{ route('content', [$content->user->slug]) }}" class="text-muted" onclick="gtag('event', 'See Employer', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{ $content->user->name }}'});">
                                    {{$content->user->name}}
                                    <br>
                                </a>
                            </div>
                            <div class="col-12 col-lg-7">
                                <h5 class="card-title" style="margin-top: 20px;">
                                    <a href="{{ route_content($content) }}" onclick="gtag('event', 'See Job', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{$content->title}}'});">
                                        {{$content->title}}
                                    </a>
                                </h5>
                            </div>
                            <div class="col-5 d-lg-none">
                                <br>
                                @php(\Carbon\Carbon::setLocale('pt-br'))
                                <h6 class="card-subtitle mb-2 text-muted" title="{{date('d.m.Y', strtotime($content->updated_at))}}">{{ $content->updated_at->diffForHumans() }}</h6>
                            </div>
                            <div class="col-7 col-lg-2 text-end ">
                                <h6 class="card-subtitle mb-2 text-muted d-none d-lg-block text-center" title="{{date('d.m.Y', strtotime($content->updated_at))}}">{{ $content->updated_at->diffForHumans() }}</h6>
                                <a class="btn btn-ci btn-sm" href="{{ route_content($content) }}" onclick="gtag('event', 'See Job', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{$content->title}}'});">
                                    Ver Trabalho
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
        </div>
    </div>
    <div class="col-12 col-lg-9 offset-lg-3">
        <div style="margin: auto;text-align: center;    display: table; overflow: scroll;">
            {!! $contents->onEachSide(1)->fragment("latest_jobs")->render() !!}
        </div>
    </div>
    <div id="list-filter-menue" class="d-lg-none position-relative col-12 mb-4 rounded-end" style="background-color: #f49c35; padding: 25px;">
            <h5 class="fw-bold mb-2">
                <svg style="fill: black; width: 20px; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M479.968 0H32.038C3.613 0-10.729 34.487 9.41 54.627L192 237.255V424a31.996 31.996 0 0 0 10.928 24.082l64 55.983c20.438 17.883 53.072 3.68 53.072-24.082V237.255L502.595 54.627C522.695 34.528 508.45 0 479.968 0zM288 224v256l-64-56V224L32 32h448L288 224z"/></svg>
                Filtros
            </h5>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                @foreach($listGroups as $listGroup)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading{{$listGroup->name}}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$listGroup->name}}" aria-expanded="false" aria-controls="flush-collapse{{$listGroup->name}}">
                            <h6 class="fw-bold">{{$listGroup->name}}</h6>
                        </button>
                    </h2>
                    <div id="flush-collapse{{$listGroup->name}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$listGroup->name}}" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        @foreach($listGroup->lists as $listGroupList)
                            <div class="form-check">
                                <input class="form-check-input check-mobile-branche" type="checkbox" value="{{$listGroupList->slug}}" id="flexCheck{{$listGroupList->name}}" {{$listGroupList->id == $list->id || (!is_null($filters) && in_array($listGroupList->slug, $filters))?"checked":""}}>
                                <label class="form-check-label" for="flexCheck{{$listGroupList->name}}">
                                    {{$listGroupList->name}}
                                    <span class="badge bg-light text-dark">{{$listGroupList->contents($listGroupList)->count()}} Jobs</span>
                                </label>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</section>
<div class="container">
    @if(count($premiumAuthors) > 0)
    <section>
        <div class="row carousel-row">
            <div class="container" style="margin-top: 75px;margin-bottom: 85px;">
                <div class="col-sm-12">
                    <h2 style="text-align: left" class="mb-4">Top <strong>Arbeitgeber</strong> mit offenen <strong>Arbeitsstellen</strong></h2>
                </div>
                <div class="row top_arbeitgeber logo-carousel slider" data-arrows="true">
                    @foreach($premiumAuthors->take(8) as $premiumAuthor)
                    <div class="logos slide" style="padding-bottom: 40px; text-align: center">
                        <a href="{{url('/arbeitgeber')}}/{{$premiumAuthor->slug}}" class="text-center" style="font-size: 13px;">
                            <img src="{{url('/uploads/profile')}}/{{$premiumAuthor->image}}" loading="lazy" class="img-fluid center-block border rounded mb-2" alt="Logo {{$premiumAuthor->name}}">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif
</div>
<div class="container">
    <section class="mt-2">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="mt-2">Aktuelle Jobs in <strong>{{$list->name}}</strong></h2>
                <br>
                @if (isset($list))
                {{ $list->description }}
                @endif
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
    </section>
</div>
@stop
@section('scripts')
<script defer src="{{storage('js/libs/slick.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.logo-carousel').slick({
            slidesToShow: 8,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            arrows: true,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 2000,
                settings: {
                    slidesToShow: 7
                }
            }, {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 6
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
        $('.check-branche').change(function() {
            let url = "{{route('content')}}";
            let filters = []
            $('.check-branche:checked').each(function(index, item) {
                filters.push($(item).val());
            });
            filters = filters.join('/');
            window.location.replace(`${url}/${filters}#latest_jobs`);
        });
        $('.check-mobile-branche').change(function() {
            let url = "{{route('content')}}";
            let filters = []
            $('.check-mobile-branche:checked').each(function(index, item) {
                filters.push($(item).val());
            });
            filters = filters.join('/');
            window.location.replace(`${url}/${filters}#latest_jobs`);
        });
    });
</script>
@stop