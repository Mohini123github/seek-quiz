<?php
class User_model extends CI_model{
	#below function for signup
	public function insertData($data){
		return $this->db->insert('users',$data);
	}
#below function for log in 
	public function isvaliduser($email,$password,$type)
	{
		$q=$this->db->where(['email'=>$email,'password'=>$password,'type'=>$type])
 					->get('users');
 					if($q->num_rows())
 					{
 						return $q->row()->id;
 					}
 					else{
 						return false;
 					}
	}
	#below function for orgamization
	public function createOrganization($data){
		return $this->db->insert('organization',$data);
	} 
	#below function for fetch data of organization table from database
	public function getOrganization(){
		$query = $this->db->get('organization'); 
		return $query->result() ;
	}
	// below the method of create folder
	public function getFolder($data){
		return $this->db->insert('folder',$data);
	}
	// for fetching folders
	public function showFolder(){
		$id = $this->session->userdata('id');
		$q = $this->db->select()
					  ->from('folder')
					  ->where(['id'=>$id])
					  ->get();
					  return $q->result();
					  exit();		
	}
	public function getFormDetails($folder_id){
		$this->db->where('folder_id', $folder_id);
        $row = $this->db->get('folder')->row_array();
        return $row;
	}
	public function update($data,$folder_id){
		$this->db->update('folder', $data, array('folder_id' => $folder_id));
		return $folder_id;
	}
	public function delete($folder_id){
		$this->db->delete('folder', array('folder_id' => $folder_id));
	}
}

