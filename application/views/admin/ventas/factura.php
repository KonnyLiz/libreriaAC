<br><br><br><br>
<?php
$fechas = $venta->fecha;
$ano = substr($fechas, -10, 4);
$mes = substr($fechas, -5, 2);
$dia = substr($fechas, -2, 2); ?>
<table style="margin-left: 260px;">
  <tbody>
    <tr>
      <td style="width: 75px;"><?php echo $dia;?></td>
      <td style="width: 60px;"><?php echo $mes;?></td>
      <td style="width: 10px;"><?php echo $ano;?></td>
    </tr>
  </tbody>
</table><br>
<div style="margin-left: 60px;"><?php echo $venta->nombres." ".$venta->apellidos;?></div><br><br><br><br><br><br><br>





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
<div style="position: fixed; top:585px; margin-left: 470px;"><?php echo $venta->subtotal;?></div><br>
<div style="position: fixed; top:715px; margin-left: 470px;"><?php echo $venta->total;?></div>
