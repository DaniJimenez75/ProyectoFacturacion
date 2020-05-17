<?php include_once 'header.php';
include_once '../../Model/model.php';

?>

<form method="POST" action="newCliente.php">
  <div class="container login-container">
  <div class="row">
    <div class=" col-md-6 offset-md-3 offset-lg-2 login-form-2">
        <h3>Agregar nuevo cliente</h3>
        
          <br>
             <div class="form-group">
             </div>
              <div class="form-group">
                <input type="text" name="username" placeholder="Username" class="form-control mr-sm-2" />
              </div>
              <div class="form-group">
                <input type="text" name="apellidos" placeholder="Apellidos" class="form-control mr-sm-2" />
              </div>
              <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control mr-sm-2" />
              </div>
              <div class="form-group">
                <input type="tel" name="telefono" placeholder="Telefono" class="form-control mr-sm-2" />
              </div>
              <div class="form-group">
                <input type="text" name="ciudad" placeholder="Ciudad" class="form-control mr-sm-2" />
              </div>
              <div class="form-group">
                <input type="password" name="password" placeholder="Contraseña" class="form-control mr-sm-2" />
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success my-2 my-sm-0">Agregar</button>
                <button type="button" class="btn btn-success" onclick="location.href='clientesTreballador.php'">Volver</button>

              </div>



<?php
include_once 'footer.php';
$model = new Model();
if($_SERVER['REQUEST_METHOD']=='POST') {

  $username=$_POST['username'];
  $apellidos = $_POST['apellidos'];
  $email=$_POST['email'];
  $telefono=$_POST['telefono'];
  $ciudad=$_POST['ciudad'];
  $password=$_POST['password'];


  $model->afegirClient($username,$apellidos,$email,$telefono,$ciudad,$password);
}
?>