<?php

class Super_admin extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function users(){
		$this->load->view('common/dashboard/superAdmin/header.php');
		$this->load->model('User_model');
		$data['org'] = $this->User_model->getOrganization();
		$this->load->view('common/dashboard/superAdmin/users.php',$data);
		$this->load->view('layout/footer.php');
	}
}

?>