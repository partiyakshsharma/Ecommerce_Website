<?php

$conn= mysqli_connect('localhost','root','','ecom');

$ad_m=$_POST['Username'];
$ad_p=$_POST['Userpassword'];

session_start();

$res=mysqli_query($conn,"SELECT * FROM `adm` where adminname='$ad_m' AND adminpassword='$ad_p'"); 
if (mysqli_num_rows($res)){
    $_SESSION['admin']=$ad_m;
    echo"
    <script>
    alert('Login Successfull');
    window.location.href='../mystore.php';
    </script>
    ";
}
else{
    echo"
    <script>
    alert('Invalid Login and Password');
    window.location.href='login.php';
    </script>
    ";
}
?>