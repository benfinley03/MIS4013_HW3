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
  $pokemove = selectPokemonMoves($move['MoveID']);
  while ($move = $pokemove->fetch_assoc()) {
?>
  <li class = "list-group-item"><?php echo $move['MoveName']; ?>: Power - <?php echo $move['MovePower']; ?>, Accuracy - <?php echo $move['MoveAccuracy']; ?></li>
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
