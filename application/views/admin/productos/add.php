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
                        <h1 class="h1">Agregar Producto</h1>
                </div>
<!-- Content Wrapper. Contains page content -->
<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Datos</h3>

                            </div>
                            <div class="panel-body">
<div class="content-wrapper">
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
                        <form action="<?php echo base_url();?>mantenimiento/productos/store" method="POST">

                            <div class="form-group col-md-2 <?php echo !empty(form_error("codigo"))? 'has-error':'' ?>">
                                <label for="codigo">Codigo:</label>
                                <input type="text" value="<?php echo set_value("codigo")?>" class="form-control" id="codigo" name="codigo" required>
                                <?php echo form_error("codigo", "<span class='help-block'>", "</span>");?>
                            </div>
                            <div class="form-group col-md-3 <?php echo !empty(form_error("nombre"))? 'has-error':'' ?>">
                                <label for="nombre">Nombre:</label>
                                <input type="text" value="<?php echo set_value("nombre")?>" title="Solo puede contener letras" pattern="[A-Za-z][\s]*{1,50}" class="form-control" id="nombre" name="nombre" required>
                                <?php echo form_error("nombre", "<span class='help-block'>", "</span>");?>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="categoria">Presetacion:</label>
                                  <select name="presen" id="categoria" class="form-control" required>
                                    <?php foreach($presen as $present):?>
                                        <option value="<?php echo $present->id?>"><?php echo $present->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <label for="categoria">Marca:</label>
                                  <select name="marca" id="categoria" class="form-control" required>
                                    <?php foreach($marca as $marcas):?>
                                        <option value="<?php echo $marcas->id_marca?>"><?php echo $marcas->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <label for="categoria">Proveedor:</label>
                                <select name="proveedor" id="categoria" class="form-control" required>
                                    <?php foreach($proveedor as $proveedores):?>
                                        <option value="<?php echo $proveedores->id_proveedor?>"><?php echo $proveedores->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>

                             <div class="form-group col-md-3">
                                <label for="precio">Precio de entrada:</label>
                                <input value="<?php echo set_value("precio_e")?>" class="form-control" id="precio" name="precio_e">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="precio">Precio de salida:</label>
                                <input value="<?php echo set_value("precio")?>" class="form-control" id="precio" name="precio">
                            </div>

                             <div class="form-group col-md-3">
                                <label for="precio">Precio de mayoreo1:</label>
                                <input class="form-control" value="<?php echo set_value("precio_m")?>" id="precio" name="precio_m">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="precio">Precio de mayoreo2:</label>
                                <input class="form-control" value="<?php echo set_value("precio_m1")?>" id="precio" name="precio_m1">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="stock">Stock:</label>
                                <input class="form-control" value="<?php echo set_value("stock")?>" id="stock" name="stock">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="categoria">Categoria:</label>
                                <select name="categoria" id="categoria" class="form-control" required>
                                    <?php foreach($categorias as $categoria):?>
                                        <option value="<?php echo $categoria->id?>"><?php echo $categoria->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>

                             <div class="form-group col-md-6 ">
                                <label for="descripcion">Descripcion:</label>
                                <input type="text" value="<?php echo set_value("descripcion")?>" class="form-control" id="descripcion" name="descripcion">
                            </div>

                            <div class="form-group col-md-2">
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
</div>
<!-- /.content-wrapper -->
