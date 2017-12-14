 <section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            
                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Productos</li>
                            <li class="active">Marcas</li>
                        </ul>
                    </div>
                        <h1 class="h1">Marcas</h1>
                </div>
                    
                       

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
                                <tr><th>#</th>
                                    <th>Nombre</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                     
                            <tbody>
                            <?php if(!empty($marca)):?>
                                <?php  foreach($marca as $marcas):?>
                                
                                    <tr>
                                        <td><?php echo $marcas->id_marca;?></td>
                                        <td><?php echo $marcas->nombre;?></td>
                                        <td>
                                        <div class="btn-group">
                                                <a href="<?php echo base_url()?>mantenimiento/marcas/edit/<?php echo $marcas->id_marca;?>" class="btn btn-info"><span class="fa fa-pencil"></span></a>
                                                <a href="<?php echo base_url();?>mantenimiento/marcas/delete/<?php echo $marcas->id_marca;?>" class="btn btn-danger"><span class="fa fa-times" style="color: #fff"></span></a>                                            
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
                                        <div class="tab-pane" id="profile1">

                                           <div class="panel-body">
                                <form class="form-horizontal form-border" action="<?php echo base_url();?>mantenimiento/marcas/store" method="POST">
                                
                                    <div class="form-group <?php echo !empty(form_error("nombre"))? 'has-error':'' ?> " >
                                        <label class="col-sm-3 control-label">Nombre</label>
                                        <div class="col-sm-6">
                                            <input value="<?php echo set_value("nombre")?>" type="text" class="form-control" placeholder="Nombre de la marca" name="nombre">
                                            <?php echo form_error("nombre", "<span class='help-block'>", "</span>");?>
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
                        
