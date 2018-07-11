<section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            
                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Registros</li>
                            <li class="active">Clientes</li>
                        </ul>
                    </div>
                        <h2 class="h1">Editar Clientes</h1>
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
                        <form action="<?php echo base_url();?>mantenimiento/clientes/update" method="POST">
                            <input type="hidden" name="id_cliente" value="<?php echo $cliente->id;?>">
                            <div class="form-group">

                            <div class="form-group">
                            
                                <label for="codigo">Grupo:</label>
                                <input type="text" class="form-control" value="<?php echo $cliente->grupo?>" id="r1" name="r1"  > 
                            </div> 
                            <div class="form-group <?php echo !empty(form_error("nom"))? 'has-error':'' ?>">
                                <label for="codigo">Nombre:</label>
                                <input  type="text" class="form-control" value="<?php echo !empty(form_error("nom"))? set_value("nom"):$cliente->nombres?>" id="r2" name="nom">
                                <?php echo form_error("nom", "<span class='help-block'>", "</span>");?>
                            </div> 
                             <div class="form-group <?php echo !empty(form_error("r2"))? 'has-error':'' ?>">
                                <label for="codigo">Apellido:</label>
                                <input  type="text" class="form-control" value="<?php echo !empty(form_error("r2"))? set_value("r2"):$cliente->r2bres?>" id="r2" name="r2">
                                <?php echo form_error("r2", "<span class='help-block'>", "</span>");?>
                            </div> 
                           
                                                        <div class="form-group <?php echo !empty(form_error("r3"))? 'has-error':'' ?>">
                                <label for="codigo">Telefono</label>
                                <input type="text" class="form-control" value="<?php echo !empty(form_error("r3"))? set_value("r3"):$cliente->telefono?>"  name="r3" >
                                <?php echo form_error("r3", "<span class='help-block'>", "</span>");?>
                            </div>
                            <div class="form-group <?php echo !empty(form_error("r4"))? 'has-error':'' ?>">
                                <label for="codigo">DUI</label>
                                <input type="text" class="form-control" value="<?php echo !empty(form_error("r4"))? set_value("r4"):$cliente->dui?>"  name="r4" >
                                <?php echo form_error("r4", "<span class='help-block'>", "</span>");?>
                            </div>
                            <div class="form-group <?php echo !empty(form_error("r5"))? 'has-error':'' ?>">
                                <label for="codigo">NIT</label>
                                <input type="text" class="form-control" value="<?php echo !empty(form_error("r5"))? set_value("r5"):$cliente->nit?>"  name="r5" >
                                <?php echo form_error("r5", "<span class='help-block'>", "</span>");?>
                            </div>
                            <div class="form-group <?php echo !empty(form_error("r6"))? 'has-error':'' ?>">
                                <label for="codigo">Dirección</label>
                                <input type="text" class="form-control" value="<?php echo !empty(form_error("r6"))? set_value("r6"):$cliente->direccion?>"  name="r6" >
                                <?php echo form_error("r6", "<span class='help-block'>", "</span>");?>
                            </div>
                            <div class="form-group <?php echo !empty(form_error("r7"))? 'has-error':'' ?>">
                                <label for="codigo">Registro</label>
                                <input type="text" class="form-control" value="<?php echo !empty(form_error("r7"))? set_value("r7"):$cliente->registro?>"  name="r7" >
                                <?php echo form_error("r7", "<span class='help-block'>", "</span>");?>
                            </div>
                            <div class="form-group <?php echo !empty(form_error("r8"))? 'has-error':'' ?>">
                                <label for="codigo">Empresa</label>
                                <input type="text" class="form-control" value="<?php echo !empty(form_error("r8"))? set_value("r8"):$cliente->empresa?>"  name="r8" >
                                <?php echo form_error("r8", "<span class='help-block'>", "</span>");?>
                            </div>
                            <div class="form-group ">
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
