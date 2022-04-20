<?php

    class Test extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('pegawai_model');
            $this->access = $this->session->userdata('akses');
        }

        private $access;

        public function index($id = null)
        {
            $this->load->view($this->access.'/_partials/header');
            $this->load->view($this->access.'/_partials/sidebar');
            $this->load->view('file');
            $this->load->view($this->access.'/_partials/footer');
        }

        public function pegawai($id = null)
        {
            // $this->load->view($this->access.'/_partials/header');
            // $this->load->view($this->access.'/_partials/sidebar');
            // $this->load->view('test',$data);
            // $this->load->view($this->access.'/_partials/footer');

            // var_dump($this->pegawai_model->get($id)->row_array());
            echo $this->pegawai_model->get($id)->row()->id;
            echo $this->pegawai_model->get($id)->row()->nama;
        }

    }
    