<?php
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['rol'])) {
$username=$_POST['username'];
$password = $_POST['password'];
$rol = $_POST['rol'];


/* CONEXIÓN A LA BASE DE DATOS */
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "proyectoFacturacion";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 

if($rol == 'Trabajador'){
    $result = mysqli_query($conn, "SELECT * FROM trabajadores WHERE username = '$username'");
    echo 'trabajador';


}else if($rol == 'Cliente'){
    $result = mysqli_query($conn, "SELECT * FROM clientes WHERE username = '$username'");
    echo 'Cliente';

}
			
      $row = mysqli_fetch_assoc($result);


      /* SI EL PASSWORD ES IGUAL QUE EL PASSWORD QUE HAY GUARDADO
      EN LA BASE DE DATOS INICIARÁ SESIÓN */
			if ($password == $row['password']) {
                
       session_start();

        $_SESSION['username'] = $username;  

        if($rol == 'Trabajador'){
            
            header('Location: vistas/trabajador/indexTreballador.php');
        }
        if($rol == 'Cliente'){
            
            header('Location: vistas/cliente/indexCliente.php');
        }

            }else {     // 'Dades no enviades
                header('Location: index.php?error=1');
            }
     
      
        }else {     // 'Dades no enviades
            header('Location: index.php?error=2');
        }
 
      

  ?>