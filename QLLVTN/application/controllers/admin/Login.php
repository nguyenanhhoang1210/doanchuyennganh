<?php 
	class Login extends MY_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Thanhvien_model');
		}
		function index()
		{
			$data = array();			
			 if($this->input->post())
			{
				//goi den ham kiem tra dang nhap check_login
				$this->form_validation->set_rules('login','login','callback_check_login');	
				if($this->form_validation->run())
				{
					$taikhoan = $this->input->post('tai_khoan');
					//neu form da chay dung thi se tao 1 session cho admin
					$this->session->set_userdata('login',$taikhoan);
					redirect(admin_url('Admin_c/index'));
				}		
		
			}
			$this->load->view('admin/Login',$data);
		}
		//so sanh tai khoan trong csdl,tra ve gia tri true false 
		function check_login()
		{
			$taikhoan = $this->input->post('tai_khoan');
			$matkhau = $this->input->post('mat_khau');
			$where = array('tai_khoan'=>$taikhoan,'mat_khau'=>$matkhau);
			if($this->Thanhvien_model->check_exists($where))
			{
				return true;
			}
			else
			{
				// tao 1 message thong bao dang nhap ko thanh cong
				$this->form_validation->set_message(__FUNCTION__,'Không đăng nhập thành công');
				return false;
			}
		}
		
	}
?>