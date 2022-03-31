<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Admin_model extends CI_Model {
                        
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function total_user(){
        $this->db->select('COUNT(*) AS total');
        $this->db->from('users');
        $query = $this->db->get();
        return $query->row();
    }
    public function detail($id_user){
        $this->db->select('*');
		$this->db->from('users');
		$this->db->where('id_user',$id_user);
		$this->db->order_by('id_user', 'desc');
		$query = $this->db->get();
		return $query->row();
    }                       
    public function getUser(){
        $query = $this->db->get('users');
        return $query->result();        
    }
    public function totalUser(){
        $this->db->from('COUNT(*)AS total');
        $this->db->from('users');
        $query = $this->db->get();
        return $query->row();
    }
    public function setUser($data){
        $this->db->insert('users', $data); 
    }
    public function editUser($data){
        
        $this->db->where('id_user', $data['id_user']);        
        $this->db->update('users', $data); 
    }
    public function deleteUser($data){
        $this->db->where('id_user',$data['id_user']);
		$this->db->delete('users',$data);
    }
//====================
// Function I/O Gejala
    public function total_Gejala(){
        $this->db->select('COUNT(*) AS total');
        $this->db->from('gejala');
        $query = $this->db->get();
        return $query->row();
    }
    public function getGejala(){
        $query = $this->db->get('gejala');
        return $query->result();
    }

    public function setGejala($data){
        $this->db->insert('gejala', $data);        
    }


//====================
    public function login($username,$password)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('username'=>$username,
                                'password'=>sha1($password)));    
        $this->db->order_by('id_user', 'desc');
        $query = $this->db->get();
        return $query->row();
    }
}
                        
/* End of file Admin_model.php */
    
                        