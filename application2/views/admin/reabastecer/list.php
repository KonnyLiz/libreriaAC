
<section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            <li>Dashboard</a>
                            </li>
                            <li>Reabastecer</li>
                            <li class="active">Lista</li>
                        </ul>

<h1>Reabastecimientos</h1>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->

    <div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Datos</h3>
                                
    </div>
    <div class="panel-body">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    
     <!--main content start Inicio de pagina agregar venta-->
         

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($permisos->insert == 1):?>

                        <a href="<?php echo base_url();?>movimientos/reabastecer/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span>Reabastecer</a>
                        <?php endif?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Fecha</th>
                                    <th>Encargado</th>
                                    <th>Total</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($abastecer)){ ?>
                                    <?php foreach($abastecer as $reabastecimiento) {?>
                                    <tr>
                                        <td><?php echo $reabastecimiento->id;?></td>
                                        <td><?php echo $reabastecimiento->fecha;?></td>
                                        <td><?php echo $reabastecimiento->nombres." ".$reabastecimiento->apellidos;?></td>
                                        <td><?php echo $reabastecimiento->total_abastecer;?></td>
                                        <td><button type="button" class="btn btn-info btn-view-reabastecimiento" value="<?php echo $reabastecimiento->id;?>" data-toggle="modal" data-target="#modal-default" ><span class="fa fa-search"></span></button></td>
                                    </tr>
                                    <?php }?>
                                <?php } ?>
                            </tbody>
                        </table>
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
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion de Abastecimiento</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary btn-print"><span class="fa fa-print">Imprimir</span></button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
