<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class themhuonglvtn extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('themhuonglvtn_view');
	}
	public function inserthuonglvtn()
	{
	 	
	 	$ten=$this->input->post('chonhuong');
	 	$this->load->model('addData_model');
	 	if($this->addData_model->inserthuonglvtn($ten))
		{
			echo"Thêm thành công";
		}
		else
		 {
		 	echo "Insert thật bại";
		 }		 
	 }

}

/* End of file themhuonglvtn.php */
/* Location: ./application/controllers/themhuonglvtn.php */