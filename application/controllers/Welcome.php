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
		$data['post'] = $this->Post->findAll(4);
		$data['post_filter'] = $this->Functional->get_enum_values('posting','category');
		$data['menu'] = $this->Functional->get_enum_values('pages','on_page');
		$data['slider'] = $this->Functional->findAll('slider');
		$data['headline']= $this->Headline->getHeadline();
		$data['paralax']= $this->Paralax->getHeadline();
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
		$data['menu'] = $this->Functional->get_enum_values('pages','on_page');
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
	public function Posting($value='')
	{
		// init params
        $params = array();
        $limit_per_page = 2;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $total_records = $this->Post->get_total();
     
        if ($total_records > 0)
        {
            // get current page records
            $params["results"] = $this->Post->get_current_page_records($limit_per_page, $page*$limit_per_page);
                 
            $config['base_url'] = base_url() . 'Welcome/posting';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;
             
            // custom paging configuration
            $config['num_links'] = 2;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<div class="pagination">';
            $config['full_tag_close'] = '</div>';
             
            $config['first_link'] = 'First Page';
            $config['first_tag_open'] = '<span class="firstlink">';
            $config['first_tag_close'] = '</span>';
             
            $config['last_link'] = 'Last Page';
            $config['last_tag_open'] = '<span class="lastlink">';
            $config['last_tag_close'] = '</span>';
             
            $config['next_link'] = 'Next Page';
            $config['next_tag_open'] = '<span class="nextlink">';
            $config['next_tag_close'] = '</span>';
 
            $config['prev_link'] = 'Prev Page';
            $config['prev_tag_open'] = '<span class="prevlink">';
            $config['prev_tag_close'] = '</span>';
 
            $config['cur_tag_open'] = '<span class="curlink">';
            $config['cur_tag_close'] = '</span>';
 
            $config['num_tag_open'] = '<span class="numlink">';
            $config['num_tag_close'] = '</span>';
             
            $this->pagination->initialize($config);
                 
            // build paging links
            $data["links"] = $this->pagination->create_links();
        }
        // $this->load->view('user_listing', $params);	
        $data['menu'] = $this->Functional->get_enum_values('pages','on_page');
		$data['post'] = $this->Post->findAll();
		$data['headline']= $this->Headline->getHeadline();
		$data['footer'] = $this->Functional->findAll('footer')->result_array();
		$this->load->view('front/header',$data);
		$this->load->view('front/post',$data);
		$this->load->view('front/footer',$data);
	}
	public function Ekstrakulikuler($value='')
	{
		$data['menu'] = $this->Functional->get_enum_values('pages','on_page');
		$data['post'] = $this->Ekstrakulikuler->findAll()->result();
		$data['headline']= $this->Headline->getHeadline();
		$data['footer'] = $this->Functional->findAll('footer')->result_array();
		$this->load->view('front/header',$data);
		$this->load->view('front/ekstrakulikuler',$data);
		$this->load->view('front/footer',$data);
	}
	public function view($value='')
	{
		$value = urldecode($value);
		$data['menu'] = $this->Functional->get_enum_values('pages','on_page');
		$data['post'] = $this->Pages->find($value);
		$data['headline']= $this->Headline->getHeadline();
		$data['footer'] = $this->Functional->findAll('footer')->result_array();
		$this->load->view('front/header',$data);
		$this->load->view('front/page',$data);
		$this->load->view('front/footer',$data);
	}
}
