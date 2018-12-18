<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa_model extends CI_Model {
	public function all(){
		//select * from mahasiswa
        return $this->db->get('mahasiswa')->result();		
	}
}


 ?>