<?php include_once 'header.php';
include_once '../../Model/model.php';
$idCliente = $_GET['idCliente'];
$model = new Model();
$mostrar = $model->getCliente($idCliente);
foreach($mostrar as $cliente){
  $username =  $cliente['username'];
  $apellidos = $cliente['apellidos'];
  $email = $cliente['email'];
  $telefono = $cliente['telefono'];
  $ciudad = $cliente['ciudad'];
  $password = $cliente['password'];
}

?>
<br>
<form method="POST" action="editCliente.php">
  <div class="container login-container">
  <div class="row">
    <div class=" col-md-6 offset-md-3 offset-lg-2 login-form-2">
        <h3>Agregar nuevo cliente</h3>
         

             <div class="form-group">
             </div>
              <div class="form-group">
                Username:
                <input type="text" name="username" placeholder="Username" class="form-control mr-sm-2" value="<?php echo $username ?>"/>
              </div>
              <div class="form-group">
                Apellidos:
                <input type="text" name="apellidos" placeholder="Apellidos" class="form-control mr-sm-2" value="<?php echo $apellidos ?>"/>
              </div>
              <div class="form-group">
                Email:
                <input type="email" name="email" placeholder="Email" class="form-control mr-sm-2" value="<?php echo $email ?>"/>
              </div>
              <div class="form-group">
                Telefono:
                <input type="tel" name="telefono" placeholder="Telefono" class="form-control mr-sm-2" value="<?php echo $telefono ?>"/>
              </div>
              <div class="form-group">
                Ciudad:
                <input type="text" name="ciudad" placeholder="Ciudad" class="form-control mr-sm-2" value="<?php echo $ciudad ?>"/>
              </div>
              <div class="form-group">
                Contraseña:
                <input type="password" name="password" placeholder="Contraseña" class="form-control mr-sm-2" value="<?php echo $password ?>"/>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success my-2 my-sm-0">Editar</button>
                <button type="button" class="btn btn-success" onclick="location.href='clientesTreballador.php'">Volver</button>

              </div>



              <?php
              
              if($_SERVER['REQUEST_METHOD']=='POST') {
                $usernameNuevo=$_POST['username'];
                $apellidosNuevo = $_POST['apellidos'];
                $emailNuevo=$_POST['email'];
                $telefonoNuevo=$_POST['telefono'];
                $ciudadNuevo=$_POST['ciudad'];
                $passwordNuevo=$_POST['password'];
                $model->editarClient($idCliente,$usernameNuevo,$apellidosNuevo,$emailNuevo,$telefonoNuevo,$ciudadNuevo,$passwordNuevo);

              }
              include_once 'footer.php'; ?>

