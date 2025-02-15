<?php include 'nav.php';?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{   
    include 'conn.php';
    
    $bname=$_POST['bname'];
    $aname=$_POST['aname'];
    $sub=$_POST['sub'];
    $bimg=$_POST['bimg'];
   

    $sql="insert into book (bname,aname,sub,bimg)
    value('$bname','$aname','$sub','$bimg')";
    $r=mysqli_query($conn,$sql);

if ($r)
{
    echo"<div class='alert alert-success' role='alert'>
plz insert record
</div>";
header("location:op.php");

}
else
{
  
    header("location:addb.php"); 
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
    .addb {
      
        justify-content: center;
        height: 900px;
    }
    .addb img{
        opacity: 0.7;
        position: absolute;
        height: 900px;
        width: 100%;
        z-index: -3;
    } 
    .addb h1{
        padding-top: 100px;
        font-family:  Arial, sans-serif;
    }
     table{
        background-color: gray;
        color: black;
        margin-top: 100px;
        height: 300px;
        width: 550px;
        justify-content: center;
        font-size: 30px;
        position: relative;
        border-color:black;
        z-index: 2;
        opacity: 0.8;
    
    }
    table:hover{
        opacity: 1;
        height: 300px;
        width: 550px;
    }
    input{
        height: 40px;
        width: 200px;
        font-size: 40px;
    }
    .addb button{
        height: 40px;
        width: 70px;
        background-color: cadetblue;
        border-radius: 15px;
    }
 </style>
<body>
    <div class="addb">
        <img src="img/home.jpg">
            <center>
                <form action="addb.php" method="post">
                <table border="5">
                    <h1> ADD BOOK </h1>
                    <tr><th>BOOK NAME:-</th> <td><input type="text" name="bname"></td></tr>
                    <tr> <th>ATHOR NAME:-</th><td><input type="text" name="aname"></td></tr>
                <tr><th>SUBJECT:-</th> <td><input type="text" name="sub"></td></tr>
               <tr> <th>BOOK IMG-</th><td><input type="file" name="bimg"></td></tr>
               <tr><th><button type="submit"> submit</button></th><td><button type="reset"> reset</button></td></tr>

            </table>
                </form>
        </center>
    
    </div>
</body>

</html>
<?php include 'aboutas.php'?>
<?php include 'f.php'?>