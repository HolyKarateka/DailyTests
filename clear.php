<html>
    <body>
    <?php
    session_start();
    session_destroy();
    echo "<H1>Tu sesión ha terminado</H1>";
    ?>
    <br>
    <br>
    <a href="index.php" name= "close">Haz click acá para ir a la página principal</a>

    </body>

</html>
