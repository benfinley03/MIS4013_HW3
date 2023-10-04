<h1>Types</h1>
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
  <td><?php echo $move['TypeID']; ?></td>
  <td><?php echo $move['TypeName']; ?></td>
  </tr>
<?php  
}
?> 
    </tbody>
  </table>
</div>
