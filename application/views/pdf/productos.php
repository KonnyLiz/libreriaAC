<html>
  <head>
      <link rel="stylesheet" type="text/css" href="./assets/css/dompdf.css">
  </head>

<body>

  <header>
              
                  <div style="text-align: center;">Libreria A&C</div>
                  <div style="text-align: center;">Reporte de Productos</div>
           
  </header>
  <footer>
      <div id="footer_texto">Reporte de Productos</div>
  </footer>

  <table border="1" style="border-collapse: collapse;" id="table_info">
       <thead>
           <tr>
               <th>#</th>
               <th>Codigo</th>
               <th>Nombre</th>
               <th>Marca</th>
               <th>Presentacion</th>
               
               <th>Precio Venta</th>
               <th>Precio Mayoreo >= 12 </th>
               <th>Precio Mayoreo >= 25 </th>
              
           </tr>
       </thead>
       <tbody>
          <?php foreach ($resulProducto as $producto) { ?>
            <tr>
                <td><?php echo $producto->id;?></td>
                <td><?php echo $producto->codigo;?></td>
                <td><?php echo $producto->nombre;?></td>
                <td><?php echo $producto->id_marca;?></td>
                <td><?php echo $producto->id_presentacion;?></td>
                
                <td><?php echo $producto->precio;?></td>
                <td><?php echo $producto->precio_mayoreo1;?></td>
                <td><?php echo $producto->precio_mayoreo2;?></td>
                
            </tr>
          <?php  }?>
       </tbody>
</table>



</body>
</html>
