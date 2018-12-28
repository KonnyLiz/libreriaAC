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
                       <form action="<?php echo base_url();?>mantenimiento/Usuarios/update" method="POST">
                            <input type="hidden" name="id_usuario" value="<?php echo $usuario->id;?>">
                            

                            <div class="form-group">
                                <label for="codigo">Nombres:</label>
                                <input type="text" value="<?php echo !empty(form_error("r1"))? set_value("r1"):$usuario->nombres;?>" class="form-control" title="Solo puede contener letras" pattern="[A-Za-z][\s]*{1,50}" name="r1" required>
                            </div>

                            <div class="form-group">
                                <label for="codigo">Apellidos:</label>
                                <input type="text" value="<?php echo !empty(form_error("r2"))? set_value("r2"):$usuario->apellidos;?>" title="Solo puede contener letras" pattern="[A-Za-z][\s]*{1,50}" class="form-control"  name="r2" required>
                            </div>

                            <div class="form-group <?php echo !empty(form_error("r3"))? 'has-error':'' ?>">
                                <label for="codigo">DUI:</label>
                                <input type="text" value="<?php echo !empty(form_error("r3"))? set_value("r3"):$usuario->dui;?>" title="Formato: ########-#" pattern="[0-9]{8}-[0-9]{1}" class="form-control"  name="r3" required>
                                <?php echo form_error("r3", "<span class='help-block'>", "</span>");?>
                            </div>

                           <div class="form-group <?php echo !empty(form_error("r4"))? 'has-error':'' ?>">
                                <label for="codigo">NIT:</label>
                                <input type="text" value="<?php echo !empty(form_error("r4"))? set_value("r4"):$usuario->nit;?>" title="Formato: ####-######-###-#" class="form-control" pattern="[0-9]{4}-[0-9]{6}-[0-9]{3}-[0-9]{1}"  name="r4" required>
                                <?php echo form_error("r4", "<span class='help-block'>", "</span>");?>
                            </div>

                            <div class="form-group">
                                <label for="codigo">Telefono:</label>
                                <input type="text" class="form-control" value="<?php echo !empty(form_error("r5"))? set_value("r5"):$usuario->telefono;?>" title="Formato: ####-####" pattern="[0-9]{4}-[0-9]{4}" name="r5" >
                            </div>

                            <div class="form-group">
                                <label for="codigo">E-mail:</label>
                                <input type="text" value="<?php echo !empty(form_error("r6"))? set_value("r6"):$usuario->email;?>" class="form-control"  name="r6">
                            </div>

                            <div class="form-group <?php echo !empty(form_error("r7"))? 'has-error':'' ?>">
                                <label for="codigo">Nombre de Usuario:</label>
                                <input type="text" value="<?php echo !empty(form_error("r7"))? set_value("r7"):$usuario->username;?>" class="form-control"  name="r7" required>
                                <?php echo form_error("r7", "<span class='help-block'>", "</span>");?>
                            </div>
                            <div class="form-group">
                                <label for="codigo">Contraseña:</label>
                                <input type="text" title="Debe contener entre 3 y 20 caracteres" value="<?php echo !empty(form_error("r8"))? set_value("r8"):$usuario->password;?>" class="form-control" minlength="3" maxlength="20" name="r8" required>
                            </div>
                            <label for="">Rol:</label>
                                    <select name="roles" id="roles" class="form-control" required>
                                        <option value="">Seleccione...</option>
                                        <?php foreach ($roles as $rol) { ?>
                                            <?php $dataRol = $rol->id."*".$rol->nombre; ?>
                                           <option value="<?php echo $dataRol;?>"><?php echo $rol->nombre ?></option>
                                        <?php } ?>
                                    </select>
                                    <input type="hidden" id="idRol" name="idRol" value="<?php echo !empty(form_error("idRol"))? set_value("idRol"):$usuario->rol_id;?>">
                                   <label for="">&nbsp;</label>
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
