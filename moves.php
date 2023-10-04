<?php
require_once("util-db.php");
require_once("model-moves.php");
$pageTitle = "Moves";
include "view-header.php";
$moves = selectMoves();
include "view-moves.php";
include "view-footer.php";
?>
