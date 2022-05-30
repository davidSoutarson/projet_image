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

 ?>
