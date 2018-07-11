<section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            
                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Registros</li>
                            <li class="active">Oportunidaes</li>
                        </ul>
                    </div>
                        <h1 class="h1">Oportunidades</h1>
                </div>
                    
<!-- Content Wrapper. Contains page content -->

<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion de la Oportunidad</h4>
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
                                    <th>Grupo</th>
                                    <th>Llamada</th>
                                    <th>Respuesta</th>
                                    <th>Reunion</th>
                                    <th>Respuesta</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($oportunidad)):?>
                                    <?php foreach($oportunidad as $oportunidades):?>
                                        <tr>
                                            <td><?php echo $oportunidades->id_oportunidad;?></td>
                                            <td><?php echo $oportunidades->nombre;?></td>
                                            <td><?php echo $oportunidades->id_grupo;?></td>
                                            <td><?php echo $oportunidades->llamada;?></td>
                                            <td><?php echo $oportunidades->respuesta1;?></td>
                                            <td><?php echo $oportunidades->reunion;?></td>
                                            <td><?php echo $oportunidades->respuesta2;?></td>
                                            <?php $dataoportunidad = $oportunidades->id_oportunidad."*".$oportunidades->nombre."*".$oportunidades->llamada."*".$oportunidades->respuesta1."*".$oportunidades->respuesta2;?>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view-producto" data-toggle="modal" data-target="#modal-default" value="<?php echo $dataoportunidad;?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                    <?php if($permisos->update == 1):?>

                                                    <a href="<?php echo base_url()?>mantenimiento/oportunidades/edit/<?php echo $oportunidades->id_oportunidad;?>" class="btn btn-warning"><span class="fa fa-pencil" style="color: #fff"></span></a>
                                                    <?php endif?>
                                                    <?php if($permisos->delete == 1):?>

                                                    <a href="<?php echo base_url();?>mantenimiento/oportunidades/delete/<?php echo $oportunidades->id_oportunidad;?>" class="btn btn-danger btn-remove"><span class="fa fa-times" style="color: #fff"></span></a><?php endif?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>
            <!-- Button del pdf General -->
            <a href="<?php echo base_url();?>pdfcontroller/oportunidades" target="_blank">
            <button type="button" class="btn btn-success"><i class="fa fa-check"></i> Reporte General</button>
            </a>
            <!-- Button del pdf Grupo#1 -->
            <a href="<?php echo base_url();?>pdfcontroller/oportunidades_1" target="_blank">
            <button type="button" class="btn btn-success"><i class="fa fa-check"></i> Reporte Grupo #1</button>
            </a>
            <!-- Button del pdf Grupo#2 -->
            <a href="<?php echo base_url();?>pdfcontroller/oportunidades_2" target="_blank">
            <button type="button" class="btn btn-success"><i class="fa fa-check"></i> Reporte Grupo #2</button>
            </a>
            <!-- Button del pdf Grupo#3 -->
            <a href="<?php echo base_url();?>pdfcontroller/oportunidades_3" target="_blank">
            <button type="button" class="btn btn-success"><i class="fa fa-check"></i> Reporte Grupo #3</button>
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
                                <form action="<?php echo base_url();?>mantenimiento/oportunidades/store" method="POST">

                             <div class="form-group">
                                <label for="categoria">Nombre:</label>
                                <select name="" id="nombre" class="form-control">
                                <option value="" selected="" disabled="">Seleccione nombre</option>
                                    <?php foreach($iniciativa as $iniciativas):?>
                                        <?php $datacomprobante= $iniciativas->nombre."*".$iniciativas->grupo; ?>
                                        <option value="<?php echo $datacomprobante;?>"><?php echo $iniciativas->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>  
                            <input type="hidden" class="form-control" id="nombre2" name="nombre2" >
                            <input type="hidden" class="form-control" id="grupo2" name="grupo"  > 
                            <div class="form-group">
                                <label for="codigo">Grupo:</label>
                                <input type="text" class="form-control" id="grupo" name="" disabled="" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">Llamada:</label>
                                <input type="date" class="form-control"  name="llamada" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">Respuesta:</label>
                                <input type="text" class="form-control"  name="r1" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">Reunion:</label>
                                <input type="date" class="form-control"  name="reunion" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">Respuesta:</label>
                                <input type="text" class="form-control"  name="r2" >
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