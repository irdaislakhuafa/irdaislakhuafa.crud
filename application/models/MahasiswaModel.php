<?php
class MahasiswaModel extends CI_Model
{
    public function getAll($table_name = "mahasiswa")
    {
        return $this->db->get($table_name)->result_array();
    }
    public function save($data)
    {
        return $this->db->insert("mahasiswa", $data);
    }
    public function update($data)
    {
        return $this->db->where("id", $data["id"])->update("mahasiswa", $data);
    }
    public function deleteById($id)
    {
        $this->db->where("id", $id)->delete("mahasiswa");
    }
    public function findById($id)
    {
        return $this->db->where("id", $id)->from("mahasiswa")->get()->row_array();
    }
    public function findByNpm($npm)
    {
        return $this->db->where("npm", $npm)->get("mahasiswa")->result();
    }
}
