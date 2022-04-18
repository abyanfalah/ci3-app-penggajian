<?php

	/**
	 * 
	 */
	class Jabatan_model extends CI_model
	{
		private $table = 'jabatan';

		public function get($id = null)
		{
			if ($id) {$this->db->where('id', $id);}

			return $this->db->get($this->table);
		}

		public function create()
		{
			$id = $this->input->post('id');
			$id = str_replace(" ", "", $id); //delete all whitespace
			$id = strtoupper($id);
			$id = trim($id);

			$data = [
				"id" => $id,
				"nama" => $this->input->post('nama'),
				"gaji_pokok" => $this->input->post('gaji_pokok'),
				"tunjangan" => $this->input->post('tunjangan')
			];

			return $this->db->insert($this->table, $data);
		}


	}