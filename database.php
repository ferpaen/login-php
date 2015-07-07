<?php
class Database {
	private static $dbName = 'webtt' ; 
	private static $dbHost = 'localhost' ;
	private static $dbUsername = 'root';
	private static $dbUserPassword = '';
	private static $cont  = null;

	/* $options nos permitirá que la respuesta de todas las consultas lleve la codificación de caracteres correcta. */
	private static $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 
	
	/* Este es el constructor de base de datos de la clase. Dado que es una clase estática,
	 * no se permite la inicialización de esta clase. Para evitar el mal uso de la clase,
	 * se utiliza una función de "die" para recordar a los usuarios.*/
	public function __construct(){
		exit('No se ha podido conectar con la base de datos');
	}
	
	/* Esta es la función principal de esta clase. Utiliza patrón singleton para asegurarse de
	 * que existe sólo una conexión de PDO a través de toda la aplicación. Ya que es un método
	 * estático. Utilizamos bases de datos :: connect () para crear una conexión.*/
	public static function connect(){
		if ( null == self::$cont ){      
			try{
				self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);  
			}
			catch(PDOException $e){
				die($e->getMessage());  
			}
		} 
		return self::$cont;
	}
	
	// Cierra la conexión con la base de datos.
	public static function disconnect(){
		self::$cont = null;
	}
}
?>