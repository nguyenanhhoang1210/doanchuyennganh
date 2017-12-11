<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addData extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('showData_model');
    	$dulieu1=$this->showData_model->getdatabase();
    	$dulieu1=array('dulieutucontroller1' => $dulieu1);
	   	$this->load->view('addData_view',$dulieu1);
	}
	public function insertData_controller()
	{
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$ngaydangky=date('Y-m-d - H:i:s');
		$ht1= $this->input->post('hoten1');
		$mssv1=$this->input->post('mssv1');
		$ht2= $this->input->post('hoten2');
		$mssv2=$this->input->post('mssv2');	
		$lop= $this->input->post('lop');
		$nganh=$this->input->post('nganh');
		$siso= $this->input->post('siso');
		$tendetai=$this->input->post('tendetai');
		$dsgv=$this->input->post('chongv');
    	$ketqua=$this->db->get_where('dotdk')->row();
    	 if($ngaydangky > ($ketqua -> TGBatDauDK) && $ngaydangky < ($ketqua -> TGKetThucDK))
    	 { 
				$this->load->model('addData_model');
				if($this->addData_model->insert($ht1,$mssv1,$ht2,$mssv2,$lop,$nganh,$siso,$tendetai,$ngaydangky,$dsgv))
			{

				echo "Insert thành công";
				echo  $ketqua -> TGBatDauDK;
				echo $ketqua -> TGKetThucDK;
				 
			}
			else
			 {
			 	echo "Insert thật bại";
			 }
			 
		}	
		else
		{
			echo"qua han dang ky";
		 
		}
	}

}

/* End of file addData.php */
/* Location: ./application/controllers/addData.php */