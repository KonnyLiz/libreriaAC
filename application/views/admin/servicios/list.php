 <section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">

                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Productos</li>
                            <li class="active">Productos</li>
                        </ul>
                    </div>
                        <h1 class="h1">Productos</h1>
                </div>

<!-- Content Wrapper. Contains page content -->

<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion del Producto</h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


 <div class="col-md-12">
                        <div class="panel panel-default">

                            <div class="panel-body">
                                <div class="tab-wrapper tab-primary">

                                            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                          <div class="panel-body">

                            <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url();?>mantenimiento/servicios/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Servicios</a>
                </div>

                </div>

                            <table id="example1" class="table table-striped table-bordered" width= 100%>

                     <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Presentación</th>
                                    <th>Descripción</th>
                                    <th>Precio</th>
                                    <th>Mayoreo 1</th>
                                    <th>Mayoreo 2</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($servicios)):?>
                                    <?php foreach($servicios as $servicio):?>
                                        <tr>
                                            <td><?php echo $servicio->id_servicio;?></td>
                                            <td><?php echo $servicio->nombre;?></td>
                                            <td><?php echo $servicio->id_presentacion;?></td>
                                            <td><?php echo $servicio->descripción;?></td>
                                            <td><?php echo $servicio->precio;?></td>
                                            <td><?php echo $servicio->precio2;?></td>
                                            <td><?php echo $servicio->precio3;?></td>
                                            <?php $dataServicio = $servicio->id_servicio."*".$servicio->nombre."*".$servicio->id_presentacion."*".$servicio->descripción."*".$servicio->precio."*".$servicio->precio2."*".$servicio->precio3 ?>
                                            <td>
                                                
                                            <a href="<?php echo base_url()?>mantenimiento/servicios/edit/<?php echo $servicio->id_servicio;?>" class="btn btn-warning"><span class="fa fa-pencil" style="color: #fff"></span></a>
                                            </li>
                                            <a href="<?php echo base_url();?>mantenimiento/productos/delete/<?php echo $servicio->id_servicio;?>" class="btn btn-danger btn-remove"><span class="fa fa-times" style="color: #fff"></span></a>                                   
                                             </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>
                        <a href="<?php echo base_url();?>pdfcontroller/productos" target="_blank">
                            <button type="button" class="btn btn-success"><i class="fa fa-check"></i>Generrar Reporte</button>
                        </a>
                       </div>
                     </div>
                </div>
            </div>

                                        </div>
