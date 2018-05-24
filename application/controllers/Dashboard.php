<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
	parent::__construct();



	}





	public function index()
	{

		if(!$this->session->userdata('logged_in'))
		{
				redirect('users/login');
		}



		$data['users'] = $this->pages_model->get_users();
		$data['title'] = 'Admin Page';

		$this->load->view('dashboardtemplate/header');
		$this->load->view('dashboardtemplate/sidebar');
		$this->load->view('dashboard/index', $data); 
		$this->load->view('dashboardtemplate/footer'); 
 
	}


	public function about()
	{

		if(!$this->session->userdata('logged_in')) {
				redirect('users/login');
		}


		$data['about'] = $this->pages_model->get_about();
		$data['title'] = 'About';

		$this->form_validation->set_rules('adescrirption', 'Description', 'required');
		

		if($this->form_validation->run() === FALSE){


		$this->load->view('dashboardtemplate/header');
		$this->load->view('dashboardtemplate/sidebar');
		$this->load->view('dashboard/about', $data); 
		$this->load->view('dashboardtemplate/footer'); 


		} else {

			$this->pages_model->update_about();

					// Set message
			$this->session->set_flashdata('about_updated', 'About details has been updated');

			redirect('dashboard/about');


		}


 
	}


	public function careers()
	{

		if(!$this->session->userdata('logged_in')){
				redirect('users/login');
		}

	

		$data['careers'] = $this->pages_model->get_careers();
		$data['title'] = 'Careers';

		$this->form_validation->set_rules('careersdetails', 'Details', 'required');

		if($this->form_validation->run() === FALSE){

		$this->load->view('dashboardtemplate/header');
		$this->load->view('dashboardtemplate/sidebar');
		$this->load->view('dashboard/careers', $data); 
		$this->load->view('dashboardtemplate/footer'); 


		} else {

		$this->pages_model->update_careers();

					// Set message
		$this->session->set_flashdata('careers_updated', 'Contact details has been updated');

		redirect('dashboard/careers');


		}

	}



	public function payment()
	{

		if(!$this->session->userdata('logged_in')){
				redirect('users/login');
		}

	

		$data['payments'] = $this->pages_model->get_payments();
		$data['title'] = 'Payments';

		$this->form_validation->set_rules('paymentdetails', 'Details', 'required');

		if($this->form_validation->run() === FALSE) {

		$this->load->view('dashboardtemplate/header');
		$this->load->view('dashboardtemplate/sidebar');
		$this->load->view('dashboard/payment', $data); 
		$this->load->view('dashboardtemplate/footer'); 


		} else {

		$this->pages_model->update_payment();

					// Set message
		$this->session->set_flashdata('payment_updated', 'Payment details has been updated');

		redirect('dashboard/payment');


		}
		
	}



	public function services()
	{

		if(!$this->session->userdata('logged_in')){
				redirect('users/login');
		}


		$data['services'] = $this->pages_model->get_services();
		$data['title'] = 'Services';

		$this->load->view('dashboardtemplate/header');
		$this->load->view('dashboardtemplate/sidebar');
		$this->load->view('dashboard/services', $data); 
		$this->load->view('dashboardtemplate/footer'); 

	}



	public function servicesedit($id)
	{

		if(!$this->session->userdata('logged_in')){
				redirect('users/login');
		}


		$data['services'] = $this->pages_model->get_services($id);
		$data['title'] = 'Services';


		$this->load->view('dashboardtemplate/header');
		$this->load->view('dashboardtemplate/sidebar');
		$this->load->view('dashboard/servicesedit', $data); 
		$this->load->view('dashboardtemplate/footer'); 


	}




	public function updateservices()
	{

	
		$this->pages_model->update_services();
					// Set message
		$this->session->set_flashdata('services_updated', 'You have successfully updated!');

		redirect('dashboard/services');

	}


	


	public function projects()
	{

		if(!$this->session->userdata('logged_in')){
				redirect('users/login');
		}


		$data['projects'] = $this->pages_model->get_projects();
		$data['title'] = 'Project';

		$this->form_validation->set_rules('description', 'Project Name', 'required');
		//$this->form_validation->set_rules('userfile', 'Project Image', 'required');

		if($this->form_validation->run() === FALSE){

		$this->load->view('dashboardtemplate/header');
		$this->load->view('dashboardtemplate/sidebar');
		$this->load->view('dashboard/projects', $data); 
		$this->load->view('dashboardtemplate/footer'); 

		} else {

		$this->pages_model->add_projects();
		$this->session->set_flashdata('add_project', 'Project has been successfully added!');

		redirect('dashboard/projects');

		}




	}


	public function projectedit($id)
	{

		if(!$this->session->userdata('logged_in')){
				redirect('users/login');
		}


		$data['projects'] = $this->pages_model->get_projects($id);
		$data['title'] = 'Project Edit';

		$this->load->view('dashboardtemplate/header');
		$this->load->view('dashboardtemplate/sidebar');
		$this->load->view('dashboard/projectedit', $data); 
		$this->load->view('dashboardtemplate/footer'); 

	}




	public function updateprojects()
	{
			
				$this->pages_model->update_projects();
					// Set message
				$this->session->set_flashdata('projects_updated', 'You have successfully updated!');

				redirect('dashboard/projects');

	}


	public function deleteprojects()
	{
			
				$this->pages_model->delete_projects();
					// Set message
				$this->session->set_flashdata('projects_deleted', 'You have successfully deleted!');

				redirect('dashboard/projects');

	}



	public function testimonials()
	{

		if(!$this->session->userdata('logged_in')){
				redirect('users/login');
		}

		$this->form_validation->set_rules('testimonialname', 'Testimonial Name', 'required');
		$this->form_validation->set_rules('testimonialstext', 'Testimonial Text', 'required');

		$data['testimonials'] = $this->pages_model->get_testimonials();
		$data['title'] = 'Testimonials';


		if($this->form_validation->run() === FALSE){

		$this->load->view('dashboardtemplate/header');
		$this->load->view('dashboardtemplate/sidebar');
		$this->load->view('dashboard/testimonials', $data); 
		$this->load->view('dashboardtemplate/footer'); 

		} else {

		$this->pages_model->add_testimonials();
		$this->session->set_flashdata('add_testimonial', 'Testimonial has been successfully added!');

		redirect('dashboard/testimonials');

		}
	}


	public function deletetestimonials()
	{
			
				$this->pages_model->delete_testimonials();
					// Set message
				$this->session->set_flashdata('testimonials_deleted', 'You have successfully deleted!');

				redirect('dashboard/testimonials');

	}





	public function testimonialsedit($id)
	{

		if(!$this->session->userdata('logged_in')){
				redirect('users/login');
		}


		$data['testimonials'] = $this->pages_model->get_testimonials($id);
		$data['title'] = 'Testimonial Edit';

		$this->load->view('dashboardtemplate/header');
		$this->load->view('dashboardtemplate/sidebar');
		$this->load->view('dashboard/testimonialsedit', $data); 
		$this->load->view('dashboardtemplate/footer'); 

	}



	public function updatetestimonials()
	{

	
		$this->pages_model->update_testimonials();
					// Set message
		$this->session->set_flashdata('testimonials_updated', 'You have successfully updated!');

		redirect('dashboard/testimonials');

	}





	public function sliderimages()
	{

		if(!$this->session->userdata('logged_in')){
				redirect('users/login');
		}

		$this->form_validation->set_rules('imgheader', 'Header', 'max_length[12]');
		$this->form_validation->set_rules('imgtext', 'Text', 'max_length[12]');

		$data['sliderimages'] = $this->pages_model->get_sliderimages();

		$data['title'] = 'Slider Images';


		if($this->form_validation->run() === FALSE){

		$this->load->view('dashboardtemplate/header');
		$this->load->view('dashboardtemplate/sidebar');
		$this->load->view('dashboard/sliderimages', $data); 
		$this->load->view('dashboardtemplate/footer'); 

		} else {

		$this->pages_model->add_sliderimages();
		$this->session->set_flashdata('added_sliderimages', 'Slider has been successfully added!');

		redirect('dashboard/sliderimages');

		}

		



		

	}


	public function sliderimagesedit($id)
	{

		if(!$this->session->userdata('logged_in')){
				redirect('users/login');
		}


		$data['sliderimages'] = $this->pages_model->get_sliderimages($id);
		$data['title'] = 'Slider Images';

		$this->load->view('dashboardtemplate/header');
		$this->load->view('dashboardtemplate/sidebar');
		$this->load->view('dashboard/sliderimagesedit', $data); 
		$this->load->view('dashboardtemplate/footer'); 

	}

	public function deletesliderimages()
	{
			
				$this->pages_model->delete_sliderimages();
					// Set message
				$this->session->set_flashdata('slider_deleted', 'You have successfully deleted!');

				redirect('dashboard/sliderimages');

	}



	public function updatesliderimages()
	{

	
		$this->pages_model->update_sliderimages();
					// Set message
		$this->session->set_flashdata('sliderimage_updated', 'You have successfully updated!');

		redirect('dashboard/sliderimages');

	}



	public function settings()
	{

		if(!$this->session->userdata('logged_in')){
				redirect('users/login');
		}

	

		$data['settings'] = $this->pages_model->get_systemsettings();
		$data['title'] = 'System Settings';

		$this->form_validation->set_rules('websitetitle', 'Details', 'required');

		if($this->form_validation->run() === FALSE){

		$this->load->view('dashboardtemplate/header');
		$this->load->view('dashboardtemplate/sidebar');
		$this->load->view('dashboard/settings', $data); 
		$this->load->view('dashboardtemplate/footer'); 


		} else {

		$this->pages_model->update_settings();

					// Set message
		$this->session->set_flashdata('settings_updated', 'Settings details has been updated');

		redirect('dashboard/settings');


		}

	}



	public function webinquiry()
	{

		if(!$this->session->userdata('logged_in')){
				redirect('users/login');
		}


		$data['webinquiry'] = $this->pages_model->get_webinquiry();
		$data['title'] = 'Web Inquiry';

		$this->load->view('dashboardtemplate/header');
		$this->load->view('dashboardtemplate/sidebar');
		$this->load->view('dashboard/webinquiry', $data); 
		$this->load->view('dashboardtemplate/footer'); 

	}


	public function webinquiryview($id)
	{

		if(!$this->session->userdata('logged_in')){
				redirect('users/login');
		}


		$data['webinquiry'] = $this->pages_model->get_webinquiry($id);
		$data['title'] = 'Web Inquiry';

		$this->load->view('dashboardtemplate/header');
		$this->load->view('dashboardtemplate/sidebar');
		$this->load->view('dashboard/webinquiryview', $data); 
		$this->load->view('dashboardtemplate/footer'); 

	}




}