<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Post_2_model extends CI_Model
{
    private $db2;

    public function __construct()
    {
        parent::__construct();
        $this->db2 = $this->load->database('database_2', true);
    }

    public function update($id, $data)
    {
        $this->db2->where('id', $id);
        $this->db2->update('post_2', $data);
    }

    public function get_by_id($id)
    {
        $this->db2->from('post_2');
        $this->db2->where('id', $id);
        $query = $this->db2->get();

        return $query->row();
    }

    public function get_all()
    {
        $this->db2->from('post_2');
        $query = $this->db2->get();

        return $query->result();
    }
}

/* End of file Post_2_model.php */
