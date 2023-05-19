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
        for($a=1; $a <=10; $a++)
        {
            echo $a." ";
        }

        $a=1;
        while($a <= 10)
        {
            echo "<br><br>".$a++." ";
        }

        do 
        {
            echo $a;
        }
        while($a < 10);

        echo "<br><br>";
        $instructores= array("Danda", "Gabo", "Majo", "Falcon", "Fersa", "Balsa", "Ara");
        foreach($instructores as $valor)
        {
            echo $valor." ";
        }

        if($a > 10)
        {

        }
        
    ?>
    <form action="./actividad.php" method="post">
        <label for="valor">Elige un valor entre 1 y 3:</label>
        <input type="text" id="valor" name="valor">
        <br><br>
        <label for="palabras">Elige una palabra:</label>
        <select name="palabras">
                <option value="sus">sus</option>
                <option value="papu">papu</option>
                <option value="krunker">krunker</option>
            </select>
        <button type="submit">Enviar</button>
        <br><br>
    </form>
</body>
</html>