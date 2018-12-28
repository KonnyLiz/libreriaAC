 <section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            
                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Productos</li>
                            <li class="active">Categorias</li>
                        </ul>
                    </div>
                        <h2 class="h1">Editar categoria</h1>
                </div>


</div>
<!-- /.content-wrapper -->
<div class="col-md-12">
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="tab-wrapper tab-primary">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#home1" data-toggle="tab">EDITAR</a></li>
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
                                <form class="form-horizontal form-border" action="<?php echo base_url();?>mantenimiento/categorias/update" method="POST">
                                <input type="hidden" value="<?php echo $categoria->id;?>" name="idCategoria">
                                    
                                    <div class="form-group" >
                                        <label class="col-sm-3 control-label">Nombre</label>
                                        <div class="col-sm-6 <?php echo !empty(form_error("nombre"))? 'has-error':'' ?> ">
                                            <input type="text" class="form-control" placeholder="Nombre de la categoria" id="nombre" name="nombre" value="<?php echo !empty(form_error("nombre"))? set_value("nombre"):$categoria->nombre;?>">
                                            <?php echo form_error("nombre", "<span class='help-block'>", "</span>");?>
                                        </div>

                                        </div>
                                        <div class="form-group">
                                        <label class="col-sm-3 control-label">Descripcion</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Descripcion de la categoria" id="descripcion" name="descripcion" value="<?php echo $categoria->descripcion?> ">
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
                        