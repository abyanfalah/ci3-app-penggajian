<?php

    class Test extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
        	$this->load->model('pegawai_model');
        	
            // $result = $this->pegawai_model->authenticate();

            header("Content-type: application/json");
            echo json_encode(var_dump($result));


        }
    }
    