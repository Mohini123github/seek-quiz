<!-----modal for create folder---->
<div class="modal fade" tabindex="-1" id="createfolder">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create Folder</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="addfolder">
      <div class="modal-body">
    <?=  form_hidden('id',$this->session->userdata('id'));?>
    <input type="text" name="folder_name" id="folder_name" class="form-control" placeholder="Enter New Folder Name">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light btn-outline-light text-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Create Folder</button>
      </div>
    </form>
    </div>
  </div>
</div>
    <!-----modal for create folder end---->
    <!-- delete modal -->
<div class="modal fade" tabindex="-1" id=deleteFolder>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create Folder</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="deleteFolder">
      <div class="modal-body">
        <h5>delete??</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light btn-outline-light text-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>
    <!-- end delete -->


    <!-----modal part for quiz creation----->
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="text-center">Select a quiz type</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-6" style="border: 10px solid #dfdfdf; background:#dfdfdf ;">
                <img src="images/classic-quiz-select.png" height="180px" width="180px">
                <center><button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal"
                    data-bs-target="#createQuiz">Classic Quiz</button></center>
                <p class="p">Create any type of quiz, test or exam for learners to take independently during a set time
                  frame</p>
              </div>
              <div class="col-sm-6" style="border: 10px solid #dfdfdf;background:#dfdfdf ;">
                <img src="images/live-event-select.png" height="180px" width="180px">
                <center><button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal"
                    data-bs-target="#createQuiz">Live Quiz</button></center>
                <p class="p">Build and host a live quiz game to play with learners in real-time</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-----modal part for quiz creation End ----->
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="createQuiz" tabindex="-1" aria-labelledby="createQuizLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="createQuizLabel">New Quiz</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <input type="text" class="form-control" name="" placeholder="Enter title for your Quiz">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Create Quiz</button>
          </div>
        </div>
      </div>
    </div>