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
                  <div>Reporte de Iniciativas Hechas Oportunidades</div>
              </td>
              <td id="header_logo">
              </td>
          </tr>
      </table>
  </header>
  <footer>
      <div id="footer_texto">Reporte de Iniciativas/Oportunidades</div>
  </footer>
<p align="right">
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

</p>
  <p align="left"><b> Iniciativas</b></p>
  <table border="1" id="table_info">
       <thead>
           <tr>
               <th>#</th>
               <th>Grupo</th>
               <th>Nombre</th>
               <th>Contacto</th>
           </tr>
       </thead>
       <tbody>
          <?php foreach ($resulIniciativas as $iniciativa) { ?>
            <tr>
                <td><?php echo $iniciativa->id_iniciativa;?></td>
                <td><?php echo $iniciativa->grupo;?></td>
                <td><?php echo $iniciativa->nombre;?></td>
                <td><?php echo $iniciativa->contacto;?></td>
            </tr>
          <?php  }?>
       </tbody>
</table><br>
<p align="left"><b> Oportunidades</b></p>
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
            <td colspan="7"  align="right"><?php echo "<b>Cantidad de Iniciativas echas Oportunidades: </b>". $n;?></td>
            </tr>
       </tbody>
</table>




</body>
</html>
