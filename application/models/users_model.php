<?php

class Users_model extends CI_Model {

function __construct()

{

parent::__construct();

$this->load->database("default");

}

public function get_all_users()

{

$query = $this->db->get('users');

return $query->result();

}

}

?>
