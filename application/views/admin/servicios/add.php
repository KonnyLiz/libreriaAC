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
                      <form action="<?php echo base_url();?>mantenimiento/servicios/store" method="POST">

                            <div class="form-group">
                                <label for="codigo">Nombre del servicio:</label>
                                <input type="text" value="<?php echo set_value("r1")?>" class="form-control" title="Solo puede contener letras" pattern="[A-Za-z][\s]*{1,50}" name="r1" required>
                            </div>

                            <div class="form-group">
                                <label for="codigo">Descripción:</label>
                                <input type="text" value="<?php echo set_value("r2")?>" title="Solo puede contener letras" pattern="[A-Za-z][\s]*{1,50}" class="form-control"  name="r2" required>
                            </div>

                            <div class="form-group ">
                                <label for="codigo">Precio:</label>
                                <input type="text" placeholder="0.00" value="<?php echo set_value("r3")?>" title="Formato: 9.99"  class="form-control"  name="r3" required>
                                <?php echo form_error("r3", "<span class='help-block'>", "</span>");?>
                            </div>

                           <div class="form-group <?php echo !empty(form_error("r4"))? 'has-error':'' ?>">
                                <label for="codigo">Mayoreo 1:</label>
                                <input type="text" placeholder="0.00" value="<?php echo set_value("r4")?>" title="Formato: 9.99" class="form-control"   name="r4" required>
                                <?php echo form_error("r4", "<span class='help-block'>", "</span>");?>
                            </div>

                            <div class="form-group">
                                <label for="codigo">Mayoreo 2:</label>
                                <input type="text" placeholder="0.00" class="form-control" value="<?php echo set_value("r5")?>" title="Formato: 9.99" name="r5" required >
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
