<div class = "row">
  <div class = "col">
<h1>Moves</h1>
  </div>
  <div class = "col-auto">
<?php
include "view-moves-newform.php";
?>
  </div>
</div><div class="table-responsive">
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
