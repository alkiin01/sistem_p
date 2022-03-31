<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->slogin->cek_login();
    }
    
public function index()
{
    $gejala = $this->admin_model->total_Gejala();
    $user = $this->admin_model->total_user();
    $data = array(    'title' => 'Sistem Pakar',
                      'isi' => 'admin/list', 
                      'gejala' => $gejala->total,
                      'user' => $user->total
                    );
    $this->load->view('admin/layout/list', $data, FALSE);            
}

// public function data_user(){
//         $data = $this->admin_model->getUser();
//         echo json_encode($data);
        
//     }


//============================== Data User ==========================================

public function indexUser(){
    $user = $this->admin_model->getUser();
    $data=array('title' => 'Data User',
        'isi' => 'admin/user/list',
        'user'=> $user,
    );
    $this->load->view('admin/layout/list', $data, FALSE);           

}
    public function tambah_user(){
        $valid =$this->form_validation;
        $valid->set_rules('nama', 'Nama', 'required',
    array('required'=>'%s Harus Diisi'));
        $valid->set_rules('username','Username','required|is_unique[users.username]',
            array('required'=> '%s Harus Diisi',
                  'is_unique'=> '%s Sudah Terdaftar'));
        $valid->set_rules('password','Password','required',
            array('required'=> '%s Harus Diisi'));
        if($valid->run()===TRUE){
        $input = $this->input;
        $data = array(  'nama' => $input->post('nama'),
                        'username'=> $input->post('username'),
                        'password'=> SHA1($input->post('password')),
                        'email'=> $input->post('email'),
                        'alamat'=> $input->post('alamat'),
                        'akses_level'=>$input->post('akses_level')
                );
                $this->admin_model->setUser($data);
                $this->session->set_flashdata('sukses', 'Data telah di Simpan');
                redirect(base_url('admin/indexUser'),'refresh');
        }
}

    public function edit_user($id_user)
    {
        $input = $this->input;   
        if (strlen($input->post('password')) > 6){
        $data = array(  'id_user'=> $id_user,
                        'nama' => $input->post('nama'),
                        'username'=> $input->post('username'),
                        'password'=> SHA1($input->post('password')),
                        'email'=> $input->post('email'),
                        'alamat'=> $input->post('alamat'),
                        'akses_level'=>$input->post('akses_level')
                    );
        }else{
            $data = array(  'id_user'=> $id_user,
                            'nama' => $input->post('nama'),
                            'username'=> $input->post('username'),
                            'email'=> $input->post('email'),
                            'alamat'=> $input->post('alamat'),
                            'akses_level'=>$input->post('akses_level')
        );
    } 
        $this->admin_model->editUser($data);
        $this->session->set_flashdata('sukses', 'Data telah di Simpan');
            redirect(base_url('admin/indexUser'),'refresh');
    //     $dt['status_prs'] = 1 ;
        //     $dt['msg'] = 'Sukses' ;
        // echo json_encode($data);
    }

    public function delete($id_user){
        $data = array('id_user'=> $id_user);
		$this->admin_model->deleteUser($data);
		$this->session->set_flashdata('sukses','Data berhasil dihapus');
		$this->session->mark_as_flash('sukses');
		redirect(base_url('admin/indexUser'),'refresh');
    }
//=====================================================================================
//============================== Data Gejala ==========================================
public function data_gejala(){
    $gejala = $this->admin_model->getGejala();
    $data = array(
        'title' => 'Data gejala',
        'isi' => 'admin/gejala/list',
        'gejala'=> $gejala
    );
    $this->load->view('admin/layout/list', $data, FALSE);
    
}
public function tambah_gejala(){
    $valid =$this->form_validation;
    $valid->set_rules('nama', 'Nama Gejala', 'required',
array('required'=>'%s Harus Diisi'));
    $valid->set_rules('kode','Kode Gejala','required|is_unique[users.username]',
        array('required'=> '%s Harus Diisi',
              'is_unique'=> '%s Sudah Terdaftar'));
    if($valid->run()===TRUE){
    $input = $this->input;
    $data = array(  'kode' => $input->post('kode'),
                    'nama'=> $input->post('nama'),
                    'deskripsi'=> $input->post('deskripsi'),
                    'bobot_nilai'=>$input->post('bobot_nilai')
            );
            $this->admin_model->setGejala($data);
            $this->session->set_flashdata('sukses', 'Data telah di Simpan');
            redirect(base_url('admin/data_gejala'),'refresh');
    }
}
//=====================================================================================
//===============================Data Penyakit=========================================
public function data_penyakit(){

}

public function tambah_penyakit(){

}

public function edit_penyakit(){

}

public function hapus_penyakit(){
    
}
//=====================================================================================
}
        
    /* End of file  Admin.php */
        
                            