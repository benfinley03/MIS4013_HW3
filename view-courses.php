<h1>Moves</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Power</th>
      <th>Accuracy</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($poke = $pokemon->fetch_assoc()) {
?> 
  <tr>
    <td><?php echo $poke['MoveID']; ?></td>
    <td><?php echo $poke['MoveName']; ?></td>
    <td><?php echo $poke['MovePower']; ?></td>
    <td><?php echo $poke['MoveAccuracy']; ?></td>
  </tr>
<?php  
}
?> 
    </tbody>
  </table>
</div>
