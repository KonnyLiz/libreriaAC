 <section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            
                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Registros</li>
                            <li class="active">Reclamos</li>
                        </ul>
                    </div>
                        <h1 class="h1">Reclamos</h1>
                </div>
                    
<!-- Content Wrapper. Contains page content -->

<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion del Reclamo</h4>
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
                                        <li><?php if($permisos->insert == 1):?>

                                            <a href="#profile1" data-toggle="tab">Nuevo</a><?php endif?>
                                        </li>
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
                                    <th>#</th>
                                    <th>Vendedor</th>
                                    <th>Producto</th>
                                    <th>Reclamo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($reclamo)):?>
                                    <?php foreach($reclamo as $reclamos):?>
                                        <tr>
                                            <td><?php echo $reclamos->id;?></td>
                                            <td><?php echo $reclamos->vendedor;?></td>
                                            <td><?php echo $reclamos->producto;?></td>
                                            <td><?php echo $reclamos->reclamo;?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <?php if($permisos->update == 1):?><a href="<?php echo base_url()?>mantenimiento/reclamos/edit/<?php echo $reclamos->id;?>" class="btn btn-warning"><span class="fa fa-pencil" style="color: #fff"></span></a>
<?php endif?>
 <?php if($permisos->delete == 1):?><a href="<?php echo base_url();?>mantenimiento/reclamos/delete/<?php echo $reclamos->id;?>" class="btn btn-danger btn-remove"><span class="fa fa-times" style="color: #fff"></span></a>
<?php endif?>
                                                    
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>
                         <a href="<?php echo base_url();?>pdfcontroller/campanas" target="_blank">
                            <button type="button" class="btn btn-success"><i class="fa fa-check"></i>Generrar Reporte</button>
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
                                <form action="<?php echo base_url();?>mantenimiento/reclamos/store" method="POST">
                            <div class="form-group">
                                <label for="productos">Vendedor:</label>
                                <select name="vendedor" id="producto" class="form-control">
                                    <?php foreach($usuario as $usuarios):?>
                                        <option value="<?php echo $usuarios->nombres?>"><?php echo $usuarios->nombres;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                           <div class="form-group">
                                <label for="productos">Productos:</label>
                                <select name="producto" id="producto" class="form-control">
                                    <?php foreach($producto as $productos):?>
                                        <option value="<?php echo $productos->nombre;?>"><?php echo $productos->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                             <div class="form-group">
                                <label for="reclamo">Reclamo:</label>
                                <input type="text" class="form-control" id="nombre" name="reclamo">
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
                        

