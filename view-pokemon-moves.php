<h1>Pokemon Moves</h1>
<?php
while ($poke = $pokemon->fetch_assoc()) {
?>
  <div <div class="accordion">
    <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
      </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <?php echo $move['PokemonID']; ?>
        <?php echo $move['PokemonName']; ?>
      </div>
    </div>
  </div>
    <ul class="list-group">
<?php
while ($move = $pokemonMoves->fetch_assoc()) {
?> 
  <li class="list-group-item"><?php echo $move['MoveName']; ?></li>
  <li class="list-group-item"><?php echo $move['MovePower']; ?></li>
  <li class="list-group-item"><?php echo $move['MoveAccuracy']; ?></li>

<?php  
}
}
?> 
    </tbody>
  </table>
</div>
