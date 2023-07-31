<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php
     include 'main.php';
    ?>
</head>
<body>
<div class="container-fluid">
  <div class="col-md-12">
    <div class="row">
      
      
      <!-- <h1 class='font-monospace my-3 text-center '>Bags</h1> -->
      <?php
     include 'config.php';
     $reco=mysqli_query($conn,'select *  from producttable');
     while($row=mysqli_fetch_array($reco)){
      $chec=$row['pcategory'];
      if($chec ==='Bag')
      {
       echo"
       <div class='col-md-4 col-lg-3 m-auto mb-3'>
       <div class='card m-auto ' style='width: 18rem;'>
       <img src='../admin/product/$row[pimage]' class='card-img-top' >
       <div class='card-body text-center'>
       <h5 class='card-title text-danger fw-bold fs-3'>$row[pname]</h5>
       <p class='card-text text-danger fw-bold fs-3'>Rs:$row[price]</p>
       <input type='number' value='min='1' max='30' placeholder='Quantity'><br><br>
       <input type='Submit' class='btn btn-primary text-center text-white w-80' value='Add to Cart'> 
       </div>
       </div>
       </div> 
       ";
      } 
      }
      ?>

</div>
</div>
</div>

</body>
</html>