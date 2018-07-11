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
                        <h1 class="h1">Productos</h1>
                </div>
                    
<!-- Content Wrapper. Contains page content -->

<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion de la Categoria</h4>
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
                                        </li><?php if($permisos->insert == 1):?>

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
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Precio</th>
                                    <th>Mayoreo</th>
                                    <th>Stock</th>
                                    <th>Categoria</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($productos)):?>
                                    <?php foreach($productos as $producto):?>
                                        <tr>
                                            <td><?php echo $producto->id;?></td>
                                            <td><?php echo $producto->codigo;?></td>
                                            <td><?php echo $producto->nombre;?></td>
                                            <td><?php echo $producto->descripcion;?></td>
                                            <td><?php echo $producto->precio;?></td>
                                            <td><?php echo $producto->precio_mayoreo;?></td>
                                            <td><?php echo $producto->stock;?></td>
                                            <td><?php echo $producto->categoria;?></td>
                                            <?php $dataproducto = $producto->id."*".$producto->codigo."*".$producto->nombre."*".$producto->descripcion."*".$producto->precio."*".$producto->precio_mayoreo."*".$producto->stock."*".$producto->categoria;?>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view-producto" data-toggle="modal" data-target="#modal-default" value="<?php echo $dataproducto;?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>
</li><?php if($permisos->update == 1):?> <a href="<?php echo base_url()?>mantenimiento/productos/edit/<?php echo $producto->id;?>" class="btn btn-warning"><span class="fa fa-pencil" style="color: #fff"></span></a>
                                                    <?php if($permisos->update == 1):?>
 </li><?php endif?>
                                                   
<?php endif?>
 <?php if($permisos->delete == 1):?> <a href="<?php echo base_url();?>mantenimiento/productos/delete/<?php echo $producto->id;?>" class="btn btn-danger btn-remove"><span class="fa fa-times" style="color: #fff"></span></a>
<?php endif?>
                                                    
                                                   
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>
                        <a href="<?php echo base_url();?>pdfcontroller/productos" target="_blank">
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
                                <form action="<?php echo base_url();?>mantenimiento/productos/store" method="POST">
                            <div class="form-group <?php echo !empty(form_error("codigo"))? 'has-error':'' ?>">
                                <label for="codigo">Codigo:</label>
                                <input value="<?php echo set_value("codigo")?>" type="text" class="form-control" id="codigo" name="codigo">
                                <?php echo form_error("codigo", "<span class='help-block'>", "</span>");?>
                            </div>
                            <div class="form-group <?php echo !empty(form_error("nombre"))? 'has-error':'' ?>">
                                <label for="nombre">Nombre:</label>
                                <input value="<?php echo set_value("nombre")?>" type="text" class="form-control" id="nombre" name="nombre">
                                <?php echo form_error("nombre", "<span class='help-block'>", "</span>");?>
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripcion:</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion">
                            </div>
                             <div class="form-group <?php echo !empty(form_error("precio_e"))? 'has-error':'' ?>">
                                <label for="precio">Precio de entrada:</label>
                                <input value="<?php echo set_value("precio_e")?>" type="text" class="form-control" id="precio" name="precio_e">
                                <?php echo form_error("precio_e", "<span class='help-block'>", "</span>");?>
                            </div>
                            <div class="form-group <?php echo !empty(form_error("precio"))? 'has-error':'' ?>">
                                <label for="precio">Precio de salida:</label>
                                <input value="<?php echo set_value("precio")?>" type="text" class="form-control" id="precio" name="precio">
                                <?php echo form_error("precio", "<span class='help-block'>", "</span>");?>
                            </div>
                             <div class="form-group <?php echo !empty(form_error("precio_m"))? 'has-error':'' ?>">
                                <label for="precio">Precio de mayoreo:</label>
                                <input value="<?php echo set_value("precio_m")?>" type="text" class="form-control" id="precio" name="precio_m">
                                <?php echo form_error("precio_m", "<span class='help-block'>", "</span>");?>
                            </div>
                            <div class="form-group <?php echo !empty(form_error("stock"))? 'has-error':'' ?>">
                                <label for="stock">Stock:</label>
                                <input value="<?php echo set_value("stock")?>" type="text" class="form-control" id="stock" name="stock">
                                <?php echo form_error("stock", "<span class='help-block'>", "</span>");?>
                            </div>
                            <div class="form-group">
                                <label for="categoria">Categoria:</label>
                                <select name="categoria" id="categoria" class="form-control">
                                    <?php foreach($categorias as $categoria):?>
                                        <option value="<?php echo $categoria->id?>"><?php echo $categoria->nombre;?></option>
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
                                </div>
                            </div>
                        </div>
                    </div>
                        

