<?php

    class Template extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/content');
            $this->load->view('templates/footer');
        }

        public function blank()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/blank');
            $this->load->view('templates/footer');
        }
    }
    