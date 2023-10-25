<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editMoveModal<?php echo $move['MoveID']; ?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
  </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editMoveModal<?php echo $move['MoveID']; ?>" tabindex="-1" aria-labelledby="editMoveModalLabel<?php echo $move['MoveID']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editMoveModalLabel<?php echo $move['MoveID']; ?>">Edit Move</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="mName<?php echo $move['MoveID']; ?>" class="form-label">Move Name</label>
            <input type="text" class="form-control" id="mName<?php echo $move['MoveID']; ?>" name="mName" value ="<?php echo $move['MoveName']; ?>">
          </div>
          <div class="mb-3">
            <label for="mPower<?php echo $move['MoveID']; ?>" class="form-label">Move Power</label>
            <input type="integer" class="form-control" id="mPower<?php echo $move['MoveID']; ?>" name="mPower" value="<?php echo $move['MovePower']; ?>">
          </div>
          <div class="mb-3">
            <label for="mAccuracy<?php echo $move['MoveID']; ?>" class="form-label">Move Accuracy</label>
            <input type="integer" class="form-control" id="mAccuracy<?php echo $move['MoveID']; ?>" name="mAccuracy" value="<?php echo $move['MoveAccuracy']; ?>">
          </div>
            <input type="hidden" name="mID" value="<?php echo $move['MoveID']; ?>">
            <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
