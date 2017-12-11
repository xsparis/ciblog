<?php
class User extends CI_Controller {
    
        public function __construct (){
            parent::__construct();
            $this->load->model('user_model');
            //$this->load->helper('url_helper');
        }
    
        public function index(){
            $data['users']=$this->user_model->get_users();
            $data['title']='All users';
    
            $this->load->view('user/users',$data);
        }
    
        public function create(){
            $this->load->helper('form');
            $this->load->library('form_validation');
    
            $data['title']='Create User';
    
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('mail','Mail','required');
            $this->form_validation->set_rules('pwd','Pwd','required');
    
            if ($this->form_validation->run() === false) {
                $this->load->view('user/create',$data);
            } else {
                $this->user_model->create_user();
                $this->load->view('test/success');
            }
        }
    
        public function delete($id=false){
            if ($id === false){
                $this->load->view('test/false');
            } else {
                $res['x']=$this->user_model->delete_user($id);
                //当id不在blogs表格中，返回了数值1，需要解决
                $this->load->view('test/success',$res);
            }
        }
    
        public function edit($id=false){
            
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('mail','Mail','required');
            //$this->form_validation->set_rules('pwd','Pwd','required');
    
            $data['title']='Edit user ID: '.$id;
            $data['user']=$this->user_model->get_users($id);
    
                
            if ($this->form_validation->run() === false) {
                $this->load->view('user/edit',$data);
            } else {
                $id=$this->input->post('id');
                $this->user_model->edit_user($id);
                $this->load->view('test/success');
            }
            
        }
    }