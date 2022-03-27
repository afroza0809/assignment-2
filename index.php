<?php 

include_once "./info.php";
include_once "./product.php";




?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data structure</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    

<div class="container my-5">

 <div class="row">
     <?php foreach($devs as $dev): ?>
       
        <div class = "col-md-3 my-2">

                  <div class="card">
                      <img style="height: 350px;object-fit:cover;" src = "<?php echo $dev['photo']; ?>" alt=""
                      class = "card-img" >

                      <div class="card-body">

                      <h2><?php echo $dev['name']; ?></h2>
                      <h3><?php echo $dev['age']; ?></h3>
                      <h4><?php echo $dev['skill']; ?></h4>
                      <p><?php echo $dev['desc']; ?></p>

                    
                      </div>
                  </div>

        </div>


        <?php endforeach; ?>
 </div>

</div>

<div class="container my-5">

 <div class="row">
     <?php foreach($products as $product): ?>
       
        <div class = "col-md-3 my-2">

                  <div class="card">
                      <img style="height: 350px;object-fit:cover;" src = "<?php echo $product['photo']; ?>" alt=""
                      class = "card-img" >

                      <div class="card-body">

                      <h2><?php echo $product['name']; ?></h2>
                      <h3><?php echo $product['price']; ?></h3>
                      <p><?php echo $product['desc']; ?></p>

                    
                      </div>
                  </div>

        </div>


        <?php endforeach; ?>
 </div>

</div>



</body>
</html>