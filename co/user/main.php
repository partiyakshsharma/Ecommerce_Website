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
    .unl{
        width: 100%;
        height: 100px;
        display: flex; 
        justify-content: space-between;
        align-items:center;
        padding: 0px 180px;
        font-family: 'Roboto', sans-serif;
        list-style: none;
    }
    .lap{
        text-decoration: none;
        padding: 10px 20px;
        font-size: 20px;
        color: black;
        background: #297aec;
        border-radius:8px ;
        letter-spacing: 2px;
        color: white;
    }

    .mob{
        text-decoration: none;
        padding: 10px 20px;
        font-size: 20px;
        color: black;
        background: #297aec;
        border-radius:8px ;
        letter-spacing: 2px;
        color: white;
    }
    .bag{
        text-decoration: none;
        padding: 10px 20px;
        font-size: 20px;
        color: black;
        background: #297aec;
        border-radius:8px ;
        letter-spacing: 2px;
        color: white;
    }
    .mens{
        text-decoration: none;
        padding: 10px 20px;
        font-size: 20px;
        color: black;
        background: #297aec;
        border-radius:8px ;
        letter-spacing: 2px;
        color: white;
    }
    .women{
        text-decoration: none;
        padding: 10px 20px;
        font-size: 20px;
        color: black;
        background: #c829ec;
        border-radius:8px ;
        letter-spacing: 2px;
        color: white;
    }

</style>
</head>

<body>
    <header>
        <nav>
            <div class="logo"><b> JustKart</b></div>
            <div class="menu">
            <!-- <a href="#"><b>Portfolio</b></a> -->
            <a href="">Home</a>
            <a href="#"><b>Hello,|
            </b></a>
            <a href="">Cart(0)</a>
            <a href='../admin/mystore.php'>Admin</a>
            <a href="#"><b>Login</b></a>

            </div>
        </nav>
        <div class="con">
            <ul class="unl">
                <li><a href="" class="lap">Laptop</a></li>
                <li><a href="" class="mob">Mobiles</a></li>
                <li><a href="" class="bag">Bags</a></li>
                <li><a href=""class="mens">mens fashion</a></li>
                <li><a href="" class="women "> woomen fashion</a></li>
            </ul>
        </div>
    </header>
</body>
</html>
</html>