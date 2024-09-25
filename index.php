<?php

if(isset($_POST['name']))
{
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con)
{
    die("connection to this database failed due to".mysqli_connect_error());
}
//echo "success connecting to the db";

$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql =  "INSERT INTO `trip`.`trip1` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES 
('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

//echo $sql;

if($con->query($sql) == true){
    //echo "Successfully inserted";
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con>error";
}

$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto|Sriracha&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

</head>
<body>
    <img class="IIT" src="IIT.jpeg" alt="IIT Khargpur">
    <div class="container">
        <h1> Welcome to IIT Khargpur US Trip form</h1>
        <p>Enter your deatils to confirm your participation in the trip.</p> 
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for
             the US trip</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age"   placeholder="Enter your age">
            <input type="gender" name="gender" id="gender"   placeholder="Enter your gender">
            <input type="email" name="email" id="email"   placeholder="Enter your email">
            <input type="phone" name="phone" id="phone"   placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="20" rows="8" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->
        </form>
    </div>  
    <script src="index.js"></script>
    s
</body>
</html>

