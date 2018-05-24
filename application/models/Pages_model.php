<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Pages_model extends CI_Model{

		
		public function __construct()
		{
			parent::__construct();
		}


		public function get_about()
		{

			$query = $this->db->get('about');
			return $query->result_array();

		}

		
		public function get_careers(){

			$this->db->order_by('careersid');
			$query = $this->db->get('careers');
			return $query->result_array();

		}

		public function get_payments(){


			$this->db->order_by('paymentid');
			$query = $this->db->get('payments');
			return $query->result_array();

		}

		public function get_projects($id = FALSE){


			if($id === FALSE){
				$this->db->order_by('projectid','DESC');
				$this->db->where('active', 1);
				$query = $this->db->get('projects');
				return $query->result_array();
			}
			
			$query = $this->db->get_where('projects', array('projectid' => $id));
			return $query->row_array();


		}


		public function get_services($id = FALSE)
		{
		
			if($id === FALSE){
				$this->db->order_by('servicesid', 'DESC');
				//$this->db->join('categories', 'categories.id = posts.category_id');
				$query = $this->db->get('services');
				return $query->result_array();
			}
			
			$query = $this->db->get_where('services', array('servicesid' => $id));
			return $query->row_array();

		}

		public function get_testimonials($id = FALSE) 
		{


			if($id === FALSE){

				$this->db->order_by('testimonialsid');
				$this->db->where('active', 1);
				$query = $this->db->get('testimonials');
				return $query->result_array();
			}
			
			$query = $this->db->get_where('testimonials', array('testimonialsid' => $id));
			return $query->row_array();


		}

		public function get_sliderimages($id = FALSE){


			if($id === FALSE){

			$this->db->order_by('imgID');

			$query = $this->db->get('sliderimages');
			return $query->result_array();
			}
			
			$query = $this->db->get_where('sliderimages', array('imgID' => $id));
			return $query->row_array();

		}

		public function countsliderimage()
		{
			$query = $this->db->get('sliderimages');
			$this->db->count_all('sliderimages');
			return $query->result_array();

		}


		public function get_systemsettings(){


			$this->db->order_by('systemsettingsid');
			$query = $this->db->get('systemsettings');
			return $query->result_array();
		}





		// Log user in
		public function login($email, $password){
			// Validate
			$this->db->where('email', $email);
			$this->db->where('password', $password);

			$result = $this->db->get('users');

			if($result->num_rows() == 1){
				return $result->row(0)->userID;
			} else {
				return false;
			}
		}




		public function get_users($id = FALSE){
			// if($limit){
			// 	$this->db->limit($limit, $offset);
			// }
			if($id === FALSE){
				$this->db->order_by('userID', 'DESC');
				//$this->db->join('categories', 'categories.id = posts.category_id');
				$query = $this->db->get('users');
				return $query->result_array();
			}

			$query = $this->db->get_where('users', array('userID' => $id));
			return $query->row_array();
		}



		public function update_about(){
			

			$data = array(
				'adescrirption' => $this->input->post('adescrirption')
			);

			$this->db->where('aboutid', 1);
			return $this->db->update('about', $data);



		}



		public function update_careers(){
			

			$data = array(
				'careersdetails' => $this->input->post('careersdetails')
			);

			$this->db->where('careersid', 1);
			return $this->db->update('careers', $data);

		}


		public function update_payment() {
			

			$data = array(
				'paymentdetails' => $this->input->post('paymentdetails')
			);

			$this->db->where('paymentid', 1);
			return $this->db->update('payments', $data);

		}


		public function update_services() {


			 //Upload Image
			$config['upload_path'] = './assets/images/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';
			//$config['encrypt_name'] = TRUE;
			$post_image = uniqid(rand()).$_FILES['userfile']['name'];

			$config['file_name'] =$post_image;

			
			$this->load->library('upload', $config);

			if(!$this->upload->do_upload()){
				$data = array('upload_data' => $this->upload->data());
				$post_image = $_POST['imagedefault'];

			
			} else {
				$data = array('upload_data' => $this->upload->data());

				
			}

			
			

			$data = array(
				'servicesheader' => $this->input->post('servicesheader'),
				'img' => $post_image
			);

			$this->db->where('servicesid', $this->input->post('id'));
			return $this->db->update('services', $data);

			// $this->db->where('projectsid', $this->input->post('id'));
			// return $this->db->update('projects', $data);

		}

		public function add_contact() {

		
			$data = array(
				'clientname' => $this->input->post('clientname'),
				'email' => $this->input->post('email'),
				'contactno' => $this->input->post('contactno'),
				'message' => $this->input->post('message')
			);

			return $this->db->insert('contactform', $data);


		}


		public function add_projects() {

				 //Upload Image
			$config['upload_path'] = './assets/projects/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';
			//$config['encrypt_name'] = TRUE;
			$post_image = uniqid(rand()).$_FILES['userfile']['name'];

			$config['file_name'] = $post_image;

			
			$this->load->library('upload', $config);



			if(!$this->upload->do_upload()){
				$errors = array('error' => $this->upload->display_errors());
				
			} else {
				$data = array('upload_data' => $this->upload->data());
				
			}


			$data = array(
				'description' => $this->input->post('description'),
				'img' => $post_image
			);

			return $this->db->insert('projects', $data);

			

			

		

		}



		public function update_projects() {

			 //Upload Image
			$config['upload_path'] = './assets/projects/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';
			// $config['encrypt_name'] = TRUE;

			$post_image = uniqid(rand()).$_FILES['userfile']['name'];
			$post_image = str_replace(" ", "_", $post_image);
			
			$config['file_name'] = $post_image;

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload()){
				$data = array('upload_data' => $this->upload->data());
				$post_image = $_POST['imagedefault'];

			} else {
				$data = array('upload_data' => $this->upload->data());				
			}

			// if ($this->input->post('submit')) {	

			$data = array(
				'description' => $this->input->post('description'),
				'img' => $post_image
			);

			$this->db->where('projectid', $this->input->post('id'));
			return $this->db->update('projects', $data);

			// }

			// $this->db->where('projectsid', $this->input->post('id'));
			// return $this->db->update('projects', $data);

		}

		public function delete_projects() {

			$data = array(
				'active' => 0
			);

			$this->db->where('projectid', $this->input->post('projid'));
			return $this->db->update('projects', $data);

		}





		public function update_testimonials() {

			 //Upload Image
			$config['upload_path'] = './assets/images/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';
			//$config['encrypt_name'] = TRUE;
			$post_image = uniqid(rand()).$_FILES['userfile']['name'];

			$config['file_name'] = $post_image;

			
			$this->load->library('upload', $config);

			if(!$this->upload->do_upload()){
				$data = array('upload_data' => $this->upload->data());
				$post_image = $_POST['imagedefault'];

			
			} else {
				$data = array('upload_data' => $this->upload->data());

				
			}

			$data = array(
				'testimonialstext' => $this->input->post('testimonialstext'),
				'img' => $post_image

			);

			$this->db->where('testimonialsid', $this->input->post('id'));
			return $this->db->update('testimonials', $data);

			// $this->db->where('projectsid', $this->input->post('id'));
			// return $this->db->update('projects', $data);

		}

		public function add_testimonials() {

				 //Upload Image
			$config['upload_path'] = './assets/images/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';
			//$config['encrypt_name'] = TRUE;
			$post_image = uniqid(rand()).$_FILES['userfile']['name'];

			$config['file_name'] = $post_image;

			
			$this->load->library('upload', $config);



			if(!$this->upload->do_upload()){
				$errors = array('error' => $this->upload->display_errors());
				
			} else {
				$data = array('upload_data' => $this->upload->data());
				
			}


			$data = array(
				'testimonialname' => $this->input->post('testimonialname'),
				'testimonialstext' => $this->input->post('testimonialstext'),
				'img' => $post_image
			);

			return $this->db->insert('testimonials', $data);

		}


		public function delete_testimonials() {

			$data = array(
				'active' => 0
			);

			$this->db->where('testimonialsid', $this->input->post('testiid'));
			return $this->db->update('testimonials', $data);

		}



		public function update_sliderimages() {
			 //Upload Image
			$config['upload_path'] = './assets/images/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';
			//$config['encrypt_name'] = TRUE;
			$post_image = uniqid(rand()).$_FILES['userfile']['name'];

			$config['file_name'] = $post_image;

			
			$this->load->library('upload', $config);

			if(!$this->upload->do_upload()){
				$data = array('upload_data' => $this->upload->data());
				$post_image = $_POST['imagedefault'];

			
			} else {
				$data = array('upload_data' => $this->upload->data());

				
			}

			
			$data = array(
				'imgheader' => $this->input->post('imgheader'),
				'imgtext' => $this->input->post('imgtext'),
				'img' => $post_image
			);

			$this->db->where('imgID', $this->input->post('id'));
			return $this->db->update('sliderimages', $data);
		}


		public function add_sliderimages() 
		{

				 //Upload Image
			$config['upload_path'] = './assets/images/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';
			//$config['encrypt_name'] = TRUE;
			$post_image = uniqid(rand()).$_FILES['userfile']['name'];

			$config['file_name'] = $post_image;

			
			$this->load->library('upload', $config);



			if(!$this->upload->do_upload()){
				$errors = array('error' => $this->upload->display_errors());
				
			} else {
				$data = array('upload_data' => $this->upload->data());
				
			}


			$data = array(
				'imgheader' => $this->input->post('imgheader'),
				'imgtext' => $this->input->post('imgtext'),
				'img' => $post_image
			);

			return $this->db->insert('sliderimages', $data);

		}


		public function delete_sliderimages() {


			$this->db->where('imgID', $this->input->post('sliderid'));
			$this->db->delete('sliderimages');

		}


		public function update_settings(){

				 //Upload Image
			$config['upload_path'] = './assets/images/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';
			//$config['encrypt_name'] = TRUE;
			$post_image = uniqid(rand()).$_FILES['userfile']['name'];

			$config['file_name'] = $post_image;

			
			$this->load->library('upload', $config);



			if(!$this->upload->do_upload()){
				$errors = array('error' => $this->upload->display_errors());
				$post_image = $_POST['imagedefault'];
			} else {
				$data = array('upload_data' => $this->upload->data());
				
			}
			

			$data = array(
				'websitetitle' => $this->input->post('websitetitle'),
				'contactnumber' => $this->input->post('contactnumber'),
				'address' => $this->input->post('address'),
				'logo' => $post_image,
				'facebooklink' => $this->input->post('facebooklink'),
				'linkedinlink' => $this->input->post('linkedinlink'),
				'youtubelink' => $this->input->post('youtubelink'),
				'yelplink' => $this->input->post('yelplink'),
				'footer' => $this->input->post('footer'),
				'email1' => $this->input->post('email1'),
				'email2' => $this->input->post('email2'),
				'email3' => $this->input->post('email3')
			);

			$this->db->where('systemsettingsid', 1);
			return $this->db->update('systemsettings', $data);



		}




	public function get_webinquiry($id = FALSE)
		{
		
			if($id === FALSE){
				$this->db->order_by('contactid', 'DESC');
				//$this->db->join('categories', 'categories.id = posts.category_id');
				$query = $this->db->get('contactform');
				return $query->result_array();
			}
			
			$query = $this->db->get_where('contactform', array('contactid' => $id));
			return $query->row_array();

		}






	}