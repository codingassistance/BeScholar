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
$sql="SELECT * FROM db d JOIN sheet s ON (d.class = s.class AND d.gender = s.gender AND d.caste = s.caste OR d.pwd = s.pwd OR d.religion = s.religion OR d.state = s.state)
 WHERE d.id = (SELECT MAX(id) FROM db)GROUP BY s.name, s.link";
// $sql="SELECT * FROM db d JOIN sheet s ON (d.class = s.class AND d.gender=s.gender AND d.caste=s.caste) OR d.pwd=s.pwd OR d.religion=s.religion 
// OR d.state=s.state WHERE d.id = (SELECT MAX(id) FROM db) GROUP BY s.name, s.link";

//$sql="SELECT * FROM db d,sheet s ORDER BY d.date";
// $sql = "SELECT * FROM sheet JOIN db ON sheet.id = db.id";
$result = $conn->query($sql);




if ($result->num_rows > 0) {
   
    
    while($row = $result->fetch_assoc()) {
        if($row["age"]>=18&&$row["income"]==1){
        
        $link=$row["LINK"];
        echo "Scholarship name: ".$row["name"];
         echo "<br><a href='$link'>$link</a><br><br><br>";
        }
      else if($row["age"]<18&&$row["income"]==1){
            $link=$row["LINK"];
            echo "Scholarship name: ".$row["name"];
             echo "<br><a href='$link'>$link</a><br><br><br>";
            }
            else if($row["age"]>=18&&$row["income"]==2){
                $link=$row["LINK"];
                echo "Scholarship name: ".$row["name"];
                 echo "<br><a href='$link'>$link</a><br><br><br>";
                }
              else if($row["age"]<18&&$row["income"]==2){
                    $link=$row["LINK"];
                    echo "Scholarship name: ".$row["name"];
                     echo "<br><a href='$link'>$link</a><br><br><br>";
                    } else if($row["age"]>=18&&$row["income"]==3){
                        $link=$row["LINK"];
                        echo "Scholarship name: ".$row["name"];
                         echo "<br><a href='$link'>$link</a><br><br><br>";
                        }
                      else if($row["age"]<18&&$row["income"]==3){
                            $link=$row["LINK"];
                            echo "Scholarship name: ".$row["name"];
                             echo "<br><a href='$link'>$link</a><br><br><br>";
                            } else if($row["age"]>=18&&$row["income"]==4){
                                $link=$row["LINK"];
                                echo "Scholarship name: ".$row["name"];
                                 echo "<br><a href='$link'>$link</a><br><br><br>";
                                }
                              else if($row["age"]<18&&$row["income"]==4){
                                    $link=$row["LINK"];
                                    echo "Scholarship name: ".$row["name"];
                                     echo "<br><a href='$link'>$link</a><br><br><br>";
                                    } else if($row["age"]>=18&&$row["income"]==5){
                                        $link=$row["LINK"];
                                        echo "Scholarship name: ".$row["name"];
                                         echo "<br><a href='$link'>$link</a><br><br><br>";
                                        }
                                      else if($row["age"]<18&&$row["income"]==5){
                                            $link=$row["LINK"];
                                            echo "Scholarship name: ".$row["name"];
                                             echo "<br><a href='$link'>$link</a><br><br><br>";
                                            } else if($row["age"]>=18&&$row["income"]==6){
                                                $link=$row["LINK"];
                                                echo "Scholarship name: ".$row["name"];
                                                 echo "<br><a href='$link'>$link</a><br><br><br>";
                                                }
                                              else if($row["age"]<18&&$row["income"]===6){
                                                    $link=$row["LINK"];
                                                    echo "Scholarship name: ".$row["name"];
                                                     echo "<br><a href='$link'>$link</a><br><br><br>";
                                                    }
                                                    else if($row["age"]>=18&&$row["income"]==7){
                                                        $link=$row["LINK"];
                                                        echo "Scholarship name: ".$row["name"];
                                                         echo "<br><a href='$link'>$link</a><br><br><br>";
                                                        }
                                                      else if($row["age"]<18&&$row["income"]==7){
                                                            $link=$row["LINK"];
                                                            echo "Scholarship name: ".$row["name"];
                                                             echo "<br><a href='$link'>$link</a><br><br><br>";
                                                            } else if($row["age"]>=18&&$row["income"]==8){
                                                                $link=$row["LINK"];
                                                                echo "Scholarship name: ".$row["name"];
                                                                 echo "<br><a href='$link'>$link</a><br><br><br>";
                                                                }
                                                              else if($row["age"]<18&&$row["income"]==8){
                                                                    $link=$row["LINK"];
                                                                    echo "Scholarship name: ".$row["name"];
                                                                     echo "<br><a href='$link'>$link</a><br><br><br>";
                                                                    } else if($row["age"]>=18&&$row["income"]==9){
                                                                        $link=$row["LINK"];
                                                                        echo "Scholarship name: ".$row["name"];
                                                                         echo "<br><a href='$link'>$link</a><br><br><br>";
                                                                        }
                                                                      else if($row["age"]<18&&$row["income"]==9){
                                                                            $link=$row["LINK"];
                                                                            echo "Scholarship name: ".$row["name"];
                                                                             echo "<br><a href='$link'>$link</a><br><br><br>";
                                                                            }
    
        
        
           
    }


} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>