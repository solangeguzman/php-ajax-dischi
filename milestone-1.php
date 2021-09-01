<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Document</title>
</head>
<body>
  <?php
     #prima parte milestone
  ?>

<header>
<div class="container-fluid">
    <img src="https://1000marcas.net/wp-content/uploads/2019/12/Spotify-logotipo.jpg" width="100" height="40" alt="">
</div>
</header>

<main>
  <!-- <div class="container-fluid"> -->
    <!-- <div class="row col-2"> -->
     <?php
         require_once __DIR__ . "../database/database.php";
         foreach($database as $item){ ?>
         <span class="contorno-img">
              <img  src="<?php echo "{$item['poster']}"?>"  width="160px" alt="" >
              <div class="title"><?php echo "{$item['title']}";?></div>
              <div class="author"><?php echo "{$item['author']}";?></div>
              <div class="year"><?php echo "{$item['year']}"?></div>
          </span>   
        <?php    
         }
        ?>
      <!-- </div>  
  </div>    -->

</main>
    
    

</body>
</html>