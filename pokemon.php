<?php
require_once("util-db.php");
require_once("model-pokemon.php");

$pageTitle = "Pokemon";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertPokemon($_POST['pName'], $_POST['pDesc'])) {
        echo '<div class="alert alert-success" role="alert">Pokemon Added.</div>'
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>'
      }
      break;
  }
}

$pokemon = selectPokemon();
include "view-pokemon.php";
include "view-footer.php";
?>
