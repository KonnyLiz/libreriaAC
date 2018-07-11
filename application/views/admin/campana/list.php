 <section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            
                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Productos</li>
                            <li class="active">Campaña</li>
                        </ul>
                    </div>
                        <h1 class="h1">Campaña</h1>
                </div>
                    
<!-- Content Wrapper. Contains page content -->

<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion de la Campaña</h4>
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
                                        <?php if($permisos->insert == 1):?>

                                        <li><a href="#profile1" data-toggle="tab">Nuevo</a>
                                        </li><?php endif?>
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
                                    <th>Nombre</th>
                                    <th>Producto</th>
                                    <th>Cantidad a vender</th>
                                    <th>Fecha de inicio</th>
                                    <th>Fecha de finalizacion</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($campanas)):?>
                                    <?php foreach($campanas as $campana):?>
                                        <tr>
                                            <td><?php echo $campana->id;?></td>
                                            <td><?php echo $campana->nombre;?></td>
                                            <td><?php echo $campana->producto;?></td>
                                            <td><?php echo $campana->cantidad_a_vender;?></td>
                                            <td><?php echo $campana->fecha_i;?></td>
                                            <td><?php echo $campana->fecha_f;?></td>
                                            <?php $datacampana = $campana->id."*".$campana->nombre."*".$campana->producto."*".$campana->cantidad_a_vender."*".$campana->fecha_i."*".$campana->fecha_f;?>
                                            <td>
                                                <div class="btn-group">
                                                    
<?php if($permisos->update == 1):?><a href="<?php echo base_url()?>mantenimiento/campana/edit/<?php echo $campana->id;?>" class="btn btn-warning"><span class="fa fa-pencil" style="color: #fff"></span></a>
    
<?php endif?>
 <?php if($permisos->delete == 1):?> <a href="<?php echo base_url();?>mantenimiento/campana/delete/<?php echo $campana->id;?>" class="btn btn-danger btn-remove"><span class="fa fa-times" style="color: #fff"></span></a>
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
                                <form action="<?php echo base_url();?>mantenimiento/campana/store" method="POST">
                            
                            <div class="form-group <?php echo !empty(form_error("nombre"))? 'has-error':'' ?>">
                                <label for="nombre">Nombre:</label>
                                <input value="<?php echo set_value("nombre")?>" type="text" class="form-control" id="nombre" name="nombre">
                                <?php echo form_error("nombre", "<span class='help-block'>", "</span>");?>
                            </div>
                           <div class="form-group">
                                <label for="productos">Productos:</label>
                                <select name="producto" id="producto" class="form-control">
                                    <?php foreach($productos as $producto):?>
                                        <option value="<?php echo $producto->nombre?>"><?php echo $producto->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group <?php echo !empty(form_error("cantidad_a_vender"))? 'has-error':'' ?>">
                                <label for="cantidad_a_vender">Cantidad de Producto a Vender:</label>
                                <input value="<?php echo set_value("cantidad_a_vender")?>" type="text" class="form-control" id="cantidad_a_vender" name="cantidad_a_vender">
                                <?php echo form_error("cantidad_a_vender", "<span class='help-block'>", "</span>");?>
                            </div>
                             <div class="form-group <?php echo !empty(form_error("fecha_i"))? 'has-error':'' ?>">
                                <label for="precio">Fecha de inicio:</label>
                                <input value="<?php echo set_value("fecha_i")?>" type="date" class="form-control" id="fechai" name="fecha_i">
                                <?php echo form_error("fecha_i", "<span class='help-block'>", "</span>");?>
                            </div>
                            <div class="form-group <?php echo !empty(form_error("fecha_f"))? 'has-error':'' ?>">
                                <label for="precio">Precio de salida:</label>
                                <input value="<?php echo set_value("fecha_f")?>" type="date" class="form-control" id="fechaf" name="fecha_f">
                                <?php echo form_error("fecha_f", "<span class='help-block'>", "</span>");?>
                            </div>
                            
                            <div class="form-group ">
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
                        

