<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Slogin
{
    protected $CI;      
    public function __construct()
    {
    $this->CI = get_instance();
    $this->CI->load->model('admin_model');   
    }
    public function login($username,$password)
    {
        $cek = $this->CI->admin_model->login($username,$password);
        if($cek){
            $id_user = $cek->id_user;
            $nama = $cek->nama;
            $username = $cek->username;
            $akses_level = $cek->akses_level;
// Create session
            $this->CI->session->set_userdata('id_user',$id_user);
            $this->CI->session->set_userdata('nama',$nama);
            $this->CI->session->set_userdata('username',$username);
            $this->CI->session->set_userdata('akses_level',$akses_level);
            redirect(base_url('admin'));
        } else{
            $this->CI->session->set_flashdata('salah', 'Username atau password salah');
            redirect(base_url('login'),'refresh');
        }
    }
    public function cek_login()
    {
        if($this->CI->session->userdata('username') == ""){
            $this->CI->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    public function logout()
    {
        $this->CI->session->unset_userdata('id_user');
        $this->CI->session->unset_userdata('nama');
        $this->CI->session->unset_userdata('username');
        $this->CI->session->unset_userdata('akses_level');
        redirect(base_url('login'),'refresh');
    }    
}
                                                
/* End of file Slogin.php */
    
                        