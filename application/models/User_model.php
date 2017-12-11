<?php
class User_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    public function get_users($id=false){
        if ($id === false) {
            $query = $this->db->get('users');
            return $query->result_array();
        }

        $query = $this->db->get_where('users',array('id'=>$id));
        return $query->row_array();
    }

    public function create_user(){
        $data=array(
            'name'=>$this->input->post('name'),
            'mail'=>$this->input->post('mail'),
            'pwd'=>$this->input->post('pwd')        
        );

        return $this->db->insert('users',$data);
    }

    public function delete_user($id){
        return $this->db->delete('users',array('id'=>$id));        
    }

    public function edit_user($id){
        $data=array(
            'id'=>$id,
            'name'=>$this->input->post('name'),
            'mail'=>$this->input->post('mail'),
            'pwd'=>$this->input->post('pwd') 
        );
        $this->db->replace('blogs',$data);
    }
}