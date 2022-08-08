@extends('template.'.config('settings.template').'.content.master')
@section('meta_title', 'Meine Stellenanzeigen')
@section('head')
<meta name="csrf-token" content="{{csrf_token()}}"/>
<meta name="url-create-payment-method" content="{{route('createPaymentMethod')}}"/>
<meta name="url-confirm-payment-method" content="{{route('confirmPaymentMethod')}}"/>
<meta name="stripe-key" content="{{env('STRIPE_KEY')}}"/>
<link rel="stylesheet" href="{{storage('css/stripe-checkout.css')}}">
@stop
@section('content')
<br>
<br>
<br>
<div id="stripe-plans" class="row row-cols-1 row-cols-md-6 g-4 card-deck">
    <div class="col-12 col-lg-6 mb-5">
        <div class="card h-100 shadow-lg">
            <div class="card-header text-center">
                <h5 class="card-title text-center">Basis Arbeitgeberkonto</h5>
                <span style="color: #f49c35; font-size: 30px;" class="text-center">Cost per Click</span>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item price-feature">
                    <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                    </svg>
                    0,25 € / CPC <i class="fal fa-"></i>
                </li>
                <li class="list-group-item price-feature">
                    <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                    </svg>
                    Kein Mindestumsatz
                </li>
                <li class="list-group-item price-feature">
                    <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                    </svg>
                    Arbeitgeber Profil
                </li>
                <li class="list-group-item price-feature">
                    <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                    </svg>
                    Monatlicher Performance Bericht
                </li>
            </ul>
            <div class="card-footer">
                <h6 class="mt-3 mb-3 fw-bold">Beispiel Ausspielung Ihrer Stellen:</h6>
                <img src="https://ik.imagekit.io/areya/tr:bl-4/Screenshot_from_2022-03-30_20-42-06_1__ZmEQEFfBH.png?ik-sdk-version=javascript-1.4.3&updatedAt=1648666954260" class="img-fluid">
                <button data-plan-name="Basic Arbeitgeberkonto" class="btn btn-outline-ci btn-lg d-block select-plan">Mit Basic fortfahren <i class="fal fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 mb-5">
        <div class="card h-100 shadow-lg">
            <div class="card-header text-center">
                <h5 class="card-title text-center">Premium Arbeitgeberkonto</h5>
                <span style="color: #f49c35; font-size: 30px;" class="text-center">249 € </span><span style="color: #f49c35;" class="text-center"> <span class="text-dark">/ 30 Tage</span></span>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item price-feature">
                    <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                    </svg>
                    0,25 € / CPC <i class="fal fa-"></i>
                </li>
                <li class="list-group-item price-feature">
                    <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                    </svg>
                    Unbegrenzte Premium Stellen
                </li>
                <li class="list-group-item price-feature">
                    <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                    </svg>
                    Premium Arbeitgeber Profil
                </li>
                <li class="list-group-item price-feature">
                    <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                    </svg>
                    Firma erscheint als Top-Arbeitgeber
                </li>
                <li class="list-group-item price-feature">
                    <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                    </svg>
                    Monatlicher Performance Bericht
                </li>
                <li class="list-group-item price-feature">
                    <svg style="fill: green; width: 14px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                    </svg>
                    Monatlich kündbar
                </li>
            </ul>
            <div class="card-footer">
                <h6 class="mt-3 mb-3 fw-bold">Ausspielung der Stellen im Ausspielung Ihrer Stellen:</h6>
                <img src="https://ik.imagekit.io/areya/tr:bl-4/Screenshot_from_2022-03-30_20-42-06_1__ZmEQEFfBH.png?ik-sdk-version=javascript-1.4.3&updatedAt=1648666954260" class="img-fluid">
                <button data-plan-name="Premium Arbeitgeberkonto" class="btn btn-outline-ci btn-lg d-block select-plan">Mit Premium fortfahren <i class="fal fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="payment-data-registration" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">Top Job buchen</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="payment-content">
                    <form id="payment-form">
                        <div id="payment-element"></div>
                        <button id="submit">
                            <div class="spinner hidden" id="spinner"></div>
                            <span id="button-text">Confirm</span>
                        </button>
                        <div id="payment-message" class="hidden"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
@stop
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://js.stripe.com/v3/"></script>
<script defer src="{{storage('js/stripe-checkout.js')}}"></script>
<script>
    $('.select-plan').click(function(){
        $.ajax({
            method: "GET",
            url: "{{route('hasPaymentMethod')}}",
            success: function(result){ 
                if(!data.hasPaymentMethod){
                    $('#payment-data-registration').modal('show')
                    $('.select-plan').addClass('btn-outline-ci');
                    $('.select-plan').removeClass('btn-ci');
                    $(this).addClass('btn-ci');
                    $(this).removeClass('btn-outline-ci');
                    $('#payment-content').show();
                    $('#payment-form').attr('data-plan-name', $(this).attr('data-plan-name'));    
                }else{
                    $.ajax({
                        method: "POST",
                        headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'), "Content-Type": "application/json" },
                        url: "{{route('setPremium')}}"+"?plan-name="+$(this).attr('data-plan-name'),
                        success: function(result){ if(result.success) location.reload(); }
                    });
                }
            },
            error: function(error){ console.log(error); }
        });
    });
</script>
@stop