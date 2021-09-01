<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <title>Document</title>
</head>
<body>
  <?php
     #seconda milestone
  ?>
<div id="app">
<header>
<div class="container-fluid">
    <img src="https://1000marcas.net/wp-content/uploads/2019/12/Spotify-logotipo.jpg" width="100" height="40" alt="">
</div>
</header>


 <main>

  <div v-for="disc in discs" class="contorno-img">
        <span >
              <img  :src="disc.poster" width="160px" alt=""/>
              <div class="title">{{disc.title}}</div>
              <div class="author">{{disc.author}}</div>
              <div class="year">{{disc.year}}</div>
        </span>    
    </div>  

 </main>
</div>     
    
<script src="js/script.js"></script>
</body>
</html>