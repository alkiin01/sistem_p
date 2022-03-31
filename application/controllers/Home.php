<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Auth extends CI_Controller {

public function index()
{
    $this->load->view('home/layout/list');
    
}
    public function login(){
        $data = [];
        $this->load->view('login/list', $data, FALSE);
        
    }    
}
        
    /* End of file  Home.php */
        
                            