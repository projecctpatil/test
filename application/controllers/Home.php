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

	public function create_challenge(){
		$popular = $this->input->post('popular');

		if ($popular == 'walkon') {
			$data_challenge = [
				'points' => $this->input->post('points'),
				'start_time' => $this->input->post('start_time'),
				'end_time' => $this->input->post('end_time'),
				'duration' => $this->input->post('duration'),
				'step_count' => $this->input->post('step_count'),
				'name' => $this->input->post('name'),
				'description' => $this->input->post('description')
			];
		} elseif ($popular == 'stepon') {
			$data_challenge = [
				'points' => $this->input->post('points'),
				'start_time' => $this->input->post('start_time'),
				'end_time' => $this->input->post('end_time'),
				'duration' => $this->input->post('duration'),
				'distance' => $this->input->post('distance'),
				'speed' => $this->input->post('speed'),
				'name' => $this->input->post('name'),
				'description' => $this->input->post('description')
			];

		} elseif ($popular == 'pedalon') {
			$data_challenge = [
				'points' => $this->input->post('points'),
				'start_time' => $this->input->post('start_time'),
				'end_time' => $this->input->post('end_time'),
				'duration' => $this->input->post('duration'),
				'distance' => $this->input->post('distance'),
				'speed' => $this->input->post('speed'),
				'name' => $this->input->post('name'),
				'description' => $this->input->post('description')
			];
		}

		$create_challenge = $this->Home_model->create_challenge_model($data_challenge,$popular);

		if ($create_challenge) {
			$id = $create_challenge;
			$data_badges = [
				'live_badges_id' => $create_challenge,
				'points' => $this->input->post('points'),
				'badge_pic' => $this->input->post('badge_pic'),
				'name' => $this->input->post('b_name'),
				'description' => $this->input->post('description'),
				'challenge_id' => $create_challenge
			];
			$create_badges = $this->Home_model->create_badges_model($data_badges);
			if ($create_badges) {
				$id = $create_badges;
				$data_live_challenges = [
					'live_challenges_id' => $create_challenge,
					'type_of_challenge' => $this->input->post('points'),
					'points' => $this->input->post('points'),
					'badge_id' => $create_badges,
				];
				$create_badges = $this->Home_model->create_data_live_challenges_model($data_live_challenges);

				$this->session->set_flashdata('create_challenge',$popular . ' Challenge is created');
				redirect('welcome');

			} else {
				return false;
			}
		} else {

		}
	}

	public function company(){
		$this->load->view('company');
	}

	public function employee(){
		$this->load->view('employee');
	}
}

?>