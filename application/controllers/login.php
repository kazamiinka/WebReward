<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_login', 'login');
		if(!empty($_SESSION['id']))
			redirect('Welcome');
	}

	public function index() {
		if($_POST){
			$result= $this->login->validate_user($_POST);
			if(!empty($result)){
				$data=[
					'id'=> $result->id,
					'username' => $result->username
				];

				$this->session->set_userdata($data);
				redirect('Welcome');
			}
			else {
				$this->session->set_flashdata('flash_data', 'Username or Password is wrong!');
				redirect('login');
				//tes
			}
		}
		$this->load->view('welcome_message');
	}
}
?>
