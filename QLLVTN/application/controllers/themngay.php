<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class themngay extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
		$this->load->view('themngay_view');
	}
	public function addDate()
	{
		$tgbd= $this->input->post('tgbd');
		$tgkt=$this->input->post('tgkt');
		$tgbdlam= $this->input->post('tgbdlam');
		$tgktlam=$this->input->post('tgktlam');	
		$this->load->model('addData_model');
		if($this->addData_model->insertDate($tgbd,$tgkt,$tgbdlam,$tgktlam))
		{
			$this->load->view('insertthanhcong_view');
		}
		else
		 {
		 	echo "Insert thật bại";
		 }		 
	}

}

/* End of file themngay.php */
/* Location: ./application/controllers/themngay.php */