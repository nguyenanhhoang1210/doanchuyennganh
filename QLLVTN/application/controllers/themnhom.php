<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class themnhom extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('showData_model');
    	$dulieu1=$this->showData_model->gv_huonglvtn();
    	
    	$dulieu2=$this->showData_model->gethuonglvtn();
    	$dulieu1=array('dulieutucontroller1' => $dulieu1,'dulieutucontroller2' => $dulieu2);
	   	$this->load->view('themnhom_view',$dulieu1);
	}
	public function insertData_controller()
	{	
		if(isset($_POST['insert'])){
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
		$this->load->model('ktdulieu_model');
		$dulieu1=$this->ktdulieu_model->ktdulieusv($mssv1,$ht1);
		$dulieu2=$this->ktdulieu_model->ktdulieusv($mssv2,$ht2);
		$dulieu3=$this->ktdulieu_model->ktdulieunhom($mssv1,$ht1,$mssv2,$ht2);
		$giatri1=count($dulieu1);
		$giatri2=count($dulieu2);
		$giatri3=count($dulieu3);
		if($giatri1>0 && $giatri2 >0 && $giatri3==0)
		{
	    	$ketqua=$this->db->get_where('dotdk')->row();
	    	 if($ngaydangky > ($ketqua -> TGBatDauDK) && $ngaydangky < ($ketqua -> TGKetThucDK))
	    	 { 
					$this->load->model('addData_model');
					if($this->addData_model->insert($ht1,$mssv1,$ht2,$mssv2,$lop,$nganh,$siso,$tendetai,$ngaydangky,$dsgv))
				{

					echo "Đăng ký thành công";
					
					 
				}
				else
				 {
				 	echo "Đăng ký thật bại";
				 }
				 
			}	
			else
			{
				echo"qua han dang ky";
			 
			}
		}
		else
		{
			$this->session->set_flashdata('error', 'Thông tin sai hoặc đã đăng ký vui lòng kiểm tra lại');  
          redirect('index.php/themnhom','refresh');
		}
	}
}
}

/* End of file addData.php */
/* Location: ./application/controllers/addData.php */