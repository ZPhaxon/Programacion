<?php
abstract class Usuarios{ 
    private $nombres;
    private $apellidos;
	private $fechaNacimiento;
	private $tipoDocumento;
	private $numeroDocumento;
    
function __construct($nombres,$apellidos,$fechaNacimiento,$tipoDocumento,$numeroDocumento){
    $this-> nombres = $nombres;
    $this-> apellidos = $apellidos;
	$this-> fechaNacimiento = $fechaNacimiento;
    $this-> tipoDocumento = $tipoDocumento;
	$this-> numeroDocumento = $numeroDocumento;
	}
	public function obtenerNombres(){
	return $this->nombres;
 
}
public function obtenerApellidos(){
	return $this->apellidos;


}
public function actualizarNombres($nuevoNombre){
	$this->nombres =$nuevoNombre;

}
}
    ?>
