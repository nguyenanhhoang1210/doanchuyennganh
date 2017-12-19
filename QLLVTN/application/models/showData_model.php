<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function gv_huonglvtn()
	{
		
		$this->db->select('*');
		$this->db->from('giangvien');
		$this->db->join('huonglvtn', 'giangvien.Id = huonglvtn.Id', 'left');
		
		$ketqua=$this->db->get();
		
		$ketqua=$ketqua->result_array();
		return $ketqua;

		
		/*echo"<pre>";
		var_dump($ketqua);
		echo "</pre>";*/
	}
	public function gv_loaigv()
	{
		$this->db->select('*');
		$this->db->from('giangvien');
		$this->db->join('phanloaigv', 'giangvien.idloaigv = phanloaigv.idloaigv', 'left');
		
		$ketqua=$this->db->get();
		
		$ketqua=$ketqua->result_array();
		return $ketqua;
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
	public function deleteDate($madot)
	{	
		$this->db->where('MaDot', $madot);
		return $this->db->delete('dotdk');
	}
	public function editDate($madot)
	{
		$this->db->select('*');
		$this->db->where('MaDot', $madot);
		$dulieu=$this->db->get('dotdk');
		$dulieu=$dulieu->result_array();
		//var_dump($dulieu);
		return $dulieu;

	}
	public function updateDate($madot,$tgbd,$tgkt,$tgbdlam,$tgktlam)
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
	
	public function deletegv($magv)
	{	
		
			$this->db->where('magv', $magv);
			return $this->db->delete('giangvien');
	}
	
	public function editgv($magv)
	{
		$this->db->select('*');
		$this->db->from('giangvien');
		$this->db->join('phanloaigv', 'giangvien.idloaigv = phanloaigv.idloaigv', 'left');
		$this->db->join('huonglvtn', 'giangvien.Id = huonglvtn.Id', 'left');
		$this->db->where('magv', $magv);
		$dulieu4=$this->db->get();
		$dulieu4=$dulieu4->result_array();
		//var_dump($dulieu4);
		return $dulieu4;

	}
	
	public function updategv($magv,$tengv,$hocham,$hocvi,$loaigv,$huongdetai)
	{
		$dulieucanupdate1 = array(
			'magv' => $magv,
			'tengv' =>$tengv,
			'hocham' =>$hocham,
			'hocvi' =>$hocvi,
			'idloaigv' =>$loaigv,
			'Id'=>$huongdetai
		);

		$this->db->where('magv', $magv);
		return $this->db->update('giangvien', $dulieucanupdate1);
	}
	public function gethuonglvtn()
	{
		$this->db->select('*');
		$dulieu6=$this->db->get('huonglvtn');
		$dulieu6=$dulieu6->result_array();
		return $dulieu6;
	}

	public function getsv($magv)
	{
		$this->db->select('*');
		$this->db->where('magv', $magv);
		$dulieu5=$this->db->get('nhom');
		$dulieu5=$dulieu5->result_array();
		return $dulieu5;
	}
	public function gettheodetai($Id)
	{
		$this->db->select('*');
		$this->db->from('giangvien');
		$this->db->join('huonglvtn', 'giangvien.Id = huonglvtn.Id', 'left');
		$this->db->where('giangvien.Id', $Id);
		$dulieu5=$this->db->get();
		$dulieu5=$dulieu5->result_array();
		return $dulieu5;
	}
	
}

/* End of file showData_model.php */
/* Location: ./application/models/showData_model.php */