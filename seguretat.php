<?php

session_start();
// comprovem que tenim enregistrat a la sessió el usuari validat
if(!isset($_SESSION['username']) ) {
   header('Location: ../../index.php');
   exit;      
} 

?>
