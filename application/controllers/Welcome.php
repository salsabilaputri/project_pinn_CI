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
			$this->load->model('perasaan_model');
			$this->load->helper('url_helper');
	}
	public function salam_sapa(){
			$this->load->helper('form');
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('nama','nama', 'required');
			$this->form_validation->set_rules('perasaan','perasaan', 'required');
	
			if($this->form_validation->run() == FALSE){
				$this->load->view('salam_sapa');
			}
			else{
				$data = $this->perasaan_model->set_penasaran();
				$this->load->view('sukses_simpan_sapa', $data);
			}
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function test_method()
	{
		echo "test_method";
	}
	public function test_method_2($params)
	{
		echo $params;
	}
	
}
