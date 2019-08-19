<?php
/**
 * Clase básica para adminsitrar sesiones
 */
class Session {
  /**
   * Inicializa la sesión
   */
  public function init()   {
    session_start();
  } // init

  /**
   * Agrega un elemento a la sesión
   * @param string $key la llave del array de sesión
   * @param string $value el valor para el elemento de la sesión
   */
  public function add($key, $value)  {
    $_SESSION[$key] = $value;
  } //add

  /**
   * Retorna un elemento a la sesión
   * @param string $key la llave del array de sesión
   * @return string el valor del array de sesión si tiene valor
   */
  public function get($key) {
    return !empty($_SESSION[$key]) ? $_SESSION[$key] : null;
  } //get

  /**
   * Retorna todos los valores del array de sesión
   * @return el array de sesión completo
   */
  public function getAll() {
    return $_SESSION;
  } // getAll

  /**
   * Remueve un elemento de la sesión
   * @param string $key la llave del array de sesión
   */
  public function remove($key) {
    if(!empty($_SESSION[$key]))
      unset($_SESSION[$key]);
  } // remove

  /**
   * Cierra la sesión eliminando los valores
   */
  public function close()   {
    session_unset();
    session_destroy();
  } //close

  /**
   * Retorna el estatus de la sesión
   * @return string el estatus de la sesión
   */
  public function getStatus() {
    return session_status();
  } // getStatus

} //class