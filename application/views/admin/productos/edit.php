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
                        <h1 class="h1">Editar producto</h1>
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
                        <form action="<?php echo base_url();?>mantenimiento/productos/update" method="POST">
                            
                            <input type="hidden" name="idproducto" value="<?php echo $producto->id;?>">
                            
                            <div class="form-group <?php echo !empty(form_error("codigo"))? 'has-error':'' ?>">
                                <label for="codigo">Codigo:</label>
                                <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo !empty(form_error("codigo"))? set_value("codigo"):$producto->codigo?>">
                                <?php echo form_error("codigo", "<span class='help-block'>", "</span>");?>
                            </div>
                            <div class="form-group <?php echo !empty(form_error("nombre"))? 'has-error':'' ?>">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo !empty(form_error("nombre"))? set_value("nombre"):$producto->nombre?>">
                                <?php echo form_error("nombre", "<span class='help-block'>", "</span>");?>
                            </div>
                            <div class="form-group">
                                <label for="categoria">Presentacion:</label>
                                <select name="presen" id="categoria" class="form-control">
                                    <?php foreach($presen as $present):?>
                                        <?php if($present->id == $producto->id_presentacion):?>
                                        <option value="<?php echo $present->id?>" selected><?php echo $present->nombre;?></option>
                                    <?php else:?>
                                        <option value="<?php echo $present->id?>"><?php echo $present->nombre;?></option>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripcion:</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $producto->descripcion?>">
                            </div>
                            <div class="form-group">
                                <label for="categoria">Marca:</label>
                                <select name="marca" id="categoria" class="form-control">
                                    <?php foreach($marca as $marcas):?>
                                        <?php if($marcas->id_marca == $producto->id_marca):?>
                                        <option value="<?php echo $marcas->id_marca?>" selected><?php echo $marcas->nombre;?></option>
                                    <?php else:?>
                                        <option value="<?php echo $marcas->id_marca?>"><?php echo $marcas->nombre;?></option>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="categoria">Proveedor:</label>
                                <select name="proveedor" id="categoria" class="form-control">
                                    <?php foreach($proveedor as $proveedores):?>
                                        <?php if($proveedores->id_proveedor == $producto->id_proveedor):?>
                                        <option value="<?php echo $proveedores->id_proveedor?>" selected><?php echo $proveedores->nombre;?></option>
                                    <?php else:?>
                                        <option value="<?php echo $proveedores->id_proveedor?>"><?php echo $proveedores->nombre;?></option>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group <?php echo !empty(form_error("precio_e"))? 'has-error':'' ?>">
                                <label for="precio">Precio de entrada:</label>
                                <input type="text" class="form-control" id="precio_e" name="precio_e" value="<?php echo !empty(form_error("precio_e"))? set_value("precio_e"):$producto->precio_entrada?>">
                                <?php echo form_error("precio_e", "<span class='help-block'>", "</span>");?>
                            </div>
                            <div class="form-group <?php echo !empty(form_error("precio"))? 'has-error':'' ?>">
                                <label for="precio">Precio de salida:</label>
                                <input type="text" class="form-control" id="precio" name="precio" value="<?php echo !empty(form_error("precio"))? set_value("precio"):$producto->precio?>">
                                <?php echo form_error("precio", "<span class='help-block'>", "</span>");?>
                            </div>
                            <div class="form-group <?php echo !empty(form_error("precio_m"))? 'has-error':'' ?>">
                                <label for="precio">Precio de mayoreo 1:</label>
                                <input type="text" class="form-control" id="precio_m" name="precio_m" value="<?php echo !empty(form_error("precio_m"))? set_value("precio_m"):$producto->precio_mayoreo1?>">
                                <?php echo form_error("precio_m", "<span class='help-block'>", "</span>");?>
                            </div>
                            <div class="form-group <?php echo !empty(form_error("precio_m"))? 'has-error':'' ?>">
                                <label for="precio">Precio de mayoreo 2:</label>
                                <input type="text" class="form-control" id="precio_m" name="precio_m1" value="<?php echo !empty(form_error("precio_m"))? set_value("precio_m"):$producto->precio_mayoreo2?>">
                                <?php echo form_error("precio_m", "<span class='help-block'>", "</span>");?>
                            </div>
                            <div class="form-group <?php echo !empty(form_error("stock"))? 'has-error':'' ?>">
                                <label for="stock">Stock:</label>
                                <input type="text" class="form-control" id="stock" name="stock" value="<?php echo !empty(form_error("stock"))? set_value("stock"):$producto->stock?>">
                                <?php echo form_error("stock", "<span class='help-block'>", "</span>");?>
                            </div>
                            <div class="form-group">
                                <label for="categoria">Categoria:</label>
                                <select name="categoria" id="categoria" class="form-control">
                                    <?php foreach($categorias as $categoria):?>
                                        <?php if($categoria->id == $producto->categoria_id):?>
                                        <option value="<?php echo $categoria->id?>" selected><?php echo $categoria->nombre;?></option>
                                    <?php else:?>
                                        <option value="<?php echo $categoria->id?>"><?php echo $categoria->nombre;?></option>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </select>
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
</div>
<!-- /.content-wrapper -->
