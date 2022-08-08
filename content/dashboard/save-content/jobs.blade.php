@extends('template.'.config('settings.template').'.content.master')
@section('head')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.min.css"/>
    <style> label{ font-weight: bolder; color: #f49c35; margin-bottom: 3px; } </style>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('MAPS_API_KEY', 'AIzaSyAQj1N9Mj-OzOiUjt5QUDRkcDonXz4O85A') }}&v=3.exp&sensor=false&libraries=places"></script>
    <script src="https://cdn.tiny.cloud/1/0015awrvvurgnwz3e0uid83chhzb7lnbi6wyn4ukk7b4lh9k/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@stop
@section('content')
    <div class="admin-header">
        <div class="admin-header" style="margin-bottom:0px !important;">
            <div class="container">
                <br>
                <br>
                <h1 class="h2"><i class="fal fa-file-alt"></i>{{!isset($content)?"Neue Stellenanzeige veröffentlichen":"Stellenanzeige bearbeiten"}}</h1>
            </div>
        </div>
        <section>
            <div class="container">
                <div class="card shadow-lg" style="background-color: #f8f8f8; padding-top: 40px; margin-bottom: 120px;" >
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <form action="{{$saveRoute}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" id="nach_id" required="required" value="{{isset($content)?$content->id:''}}" name="nach_id">
                                    @if(!isset($content))
                                    <input type="hidden" name="type_id" value="{{ $type_id }}"/>
                                    @else
                                    @method('PUT')
                                    @endif
                                    <div class="row">
                                        <div class="col-12 col-md-4" style="margin-bottom: 30px;">
                                            <label for="exampleFormControlInputImage">Bild zur Stellenausschreibung</label>
                                            <a style="cursor:pointer;" class="img-content" onclick="clickImgContent();">
                                                <div class="upload-img ci-color" style="border: 2px dashed; width: 100%; max-height: 180px; ">
                                                    <div id="preview-pane">
                                                        <div class="preview-container">
                                                            @if(!isset($content))
                                                                <img class="jcrop-preview" id="jcrop-preview" />
                                                                <h6 class="text-center">
                                                                    <br>
                                                                    <svg style="width: 30px; fill:#f49c35;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path d="M452 432c0 11-9 20-20 20s-20-9-20-20 9-20 20-20 20 9 20 20zm-84-20c-11 0-20 9-20 20s9 20 20 20 20-9 20-20-9-20-20-20zm144-48v104c0 24.3-19.7 44-44 44H44c-24.3 0-44-19.7-44-44V364c0-24.3 19.7-44 44-44h124v-99.3h-52.7c-35.6 0-53.4-43.1-28.3-68.3L227.7 11.7c15.6-15.6 40.9-15.6 56.6 0L425 152.4c25.2 25.2 7.3 68.3-28.3 68.3H344V320h124c24.3 0 44 19.7 44 44zM200 188.7V376c0 4.4 3.6 8 8 8h96c4.4 0 8-3.6 8-8V188.7h84.7c7.1 0 10.7-8.6 5.7-13.7L261.7 34.3c-3.1-3.1-8.2-3.1-11.3 0L109.7 175c-5 5-1.5 13.7 5.7 13.7H200zM480 364c0-6.6-5.4-12-12-12H344v24c0 22.1-17.9 40-40 40h-96c-22.1 0-40-17.9-40-40v-24H44c-6.6 0-12 5.4-12 12v104c0 6.6 5.4 12 12 12h424c6.6 0 12-5.4 12-12V364z"/>
                                                                    </svg>
                                                                    <br>
                                                                    <br>
                                                                    Titelbild zur Stellenanzeige hochladen
                                                                </h6>
                                                            @else
                                                                <img class="jcrop-preview w-100 h-100" id="jcrop-preview" src="{{ !empty($content->image) ? url('/uploads/' . $content->image) : '' }}" />
                                                                <h6 class="text-center" style="position:absolute;top:50%;left:50%;text-align:center;transform: translateX(-50%) translateY(-50%);">
                                                                    <i class="fal fa-upload"></i>
                                                                    <br>
                                                                    Bild hochladen
                                                                </h6>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="form-group" style="display: none;">
                                                <input type="file" id="imageUpload" name="image" class="form-control">
                                            </div>
                                            <x-image-crop-dashboard file-id="imageUpload"></x-image-crop-dashboard>
                                            <div class="form-group" style="display: none;">
                                                <input type="file" id="exampleFormControlInputImage" name="image" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-7 offset-md-1">
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Titel Stellenausschreibung</label>
                                                <input type="text" class="form-control" id="title" value="{{ isset($content)?$content->title:'' }}" placeholder="Überschrift des Beitrags" name="title" required="required">
                                            </div>
                                            <div class="form-group d-none">
                                                <select class="form-control" id="category_id" name="category_id" required="required">
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div id="data_fields_create">
                                        <br>
                                        @foreach($content->type->fieldsOrdened as $field)
                                            <div class="form-group" style="margin-bottom: 60px;">
                                                <!-- Select Arbeitsort -->
                                                @if ($field->id_name == 21)
                                                    <select style="display: none;" class="form-control" id="field_{{ $field->id_name }}" name="data_fields[{{ $field->id_name }}]" {{ $field->required ? 'required="required"' : '' }}>
                                                        <option value="">Select...</option>
                                                        @foreach (explode(',', $field->attr['tags']) as $tag)
                                                            <option value="{{ $tag }}" {{ (isset($content->data_fields[21]) and $content->data_fields[21] == $tag) ? 'selected' : '' }}>{{ $tag }}</option>
                                                        @endforeach
                                                    </select>
                                                @else
                                                    <label for="field_{{ $field->id_name }}">{{ $field->name }}</label>
                                                    @if ($field->type == 'boolean')
                                                        <br>
                                                        <label class="radio-inline"><input type="radio" value="1" name="data_fields[{{ $field->id_name }}]" {{ (isset($content->data_fields[$field->id_name]) and $content->data_fields[$field->id_name] == 1) ? 'checked' : '' }} {{ $field->required ? 'required="required"' : '' }}> Yes</label>
                                                        <label class="radio-inline"><input type="radio" value="0" name="data_fields[{{ $field->id_name }}]" {{ (isset($content->data_fields[$field->id_name]) and $content->data_fields[$field->id_name] == 0) ? 'checked' : '' }}> No</label>
                                                    @elseif ($field->type == 'location')
                                                        <input type="{{ $field->type }}" name="data_fields[{{$field->id_name}}][value]" class="form-control fieldLocation" id="field_location" value="
                                                    {{isset($content->data_fields[$field->id_name])?(array_key_exists('value', $content->data_fields[$field->id_name])?$content->data_fields[$field->id_name]['value']:''):''}}"
                                                        @foreach ($field->attr as $key => $att)
                                                            {{ $key }}="{{ $att }}"
                                                        @endforeach
                                                        placeholder="{{ $field->name }}" {{ $field->required ? 'required="required"' : '' }}>
                                                        <input type="hidden" id="lat" value="{{ isset($content->data_fields[$field->id_name]) ? (array_key_exists('lat', $content->data_fields[$field->id_name])?$content->data_fields[$field->id_name]['lat']:'') : '' }}" name="data_fields[{{ $field->id_name }}][lat]" {{ $field->required ? 'required="required"' : '' }}/>
                                                        <input type="hidden" id="lng" value="{{ isset($content->data_fields[$field->id_name]) ? (array_key_exists('lng', $content->data_fields[$field->id_name])?$content->data_fields[$field->id_name]['lng']:'') : '' }} " name="data_fields[{{ $field->id_name }}][lng]" {{ $field->required ? 'required="required"' : '' }} />
                                                        <input type="hidden" id="streetAddress" value="{{ isset($content->data_fields[$field->id_name]['streetAddress']) ? (array_key_exists('streetAddress', $content->data_fields[$field->id_name])?$content->data_fields[$field->id_name]['streetAddress']:'') : '' }}"  name="data_fields[{{ $field->id_name }}][streetAddress]" {{ $field->required ? 'required="required"' : '' }} />
                                                        <input type="hidden" id="addressLocality" value="{{ isset($content->data_fields[$field->id_name]['addressLocality']) ? (array_key_exists('addressLocality', $content->data_fields[$field->id_name])?$content->data_fields[$field->id_name]['addressLocality']:'') : '' }}" name="data_fields[{{ $field->id_name }}][addressLocality]" {{ $field->required ? 'required="required"' : '' }} />
                                                        <input type="hidden" id="addressRegion" value="{{ isset($content->data_fields[$field->id_name]['addressRegion']) ? (array_key_exists('addressRegion', $content->data_fields[$field->id_name])?$content->data_fields[$field->id_name]['addressRegion']:'') : '' }}" name="data_fields[{{ $field->id_name }}][addressRegion]" {{ $field->required ? 'required="required"' : '' }} />
                                                        <input type="hidden" id="postalCode" value="{{ isset($content->data_fields[$field->id_name]['postalCode']) ? (array_key_exists('postalCode', $content->data_fields[$field->id_name])?$content->data_fields[$field->id_name]['postalCode']:'') : '' }}" name="data_fields[{{ $field->id_name }}][postalCode]" {{ $field->required ? 'required="required"' : '' }} />
                                                        <input type="hidden" id="addressCountry" value="{{ isset($content->data_fields[$field->id_name]['addressCountry']) ? (array_key_exists('addressCountry', $content->data_fields[$field->id_name])?$content->data_fields[$field->id_name]['addressCountry']:'') : '' }}" name="data_fields[{{ $field->id_name }}][addressCountry]" {{ $field->required ? 'required="required"' : '' }} />
                                                    @elseif($field->type == 'select')
                                                        @if ($field->attr['isMultiple'] == 0)
                                                            <select class="form-control" placeholder="{{ $field->name }}" id="field_{{ $field->id_name }}" name="data_fields[{{ $field->id_name }}]" {{ $field->required ? 'required="required"' : '' }}>
                                                                <option value="">Select...</option>
                                                                @foreach (explode(',', $field->attr['tags']) as $tag)
                                                                    <option value="{{ $tag }}" {{ isset($content) && $content->data_fields[$field->id_name] == $tag ? 'selected' : '' }}>{{ $tag }}</option>
                                                                @endforeach
                                                            </select>
                                                        @else
                                                            <select multiple class="demo-default multiple-plugin" placeholder="{{ $field->name }}" id="field_{{ $field->id_name }}" name="data_fields[{{ $field->id_name }}][]" {{ $field->required ? 'required="required"' : '' }}>
                                                                <option value="">Select...</option>
                                                                @foreach (explode(',', $field->attr['tags']) as $tag)
                                                                    <option value="{{ $tag }}" {{ isset($content) && isset($content->data_fields[$field->id_name]) && in_array($tag, $content->data_fields[$field->id_name]) ? 'selected' : '' }}>{{ $tag }}</option>
                                                                @endforeach
                                                            </select>
                                                        @endif
                                                    @elseif ($field->type == 'textfield')
                                                        <textarea class="form-control textfield-editor" id="field_{{ $field->id_name }}" rows="3" placeholder="{{ $field->name }}" name="data_fields[{{ $field->id_name }}]" {{ $field->required ? 'required="required"' : '' }}>{!! isset($content->data_fields[$field->id_name]) ? $content->data_fields[$field->id_name] : ''  !!}</textarea>
                                                    @else
                                                        <input type="{{ $field->type }}" class="form-control {{ $field->type == 'tel' ? 'phone' : '' }}" id="field_{{ $field->id_name }}"
                                                        @foreach ($field->attr as $key => $att)
                                                            {{ $key }}="{{ $att }}"
                                                        @endforeach
                                                        placeholder="{{ $field->name }}" value="{{ isset($content->data_fields[$field->id_name]) ? $content->data_fields[$field->id_name] : '' }}" {{ $field->required ? 'required="required"' : '' }} name="data_fields[{{ $field->id_name }}]">
                                                    @endif
                                                @endif
                                            </div>
                                        @endforeach

                                    </div>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col text-end">
                                            <button type="submit" class="btn btn-ci float-right">
                                                <i class="fal fa-save"></i>
                                                {{!isset($content)?"Stellenanzeige veröffentlichen":"Beitrag aktualisieren"}}
                                            </button>
                                        </div>
                                    </div>
                                    <br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
@section('end_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"></script>
    <script src="{{ asset('system/js/intlTelInput.min.js') }}"></script>
    <script src="{{ asset('system/js/tiny-de.js') }}"></script>
    <script src="{{ asset('system/js/save-content/methods.js') }}"></script>
    <script src="{{ asset('system/js/save-content/events.js') }}"></script>
    <script src="{{ asset('system/js/save-content/script.js') }}"></script>
@stop
