 <!--main content start Inicio de pagina agregar venta-->
         <section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            <li><a href="#">Dashboard</a>
                            </li>
                            <li>Ventas </li>
                            <li class="active">Agregar Venta</li>
                        </ul>

 
 <h1 class="">Ventas</h1>
 

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
<div class="col-md-12">
    <div class="panel panel-default">
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">


                    
                        <div class="col-md-3" style="padding-bottom: 12px">
                                    <label for="">Fecha:</label>
                                    <input type="date" class="form-control" name="fecha" required>
                                </div>
                        <div class="col-md-12">

                        <form action="<?php echo base_url();?>movimientos/ventas/store" method="POST" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label for="">Comprobante:</label>
                                    <select name="comprobantes" id="comprobantes" class="form-control" required>
                                        <option value="">Seleccione...</option>
                                        <?php foreach ($tipoComprobantes as $tipoComprobante) { ?>
                                            <?php $dataComprobante = $tipoComprobante->id."*".$tipoComprobante->cantidad."*".$tipoComprobante->iva."*".$tipoComprobante->serie; ?>
                                           <option value="<?php echo $dataComprobante;?>"><?php echo $tipoComprobante->nombre ?></option>
                                        <?php } ?>
                                    </select>
                                    <input type="hidden" id="idcomprobante" name="idcomprobante">
                                    <input type="hidden" id="iva">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Serie:</label>
                                    <input type="text" class="form-control" id="serie" name="serie" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Numero:</label>
                                    <input type="text" class="form-control" id="numero" name="numero" readonly>
                                </div>
                                 
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="">Cliente:</label>
                                    <div class="input-group">
                                        <input type="hidden" name="idcliente" id="idcliente">
                                        <input type="text" class="form-control" disabled="disabled" id="cliente">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal-default" ><span class="fa fa-search"></span> Buscar</button>
                                        </span>
                                        <span class="input-group-btn">
                                             <label for="">&nbsp;</label>
                                        </span>
                                        <span class="input-group-btn">
                                            <button id="btn-agregar-Cliente" type="button" class="btn btn-success btn-flat btn-block" data-toggle="modal" data-target="#modal-agregarCliente"><span class="fa fa-plus"></span> Agregar Cliente</button>
                                        </span>
                                    </div><!-- /input-group -->
                                </div> 
                                
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="">Producto:</label>
                                    <input type="text" class="form-control" id="producto" name="valor">
                                </div>
                                <div class="col-md-2">
                                    <label for="">&nbsp;</label>
                                    <button id="btn-agregar" type="button" class="btn btn-success btn-flat btn-block"><span class="fa fa-plus"></span> Agregar</button>
                                </div>
                            </div>
                            <table id="tbventas" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>

                                        <th>Precio</th>
                                        <th>Stock Max.</th>
                                        <th>Cantidad</th>
                                        <th>Importe</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>

                            <div class="form-group">
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Subtotal:</span>
                                        <input type="text" class="form-control" placeholder="Username" name="subtotal" id="subtotal" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">IVA:</span>
                                        <input type="text" class="form-control" placeholder="Username" name="iva2" id="iva2" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Descuento:</span>
                                        <input type="text" class="form-control" placeholder="Username" name="descuento" id="descuento" value="0.00" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Total:</span>
                                        <input type="text" class="form-control" placeholder="Username" name="total" id="total" readonly="readonly">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                                </div>
                                
                            </div>
                        </form>
                        </div></div></div></div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Lita de Clientes</h4>
            </div>
            <div class="modal-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Opcion</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php if(!empty($clientes)):?>
                            <?php foreach($clientes as $cliente):?>
                                        <tr>
                                            <td><?php echo $cliente->id;?></td>
                                            <td><?php echo $cliente->nombres;?></td>
                                            <?php $datacliente = $cliente->id."*".$cliente->nombres."*".$cliente->dui."*".$cliente->nit."*".$cliente->telefono."*".$cliente->direccion?>
                                            <td>
                                                <button type="button" class="btn btn-success btn-check" value="<?php echo $datacliente;?>"><span class="fa fa-check"></span></button>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal agregar cliente-->
<div class="modal fade" id="modal-agregarCliente">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Lita de Clientes</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url();?>movimientos/ventas/save_Cliente" method="POST">
                    
                            <div class="form-group">
                                <label for="categoria">Nombre:</label> 
                            <input class="form-control" id="nombre2" name="nombre2" >
                            <div>
                                <label for="codigo">Apellidos:</label>
                                <input type="text" class="form-control" id="r2" name="r2">
                            </div>
                            <div class="form-group">
                                <label for="codigo">Telefono</label>
                                <input type="text" class="form-control"  name="r3" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">DUI</label>
                                <input type="text" class="form-control"  name="r4" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">NIT</label>
                                <input type="text" class="form-control"  name="r5" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">Dirección</label>
                                <input type="text" class="form-control"  name="r6" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">Registro</label>
                                <input type="text" class="form-control"  name="r7" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">Empresa</label>
                                <input type="text" class="form-control"  name="r8" >
                            </div>
                                <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                            </div>
                            
                        </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -