<section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            
                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Registros</li>
                            <li class="active">Oportunidades</li>
                        </ul>
                    </div>
                        <h2 class="h1">Editar Oportunidades</h1>
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
                        <form action="<?php echo base_url();?>mantenimiento/oportunidades/update" method="POST">
                            <input type="hidden" name="id_oportunidad" value="<?php echo $oportunidad->id_oportunidad;?>">
                             <div class="form-group">
                                <label for="categoria">Nombre:</label>
                                <select readonly="" name="nombre" id="categoria" class="form-control" >
                                    <?php foreach($iniciativa as $iniciativas):?>
                                        <?php if($iniciativas->nombre == $oportunidad->nombre):?>
                                        <option value="<?php echo $iniciativas->nombre?>" selected><?php echo $iniciativas->nombre;?></option>
                                    <?php else:?>
                                        <option value="<?php echo $iniciativas->nombre?>"><?php echo $iniciativas->nombre;?></option>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="codigo">Grupo:</label>
                                <input type="text" class="form-control" id="grupo" name="grupo" readonly="" value="<?php echo $oportunidad->id_grupo?>">
                            </div>
                            <div class="form-group">
                                <label for="codigo">Llamada:</label>
                                <input type="date" class="form-control" id="grupo" name="llamada"  value="<?php echo $oportunidad->llamada?>">
                            </div>
                            <div class="form-group">
                                <label for="codigo">Respuesta:</label>
                                <input type="text" class="form-control" id="grupo" name="r1"  value="<?php echo $oportunidad->respuesta1?>">
                            </div>
                            <div class="form-group">
                                <label for="codigo">Reunion:</label>
                                <input type="date" class="form-control" id="grupo" name="reunion"  value="<?php echo $oportunidad->reunion?>">
                            </div>
                            <div class="form-group">
                                <label for="codigo">Respuesta:</label>
                                <input type="text" class="form-control" id="grupo" name="r2"  value="<?php echo $oportunidad->respuesta2?>">
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
