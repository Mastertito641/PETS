<?php
include("../config/connectionDB.php");
$email=$_POST['email'];
$password=md5($_POST['passwd']);

$sql="SELECT * FROM users WHERE email='$email' AND password='$password'"; 
$result= $conn->query($sql);
if($result->num_rows>0){
   // echo"the users exist";
   header("Location:http://127.0.0.1/PETS/front/home.html");
   
}else{
    echo"<script>alert('user wasnt created succesfully ')</script>";
    header('refresh:0;url=http://127.0.0.1/PETS/front/login.html'); 

}
?>
