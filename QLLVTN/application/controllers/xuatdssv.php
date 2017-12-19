<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class xuatdssv extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('showData_model');
    	$dulieu1=$this->showData_model->gv_huonglvtn();
    	$dulieu1=array('dulieutucontroller1' => $dulieu1);
	   	$this->load->view('xuatdssinhvien_view',$dulieu1);
	}
	public function xuatdssv()
	{
		$magv=$this->input->post('chongv');
		$this->load->model('showData_model');
		if($this->showData_model->getsv($magv))
		{
			$dulieu1=$this->showData_model->getsv($magv);
    		$dulieu1=array('dulieutucontroller' => $dulieu1);
			$this->load->view('showdssv_view',$dulieu1);
		}
		else
		{
			echo "Khong tim thay";
		}
	}

}

/* End of file xuatdssv.php */
/* Location: ./application/controllers/xuatdssv.php */