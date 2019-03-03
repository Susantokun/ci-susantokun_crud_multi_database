<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{
    private $db2;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Post_model');
        $this->load->model('Post_2_model');
        $this->db2 = $this->load->database('database_2', true);
    }

    public function index()
    {
        $data['data_db1'] = $this->Post_model->get_all();
        $data['data_db2'] = $this->Post_2_model->get_all();
        $this->load->view('post/index', $data);
    }

    public function create()
    {
        $this->load->view('post/create');
    }

    public function create_action()
    {
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
        );
        $data2 = array(
            'title' => $this->input->post('title'),
            'category' => $this->input->post('category'),
        );
        $this->Post_model->insert($data, $data2);
        redirect('post');
    }

    public function update($id)
    {
        $data['data'] = $this->Post_model->get_by_id($id);
        $this->load->view('post/update', $data, false);
    }

    public function update_action()
    {
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
        );
        $id = $this->input->post('id');
        $this->Post_model->update($id, $data);
        redirect('post');
    }

    public function delete($id)
    {
        $this->Post_model->delete($id);
        redirect('post');
    }
}

/* End of file Post.php */
