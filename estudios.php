<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudios</title>
</head>
<body>
    <form action="#" method= "get" enctype="multipart/form-data">
        <label for="nombre">Ingrese el nombre de la persona: </label>
        <input id="nombre" type="text" name="nombre">
        <br><br>
        <label for="est">Ingrese qué tipo de estudios tiene la persona: </label>
        <br><br>
        <input type="radio" id="nest" name="est" value="no tiene estudios">
        <label for="nest">No tiene estudios</label>
        <input type="radio" id="pest" name="est" value="tiene estudios primarios">
        <label for="pest">Estudios primarios</label>
        <input type="radio" id="sest" name="est" value="tiene estudios secundarios">
        <label for="sest">Estudios secundarios</label>
        <br><br>
        <input class="ingresar" type="submit" name="ingresar" value="Ingresar">
        <br><br>
    </form>
    <?php
        if(isset($_GET['ingresar'])){
            $nomb=$_GET['nombre'];
            $est=$_GET['est'];
            echo $nomb;
            echo "\n";
            echo $est;
        }
    ?>
</body>
</html>