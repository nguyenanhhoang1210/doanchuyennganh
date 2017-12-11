<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addgv extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('showData_model');
    	$dulieu1=$this->showData_model->getloaigv();
    	$dulieu1=array('dulieu' => $dulieu1);
	   	$this->load->view('Addgv_view',$dulieu1);
	}
	public function insertgv_controller()
	{
		$tengv= $this->input->post('tengv');
		$hocham=$this->input->post('hocham');
		$hocvi= $this->input->post('hocvi');
		$loaigv=$this->input->post('loaigv');
		$this->load->model('addData_model');
		if($this->addData_model->insertgv($tengv,$hocham,$hocvi,$loaigv))
			{

				$this->load->view('insertthanhcong1_view');
				
				 
			}
			else
			 {
			 	echo "Insert thật bại";
			 }
			 
		
	
	}

}

/* End of file addgv.php */
/* Location: ./application/controllers/addgv.php */