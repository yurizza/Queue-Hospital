<?php

	class modelPasien extends CI_Model
	{
		function getData($select,$table,$where=false)
		{
			if($where)
			{
				return $this->db
						->select($select)
						->from($table)
						->where($where)
						->get()
						->row();
			}else
			{
				return $this->db
						->select($select)					
						->get($table)
						->result();
			}
			
		}

		function insertData($table,$value)
		{
			return $this->db->insert($table,$value);
		}

		function getJoin($kolom,$table1,$table2,$syarat,$where=false)
		{
			if($where){
				return $this->db
						->select($kolom)
						->from($table1)
						->join($table2,$syarat)
						->where($where)
						->get()
						->row();
			}else{
				return $this->db
							->select($kolom)
							->from($table1)
							->join($table2,$syarat)
							->get()
							->result();
						}
		}
		function getJoinBanyak($kolom,$table1,$table2,$syarat,$where){
				return $this->db
							->select($kolom)
							->from($table1)
							->join($table2,$syarat)
							->where($where)
							->get()
							->result();
						
		}

		function getJoinjoin($kolom,$table1,$table2,$table3,$syarat1,$syarat2,$where)
		{
			return $this->db
						->select($kolom)
						->from($table1)
						->join($table2,$syarat1)
						->join($table3,$syarat2)
						->where($where)
						->get()
						->result();
		}
		function updateData($table,$set,$where){
			return $this->db
						->where($where)
						->update($table,$set);
		}
		
	}

?>