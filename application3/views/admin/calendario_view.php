 <section class="main-content-wrapper">
            <section id="main-content">
            <h1 class="h1">Tu agenda de vendedor</h1>
                <div class="row">
                    <div class="col-md-12">

                            <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="tab-wrapper tab-primary">
                        <div id="calendar"></div>
                        </div>
                        </div>
                        </div>
                          <style>

    #calendar {
        max-width: 900px;
        margin: 0 auto;
    }

</style>
<div class="modal fade" id="modalEvento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" > Editar evento</h4>
          </div>

          <div class="modal-body">

                <!-- form start -->
                <form class="form-horizontal">
                    <input type="hidden" id="mhdnIdEvento">
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="txtBandaRP">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Fecha de inicio</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="fi">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Fecha final</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="ff">
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <!-- <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Sign in</button>
                  </div> -->
                  <!-- /.box-footer -->
                </form>
              <!-- /.box -->
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" id="btnCerrarModal" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-danger" id="btnUpdEvento">Guardar</button>
          </div>
        </div>
      </div>
    </div>


<div class="modal fade" id="modalEvento2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header bg-red">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Nuevo evento</h4>
          </div>

          <div class="modal-body">

                <!-- form start -->
                <form class="form-horizontal" action="<?php echo base_url()?>calendarios/">
                    <input type="hidden" id="mhdnIdEvento">
                  <div class="box-body">
                     <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Fecha de inicio</label>

                      <div class="col-sm-10">
                        <input type="date" class="form-control" id="fei">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Fecha final</label>

                      <div class="col-sm-10">
                        <input type="date" class="form-control" id="fef">
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <!-- <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Sign in</button>
                  </div> -->
                  <!-- /.box-footer -->
                </form>
              <!-- /.box -->
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" id="btnCerrarModal" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-danger" id="btngd" data-dismiss="modal">Guardar</button>
          </div>
        </div>
      </div>
    </div>
            
         <!--main content end-->


              