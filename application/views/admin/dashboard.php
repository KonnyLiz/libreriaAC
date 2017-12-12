
         <section class="main-content-wrapper">
            <section id="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs start -->
                        <ul class="breadcrumb">
                            <li class="active"><a href="dashboard">Dashboard</a>
                            
                        </ul>
                        <!--breadcrumbs end -->
                       <div class="col-md-4 col-sm-6">
                       <a href="movimientos/ventas/add">

                        <?php $cant = 0?>
                             <?php foreach($ventas as $usuarios):?>
                               <?php $cant++;?>
                            <?php endforeach;?>
                        <div class="dashboard-tile detail tile-red" style="background-color:#20B2AA   ;color: #fff">
                            <div class="content">
                                <h1 class="text-left timer"><?php echo $cant ?> Ventas</h1>
                                <p>Ventas</p>
                            </div>
                            <div class="icon"><i class="fa fa-money"></i>
                            </div>
                        </div>
                        </a>
                        </div>
                        <?php $cant = 0?>
                             <?php foreach($usuario as $usuarios):?>
                               <?php $cant++;?>
                            <?php endforeach;?>
                        <div class="col-md-4 col-sm-6">
                       <a href="mantenimiento/Usuarios"">
                        <div class="dashboard-tile detail tile-red" style="background-color:#20B2AA   ;color: #fff">
                            <div class="content">
                                <h1 class="text-left timer"><?php echo $cant ?> Usuarios</h1>
                                <p>Usuario</p>
                            </div>
                            <div class="icon"><i class="fa fa-user "></i>
                            </div>
                        </div>
                        </a>
                        </div>

                        <div class="col-md-4 col-sm-6">
                       <a href="mantenimiento/productos">
                         <?php $cant = 0?>
                             <?php foreach($productos as $usuarios):?>
                               <?php $cant++;?>
                            <?php endforeach;?>
                        <div class="dashboard-tile detail tile-red" style="background-color:#20B2AA   ;color: #fff">
                            <div class="content">
                                <h1 class="text-left timer"><?php echo $cant ?> Productos</h1>
                                <p>Productos</p>
                            </div>
                            <div class="icon"><i class="fa fa-shopping-cart"></i>
                            </div>
                        </div>
                        </a>
                        </div>                  

                        <div class="col-md-4 col-sm-6">
                       <a href="mantenimiento/Campana">
                        <?php $cant = 0?>
                             <?php foreach($campanas as $usuarios):?>
                               <?php $cant++;?>
                            <?php endforeach;?>
                        <div class="dashboard-tile detail tile-red" style="background-color:#20B2AA   ;color: #fff">
                            <div class="content">
                                <h1 class="text-left timer"><?php echo $cant ?> Campaña</h1>
                                <p>Campaña</p>
                            </div>
                            <div class="icon"><i class="fa fa-home"></i>
                            </div>
                        </div>
                        </a>
                        </div>

                        <div class="col-md-4 col-sm-6">
                       <a href="mantenimiento/iniciativas">
                         <?php $cant = 0?>
                             <?php foreach($iniciativas as $usuarios):?>
                               <?php $cant++;?>
                            <?php endforeach;?>
                        <div class="dashboard-tile detail tile-red" style="background-color:#20B2AA   ;color: #fff">
                            <div class="content">
                                <h1 class="text-left timer"><?php echo $cant ?> Iniciativas</h1>
                                <p>Iniciativas</p>
                            </div>
                            <div class="icon"><i class="fa fa-users"></i>
                            </div>
                        </div>
                        </a>
                        </div>

                        <div class="col-md-4 col-sm-6">
                       <a href="mantenimiento/oportunidades">
                          <?php $cant = 0?>
                             <?php foreach($oportunidades as $usuarios):?>
                               <?php $cant++;?>
                            <?php endforeach;?>
                        <div class="dashboard-tile detail tile-red" style="background-color:#20B2AA   ;color: #fff">
                            <div class="content">
                                <h1 class="text-left timer">  <?php echo $cant ?> Oportunidad</h1>
                                <p>Oportunidades</p>
                            </div>
                            <div class="icon"><i class="fa fa-users"></i>
                            </div>
                        </div>
                        </a>
                        </div>

                        <div class="col-md-4 col-sm-6">
                       <a href="mantenimiento/clientes">
                          <?php $cant = 0?>
                             <?php foreach($cliente as $usuarios):?>
                               <?php $cant++;?>
                            <?php endforeach;?>
                        <div class="dashboard-tile detail tile-red" style="background-color:#20B2AA   ;color: #fff">
                            <div class="content">
                                <h1 class="text-left timer"><?php echo $cant ?> Clientes</h1>
                                <p>Clientes</p>
                            </div>
                            <div class="icon"><i class="fa fa-users"></i>
                            </div>
                        </div>
                        </a>
                        </div>



                    </div>
                </div>

            </section>
            

         <!--main content end-->
              