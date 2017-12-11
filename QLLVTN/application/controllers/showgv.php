<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showgv extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$this->load->model('showData_model');
    	$dulieu=$this->showData_model->getdatabase();
    	$dulieu=array('dulieutucontroller' => $dulieu);
		$this->load->view('showgv_view',$dulieu);

	}
	public function deletegv($magv)
	{

		$this->load->model('showData_model');
		if($this->showData_model->deletegv($magv))
		{
			$this->load->view('xoagvthanhcong');
		}
		else
		{
			echo "chua xoa duoc";
		}
	}
	public function editgv($magv)
	{
		$this->load->model('showData_model');
		$ketqua=$this->showData_model->editByIdgv($magv);
		$ketqua=array('dulieu' => $ketqua);

		$this->load->view('editgv_view', $ketqua);

	}
	public function updategv()
	{
		$magv=$this->input->post('magv');
		$tengv=$this->input->post('tengv');
		$hocham=$this->input->post('hocham');
		$hocvi=$this->input->post('hocvi');
		$loaigv=$this->input->post('loaigv');
		$this->load->model('showData_model');
		if($this->showData_model->updategvById($magv,$tengv,$hocham,$hocvi,$loaigv))
		{
			$this->load->view('insertthanhcong1_view');
		}
		else
		{
			echo"khong thanh cong";
		}
	}

}

/* End of file showData.php */
/* Location: ./application/controllers/showData.php */