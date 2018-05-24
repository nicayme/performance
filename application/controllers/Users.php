<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	// public function __construct() {
	// parent::__construct();



	// }

	public function index()
	{	 

	

		$this->load->view('users/login');
	}

	public function login()
	{

		if($this->session->userdata('logged_in') == true){
      		redirect('dashboard/index', 'refresh');
		}else{
		     
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() == FALSE){


				$this->load->view('users/login');
				
			} 


			else {
				
				// Get username
				$email = $this->input->post('email');
				// Get and encrypt the password
				//$password = md5($this->input->post('password'));

				$pass = $this->input->post('password');
				$salt = sha1(md5($pass));
				$password = md5($pass . $salt);

				// Login user
				$user_id = $this->pages_model->login($email, $password);



				if($user_id){
					// Create session
					$user_data = array(
						'userID' => $user_id,
						'email' => $email,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);


					// Set message
					$this->session->set_flashdata('user_loggedin', 'You are now logged in');

					redirect('dashboard'); 


				} else {
					// Set message
					$this->session->set_flashdata('login_failed', 'Login is invalid');

					redirect('users/login'); 
				}		
			}

		}

		
		



	}


	public function register()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('username', 'username');

		
		if($this->form_validation->run() === FALSE){
			$this->load->view('users/login');
			
		} else {
			// Encrypt password
			$pass = $this->input->post('password');
			$salt = sha1(md5($pass));
			$enc_password = md5($pass . $salt);

			

			$this->users_model->register($enc_password);

			// Set message
			$this->session->set_flashdata('user_registered', 'You are now registered and can log in');

			redirect('users/login'); 
		}
	

		

	}



	// Log user out
		public function logout(){
			// Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('userID');
			$this->session->unset_userdata('email');

			// Set message
			$this->session->set_flashdata('user_loggedout', 'You are now logged out');

			redirect('users/login');
		}


}
