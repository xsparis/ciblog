<?php
class Blog extends CI_Controller {

    public function __construct (){
        parent::__construct();
        $this->load->model('blog_model');
        //$this->load->helper('url_helper');
    }

    public function index(){
        $data['blogs']=$this->blog_model->get_blogs();
        $data['title']='All blogs';

        $this->load->view('blogs',$data);
    }

    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title']='Create Blog';

        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('content','Content','required');

        if ($this->form_validation->run() === false) {
            $this->load->view('create',$data);
        } else {
            $this->blog_model->create_blog();
            $this->load->view('success');
        }
    }

    public function delete($id=false){
        if ($id === false){
            $this->load->view('false');
        } else {
            $res['x']=$this->blog_model->delete_blog($id);
            //当id不在blogs表格中，返回了数值1，需要解决
            $this->load->view('success',$res);
        }
    }
}