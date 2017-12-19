<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ktdulieu_model extends CI_Model {

	 public function ktdulieusv($mssv,$hoten)
     {
       $this->db->where('mssv', $mssv);
       $this->db->where('hoten', $hoten);
       return $this->db->get('sinhvien')->row();
     }
     public function ktdulieunhom($mssv1,$hoten1,$mssv2,$hoten2)
     {
       $this->db->where('mssv1', $mssv1);
       $this->db->where('hoten1', $hoten1);
       $this->db->where('mssv2', $mssv2);
       $this->db->where('hoten2', $hoten2);
       return $this->db->get('nhom')->row();
     }

}

/* End of file ktdulieu_model.php */
/* Location: ./application/models/ktdulieu_model.php */