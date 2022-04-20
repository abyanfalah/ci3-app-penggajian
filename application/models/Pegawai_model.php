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
				SELECT 
				p.*, 
				a.nama as 'akses',
				s.nama as 'status' 
				FROM $this->table p 
				INNER JOIN akses a ON p.level_akses = a.level
				INNER JOIN status s ON p.id_status = s.id
			";
			
			if ($id) {
				$query .= " WHERE p.id = '".$id."'";
			}else{
				$query .= " ORDER BY p.id";
			}

			return $this->db->query($query);
		}

		public function create()
		{
			$data = [
				'id'            => $this->new_id(),
				'nik'           => $this->input->post('nik'),
				'nama'          => $this->input->post('nama'),
				'username'      => $this->input->post('username'),
				'password'      => sha1($this->input->post('password')),
				'id_jabatan'    => $this->input->post('id_jabatan'),
				'level_akses'   => $this->input->post('level_akses'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'tanggal_masuk' => $this->input->post('tanggal_masuk'),
				'id_status'     => 1,
				'foto'          => $this->input->post('nama').'.jpg'
			];

			return $this->db->insert($this->table, $data);
		}

		public function update()
		{
			$data = [
				'nik'	 		=> $this->input->post('nik'),
				'nama'			=> $this->input->post('nama'),
				'username' 		=> $this->input->post('username'),
				'password' 		=> sha1($this->input->post('password')),
				'id_jabatan'	=> $this->input->post('id_jabatan'),
				'level_akses' 	=> $this->input->post('level_akses'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'tanggal_masuk' => $this->input->post('tanggal_masuk'),
				'id_status' 	=> $this->input->post('id_status'),
				'foto' 			=> $this->input->post('nama').'.jpg'
			];

			return $this->db->update($this->table, $data, ["id" => $this->input->post('id')]);
		}

		public function delete($id = null)
		{
			if (!$id) return false;
			return $this->db->delete($this->table, ["id" => $id]);
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
			$last = $this->db->query("SELECT id FROM $this->table ORDER BY id DESC LIMIT 1")->row();
			
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


		// public function rules()
			// {
			//     return [
			// 		['field' => 'id',
			// 		'label' => 'ID',
			// 		'rules' => 'required'],

			// 		['field' => 'nama',
			// 		'label' => 'Nama',
			// 		'rules' => 'required'],

			// 		['field' => 'gaji_pokok',
			// 		'label' => 'Gaji pokok',
			// 		'rules' => 'required'],

			// 		['field' => 'tunjangan',
			// 		'label' => 'Tunjangan',
			// 		'rules' => 'required'],

					
			//     ];
		// }
	}