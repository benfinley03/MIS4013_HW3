<div class = "row">
  <div class = "col">
<h1>Pokemon</h1>
  </div>
  <div class = "col-auto">
<?php
include "view-pokemon-newform.php";
?>
  </div>
</div>
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
    <td>
      <form method = "post" action="moves-of-pokemon.php">
        <input type="hidden" name="mid" value = "<?php echo $poke['PokemonID']; ?>">
        <button type="submit" class="btn btn-primary">Moves</button>
      </form>
    </td>
  </tr>
<?php  
}
?> 
    </tbody>
  </table>
</div>
