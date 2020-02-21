<?


//CLASE

class Conectar{
	
	
	
		//Metodo conexion
	
		public function conexion(){
			
			
			try{
				
				
				$conexion=new PDO('mysql:host=localhost; dbname=mvc;','root',''); 
				
				$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Definimos los atributos del metodo con setAttribute
		
				$conexion->exec("SET CHARACTER SET utf8");//Utilizamos el metodo exec para definir la cadena de caracteres que queremos

		
				
				
			}catch (Exception $error){
				
				
				die ("Error " . $error->getLine() . $error->getMessage());
				
				
			}
			
			
			//Hacemos que el metodo nos devuelva la conexion si esta ha sido exitosa
			
			return $conexion;
			
		}
	
		//FIN DEL METODO
	
	
	
	
	
	
	
}
//FIN DE LA CLASE











?>