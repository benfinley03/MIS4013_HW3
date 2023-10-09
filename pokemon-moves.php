<?php
require_once("util-db.php");
require_once("model-pokemon-moves.php");
$pageTitle = "Pokemon Moves";
include "view-header.php";
$pokemonMoves = selectPokemonMoves();
$pokemon = selectPokemon();
include "view-pokemon-moves.php";
include "view-footer.php";
?>
