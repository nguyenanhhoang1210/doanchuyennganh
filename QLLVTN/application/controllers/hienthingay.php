<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class hienthingay extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$this->load->model('showData_model');
    	$dulieu=$this->showData_model->getngay();//lấy dữ liệu từ database
    	$dulieu=array('dulieutucontroller' => $dulieu);
		$this->load->view('hienthingay_view',$dulieu);//gửi dữ liệu đến view

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
		$ketqua=$this->showData_model->editDate($madot);
		$ketqua=array('mangdulieu' => $ketqua);

		$this->load->view('suangay_view', $ketqua);

	}
	public function updateDate()
	{
		$madot=$this->input->post('madot');
		$ngaybddk=$this->input->post('tgbd');
		$ngayktdk=$this->input->post('tgkt');
		$ngaybdlam=$this->input->post('tgbdlam');
		$ngayktlam=$this->input->post('tgktlam');

		$this->load->model('showData_model');
		if($this->showData_model->updateDate($madot,$ngaybddk,$ngayktdk,$ngaybdlam,$ngayktlam))
		{
			$this->load->view('insertthanhcong_view');
		}
		else
		{
			$this->session->set_flashdata('error_suangay', 'Cập nhật không thành công');
			redirect('index.php/hienthingay','refresh');
		}
	}

}

/* End of file showData.php */
/* Location: ./application/controllers/showData.php */