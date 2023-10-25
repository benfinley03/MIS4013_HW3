<h1>Pokemon Moves</h1>
<div class="card-group">

<?php
$pokemove = selectMoveOfPokemon($pokemonMoves['PokemonID']);
while ($pokemonMoves = $pokemove->fetch_assoc()) {
?> 
    <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $pokeMove['PokemonName']; ?></h5>
    <p class="card-text">
        <ul classs = "list-group">
<?php
    $moves = selectMoves($pokemove['MoveID']);
    while ($pokemonMoves = $pokemove->fetch_assoc()) {
?>
  <li class = "list-group-item"><?php echo $pokemove['PokemonName']; ?> - <?php echo $pokemove['MoveName']; ?> - <?php echo $pokemove['MoveName']; ?> - <?php echo $pokemove['MovePower']; ?> - <?php echo $pokemove['MoveAccuracy']; ?></li>
  <li class = "list-group-item"><?php echo $pokemove['MoveName']; ?></li>
  <li class = "list-group-item"><?php echo $pokemove['MovePower']; ?></li>
  <li class = "list-group-item"><?php echo $pokemove['MoveAccuracy']; ?></li>
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

