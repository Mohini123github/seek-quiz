<?php
class Organization extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function insertData(){
		$this->form_validation->set_rules('org_name', 'Organization Name', 'required');
                $this->form_validation->set_rules('owner_name', 'owner Name', 'required');
                $this->form_validation->set_rules('owner_phone', 'Owner Phone', 'required');
                $this->form_validation->set_rules('org_add', 'Organization Address', 'required');
                $this->form_validation->set_rules('org_description', 'Organization Description', 'required');
                $this->form_validation->set_rules('spokeperson_name', 'Spokeperson Name', 'required');
                $this->form_validation->set_rules('spokeperson_phone', 'Spokeperson Phone', 'required');
                if($this->form_validation->run() == false){
                	
		$this->form_validation->set_error_delimiters("<span style='color:red;'>","</span");
			$this->load->view('common/dashboard/superAdmin/super_adminDashboard.php');

                }
                else{
                	$data = [
			'org_name' => $this->input->post('org_name'),
			'owner_name' => $this->input->post('owner_name'),
			'owner_phone' => $this->input->post('owner_phone'),
			'org_add' => $this->input->post('org_add'),
			'org_description' => $this->input->post('org_description'),
			'spokeperson_name' => $this->input->post('spokeperson_name'),
			'spokeperson_phone' => $this->input->post('spokeperson_phone')
		];
		#print_r($data);
		$this->load->model('User_model');
		
		
                	if($this->User_model->createOrganization($data))
                	{
                		$this->session->set_flashdata('status', 'Organization created successfully!!');
                		redirect(base_url('index.php/logIn/super_adminDashboard'));
                		
                	}
                	else{
                		
	$this->session->set_flashdata('message',error_alert('OOps try later!!!'));
	return redirect(base_url('index.php/logIn/super_adminDashboard'));

                }
                	}
		
		
	}
}
?>