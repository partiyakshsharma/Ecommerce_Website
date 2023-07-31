<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include 'main.php';
?>
    <div class="container-fluid">
        <div class="row justify-content-around">
          <div class="col-sm-12 col-md-6 col-lg-9">
<table class='table table-bordered text-center rounded'>
                <thead class='bg-primary text-white fs-5 rounded'>
                    <th>Index No.</th>
                    <th>product Name</th>
                    <th>quantity </th>
                    <th>Total</th>
                    <th>Update</th>
                    <th>Delete</th>
                    <!-- <th></th> -->
                </thead>
<tbody>
<?php
session_start();
// session_start();
$total=0;
if(isset($_SESSION['cart'])){
foreach($_SESSION['cart'] as $key=>$value){
$total=$value['price']+$value['Quantity'];
                             echo"
                             <form action='insert.php' method='post'>
                                <tr>
                                <td>$key</td>
                                <td>$value[productName]</td>
                                <td>$value[price]</td>
                                <td>$value[Quantity]</td>
                                <td>$total</td>
                                <td><button class='btn-primary'>update</td>
                                <td><button name='remove' class='btn-danger'>Delete</td>
                                </tr>
                                </form>

                             "; 
                            }
}

                       ?>
               </tbody>
            </table>
          </div>
        </div>
    </div>
</body>
</html>