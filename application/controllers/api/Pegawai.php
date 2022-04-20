<?php

    class Pegawai extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('pegawai_model');
            $this->load->library('form_validation');
            
            // $rules = $this->pegawai_model->rules();
            // $this->form_validation->set_rules($rules);

        }

        private $access;

     
        public function create()
        {

            // if ($this->form_validation->run()) {
            // }


            if ($this->pegawai_model->create()) {
                $status = 201;
                $message = 'pegawai baru berhasil dibuat';
            }else{
                $status = 500;
                $message = 'pegawai gagal dibuat';
                die(json_encode([
                    "status" => $status,
                    "message" => $message
                ]));
            }

            $res = [
                    "status" => $status,
                    "message" => $message
                ];

            $this->session->set_flashdata('msg', $message);
            echo json_encode($res);
            redirect(base_url('pegawai'));


        }

        public function update()
        {
            $old_id = $this->input->post('old_id');
            if ($this->pegawai_model->update($old_id)) {
                $status = 200;
                $message = 'pegawai "'.$old_id.'" berhasil di-update';
            }else{
                $status = 500;
                $message = 'pegawai gagal di-update';
                die(json_encode([
                    "status" => $status,
                    "message" => $message
                ]));
            }

            $res = [
                    "status" => $status,
                    "message" => $message
                ];

            $this->session->set_flashdata('msg', $message);
            echo json_encode($res);
            redirect(base_url('pegawai'));
        }


        public function delete($id = null)
        {
            if (! $id) return false;

            if ($this->pegawai_model->delete($id)) {
                $status = 201;
                $message = 'pegawai $id berhasil dihapus';
            }else{
                $status = 500;
                $message = 'pegawai $id gagal dihapus';
                die(json_encode([
                    "status" => $status,
                    "message" => $message
                ]));
            }

            $res = [
                    "status" => $status,
                    "message" => $message
                ];

            $this->session->set_flashdata('msg', $message);
            echo json_encode($res);
            redirect(base_url('pegawai'));


        }


    }
    