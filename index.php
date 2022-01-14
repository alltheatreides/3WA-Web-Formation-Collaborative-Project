<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="The best high tech products">

   <title>High Tech</title>
   
   <!-- CSS START -->
   <link rel="stylesheet" href="./assets/css/normalize.css">
   <link rel="stylesheet" href="./assets/css/template.css">
   <!-- Fichiers css spécifiques à la suite ici -->
   <link rel="stylesheet" href="./assets/css/header.css">
   <link rel="stylesheet" href="./assets/css/nav.css">
   <link rel="stylesheet" href="./assets/css/presentation.css">
   <link rel="stylesheet" href="./assets/css/description.css">
   <link rel="stylesheet" href="./assets/css/footer.css">
   <link rel="stylesheet" href="./assets/css/modals.css">
   <!-- CSS END -->

</head>
<body>
   <h1>Hello world</h1>
   <!-- Attention la nav doit être inclue dans le header !  -->
   <?php include './inc/header.php'?>

   <main>

      <?php include './inc/presentation.php'?>
      
      <?php include './inc/description.php'?>  

   </main>
   
   <?php include './inc/modals.php'?>
   
   <!-- JS START -->
   <script src="./js/script.js"></script>
   <script src="./js/modals.js"></script>
   <!-- JS END -->

<?php include './inc/footer.php'?>      