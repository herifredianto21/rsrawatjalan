<?php 
class Login_model extends CI_Model{
 
	public function __construct(){
		parent::__construct();	
	}
 
	public function check_user($username, $password) {
		$query = $this->db->query("select * from user where username='$username' AND password='$password' limit 1");
		return $query;
	}
}