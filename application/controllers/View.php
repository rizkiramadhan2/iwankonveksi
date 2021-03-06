<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {
	function __construct()
{
    parent::__construct();
  //  $this->load->database();
    $this->load->model('Model');
    setlocale(LC_TIME, "id_ID");
date_default_timezone_set('Asia/Jakarta');
    $date=date('Y-m-d H:i:s');
    $date2=date('Y-m-d');
 	$result= $this->Model->read('visitor', "waktu LIKE '%$date2%'");
   	$this->session->set_flashdata('visitor', count($result));
    if(!$this->session->tempdata('user')){
    	$this->Model->create('visitor',$arrayName = array('ip'=>$_SERVER['REMOTE_ADDR'],'ua'=>$_SERVER['HTTP_USER_AGENT']));
    	$q = "UPDATE visitor set waktu='".$date."' ORDER BY id DESC LIMIT 1 " ;
    	$this->db->query($q);
    	$_SESSION['user'] = true;
		$this->session->mark_as_temp('user', 600);
    }
   
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
	public function index()
	{
		$this->load->view('home');
	}


	//MENU
	public function v_desain($table){
		//$this->load->model('Model');
		$result = $this->Model->read($table);
		$arrayName = array('data' => $result );
		$this->load->view('menu/desain',$arrayName);
	}
	public function v_modal_desain($table,$id){
		//$this->load->model('Model');
		$result = $this->Model->read($table,$arrayName = array('id_photo' => $id ));
		$arrayName = array('data' => $result );
		$this->load->view('menu/desain_img',$arrayName);
	}
	public function v_desain_more($table,$length,$offset){
		//$this->load->model('Model');
		$result = $this->Model->read_limit($table,$length,$offset);
		$arrayName = array('data' => $result );
		$this->load->view('menu/desain_img_main',$arrayName);
	}
	public function v_jenisbahan($table=""){
		//$this->load->model('Model');
		if (empty($table)) {
			$result= $this->Model->read('db_jenis_bahan_baju');	
			//$first_load= array('first_load' => true );		
		}else{
			$result= $this->Model->read($table);
			//$first_load= array('first_load' => false);
		}
			
		$arrayName = array('data' => $result );
		//$array = array_merge($first_load,$arrayName);
			$this->load->view('menu/jenisbahan',$arrayName);
	}

	//PRODUK
	public function v_produk($id_produk){
		//$this->load->model('Model');
		$result = $this->Model->read('tb_ukuran',$arrayName = array('id_photo' => $id_produk ));
		$arrayName = array('data' => $result );
		$this->load->view('produk/produk',$arrayName);
	}
	/*public function v_tabel_jenis($table){
		$this->load->model('Model');
		$result= $this->Model->get_data($table);
		$arrayName = array('data' => $result );
		$this->load->view('menu/jenisbahan',$arrayName);
	}*/

	//JENIS BAHAN
	public function v_tampil_tabel($table){
		//$this->load->model('Model');
		$result= $this->Model->read($table);
		$arrayName = array('data' => $result );
		$this->load->view('menu/tabel',$arrayName);
	}

	//GALERI
	public function v_galeri(){
		$this->load->view('galeri/galeri');
	}

	//PEMESANAN
	public function v_pemesanan(){
		$this->load->view('pemesanan/pemesanan');
	}

	//KONTAK
	public function v_kontak(){
		$this->load->view('kontak/kontak');
	}

	//Visitor
	public function visitor(){
		$date=date('Y-m-d');
 		$result= $this->Model->read('visitor', "waktu LIKE '%$date%'");
   		$this->load->view('visitor',$arrayName = array('total' => count($result) ));
	}

	//View baru
	public function v_home(){
		$this->load->view('new/index');
	}
	public function v_work(){
		$this->load->view('new/work');
	}
	public function v_about(){
		$this->load->view('new/about');
	}
	public function v_blog(){
		$this->load->view('new/blog');
	}
	public function v_contact(){
		$this->load->view('new/contact');
	}
	public function v_work_single(){
		$this->load->view('new/work-single');
	}
}
