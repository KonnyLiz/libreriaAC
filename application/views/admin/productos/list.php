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
                                    <th>Marca</th>
                                    <th>Proveedor</th>
                                    <th>Precio</th>
                                    <th>Mayoreo 1</th>
                                    <th>Mayoreo 2</th>
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
                                            <td><?php echo $producto->id_marca;?></td>
                                            <td><?php echo $producto->id_proveedor;?></td>
                                            <td><?php echo $producto->precio;?></td>
                                            <td><?php echo $producto->precio_mayoreo1;?></td>
                                            <td><?php echo $producto->precio_mayoreo2;?></td>
                                            <td><?php echo $producto->stock;?></td>
                                            <td><?php echo $producto->categoria_id;?></td>
                                            
                                            <td>
                                                <div class="btn-group">
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

                            <div class="form-group">
                                <label for="codigo">Codigo:</label>
                                <input type="text" class="form-control" id="codigo" name="codigo">
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripcion:</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion">
                            </div>
                          
                            <div class="form-group">      
                                   <label for="categoria">Marca:</label>
                                    <div class="input-group">
                                        
                                <select name="marca" id="categoria" class="form-control">
                                    <?php foreach($marca as $marcas):?>
                                        <option value="<?php echo $marcas->id_marca?>"><?php echo $marcas->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                                        <span class="input-group-btn">
                                             <label for="">&nbsp;</label>
                                        </span>
                                        <span class="input-group-btn">
                                            <button id="btn-agregar-Marca" type="button" class="btn btn-success btn-flat btn-block" data-toggle="modal" data-target="#modal-agregarMarca"><span class="fa fa-plus"></span> Agregar Marca</button>
                                        </span>
                                    </div><!-- /input-group -->
                            </div>

                            <div class="form-group">
                                <label for="categoria">Proveedor:</label>
                                <select name="proveedor" id="categoria" class="form-control">
                                    <?php foreach($proveedor as $proveedores):?>
                                        <option value="<?php echo $proveedores->id_proveedor?>"><?php echo $proveedores->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                             <div class="form-group">
                                <label for="precio">Precio de entrada:</label>
                                <input type="text" class="form-control" id="precio" name="precio_e">
                            </div>
                            <div class="form-group">
                                <label for="precio">Precio de salida:</label>
                                <input type="text" class="form-control" id="precio" name="precio">
                            </div>
                             <div class="form-group">
                                <label for="precio">Precio de mayoreo1:</label>
                                <input type="text" class="form-control" id="precio" name="precio_m">
                            </div>
                            <div class="form-group">
                                <label for="precio">Precio de mayoreo2:</label>
                                <input type="text" class="form-control" id="precio" name="precio_m1">
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock:</label>
                                <input type="text" class="form-control" id="stock" name="stock">
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
                        

<!-- /.modal agregar cliente-->
<div class="modal fade" id="modal-agregarMarca">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Agregar Marca</h4>
            </div>
            <div class="modal-body">
               <form class="form-horizontal form-border" action="<?php echo base_url();?>mantenimiento/productos/save_Marca" method="POST">
                                
                                    <div class="form-group" >
                                        <label class="col-sm-3 control-label">Nombre</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Nombre de la marca" name="nombre" required>
                                        </div>
                                        </div>
                                    <div class="col-xs-6 col-md-4 " style="position: relative;">
                                        <!-- Button trigger modal -->
                                       
                                    </div>
                                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
                 <button  id="guardarMarca" class="btn btn-primary btn-lg" type="submit"><i class=" fa fa-plus"></i>Guardar</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -