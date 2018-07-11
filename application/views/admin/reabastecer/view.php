
<div class="row">
	<div class="col-xs-12 text-center">
		<b>Ferreteria</b><br>
		Barrio La Merced, San Miguel <br>
		Tel. 481890 <br>
		Email:ferreteria@gmail.com
	</div>
</div> <br>
<div class="row">
	<div class="col-xs-6">	
		<b>Abastecer Producto</b><br>
		
		<b>ID reabastecimiento:</b> <?php echo $datos->id;?> <br>
		<b>Fecha:</b> <?php echo $datos->fecha;?> <br>
		<b>Encargado:</b> <?php echo $datos->nombres." ".$datos->apellidos;?> <br>

	</div>	
</div>
<br>
<div class="row">
	<div class="col-xs-12">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Codigo</th>
					<th>Nombre</th>
					<th>Precio Entrada</th>
					<th>Cantidad</th>
					<th>Importe</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php foreach($detalles as $detalle){?>
					<td><?php echo $detalle->codigo;?></td>
					<td><?php echo $detalle->nombre;?></td>
					<td><?php echo $detalle->precio_entrada;?></td>
					<td><?php echo $detalle->cantidad_abastecer;?></td>
					<td><?php echo $detalle->importe;?></td>
				</tr>
				<?php } ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="4" class="text-right"><strong>Total:</strong></td>
					<td><?php echo $datos->total_abastecer;?></td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>