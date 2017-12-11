<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model  
 {  
     public function login($user,$pass)
     {
       $this->db->where('username', $user);
       $this->db->where('password', $pass);
       return $this->db->get('thanhvien')->row();
     }
}  


/* End of file login_model.php */
/* Location: ./application/models/login_model.php */