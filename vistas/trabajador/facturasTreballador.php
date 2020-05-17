<?php include_once 'header.php';


include_once '../../Model/model.php';
$model = new Model();
$resTodo = $model->getAllFacturas();
  

    ?>
    
    <h3>Lista de facturas</h3>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">idFactura</th>
      <th scope="col">fecha</th>
      <th scope="col">descripcion</th>
      <th scope="col">precio</th>
      <th scope="col">idCliente</th>


    </tr>
  </thead>
  <tbody>
    <tr>
     
      <?php
foreach($resTodo as $facturas){
		echo "<th scope='row'>".$facturas['idFactura']."</th>";
		echo "<td>".$facturas['fecha']."</td>";
		echo "<td>".$facturas['descripción']."</td>";
		echo "<td>".$facturas['precio']."</td>";
		echo "<td>".$facturas['idCliente']."</td>";


			
}


?>
    </tr>

  </tbody>
</table>



<?php
include_once 'footer.php';
?>