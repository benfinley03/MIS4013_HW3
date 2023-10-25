<div class = "row">
  <div class = "col">
<h1>Types</h1>
  </div>
  <div class = "col-auto">
<?php
include "view-type-newform.php";
?>
  </div>
</div>
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
