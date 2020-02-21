<?php


//CLASE-
class Productos_modelo{
	
	
	
	private $db;
	
	private $productos;
	
	//CONSTRUCTOR--
	
	public function __construct(){
		
		
		require_once("modelo/Conectar.php");
		
		$this->db=Conectar::conexion(); //convertimos db en la conexion llamando al metodo conexion
		
		$this->productos=array();//convierto $productos en un array
		
		
		
		
	}
	
	//FIN DEL CONSTRUCTOR--
	
	//METODO---
	
	public function get_productos(){
		
		
		$consulta=$this->db->query("SELECT * FROM PRODUCTOS");
		
		
		while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
			
		$this->productos[]=$filas;
			
			
		}
		
		return $this->productos;
		
		
	}//FIN DEL METODO---
	
	
	
	
}//FIN DE LA CLASE-


?>