<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body style="background-color:#878778">
    <hr>

<form method="POST" action="controllogin.php">
  <div class="container login-container">
  <div class="row">
    <div class=" col-md-6 offset-md-3 offset-lg-2 login-form-2">
        <h3>Sistema de facturación</h3>
        
          <br>
             <div class="form-group">
            <label for="exampleFormControlSelect1">Elige si eres Cliente o Trabajador</label>
                <select class="form-control" id="exampleFormControlSelect1" name="rol">
                <option>Trabajador</option>
                <option>Cliente</option>
            </select>
             </div>
              <div class="form-group">
                <input type="text" name="username" placeholder="Coloca aqui tu email" class="form-control mr-sm-2" />
              </div>
              <div class="form-group">
                <input type="password" name="password" placeholder="Coloca aqui tu password" class="form-control mr-sm-2" />
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success my-2 my-sm-0">Acceso</button>
              </div>
              <?php
/* SI HAY ALGUN ERROR AL INICIAR SESIÓN*/
 if(isset($_GET["error"])) {
    $error=$_GET["error"]; 
    switch($error) {
      case 1:
           echo "Usuari o Password incorrectes";
      break;
      
      default:
        echo "Error en validar usuari";
      }
         
   }
   ?>
      </div>


    
  </div>
</div>
</form>
</body>
</html>
