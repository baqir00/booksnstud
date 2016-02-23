<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Show_model extends CI_Model {

	public function show() {
        return $this->db->query('SELECT * from items')->result();
	}
}

?>