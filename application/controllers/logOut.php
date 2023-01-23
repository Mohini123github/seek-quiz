<?php
class LogOut extends CI_Controller{
	public function __construct(){
		parent::__construct();
		
		}
	public function logout(){

		if($this->session->has_userdata('id')){

			$this->session->unset_userdata('id');
			return redirect('welcome/logIn');
		}
		 

	}
}
?>