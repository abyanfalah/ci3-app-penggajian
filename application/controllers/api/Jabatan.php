<?php

    class Jabatan extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('jabatan_model');

        }

        private $access;

     
        public function tambah()
        {
            if ($this->jabatan_model->create()) {
                $status = 201;
                $message = 'Jabatan baru berhasil dibuat';
            }else{
                $status = 500;
                $message = 'Jabatan gagal dibuat';
            }

            $res = [
                    "status" => $status,
                    "message" => $message
                ];

            $this->session->set_flashdata('msg', $message);
            echo json_encode($res);

        }


    }
    