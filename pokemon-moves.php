<?php
require_once("util-db.php");
require_once("model-pokemon-moves.php");
$pageTitle = "Pokemon Moves";
include "view-header.php";
$pokemonMoves = selectMoveOfPokemon();
include "view-pokemon-moves.php";
include "view-footer.php";
?>
