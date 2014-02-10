<?php

class Manga_model extends CI_Model {
	
	public function get_manga_list($limit_start, $limit_end) {
		$this->db->select('*');
		$this->db->from('tbl_manga_list');
		$this->db->limit($limit_start, $limit_end);	
		$query = $this->db->get();
		return $query->result_array(); 	
	}
	public function get_manga_ID($id, $alias) {
		$this->db->select('manga_ID');
		$this->db->from('tbl_manga_list');
		$this->db->where('id', $id);
		$query = $this->db->get();
		$result = $query->result_array(); 
		return $result[0]['manga_ID'];
	}
	
	public function get_list() {
		$this->db->select('*');
		$this->db->from('tbl_manga_list');
		$this->db->limit(1000, 1000);	
		$query = $this->db->get();
		return $query->result_array(); 	
	}
	public function get_latest() {
		$this->db->select('*');
		$this->db->from('tbl_manga_list');
		$this->db->limit(100, 1);	
		$this->db->order_by("last_chapter_date", "desc"); 
		$query = $this->db->get();
		return $query->result_array(); 	
	}
	
	public function get_manga_count() {
		return $this->db->count_all('tbl_manga_list');
	}
}
?>