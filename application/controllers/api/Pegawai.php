<?php

    class Pegawai extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('pegawai_model');
            $this->load->library('form_validation');
        }

        private $access;

     
        public function create()
        {

            if ($this->pegawai_model->create()) {
                $status  = 201;
                $message = 'Pegawai baru berhasil dibuat';
            }else{
                $status  = 500;
                $message = 'Pegawai gagal dibuat';
                die(json_encode([
                    "status"  => $status,
                    "message" => $message
                ]));
            }

            $res = [
                    "status"  => $status,
                    "message" => $message
                ];

            $this->session->set_flashdata('msg', $message);
            echo json_encode($res);
            redirect(base_url('pegawai'));

            // var_dump($this->input->post());
            // echo "<br>";
            // echo "<br>";
            // var_dump($_FILES);


        }

        public function update()
        {
            $id = $this->input->post('id');
            if ($this->pegawai_model->update()) {
                $status  = 200;
                $message = 'Pegawai "'.$id.'" berhasil di-update';
            }else{
                $status  = 500;
                $message = 'Pegawai gagal di-update';
                die(json_encode([
                    "status"  => $status,
                    "message" => $message
                ]));
            }

            $res = [
                    "status"  => $status,
                    "message" => $message
                ];

            $this->session->set_flashdata('msg', $message);
            echo json_encode($res);
            redirect(base_url('pegawai'));

            // var_dump($this->input->post());
        }


        public function delete($id = null)
        {
            if (! $id) return false;

            if ($this->pegawai_model->delete($id)) {
                $status  = 201;
                $message = 'Pegawai $id berhasil dihapus';
            }else{
                $status  = 500;
                $message = 'Pegawai $id gagal dihapus';
                die(json_encode([
                    "status"  => $status,
                    "message" => $message
                ]));
            }

            $res = [
                    "status"  => $status,
                    "message" => $message
                ];

            $this->session->set_flashdata('msg', $message);
            echo json_encode($res);
            redirect(base_url('pegawai'));


        }


    }
    