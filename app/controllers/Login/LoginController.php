<?php
defined('BASEPATH') or exit('No se permite acceso directo');

require_once ROOT . FOLDER_PATH .'/app/models/Login/LoginModel.php';
require_once LIBS_ROUTE .'Session.php';

/**
* Login controller
*/
class LoginController extends Controller {
  private $model;

  private $session;

  public function __construct() {
    $this->model = new LoginModel();
    $this->session = new Session();
  }// constructor

  public function exec() {
    $this->render(__CLASS__);
  }// exec

  public function signin($request_params) {
    if($this->verify($request_params))
      return $this->renderErrorMessage('El nombre de usuario y contraseña son obligatorios');

    $result = $this->model->signIn($request_params['username']);

    if(!$result->num_rows)
      return $this->renderErrorMessage("El nombre de usuario o contraseña son incorrectos");

    $result = $result->fetch_object();

    if(!password_verify($request_params['pass'], $result->passwd))
      return $this->renderErrorMessage('El nombre de usuario o contraseña son incorrectos');

    $this->session->init();
    $this->session->add('username', $result->email);
    header('location: ' . FOLDER_PATH . '/main');
  }// signin

  private function verify($request_params) {
    return empty($request_params['username']) OR empty($request_params['pass']);
  } // verify

  private function renderErrorMessage($message)  {
    $params = array('error_message' => $message);
    $this->render(__CLASS__, $params);
  } // renderErrorMessage
 
} // class