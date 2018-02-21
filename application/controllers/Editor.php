<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editor extends CI_Controller {

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
		$this->load->model('Post');
		$this->load->model('Functional');
		$this->load->model('Headline');
		$this->load->model('Prestasi');

	}
	public function index()
	{
		$result['pages'] = $this->Functional->count('pages')[0]['total'];
		$result['headline'] = $this->Functional->count('headline')[0]['total'];
		$result['post'] = $this->Functional->count('posting')[0]['total'];
		$result['prestasi'] = $this->Functional->count('prestasi')[0]['total'];
		$this->load->view('back/header');
		$this->load->view('back/index',$result);
		$this->load->view('back/footer');
	}
	public function edit($value='')
	{
		// $this->load->model('Pages');
		$result['pages'] = $this->Pages->findId($value)->result();
		$this->load->view('back/header');
		$this->load->view('back/edit',$result);
		$this->load->view('back/footer');
	}
	public function ubah($value='')
	{
		$result['pages'] = $this->Post->findId($value)->result();
		$this->load->view('back/header');
		$this->load->view('back/edit_post',$result);
		$this->load->view('back/footer');
	}
	public function list($value='')
	{	
		switch ($value) {
			case 'pages':
				$result['pages'] = $this->Pages->findAll()->result();
				$result['dropdown'] = $this->Functional->get_enum_values('pages','type');
				$this->load->view('back/header');
				$this->load->view('back/pages',$result);
				$this->load->view('back/footer');
				break;
			case 'post':
				$result['pages'] = $this->Post->findAll()->result();
				$result['dropdown'] = $this->Functional->get_enum_values('posting','category');
				$this->load->view('back/header');
				$this->load->view('back/post',$result);
				$this->load->view('back/footer');
				break;
			
			default:
				$result['pages'] = $this->Pages->findAll()->result();
				$result['dropdown'] = $this->Functional->get_enum_values('pages','type');
				$this->load->view('back/header');
				// $this->load->view('back/pages',$result);
				$this->load->view('back/footer');
				break;
		}
		
	}
	public function hapus($value='',$id)
	{
		switch ($value) {
			case 'pages':
				$this->Pages->delete($id);
				redirect('Editor/list/post','refresh');
				break;
			case 'post':
				$this->Post->delete($id);
				redirect('Editor/list/post','refresh');
				break;
			case 'headlines':
				// echo $id;die();
				$this->Headline->delete($id);
				redirect('Editor/headlines','refresh');
				break;
			default:
				redirect('Editor','refresh');
				break;
		}
	}
	public function footer($value='')
	{
		switch ($value) {
			case 'edit':
				$data = array(
					'alamat' => $this->input->post('alamat'),
					'telpon' => $this->input->post('telepon'),
					'email' => $this->input->post('email'),
					'info' => $this->input->post('info'),
					'facebook' => $this->input->post('facebook'),
					'twitter' => $this->input->post('twitter')
					 );
				$this->Functional->updateAll('footer',$data);
				redirect('Editor/footer','refresh');
				break;
			default:
				$result['data'] = $this->Functional->findAll('footer')->result_array();
				$this->load->view('back/header');
				$this->load->view('back/setting',$result);
				$this->load->view('back/footer');
				break;
		}
	}
	public function post_insert($value='')
	{
		$data = array(
			'title' => $this->input->post('title') ,
			'konten' => $this->input->post('post_content') ,
			'category' => $this->input->post('type')
			 );
		$this->Post->insert($data);
		redirect('Editor/list/post','refresh');
	}
	public function save($value='')
	{
		$data = array('page' => $value,'konten'=>$this->input->post('post_content') );
		// $this->load->model('Pages');
		$this->Pages->insert($data);
		// print_r($data);
		redirect('Editor/list','refresh');
	}
	public function add()
	{
		$data = array('page' => $this->input->post('page'),'type'=>$this->input->post('type'));
		// $this->load->model('Pages');
		$this->Pages->insert($data);
		// print_r($data);
		redirect('Editor/list','refresh');
	}
	public function update($value,$id)
	{
		switch ($value) {
			case 'post':
				$data = array('konten'=>$this->input->post('post_content'),'title'=>$this->input->post('title') );
				$this->Post->update($id,$data);
				redirect('Editor/list/post','refresh');
				break;
			case 'pages':
				$data = array('konten'=>$this->input->post('post_content') );
				$this->Pages->update($id,$data);
				redirect('Editor/list/pages','refresh');
				break;
			default:
				redirect('Editor','refresh');
				break;
		}
		
	}
	public function headlines($value='',$id='')
	{
		switch ($value) {
			case '':
				$result['pages'] = $this->Headline->findAll()->result();
				// $result['dropdown'] = $this->Functional->get_enum_values('pages','type');
				$this->load->view('back/header');
				$this->load->view('back/headlines',$result);
				$this->load->view('back/footer');
				break;
			case 'insert':
				$data = array('text' => $this->input->post('text'),'link'=>$this->input->post('link') );
				$this->Headline->insert($data);
				redirect('Editor/headlines','refresh');
				break;
			case 'active':
				$this->Headline->default();
				$this->Headline->update($id,array('status'=>1));
				redirect('Editor/headlines','refresh');
				break;
			case 'deactive':
				$this->Headline->default();
				$this->Headline->update($id,array('status'=>0));
				redirect('Editor/headlines','refresh');
				break;
			default:
				# code...
				break;
		}
	}
	public function prestasi($value='',$id='')
	{
		switch ($value) {
			case '':
				$result['pages'] = $this->Prestasi->findAll()->result();
				$result['dropdown'] = $this->Functional->get_enum_values('prestasi','tingkat');
				$this->load->view('back/header');
				$this->load->view('back/prestasi',$result);
				$this->load->view('back/footer');
				break;
			case 'insert':
				$data = array('nama' => $this->input->post('nama'),'prestasi'=>$this->input->post('prestasi'),'bidang'=>$this->input->post('bidang'),'tingkat'=>$this->input->post('tingkat'),'tahun'=>$this->input->post('tahun') );
				$this->Prestasi->insert($data);
				redirect('Editor/prestasi','refresh');
				break;
			default:
				# code...
				break;
		}
	}
	public function tinymce_upload() {
        $config['upload_path'] = 'assets/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 0;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('file')) {
            $this->output->set_header('HTTP/1.0 500 Server Error');
            exit;
        } else {
            $file = $this->upload->data();
            $this->output
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode(['location' => base_url().'assets/upload/'.$file['file_name']]))
                ->_display();
            exit;
        }
    }
}
