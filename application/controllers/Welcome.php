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
	protected $data = [];
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Post');
		$this->load->model('Headline');
		$this->load->model('Functional');
		
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
	public function sign()
	{
		$this->load->view('back/login');
	}
	public function post($value='')
	{
		$value = urldecode($value);
		$data['post'] = $this->Post->findLike($value);
		// print_r($data['post']->num_rows());die();
		// $data['post_filter'] = $this->Functional->get_enum_values('posting','category');
		$data['headline']= $this->Headline->getHeadline();
		$data['footer'] = $this->Functional->findAll('footer')->result_array();
		$this->load->view('front/header',$data);
		$this->load->view('front/post',$data);
		$this->load->view('front/footer',$data);
	}
	public function auth()
	{
		$data = array('username' => $this->input->post('username'),'password' => md5($this->input->post('password')));
		// print_r($data);die();
		$res = $this->Functional->login($data);
		// print_r($res->num_rows());die();
		if ($res->num_rows() == 0) {
			$this->session->set_flashdata('err','Invalid Login username or Password');
			redirect('Welcome/sign');
		}else{
			// echo "string";die();
			$array = array(
				'key' => md5($this->input->post('password')),
				'value' => $res->result()
			);
			$this->session->set_userdata('auth',$array );
			redirect('Editor','refresh');
		}
	}
}
