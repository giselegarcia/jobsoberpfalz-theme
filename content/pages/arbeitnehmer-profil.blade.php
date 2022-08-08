@extends('template.'.config('settings.template').'.content.master')

@section('head')
@section('meta_title', 'Jobangebote nach Regionen in der Oberpfalz')
@section('meta_description', 'Hier findest du Stellenangebote nach Region: Jobs in Regensburg, Weiden, Amberg, Neumarkt und andere...')

@stop

@section('content')


    <style>

        html{scroll-behavior:smooth}
        .flex-column .nav-item{

            border-left: 4px solid white;
            padding-bottom: 3px;
            padding-top: 3px;
        }
        .flex-column .nav-item:hover{

            border-left: 4px solid #f49c35;

        }
    </style>


        <div class="container">


            <div class="row mt-5 mb-5 pb-5 border-bottom">


                <div class="col-3 text-center">
                    <img src="https://picsum.photos/150/150" class="img-fluid border rounded-circle">
                </div>
                <div class="col-9">
                    <h1 class="mt-5">Benjamin Völkl</h1>
                    <svg style="width: 8px; fill: #d0504f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0z" />
                    </svg>
                    <span class="text-muted" style="font-size: 13px;">92714 Pleystein</span>


                    <span class="m-2 text-muted">·</span>


                    <span class="text-muted" style="font-size: 13px;">12.12.1990</span>
                </div>

            </div>

            <div class="row sticky-top">
                <div class="col-3">

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <svg style="width: 14px; margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M224 480c-17.66 0-32-14.38-32-32.03h-32c0 35.31 28.72 64.03 64 64.03s64-28.72 64-64.03h-32c0 17.65-14.34 32.03-32 32.03zm209.38-145.19c-27.96-26.62-49.34-54.48-49.34-148.91 0-79.59-63.39-144.5-144.04-152.35V16c0-8.84-7.16-16-16-16s-16 7.16-16 16v17.56C127.35 41.41 63.96 106.31 63.96 185.9c0 94.42-21.39 122.29-49.35 148.91-13.97 13.3-18.38 33.41-11.25 51.23C10.64 404.24 28.16 416 48 416h352c19.84 0 37.36-11.77 44.64-29.97 7.13-17.82 2.71-37.92-11.26-51.22zM400 384H48c-14.23 0-21.34-16.47-11.32-26.01 34.86-33.19 59.28-70.34 59.28-172.08C95.96 118.53 153.23 64 224 64c70.76 0 128.04 54.52 128.04 121.9 0 101.35 24.21 138.7 59.28 172.08C421.38 367.57 414.17 384 400 384z"/></svg>
                                Motivationsschreiben
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#lebenslauf">
                                <svg style="width: 14px; margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M224 480c-17.66 0-32-14.38-32-32.03h-32c0 35.31 28.72 64.03 64 64.03s64-28.72 64-64.03h-32c0 17.65-14.34 32.03-32 32.03zm209.38-145.19c-27.96-26.62-49.34-54.48-49.34-148.91 0-79.59-63.39-144.5-144.04-152.35V16c0-8.84-7.16-16-16-16s-16 7.16-16 16v17.56C127.35 41.41 63.96 106.31 63.96 185.9c0 94.42-21.39 122.29-49.35 148.91-13.97 13.3-18.38 33.41-11.25 51.23C10.64 404.24 28.16 416 48 416h352c19.84 0 37.36-11.77 44.64-29.97 7.13-17.82 2.71-37.92-11.26-51.22zM400 384H48c-14.23 0-21.34-16.47-11.32-26.01 34.86-33.19 59.28-70.34 59.28-172.08C95.96 118.53 153.23 64 224 64c70.76 0 128.04 54.52 128.04 121.9 0 101.35 24.21 138.7 59.28 172.08C421.38 367.57 414.17 384 400 384z"/></svg>
                                Lebenslauf
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#karriere">
                                <svg style="width: 14px; margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M224 480c-17.66 0-32-14.38-32-32.03h-32c0 35.31 28.72 64.03 64 64.03s64-28.72 64-64.03h-32c0 17.65-14.34 32.03-32 32.03zm209.38-145.19c-27.96-26.62-49.34-54.48-49.34-148.91 0-79.59-63.39-144.5-144.04-152.35V16c0-8.84-7.16-16-16-16s-16 7.16-16 16v17.56C127.35 41.41 63.96 106.31 63.96 185.9c0 94.42-21.39 122.29-49.35 148.91-13.97 13.3-18.38 33.41-11.25 51.23C10.64 404.24 28.16 416 48 416h352c19.84 0 37.36-11.77 44.64-29.97 7.13-17.82 2.71-37.92-11.26-51.22zM400 384H48c-14.23 0-21.34-16.47-11.32-26.01 34.86-33.19 59.28-70.34 59.28-172.08C95.96 118.53 153.23 64 224 64c70.76 0 128.04 54.52 128.04 121.9 0 101.35 24.21 138.7 59.28 172.08C421.38 367.57 414.17 384 400 384z"/></svg>
                                Karriere
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#zertifikate">
                                <svg style="width: 14px; margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M224 480c-17.66 0-32-14.38-32-32.03h-32c0 35.31 28.72 64.03 64 64.03s64-28.72 64-64.03h-32c0 17.65-14.34 32.03-32 32.03zm209.38-145.19c-27.96-26.62-49.34-54.48-49.34-148.91 0-79.59-63.39-144.5-144.04-152.35V16c0-8.84-7.16-16-16-16s-16 7.16-16 16v17.56C127.35 41.41 63.96 106.31 63.96 185.9c0 94.42-21.39 122.29-49.35 148.91-13.97 13.3-18.38 33.41-11.25 51.23C10.64 404.24 28.16 416 48 416h352c19.84 0 37.36-11.77 44.64-29.97 7.13-17.82 2.71-37.92-11.26-51.22zM400 384H48c-14.23 0-21.34-16.47-11.32-26.01 34.86-33.19 59.28-70.34 59.28-172.08C95.96 118.53 153.23 64 224 64c70.76 0 128.04 54.52 128.04 121.9 0 101.35 24.21 138.7 59.28 172.08C421.38 367.57 414.17 384 400 384z"/></svg>
                                Zeugnisse & Zertifikate
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#hobbies">
                                <svg style="width: 14px; margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M224 480c-17.66 0-32-14.38-32-32.03h-32c0 35.31 28.72 64.03 64 64.03s64-28.72 64-64.03h-32c0 17.65-14.34 32.03-32 32.03zm209.38-145.19c-27.96-26.62-49.34-54.48-49.34-148.91 0-79.59-63.39-144.5-144.04-152.35V16c0-8.84-7.16-16-16-16s-16 7.16-16 16v17.56C127.35 41.41 63.96 106.31 63.96 185.9c0 94.42-21.39 122.29-49.35 148.91-13.97 13.3-18.38 33.41-11.25 51.23C10.64 404.24 28.16 416 48 416h352c19.84 0 37.36-11.77 44.64-29.97 7.13-17.82 2.71-37.92-11.26-51.22zM400 384H48c-14.23 0-21.34-16.47-11.32-26.01 34.86-33.19 59.28-70.34 59.28-172.08C95.96 118.53 153.23 64 224 64c70.76 0 128.04 54.52 128.04 121.9 0 101.35 24.21 138.7 59.28 172.08C421.38 367.57 414.17 384 400 384z"/></svg>
                                Interessun und Hobbies
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#it">
                                <svg style="width: 14px; margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M224 480c-17.66 0-32-14.38-32-32.03h-32c0 35.31 28.72 64.03 64 64.03s64-28.72 64-64.03h-32c0 17.65-14.34 32.03-32 32.03zm209.38-145.19c-27.96-26.62-49.34-54.48-49.34-148.91 0-79.59-63.39-144.5-144.04-152.35V16c0-8.84-7.16-16-16-16s-16 7.16-16 16v17.56C127.35 41.41 63.96 106.31 63.96 185.9c0 94.42-21.39 122.29-49.35 148.91-13.97 13.3-18.38 33.41-11.25 51.23C10.64 404.24 28.16 416 48 416h352c19.84 0 37.36-11.77 44.64-29.97 7.13-17.82 2.71-37.92-11.26-51.22zM400 384H48c-14.23 0-21.34-16.47-11.32-26.01 34.86-33.19 59.28-70.34 59.28-172.08C95.96 118.53 153.23 64 224 64c70.76 0 128.04 54.52 128.04 121.9 0 101.35 24.21 138.7 59.28 172.08C421.38 367.57 414.17 384 400 384z"/></svg>
                                IT Kenntnisse
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#fuehrerscheine">
                                <svg style="width: 14px; margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M224 480c-17.66 0-32-14.38-32-32.03h-32c0 35.31 28.72 64.03 64 64.03s64-28.72 64-64.03h-32c0 17.65-14.34 32.03-32 32.03zm209.38-145.19c-27.96-26.62-49.34-54.48-49.34-148.91 0-79.59-63.39-144.5-144.04-152.35V16c0-8.84-7.16-16-16-16s-16 7.16-16 16v17.56C127.35 41.41 63.96 106.31 63.96 185.9c0 94.42-21.39 122.29-49.35 148.91-13.97 13.3-18.38 33.41-11.25 51.23C10.64 404.24 28.16 416 48 416h352c19.84 0 37.36-11.77 44.64-29.97 7.13-17.82 2.71-37.92-11.26-51.22zM400 384H48c-14.23 0-21.34-16.47-11.32-26.01 34.86-33.19 59.28-70.34 59.28-172.08C95.96 118.53 153.23 64 224 64c70.76 0 128.04 54.52 128.04 121.9 0 101.35 24.21 138.7 59.28 172.08C421.38 367.57 414.17 384 400 384z"/></svg>
                                Führerscheine
                            </a>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#sprachen">
                                <svg style="width: 14px; margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M224 480c-17.66 0-32-14.38-32-32.03h-32c0 35.31 28.72 64.03 64 64.03s64-28.72 64-64.03h-32c0 17.65-14.34 32.03-32 32.03zm209.38-145.19c-27.96-26.62-49.34-54.48-49.34-148.91 0-79.59-63.39-144.5-144.04-152.35V16c0-8.84-7.16-16-16-16s-16 7.16-16 16v17.56C127.35 41.41 63.96 106.31 63.96 185.9c0 94.42-21.39 122.29-49.35 148.91-13.97 13.3-18.38 33.41-11.25 51.23C10.64 404.24 28.16 416 48 416h352c19.84 0 37.36-11.77 44.64-29.97 7.13-17.82 2.71-37.92-11.26-51.22zM400 384H48c-14.23 0-21.34-16.47-11.32-26.01 34.86-33.19 59.28-70.34 59.28-172.08C95.96 118.53 153.23 64 224 64c70.76 0 128.04 54.52 128.04 121.9 0 101.35 24.21 138.7 59.28 172.08C421.38 367.57 414.17 384 400 384z"/></svg>
                                Sprachen
                            </a>
                        </li>



                    </ul>

                </div>
                <div class="col-6"style="height: 80vh; overflow: auto">

                    <div class="card mb-5" id="motivation" style="background-color: #f8f8f8">
                        <div class="card-header">
                            <h6>Motivation</h6>
                        </div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ducimus facere ipsum. Ad ea hic, illum in ipsa ipsam non numquam perspiciatis quae quo quod quos, vitae, voluptas voluptatem voluptatum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis cum cupiditate debitis deleniti dolorum ducimus expedita ipsam, nostrum nulla officiis pariatur placeat quae quas quidem quisquam repellat rerum saepe.

                        </div>
                    </div>

                    <div class="card mb-5" id="lebenslauf" style="background-color: #f8f8f8">
                        <div class="card-header">
                            <h6>Lebenslauf</h6>
                        </div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ducimus facere ipsum. Ad ea hic, illum in ipsa ipsam non numquam perspiciatis quae quo quod quos, vitae, voluptas voluptatem voluptatum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis cum cupiditate debitis deleniti dolorum ducimus expedita ipsam, nostrum nulla officiis pariatur placeat quae quas quidem quisquam repellat rerum saepe.

                        </div>
                    </div>

                    <div class="card mb-5" id="hobbies" style="background-color: #f8f8f8">
                        <div class="card-header">
                            <h6>Interessen und Hobbies</h6>
                        </div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ducimus facere ipsum. Ad ea hic, illum in ipsa ipsam non numquam perspiciatis quae quo quod quos, vitae, voluptas voluptatem voluptatum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis cum cupiditate debitis deleniti dolorum ducimus expedita ipsam, nostrum nulla officiis pariatur placeat quae quas quidem quisquam repellat rerum saepe.

                        </div>
                    </div>


                    <div class="card mb-5" id="fuehrerscheine" style="background-color: #f8f8f8">
                        <div class="card-header">
                            <h6>Führerscheine</h6>
                        </div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ducimus facere ipsum. Ad ea hic, illum in ipsa ipsam non numquam perspiciatis quae quo quod quos, vitae, voluptas voluptatem voluptatum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis cum cupiditate debitis deleniti dolorum ducimus expedita ipsam, nostrum nulla officiis pariatur placeat quae quas quidem quisquam repellat rerum saepe.

                        </div>
                    </div>

                    <div class="card mb-5" id="zertifikate" style="background-color: #f8f8f8">
                        <div class="card-header">
                            <h6>Zertifikate und Auszeichnungen</h6>
                        </div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ducimus facere ipsum. Ad ea hic, illum in ipsa ipsam non numquam perspiciatis quae quo quod quos, vitae, voluptas voluptatem voluptatum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis cum cupiditate debitis deleniti dolorum ducimus expedita ipsam, nostrum nulla officiis pariatur placeat quae quas quidem quisquam repellat rerum saepe.

                        </div>
                    </div>

                    <div class="card mb-5" id="karriere" style="background-color: #f8f8f8">
                        <div class="card-header">
                            <h6>Karriere</h6>
                        </div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ducimus facere ipsum. Ad ea hic, illum in ipsa ipsam non numquam perspiciatis quae quo quod quos, vitae, voluptas voluptatem voluptatum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis cum cupiditate debitis deleniti dolorum ducimus expedita ipsam, nostrum nulla officiis pariatur placeat quae quas quidem quisquam repellat rerum saepe.

                        </div>
                    </div>


                    <div class="card mb-5" id="it" style="background-color: #f8f8f8">
                        <div class="card-header">
                            <h6>IT Kenntnisse</h6>
                        </div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ducimus facere ipsum. Ad ea hic, illum in ipsa ipsam non numquam perspiciatis quae quo quod quos, vitae, voluptas voluptatem voluptatum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis cum cupiditate debitis deleniti dolorum ducimus expedita ipsam, nostrum nulla officiis pariatur placeat quae quas quidem quisquam repellat rerum saepe.

                        </div>
                    </div>


                    <div class="card mb-5" id="sprachen" style="background-color: #f8f8f8">
                        <div class="card-header">
                            <h6>Sprachen</h6>
                        </div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ducimus facere ipsum. Ad ea hic, illum in ipsa ipsam non numquam perspiciatis quae quo quod quos, vitae, voluptas voluptatem voluptatum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis cum cupiditate debitis deleniti dolorum ducimus expedita ipsam, nostrum nulla officiis pariatur placeat quae quas quidem quisquam repellat rerum saepe.

                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="alert alert-warning">
                        <h6 class="mb-3 fw-bold">Verfügbarkeit</h6>

                        <ul class="list-group mb-4 m-3">
                            <li>Sofort Einsatzbereit</li>
                            <li>Vollzeitstelle</li>
                            <li>Gehaltsvorstellung: 50.000 €</li>
                        </ul>



                        <p class="mb-5 small">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, consequuntur dolore dolorum excepturi fugiat iste laudantium neque quas vitae voluptate? Accusantium alias aliquid explicabo facilis nam neque nisi pariatur quidem?
                        </p>
                        <a href="" class="btn btn-outline-success d-block mb-3">Anrufen</a>
                        <a href="" class="btn btn-success d-block mb-3">Nachricht schreiben</a>

                        <br>
                        <br>
                        <h6 class="mb-2 fw-bold">Interne Notizen:</h6>
                        <textarea placeholder="Hier könen Sie Ihre Notizen hinterlegen" style="width: 100%" class="rounded text-muted" rows="4"></textarea>
                    </div>
                </div>

                <div class="col-12">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>

        </div>

@stop
