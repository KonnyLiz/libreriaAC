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
                  <div>Reporte de Ventas</div>
              </td>
              <td id="header_logo">
              </td>
          </tr>
      </table>
  </header>
  <footer>
      <div id="footer_texto">Reporte de Ventas</div>
  </footer>
  <table border="1" id="table_info">
       <thead>
           <tr>
               <th>Cliente</th>
               <th>Fecha</th>
               <th>Vendedor</th>
               <th>Sub-Total</th>
               <th>Iva</th>
               <th>Descuento</th>
               <th>Total</th>
           </tr>
       </thead>
       <tbody>
          <?php foreach ($resulVentas as $venta) { ?>
            <tr>
                <td><?php $Cli_id = $venta->cliente_id;
                    $resulCli= $this->Pdf_model->getPdfclient($Cli_id);
                foreach ($resulCli as $cli) 
                {
                   echo $cli->nombres;
                } 
                ?></td>
                <td><?php echo $venta->fecha;?></td>
                <td><?php $Usu_id = $venta->usuario_id;
                    $resulUsu= $this->Pdf_model->getPdfusu1($Usu_id);
                foreach($resulUsu as $usu) 
                {
                   echo $usu->nombres;
                } 
                ?></td>
                <td><?php echo $venta->subtotal;?></td>
                <td><?php echo $venta->iva;?></td>
                <td><?php echo $venta->descuento;?></td>
                <td><?php echo $venta->total;?></td>
            </tr>
          <?php  }?>
       </tbody>
</table>



</body>
</html>
