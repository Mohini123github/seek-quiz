<style type="text/css">
	.userHeight{
    min-height: 500px;
}
</style>
<div class="row border-bottom">
	<div class="col-sm-1"></div>
	<div class="col-sm-10">
		<p class="my-2"> total users : </p>
	</div>
	<div class="col-sm-1"></div>
</div>
<div class="row">
	<div class="col-sm-1 bg-light "></div>
	<div class="col-sm-10 border-start border-end mb-2">
	<!-- <table class="table border-end border-start border-top border-bottom border-rounded table-responsive my-4" border="0">
    <thead class="bg-light"></thead>
  <thead class="bg-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email address</th>
      <th scope="col">Role</th>
      <th scope="col">Created</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
</tbody>
</table> -->
<form action="" method="post">
  <div class="row mt-4">
    <div class="col-sm-6 ">
      <label for="Username"><b>Username</b></label><br/>
      <input type="text" value="" name="username" class="form-control mt-1"/>
    </div>
    <div class="col-sm-6">
      <label for="User type"><b>User type</b><i class="fa-solid fa-circle-info"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Respondent: Access to a personal portal to view and take assigned quizzez,tests,or courses. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Trainer: Access to assigned quizzes to view,manage,or edit depending on the permissions set. Administrator: Access to all quizzes and settings based on the permissiona set."></i></label><br/>
      <select class="form-control mt-1">
        <option value="">Respondent</option>
        <option value="">Trainer</option>
        <option value="">Administrator</option>
      </select>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-sm-6">
      <label for="Password"><b>Password</b></label><br/>
      <input type="text" value="" name="password" class="form-control mt-1" placeholder="{;{obS*H6"/><br/>
        <label for="Suspended"><b>Suspended</b></label>
        <input type="checkbox" value="" name="checkbox"/>
    </div>
    <div class="col-sm-6">
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-sm-6">
      <label for="First name"><b>First name</b></label><br/>
      <input type="text" value="" name="firstname" class="form-control mt-1"/>
    </div>
    <div class="col-sm-6">
    <label for="Last name"><b>Last name</b></label>
        <input type="text" value="" name="lastname" class="form-control mt-1"/>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-sm-6">
      <label for="Email"><b>Email</b></label><br/>
      <input type="email" value="" name="email" class="form-control mt-1"/><br/>
    </div>
    <div class="col-sm-6">
    <label for="Organization"><b>Organization</b></label>
        <input type="text" value="" name="organization" class="form-control mt-1"/>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-sm-10">
      <label for="Assigned quizzez"><b>Assigned quizzes</b><i class="fa-solid fa-circle-info"  data-bs-toggle="tooltip" data-bs-placement="top" title="Assign a quiz to the user to access as a test taker." ></i></label><br/>
      <input type="text" value="" name="quizzes" class="form-control mt-1 h-75"/><br/>
    </div>
    <div class="col-sm-2">
    <button type="button" class="btn btn-success mt-4">Assign Quizzes</button>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-sm-10">
      <label for="Assigned quizzez"><b>Assigned groups</b><i class="fa-solid fa-circle-info"  data-bs-toggle="tooltip" data-bs-placement="top" title="Assign a group to the user that contains quizzes for the user to access as a text taker."></i></label><br/>
      <input type="text" value="" name="groups" aria-colspan="" aria-rowspan="3" class="form-control mt-1 h-75"/><br/>
    </div>
    <div class="col-sm-2">
    <button type="button" class="btn btn-success mt-4">Assign Groups</button>
  </div>
  <div class="row mt-3">
    <div class="col-sm-12">
      <label for="Notes"><b>Notes</b></label><br/>
      <textarea rows="3"class="form-control mt-1"></textarea>
      </div>
  </div>
  <div class="row mt-3">
    <div class="col-sm-10"></div>
    <div class="col-sm-2">
    <button type="button" class="btn btn-light me-1">Cancel</button>
    <button type="button" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>
	</div>
	<div class="col-sm-1 bg-light"></div>
</div>