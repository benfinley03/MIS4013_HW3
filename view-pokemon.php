<h1>Pokemon</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($poke = $pokemon->fetch_assoc()) {
?> 
  <tr>
    <td><?php echo $poke['PokemonID']; ?></td>
    <td><?php echo $poke['PokemonName']; ?></td>
    <td><?php echo $poke['PokemonDesc']; ?></td>
    <td><a href="types-of-pokemon.php?id=<?php echo $poke['PokemonID']; ?>">Type</a></td>
  </tr>
<?php  
}
?> 
    </tbody>
  </table>
</div>
