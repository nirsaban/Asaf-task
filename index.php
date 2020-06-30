<?php
$data = [
        0 => ['id'=>1,'image'=>'image.jpg','price'=>'500$','rate'=>5,'link'=>'http/slag123.com','name'=>'Kassau','offer'=>'red'],
        1 => ['id'=>2,'image'=>'image1.jpg','price'=>'250$','rate'=>3,'link'=>'http/slag456.com','name'=>'Cassino joi','offer'=>'green'],
        2 => ['id'=>3,'image'=>'images2.jpg','price'=>'2585$','rate'=>4,'link'=>'http/slag.com','name'=>'genselsis','offer'=>'red'],
        3 => ['id'=>2,'image'=>'images3.jpg','price'=>'250$','rate'=>4,'link'=>'http/slag456.com','name'=>'Cassino joi','offer'=>'green'],
        4 => ['id'=>3,'image'=>'image1.jpg','price'=>'2585$','rate'=>4,'link'=>'http/slag.com','name'=>'genselsis','offer'=>'green'],
        5 => ['id'=>2,'image'=>'image.jpg','price'=>'250$','rate'=>5,'link'=>'http/slag456.com','name'=>'Cassino joi','offer'=>'red'],
       

];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="containerr">

    <div class="top-nav">
    <ul>
    <li><a href="" style="color: white;">Fetured</a></li>
    <li><a href="">Top 10</a></li>
    <li><a href="">Packages</a></li>
    </ul>
    </div> 
   
    <div class="theme">
     <img src="cassino.jpg" alt="" class="theme-image">
    </div>
   
     <div class="strips">
      <?php foreach($data as $strip): ?> 
      <div class="strip">
      <div class="logo">
      <img src="<?= $strip['image'];?>" alt="" class="image">
      </div>
      <div class="content">
      <div class="price">
      100% up To <?= $strip['price']?> Bunus
      </div>
      <div class="rate">
      <span class="number"><?=$strip['rate']?></span>
      <div class="stars">
      <?php for($i = 0 ; $i < json_decode($strip['rate']); $i++): ?>
                    <i class="fa fa-star"></i>
                   <?php endfor?>
      </div>
      </div>
      <div class="name">
          <?= $strip['name'] ?>
      </div>

      </div>
      <div class="links">
      <div class="offer" style="color: <?=$strip['offer'] ?>;">
      NEW OFFER
      </div>
      <div class="btn btn-outline-primary  ">PLAY NOW</div>
      <a href="" class="read">Read Review</a>
      </div>
      
      </div>
      <?php endforeach;?>
      </div>
      
    </div>
</body>
</html>