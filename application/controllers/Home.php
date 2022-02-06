<?php

/**
 * 
 */
class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('username')){
			// echo 'yes';
		}else{
			redirect('logout');
		}
		$this->load->model('Home_model');
		
	}
		
	public function index(){
		// $this->load->model('Home_model');
		$walkon = $this->Home_model->walkon_count();
		$stepon = $this->Home_model->stepon_count();
		$pedalon = $this->Home_model->pedalon_count();
		$this->load->view('welcome_message',['walkon'=>$walkon,'stepon'=>$stepon,'pedalon'=>$pedalon]);
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

	public function add_company(){
		$this->load->helper('string');
		$password = random_string('alpha',10);
		$data = [
					'company_name' => $this->input->post('company_name'),
					'registered_company_number' => $this->input->post('registered_company_number'),
					'Email' => $this->input->post('email'),
					'username' => $this->input->post('company_name') . '_admin',
					'contact_number' => $this->input->post('contact_number'),
					'date' => $this->input->post('date'),
					'vat_number' => $this->input->post('vat_number'),
					'address_line_1' => $this->input->post('address_line_1'),
					'address_line_2' => $this->input->post('address_line_2'),
					'city' => $this->input->post('city'),
					'country' => $this->input->post('country'),
					'post_code' => $this->input->post('post_code'),
					'c_date' => $this->input->post('c_date'),
					'password' => $password
				];
		$insert = $this->Home_model->add_company_model($data);
		if ($insert) {
			$user_name = $this->input->post('company_name') . '_admin';
			$this->load->config('email');
	        $this->load->library('email');
	        
	        $from = $this->config->item('smtp_user');
	        $to = $this->input->post('email');
	        $subject = 'Your Account is created by admin';
	        $message = 'User name : ' . $user_name . ' Password : ' . $password;

	        $this->email->set_newline("\r\n");
	        $this->email->from('projectpatilci@gmail.com');
	        $this->email->to($this->input->post('email'));
	        $this->email->subject($subject);
	        $this->email->message($message);

	        if (!$this->email->send()) {
	        	show_error($this->email->print_debugger());
	        }
			$this->session->set_flashdata('add_company','Company add success fully !');
			redirect('company');
		} else {
			$this->session->set_flashdata('not_company','Company Not added !');
			redirect('company');
		}
	}

	public function add_employee(){
		$data = [
					'company_name' => $this->input->post('company_name'),
					'email' => $this->input->post('email'),
					'contact_number' => $this->input->post('contact_number'),
					'date' => $this->input->post('date'),
					'password' => $this->input->post('password'),
					'address_line_1' => $this->input->post('address_line_1'),
					'address_line_2' => $this->input->post('address_line_2'),
					'city' => $this->input->post('city'),
					'country' => $this->input->post('country'),
					'post_code' => $this->input->post('post_code'),
					'c_date' => $this->input->post('c_date')
				];
		$insert = $this->Home_model->add_employee_model($data);
		if ($insert) {
			$this->session->set_flashdata('add_employee','Employe add success fully !');
			redirect('company_list');
		} else {
			$this->session->set_flashdata('not_employee','Employe Not added !');
			redirect('company_list');
		}
	}

	public function company_list(){
		$result = $this->Home_model->select_company_list();
		$this->load->view('company_list',['result'=>$result]);
	}

	public function add_emp(){
		$company = $this->uri->segment(3);
		$this->load->view('employee',['company'=>$company]);
	}

	public function company_dashbord(){
		$data = $this->Home_model->getcompany($this->session->userdata('username'));
		$walkon = $this->Home_model->walkon_count();
		$stepon = $this->Home_model->stepon_count();
		$pedalon = $this->Home_model->pedalon_count();
		$this->load->view('welcome_message',['data'=>$data,'walkon'=>$walkon,'stepon'=>$stepon,'pedalon'=>$pedalon]);
	}

	public function employee_dashboard(){
		$data = $this->Home_model->getemp($this->session->userdata('username'));
		$walkon = $this->Home_model->walkon_count();
		$stepon = $this->Home_model->stepon_count();
		$pedalon = $this->Home_model->pedalon_count();
		$this->load->view('welcome_message',['data'=>$data,'walkon'=>$walkon,'stepon'=>$stepon,'pedalon'=>$pedalon]);
	}
}

?>