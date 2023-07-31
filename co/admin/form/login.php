<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
*{
    margin: 0%;
    padding: 0%; 
}   
body{
    background-image:url("po.jpg") ;
    background-size: cover;
}
.container{
    width: 350px;
    height: 400px;
    text-align: center;
    color: aliceblue;
    background-color:black;
    margin-left: 46%;
    margin-top: 6%;
    border-radius: 5%;
      
}
.container h1{
    font-size: 36px;
    color: aqua;
    margin-left: 60px
}
.container .text{
    position: relative;
    top: 7%;

}
.tech{
    border: none;
    margin-top: 10%;
    background-color: black;
    border-bottom: 3px solid white;
    width: 250px;
    font-size: 22px;
    outline: none;
    color: white;

}
.pink{
    border: none;
    margin-top: 10%;
    background-color: black;
    border-bottom: 3px solid white;
    width:250px ;
    font-size:22px ;
    outline: none;
    color: white;
}
.container .t{
    width: 150px;
}
p{
    margin-top: 15px;
    font-size: 20px;
    color: aliceblue;
}
p span{
    color: aqua;
    margin-left: 50px;
}
span a{
    text-decoration: none;
}
.text button{
    width: 200px; 
    margin-top: 25px;
    height: 44px;
    border: 15px;
    background-color: aqua;
    color:black;
    font-size: 22px;
    border-radius: 25px;
}
button:hover{
    border: 3px solid aqua;
    color: white;
    font-size: 20px;
    background-color: black;
    cursor: pointer;

}
p a{
    color: aliceblue;
    text-decoration: none;
}
a:hover{
    color: aqua;
    cursor: pointer;
}
</style>
 </head>
 <body>
    <form action="loginfu.php" method="POST">
    <div class="container">
        <div class="text">
            <h1 class="t">Login</h1>
            <input type="text" class="tech" name="Username" placeholder="Enter Username">
            <input type="password" class="pink" name="Userpassword" placeholder="Enter Password">
            <br>
           
            <button name="submitt">Login</button> 
            
        </div>
    </div>
     </form>
 </body>
 </html>