<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main extends CI_Controller {

  public function index()
  {
    $this->load->view('login_view');
  }
  public function login_validation()
  {

     
    if(isset($_POST['login'])){
      $user=$this->input->post('username');
      $pass=$this->input->post('password');
      $dulieu2=$this->login_model->login($user,$pass);
      $giatri=count($dulieu2);
      if($giatri>0)// đúng username và password
      {

        $ketqua=$this->db->get_where('thanhvien',array('username' => $user,'password'=>$pass))->row();
        if($ketqua -> level=='0')
        {
          $this->session->set_userdata(array('username' => $user,'password'=>$pass));

          redirect('index.php/hienthinhom','refresh'); 
        }
         if($ketqua -> level=='1')
        {
          $this->session->set_userdata(array('username' => $user,'password'=>$pass));
          
           redirect('index.php/themnhom','refresh');
        }
        if($ketqua -> level=='2')
        {
          $this->session->set_userdata(array('username' => $user,'password'=>$pass));
          
          redirect('index.php/addgv','refresh');
        }
        if($ketqua -> level=='3')
        {
          $this->session->set_userdata(array('username' => $user,'password'=>$pass));
          
          redirect('index.php/themngay','refresh');
        }
        if($ketqua -> level=='4')
        {
          $this->session->set_userdata(array('username' => $user,'password'=>$pass));
          
          redirect('index.php/themhuonglvtn','refresh');
        }
       
      }
      else
        {

          $this->session->set_flashdata('error', 'Tên đăng nhập hoặc mật khẩu không đúng');  
          redirect('index.php/main','refresh');
        }
    }
  }
  public function logout()  
      {  
           $this->session->unset_userdata('username');  
           redirect(base_url() . 'index.php/main');  
      }  
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */