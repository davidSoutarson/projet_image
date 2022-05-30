<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>teste upload</title>
  </head>
  <body>

    <form id="uploadForm" action="" method="post" enctype= "multipart/form-data">
      <p>Ajoutez des images</p>
      <input type="file" name="upload[]" multiple="multiple">
      <input id="uploadFormSubmit" name="uploadFormSubmit" type="submit">
    </form>

  </body>
</html>

<?php
var_dump($_FILES);
echo "<br>------------------------------Le nom original du fichier-----------------------------------<br>";
var_dump($_FILES['upload']['name']);
echo "<br>------------------------------Le type du fichier-----------------------------------<br>";
var_dump($_FILES['upload']['type']);
echo "<br>------------------------------La taille du fichier-----------------------------------<br>";
var_dump($_FILES['upload']['size']);
echo "<br>------------------------------Le nom temporaire du fichier qui sera chargé sur la machine serveur-------<br>";
var_dump($_FILES['upload']['tmp_name']);
echo "<br>------------------------------Le code d'erreur associé au téléchargement de fichier--------------<br>";
var_dump($_FILES['upload']['error']);
// echo "<br>------------------------------Le chemin entier tel que soumit par le navigateur.--------------<br>";
// var_dump($_FILES['upload']['full_path']);
echo "<br>-------------------------------------------<br>";

$uploaddir = 'E:/wamp64/www/projet_image/test/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Le fichier est valide, et a été téléchargé
           avec succès. Voici plus d'informations :\n";
} else {
    echo "Attaque potentielle par téléchargement de fichiers.
          Voici plus d'informations :\n";
}

echo 'Voici quelques informations de débogage :';
print_r($_FILES);

echo '</pre>';

 ?>
