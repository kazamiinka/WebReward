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
		//dihide dulu utk testing
		/* $id = $this->session->userdata('id');
		$data['admin'] = $this->m_login->getDataById($id);
		$data ['reward'] = $this->m_reward->getPelanggan();
		$this->load->view('component'); */
	}

	public function logout(){
		$data=['id', 'username'];
		$this->session->unset_userdata($data);

		redirect('login');
	} 
}
?>