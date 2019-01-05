<section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            
                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Inventario</li>
                            <li class="active">Servicio</li>
                        </ul>
                    </div>
                        <h2 class="h1">Agregar Servicio</h1>
                </div>
<!-- Content Wrapper. Contains page content -->
<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Datos</h3>
                                
                            </div>
                            <div class="panel-body">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
                             </div>
                        <?php endif;?>
                      <form action="<?php echo base_url();?>mantenimiento/servicios/update" method="POST">
                            
                            <input type="hidden" name="id" value="<?php echo $servicio->id_servicio;?>">

                            <div class="form-group">
                                <label for="codigo">Nombre del servicio:</label>
                                <input type="text" value="<?php echo !empty(form_error("r1"))? set_value("r1"):$servicio->nombre;?>" class="form-control" title="Solo puede contener letras" pattern="[A-Za-z][\s]*{1,50}" name="r1" required>
                            </div>

                            <div class="form-group">
                                <label for="codigo">Descripción:</label>
                                <input type="text" value="<?php echo !empty(form_error("r2"))? set_value("r2"):$servicio->descripción;?>" title="Solo puede contener letras" pattern="[A-Za-z][\s]*{1,50}" class="form-control"  name="r2" required>
                            </div>

                            <div class="form-group ">
                                <label for="codigo">Precio:</label>
                                <input type="text" value="<?php echo !empty(form_error("r3"))? set_value("r3"):$servicio->precio;?>"  class="form-control"  name="r3" required>
                                <?php echo form_error("r3", "<span class='help-block'>", "</span>");?>
                            </div>

                          <div class="form-group ">
                                <label for="codigo">Precio 2:</label>
                                <input type="text" value="<?php echo !empty(form_error("r4"))? set_value("r4"):$servicio->precio2;?>"  class="form-control"  name="r4" required>
                                <?php echo form_error("r4", "<span class='help-block'>", "</span>");?>
                            </div>
                            <div class="form-group ">
                                <label for="codigo">Precio 3:</label>
                                <input type="text" value="<?php echo !empty(form_error("r5"))? set_value("r5"):$servicio->precio3;?>"  class="form-control"  name="r5" required>
                                <?php echo form_error("r5", "<span class='help-block'>", "</span>");?>
                            </div>

                           
                            <div class="form-group">
                                 
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
</div>
<!-- /.content-wrapper -->