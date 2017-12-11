<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showDate extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$this->load->model('showData_model');
    	$dulieu=$this->showData_model->getngay();
    	$dulieu=array('dulieutucontroller' => $dulieu);
		$this->load->view('showDate_view',$dulieu);

	}
	public function deleteDate($madot)
	{

		$this->load->model('showData_model');
		if($this->showData_model->deleteDate($madot))
		{
			$this->load->view('thongbaoxoathanhcong1');
		}
		else
		{
			echo "chua xoa duoc";
		}
	}
	public function editDate($madot)
	{
		$this->load->model('showData_model');
		$ketqua=$this->showData_model->editById($madot);
		$ketqua=array('mangdulieu' => $ketqua);

		$this->load->view('editDate_view', $ketqua);

	}
	public function updateDate()
	{
		$madot=$this->input->post('madot');
		$ngaybddk=$this->input->post('tgbd');
		$ngayktdk=$this->input->post('tgkt');
		$ngaybdlam=$this->input->post('tgbdlam');
		$ngayktlam=$this->input->post('tgktlam');

		$this->load->model('showData_model');
		if($this->showData_model->updateDateById($madot,$ngaybddk,$ngayktdk,$ngaybdlam,$ngayktlam))
		{
			$this->load->view('insertthanhcong_view');
		}
		else
		{
			echo"khong thanh cong";
		}
	}

}

/* End of file showData.php */
/* Location: ./application/controllers/showData.php */