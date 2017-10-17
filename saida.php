<!doctype html>

<html>
    <head>
        <title>Exercicio Tabuada - Resusltado</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="estilo.css" type="text/css">
        <?php
                $mult1 = $_POST['nDe1'];
                $mult2 = $_POST["nAte1"];
                $numer1 = $_POST["nDe2"];
                $numer2 = $_POST["nAte2"];

        ?>

    </head>
<body>

    <h1>Tabela de tabuadas</h1>
        <?php

            for($a = $mult1;$a <= $mult2 ;$a++ ){

                echo '<table class = "tabuada">';
                echo '<caption class = "titu">Tabuada do '.$a.'</caption>';
                    echo '<tr >
                            <th>Fórmula</th><th>Resultado</th>
                        </tr>';
                    for($b = $numer1;$b <= $numer2; $b++)
                    {
                       echo '<tr class = "col1">
                            <td class = "col1">'.$a.'  X  '.$b.'</td>
                            <td>'.$a * $b.'</td>
                        </tr>';
                    }
                echo '</table>';
                
            }
                
        ?>
        
</body>

</html>