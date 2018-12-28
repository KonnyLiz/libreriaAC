<section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            
                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Registros</li>
                            <li class="active">Permisos</li>
                        </ul>
                    </div>
                        <h2 class="h1">Editar Permisos</h1>
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
                       <form action="<?php echo base_url();?>mantenimiento/permisos/update" method="POST">
                            <input type="hidden" name="id_permiso" value="<?php echo $permiso->id;?>">
                            <div class="form-group">

                               <label for="categoria">Roles:</label>
                               <select  name="rol" id="rol" class="form-control" >
                                    <?php foreach($roles as $rol):?>
                                        <option value="<?php echo $rol->id; ?>" 
                                            <?php echo $rol->id == $permiso->rol_id ? "selected":"";?>><?php echo $rol->nombre?></option>;  
                                           
                                    <?php endforeach;?>
                                </select>
                            </div> 
                            <div class="form-group">

                               <label for="categoria">Menus:</label>
                               <select  name="menu2" id="menu" class="form-control" >
                                    <?php foreach($menus as $menu):?>
                                        <option value="<?php echo $menu->id; ?>" 
                                            <?php echo $menu->id == $permiso->menu_id ? "selected":"";?>><?php echo $menu->nombre?></option>;  
                                           
                                    <?php endforeach;?>
                                </select>
                            </div> 
                            <div class="form-group">                           
                                <label for="read">Leer:</label>
                                <label class="radio-line">
                                    <input type="radio" name="read" value="1" <?php echo $permiso->read== 1 ? "Checked":"";?>>Si
                                </label>
                                <label class="radio-line">
                                    <input type="radio" name="read" value="0" <?php echo $permiso->read== 0 ? "Checked":"";?>>No
                                </label>
                            </div>
                            <div class="form-group">                           
                                <label for="read">Agregar:</label>
                                <label class="radio-line">
                                    <input type="radio" name="insert" value="1" <?php echo $permiso->insert== 1 ? "Checked":"";?>>Si
                                </label>
                                <label class="radio-line">
                                    <input type="radio" name="insert" value="0" <?php echo $permiso->insert== 0 ? "Checked":"";?>>No
                                </label>
                            </div>
                            <div class="form-group">                           
                                <label for="read">Actualizar:</label>
                                <label class="radio-line">
                                    <input type="radio" name="update" value="1" <?php echo $permiso->update== 1 ? "Checked":"";?>>Si
                                </label>
                                <label class="radio-line">
                                    <input type="radio" name="update" value="0" <?php echo $permiso->update== 0 ? "Checked":"";?>>No
                                </label>
                            </div>
                            <div class="form-group">                           
                                <label for="read">Eliminar:</label>
                                <label class="radio-line">
                                    <input type="radio" name="delete" value="1" <?php echo $permiso->delete== 1 ? "Checked":"";?>>Si
                                </label>
                                <label class="radio-line">
                                    <input type="radio" name="delete" value="0" <?php echo $permiso->delete== 0 ? "Checked":"";?>>No
                                </label>
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
