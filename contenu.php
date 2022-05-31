<?php
$image = new Image();
$images = $image->getImages(IMAGE_DIR_PATH);

 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title><?php echo WEB_TITLE ?></title>
   </head>
   <body>

   </body>

   <h1> <?php echo WEB_TITLE ?> </h1>
   <ul>
     <li> <?php echo '<a href= "'. WEB_DIR_URL .'admin.php" > admin  </a>' ?> </li>
     <li> <a href="./admin/upload.php"> upload </a> </li>
   </ul>
   <ul>
     <?php foreach ($images as $image) : ?>
     <li>
       <img src=" <?php echo IMAGE_DIR_URL. $image ['filename'] ?>" />
     <!-- cette modification daficher les modification  faite par un administrateur
     la POO rend posible cette modife
     Finalisation : ajout des informations sur la page  de contenu front
     page 11 fig 14
      -->
       <p><?php echo $image['title'] ?> </p>
       <p> <?php echo $image['description'] ?></p>
     </li>

    <?php endforeach ?>
    </ul>

 </html>
