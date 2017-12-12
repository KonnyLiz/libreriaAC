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
            <a href="javascript:void(0);"><i class="fa fa-cogs"></i><span>Configuración</span><i class="arrow fa fa-angle-right pull-right"></i></a>
            <ul>
               <li><a href="<?php echo base_url();?>mantenimiento/permisos">Permisos</a></li>
               
            </ul>
        </li>
        <li class="sub-menu">
            <a href="javascript:void(0);"><i class="fa fa-tag"></i><span>Productos</span><i class="arrow fa fa-angle-right pull-right"></i></a>
            <ul>
                <li><a href="<?php echo base_url();?>mantenimiento/categorias">Categorias</a></li>
                <li><a href="<?php echo base_url();?>mantenimiento/productos">Productos</a></li>
                <li><a href="<?php echo base_url();?>mantenimiento/Campana">Campaña</a></li>
            </ul>
        </li>
        <li class="sub-menu">
             <a href="javascript:void(0);"><i class="fa fa-desktop"></i><span>Registros</span><i class="arrow fa fa-angle-right pull-right"></i></a>
            <ul>
                <li><a href="<?php echo base_url();?>mantenimiento/iniciativas">Iniciativas</a></li>
                <li><a href="<?php echo base_url();?>mantenimiento/oportunidades">Oportunidades</a></li>
                <li><a href="<?php echo base_url();?>mantenimiento/clientes">Clientes</a></li>
                <li><a href="<?php echo base_url();?>mantenimiento/Usuarios">Usuario</a></li>
                <li><a href="<?php echo base_url();?>mantenimiento/Reclamos">Reclamos</a></li>
                <li><a href="<?php echo base_url();?>mantenimiento/Vendedores">Vendedores</a></li>
            </ul>
        </li>
       <li class="sub-menu">
            <a href="javascript:void(0);"><i class="fa fa-money"></i><span>Movimientos</span><i class="arrow fa fa-angle-right pull-right"></i></a>
            <ul>
                <li><a href="<?php echo base_url();?>movimientos/ventas/add">Realizar Venta</a></li>
                <li><a href="<?php echo base_url();?>movimientos/ventas">Registro de Ventas</a></li>
                <li><a href="<?php echo base_url();?>movimientos/reabastecer/add">Reabastecer</a></li>
                <li><a href="<?php echo base_url();?>movimientos/reabastecer">Reabastecimientos</a></li>
            </ul>
        </li>
         
    </ul>
</div>

        </aside>
</body>
</html>