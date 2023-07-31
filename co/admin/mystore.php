<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <!-- bootstrap link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    header{
        font-family: 'Roboto', sans-serif;
        width: 100%;
        height: 100vh;
        position: relative;
        
    }
    nav{
        width: 100%;
        height: 100px;
        display: flex; 
        justify-content: space-between;
        align-items:center;
        padding: 0px 100px;
        font-family: 'Roboto', sans-serif;
    }    
    .logo{
        font-size: 35px;
        color: #222f3e;
        padding-left:0% ;
        font-family: 'Crimson Text', serif;   
   }
   .menu a{
       text-decoration: none;
       padding: 10px 20px;
       font-size: 20px;
       color: black; 
   }
    .menu a:last-child{
        background: #297aec;
        border-radius:8px ;
        letter-spacing: 2px;
        color: white;
    }





    .h-text{
        max-width: 500px;
        position:absolute;
        top: 25%;
        left: 15%;
    }
    .h-text h1{
      font-size: 3.5em;
      color: rgb(16, 15, 15);
      font-family: 'Crimson Text', serif;
     }
    
    .h-text p{
      font-size: 20px;
       margin-bottom: 30px;
       font-family: Arial, Helvetica, sans-serif;
    }
    .h-text a{
        text-decoration: none;
        background-color: #200459;
        color: aliceblue;
        font-size:20px;
        padding: 10px 20px;
        border-radius: 8px;
        font-family: Arial, Helvetica, sans-serif;
    }
    #is{
        background: transparent;
        color:#200459 ;
        box-shadow:2px 0px 0px grey ;
    }


    #im{
        width: 600px;
        height: 90%;
        position: absolute;
        right: 12%;
        top: 8%; 
        z-index: -1;
        border-radius: 10%;
        background:transparent;
        
    }
</style>
</head>
<?php
session_start();
if(!$_SESSION['admin']){
    header("location:form/login.php");
}

?>
<body>
    <header>
        <nav>
            <div class="logo"><b> JustKart</b></div>
            <div class="menu">
            <!-- <a href="#"><b>Portfolio</b></a> -->
            <a href="#"><b>Hello,<?php   echo $_SESSION['admin']; ?>
            </b></a>
            <a href="#"><b>UserPanel</b></a>
            <a href="form/logout.php"><b>Logout</b></a>    
            </div>
        </nav>
        <div class="h-text ">
            <h1>Hi,This is the dashboard <br>of the site.... </h1>
            <p>
              I'm glad you're here! check out user account and post products here..
               </p>
            <a href="product/index.php">Add Post</a>
            <a href="#"  id="is">User</a>
          </div>
          <img src="ps.png" alt="" id="im" class="animate__animated animate__slideInLeft">
          
    </header>
</body>
</html>