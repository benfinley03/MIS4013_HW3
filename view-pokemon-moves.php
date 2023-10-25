<h1>Pokemon Moves</h1>
<div class="card-group">

<?php
$pokemove = selectMoveOfPokemon();
while ($pokemonMoves = $pokemove->fetch_assoc()) {
?> 
    <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $pokeMove['PokemonName']; ?></h5>
    <p class="card-text">
<?php
    $moves = selectMoves($pokemove['MoveID']);
    while ($pokemonMoves = $pokemove->fetch_assoc()) {
?>
<?php
    
    }
?>
        </p>

    </div>
  </div>

<?php  
}
?> 
</div>

