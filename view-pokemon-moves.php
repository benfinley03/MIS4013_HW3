<h1>Pokemon Moves</h1>
<div class="card-group">

<?php
while ($moves = $pokemonMoves->fetch_assoc()) {
?> 
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $moves['PokemonName']; ?></h5>
      <p class="card-text">
      <ul class="list-group"> 
<?php
  $moves= selectPokemonMoves($moves['PokemonID']);
  while ($move = $moves->fetch_assoc()) {
  ?>
      <li class="list-group-item"><?php echo $move['MoveName']; ?> - <?php echo $move['MovePower']; ?> - <?php echo $move['MoveAccuracy']; ?></li>
      
  <?php
  }
  ?>     
      </ul>  
      </p>
    </div>
  </div>
  <tr>

  </tr>
<?php  
}
?> 
</div>

    </tbody>
  </table>
</div>
