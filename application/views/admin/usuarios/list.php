<section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            
                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Usuarios</li>
                            <li class="active">Usuarios</li>
                        </ul>
                    </div>
                        <h1 class="h1">Usuarios</h1>
                </div>
                    
<!-- Content Wrapper. Contains page content -->

<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion de los Usuarios </h4>
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
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home1">
                                            
                <div class="row">
                    <div class="col-md-12">
                        <?php if($permisos->insert == 1):?>

                        <a href="<?php echo base_url();?>mantenimiento/usuarios/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Usuario</a>
                    <?php endif?>
                </div>

                </div>

                                            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                          <div class="panel-body">
                            <table id="example1" class="table table-striped table-bordered" >
                            
                     <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>DUI</th>
                                    <th>NIT</th>
                                    <th>Telefono</th>
                                    <th>E-mail</th>
                                    <th>Usuario</th>
                                    <th>Rol</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($usuario)):?>
                                    <?php foreach($usuario as $usuarios):?>
                                        <tr>
                                            <td><?php echo $usuarios->id;?></td>
                                            <td><?php echo $usuarios->nombres;?></td>
                                            <td><?php echo $usuarios->apellidos;?></td>
                                            <td><?php echo $usuarios->dui;?></td>
                                            <td><?php echo $usuarios->nit;?></td>
                                            <td><?php echo $usuarios->telefono;?></td>
                                            <td><?php echo $usuarios->email;?></td>
                                            <td><?php echo $usuarios->username;?></td>
                                             <td><?php echo $usuarios->rol;?></td>
                                            <?php $datausuario = $usuarios->id."*".$usuarios->nombres."*".$usuarios->apellidos."*".$usuarios->dui."*".$usuarios->nit."*".$usuarios->telefono."*".$usuarios->email."*".$usuarios->username."*".$usuarios->rol;?>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view-usuario" data-toggle="modal" data-target="#modal-default" value="<?php echo $datausuario;?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                    <?php if($permisos->update == 1):?>  <a href="<?php echo base_url()?>mantenimiento/usuarios/edit/<?php echo $usuarios->id;?>" class="btn btn-warning"><span class="fa fa-pencil" style="color: #fff"></span></a>
<?php endif?>
 <?php if($permisos->delete == 1):?><a href="<?php echo base_url();?>mantenimiento/Usuarios/delete/<?php echo $usuarios->id;?>" class="btn btn-danger btn-remove"><span class="fa fa-times" style="color: #fff"></span></a>
<?php endif?>
                                                  
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>
                        <a href="<?php echo base_url();?>pdfcontroller/usuarios" target="_blank">
                        <button type="button" class="btn btn-success"><i class="fa fa-check"></i>Reporte General</button>
                        </a>
                       </div>
                     </div>
                </div>
            </div>

                                        </div>
                                       
                                </div>
                            </div>
                        </div>
                    </div>