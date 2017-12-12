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
                  <div>Reporte de Usuarios</div>
              </td>
               <td id="header_logo">
              </td>
          </tr>
      </table>
        <footer      <div id="footer_texto">Reporte de Usuarios</div>
  </footer>>


  <table border="1" id="table_info">
       <thead>
           <tr>
              
              <th>Nombre</th>
              <th>Apellido</th>
              <th>DUI</th>
              <th>NIT</th>
              <th>Grupo</th>
              <th>Telefono</th>
              <th>E-mail</th>
              <th>Username</th>
           </tr>
       </thead>
       <tbody>
          <?php foreach ($resulUsuarios as $usuarios) { ?>
            <tr>
               <td><?php echo $usuarios->nombres;?></td>
               <td><?php echo $usuarios->apellidos;?></td>
               <td><?php echo $usuarios->dui;?></td>
               <td><?php echo $usuarios->nit;?></td>
               <td><?php echo $usuarios->grupo;?></td>
               <td><?php echo $usuarios->telefono;?></td>
               <td><?php echo $usuarios->email;?></td>
               <td><?php echo $usuarios->username;?></td>
            </tr>
          <?php  }?>
       </tbody>
</table>



</body>
</html>
