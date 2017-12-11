<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insert($t1,$m1,$t2,$m2,$l,$ng,$ss,$dtai,$ngdk,$gv)
	{
		$dulieu = array('hoten1' =>$t1 ,'mssv1'=> $m1,'hoten2' =>$t2 ,'mssv2'=> $m2,'lop'=>$l,'nganh'=>$ng,'siso'=>$ss,'tendetai'=>$dtai,'ngaydangky'=>$ngdk,'magv'=>$gv);
		$this->db->insert('nhom', $dulieu);
		return $this->db->insert_id();
	}
	public function insertDate($tgbd,$tgkt,$tgbdlam,$tgktlam)
	{
		$dulieu1 = array('TGBatDauDK' =>$tgbd ,'TGKetThucDK'=> $tgkt,'TGBatDauLVTN' =>$tgbdlam ,'TGKetThucLVTN'=> $tgktlam);
		$this->db->insert('dotdk', $dulieu1);
		return $this->db->insert_id();
	}
	public function insertgv($tengv,$hocham,$hocvi,$idloaigv)
	{
		$dulieu2 = array('tengv' =>$tengv ,'hocham'=> $hocham,'hocvi' =>$hocvi ,'idloaigv'=> $idloaigv);
		$this->db->insert('giangvien', $dulieu2);
		return $this->db->insert_id();
	}

}

/* End of file addData_model.php */
/* Location: ./application/models/addData_model.php */