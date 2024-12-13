<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/news.css'])

</head>

<body>

    <section class="" id="noticias">
        <div>
            <h2 class="subtitulo">Noticias</h2>

            <div class="body-news">
                <div class="wrapper">

                    @foreach ($noticias as $noticia)

                        <a href="{{ route('show-news', ['noticia' => $noticia->id, 'subdireccion' => $unidad->id]) }}">
                            <div class="card-news">
                                <div class="card-banner">
                                    <img class="banner-img" src='{{ asset($noticia->portada_path) }}'
                                        alt=''>
                                </div>
                                <div class="card-body">
                                    {{-- <p class="blog-hashtag">30 Jul 2024</p> --}}
                                    <p class="blog-hashtag">{{ $noticia->fecha }}</p>
                                    <h2 class="blog-title">{{ $noticia->titulo }}</h2>

                                </div>
                            </div>
                        </a>
                    @endforeach


                </div>




            </div>
    </section>



</body>

</html>
