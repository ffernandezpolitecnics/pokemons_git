<?php require_once('pokedex.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/pokemons/css/flatly-bootstrap.min.css">
</head>
<body>
    <?php 
        $pokedex = [];
        $pokemon = createPokemon('001', 'Bulbasur', ['Planta', 'Veneno'], 0.7, 6.9);
        addPokemon($pokedex, $pokemon);
        $pokemon = createPokemon('002', 'Ivysaur', ['Planta', 'Veneno'], 1.0, 13.0);
        addPokemon($pokedex, $pokemon);
        $pokemon = createPokemon('003', 'Venusaur', ['Planta', 'Veneno'], 2.0, 100.0);
        addPokemon($pokedex, $pokemon);
        $pokemon = createPokemon('004', 'Charmander ', ['Fuego'], 0.6, 8.5);
        addPokemon($pokedex, $pokemon);
        $pokemon = createPokemon('005', 'Charmeleon', ['Fuego'], 1.1, 19.0);
        addPokemon($pokedex, $pokemon);
        $pokemon = createPokemon('006', 'Charizard ', ['Fuego', 'Volador'], 1.7, 90.5);
        addPokemon($pokedex, $pokemon);

        displayPokedex($pokedex);

        deletePokemon($pokedex, 'Charmeleon');
        
        displayPokedex($pokedex);
        
    ?>


</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>