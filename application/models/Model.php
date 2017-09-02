<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {
	function __construct()
{
    parent::__construct();
  //  $this->load->database();
}

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
	/*public function delete_member($user){
		//$data = array(
      //         'status' => 'deleted'
      //      );

		//$this->db->where('username', $user);
	//	$this->db->update('member', $data);
		echo $user;

	}*/
	//insert
	public function create($table_name, $array_data){
		$this->db->insert($table_name,$array_data);
	}

	//select
	public function read($table_name, $array_data=""){
		$this->db->select('*');
		$this->db->from($table_name);
		if(!empty($array_data)){
			$this->db->where($array_data);
		}
		$query=$this->db->get();
		$result=$query->result_array();
		return $result;
	}
	public function read_limit($table_name,$length,$offset,$array_data=""){
		$this->db->select('*');
		$this->db->from($table_name);
		if(!empty($array_data)){
			$this->db->where($array_data);
		}
		$this->db->limit($length,$offset);
		$query=$this->db->get();
		$result=$query->result_array();
		return $result;
	}
	//update
	public function update($table_name, $array_data,$where=""){
		if (!empty($where)) {
			$this->db->where($where);
		}
		$this->db->update($table_name, $array_data);
	}

	//delete
	public function delete($table_name, $array_data){
		$this->db->where($array_data);
		$this->db->delete($table_name);
	}
}