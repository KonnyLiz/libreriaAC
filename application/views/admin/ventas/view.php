<div class="impresion">
<div class="row">
	<div class="col-xs-12 text-center">
		<b>Libreria A&C</b><br>
		Centro Comercial Terminal<br>
		Final 4ta Av. Nte, Ruta Militar<br>
		Local:16 San Miguel, El Salvador<br>
		Ferrufino de Padilla, Iris Yolanda<br>
		NIT: 1417-260464-001-7<br>
		NRC: 138513-0<br>
		Giro: Venta de papel, carton, libros, revistas y utiles escolares y de escritorio, actividades de fotocopias y de servicios de escritorios
	</div>
</div> <br>
<div class="row">
		
	<div class="">	
		<b>COMPROBANTE</b> <br>
		<b>Tipo de Comprobante:</b> <?php echo $venta->tipo_comprobante;?><br>
		<b>Serie:</b> <?php echo $venta->serie;?><br>
		<b>Nro de Comprobante:</b> <?php echo $venta->num_documento;?><br>
		<b>Fecha</b> <?php echo $venta->fecha;?><br>
		<b>Cajero:</b> <?php echo $venta->usuNombre." ".$venta->usuApellido;?>
	</div>	



<br>

		<table class="table">
			<thead>
				<tr>
					<th>Cantidad</th>
					<th>Nombre</th>
					<th>Precio</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($detalles as $detalle){?>
				<tr>
					<td><?php echo $detalle->cantidad;?></td>
					<td><?php echo $detalle->nombre;?></td>
					<td><?php echo $detalle->precio;?></td>
					<td><?php echo $detalle->importe;?></td>
				</tr>
				<?php } ?>
			</tbody>
			</table>
			<div style="text-align: left;">
			

				
					
					<h5>Exento: <?php echo "Esto aun no existe"?><h5>
					<h5>Subtotal No sujeto: <?php echo "Esto aun no existe"?><h5>
					<h5>Subtotal: <?php echo $venta->subtotal;?><h5>
					<h5>Total:<?php echo $venta->total;?><h5>			

			</div>
	</div>	

</div>