<?php  include 'nav.php';?>
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
     aside{
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
    aside:hover{
        opacity: 1;
        height: 1000px;
        width: 20%px;
    }
    input{
        height: 40px;
        width: 200px;
        font-size: 40px;
    }
    .as button{
        justify-content: center;
        margin-left: 90%;
        margin-top: 10px;
    
        font-size: 60px;
        height: 90px;
        width: 150px;
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
    <button ><a href="op.php" > options-></a></button>
    <div class="o">
        <img src="img/o.jpg">
     </div>
    
    
    </div>
</body>

</html>
<?php include 'aboutas.php'?>
<?php include 'f.php'?>