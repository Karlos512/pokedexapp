<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POKEDEX</title>
    <!-- boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <Link rel = "stylesheet" href = "// code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
</head>
<body>
    <div class="card mx-auto" id="cardPokemon">
        <img src="{{ $pokemon->sprites->front_default }}" class="card-img-top" alt="Foto Pokemon" id="foto">
        <div class="card-body">
          <h5 class="card-title text-center" id="name">{{ $pokemon->name}}</h5>
          <p class="card-text" id="info">Algunos de los movimientos de {{$pokemon->name}} son {{$pokemon->moves[1]->move->name}} y {{$pokemon->moves[2]->move->name}}</p>
          <center><img src="{{ asset('img/pokebola.png') }}" alt="pokebola" id="buscar" style="width: 15% ;">
            <div class="col-lg-6 col-md-6 col-sm-6"><a href="{{ route('mypokemons') }}" class="btn btn-danger mt-5">Capturados</a></div>
          </center>
        </div>
      </div>
    <script src="js/jquery.js"></script>
    <script src="js/functions.js"></script>
</body>
</html>


