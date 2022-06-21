<?php

class ConexionBBDD
{
  private static $instance;
  protected $servidor;
  protected $usuario;
  protected $contrasena;
  protected $baseDeDatos;
  protected $conexion;

  public function __construct()
  {
    $this->servidor = "localhost";
    $this->usuario = "porfidev";
    $this->contrasena = "X36repentance";
    $this->baseDeDatos = "agenda_proyecto";

    $this->conexion = mysqli_connect($this->servidor, $this->usuario, $this->contrasena);
  }

  public static function getInstance()
  {
    if (!self::$instance instanceof self) {
      self::$instance = new self();
    }

    return self::$instance;
  }

  public function getConnection(){
    return $this->conexion;
  }
}
