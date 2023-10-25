<?php
require_once("util-db.php");
require_once("model-types.php");
$pageTitle = "Types";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertType($_POST['tName']))
      {
        echo '<div class="alert alert-success" role="alert">Type Added.</div>';
      } else 
      {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateType($_POST['tName'], $_POST['tID']))
      {
        echo '<div class="alert alert-success" role="alert">Type Edited.</div>';
      } else 
      {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteType($_POST['tID'])) 
      {
        echo '<div class="alert alert-success" role="alert">Type Deleted.</div>';
      } else 
      {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}

$types = selectType();
include "view-types.php";
include "view-footer.php";
?>
