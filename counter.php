<?php
    session_start();
    if(!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 0;
    }
    if(isset($_POST['button'])) {
        $_SESSION['counter'] = $_SESSION['counter'] + 1;
    }   

?>

<!Doctype HTML>
<html>
    <head>
        <title>Contador</title>
    </head>

    <body>
        <h2>Contador de sesión </h2>

        <label for="contador">Presiona el botón para incrementar el contador</label>
        
        <form method="POST">
            <input type="hidden" name="counter" value="<?php echo $_SESSION['counter']; ?>" />
            <input type="submit" name="button" value="Contador" />
            <br/><?php echo $_SESSION['counter']; ?>
        </form>
        
        <p>
            Si deseas terminar tu sesión presiona el siguiente botón
        </p>
        <form action="clear.php" method="POST">
            <input type="submit" value="clear" />
        </form>


    </body>
</html>