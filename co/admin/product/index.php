<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        *{
            margin: 0%;
            padding: 0%; 
        }   
        
        .cont{
            width: 350px;
            height: 500px;
            text-align: center;
            color: aliceblue;
            background-color:black;
            margin-left: 10%;
            margin-top: 6%;
            border-radius: 5%;
              
        }
        .cont h1{
            font-size: 36px;
            color: aqua;
            margin-left: 0px
        }
        .cont .text{
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
        .z{
            border: none;
            margin-top: 10%;
            background-color: black;
            border-bottom: 3px solid white;
            width:250px ;
            font-size:22px ;
            outline: none;
            color: white;
        }
        .text button{
            width: 200px; 
            height: 44px;
            border: 15px;
            margin-top:8% ;
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
        .text h3{
            font-size:22px;
            color: rgb(218, 241, 241);
            margin-left: 0px;
            margin-top: 20px;
        }

        #avatar{
            font-size: 15px;
            margin-left: 50px;
            margin-top: 14px;
            border-radius: 10px;
        }
        #im{
            width: 600px;
            height: 80%;
            position: absolute;
            right: 12%;
            top: 0%; 
            z-index: -1;
            border-radius: 10%;
            background:transparent;
            
        }
         
    </style>
</head>
<body>
    <form  action="insert.php"  method="POST"  enctype="multipart/form-data">
    <div class="cont">
        <div class="text">
            <h1 class="t">product  details:</h1>
            <input type="text" class="tech" placeholder="Enter product name" name="ppname">
            <input type="text" class="pink" placeholder="Enter price:" name="pprice">
            <input type="text"  class="z" placeholder="enter product category" name="ppselect"><br>
            <h3>Upload ur product image:</h3>

           <input type="file"
           id="avatar" name="ppimage"
           accept="image/png, image/jpeg">

            <button name="ppsubmit">upload</button> 
        </div>
    </div>    
    </form>
    <img src="ps.png" alt="" id="im" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">
                <table class="table  table-hover  border my-5">
                    <thead class="bg-dark text-white fs-5 text-center">
                        
                        <th>Id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>category</th>
                        <th>Delete</th>
                    </thead>
               
                    <tbody class="text-center">
                        <?php
include "config.php";
$re = mysqli_query($conn,"SELECT * FROM `producttable`") ; 
while($row=mysqli_fetch_array($re))

echo"


<tr>
<td>$row[id]</td>
<td>$row[pname]</td>
<td>$row[price]</td>
<td><img src='$row[pimage]' height='90px' width='200px'></td>
<td>$row[pcategory]</td>
<td><a href='' class='btn btn-danger'>Delete </a></td>
</tr>
"
?>
        </tbody>    
    </table>
    
                    </div>
                </div>
            </div>
    
</body>
</html>