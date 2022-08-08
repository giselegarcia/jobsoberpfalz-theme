<div id="footer">
    <div class="container">



            @if (!Auth::user())

            <div class="row pt-4" id="footer_columns">

                <div class="col-11 offset-1 col-md-3 mb-5">

                    <h3> <strong>JOBS </strong>OBERPFALZ</h3>
                    <ul>
                        <li>
                            <a href="{{ url('/ueber-uns') }}">Über uns</a>
                        </li>
                        <li>
                            <a href="{{ url('/faq') }}">Fragen & Antworten</a>
                        </li>
                        <li>
                            <a href="{{ url('/kontakt') }}">Kontakt</a>
                        </li>
                    </ul>
                </div>

                <div class="col-11 offset-1 col-md-3 mb-5">

                    <h3>FÜR <strong>ARBEITGEBER</strong> </h3>

                    <ul>
                        <li>
                            <a href="{{ url('/fuer-arbeitgeber#funktionen') }}">Funktionen</a>
                        </li>

                        <li>
                            <a href="{{ url('/fuer-arbeitgeber#kundenstimmen') }}">Kundenstimmen</a>
                        </li>

                        <li>
                            <a href="{{ url('/fuer-arbeitgeber#preise') }}">Preise</a>
                        </li>

                    </ul>
                </div>

                <div class="col-10 offset-1 col-md-2 mb-5">
                    <img src="https://www.jobs-oberpfalz.de/images/manual/logo.png" alt="Logo Jobs-Oberpfalz.de" class="img-fluid d-block mx-auto" style="margin-bottom: 30px;">


                    <div class="row">
                        <div class="col-4">
                            <a href="https://www.facebook.com/JobportalOberpfalz" target="_blank">
                                <svg style="fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
                            </a>

                        </div>
                        <div class="col-4">
                            <a href="https://www.instagram.com/jobsoberpfalz/" target="_blank">
                                <svg style="fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="https://twitter.com/JobsOberpfalz" target="_blank">
                                <svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
                            </a>

                        </div>
                    </div>

                </div>

            </div>

        @else

        <div class="text-center" style="color: black">
            Haben Sie Fragen oder benötigen Sie Hilfe? Rufen Sie uns einfach kurz an: 0961 20498290
        </div>

        @endif

        <hr>

                <div class="row">
                    <div class="col-12">
                        <h3 class="mb-4">Partner <strong>Jobbörsen</strong></h3>

                    </div>
                </div>

                <div class="row text-center ">

                    <div class="col-12 col-md-4 mb-3">
                        <a href="https://www.jobs-niederbayern.de" class="m-5 text-white">www.jobs-niederbayern.de</a>
                    </div>

                    <div class="col-12 col-md-4 mb-3">
                        <a href="https://www.jobs-mittelfranken.de" class="m-5 text-white">www.jobs-mittelfranken.de</a>
                    </div>

                    <div class="col-12 col-md-4 mb-3">
                        <a href="https://nomaden.jobs" class="m-5 text-white">nomaden.jobs</a>
                    </div>

                </div>

                <hr>



        <div class="row">
            <div class="col-12 col-sm-6 text-md-start text-center mt-3">
                Erstellt mit dem <a href="https://www.areya.de/software/cms">Areya CMS
                    <svg style="width: 11px; fill: black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M440,256H424a8,8,0,0,0-8,8V464a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V112A16,16,0,0,1,48,96H248a8,8,0,0,0,8-8V72a8,8,0,0,0-8-8H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V264A8,8,0,0,0,440,256ZM500,0,364,.34a12,12,0,0,0-12,12v10a12,12,0,0,0,12,12L454,34l.7.71L131.51,357.86a12,12,0,0,0,0,17l5.66,5.66a12,12,0,0,0,17,0L477.29,57.34l.71.7-.34,90a12,12,0,0,0,12,12h10a12,12,0,0,0,12-12L512,12A12,12,0,0,0,500,0Z"/></svg>
                </a>
            </div>
            <div class="col-12 col-sm-6 text-md-end text-center mt-3">
             <a href="{{url('/agb')}}">AGB</a>
                |
                <a href="{{url('/datenschutz')}}">Datenschutz</a>
                |
                <a href="{{url('/impressum')}}">Impressum</a>


            </div>
        </div>
    </div>
</div>
