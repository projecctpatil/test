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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
	}

	public function logout(){
		$this->session->unset_userdata('username');
		redirect('');
	} 

	public function login(){
		$this->load->model('Home_model');
		if($this->input->post('type') == 'employer'){
			return self::company_login_d();
		} else {
			return self::employee_login();
		}
		// $result = $this->Home_model->checkLogin($this->input->post('email') , $this->input->post('password'));
		// if ($result) {
		// 	$this->session->set_userdata('username',$this->input->post('email'));
		// 	redirect('Home');
		// } else {
		// 	$this->session->set_flashdata('login','Please type right user id and password !');
		// 	redirect('logout');
		// }
	}

	public function employee_login(){
		$this->load->model('Home_model');
		$result = $this->Home_model->checkempLogin($this->input->post('email') , $this->input->post('password'));
		if ($result) {
			$this->session->set_userdata('username',$this->input->post('email'));
			redirect('employee_dashboard');
		} else {
			$this->session->set_flashdata('login','Please type right user id and password !');
			redirect('logout');
		}
	}

	public function company_login(){
		$this->load->model('Home_model');
		$result = $this->Home_model->checkLogin($this->input->post('email') , $this->input->post('password'));
		if ($result) {
			$this->session->set_userdata('username',$this->input->post('email'));
			redirect('company_dashbord');
		} else {
			$this->session->set_flashdata('login','Please type right user id and password !');
			redirect('logout');
		}
	}

	public function register(){
		$this->load->model('Home_model');
		$this->load->helper('string');
		$user_name = random_string('alnum',10);
		$password = random_string('alpha',10);
		$data = [
			'name' => $this->input->post('c_name'),
			'username' => $user_name,
			'password' => $password,
			'admin_ids' => $user_name . ' | ' . $password . ' | ' . $this->input->post('p_number') . ' | ' .$this->input->post('email'),
			'email' => $this->input->post('email')
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
	            redirect('logout');
	        } else {
	            show_error($this->email->print_debugger());
	        }
		} else {
			echo 'No';
		}

	}

	public function test(){
		$this->load->view('register');

	}

	public function company_login_d(){
		$this->load->model('Home_model');
		$result = $this->Home_model->check_company_Login($this->input->post('email') , $this->input->post('password'));
		if ($result) {
			$this->session->set_userdata('username',$this->input->post('email'));
			redirect('company_dashbord');
		} else {
			$this->session->set_flashdata('login','Please type right user id and password !');
			redirect('logout');
		}
	}
}
