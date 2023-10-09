<h1>Pokemon Moves</h1>
<div class = "containers">
  <div class = "card-group"
<?php
  $pokemove = selectPokemon();
while ($pokemove = $poke->fetch_assoc()) {
?>
  <div class = "card">
    <div class = "card-body">
      <h4 class = "card-title"><?php echo $move['PokemonName']; ?></h4>
      <p class = "card-text">
      <ul class="list-group">
<?php
  $moves = selectPokemonMoves($move['MoveID']);
while ($move = $moves->fetch_assoc()) {
?> 
  <li class="list-group-item"><?php echo $move['MoveName']; ?></li>
  <li class="list-group-item"><?php echo $move['MovePower']; ?></li>
  <li class="list-group-item"><?php echo $move['MoveAccuracy']; ?></li>

<?php  
}
}
?> 

</div>
