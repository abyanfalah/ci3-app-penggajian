<?php

    class Jabatan extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            
            if (! $this->session->userdata('username')){
                header('location:/login');
                die();
            }

            $this->access = $this->session->userdata('akses');
            $this->load->model('jabatan_model');
        }

        private $access;

        public function index()
        {
            $data['title'] = 'Jabatan';
            $data['jabatan'] = $this->penggajian_model->get('jabatan')->result();

            $this->load->view($this->access.'/_partials/header', $data);
            $this->load->view($this->access.'/_partials/sidebar');
            $this->load->view($this->access.'/jabatan', $data);
            $this->load->view($this->access.'/_partials/footer');
        }

        public function tambah()
        {
            $data['title'] = 'jabatan baru';

            $this->load->view($this->access.'/_partials/header', $data);
            $this->load->view($this->access.'/_partials/sidebar');
            $this->load->view($this->access.'/jabatan/create');
            $this->load->view($this->access.'/_partials/footer');
        }

        public function edit($id = null)
        {
            if (!$id) { return redirect(base_url('jabatan')); }

            $data['title'] = 'edit jabatan '.$id;
            $data['jabatan'] = $this->jabatan_model->get($id)->row();

            $this->load->view($this->access.'/_partials/header', $data);
            $this->load->view($this->access.'/_partials/sidebar');
            $this->load->view($this->access.'/jabatan/edit', $data);
            $this->load->view($this->access.'/_partials/footer');
        }

         public function hapus($id = null)
        {
            if (!$id) { return redirect(base_url('jabatan')); }

            $data['title'] = 'edit jabatan '.$id;
            $data['jabatan'] = $this->jabatan_model->get($id)->row();

            $this->load->view($this->access.'/_partials/header', $data);
            $this->load->view($this->access.'/_partials/sidebar');
            $this->load->view($this->access.'/jabatan/delete', $data);
            $this->load->view($this->access.'/_partials/footer');

        }


    }
    