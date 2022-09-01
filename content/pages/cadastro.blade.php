@extends('template.'.config('settings.template').'.content.layout')
@section("title", "Jobs-Oberpfalz.de | Finde hier die besten Jobs der Oberpfalz")
@section("style")
<link rel="stylesheet" href="{{storage('assets/stylee.css')}}">
<link rel="stylesheet" href="{{storage('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{storage('css/style.css')}}">
<link rel="stylesheet" href="{{storage('assets/img')}}"> 

<script type="text/javascript" src="{{storage('js/jquery-3.2.1.slim.min.js')}}"></script>
<script type="text/javascript" src="{{storage('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{storage('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{storage('js/app.js')}}"></script>
<script type="text/javascript" src="{{storage('js/cadastro.js')}}"></script>
@stop
@section("body")

    @include ('template.'.config('settings.template').'.content.header')
    <main class="my-5">
    <section class="container">
      <div class="my-5 text-center">
        <h1 class="display-4 pt-5 txt-h1">Neues Arbeitgeberkonto anlegen</h1>
      </div>
      <div class="row">
        <form class="col-lg-6" action="">
          <div class="form-row">
          <div class="text-start txt-d">
                <h5 class="text-primary">FIRMA</h5>
          </div>
            <div class="form-group col-md-12 ">
              
              <label for="inputNome">Firmenname </label>
              <input type="text" class="form-control" id="inputNome" placeholder="Musterfirma GmBH">
            </div>
            <div class="text-start txt-d">
                <h5 class="text-primary">ANSPRECHPARTNER</h5>
            </div>
           
            <div class="form-group col-md-12 border-top">
               
              <label for="inputtext">Kontaktperson</label>
              <input type="text" class="form-control" id="inputtext" placeholder="Max Mustermann">

            </div>
            <div class="form-group col-md-12">
              <label for="inputEmail">E-Mail Adresse</label>
              <input type="email" class="form-control" id="inputEmail" placeholder="personalwesen@musterfirma.de">
            </div>

            <div class="form-group col-md-12">
              <label for="inputSenha">Neues Passwort</label>
              <input type="password" class="form-control" id="inputSenha" placeholder="Senha de acesso">
            </div>
            <div class="text-start txt-d">
                <h5 class="text-primary">RECHNUNGSADRESSE</h5>
            </div>

            <div class="form-group col-12">
              <label for="inputEndereco">Adresse</label>
              <input type="text" class="form-control" id="inputEndereco" placeholder="Musterstrasse 33">
            </div>
            <div class="form-group col-md-6">
              <label for="inputCidade">Cidade</label>
              <input type="text" class="form-control" id="inputCidade">
            </div>
            <div class="form-group col-md-3 col-6">
              <label for="inputCidade">Region</label>
              <select id="inputCidade" class="form-control">
                <option>choose</option>
                <option>regensburgo</option>
                <option>pastagens</option>
                <option>Na montanha</option>
                <option>Schwandorf</option>
                <option>Neumarkt</option>
                <options>Cham</options>
                <options>nova cidade</options>
                <options>Tirschenreuth</options>
                <options>Nabburg</options>
                <options>Sulzbach-Rosenberg</options>
                <options>Vohenstrauss</options>
                <options>Eschenbach</options>
              </select>
            </div>
            <div class="form-group col-md-3 col-6">
              <label for="inputCidade">Cep</label>
              <input type="text" class="form-control" id="inputCidade" placeholder="xxxxx-xxx">
            </div>
          </div>
          <div class="text-start txt-d">
                <h5 class="text-primary">UST-ID</h5>
          </div>

            <div class="form-group col-12">
              <label for="inputEndereco">ID Value</label>
              <input type="text" class="form-control" id="inputEndereco" placeholder="DE1233456789">
            </div>
           
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Ich habe die <a href="https://www.jobs-oberpfalz.de/agb">AGB</a> sowie die <a href="https://www.jobs-oberpfalz.de/datenschutz">Datenschutzerklärung</a> gelesen und akzeptiert.
            </label>
          </div>
          <div class="py-3">
            <button type="submit" class="btn btn-primary btn-lg">Contratar Plano</button>
          </div>
          
          
          
        </form>
        
        <div class="col-lg-5 mx-auto order-first order-lg-1 mb-5">
          <h2 class="h6 text-primary">PLANO ESCOLHIDO</h2>
          <div class="bg-light rounded p-4 box-shadow">
            <h2>xxxxx</h2>
            <ul class="lista-plano list-unstyled">
              <li>→ xxxxxxxxxxxxxxx</li>
              <li>→ xxxxxxxxxxxxxxxx</li>
              <li>→ xxxxxxxxxxxxx</li>
              <li>→ xxxxxxxxxxxxxxxxx</li>
            </ul>
            <form>
              <div class="form-group">
                <select class="form-control bg-light" id="inputCidades">
                  <option>xxxxxxxx</option>
                  <option>xxxxxxxxxxxxxx</option>
                  <option>xxxxxxxxxxxxx</option>
                  <option>xxxxxxxxxxxxxxxx</option>
                </select>
              </div>
            </form>
            <div class="row mt-4">
              <div class="col">
                <span class="h4">R$xxxxxxxxxxxxx</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    </main>
    @include ('template.'.config('settings.template').'.content.footer')
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{storage('assets/script.js')}}"></script>  
    
    @stop
