<?php

    class Test extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('pegawai_model');
            $this->access = $this->session->userdata('akses');
            // $this->load->helper('form');
            $this->load->library('upload');
        }

        private $access;

        public function index($id = null)
        {
           $this->load->view('file');
        }

        public function pegawai($id = null)
        {
            echo $this->pegawai_model->get($id)->row()->id;
            echo $this->pegawai_model->get($id)->row()->nama;
        }

    }
    