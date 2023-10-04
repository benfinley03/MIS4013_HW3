<?php
require_once("util-db.php");
require_once("model-types-of-pokemon.php");
$pageTitle = "Types of Pokemon";
include "view-header.php";
$types = selectTypeOfPokemon($_GET['id']);
include "view-types-of-pokemon.php";
include "view-footer.php";
?>
