<section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            
                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Registros</li>
                            <li class="active">Inciativas</li>
                        </ul>
                    </div>
                        <h2 class="h1">Editar Inciativas</h1>
                </div>
<!-- Content Wrapper. Contains page content -->
<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Datos</h3>
                                
                            </div>
                            <div class="panel-body">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
                             </div>
                        <?php endif;?>
                        <form action="<?php echo base_url();?>mantenimiento/iniciativas/update" method="POST">
                            <input type="hidden" name="idproducto" value="<?php echo $iniciativa->id_iniciativa;?>">
                            <div class="form-group <?php echo !empty(form_error("codigo"))? 'has-error':'' ?>">
                                <label for="codigo">Nombre:</label>
                                <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo !empty(form_error("codigo"))? set_value("codigo"):$iniciativa->nombre?>">
                                <?php echo form_error("cadigo", "<span class='help-block'>", "</span>");?>
                            </div>
                            
                            <div class="form-group">
                                <label for="categoria">Categoria:</label>
                                <select name="categoria" id="categoria" class="form-control">
                                    <?php foreach($grupo as $grupos):?>
                                        <?php if($grupos->idgrupo == $iniciativa->grupo):?>
                                        <option value="<?php echo $grupos->idgrupo?>" selected><?php echo $grupos->descripcion;?></option>
                                    <?php else:?>
                                        <option value="<?php echo $grupos->idgrupo?>"><?php echo $grupos->descripcion;?></option>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            
                            <div class="form-group">
                            <label for="categoria">Contacto:</label>
                                    <select class="form-control" name="contacto">
                                        <?php
                                        if($iniciativa->contacto == "Correo"){
                                                echo '<option selected value="Correo">Correo</option>';
                                                echo '<option value="Pagina web">Pagina Web</option>';
                                                echo '<option value="Redes">Redes Sociales</option>';
                                                echo '<option value="Cotizacion">Cotizacion</option>';
                                            }else if($iniciativa->contacto == "Pagina web"){
                                                echo '<option value="Correo">Correo</option>';
                                                echo '<option selected value="Pagina web">Pagina Web</option>';
                                                echo '<option value="Redes">Redes Sociales</option>';
                                                echo '<option value="Cotizacion">Cotizacion</option>';
                                            }else if($iniciativa->contacto == "Redes"){
                                                echo '<option value="Correo">Correo</option>';
                                                echo '<option value="Pagina web">Pagina Web</option>';
                                                echo '<option selected value="Redes">Redes Sociales</option>';
                                                echo '<option value="Cotizacion">Cotizacion</option>';
                                            }else if($iniciativa->contacto == "Cotizacion"){
                                                echo '<option value="Correo">Correo</option>';
                                                echo '<option value="Pagina web">Pagina Web</option>';
                                                echo '<option value="Redes">Redes Sociales</option>';
                                                echo '<option selected value="Cotizacion">Cotizacion</option>';
                                            }
                                        ?>
                                    </select>   
                                    </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
</div>
<!-- /.content-wrapper -->
