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
                        <h2 class="h1">Agregar Presentacion</h1>
                </div>


</div>
<!-- /.content-wrapper -->
<div class="col-md-12">
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="tab-wrapper tab-primary">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#home1" data-toggle="tab">Datos</a></li>
                                    </ul>
                                </div>
                            <div class="tab-pane" id="profile1">

                                <div class="panel-body">
                                    <?php if($this->session->flashdata("error")):?>
                                        <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                        </div>
                                    <?php endif;?>
                               <form class="form-horizontal form-border" action="<?php echo base_url();?>mantenimiento/Presentacion/store" method="POST">
                                
                                    <div class="form-group <?php echo !empty(form_error("nombre"))? 'has-error':'' ?> " >
                                        <label class="col-sm-3 control-label">Nombre</label>
                                        <div class="col-sm-6">
                                            <input value="<?php echo set_value("nombre")?>" type="text" class="form-control" title="Solo puede contener letras" pattern="[A-Za-z][\s]*{1,50}" placeholder="Nombre de la Presentacion" name="nombre">
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
                        