    <div class="row">
      <div class="col-md-12 rows ">
        <p class="mt-1 text-center">You have used 0 of 20 responses this month.<a href="#">Upgrade for more responses
            and to access additional features</a></p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-1 stulist"></div>
      <div class="col-sm-10 ">
        <center><button type="button" onclick="quizselection();" class="btn btn-primary mt-5 mb-2" >
            Create Quiz
          </button></center>
      </div>
      <div class="col-sm-1 stulist "></div>
    </div>  
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
        <!------table start--->
        <table class="table table-striped">
          <thead>
            <th class="text-secondary" style="font-weight: 500;">Quizess</th>
            <th class="text-end " ><a href="javascript:void(0);" onclick="createFolder();" style="cursor: pointer;font-weight:500; text-decoration: none; color: grey;"><b>+</b>create folder</a></th>
            <tr>
            </thead>
            <tbody id="folderList"></tbody>
        </table>
        <!------table end--->
      </div>
      <div class="col-sm-1"></div>
    </div>  
    <!-- for modal containin -->
    <div id="modalContainer"></div>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function(){
    getfolderlist();
  });
  function getfolderlist(){
    $.ajax({
      url: '<?php echo base_url('teacher/folderRecords');?>',
      type: 'post',
      datatype: 'json',
      success: function(response){
        // console.log(response);
        $("#folderList").html(JSON.parse(response).html);
      }
    });
  }
  function quizselection(){
    $.ajax({
      url: '<?php echo base_url("teacher/create_folder");?>',
      type: 'GET',
      datatype: 'text/plain',
      success: function(response){
        $("#modalContainer").html(JSON.parse(response).html);
        $("#exampleModal").modal("show");
      }
    });
  }
  function createFolder(){
    $.ajax({
      url : '<?php echo base_url('teacher/create_folder');?>',
      type: 'GET',
      datatype: 'text/plain',
      success: function(response) {
        $("#modalContainer").html(JSON.parse(response).html);
        $("#createfolder").modal("show");
      }
    });
  }
  $("body").on("submit","#addfolder",function(event){
    event.preventDefault();
    $.ajax({
      url: '<?php echo base_url("teacher/insertFolder");?>',
      type: 'POST',
      data: $(this).serializeArray(),
      datatype: 'text/plain',
      success: function(response){
        $("#createfolder").modal("hide");
        getfolderlist();
      }
    });
  });
  function getEdit(folder_id){
    $.ajax({
      url: '<?php echo base_url("teacher/getEditDetails/");?>'+folder_id,
      type: 'GET',
      datatype: 'text/plain',
      success: function(response){
        $("#modalContainer").html(JSON.parse(response).html);
        $("#editFolder").modal("show");
      }
    });
  }
  $("body").on("submit","#editfolder",function(e){
    e.preventDefault();
    $.ajax({
        url: "<?php echo base_url('teacher/updateFolder');?>",
        type:'post',
        data: $(this).serializeArray(),
        datatype: 'text/plain',
        success: function(response){
          // console.log(response);
          $("#editFolder").modal("hide");
          getfolderlist();
          }
    });
  });
  function getDelete(folder_id){
    $.ajax({
      url: '<?php echo base_url("teacher/create_folder");?>',
      type: 'GET',
      datatype: 'text/plain',
      success: function(response){
        $("#modalContainer").html(JSON.parse(response).html);
        $("#deleteFolder").modal("show");
        $("#deleteFolder").data("folder_id",folder_id);
      }
    });
  }
  $("body").on("submit","#deleteFolder",function(e){
    e.preventDefault();
    var folder_id = $("#deleteFolder").data('folder_id');
    $.ajax({
        url: "<?php echo base_url('teacher/delFolder/');?>"+folder_id,
        type:'post',
        data: $(this).serializeArray(),
        datatype: 'text/plain',
        success: function(response){
          $("#deleteFolder").modal("hide");
          getfolderlist();
          }
    });
  });
</script>