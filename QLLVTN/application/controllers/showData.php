<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$this->load->model('showData_model');
    	$dulieu=$this->showData_model->getnhom();
    	$dulieu=array('dulieutucontroller' => $dulieu);
		$this->load->view('showData_view',$dulieu);

	}
	public function deleteData($id)
	{

		$this->load->model('showData_model');
		if($this->showData_model->deleteDataById($id))
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