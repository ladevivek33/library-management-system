<?php include 'nav.php';?>

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
        height: 500px;
        width: 950px;
        justify-content: center;
        font-size: 30px;
        position: relative;
        border-color:black;
        z-index: 2;
        opacity: 0.8;
    
    }
    table:hover{
        opacity: 1;
        height: 500px;
        width: 1050px;
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
     
     <div class="b">
     <center>
           <?php 
           include 'conn.php';

         
// SQL query to fetch data
$sql = "SELECT * FROM book"; // Change to your table name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='2' >
            <tr>
                <th>id</th>
                <th>book name</th>
                <th>Athor name</th>
                 <th>book subject</th>
                <th> book img </th>
            </tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td >" . $row["id"] . "</td>
                <td>" . $row["bname"] . "</td>
                <td>" . $row["aname"] . "</td>
                   <td>" . $row["sub"] . "</td>
                 <td><img src='" . $row["bimg"] . "' width='100' height='100' alt='book img'></td>
              
              </tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

$conn->close();
?>
        </center>
     </div>
    </div>
</body>

</html>
<?php include 'aboutas.php'?>
<?php include 'f.php'?>