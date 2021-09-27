<?php
    function array1() {

        //Arrays indexados por indice en string
        return array(
            "1" => "ola",
            "2" => "ola2"
        );
    }

    //Arrays sin indice
    function array2() {
        return array("ola","mundo");
    }

    //Indice no en todos los elementos
    function array3() {
        return array(
            "ola",
            "mundo",
            7 => "test"
        );
    }

    //Array indexado con multiples values
    function array4() {
        return array(
            "1" => "ola",
            "2" => "mundo",
            "3" => array(
                "multi" => "jelou",
                "multi2" => "world"
            )
        );
    }

    //Array indexado directamente
    function array5() {
        $mes["1"] = "ola";
        $mes["2"] = "adios";
        $mes["3"][0] = "ello";
        $mes["3"][1] = "world";
        return $mes;
    }

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Repaso examen</title>
    </head>
    <body>
        <h1>Arrays</h1>
        <?php

            foreach (array1() as $key => $value) {
                echo "Index: ".$key . " ". $value . "<br>";
            }

            foreach (array2() as $key => $value) {
                echo "Index: ".$key . " ". $value . "<br>";
            }

            foreach (array3() as $key => $value) {
                echo "Index: ".$key . " ". $value . "<br>";
            }

            echo "<h3>Array4: </h3>";

            foreach (array4() as $key => $value) {
                
                if($key == "3" && $value["multi"] == "jelou")
                    echo $value["multi"] . "<br>";
                if($key == "3" && $value["multi2"] == "world")
                    echo $value["multi2"] . "<br>";

                if($key != "3" )
                    echo $value . "<br>";
            }

            echo "<br> Array5<br>";

            foreach (array5() as $key => $value) {

                if($key == "3" && $value[0] == "ello")
                    echo "value ";
                if($key == "3" && $value[1] == "world")
                    echo "value ";

                
                if($key != "3")
                    echo "Index: ". " ". $value . "<br>";

                echo "<br>";
            }
            print_r(array4());

        ?>
    </body>
</html>