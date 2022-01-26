<?php
class MahasiswaModel extends CI_Model
{
    public function getAll($table_name = "mahasiswa")
    {
        return $this->db->get($table_name)->result_array();
    }
}
