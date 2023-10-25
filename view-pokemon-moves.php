<h1>Pokemon Moves</h1>
<div class="card-group">

<?php
while ($move = $moves->fetch_assoc()) {
?> 
    <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $move['MoveName']; ?></h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>

<?php  
}
?> 
</div>

