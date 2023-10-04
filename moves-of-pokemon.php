<?php
require_once("util-db.php");
require_once("model-moves-of-pokemon.php");
$pageTitle = "Moves of Pokemon";
include "view-header.php";
$moveOfPokemon = selectMoveOfPokemon($_POST['mid']);
include "view-moves-of-pokemon.php";
include "view-footer.php";
?>
