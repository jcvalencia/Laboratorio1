<?php
defined('BASEPATH') or exit('No se permite acceso directo');
require_once ROOT . '/php-mvc/app/models/Home/HomeModel.php';
/**
 * Home controller
 */
class HomeController extends Controller{
  /**
   * string nombre
   */
  public $nombre;

  /**
   * object model
   */
  public $model;

  /**
   * Inicializa valores 
   */
  public function __construct()  {
    $this->model = new HomeModel();
    $this->nombre = 'Mundo';
  }//constructor

  /**
  * Método estándar
  */
  public function exec()  {
    $this->show();
  }//exec

  /**
  * Método de ejemplo
  */
  public function show()  {
    $params = array('nombre' => $this->nombre);
    $this->render(__CLASS__, $params); 
  }//show

  /**
  * Método de ejemplo con model. Obtiene un usuario segun ID
  */
  public function usuario($param)  {
    $res = $this->model->getUser($param);
    $this->nombre = $res['usuario_dev'];
    $this->show();
  }//usuarui


}//class