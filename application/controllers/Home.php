<?php

/**
 * 
 */
class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
		
	}
		
	public function index(){
		// $this->load->model('Home_model');
		$data['result'] = $this->Home_model->select();
		$this->load->view('Home_view',$data);
	}

	public function create_user($name){
		$query = $this->Home_model->create(['name'=>$name]);
		if ($query) {
			return redirect(base_url().'Home/index');
		} else {
			return 'Not Insert';
		}
	}

	public function update_user($name){
		$this->Home_model->update_user(['name'=>$name],15);
	}

	public function delete_user($id){
		$this->Home_model->delete_user($id);
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->load->view('register');
	}

	public function register(){
		$this->load->helper('string');
		$user_name = random_string('alnum',10);
		$password = random_string('alpha',10);
		$data = [
			'name' => $this->input->post('c_name'),
			'username' => $user_name,
			'password' => $password,
			'admin_ids' => $user_name . ' | ' . $password . ' | ' . $this->input->post('p_number') . ' | ' .$this->input->post('email'),
		];
		
		$result = $this->Home_model->create_employers($data);
		if ($result) {
			$this->load->config('email');
	        $this->load->library('email');
	        
	        $from = $this->config->item('smtp_user');
	        $to = $this->input->post('email');
	        $subject = 'Your id password !';
	        $message = 'User name : ' . $user_name . ' Password : ' . $password;

	        $this->email->set_newline("\r\n");
	        $this->email->from($from);
	        $this->email->to($to);
	        $this->email->subject($subject);
	        $this->email->message($message);

	        if ($this->email->send()) {
	        	$this->session->set_flashdata('login','Please check your email for user id and password !');
	            // echo 'Your Email has successfully been sent.';
	            redirect('logout');

	        } else {

	            show_error($this->email->print_debugger());
	        }
		} else {

			echo 'No';
		}

	}

	public function login(){
		$result = $this->Home_model->checkLogin($this->input->post('email') , $this->input->post('password'));
		if ($result) {
			$this->session->set_userdata('username',$this->input->post('email'));
			redirect('welcome');
		} else {
			$this->session->set_flashdata('login','Please type right user id and password !');
			redirect('logout');
		}
	}
}

?>