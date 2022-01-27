<?php
// session_start();
class Auth extends CI_Controller
{
    public function view_login()
    {
        $this->load->view("login");
    }

    public function check_login()
    {
        // get data user from post input method
        $data_user = $this->input->post();

        // set form rules
        $this->form_validation->set_rules(
            // field
            'username',
            // text in notif
            'Username',
            // rules,
            'required',
            // change message
            array(
                'requered' => 'Anda harus memasukan %s'
            )
        );

        // if form is not valid
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata(
                // index name
                "error",
                // value
                '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Maaf!</strong> Masukan username dans password untuk login.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );

            redirect(base_url() . "auth/view_login");
        } else {
            $check_user = $this->AuthModel->checkLogin(
                // username
                $data_user["username"],
                // password 
                $data_user["password"]
            );

            // if user does't exists
            if ($check_user == FALSE || $check_user == null) {
                $this->session->set_flashdata(
                    // index name
                    "error",
                    // value
                    '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Maaf!</strong> Username atau password anda salah!.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>'
                );
                redirect(base_url() . "auth/view_login");
            } else {
                // $this->session->set_userdata(
                //     "username",
                //     $check_user->username
                // );
                $this->session->set_userdata(
                    [
                        "username" => $check_user->username,
                        "user_role" => $check_user->user_role
                    ]
                );

                // print_r($check_user);
                // check role
                // if()
                // print_r($this->session->userdata);

                redirect(
                    base_url() .
                        ($check_user->user_role == 'admin') ?
                        "home/index" :
                        "home/user_home"
                );
            }

            // redirect(base_url() . "home/index");
        }
    }
}
