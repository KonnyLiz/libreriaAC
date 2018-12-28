<section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">

                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Registros</li>
                            <li class="active">Clientes</li>
                        </ul>
                    </div>
                        <h1 class="h1">Clientes</h1>
                </div>
<!-- modal del cliente -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion del cliente</h4>
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

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home1">

                <div class="row">
                    <div class="col-md-12">
                        <?php if($permisos->insert == 1):?>

                        <a href="<?php echo base_url();?>mantenimiento/clientes/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Cliente</a>
                    <?php endif?>
                </div>

                </div>

                                            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                          <div class="panel-body">
                            <table id="example1" class="table table-striped table-bordered" width= 100%>

                     <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                     <th>Apellidos</th>
                                      <th>Telefono</th>
                                    <th>NIT</th>
                                    <th>Registro</th>
                                    <th>Direccion</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($cliente)):?>
                                    <?php foreach($cliente as $clientes):?>
                                        <tr>
                                            <td><?php echo $clientes->id;?></td>
                                            <td><?php echo $clientes->nombres;?></td>
                                             <td><?php echo $clientes->apellidos;?></td>
                                              <td><?php echo $clientes->telefono;?></td>
                                            <td><?php echo $clientes->nit;?></td>
                                            <td><?php echo $clientes->registro;?></td>
                                            <td><?php echo $clientes->direccion;?></td>
                                            <?php $datacliente = $clientes->id."*".$clientes->nombres."*".$clientes->nit."*".$clientes->registro."*".$clientes->direccion."*".$clientes->estado."*".$clientes->apellidos."*".$clientes->telefono;?>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view-cliente" data-toggle="modal" data-target="#modal-default" value="<?php echo $datacliente;?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                    <?php if($permisos->update == 1):?>

                                                    <a href="<?php echo base_url()?>mantenimiento/clientes/edit/<?php echo $clientes->id;?>" class="btn btn-warning"><span class="fa fa-pencil" style="color: #fff"></span></a>
                                                    <?php endif?>
                                                    <?php if($permisos->insert == 1):?>

                                                    <a href="<?php echo base_url();?>mantenimiento/clientes/delete/<?php echo $clientes->id;?>" class="btn btn-danger btn-remove"><span class="fa fa-times" style="color: #fff"></span></a>
                                                    <?php endif?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>
                        <!--PDF-->
                        <a href="<?php echo base_url();?>pdfcontroller/clientes" target="_blank">
                        <button type="button" class="btn btn-success"><i class="fa fa-check"></i>Reporte General</button>
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
                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
