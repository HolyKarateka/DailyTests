<?php
if (isset($_FILES["pic"])) {
  move_uploaded_file($_FILES["pic"]["tmp_name"], __DIR__ . '/imgs/' . $_FILES["pic"]["name"]);
}

?>
<?php
$dirname = "./imgs/";
$images = glob($dirname."*.*");

foreach($images as $image) {
    echo '<img src="'.$image.'" width="200px" height="200px"/><br />';
}
?>
<!DOCTYPE html>

<html>

<head>
  <title>UploadFiles</title>
</head>

<body>
  <h1>Subir archivos en php</h1>
  
  <form action="images.php" method="post" enctype="multipart/form-data">
    <input type="file" name="pic">
    <button type="submit">Subir</button>  
  </form>
</body>

</html>