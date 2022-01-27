<?php
class AuthModel extends CI_Model
{
    public function checkLogin($username, $password)
    {
        // get user from database
        $result = $this->db->where("username", $username)
            ->where("password", $password)
            ->limit(1)
            ->get("user");

        return ($result->num_rows() > 0) ? $result->row() : array();
    }
}
