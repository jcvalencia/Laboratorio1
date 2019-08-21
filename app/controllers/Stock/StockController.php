<?php
defined('BASEPATH') or exit('No se permite acceso directo');

require_once ROOT . FOLDER_PATH .'/app/models/Stock/StockModel.php';
require_once LIBS_ROUTE .'Session.php';

/**
*Stock controller
*/
class StockController extends Controller {
  private $model;

  private $session;

  public function __construct() {
    $this->model = new StockModel();
    $this->session = new Session();
  }// constructor

  public function exec() {
    $this->render(__CLASS__);
  }// exec

   public function view($id='') {
    if ($id=='') {
        $params =array('result' => $this->model->getAll(), 'status'=>0);
        $this->render(__CLASS__, $params);
    } else {
        $params =array('result' => $this->model->get($id), 'status'=>1);
        $this->render(__CLASS__, $params);
    }// else 
  } // view

  private function renderErrorMessage($message)  {
    $params = array('error_message' => $message);
    $this->render(__CLASS__, $params);
  } // renderErrorMessage
 
} // class