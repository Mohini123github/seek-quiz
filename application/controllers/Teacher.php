<?php 
class Teacher extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}
	public function users(){
		$this->load->view('common/dashboard/teacher/header.php');
		$this->load->view('common/dashboard/teacher/users.php');
		$this->load->view('layout/footer.php');
	}
	public function groups(){
		$this->load->view('common/dashboard/teacher/header.php');
		$this->load->view('common/dashboard/teacher/groups.php');
		$this->load->view('layout/footer.php');
	}
	public function report(){
		$this->load->view('common/dashboard/teacher/header.php');
		$this->load->view('common/dashboard/teacher/report.php');
		$this->load->view('layout/footer.php');
	}
	public function setting(){
		$this->load->view('common/dashboard/teacher/header.php');
		$this->load->view('common/dashboard/teacher/setting.php');
		$this->load->view('layout/footer.php');
	}
	public function Account(){
		$this->load->view('common/dashboard/teacher/account.php');
	}
	public function Password(){
		$this->load->view('common/dashboard/teacher/password.php');
	}
	public function General(){
		$this->load->view('common/dashboard/teacher/general.php');
	}
	// for modal call method
	public function create_folder(){
		$html = $this->load->view('common/dashboard/teacher/modals.php',[],true);
		$response["html"] = $html;
		echo json_encode($response);
	}
	// to insert folder in dAtabase
	public function insertFolder(){
		$data = array();
            $data['id'] = $this->input->post('id');
            $data['folder_name'] = $this->input->post('folder_name');
			$response = $this->User_model->getFolder($data);
			// echo json_encode($response);
	}
	// for fetch all folders
	public function folderRecords(){
		$data['rows'] = $this->User_model->showFolder();
		$rowHtml = $this->load->view('common/dashboard/teacher/recordList.php',$data,true);
		echo json_encode(['html'=>$rowHtml]);
		exit();
	}
	// to get all information in edit form and call that form also
	public function getEditDetails($folder_id){
		$row = $this->User_model->getFormDetails($folder_id);
		$data['row'] = $row;
		$html = $this->load->view('common/dashboard/teacher/update.php',$data,true);
		$response["html"] = $html;
		echo json_encode($response);

	}
	public function updateFolder(){
		$folder_id = $this->input->post('folder_id');
		$row = $this->User_model->getFormDetails($folder_id);
		$data = array();
            $data['id'] = $this->input->post('id');
            $data['folder_name'] = $this->input->post('folder_name');
			$response = $this->User_model->update($data,$folder_id);
			$row = $this->User_model->showFolder($folder_id);
			echo json_encode($response);
	}
	public function delFolder($folder_id){
		$row = $this->User_model->getFormDetails($folder_id);
		$this->User_model->delete($folder_id);
	}
}
?>