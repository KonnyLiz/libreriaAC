<?php
$fechas = $venta->fecha;
$ano = substr($fechas, -10, 4);
$mes = substr($fechas, -5, 2);
$dia = substr($fechas, -2, 2);
echo $dia.$mes.$ano ?>

<br><br><br><br><br><div style="margin-left: 60px;"><?php echo $venta->nombres." ".$venta->apellidos;?></div><br><br><br><br><br><br><br>





<table class="table table-bordered">
  <thead>
    <tr>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($detalles as $detalle){?>
    <tr>
      <td style="width: 30px;"><?php echo $detalle->cantidad;?></td>
      <td style="width: 285px;"><?php echo $detalle->nombre;?></td>
      <td style="width: 130px;">$<?php echo $detalle->precio;?></td>
      <td>$<?php echo $detalle->importe;?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php echo $venta->subtotal;?><br>
<?php echo $venta->total;?>
