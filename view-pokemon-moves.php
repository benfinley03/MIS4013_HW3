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
  $moves = selectPokemonMoves($pokemonMoves['MoveID']);
while ($pokemonMoves = $moves->fetch_assoc()) {
?> 
  <li class="list-group-item"><?php echo $pokemonMoves['MoveName']; ?></li>
  <li class="list-group-item"><?php echo $pokemonMoves['MovePower']; ?></li>
  <li class="list-group-item"><?php echo $pokemonMoves['MoveAccuracy']; ?></li>

<?php  
}
}
?> 

</div>
