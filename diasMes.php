<!-- Sergio Matamoros Delgado -->
<html>
    <head>
        <title>Pruebas array</title>
        <link href="estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
            //Me devuelve el numero de dias que tiene un mes.
            function decirDias() {
                /*$mesDias = array(
                    31,
                    28,
                    31,//3
                    30,//4
                    31,//5
                    30,//6
                    31,//7
                    31,//8
                    30,
                    31,
                    30,
                    31
                );*/

                $meses['Enero'] = 31;
                $meses['Febrero'][0] = 28;
                $meses['Febrero'][1] = 29;
                $meses['Marzo'] = 31;
                $meses['Abril'] = 30;
                $meses['Mayo'] = 31;
                $meses['Junio'] = 30;
                $meses['Julio'] = 31;
                $meses['Agosto'] = 31;
                $meses['Septiembre'] = 30;
                $meses['Octubre'] = 31;
                $meses['Noviembre'] = 30;
                $meses['Diciembre'] = 31;
                    
                return $meses;
            }

            //Función esBisiesto, a partir de un año te dice si es o no es bisiesto, si no se le pasa ninguno, coge la fecha actual
            function esBisiesto($anio=null) {

                //Ternaria, si la llamada a función no tiene param, la fecha la coge automaticamente del sistema
                //si tiene parametros pone la pasada.
                ($anio == null) ? $anio = date("Y") : $anio;

                //Si el año es bisiesto, febrero tiene 29 días, si no lo es, tiene 28.
                if($anio % 4 == 0 && $anio %100 != 0 || ($anio %100 == 0 && $anio % 400 == 0)) 
                    return true; 
                return false;
            }

            //Devuelve el nombre del mes a partir del número del mes.
            function devolverMes($numMes) {
                //Defino arrays con valores.
                $mes = array(
                    1 => "Enero",
                    2 => "Febrero",
                    3 => "Marzo",
                    4 => "Abril",
                    5 => "Mayo",
                    6 => "Junio",
                    7 => "Julio",
                    8 => "Agosto",
                    9 => "Septiembre",
                    10 => "Octubre",
                    11 => "Noviembre",
                    12 => "Diciembre"
                );

                return $mes[$numMes];
            }

            //Mejora con tablas 2
            echo("<h1>Año 2021</h1>");
            echo "<table class='test'>";
            echo "<tr>";

            //Ahora esto ya se podría cambiar y usar la función decirDias(), pero bueno, de momento ta bien
            for($i=1;$i<=12;$i++){
                echo '<th class="filEspacio">'.devolverMes($i).'</th>';
            }
            echo '</tr>';
            echo '<tr>';

            foreach(decirDias() as $mes => $dia) {

                if($mes=="Febrero" && esBisiesto()){
                    echo '<td>28</td>';
                } else if($mes=="Febrero" && !esBisiesto())
                    echo '<td>29</td>';

                /*if($mes == "Febrero" && $dia[0] == 28)
                    echo '<td>28</td>';
                else if($mes == "Febrero" && $dia[1] == 29)
                    echo '<td>29</td>';*/
               // else
                if($mes != "Febrero")
                    echo('<td>'.$dia.'</td>');
            }
            echo '</tr>';
            echo '</table>';
            echo "<h2>Año actual: ". date("Y")."</h2>";
            echo 'Día actual: '. date("D M Y");
            echo '<br>El mes numero 2 es el mes: '. devolverMes(2);

        ?>
    </body>
</html>