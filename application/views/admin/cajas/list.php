
<section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            <li>Dashboard</a>
                            </li>
                            <li>Caja</li>
                            <li class="active">Lista</li>
                        </ul>
<h1>Actividad </h1>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->



     <!--main content start Inicio de pagina agregar venta-->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->

    <div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Datos</h3>

    </div>
    <div class="panel-body">

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-hover" width= 100%>
                            <thead>
                                <tr>
                                   <th>Usuario</th>
                                    <th>Transacción</th>
                                    <th>Fecha</th>
                                    <th>Monto</th>
                                     <th>Saldo</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($cajas)){ ?>
                                    <?php foreach($cajas as $caja) {?>
                                    <tr>
                                        <td><?php echo $caja->usuario;?></td>
                                        <td><?php echo $caja->transaccion;?></td>
                                        <td><?php echo $caja->fecha;?></td>
                                        <td><?php echo $caja->monto;?></td>
                                        <td><?php echo $caja->saldo;?></td>
                                        <td><button type="button" class="btn btn-info btn-view-cajas" value="<?php echo $cajass;?>" data-toggle="modal" data-target="#modal-default" ><span class="fa fa-search"></span></button></td>
                                    </tr>
                                    <?php }?>
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- Button del pdf -->
                      <a href="<?php echo base_url();?>pdfcontroller/ventas" target="_blank">
                                    <button type="button" class="btn btn-success"><i class="fa fa-check"></i> Generrar Reporte</button>
                                    </a>
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
        <h4 class="modal-title">Informacion de Venta</h4>
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
