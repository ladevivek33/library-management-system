<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav</title>
    
</head>
<style>
.nav{
    background-color: aliceblue;
    margin: 0;
    padding: 0;
    height: 180px;
    width: 100%;
}  
.head {
    padding: 30px;
    color:gray;
      font-size: 30px;
}
.head h1:hover{
    color: darkslategray;
    font-size: 50px;
}
.link {
   margin-left: 1700px;
}
.link button{
    height: 50px;
    margin-left: 20px;
    background-color: orange;
}
button a{
    font-size: 20px;
    color: white;
}
.nav button:hover{
        background-color: darkorange;
    }
</style>
<body>
    <div class="nav">
        <div class="head" style="display: inline-block;">
         <h1>  L M S </h1>
       
        </div>
        <div class="link" style="display: inline-block;">
           <button><a href="alogin.php">  librarian login</a></button> 
           <button><a href="slogin.php">  Student login</a></button>
           </div>
    </div>
</body>
</html>  