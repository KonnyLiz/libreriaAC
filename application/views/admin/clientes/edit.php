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
                                <label for="codigo">Nombre:</label>
                                <input value="<?php echo $cliente->nombres?>" type="text" title="Solo puede contener letras" pattern="[A-Za-z][\s]*{1,50}" class="form-control" name="r2" required>
                            </div>

                             <div class="form-group">
                                <label for="codigo">Apellidos:</label>
                                <input value="<?php echo $cliente->apellidos?>" type="text" title="Solo puede contener letras" pattern="[A-Za-z][\s]*{1,50}" class="form-control" name="apellido" required>
                            </div>

                            <div class="form-group">
                                <label for="codigo">Telefono</label>
                                <input type="text" value="<?php echo $cliente->telefono?>" title="Formato: ####-####" class="form-control" pattern="[0-9]{4}-[0-9]{4}" name="telefono" >
                            </div>

                            <div class="form-group">
                                <label for="codigo">NIT</label>
                                <input type="text" value="<?php echo $cliente->nit?>" title="Formato: ####-######-###-#" class="form-control" pattern="[0-9]{4}-[0-9]{6}-[0-9]{3}-[0-9]{1}" name="r5" >
                            </div>

                            <div class="form-group">
                                <label for="codigo">Registro</label>
                                <input title="Formato: ######-#" value="<?php echo $cliente->registro;?>" pattern="[0-9]{6}-[0-9]{1}" type="text" class="form-control"  name="r6" >
                            </div>

                            <div class="form-group">
                                <label for="codigo">Direccion:</label>
                                <input type="text" class="form-control" value="<?php echo $cliente->direccion;?>" name="r7" >
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
