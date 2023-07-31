<?php
if(isset($_POST['ppsubmit']))
      include 'config.php';
  $p_name=$_POST['ppname'];
  $p_price=$_POST['pprice'];
  $p_category=$_POST['ppselect'];
  $p_img=$_FILES['ppimage'];
  $img_loc=$_FILES['ppimage']['tmp_name'];
  $image_name=$_FILES['ppimage']['name'];
     $img_des="uploadimage/".$image_name;
  move_uploaded_file($img_loc,"uploadimage/".$image_name);


mysqli_query($conn,"INSERT INTO `producttable`(`pname`, `price`, `pimage`, `pcategory`) VALUES ('$p_name','$p_price','$img_des','$p_category')");
header("location:index.php");

?>
