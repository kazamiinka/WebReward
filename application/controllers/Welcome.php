<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {

		parent::__construct();
		$this->load->model('m_login');
		$this->load->helper('url_helper','form');
		if(empty($this->session->userdata('id'))) {
            $this->session->set_flashdata('flash_data', 'You dont have access!');
            redirect('login');
        }
	}

	public function index(){
		$id = $this->session->userdata('id');
		$data['admin'] = $this->m_login->getDataById($id);
		$data ['reward'] = $this->m_reward->getPelanggan();
		$this->load->view('component');
	}

	public function auth() {
		if(isset($_POST['submit'])) {
			$user = $this->input->post('username',true);
			$pass = $this->input->post('password',true);
			$auth = $this->app_model->proseslogin($user,$pass);
			$hasil = count($auth);
			if ($hasil>0) {
				$alogin=$this->db->get_where('admin', array('user' => $user, 'pass' => $pass))->row();
			}
			else {
				redirect('Welcome/login');
			}
		}
	}

	public function logout(){
		$data=['id', 'username'];
		$this->session->unset_userdata($data);

		redirect('login');
	} 
}
?>