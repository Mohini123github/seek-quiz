<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('layout/header.php');
		$this->load->view('common/index.php');
		$this->load->view('layout/footer.php');
	}
	public function feature(){
		$this->load->view('layout/header.php');		
		$this->load->view('common/features.php');		
		$this->load->view('layout/footer.php');
	}
	public function plan()
	{
		$this->load->view('layout/header.php');				
		$this->load->view('common/plans.php');				
		$this->load->view('layout/footer.php');
	}
	public function signUp()
	{
		$this->load->view('layout/header.php');	
		$this->load->view('common/signup.php');			
		$this->load->view('layout/footer.php');
	}
	public function logIn()
	{
		$this->load->view('layout/header.php');
		$this->load->view('common/login.php');				
		$this->load->view('layout/footer.php');
	}
	/*public function studentDashboard(){
		$this->load->view('common/dashboard/studentDashboard.php');
		$this->load->view('layout/footer.php');

	}*/
	
	
	


}
