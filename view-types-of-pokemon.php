<h1>Pokemon Types</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>PokemonName</th>
      <th>Type</th>
      <th>Type2</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($type = $typeOfPokemon->fetch_assoc()) {
?> 
  <tr>
  <td><?php echo $type['PokemonName']; ?></td>
  <td><?php echo $type['TypeName']; ?></td>
  <td><?php echo $type['Type2']; ?></td>
  </tr>
<?php  
}
?> 
    </tbody>
  </table>
</div>
