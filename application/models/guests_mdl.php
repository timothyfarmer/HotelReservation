<?php
class Guests_mdl extends CI_Model {

	private $tableName= 'Guests';
	
	function __construct(){
		parent::__construct();
	}
	
	function list_all(){
		$this->db->order_by('guestID','asc');
		return $this->db->get($this->tableName);
	}
	
	function count_all(){
		return $this->db->count_all($this->tableName);
	}
	
	function get_paged_list($limit = 10, $offset = 0){
		$this
			->db
			->order_by('guestID', 'asc');
		return $this->db->get($this->tableName, $limit, $offset);
	}
	
	function get_by_id($id){
		$this
			->db
			->where('guestID', $id);
		return $this->db->get($this->tableName);
	}
	
	function save($guest){
		$this->db->insert($this->tableName, $guest);
		return $this->db->insert_id();
	}
	
	function update($id, $guest) {
		$this->db->where('guestID', $id);
		$this->db->update($this->tableName, $guest);
	}
	
	function delete($id){
		$this->db->where('guestID', $id);
		$this->db->delete($this->tableName);
	}
}