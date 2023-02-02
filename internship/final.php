<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">  

</style>
<head>
   <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
<link rel="stylesheet" href="finaal.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>results</title>
</head>
<body>
<h1>RESULTS</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scholarship";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM db d,sheet s GROUP BY s.name,s.link ORDER BY d.date";

//$sql="SELECT * FROM db d,sheet s ORDER BY d.date";
// $sql = "SELECT * FROM sheet JOIN db ON sheet.id = db.id";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
   
    
    while($row = $result->fetch_assoc()) {
        if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "obc"|| $row["state"] == "yes"|| $row["income"] == "1"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

       else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "obc"|| $row["state"] == "no"|| $row["income"] == "1"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "sc"|| $row["state"] == "yes"|| $row["income"] == "1"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "st"|| $row["state"] == "yes"|| $row["income"] == "1"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "m"|| $row["state"] == "yes"|| $row["income"] == "1"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "g"|| $row["state"] == "yes"|| $row["income"] == "1"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

       else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "obc"|| $row["state"] == "yes"|| $row["income"] == "1"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "sc"|| $row["state"] == "yes"|| $row["income"] == "1"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "st"|| $row["state"] == "yes"|| $row["income"] == "1"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "m"|| $row["state"] == "yes"|| $row["income"] == "1"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "g"|| $row["state"] == "yes"|| $row["income"] == "1"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

      else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "obc"|| $row["state"] == "yes"|| $row["income"] == "2"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "sc"|| $row["state"] == "yes"|| $row["income"] == "2"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "st"|| $row["state"] == "yes"|| $row["income"] == "2"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "m"|| $row["state"] == "yes"|| $row["income"] == "2"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "g"|| $row["state"] == "yes"|| $row["income"] == "2"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

      else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "obc"|| $row["state"] == "yes"|| $row["income"] == "2"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "sc"|| $row["state"] == "yes"|| $row["income"] == "2"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "st"|| $row["state"] == "yes"|| $row["income"] == "2"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "m"|| $row["state"] == "yes"|| $row["income"] == "2"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "g"|| $row["state"] == "yes"|| $row["income"] == "2"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

       else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "obc"|| $row["state"] == "yes"|| $row["income"] == "3"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "sc"|| $row["state"] == "yes"|| $row["income"] == "3"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "st"|| $row["state"] == "yes"|| $row["income"] == "3"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "m"|| $row["state"] == "yes"|| $row["income"] == "3"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "g"|| $row["state"] == "yes"|| $row["income"] == "3"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

       else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "obc"|| $row["state"] == "yes"|| $row["income"] == "3"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "sc"|| $row["state"] == "yes"|| $row["income"] == "3"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "st"|| $row["state"] == "yes"|| $row["income"] == "3"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "m"|| $row["state"] == "yes"|| $row["income"] == "3"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "g"|| $row["state"] == "yes"|| $row["income"] == "3"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

       else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "obc"|| $row["state"] == "yes"|| $row["income"] == "4"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "sc"|| $row["state"] == "yes"|| $row["income"] == "4"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "st"|| $row["state"] == "yes"|| $row["income"] == "4"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "m"|| $row["state"] == "yes"|| $row["income"] == "4"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "g"|| $row["state"] == "yes"|| $row["income"] == "4"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "obc"|| $row["state"] == "yes"|| $row["income"] == "4"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "sc"|| $row["state"] == "yes"|| $row["income"] == "4"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "st"|| $row["state"] == "yes"|| $row["income"] == "4"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "m"|| $row["state"] == "yes"|| $row["income"] == "4"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "g"|| $row["state"] == "yes"|| $row["income"] == "4"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "obc"|| $row["state"] == "yes"|| $row["income"] == "5"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "sc"|| $row["state"] == "yes"|| $row["income"] == "5"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "st"|| $row["state"] == "yes"|| $row["income"] == "5"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "m"|| $row["state"] == "yes"|| $row["income"] == "5"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "g"|| $row["state"] == "yes"|| $row["income"] == "5"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "obc"|| $row["state"] == "yes"|| $row["income"] == "5"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "sc"|| $row["state"] == "yes"|| $row["income"] == "5"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "st"|| $row["state"] == "yes"|| $row["income"] == "5"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "m"|| $row["state"] == "yes"|| $row["income"] == "5"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "g"|| $row["state"] == "yes"|| $row["income"] == "5"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "obc"|| $row["state"] == "yes"|| $row["income"] == "6"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "sc"|| $row["state"] == "yes"|| $row["income"] == "6"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "st"|| $row["state"] == "yes"|| $row["income"] == "6"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "m"|| $row["state"] == "yes"|| $row["income"] == "6"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "g"|| $row["state"] == "yes"|| $row["income"] == "6"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "obc"|| $row["state"] == "yes"|| $row["income"] == "6"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "sc"|| $row["state"] == "yes"|| $row["income"] == "6"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "st"|| $row["state"] == "yes"|| $row["income"] == "6"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "m"|| $row["state"] == "yes"|| $row["income"] == "6"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "g"|| $row["state"] == "yes"|| $row["income"] == "6"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "obc"|| $row["state"] == "yes"|| $row["income"] == "7"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "sc"|| $row["state"] == "yes"|| $row["income"] == "7"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "st"|| $row["state"] == "yes"|| $row["income"] == "7"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "m"|| $row["state"] == "yes"|| $row["income"] == "7"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "g"|| $row["state"] == "yes"|| $row["income"] == "7"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "obc"|| $row["state"] == "yes"|| $row["income"] == "7"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "sc"|| $row["state"] == "yes"|| $row["income"] == "7"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "st"|| $row["state"] == "yes"|| $row["income"] == "7"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "m"|| $row["state"] == "yes"|| $row["income"] == "7"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "g"|| $row["state"] == "yes"|| $row["income"] == "7"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "obc"|| $row["state"] == "yes"|| $row["income"] == "8"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "sc"|| $row["state"] == "yes"|| $row["income"] == "8"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "st"|| $row["state"] == "yes"|| $row["income"] == "8"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "m"|| $row["state"] == "yes"|| $row["income"] == "8"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "g"|| $row["state"] == "yes"|| $row["income"] == "8"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "obc"|| $row["state"] == "yes"|| $row["income"] == "8"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

       

    else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "st"|| $row["state"] == "yes"|| $row["income"] == "8"|| $row["pwd"] == "yes") {
        $link=$row["LINK"];
        echo "Scholarship name: ".$row["name"];
        echo "<br><a href='$link'>$link</a><br><br><br>"
         ?>
    
        <?php   
    }

    else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "m"|| $row["state"] == "yes"|| $row["income"] == "8"|| $row["pwd"] == "yes") {
        $link=$row["LINK"];
        echo "Scholarship name: ".$row["name"];
        echo "<br><a href='$link'>$link</a><br><br><br>"
         ?>
    
        <?php   
    }

    else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "g"|| $row["state"] == "yes"|| $row["income"] == "8"|| $row["pwd"] == "yes") {
        $link=$row["LINK"];
        echo "Scholarship name: ".$row["name"];
        echo "<br><a href='$link'>$link</a><br><br><br>"
         ?>
    
        <?php   
    }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "obc"|| $row["state"] == "yes"|| $row["income"] == "9"|| $row["pwd"] == "no") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }
  


    else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "st"|| $row["state"] == "yes"|| $row["income"] == "9"|| $row["pwd"] == "no") {
        $link=$row["LINK"];
        echo "Scholarship name: ".$row["name"];
        echo "<br><a href='$link'>$link</a><br><br><br>"
         ?>
    
        <?php   
    }

    else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "m"|| $row["state"] == "yes"|| $row["income"] == "9"|| $row["pwd"] == "no") {
        $link=$row["LINK"];
        echo "Scholarship name: ".$row["name"];
        echo "<br><a href='$link'>$link</a><br><br><br>"
         ?>
    
        <?php   
    }

    else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "g"|| $row["state"] == "yes"|| $row["income"] == "9"|| $row["pwd"] == "no") {
        $link=$row["LINK"];
        echo "Scholarship name: ".$row["name"];
        echo "<br><a href='$link'>$link</a><br><br><br>"
         ?>
    
        <?php   
    }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "obc"|| $row["state"] == "yes"|| $row["income"] == "9"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }

        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "st"|| $row["state"] == "yes"|| $row["income"] == "9"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }
    
        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "m"|| $row["state"] == "yes"|| $row["income"] == "9"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }
    
        else if ($row["age"] >= 18 || $row["gender"] == "f"|| $row["class"] == "ug"|| $row["religion"] == "h"|| $row["caste"] == "g"|| $row["state"] == "yes"|| $row["income"] == "9"|| $row["pwd"] == "yes") {
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php   
        }
        
        else if($row["age"]<18||$row["gender"]=="f"||$row["religion"] == "h"){
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php 
        }

        else if($row["age"]<18||$row["gender"]=="f"||$row["religion"] != "h"){
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php 
        }

        else if($row["age"]<18||$row["gender"]!="f"||$row["religion"] != "h"){
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php 
        }
        else if($row["age"]>=18||$row["gender"]=="f"||$row["religion"] != "h"){
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php 
        }

        else if($row["age"]>=18||$row["gender"]!="f"){
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
            echo "<br><a href='$link'>$link</a><br><br><br>"
             ?>
        
            <?php 
        }

        
    }


} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>