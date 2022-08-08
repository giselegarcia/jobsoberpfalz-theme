<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('template.'.config('settings.template').'.content.includes.css')
        @yield('head')
        <style>
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
    </head>
    <body id="latest_jobs">
        <section id="latest_jobs" class="mt-4">
            <div class="row">

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
                    @php($externe = false)
                    @foreach($contents as $indexContent => $content)
                        @if($content->premium_id == 1)
                            <div class="card mb-3" style="background-color: #daeed8;">
                                <div class="text-center rounded-top" style="font-size: 12px; background-color: #3daa7352">
                                    <svg style="fill: black; width: 12px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path d="M463.7 0H112.3c-4.2 0-8.1 2.2-10.3 5.8L1.7 168.6c-2.7 4.4-2.2 10.1 1.2 14l276 325.2c4.8 5.6 13.4 5.6 18.2 0l276-325.2c3.4-3.9 3.8-9.6 1.2-14L474 5.8c-2.2-3.6-6.1-5.8-10.3-5.8zm-13.6 36l74.3 124h-83L384.6 36h65.5zM345 36l56.8 124H174.1L231 36h114zm-219.1 0h65.5l-56.8 124h-83l74.3-124zM61.2 192h73L216 384 61.2 192zm112 0h229.5L288 455.8 173.2 192zM360 384l81.8-192h73L360 384z" />
                                    </svg>
                                    Premium Jobangebot
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-3 col-lg-1">
                                            <a href="{{ route('content', [$content->user->slug]) }}" onclick="gtag('event', 'See Employer', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{ $content->user->name }}'});" target="_blank">
                                                <img src="{{ $content->user->gravatar() }}" title="{{ $content->user->name }}" height="70px" class="border rounded" alt="Logo {{ $content->user->name }}">
                                            </a>
                                        </div>
                                        <div class="col-9 col-lg-2">
                                            <a href="{{ route('content', [$content->user->slug]) }}" class="text-muted" onclick="gtag('event', 'See Employer', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{ $content->user->name }}'});" target="_blank">

                                                {{ $content->user->name }}

                                            </a>
                                        </div>
                                        <div class="col-12 col-lg-7">
                                            <h5 class="card-title" style="margin-top: 20px;">
                                                <a href="{{ route_content($content) }}" onclick="gtag('event', 'See Job', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{$content->title}}'});" target="_blank">
                                                    {{$content->title}}
                                                </a>
                                            </h5>
                                        </div>
                                        <div class="col-5 d-lg-none">
                                            <br>
                                            @php(\Carbon\Carbon::setLocale('de'))
                                            <h6 class="card-subtitle mb-2 text-muted" title="{{date('d.m.Y', strtotime($content->updated_at))}}">{{ $content->updated_at->diffForHumans() }}</h6>
                                        </div>
                                        <div class="col-7 col-lg-2 text-end ">
                                            <h6 class="card-subtitle mb-2 text-muted d-none d-lg-block text-center" title="{{date('d.m.Y', strtotime($content->updated_at))}}">{{ $content->updated_at->diffForHumans() }}</h6>
                                            <a class="btn btn-ci btn-sm" href="{{ route_content($content) }}" onclick="gtag('event', 'See Job', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{$content->title}}'});" target="_blank">
                                                Job ansehen
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif($content->premium_id == 2)
                            <div class="col-12">
                                <div class="card mb-3" style="background-color: #f8f8f8;">
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-3 col-lg-1">
                                                <a href="{{ route('content', [$content->user->slug]) }}" onclick="gtag('event', 'See Employer', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{ $content->user->name }}'});" target="_blank">
                                                    <img src="{{ $content->user->gravatar() }}" title="{{ $content->user->name }}" height="70px" class="border rounded" alt="Logo {{ $content->user->name }}">
                                                </a>
                                            </div>
                                            <div class="col-9 col-lg-2">
                                                <a href="{{ route('content', [$content->user->slug]) }}" class="text-muted" onclick="gtag('event', 'See Employer', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{ $content->user->name }}'});" target="_blank">

                                                    {{ $content->user->name }}
                                                    <br>


                                                </a>
                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <h5 class="card-title" style="margin-top: 20px;">
                                                    <a href="{{ route_content($content) }}" onclick="gtag('event', 'See Job', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{$content->title}}'});" target="_blank">
                                                        {{$content->title}}
                                                    </a>
                                                </h5>

                                                <span class="badge bg-success">
                                            <svg style="fill: white; width: 12px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path d="M463.7 0H112.3c-4.2 0-8.1 2.2-10.3 5.8L1.7 168.6c-2.7 4.4-2.2 10.1 1.2 14l276 325.2c4.8 5.6 13.4 5.6 18.2 0l276-325.2c3.4-3.9 3.8-9.6 1.2-14L474 5.8c-2.2-3.6-6.1-5.8-10.3-5.8zm-13.6 36l74.3 124h-83L384.6 36h65.5zM345 36l56.8 124H174.1L231 36h114zm-219.1 0h65.5l-56.8 124h-83l74.3-124zM61.2 192h73L216 384 61.2 192zm112 0h229.5L288 455.8 173.2 192zM360 384l81.8-192h73L360 384z" />
                                            </svg>
                                            Top Arbeitgeber
                                        </span>
                                            </div>

                                            <div class="col-5 d-lg-none">
                                                <br>
                                                @php(\Carbon\Carbon::setLocale('de'))
                                                <h6 class="card-subtitle mb-2 text-muted" title="{{date('d.m.Y', strtotime($content->updated_at))}}">{{ $content->updated_at->diffForHumans() }}</h6>
                                            </div>
                                            <div class="col-7 col-lg-2 text-end ">
                                                <h6 class="card-subtitle mb-2 text-muted d-none d-lg-block text-center" title="{{date('d.m.Y', strtotime($content->updated_at))}}">{{ $content->updated_at->diffForHumans() }}</h6>
                                                <a class="btn btn-ci btn-sm" href="{{ route_content($content) }}" onclick="gtag('event', 'See Job', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{$content->title}}'});" target="_blank">
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
                        @elseif($content->premium_id == 3)
                            <div class="col-12">
                                <div class="card mb-3" style="background-color: #f8f8f8;">
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-3 col-lg-1">
                                                <a href="{{ route('content', [$content->user->slug]) }}" onclick="gtag('event', 'See Employer', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{ $content->user->name }}'});" target="_blank">
                                                    <img src="{{ $content->user->gravatar() }}" title="{{ $content->user->name }}" height="70px" class="border rounded" alt="Logo {{ $content->user->name }}">
                                                </a>
                                            </div>
                                            <div class="col-9 col-lg-2">
                                                <a href="{{ route('content', [$content->user->slug]) }}" class="text-muted" onclick="gtag('event', 'See Employer', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{ $content->user->name }}'});" target="_blank">

                                                    {{ $content->user->name }}
                                                    <br>


                                                </a>
                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <h5 class="card-title" style="margin-top: 20px;">
                                                    <a href="{{ route_content($content) }}" onclick="gtag('event', 'See Job', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{$content->title}}'});" target="_blank">
                                                        {{$content->title}}
                                                    </a>
                                                </h5>




                                            </div>
                                            <div class="col-5 d-lg-none">
                                                <br>
                                                @php(\Carbon\Carbon::setLocale('de'))
                                                <h6 class="card-subtitle mb-2 text-muted" title="{{date('d.m.Y', strtotime($content->updated_at))}}">{{ $content->updated_at->diffForHumans() }}</h6>
                                            </div>
                                            <div class="col-7 col-lg-2 text-end ">
                                                <h6 class="card-subtitle mb-2 text-muted d-none d-lg-block text-center" title="{{date('d.m.Y', strtotime($content->updated_at))}}">{{ $content->updated_at->diffForHumans() }}</h6>
                                                <a class="btn btn-ci btn-sm" href="{{ route_content($content) }}" onclick="gtag('event', 'See Job', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{$content->title}}'});" target="_blank">
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
                        @elseif($content->premium_id == 4)
                            @if(!$externe)
                                <div class="row">
                                    @endif
                                    <div class="col-12 col-md-6 mb-3">
                                        <a href="{{$content->data_fields['link_zur_onlinebewerbung']}}" target="_blank" rel="sponsored">
                                            <div class="card shadow-sm h-100" style="background-color: #f7efef6b;">
                                                <div class="text-center rounded-top" style="font-size: 12px; background-color: #ae9f7a52">
                                                    <svg style="fill: black; width: 12px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path d="M463.7 0H112.3c-4.2 0-8.1 2.2-10.3 5.8L1.7 168.6c-2.7 4.4-2.2 10.1 1.2 14l276 325.2c4.8 5.6 13.4 5.6 18.2 0l276-325.2c3.4-3.9 3.8-9.6 1.2-14L474 5.8c-2.2-3.6-6.1-5.8-10.3-5.8zm-13.6 36l74.3 124h-83L384.6 36h65.5zM345 36l56.8 124H174.1L231 36h114zm-219.1 0h65.5l-56.8 124h-83l74.3-124zM61.2 192h73L216 384 61.2 192zm112 0h229.5L288 455.8 173.2 192zM360 384l81.8-192h73L360 384z" />
                                                    </svg>
                                                    Externe Partnerangebote
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h5 class="card-title fs-6">{{$content->title}}</h5>
                                                        </div>
                                                        <div class="col-12 text-center">
                                                            <h6 class="card-subtitle mt-2 text-muted">{{($content->data_fields['wir_als_arbeitgeber']?$content->data_fields['wir_als_arbeitgeber']:'')}}</h6>
                                                        </div>
                                                        <div class=" col-12 pt-sm-3">
                                                            <div style="font-size: 13px;" class="text-muted">
                                                                @php(\Carbon\Carbon::setLocale('de'))
                                                                {{$content->updated_at->diffForHumans()}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @if($indexContent == count($contents)-1)
                                </div>
                                <br>
                            @endif
                            @php($externe = true)
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-12">
                <div style="margin: auto;text-align: center;    display: table; overflow: scroll;">
                    {!! $contents->onEachSide(1)->fragment("latest_jobs")->render() !!}
                </div>
            </div>
            <div id="list-filter-menue" class="d-lg-none position-relative col-12 mb-4 rounded-end" style="background-color: #f49c35; padding: 25px;">
                <h5 class="fw-bold mb-2">
                    <svg style="fill: black; width: 20px; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M479.968 0H32.038C3.613 0-10.729 34.487 9.41 54.627L192 237.255V424a31.996 31.996 0 0 0 10.928 24.082l64 55.983c20.438 17.883 53.072 3.68 53.072-24.082V237.255L502.595 54.627C522.695 34.528 508.45 0 479.968 0zM288 224v256l-64-56V224L32 32h448L288 224z"/></svg>
                    Jobs filtern
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
        </section>
        @include('template.'.config('settings.template').'.content.includes.scripts')
        <script>
            $(document).ready(function() {
                $('.check-branche').change(function() {
                    let url = "{{route('content', [$list->slug])}}";
                    let filters = []
                    $('.check-branche:checked').each(function(index, item) {
                        filters.push($(item).val());
                    });
                    filters = filters.join('/');
                    window.location.replace(`${url}/${filters}#latest_jobs`);
                });
                $('.check-mobile-branche').change(function() {
                    let url = "{{route('content', [$list->slug])}}";
                    let filters = []
                    $('.check-mobile-branche:checked').each(function(index, item) {
                        filters.push($(item).val());
                    });
                    filters = filters.join('/');
                    window.location.replace(`${url}/${filters}#latest_jobs`);
                });
            });
        </script>
    </body>
</html>