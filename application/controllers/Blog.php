<?php
class Blog extends CI_Controller {

    public function __construct (){
        parent::__construct();
        $this->load->model('blog_model');
        $this->load->helper('url_helper');
    }

    public function index(){
        $data['blogs']=$this->blog_model->get_blogs();
        $data['title']='All blogs';

        $this->load->view('blogs',$data);
    }
}