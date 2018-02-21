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
		$this->load->model('Headline');
		$this->load->model('Functional');
	}
	public function index()
	{
		$result['post'] = $this->Functional->find('pages','on_page','profil')->result();
		$data['headline']= $this->Headline->getHeadline();
		$this->load->view('front/header',$data);
		$this->load->view('front/profil',$result);
		$this->load->view('front/footer');
	}
	public function visimisi()
	{
		$result['post'] = $this->Functional->find('pages','on_page','visi')->result();
		$data['headline']= $this->Headline->getHeadline();
		$this->load->view('front/header',$data);
		$this->load->view('front/visimisi',$result);
		$this->load->view('front/footer');
		// echo "string";
	}
	public function struktur()
	{
		$result['post'] = $this->Functional->find('pages','on_page','struktur')->result();
		$data['headline']= $this->Headline->getHeadline();
		$this->load->view('front/header',$data);
		$this->load->view('front/struktur',$result);
		$this->load->view('front/footer');
		// echo "string";
	}
	public function prestasi()
	{
		$result['prestasi'] = $this->Prestasi->findAll()->result();
		$data['headline']= $this->Headline->getHeadline();
		$this->load->view('front/header',$data);	
		$this->load->view('front/prestasi',$result);
		$this->load->view('front/footer');
		// echo "string";
	}
}
