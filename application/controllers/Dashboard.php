<?php

    class Dashboard extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            
            if (! $this->session->userdata('username')){
                header('location:/login');
                die();
            }

            $this->load->model('penggajian_model');
            $this->access = $this->session->userdata('akses');
        }

        private $access;

        public function index()
        {
            $data['title'] = 'dashboard';
            $data['pegawai'] = $this->penggajian_model->get('pegawai');
            $data['jabatan'] = $this->penggajian_model->get('jabatan');
            $data['kehadiran'] = $this->penggajian_model->get('kehadiran');

            $this->load->view($this->access.'/_partials/header', $data);
            $this->load->view($this->access.'/_partials/sidebar');
            $this->load->view($this->access.'/dashboard', $data);
            $this->load->view($this->access.'/_partials/footer');
        }


    }
    