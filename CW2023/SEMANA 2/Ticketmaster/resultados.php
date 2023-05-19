<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./logo.png" type="image/x-png">
    <title>Compra</title>
</head>
<body>
<?php
    $name= (isset($_POST['nombre'])&& $_POST["nombre"] != "")? $_POST['nombre']: false;
    $last= (isset($_POST['apelli'])&& $_POST["apelli"] != "")? $_POST['apelli']: false;
    $date= (isset($_POST['fecha'])&& $_POST["fecha"] != "")? $_POST['fecha']: false;
    $artist= (isset($_POST['artista'])&& $_POST["artista"] != "")? $_POST['artista']: false;
    $zon= (isset($_POST['zona'])&& $_POST["zona"] != "")? $_POST['zona']: false;
    $cboletos= (isset($_POST['unidad'])&& $_POST["unidad"] != "")? $_POST['unidad']: false;
    $lugar= (isset($_POST['stage'])&& $_POST["stage"] != "")? $_POST['stage']: false;
    $extrass= (isset($_POST['extra'])&& $_POST["extra"] != "")? $_POST['extra']: false;
    $cadena='Boletos para';
    $rest='Fecha:';
    for($i=1; $i <= $cboletos; $i++)
    {
        echo "<table border='2' align='center' style='border-collapse:inherit;' cellpadding='20px'>";
            echo"<thead>";
                echo "<tr>";
                    echo "<td colspan='4'><center>",$cadena. "  " , $artist ,"<center></td>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                echo "<tr>";
                    echo "<td>", $name ,"</td>";
                    echo "<td>", $last ,"</td>";
                    echo "<td>",$rest. " " , $date ,"</td>";
                "<td>";
                    switch ($artist) {
                        case 'Luis Miguel':
                            echo '<td><img src="luismi.jpg" alt="luism" width="150" height="180"></td>';
                            break;
                        case 'Danna Paola':
                            echo '<td><img src="danna.jpg" alt="dann" width="150" height="180"></td>';
                            break;
                        case 'Jackson Wang':
                            echo '<td><img src="jackson.jpg" alt="bbs" width="190" height="160"></td>';
                            break;
                        case 'Blackpink':
                            echo '<td><img src="pinks.jpg" alt="blackp" width="190" height="150"></td>';
                            break;
                        case 'Morat':
                            echo '<td><img src="morat.jpg" alt="mor" width="170" height="180"></td>';
                            break;
                        case 'Chayanne':
                            echo '<td><img src="chay.jpg" alt="chayy" width="170" height="180"></td>';
                            break;
                    }
                "</td>";
                echo "</tr>";
                echo "<tr>";
                        echo "<td>", $lugar ,"</td>";
                        echo "<td>", $zon ,"</td>";
                        echo "<td>", $extrass ,"</td>";
                echo "</tr>";
                "<td>";
                    switch ($lugar) {
                        case 'Auditorio Nacional':
                            echo '<td><img src="audiNacional.jpg" alt="nacional" width="150" height="180"></td>';
                            break;
                        case 'Foro Sol':
                            echo '<td><img src="forsol.jpg" alt="forosol" width="150" height="180"></td>';
                            break;
                        case 'Palacio de los deportes':
                            echo '<td><img src="depoertes.jpg" alt="palacio" width="190" height="160"></td>';
                            break;
                        case 'Arena Ciudad de México':
                            echo '<td><img src="arena.jpg" alt="arenac" width="190" height="150"></td>';
                            break;
                    }
                "</td>";
            echo "</tbody>";
        echo "</table>";   
        echo '<br> <br> <br>';
    } 

?>

</body>
</html>
