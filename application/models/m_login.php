<?php
class M_login extends CI_Model
{ 
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
    public function validate_user($data) {
        $this->db->where('username', $data['username']);
        $this->db->where('password', md5($data['password']));
        return $this->db->get('admin')->row();
    }
    
    public function getDataById($id = FALSE) {
        $query = $this->db->get_where('admin', array('id' => $id));
        return $query->row_array(); 
    }
 
    function __destruct() {
        $this->db->close();
    }
}
?>