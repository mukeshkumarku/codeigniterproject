<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Home_Model');
		$this->load->helper('url'); 
        $this->load->library('form_validation');
    }

	
	public function index()
	{
                $this->load->view('header');
		$this->load->view('home');
	}
        public function portfolio()
	{
                $this->load->view('header');
		$this->load->view('portfolio');
	}
        public function about_us()
	{
                $this->load->view('header');
		$this->load->view('aboutUs');
	}
        public function contact_us()
	{
                $this->load->view('header');
		$this->load->view('contacUs');
	}
	public function services()
	{
                $this->load->view('header');
		$this->load->view('services');
	}
	

	public function savedata(){
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|numeric|max_length[10]|min_length[10]');
		if ($this->form_validation->run() == FALSE){
		   echo'<div class="alert alert-danger">'.validation_errors().'</div>';
		   exit;
		}
		else{
			$this->Home_Model->savedata();
		}
	}
	
	

}
