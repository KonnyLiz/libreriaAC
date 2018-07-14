<section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">

                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Productos</li>
                            <li class="active">Salidas</li>
                        </ul>
                    </div>
                        <h1 class="h1">Salidas</h1>
                </div>

<!-- Content Wrapper. Contains page content -->

<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion de las salidas/h4>
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
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#home1" data-toggle="tab">Lista</a>
                                        </li>
                                        <li>
                                            <?php if($permisos->insert == 1):?>
<a href="#profile1" data-toggle="tab">Nuevo</a>
                                        <?php endif?></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home1">

                                            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                          <div class="panel-body">
                            <table id="example1" class="table table-striped table-bordered" >

                     <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Producto</th>
                                    <th>Usuario</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($salida)):?>
                                    <?php foreach($salida as $salidas):?>
                                        <tr>
                                            <td><?php echo $salidas->fecha;?></td>
                                            <td><?php echo $salidas->producto_id;?></td>
                                            <td><?php echo $salidas->usuario_id ;?></td>
                                            <?php $datasalida = $salidas->id."*".$salidas->fecha."*".$salidas->producto_id."*".$salidas->cantidad."*".$salidas->descripcion."*".$salidas->usuario_id;?>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view-producto" data-toggle="modal" data-target="#modal-default" value="<?php echo $datasalida;?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                    <?php if($permisos->update == 1):?>  <a href="<?php echo base_url()?>mantenimiento/Salidas/edit/<?php echo $salidas->id;?>" class="btn btn-warning"><span class="fa fa-pencil" style="color: #fff"></span></a>
                                            <?php endif?>
                                             <?php if($permisos->delete == 1):?><a href="<?php echo base_url();?>mantenimiento/Salidas/delete/<?php echo $salidas->id;?>" class="btn btn-danger btn-remove"><span class="fa fa-times" style="color: #fff"></span></a>
                                            <?php endif?>


                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>
                        <a href="<?php echo base_url();?>pdfcontroller/usuarios" target="_blank">
                        <button type="button" class="btn btn-success"><i class="fa fa-check"></i>Reporte General</button>
                        </a>
                       </div>
                     </div>
                </div>
            </div>

                                        </div>
                                        <div class="tab-pane" id="profile1">

                                           <div class="panel-body">
                                           <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>

                             </div>
                        <?php endif;?>

                            <form action="<?php echo base_url();?>mantenimiento/salidas/store" method="POST">
                                 <div class="form-group">
                                      <label for="">Fecha:</label>
                                      <input type="date" class="form-control" id="fecha" name="fecha" required>
                                  </div>    
                            <div class="form-group">
                                <label for="productos">Producto:</label>
                                <select name="producto" id="producto" class="form-control">
                                    <?php foreach($producto as $productos):?>
                                        <option value="<?php echo $productos->id?>"><?php echo $productos->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                             <div class="form-group">
                                      <label for="">Cantidad:</label>
                                      <input type="number" class="form-control" id="cantidad" name="cantidad" required>
                                  </div>  
                             <div class="form-group">
                                      <label for="">Descripción:</label>
                                      <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                                  </div>  
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                            </div>
                        </form>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        


