<?php
	/**
	 * 
	 */
	class Pegawai_model extends CI_model
	{
		private $table = 'pegawai';

		public function get($id = null)
		{
			$query = "
				SELECT *, a.nama AS 'akses' 
				FROM $this->table p INNER JOIN akses a 
				ON p.level_akses = a.level";
			
			if ($id) {
				$query .= " WHERE id = '".$id."'";
			}

			return $this->db->query($query);
		}

		public function create()
		{
			$data = [
				'id' => $this->new_id(),
				'nik' => $this->input->post('nik'),
				'username' => $this->input->post('username'),
				'password' => sha1($this->input->post('password')),
				'nama' => $this->input->post('nama'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'tanggal_masuk' => $this->input->post('tanggal_masuk'),
				'id_status' => $this->input->post('id_status'),
				'foto' => $this->input->post('nama').'jpg'
			];

			return $this->db->insert($this->table, $data);
		}

		public function check_username()
		{
			return $this->db->get_where($this->table, ["username" => $this->input->post('username')]);
		}

		public function authenticate()
		{
			return $this->db->get_where($this->table, array("username" => $this->input->post('username'), "password" => sha1($this->input->post('password'))));
		}


		public function new_id()
		{
			$id = 'P001';
			$last = $this->db->query("SELECT id FROM $this->table ORDER BY id DESC LIMIT 1")->result();
			
			if(!$last){
				return $id;
			}else{
				$new = $last->id;
				$new = substr($new, 1);
				$new++;
				$new = substr($id, 0, -(strlen($new))).$new;

				return $new;
			}


		}
	}