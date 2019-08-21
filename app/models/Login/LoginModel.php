<?php 
/**
* 
*/
class LoginModel extends Model {
  
  public function __construct()   {
    parent::__construct();
  }//constructor

  public function signIn($username)   {
    $username = $this->db->real_escape_string($username);
    $sql = "SELECT id, username, email, passwd FROM users WHERE username = '{$username}'";
    return $this->db->query($sql);
  }// signIn
} // class