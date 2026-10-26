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


    <section>

        <article>
            <h2>Serie A</h2>
            <img src="https://thumb.wikimedia.org/wikipedia/commons/thumb/a/aa/Serie_A.svg/1920px-Serie_A.svg.png?utm_source=it.wikipedia.org&utm_campaign=index&utm_content=thumbnail" alt="logo serie a">
            <p>Italia</p>
        </article>

    </section>

    <section>
        @foreach ($squadre as $squadra)
            <div class="squadra-custom">
                <h2>{{$squadra["nome"]}}</h2>
                <p>{{$squadra["anno"]}}</p>
            </div>
        @endforeach
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>