<?php 

class StockModel extends Model {
    public function __construct() {
        parent::__construct();
      }//constructor

      public function getAll() {
        $sql = "SELECT * FROM products ORDER BY name";
        return  $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
      }// getAllUsers

      public function get($id) {
        $sql = "SELECT * FROM products WHERE id={$id}";
        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
      }// getUser

      public function add() {

      }// add
      
      public function edit($id) {

      }// edit

      public function delete($id) {

      }// delete
} //class
