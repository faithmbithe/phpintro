<?php
// $link=mysqli_connect("localhost","root","","motor");


if (isset ($_POST["submit"])){
$firstname = $_POST["firstname"];
$secondname = $_POST["secondname"];
$emailaddress = $_POST["email"];
$phonenumber = $_POST["pnumber"];


echo "First Name is $firstname <br>";
echo "Second Name is $secondname <br>";
echo "Your Email is $emailaddress <br>";
echo "Your Phone Number is $phonenumber <br>";

// $sql = "INSERT INTO `motor`(`ID`, `firstname`, `secondname`, `email`, `phonenumber`)
//  VALUES ('$firstname','$secondname','$emailaddress','$phonenumber')";
//  $result = mysqli_query($link, $sql);
}
 
// if($result){
//     {
//         echo "Data added to the database";
//     } 
//     else{
//     echo "Error adding data";
//     }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
    <form action="postmethod.php" method="post">
        <h3>Fill In This Form</h3>
<div>
    <label for="">First Name</label>
    <input type="text" name="firstname" required>
</div>
<br>
<div>
    <label for="">Second Name</label>
    <input type="text" name="secondname" required>
</div>
<br>
<div>
    <label for="">Email Address</label>
    <input type="email" name="email" required>
</div>
<br>
<div>
    <label for="">Phone Number</label>
    <input type="tel" name="pnumber" required>
</div>
<br>


<div>
    <input type="submit" name="submit" value="SUBMIT DATA">
    <a href="select.php">VIEW THE DATA</a>
</div>


    </form>
</body>
