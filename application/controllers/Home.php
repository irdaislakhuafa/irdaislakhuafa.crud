<?php
class Home extends CI_Controller
{
    // set default template in constructor
    public function __construct()
    {
        parent::__construct();
        $this->template->set_template("index");
    }

    public function index()
    {
        // tambah data
        $data["card"][0]["title"] = "Tambah Data";
        $data["card"][0]["uri"] = "crud/tambah";
        // lihat data
        $data["card"][1]["title"] = "Lihat Data";
        $data["card"][1]["uri"] = "crud/lihat";

        $this->template->content->view("home/index", $data);
        $this->template->publish();
    }
}
