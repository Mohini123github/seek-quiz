
<!-- edit form -->
<div class="modal fade" tabindex="-1" id="editFolder">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Folder</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="editfolder">
      <div class="modal-body">
    <?=  form_hidden('id',$this->session->userdata('id'));?>
    <input type="hidden" name="folder_id" id="folder_id" value="<?php echo $row['folder_id']; ?>">
    <input type="text" name="folder_name" value="<?php echo $row['folder_name'];?>" id="folder_name" class="form-control" placeholder="Enter New Folder Name">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light btn-outline-light text-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Create Folder</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- end edit form -->