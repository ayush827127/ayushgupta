<?php
// if (isset($_post['name'])) {
$server = "127.0.0.1";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if (!$con) {
die("connection to the database failed due to " . mysqli_connect_error());
}

// echo "Success connecting to the db";

$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];
$mobile = $_POST['mobile']; 
$email = $_POST['email'];

// $sql = "INSERT INTO `trip` . `trip` ('name', 'age' , 'address', 'mobile', 'email' ) VALUES ('$name' , '$age' , '$address' , '$mobile', '$email');";

$sql = "INSERT INTO `trip` . `trip` ( `name`, `age`, `address`, `mobile`, `email`) VALUES ( '$name' , '$age' , '$address' , '$mobile', '$email');";

// echo $sql;
if ($con->query($sql) == true ) {
 echo "Successfully inserted";
}
else {
    echo "ERROR: $sql <br> $con->error";
}
$con->close();

// }
// echo " Please fill the form  ";
?>