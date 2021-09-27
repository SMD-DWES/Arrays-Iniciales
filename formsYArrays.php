<!-- Sergio Matamoros Delgado -->
<html>
    <head>
        <title>Pruebas array</title>
        <link href="estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <form action="#" method="POST">
            <!-- Campos de nombre y email. -->
            <p>
                Año a empezar:
                <input name="empezarAnio" type="number">
            </p>
            <p>
                Año numero 2:
                <input name="acabarAnio" type="number">
            </p>
           
            <p>
                <input class="send" name="enviar[]" type="submit" value="Enviar"/>
            </p>
            <input class="send" type="reset" value="Reiniciar datos"/>
        </form>

        <?php

            //Declaración de variables
            $anioInicio = null;
            $anioFin = null;

            if(isset($_POST["empezarAnio"])) $anioInicio = $_POST["empezarAnio"];
            if(isset($_POST["acabarAnio"])) $anioFin = $_POST["acabarAnio"];

            if(empty($_POST["empezarAnio"])) { echo 'Error, rellena año a empezar'; return;}
            if(empty($_POST["acabarAnio"])) { echo 'Error, rellena año a finalizar'; return;}

            //Me devuelve el numero de dias que tiene un mes.
            function decirDias() {
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

                echo '<script>console.log('.$anio.')</script>'; //DEBUG

                //Si el año es bisiesto, febrero tiene 29 días, si no lo es, tiene 28.
                if($anio % 4 == 0 && $anio %100 != 0 || ($anio %100 == 0 && $anio % 400 == 0)) 
                    return false;
                return true;
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

            //Crea una tabla con todos los días del año especificado.
            function tablasBisiesto($inicio=2021,$anio) {
                for($i=$inicio;$i<=$anio;$i++) {
                    echo "<table>";
                    echo '<caption> Año: '. $i.'</caption>';
                    echo "<tr>";
        
                    //Ahora esto ya se podría cambiar y usar la función decirDias(), pero bueno, de momento ta bien
                    foreach(decirDias() as $mes => $dia) {
                        echo '<th class="filEspacio">'.$mes.'</th>';
                    }
                    echo '</tr>';
                    echo '<tr>';
        
                    foreach(decirDias() as $mes => $dia) {
        
                        if($mes=="Febrero" && esBisiesto($i)){
                            echo '<td>28</td>';
                        } else if($mes=="Febrero" && !esBisiesto($i))
                            echo '<td>29</td>';
                        if($mes != "Febrero")
                            echo('<td>'.$dia.'</td>');
                    }
                }
            }
            

            //Con un formulario, se podría poner hasta que año quieres mostrar
            tablasBisiesto($anioInicio,$anioFin);
            
            echo '</tr>';
            echo '</table>';
            echo "<h2>Año actual: ". date("Y")."</h2>";
            echo 'Día actual: '. date("D M Y");
            echo '<br>El mes numero 2 es el mes: '. devolverMes(2);

        ?>
    </body>
</html>