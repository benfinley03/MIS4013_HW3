<?php
require_once("util-db.php");
require_once("model-pokemon.php");

$pageTitle = "Pokemon";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      insertPokemon($_POST['pName'], $_POST['pDesc']);
      break;
  }
}

$pokemon = selectPokemon();
include "view-pokemon.php";
include "view-footer.php";
?>
