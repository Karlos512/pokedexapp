<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POKEDEX</title>
    <!-- boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <Link rel = "stylesheet" href = "// code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="grow">
    <div class="row mt-5">
        <div class="col-lg-6 col-md-6 col-sm-6"><h1 class="text-3xl ml-5 mt-5 text-white">Mis Pokemons/<a href="{{ route('searchPokemon') }}">Capturar</a></h1></div>
    </div>
    
    @php
        $total = count($mypokemons);
    @endphp
    
    <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-6 text-center">
            <h4 class="text-white">Total capturados: {{ $total }}</h4>
        </div>
    </div>
    
<div id="contenedor">
    <div class="row d-flex justify-content-center" id="galery">
        @foreach ($mypokemons as $pokemon)
            <div class="col-lg-3 col-md-3 mt-3">
                <div class="card" style="width: 18rem;" id="cardpokemon"> 
                    <img src="{{ $pokemon->picture }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title text-center">{{ $pokemon->name }}</h5>
                    <p class="card-text text-center">Tipo: {{ $pokemon->type }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
    
</div>    
</body>
</html>
    
