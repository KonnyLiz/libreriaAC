 <section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            
                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Productos</li>
                            <li class="active">Categorias</li>
                        </ul>
                    </div>
                        <h1 class="h1">Categorias</h1>
                </div>
                    
                       

    <div class="col-md-12">
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="tab-wrapper tab-primary">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#home1" data-toggle="tab">Lista</a>
                                        </li>
                                        <?php if($permisos->insert == 1):?>
                                        <li><a href="#profile1" data-toggle="tab">Nuevo</a>
                                        </li>
                                    <?php endif?>
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
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                     
                            <tbody>
                            <?php if(!empty($categorias)):?>
                                <?php  foreach($categorias as $categoria):?>
                                
                                    <tr>
                                        <td><?php echo $categoria->nombre;?></td>
                                        <td><?php echo $categoria->descripcion;?></td>
                                        <td>
                                        <div class="btn-group">

                                            <?php if($permisos->update == 1):?>

                                                <a href="<?php echo base_url()?>mantenimiento/categorias/edit/<?php echo $categoria->id;?>" class="btn btn-info"><span class="fa fa-pencil"></span></a>
                                            <?php endif?>
                    
                                            <?php if($permisos->delete == 1):?>

                                                <a href="<?php echo base_url();?>mantenimiento/categorias/delete/<?php echo $categoria->id;?>" class="btn btn-danger"><span class="fa fa-times" style="color: #fff"></span></a>
                                            <?php endif?>
                    


                                            
                                        </div>
                                        </td>
                                    </tr>
                                
                                <?php endforeach;?>
                            <?php endif;?>
                            </tbody>
                        </table>
                        <!-- Button del pdf -->
                        <a href="<?php echo base_url();?>pdfcontroller/categorias" target="_blank">
                            <button type="button" class="btn btn-success"><i class="fa fa-check"></i>Generrar Reporte</button>
                        </a>
                       </div>
                     </div>
                </div>
            </div>

                                        </div>
                                        <div class="tab-pane" id="profile1">

                                           <div class="panel-body">
                                <form class="form-horizontal form-border" action="<?php echo base_url();?>mantenimiento/categorias/store" method="POST">
                                
                                    <div class="form-group <?php echo !empty(form_error("nombre"))? 'has-error':'' ?> " >
                                        <label class="col-sm-3 control-label">Nombre</label>
                                        <div class="col-sm-6">
                                            <input value="<?php echo set_value("nombre")?>" type="text" class="form-control" placeholder="Nombre de la categoria" name="nombre">
                                            <?php echo form_error("nombre", "<span class='help-block'>", "</span>");?>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="col-sm-3 control-label">Descripcion</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Descripcion de la categoria" name="descripcion">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-4 " style="position: relative;">
                                        <!-- Button trigger modal -->
                                        <button class="btn btn-primary btn-lg" type="submit"><i class=" fa fa-plus"></i>
                                            Guardar
                                        </button>
                                    </div>
                                    </form>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
