<?php
$fecha = date('Y-m-j H:i:s'); 
$nuevafecha = strtotime ( '+10 hour' , strtotime ( $fecha ) ) ;
$nuevafecha = date ( 'j/m/Y  H:i:s' , $nuevafecha );
            //echo $nuevafecha." hrs<br>";
            $dia = date("j"); 
            $mes = date("n"); 
            $anio = date("Y"); 
            $m="";
            switch ($mes) {
                case 1:$m="Enero"; break;
                case 2:$m="Febrero"; break;
                case 3:$m="Marzo"; break;
                case 4:$m="Abril"; break;
                case 5:$m="Mayo"; break;
                case 6:$m="Junio"; break;
                case 7:$m="Julio"; break;
                case 8:$m="Agosto"; break;
                case 9:$m="Septiembre"; break;
                case 10:$m="Octubre"; break;
                case 11:$m="Noviembre"; break;
                case 12:$m="Diciembre"; break;
            }
            echo $dia." de ".$m." de ".$anio;
            ?>