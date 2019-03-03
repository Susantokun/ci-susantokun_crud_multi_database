<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Post_2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Post_2_model');
    }

    public function update($id)
    {
        $data['data'] = $this->Post_2_model->get_by_id($id);
        $this->load->view('post_2/update', $data, false);
    }

    public function update_action()
    {
        $data = array(
            'title' => $this->input->post('title'),
            'category' => $this->input->post('category'),
        );
        $id = $this->input->post('id');
        $this->Post_2_model->update($id, $data);
        redirect('post');
    }
}

/* End of file Post_2.php */
