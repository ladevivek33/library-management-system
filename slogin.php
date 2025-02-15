<?php include 'nav.php'?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{   
    include 'conn.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from regi where username='$username' and  password='$password'";
    $r=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($r);
if ($num==1)
{    
  session_start();
  $_SESSION['username']=$username;
  
    echo"<div class='alert alert-success' role='alert'>
  A simple success alert—check it out!
</div>";
header("location:ss.php");

}
else
{
  
    header("location:slogin.php"); 
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
    .sl{
      
        justify-content: center;
        height: 900px;
    }
    .sl img{
        opacity: 0.7;
        position: absolute;
        height: 900px;
        width: 100%;
        z-index: -3;
    } 
    .sl h1{
        padding-top: 100px;
        font-family:  Arial, sans-serif;
    }
     table{
        background-color: gray;
        opacity: 0.8;
        color: black;
        margin-top: 100px;
        height: 200px;
        width: 350px;
        justify-content: center;
        font-size: 30px;
        position: relative;
        border-color:black;
        z-index: 2;
    
    }
    table:hover{
        opacity: 1;
        height: 30px;
        width: 450px;
    }
    input{
        height: 40px;
        width: 250px;
        font-size: 40px;
    }
    .sl button{
        height: 40px;
        width: 70px;
        background-color: cadetblue;
        border-radius: 15px;
    }
    .sl a{
        color: black;
        font-size: 40px;

    }
 </style>
<body>
    <div class="sl">
        <img src="img/home.jpg">
            <center>
                <form action="slogin.php" method="post">
                <table border="5">
                    <h1> STUDENT LOGIN</h1>
                <tr><th>username:-</th> <td><input type="text" name="username"></td></tr>
               <tr> <th>password:-</th><td><input type="text" name="password"></td></tr>
                <tr><th><button type="submit"> submit</button></th><td><button type="reset"> reset</button></td></tr>
                <tr><td><a href="regi.php"> new regi </a></td></tr>

            </table>
                </form>
        </center>
    
    </div>
</body>

</html>
<?php include 'aboutas.php'?>
<?php include 'f.php'?>