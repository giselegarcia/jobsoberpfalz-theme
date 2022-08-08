@extends('template.'.config('settings.template').'.content.master')
@section('head')
@section('meta_title', 'Jobangebote nach Branchen in der Oberpfalz')
@section('meta_description', 'Wir helfen Ihnen Ihre offenen Arbeitsstellen bestmöglich und kompetent zu besetzen. Jetzt kostenlos starten und testen! ')
@stop
@section('content')


        <div class="container">
            <div class="row">

                <div class="col-12">
                    <br>
                    <br>

                    <h1>Jobangebote nach Branchen</strong></h1>

                    <br>
                </div>


                <style>
                    .jobbranche{
                        font-size: 19px;
                        border: 2px solid #f49c35;
                        background-color: #f8f8f8;
                        color: black;
                        padding:10px;
                        margin: 8px;
                    }

                    .jobbranche:hover{
                        border: 2px solid #ec8b19;
                        background-color: #f49c35;
                        color: white;
                    }


                    #jobbranche{
                        text-align: center;
                        margin-top:30px;
                        overflow: scroll-x;
                        margin-bottom: 20vh;


                    }
                    #jobbranche a:hover, #jobbranche a:active{
                        text-decoration: none;
                    }

                </style>

                <div id="jobbranche">

                    @foreach(getListsByGroup("Branche") as $groupList)

                        <a href="{{url('/'.$groupList->slug)}}">
                            <div class="badge primary jobbranche">
                                {{$groupList->name}}
                            </div>
                        </a>
                    @endforeach



                </div>
            </div>
        </div>






@stop
