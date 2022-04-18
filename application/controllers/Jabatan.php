<?php

    class Jabatan extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            
            if (! $this->session->userdata('username')){
                header('location:/login');
                die();
            }

            $this->access = $this->session->userdata('akses');
        }

        private $access;

        public function index()
        {
            $data['title'] = 'Jabatan';
            $data['jabatan'] = $this->penggajian_model->get('jabatan')->result();

            $this->load->view($this->access.'/_partials/header', $data);
            $this->load->view($this->access.'/_partials/sidebar');
            $this->load->view($this->access.'/jabatan', $data);
            $this->load->view($this->access.'/_partials/footer');
        }

        public function tambah()
        {
            $data['title'] = 'jabatan baru';

            $this->load->view($this->access.'/_partials/header', $data);
            $this->load->view($this->access.'/_partials/sidebar');
            $this->load->view($this->access.'/jabatan/tambah');
            $this->load->view($this->access.'/_partials/footer');
        }


    }
    