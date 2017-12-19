<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class hienthinhom extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->model('showData_model');
    	$dulieu=$this->showData_model->getnhom();
    	$dulieu=array('dulieutucontroller' => $dulieu);
		$this->load->view('hienthinhom_view',$dulieu);
	}
	public function deleteThongTinNhom($id)
	{
		$this->load->model('showData_model');
		if($this->showData_model->deleteThongTinNhom($id))
		{
			$this->load->view('thongbaoxoathanhcong');
		}
		else
		{
			echo "chua xoa duoc";
		}
	}
}

/* End of file showData.php */
/* Location: ./application/controllers/showData.php */