@extends('template.'.config('settings.template').'.content.master')
@section('head')
@section('meta_title', 'Jobangebote nach Regionen in der Oberpfalz')
@section('meta_description', 'Hier findest du Stellenangebote nach Region: Jobs in Regensburg, Weiden, Amberg, Neumarkt und andere...')
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <br>
            <br>
            <h1>Oberpfalz Jobs nach Regionen</h1>
            <br>
        </div>
    </div>
    <div class="row text-center" style="font-size: 20px;">
        @foreach(getListsByGroup("Region") as $groupList)
            @if($groupList->contents($groupList)->count() > 0)
                <div class="col-6 col-md-3 mb-5">
                    <a href="{{url('/'.$groupList->slug)}}">
                        <img src="{{!empty($groupList->image)?asset('uploads/lists/'.$groupList->image):'https://www.jobs-oberpfalz.de/images/manual/regensburg.jpg'}}" class="img-fluid rounded border" loading="lazy">
                        <span class="badge rounded-pill bg-secondary">{{$groupList->contents($groupList)->count()}}</span>
                        Jobs in {{$groupList->name}}
                    </a>
                </div>
            @endif
        @endforeach
    </div>
</div>
@stop
