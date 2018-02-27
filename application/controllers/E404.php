<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E404 extends CI_Controller {

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

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Post');
		$this->load->model('Pages');
		$this->load->model('Headline');
		$this->load->model('Functional');
		$this->load->model('Ekstrakulikuler');
		$this->load->model('Paralax');
		$this->load->library('pagination');
         
        // load URL helper
        $this->load->helper('url');
		// print_r($asd->num_rows());die();
	}

	public function index()
	{
		$data['menu'] = $this->Functional->get_enum_values('pages','on_page');
		$data['headline']= $this->Headline->getHeadline();
		$data['footer'] = $this->Functional->findAll('footer')->result_array();
		$this->load->view('front/header',$data);
		// $this->load->view('front/404');
		$this->load->view('construcion');
		$this->load->view('front/footer',$data);
	}
}
