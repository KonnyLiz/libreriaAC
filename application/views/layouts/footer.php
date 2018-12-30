        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Ventas/CRM Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; 2017 <a href="#">Libreria A&amp;C</a>.</strong> All rights
            reserved.
        </footer>
    </div>


    <!-- jQuery 3 -->

<!-- jQuery 3 -->
    <script src='<?php echo base_url(); ?>assets/fullcalendar/lib/moment.min.js'></script>
 <script src='<?php echo base_url(); ?>assets/fullcalendar/lib/jquery.min.js'></script>
<script src='<?php echo base_url(); ?>assets/fullcalendar/fullcalendar.min.js'></script>
<script src='<?php echo base_url(); ?>assets/fullcalendar/locale/es.js'></script>



    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/application.js"></script>
    <!--Page Level JS-->
    <script src="<?php echo base_url(); ?>assets/plugins/countTo/jquery.countTo.js"></script>
    <script src="<?php echo base_url(); ?>assets/templates/jquery-ui/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?>assets/templates/jquery-print/jquery.print.js"></script>

    <!-- ToDo List  -->
    <script src="<?php echo base_url(); ?>assets/plugins/todo/js/todos.js"></script>
    <!--Load these page level functions-->
 <script src="<?php echo base_url();?>assets/plugins/dataTables/js/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/dataTables/js/dataTables.bootstrap.js"></script>
    <!-- ./wrapper -->
    <script>
    //Variables globales
    var contador=0; //contador de agregar producto de venta
    var sigue; //contador para verificar si sigue el contador anterior
    var compr = 0; //guarda el id del comprobante en cuestion
    var f = 0; //contador para credito fiscal

$(document).ready(function (){

    $('#example1').DataTable({
      "scrollX":true,
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
        }
    });

    var base_url= "<?php echo base_url();?>";

    //calendario
    $.post('<?php echo base_url();?>Calendarios/getEventos',
            function(data){

                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay,listWeek,listDay'
                    },
                    defaultDate: new Date(),
                    navLinks: true, // can click day/week names to navigate views
                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    events: $.parseJSON(data),


                    eventResize: function(event, delta, revertFunc) {
                        var id = event.id;
                        var ff = event.end.format('YYYY-MM-DD HH:mm');
                        var fi = event.start.format('YYYY-MM-DD HH:mm');


                        if (!confirm("Esta seguro de cambiar la fecha?")) {
                            revertFunc();
                        }else{
                            $.post("<?php echo base_url();?>Calendarios/updEvento",
                            {
                                id:id,
                                fecini:fi,
                                fecfin:ff
                            },
                            function(data){
                                 location.reload();
                            });
                        }
                    },

                    eventDrop: function(event, delta, revertFunc){
                        var id = event.id;
                        var ff = event.end.format('YYYY-MM-DD HH:mm');
                        var fi = event.start.format('YYYY-MM-DD HH:mm');


                        if (!confirm("Esta seguro??")) {
                            revertFunc();
                        }else{
                            $.post("<?php echo base_url();?>Calendarios/updEvento",
                            {
                                id:id,
                                fecini:fi,
                                fecfin:ff
                            },
                            function(){
                                location.reload();
                            });
                        }
                    },


                    dayClick: function(date, jsEvent, view) {


                        $('#modalEvento2').modal();

                        if (event.url) {
                            window.open(event.url);
                            return false;
                        }

                    },

                     eventRender: function(event, element) {
                        var el = element.html();
                        element.html("<div style='width:80%;float:left;'>" + el + "</div>" +
                                    "<div style='color:#fff;text-align:right;' class='closeE'>" +
                                        "<i class='fa fa-times'></i>" +
                                    "</div>");

                        element.find('.closeE').click(function(){

                                var id = event.id;
                                $.post("<?php echo base_url();?>Calendarios/deleteEvento",
                                {
                                    id:id
                                });
                                $('#calendar').fullCalendar( 'removeEvents', event.id);

                        });
                    },

                    eventClick: function(event, jsEvent, view) {

                        // alert(event.title);
                        $('#mhdnIdEvento').val(event.id);
                        $('#mtitulo').html(event.title);
                        $('#txtBandaRP').val(event.title);
                        $('#fi').val(event.start.format('YYYY-MM-DD HH:mm'));
                        $('#ff').val(event.end.format('YYYY-MM-DD HH:mm'));
                        $('#modalEvento').modal();

                        if (event.url) {
                            window.open(event.url);
                            return false;
                        }
                    }
                });
            });

    $('#btnUpdEvento').click(function(){
        var nome = $('#txtBandaRP').val();
        var fi = $('#fi').val();
        var ff = $('#ff').val();
        var ide = $('#mhdnIdEvento').val();

        $.post("<?php echo base_url();?>Calendarios/updEvento2",
        {
            nom: nome,
            fecini:fi,
            fecfin:ff,
            id: ide
        },
        function(){
            //location.reload();
        });
        location.reload();
    });

    $('#btngd').click(function(){
        var nome = $('#nombre').val();
        var fi = $('#fei').val();
        var ff = $('#fef').val();

        $.post("<?php echo base_url();?>Calendarios/gdevento",
        {
            nom: nome,
            fecini:fi,
            fecfin:ff,
        },
        function(){
            //location.reload();
        });
        location.reload();
    });

    $(".btn-remove").on("click", function(e){
        e.preventDefault();
        var ruta = $(this).attr("href");
        //alert(ruta);
        $.ajax({
            url: ruta,
            type:"POST",
            success:function(resp){
                //http://localhost/ventas_ci/mantenimiento/productos
                window.location.href = base_url + resp;
            }
        });
    });

    $(".btn-view-producto").on("click", function(){
        var producto = $(this).val();
        //alert(cliente);
        var infoproducto = producto.split("*");
        html = "<p><strong>Codigo: </strong>"+infoproducto[0]+"</p>"
        html += "<p><strong>Nombre: </strong>"+infoproducto[1]+"</p>"
        html += "<p><strong>Descripcion: </strong>"+infoproducto[2]+"</p>"
        html += "<p><strong>Marca: </strong>"+infoproducto[3]+"</p>"
        html += "<p><strong>Proveedor: </strong>"+infoproducto[4]+"</p>"
        html += "<p><strong>Precio: </strong>"+infoproducto[5]+"</p>"
        html += "<p><strong>Precio Mayoreo 1: </strong>"+infoproducto[6]+"</p>"
        html += "<p><strong>Precio Mayoreo 2: </strong>"+infoproducto[7]+"</p>"
        html += "<p><strong>Stock: </strong>"+infoproducto[8]+"</p>"
        html += "<p><strong>Categoria: </strong>"+infoproducto[9]+"</p>";
        $("#modal-default .modal-body").html(html);
    });

    $(".btn-view-cliente").on("click", function(){
        var cliente = $(this).val();
        //alert(cliente);
        var infocliente = cliente.split("*");
        html = "<p><strong>Nombres: </strong>"+infocliente[1]+"</p>"
        html += "<p><strong>Apellidos: </strong>"+infocliente[6]+"</p>"
        html += "<p><strong>Telefono: </strong>"+infocliente[7]+"</p>"
        html += "<p><strong>NIT: </strong>"+infocliente[2]+"</p>"
        html += "<p><strong>Registro: </strong>"+infocliente[3]+"</p>"
        html += "<p><strong>Direccion: </strong>"+infocliente[4]+"</p>";
        $("#modal-default .modal-body").html(html);
    });

    $(".btn-view").on("click", function(){
        var id = $(this).val();
        $.ajax({
            url: base_url + "mantenimiento/categorias/view/" + id,
            type:"POST",
            success:function(resp){
                $("#modal-default .modal-body").html(resp);
            }
        });
    });

    //$('.sidebar-menu').tree();
    //funcion para el select de comprobantes
    //****************servicios/**********************************************************************

    //****************Ventas/*************
    $("#comprobantes").on("change", function(){
         des_imp = 0;
         des_lam = 0;
         des_foto = 0;
         des_ani = 0;
         des_ref = 0;

         varx = 0;
         vary = 0;
        option = $(this).val();

        if (option != ""){
            infoComprobante = option.split("*");
            $("#idcomprobante").val(infoComprobante[0]);
            compr = infoComprobante[0];
            $("#iva").val(infoComprobante[2]);
            $("#serie").val(infoComprobante[3]);
            $("#numero").val(generarNumero(infoComprobante[1]));
        }
        else{
            $("#idcomprobante").val(null);
            $("#iva").val(null);
            $("#serie").val(null);
            $("#numero").val(null);
        }
        sumar();
    });


    $(document).on("click", ".btn-check", function(){
        cliente = $(this).val();
        infoCliente = cliente.split("*");
        $("#idcliente").val(infoCliente[0]);
        $("#cliente").val(infoCliente[1]);
        $("#modal-default").modal("hide");
    });

    $("#producto").autocomplete({
        source: function(request, response){
            $.ajax({
                url: base_url+"movimientos/ventas/getProductos",
                type: "POST",
                dataType: "json",
                data:{ valor: request.term},
                success: function(data){
                    response(data);
                }
            });
        }, //indica la informacion a mostrar al momento de comenzar a llenar el campo
        minLength:2, //caracteres que activan el autocomplete
        select: function(event, ui){
            data = ui.item.id + "*" + ui.item.codigo + "*" + ui.item.label + "*" + ui.item.precio + "*" + ui.item.stock+ "*" + ui.item.precio2+ "*" + ui.item.precio3;
            $("#btn-agregar").val(data);
        },
    });

    $("#cliente2").autocomplete({
        source: function(request, response){
            $.ajax({
                url: base_url+"movimientos/ventas/getclientes",
                type: "POST",
                dataType: "json",
                data:{ valor: request.term},
                success: function(data){
                    response(data);
                }
            });
        }, //indica la informacion a mostrar al momento de comenzar a llenar el campo
        minLength:2, //caracteres que activan el autocomplete
        select: function(event, ui){
          //  data = ui.item.id + "*" + ui.item.nombres;
        // $("#btn-agregar").val(data);
        },
    });

    $("#btn-agregar").on("click", function(){
        contador =contador + 1;
        f=0;
        if (compr == 1){
            sigue = verificarContadorConsFinal(contador);
            if (sigue == 1){
                data = $(this).val();
                tablaDeProductos(data);
            } else {
                 alert("No puede ingresar mas de 12 productos!");
            }
        } else if(compr == 5){
            sigue = verificarContadorCredFiscal(contador);
            //aqui hacer el arreglo de los precios de productos
            if (sigue == 1){
                data = $(this).val();
                tablaDeProductos(data);
            } else {
                 alert("No puede ingresar mas de 8 productos!");
            }
        } else {
            data = $(this).val();
            tablaDeProductos(data);
        }

    });

    function verificarContadorConsFinal(contador){
        var sigue2;
        if (contador >= 13){
            sigue2 = 0;
        } else {
            sigue2 = 1;
        }
        return sigue2;
    }

    function verificarContadorCredFiscal(contador){
        var sigue2;
        if (contador >= 9){
            sigue2 = 0;
        } else {
            sigue2 = 1;
        }
        return sigue2;
    }

    function tablaDeProductos(data){
        if (data != " "){
                infoProducto = data.split("*");
                html = "<tr>";
                html += "<td><input type='hidden' name='idProductos[]' value='"+infoProducto[0]+"'>"+infoProducto[1]+"</td>"; //
                html += "<td>"+infoProducto[2]+"</td>";
                html += "<td><input type='hidden' name='precios[]' value='"+infoProducto[3]+"'><input type='hidden' name='precios1[]' value='"+infoProducto[3]+"'><input type='hidden' name='precios2[]' value='"+infoProducto[5]+"'><input type='hidden' name='precios3[]' value='"+infoProducto[6]+"'><p>"+infoProducto[3]+"</p></td>"; //precios
                html += "<td>"+infoProducto[4]+"</td>";
                html += "<td><input type='number' placeholder='Ingrese numero entero' name='cantidades[]' values='1' class='cantidades'></td>"; //cantidades
                html += "<td><input type='hidden' name='importes[]' value='"+infoProducto[3]+"'><p>"+infoProducto[3]+"</p></td>"; //immportes
                html += "<td><button type='button' class='btn btn-danger btn-remove-producto'><span class='fa fa-times' style='color: #fff'></span></button></td>";
                html += "</tr>";
                $("#tbventas tbody").append(html);
                sumar();

        } else {
            alert("seleccione un producto");
        }
    }
    
     $(document).on("click", ".btn-remove-producto", function(){
        $(this).closest("tr").remove();
        contador = contador - 1;
        f=0;
        sumar();
    });

    $(document).on("keyup", "#tbventas input.cantidades", function(){
        cantidad = $(this).val();
        precio1=$(this).closest("tr").find("td:eq(2)").children("input:eq(1)").val();
        precio2=$(this).closest("tr").find("td:eq(2)").children("input:eq(2)").val();
        precio3=$(this).closest("tr").find("td:eq(2)").children("input:eq(3)").val();
        
        if (cantidad>=25){
            $(this).closest("tr").find("td:eq(2)").children("p").text(precio3);
            $(this).closest("tr").find("td:eq(2)").children("input:eq(0)").val(precio3);
            importe=magiaDeLaSuma(precio3, cantidad);
        } else if(cantidad>=12){
            $(this).closest("tr").find("td:eq(2)").children("p").text(precio2);
            $(this).closest("tr").find("td:eq(2)").children("input:eq(0)").val(precio2);
            importe=magiaDeLaSuma(precio2, cantidad);
        } else {
            $(this).closest("tr").find("td:eq(2)").children("p").text(precio1);
            $(this).closest("tr").find("td:eq(2)").children("input:eq(0)").val(precio1);
            importe=magiaDeLaSuma(precio1, cantidad);
        }
        totalImporte = parseFloat(importe).toFixed(2);
        $(this).closest("tr").find("td:eq(5)").children("p").text(totalImporte);
        $(this).closest("tr").find("td:eq(5)").children("input").val(totalImporte);
        sumar();
    });

    function magiaDeLaSuma(precio, cantidad){
        if (compr == 5){
            var precioSinIva;
            precioSinIva = (precio - (precio * 0.13));
            importe =  precioSinIva * cantidad;
            if (f == 0){
                precioSI = parseFloat(precioSinIva).toFixed(2);
                $(this).closest("tr").find("td:eq(2)").children("p").text(precioSI);
                $(this).closest("tr").find("td:eq(2)").children("input").val(precioSI);
                f += 1;
            }
        } else {
            importe = cantidad * precio;
            f=0;
        }
        return importe;
    }

    $(document).on("click", ".btn-view-venta", function(){
        var producto = $(this).val();
        var infoproducto = producto.split("*");
        tipo_comprobante_id = infoproducto[1];
        valor_id = infoproducto[0];
        $.ajax({
            url: base_url+"movimientos/ventas/view",
            type:"POST",
            dataType: "html",
            data:{id:valor_id,
            tipo_comprobante:tipo_comprobante_id},
            success: function(data){
                $("#modal-default .modal-body").html(data);
            }
        });
    });

     $(document).on("click", ".btn-print", function(){
        $("#modal-default .modal-body").print();
    });

     //********Reabastecimientos
      $("#producto-reabastecer").autocomplete({
        source: function(request, response){
            $.ajax({
                url: base_url+"movimientos/reabastecer/getProductos",
                type: "POST",
                dataType: "json",
                data:{ valor: request.term},
                success: function(data){
                    response(data);
                }
            });
        }, //indica la informacion a mostrar al momento de comenzar a llenar el campo
        minLength:2, //caracteres que activan el autocomplete
        select: function(event, ui){
            data = ui.item.id + "*" + ui.item.codigo + "*" + ui.item.label + "*" + ui.item.precio_entrada + "*" + ui.item.stock;
            $("#btn-agregar-abast").val(data);
        },
    });

      $(document).on("keyup", "#tbreabastecer input.cantidades", function(){
        cantidad = $(this).val();
        precio = $(this).closest("tr").find("td:eq(2)").text();
        importe = cantidad * precio;
        totalImporte = parseFloat(importe).toFixed(2);
        $(this).closest("tr").find("td:eq(5)").children("p").text(totalImporte);
        $(this).closest("tr").find("td:eq(5)").children("input").val(totalImporte);
        sumarReabastecimiento();
    });

     $("#btn-agregar-abast").on("click", function(){
        data = $(this).val();
        if (data != " "){
            infoProducto = data.split("*");
            html = "<tr>";
            html += "<td><input type='hidden' name='idProductos[]' value='"+infoProducto[0]+"'>"+infoProducto[1]+"</td>";//id y codigo
            html += "<td>"+infoProducto[2]+"</td>"; //nombre
            html += "<td><input type='hidden' name='precios[]' value='"+infoProducto[3]+"'>"+infoProducto[3]+"</td>"; //precios
            html += "<td>"+infoProducto[4]+"</td>";//stock
            html += "<td><input  type='number' placeholder='Ingrese numero entero' name='cantidades[]' values='1' class='cantidades'></td>"; //cantidades
            html += "<td><input type='hidden' name='importes[]' value='"+infoProducto[3]+"'><p>"+infoProducto[3]+"</p></td>"; //immportes
            html += "<td><button type='button' class='btn btn-danger btn-remove-producto'><span class='fa fa-times' style='color: #fff'></span></button></td>";
            html += "</tr>";
            $("#tbreabastecer tbody").append(html);
        } else {
            alert("seleccione un producto");
        }
    });

      $(document).on("click", ".btn-view-reabastecimiento", function(){
        valor_id = $(this).val();
        $.ajax({
            url: base_url+"movimientos/reabastecer/view",
            type:"POST",
            dataType: "html",
            data:{id:valor_id},
            success: function(data){
                $("#modal-default .modal-body").html(data);
            }
        });
    });

    $("#proveedor-reabastecer").autocomplete({
        source: function(request, response){
            $.ajax({
                url: base_url+"movimientos/reabastecer/getProveedor",
                type: "POST",
                dataType: "json",
                data:{ valorProveedor: request.term},
                success: function(data){
                    response(data);
                }
            });
        }, //indica la informacion a mostrar al momento de comenzar a llenar el campo
        minLength:2, //caracteres que activan el autocomplete
        select: function(event, ui){
            data = ui.item.id_proveedor + "*" + ui.item.label;
            infoProveedor = data.split("*");
            $("#idproveedor").val(infoProveedor[0]);
        },
    });

    //roles de usuarios
    $("#roles").on("change", function(){
        option = $(this).val();

        if (option != ""){
            infoRol = option.split("*");
            $("#idRol").val(infoRol[0]);
        }
        else{
            $("#idRol").val(null);
        }
    });

    $(".btn-view-usuario").on("click", function(){
        var usuario = $(this).val();
        //alert(cliente);
        var infousuario = usuario.split("*");
        html = "<p><strong>ID: </strong>"+infousuario[0]+"</p>"
        html += "<p><strong>Nombres: </strong>"+infousuario[1]+"</p>"
        html += "<p><strong>Apellidos: </strong>"+infousuario[2]+"</p>"
        html += "<p><strong>DUI: </strong>"+infousuario[3]+"</p>"
        html += "<p><strong>NIT: </strong>"+infousuario[4]+"</p>"
        html += "<p><strong>Telefono: </strong>"+infousuario[5]+"</p>";
        html += "<p><strong>Email: </strong>"+infousuario[6]+"</p>";
        html += "<p><strong>Nmbre de Usuario: </strong>"+infousuario[7]+"</p>";
        html += "<p><strong>Rol: </strong>"+infousuario[8]+"</p>";
        $("#modal-default .modal-body").html(html);
    });

});

function generarNumero(numero){
    if (numero >= 99999 && numero < 999999){
        return Number(numero)+1;
    }
    if (numero >= 9999 && numero < 99999){
        return "0" + (Number(numero)+1);
    }
    if (numero >= 999 && numero < 9999){
        return "00" + (Number(numero)+1);
    }
    if (numero >= 99 && numero < 999){
        return "000" + (Number(numero)+1);
    }
    if (numero >= 9 && numero < 99){
        return "0000" + (Number(numero)+1);
    }
    if (numero < 9){
        return "00000" + (Number(numero)+1);
    }
}

function sumar(){

    subtotal = 0;
    $("#tbventas tbody tr").each(function(){
        subtotal = subtotal + Number($(this).find("td:eq(5)").text());
    });

    $("#subtotal").val(parseFloat(subtotal.toFixed(2)));
    porcentaje = $("#iva").val();
    iva = subtotal * (porcentaje/100);
    $("#iva2").val(iva.toFixed(2));
    //descuento = parseInt($("#descuento").val()));
    total = subtotal + iva ;
    $("#total").val(total.toFixed(2));
}

function sumarReabastecimiento(){
    total = 0;
    $("#tbreabastecer tbody tr").each(function(){
        total = total + Number($(this).find("td:eq(5)").text());
    });
    $("#total-reabastecer").val(total.toFixed(2));
}
</script>
</body>
</html>
