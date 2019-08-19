<?php
defined('BASEPATH') or exit('No se permite acceso directo');
/**
* Manejo de solicitud de páginas no encontradas
*/
class ErrorPageController extends Controller {
  public $path_inicio;

  public function __construct(){
    $this->path_inicio = FOLDER_PATH;
  } // constructor
  
  public function exec() {
    $this->render(__class__, array('path_inicio' => $this->path_inicio));
  } //exec
}//class