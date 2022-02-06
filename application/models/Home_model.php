<?php

class Home_model extends CI_Model{
	public function checkLogin($username,$password){
		$sql = $this->db->where(['username'=>$username,'password'=>$password])->get('admin');
		if ($sql->num_rows()) {
			return true;
		} else {
			return false;
		}
	}

	public function check_company_Login($username,$password){
		$sql = $this->db->where(['username'=>$username,'password'=>$password])->get('company_detele');
		if ($sql->num_rows()) {
			return true;
		} else {
			return false;
		}
	}

	public function checkempLogin($username,$password){
		$sql = $this->db->where(['username'=>$username,'password'=>$password])->get('employers');
		if ($sql->num_rows()) {
			return true;
		} else {
			return false;
		}
	}

	public function create_employers($data){
		$sql = $this->db->insert('employers',$data);
		if ($sql) {
			return true;
		} else {
			return false;
		}
	}

	public function update_user($data,$id){
		$sql = $this->db->where('id',$id)->update('user',$data);
	}

	public function delete_user($id){
		$sql = $this->db->where('id',$id)->delete('user');
	}

	public function create_challenge_model($data,$popular){
		$sql = $this->db->insert($popular,$data);
		if ($sql) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	public function create_badges_model($data){
		$sql = $this->db->insert('live_badges',$data);
		if ($sql) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	public function create_data_live_challenges_model($data){
		$sql = $this->db->insert('live_challenges',$data);
		if ($sql) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	public function walkon_count(){
		$sql = $this->db->get('walkon');
		if ($sql) {
			return $sql->num_rows();
		} else {
			return false;
		}
	}

	public function stepon_count(){
		$sql = $this->db->get('stepon');
		if ($sql) {
			return $sql->num_rows();
		} else {
			return false;
		}
	}
	
	public function pedalon_count(){
		$sql = $this->db->get('pedalon');
		if ($sql) {
			return $sql->num_rows();
		} else {
			return false;
		}
	}

	public function add_company_model($data){
		$sql = $this->db->insert('company_detele',$data);
		if ($sql) {
			return true;
		} else {
			return false;
		}
	}

	public function select_company_list(){
		$sql = $this->db->get('company_detele');
		if ($sql->num_rows()) {
			return $sql->result_array();
		} else {
			return false;
		}
	}

	public function add_employee_model($data){
		$sql = $this->db->insert('employers',$data);
		if ($sql) {
			return true;
		} else {
			return false;
		}
	}

	public function getcompany($email){
		$sql = $this->db->where('username',$email)->get('company_detele');
		if ($sql->num_rows()) {
			return $sql->result_array();
		} else {
			return false;
		}
	}

	public function getemp($email){
		$sql = $this->db->where('username',$email)->get('employers');
		if ($sql->num_rows()) {
			return $sql->result_array();
		} else {
			return false;
		}
	}

}

?>