<?php 
$phones = [
    [ 
     'name' => 'Samsung Galaxy Note 20 Ultra',
     'img_url' =>'https://eshop.orange.jo/app-images/thumbs/0001115_samsung-galaxy-note-20-ultra_220.png',
    'rate' => '5',
    'brand' => 'Samsung',
    'price' => 'JOD 759.00',
    'is_out_of_stock' => '1'
    ],
    [ 
     'name' => 'INFINIX Zero 8',
     'img_url' =>'https://eshop.orange.jo/app-images/thumbs/0001278_infinix-zero-8_220.jpeg',
    'rate' => '0',
    'brand' => 'Infinix',
    'price' => 'JOD 205.00',
    'is_out_of_stock' => '1'
    ],
    [ 
     'name' => 'Apple iPhone 12 Pro',
     'img_url' =>'https://eshop.orange.jo/app-images/thumbs/0001495_apple-iphone-12-pro_220.jpeg',
    'rate' => '3',
    'brand' => 'Apple',
    'price' => 'JOD 973.00',
    'is_out_of_stock' => '1'

    ],
    [ 
     'name' => 'ITEL A48',
     'img_url' =>'https://eshop.orange.jo/app-images/thumbs/0001495_apple-iphone-12-pro_220.jpeg',
    'rate' => '0',
    'brand' => 'iTel',
    'price' => 'JOD 66.00',
    'is_out_of_stock' => '0'
    ],
    [ 
     'name' => 'Samsung Galaxy S21 Ultra',
     'img_url' =>'https://eshop.orange.jo/app-images/thumbs/0001485_samsung-galaxy-s21-ultra_220.jpeg',

    'rate' => '0',
    'brand' => 'Samsung',
    'price' => 'JOD 799.00',
    'is_out_of_stock' => '0'
    ],
    
    [ 
     'name' => 'Galaxy A52',
     'img_url' =>'https://eshop.orange.jo/app-images/thumbs/0002097_galaxy-a52_220.jpeg',
    'rate' => '0',
    'brand' => 'Samsung',
    'price' => 'JOD 267.00',
    'is_out_of_stock' => '1'
    ],
];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Phone | Orange Jordan E shop</title>
    <!-- Copyright © 2014 Monotype Imaging Inc. All rights reserved -->
<link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/orange-helvetica.min.css" rel="stylesheet" integrity="sha384-ARRzqgHDBP0PQzxQoJtvyNn7Q8QQYr0XT+RXUFEPkQqkTB6gi43ZiL035dKWdkZe" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-Di/KMIVcO9Z2MJO3EsrZebWTNrgJTrzEDwAplhM5XnCFQ1aDhRNWrp6CWvVcn00c" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
.card-img-top{
    width:25%;
    height:150px;
    margin-left:37%;
    margin-top:20px
}
.card-brand{
    font-size:small;
    color:#808080;
    margin-top:-20px;
}
.card-title{
    font-size:3.5vh;
    font-weight: 1000;
    margin-top:20px;

}
.OutOfStock{
    width:18%;
    margin-top:-150px;
    margin-bottom:70px;
    margin-left:15px;
}
.fa.fa-star{
    color:#808080;
    margin-top:10px;
}
.smallImg{
    float:right;
    width:10%;
    margin-top:-12px;
}
.details{
    padding-top:20px;
}
hr{
    color:#808080;
}
.price{
    font-weight:1000;
    color: #FFA500;
    font-size:larger;
}
.buttons{
    margin-top:20px;
    margin-left:20px;
}
.btn.btn-info{
    width:75%;
}
.btn.btn-secondary{
    width:15%;
}
#orange{
    color: #FFA500;

}
</style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://boosted.orange.com/docs/5.1/assets/brand/orange-logo.svg" width="50" height="50" role="img" alt="Boosted" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>




  <!-- ------------------------product-------------------- -->
  <div class="container" style="margin-top:20px;">
<div class="row row-cols-1 row-cols-md-3 g-4">
  <?php for($i=0; $i<count($phones); $i++){?>

  <div class="col">
    <div class="card">
      <img src="<?php echo $phones[$i]['img_url'] ?>" class="card-img-top" alt="...">
      <?php $stock = $phones[$i]['is_out_of_stock'];
            if ($stock=='1'){?>
      <img src="images/Sold-Out-PNG-Picture.png" alt="" class="OutOfStock">
      <?php } ?>
      <div class="card-body">
      <h6 class="card-brand"><?php echo $phones[$i]['brand'] ?></h6>
        <h3 class="card-title"><?php echo $phones[$i]['name'] ?></h3>
        <div class="rating">
        <?php
             $rateStarsNum = $phones[$i]['rate'];
             if ($rateStarsNum==='0'){?>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <?php }?>
               <?php if ($rateStarsNum==='5'){?>
               <i class="fa fa-star" aria-hidden="true" id="orange"></i>
               <i class="fa fa-star" aria-hidden="true" id="orange"></i>
               <i class="fa fa-star" aria-hidden="true" id="orange"></i>
               <i class="fa fa-star" aria-hidden="true" id="orange"></i>
               <i class="fa fa-star" aria-hidden="true" id="orange"></i>
            <?php }?>
            <?php if ($rateStarsNum==='4'){?>
               <i class="fa fa-star" aria-hidden="true" id="orange"></i>
               <i class="fa fa-star" aria-hidden="true" id="orange"></i>
               <i class="fa fa-star" aria-hidden="true" id="orange"></i>
               <i class="fa fa-star" aria-hidden="true" id="orange"></i>
               <i class="fa fa-star" aria-hidden="true" ></i>
            <?php }?>
            <?php if ($rateStarsNum==='3'){?>
               <i class="fa fa-star" aria-hidden="true" id="orange"></i>
               <i class="fa fa-star" aria-hidden="true" id="orange"></i>
               <i class="fa fa-star" aria-hidden="true" id="orange"></i>
               <i class="fa fa-star" aria-hidden="true" ></i>
               <i class="fa fa-star" aria-hidden="true"></i>
            <?php }?>
            <?php if ($rateStarsNum==='2'){?>
               <i class="fa fa-star" aria-hidden="true" id="orange"></i>
               <i class="fa fa-star" aria-hidden="true" id="orange"></i>
               <i class="fa fa-star" aria-hidden="true" ></i>
               <i class="fa fa-star" aria-hidden="true" ></i>
               <i class="fa fa-star" aria-hidden="true" ></i>
            <?php }?>
            <?php if ($rateStarsNum==='1'){?>
               <i class="fa fa-star" aria-hidden="true" id="orange"></i>
               <i class="fa fa-star" aria-hidden="true" ></i>
               <i class="fa fa-star" aria-hidden="true" ></i>
               <i class="fa fa-star" aria-hidden="true" ></i>
               <i class="fa fa-star" aria-hidden="true" ></i>
            <?php }?>
            
        </div>
        <div class="details">
            <a href="#">View Details</a>
            <a href="#"><img src="images/Untitled.jpg" alt="" class="smallImg"></a>
        </div>
        <hr>
        <div class="price"><?php echo $phones[$i]['price'] ?></div>
        <div class="buttons">
        <button type="button" class="btn btn-info">Buy Now</button>
        <button type="button" class="btn btn-secondary"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
</button>

        </div>
        

      </div>
    </div>
  </div>
  <?php } ?>
  
  
<script src="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/js/boosted.bundle.min.js" integrity="sha384-5thbp4uNEqKgkl5m+rMBhqR+ZCs+3iAaLIghPWAgOv0VKvzGlYKR408MMbmCjmZF" crossorigin="anonymous"></script>
</body>
</html>
