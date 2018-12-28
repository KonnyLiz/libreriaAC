<html>
  <head>
      <link rel="stylesheet" type="text/css" href="./assets/css/dompdf.css">
  </head>

<body>

  <header>
      <table>
          <tr>
              <td id="header_logo">
                  <img id="logo" src="./assets/img/logoXYZ.png">
              </td>
              <td id="header_texto">
                  <div>Ferreteria XYZ</div>
                  <div>Reporte de Clientes</div>
              </td>
              <td id="header_logo">
              </td>
          </tr>
      </table>
  </header>
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

  <footer>
      <div id="footer_texto">Reporte de Clientes</div>
  </footer>

  <table border="1" id="table_info">
       <thead>
           <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>DUI</th>
                <th>NIT</th>
                <th>Grupo</th>
                <th>Dirección</th>
           </tr>
       </thead>
       <tbody>
          <?php foreach ($resulClientes as $clientes) { ?>
            <tr>
                <td><?php echo $clientes->nombres;?></td>
                <td><?php echo $clientes->apellidos;?></td>
                <td><?php echo $clientes->telefono;?></td>
                <td><?php echo $clientes->dui;?></td>
                <td><?php echo $clientes->nit;?></td>
                <td><?php echo $clientes->grupo;?></td>
                <td><?php echo $clientes->direccion;?></td>
            </tr>
          <?php  }?>
       </tbody>
</table>



</body>
</html>
