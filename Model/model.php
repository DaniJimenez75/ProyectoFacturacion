<?php
class Model {

    protected $bd;
    protected $usuari="root";
    protected $password="";

    function __construct() {
		 
		try {
			
			$this->bd = new PDO('mysql:host=localhost;dbname=proyectofacturacion', 
					 $this->usuari, $this->password);  	   

		} catch (PDOException $e) {
			print "Error: " . $e->getMessage() . "<br/>";
			die();
		}

    }

    public function getAllClientes() {
	 $sql = "select * from clientes";	
         
    	 $ordre = $this->bd->prepare($sql);	
         $ordre->execute();   
         $res = $ordre->fetchAll(PDO::FETCH_ASSOC); 
         return $res;
    }
    public function getAllFacturas() {
        $sql = "select * from facturas";	
            
            $ordre = $this->bd->prepare($sql);	
            $ordre->execute();   
            $res = $ordre->fetchAll(PDO::FETCH_ASSOC); 
            return $res;
       }

       public function afegirClient($username,$apellidos,$email,$telefono,$ciudad,$password) {
        $sql ="insert into clientes(username,apellidos,email,telefono,ciudad,password) values 
                (:username,:apellidos,:email,:telefono,:ciudad,:password)";
       $ordre = $this->bd->prepare($sql);	 
       $ordre->bindValue(':username',$username);
       $ordre->bindValue(':apellidos',$apellidos);
       $ordre->bindValue(':email',$email);
       $ordre->bindValue(':telefono',$telefono);
       $ordre->bindValue(':ciudad',$ciudad);
       $ordre->bindValue(':password',md5($password));
       $res = $ordre->execute(); 
           return $res;
   
       }

       public function editarClient($idCliente,$username,$apellidos,$email,$telefono,$ciudad,$password) {
        $sql ="update clientes set username=:username,apellidos=:apellidos,email=:email,telefono=:telefono,
        ciudad=:ciudad,password=:password where idCliente=:idCliente";
       $ordre = $this->bd->prepare($sql);	 
       $ordre->bindValue(':idCliente',$idCliente);
       $ordre->bindValue(':username',$username);
       $ordre->bindValue(':apellidos',$apellidos);
       $ordre->bindValue(':email',$email);
       $ordre->bindValue(':telefono',$telefono);
       $ordre->bindValue(':ciudad',$ciudad);
       $ordre->bindValue(':password',md5($password));
       $res = $ordre->execute(); 
           return $res;
   
       }

       public function getCliente($idCliente) {
        $sql = "select * from clientes where idCliente=".$idCliente;	
            
            $ordre = $this->bd->prepare($sql);	
            $ordre->execute();   
            $res = $ordre->fetchAll(PDO::FETCH_ASSOC); 
            return $res;
       }

       
       


}

?>
