<h1>Pokemon</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Name</th>
      <th>Move</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($moves = $pokemonMoves->fetch_assoc()) {
?> 
  <tr>
    <td><?php echo $moves['PokemonName']; ?></td>
    <td><?php echo $moves['MoveName']; ?></td>
   
  </tr>
<?php  
}
?> 
    </tbody>
  </table>
</div>
