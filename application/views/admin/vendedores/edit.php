<section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            
                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Registros</li>
                            <li class="active">Usuarios</li>
                        </ul>
                    </div>
                        <h2 class="h1">Editar Usuario</h1>
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
                       <form action="<?php echo base_url();?>mantenimiento/Vendedores/update" method="POST">
                            <input type="hidden" name="id_usuario" value="<?php echo $usuario->id;?>">
                            <div class="form-group">
                               <label for="categoria">grupo</label>
                               <select  name=""   onblur="vendedor2()" id="grupo_vendedor" class="form-control" >
                                    <?php foreach($grupo as $grupos):?>
                                        <?php if($grupos->idgrupo == $usuario->grupo):?>
                                            <?php $name = $grupos->descripcion;?>
                                        <option value="<?php echo $grupos->descripcion?>" selected><?php echo $grupos->descripcion;?></option>
                                    <?php else:?>
                                        <option value="<?php echo $grupos->descripcion?>"><?php echo $grupos->descripcion;?></option>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </select>
                            </div> 
                            <script type="text/javascript">
                                function vendedor2(){  
                                    var porId=document.getElementById("grupo_vendedor").value;
                                    $("#grupo3").val(porId);
                                }
                            </script>                     
                            <input type="hidden" name="grupo3" id="grupo3" value="<?php echo $name?>">
                            <div class="form-group">
                                <label for="codigo">Nombre:</label>
                                <input type="text" class="form-control" id="grupo" name="r2"  value="<?php echo $usuario->nombres?>">
                            </div>
                            <div class="form-group">
                                <label for="codigo">Apellidos:</label>
                                <input type="text" class="form-control" id="grupo" name="r3"  value="<?php echo $usuario->apellidos?>">
                            </div>
                            <div class="form-group">
                                <label for="codigo">DUI:</label>
                                <input type="text" class="form-control" id="grupo" name="r4"  value="<?php echo $usuario->dui?>">
                            </div>
                            <div class="form-group">
                                <label for="codigo">NIT:</label>
                                <input type="text" class="form-control" id="grupo" name="r5"  value="<?php echo $usuario->nit?>">
                            </div>
                            <div class="form-group">
                                <label for="codigo">Teléfono:</label>
                                <input type="text" class="form-control" id="grupo" name="r6"  value="<?php echo $usuario->telefono?>">
                            </div>
                            <div class="form-group">
                                <label for="codigo">E-mail:</label>
                                <input type="text" class="form-control" id="grupo" name="r7"  value="<?php echo $usuario->email?>">
                            </div>
                            <div class="form-group">
                                <label for="codigo">Username:</label>
                                <input type="text" class="form-control" id="grupo" name="r8"  value="<?php echo $usuario->username?>">
                            </div>

                            <div class="form-group">
                                <label for="codigo">Rol:</label>
                                <input type="text" class="form-control" id="grupo" name="r10"  value="<?php echo $usuario->rol_id?>">
                            </div>
                            <div class="form-group">
                                <label for="codigo">Estado:</label>
                                <input type="text" class="form-control" id="grupo" name="r11"  value="<?php echo $usuario->estado?>">
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
