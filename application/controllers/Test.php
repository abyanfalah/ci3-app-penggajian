<?php

    class Test extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('pegawai_model');
        }

        public function index($id)
        {
            echo $this->pegawai_model->get($id)->row()->nama;
        }
    }
    