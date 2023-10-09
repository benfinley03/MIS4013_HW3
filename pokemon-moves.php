<?php
require_once("util-db.php");
require_once("model-pokemon-moves.php");
require_once("model-pokemon.php");
require_once("model-moves.php");
$pageTitle = "Pokemon Moves";
include "view-header.php";
$pokemonMoves = selectPokemonMoves();
$poke = selectPokemon();
include "view-pokemon-moves.php";
include "view-footer.php";
?>
