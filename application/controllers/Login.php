<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Login extends CI_Controller {
    
public function index() 
{
          $this->form_validation->set_rules('username', 'Username', 'required',
                                            array('required' => '%s Harus diisi'));
          $this->form_validation->set_rules('password', 'Password', 'required', 
                                            array('required'=> '%s Harus diisi'));
                                            
          if ($this->form_validation->run()){
              $username = $this->input->post('username');
              $password = $this->input->post('password');
              $this->slogin->login($username, $password);
          }
                $data = array( 'title' => 'Silakan Login terlebih dahulu' );
                $this->load->view('login/list', $data, FALSE);
                
}
public function logout()
{
    $this->slogin->logout();
}
        
}
        
    /* End of file  Login.php */
        
                            