<section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            
                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Permisos</li>
                            <li class="active">Permisos</li>
                        </ul>
                    </div>
                        <h1 class="h1">Permisos</h1>
                </div>
                    
<!-- Content Wrapper. Contains page content -->

<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
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
                                        </li>
                                        <li><a href="#profile1" data-toggle="tab">Nuevo</a>
                                        </li>
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
                                    <th>Menu</th>
                                    <th>Rol</th>
                                    <th>Leer</th>
                                    <th>Insertar</th>
                                    <th>Actualizar</th>
                                    <th>Elimiar</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($permisos)):?>
                                    <?php foreach($permisos as $permiso):?>
                                        <tr>
                                            <td><?php echo $permiso->id;?></td>
                                             
                                             <?php foreach($menus as $menu):?>
                                                <?php if($menu->id == $permiso->menu_id):?>
                                                    <td><?php echo $menu->nombre;?></td>
                                                <?php endif;?>
                                            <?php endforeach;?>


                                            <?php foreach($roles as $rol):?>
                                                <?php if($rol->id == $permiso->rol_id):?>
                                                    <td><?php echo $rol->nombre;?></td>
                                                <?php endif;?>
                                            <?php endforeach;?>

                                            <td>
                                                <?php //echo $permiso->read
                                                if ($permiso->read==0):?>
                                                    <span class ="fa fa-times"></span>

                                                <?php else: ?>
                                                    <span class ="fa fa-check"></span>

                                               <?php endif;?>
                                            </td>
                                            <td>
                                                <?php //echo $permiso->read
                                                if ($permiso->insert==0):?>
                                                    <span class ="fa fa-times"></span>

                                                <?php else: ?>
                                                    <span class ="fa fa-check"></span>

                                               <?php endif;?>
                                            </td> <td>
                                                <?php //echo $permiso->read
                                                if ($permiso->update==0):?>
                                                    <span class ="fa fa-times"></span>

                                                <?php else: ?>
                                                    <span class ="fa fa-check"></span>

                                               <?php endif;?>
                                            </td> <td>
                                                <?php //echo $permiso->read
                                                if ($permiso->delete==0):?>
                                                    <span class ="fa fa-times"></span>

                                                <?php else: ?>
                                                    <span class ="fa fa-check"></span>

                                               <?php endif;?>
                                            </td>
                                            <?php $datapermisos = $permiso->id."*".$permiso->menu_id."*".$permiso->rol_id."*".$permiso->read."*".$permiso->insert."*".$permiso->update."*".$permiso->delete;?>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view-producto" data-toggle="modal" data-target="#modal-default" value="<?php echo $datapermisos;?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                    
                                                    
                                                    <a href="<?php echo base_url()?>mantenimiento/permisos/edit/<?php echo $permiso->id;?>" class="btn btn-warning"><span class="fa fa-pencil" style="color: #fff"></span></a>
                                                    <a href="<?php echo base_url();?>mantenimiento/permisos/delete/<?php echo $permiso->id;?>" class="btn btn-danger btn-remove"><span class="fa fa-times" style="color: #fff"></span></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>

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
                                <form action="<?php echo base_url();?>mantenimiento/permisos/store" method="POST">

                             <div class="form-group">
                                <label for="categoria">Roles:</label>
                                <select name="rol" id="rol" class="form-control">
                                <<?php foreach ($roles as $rol ):?> 
                                    <option value="<?php echo $rol->id;?>"> <?php echo $rol->nombre;?></option>
                                <?php endforeach;?>
                                </select>
                            </div>  
                             <div class="form-group">
                                <label for="categoria">Menus:</label>
                                <select name="menu" id="menu" class="form-control">
                                <<?php foreach ($menus as $menu ):?> 
                                    <option value="<?php echo $menu->id;?>"> <?php echo $menu->nombre;?></option>
                                <?php endforeach;?>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="read">Leer</label>
                                <label class="radio-inline">
                                    <input type="radio" name="read" value="1" checked="checked">Si
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="read" value="0" checked="checked">No
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="read">Agregar</label>
                                <label class="radio-inline">
                                    <input type="radio" name="insert" value="1" checked="checked">Si
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="insert" value="0" checked="checked">No
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="read">Editar</label>
                                <label class="radio-inline">
                                    <input type="radio" name="update" value="1" checked="checked">Si
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="update" value="0" checked="checked">No
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="read">Eliminar</label>
                                <label class="radio-inline">
                                    <input type="radio" name="delete" value="1" checked="checked">Si
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="delete" value="0" checked="checked">No
                                </label>
                            </div>
                            <div class="form-group">
                                <button type="submite" class="btn btn-succes"><span class="fa fa-save"></span>Guardar</button>

                            </div>


                        </form>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>