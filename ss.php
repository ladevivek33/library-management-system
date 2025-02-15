<?php  include 'nav.php'; 
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
    .as{
      
        justify-content: center;
        height: 900px;
    }
    .as img{

        opacity: 0.7;
        position: absolute;
        height: 900px;
        width: 100%;
        z-index: -3;
    }
    .as img:hover{
        opacity: 1;
    } 
    .as h1{
        padding-top: 100px;
        font-family:  Arial, sans-serif;
    }
    .aop aside{
      text-align: center;
        background-color: darkolivegreen;
        color: black;
    margin-right: 100px;
        height: 700px;
        width: 20%;
        justify-content: center;
        font-size: 30px;
        position: relative;
        border-color:black;
        z-index: 2;
        opacity: 0.8;
    
    }
    .aop aside:hover{
        opacity: 1;
        height: 700px;
        width: 20%;
    }
    input{
        height: 40px;
        width: 200px;
        font-size: 40px;
    }
    .aop button{
        justify-content: center;
       
        
        font-size: 60px;
        height: 100px;
        width: 200px;
        background-color: cadetblue;
        border-radius: 15px;
    }
    .o img{
        margin-top:100px ;
        padding: 60px;
        opacity: 1;
        height: 500px;
        width: 650px;
        opacity: 2;
    }
    
 </style>
<body>
    <div class="as">
    <img src="img/home.jpg">
    <h1>Welcome, <?php  session_start(); 
    echo $_SESSION['username']; ?>!</h1>
    <div class="o"> 
      
        <img src="img/o.jpg">  
    <div class="aop"align="right">
    <aside>
 
    <h2> options</h2>
    <button><a href="viweb.php"> VIWE ALL BOOK</a></button>
 
    </aside>
    </div>
     </div>
    
    
    </div>
</body>

</html>
<?php include 'aboutas.php'?>
<?php include 'f.php'?>