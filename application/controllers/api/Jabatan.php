<?php

    class Jabatan extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('jabatan_model');
            $this->load->library('form_validation');
            
            // $rules = $this->jabatan_model->rules();
            // $this->form_validation->set_rules($rules);

        }

        private $access;

     
        public function create()
        {
            if ($this->jabatan_model->create()) {
                $status = 201;
                $message = 'Jabatan baru berhasil dibuat';
            }else{
                $status = 500;
                $message = 'Jabatan gagal dibuat';
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
            redirect(base_url('jabatan'));


        }

        public function update()
        {
            $old_id = $this->input->post('old_id');
            if ($this->jabatan_model->update($old_id)) {
                $status = 200;
                $message = 'Jabatan "'.$old_id.'" berhasil di-update';
            }else{
                $status = 500;
                $message = 'Jabatan gagal di-update';
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
            redirect(base_url('jabatan'));
        }


        public function delete($id = null)
        {
            if (! $id) return false;

            if ($this->jabatan_model->delete($id)) {
                $status = 201;
                $message = 'Jabatan $id berhasil dihapus';
            }else{
                $status = 500;
                $message = 'Jabatan $id gagal dihapus';
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
            redirect(base_url('jabatan'));


        }


    }
    