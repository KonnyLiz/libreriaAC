<html>
  <head>
      <link rel="stylesheet" type="text/css" href="./assets/css/dompdf.css">
  </head>

<body>

  <header>
  <div style="text-align: center">
      <h3>Libreria A&C</h3>
      <h4>Reporte general de Inventario</h4>
  </div>
  </header>
  <footer>
      <div id="footer_texto">Libreria A&C</div>
  </footer>
<p align="right">
<?php
$fecha = date('Y-m-j H:i:s'); 
$nuevafecha = strtotime ( '+10 hour' , strtotime ( $fecha ) ) ;
$nuevafecha = date ( 'j/m/Y  H:i:s' , $nuevafecha );
            //echo $nuevafecha." hrs<br>";
            $dia = date("j"); 
            $mes = date("n"); 
            $anio = date("Y"); 
            $m="";
            switch ($mes) {
                case 1:$m="Enero"; break;
                case 2:$m="Febrero"; break;
                case 3:$m="Marzo"; break;
                case 4:$m="Abril"; break;
                case 5:$m="Mayo"; break;
                case 6:$m="Junio"; break;
                case 7:$m="Julio"; break;
                case 8:$m="Agosto"; break;
                case 9:$m="Septiembre"; break;
                case 10:$m="Octubre"; break;
                case 11:$m="Noviembre"; break;
                case 12:$m="Diciembre"; break;
            }
            echo $dia." de ".$m." de ".$anio;
            ?>
</p>

  <table  id="table_info" style="width: 100%; border-collapse: collapse" border>
       <thead>
           <tr>
               <th style="border: 1px solid #000;">Nombre</th>
               <th style="border: 1px solid #000;">Marca</th>
               <th style="border: 1px solid #000;">Stock</th>
               <th style="border: 1px solid #000;">Proveedor</th>
               
           </tr>
       </thead>
       <tbody style="text-align: center;">
       <?php $n=0; ?>
          <?php foreach ($resulProducto as $producto) { ?>
            <tr >
                <td style="border: 1px solid #000;"><?php echo $producto->nombre;?></td>
                <td style="border: 1px solid #000;"><?php echo $producto->id_marca;?></td>
                <td style="border: 1px solid #000;"><?php echo $producto->stock;?></td>
                <td style="border: 1px solid #000;"><?php echo $producto->id_proveedor;?></td>
            </tr>
            <?php $n++;}?>
             <tr>
            <td colspan="4"  align="right" style="border: 1px solid #000;"><?php echo "<b>Cantidad de productos ingresados: </b>". $n;?></td>
            </tr>
       </tbody>
</table>



</body>

</style>
</html>
