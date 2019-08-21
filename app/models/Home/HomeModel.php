<?php
defined('BASEPATH') or exit('No se permite acceso directo');
/**
 * Home Model
 */
class HomeModel extends Model {
  /**
  * Inicia conexión DB
  */
  public function __construct() {
    parent::__construct();
  } //constructor

  /**
  * Obtiene el usuario de la DB por ID
  */
  public function getUser($id){
    return $this->db->query("SELECT * FROM `users` WHERE `username` = $id")->fetch_array(MYSQLI_ASSOC);
  } // obtiene el usuario basado en el $id

} /// class Model