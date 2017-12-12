<section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            
                            <li><a href="Dashboard">Dashboard</a></li>
                            <li>Usuarios</li>
                            <li class="active">Usuarios</li>
                        </ul>
                    </div>
                        <h1 class="h1">Usuarios</h1>
                </div>
                    
<!-- Content Wrapper. Contains page content -->

<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion de los Usuarios/h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


 <div class="col-md-12">
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="tab-wrapper tab-primary">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#home1" data-toggle="tab">Lista</a>
                                        </li>
                                        <li>
                                            <?php if($permisos->insert == 1):?>
<a href="#profile1" data-toggle="tab">Nuevo</a>
                                        <?php endif?></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home1">
                                            
                                            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                          <div class="panel-body">
                            <table id="example1" class="table table-striped table-bordered" >
                            
                     <thead>
                                <tr>
                                    <th>Grupo</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>DUI</th>
                                    <th>NIT</th>
                                    <th>Telefono</th>
                                    <th>E-mail</th>
                                    <th>Username</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($usuario)):?>
                                    <?php foreach($usuario as $usuarios):?>
                                        <tr>
                                            <td><?php echo $usuarios->grupo;?></td>
                                            <td><?php echo $usuarios->nombres;?></td>
                                            <td><?php echo $usuarios->apellidos;?></td>
                                            <td><?php echo $usuarios->dui;?></td>
                                            <td><?php echo $usuarios->nit;?></td>
                                            <td><?php echo $usuarios->telefono;?></td>
                                            <td><?php echo $usuarios->email;?></td>
                                            <td><?php echo $usuarios->username;?></td>
                                            <?php $datausuario = $usuarios->id."*".$usuarios->grupo."*".$usuarios->nombres."*".$usuarios->apellidos."*".$usuarios->dui."*".$usuarios->nit."*".$usuarios->telefono."*".$usuarios->email."*".$usuarios->username."*".$usuarios->password."*".$usuarios->rol_id."*".$usuarios->estado;?>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view-producto" data-toggle="modal" data-target="#modal-default" value="<?php echo $datausuario;?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                    <?php if($permisos->update == 1):?>  <a href="<?php echo base_url()?>mantenimiento/usuarios/edit/<?php echo $usuarios->id;?>" class="btn btn-warning"><span class="fa fa-pencil" style="color: #fff"></span></a>
<?php endif?>
 <?php if($permisos->delete == 1):?><a href="<?php echo base_url();?>mantenimiento/Usuarios/delete/<?php echo $usuarios->id;?>" class="btn btn-danger btn-remove"><span class="fa fa-times" style="color: #fff"></span></a>
<?php endif?>
                                                  
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>
                        <a href="<?php echo base_url();?>pdfcontroller/usuarios" target="_blank">
                        <button type="button" class="btn btn-success"><i class="fa fa-check"></i>Reporte General</button>
                        </a>
                       </div>
                     </div>
                </div>
            </div>

                                        </div>
                                        <div class="tab-pane" id="profile1">

                                           <div class="panel-body">
                                           <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
                             </div>
                        <?php endif;?>
                            <form action="<?php echo base_url();?>mantenimiento/usuarios/store" method="POST">

                            <div class="form-group">
                               <label for="categoria">grupo</label>
                                 <select name=""   onblur="vendedor()" id="grupo_vendedor" class="form-control">
                                <option value="" selected="" onblur="vendedor()" disabled="">Seleccione grupo</option>
                                    <?php foreach($grupo as $grupos):?>
                                        <?php $datacomprobante= $grupos->idgrupo."*".$grupos->descripcion; ?>
                                        <option value="<?php echo $datacomprobante;?>"><?php echo $grupos->descripcion;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div> 
<script type="text/javascript">
    function vendedor(){  
        var porId=document.getElementById("grupo_vendedor").value;
 

      var res = porId.split("*");
        $("#grupo2").val(res[1]);
    }
</script>                       
                             <input type="hidden" class="form-control" id="grupo2" name="grupo3" >
                            <div class="form-group">
                                <label for="codigo">Nombres:</label>
                                <input type="text" class="form-control"  name="r1" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">Apellidos:</label>
                                <input type="text" class="form-control"  name="r2" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">DUI:</label>
                                <input type="text" class="form-control"  name="r3"  >
                            </div>
                           <div class="form-group">
                                <label for="codigo">NIT:</label>
                                <input type="text" class="form-control"  name="r4" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">Telefono:</label>
                                <input type="text" class="form-control"  name="r5" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">E-mail:</label>
                                <input type="text" class="form-control"  name="r6" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">Username:</label>
                                <input type="text" class="form-control"  name="r7" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">Password:</label>
                                <input type="text" class="form-control"  name="r8" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">Rol:</label>
                                <input type="text" class="form-control"  name="r9" >
                            </div>
                            <div class="form-group">
                                <label for="codigo">estado:</label>
                                <input type="text" class="form-control"  name="r10" >
                            </div>
                                   
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                            </div>
                        </form>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>