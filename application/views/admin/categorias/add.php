<section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            
                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Inventarios</li>
                            <li class="active">Categorias</li>
                        </ul>
                    </div>
                        <h1 class="h1">Categorias</h1>
                </div>

     <div class="col-md-12">
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="tab-wrapper tab-primary">
                            <?php if($permisos->insert == 1):?>


                                <form class="form-horizontal form-border" action="<?php echo base_url();?>mantenimiento/categorias/store" method="POST">
                                
                                    <div class="form-group <?php echo !empty(form_error("nombre"))? 'has-error':'' ?>">
                                        <label class="col-sm-3 control-label">Nombre</label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?php echo set_value("nombre")?>" title="Solo puede contener letras" pattern="[A-Za-z][\s]*{1,50}" class="form-control" id="nombre" placeholder="Nombre de la categoria" name="nombre">
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

                
                                     <?php endif;?>
                                    </div>
                                </div>
                            </div>
                                </div>
                            </section>
                        </section>