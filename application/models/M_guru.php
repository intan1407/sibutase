<?php
class M_guru extends CI_Model{

	function get_all_guru(){
		$hsl=$this->db->count_all("tbl_guru");
		return $hsl;
	}
	function get_guru_perpage($offset,$limit){
		$this->db->limit($offset, $limit);
        $hsl = $this->db->get('tbl_guru')->result_array();
		return $hsl;
	}
	function get_fiter_guru_perpage($offset,$limit,$keywords){
		$this->db->like('nip',$keywords);
		$this->db->or_like('nama',$keywords);
		$this->db->or_like('jabatan',$keywords);
		$this->db->or_like('no_hp',$keywords);
		$this->db->limit($offset, $limit);
        $hsl = $this->db->get('tbl_guru')->result_array();
		return $hsl;
	}
	function simpan_guru($data_array){
		$hsl = $this->db->insert('tbl_guru', $data_array);
		return $hsl;
	}
	function update_guru($id,$data_array){
		$hsl = $this->db->where('id', $id);
		$hsl = $this->db->update('tbl_guru', $data_array);
		return $hsl;
	}
	function hapus_guru($id){
		$hsl=$this->db->query(" DELETE FROM tbl_guru  WHERE id = '$id' ");
		return $hsl;
	}	
	function get_data_guru_by_id($id){
		$hsl=$this->db->query("SELECT * FROM tbl_guru where id='$id'");
		return $hsl;
	
	}
	function get_jabatan(){
        $hsl = $this->db->where('status','1');		
        $hsl = $this->db->get('tbl_jabatan')->result();		
		return $hsl;
	}	
}