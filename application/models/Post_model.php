<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Post_model extends CI_Model
{
    private $db2;

    public function __construct()
    {
        parent::__construct();
        $this->db2 = $this->load->database('database_2', true);
    }

    public function delete($id)
    {
        $this->db->delete('post', array('id' => $id));
        $this->db2->delete('post_2', array('id' => $id));
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('post', $data);
    }

    public function get_by_id($id)
    {
        $this->db->from('post');
        $this->db->where('id', $id);
        $query = $this->db->get();

        return $query->row();
    }

    public function get_all()
    {
        $this->db->from('post');
        $query = $this->db->get();

        return $query->result();
    }

    public function insert($data, $data2)
    {
        $this->db->insert('post', $data);
        $this->db2->insert('post_2', $data2);
    }
}

/* End of file Post_model.php */
