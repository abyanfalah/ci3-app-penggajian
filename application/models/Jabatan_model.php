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
			$data = [
				"id" => $this->new_id(),
				"nama" => $this->input->post('nama'),
				"gaji_pokok" => $this->input->post('gaji_pokok'),
				"tunjangan" => $this->input->post('tunjangan')
			];

			return $this->db->insert($this->table, $data);
		}

		public function update($id = null)
		{
			if (! $id) return false;

			$data = [
				"id" => $this->input->post('id'),
				"nama" => $this->input->post('nama'),
				"gaji_pokok" => $this->input->post('gaji_pokok'),
				"tunjangan" => $this->input->post('tunjangan')
			];

			return $this->db->update($this->table, $data, ["id" => $id]);

		}



		public function rules()
		{
		    return [
				['field' => 'id',
				'label' => 'ID',
				'rules' => 'required'],

				['field' => 'nama',
				'label' => 'Nama',
				'rules' => 'required'],

				['field' => 'gaji_pokok',
				'label' => 'Gaji pokok',
				'rules' => 'required'],

				['field' => 'tunjangan',
				'label' => 'Tunjangan',
				'rules' => 'required'],

				
		    ];
		}


		private function new_id()
		{
			$id = $this->input->post('id');
			$id = str_replace(" ", "", $id); 
			$id = strtoupper($id);
			$id = trim($id);

			return $id;
		}

	}