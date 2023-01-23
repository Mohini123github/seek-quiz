<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register here</title>
	<style type="text/css">
		.sign{
			min-height: 500px;
		}
		 .bg{
    background-image: url("images/forms-background.jpg");
}
	</style>
</head>
<body>
<div class="row  bg sign">
	<div class="col-sm-1"></div>
	<div class="col-sm-10">
		<h1 class=" mt-5 text-center">Sign up to FlexiQuiz for free</h1>
					<p class="text-center">

Register to create and manage online tests, quizzes and assessments with FlexiQuiz.</p><hr class="mb-5">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6 ">
				<form method="post" action="<?php echo base_url('index.php/signup/setData');?>">
					
					<div class="input-group mb-3 flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-envelope"></i></span>
  <input type="text" name="email"class="form-control" placeholder="Username/Email" aria-label="Username" aria-describedby="addon-wrapping">
</div><small><?php echo form_error('email');?></small>
<div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-user"></i></span>
  <input type="text" class="form-control" name="first_name" placeholder="First Name" aria-label="name" aria-describedby="addon-wrapping">
</div>
<small><?php echo form_error('first_name');?></small>
<div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-user"></i></span>
  <input type="text" class="form-control" name="last_name" placeholder="Last Name" aria-label="name" aria-describedby="addon-wrapping">
</div>
 <small><?php echo form_error('last_name');?></small>
<div class="input-group flex-nowrap mb-3">
  <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-lock"></i></span>
  <input type="text" class="form-control" name="password" placeholder="Password" aria-label="password" aria-describedby="addon-wrapping">
</div>
  <small><?php echo form_error('password');?></small>
<div>
<select class="form-select" id="inputGroupSelect01" name="type">
    <option value="" >Choose User Type...</option>
    <option value="teacher">Teacher</option>
    <option value="student">Student</option>
    <option value="admin">admin</option>
  </select>
  <small><?php echo form_error('type');?></small>
</div>
<input type="checkbox" ><span style="font-size: 13px;"> I would like to receive occasional emails from FlexiQuiz containing hints, tips and information</span><br>
<input type="submit" value="SignUp" style="background-color: #0072a9;" class="btn text-light my-3">
				</form>
				<p style="font-size:13px;">By signing up, you are agreeing to our <a href="#">Terms and Conditions</a>,<a href="#"> Privacy Policy</a> and<a href="#"> Anti-Spam Policy</a>.</p>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
	<div class="col-sm-1"></div>
</div>
</body>
</html>