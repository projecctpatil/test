<?php

class Home_model extends CI_Model{
	public function checkLogin($username,$password){
		$sql = $this->db->where(['username'=>$username,'password'=>$password])->get('employers');
		if ($sql) {
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
}

?>