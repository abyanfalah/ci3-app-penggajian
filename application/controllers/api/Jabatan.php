<?php

    class Jabatan extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->access = $this->session->userdata('akses');

        }

        private $access;

        public function index()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/content');
            $this->load->view('templates/footer');
        }

        public function not_found()
        {
            $this->load->view($this->access.'/_partials/header');
            $this->load->view($this->access.'/_partials/sidebar');
            $this->load->view('404');
            $this->load->view($this->access.'/_partials/footer');
        }


    }
    