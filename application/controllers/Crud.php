<?php
class Crud extends CI_Controller
{
    // set default template in constructor
    public function __construct()
    {
        parent::__construct();
        $this->template->set_template("index");
    }

    public function lihat()
    {
        $data["list_mahasiswa"] = $this->MahasiswaModel->getAll();
        $this->template->content->view("crud/view", $data);
        $this->template->publish();
    }
    public function tambah()
    {
        $this->template->content->view("crud/add");
        $this->template->publish();
    }
    public function saveAdd()
    {
        $data["mahasiswa"] = $this->input->post();
        print_r($this->MahasiswaModel->save($data["mahasiswa"]));
        redirect(base_url() . "crud/lihat");
    }
    public function delete()
    {
        $data["mahasiswa"] = $this->input->post();
        print_r($data);
        $this->MahasiswaModel->deleteById($data["mahasiswa"]["id"]);
        redirect(base_url() . "crud/lihat");
    }
    public function edit($id)
    {
        $data["mahasiswa"] = $this->MahasiswaModel->findById($id);
        $this->template->content->view("crud/edit", $data);
        $this->template->publish();
    }
    public function editSave()
    {
        $mahasiswa = $this->input->post();
        $this->MahasiswaModel->update($mahasiswa);
        redirect(base_url() . "crud/lihat");
    }
}
