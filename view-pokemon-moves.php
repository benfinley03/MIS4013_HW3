<h1>Pokemon</h1>
<div class="card-group">
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
<?php
while ($moves = $pokemonMoves->fetch_assoc()) {
?> 
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $moves['PokemonName']; ?></h5>
      <p class="card-text">
<?php
  $moves= selectPokemonMoves($moves['PokemonID']);
  while ($course = $moves->fetch_assoc()) {
  ?>
  <?php
        
    
  }
  ?>      
      </p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <tr>
    <td><?php echo $moves['PokemonName']; ?></td>
    <td><?php echo $moves['MoveName']; ?></td>
   
  </tr>
<?php  
}
?> 
</div>

    </tbody>
  </table>
</div>
