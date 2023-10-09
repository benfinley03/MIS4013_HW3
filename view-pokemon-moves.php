<h1>Pokemon Moves</h1>
<?php
while ($move = $pokemon->fetch_assoc()) {
?>
  
}
<?php
while ($move = $pokemonMoves->fetch_assoc()) {
?> 
  <tr>
  <td><?php echo $move['PokemonID']; ?></td>
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
