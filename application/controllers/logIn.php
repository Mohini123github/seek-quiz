<?php
class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function login()
	{
		$this->form_validation->set_rules('email', 'Username','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('type','Type','required');

		if($this->form_validation->run() == FALSE){
			$this->form_validation->set_error_delimiters('<span class="error" style="color:red;">', '</span>');
			$this->load->view('layout/header.php');
			$this->load->view('common/login.php');				
			$this->load->view('layout/footer.php');
		}
		else{
		$email=$this->input->post('email');
		$password=md5($this->input->post('password'));
		$type=$this->input->post('type');
		$this->load->model(array('User_model'));
		$id = $this->User_model->isvaliduser($email,$password,$type);
		// print_r($id);
		// exit;
		if($id)
		{
			if($type=='teacher'){
				$this->session->set_userdata('id',$id);
				// print_r($id);
				// exit;
				return redirect('logIn/teacherDashboard');
				// print_r($id);
			}
			else if($type=='admin'){
				$this->session->set_userdata('id',$id);
				return redirect('logIn/adminDashboard');
			}
			else if($type=='superadmin'){
				$this->session->set_userdata('id',$id);
				// print_r($id);
				// exit;
				return redirect('logIn/super_adminDashboard');
			}  
		}
		else{
			$this->session->set_flashdata('status','oops!! invalid user details');
			redirect('welcome/logIn');
		}
	}
	}
	public function teacherDashboard(){
		if(!$this->session->userdata('id')){
			return redirect('welcome/login');
		 }
		// print_r($this->session->userdata('id'));
		// exit;
		$this->load->view('common/dashboard/teacher/header.php');
		$this->load->view('common/dashboard/teacher/teacherDashboard.php');
		$this->load->view('layout/footer.php');
	}
	public function adminDashboard(){
		if(!$this->session->userdata('id')){
			return redirect('welcome/login');
		}
		$this->load->view('common/dashboard/admin/adminDashboard.php');
		$this->load->view('layout/footer.php');
	}
	public function super_adminDashboard()
	{
		if(!$this->session->userdata('id')){
			return redirect('welcome/login');
		}
		$this->load->view('common/dashboard/superAdmin/header.php');
		$this->load->view('common/dashboard/superAdmin/super_adminDashboard.php');
		$this->load->view('layout/footer.php');
	}
	}


?>  