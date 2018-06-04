<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tbp_model extends CI_Model {

	function select($table)
	{
		return $this->db->get($table);
	}
	
	public function selectwhere($table,$data)
	{
		return $this->db->get_where($table, $data);
	}
	
	function delete($table,$data)
	{
		$this->db->delete($table, $data);
	}
	
	function update($table,$data,$key)
	{
		$this->db->update($table,$data,$key);
	}

	function insert($table,$data)
	{
		$this->db->insert($table,$data);
	}
	
	function tbp_list(){
		$hasil=$this->db->query("SELECT * FROM v_tbp");
		return $hasil->result();
	}

	function get_tbp($id=null){

		// $this->db->select('tbp.notbp, tbp.tgltbp, tbpdetkeg.kdkegunit, tbp.uraianrbp, tbpdetkeg.nilai, tbp.tglvalid');
		// $this->db->join('tbpdetkeg','tbp.notbp=tbpdetkeg.notbp');
		// $this->db->from('tbp');
		// if ($id!=null){
		// 	$this->db->where('notbp',$id);
		// }
		// 	$query = $this->db->get_tbp();
		// 	return $query;			
		$e=$this->db->query("SELECT tbp.notbp, tbp.tgltbp, tbpdetkeg.kdkegunit, tbp.uraianrbp, tbpdetkeg.nilai, tbp.tglvalid from tbp INNER JOIN tbpdetkeg on tbp.notbp=tbpdetkeg.notbp");
		return $e;
	}
}