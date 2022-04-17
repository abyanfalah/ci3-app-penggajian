<?php

    class Dashboard extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('penggajian_model');
            $this->access = $this->session->userdata('level_akses');
        }

        private $access;

        public function index()
        {
            $this->load->view('_partials/header');
            $this->load->view('_partials/sidebar');
            // $this->load->view('');
            $this->load->view('_partials/footer');
        }


    }
    