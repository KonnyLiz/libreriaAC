 <section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            <li><a href="#">Dashboard</a>
                            </li>
                            <li>Movimientos</li>
                            <li class="active">Reabastecer</li>
                        </ul>
        <?php if($this->session->flashdata("error")):?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
            </div>
        <?php endif;?>

        <h1>Reabastecer</h1>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->

    <div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Datos</h3>
                                
    </div>
    <div class="panel-body">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        
                        <form action="<?php echo base_url();?>movimientos/reabastecer/store" method="POST" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label for="">Fecha:</label>
                                    <input type="date" class="form-control" name="fecha" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="">Producto:</label>
                                    <input type="text" class="form-control" id="producto-reabastecer" name="valor">
                                </div>
                                <div class="col-md-2">
                                    <label for="">&nbsp;</label>
                                    <button id="btn-agregar-abast" type="button" class="btn btn-success btn-flat btn-block"><span class="fa fa-plus"></span> Agregar</button>
                                </div>
                            </div>
                            <table id="tbreabastecer" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>

                                        <th>Precio Entrada</th>
                                        <th>Existencias</th>
                                        <th>Cantidad</th>
                                        <th>Importes</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
                            <div class="form-group">
                             <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Total:</span>
                                        <input type="text" class="form-control" placeholder="Username" name="total-reabastecer" id="total-reabastecer" readonly="readonly">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    </div>
    </div>
    </div>
    </div>
    <!-- /.content -->
</div>

