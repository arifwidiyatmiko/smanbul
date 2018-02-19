<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

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
		$this->load->model('Pages');
		$this->load->model('Prestasi');
	}
	public function index()
	{
		$result['post'] = $this->Pages->find('Profil')->result();
		$this->load->view('front/header');
		$this->load->view('front/profil',$result);
		$this->load->view('front/footer');
	}
	public function visimisi()
	{
		$this->load->view('front/header');
		$this->load->view('front/visimisi');
		$this->load->view('front/footer');
		// echo "string";
	}
	public function struktur()
	{
		$this->load->view('front/header');
		$this->load->view('front/struktur');
		$this->load->view('front/footer');
		// echo "string";
	}
	public function prestasi()
	{
		$result['prestasi'] = $this->Prestasi->findAll()->result();
		$this->load->view('front/header');
		$this->load->view('front/prestasi',$result);
		$this->load->view('front/footer');
		// echo "string";
	}
}
