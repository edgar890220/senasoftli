<?php
    $conexion=mysqli_connect('localhost', 'root', '', 'Retosena');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../resources/css/style.css">
    <title>Cards Game for Beginners | Javascript - Truzz Blogg</title>
</head>
<body>
    <div class="container">
<<<<<<< HEAD
        <table width=80% height=30% border=1  bgcolor="#EEEEEE" bordercolor="black" cellspacing=0 >
        <tr><td><center><button onclick="displayElemento()">BARAJAR</button></center></tr></td>
        </table>
        <br><br><br>
        <div class="baraja">
        <table width=10% height=10% border=1  bgcolor="#EEEEEE"  cellspacing=0 >
        <tr><td><center><p id="elemento"></p></td></tr>
        <tr><td><center><p id="numero"></p></td></tr>
        <tr><td><center><p id="imagen"></p></td></tr>
    </div>
</div>
<table>
    <tr>
        <td>nombre</td>
        <td>correo</td>
    </tr>

    <?php
    $sql="SELECT * from jugadors";
    $result=mysqli_query($conexion,$sql);

    @while ($mostrar=mysqli_fech_array($result)){
   ?>

    <tr>
        <td><? php echo $mostrar ['nombre'] ?></td>
        <td><? php echo $mostrar ['correo'] ?></td>
    </tr>

    <?php
        }
    @endwhile
    ?>


=======
        <button id="btn" class="btn" onclick="displayCard()">Show Cards!</button>
        <p id="showing"></p>
    </div>
>>>>>>> a7b2d151106a10ddc7d03431ed40dd4d212a0e3e
    <script src="../resources/js/script.js"></script>
</body>
</html>
