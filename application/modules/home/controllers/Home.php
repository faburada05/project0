<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{

    public function index(){
        $this->data['title'] = 'Home';
        $this->data['content'] = 'home';
        $this->load->view('layout', $this->data);    
    }

    public function load_footer(){
        $this->data['content'] = "footer";
        $this->load->view('layout', $this->data);
    }

    public function load_sidebar(){
        $this->data['content'] = "side_bar";
        $this->load->view('layout', $this->data);
    }

    public function load_header(){
        $this->data['content'] = "header";
        $this->load->view('layout', $this->data);
    }

    public function load_videos(){
        $this->data['content'] = "load_videos";
        $this->load->view('layout', $this->data);
    }
}
?>