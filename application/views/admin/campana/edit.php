 <section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            
                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Productos</li>
                            <li class="active">Campana</li>
                        </ul>
                    </div>
                        <h2 class="h1">Editar campaña</h1>
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
                                <form class="form-horizontal form-border " action="<?php echo base_url();?>mantenimiento/campana/update" method="POST">
                                <input type="hidden" value="<?php echo $campanas->id;?>" name="idCampana">
                                    <div class="form-group <?php echo !empty(form_error("nombre"))? 'has-error':'' ?>">
                                    
                                    <label for="stock" class="col-sm-3 control-label">Nombre de la campaña:</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" id="stock" name="nombre" value="<?php echo !empty(form_error("nombre"))? set_value("nombre"):$campanas->nombre?>">
                                    </div>
                                    <?php echo form_error("nombre", "<span class='help-block'>", "</span>");?>
                                   </div>

                    

                            <div class="form-group">
                                <label for="categoria" class="col-sm-3 control-label">Producto:</label>
                                <div class="col-sm-6">
                                <select name="producto" id="producto" class="form-control">
                                    <?php foreach($productos as $producto):?>
                                        <?php if($producto->nombre == $campanas->producto):?>
                                        <option value="<?php echo $producto->nombre?>" selected><?php echo $producto->nombre;?></option>
                                    <?php else:?>
                                        <option value="<?php echo $producto->nombre?>"><?php echo $producto->nombre;?></option>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </select>
                                </div>
                            </div>  
                            <div class="form-group <?php echo !empty(form_error("cantidad_a_vender"))? 'has-error':'' ?>">
                                        <label class="col-sm-3 control-label">Cantidad de Producto a Vender</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="stock" name="cantidad_a_vender" value="<?php echo !empty(form_error("cantidad_a_vender"))? set_value("cantidad_a_vender"):$campanas->cantidad_a_vender?>">
                                            <?php echo form_error("cantidad_a_vender", "<span class='help-block'>", "</span>");?>
                                        </div>
                                    </div>
                                        <div class="form-group <?php echo !empty(form_error("fecha_i"))? 'has-error':'' ?>">
                                        <label class="col-sm-3 control-label">Fecha de inicio</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Descripcion de la categoria" id="descripcion" name="fecha_i" value="<?php echo !empty(form_error("fecha_i"))? set_value("fecha_i"):$campanas->fecha_i;?> ">
                                            <?php echo form_error("fecha_i", "<span class='help-block'>", "</span>");?>
                                        </div>
                                    </div>
                                    <div class="form-group <?php echo !empty(form_error("fecha_f"))? 'has-error':'' ?>">
                                        <label class="col-sm-3 control-label">Fecha de finalizacion</label>
                                        <div class="col-sm-6">
                                            <input type="text"  class="form-control" placeholder="Descripcion de la categoria" id="descripcion" name="fecha_f" value="<?php echo !empty(form_error("fecha_f"))? set_value("fecha_f"):$campanas->fecha_f;?> ">
                                            <?php echo form_error("fecha_f", "<span class='help-block'>", "</span>");?>
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
                        
