<?php 

$servername = "localhost";
$username = "id12726383_nitincontact";
$password = "12345678";
$db = "id12726383_contact";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}




$name=$_POST['name'];


$email=$_POST['email'];


$message=$_POST['message'];


$to="nitesh9468038535@gmail.com";
$msg="name:".$name ."\n";
$msg="email:".$email ."\n";
$msg="message:".$message ."\n";
$header="nitin8950520748@gmail.com";
mail($to,'uhe',$msg,$header);


$ins="INSERT INTO `data`( `name`, `email`, `message`) VALUES ('$name','$email','$message')";
echo"$ins";
$run_product = mysqli_query($conn, $ins);
if($run_product==true){
	echo"sucessful";
}
echo"data is submi";
?> 