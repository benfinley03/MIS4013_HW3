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
while ($type = $types->fetch_assoc()) {
?> 
  <tr>
  <td><?php echo $type['TypeID']; ?></td>
  <td><?php echo $type['TypeName']; ?></td>
  </tr>
<?php  
}
?> 
    </tbody>
  </table>
</div>
