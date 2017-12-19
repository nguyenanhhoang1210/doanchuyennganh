<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showtheodetai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->model('showData_model');
    	$dulieu=$this->showData_model->gethuonglvtn();
    	$dulieu=array('dulieutucontroller' => $dulieu);
		$this->load->view('thongtindangky_view',$dulieu);
		
	}
	public function xuattheodetai()
	{
		$madt=$this->input->post('chondetai');
		$this->load->model('showData_model');
		if($this->showData_model->gettheodetai($madt))
		{
			$dulieu1=$this->showData_model->gettheodetai($madt);
    		$dulieu1=array('dulieutucontroller1' => $dulieu1);
			$this->load->view('showthongtindangky_view',$dulieu1);
		}
		else
		{
			echo "Khong tim thay";
		}
	}

}

/* End of file xuatdssv.php */
/* Location: ./application/controllers/xuatdssv.php */