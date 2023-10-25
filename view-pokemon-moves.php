<h1>Pokemon Moves</h1>
<div class="card-deck">
<?php
while ($move = $singlePoke->fetch_assoc()) {
?>
  <div class = "card">
    <div class = "card-body">
      <h5 class = "card-title"><?php echo $move['PokemonName']; ?></h5>
      <p class = "card-text">
      <ul class = "list-group">

<?php
  $pokemove = selectMoveOfPokemon($move['PokemonID']);
  while ($pokemonMovesCondition = $pokemove->fetch_assoc()) {
?>
  <li class = "list-group-item"><?php echo $pokemonMovesCondition['MoveName']; ?>: Power - <?php echo $pokemonMovesCondition['MovePower']; ?>, Accuracy - <?php echo $pokemonMovesCondition['MoveAccuracy']; ?>
    <div class = "row">
  <div class = "col">
<h1>Pokemon</h1>
  </div>
  <div class = "col-auto">
<?php
include "view-pokemon-moves-newform.php";
?>
  </div>
</div>
  </li>
<?php
  }
?>
      </ul>
      </p>
    </div>
  </div>
<?php
}
?>
</div>
