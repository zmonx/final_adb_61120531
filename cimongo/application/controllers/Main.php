<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {


	function __construct()
    {
		parent::__construct();
		$this->load->model('category_model');
    }
	
	



	public function index()
	{
		$data['category'] = $this->category_model->findAll();
		$this->load->view('layout/index');
		$this->load->view('layout/left-menu',$data);
		$this->load->view('layout/content');
		$this->load->view('layout/footer');
	}
}
