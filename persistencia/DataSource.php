<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/configuracion/ParametrosSistema.php");
class DataSource
{
	private $cadenaConexion;
	private $conexion;

	public function __construct(){
		try{
			$Parameter = new ParametrosSistema();
			$this->cadenaConexion = "mysql:host=".$Parameter->getIPBD().";dbname=".$Parameter->getNombreBD();
			$this->conexion = new PDO($this->cadenaConexion,
				$Parameter->getUsuarioBD(),
				$Parameter->getClaveBD());

		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function ejecutarConsulta($sql,$values = array()){
		if($sql != ""){
			$consulta = $this->conexion->prepare($sql);
			$consulta->execute($values);
			$tabla_datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
			return $tabla_datos;
		}else{
			return 0;
		}
	}

	public function ejecutarActualizacion($sql ,$values = array()){
		if($sql != ""){
			$consulta = $this->conexion->prepare($sql);
			$consulta->execute($values);
			$numero_tablas_afectadas = $consulta->rowCount();
			return $numero_tablas_afectadas;
		}else{
			return 0;
		}
	}
}
?>
