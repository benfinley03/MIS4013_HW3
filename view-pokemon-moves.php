<h1>Pokemon Moves</h1>
<div class="card-group">
<?php
while ($move = $pokemonMoves->fetch_assoc()) {
?>
  <div class = "card">
    <div class = "card-body">
      <h5 class = "card-title"><?php echo $move['PokemonName']; ?></h5>
      <p class = "card-text">
      <ul class = "list-group">

<?php
  $pokemove = selectPokemonMoves($move['PokemonID']);
  while ($move = $pokemove->fetch_assoc()) {
?>
  <li class = "list-group-item"><?php echo $move['PokemonID']; ?><?php echo $move['PokemonName']; ?><?php echo $move['MoveName']; ?><?php echo $move['MovePower']; ?><?php echo $move['MoveAccuracy']; ?></li>
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
