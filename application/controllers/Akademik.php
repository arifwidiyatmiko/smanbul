<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akademik extends CI_Controller {

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
	protected $data = [];
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Post');
		$this->load->model('Headline');
		$this->load->model('Functional');
		$this->load->model('Sarana');
		// print_r($asd->num_rows());die();
	}
	public function index()
	{
		$data['post'] = $this->Post->findAll();
		$data['post_filter'] = $this->Functional->get_enum_values('posting','category');
		$data['headline']= $this->Headline->getHeadline();
		$data['footer'] = $this->Functional->findAll('footer')->result_array();
		$this->load->view('front/header',$data);
		$this->load->view('front/index',$data);
		$this->load->view('front/footer',$data);
	}
	public function sarana($value='')
	{
		$data['post'] = $this->Sarana->findAll()->result();
		$data['headline']= $this->Headline->getHeadline();
		$data['footer'] = $this->Functional->findAll('footer')->result_array();
		$this->load->view('front/header',$data);
		$this->load->view('front/sarana',$data);
		$this->load->view('front/footer',$data);
	}
	
}
