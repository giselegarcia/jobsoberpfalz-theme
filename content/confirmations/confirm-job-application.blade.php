@extends('template.'.config('settings.template').'.content.master')
@section('head')
@section('meta_title', 'Inbox | Jobs-Oberpfalz.de')
@section('meta_description', 'Informationen über unsere Allgemeinen Geschäftsbedingungen zur Nutzung unserer Plattform')
@stop
@section('content')
<div class="container">
    <br>
    <br>
    <br>
    <div class="row">
        @if(!array_key_exists("confirm-registration", $entry->fields) || !$entry->fields["confirm-registration"])
        <p class="text-center">Möchten Sie die Bewerbung bestätigen?</p>
        <br>
        <br>
        <div class="col-12 col-md-6">
            <x-form id-name="bewerbungsformular" entry-id="{{$entry->id}}">
                <input type="hidden" name="confirm-registration" value="0"/>
                <button data-email="name@server.com" data-subject="subject" data-body="text" type="submit" style="width: 100%;" class="btn btn-secondary d-block">Bewerbung absagen</button>
            </x-form>
        </div>
        <div class="col-12 col-md-6">
            <x-form id-name="bewerbungsformular" entry-id="{{$entry->id}}">
                <input type="hidden" name="confirm-registration" value="1"/>
                <button data-email="name@server.com" data-subject="subject" data-body="text" type="submit" style="width: 100%;" class="btn btn-success d-block">Anmeldung bestätigen</button>
            </x-form>
        </div>
        @else
        <p class="text-center">Bestätigter Rekord</p>
        @endif
    </div>
    <br>
    <br>
    <br>
</div>
@stop