<?php

    class Pegawai extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            
            if (! $this->session->userdata('username')){
                header('location:/login');
                die();
            }

            $this->access = $this->session->userdata('akses');
            $this->load->model('pegawai_model');
        }

        private $access;

        public function index()
        {
            $data['title'] = 'pegawai';
            $data['pegawai'] = $this->pegawai_model->get()->result();

            $this->load->view($this->access.'/_partials/header', $data);
            $this->load->view($this->access.'/_partials/sidebar');
            $this->load->view($this->access.'/pegawai', $data);
            $this->load->view($this->access.'/_partials/footer');
        }

        public function tambah()
        {
            $data['title'] = 'pegawai baru';
            $data['akses'] = $this->penggajian_model->get('akses')->result();
            $data['jabatan'] = $this->penggajian_model->get('jabatan')->result();

            $this->load->view($this->access.'/_partials/header', $data);
            $this->load->view($this->access.'/_partials/sidebar');
            $this->load->view($this->access.'/pegawai/create');
            $this->load->view($this->access.'/_partials/footer');
        }

        public function edit($id = null)
        {
            if (!$id) { return redirect(base_url('pegawai')); }

            $data['title'] = 'edit pegawai '.$id;
            $data['pegawai'] = $this->pegawai_model->get($id)->row();
            $data['akses'] = $this->penggajian_model->get('akses')->result();
            $data['jabatan'] = $this->penggajian_model->get('jabatan')->result();
            $data['status'] = $this->penggajian_model->get('status')->result();


            $this->load->view($this->access.'/_partials/header', $data);
            $this->load->view($this->access.'/_partials/sidebar');
            $this->load->view($this->access.'/pegawai/edit', $data);
            $this->load->view($this->access.'/_partials/footer');
        }

         public function hapus($id = null)
        {
            if (!$id) { return redirect(base_url('pegawai')); }

            $data['title'] = 'hapus pegawai '.$id;
            $data['pegawai'] = $this->pegawai_model->get($id)->row();

            $this->load->view($this->access.'/_partials/header', $data);
            $this->load->view($this->access.'/_partials/sidebar');
            $this->load->view($this->access.'/pegawai/delete', $data);
            $this->load->view($this->access.'/_partials/footer');

        }


    }
    