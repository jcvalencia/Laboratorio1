<?php
defined('BASEPATH') or exit('No se permite acceso directo');

require_once ROOT . FOLDER_PATH .'/app/models/Users/UsersModel.php';
require_once LIBS_ROUTE .'Session.php';

/**
* Users controller
*/
class UsersController extends Controller {
  private $model;

  private $session;

  public function __construct() {
    $this->model = new UsersModel();
    $this->session = new Session();
  }// constructor

  public function exec() {
    $this->render(__CLASS__);
  }// exec

   public function view($id='') {
    if ($id=='') {
        $params =array('result' => $this->model->getAllUsers(), 'status'=>0) ;
        $this->render(__CLASS__, $params);
    } else {
        $params =array('result' => $this->model->getUser($id) , 'status'=>1) ;
        $this->render(__CLASS__, $params);
    }// else 
  } // view

  public function add() {
      $username=$_POST['username']; // Nombre de usuario
			$pass=password_hash($_POST['passwd'], PASSWORD_DEFAULT);  // Contraseña convertida a hash
			$name=$_POST['name']; // Nombre
			$email=$_POST['email']; // Correo electrónico
      $params = array('result'=>$this->model->add($username, $pass, $name, $email), 'status'=>2);
      $this->render(__CLASS__, $params);
  } // add

  private function renderErrorMessage($message)  {
    $params = array('error_message' => $message);
    $this->render(__CLASS__, $params);
  } // renderErrorMessage
 
} // class