<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
 <aside class="sidebar">
            <div id="leftside-navigation" class="nano">
    <ul class="nano-content">
        <li>
            <a href="<?php echo base_url();?>dashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
        </li>
      
        <li class="sub-menu">
            <a href="javascript:void(0);"><i class="fa fa-tag"></i><span>Inventarios</span><i class="arrow fa fa-angle-right pull-right"></i></a>
            <ul>
                <li><a href="<?php echo base_url();?>mantenimiento/categorias">Categorias</a></li>
                <li><a href="<?php echo base_url();?>mantenimiento/marcas">Marcas</a></li>
                <li><a href="<?php echo base_url();?>mantenimiento/presentacion">Prsentacion</a></li>
                <li><a href="<?php echo base_url();?>mantenimiento/productos">Productos</a></li>
                <li><a href="<?php echo base_url();?>mantenimiento/Servicios">Servicios</a></li>
                <li><a href="<?php echo base_url();?>movimientos/reabastecer/add">Abastecer</a></li>
                <li><a href="<?php echo base_url();?>movimientos/reabastecer">Abastecimientos</a></li>
            </ul>
        </li>
        <li class="sub-menu">
             <a href="javascript:void(0);"><i class="fa fa-desktop"></i><span>Registros</span><i class="arrow fa fa-angle-right pull-right"></i></a>
            <ul>
                <li><a href="<?php echo base_url();?>mantenimiento/clientes">Clientes</a></li>
                <li><a href="<?php echo base_url();?>mantenimiento/Usuarios">Usuarios</a></li>
                <li><a href="<?php echo base_url();?>mantenimiento/Proveedores">Proveedores</a></li>
            </ul>
        </li>
       <li class="sub-menu">
            <a href="javascript:void(0);"><i class="fa fa-money"></i><span>Movimientos</span><i class="arrow fa fa-angle-right pull-right"></i></a>
            <ul>
               
                <li><a href="<?php echo base_url();?>movimientos/ventas/add">Realizar Venta</a></li>
                <li><a href="<?php echo base_url();?>movimientos/ventas">Registro de Ventas</a></li>
            </ul>
        </li>
           <li class="sub-menu">
            <a href="javascript:void(0);"><i class="fa fa-cogs"></i><span>Configuración</span><i class="arrow fa fa-angle-right pull-right"></i></a>
            <ul>
               <li><a href="<?php echo base_url();?>mantenimiento/permisos">Permisos</a></li>
               
            </ul>
        </li>
        <li class="sub-menu">
            <a href="javascript:void(0);"><i class="fa fa-cogs"></i><span>Reportes</span><i class="arrow fa fa-angle-right pull-right"></i></a>
            <ul>
               <li><a href="<?php echo base_url();?>pdfcontroller/inventario">Inventarios</a></li>
               <li><a href="<?php echo base_url();?>mantenimiento/Caja">Caja</a></li>
            </ul>
        </li>
    </ul>
</div>

        </aside>
</body>
</html>