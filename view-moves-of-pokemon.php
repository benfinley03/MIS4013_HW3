<h1>Pokemon Moves</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>PokemonName</th>
      <th>MoveName</th>
      <th>MovePower</th>
      <th>Move Accuracy</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($move = $moveOfPokemon->fetch_assoc()) {
?> 
  <tr>
  <td><?php echo $move['PokemonName']; ?></td>
  <td><?php echo $move['MoveName']; ?></td>
  <td><?php echo $move['MovePower']; ?></td>
  <td><?php echo $move['MoveAccuracy']; ?></td>

  </tr>
<?php  
}
?> 
    </tbody>
  </table>
</div>
