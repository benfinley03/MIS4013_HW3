<?php
require_once("util-db.php");
require_once("model-moves.php");
$pageTitle = "Moves";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertMove($_POST['mName'], $_POST['mPower'], $_POST['mAccuracy']))
      {
        echo '<div class="alert alert-success" role="alert">Move Added.</div>';
      } else 
      {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateMove($_POST['mName'], $_POST['mPower'], $_POST['mAccuracy'], $_POST['pID']))
      {
        echo '<div class="alert alert-success" role="alert">Move Edited.</div>';
      } else 
      {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deletePokemon($_POST['mID'])) 
      {
        echo '<div class="alert alert-success" role="alert">Move Deleted.</div>';
      } else 
      {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}
$moves = selectMoves();
include "view-moves.php";
include "view-footer.php";
?>
