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
while ($move = $moves->fetch_assoc()) {
?> 
  <tr>
    <td><?php echo $move['MoveID']; ?></td>
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
