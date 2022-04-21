<?php 
	class Upload extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('pegawai_model');
		}

		public function index()
		{
			$this->load->view('upload_form');

			if (isset($_POST['submit'])) {
				$config['upload_path']   = "./uploads/";
				$config['allowed_types'] = "jpg|png";
				$config['file_name'] = $this->pegawai_model->new_id();

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('pic')) {
					// die('file uploaded') ;
					var_dump($_FILES);
				}else{
					die($this->upload->error());
				}
			}
		}

		public function upload_action()
		{

		}
	}


 ?>