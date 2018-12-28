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
                  <div>Reporte General de Oportunidades Hechos Clientes</div>
              </td>
              <td id="header_logo">
              </td>
          </tr>
      </table>
  </header>
  <footer>
      <div id="footer_texto">Reporte de Oportunidades/Clientes</div>
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
            ?></p><br>
  <p align="left"><b>Lista de Oportunidades</b></p>
  <table border="1" id="table_info">
       <thead>
           <tr>
               <th>Nombre</th>
               <th>LLamada</th>
               <th>Respuesta#1</th>
               <th>Reunion</th>
               <th>Respuesta#2</th>
               <th>Grupo</th>
           </tr>
       </thead>
       <tbody>
       <?php $n=0; ?>
          <?php foreach ($resulOportunidades1 as $oportunidades1) { ?>
            <tr>
                <td><?php echo $oportunidades1->nombre;?></td>
                <td><?php echo $oportunidades1->llamada;?></td>
                <td><?php echo $oportunidades1->respuesta1;?></td>
                <td><?php echo $oportunidades1->reunion;?></td>
                <td><?php echo $oportunidades1->respuesta2;?></td>
                <td><?php echo $oportunidades1->id_grupo;?></td>
            </tr>
          <?php $n++;}?>
             <tr>
            <td colspan="7"  align="right"><?php echo "<b>Cantidad de Oportunidades: </b>". $n;?></td>
            </tr>
       </tbody>
</table><br>
<p align="left"><b>Lista de Oportunidades Hechas Clientes</b></p>
  <table border="1" id="table_info">
       <thead>
           <tr>
               <th>Nombres</th>
               <th>Apellido</th>
               <th>Telefono</th>
               <th>Dui</th>
               <th>Nit</th>
               <th>Direccion</th>
               <th>Grupo</th>
           </tr>
       </thead>
       <tbody>
       <?php $n=0; ?>
          <?php foreach ($resulClientes1 as $clientes1) { ?>
            <tr>
                <td><?php echo $clientes1->nombres;?></td>
                <td><?php echo $clientes1->apellidos;?></td>
                <td><?php echo $clientes1->telefono;?></td>
                <td><?php echo $clientes1->dui;?></td>
                <td><?php echo $clientes1->nit;?></td>
                <td><?php echo $clientes1->direccion;?></td>
                <td><?php echo $clientes1->grupo;?></td>
            </tr>
          <?php $n++;}?>
             <tr>
            <td colspan="7"  align="right"><?php echo "<b>Cantidad de Oportunidades hechas Clientes: </b>". $n;?></td>
            </tr>
       </tbody>
</table>


</body>
</html>
