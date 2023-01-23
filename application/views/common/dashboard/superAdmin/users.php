<!--------users table-------->
<div class="card hgt my-3">
  <div class="card-header text-end">
   <a href="<?php echo base_url('index.php/Super_admin/super_adminDashboard');?>" class="btn btn-primary" value="submit">Add Organization</a>
  </div>
  <div class="card-body">
   <div class="table-responsive">
    <table class="table ">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Organization Name</th>
      <th scope="col">Owner Name</th>
      <th scope="col">Owner Phone</th>
      <th scope="col">Organization Address</th>
      <th scope="col">Organization Description</th>
      <th scope="col">SpokePerson Name</th>
      <th scope="col">SpokePerson Phone</th>
    </tr>
  </thead>
  <tbody>
    <?php if(@count($org)>0): $id=1; ?>
      
    
    <?php foreach ($org as $row) : ?>
    <tr>
      <td scope="row"><?php echo $id; ?></td>
      <td><?php echo $row->org_name; ?></td>
      <td><?php echo $row->owner_name; ?></td>
      <td><?php echo $row->owner_phone; ?></td>
      <td><?php echo $row->org_add; ?></td>
      <td><?php echo $row->org_description; ?></td>
      <td><?php echo $row->spokeperson_name; ?></td>
      <td><?php echo $row->spokeperson_phone; ?></td>
      
    </tr>
    <?php $id++; endforeach; ?>
    <?php else: ?>
  <tr>
    <td colspan="8" style="text-align:center;">no organizations found</td>
  </tr>
    <?php endif ?>
  </tbody>
</table>
</div>
</div>
</div>

<!----------------------table end------------------->