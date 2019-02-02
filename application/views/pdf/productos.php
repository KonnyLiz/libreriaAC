<html>
  <head>
      <link rel="stylesheet" type="text/css" href="./assets/css/dompdf.css">
  </head>

<body>

  <header>
      <table>
          <tr>
              <td id="header_texto">
                  <div>Libreria A&C</div>
                  <div>Reporte de Productos</div>
              </td>
              <td id="header_logo">
              </td>
          </tr>
      </table>
  </header>
  <footer>
      <div id="footer_texto">Reporte de Productos</div>
  </footer>

  <table border="1" id="table_info">
       <thead>
           <tr>
               <th>#</th>
               <th>Codigo</th>
               <th>Nombre</th>
               <th>Marca</th>
               <th>Descripcion</th>
               <th>Precio Entrada</th>
               <th>Precio Venta</th>
               <th>Precio Mayoreo</th>
               <th>Existencia</th>
           </tr>
       </thead>
       <tbody>
          <?php foreach ($resulProducto as $producto) { ?>
            <tr>
                <td><?php echo $producto->id;?></td>
                <td><?php echo $producto->codigo;?></td>
                <td><?php echo $producto->nombre;?></td>
                <td><?php echo $producto->id_marca;?></td>
                <td><?php echo $producto->descripcion;?></td>
                <td><?php echo $producto->precio_entrada;?></td>
                <td><?php echo $producto->precio;?></td>
                <td><?php echo $producto->precio_mayoreo1;?></td>
                <td><?php echo $producto->stock;?></td>
            </tr>
          <?php  }?>
       </tbody>
</table>



</body>
</html>
