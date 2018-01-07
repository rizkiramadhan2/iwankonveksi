<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct()
{
    parent::__construct();
  //  $this->load->database();
    $this->load->model('Model');
   
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
		$this->load->view('admin/admin-home');
	}
	//Halaman Admin login
	public function login(){
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

					//$_SESSION['login']=$result[0]['username'];
					//$_SESSION['id_admin']=$result[0]['id_admin'];
					$this->index();
					// if($result[0]['is_admin']==1){
					// 	$_SESSION['is_admin']=true;
					// 	redirect(base_url().'admin', 'refresh');
					// }
					// else{
					// 	$_SESSION['is_admin']=false;
					// 	$this->load->view('home');
					// }
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
		//	echo "yes";
		}else{
			//$this->load->view('login');
		}
		
	}

	

}
