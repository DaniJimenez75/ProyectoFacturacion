<?php include_once 'header.php';


include_once '../../Model/model.php';
$model = new Model();
$resTodo = $model->getAllClientes();
  

    ?>
    
    <h3>Lista de clientes</h3>
    <button type="button" class="btn btn-success" onclick="location.href='newCliente.php'">Agregar Cliente</button>
    <br>
    <br>
    <div class="table-responsive">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">idCliente</th>
      <th scope="col">username</th>
      <th scope="col">nombre</th>
      <th scope="col">apellidos</th>
      <th scope="col">email</th>
      <th scope="col">telefono</th>
      <th scope="col">ciudad</th>

    </tr>
  </thead>
  <tbody>
   
    
      <?php
foreach($resTodo as $clientes){
    echo "<tr>";
		echo "<th scope='row'>".$clientes['idCliente']."</th>";
		echo "<td>".$clientes['username']."</td>";
		echo "<td>".$clientes['nombre']."</td>";
		echo "<td>".$clientes['apellidos']."</td>";
		echo "<td>".$clientes['email']."</td>";
    echo "<td>".$clientes['telefono']."</td>";
    echo "<td>".$clientes['ciudad']."</td>";
    echo "<td><button type='button' class='btn btn-primary'><a href='editCliente.php?idCliente=".$clientes['idCliente']."'>Editar</a></button></td>";
    echo "<td><button type='button' class='btn btn-danger'>Eliminar</button></td>";
        

			
}


?>
    </tr>

  </tbody>
</table>

    </div>

<?php
include_once 'footer.php';
?>
