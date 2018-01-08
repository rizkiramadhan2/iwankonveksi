<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct()
{
    parent::__construct();
  //  $this->load->database();
    $this->load->model('Model');
    // $key = base64_encode($_SESSION['__ci_last_regenerate']);
   	// print_r(substr($key,0,-2));
   
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
		if (!isset($_SESSION['login'])) {
    	redirect(base_url('login'));
    	}
		$this->load->view('admin/admin-home');
	}
	//Halaman Admin login
	public function login(){
		if (isset($_SESSION['login'])) {
    	redirect(base_url('dashboard'));
    	}
   		$this->load->view('admin/login');
	}
	//login
	public function auth(){
		if(isset($_POST['submit'])){
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required|min_length[3]');
			if($this->form_validation->run()){
				$data_user = array('username' => $_POST['username'], 'password' => md5($_POST['password']) );
				$this->load->model('Model');

				//invoke read function from model
				$result = $this->Model->read('db_iwknv',$data_user);

				if (count($result)==1) {

					$_SESSION['login']=$result[0]['username'];
					//$_SESSION['id_admin']=$result[0]['id_admin'];
					redirect(base_url('dashboard'));
				}
				else{
					$invalid_login = array('data' => 'Gagal Login, Username atau Password Salah!' );
					$this->load->view('admin/login',$invalid_login);
				}

			}
			else{
				$data = array('error' => true );
				$this->load->view('login',$data);
			}
		}
		
	}

	public function list_desain(){
		//$base_key = base64_encode($_SESSION['__ci_last_regenerate']);
		$arr ="";
		//if ($key.'=='==$base_key) {
			$result = $this->Model->read('tb_desain');
			foreach ($result as $row) {
				$obj = new stdClass();
				$obj->id_photo = $row['id_photo'];
				$obj->path = $row['path'];
				$obj->label = $row['label'];
				$obj->time = $row['time'];
				$arr[]=$obj;
				
			}
			$myJSON = json_encode($arr);
			$desain= base64_encode($myJSON);
			echo $desain;
			//echo $myJSON;
			
		//}
		// else{
		// 	echo "Forbidden to access this link";
		// }
	}

	public function delete(){
		if (isset($_POST['id'])) {
			$id = array('id_photo'=> $_POST['id']);
			$src = trim($_POST['path'],base_url());
			print_r(unlink('./i'.$src));
			$this->Model->delete('tb_desain',$id);		}	
	}

	public function upload_desain(){
		if (isset($_POST['path'])) {
			$data = array('path'=>$_POST['path'],'label'=>$_POST['label']);
			$this->Model->create('tb_desain',$data);	
		}	
	}




	//logout admin
	public function logout(){
		unset($_SESSION['login']);
		//unset($_SESSION['id_aktor']);
		session_destroy();
		$this->login();
	}
	

}
