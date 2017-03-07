<?php
class Db{
	private $host='localhost';
	private $usuario='root';
	private $pass=''; 
	private $db='web1_unad'; 
   	private $link;
   	private $stmt;
   	private $array;
   	static $_instance;	

   /*La función construct es privada para evitar que el objeto pueda ser creado mediante new*/
   private function __construct(){
      $this->conectar();
   }
    
   /*Evitamos el clonaje del objeto. Patrón Singleton*/
   private function __clone(){ }

   /*Función encargada de crear, si es necesario, el objeto. Esta es la función que debemos llamar desde fuera de la clase para instanciar el objeto, y así, poder utilizar sus métodos*/
    public static function getInstance(){
      if (!(self::$_instance instanceof self)){
         self::$_instance=new self();
      }
      return self::$_instance;
   }

   /*Realiza la conexión a la base de datos.*/
   private function conectar(){
      $this->link=mysqli_connect($this->host, $this->usuario, $this->pass, $this->db)or die("Error " . mysqli_error($this->link));;
      @mysqli_query("SET NAMES 'utf8'");
   }   
   
     /*Método para ejecutar una sentencia sql*/
   public function ejecutar($sql){
	  $ej=$this->link;
      $this->stmt=$ej->query($sql);
	  //mysqli_query($sql,$this->link);
      return $this->stmt;
   }
   
 /*Método para evitar injecion sql*/
   public function real_escape_string($sql){
	  $ej=$this->link;
      $this->stmt=$ej->real_escape_string($sql);
	  //mysqli_real_escape_string($sql);
      return $this->stmt;
   }     
   
 //cerrar la conexion
    public function __destruct(){
		$this->link=mysqli_connect($this->host, $this->usuario, $this->pass, $this->db);       
  @mysqli_close($this->link);}
      
   /*Método para obtener una fila de resultados de la sentencia sql*/
   public function obtener_fila($stmt,$fila){	   
	 if ($fila==0){
		$this->array=$stmt->fetch_array(MYSQL_BOTH);			
      }else{
		 $stmt->data_seek(0);		  
         //mysql_data_seek($stmt,$fila);
         $this->array=$stmt->fetch_array(MYSQL_BOTH);
		  }
      return $this->array;
   }
   /*Método para obtener el numero de fila afectadas de la sentencia sql*/   
   public function obtener_numerofilaafectadas($stmt,$fila){
		$this->array=$stmt->fetch_row();
	     return $this->array;
   }
     //Devuelve el último id del insert introducido
   public function lastID(){
	   $ej=$this->link;
      return $ej->insert_id();
   }}	
?>