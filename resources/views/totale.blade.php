<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    {{-- my css --}}
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav>
        <figure>
            <img src="https://img.magnific.com/vettori-gratuito/pallone-da-calcio-realistico-isolato-di-vettore-sopra-bianco_1284-41932.jpg?w=360" alt="logo pallone da calcio">
        </figure>

        <ul>
            <li>
                <a href="{{route("homepage")}}">Home</a>
            </li>
            <li>
                <a href="{{route("seriea1")}}">Serie A</a>
            </li>
            <li>
                <a href="{{route("laliga1")}}">La Liga</a>
            </li>
            <li>
                <a href="{{route("premier1")}}">Premier League</a>
            </li>
            <li>
                <a href="{{route("totale1")}}">Tutte le Squadre</a>
            </li>
        </ul>

        <div class="div-nav">

        </div>
    </nav>

    <section class="section-all">
        @foreach ($tutti as $tutto)
            <div class="squadra-custom">
                <h2>{{$tutto["nome"]}}</h2>
                <p>{{$tutto["anno"]}}</p>
            </div>
        @endforeach

    </section>