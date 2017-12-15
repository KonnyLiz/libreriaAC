<section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            
                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Registros</li>
                            <li class="active">Proveedores</li>
                        </ul>
                    </div>
                        <h2 class="h1">Editar Proveedor</h1>
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
                       <form action="<?php echo base_url();?>mantenimiento/proveedores/update" method="POST">
                            <input type="hidden" name="id_proveedor" value="<?php echo $proveedor->id_proveedor;?>">
                            <div class="form-group">
                                <label for="codigo">Nombre:</label>
                                <input type="text" class="form-control" id="grupo" name="nombre"  value="<?php echo $proveedor->nombre?>">
                            </div>
                            <div class="form-group">
                                <label for="codigo">Apellidos:</label>
                                <input type="text" class="form-control" id="grupo" name="telefono"  value="<?php echo $proveedor->telefono?>">
                            </div>
                            <div class="form-group">
                                <label for="codigo">DUI:</label>
                                <input type="text" class="form-control" id="grupo" name="direccion"  value="<?php echo $proveedor->direccion?>">
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
