<?php foreach($rows as $row) { ?>
<tr id="row-<?php echo $row->folder_id;?>">
    <td class="nameModal"><b><i class="fa-solid fa-plus"></i> <?php echo $row->folder_name;?></b></td> 
    <td class="text-end"><a href="javascript:getEdit(<?php echo $row->folder_id;?>);" ><i class="fa-solid fa-pen-to-square fs-4"></i></a> <a href="javascript:getDelete(<?php echo $row->folder_id;?>);"> <i class="fa-solid fa-trash-can text-danger fs-4"></i></a></td>
</tr>
    <?php } ?>

    