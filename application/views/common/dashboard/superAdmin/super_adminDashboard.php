
<!------organization create form------->
<div class="row bg">
<div class="col-sm-1"></div>
<div class="col-sm-10 ">
<div class="row ">
    
    <?php
   if($this->session->flashdata('status')){
    echo"<div class='alert alert-success text-center'>";

    echo $this->session->flashdata('status');
    echo"</div>";
}
?>

<div class="col-sm-6">
    <h1 class="fs-1 text-secondary mt-5 text-center">Create Organization</h1>
    <img src="images/banner.jpg" height="300px" class=" mt-5 img-fluid" width="500px">
</div>
<div class="col-sm-6 d-block ">
<form class="ms-4" action="<?php echo base_url('index.php/Organization/insertData');?>" method="post">
    <div class="input-group flex-nowrap my-3 mt-5">
  <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-house"></i></span>
  <input type="text" class="form-control" name="org_name" placeholder="Enter Organization Name " aria-label="Username" aria-describedby="addon-wrapping">
  
</div>
<p><?php echo form_error('org_name'); ?></p>
<div class="input-group flex-nowrap mb-3">
    
  <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-user"></i></span>
  <input type="text" class="form-control" name="owner_name"  placeholder="Enter Owner's Name" aria-label="Username" aria-describedby="addon-wrapping">
</div>
<p><?php echo form_error('owner_name'); ?></p>
<div class="input-group flex-nowrap mb-3">
    <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-phone"></i></span>
  <input type="text" name="owner_phone" class="form-control" placeholder="Owner's Phone Number" aria-label="Username" aria-describedby="addon-wrapping">
</div>
<p><?php echo form_error('owner_phone'); ?></p>
<div class="input-group flex-nowrap mb-3">
    <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-address-card"></i></span>
  <textarea type="text" name="org_add" class="form-control" placeholder="Enter Organization Address" aria-label="Username" aria-describedby="addon-wrapping"></textarea>
</div>
  <p><?php echo form_error('org_add'); ?></p>
<div class="input-group flex-nowrap mb-3">
   
  <span class="input-group-text" id="addon-wrapping"><i class="fa-sharp fa-solid fa-file-waveform"></i></span>
  <textarea type="text" class="form-control" name="org_description" placeholder=" Enter Organization Description" aria-label="Username" aria-describedby="addon-wrapping"></textarea>
</div>
  <p> <?php echo form_error('org_description'); ?></p>
<div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-user"></i></span>
  <input type="text" name="spokeperson_name" class="form-control" placeholder="Enter Spoke Person Name" aria-label="Username" aria-describedby="addon-wrapping">
</div>
  <p>
      <?php echo form_error('spokeperson_name'); ?>
  </p>
<div class="input-group flex-nowrap mb-3">
   
  <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-phone"></i></span>
  <input type="text" name="spokeperson_phone" class="form-control" placeholder=" Enter Spoke Person Phone Number" aria-label="Username" aria-describedby="addon-wrapping">
</div>
  <p> <?php echo form_error('spokeperson_phone'); ?></p>
<button type="submit" class="form-control my-4 bg-primary text-light
 text-center fw-bold">Submit</button>
</form>
</div>
</div>
</div>
<div class="col-sm-1"></div>
</div>
<!------organization create form------->