<?php include 'nav.php';?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $username=$_POST['username'];
    $password=$_POST['password'];

if ($username=="admin" && $password=="admin123")
{
    echo"<div class='alert alert-success' role='alert'>
  A simple success alert—check it out!
</div>";
header("location:as.php");

}
else
{
  
    header("location:alogin.php"); 
     echo"<div class='alert alert-danger' role='alert'>
  A simple danger alert—check it out!
</div>";
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> index</title>
    
</head>
<style>
    *{
        margin: 0px;
    }
    .al{
      
        justify-content: center;
        height: 900px;
    }
    .al img{
        opacity: 0.7;
        position: absolute;
        height: 900px;
        width: 100%;
        z-index: -3;
    } 
    .al h1{
        padding-top: 100px;
        font-family:  Arial, sans-serif;
    }
     table{
        background-color: gray;
        color: black;
        margin-top: 100px;
        height: 200px;
        width: 150px;
        justify-content: center;
        font-size: 30px;
        position: relative;
        border-color:black;
        z-index: 2;
        opacity: 0.8;
    
    }
    table:hover{
        opacity: 1;
        height: 30px;
        width: 450px;
    }
    input{
        height: 40px;
        width: 200px;
        font-size: 40px;
    }
    .al button{
        height: 40px;
        width: 70px;
        background-color: cadetblue;
        border-radius: 15px;
    }
 </style>
<body>
    <div class="al">
        <img src="img/home.jpg">
            <center>
                <form action="alogin.php" method="post">
                <table border="5">
                    <h1> ADMIN LOGIN</h1>
                <tr><th>username:-</th> <td><input type="text" name="username"></td></tr>
               <tr> <th>password:-</th><td><input type="text" name="password"></td></tr>
                <tr><th><button type="submit"> submit</button></th><td><button type="reset"> reset</button></td></tr>
            </table>
                </form>
        </center>
    
    </div>
</body>

</html>
<?php include 'aboutas.php'?>
<?php include 'f.php'?>