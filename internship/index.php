
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        if(isset($_POST['name'])){
            // Set connection variables
            $server = "localhost";
            $username = "root";
            $password = "";
        
            // Create a database connection
            $con = mysqli_connect($server, $username, $password);
        
            // Check for connection success
            if(!$con){
                die("connection to this database failed due to" . mysqli_connect_error());
            }
           else{
             echo "Success connecting to the db";}
            // echo $_POST['SLNO'];
            print_r($_POST);
        
        //     // Collect post variables
            $id=$_POST['id'];
            $name = $_POST['name'];
            $age = $_POST['age'];
            $class=$_POST['class'];
            $gender = $_POST['gender'];
            $religion = $_POST['religion'];
            $caste = $_POST['caste'];
            $state=$_POST['state'];
            $income = $_POST['income'];
            $pwd = $_POST['pwd'];
        
           // echo $SLNO.$Name;
           
           $sql="INSERT INTO `scholarship`.`db` (`id`, `name`, `age`, `class`, `gender`, `religion`, `caste`, `state`, `income`, `pwd`, `date`) VALUES ('$id', '$name', '$age', '$class', '$gender', '$religion', '$caste', '$state', '$income', '$pwd', current_timestamp());";
          // $sql="INSERT INTO `scholarship`.`scholarship` (`id`, `name`, `age`, `class`, `gender`, `religion`, `caste`, `state`, `income`, `pwd`, `date`) VALUES ('$id', '$name', '$age', '$class', '$gender', '$religion', '$caste', '$state', '$income','$pwd', current_timestamp());";
           echo $sql;
          if($con->query($sql)==true){
             // echo"success";
          }
          else{
             // echo"error:$sql<br>$con->error";
          }
          $con->close();

              
        }
       
    
    ?>
    
