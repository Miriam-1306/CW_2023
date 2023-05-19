<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre = "Miriam"; //variable string
        $edad = 18; //variable int
        $estatura = 1.59; //variable double
        $saludo = "Hola, bienvenido a mi página";// cadena 

        echo $saludo;
        echo $nombre;
        echo "<br>La edad es: ";
        echo $edad;
        echo "<br>La estatura es: ";
        echo "<table border='2';>
        <thead>
            <tr>
                <th>HOla $nombre</th>
            </tr>
        </thead>
        <tboby>
            <tr>
                <td>buen día</td>
                <td>Estatura $estatura</td>
                <td>Edad $edad</td>
            </tr>
        </tbody>
        </table>"
        echo $estatura;
    ?>
</body>
</html>