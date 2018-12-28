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
                        <?php if($permisos->insert == 1):?>

                        <a href="<?php echo base_url();?>mantenimiento/productos/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Productos</a>
                    <?php endif?>
                </div>

                </div>

                            <table id="example1" class="table table-striped table-bordered" width= 100%>

                     <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Marca</th>
                                    <th>Proveedor</th>
                                    <th>Precio</th>
                                    <th>Mayoreo 1</th>
                                    <th>Mayoreo 2</th>
                                    <th>Stock</th>
                                    <th>Categoria</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($productos)):?>
                                    <?php foreach($productos as $producto):?>
                                        <tr>
                                            <td><?php echo $producto->codigo;?></td>
                                            <td><?php echo $producto->nombre;?></td>
                                            <td><?php echo $producto->descripcion;?></td>
                                            <td><?php echo $producto->id_marca;?></td>
                                            <td><?php echo $producto->id_proveedor;?></td>
                                            <td><?php echo $producto->precio;?></td>
                                            <td><?php echo $producto->precio_mayoreo1;?></td>
                                            <td><?php echo $producto->precio_mayoreo2;?></td>
                                            <td><?php echo $producto->stock;?></td>
                                            <td><?php echo $producto->categoria_id;?></td>
                                            <?php $dataProducto = $producto->codigo."*".$producto->nombre."*".$producto->descripcion."*".$producto->id_marca."*".$producto->id_proveedor."*".$producto->precio."*".$producto->precio_mayoreo1."*".$producto->precio_mayoreo2."*".$producto->stock."*".$producto->categoria_id ?>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view-producto" data-toggle="modal" data-target="#modal-default" value="<?php echo $dataProducto;?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                            </li><?php if($permisos->update == 1):?> <a href="<?php echo base_url()?>mantenimiento/productos/edit/<?php echo $producto->id;?>" class="btn btn-warning"><span class="fa fa-pencil" style="color: #fff"></span></a>
                                                    <?php if($permisos->update == 1):?>
                                            </li><?php endif?>

                                            <?php endif?>
                                            <?php if($permisos->delete == 1):?> <a href="<?php echo base_url();?>mantenimiento/productos/delete/<?php echo $producto->id;?>" class="btn btn-danger btn-remove"><span class="fa fa-times" style="color: #fff"></span></a>
                                            <?php endif?>


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
