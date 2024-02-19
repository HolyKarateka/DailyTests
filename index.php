<?php
    session_start();
    if ( !isset($_SESSION["user"], $_SESSION["pass"]) )
    {
        header('Location: http://localhost/login.php');        
    }
    
    if (isset($_FILES["pic"])) {
        move_uploaded_file($_FILES["pic"]["tmp_name"], __DIR__ . '/imgs/' . $_FILES["pic"]["name"]);
      }

    if (isset($_POST["logout"])) {
        unset($_SESSION["user"]);
        unset($_SESSION["pass"]);
        session_unset();
        session_destroy();
        header('Location: http://localhost/login.php');        
    }

?>

<!Doctype HTML>
<html>
    <head>
        <title>Dashboard</title>
    </head>

    <body>
        <h1>Dashboard a la aplicación </h1>
        <?php
            echo"<h2> Bienvenido " . $_SESSION["user"] . "</h2>";
            $dirname = "./imgs/";
            $images = glob($dirname."*.*");

            foreach($images as $image) {
                echo '<img src="'.$image.'" width="200px" height="200px"/><br />';
            }
        ?>
        
        <h4>Subir imágenes</h4>
        
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="pic">
            <button type="submit">Subir</button>  
        </form>
        
        <p>
            Si deseas terminar tu sesión presiona el siguiente botón
        </p>
        <form action="" method="POST">
            <input type="submit" value="Cerrar Sesión" name="logout"/>
        </form>


    </body>
</html>