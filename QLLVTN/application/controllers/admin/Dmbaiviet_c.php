<?php 
	class Dmbaiviet_c extends MY_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Dmbaiviet_model');
		}
		function themdm()
		{
			$data = array();
			$data['temp'] = 'admin/themdm';
			// neu submit form mà co du lieu post len
			if($this->input->post())
			{
				$this->form_validation->set_rules('ten_dm',"Tên danh mục",'required');	
	
				//khi nhập liệu chính xác
				if($this->form_validation->run())
				{
					$tendm = $this->input->post('ten_dm');
					$dulieu = array(
						'ten_dm'=>$tendm
						);
					$this->Dmbaiviet_model->create($dulieu);
					$this->session->set_flashdata('mess','thành công');
					}		
				}
				$this->load->view('admin/index',$data);
		}	
		function xemdm()
		{
			$input = array();
			$data['list'] = $this->Dmbaiviet_model->get_list($input);
			$data['temp'] = 'admin/xemdm' ;
			$this->load->view('admin/index',$data);
		}
		function suadm()
		{
			$id = $this->uri->segment(4);
			$id = intval($id);
			$info = $this->Baiviet_model->get_info($id);
			$data = array();
			$data['info'] = $info;
		
			if($this->input->post())
			{
				$this->form_validation->set_rules('ten_dm',"Tên danh mục",'required');		
				//khi nhập liệu chính xác
				if($this->form_validation->run())
				{
					$tendm = $this->input->post('ten_dm');

					$dulieu = array(
						'ten_dm'=>$tendm
						);
					$this->Dmbaiviet_model->update($id,$dulieu);
					$this->session->set_flashdata('mess','Đã sửa thành công');
					redirect(admin_url('Dmbaiviet_c/xembai'));
				}		
			}
				$data['temp'] = 'admin/suadm';
				$this->load->view('admin/index',$data);

		}
	}	
?>