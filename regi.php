
    <?php include 'nav.php';
    session_start();
    ?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{   
    include 'conn.php';
    
    $name=$_POST['name'];
    $mob=$_POST['mob'];
    $branch=$_POST['branch'];
    $year=$_POST['year'];
    $email=$_POST['email'];
    $idphoto=$_POST['idphoto'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="insert into regi (name,mob,branch,year,email,idphoto,username,password)
    value('$name','$mob','$branch','$year','$email','idphoto','$username','$password')";
    $r=mysqli_query($conn,$sql);

if ($r)
{
    echo"<div class='alert alert-success' role='alert'>
plz frist login here
</div>";
session_start();
$_SESSION['name']=$name;
header("location:slogin.php");

}
else
{
  
    header("location:regi.php"); 
     echo"<div class='alert alert-danger' role='alert'>
  plz feel the all deteils !
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
        height: 500px;
        width: 550px;
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
    .sl button:hover{
        background-color: green;
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
                <form action="regi.php" method="post">
                <table border="5">
                    <h1> STUDENT REGISTERED </h1>
                    <tr><th>full name:-</th> <td><input type="text" name="name" required></td></tr>
                    <tr> <th>mobno:-</th><td><input type="text" name="mob"required></td></tr>
                    <tr><th>branch:-</th> <td><input type="text" name="branch"required></td></tr>
                    <tr> <th>clg year:-</th><td><input type="text" name="year"required></td></tr>
                    <tr><th>email:-</th> <td><input type="text" name="email"required></td></tr>
                    <tr> <th>idphoto:-</th><td><input type="file" name="idphoto"required ></td></tr>
                <tr><th>username:-</th> <td><input type="text" name="username"required></td></tr>
               <tr> <th>password:-</th><td><input type="text" name="password"required></td></tr>
                <tr><th><button type="submit"> submit</button></th><td><button type="reset"> reset</button></td></tr>
               

            </table>
                </form>
        </center>
    
    </div>
</body>

</html>
<?php include 'aboutas.php'?>
<?php include 'f.php'?>