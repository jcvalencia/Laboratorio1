<?php 

class UsersModel extends Model {
    public function __construct()   {
        parent::__construct();
      }//constructor

      public function getAllUsers() {
        $sql = "SELECT * FROM users ORDER BY username";
        return  $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
      }// getAllUsers

      public function getUser($id) {
        $sql = "SELECT * FROM users WHERE id={$id}";
        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
      }// getUser

      public function add($username, $pass, $name, $email) {
        if ( (!empty($username) ) && (! empty($pass)) && (!empty($name)) && (! empty($email)) ) {
        $sql = "SELECT COUNT(*) tot FROM users WHERE email='{$email}'";
        $res = $this->db->query($sql)->fetch_array();
        if ($res["tot"] >0) {
          return null;
        } else {
          $sql = "INSERT INTO users (username, email, name, passwd) VALUES ('{$username}', '{$email}','{$name}','{$pass}')";
          if ($this->db->query($sql)) {
            return true;
          } else {
            return false;
          } //else  // if query
          
        } // else if tot > 0
      } else {
        return false;
      }//else //if ! emtpty
      }// add $username, $pass, $name, $email
      
      public function edit($id) {

      }// edit

      public function delete($id) {

      }// delete
} //class
