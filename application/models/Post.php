<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -'posting'
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function insert($value)
	{
		$this->db->insert('posting',$value);
	}
	public function update($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('posting',$data);
	}
	public function find($query='')
	{
		$this->db->like('konten', $query);
		$res = $this->db->get('posting');
		return $res;
	}
	public function findId($id)
	{
		$this->db->where('id', $id);
		$res = $this->db->get('posting');
		return $res;
	}
	public function findLike($value='')
	{
		$this->db->where('title', $value);
		$res = $this->db->get('posting');
		return $res;
	}
	public function findAll($val='')
	{
		if ($val != '') {
			$this->db->limit(4);
		}
		return $this->db->get('posting');
	}
	public function delete($value='')
	{
		$this->db->where('id',$value);
		$this->db->delete('posting');
	}
	public function get_current_page_records($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("posting");
 
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
             
            return $data;
        }
 
        return false;
    }
     
    public function get_total() 
    {
        return $this->db->count_all("posting");
     }
}