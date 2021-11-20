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
	public function index(){
		if ($this->session->userdata('username')){
			// echo 'yes';
		}else{
			redirect('logout');
		}
		$this->load->model('Home_model');
		$walkon = $this->Home_model->walkon_count();
		$stepon = $this->Home_model->stepon_count();
		$pedalon = $this->Home_model->pedalon_count();
		$this->load->view('welcome_message',['walkon'=>$walkon,'stepon'=>$stepon,'pedalon'=>$pedalon]);
	}

	public function test(){
		echo "Hello Rohit";
	}
}
