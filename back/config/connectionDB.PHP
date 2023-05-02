<?php
$host="127.0.0.1";
$username="root";
$password="";
$dbname="pets";
$port=3306;

//create connection
$conn = new mysqli($host,$username,$password,$dbname,$port);

//check connection
if($conn->connect_error){
    echo "Connection Failed ".$conn->connect_error;
} else{
    echo"Connection Succesfuly";
}

?>