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
}