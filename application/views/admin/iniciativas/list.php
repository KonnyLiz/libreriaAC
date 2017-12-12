 <section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            
                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Registros</li>
                            <li class="active">Inciativas</li>
                        </ul>
                    </div>
                        <h1 class="h1">Iniciativas</h1>
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
                                    <th>Nombre</th>
                                    <th>Contacto</th>
                                    <th>Grupo</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($iniciativa)):?>
                                    <?php foreach($iniciativa as $iniciativas):?>
                                        <tr>
                                            <td><?php echo $iniciativas->id_iniciativa;?></td>
                                            <td><?php echo $iniciativas->nombre;?></td>
                                            <td><?php echo $iniciativas->contacto;?></td>
                                            <td><?php echo $iniciativas->grupo;?></td>
                                            <?php $datainiciativa = $iniciativas->id_iniciativa."*".$iniciativas->nombre."*".$iniciativas->contacto."*".$iniciativas->grupo;?>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view-producto" data-toggle="modal" data-target="#modal-default" value="<?php echo $datainiciativa;?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>

                                                    <?php if($permisos->update == 1):?><a href="<?php echo base_url()?>mantenimiento/iniciativas/edit/<?php echo $iniciativas->id_iniciativa;?>" class="btn btn-warning"><span class="fa fa-pencil" style="color: #fff"></span></a>
<?php endif?>
 <?php if($permisos->delete == 1):?><a href="<?php echo base_url();?>mantenimiento/iniciativas/delete/<?php echo $iniciativas->id_iniciativa;?>" class="btn btn-danger btn-remove"><span class="fa fa-times" style="color: #fff"></span></a>
<?php endif?>
                                                    
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>
                        <a href="<?php echo base_url();?>pdfcontroller/iniciativa" target="_blank">
                        <button type="button" class="btn btn-success"><i class="fa fa-check"></i>Reporte General</button>
                        </a>
                        <a href="<?php echo base_url();?>pdfcontroller/iniciativa1" target="_blank">
                        <button type="button" class="btn btn-success"><i class="fa fa-check"></i>Reporte Grupo #1</button>
                        </a>
                        <a href="<?php echo base_url();?>pdfcontroller/iniciativa2" target="_blank">
                        <button type="button" class="btn btn-success"><i class="fa fa-check"></i>Reporte Grupo #2</button>
                        </a>
                         <a href="<?php echo base_url();?>pdfcontroller/iniciativa3" target="_blank">
                        <button type="button" class="btn btn-success"><i class="fa fa-check"></i>Reporte Grupo #3</button>
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
                                <form action="<?php echo base_url();?>mantenimiento/iniciativas/store" method="POST">
                            <div class="form-group">
                                <label for="codigo">Nombre:</label>
                                <input type="text" class="form-control" id="codigo" name="nombre">
                            </div>
                            
                            <div class="form-group">
                                <label for="categoria">Categoria:</label>
                                <select name="grupo" id="grupo" class="form-control">
                                    <?php foreach($grupo as $grupos):?>
                                        <option value="<?php echo $grupos->idgrupo?>"><?php echo $grupos->descripcion;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                         <div class="form-group">
                         <label for="categoria">Contacto:</label>
                            <select class="form-control" name="contacto">
                                        <option value="" disabled="" selected="">Tipo de contacto</option>
                                        <option value="Redes">Redes Sociales</option>
                                        <option value="Correo">Correo Electronico</option>
                                        <option value="Pagina web">Pagina Web</option>
                                        <option value="Cotizacion">Cotizacion</option>
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
                        

