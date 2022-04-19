<?php

    class Auth extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        public function login()
        {
            if($this->session->userdata('nik')){
                return header('location:/');
            }

            $this->load->view('login');

        }

        public function login_action()
        { 
            if($this->session->userdata('id')){
                return header('location:/');
            }

            if (! $this->input->post('username')) {
                $this->session->set_flashdata('alert','Username harus diisi!');
                return header("location:/login");
                exit();
            }

            $this->load->model('pegawai_model');

            if (! $this->pegawai_model->check_username()->num_rows()) {
                $this->session->set_flashdata('alert','User tidak ditemukan!');
                return header("location:/login");
                exit();
            }

            if (! $this->input->post('password')) {
                $this->session->set_flashdata('alert','Password harus diisi!');
                return header("location:/login");
                exit();
            }

            if (! $this->pegawai_model->authenticate()->num_rows()) {
                $this->session->set_flashdata('alert','Password salah!');
                return header("location:/login");   
                exit();
            }

            $id = $this->pegawai_model->authenticate()->row()->id;

            $userdata = $this->pegawai_model->get($id)->row_array();
            $this->session->set_userdata($userdata);

            return header('location:/dashboard');
            // var_dump($this->session->userdata);
            // header('Content-Type: application/json');
        }


        public function logout()
        {
            session_destroy();
            header('location: /login');
        }

        public function also()
        {
            // $this->index();
            header('location:/template');
        }
    }
    