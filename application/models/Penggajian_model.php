<?php

	class Penggajian_model extends CI_model
	{
		public function get($table)
		{
			return $this->db->get($table);
		}
	}