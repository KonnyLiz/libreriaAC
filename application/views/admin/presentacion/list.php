 <section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">

                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Productos</li>
                            <li class="active">Presentacion</li>
                        </ul>
                    </div>
                        <h1 class="h1">Presentacion</h1>
                </div>



    <div class="col-md-12">
                        <div class="panel panel-default">

                            <div class="panel-body">
                                <div class="tab-wrapper tab-primary">

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home1">

                                             <div class="row">
                    <div class="col-md-12">


                        <a href="<?php echo base_url();?>mantenimiento/Presentacion/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Presentacion</a>

                </div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                          <div class="panel-body">
                            <table id="example1" class="table table-striped table-bordered" width= 100%>
                            <thead>
                                <tr><th>#</th>
                                    <th>Nombre</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php if(!empty($presen)):?>
                                <?php  foreach($presen as $present):?>

                                    <tr>
                                        <td><?php echo $present->id;?></td>
                                        <td><?php echo $present->nombre;?></td>
                                        <td>
                                        <div class="btn-group">
                                                <a href="<?php echo base_url()?>mantenimiento/Presentacion/edit/<?php echo $present->id;?>" class="btn btn-info"><span class="fa fa-pencil"></span></a>
                                                <a href="<?php echo base_url();?>mantenimiento/Presentacion/delete/<?php echo $present->id;?>" class="btn btn-danger"><span class="fa fa-times" style="color: #fff"></span></a>
                                        </div>
                                        </td>
                                    </tr>

                                <?php endforeach;?>
                            <?php endif;?>
                            </tbody>
                        </table>
                        <!-- Button del pdf -->
                       </div>
                     </div>
                </div>
            </div>

                                        </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
