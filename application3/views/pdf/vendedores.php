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
      <div id="footer_texto">Reporte de Ventas grupo 1</div>
  </footer>
  <table border="1" id="table_info">
       <thead>
           <tr>
               <th>Vendedor</th>
               <th>Total</th>
               <th>Comición</th>
           </tr>
       </thead>
       <tbody>
          <?php foreach ($resulVentas as $venta) { ?>
         <?php  
         		$cant = $venta->total;
          		$cant = $cant*0.04;

          ?>
            <tr>
                
                <td><?php $Usu_id = $venta->usuario_id;
                    $resulUsu= $this->Pdf_model->getPdfusu1($Usu_id);
                foreach($resulUsu as $usu) 
                {
                   echo $usu->nombres;
                } 
                ?></td>
                <td><?php echo $venta->total;?></td>
                 <td><?php echo $cant;?></td>
            </tr>
          <?php  }?>
       </tbody>
</table>



</body>
</html>
