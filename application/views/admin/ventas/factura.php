<table class="table table-bordered">
  <thead>
    <tr>
      <th>Codigo</th>
      <th>Nombre</th>
      <th>Precio</th>
      <th>Cantidad</th>
      <th>Importe</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($detalles as $detalle){?>
    <tr>
      <td><?php echo $detalle->codigo;?></td>
      <td><?php echo $detalle->nombre;?></td>
      <td><?php echo $detalle->precio;?></td>
      <td><?php echo $detalle->cantidad;?></td>
      <td><?php echo $detalle->importe;?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
