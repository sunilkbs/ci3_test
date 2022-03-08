<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	
	public function __construct()
	{

	parent::__construct();
	
	$this->load->database();
	
	$this->load->model('User_model');

	$this->config->load('config');

	$this->load->library('session');

    $this->load->library('email');

    $this->load->library('form_validation');
$this->load->helper('url');

	}

	public function index()
	{


		$base['base_url'] = $this->config->item('base_url');
		
		$this->load->view('register',$base);
	}



	public function savedata()
	{
		   $this->load->helper('url');

		    $base['base_url'] = $this->config->item('base_url');
		    
		    $data['firstName']= $this->input->post('firstName');
			$data['lastName']= $this->input->post('lastName');
			$data['email']= $this->input->post('email');
			
			$data['password']=md5($this->input->post('password'));

			$data['status']=0;

			$response=$this->User_model->saverecords($data);

			if($response==true){
			       
			$config = Array(
					'protocol'=> 'smtp',
					'smtp_host'=> 'smtp.googlemail.com',
					'smtp_port'=> 465,
					'smpt_user'=> 'kindlebit.php@gmail.com',
					'smtp_pass'=> 'kzeorphlptupetsxx',
					'mailtype'=>'html',
					'charset'=>'iso-8859-1',
					'wordwrap'=>TRUE
			);

		$this->load->library('email',$config);
        $from_email = "lovekushsharma786786@gmail.com";
        $this->email->from($from_email, 'Identification');
        $this->email->to("lovekushsharma786786@gmail.com");
        $this->email->subject('Send Email Codeigniter');
        $this->email->message('The email send using codeigniter library');
       
        if($this->email->send())
          echo "Congragulation Email Send Successfully.";
        else
          echo "You have encountered an error";
		
		echo "Record added Successfully";

			}
			else{
					echo "Insert error !";
			}
		
		}

		public function login(){

		$base['base_url'] = $this->config->item('base_url');
		
		$this->load->view('login',$base);
		}

		public function loginLogic(){
		
		$this->form_validation->set_rules('password', 'password', 'required');
	
		$this->form_validation->set_rules('email', 'email', 'required');


		$this->load->helper('url');

                if ($this->form_validation->run() == FALSE)
                {
                        redirect('../Users/login');
                }
                else
                {
                       // $this->load->view('formsuccess');
                }


		$email=$this->input->post('email');

		$password=md5($this->input->post('password'));

	    $sql="Select * from users where email='$email' AND password='$password'";    
	    $query = $this->db->query($sql);
	    if($query->num_rows()>0){
	    	echo "login Successfully";
	    }else{
	    	echo "Login Failed";
	    }

		}
	
}

