<?php
class Usuario
{
	var $nombre;
	var $apellido;
	var $usuario;
	var $password;
	var $direccion;
	var $edad;
	var $correo;
	var $estudios;
	
	function __construct($nombre, $apellido, $usuario, $password, $direccion, $correo, $edad,  $estudios)
	{
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->usuario = $usuario;
		$this->password = $password;
		$this->direccion = $direccion;
		$this->correo = $correo;
		$this->edad = $edad;
		$this->estudios = $estudios;
	}

}