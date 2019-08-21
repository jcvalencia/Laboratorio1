<?php
defined('BASEPATH') or exit('No se permite acceso directo');

require_once ROOT . FOLDER_PATH .'/app/models/Login/LoginModel.php';
require_once LIBS_ROUTE .'Session.php';

/**
* Main controller
*/
class MainController extends Controller{
  private $session;

  public function __construct()  {
    $this->session = new Session();
    $this->session->init();
    if($this->session->getStatus() === 1 || empty($this->session->get('username')))
      exit('Acceso denegado');
  }//constructor

  public function exec()  {
    $params = array('username' => $this->session->get('username'));
    $this->render(__CLASS__, $params);
  }//exec

  public function logout()  {
    $this->session->close();
    header('location: '.FOLDER_PATH.'/login/signup');
  }//logout

}//class
