<section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            
                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Registros</li>
                            <li class="active">Reclamos</li>
                        </ul>
                    </div>
                        <h2 class="h1">Editar Reclamo</h1>
                </div>


</div>
<!-- /.content-wrapper -->
<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Datos</h3>
                                
                            </div>
                            <div class="panel-body">
<div class="content-wrapper">
<div class="col-md-12">
                        <div class="panel panel-default">
                            
                            
                            

                                <div class="panel-body">
                                    <?php if($this->session->flashdata("error")):?>
                                        <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                        </div>
                                    <?php endif;?>
                                <form class="form-horizontal form-border" action="<?php echo base_url();?>mantenimiento/reclamos/update" method="POST">
                                <input type="hidden" value="<?php echo $reclamo->id;?>" name="idreclamo">                    

                            <div class="form-group">
                                <label for="categoria">Vendedor:</label>
                                <select name="vendedor" id="producto" class="form-control">
                                    <?php foreach($usuario as $usuarios):?>
                                        <?php if($usuarios->nombres == $reclamo->vendedor):?>
                                        <option value="<?php echo $usuarios->nombres?>" selected><?php echo $usuarios->nombres;?></option>
                                    <?php else:?>
                                        <option value="<?php echo $usuarios->nombres?>"><?php echo $usuarios->nombres;?></option>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </select>
                            </div>
                
                            <div class="form-group">
                                <label for="categoria">Producto:</label>
                                <select name="producto" id="producto" class="form-control">
                                    <?php foreach($producto as $productos):?>
                                        <?php if($productos->nombre == $reclamo->producto):?>
                                        <option value="<?php echo $productos->nombre?>" selected><?php echo $productos->nombre;?></option>
                                    <?php else:?>
                                        <option value="<?php echo $productos->nombre?>"><?php echo $productos->nombre;?></option>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </select>
                            </div>

                                    <div class="form-group">
                                    <label for="stock">Reclamo:</label>    
                                <input type="text" class="form-control" id="stock" name="reclamo" value="<?php echo $reclamo->reclamo?>">
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
                        
