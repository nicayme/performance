<?php
class Pages extends CI_Controller {

     public function __construct() {
        parent::__construct();

    }


 


    public function view($page = 'home')
	{

        $data['about'] = $this->pages_model->get_about();
        $data['projects'] = $this->pages_model->get_projects();
        $data['services'] = $this->pages_model->get_services();
        $data['testimonials'] = $this->pages_model->get_testimonials();
        $data['careers'] = $this->pages_model->get_careers();
        $data['systemsettings'] = $this->pages_model->get_systemsettings();
        $data['sliderimages'] = $this->pages_model->get_sliderimages();
        

        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                //show_404();
                redirect('pages/error404.php');

           

        }

        $data['title'] = ucfirst($page); // Capitalize the first letter


        
        


        if($page == 'home'){
            $this->load->view('template/header', $data);
            $this->load->view('template/carousel', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('template/footer', $data);

        } else {
        
           
		


            $this->load->view('template/header', $data);
            $this->load->view('pages/'.$page, $data);
         
            $this->load->view('template/footer', $data);
             
        }


      
    
	}


    public function contact()
    {	
		$this->load->library('email');
	
         $data['systemsettings'] = $this->pages_model->get_systemsettings();

        $this->form_validation->set_rules('clientname', 'Client Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('contactno', 'Contact No.', 'trim|required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if($this->form_validation->run() === FALSE){

            $this->load->view('template/header', $data);
            $this->load->view('pages/contact', $data);
            $this->load->view('template/footer', $data);
		

        } else {
			
		$form_response = $this->input->post('g-recaptcha-response');
		$url="https://www.google.com/recaptcha/api/siteverify";
		$sitekey="6Ld9cD4UAAAAAKvDQdxjIOMKUTYBVkeRKe4tQNPO";
		$response=file_get_contents($url."?secret=".$sitekey."&response=".$form_response."&remoteip=".$_SERVER["REMOTE_ADDR"]);
		$data =json_decode($response);
		
		if (isset($data->success) && $data->success=="true")
		{
			// echo "Successfully Passed Through Captcha";


        $this->pages_model->add_contact();


        $this->session->set_flashdata('contact_saved', 'Message successfully sent! Thank you for your inquiry! We will get back to you as soon as possible.');

        redirect('pages/contact');
		
		}
		else
		{
			echo "adasdsads";
			$this->session->set_flashdata('contact_notsaved', 'Please fill the captcha!');

			redirect('pages/contact');
			
		}
		

        }

    }
	
	public function authentication()
    {
		// $form_response = $this->input->post('g-recaptcha-response');
		// $url="https://www.google.com/recaptcha/api/siteverify";
		// $sitekey="6Lc4iD4UAAAAAIkpfhjWFk65BrtSKHbtYSWR0Avh";
		// $response=file_get_contents($url."?secret=".$sitekey."&response=".$form_response."&remoteip=".$_SERVER["REMOTE_ADDR"]);
		// $data =json_decode($response);
		
		// if (isset($data->success) && $data->success=="true")
		// {
			// echo "Successfully Passed Through Captcha";
		// }
		// else
		// {
			// echo "Pleas Fill Captcha";
		// }
		
		
	}



  






}
