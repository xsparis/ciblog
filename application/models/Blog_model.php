<?php
class Blog_model extends CI_Model {
    public function __construct () {
        $this->load->database();
    }

    public function get_blogs ($id = false){
        if ($id === false) {
            $query = $this->db->get('blogs');
            return $query->result_array();
        }

        $query = $this->db->get_where('blogs',array('id'=>$id));
        return $query->row_array();
    }

    public function create_blog (){
        //$this->load->helper('url');
        $data=array(
            'title'=>$this->input->post('title'),
            'content'=>$this->input->post('content')
        );

        return $this->db->insert('blogs',$data);
    }

    public function delete_blog($id){
        return $this->db->delete('blogs',array('id'=>$id));
    }

    public function edit_blog($id){
        $data=array(
            'id'=>$id,
            'title'=>$this->input->post('title'),
            'content'=>$this->input->post('content')
        );
        $this->db->replace('blogs',$data);
    }
}