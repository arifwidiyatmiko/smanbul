<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Functional extends CI_Model {

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

	public function insert($table,$value)
	{
		$this->db->insert($table,$value);
	}
	public function update($table,$id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update($table,$data);
	}
	public function updateAll($table,$data)
	{
		$this->db->update($table,$data);
	}
	public function find($table,$column,$query='')
	{
		$this->db->like($column, $query);
		$res = $this->db->get($table);
		return $res;
	}
	public function findId($table,$id)
	{
		$this->db->where('id', $id);
		$res = $this->db->get($table);
		return $res;
	}
	public function findAll($table)
	{
		return $this->db->get($table);
	}
	public function get_enum_values( $table, $field )
		{
		    $type = $this->db->query( "SHOW COLUMNS FROM {$table} WHERE Field = '{$field}'" )->row( 0 )->Type;
		    preg_match("/^enum\(\'(.*)\'\)$/", $type, $matches);
		    $enum = explode("','", $matches[1]);
		    return $enum;
		}
	public function count($table='')
	{
		$this->db->select('COUNT(id) as total');
		return $this->db->get($table)->result_array();
	}
	public function login($value='')
	{
		$this->db->where($value);
		return $this->db->get('editor');
	}
}