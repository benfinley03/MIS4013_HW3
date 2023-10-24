<h1>Pokemon Moves</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>

      </tr>
    </thead>
    <tbody>
<?php
while ($move = $moves->fetch_assoc()) {
?> 
  <tr>
    <td><?php echo $move['MoveID']; ?></td>
    <td><?php echo $move['MoveName']; ?></td>

  </tr>
<?php  
}
?> 
    </tbody>
  </table>
</div>
