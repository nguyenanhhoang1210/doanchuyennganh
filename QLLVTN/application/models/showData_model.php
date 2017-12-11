<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getdatabase()
	{
		$this->db->select('*');
		$ketqua=$this->db->get('giangvien');
		$ketqua=$ketqua->result_array();
		return $ketqua;

		
		/*echo"<pre>";
		var_dump($ketqua);
		echo "</pre>";*/
	}
	public function getnhom()
	{
		$this->db->select('*');
		$this->db->from('nhom');
		$this->db->join('giangvien', 'nhom.magv = giangvien.magv', 'left');
		$ketqua1=$this->db->get();

		$ketqua1=$ketqua1->result_array();

		return $ketqua1;
	}
	public function getngay()
	{
		$this->db->select('*');
		$this->db->from('dotdk');
		$ketqua2=$this->db->get();
		$ketqua2=$ketqua2->result_array();
		return $ketqua2;
	}
	public function getloaigv()
	{
		
		$this->db->select('*');
		$ketqua3=$this->db->get('phanloaigv');
		$ketqua3=$ketqua3->result_array();
		return $ketqua3;
	}
	public function deleteDataById($manhom)
	{	
		
			$this->db->join('giangvien', 'nhom.magv = giangvien.magv', 'left');
		$this->db->where('manhom', $manhom);

		return $this->db->delete('nhom');	
	}
	public function deleteDate($madot)
	{	
		
			$this->db->where('MaDot', $madot);
			return $this->db->delete('dotdk');
	}
	public function deletegv($magv)
	{	
		
			$this->db->where('magv', $magv);
			return $this->db->delete('giangvien');
	}
	public function editById($madot)
	{
		$this->db->select('*');
		$this->db->where('MaDot', $madot);
		$dulieu=$this->db->get('dotdk');
		$dulieu=$dulieu->result_array();
		var_dump($dulieu);
		return $dulieu;

	}
	public function editByIdgv($magv)
	{
		$this->db->select('*');
		$this->db->where('magv', $magv);
		$dulieu4=$this->db->get('giangvien');
		$dulieu4=$dulieu4->result_array();
		var_dump($dulieu4);
		return $dulieu4;

	}
	public function updateDateById($madot,$tgbd,$tgkt,$tgbdlam,$tgktlam)
	{
		$dulieucanupdate = array(
			'MaDot' => $madot,
			'TGBatDauDK' =>$tgbd,
			'TGKetThucDK' =>$tgkt,
			'TGBatDauLVTN' =>$tgbdlam,
			'TGKetThucLVTN' =>$tgktlam
		);

		$this->db->where('MaDot', $madot);
		return $this->db->update('dotdk', $dulieucanupdate);
	}
	public function updategvById($magv,$tengv,$hocham,$hocvi,$loaigv)
	{
		$dulieucanupdate1 = array(
			'magv' => $magv,
			'tengv' =>$tengv,
			'hocham' =>$hocham,
			'hocvi' =>$hocvi,
			'idloaigv' =>$loaigv
		);

		$this->db->where('magv', $magv);
		return $this->db->update('giangvien', $dulieucanupdate1);
	}
}

/* End of file showData_model.php */
/* Location: ./application/models/showData_model.php */